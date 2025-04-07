<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
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

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();
	$timestamp = time();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) . '.' . $timestamp );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) . '.' . $timestamp, true );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
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
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

function tailpress_tabs_scripts() {
    if (
        is_page_template('page-photos.php') || 
        is_page_template('page-hotel.php') || 
        is_page_template('page-grooming.php') || 
        is_page_template('page-exercise.php') || 
        is_page_template('page-training.php') || 
        is_page('photos') || 
        is_page('hotel') || 
        is_page('grooming') || 
        is_page('exercise') ||
        is_page('training')
    ) {
        // Enqueue universal tabs script
        wp_register_script(
            'tailpress-tabs',
            get_template_directory_uri() . '/resources/js/tabs.js',
            array('jquery'),
            '1.0.0',
            true
        );
        wp_enqueue_script('tailpress-tabs');
        
        // Enqueue universal tabs CSS
        wp_enqueue_style(
            'tailpress-tabs-style',
            get_template_directory_uri() . '/resources/css/tabs.css',
            array(),
            '1.0.0'
        );
        
        // If it's the grooming page, enqueue grooming-specific JS
        if ( is_page_template('page-grooming.php') || is_page('grooming') ) {
            wp_register_script(
                'grooming-tabs',
                get_template_directory_uri() . '/resources/js/grooming-tabs.js',
                array('jquery'),
                '1.0.0',
                true
            );
            wp_enqueue_script('grooming-tabs');
        }
    }
}
add_action('wp_enqueue_scripts', 'tailpress_tabs_scripts');

/**
 * Force cache busting for CSS to ensure the latest styles are loaded.
 */
function tailpress_force_cache_bust_styles() {
    $theme = wp_get_theme();
    $timestamp = time();
    
    // Remove previously enqueued styles
    wp_dequeue_style('tailpress');
    
    // Re-enqueue with forced timestamp for cache busting
    wp_enqueue_style(
        'tailpress', 
        get_stylesheet_directory_uri() . '/css/app.css', 
        array(), 
        $theme->get('Version') . '.' . $timestamp
    );
}
add_action('wp_enqueue_scripts', 'tailpress_force_cache_bust_styles', 20);  // Priority 20 to run after tailpress_enqueue_scripts

/**
 * Check if Advanced Custom Fields plugin is active
 */
function is_acf_active() {
    return class_exists('ACF');
}

function tailpress_enqueue_google_fonts() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'tailpress_enqueue_google_fonts');

// Include the mobile menu walker
require_once get_template_directory() . '/inc/class-tailz-mobile-menu-walker.php';

/**
 * Add custom menu classes for Tailwind styling
 */
function tailz_add_menu_classes($classes, $item, $args) {
    // Add common class to all menu items
    $classes[] = 'border-b border-white border-opacity-20';
    
    // Check if item has children
    if (in_array('menu-item-has-children', $classes)) {
        $classes[] = 'has-mobile-submenu'; // Add a custom class for easier targeting
    }
    
    return $classes;
}
add_filter('nav_menu_css_class', 'tailz_add_menu_classes', 10, 3);

/**
 * Add custom link classes for Tailwind styling
 */
function tailz_add_link_classes($atts, $item, $args, $depth) {
    // Only apply to mobile menu
    if ($args->theme_location == 'primary') {
        // Get existing classes if any
        $classes = isset($atts['class']) ? $atts['class'] : '';
        
        if ($depth === 0) {
            // Top level items
            $atts['class'] = $classes . ' block px-6 py-3 text-white font-bold uppercase';
        } else {
            // Sub menu items
            $atts['class'] = $classes . ' block px-6 py-2 text-white uppercase';
        }
    }
    
    return $atts;
}
add_filter('nav_menu_link_attributes', 'tailz_add_link_classes', 10, 4);

/**
 * Enqueue mobile menu script
 */
function tailz_enqueue_mobile_menu_script() {
    $theme = wp_get_theme();
    $timestamp = time();
    
    wp_enqueue_script(
        'tailz-mobile-menu',
        get_template_directory_uri() . '/resources/js/mobile-menu.js',
        array(),
        $theme->get('Version') . '.' . $timestamp,
        true
    );
}
add_action('wp_enqueue_scripts', 'tailz_enqueue_mobile_menu_script');

/**
 * Handle contact form submission
 */
function tailz_handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['tailz_contact_form_nonce']) || !wp_verify_nonce($_POST['tailz_contact_form_nonce'], 'tailz_contact_form_nonce')) {
        wp_send_json_error('Invalid nonce');
        return;
    }

    // Get form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        wp_send_json_error('Please fill in all required fields');
        return;
    }

    // Email headers
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email
    );

    // Email subject
    $email_subject = 'New Contact Form Submission: ' . $subject;

    // Email body
    $email_body = sprintf(
        '<h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> %s</p>
        <p><strong>Email:</strong> %s</p>
        <p><strong>Phone:</strong> %s</p>
        <p><strong>Subject:</strong> %s</p>
        <p><strong>Message:</strong></p>
        <p>%s</p>',
        $name,
        $email,
        $phone,
        $subject,
        nl2br($message)
    );

    // Send email
    $to = get_option('admin_email');
    $sent = wp_mail($to, $email_subject, $email_body, $headers);

    if ($sent) {
        wp_send_json_success('Thank you for your message. We will get back to you soon!');
    } else {
        wp_send_json_error('There was an error sending your message. Please try again later.');
    }
}
add_action('admin_post_tailz_contact_form', 'tailz_handle_contact_form');
add_action('admin_post_nopriv_tailz_contact_form', 'tailz_handle_contact_form');