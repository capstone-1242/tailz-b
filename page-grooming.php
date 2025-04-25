<?php

/**
 * Template Name: Grooming
 * Description: A custom template for the Grooming page with services and FAQs
 *
 * @package tailz
 */

get_header();

// Initialize variables with error handling
$services_array = array();
$boost_items    = array();

try {
    if (function_exists('get_field')) {
        // Retrieve the Grooming Services group (containing service_1 to service_4)
        $grooming  = get_field('grooming_services');
        // Retrieve the Boost Menu group
        $boost_menu = get_field('boost_menu_items');

        // Process each service in "grooming_services"
        if ($grooming) {
            $service_keys = array('service_1', 'service_2', 'service_3', 'service_4');
            foreach ($service_keys as $sk) {
                if (!empty($grooming[$sk])) {
                    $s = $grooming[$sk];

                    // Build includes array (up to 5)
                    $includes = array();
                    if (!empty($s['service_includes']) && is_array($s['service_includes'])) {
                        for ($i = 1; $i <= 5; $i++) {
                            $key_inc = 'include_' . $i;
                            if (!empty($s['service_includes'][$key_inc])) {
                                $includes[] = array('item' => $s['service_includes'][$key_inc]);
                            }
                        }
                    }

                    $services_array[] = array(
                        'title'       => isset($s['service_title']) ? $s['service_title'] : '',
                        'description' => isset($s['service_description']) ? $s['service_description'] : '',
                        'includes'    => $includes,
                        'dog_prices'  => isset($s['dog_prices']) ? $s['dog_prices'] : array(),
                        'cat_prices'  => isset($s['cat_prices']) ? $s['cat_prices'] : array()
                    );
                }
            }
        }

        // Process boost menu items (up to 5)
        if ($boost_menu) {
            for ($i = 1; $i <= 5; $i++) {
                $key_item  = 'menu_item_' . $i;
                $key_price = 'price_' . $i;
                if (!empty($boost_menu[$key_item])) {
                    $boost_items[] = array(
                        'item'  => $boost_menu[$key_item],
                        'price' => isset($boost_menu[$key_price]) ? $boost_menu[$key_price] : ''
                    );
                }
            }
        }
    } else {
        error_log('ACF not loaded in page-grooming.php');
    }
} catch (Exception $e) {
    error_log('Error getting grooming services: ' . $e->getMessage());
}

error_log('Final processed services array: ' . print_r($services_array, true));
?>

<!-- Banner -->
<?php get_template_part('template-parts/banner'); ?>

<!-- Breadcrumbs -->
<nav class="border-b-2 border-cream py-[20px] lg:py-[30px] mx-[24px] lg:mx-[90px] mb-[60px] lg:mb-[130px]" aria-label="Breadcrumb">
    <ol class="flex items-center font-worksans text-[14px] md:text-[16px] text-darkbrown">
        <li>
            <a href="<?php echo home_url(); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                Home
            </a>
        </li>
        <li class="mx-2" aria-hidden="true">/</li>
        <li>
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                Services
            </a>
        </li>
        <li class="mx-2" aria-hidden="true">/</li>
        <li aria-current="page">
            <span class="uppercase font-bold">Grooming</span>
        </li>
    </ol>
</nav>

<!-- Outer Wrapper (Matching Hotel's Structure) -->
<div>
    <!-- Main Container with vertical spacing -->
    <div class="flex flex-col gap-[60px] md:gap-[130px]">

        <!-- Intro Section -->
        <section aria-labelledby="grooming-intro">
            <!-- Same horizontal margins as Hotel (mx-6, md:mx-[89px]) -->
            <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                <h2 id="grooming-intro" class="text-[40px] md:text-[53.75px] text-[#47423B] lowercase">
                    Grooming to Furfection
                </h2>
                <p class="text-[16px] md:text-[18px] text-[#2C2C2C]">
                    At Tailz, we believe that grooming is more than just a bath and haircut. Our experienced pet stylists are committed to providing your furry friend with a stress-free, enjoyable experience that leaves them looking and feeling their best.
                </p>
                <p class="text-[16px] md:text-[18px] text-[#2C2C2C]">
                    We understand that every pet is unique, which is why we take the time to listen to your preferences and provide personalized grooming services. Whether you're looking for a simple bath and brush or a complete makeover, we'll work with you to achieve the perfect look for your pet.
                </p>
            </div>
        </section>

        <!-- Options & Prices -->
        <section aria-labelledby="grooming-options">
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header / Title -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 id="grooming-options" class="text-[40px] md:text-[53.75px] text-[#FF6A6A] lowercase">
                        Options and Prices
                    </h2>
                </div>

                <!-- Tabs + Cards Container -->
                <div class="mx-6 md:mx-[89px] bg-[#F3F2EC] p-8 rounded-[20px]">
                    <div class="flex flex-col gap-8">
                        <!-- Tab Nav -->
                        <nav class="flex gap-4" role="tablist" aria-label="Pet type selection">
                            <button class="tab-button active px-6 py-3 rounded-full bg-[#FF6A6A] text-white"
                                role="tab"
                                aria-selected="true"
                                aria-controls="dog-content"
                                id="dog-tab">
                                Dog
                            </button>
                            <button class="tab-button px-6 py-3 rounded-full bg-gray-200"
                                role="tab"
                                aria-selected="false"
                                aria-controls="cat-content"
                                id="cat-tab">
                                Cat
                            </button>
                        </nav>

                        <!-- Main Card Container -->
                        <div class="flex flex-col md:flex-row gap-6 rounded-[20px]">
                            <!-- Left: Size Dropdown + Service Cards -->
                            <div class="flex-grow flex flex-col gap-6">
                                <!-- Dog Size Dropdown -->
                                <div class="mb-6 flex items-center gap-2" id="dog-size-container">
                                    <label for="dog-size" class="font-semibold text-[#47423B]">SIZE:</label>
                                    <select id="dog-size"
                                        class="border border-gray-300 px-4 py-2 rounded-full text-[16px] focus:outline-none"
                                        aria-label="Select dog size">
                                        <option value="xs">XS</option>
                                        <option value="s">S</option>
                                        <option value="m" selected>M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>
                                    </select>
                                </div>

                                <!-- Cat Size Dropdown (hidden by default) -->
                                <div class="mb-6 flex items-center gap-2 hidden" id="cat-size-container">
                                    <label for="cat-size" class="font-semibold text-[#47423B]">SIZE:</label>
                                    <select id="cat-size"
                                        class="border border-gray-300 px-4 py-2 rounded-full text-[16px] focus:outline-none"
                                        aria-label="Select cat size">
                                        <option value="xs">XS</option>
                                        <option value="s">S</option>
                                        <option value="m" selected>M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>
                                    </select>
                                </div>

                                <!-- Services & Boost Menu Grid -->
                                <div class="grid grid-cols-1 md:grid-cols-[1fr_1fr_300px] gap-6">
                                    <!-- Service Cards -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:col-span-2" role="list">
                                        <?php
                                        $index = 0;
                                        foreach ($services_array as $service) :
                                            if (empty($service['title'])) {
                                                continue;
                                            }
                                            // Optional colspan
                                            $colspan = ($index === 4) ? ' md:col-span-2' : '';

                                            // Encode prices for data attributes
                                            $dog_prices_json = json_encode($service['dog_prices']);
                                            $cat_prices_json = json_encode($service['cat_prices']);
                                            $data_attrs = sprintf(
                                                ' data-dog-prices="%s" data-cat-prices="%s"',
                                                esc_attr($dog_prices_json),
                                                esc_attr($cat_prices_json)
                                            );
                                        ?>
                                            <div class="service-card bg-white border border-gray-300 p-6 rounded-[20px]<?php echo $colspan; ?>"
                                                <?php echo $data_attrs; ?>
                                                role="listitem">
                                                <div class="flex justify-between items-start mb-4">
                                                    <h3 class="font-bold text-xl text-[#47423B] max-w-[70%]">
                                                        <?php echo esc_html($service['title']); ?>
                                                    </h3>
                                                    <div class="price text-xl font-bold text-[#47423B]">
                                                        <?php
                                                        // Display dog's "M" size price, or "N/A"
                                                        $price = isset($service['dog_prices']['m']) ? $service['dog_prices']['m'] : '';
                                                        echo $price && $price !== 'N/A' ? '$' . esc_html($price) : 'N/A';
                                                        ?>
                                                    </div>
                                                </div>
                                                <p class="description text-[18px] text-[#2C2C2C] mb-4">
                                                    <?php echo esc_html($service['description']); ?>
                                                </p>
                                                <?php if (!empty($service['includes'])) : ?>
                                                    <div class="includes text-[16px] mt-4">
                                                        <p class="font-semibold mb-2 text-[#47423B]">Includes:</p>
                                                        <ul class="space-y-2">
                                                            <?php foreach ($service['includes'] as $include) :
                                                                if (empty($include['item'])) {
                                                                    continue;
                                                                } ?>
                                                                <li class="flex items-start">
                                                                    <span class="mr-2 mt-1 flex-shrink-0">
                                                                        <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M8.82609 5.08015C10.1674 4.6136 10.8829 3.13042 10.4237 1.76749C9.96517 0.404986 8.50582 -0.322732 7.16429 0.143914C5.82294 0.610092 5.10741 2.09317 5.56617 3.45615C6.02517 4.8195 7.48456 5.54595 8.82609 5.08015Z" fill="#2C2C2C" />
                                                                            <path d="M4.7201 9.13854L4.7201 9.13901C5.4909 7.92948 5.15055 6.314 3.96092 5.53106C2.77082 4.74855 1.18135 5.0937 0.410597 6.30276L0.410596 6.30323C-0.359694 7.51229 -0.0193863 9.1274 1.17029 9.90987C2.36034 10.6932 3.94958 10.3476 4.7201 9.13854Z" fill="#2C2C2C" />
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

                                    <!-- Boost Menu Column -->
                                    <div class="boost-menu bg-[#D0C5B5] p-6 rounded-[20px] h-fit sticky md:top-[120px] transition-[top] duration-300">
                                        <h3 class="text-2xl md:text-3xl font-bold mb-2 text-[#47423B]">Boost Menu</h3>
                                        <h4 class="text-xl md:text-2xl mb-4 text-[#47423B]">Pamper your pet</h4>
                                        <ul class="space-y-3">
                                            <?php
                                            if (!empty($boost_items)) :
                                                foreach ($boost_items as $b_item) :
                                                    $menu_item  = $b_item['item'];
                                                    $menu_price = !empty($b_item['price']) ? $b_item['price'] : '';
                                            ?>
                                                    <li class="flex items-start">
                                                        <span class="mr-2 mt-1 flex-shrink-0">
                                                            <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.82609 5.08015C10.1674 5.07281 10.8829 3.13042 10.4237 1.76749C9.96517 0.404986 8.50582 -0.322732 7.16429 0.143914C5.82294 0.610092 5.10741 2.09317 5.56617 3.45615C6.02517 4.8195 7.48456 5.54595 8.82609 5.08015Z" fill="#2C2C2C" />
                                                                <path d="M4.7201 9.13854L4.7201 9.13901C5.4909 7.92948 5.15055 6.314 3.96092 5.53106C2.77082 4.74855 1.18135 5.0937 0.410597 6.30276L0.410596 6.30323C-0.359694 7.51229 -0.0193863 9.1274 1.17029 9.90987C2.36034 10.6932 3.94958 10.3476 4.7201 9.13854Z" fill="#2C2C2C" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-[#2C2C2C]">
                                                            <?php echo esc_html($menu_item); ?>
                                                            <?php if (!empty($menu_price)) : ?>
                                                                <span class="ml-2 font-semibold"><?php echo esc_html($menu_price); ?></span>
                                                            <?php endif; ?>
                                                        </span>
                                                    </li>
                                            <?php endforeach;
                                            endif; ?>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Note + CTA -->
                                <div class="max-w-[600px] mx-auto text-center mt-12">
                                    <p class="font-work-sans italic font-medium text-[18px] md:text-[24px] text-[#47423B] mb-8">
                                        Please review our booking policies prior to scheduling your next appointment
                                    </p>
                                    <button class="self-start">
                                        <a class="rounded-[40px] bg-[#FF6A6A] px-[20px] py-[11px] lowercase text-white border-2 border-transparent hover:bg-white hover:text-[#FF6A6A] hover:border-[#FF6A6A] transition-all duration-300 font-bold"
                                            href="https://booking.moego.pet/ol/book?name=Tailz">
                                            Book now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Booking Policies Section -->
        <section aria-labelledby="booking-policies">
            <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                <h2 id="booking-policies" class="font-poppins font-bold text-[37px] md:text-[75.8px] text-[#47423B]">
                    Our Booking Policies
                </h2>
                <ul class="list-disc list-inside space-y-4 md:space-y-6">
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">
                        One pet per appointment slot. If you have multiple pets, please book separate appointments.
                    </li>
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">
                        If your pup is larger or smaller than described at booking, we may need to reschedule to ensure proper time allocation.
                    </li>
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">
                        Please arrive 5 minutes before your appointment to ensure a smooth check-in process.
                    </li>
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">
                        Late arrivals may result in reduced service time or a $15 fee to maintain our schedule.
                    </li>
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">
                        24-hour notice required for cancellations or rescheduling to avoid a $50 fee.
                    </li>
                    <li class="font-work-sans text-[18px] md:text-[24px] text-black">
                        No-shows will be charged the full service amount.
                    </li>
                </ul>
            </div>
        </section>

        <!-- FAQs Section -->
        <div class="mt-[60px] md:mt-[100px] mb-[60px] md:mb-[100px] mx-6 md:mx-[89px]">
            <?php get_template_part('template-parts/faq-section'); ?>
        </div>

    </div><!-- /.flex.flex-col.gap -->
</div><!-- /.outer wrapper -->
</div><!-- /end main wrapper -->

<?php get_footer(); ?>