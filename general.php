<?php

function bsg_enqueue_scripts() {
	wp_register_script( 'bsg-ajax', plugin_dir_url( __FILE__ ) . '/js/bsg.js', array( 'jquery', 'jquery-form' ), false, true );
}

add_action( 'admin_enqueue_scripts', 'bsg_enqueue_scripts' );