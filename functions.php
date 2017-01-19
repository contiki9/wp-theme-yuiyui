<?php
/**
 * Theme yuiyui's functions
 *
 * @package yuiyui
 **/

// Load CSS of parent theme and child theme.
add_action( 'wp_enqueue_scripts', 'yuiyui_enqueue_styles' );

/**
 * Enqueue stylesheet.
 **/
function yuiyui_enqueue_styles() {
	wp_enqueue_style( 'parent-style', path_join( get_template_directory_uri(), 'style.css' ) );
	wp_enqueue_style( 'child-style', path_join( get_stylesheet_directory_uri(), 'style.css' ) , array( 'parent-style' ) );
}
