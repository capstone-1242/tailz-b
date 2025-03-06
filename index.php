<?php get_header(); ?>

<div class="container mx-auto px-4 py-6">

    <!-- Breadcrumb Navigation -->
    <nav class="text-sm text-gray-500 mb-4">
        <a href="<?php echo home_url(); ?>" class="hover:text-gray-700">Home</a>
    </nav>

    <!-- Hero Section with Background Image -->
    <section class="relative w-full h-72 bg-gray-200 mb-6">
        <!-- Background Image Placeholder -->
        <div class="absolute inset-0 bg-gray-300 bg-cover bg-center">
            <!-- Replace bg-gray-300 with an actual image in the future -->
        </div>

        <!-- Overlay Content -->
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="bg-white p-6 rounded-2xl shadow-lg text-center w-[90%] max-w-md">
                <h1 class="text-2xl font-extrabold text-gray-900">WELCOME TO TAILZ</h1>
                <p class="text-gray-700 mt-4 text-sm leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel malesuada ligula. Sed luctus nisl et justo tincidunt.
                </p>
                <div class="mt-6 flex justify-center gap-3">
                    <a href="/book-now" class="border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition">
                        BOOK NOW
                    </a>
                    <a href="/shop" class="border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition">
                        SHOP NOW
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="mt-10 mb-6">
        <h2 class="text-xl font-bold text-gray-900 text-center">OUR SERVICES</h2>
        <div class="grid grid-cols-2 gap-4 mt-6">
            <?php 
            $services = [
                "Grooming", "Daycare", 
                "Training", "Hotel", 
                "Exercise", "Photos", 
                "Puppy Programs"
            ];

            foreach ($services as $index => $service): ?>
                <div class="relative bg-gray-300 rounded-lg p-6 flex justify-center items-end h-32 <?php echo $index === count($services) - 1 ? 'col-span-2' : ''; ?>">
                    <span class="absolute bottom-2 text-black font-semibold bg-white px-3 py-1 rounded"><?php echo $service; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="relative w-full h-72 bg-gray-200 mb-6">
        <!-- SwiperJS or Static Image Placeholder -->
        <div class="absolute inset-0 bg-gray-300 bg-cover bg-center">
            <!-- Replace bg-gray-300 with an actual image carousel later -->
        </div>

        <!-- Overlay Content -->
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="bg-white p-6 rounded-2xl shadow-lg text-center w-[90%] max-w-md">
                <h2 class="text-xl font-extrabold text-gray-900">NEW FACILITY!<br>NEW FEATURES!</h2>
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

    <!-- WooCommerce Featured Products Section -->
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-xl font-bold text-gray-900 text-center mb-6">OUR SHOP</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            <?php
            // Query WooCommerce featured products
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 5, // Show 5 products
                'meta_query'     => array(
                    array(
                        'key'   => '_featured',
                        'value' => 'yes'
                    )
                )
            );

            $loop = new WP_Query($args);

            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
                    global $product;
            ?>
                    <!-- Product Card -->
                    <div class="text-center">
                        <a href="<?php the_permalink(); ?>" class="block">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="w-24 h-24 mx-auto border border-gray-500 rounded-lg overflow-hidden">
                                    <?php the_post_thumbnail('woocommerce_thumbnail', ['class' => 'w-full h-full object-cover']); ?>
                                </div>
                            <?php else : ?>
                                <div class="w-24 h-24 mx-auto border border-gray-500 rounded-lg bg-gray-300"></div>
                            <?php endif; ?>
                        </a>

                        <!-- Product Name -->
                        <h3 class="mt-2 text-sm font-bold text-gray-900"><?php the_title(); ?></h3>

                        <!-- Product Price -->
                        <p class="text-sm text-gray-700">
                            From <?php echo $product->get_price_html(); ?>
                        </p>
                    </div>
            <?php
                endwhile;
            else :
                echo '<p class="text-center text-gray-500">No featured products found.</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>

    <!-- WooCommerce Category Selection Section -->
    <section class="container mx-auto px-4 py-10">
        <!-- Shop by Pet -->
        <h2 class="text-lg font-bold text-gray-900 mb-4">SHOP BY PET</h2>
        <div class="grid grid-cols-4 gap-4 mb-6">
            <?php
            $pet_categories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
            ));

            if (!empty($pet_categories)) :
                foreach ($pet_categories as $category) :
                    $is_featured_pet = get_field('is_featured_pet', 'product_cat_' . $category->term_id);
                    if ($is_featured_pet) :
            ?>
                        <a href="<?php echo get_term_link($category); ?>" class="flex items-center justify-center w-16 h-16 border border-gray-500 rounded-full bg-gray-200 hover:bg-gray-300 transition">
                            <span class="text-sm font-semibold text-gray-900 text-center"><?php echo esc_html($category->name); ?></span>
                        </a>
            <?php
                    endif;
                endforeach;
            else :
                echo '<p class="text-gray-500 text-sm">No featured pet categories found.</p>';
            endif;
            ?>
        </div>

        <!-- See Our Brands -->
        <h2 class="text-lg font-bold text-gray-900 mb-4">SEE OUR BRANDS</h2>
        <div class="grid grid-cols-4 gap-4 mb-6">
            <?php
            $brand_categories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
            ));

            if (!empty($brand_categories)) :
                foreach ($brand_categories as $category) :
                    $is_featured_brand = get_field('is_featured_brand', 'product_cat_' . $category->term_id);
                    if ($is_featured_brand) :
            ?>
                        <a href="<?php echo get_term_link($category); ?>" class="flex items-center justify-center w-16 h-16 border border-gray-500 rounded-full bg-gray-200 hover:bg-gray-300 transition">
                            <span class="text-sm font-semibold text-gray-900 text-center"><?php echo esc_html($category->name); ?></span>
                        </a>
            <?php
                    endif;
                endforeach;
            else :
                echo '<p class="text-gray-500 text-sm">No featured brand categories found.</p>';
            endif;
            ?>
        </div>

        <!-- Go to Shop Button -->
        <div class="flex justify-center mt-6">
            <a href="/shop" class="bg-gray-200 text-black text-sm font-bold px-6 py-3 rounded-full shadow-md hover:bg-gray-300 transition">
                GO TO SHOP
            </a>
        </div>
    </section>

	<!-- Gallery Section -->
<section class="container mx-auto px-4 py-10">
    <h2 class="text-xl font-bold text-gray-900 text-center mb-4">GALLERY</h2>

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
<section class="container mx-auto px-4 py-10">
    <h2 class="text-xl font-bold text-gray-900 text-center mb-4">TESTIMONIALS</h2>

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
<section class="w-full bg-gray-200 py-12">
    <div class="max-w-md mx-auto text-center">
        <h2 class="text-xl font-extrabold text-gray-900">
            <?php echo esc_html(get_field('newsletter_heading') ?: 'SIGN UP FOR OUR NEWSLETTER!'); ?>
        </h2>
        <p class="text-gray-700 mt-4 text-sm leading-relaxed">
            <?php echo esc_html(get_field('newsletter_description') ?: 'Stay updated with our latest news and offers.'); ?>
        </p>

        <!-- Newsletter Form -->
        <form action="#" method="POST" class="mt-6 flex justify-center">
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
