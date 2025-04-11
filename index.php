<?php
/**
 * Template Name: Index
 * Description: The front page template for TailPress.
 *
 * @package tailz
 */

get_header();
?>

<?php get_template_part('template-parts/banner'); ?>

<div>
    <div class="flex flex-col gap-[60px] lg:gap-[130px]">
        <!-- Our services -->
        <section>
            <div class="flex flex-col gap-[20px] lg:gap-[30px] mx-6 lg:mx-[89px]">
                <h2 class="text-[44.8px] lg:text-[75.8px] text-[#47423B] lowercase">Our services</h2>
                <!-- Deck -->
                <div class="grid grid-cols-2 gap-4 lg:grid-cols-3 text-center">
                    <div>
                        <a href="">
                            <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                            <div class="bg-[#FF6A6A] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Grooming</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div>
                        <a href="">
                            <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                            <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Daycare</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div>
                        <a href="">
                            <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                            <div class="bg-[#FCD41D] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Hotel</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div>
                        <a href="">
                            <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                            <div class="bg-[#C0E333] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Training</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div>
                        <a href="">
                            <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                            <div class="bg-[#6FDBFC] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Exercise</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div>
                        <a href="">
                            <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                            <div class="bg-[#CB93FF] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Portraits</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-span-2">
                        <a href="">
                            <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                            <div class="bg-[#FF8ECC] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Puppy programs</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- New Facility Banner -->
        <section>
            <div class="flex flex-col">
                <div class="relative w-full h-screen max-h-[15.75rem] lg:max-h-[50rem] overflow-hidden">
                    <div class="absolute inset-0">
                        <img src="https://placehold.co/1920x1080" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-[10px] lg:gap-[30px] absolute inset-0 mx-6 lg:mx-[89px] py-6 lg:py-[89px] justify-end">
                        <h2 class="text-[#FFFFFF] text-[37px] lg:text-[75.8px]">New facility! New features!</h2>
                        <p class="text-[#6FDBFC] text-[24px] lg:text-[42.65px] font-bold">Doggy swim!</p>
                        <p class="text-[#FFFFFF] text-[18px] lg:text-[24px]">Find out more about doggy swim on our exercise page!</p>
                        <button class="text-[#FFFFFF] text-[18px] lg:text-[24px] bg-[#6FDBFC] py-[5px] px-[22px] lg:py-[16px] lg:px-[40px] rounded-[30px] w-fit hover:bg-[#5ac5e6] transition-colors">Learn more</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pet Registration -->
        <section>
            <div class="flex flex-col">
                <h2 class="mx-6 lg:mx-[89px] text-[#2B3FB8] text-[clamp(37px,5vw,75.8px)] uppercase leading-none">Register your pet</h2>
                <div class="flex flex-col py-6 lg:py-[60px] px-6 lg:px-[89px] bg-[#2B3FB8] gap-[30px] lg:gap-[40px]">
                    <div class="text-[#FFFFFF] flex flex-col gap-[20px] lg:gap-[30px]">
                        <h3 class="text-[clamp(31px,3.5vw,56.8px)] lowercase">We welcome all new furry friends!</h3>
                        <p class="text-[clamp(18px,1.8vw,32px)]">Register your cat or dog today for our <span class="underline">Daycare</span> & <span class="underline">Puppy Programs</span> and enjoy quicker bookings for all of ours services - their profile will be ready whenever you need us!</p>
                    </div>
                    <div class="flex flex-col gap-[20px] lg:gap-[30px]">
                        <h3 class="text-[clamp(31px,3.5vw,56.8px)] lowercase text-[#FFFFFF]">Gain rewards</h3>
                        <div class="flex flex-col lg:flex-row gap-[20px] lg:gap-[30px]">
                            <div class="flex flex-col 2xl:flex-row gap-[20px] 2xl:gap-[30px] bg-[#6FDBFC] p-[15px] 2xl:p-[30px] rounded-[30px] text-[#FFFFFF] 2xl:w-3/4">
                                <div class="flex flex-col gap-[10px] 2xl:gap-[20px] 2xl:w-1/2">
                                    <h4 class="text-[clamp(26px,3vw,56.8px)]">head-to-TAILZ loyalty program</h4>
                                    <p class="font-bold text-[clamp(22px,2vw,24px)]">Pamper your pet and save!</p>
                                    <p class="text-[clamp(22px,2vw,24px)]">Sign up for our <a href="" class="underline">pet spa</a> loyalty program next time you visit!</p>
                                </div>
                                <div class="flex flex-col 2xl:flex-row gap-[10px] 2xl:gap-[30px] 2xl:w-1/2">
                                    <div class="flex flex-col lowercase py-[15px] px-[30px] 2xl:py-[30px] border-4 border-[#FFFFFF] rounded-[30px]">
                                        <h5 class="text-[clamp(26px,3vw,56.8px)]">Save 5%</h5>
                                        <p class="text-[clamp(18px,1.8vw,32px)]">With our 8-week maintenance schedule</p>
                                    </div>
                                    <div class="flex flex-col lowercase py-[15px] px-[30px] 2xl:py-[30px] border-4 border-[#FFFFFF] rounded-[30px]">
                                        <h5 class="text-[clamp(26px,3vw,56.8px)]">Save 10%</h5>
                                        <p class="text-[clamp(18px,1.8vw,32px)]">With our 4-week maintenance schedule</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-[10px] p-[5px] p-[25px] border-4 border-[#FEA91D] rounded-[30px] 2xl:w-1/4 lg:h-fit">
                                <h4 class="text-[clamp(26px,3vw,56.8px)] text-[#FEA91D]">WagMore rewards</h4>
                                <p class="text-[clamp(18px,1.8vw,32px)] text-[#FFFFFF]">Collect points at the <a href="" class="underline">TAILZ shop!</a></p>
                            </div>
                        </div>
                    </div>
                    <button class="bg-[#FEA91D] text-[#FFFFFF] rounded-[60px] text-[clamp(18px,1.8vw,26px)] py-[15px] px-[50px] w-fit self-center lowercase">Register today</button>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section>
            <div class="flex flex-col gap-[20px] xl:gap-[30px]">
                <h2 class="text-[#47423B] text-[37px] lg:text-[75.8px] lowercase mx-6 lg:mx-[89px]">Gallery</h2>
            </div>
        </section>

        <!-- Our shop -->
        <section>
            <div class="flex flex-col gap-[20px] lg:gap-[30px]">
                <h2 class="text-[#47423B] text-[37px] lg:text-[75.8px] lowercase mx-6 lg:mx-[89px]">Our shop</h2>
            </div>
        </section>

        <!-- Testimonials -->
        <section>
            <div class="flex flex-col gap-[20px] lg:gap-[30px]">
                <h2 class="text-[#47423B] text-[37px] lg:text-[75.8px] lowercase mx-6 lg:mx-[89px]">Testimonials</h2>
            </div>
        </section>

        <!-- Newletter -->
        <section>
            <div class="flex flex-col">
                <div class="relative w-full h-screen max-h-[20rem] lg:max-h-[50rem] overflow-hidden">
                    <div class="absolute inset-0">
                        <img src="https://placehold.co/1920x1080" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-[10px] lg:gap-[30px] absolute inset-0 mx-6 lg:mx-[89px] py-6 lg:py-[89px] justify-end">
                        <h2 class="text-[#FFFFFF] text-[37px] lg:text-[75.8px]">Don't miss a tail-wagging update!</h2>
                        <p class="text-[#FFFFFF] text-[18px] lg:text-[24px]">Sign up for exclusive deals, pet-approved product drops, and secret coupon codes - delivered straight to your inbox</p>
                        <div class="rounded-[30px] border-4 border-[#FEA91D] w-fit">
                            <input type="email" name="email" placeholder="your email address" class="py-[5px] px-[12px] focus:outline-none lg:text-[24px]">
                            <button class="lowercase hover:cursor-pointer text-[18px] lg:text-[24px] text-[#FFFFFF] bg-[#FEA91D] rounded-r-[25px] py-[5px] px-[12px] lg:py-[10px] lg:px-[55px]">Join the pack</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

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
                // Fallback gallery content if ACF is not available
                if (function_exists('get_field')) {
                    $gallery_images = get_field('gallery_images');
                    if ($gallery_images) :
                        foreach ($gallery_images as $image) :
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="Gallery Image" class="w-full rounded-lg shadow-lg">
                            </div>
                            <?php
                        endforeach;
                    endif;
                } else {
                    // Fallback content
                    ?>
                    <div class="swiper-slide">
                        <div class="w-full h-64 bg-gray-300 rounded-lg shadow-lg flex items-center justify-center">
                            <p class="text-gray-600">Gallery images will appear here</p>
                        </div>
                    </div>
                    <?php
                }
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
        <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
    </section>

    <!-- Newsletter Signup Section -->
    <section class="w-full bg-gray-200 py-12" aria-labelledby="newsletter-heading">
        <div class="max-w-md mx-auto text-center">
            <h2 id="newsletter-heading" class="text-xl font-extrabold text-gray-900">
                <?php echo function_exists('get_field') ? esc_html(get_field('newsletter_heading')) : 'SIGN UP FOR OUR NEWSLETTER!'; ?>
            </h2>
            <p class="text-gray-700 mt-4 text-sm leading-relaxed">
                <?php echo function_exists('get_field') ? esc_html(get_field('newsletter_description')) : 'Stay updated with our latest news and offers.'; ?>
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