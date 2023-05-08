<?php 

/**
 *      Plugin Name:    LMH Custom Post Types
 *      Plugin URI:     https://github.com/meilani/lmh-wp-child-theme 
 *      Description:    Example of creating custom post types 
 *      Version:        1.0.0 
 *      Author:         Laura Ho 
 *      Author URI:     https://lauraho.net 
 *      License:        GPL-2.0+
 *      License URI:    https://www.gnu.org/licenses/gpl-2.0.txt 
 *      Text Domain:    lmh-custom-post-types 
 *      Domain Path:    /languages
 */

 if ( !defined( 'WPINC' ) ) {
    die;
 }

 define( 'LMH_VERSION', '1.0.0' );
 define( 'LMHPATH', plugin_dir_path( __FILE__ ) );

 require_once( LMHPATH . '/post-types/register.php' );
 add_action( 'init', 'lmh_register_event_type' );
 add_action( 'init', 'lmh_register_speaker_type' );

 require_once( LMHPATH . '/taxonomies/register.php' );
 add_action( 'init', 'lmh_register_room_taxonomy' );