<?php

/*
 * Autoload our classes as they're called.
 *
 * Big ups to Justin Tadlock for the starting point for this function.
 *
 * @since 1.0.0
 *
 * @param string $class Provided from spl_autoload_register
 * @return null Loads the class, but returns nothing.  
 *
 * @link http://justintadlock.com/archives/2018/12/14/php-namespaces-for-wordpress-developers (aforementioned big ups)
 */

/*
 * Throughout this function, we're using \\ to target
 * single backslashes, so as to escape the backslash.  I
 * know you know that, but I figured I'd remind you
 * just in case.
 */

function BSG_autoload( $class ) {
	$namespace = 'BSG\\';
	$path = 'src';

	// Skip it if it ain'tn't in our namespace

	if( false === strpos( $class, $namespace ) ) {
		return;
	}

	/*
	 * File structure, WP naming conventions, and
	 * PHP-FIG make manipulating the class name
	 * ever so much fun. :sarc_mark:
	 *
	 * We have to:
	 * 1) Remove the beginning slash if there is one.
	 * 2) Explode the classname at `\`
	 * 3) Shift off the first element (it's the namespace)
	 * 4) Put the last element (the filename) into a var and:
	 *   a) Replace `_` with `-`
	 *   b) Prepend it with `class-`
	 *   c) Append it with `.php`
	 *   d) Lowercase it
 	 * 5) Pop off the last element of the array (the old filename)
 	 * 6) Add the new filename to the array
 	 * 7) Implode the array
 	 * 8) Go take a nap, because I'm exhausted from all that.
	 */

	$class = 0 === strpos( $class, '\\' ) ? substr( $class, 1 ) : $class;
	$class_array = explode( '\\', $class ); // Howdy array
	array_shift( $class_array ); // Bye-bye namespace
	$class_filename = end( $class_array ); // Howdy filename
	$class_filename = str_replace( '_', '-', $class_filename ); // Switcheroo the dashes
	$class_filename = 'class-' . $class_filename; // Howdy prepend
	$class_filename .= '.php'; // Howdy append
	$class_filename = strtolower( $class_filename ); // Bye-bye capital letters
	array_pop( $class_array ); // Bye-bye old filename
	$class_array[] = $class_filename; // Howdy new filename
	$class = implode( DIRECTORY_SEPARATOR, $class_array ); // Welcome back class string

	// Zzzzzzzzzzzzzzzzzzzzzzzzzz

	// Build the path
	$file = realpath( __DIR__ . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $class );

	// If the file exists for the class name, load it.
	if ( file_exists( $file ) ) {
		include( $file );
	}
}

spl_autoload_register( 'bsg_autoload' );