<?php
/**
 * Contact Form Template Part
 * 
 * @package tailz
 */

// Get the form ID from the passed args
$form_id = isset($args['form_id']) ? $args['form_id'] : 'default';

// Common classes and configurations
$config = [
    'input' => [
        'base' => "contact-form-input",
    ],
    'label' => "contact-form-label",
    'required' => ' *',
    'fields' => [
        'first_name' => [
            'type' => 'text',
            'label' => 'first name',
            'required' => true
        ],
        'last_name' => [
            'type' => 'text',
            'label' => 'last name',
            'required' => true
        ],
        'email' => [
            'type' => 'email',
            'label' => 'email',
            'required' => true
        ],
        'subject' => [
            'type' => 'text',
            'label' => 'subject',
            'required' => false
        ],
        'message' => [
            'type' => 'textarea',
            'label' => 'message',
            'required' => true,
            'rows' => 6
        ]
    ]
];

if (!function_exists('tailz_render_contact_form_field')) {
    /**
     * Renders a form field based on configuration
     * 
     * @param string $field_name The field name
     * @param array $field_config The field configuration
     * @param string $form_id The form ID
     * @param array $config Global configuration
     */
    function tailz_render_contact_form_field($field_name, $field_config, $form_id, $config) {
        $id = $field_name . '-' . esc_attr($form_id);
        $is_textarea = $field_config['type'] === 'textarea';
        $input_classes = $is_textarea ? 'contact-form-textarea' : $config['input']['base'];
        ?>
        <div class="contact-form-field">
            <label for="<?php echo $id; ?>" class="<?php echo esc_attr($config['label']); ?>">
                <?php 
                echo esc_html($field_config['label']);
                if ($field_config['required']) echo $config['required'];
                ?>
            </label>
            <?php if ($is_textarea): ?>
                <textarea 
                    id="<?php echo $id; ?>"
                    name="<?php echo esc_attr($field_name); ?>"
                    rows="<?php echo esc_attr($field_config['rows']); ?>"
                    class="<?php echo esc_attr($input_classes); ?>"
                    <?php echo $field_config['required'] ? 'required' : ''; ?>
                ></textarea>
            <?php else: ?>
                <input 
                    type="<?php echo esc_attr($field_config['type']); ?>"
                    id="<?php echo $id; ?>"
                    name="<?php echo esc_attr($field_name); ?>"
                    class="<?php echo esc_attr($input_classes); ?>"
                    <?php echo $field_config['required'] ? 'required' : ''; ?>
                >
            <?php endif; ?>
        </div>
        <?php
    }
}
?>

<div class="contact-form-container">
    <!-- Form Header -->
    <div class="contact-form-header">
        <h3 class="contact-form-title">
            please enter in your information below
        </h3>
        <button 
            type="reset" 
            class="contact-form-clear-btn"
            onclick="return confirm('Are you sure you want to clear the form?');"
        >
            CLEAR
        </button>
    </div>

    <!-- Form Content -->
    <form id="contact-form-<?php echo esc_attr($form_id); ?>" method="post">
        <!-- Name Fields Row -->
        <div class="flex flex-col md:flex-row md:gap-4">
            <!-- First and Last Name -->
            <?php foreach(['first_name', 'last_name'] as $name_field): ?>
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <?php tailz_render_contact_form_field($name_field, $config['fields'][$name_field], $form_id, $config); ?>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Email Field -->
        <?php tailz_render_contact_form_field('email', $config['fields']['email'], $form_id, $config); ?>

        <!-- Separator Line -->
        <hr class="contact-form-separator">

        <!-- Subject Field -->
        <?php tailz_render_contact_form_field('subject', $config['fields']['subject'], $form_id, $config); ?>

        <!-- Message Field -->
        <?php tailz_render_contact_form_field('message', $config['fields']['message'], $form_id, $config); ?>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="contact-form-submit">
                send
            </button>
        </div>
    </form>
</div>