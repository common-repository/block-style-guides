<?php

// Admin menu related functions

// @TODO: Class this up

add_action( 'admin_menu', 'bsg_add_admin_menu' );
add_action( 'admin_init', 'bsg_settings_init' );

function bsg_add_admin_menu() { 
	add_management_page( 'Block Style Guides for Gutenberg', 'Block Style Guides for Gutenberg', 'manage_options', 'block-style-guides-for-gutenberg', 'bsg_options_page' );
}

function bsg_settings_init() { 
	register_setting( 'bsg_plugin_page', 'bsg_post_types' );

	add_settings_section(
		'bsg_plugin_page_section', 
		'',
		'bsg_settings_section_callback', 
		'bsg_plugin_page'
	);

	add_settings_field( 
		'bsg_cpt_selection', 
		__( 'Which post types do you want to render these blocks on?', 'bsg' ), 
		'bsg_cpt_selection_render', 
		'bsg_plugin_page', 
		'bsg_plugin_page_section' 
	);
}

function bsg_cpt_selection_render() {
	$out = '';
	$builtin_cpts = array();
	$gutenbergable_cpts = array(); // If that's not a word, it should be
	$non_gutenbergable_cpts = array();
	$non_contentable_cpts = array(); // That one too
	$all_post_types = get_post_types(
		array(
			'public'	=> true,
		),
		'objects'
	);

	// Attachments are public but neither Gutenbergable nor contentable.
	unset( $all_post_types[ 'attachment' ] );

	foreach( $all_post_types as $cpt ) {
		if( $cpt->_builtin ) {
			$builtin_cpts[] = $cpt;
		} else if( ! post_type_supports( $cpt->name, 'editor' ) ) {
			$non_contentable_cpts[] = $cpt;
		} else if( ! $cpt->show_in_rest ) {
			$non_gutenbergable_cpts[] = $cpt;
		} else {
			$gutenbergable_cpts[] = $cpt;
		}
	}

	if( is_array( $builtin_cpts ) && ! empty( $builtin_cpts ) ) {
		$out .= '<h4>Built-in post types</h4>';
		$out .= '<p style="margin-bottom: 10px;">These post types are part of WordPress core.</p>';
		$out .= bsg_display_checkboxes( $builtin_cpts );
	}

	if( is_array( $gutenbergable_cpts ) && ! empty( $gutenbergable_cpts ) ) {
		$out .= '<h4>Custom post types</h4>';
		$out .= '<p style="margin-bottom: 10px;">These post types currently support the Gutenberg editor.</p>';
		$out .= bsg_display_checkboxes( $gutenbergable_cpts );
	}

	if( is_array( $non_gutenbergable_cpts ) && ! empty( $non_gutenbergable_cpts ) ) {
		$out .= '<h4>Custom post types with no Gutenberg support</h4>';
		$out .= '<p style="margin-bottom: 10px;">These posts types do not currently support the Gutenberg editor.  You can still create style guides for them to see what they will look like if/when they declare support.</p>';
		$out .= bsg_display_checkboxes( $non_gutenbergable_cpts );
	}

	if( is_array( $non_contentable_cpts ) && ! empty( $non_contentable_cpts ) ) {
		$out .= '<h4>Custom post types with no support for content</h4>';
		$out .= '<p style="margin-bottom: 10px;">These post types don\'t display <code>the_content</code> as part of their output.  You can still create style guides for them, but they likely won\'t display the style guides correctly or at all.</p>';
		$out .= bsg_display_checkboxes( $non_contentable_cpts );
	}

	echo $out;
}

function bsg_display_checkboxes( $cpts = array() ) {
	$out = '';
	$options = get_option( 'bsg_post_types' );

	if( ! is_array( $cpts ) || empty( $cpts ) ) {
		return;
	}

	foreach( $cpts as $cpt ) {
		if( isset( $options[ $cpt->name ] ) ) {
			$checked = $options[ $cpt->name ];
		} else {
			$checked = '';
		}

		ob_start();
		?>
<input class="bsg-cpt-type" data-cpt="<?php echo $cpt->name; ?>" type='checkbox' name='bsg_post_types[<?php echo $cpt->name; ?>]' id="bsg_post_types[<?php echo $cpt->name; ?>]" <?php checked( $checked, 1 ); ?> value='1'>
<label for='bsg_post_types[<?php echo $cpt->name; ?>]'><?php echo $cpt->label; ?></label>
<br />
		<?php
		$out .= ob_get_clean();
	}

	return $out;
}

function bsg_settings_section_callback() { 
	echo __( '<p>Style guides will be made for each of the selected custom post types.</p>', 'bsg' );
}

function bsg_options_page() {
	wp_enqueue_script( 'bsg-ajax' );
	wp_enqueue_script( 'json-form' );

	$script_params = array(
		'bsgAddNonce'		=> wp_create_nonce( 'bsg-add-nonce' ),
		'bsgDeleteNonce'	=> wp_create_nonce( 'bsg-delete-nonce' ),
	);
	
	wp_localize_script( 'bsg-ajax', 'bsgAjax', $script_params );

	?>
	<h2 class="bsg-title">Block Style Guides for Gutenberg</h2>
	<?php settings_errors(); ?>
	<form action='options.php' method='post' name="bsg-form" id="bsg-form">
		<?php
		settings_fields( 'bsg_plugin_page' );
		do_settings_sections( 'bsg_plugin_page' );
		submit_button( 'Save and Generate Posts' );
		?>
	</form>
	<p>If you want to delete all the posts created by this plugin, click the button below.</p>
	<button id="bsg-delete" class="button button-secondary">Delete all Block Style Guide posts</button>
	<?php
}

function bsg_add_settings_link( $links ) {
	$settings_link = '<a href="' . esc_url( get_admin_url( null, 'tools.php?page=gutenberg-block-style-guides' ) )  . '">' . __( 'Settings' ) . '</a>';
	array_unshift( $links, $settings_link );
	return $links;
}

add_filter( 'plugin_action_links_' . BSG_BASENAME, 'bsg_add_settings_link' );