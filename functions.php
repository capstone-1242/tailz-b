<?php
/**
 * Tailz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tailz
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define theme constants
define( 'TAILPRESS_VERSION', '1.0.0' );
define( 'TAILPRESS_DIR', get_template_directory() );
define( 'TAILPRESS_URI', get_template_directory_uri() );

// Include required files
require_once TAILPRESS_DIR . '/inc/class-tailpress.php';
require_once TAILPRESS_DIR . '/inc/template-functions.php';
require_once TAILPRESS_DIR . '/inc/template-tags.php';
require_once TAILPRESS_DIR . '/inc/class-tailpress-customizer.php';

// Initialize theme
new Tailpress();

// Add theme support
add_action( 'after_setup_theme', 'tailpress_setup' );
function tailpress_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'responsive-embeds' );
}

// Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'tailpress_scripts' );
function tailpress_scripts() {
    wp_enqueue_style( 'tailpress-style', get_stylesheet_uri(), array(), TAILPRESS_VERSION );
    wp_enqueue_script( 'tailpress-script', TAILPRESS_URI . '/js/script.js', array(), TAILPRESS_VERSION, true );
}

// Add custom image sizes
add_action( 'after_setup_theme', 'tailpress_image_sizes' );
function tailpress_image_sizes() {
    add_image_size( 'tailpress-thumbnail', 300, 300, true );
    add_image_size( 'tailpress-medium', 768, 0, false );
    add_image_size( 'tailpress-large', 1024, 0, false );
}

// Register navigation menus
add_action( 'after_setup_theme', 'tailpress_register_nav_menus' );
function tailpress_register_nav_menus() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'tailpress' ),
        'footer'  => esc_html__( 'Footer Menu', 'tailpress' ),
    ) );
}

// Register widget areas
add_action( 'widgets_init', 'tailpress_widgets_init' );
function tailpress_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'tailpress' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'tailpress' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}

// Custom template tags
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress
require get_template_directory() . '/inc/template-functions.php';

// Customizer additions
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}