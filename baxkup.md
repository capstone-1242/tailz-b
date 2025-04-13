<?php
/**
 * Tailz functions and definitions
 *
 * @package tailz
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Carbon Fields initialization
add_action('after_setup_theme', 'crb_load');
function crb_load() {
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}

// Grooming Services Fields
add_action( 'carbon_fields_register_fields', 'crb_attach_grooming_fields' );
function crb_attach_grooming_fields() {
    Container::make( 'post_meta', 'Grooming Services' )
        ->where( 'post_id', '=', 17 ) // Grooming page ID
        ->add_fields( array(
            Field::make( 'complex', 'grooming_services', 'Services' )
                ->set_layout( 'tabbed-vertical' )
                ->setup_labels( array(
                    'plural_name' => 'Services',
                    'singular_name' => 'Service'
                ) )
                ->add_fields( array(
                    Field::make( 'text', 'service_title', 'Service Title' )
                        ->set_required( true )
                        ->set_width( 100 ),
                    Field::make( 'textarea', 'service_description', 'Service Description' )
                        ->set_required( true )
                        ->set_width( 100 ),
                    Field::make( 'complex', 'service_includes', 'Service Includes' )
                        ->add_fields( array(
                            Field::make( 'text', 'item', 'Include Item' )
                                ->set_required( true )
                        ) )
                        ->set_header_template( '
                            <% if (item) { %>
                                <%- item %>
                            <% } %>
                        ' ),
                    Field::make( 'complex', 'dog_prices', 'Dog Prices' )
                        ->set_layout( 'tabbed-horizontal' )
                        ->add_fields( array(
                            Field::make( 'text', 'xs', 'XS Price' ),
                            Field::make( 'text', 's', 'S Price' ),
                            Field::make( 'text', 'm', 'M Price' ),
                            Field::make( 'text', 'l', 'L Price' ),
                            Field::make( 'text', 'xl', 'XL Price' ),
                        ) ),
                    Field::make( 'complex', 'cat_prices', 'Cat Prices' )
                        ->set_layout( 'tabbed-horizontal' )
                        ->add_fields( array(
                            Field::make( 'text', 'xs', 'XS Price' ),
                            Field::make( 'text', 's', 'S Price' ),
                            Field::make( 'text', 'm', 'M Price' ),
                            Field::make( 'text', 'l', 'L Price' ),
                            Field::make( 'text', 'xl', 'XL Price' ),
                        ) ),
                ) ),
            Field::make( 'complex', 'boost_menu_items', 'Boost Menu Items' )
                ->add_fields( array(
                    Field::make( 'text', 'item', 'Menu Item' )
                        ->set_required( true )
                ) )
        ) );
}

// Training Page Metaboxes
add_action('carbon_fields_register_fields', 'crb_training_options');
function crb_training_options() {
    Container::make('post_meta', 'Training Options')
        ->where('post_id', '=', 27) // Training page ID
        ->add_fields(array(
            Field::make('complex', 'puppy_classes', 'Puppy Classes')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Classes',
                    'singular_name' => 'Class'
                ))
                ->add_fields(array(
                    Field::make('text', 'title', 'Class Title')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'duration', 'Duration (e.g., 6 weeks)')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'price', 'Price')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('complex', 'description', 'Description')
                        ->add_fields(array(
                            Field::make('textarea', 'paragraph', 'Paragraph')
                                ->set_required(true)
                        ))
                        ->set_header_template('
                            <% if (paragraph) { %>
                                <%- paragraph.substring(0, 50) %>...
                            <% } %>
                        '),
                    Field::make('complex', 'topics', 'Topics Reviewed')
                        ->add_fields(array(
                            Field::make('text', 'item', 'Topic')
                                ->set_required(true)
                        ))
                        ->set_header_template('
                            <% if (item) { %>
                                <%- item %>
                            <% } %>
                        '),
                    Field::make('complex', 'notes', 'Additional Notes')
                        ->add_fields(array(
                            Field::make('textarea', 'note', 'Note')
                                ->set_help_text('Optional note to display below the topics')
                        ))
                        ->set_header_template('
                            <% if (note) { %>
                                <%- note.substring(0, 50) %>...
                            <% } %>
                        ')
                )),
            Field::make('complex', 'adult_classes', 'Adult Classes')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Classes',
                    'singular_name' => 'Class'
                ))
                ->add_fields(array(
                    Field::make('text', 'title', 'Class Title')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'duration', 'Duration (e.g., 6 weeks)')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'price', 'Price')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('complex', 'description', 'Description')
                        ->add_fields(array(
                            Field::make('textarea', 'paragraph', 'Paragraph')
                                ->set_required(true)
                        ))
                        ->set_header_template('
                            <% if (paragraph) { %>
                                <%- paragraph.substring(0, 50) %>...
                            <% } %>
                        '),
                    Field::make('complex', 'topics', 'Topics')
                        ->add_fields(array(
                            Field::make('text', 'item', 'Topic')
                                ->set_required(true)
                        ))
                        ->set_header_template('
                            <% if (item) { %>
                                <%- item %>
                            <% } %>
                        '),
                    Field::make('complex', 'notes', 'Additional Notes')
                        ->add_fields(array(
                            Field::make('textarea', 'note', 'Note')
                                ->set_help_text('Optional note to display below the topics')
                        ))
                        ->set_header_template('
                            <% if (note) { %>
                                <%- note.substring(0, 50) %>...
                            <% } %>
                        ')
                )),
            Field::make('complex', 'growly_classes', 'Growly Dog Classes')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Classes',
                    'singular_name' => 'Class'
                ))
                ->add_fields(array(
                    Field::make('text', 'title', 'Class Title')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('checkbox', 'is_online', 'Online Class?'),
                    Field::make('text', 'duration', 'Duration (e.g., 6 weeks)')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'price', 'Price')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('complex', 'description', 'Description')
                        ->add_fields(array(
                            Field::make('textarea', 'paragraph', 'Paragraph')
                                ->set_required(true)
                        ))
                        ->set_header_template('
                            <% if (paragraph) { %>
                                <%- paragraph.substring(0, 50) %>...
                            <% } %>
                        '),
                    Field::make('complex', 'topics', 'Topics')
                        ->add_fields(array(
                            Field::make('text', 'item', 'Topic')
                                ->set_required(true)
                        ))
                        ->set_header_template('
                            <% if (item) { %>
                                <%- item %>
                            <% } %>
                        '),
                    Field::make('complex', 'notes', 'Additional Notes')
                        ->add_fields(array(
                            Field::make('textarea', 'note', 'Note')
                                ->set_help_text('Optional note to display below the topics')
                        ))
                        ->set_header_template('
                            <% if (note) { %>
                                <%- note.substring(0, 50) %>...
                            <% } %>
                        ')
                )),
            Field::make('complex', 'private_training', 'Private Training')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Training Options',
                    'singular_name' => 'Option'
                ))
                ->add_fields(array(
                    Field::make('text', 'title', 'Training Title')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'additional_price', 'Additional Price per Session')
                        ->set_help_text('Optional - leave blank if not applicable')
                        ->set_width(100),
                    Field::make('text', 'single_session_duration', 'Single Session Duration')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'single_session_price', 'Single Session Price')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('complex', 'bundles', 'Session Bundles')
                        ->add_fields(array(
                            Field::make('text', 'sessions', 'Number of Sessions')
                                ->set_required(true)
                                ->set_width(50),
                            Field::make('text', 'price', 'Bundle Price')
                                ->set_required(true)
                                ->set_width(50)
                        ))
                        ->set_header_template('
                            <% if (sessions) { %>
                                <%- sessions %> Sessions
                            <% } %>
                        '),
                    Field::make('complex', 'notes', 'Additional Notes')
                        ->add_fields(array(
                            Field::make('textarea', 'note', 'Note')
                                ->set_help_text('Optional note to display below the bundles')
                        ))
                        ->set_header_template('
                            <% if (note) { %>
                                <%- note.substring(0, 50) %>...
                            <% } %>
                        ')
                )),
            Field::make('complex', 'training_preview', 'Training Preview')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Videos',
                    'singular_name' => 'Video'
                ))
                ->add_fields(array(
                    Field::make('text', 'title', 'Video Title')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'video_url', 'Video URL')
                        ->set_required(true)
                        ->set_help_text('Enter YouTube, Vimeo, or direct video URL')
                        ->set_width(100)
                ))
                ->set_header_template('
                    <% if (title) { %>
                        <%- title %>
                    <% } %>
                ')
        ));
}

// Daycare Services Fields
add_action('carbon_fields_register_fields', 'crb_attach_daycare_fields');
function crb_attach_daycare_fields() {
    Container::make('post_meta', 'Daycare Services')
        ->where('post_id', '=', 38)
        ->add_fields(array(
            Field::make('complex', 'daily_rates', 'Daily Rates')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Daily Rates',
                    'singular_name' => 'Rate'
                ))
                ->add_fields(array(
                    Field::make('text', 'title', 'Service Title')
                        ->set_required(true)
                        ->set_width(70),
                    Field::make('text', 'price', 'Price')
                        ->set_required(true)
                        ->set_width(30),
                    Field::make('complex', 'notes', 'Notes')
                        ->add_fields(array(
                            Field::make('text', 'note', 'Note')
                                ->set_required(true)
                                ->set_width(100)
                        ))
                )),
            Field::make('complex', 'flex_passes', 'Flex Passes')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Flex Passes',
                    'singular_name' => 'Pass'
                ))
                ->add_fields(array(
                    Field::make('text', 'title', 'Service Title')
                        ->set_required(true)
                        ->set_width(70),
                    Field::make('text', 'price', 'Price')
                        ->set_required(true)
                        ->set_width(30),
                    Field::make('complex', 'notes', 'Notes')
                        ->add_fields(array(
                            Field::make('text', 'note', 'Note')
                                ->set_required(true)
                                ->set_width(100)
                        ))
                )),
            Field::make('complex', 'monthly_play', 'Monthly Play Packages')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Monthly Packages',
                    'singular_name' => 'Package'
                ))
                ->add_fields(array(
                    Field::make('text', 'title', 'Service Title')
                        ->set_required(true)
                        ->set_width(70),
                    Field::make('text', 'price', 'Price')
                        ->set_required(true)
                        ->set_width(30),
                    Field::make('complex', 'notes', 'Notes')
                        ->add_fields(array(
                            Field::make('text', 'note', 'Note')
                                ->set_required(true)
                                ->set_width(100)
                        ))
                )),
            Field::make('complex', 'membership_perks', 'Monthly Membership Perks')
                ->add_fields(array(
                    Field::make('text', 'perk', 'Perk')
                        ->set_required(true)
                        ->set_width(100)
                ))
        ));
}

// Hotel Packages Fields
add_action('carbon_fields_register_fields', 'crb_attach_hotel_fields');
function crb_attach_hotel_fields() {
    Container::make('post_meta', 'Hotel Packages')
        ->where('post_id', '=', 19) // Replace with actual hotel page ID
        ->add_fields(array(
            Field::make('complex', 'hotel_packages', 'Hotel Packages')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Packages',
                    'singular_name' => 'Package'
                ))
                ->add_fields(array(
                    Field::make('select', 'package_type', 'Package Type')
                        ->set_options(array(
                            'basic' => 'Basic',
                            'most_popular' => 'Most Popular',
                            'best_value' => 'Best Value'
                        ))
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'title', 'Package Title')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'subtitle', 'Package Subtitle')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('complex', 'features', 'Features')
                        ->add_fields(array(
                            Field::make('text', 'feature', 'Feature')
                                ->set_required(true)
                                ->set_width(100)
                        ))
                        ->set_header_template('
                            <% if (feature) { %>
                                <%- feature.substring(0, 50) %>...
                            <% } %>
                        '),
                    Field::make('text', 'price', 'Price per Night')
                        ->set_required(true)
                        ->set_width(100)
                )),
            Field::make('text', 'surcharge_notice', 'Surcharge Notice')
                ->set_default_value('A $10 nightly surcharge applies for Sundays, Long Weekends and Holidays.')
                ->set_width(100)
        ));
}

// Exercise Page Metaboxes
add_action('carbon_fields_register_fields', 'crb_exercise_options');
function crb_exercise_options() {
    Container::make('post_meta', 'Exercise Options')
        ->where('post_id', '=', 13) // Replace with actual exercise page ID
        ->add_fields(array(
            Field::make('complex', 'exercise_options', 'Exercise Options')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Options',
                    'singular_name' => 'Option'
                ))
                ->add_fields(array(
                    Field::make('text', 'title', 'Title')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'duration', 'Duration (e.g., 6 weeks)')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('text', 'price', 'Price')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('complex', 'description', 'Description')
                        ->add_fields(array(
                            Field::make('textarea', 'paragraph', 'Paragraph')
                                ->set_required(true)
                        ))
                        ->set_header_template('
                            <% if (paragraph) { %>
                                <%- paragraph.substring(0, 50) %>...
                            <% } %>
                        '),
                    Field::make('complex', 'skills', 'Skills Include')
                        ->add_fields(array(
                            Field::make('text', 'skill', 'Skill')
                                ->set_required(true)
                        ))
                        ->set_header_template('
                            <% if (skill) { %>
                                <%- skill %>
                            <% } %>
                        '),
                    Field::make('complex', 'notes', 'Additional Notes')
                        ->add_fields(array(
                            Field::make('textarea', 'note', 'Note')
                                ->set_help_text('Optional note to display below the skills')
                        ))
                        ->set_header_template('
                            <% if (note) { %>
                                <%- note.substring(0, 50) %>...
                            <% } %>
                        ')
                ))
        ));
}

// Portrait Packages Fields
add_action('carbon_fields_register_fields', 'crb_attach_portrait_fields');
function crb_attach_portrait_fields() {
    Container::make('post_meta', 'Portrait Packages')
        ->where('post_template', '=', 'page-portraits.php')
        ->add_fields(array(
            Field::make('complex', 'portrait_packages', 'Portrait Packages')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Packages',
                    'singular_name' => 'Package'
                ))
                ->add_fields(array(
                    Field::make('text', 'header', 'Package Header')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('complex', 'features', 'Features')
                        ->add_fields(array(
                            Field::make('text', 'feature', 'Feature')
                                ->set_required(true)
                                ->set_width(100)
                        ))
                        ->set_header_template('
                            <% if (feature) { %>
                                <%- feature %>
                            <% } %>
                        '),
                    Field::make('text', 'price', 'Price per Hour')
                        ->set_required(true)
                        ->set_width(100)
                ))
        ));
}

// About Page Fields
add_action('carbon_fields_register_fields', 'crb_attach_about_page_fields');
function crb_attach_about_page_fields() {
    Container::make('post_meta', 'About Page Settings')
        ->where('post_template', '=', 'page-about-us.php')
        ->add_fields([
            // Story Section Bubbles
            Field::make('separator', 'story_section_separator', 'Story Section Images')
                ->set_classes('separator-class'),
            
            Field::make('image', 'tailz_shop_front_bubble', 'First Bubble')
                ->set_value_type('url')
                ->set_type(['image/webp'])
                ->set_help_text('Upload a circular image (will be cropped to circle). Recommended size: 131x131px'),

            Field::make('image', 'dog_food_bubble', 'Second Bubble')
                ->set_value_type('url')
                ->set_type(['image/webp'])
                ->set_help_text('Upload a circular image (will be cropped to circle). Recommended size: 180x180px'),

            Field::make('image', 'happy_dog_bubble', 'Third Bubble')
                ->set_value_type('url')
                ->set_type(['image/webp'])
                ->set_help_text('Upload a circular image (will be cropped to circle). Recommended size: 180x180px'),

            Field::make('image', 'cat_bubble', 'Fourth Bubble')
                ->set_value_type('url')
                ->set_type(['image/webp'])
                ->set_help_text('Upload a circular image (will be cropped to circle). Recommended size: 153x153px'),

            Field::make('image', 'store_front_bubble', 'Fifth Bubble')
                ->set_value_type('url')
                ->set_type(['image/webp'])
                ->set_help_text('Upload a circular image (will be cropped to circle). Desktop size: 443x443px, Mobile size: 250x250px'),

            // Team Section
            Field::make('separator', 'team_section_separator', 'Team Section')
                ->set_classes('separator-class'),

            Field::make('complex', 'team_members', 'Team Members')
                ->set_layout('tabbed-vertical')
                ->add_fields([
                    Field::make('image', 'photo', 'Team Member Photo')
                        ->set_value_type('url')
                        ->set_type(['image/webp', 'image/jpeg', 'image/png'])
                        ->set_help_text('Upload a photo. Will be cropped to 113x130px'),
                    Field::make('text', 'name', 'Name')
                        ->set_help_text('Enter team member\'s first name'),
                    Field::make('text', 'position', 'Position')
                        ->set_help_text('Enter team member\'s position'),
                ])
                ->set_header_template('<%- name %>')
        ]);
}

// Add image size for team members
add_action('after_setup_theme', 'tailz_add_image_sizes');
function tailz_add_image_sizes() {
    add_image_size('team-member', 113, 130, true);
    add_image_size('bubble-small', 131, 131, true);
    add_image_size('bubble-medium', 180, 180, true);
    add_image_size('bubble-large', 443, 443, true);
}

/**
 * Theme setup and initialization
 */
function tailpress_setup() {
	// Add theme supports
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');
	add_theme_support('responsive-embeds');
	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');

	// Register navigation menus
	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'tailpress'),
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
 * Enqueue theme assets
 */
function tailpress_enqueue_assets() {
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
}
add_action('wp_enqueue_scripts', 'tailpress_enqueue_assets');

/**
 * Get asset path with cache busting
 */
function tailpress_asset($path) {
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}
	return add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Add custom classes to menu items
 */
function tailz_add_menu_classes($classes, $item, $args) {
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
function tailz_add_link_classes($atts, $item, $args, $depth = 0) {
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
function tailpress_enqueue_page_assets() {
    if (!is_page()) {
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
 * Handle contact form submission
 */
function tailz_handle_contact_form() {
	if (!isset($_POST['tailz_contact_form_nonce']) || 
		!wp_verify_nonce($_POST['tailz_contact_form_nonce'], 'tailz_contact_form_nonce')) {
		wp_send_json_error('Invalid nonce');
		return;
	}

	$required_fields = array('name', 'email', 'subject', 'message');
	$form_data = array();

	foreach ($required_fields as $field) {
		if (empty($_POST[$field])) {
			wp_send_json_error('Please fill in all required fields');
			return;
		}
		$form_data[$field] = sanitize_text_field($_POST[$field]);
	}

	$form_data['phone'] = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';

	$headers = array(
		'Content-Type: text/html; charset=UTF-8',
		'From: ' . $form_data['name'] . ' <' . $form_data['email'] . '>',
		'Reply-To: ' . $form_data['email']
	);

	$email_subject = 'New Contact Form Submission: ' . $form_data['subject'];
	$email_body = sprintf(
		'<h2>New Contact Form Submission</h2>
		<p><strong>Name:</strong> %s</p>
		<p><strong>Email:</strong> %s</p>
		<p><strong>Phone:</strong> %s</p>
		<p><strong>Subject:</strong> %s</p>
		<p><strong>Message:</strong></p>
		<p>%s</p>',
		$form_data['name'],
		$form_data['email'],
		$form_data['phone'],
		$form_data['subject'],
		nl2br($form_data['message'])
	);

	$sent = wp_mail(get_option('admin_email'), $email_subject, $email_body, $headers);
	wp_send_json_success($sent ? 
		'Thank you for your message. We will get back to you soon!' : 
		'There was an error sending your message. Please try again later.'
	);
}
add_action('admin_post_tailz_contact_form', 'tailz_handle_contact_form');
add_action('admin_post_nopriv_tailz_contact_form', 'tailz_handle_contact_form');

/**
 * Banner Alert Meta Box
 */
function tailz_register_banner_meta_box() {
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

function tailz_banner_alert_callback($post) {
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

function tailz_save_banner_meta_box($post_id) {
	if (!isset($_POST['tailz_banner_alert_nonce']) || 
		!wp_verify_nonce($_POST['tailz_banner_alert_nonce'], 'tailz_banner_alert_nonce') ||
		defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ||
		!current_user_can('edit_post', $post_id)) {
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