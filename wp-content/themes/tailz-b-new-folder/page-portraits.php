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

<div class="container mx-auto">
    <div class="flex flex-col">
        <!-- Banner -->
        <section class="flex flex-col gap-3">
        <div class="relative h-[15.375rem] w-full overflow-hidden">
                <?php
                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    if($featured_image_url) : ?>
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url($featured_image_url); ?>')"></div>
                    <?php endif; ?>
                    <div class="flex flex-col absolute inset-0 mx-6 justify-end my-[43px]">
                        <h2 class="lowercase font-bold text-white text-[53.8px]"><?php the_title(); ?></h2>
                        <p class="uppercase text-white text-[18px]">Professional pet pictures</p>
                    </div>
            </div>
        </section>
        <!-- Fur-ever captured in art -->
        <section class="mb-10">
            <div class="flex flex-col gap-3">
                <h3 class="lowercase text-[22px] text-[#837660]">Fur-ever captured in art</h3>
                <p class="text-[18px] text-[#47423B]">From mischievous grins to regal poses - you pet's personality shines in a one-of-a-kind portrait that's as unforgettable as they are!</p>
            </div>
        </section>
        <!-- Picture purr-fect pet portraits from snouts to tailz -->
        <section class="mb-10">
            <h2 class="lowercase font-bold text-[22px] text-[#615849]">Picture purr-fect pet portraits from snouts to TAILZ</h2>
            <!-- Container -->
            <div class="flex flex-col gap-15">
                <!-- Sub Container 1 -->
                <div class="flex flex-col gap-15">
                    <!-- Jump into the studio with your furry friend-->
                    <div class="flex flex-col gap-3">
                        <h3 class="lowercase text-[22px] text-[#837660]">Jump into the studio with your furry friend</h3>
                        <p class="text-[18px] text-[#47423B]">Preserve your pet's personality with a professional portrait session designed to showcase their charm, energy, and quirks. Unlike smartphone snapshots, our photography service uses expert lighting, composition, and patience to create stunning, frame-worthy images you'll treasure forever.</p>
                    </div>
                    <!-- Mobile Only Image -->
                    <img class="md:hidden" src="https://placehold.co/600x400" alt="">
                    <!-- The perks of going professional -->
                    <div class="flex flex-col gap-3">
                        <h3 class="lowercase text-[22px] text-[#837660]">The perks of going professional</h3>
                        <p class="text-[18px] text-[#47423B]"><span class="font-bold text-[#615849]">Authentic Moments:</span> Candid shots and posed portraits that captures your pet's true self. Perfect for keepsake.</p>
                        <p class="text-[18px] text-[#47423B]"><span class="font-bold text-[#615849]">Artistic Quality:</span> High-resolution images shot with professional equipment, along with perfect lighting and editing - no awkward angle or blurry tails.</p>
                        <p class="text-[18px] text-[#47423B]"><span class="font-bold text-[#615849]">Stress-Free Experience:</span> Sessions tailored to your pet's comfort (treats readily available and play breaks included!).</p>
                        <p class="text-[18px] text-[#47423B]"><span class="font-bold text-[#615849]">Sentimental Art Piece:</span> Digital files and print options to display your favourites at home.</p>
                        <p class="text-[18px] text-[#47423B]"><span class="font-bold text-[#615849]">Furry Fun:</span> Props and costumes are always on stand-by! Choose from a variety of backdrops that will make your pet pop!</p>
                    </div>
                </div>
                <!-- Sub Container 2 -->
                <div>
                    <!-- Desktop Only Image -->
                    <img class="hidden md:block" src="https://placehold.co/600x400" alt="">
                </div>
            </div>
        </section>
        <!-- Policy -->
        <section class="mb-10">
            <div class="flex flex-col gap-3 mx-6 bg-[#F3F2EC] rounded-[12px] p-[30px]">
                <h3 class="uppercase text-[24px] text-[#837660]">Please note</h3>
                <p class="italic text-[24px]">Photo sessions require advanced scheduling and prepayment prior to the session.</p>
                <p class="italic text-[24px]">A minimum 24-hour notice is required to reschedule any session. Late cancellations (under 24 hours) will result in a $50 fee.</p>
            </div>
        </section>
    </div>











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
</section>

<?php
get_footer();
