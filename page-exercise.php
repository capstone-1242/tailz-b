<?php
/**
 * Template Name: Exercise
 * Description: Exercise page with Dog/Cat tabs, single-column cards, and no size dropdown.
 *
 * @package tailz
 */

get_header();

// Arrays for Dog & Cat exercise services
$dog_services = [
    [
        'title'   => 'Morning Jog',
        'price'   => 'Starting at $00.00',
        'desc'    => 'Lorem ipsum short description for morning jog (dog).',
        'includes'=> 'Lorem ipsum.'
    ],
    [
        'title'   => 'Play Session',
        'price'   => 'Starting at $00.00',
        'desc'    => 'Lorem ipsum short description for play session (dog).',
        'includes'=> 'Lorem ipsum.'
    ],
    [
        'title'   => 'Agility Course',
        'price'   => 'Starting at $00.00',
        'desc'    => 'Lorem ipsum short description for agility course (dog).',
        'includes'=> 'Lorem ipsum.'
    ],
];

$cat_services = [
    [
        'title'   => 'Cat Yoga',
        'price'   => 'Starting at $00.00',
        'desc'    => 'Lorem ipsum short description for cat yoga.',
        'includes'=> 'Lorem ipsum.'
    ],
    [
        'title'   => 'Laser Pointer Chase',
        'price'   => 'Starting at $00.00',
        'desc'    => 'Lorem ipsum short description for laser pointer chase (cat).',
        'includes'=> 'Lorem ipsum.'
    ],
    [
        'title'   => 'Climbing Workout',
        'price'   => 'Starting at $00.00',
        'desc'    => 'Lorem ipsum short description for climbing workout (cat).',
        'includes'=> 'Lorem ipsum.'
    ],
];

// Helper function to render a tab
function render_exercise_tab( $animal, $services ) {
    ?>
    <div class="tab-content hidden" id="<?php echo esc_attr($animal); ?>-content">
        <div class="bg-gray-100 p-4 rounded-lg mb-4">
            <div class="space-y-4">
                <?php foreach ( $services as $service ) : ?>
                    <div class="border border-gray-300 p-4 rounded-md">
                        <h3 class="font-bold text-md"><?php echo esc_html($service['title']); ?></h3>
                        <p class="price text-sm text-gray-700 mt-2"><?php echo esc_html($service['price']); ?></p>
                        <p class="description text-sm mt-2"><?php echo esc_html($service['desc']); ?></p>
                        <p class="includes text-sm mt-2">Includes: <?php echo esc_html($service['includes']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Book Now CTA -->
        <div class="mb-6 flex justify-center">
            <a href="#"
               class="inline-block border border-black text-black text-sm font-bold px-6 py-2 
                      rounded-full shadow-md hover:bg-black hover:text-white transition">
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

    <!-- Heading -->
    <section class="mb-6">
        <h1 class="text-2xl font-extrabold mb-2">EXERCISE</h1>
        <p class="text-sm text-gray-700 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada consectetur justo.
        </p>
    </section>

    <!-- Exercise Options -->
    <section class="mb-4">
        <h2 class="text-xl font-bold text-gray-900">EXERCISE OPTIONS</h2>
    </section>

    <!-- Tabs Container -->
    <div class="tabs-container" id="exercise-tabs" aria-labelledby="tabs-heading">
        <h2 id="tabs-heading" class="sr-only">Exercise Tabs</h2>
        <div class="tabs flex items-center gap-4 mb-4">
            <!-- DOG Tab -->
            <button 
                class="tab-button active border border-black text-black text-sm font-bold px-6 py-2 
                       rounded-full shadow-md hover:bg-black hover:text-white transition flex items-center gap-2 cursor-pointer" 
                data-tab="dog"
            >
                <!-- Dog SVG -->
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                     xmlns="http://www.w3.org/2000/svg">
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

        <!-- Dog Tab Content -->
        <?php render_exercise_tab('dog', $dog_services); ?>

        <!-- Cat Tab Content -->
        <?php render_exercise_tab('cat', $cat_services); ?>
    </div>

    <!-- Requirements -->
    <section class="mb-8">
        <h2 class="text-xl font-bold mb-2">REQUIREMENTS FOR ATTENDING</h2>
        <p class="text-sm leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin volutpat magna non lectus malesuada, a luctus massa aliquet.
        </p>
    </section>

    <!-- FAQs -->
    <section class="mb-10">
        <h2 class="text-xl font-bold mb-4">FAQs</h2>
        <p class="text-sm leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Check out our FAQ page or contact us for more details.
        </p>
    </section>
</div>

<?php
get_footer();
