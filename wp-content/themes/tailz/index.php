<?php
/**
 * Template Name: Index
 * Description: The front page template for TailPress.
 *
 * @package tailz
 */

get_header();
?>

<div class="container mx-auto px-4 py-6">
    <!-- Breadcrumb Navigation -->
    <nav class="text-sm text-gray-500 mb-4" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-gray-700">Home</a>
    </nav>

    <!-- Hero Section -->
    <section class="relative w-full h-72 bg-gray-200 mb-6" aria-labelledby="hero-heading">
        <!-- Background Image Placeholder -->
        <div class="absolute inset-0 bg-gray-300 bg-cover bg-center">
            <!-- Replace with an actual image when available -->
        </div>
        <!-- Overlay Content with Partial Transparency -->
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="bg-white bg-opacity-80 p-6 rounded-2xl shadow-lg text-center w-[90%] max-w-md">
                <h1 id="hero-heading" class="text-2xl font-extrabold text-gray-900">WELCOME TO TAILZ</h1>
                <p class="text-gray-700 mt-4 text-sm leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel malesuada ligula. Sed luctus nisl et justo tincidunt.
                </p>
                <div class="mt-6 flex justify-center gap-3">
                    <a href="/book-now" class="border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition cursor-pointer">
                        BOOK NOW
                    </a>
                    <a href="/shop" class="border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition cursor-pointer">
                        SHOP NOW
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="mt-10 mb-6" aria-labelledby="services-heading">
        <h2 id="services-heading" class="text-xl font-bold text-gray-900 text-center">OUR SERVICES</h2>
        <div class="grid grid-cols-2 gap-4 mt-6">
            <?php
            // Services array
            $services = [
                [
                    'title' => 'GROOMING',
                    'slug'  => 'grooming',
                ],
                [
                    'title' => 'DAYCARE',
                    'slug'  => 'daycare',
                ],
                [
                    'title' => 'TRAINING',
                    'slug'  => 'training',
                ],
                [
                    'title' => 'HOTEL',
                    'slug'  => 'hotel',
                ],
                [
                    'title' => 'EXERCISE',
                    'slug'  => 'exercise',
                ],
                [
                    'title' => 'PHOTOS',
                    'slug'  => 'photos',
                ],
                [
                    'title' => 'PUPPY PROGRAMS',
                    'slug'  => 'puppy-programs',
                ],
            ];

            foreach ($services as $index => $service): ?>
                <div class="relative bg-gray-300 rounded-lg p-6 flex justify-center items-end h-32 <?php echo $index === count($services) - 1 ? 'col-span-2' : ''; ?>">
                    <a href="<?php echo esc_url(home_url('/' . $service['slug'])); ?>" class="hover:text-gray-700">
                        <?php echo esc_html($service['title']); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="relative w-full h-72 bg-gray-200 mb-6" aria-labelledby="features-heading">
        <!-- SwiperJS or Static Image Placeholder -->
        <div class="absolute inset-0 bg-gray-300 bg-cover bg-center">
            <!-- Replace bg-gray with an actual image carousel later -->
        </div>

        <div class="absolute inset-0 flex items-center justify-center">
            <div class="bg-white/80 p-6 rounded-2xl shadow-lg text-center w-[90%] max-w-md">
                <h2 id="features-heading" class="text-xl font-extrabold text-gray-900">NEW FACILITY!<br>NEW FEATURES!</h2>
                <p class="text-gray-700 mt-4 text-sm leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel malesuada ligula. Sed luctus nisl et justo tincidunt.
                </p>
                <div class="mt-6">
                    <a href="/learn-more" class="border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition">
                        LEARN MORE
                    </a>
                </div>
            </div>
        </div>

        <!-- Carousel Dots (Static for Now) -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <span class="w-3 h-3 bg-gray-400 rounded-full"></span>
            <span class="w-3 h-3 bg-gray-600 rounded-full"></span>
            <span class="w-3 h-3 bg-gray-400 rounded-full"></span>
        </div>
    </section>

    <!-- WooCommerce Featured Products Section (Fully Setup ACF later) -->
    <section class="container mx-auto px-4 py-10" aria-labelledby="shop-heading">
        <h2 id="shop-heading" class="text-xl font-bold text-gray-900 text-center mb-6">OUR SHOP</h2>
    </section>

    <!-- WooCommerce Category Selection Section (Set it up with ACF later) -->
    <section class="container mx-auto px-4 py-10" aria-labelledby="shop-by-pet-heading">
        <h2 id="shop-by-pet-heading" class="text-lg font-bold text-gray-900 mb-4">SHOP BY PET</h2>

        <!-- Go to Shop Button -->
        <div class="flex justify-center mt-6">
            <a href="/shop" class="bg-gray-200 text-black text-sm font-bold px-6 py-3 rounded-full shadow-md hover:bg-gray-300 transition">
                GO TO SHOP
            </a>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="container mx-auto px-4 py-10" aria-labelledby="gallery-heading">
        <h2 id="gallery-heading" class="text-xl font-bold text-gray-900 text-center mb-4">GALLERY</h2>

        <!-- Swiper Container -->
        <div class="swiper gallery-slider">
            <div class="swiper-wrapper">
                <?php
                $gallery_images = get_field('gallery_images'); // ACF Gallery Field
                if ($gallery_images) :
                    foreach ($gallery_images as $image) :
                ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="Gallery Image" class="w-full rounded-lg shadow-lg">
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>

            <!-- Navigation Buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <!-- View More Photos Button -->
        <div class="flex justify-center mt-4">
            <a href="/gallery" class="bg-gray-200 text-black text-sm font-bold px-6 py-3 rounded-full shadow-md hover:bg-gray-300 transition">
                VIEW MORE PHOTOS
            </a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="container mx-auto px-4 py-10" aria-labelledby="testimonials-heading">
        <h2 id="testimonials-heading" class="text-xl font-bold text-gray-900 text-center mb-4">TESTIMONIALS</h2>

        <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
                <?php
                $testimonials = get_field('testimonials'); // ACF Repeater Field
                if ($testimonials) :
                    foreach ($testimonials as $testimonial) :
                ?>
                        <div class="swiper-slide text-center">
                            <div class="bg-gray-200 p-6 rounded-lg shadow-lg">
                                <p class="text-gray-700 text-sm italic">"<?php echo esc_html($testimonial['quote']); ?>"</p>
                                <h4 class="text-black font-semibold mt-2"><?php echo esc_html($testimonial['author']); ?></h4>
                            </div>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>

            <!-- Navigation Buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- Newsletter Signup Section -->
    <section class="w-full bg-gray-200 py-12" aria-labelledby="newsletter-heading">
        <div class="max-w-md mx-auto text-center">
            <h2 id="newsletter-heading" class="text-xl font-extrabold text-gray-900">
                <?php echo esc_html(get_field('newsletter_heading') ?: 'SIGN UP FOR OUR NEWSLETTER!'); ?>
            </h2>
            <p class="text-gray-700 mt-4 text-sm leading-relaxed">
                <?php echo esc_html(get_field('newsletter_description') ?: 'Stay updated with our latest news and offers.'); ?>
            </p>

            <!-- Newsletter Form -->
            <form action="#" method="POST" class="mt-6 flex justify-center rounded bg-gray-200 p-4">
                <input type="email" name="email" placeholder="YOUR EMAIL ADDRESS" required 
                    class="w-full max-w-xs px-4 py-3 border border-gray-400 rounded-l-full text-gray-700 text-sm focus:outline-none focus:ring-2 focus:ring-gray-500">
                <button type="submit" class="bg-gray-600 text-white px-6 py-3 rounded-r-full font-bold hover:bg-black transition">
                    JOIN
                </button>
            </form>
        </div>
    </section>

</div>

<?php get_footer(); ?>