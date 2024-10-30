<?php

/*
 * Plugin Name: Block Style Guides for Gutenberg
 * Description: Creates posts in draft mode showcasing all default Gutenberg blocks, for styling purposes.
 * Version:     1.2.2
 * Author:      Robert Gillmer
 * Author URI:  https://www.robertgillmer.com
 * Text Domain: BSG
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Needed for bsg_add_settings_link() filter.
define( 'BSG_BASENAME', plugin_basename(__FILE__) );

include_once( plugin_dir_path( __FILE__ ) . 'autoload.php' );

/*
 * If the autoloader fails, there's a backup function in place, but
 * this abstract class is the root of everything.  Specifically bring
 * it in just in case everything goes sideways.
 */

include_once( plugin_dir_path( __FILE__ ) . '/src/Base/class-abstract-markup.php' );

include_once( plugin_dir_path( __FILE__ ) . 'general.php' );
include_once( plugin_dir_path( __FILE__ ) . 'admin-menu-functions.php' );
include_once( plugin_dir_path( __FILE__ ) . 'add-bsg-posts.php');
include_once( plugin_dir_path( __FILE__ ) . 'delete-bsg-posts.php');