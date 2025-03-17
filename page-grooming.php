<?php
/**
 * Template Name: Grooming
 * Description: An optimized Grooming page with Dog/Cat tabs, size dropdown, and service cards in a 2x2 layout.
 *
 * @package tailz
 */

get_header();

// 1) Define Services Array (ACF Later)
$services = [
    [
        'title'       => 'Pet Wash',
        'description' => 'Lorem ipsum description for Pet Wash.',
        'dog' => [
            'xs' => 'Starting at $10.00',
            's'  => 'Starting at $15.00',
            'm'  => 'Starting at $20.00',
            'l'  => 'Starting at $25.00',
            'xl' => 'Starting at $30.00',
        ],
        'cat' => [
            'xs' => 'Starting at $11.00',
            's'  => 'Starting at $16.00',
            'm'  => 'Starting at $21.00',
            'l'  => 'Starting at $26.00',
            'xl' => 'Starting at $31.00',
        ],
    ],
    [
        'title'       => 'Full Groom',
        'description' => 'Lorem ipsum for Full Groom.',
        'dog' => [
            'xs' => 'Starting at $20.00',
            's'  => 'Starting at $25.00',
            'm'  => 'Starting at $30.00',
            'l'  => 'Starting at $35.00',
            'xl' => 'Starting at $40.00',
        ],
        'cat' => [
            'xs' => 'Starting at $21.00',
            's'  => 'Starting at $26.00',
            'm'  => 'Starting at $31.00',
            'l'  => 'Starting at $36.00',
            'xl' => 'Starting at $41.00',
        ],
    ],
    [
        'title'       => 'Bath & Tidy',
        'description' => 'Lorem ipsum for Bath & Tidy.',
        'dog' => [
            'xs' => 'Starting at $12.00',
            's'  => 'Starting at $17.00',
            'm'  => 'Starting at $22.00',
            'l'  => 'Starting at $27.00',
            'xl' => 'Starting at $32.00',
        ],
        'cat' => [
            'xs' => 'Starting at $13.00',
            's'  => 'Starting at $18.00',
            'm'  => 'Starting at $23.00',
            'l'  => 'Starting at $28.00',
            'xl' => 'Starting at $33.00',
        ],
    ],
    [
        'title'       => 'Hairy Beast',
        'description' => 'Lorem ipsum for Hairy Beast.',
        'dog' => [
            'xs' => 'Starting at $15.00',
            's'  => 'Starting at $20.00',
            'm'  => 'Starting at $25.00',
            'l'  => 'Starting at $30.00',
            'xl' => 'Starting at $35.00',
        ],
        'cat' => [
            'xs' => 'Starting at $16.00',
            's'  => 'Starting at $21.00',
            'm'  => 'Starting at $26.00',
            'l'  => 'Starting at $31.00',
            'xl' => 'Starting at $36.00',
        ],
    ],
    [
        'title'       => 'Boost Menu',
        'description' => 'Lorem ipsum for Boost Menu.',
        'dog' => [
            'xs' => 'Starting at $5.00',
            's'  => 'Starting at $10.00',
            'm'  => 'Starting at $15.00',
            'l'  => 'Starting at $20.00',
            'xl' => 'Starting at $25.00',
        ],
        'cat' => [
            'xs' => 'Starting at $6.00',
            's'  => 'Starting at $11.00',
            'm'  => 'Starting at $16.00',
            'l'  => 'Starting at $21.00',
            'xl' => 'Starting at $26.00',
        ],
    ],
];

/**
 * 2) A helper function to render a single tab (DOG or CAT).
 */
function render_grooming_tab($animal, $services) {
    $size_id = $animal . '-size';
    ?>
    <div class="tab-content hidden" id="<?php echo esc_attr($animal); ?>-content">
        <!-- Size Dropdown -->
        <div class="mb-4 flex items-center gap-2">
            <label for="<?php echo esc_attr($size_id); ?>" class="font-semibold">SIZE:</label>
            <select id="<?php echo esc_attr($size_id); ?>" class="border border-gray-300 px-3 py-2 rounded-full text-sm focus:outline-none">
                <option value="xs">XS</option>
                <option value="s">S</option>
                <option value="m" selected>M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
            </select>
        </div>

        <!-- Service Cards in 2x2 Layout -->
        <div class="bg-gray-100 p-4 rounded-lg mb-4">
            <div class="grid grid-cols-2 gap-4">
                <?php foreach ($services as $index => $service) : ?>
                    <?php
                        // For the 5th item, make it full width
                        $colspan = ($index === 4) ? ' col-span-2' : '';
                        // Build data attributes for each size
                        $data_attrs = '';
                        foreach ($service[$animal] as $size_key => $price_val) {
                            $data_attrs .= ' data-' . $animal . '-' . $size_key . '="' . esc_attr($price_val) . '"';
                        }
                    ?>
                    <div class="service-card border border-gray-300 p-4 rounded-md<?php echo $colspan; ?>" <?php echo $data_attrs; ?>>
                        <h3 class="font-bold text-md"><?php echo esc_html($service['title']); ?></h3>
                        <p class="price text-sm text-gray-700 mt-2"></p>
                        <p class="description text-sm mt-2"><?php echo esc_html($service['description']); ?></p>
                        <p class="includes text-sm mt-2">Includes: Lorem ipsum.</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Book Appointment CTA -->
        <div class="mb-6 flex justify-center">
            <a href="#"
               class="inline-block border border-black text-black text-sm font-bold px-6 py-2 
                      rounded-full shadow-md hover:bg-black hover:text-white transition">
                BOOK AN APPOINTMENT
            </a>
        </div>
    </div>
    <?php
}
?>

<div class="container mx-auto px-4 py-6">
    <!-- Breadcrumb -->
    <nav class="text-sm text-gray-500 mb-4" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-gray-700 uppercase">HOME</a>
        <span class="mx-1">/</span>
        <a href="#" class="hover:text-gray-700 uppercase">SERVICES</a>
        <span class="mx-1">/</span>
        <span class="uppercase font-bold">GROOMING</span>
    </nav>

    <!-- Page Heading -->
    <section class="mb-4">
        <h1 class="text-2xl font-extrabold mb-1">GROOMING</h1>
        <p class="text-sm text-gray-700 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada consectetur justo.
        </p>
    </section>

    <!-- Options and Prices Heading -->
    <section class="mb-4">
        <h2 class="text-xl font-bold text-gray-900">OPTIONS AND PRICES</h2>
    </section>

    <!-- Tabs Container -->
    <div class="tabs-container" id="grooming-tabs" aria-labelledby="tabs-heading">
        <h2 id="tabs-heading" class="sr-only">Grooming Tabs</h2>

        <!-- Dog/Cat Tab Buttons -->
        <div class="tabs flex items-center gap-4 mb-4">
            <!-- DOG Tab -->
            <button 
                class="tab-button active border border-black text-black text-sm font-bold px-6 py-2 
                       rounded-full shadow-md hover:bg-black hover:text-white transition flex items-center gap-2 cursor-pointer" 
                data-tab="dog"
            >
                <!-- Dog SVG -->
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5.5 16l1.75-3.5a2 2 0 0 1 1.79-1.06h3.92a2 2 0 0 1 1.79 1.06L17.5 16M7 16v4m10-4v4m-10 0h10"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 8.5C8 8 6 8.5 6 6c0-2 1.5-2 2.5-2S11 4 11 6c0 2.5-2 2-2 2.5zm6 0c-1-0.5-3 0-3-2.5 0-2 1.5-2 2.5-2S17 4 17 6c0 2.5-2 2-2 2.5z"/>
                </svg>
                DOG
            </button>

            <!-- CAT Tab -->
            <button 
                class="tab-button border border-black text-black text-sm font-bold px-6 py-2 
                       rounded-full shadow-md hover:bg-black hover:text-white transition flex items-center gap-2 cursor-pointer" 
                data-tab="cat"
            >
                <!-- Cat SVG -->
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 4.5c2.21 0 4 1.79 4 4V11h2a2 2 0 0 1 2 2v2c0 3-3 3-3 3H9s-3 0-3-3v-2a2 2 0 0 1 2-2h2V8.5c0-2.21 1.79-4 4-4z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 11v3m6-3v3M9 17.5c0 1 1 2.5 3 2.5s3-1.5 3-2.5"/>
                </svg>
                CAT
            </button>
        </div>

        <!-- Render DOG Tab -->
        <?php render_grooming_tab('dog', $services); ?>

        <!-- Render CAT Tab -->
        <?php render_grooming_tab('cat', $services); ?>
    </div>

    <!-- Booking and Grooming Policies -->
    <section class="mb-6">
        <h2 class="text-xl font-bold mb-2">BOOKING AND GROOMING POLICIES</h2>
        <p class="text-sm leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada consectetur justo.
        </p>
    </section>

    <!-- FAQs -->
    <section class="mb-10">
        <h2 class="text-xl font-bold mb-4 text-left">FAQs</h2>
        <p class="text-sm leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
            Check out our FAQ page or contact us for more details.
        </p>
    </section>
</div>

<?php
get_footer();
