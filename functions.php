<?php

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

		wp_enqueue_script(
			'tailpress-tabs',
			get_template_directory_uri() . '/resources/js/tabs.js',
			array('jquery'),
			'1.0.0',
			true
		);

		// Enqueue grooming-specific script
		if ($current_template === 'page-grooming.php') {
			wp_enqueue_script(
				'grooming-tabs',
				get_template_directory_uri() . '/resources/js/grooming-tabs.js',
				array('jquery'),
				'1.0.0',
				true
			);
		}
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

/**
 * Register service pricing metaboxes based on page template
 */
function tailz_register_service_metaboxes($meta_boxes) {
	$template = get_page_template_slug();
	if (strpos($template, 'page-') !== 0) {
		return $meta_boxes;
	}

	$service_type = str_replace(['page-', '.php'], '', $template);
	$service_titles = [
		'grooming' => 'Grooming Services',
		'training' => 'Training Services',
		'exercise' => 'Exercise Services',
		'portraits' => 'Portrait Packages'
	];

	if (!isset($service_titles[$service_type])) {
		return $meta_boxes;
	}

	$fields = [
		[
			'id' => $service_type . '_service_title',
			'name' => 'Service Title',
			'type' => 'text',
			'clone' => true,
		],
		[
			'id' => $service_type . '_service_description',
			'name' => 'Service Description',
			'type' => 'textarea',
			'clone' => true,
		]
	];

	// Add pricing fields based on service type
	if ($service_type === 'grooming') {
		foreach (['dog', 'cat'] as $pet) {
			foreach (['xs', 's', 'm', 'l', 'xl'] as $size) {
				$fields[] = [
					'id' => $service_type . '_' . $pet . '_' . $size,
					'name' => ucfirst($pet) . ' ' . strtoupper($size) . ' Price',
					'type' => 'text',
					'clone' => true,
				];
			}
		}
	} elseif ($service_type === 'portraits') {
		foreach (['dog', 'cat'] as $pet) {
			$fields[] = [
				'id' => $service_type . '_' . $pet . '_title',
				'name' => ucfirst($pet) . ' Package Title',
				'type' => 'text',
				'clone' => true,
			];
			$fields[] = [
				'id' => $service_type . '_' . $pet . '_price',
				'name' => ucfirst($pet) . ' Package Price',
				'type' => 'text',
				'clone' => true,
			];
			$fields[] = [
				'id' => $service_type . '_' . $pet . '_desc',
				'name' => ucfirst($pet) . ' Package Description',
				'type' => 'textarea',
				'clone' => true,
			];
		}
	} else {
		foreach (['dog', 'cat'] as $pet) {
			$fields[] = [
				'id' => $service_type . '_' . $pet . '_price',
				'name' => ucfirst($pet) . ' Price',
				'type' => 'text',
				'clone' => true,
			];
		}
	}

	$meta_boxes[] = [
		'id' => $service_type . '_services',
		'title' => $service_titles[$service_type],
		'post_types' => ['page'],
		'context' => 'normal',
		'priority' => 'high',
		'fields' => $fields
	];

	return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'tailz_register_service_metaboxes');