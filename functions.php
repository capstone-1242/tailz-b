<?php

/**
 * Theme setup.
 */
<<<<<<< HEAD
function tailpress_setup() {
=======
function my_tailpress_theme_setup() {
>>>>>>> 94d5586fa9702ded126e5259525b7bd11ac61bed
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

<<<<<<< HEAD
add_action( 'after_setup_theme', 'tailpress_setup' );
=======
add_action( 'after_setup_theme', 'my_tailpress_theme_setup' );
>>>>>>> 94d5586fa9702ded126e5259525b7bd11ac61bed

/**
 * Enqueue theme assets.
 */
<<<<<<< HEAD
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );
=======
function my_tailpress_theme_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', my_tailpress_theme_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', my_tailpress_theme_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'my_tailpress_theme_enqueue_scripts' );
>>>>>>> 94d5586fa9702ded126e5259525b7bd11ac61bed

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
<<<<<<< HEAD
function tailpress_asset( $path ) {
=======
function my_tailpress_theme_asset( $path ) {
>>>>>>> 94d5586fa9702ded126e5259525b7bd11ac61bed
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
<<<<<<< HEAD
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
=======
function my_tailpress_theme_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
>>>>>>> 94d5586fa9702ded126e5259525b7bd11ac61bed
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

<<<<<<< HEAD
add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );
=======
add_filter( 'nav_menu_css_class', 'my_tailpress_theme_nav_menu_add_li_class', 10, 4 );
>>>>>>> 94d5586fa9702ded126e5259525b7bd11ac61bed

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
<<<<<<< HEAD
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
=======
function my_tailpress_theme_nav_menu_add_submenu_class( $classes, $args, $depth ) {
>>>>>>> 94d5586fa9702ded126e5259525b7bd11ac61bed
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

<<<<<<< HEAD
add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

function enqueue_swiper_assets() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('swiper-init', get_template_directory_uri() . '/js/swiper-init.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');
=======
add_filter( 'nav_menu_submenu_css_class', 'my_tailpress_theme_nav_menu_add_submenu_class', 10, 3 );
>>>>>>> 94d5586fa9702ded126e5259525b7bd11ac61bed
