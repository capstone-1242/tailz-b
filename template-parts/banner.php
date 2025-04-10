<?php
/**
 * Banner Template Part
 * 
 * @param array $args {
 *     Optional. Array of arguments.
 *     @type string $form_id The ID of the form for accessibility and JavaScript.
 * }
 */

$form_id = isset($args['form_id']) ? $args['form_id'] : 'default';
$is_desktop = $form_id === 'desktop';
?>

 <!-- Banner Mobile -->
<?php
  // Get the featured image of the page
  if (has_post_thumbnail()) {
    $cover_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the full-size featured image URL
  } else {
    // If no featured image is set, fall back to a default image
    $cover_image = get_template_directory_uri() . '/images/default-cover.jpg'; // Default cover image
  }

  // Get the cover text (use custom field or fallback to page title)
  $cover_text = get_post_meta(get_the_ID(), 'cover_text', true); // Retrieve custom field 'cover_text'
  if (!$cover_text) {
    $cover_text = get_the_title(); // If no custom cover text, fallback to the page title
  }
?>

<section class="custom-cover" style="background-image: url('<?php echo esc_url($cover_image); ?>');">
  <div class="cover-overlay">
    <?php 
      // Output the cover text (supports HTML from custom field)
      echo wp_kses_post($cover_text);
    ?>
  </div>
</section>

