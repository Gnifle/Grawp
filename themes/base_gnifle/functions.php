<?php

/**
 * Absolute basic functions.php. Includes global.css stylesheet, jQuery and a small helper script for animating the responsive menu.
 * Adds support for translations, title-tag management, thumbnails, menus and widgets and sets up a very basic primary menu.
 */

/**
 * Initialize widgets
 */
function gniflebase_widgets_init() {

}
add_action( 'widgets_init', 'gniflebase_widgets_init' );

/**
 * Enqueue scripts
 */
function gniflebase_styles_init() {
//	$google_fonts_uri = 'https://fonts.googleapis.com/css?family=Neucha|Kreon:400,700,300|Bad+Script|Handlee|Lobster+Two:400,400italic,700,700italic';
//	wp_enqueue_style( 'Google Fonts', $google_fonts_uri );
	wp_enqueue_style( 'Global styles', get_stylesheet_directory_uri() . '/global.css', false, '', false );
}
add_action( 'wp_enqueue_scripts', 'gniflebase_styles_init' );

/**
 * Enqueue styles
 */
function gniflebase_scripts_init() {
	wp_enqueue_script( 'jQuery', get_stylesheet_directory_uri() . '/js/jquery-2.2.3.min.js', false, '', false );
	wp_enqueue_script( 'Responsive Nav toggle', get_stylesheet_directory_uri() . '/js/nav.js', false, '', false );
}
add_action( 'wp_enqueue_scripts', 'gniflebase_scripts_init' );

/**
 * Register custom post types
 */
function gniflebase_register_custom_post_types() {

	/**
	 * Register 'Maleri' post type
	 * Flush rewrite rules after to ensure functional URL redirects
	 */

	flush_rewrite_rules();

}
add_action( 'init', 'gniflebase_register_custom_post_types' );

function gniflebase_theme_support() {

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	add_theme_support( 'widgets' );

	// Set up theme translatability
	load_theme_textdomain( 'gnifle_base', get_template_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'gniflebase_theme_support' );

function gniflebase_register_menus() {

	register_nav_menus( array(
		'primary' => __('Primary menu'),
	));

}
add_action( 'init', 'gniflebase_register_menus' );