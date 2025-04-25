<?php
/**
 * Contact Form Template Part
 * 
 * Just a styled wrapper around the CF7 shortcode.
 */

$form_id = $args['form_id'] ?? 'default';
?>

<div class="relative bg-[#F3F2EC] rounded-[30px] pt-20 pb-12 px-4 sm:px-6 md:p-12 mb-24">
  <div class="space-y-6">
    <?php echo do_shortcode('[contact-form-7 id="2741b84" title="Tailz Contact Form" html_class="wpcf7-form space-y-6"]'); ?>
  </div>
</div>  