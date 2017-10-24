<?php
/*
Plugin Name: 	EZ Scroll
Plugin URI: 	http://rickrduncan.com/wp-plugins
Description: 	Smooth scroll to top of page.
Author: 		Rick R. Duncan
Author URI: 	http://rickrduncan.com

Version: 		1.0.0
License: 		GPLv2
License URI: 	http://www.gnu.org/licenses/gpl-2.0.txt
*/


/**
 *
 * If this file is called directly, abort.
 *
 * @since 1.0.0
 *
 */
if ( ! defined( 'WPINC' ) ) die;


/**
 *
 * Define our constants.
 *
 * @since 1.0.0
 *
 */
define( 'PLUGIN_VERSION', '1.0.0' );
 
if ( !defined( 'EZS_PLUGIN_DIR' ) ) {
	define( 'EZS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( !defined( 'EZS_PLUGIN_URL' ) ) {
	define( 'EZS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}


/**
 *
 * Enqueue scripts & styles.
 *
 * @since 1.0.0
 *
 */
add_action( 'init', 'ezs_enqueue_files' ); 
function ezs_enqueue_files() {
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'ezscroll', EZS_PLUGIN_URL . 'css/style.css' );
	wp_enqueue_script( 'ezscroll-js', EZS_PLUGIN_URL . 'js/scripts.js', array( 'jquery' ), PLUGIN_VERSION, true );
}


/**
 *
 * Add smooth scroll to top content to footer of webpage.
 *
 * @since 1.0.0
 *
 */
add_action( 'wp_footer', 'ezs_add_content' );
function ezs_add_content() { 
	echo '<a href="#" class="smooth-scroll-top hide"><span class="dashicons dashicons-arrow-up-alt2"></span></a>';
}