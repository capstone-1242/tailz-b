<?php
/**
 * Template Name: Photos
 * Description: A custom template for the "Photos" (Portraits) page, displaying photoshoot packages with Dog/Cat tabs.
 *
 * @package tailz
 */

get_header();

// Arrays for Dog & Cat portrait packages
$dog_packages = [
    [
        'title' => 'Package 1',
        'price' => 'Starting at $00.00',
        'desc'  => 'Lorem ipsum short description for Dog Portrait Package 1.'
    ],
    [
        'title' => 'Package 2',
        'price' => 'Starting at $00.00',
        'desc'  => 'Lorem ipsum short description for Dog Portrait Package 2.'
    ],
    [
        'title' => 'Package 3',
        'price' => 'Starting at $00.00',
        'desc'  => 'Lorem ipsum short description for Dog Portrait Package 3.'
    ],
    [
        'title' => 'Package 4',
        'price' => 'Starting at $00.00',
        'desc'  => 'Lorem ipsum short description for Dog Portrait Package 4.'
    ],
];

$cat_packages = [
    [
        'title' => 'Package 1',
        'price' => 'Starting at $00.00',
        'desc'  => 'Lorem ipsum short description for Cat Portrait Package 1.'
    ],
    [
        'title' => 'Package 2',
        'price' => 'Starting at $00.00',
        'desc'  => 'Lorem ipsum short description for Cat Portrait Package 2.'
    ],
    [
        'title' => 'Package 3',
        'price' => 'Starting at $00.00',
        'desc'  => 'Lorem ipsum short description for Cat Portrait Package 3.'
    ],
    [
        'title' => 'Package 4',
        'price' => 'Starting at $00.00',
        'desc'  => 'Lorem ipsum short description for Cat Portrait Package 4.'
    ],
];

// Helper function for tab content
function render_portrait_tab($animal, $packages) {
    ?>
    <div class="tab-content hidden" id="<?php echo esc_attr($animal); ?>-content">
        <div class="bg-gray-100 p-4 rounded-lg mb-4">
            <div class="grid grid-cols-1 gap-4">
                <?php foreach ($packages as $pkg) : ?>
                    <div class="border border-gray-300 p-4 rounded-md">
                        <h3 class="font-bold text-md"><?php echo esc_html($pkg['title']); ?></h3>
                        <p class="price text-sm text-gray-700 mt-2"><?php echo esc_html($pkg['price']); ?></p>
                        <p class="description text-sm mt-2"><?php echo esc_html($pkg['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
}
?>

<div class="container mx-auto px-4 py-10">

    <!-- Breadcrumb -->
    <nav class="text-sm text-gray-500 mb-8" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-gray-700">Home</a>
        <span class="mx-1">/</span>
        <a href="#" class="hover:text-gray-700">Services</a>
        <span class="mx-1">/</span>
        <span class="font-bold">PORTRAITS</span>
    </nav>

    <!-- Title & Intro -->
    <section class="mb-10" aria-labelledby="portraits-heading">
        <h1 id="portraits-heading" class="text-2xl font-extrabold mb-2">PORTRAITS</h1>
        <p class="text-gray-700 text-base">PROFESSIONAL PET PICTURES</p>
    </section>

    <section class="mb-10" aria-labelledby="portraits-description">
        <p id="portraits-description" class="text-sm leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada consectetur justo,
            vitae congue libero aliquet non. Maecenas facilisis ultrices volutpat.
        </p>
    </section>

    <!-- Photoshoot Packages -->
    <section class="mb-10" aria-labelledby="photoshoot-packages-heading">
        <h2 id="photoshoot-packages-heading" class="text-lg font-bold mb-4">PHOTOSHOOT PACKAGES</h2>
        <div class="bg-gray-300 w-full h-32 flex items-center justify-center rounded-lg p-4 mb-4">
            <span class="text-gray-700">Packages Placeholder</span>
        </div>

        <!-- Dog/Cat Tabs -->
        <div class="tabs-container" id="portrait-tabs" aria-labelledby="tabs-heading">
            <h2 id="tabs-heading" class="sr-only">Portrait Tabs</h2>
            <div class="tabs flex items-center gap-4 mb-4">
                <!-- DOG Tab -->
                <button 
                    class="tab-button active border border-black text-black text-sm font-bold px-6 py-2 
                           rounded-full shadow-md hover:bg-black hover:text-white transition flex items-center gap-2 cursor-pointer" 
                    data-tab="dog"
                >
                    <!-- Dog Icon -->
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
                    <!-- Cat Icon -->
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
            <?php render_portrait_tab('dog', $dog_packages); ?>
            <!-- Cat Tab Content -->
            <?php render_portrait_tab('cat', $cat_packages); ?>
        </div>
    </section>

    <!-- Book a Photoshoot CTA -->
    <section class="mb-10 text-center" aria-labelledby="book-photoshoot-heading">
        <h2 id="book-photoshoot-heading" class="text-xl font-bold uppercase mb-4">BOOK A PHOTOSHOOT FOR YOUR PETS!</h2>
        <a href="#"
           class="inline-block border border-black text-black text-sm font-bold px-6 py-2 
                  rounded-full shadow-md hover:bg-black hover:text-white transition">
            BOOK A PHOTOSHOOT
        </a>
    </section>

    <!-- Requirements -->
    <section class="mb-10" aria-labelledby="requirements-heading">
        <h3 id="requirements-heading" class="text-lg font-bold mb-4">REQUIREMENTS</h3>
        <ul class="list-disc list-inside space-y-2 text-sm">
            <li>Item One about the photoshoot</li>
            <li>Item Two about the photoshoot</li>
            <li>Item Three about the photoshoot</li>
        </ul>
    </section>

    <!-- Example Photos (ACF Repeater) -->
    <section class="mb-10 text-center" aria-labelledby="example-photos-heading">
        <h3 id="example-photos-heading" class="text-lg font-bold mb-4">EXAMPLE PHOTOS</h3>

        <?php if ( have_rows('example_photos') ) : ?>
            <div class="flex justify-center gap-8 mb-8 p-4 flex-wrap">
                <?php while ( have_rows('example_photos') ) : the_row();
                    $photo_image = get_sub_field('photo_image');
                    $photo_label = get_sub_field('photo_label');
                ?>
                    <div>
                        <?php if ( $photo_image ) : ?>
                            <img
                                src="<?php echo esc_url($photo_image['url']); ?>"
                                alt="<?php echo esc_attr($photo_label); ?>"
                                class="w-40 h-40 mx-auto object-cover bg-gray-300 rounded"
                            />
                        <?php else : ?>
                            <div class="bg-gray-300 w-40 h-40 mx-auto rounded"></div>
                        <?php endif; ?>

                        <?php if ( $photo_label ) : ?>
                            <p class="mt-2 text-sm"><?php echo esc_html($photo_label); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p class="text-sm mb-8">No example photos found.</p>
        <?php endif; ?>

        <div class="mb-10">
            <a href="#"
               class="inline-block border border-black text-black text-sm font-bold px-6 py-2 
                      rounded-full shadow-md hover:bg-black hover:text-white transition">
                VIEW MORE PHOTOS IN GALLERY
            </a>
        </div>

        <p class="text-sm mb-6">
            IF YOU HAVE ANY QUESTIONS CHECK OUT OUR FAQ PAGE OR FEEL FREE TO CONTACT US
        </p>
        <div class="flex justify-center gap-4">
            <a href="/faq"
               class="border border-black text-black text-sm font-bold px-6 py-2 
                      rounded-full shadow-md hover:bg-black hover:text-white transition">
                FAQ PAGE
            </a>
            <a href="/contact"
               class="border border-black text-black text-sm font-bold px-6 py-2 
                      rounded-full shadow-md hover:bg-black hover:text-white transition">
                CONTACT PAGE
            </a>
        </div>
    </section>
</div>

<?php
get_footer();
