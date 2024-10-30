<?php

function bsg_delete_posts() {

	check_ajax_referer( 'bsg-delete-nonce', 'bsgDeleteNonce' );

	$all_post_types = get_post_types(
		array(
			'public'	=> true,
		),
		'names'
	);

	$args = array(
		'posts_per_page'	=> '-1',
		'post_type'			=> $all_post_types,
		'meta_query'		=> array(
			array(
				'key'		=> 'created-by-bsg',
				'value'		=> true,
			),
		),
	);

	$query = new WP_Query( $args );

	if( $query->have_posts() ) {
		while( $query->have_posts() ) {
			$query->the_post();
			wp_delete_post( get_the_ID(), true );
		}
	}

	wp_die();
}

add_action( 'wp_ajax_bsg_delete_posts', 'bsg_delete_posts' );
add_action( 'wp_ajax_nopriv_bsg_delete_posts', 'bsg_delete_posts' );