<?php
/**
 * Standardized FAQ Section Template for ACF Free
 * With alignment and sizing matching the bullet-style FAQs
 * 
 * Include this template in your page templates with:
 * get_template_part('template-parts/faq-section');
 */

// Check if ACF is active
if (!function_exists('get_field')) {
    return;
}

// Get FAQ data from ACF
$faq_title = get_field('faq_title');
if (empty($faq_title)) {
    $faq_title = 'FAQs';
}

// Check if title should be lowercase
$lowercase_title = get_field('faq_lowercase_title');
if ($lowercase_title) {
    $title_class = "lowercase";
} else {
    $title_class = "";
}

$faq_count = (int) get_field('faq_count');
if ($faq_count <= 0) {
    $faq_count = 5; // Default to 5 if not set
}

// Prepare FAQ items array
$faq_items = [];
for ($i = 1; $i <= $faq_count; $i++) {
    $question = get_field('faq_question_' . $i);
    $answer = get_field('faq_answer_' . $i);
    
    // Only add if both question and answer are filled in
    if (!empty($question) && !empty($answer)) {
        $faq_items[] = [
            'question' => $question,
            'answer' => $answer
        ];
    }
}

// If no FAQ items, exit
if (empty($faq_items)) {
    return;
}
?>

<!-- FAQs Section -->
<section aria-labelledby="faq-heading" role="region" class="faq-section">
    <div class="flex flex-col gap-[30px] md:gap-[40px] md:w-2/3">
        <h2 id="faq-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] <?php echo $title_class; ?>">
            <?php echo esc_html($faq_title); ?>
        </h2>
        
        <?php foreach ($faq_items as $index => $faq) : 
            $faq_id = 'faq-' . ($index + 1);
        ?>
            <div class="flex flex-col gap-4" role="region" aria-labelledby="<?php echo $faq_id; ?>">
                <h3 id="<?php echo $faq_id; ?>" class="flex items-start gap-2 text-[22px] md:text-[42.7px] text-[#47423B]">
                    <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mt-1 w-[24px] h-[22px] md:w-[30px] md:h-[26px]" aria-hidden="true" focusable="false">
                        <path d="M11.2135 7.42917C12.9174 6.82501 13.8259 4.90571 13.242 3.14241C12.6589 1.37966 10.8046 0.438625 9.10038 1.0429C7.39639 1.64657 6.48785 3.56576 7.0712 5.32911C7.65484 7.09295 9.50923 8.03235 11.2135 7.42917Z" fill="#2C2C2C" />
                        <path d="M5.9995 12.6826V12.6832C6.97834 11.118 6.54535 9.02784 5.03366 8.01526C3.52139 7.00322 1.50211 7.45039 0.523327 9.01505V9.01565C-0.454874 10.5803 -0.0219343 12.6699 1.48981 13.6819C3.00202 14.695 5.021 14.2473 5.9995 12.6826Z" fill="#2C2C2C" />
                        <path d="M18.7856 7.42922C20.4898 8.03235 22.3442 7.09301 22.9278 5.32911C23.5111 3.56576 22.6026 1.64657 20.8987 1.0429C19.1945 0.438619 17.3401 1.37972 16.757 3.14241C16.1731 4.90576 17.0817 6.82507 18.7856 7.42922Z" fill="#2C2C2C" />
                        <path d="M15.001 9.08838C9.84627 9.08838 4.15858 16.4746 5.80514 21.7301C7.39488 26.8042 12.3617 24.713 15.001 24.713C17.6403 24.713 22.6071 26.8042 24.1968 21.7301C25.8434 16.4746 20.1557 9.08838 15.001 9.08838Z" fill="#2C2C2C" />
                        <path d="M29.4765 9.01565V9.01505C28.4977 7.45039 26.4785 7.00321 24.9662 8.01526C23.4545 9.02784 23.0216 11.118 24.0003 12.6832V12.6826C24.9788 14.2473 26.9978 14.6951 28.51 13.6819C30.0217 12.6699 30.4547 10.5804 29.4765 9.01565Z" fill="#2C2C2C" />
                    </svg>
                    <span class="<?php echo $title_class; ?>"><?php echo esc_html($faq['question']); ?></span>
                </h3>
                <p class="text-[18px] md:text-[24px] text-[#2C2C2C] leading-normal pl-[34px] md:pl-[38px]">
                    <?php echo esc_html($faq['answer']); ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>