<?php
/**
 * Template Name: Exercise
 * Description: Exercise page with Dog/Cat tabs, single-column cards, and no size dropdown.
 *
 * @package tailz
 */

get_header();

// Retrieve cloned meta values and cast them to arrays.
$titles       = (array) rwmb_meta( 'exercise_service_title' );
$descriptions = (array) rwmb_meta( 'exercise_service_description' );
$dog_prices   = (array) rwmb_meta( 'exercise_dog_price' );
$cat_prices   = (array) rwmb_meta( 'exercise_cat_price' );

// Build the services array using the cloned fields by index.
$services = [];
$total = count( $titles );
for ( $i = 0; $i < $total; $i++ ) {
    if ( empty( $titles[ $i ] ) ) {
        continue;
    }
    $services[] = [
        'service_title'       => $titles[ $i ],
        'service_description' => isset($descriptions[ $i ]) ? $descriptions[ $i ] : '',
        'dog' => [
            'price' => isset( $dog_prices[ $i ] ) ? $dog_prices[ $i ] : '',
        ],
        'cat' => [
            'price' => isset( $cat_prices[ $i ] ) ? $cat_prices[ $i ] : '',
        ],
    ];
}

/**
 * Helper function to render a single tab for exercise services.
 */
function render_exercise_tab( $animal, $services ) {
    ?>
    <div class="tab-content hidden" id="<?php echo esc_attr($animal); ?>-content">
        <div class="bg-gray-100 p-4 rounded-lg mb-4">
            <div class="space-y-4">
                <?php foreach ( $services as $service ) : 
                    if ( empty( $service['service_title'] ) ) continue;
                ?>
                    <div class="border border-gray-300 p-4 rounded-md">
                        <h3 class="font-bold text-md"><?php echo esc_html( $service['service_title'] ); ?></h3>
                        <p class="price text-sm text-gray-700 mt-2"><?php echo esc_html( $service[ $animal ]['price'] ); ?></p>
                        <p class="description text-sm mt-2"><?php echo esc_html( $service['service_description'] ); ?></p>
                        <p class="includes text-sm mt-2">Includes: Lorem ipsum.</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Book Now CTA -->
        <div class="mb-6 flex justify-center">
            <a href="#" class="inline-block border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition">
                BOOK NOW
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
        <span class="uppercase font-bold">EXERCISE</span>
    </nav>

    <!-- Page Heading -->
    <section class="mb-6">
        <h1 class="text-2xl font-extrabold mb-2">EXERCISE</h1>
        <p class="text-sm text-gray-700 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada consectetur justo.
        </p>
    </section>

    <!-- Exercise Options Heading -->
    <section class="mb-4">
        <h2 class="text-xl font-bold text-gray-900">EXERCISE OPTIONS</h2>
    </section>

    <!-- Tabs Container -->
    <div class="tabs-container" id="exercise-tabs" aria-labelledby="tabs-heading">
        <h2 id="tabs-heading" class="sr-only">Exercise Tabs</h2>
        <div class="tabs flex items-center gap-4 mb-4">
            <!-- DOG Tab -->
            <button class="tab-button active cursor-pointer border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition flex items-center gap-2" data-tab="dog">
                <!-- Dog SVG Icon -->
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                     xmlns="http://www.w3.org/2000/svg">
                    <!-- Insert Dog SVG paths here -->
                </svg>
                DOG
            </button>
            <!-- CAT Tab -->
            <button class="tab-button cursor-pointer border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition flex items-center gap-2" data-tab="cat">
                <!-- Cat SVG Icon -->
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                     xmlns="http://www.w3.org/2000/svg">
                    <!-- Insert Cat SVG paths here -->
                </svg>
                CAT
            </button>
        </div>

        <!-- Render DOG Tab Content -->
        <?php render_exercise_tab( 'dog', $services ); ?>

        <!-- Render CAT Tab Content -->
        <?php render_exercise_tab( 'cat', $services ); ?>
    </div>

    <!-- Requirements Section -->
    <section class="mb-8">
        <h2 class="text-xl font-bold mb-2">REQUIREMENTS FOR ATTENDING</h2>
        <p class="text-sm leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin volutpat magna non lectus malesuada, a luctus massa aliquet.
        </p>
    </section>

    <!-- FAQs Section -->
    <section class="mb-10">
        <h2 class="text-xl font-bold mb-4">FAQs</h2>
        <p class="text-sm leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
            Check out our FAQ page or contact us for more details.
        </p>
    </section>

    <!-- Instagram Feed Section -->
    <section class="mb-10">
        <h2 class="text-xl font-bold mb-4">FOLLOW OUR FURRY ADVENTURES</h2>
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </section>

</div>

<?php
get_footer();
