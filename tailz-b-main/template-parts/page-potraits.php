<?php
/**
 * Template Name: Photos
 * Description: A custom template for the "Photos" (Portraits) page, displaying photoshoot packages with Dog/Cat tabs using Meta Box.
 *
 * @package tailz
 */

get_header();

// 1) Retrieve the cloned fields and cast to arrays.
$dog_titles       = (array) rwmb_meta( 'photos_dog_title' );
$dog_prices       = (array) rwmb_meta( 'photos_dog_price' );
$dog_descriptions = (array) rwmb_meta( 'photos_dog_desc' );

$cat_titles       = (array) rwmb_meta( 'photos_cat_title' );
$cat_prices       = (array) rwmb_meta( 'photos_cat_price' );
$cat_descriptions = (array) rwmb_meta( 'photos_cat_desc' );

// 2) Build dog packages array
$dog_packages = [];
$dog_total = count( $dog_titles );
for ( $i = 0; $i < $dog_total; $i++ ) {
    if ( empty( $dog_titles[ $i ] ) ) {
        continue;
    }
    $dog_packages[] = [
        'title' => $dog_titles[ $i ],
        'price' => isset( $dog_prices[ $i ] ) ? $dog_prices[ $i ] : '',
        'desc'  => isset( $dog_descriptions[ $i ] ) ? $dog_descriptions[ $i ] : '',
    ];
}

// 3) Build cat packages array
$cat_packages = [];
$cat_total = count( $cat_titles );
for ( $i = 0; $i < $cat_total; $i++ ) {
    if ( empty( $cat_titles[ $i ] ) ) {
        continue;
    }
    $cat_packages[] = [
        'title' => $cat_titles[ $i ],
        'price' => isset( $cat_prices[ $i ] ) ? $cat_prices[ $i ] : '',
        'desc'  => isset( $cat_descriptions[ $i ] ) ? $cat_descriptions[ $i ] : '',
    ];
}

/**
 * Helper function for tab content
 */
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

    <section class="mb-10" aria-labelledby="photoshoot-packages-heading">
        <h2 id="photoshoot-packages-heading" class="text-lg font-bold mb-4">PHOTOSHOOT PACKAGES</h2>
        <!-- <div class="bg-gray-300 w-full h-32 flex items-center justify-center rounded-lg p-4 mb-4">
            <span class="text-gray-700">Packages Placeholder</span>
        </div> -->

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
                        <!-- Dog icon paths -->
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
                        <!-- Cat icon paths -->
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

    <!-- Example Photos (ACF Repeater) or Meta Box Repeater if you prefer -->
    <section class="mb-10 text-center" aria-labelledby="example-photos-heading">
        <h3 id="example-photos-heading" class="text-lg font-bold mb-4">EXAMPLE PHOTOS</h3>

        <!-- ... existing code for example photos ... -->

    </section>
</div>

<?php
get_footer();
