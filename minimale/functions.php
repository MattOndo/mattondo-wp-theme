<?php

/**
 * functions.php
 *
 **/

require_once('functions-minimale-by-rose-check-direct.php');
require_once('functions-minimale-by-rose-add-classes.php');

if ( ! function_exists( 'minimale_by_rose_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
function minimale_by_rose_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 300,
		'width'       => 300,
		'flex-height' => true,
	) );

  $defaults = array(
    'default-image'          => '',
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'uploads'                => true,
    'random-default'         => false,
    'header-text'            => true,
    'default-text-color'     => '',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
  );
  add_theme_support( 'custom-header', $defaults );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
   *
	 */
	add_theme_support( 'html5', array(
		'gallery',
		'caption',
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // minimale_by_rose_setup
add_action( 'after_setup_theme', 'minimale_by_rose_setup' );

/**
 * Enqueues scripts and styles.
 *
 */
function minimale_by_rose_widgets_init() {

	register_sidebar( array(
		'name'          => 'Content Bottom 1',
		'id'            => 'sidebar-2',
		'description'   => 'Appears at the bottom of the content on posts and pages.',
		'before_widget' => '<div id="%1$s" class="%2$s fl-l tl w-50-l f3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="f3 f2-ns lh-title measure">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Content Bottom 2',
		'id'            => 'sidebar-3',
		'description'   => 'Appears at the bottom of the content on posts and pages.',
		'before_widget' => '<div id="%1$s" class="%2$s fl-l tl w-50-l f3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="f3 f2-ns lh-title measure">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'minimale_by_rose_widgets_init' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function minimale_by_rose_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="'.get_bloginfo( 'pingback_url' ).'">';
	}
}
add_action( 'wp_head', 'minimale_by_rose_pingback_header' );

/**
 * Enqueue scripts and styles.
 *
 */
function minimale_by_rose_scripts() {

	// Bootstrap 3 Stylesheet
	wp_enqueue_style( 'tachyons-css', get_theme_file_uri( '/css/tachyons.min.css' ) );

	// Theme Stylesheet
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'minimale_by_rose_scripts' );

?>
