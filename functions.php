<?php

/**
 * Tailz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tailz
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

// Define theme constants
define('TAILPRESS_VERSION', '1.0.0');
define('TAILPRESS_DIR', get_template_directory());
define('TAILPRESS_URI', get_template_directory_uri());

// Include required files
require_once TAILPRESS_DIR . '/inc/class-tailz-accessible-menu-walker.php';
require_once TAILPRESS_DIR . '/inc/class-tailz-mobile-menu-walker.php';

// ACF Options and Field Groups have been removed.

/**
 * Theme setup and initialization
 */
function tailpress_setup()
{
	// Add theme supports
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');
	add_theme_support('responsive-embeds');
	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
	add_theme_support('customize-selective-refresh-widgets');

	// Register navigation menus
	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'tailpress'),
			'footer'  => __('Footer Menu', 'tailpress'),
		)
	);

	// Add HTML5 support
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
}
add_action('after_setup_theme', 'tailpress_setup');

/**
 * ACF Options Page Setup
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Site Settings',
		'menu_title' => 'Site Settings',
		'menu_slug'  => 'site-settings',
		'capability' => 'edit_posts',
		'redirect'   => false,
		'position'   => '59.5',
		'icon_url'   => 'dashicons-admin-generic'
	));
}

/**
 * Enqueue theme assets
 */
function tailpress_enqueue_assets()
{
	$theme = wp_get_theme();
	$timestamp = time();
	$version = $theme->get('Version') . '.' . $timestamp;

	// Enqueue Google Fonts
	wp_enqueue_style(
		'google-fonts',
		'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap',
		array(),
		null
	);

	// Enqueue main stylesheet
	wp_enqueue_style(
		'tailpress',
		tailpress_asset('css/app.css'),
		array('google-fonts'),
		$version
	);

	// Enqueue main script
	wp_enqueue_script(
		'tailpress',
		tailpress_asset('js/app.js'),
		array('jquery'),
		$version,
		true
	);

	// Enqueue mobile menu script
	wp_enqueue_script(
		'tailz-mobile-menu',
		get_template_directory_uri() . '/resources/js/mobile-menu.js',
		array('jquery'),
		$version,
		true
	);

	// Enqueue back to top script
	wp_enqueue_script(
		'tailz-back-to-top',
		get_template_directory_uri() . '/resources/js/back-to-top.js',
		array(),
		$version,
		true
	);
}
add_action('wp_enqueue_scripts', 'tailpress_enqueue_assets');

/**
 * Get asset path with cache busting
 */
function tailpress_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}
	return add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Add custom classes to menu items
 */
function tailz_add_menu_classes($classes, $item, $args)
{
	if ($args->theme_location === 'primary') {
		$classes[] = 'menu-item';

		if (in_array('menu-item-has-children', $classes)) {
			$classes[] = 'has-submenu';
		}
	}

	return $classes;
}
add_filter('nav_menu_css_class', 'tailz_add_menu_classes', 10, 3);

/**
 * Add custom classes to menu links
 */
function tailz_add_link_classes($atts, $item, $args, $depth = 0)
{
	if (isset($args->theme_location) && $args->theme_location === 'primary') {
		$classes = isset($atts['class']) ? $atts['class'] : '';

		if ($depth === 0) {
			$atts['class'] = $classes . ' nav-link';
		} else {
			$atts['class'] = $classes . ' dropdown-link';
		}
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'tailz_add_link_classes', 10, 4);

/**
 * Enqueue page-specific scripts and styles
 */

function tailpress_enqueue_page_assets()
{
	if (! is_page()) {
		return;
	}

	$page_templates = array(
		'page-photos.php',
		'page-hotel.php',
		'page-grooming.php',
		'page-exercise.php',
		'page-training.php'
	);

	$current_template = get_page_template_slug();

	if (in_array($current_template, $page_templates)) {
		// Enqueue universal tabs assets
		wp_enqueue_style(
			'tailpress-tabs-style',
			get_template_directory_uri() . '/resources/css/tabs.css',
			array(),
			'1.0.0'
		);

		// Enqueue the new service-tabs.js for all service pages
		wp_enqueue_script(
			'service-tabs',
			get_template_directory_uri() . '/resources/js/service-tabs.js',
			array('jquery'),
			'1.0.0',
			true
		);
	}
}
add_action('wp_enqueue_scripts', 'tailpress_enqueue_page_assets');

/**
 * Banner Alert Meta Box
 */
function tailz_register_banner_meta_box()
{
	add_meta_box(
		'tailz_banner_alert',
		'Banner Alert',
		'tailz_banner_alert_callback',
		'page',
		'normal',
		'high'
	);
}
add_action('add_meta_boxes', 'tailz_register_banner_meta_box');

function register_fullwidth_widget_area()
{
	register_sidebar(array(
		'name'          => 'Full Width Reviews Area',
		'id'            => 'fullwidth-reviews',
		'description'   => 'For displaying Google reviews across full page width',
		'before_widget' => '<div id="%1$s" class="full-width-widget w-full %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="reviews-title">',
		'after_title'   => '</h3>',
	));
}
add_action('widgets_init', 'register_fullwidth_widget_area');

function tailz_banner_alert_callback($post)
{
	wp_nonce_field('tailz_banner_alert_nonce', 'tailz_banner_alert_nonce');

	$banner_text = get_post_meta($post->ID, '_tailz_banner_text', true);
	$banner_enabled = get_post_meta($post->ID, '_tailz_banner_enabled', true);
?>
	<div class="tailz-meta-box">
		<p>
			<label for="tailz_banner_enabled">
				<input type="checkbox" id="tailz_banner_enabled" name="tailz_banner_enabled" <?php checked($banner_enabled, 'on'); ?> />
				Enable Banner Alert
			</label>
		</p>
		<p>
			<label for="tailz_banner_text">Banner Text:</label><br>
			<input type="text" id="tailz_banner_text" name="tailz_banner_text" value="<?php echo esc_attr($banner_text); ?>" class="widefat" />
		</p>
	</div>
<?php
}

function tailz_save_banner_meta_box($post_id)
{
	if (
		! isset($_POST['tailz_banner_alert_nonce']) ||
		! wp_verify_nonce($_POST['tailz_banner_alert_nonce'], 'tailz_banner_alert_nonce') ||
		(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
		! current_user_can('edit_post', $post_id)
	) {
		return;
	}

	update_post_meta(
		$post_id,
		'_tailz_banner_text',
		isset($_POST['tailz_banner_text']) ? sanitize_text_field($_POST['tailz_banner_text']) : ''
	);

	update_post_meta(
		$post_id,
		'_tailz_banner_enabled',
		isset($_POST['tailz_banner_enabled']) ? 'on' : 'off'
	);
}
add_action('save_post', 'tailz_save_banner_meta_box');

// Include the accessible menu walker
require_once get_template_directory() . '/inc/class-tailz-accessible-menu-walker.php';

function tailz_enqueue_gallery_scripts()
{
	wp_enqueue_script(
		'gallery-filter.js',
		get_template_directory_uri() . '/resources/js/gallery-filter.js',
		array(),
		null,
		true
	);
}
add_action('wp_enqueue_scripts', 'tailz_enqueue_gallery_scripts');

function tailz_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'tailz_add_woocommerce_support');

function mytheme_enqueue_woocommerce_styles()
{
	// Only load on WooCommerce pages
	if (is_product('WooCommerce') && is_woocommerce()) {
		wp_enqueue_style(
			'my-woocommerce-custom',
			get_template_directory_uri() . '/resources/css/custom/shop.css',
			array('woocommerce-general'), // Dependencies (if any)
			'1.0',    // Version
			'all'     // Media
		);
	}
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_woocommerce_styles');

add_filter('woocommerce_get_stock_html', 'custom_woocommerce_stock_html', 10, 2);
function custom_woocommerce_stock_html($html, $product)
{
	if ($product->is_in_stock()) {
		$qty = $product->get_stock_quantity();
		$low_stock_threshold = (int)get_option('woocommerce_notify_low_stock_amount');

		if ($product->managing_stock() && $qty <= $low_stock_threshold) {
			return '<div class="stock-msg">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" fill="#fcd41d"/>
                </svg>
				<p>Low stock: only ' . esc_html($qty) . ' left</p>
			</div>';
		} elseif ($product->managing_stock()) {
			return '<div class="stock-msg">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" fill="#c0e333"/></svg>
				<p>In stock: ' . esc_html($qty) . ' available</p>
			</div>';
		} else {
			return '<div class="stock-msg">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" fill="#c0e333"/></svg>
				<p>In stock</p>
			</div>';
		}
	} else {
		return '<div class="stock-msg">
			<svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" fill="#ff6a6a"/></svg>
			<p>Out of stock</p>
		</div>';
	}
}



function tailz_enqueue_ajax_filter_script()
{
	wp_enqueue_script('ajax-filters', get_template_directory_uri() . '/resources/js/ajax-filters.js', ['jquery'], null, true);

	wp_localize_script('ajax-filters', 'theme_vars', [
		'ajax_url' => admin_url('admin-ajax.php'),
	]);
}
add_action('wp_enqueue_scripts', 'tailz_enqueue_ajax_filter_script');

function tailz_ajax_product_filter()
{
	// Use $_POST instead of $_GET since the AJAX request is using POST method
	$pet_filter = isset($_POST['pets']) ? $_POST['pets'] : [];
	$brand_filter = isset($_POST['brand']) ? $_POST['brand'] : [];
	$food_filter = isset($_POST['foods']) ? $_POST['foods'] : [];
	$treat_filter = isset($_POST['treats']) ? $_POST['treats'] : [];
	$supply_filter = isset($_POST['supplies']) ? $_POST['supplies'] : [];

	// Prepare the tax_query array
	$tax_query = [];

	// Only add filters if they are selected
	if (!empty($pet_filter)) {
		$tax_query[] = [
			'taxonomy' => 'product_cat',
			'field'    => 'slug',
			'terms'    => $pet_filter,
		];
	}

	if (!empty($brand_filter)) {
		$tax_query[] = [
			'taxonomy' => 'product_brand',
			'field'    => 'slug',
			'terms'    => $brand_filter,
		];
	}

	if (!empty($food_filter)) {
		$tax_query[] = [
			'taxonomy' => 'food',
			'field'    => 'slug',
			'terms'    => $food_filter,
		];
	}

	if (!empty($treat_filter)) {
		$tax_query[] = [
			'taxonomy' => 'treat',
			'field'    => 'slug',
			'terms'    => $treat_filter,
		];
	}

	if (!empty($supply_filter)) {
		$tax_query[] = [
			'taxonomy' => 'supply',
			'field'    => 'slug',
			'terms'    => $supply_filter,
		];
	}

	// Default query args
	$args = [
		'post_type'      => 'product',
		'posts_per_page' => -1,
		'post_status'    => 'publish',
	];

	// Check if we are on a product category page
	if (is_product_category()) {
		$category = get_queried_object();
		// Ensure only products from the queried category are displayed
		$args['tax_query'][] = [
			'taxonomy' => 'product_cat',
			'field'    => 'id',
			'terms'    => $category->term_id,
			'operator' => 'IN',
		];
	}

	// Only add tax_query if we have filters
	if (!empty($tax_query)) {
		$args['tax_query'] = count($tax_query) > 1 ?
			array_merge(['relation' => 'AND'], $tax_query) :
			$tax_query;
	}

	// Perform the query
	$query = new WP_Query($args);

	ob_start();
	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post();
			wc_get_template_part('content', 'product');
		endwhile;
		wp_reset_postdata();
	else :
		echo '<p class="text-brown">No products found.</p>';
	endif;

	// Return the filtered content
	$content = ob_get_clean();
	echo $content;
	wp_die(); // End AJAX request
}
add_action('wp_ajax_filter_products', 'tailz_ajax_product_filter');
add_action('wp_ajax_nopriv_filter_products', 'tailz_ajax_product_filter');

/**
 * Enqueue Contact Form styles for contact page
 */
function tailz_enqueue_contact_styles()
{
	if (is_page_template('page-contact.php')) {
		wp_enqueue_style(
			'tailz-contact-form',
			get_stylesheet_directory_uri() . '/resources/css/custom/contact-form.css',
			[],
			'1.0'
		);
	}
}
add_action('wp_enqueue_scripts', 'tailz_enqueue_contact_styles');
