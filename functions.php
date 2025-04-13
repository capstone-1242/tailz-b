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
    try {
        // Get all possible WordPress paths
        $possible_locations = array(
            get_template_directory(),              // Current theme
            get_stylesheet_directory(),            // Child theme if exists
            WP_CONTENT_DIR,                        // wp-content directory
            dirname(WP_CONTENT_DIR),               // WordPress root
            dirname(get_template_directory()),     // Themes directory
            dirname(dirname(get_template_directory())), // WordPress root (alternative)
        );

        // Add all theme directories in wp-content/themes
        $themes_dir = dirname(get_template_directory());
        if (is_dir($themes_dir)) {
            $theme_folders = glob($themes_dir . '/*', GLOB_ONLYDIR);
            $possible_locations = array_merge($possible_locations, $theme_folders);
        }

        // Remove duplicates and empty paths
        $possible_locations = array_filter(array_unique($possible_locations));

        // Function to find Carbon Fields in a directory
        function find_carbon_fields($base_path) {
            $possible_paths = array(
                '/vendor/autoload.php',
                '/vendor/htmlburger/carbon-fields/core/functions.php',
                '/carbon-fields/core/functions.php',
                '/wp-content/vendor/htmlburger/carbon-fields/core/functions.php'
            );

            foreach ($possible_paths as $path) {
                $full_path = $base_path . $path;
                if (file_exists($full_path)) {
                    return $full_path;
                }
            }
            return false;
        }

        // Try to find and load autoloader
        $autoloader_found = false;
        foreach ($possible_locations as $location) {
            if ($autoloader_path = find_carbon_fields($location)) {
                require_once($autoloader_path);
                error_log('Found Carbon Fields at: ' . $autoloader_path);
                $autoloader_found = true;
                break;
            }
        }

        if (!$autoloader_found) {
            // If not found, try composer install
            $theme_dir = get_template_directory();
            if (!file_exists($theme_dir . '/composer.json')) {
                file_put_contents($theme_dir . '/composer.json', json_encode([
                    'require' => [
                        'htmlburger/carbon-fields' => '^3.6'
                    ]
                ]));
            }
            
            throw new Exception(
                'Carbon Fields not found. Please run these commands in your theme directory: ' . 
                "\n1. composer require htmlburger/carbon-fields" .
                "\n2. Clear WordPress cache and refresh"
            );
        }

        if (!class_exists('\Carbon_Fields\Carbon_Fields')) {
            throw new Exception('Carbon Fields class not found after loading autoloader. Try clearing WordPress cache.');
        }

        \Carbon_Fields\Carbon_Fields::boot();

        // Try to load functions file
        $functions_found = false;
        foreach ($possible_locations as $location) {
            $functions_path = $location . '/vendor/htmlburger/carbon-fields/core/functions.php';
            if (file_exists($functions_path)) {
                require_once($functions_path);
                error_log('Loaded Carbon Fields functions from: ' . $functions_path);
                $functions_found = true;
                break;
            }
        }

        if (!$functions_found) {
            throw new Exception('Carbon Fields functions file not found. Please verify your installation.');
        }

        // Add success notice
        add_action('admin_notices', function() {
            echo '<div class="notice notice-success is-dismissible"><p>✅ Carbon Fields initialized successfully!</p></div>';
        });

    } catch (Exception $e) {
        error_log('Carbon Fields initialization failed: ' . $e->getMessage());
        
        // Add helpful error notice
        add_action('admin_notices', function() use ($e) {
            $message = $e->getMessage();
            $help_text = '
            <p><strong>How to fix this:</strong></p>
            <ol>
                <li>Open terminal/command prompt</li>
                <li>Navigate to your theme directory: <code>' . esc_html(get_template_directory()) . '</code></li>
                <li>Run: <code>composer require htmlburger/carbon-fields</code></li>
                <li>Clear WordPress cache</li>
                <li>Refresh this page</li>
            </ol>
            <p>If you don\'t have Composer installed, <a href="https://getcomposer.org/download/" target="_blank">download it here</a>.</p>';
            
            echo '<div class="error"><p>❌ Carbon Fields initialization failed: ' . esc_html($message) . '</p>';
            echo $help_text . '</div>';
        });
    }
}

// Helper function to check if a page matches template or slug
function tailpress_is_page($template, $slug) {
    global $post;
    
    if (!$post) {
        error_log('No post object available');
        return false;
    }
    
    // Get the current page's template and slug
    $current_template = get_page_template_slug($post->ID);
    $current_slug = $post->post_name;
    
    // Debug information
    error_log('Checking page match:');
    error_log('Template: ' . $current_template);
    error_log('Slug: ' . $current_slug);
    error_log('Expected template: ' . $template);
    error_log('Expected slug: ' . $slug);
    
    // Check if we're in the admin area
    if (is_admin()) {
        $screen = get_current_screen();
        if ($screen && $screen->base === 'post') {
            // In admin, check both template and slug
            $is_match = ($current_template === $template || $current_slug === $slug);
            error_log('Admin check result: ' . ($is_match ? 'true' : 'false'));
            return $is_match;
        }
    } else {
        // On frontend, check both template and slug
        $is_match = ($current_template === $template || $current_slug === $slug);
        error_log('Frontend check result: ' . ($is_match ? 'true' : 'false'));
        return $is_match;
    }
    
    return false;
}

// Helper function to safely get page ID by slug
function tailpress_get_page_id($slug) {
    $page = get_page_by_path($slug);
    return $page ? $page->ID : null;
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}

// Grooming Services Fields
add_action('carbon_fields_register_fields', 'crb_attach_grooming_fields');
function crb_attach_grooming_fields() {
    error_log('Attempting to attach grooming fields');
    
    Container::make('post_meta', 'Grooming Services')
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('complex', 'grooming_services', 'Services')
                ->set_layout('tabbed-vertical')
                ->setup_labels(array(
                    'plural_name' => 'Services',
                    'singular_name' => 'Service'
                ))
                ->add_fields(array(
                    Field::make('text', 'service_title', 'Service Title')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('textarea', 'service_description', 'Service Description')
                        ->set_required(true)
                        ->set_width(100),
                    Field::make('complex', 'service_includes', 'Service Includes')
                        ->add_fields(array(
                            Field::make('text', 'item', 'Include Item')
                                ->set_required(true)
                        )),
                    Field::make('complex', 'dog_prices', 'Dog Prices')
                        ->set_layout('tabbed-horizontal')
                        ->add_fields(array(
                            Field::make('text', 'xs', 'XS Price'),
                            Field::make('text', 's', 'S Price'),
                            Field::make('text', 'm', 'M Price'),
                            Field::make('text', 'l', 'L Price'),
                            Field::make('text', 'xl', 'XL Price'),
                        )),
                    Field::make('complex', 'cat_prices', 'Cat Prices')
                        ->set_layout('tabbed-horizontal')
                        ->add_fields(array(
                            Field::make('text', 'xs', 'XS Price'),
                            Field::make('text', 's', 'S Price'),
                            Field::make('text', 'm', 'M Price'),
                            Field::make('text', 'l', 'L Price'),
                            Field::make('text', 'xl', 'XL Price'),
                        )),
                )),
            Field::make('complex', 'boost_menu_items', 'Boost Menu Items')
                ->add_fields(array(
                    Field::make('text', 'item', 'Menu Item')
                        ->set_required(true)
                ))
        ));
    error_log('Metabox created successfully');
}

// Register all metaboxes
add_action('add_meta_boxes', 'tailz_register_all_metaboxes');
function tailz_register_all_metaboxes() {
    global $post;
    
    if (!$post) {
        return;
    }
    
    $template = get_page_template_slug($post->ID);
    $slug = $post->post_name;
    
    error_log('Checking page for metaboxes:');
    error_log('Template: ' . $template);
    error_log('Slug: ' . $slug);
    
    // Grooming Page
    if ($template === 'Grooming' || $slug === 'grooming') {
        add_meta_box(
            'grooming_services',
            'Grooming Services',
            'tailz_grooming_metabox_callback',
            'page',
            'normal',
            'high'
        );
    }
    
    // Training Page
    if ($template === 'Training' || $slug === 'training') {
        add_meta_box(
            'training_options',
            'Training Options',
            'tailz_training_metabox_callback',
            'page',
            'normal',
            'high'
        );
    }
    
    // Daycare Page
    if ($template === 'Daycare' || $slug === 'daycare') {
        add_meta_box(
            'daycare_services',
            'Daycare Services',
            'tailz_daycare_metabox_callback',
            'page',
            'normal',
            'high'
        );
    }
    
    // Hotel Page
    if ($template === 'Hotel' || $slug === 'hotel') {
        add_meta_box(
            'hotel_packages',
            'Hotel Packages',
            'tailz_hotel_metabox_callback',
            'page',
            'normal',
            'high'
        );
    }
    
    // Exercise Page
    if ($template === 'Exercise' || $slug === 'exercise') {
        add_meta_box(
            'exercise_options',
            'Exercise Options',
            'tailz_exercise_metabox_callback',
            'page',
            'normal',
            'high'
        );
    }
    
    // Portraits Page
    if ($template === 'Portraits' || $slug === 'portraits') {
        add_meta_box(
            'portrait_packages',
            'Portrait Packages',
            'tailz_portraits_metabox_callback',
            'page',
            'normal',
            'high'
        );
    }
    
    // About Page
    if ($template === 'About' || $slug === 'about-us') {
        add_meta_box(
            'about_page_settings',
            'About Page Settings',
            'tailz_about_metabox_callback',
            'page',
            'normal',
            'high'
        );
    }
}

// Training Metabox Callback
function tailz_training_metabox_callback($post) {
    wp_nonce_field('tailz_training_metabox', 'tailz_training_metabox_nonce');
    $puppy_classes = carbon_get_post_meta($post->ID, 'puppy_classes');
    ?>
    <div class="tailz-meta-box">
        <h3>Puppy Classes</h3>
        <div class="puppy-classes">
            <?php
            if (!empty($puppy_classes)) {
                foreach ($puppy_classes as $index => $class) {
                    ?>
                    <div class="class-item">
                        <h4>Class <?php echo $index + 1; ?></h4>
                        <p>
                            <label for="class_title_<?php echo $index; ?>">Title:</label>
                            <input type="text" id="class_title_<?php echo $index; ?>" name="puppy_classes[<?php echo $index; ?>][title]" value="<?php echo esc_attr($class['title']); ?>" class="widefat" />
                        </p>
                        <p>
                            <label for="class_duration_<?php echo $index; ?>">Duration:</label>
                            <input type="text" id="class_duration_<?php echo $index; ?>" name="puppy_classes[<?php echo $index; ?>][duration]" value="<?php echo esc_attr($class['duration']); ?>" class="widefat" />
                        </p>
                        <p>
                            <label for="class_price_<?php echo $index; ?>">Price:</label>
                            <input type="text" id="class_price_<?php echo $index; ?>" name="puppy_classes[<?php echo $index; ?>][price]" value="<?php echo esc_attr($class['price']); ?>" class="widefat" />
                        </p>
                        <div class="description">
                            <h5>Description:</h5>
                            <?php
                            if (!empty($class['description'])) {
                                foreach ($class['description'] as $desc_index => $desc) {
                                    ?>
                                    <p>
                                        <textarea name="puppy_classes[<?php echo $index; ?>][description][<?php echo $desc_index; ?>][paragraph]" class="widefat"><?php echo esc_textarea($desc['paragraph']); ?></textarea>
                                    </p>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="topics">
                            <h5>Topics:</h5>
                            <?php
                            if (!empty($class['topics'])) {
                                foreach ($class['topics'] as $topic_index => $topic) {
                                    ?>
                                    <p>
                                        <input type="text" name="puppy_classes[<?php echo $index; ?>][topics][<?php echo $topic_index; ?>][topic]" value="<?php echo esc_attr($topic['topic']); ?>" class="widefat" />
                                    </p>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <?php
}

// Daycare Metabox Callback
function tailz_daycare_metabox_callback($post) {
    wp_nonce_field('tailz_daycare_metabox', 'tailz_daycare_metabox_nonce');
    $daily_rates = carbon_get_post_meta($post->ID, 'daily_rates');
    ?>
    <div class="tailz-meta-box">
        <h3>Daily Rates</h3>
        <div class="daily-rates">
            <?php
            if (!empty($daily_rates)) {
                foreach ($daily_rates as $index => $rate) {
                    ?>
                    <div class="rate-item">
                        <h4>Rate <?php echo $index + 1; ?></h4>
                        <p>
                            <label for="rate_title_<?php echo $index; ?>">Title:</label>
                            <input type="text" id="rate_title_<?php echo $index; ?>" name="daily_rates[<?php echo $index; ?>][title]" value="<?php echo esc_attr($rate['title']); ?>" class="widefat" />
                        </p>
                        <p>
                            <label for="rate_price_<?php echo $index; ?>">Price:</label>
                            <input type="text" id="rate_price_<?php echo $index; ?>" name="daily_rates[<?php echo $index; ?>][price]" value="<?php echo esc_attr($rate['price']); ?>" class="widefat" />
                        </p>
                        <div class="description">
                            <h5>Description:</h5>
                            <?php
                            if (!empty($rate['description'])) {
                                foreach ($rate['description'] as $desc_index => $desc) {
                                    ?>
                                    <p>
                                        <textarea name="daily_rates[<?php echo $index; ?>][description][<?php echo $desc_index; ?>][paragraph]" class="widefat"><?php echo esc_textarea($desc['paragraph']); ?></textarea>
                                    </p>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <?php
}

// Hotel Metabox Callback
function tailz_hotel_metabox_callback($post) {
    wp_nonce_field('tailz_hotel_metabox', 'tailz_hotel_metabox_nonce');
    $hotel_packages = carbon_get_post_meta($post->ID, 'hotel_packages');
    ?>
    <div class="tailz-meta-box">
        <h3>Hotel Packages</h3>
        <div class="hotel-packages">
            <?php
            if (!empty($hotel_packages)) {
                foreach ($hotel_packages as $index => $package) {
                    ?>
                    <div class="package-item">
                        <h4>Package <?php echo $index + 1; ?></h4>
                        <p>
                            <label for="package_title_<?php echo $index; ?>">Title:</label>
                            <input type="text" id="package_title_<?php echo $index; ?>" name="hotel_packages[<?php echo $index; ?>][title]" value="<?php echo esc_attr($package['title']); ?>" class="widefat" />
                        </p>
                        <p>
                            <label for="package_price_<?php echo $index; ?>">Price:</label>
                            <input type="text" id="package_price_<?php echo $index; ?>" name="hotel_packages[<?php echo $index; ?>][price]" value="<?php echo esc_attr($package['price']); ?>" class="widefat" />
                        </p>
                        <div class="description">
                            <h5>Description:</h5>
                            <?php
                            if (!empty($package['description'])) {
                                foreach ($package['description'] as $desc_index => $desc) {
                                    ?>
                                    <p>
                                        <textarea name="hotel_packages[<?php echo $index; ?>][description][<?php echo $desc_index; ?>][paragraph]" class="widefat"><?php echo esc_textarea($desc['paragraph']); ?></textarea>
                                    </p>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <?php
}

// Exercise Metabox Callback
function tailz_exercise_metabox_callback($post) {
    wp_nonce_field('tailz_exercise_metabox', 'tailz_exercise_metabox_nonce');
    $exercise_options = carbon_get_post_meta($post->ID, 'exercise_options');
    ?>
    <div class="tailz-meta-box">
        <h3>Exercise Options</h3>
        <div class="exercise-options">
            <?php
            if (!empty($exercise_options)) {
                foreach ($exercise_options as $index => $option) {
                    ?>
                    <div class="option-item">
                        <h4>Option <?php echo $index + 1; ?></h4>
                        <p>
                            <label for="option_title_<?php echo $index; ?>">Title:</label>
                            <input type="text" id="option_title_<?php echo $index; ?>" name="exercise_options[<?php echo $index; ?>][title]" value="<?php echo esc_attr($option['title']); ?>" class="widefat" />
                        </p>
                        <p>
                            <label for="option_price_<?php echo $index; ?>">Price:</label>
                            <input type="text" id="option_price_<?php echo $index; ?>" name="exercise_options[<?php echo $index; ?>][price]" value="<?php echo esc_attr($option['price']); ?>" class="widefat" />
                        </p>
                        <div class="description">
                            <h5>Description:</h5>
                            <?php
                            if (!empty($option['description'])) {
                                foreach ($option['description'] as $desc_index => $desc) {
                                    ?>
                                    <p>
                                        <textarea name="exercise_options[<?php echo $index; ?>][description][<?php echo $desc_index; ?>][paragraph]" class="widefat"><?php echo esc_textarea($desc['paragraph']); ?></textarea>
                                    </p>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <?php
}

// Portraits Metabox Callback
function tailz_portraits_metabox_callback($post) {
    wp_nonce_field('tailz_portraits_metabox', 'tailz_portraits_metabox_nonce');
    $portrait_packages = carbon_get_post_meta($post->ID, 'portrait_packages');
    ?>
    <div class="tailz-meta-box">
        <h3>Portrait Packages</h3>
        <div class="portrait-packages">
            <?php
            if (!empty($portrait_packages)) {
                foreach ($portrait_packages as $index => $package) {
                    ?>
                    <div class="package-item">
                        <h4>Package <?php echo $index + 1; ?></h4>
                        <p>
                            <label for="package_title_<?php echo $index; ?>">Title:</label>
                            <input type="text" id="package_title_<?php echo $index; ?>" name="portrait_packages[<?php echo $index; ?>][title]" value="<?php echo esc_attr($package['title']); ?>" class="widefat" />
                        </p>
                        <p>
                            <label for="package_price_<?php echo $index; ?>">Price:</label>
                            <input type="text" id="package_price_<?php echo $index; ?>" name="portrait_packages[<?php echo $index; ?>][price]" value="<?php echo esc_attr($package['price']); ?>" class="widefat" />
                        </p>
                        <div class="description">
                            <h5>Description:</h5>
                            <?php
                            if (!empty($package['description'])) {
                                foreach ($package['description'] as $desc_index => $desc) {
                                    ?>
                                    <p>
                                        <textarea name="portrait_packages[<?php echo $index; ?>][description][<?php echo $desc_index; ?>][paragraph]" class="widefat"><?php echo esc_textarea($desc['paragraph']); ?></textarea>
                                    </p>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <?php
}

// About Page Metabox Callback
function tailz_about_metabox_callback($post) {
    wp_nonce_field('tailz_about_metabox', 'tailz_about_metabox_nonce');
    $story_bubbles = carbon_get_post_meta($post->ID, 'story_bubbles');
    $team_members = carbon_get_post_meta($post->ID, 'team_members');
    ?>
    <div class="tailz-meta-box">
        <h3>Story Section Bubbles</h3>
        <div class="story-bubbles">
            <?php
            if (!empty($story_bubbles)) {
                foreach ($story_bubbles as $index => $bubble) {
                    ?>
                    <div class="bubble-item">
                        <h4>Bubble <?php echo $index + 1; ?></h4>
                        <p>
                            <label for="bubble_title_<?php echo $index; ?>">Title:</label>
                            <input type="text" id="bubble_title_<?php echo $index; ?>" name="story_bubbles[<?php echo $index; ?>][title]" value="<?php echo esc_attr($bubble['title']); ?>" class="widefat" />
                        </p>
                        <p>
                            <label for="bubble_description_<?php echo $index; ?>">Description:</label>
                            <textarea id="bubble_description_<?php echo $index; ?>" name="story_bubbles[<?php echo $index; ?>][description]" class="widefat"><?php echo esc_textarea($bubble['description']); ?></textarea>
                        </p>
                        <p>
                            <label for="bubble_image_<?php echo $index; ?>">Image:</label>
                            <input type="text" id="bubble_image_<?php echo $index; ?>" name="story_bubbles[<?php echo $index; ?>][image]" value="<?php echo esc_attr($bubble['image']); ?>" class="widefat" />
                        </p>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        
        <h3>Team Members</h3>
        <div class="team-members">
            <?php
            if (!empty($team_members)) {
                foreach ($team_members as $index => $member) {
                    ?>
                    <div class="member-item">
                        <h4>Member <?php echo $index + 1; ?></h4>
                        <p>
                            <label for="member_name_<?php echo $index; ?>">Name:</label>
                            <input type="text" id="member_name_<?php echo $index; ?>" name="team_members[<?php echo $index; ?>][name]" value="<?php echo esc_attr($member['name']); ?>" class="widefat" />
                        </p>
                        <p>
                            <label for="member_role_<?php echo $index; ?>">Role:</label>
                            <input type="text" id="member_role_<?php echo $index; ?>" name="team_members[<?php echo $index; ?>][role]" value="<?php echo esc_attr($member['role']); ?>" class="widefat" />
                        </p>
                        <p>
                            <label for="member_bio_<?php echo $index; ?>">Bio:</label>
                            <textarea id="member_bio_<?php echo $index; ?>" name="team_members[<?php echo $index; ?>][bio]" class="widefat"><?php echo esc_textarea($member['bio']); ?></textarea>
                        </p>
                        <p>
                            <label for="member_photo_<?php echo $index; ?>">Photo:</label>
                            <input type="text" id="member_photo_<?php echo $index; ?>" name="team_members[<?php echo $index; ?>][photo]" value="<?php echo esc_attr($member['photo']); ?>" class="widefat" />
                        </p>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <?php
}

// Save all metabox data
add_action('save_post', 'tailz_save_all_metaboxes');
function tailz_save_all_metaboxes($post_id) {
    // Check if our nonce is set
    if (!isset($_POST['tailz_grooming_metabox_nonce']) && 
        !isset($_POST['tailz_training_metabox_nonce']) && 
        !isset($_POST['tailz_daycare_metabox_nonce']) && 
        !isset($_POST['tailz_hotel_metabox_nonce']) && 
        !isset($_POST['tailz_exercise_metabox_nonce']) && 
        !isset($_POST['tailz_portraits_metabox_nonce']) && 
        !isset($_POST['tailz_about_metabox_nonce'])) {
        return;
    }
    
    // If this is an autosave, our form has not been submitted, so we don't want to do anything
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Check the user's permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save the data for each metabox
    if (isset($_POST['grooming_services'])) {
        carbon_set_post_meta($post_id, 'grooming_services', $_POST['grooming_services']);
    }
    if (isset($_POST['boost_menu_items'])) {
        carbon_set_post_meta($post_id, 'boost_menu_items', $_POST['boost_menu_items']);
    }
    if (isset($_POST['puppy_classes'])) {
        carbon_set_post_meta($post_id, 'puppy_classes', $_POST['puppy_classes']);
    }
    if (isset($_POST['daily_rates'])) {
        carbon_set_post_meta($post_id, 'daily_rates', $_POST['daily_rates']);
    }
    if (isset($_POST['hotel_packages'])) {
        carbon_set_post_meta($post_id, 'hotel_packages', $_POST['hotel_packages']);
    }
    if (isset($_POST['exercise_options'])) {
        carbon_set_post_meta($post_id, 'exercise_options', $_POST['exercise_options']);
    }
    if (isset($_POST['portrait_packages'])) {
        carbon_set_post_meta($post_id, 'portrait_packages', $_POST['portrait_packages']);
    }
    if (isset($_POST['story_bubbles'])) {
        carbon_set_post_meta($post_id, 'story_bubbles', $_POST['story_bubbles']);
    }
    if (isset($_POST['team_members'])) {
        carbon_set_post_meta($post_id, 'team_members', $_POST['team_members']);
    }
}

// Training Options Fields
add_action('carbon_fields_register_fields', 'crb_training_options');
function crb_training_options() {
    if (tailpress_is_page('page-training.php', 'training')) {
        Container::make('post_meta', 'Training Options')
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
                            )),
                        Field::make('complex', 'topics', 'Topics Reviewed')
                            ->add_fields(array(
                                Field::make('text', 'topic', 'Topic')
                                    ->set_required(true)
                            ))
                    ))
            ));
    }
}

// Daycare Services Fields
add_action('carbon_fields_register_fields', 'crb_attach_daycare_fields');
function crb_attach_daycare_fields() {
    if (tailpress_is_page('page-daycare.php', 'daycare')) {
        Container::make('post_meta', 'Daycare Services')
            ->add_fields(array(
                Field::make('complex', 'daily_rates', 'Daily Rates')
                    ->set_layout('tabbed-vertical')
                    ->setup_labels(array(
                        'plural_name' => 'Rates',
                        'singular_name' => 'Rate'
                    ))
                    ->add_fields(array(
                        Field::make('text', 'title', 'Rate Title')
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
                    ))
            ));
    }
}

// Hotel Packages Fields
add_action('carbon_fields_register_fields', 'crb_attach_hotel_fields');
function crb_attach_hotel_fields() {
    if (tailpress_is_page('page-hotel.php', 'hotel')) {
        Container::make('post_meta', 'Hotel Packages')
            ->add_fields(array(
                Field::make('complex', 'hotel_packages', 'Hotel Packages')
                    ->set_layout('tabbed-vertical')
                    ->setup_labels(array(
                        'plural_name' => 'Packages',
                        'singular_name' => 'Package'
                    ))
                    ->add_fields(array(
                        Field::make('text', 'title', 'Package Title')
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
                    ))
            ));
    }
}

// Exercise Options Fields
add_action('carbon_fields_register_fields', 'crb_exercise_options');
function crb_exercise_options() {
    if (tailpress_is_page('page-exercise.php', 'exercise')) {
        Container::make('post_meta', 'Exercise Options')
            ->add_fields(array(
                Field::make('complex', 'exercise_options', 'Exercise Options')
                    ->set_layout('tabbed-vertical')
                    ->setup_labels(array(
                        'plural_name' => 'Options',
                        'singular_name' => 'Option'
                    ))
                    ->add_fields(array(
                        Field::make('text', 'title', 'Option Title')
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
                    ))
            ));
    }
}

// Portrait Packages Fields
add_action('carbon_fields_register_fields', 'crb_attach_portrait_fields');
function crb_attach_portrait_fields() {
    if (tailpress_is_page('page-portraits.php', 'portraits')) {
        Container::make('post_meta', 'Portrait Packages')
            ->add_fields(array(
                Field::make('complex', 'portrait_packages', 'Portrait Packages')
                    ->set_layout('tabbed-vertical')
                    ->setup_labels(array(
                        'plural_name' => 'Packages',
                        'singular_name' => 'Package'
                    ))
                    ->add_fields(array(
                        Field::make('text', 'title', 'Package Title')
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
                    ))
            ));
    }
}

// About Page Fields
add_action('carbon_fields_register_fields', 'crb_attach_about_page_fields');
function crb_attach_about_page_fields() {
    if (tailpress_is_page('page-about-us.php', 'about-us')) {
        Container::make('post_meta', 'About Page Settings')
            ->add_fields([
                // Story Section Bubbles
                Field::make('complex', 'story_bubbles', 'Story Section Bubbles')
                    ->set_layout('tabbed-vertical')
                    ->setup_labels(array(
                        'plural_name' => 'Bubbles',
                        'singular_name' => 'Bubble'
                    ))
                    ->add_fields(array(
                        Field::make('text', 'title', 'Bubble Title')
                            ->set_required(true)
                            ->set_width(100),
                        Field::make('textarea', 'description', 'Description')
                            ->set_required(true)
                            ->set_width(100),
                        Field::make('image', 'image', 'Bubble Image')
                            ->set_required(true)
                            ->set_width(100)
                    )),
                // Team Members
                Field::make('complex', 'team_members', 'Team Members')
                    ->set_layout('tabbed-vertical')
                    ->setup_labels(array(
                        'plural_name' => 'Members',
                        'singular_name' => 'Member'
                    ))
                    ->add_fields(array(
                        Field::make('text', 'name', 'Name')
                            ->set_required(true)
                            ->set_width(100),
                        Field::make('text', 'role', 'Role')
                            ->set_required(true)
                            ->set_width(100),
                        Field::make('textarea', 'bio', 'Bio')
                            ->set_required(true)
                            ->set_width(100),
                        Field::make('image', 'photo', 'Photo')
                            ->set_required(true)
                            ->set_width(100)
                    ))
            ]);
    }
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

// Add Carbon Fields function fallbacks
if (!function_exists('carbon_get_post_meta')) {
    function carbon_get_post_meta($id, $name, $type = null) {
        error_log('Carbon Fields not loaded! Attempting to load...');
        
        // Try to load Carbon Fields
        if (!class_exists('\Carbon_Fields\Carbon_Fields')) {
            if (function_exists('crb_load')) {
                crb_load();
            } else {
                error_log('Carbon Fields initialization function not found!');
                return null;
            }
        }
        
        // If still not loaded, return null
        if (!function_exists('\Carbon_Fields\carbon_get_post_meta')) {
            error_log('Carbon Fields functions still not available after loading attempt!');
            return null;
        }
        
        return \Carbon_Fields\carbon_get_post_meta($id, $name, $type);
    }
}