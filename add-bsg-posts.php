<?php

function bsg_add_posts() {
	$error_messages = array();
	$some_posts_succeeded = false;
	$nonce = $_REQUEST[ 'bsgAddNonce' ];

	if( ! wp_verify_nonce( $nonce, 'bsg-add-nonce'  ) ) {
		// The JS expects the data payload to be an array
		wp_send_json_error( array( 'invalidNonce' => true ) );
	}

	$post_types = isset( $_POST[ 'selectedTypes' ] ) ? ( array ) $_POST[ 'selectedTypes' ] : array();

	$post_types = array_map( 'sanitize_text_field', $post_types );

	$class_templates = array(
		// Title of the page => Class with the markup for that page
		'Style Guide for Audio/Video Blocks'             => '\BSG\CoreWP\Audio_Video',
		'Style Guide for Columns Blocks'                 => '\BSG\CoreWP\Columns',
		'Style Guide for Covers Blocks'                  => '\BSG\CoreWP\Covers',
		'Style Guide for Galleries Blocks'               => '\BSG\CoreWP\Galleries',
		'Style Guide for Images Blocks'                  => '\BSG\CoreWP\Images',
		'Style Guide for Other Layouts Blocks'           => '\BSG\CoreWP\Other_Layouts',
		'Style Guide for Other Typographical Blocks'     => '\BSG\CoreWP\Other_Typographical',
		'Style Guide for Paragraphs and Header Blocks'   => '\BSG\CoreWP\Paragraphs_Headers',
		'Style Guide for Quotes and Pull Quotes Blocks'  => '\BSG\CoreWP\Quotes_Pullquotes',
		'Style Guide for Read More Blocks'               => '\BSG\CoreWP\Read_More',
		'Style Guide for Standard Widgets Blocks'        => '\BSG\CoreWP\Standard_Widgets',
	);

	if( function_exists( 'atomic_blocks_loader' ) ) {
		$class_templates[ 'Style Guide for Atomic Blocks' ] = '\BSG\AtomicBlocks\AtomicBlocks';
	}

	if ( class_exists( 'Block_Gallery' ) ) {
		$class_templates[ 'Style Guide for Block Gallery Blocks' ] = '\BSG\BlockGallery\BlockGallery';
	}

	if ( class_exists( 'CoBlocks' ) ) {
		$class_templates[ 'Style Guide for CoBlocks' ] = '\BSG\CoBlocks\CoBlocks';
	}

	// @TODO - Not ready for primetime yet, there's lotsa stuff in the Gutenberg markup to fix
	/*
	if ( class_exists( 'UAGB_Loader' ) ) {
		// Ultimate Addons has a lotta blocks, it gets multiple pages.
		
		$class_templates[ 'Style Guide for Ultimate Addons Typographical' ]        = '\BSG\UAGB\Typographical';
		$class_templates[ 'Style Guide for Ultimate Addons Columns and Sections' ] = '\BSG\UAGB\Columns_Sections';
		$class_templates[ 'Style Guide for Ultimate Addons Post Blocks' ]          = '\BSG\UAGB\Post_Blocks';
		$class_templates[ 'Style Guide for Ultimate Addons Other' ]                = '\BSG\UAGB\Other';
	}
	*/
	
	global $wpdb;

	foreach( $post_types as $post_type ) {
		foreach( $class_templates as $k => $v ) {

			/*
			 * The class should exist "on demand" due to
			 * autoloading, but if it doesn't, load the file
			 * directly using the same function that the auto-
			 * loader should have used.  You had one job,
			 * autoloader.  One job!
			 *
			 * @uses bsg_autoload( $class );
			 */

			if( ! class_exists( $v ) ) {
				bsg_autoload( $v );
			}

			// If it *still* doesn't exist, it just wasn't meant to be, man.
			if( ! class_exists( $v ) ) {
				$error_messages[ 'classDoesNotExist' ][] = $k;
				continue;
			}

			$slug = sanitize_title( $k, '', 'save' );

			// Does the post exist? If so, skip it
			if( $wpdb->get_row( "SELECT post_title FROM wp_posts WHERE post_title = '" . $k . "' AND post_type = '" . $post_type . "'", 'ARRAY_A' ) ) {
				$post_type_object = get_post_type_object( $post_type );
				$post_type_name = $post_type_object->labels->name;
				$error_messages[ 'postAlreadyExists' ][] = $post_type_name;
				continue;
			}

			$markup_obj = new $v;
			$markup = $markup_obj->markup;

			$create_post = array(
				'post_title'   => $k,
				'post_type'    => $post_type,
				'post_content' => $markup,
				'post_status'  => 'draft',
				'meta_input'   => array(
					'created-by-bsg' => true,
				)
			);

			$maybe_error = wp_insert_post( $create_post, true );

			if( is_wp_error( $maybe_error ) ) {
				$error_messages[ 'couldNotCreatePosts' ][] = $k;
			} else {
				// For success messages for the AJAX
				$some_posts_succeeded = true;
			}
		}
	}

	if( $error_messages ) {
		foreach( $error_messages as $k => $v ) {
			$unique_error_messages[ $k ] = array_values( array_unique( $v ) );
		}
	}

	if( empty( $unique_error_messages ) ) {
		wp_send_json_success( true );
	} else {
		if( $some_posts_succeeded ) {
			/*
			 * Some posts succeeded, so send a success payload
			 * with an array of the errors.
			 */
			wp_send_json_success( $unique_error_messages );
		} else {
			// No posts succeeded.  Tell 'em why, Bob.
			wp_send_json_error( $unique_error_messages );
		}
	}

	/*
	 * This is an AJAX call, so it dies at the end. (May
	 * be superflous what with the wp_send_json_success()
	 * call above, but better safe than sorry.)
	 */

	wp_die();
}

// Gotsta gotta be logged in, so no `nopriv` hook needed.
add_action( 'wp_ajax_bsg_add_posts', 'bsg_add_posts' );