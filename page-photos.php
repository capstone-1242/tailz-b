<?php
/**
 * Template Name: Photos
 * Description: A custom template for the "Photos" page, displaying photoshoot packages
 *
 * @package tailz
 */

get_header();
?>

<div class="container mx-auto px-4 py-10">
    <!-- Breadcrumb / Navigation -->
    <nav class="text-sm text-gray-500 mb-8">
        <a href="<?php echo home_url(); ?>" class="hover:text-gray-700">Home</a>
        <span class="mx-1">/</span>
        <a href="#" class="hover:text-gray-700">Services</a>
        <span class="mx-1">/</span>
        <span>PORTRAITS</span>
    </nav>

    <!-- Title & Subtitle Section -->
    <section class="mb-10">
        <h1 class="text-2xl font-extrabold mb-2">PORTRAITS</h1>
        <p class="text-gray-700 text-base">PROFESSIONAL PET PICTURES</p>
    </section>

    <!-- Intro / Description Section -->
    <section class="mb-10">
        <p class="text-sm leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada consectetur justo,
            vitae congue libero aliquet non. Maecenas facilisis ultrices volutpat.
        </p>
    </section>

    <!-- Photoshoot Packages Section -->
    <section class="mb-10">
        <h2 class="text-lg font-bold mb-4">PHOTOSHOOT PACKAGES</h2>
        <div class="bg-gray-300 w-full h-32 flex items-center justify-center rounded-lg p-4">
            <!-- Placeholder for Packages -->
            <span class="text-gray-700">Packages Placeholder</span>
        </div>
    </section>

    <!-- Book a Photoshoot CTA Section -->
    <section class="mb-10 text-center">
        <h2 class="text-xl font-bold uppercase mb-4">BOOK A PHOTOSHOOT FOR YOUR PETS!</h2>
        <a href="#"
           class="inline-block border border-black text-black text-sm font-bold px-6 py-2 
                  rounded-full shadow-md hover:bg-black hover:text-white transition">
            BOOK A PHOTOSHOOT
        </a>
    </section>

    <!-- Requirements Section -->
    <section class="mb-10">
        <h3 class="text-lg font-bold mb-4">REQUIREMENTS</h3>
        <ul class="list-disc list-inside space-y-2 text-sm">
            <li>Item One about the photoshoot</li>
            <li>Item Two about the photoshoot</li>
            <li>Item Three about the photoshoot</li>
        </ul>
    </section>

    <!-- Example Photos Section -->
    <section class="mb-10 text-center">
        <h3 class="text-lg font-bold mb-4">EXAMPLE PHOTOS</h3>

        <?php if ( have_rows('example_photos') ) : ?>
            <!-- Container for Repeater Items with extra spacing -->
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

        <!-- Gray CTA button (same style as landing) -->
        <div class="mb-10">
            <a href="#"
               class="inline-block border border-black text-black text-sm font-bold px-6 py-2 
                      rounded-full shadow-md hover:bg-black hover:text-white transition">
                VIEW MORE PHOTOS IN GALLERY
            </a>
        </div>

        <!-- FAQ / Contact Section -->
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
