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

 <!-- Banner -->
<?php
  if (has_post_thumbnail()) {
    $cover_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
  } else {
    $cover_image = get_template_directory_uri() . '/images/default-cover.jpg';
  }

  $cover_text = get_post_meta(get_the_ID(), 'cover_text', true);
  if (!$cover_text) {
    $cover_text = get_the_title();
  }
?>

<section class="custom-cover" style="background-image: url('<?php echo esc_url($cover_image); ?>');">
  <div class="cover-overlay shapedividers_com-6543">
    <?php 
      echo wp_kses_post($cover_text);
    ?>
  </div>
</section>




