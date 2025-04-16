<?php
/**
 * Contact Form Template Part
 * 
 * @param array $args {
 *     Optional. Array of arguments.
 *     @type string $form_id The ID of the form for accessibility and JavaScript.
 * }
 */

$form_id = isset($args['form_id']) ? $args['form_id'] : 'default';
$is_desktop = $form_id === 'desktop';
?>

<!-- Update container: extra top padding on mobile (pt-20) ensures the heading stays below the clear button -->
<div class="relative bg-[#F3F2EC] rounded-[30px] pt-20 pb-8 px-4 sm:px-6 md:p-12">
  <!-- Clear Button (always absolutely positioned in the container) -->
  <button type="button" 
    onclick="document.getElementById('contact-form-<?php echo $form_id; ?>').reset();"
    class="absolute top-8 right-8 <?php echo $is_desktop ? 'font-poppins text-[20px] font-normal' : 'font-worksans text-[16px] uppercase'; ?> text-[#000000] hover:opacity-80 transition-opacity">
    Clear
  </button>

  <!-- Form Title (the extra top padding now pushes this below the clear button) -->
  <h2 class="font-poppins font-bold <?php echo $is_desktop ? 'text-[42.65px]' : 'text-[28px]'; ?> text-[#47423B] mb-8">
    Send us an email
  </h2>

  <form 
    id="contact-form-<?php echo $form_id; ?>" 
    class="space-y-6" 
    method="post" 
    action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
    aria-label="Contact form"
  >
    <input type="hidden" name="action" value="tailz_contact_form">
    <?php wp_nonce_field('tailz_contact_form_nonce', 'tailz_contact_form_nonce'); ?>

    <!-- Name Fields Row -->
    <div class="<?php echo $is_desktop ? 'flex gap-6' : 'space-y-4'; ?>">
      <!-- First Name -->
      <div class="<?php echo $is_desktop ? 'w-[503px]' : 'w-full'; ?>">
        <label for="first-name-<?php echo esc_attr($form_id); ?>" class="block font-worksans text-[16px] text-[#47423B] mb-2">
          first name *
        </label>
        <input 
          type="text" 
          id="first-name-<?php echo esc_attr($form_id); ?>" 
          name="first_name" 
          class="w-full h-[60px] px-4 rounded-[10px] border border-[#D9D9D9] bg-white" 
          required
        >
      </div>

      <!-- Last Name -->
      <div class="<?php echo $is_desktop ? 'w-[503px]' : 'w-full'; ?>">
        <label for="last-name-<?php echo esc_attr($form_id); ?>" class="block font-worksans text-[16px] text-[#47423B] mb-2">
          last name *
        </label>
        <input 
          type="text" 
          id="last-name-<?php echo esc_attr($form_id); ?>" 
          name="last_name" 
          class="w-full h-[60px] px-4 rounded-[10px] border border-[#D9D9D9] bg-white" 
          required
        >
      </div>
    </div>

    <!-- Email Field -->
    <div class="<?php echo $is_desktop ? 'w-[503px]' : 'w-full'; ?>">
      <label for="email-<?php echo esc_attr($form_id); ?>" class="block font-worksans text-[16px] text-[#47423B] mb-2">
        email *
      </label>
      <input 
        type="email" 
        id="email-<?php echo esc_attr($form_id); ?>" 
        name="email" 
        class="w-full h-[60px] px-4 rounded-[10px] border border-[#D9D9D9] bg-white" 
        required
      >
    </div>

    <!-- Separator -->
    <div class="<?php echo $is_desktop ? 'max-w-[1063.2px]' : 'w-full'; ?>">
      <div class="h-[5px] bg-[#AAAAAA] w-full"></div>
    </div>

    <!-- Subject Field -->
    <div class="<?php echo $is_desktop ? 'w-[503px]' : 'w-full'; ?>">
      <label for="subject-<?php echo esc_attr($form_id); ?>" class="block font-worksans text-[16px] text-[#47423B] mb-2">
        subject *
      </label>
      <input 
        type="text" 
        id="subject-<?php echo esc_attr($form_id); ?>" 
        name="subject" 
        class="w-full h-[60px] px-4 rounded-[10px] border border-[#D9D9D9] bg-white" 
        required
      >
    </div>

    <!-- Message Field -->
    <div>
      <label for="message-<?php echo esc_attr($form_id); ?>" class="block font-worksans text-[16px] text-[#47423B] mb-2">
        message *
      </label>
      <div class="<?php echo $is_desktop ? 'max-w-[1063.2px]' : 'w-full'; ?>">
        <textarea 
          id="message-<?php echo esc_attr($form_id); ?>" 
          name="message" 
          class="w-full h-[282px] md:h-[326px] px-4 py-3 rounded-[10px] border border-[#D9D9D9] bg-white resize-none" 
          required
        ></textarea>
      </div>
    </div>

    <!-- Submit Button -->
    <div>
      <button 
        type="submit" 
        class="font-poppins font-bold text-[18px] text-white bg-[#FEA91D] rounded-[60px] <?php echo $is_desktop ? 'w-[159.54px] h-[60px]' : 'w-[128px] h-[46px]'; ?>"
      >
        send
      </button>
    </div>
  </form>
</div> 