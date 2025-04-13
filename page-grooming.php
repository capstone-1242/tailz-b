<?php
/**
 * Template Name: Grooming
 * Description: A custom template for the Grooming page with services and FAQs
 *
 * @package tailz
 */

get_header();

// Get grooming services
$services = carbon_get_post_meta(get_the_ID(), 'grooming_services');
error_log('Raw Carbon Fields data for grooming_services: ' . print_r($services, true));

$services_array = array();

// Process each grooming service entry
if (!empty($services)) {
    foreach ($services as $service) {
        error_log('Processing service: ' . $service['service_title']);

        // Get the first row of dog_prices and cat_prices (if they exist)
        $dog_prices_raw = (isset($service['dog_prices']) && is_array($service['dog_prices'])) ? reset($service['dog_prices']) : array();
        $cat_prices_raw = (isset($service['cat_prices']) && is_array($service['cat_prices'])) ? reset($service['cat_prices']) : array();

        // Define the supported sizes
        $sizes = ['xs', 's', 'm', 'l', 'xl'];

        // Process prices using the actual keys without a suffix
        $dog_prices = array();
        $cat_prices = array();
        foreach ($sizes as $size) {
            $price_key = $size;  // Use the key exactly as provided by Carbon Fields
            $dog_prices[$size] = (isset($dog_prices_raw[$price_key]) && $dog_prices_raw[$price_key] !== '')
                ? $dog_prices_raw[$price_key]
                : 'N/A';
            $cat_prices[$size] = (isset($cat_prices_raw[$price_key]) && $cat_prices_raw[$price_key] !== '')
                ? $cat_prices_raw[$price_key]
                : 'N/A';

            error_log("Processed dog price for {$size}: " . $dog_prices[$size]);
            error_log("Processed cat price for {$size}: " . $cat_prices[$size]);
        }
        
        $services_array[] = array(
            'title'       => $service['service_title'],
            'description' => $service['service_description'],
            'includes'    => $service['service_includes'],
            'dog_prices'  => $dog_prices,
            'cat_prices'  => $cat_prices
        );
    }
}

error_log('Final processed services array: ' . print_r($services_array, true));

/**
 * Helper function to render a single tab (DOG or CAT) for grooming services.
 */
/*
function render_grooming_tab( $animal, $services ) {
    // ... removing this function as it's no longer needed ...
}
*/
?>

<main class="flex flex-col gap-[var(--section-spacing-mobile)] md:gap-[var(--section-spacing-desktop)]">
    <!-- Banner -->
    <section class="flex flex-col gap-3" aria-label="Page banner">
        <div class="relative h-[15.375rem] md:h-[31.25rem] w-full overflow-hidden">
            <?php
                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if($featured_image_url) : ?>
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url($featured_image_url); ?>')" role="img" aria-label="<?php echo esc_attr(get_the_title()); ?> banner image"></div>
                <?php endif; ?>
                <div class="container flex flex-col absolute inset-0 justify-end my-[43px] md:my-[90px]">
                    <h1 class="font-poppins font-bold text-[53.75px] md:text-[120px] text-white"><?php echo esc_html(get_the_title()); ?></h1>
                    <p class="uppercase text-[18px] md:text-[22px] text-white">Pamper your pet from head to Tailz</p>
                </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="container mx-[var(--container-margin-mobile)] md:mx-[var(--container-margin-desktop)]" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-[14px] md:text-[16px]">
            <li><a href="<?php echo esc_url(home_url()); ?>" class="text-[#47423B]">Home</a></li>
            <li><span class="text-[#47423B]">/</span></li>
            <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-[#47423B]">Services</a></li>
            <li><span class="text-[#47423B]">/</span></li>
            <li><span class="font-bold text-[#615849]" aria-current="page">Grooming</span></li>
        </ol>
    </nav>

    <!-- Main Content -->
    <div class="container mx-[var(--container-margin-mobile)] md:mx-[var(--container-margin-desktop)]">
        <div class="flex flex-col gap-[40px] md:gap-[60px]">
            <!-- Intro -->
            <section class="flex flex-col gap-5 md:gap-8 md:w-1/2" aria-labelledby="grooming-intro">
                <h2 id="grooming-intro" class="font-poppins font-bold text-[37px] md:text-[75.8px] text-[#47423B]">Grooming to Furfection</h2>
                <div class="flex flex-col gap-4 md:gap-6">
                    <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">At Tailz, we believe that grooming is more than just a bath and haircut. Our experienced pet stylists are committed to providing your furry friend with a stress-free, enjoyable experience that leaves them looking and feeling their best.</p>
                    <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">We understand that every pet is unique, which is why we take the time to listen to your preferences and provide personalized grooming services. Whether you're looking for a simple bath and brush or a complete makeover, we'll work with you to achieve the perfect look for your pet.</p>
                </div>
            </section>

            <!-- Options and Prices -->
            <section class="flex flex-col gap-8 md:gap-12" aria-labelledby="grooming-options">
                <h2 id="grooming-options" class="font-poppins font-bold text-[37px] md:text-[75.78px] text-[#FF6A6A] md:w-1/2">Options and Prices</h2>
                
                <!-- Service Tabs -->
                <div class="flex flex-col gap-8">
                    <!-- Tab Navigation -->
                    <nav class="flex gap-4" role="tablist" aria-label="Pet type selection">
                        <button class="tab-button active px-6 py-3 rounded-full bg-[#FF6A6A] text-white" 
                                role="tab" 
                                aria-selected="true" 
                                aria-controls="dog-content"
                                id="dog-tab">Dog</button>
                        <button class="tab-button px-6 py-3 rounded-full bg-gray-200" 
                                role="tab" 
                                aria-selected="false" 
                                aria-controls="cat-content"
                                id="cat-tab">Cat</button>
                    </nav>

                    <!-- Main Content Area -->
                    <div class="flex flex-col md:flex-row gap-6 bg-[#F3F2EC] p-8 rounded-[20px]">
                        <div class="flex-grow">
                            <!-- Size Dropdown -->
                            <div class="mb-6 flex items-center gap-2" id="dog-size-container">
                                <label for="dog-size" class="font-semibold text-[#47423B]">SIZE:</label>
                                <select id="dog-size" class="border border-gray-300 px-4 py-2 rounded-full text-[16px] focus:outline-none" aria-label="Select dog size">
                                    <option value="xs">XS</option>
                                    <option value="s">S</option>
                                    <option value="m" selected>M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                </select>
                            </div>

                            <!-- Cat Size Dropdown (initially hidden) -->
                            <div class="mb-6 flex items-center gap-2 hidden" id="cat-size-container">
                                <label for="cat-size" class="font-semibold text-[#47423B]">SIZE:</label>
                                <select id="cat-size" class="border border-gray-300 px-4 py-2 rounded-full text-[16px] focus:outline-none" aria-label="Select cat size">
                                    <option value="xs">XS</option>
                                    <option value="s">S</option>
                                    <option value="m" selected>M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                </select>
                            </div>

                            <!-- Service Cards Container -->
                            <div class="grid grid-cols-1 md:grid-cols-[1fr_1fr_300px] gap-6">
                                <!-- Service Cards Grid -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:col-span-2" role="list">
                                    <?php 
                                    $index = 0;
                                    foreach ($services_array as $service) :
                                        if (empty($service['title'])) {
                                            continue;
                                        }
                                        $colspan = ($index === 4) ? ' md:col-span-2' : '';
                                        
                                        // Debug the price data
                                        error_log('Service title: ' . $service['title']);
                                        error_log('Raw dog prices for this service: ' . print_r($service['dog_prices'], true));
                                        error_log('Raw cat prices for this service: ' . print_r($service['cat_prices'], true));
                                        
                                        // Add prices as JSON data attributes
                                        $dog_prices_json = json_encode($service['dog_prices']);
                                        $cat_prices_json = json_encode($service['cat_prices']);
                                        $data_attrs = sprintf(' data-dog-prices="%s" data-cat-prices="%s"',
                                            esc_attr($dog_prices_json),
                                            esc_attr($cat_prices_json)
                                        );
                                    ?>
                                        <div class="service-card bg-white border border-gray-300 p-6 rounded-[20px]<?php echo $colspan; ?>" <?php echo $data_attrs; ?> role="listitem">
                                            <div class="flex justify-between items-start mb-4">
                                                <h3 class="font-bold text-xl text-[#47423B] max-w-[70%]"><?php echo esc_html($service['title']); ?></h3>
                                                <div class="price text-xl font-bold text-[#47423B]">
                                                    <?php 
                                                    $price = isset($service['dog_prices']['m']) ? $service['dog_prices']['m'] : '';
                                                    echo $price && $price !== 'N/A' ? '$' . esc_html($price) : 'N/A';
                                                    ?>
                                                </div>
                                            </div>
                                            <p class="description text-[18px] text-[#2C2C2C] mb-4"><?php echo esc_html($service['description']); ?></p>
                                            <?php if (!empty($service['includes'])) : ?>
                                                <div class="includes text-[16px] mt-4">
                                                    <p class="font-semibold mb-2 text-[#47423B]">Includes:</p>
                                                    <ul class="space-y-2">
                                                        <?php foreach ($service['includes'] as $include) : ?>
                                                            <li class="flex items-start">
                                                                <span class="mr-2 mt-1 flex-shrink-0">
                                                                    <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8.82609 5.08015C10.1674 4.6136 10.8829 3.13042 10.4237 1.76749C9.96517 0.404986 8.50582 -0.322732 7.16429 0.143914C5.82294 0.610092 5.10741 2.09317 5.56617 3.45615C6.02517 4.8195 7.48456 5.54595 8.82609 5.08015Z" fill="#2C2C2C"/>
                                                                        <path d="M4.7201 9.13854L4.7201 9.13901C5.4909 7.92948 5.15055 6.314 3.96092 5.53106C2.77082 4.74855 1.18135 5.0937 0.410597 6.30276L0.410596 6.30323C-0.359694 7.51229 -0.0193863 9.1274 1.17029 9.90987C2.36034 10.6932 3.94958 10.3476 4.7201 9.13854Z" fill="#2C2C2C"/>
                                                                        <path d="M14.7846 5.08167C16.1258 5.54824 17.5856 4.82262 18.0454 3.45948C18.5049 2.09681 17.7902 0.613279 16.4492 0.146337C15.1079 -0.321074 13.6482 0.405858 13.1888 1.76806C12.7289 3.13077 13.4435 4.61435 14.7846 5.08167Z" fill="#2C2C2C"/>
                                                                        <path d="M11.805 6.36248C7.74765 6.36132 3.26922 12.0686 4.56408 16.1309C5.81425 20.0528 9.72412 18.4377 11.8015 18.4383C13.8789 18.4389 17.7878 20.0562 19.0402 16.135C20.3374 12.0735 15.8623 6.36364 11.805 6.36248Z" fill="#2C2C2C"/>
                                                                        <path d="M23.1994 6.31032L23.1994 6.30985C22.4293 5.10035 20.8401 4.75429 19.6496 5.53613C18.4595 6.31839 18.1182 7.93368 18.8882 9.14364L18.8882 9.14317C19.6581 10.3527 21.2471 10.6992 22.4377 9.91652C23.6277 9.13473 23.969 7.51986 23.1994 6.31032Z" fill="#2C2C2C"/>
                                                                    </svg>
                                                                </span>
                                                                <span class="text-[#2C2C2C]"><?php echo esc_html($include['item']); ?></span>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php 
                                        $index++;
                                    endforeach;
                                    ?>
                                </div>

                                <!-- Boost Menu Section -->
                                <div class="boost-menu bg-[#D0C5B5] p-6 rounded-[20px] h-fit sticky md:top-[120px] transition-[top] duration-300">
                                    <h3 class="text-2xl md:text-3xl font-bold mb-2 text-[#47423B]">Boost Menu</h3>
                                    <h4 class="text-xl md:text-2xl mb-4 text-[#47423B]">Pamper your pet</h4>
                                    <ul class="space-y-3">
                                        <?php 
                                        $boost_items = carbon_get_post_meta(get_the_ID(), 'boost_menu_items');
                                        if (!empty($boost_items)) :
                                            foreach ($boost_items as $item) : ?>
                                                <li class="flex items-start">
                                                    <span class="mr-2 mt-1 flex-shrink-0">
                                                        <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.82609 5.08015C10.1674 4.6136 10.8829 3.13042 10.4237 1.76749C9.96517 0.404986 8.50582 -0.322732 7.16429 0.143914C5.82294 0.610092 5.10741 2.09317 5.56617 3.45615C6.02517 4.8195 7.48456 5.54595 8.82609 5.08015Z" fill="#2C2C2C"/>
                                                            <path d="M4.7201 9.13854L4.7201 9.13901C5.4909 7.92948 5.15055 6.314 3.96092 5.53106C2.77082 4.74855 1.18135 5.0937 0.410597 6.30276L0.410596 6.30323C-0.359694 7.51229 -0.0193863 9.1274 1.17029 9.90987C2.36034 10.6932 3.94958 10.3476 4.7201 9.13854Z" fill="#2C2C2C"/>
                                                            <path d="M14.7846 5.08167C16.1258 5.54824 17.5856 4.82262 18.0454 3.45948C18.5049 2.09681 17.7902 0.613279 16.4492 0.146337C15.1079 -0.321074 13.6482 0.405858 13.1888 1.76806C12.7289 3.13077 13.4435 4.61435 14.7846 5.08167Z" fill="#2C2C2C"/>
                                                            <path d="M11.805 6.36248C7.74765 6.36132 3.26922 12.0686 4.56408 16.1309C5.81425 20.0528 9.72412 18.4377 11.8015 18.4383C13.8789 18.4389 17.7878 20.0562 19.0402 16.135C20.3374 12.0735 15.8623 6.36364 11.805 6.36248Z" fill="#2C2C2C"/>
                                                            <path d="M23.1994 6.31032L23.1994 6.30985C22.4293 5.10035 20.8401 4.75429 19.6496 5.53613C18.4595 6.31839 18.1182 7.93368 18.8882 9.14364L18.8882 9.14317C19.6581 10.3527 21.2471 10.6992 22.4377 9.91652C23.6277 9.13473 23.969 7.51986 23.1994 6.31032Z" fill="#2C2C2C"/>
                                                        </svg>
                                                    </span>
                                                    <span class="text-[#2C2C2C]"><?php echo esc_html($item['item']); ?></span>
                                                </li>
                                            <?php endforeach;
                                        endif; ?>
                                    </ul>
                                </div>
                            </div>

                            <!-- Note and CTA -->
                            <div class="max-w-[600px] mx-auto text-center mt-12">
                                <p class="font-work-sans italic font-medium text-[18px] md:text-[24px] text-[#47423B] mb-8">
                                    Please review our booking policies prior to scheduling your next appointment
                                </p>
                                <button class="self-start"><a class="rounded-[40px] bg-[#FF8ECC] px-[20px] py-[11px] lowercase text-white hover:bg-white hover:text-[#FF8ECC] border-2 border-[#FF8ECC] transition-all duration-300 font-bold" href="#">Book now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Booking Policies -->
            <section class="flex flex-col gap-5 md:gap-8 md:w-1/2" aria-labelledby="booking-policies">
                <h2 id="booking-policies" class="font-poppins font-bold text-[37px] md:text-[75.8px] text-[#47423B]">Our Booking Policies</h2>
                <ul class="list-disc list-inside space-y-4 md:space-y-6">
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">One pet per appointment slot. If you have multiple pets, please book separate appointments.</li>
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">If your pup is larger or smaller than described at booking, we may need to reschedule to ensure proper time allocation.</li>
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">Please arrive 5 minutes before your appointment to ensure a smooth check-in process.</li>
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">Late arrivals may result in reduced service time or a $15 fee to maintain our schedule.</li>
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">24-hour notice required for cancellations or rescheduling to avoid a $50 fee.</li>
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">No-shows will be charged the full service amount.</li>
                </ul>
            </section>

            <!-- FAQs -->
            <section class="flex flex-col gap-8 md:gap-12 md:w-1/2" aria-labelledby="grooming-faqs">
                <h2 id="grooming-faqs" class="font-poppins font-bold text-[37px] md:text-[75.8px] text-[#47423B]">Frequently Asked Questions</h2>
                <div class="flex flex-col gap-6 md:gap-8">
                    <?php
                    $faqs = [
                        [
                            'question' => 'What grooming services do you offer?',
                            'answer' => 'We offer a full range of grooming services, including haircuts, baths, nail trims, ear cleaning, and more. We tailor each service to meet your pet\'s specific needs.'
                        ],
                        [
                            'question' => 'How do I communicate the grooming style I want for my pet?',
                            'answer' => 'Be specific about the look you\'re going for! Photos are a great way to ensure our Pet Stylists understand exactly what you want. If you\'re unsure, our stylists will work with you to achieve the best look for your pet.'
                        ],
                        [
                            'question' => 'What if my dog only needs a trim, not a full haircut?',
                            'answer' => 'If you just want a little length off, we can use a guard blade to maintain a fuller, longer coat. However, this requires your dog\'s coat to be in excellent condition.'
                        ],
                        [
                            'question' => 'How long does a grooming appointment take?',
                            'answer' => 'The length of the grooming appointment depends on your pet\'s size, coat condition, and the services requested. On average, grooming can take between 1 to 2 hours.'
                        ],
                        [
                            'question' => 'Can I stay with my pet during grooming?',
                            'answer' => 'For the safety and comfort of your pet, we generally recommend that you leave your pet with us. However, if you have specific concerns, feel free to ask about accommodations.'
                        ],
                        [
                            'question' => 'Do you groom all breeds and sizes?',
                            'answer' => 'Yes! We are equipped to groom dogs of all breeds and sizes, with customized care to suit each pet\'s specific needs.'
                        ],
                        [
                            'question' => 'What should I do to prepare my pet for grooming?',
                            'answer' => 'Please ensure your pet is comfortable and up to date on their vaccinations. It\'s also helpful to brush out any tangles in your pet\'s coat before their appointment.'
                        ],
                        [
                            'question' => 'What if I\'m not happy with the grooming results?',
                            'answer' => 'Our goal is to ensure you and your pet are happy with the results. If you\'re not satisfied, please let us know, and we\'ll work with you to address any concerns.'
                        ]
                    ];

                    foreach($faqs as $index => $faq) : ?>
                        <div class="flex gap-4 md:gap-6">
                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-[30px] h-[26px] md:w-[34px] md:h-[30px]" aria-hidden="true" focusable="false">
                                <path d="M11.2135 7.42917C12.9174 6.82501 13.8259 4.90571 13.242 3.14241C12.6589 1.37966 10.8046 0.438625 9.10038 1.0429C7.39639 1.64657 6.48785 3.56576 7.0712 5.32911C7.65484 7.09295 9.50923 8.03235 11.2135 7.42917Z" fill="#2C2C2C"/>
                                <path d="M5.9995 12.6826V12.6832C6.97834 11.118 6.54535 9.02784 5.03366 8.01526C3.52139 7.00322 1.50211 7.45039 0.523327 9.01505V9.01565C-0.454874 10.5803 -0.0219343 12.6699 1.48981 13.6819C3.00202 14.695 5.021 14.2473 5.9995 12.6826Z" fill="#2C2C2C"/>
                                <path d="M18.7856 7.42922C20.4898 8.03241 22.3442 7.09301 22.9278 5.32911C23.5111 3.56581 22.6026 1.64657 20.8987 1.0429C19.1945 0.438619 17.3401 1.37972 16.757 3.14241C16.1731 4.90576 17.0817 6.82507 18.7856 7.42922Z" fill="#2C2C2C"/>
                                <path d="M15.001 9.08838C9.84627 9.08838 4.15858 16.4746 5.80514 21.7301C7.39488 26.8042 12.3617 24.713 15.001 24.713C17.6403 24.713 22.6071 26.8042 24.1968 21.7301C25.8434 16.4746 20.1557 9.08838 15.001 9.08838Z" fill="#2C2C2C"/>
                                <path d="M29.4765 9.01565V9.01505C28.4977 7.45039 26.4785 7.00321 24.9662 8.01526C23.4545 9.02784 23.0216 11.118 24.0003 12.6832V12.6826C24.9788 14.2473 26.9978 14.6951 28.51 13.6819C30.0217 12.6699 30.4547 10.5804 29.4765 9.01565Z" fill="#2C2C2C"/>
                            </svg>
                            <div class="flex flex-col gap-2 md:gap-3">
                                <h3 class="font-poppins font-bold text-[22px] md:text-[42.65px] text-[#47423B]"><?php echo esc_html($faq['question']); ?></h3>
                                <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($faq['answer']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>