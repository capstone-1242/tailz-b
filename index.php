<?php

/**
 * Template Name: Index
 * Description: The front page template for TailPress.
 *
 * @package tailz
 */

get_header();

// Banner
get_template_part('template-parts/banner');
?>

<!-- Breadcrumbs -->
<nav class="border-b-2 border-cream mx-[24px] lg:mx-[90px] py-[20px] lg:py-[30px]" aria-label="Breadcrumb">
    <ol class="flex items-center font-worksans text-[14px] md:text-[16px] text-darkbrown">
        <li>
            <a href="<?php echo home_url(); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                Home
            </a>
        </li>
    </ol>
</nav>

<div>
    <div class="flex flex-col gap-[60px] lg:gap-[130px]">
        <!-- Our services -->
        <section>
            <div class="flex flex-col gap-[20px] lg:gap-[30px] mx-6 lg:mx-[89px] py-[30px] lg:py-[50px]">
                <h2 class="text-[44.8px] lg:text-[75.8px] text-[#47423B] lowercase">Our services</h2>
                <!-- Deck -->
                <div class="2xl:hidden grid grid-cols-2 gap-4 lg:grid-cols-3 text-center">
                    <div class="group flex flex-col h-full">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('grooming'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full object-cover aspect-square lg:aspect-[1/1.5] overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-grooming-photo.webp'); ?>" alt="Photo of a dog getting groomed">
                            <div class="bg-[#FF6A6A] p-[25px] rounded-b-[30px] flex flex-grow">
                                <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Grooming</h3>
                            </div>
                        </a>
                    </div>

                    <div class="group flex flex-col h-full">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('daycare'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full object-cover aspect-square lg:aspect-[1/1.5] overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-daycare-photo.webp'); ?>" alt="Photo of a dog in a playground">
                            <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px] flex flex-grow">
                                <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Daycare</h3>
                            </div>
                        </a>
                    </div>

                    <div class="group flex flex-col h-full">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('hotel'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full object-cover aspect-square lg:aspect-[1/1.5] overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-hotel-photo.webp'); ?>" alt="photo of a dog in a dog bed">
                            <div class="bg-[#FCD41D] p-[25px] rounded-b-[30px] flex flex-grow">
                                <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Hotel</h3>
                            </div>
                        </a>
                    </div>

                    <div class="group flex flex-col h-full">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('training'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full object-cover aspect-square overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-training-photo.webp'); ?>" alt="Photo of a man training a dog">
                            <div class="bg-[#C0E333] p-[25px] rounded-b-[30px] flex flex-grow">
                                <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Training</h3>
                            </div>
                        </a>
                    </div>

                    <div class="group flex flex-col h-full lg:h-fit">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('exercise'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full object-cover aspect-square overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-exercise-photo.webp'); ?>" alt="Photo of a dog doing a stretch">
                            <div class="bg-[#6FDBFC] p-[25px] rounded-b-[30px] flex flex-grow">
                                <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Exercise</h3>
                            </div>
                        </a>
                    </div>

                    <div class="group flex flex-col h-full">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('portraits'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full object-cover aspect-square overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-portraits-photo.webp'); ?>" alt="Portrait of a dog">
                            <div class="bg-[#CB93FF] p-[25px] rounded-b-[30px] flex flex-grow">
                                <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Portraits</h3>
                            </div>
                        </a>
                    </div>

                    <div class="lg:col-start-2 col-span-2 lg:col-span-1 group flex flex-col h-full lg:h-fit">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('puppy-programs'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full object-cover overflow-hidden aspect-[1/0.5] lg:aspect-square" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-puppy-programs-photo.webp'); ?>" alt="Photo of a file of puppies">
                            <div class="bg-[#FF8ECC] p-[25px] rounded-b-[30px] flex flex-grow">
                                <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Puppy programs</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="hidden 2xl:flex flex-col gap-4">
                    <div class="grid grid-cols-3 text-center gap-4">
                        <div class="group flex flex-col h-full">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('grooming'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                                <img class="rounded-t-[30px] w-full aspect-square lg:aspect-[1/1.1] overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-grooming-photo.webp'); ?>" alt="Photo of a dog getting groomed">
                                <div class="bg-[#FF6A6A] p-[25px] rounded-b-[30px] flex flex-grow">
                                    <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Grooming</h3>
                                </div>
                            </a>
                        </div>

                        <div class="group flex flex-col h-full">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('daycare'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                                <img class="rounded-t-[30px] w-full aspect-square lg:aspect-[1/1.1] overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-daycare-photo.webp'); ?>" alt="Photo of a dog in a playground">
                                <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px] flex flex-grow">
                                    <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Daycare</h3>
                                </div>
                            </a>
                        </div>

                        <div class="group flex flex-col h-full">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('hotel'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                                <img class="rounded-t-[30px] w-full aspect-square lg:aspect-[1/1.1] overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-hotel-photo.webp'); ?>" alt="photo of a dog in a dog bed">
                                <div class="bg-[#FCD41D] p-[25px] rounded-b-[30px] flex flex-grow">
                                    <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Hotel</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-5 text-center gap-4">
                        <div class="group flex flex-col h-full">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('training'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                                <img class="rounded-t-[30px] w-full object-cover aspect-square overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-training-photo.webp'); ?>" alt="Photo of a man training a dog">
                                <div class="bg-[#C0E333] p-[25px] rounded-b-[30px] flex flex-grow">
                                    <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Training</h3>
                                </div>
                            </a>
                        </div>

                        <div class="group flex flex-col h-full">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('exercise'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                                <img class="rounded-t-[30px] w-full object-cover aspect-square overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-exercise-photo.webp'); ?>" alt="Photo of a dog doing a stretch">
                                <div class="bg-[#6FDBFC] p-[25px] rounded-b-[30px] flex flex-grow">
                                    <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Exercise</h3>
                                </div>
                            </a>
                        </div>

                        <div class="group flex flex-col h-full">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('portraits'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                                <img class="rounded-t-[30px] w-full object-cover aspect-square overflow-hidden" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-portraits-photo.webp'); ?>" alt="Portrait of a dog">
                                <div class="bg-[#CB93FF] p-[25px] rounded-b-[30px] flex flex-grow">
                                    <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Portraits</h3>
                                </div>
                            </a>
                        </div>

                        <div class="col-span-2 group flex flex-col h-full">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('puppy-programs'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                                <img class="rounded-t-[30px] w-full object-cover overflow-hidden lg:aspect-[1/0.492]" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-puppy-programs-photo.webp'); ?>" alt="Photo of a file of puppies">
                                <div class="bg-[#FF8ECC] p-[25px] rounded-b-[30px] flex flex-grow">
                                    <h3 class="lowercase text-[clamp(26px,5vw,56.8px)] text-[#47423B]">Puppy programs</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- New Facility Banner -->
        <section>
            <div class="hero-banner new-facility">
                <div class="hero-banner-content">
                    <h2 class="text-[#FFFFFF] text-[37px] lg:text-[75.8px]">New facility! New features!</h2>
                    <p class="text-[#6FDBFC] text-[24px] lg:text-[42.65px] font-bold">Doggy swim!</p>
                    <p class="text-[#FFFFFF] text-[18px] lg:text-[24px]">Find out more about doggy swim on our exercise page!</p>
                    <button class="text-[#FFFFFF] text-[18px] lg:text-[24px] bg-[#6FDBFC] py-[5px] px-[22px] lg:py-[16px] lg:px-[40px] rounded-[30px] w-fit hover:bg-[#5ac5e6] transition-colors hover:shadow-md"><a href="<?php echo esc_url(get_permalink(get_page_by_path('exercise'))); ?>">Learn more</a></button>
                </div>
            </div>
        </section>

        <!-- Pet Registration -->
        <section>
            <div class="flex flex-col">
                <h2 class="mx-6 lg:mx-[89px] text-[#2B3FB8] text-[clamp(37px,5vw,75.8px)] uppercase leading-none">Register your pet</h2>
                <div class="flex flex-col py-6 lg:py-[60px] px-6 lg:px-[89px] bg-[#2B3FB8] gap-[30px] lg:gap-[40px]">
                    <div class="text-[#FFFFFF] flex flex-col gap-[20px] lg:gap-[30px]">
                        <h3 class="text-[#FFFFFF] text-[clamp(31px,3.5vw,56.8px)] lowercase">We welcome all new furry friends!</h3>
                        <p class="text-[clamp(18px,1.8vw,32px)]">Register your cat or dog today for our <a href="<?php echo esc_url(get_permalink(get_page_by_path('daycare'))); ?>" class="underline">Daycare</a> & <a href="<?php echo esc_url(get_permalink(get_page_by_path('puppy-programs'))); ?>" class="underline">Puppy Programs</a> and enjoy quicker bookings for all of ours services - their profile will be ready whenever you need us!</p>
                    </div>
                    <div class="flex flex-col gap-[20px] lg:gap-[30px]">
                        <h3 class="text-[clamp(31px,3.5vw,56.8px)] lowercase text-[#FFFFFF]">Gain rewards</h3>
                        <div class="flex flex-col lg:flex-row gap-[20px] lg:gap-[30px]">
                            <div class="flex flex-col 2xl:flex-row gap-[20px] 2xl:gap-[30px] bg-[#6FDBFC] p-[15px] 2xl:p-[30px] rounded-[30px] text-[#FFFFFF] 2xl:w-3/4">
                                <div class="flex flex-col gap-[10px] 2xl:gap-[20px] 2xl:w-1/2">
                                    <h4 class="text-[clamp(26px,3vw,56.8px)]">head-to-TAILZ loyalty program</h4>
                                    <p class="font-bold text-[clamp(22px,2vw,24px)]">Pamper your pet and save!</p>
                                    <p class="text-[clamp(22px,2vw,24px)]">Sign up for our <a href="<?php echo esc_url(get_permalink(get_page_by_path('grooming'))); ?>" class="underline">pet spa</a> loyalty program next time you visit!</p>
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
                            <div class="flex flex-col gap-[10px] p-[15px] lg:p-[25px] border-4 border-[#FEA91D] rounded-[30px] 2xl:w-1/4 lg:h-fit">
                                <h4 class="text-[clamp(26px,3vw,56.8px)] text-[#FEA91D]">WagMore rewards</h4>
                                <p class="text-[clamp(18px,1.8vw,32px)] text-[#FFFFFF]">Collect points at the <a href="<?php echo esc_url(get_permalink(get_page_by_path('shop'))); ?>" class="underline">TAILZ shop!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section>
            <div class="flex flex-col gap-[20px] xl:gap-[30px] px-6 lg:px-[89px] py-[30px] lg:py-[60px] bg-[#F3F2EC]">
                <h2 class="text-[#47423B] text-[37px] lg:text-[75.8px] lowercase">Gallery</h2>
                <?php
                $gallery_args = array(
                    'post_type'      => 'gallery-image',
                    'posts_per_page' => 5,
                    'orderby'       => 'rand', // For random order (remove for newest)
                    // 'orderby'       => 'date', // Uncomment for newest instead of random
                    'order'         => 'DESC',
                );

                $gallery_query = new WP_Query($gallery_args);
                ?>

                <?php if ($gallery_query->have_posts()) : ?>
                    <div class="flex flex-col gap-[33px] lg:flex-row lg:max-h-[327.6px]">
                        <?php while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
                            <div class="">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array(
                                        'class' => 'w-full h-full object-cover aspect-square rounded-[18px]',
                                        'alt'   => get_the_title()
                                    )); ?>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <p class="font-bold text-[clamp(22px,2vw,24px)]">No gallery images yet. Ask us about them!</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <a class="self-center lowercase font-bold text-[18px] lg:text-[26px] text-[#FFFFFF] py-[9.5px] px-[16.5px] lg:py-[16px] lg:px-[53px] rounded-[60px] bg-[#FEA91D] w-fit hover:shadow-md" href="<?php echo esc_url(get_permalink(get_page_by_path('gallery'))); ?>">View more in gallery</a>
            </div>
        </section>

        <!-- Our shop -->
        <section>
            <div class="px-[24px] py-[20px] mb-[60px] lg:px-[90px] lg:py-[60px] lg:mb-[130px]">
                <?php
                $args = [
                    'post_type'      => 'product',
                    'posts_per_page' => 4, // or however many you want
                    'post_status'    => 'publish',
                    'tax_query'      => [
                        [
                            'taxonomy' => 'product_visibility',
                            'field'    => 'name',
                            'terms'    => 'featured',
                            'operator' => 'IN',
                        ],
                    ],
                ];

                $featured_query = new WP_Query($args);
                ?>


                <h2 class="text-[#47423B] text-[37px] lg:text-[75.8px] mb-[20px] lg:mb-[30px] lowercase">Our shop</h2>
                <h3 class="text-[31px] lg:text-[56.8px] text-[#837660] mb-[20px] lg:mb-[30px] lowercase">Featured</h3>
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-[20px] lg:gap-[32px]">
                    <?php if ($featured_query->have_posts()) : ?>
                        <?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
                            <?php wc_get_template_part('content', 'product'); ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p class="col-span-full text-brown">No featured products found.</p>
                    <?php endif; ?>
                </div>
                <div class="flex justify-center mt-[30px]">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('shop'))); ?>" class="self-center lowercase font-bold text-[18px] lg:text-[26px] text-[#FFFFFF] py-[10px] lg:py-[16px] px-[16.5px] lg:px-[53px] rounded-[60px] bg-[#FEA91D] w-fit hover:shadow-md">Go to shop</a>
                </div>

            </div>
        </section>

        <!-- Testimonials -->
        <section>
            <div class="flex flex-col gap-[20px] lg:gap-[30px] bg-[#D9D9D9] py-[30px] px-6 lg:py-[60px] lg:px-[89px]">
                <h2 class="text-[#47423B] text-[37px] lg:text-[75.8px] lowercase">Testimonials</h2>
                <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
            </div>
        </section>

        <!-- Instagram Feed -->
        <section>
            <div class="flex flex-col gap-[20px] lg:gap-[30px] mx-6 lg:mx-[89px]">
                <h2 class="text-[#47423B] text-[37px] lg:text-[75.8px] lowercase">Follow us for more furry fun - tips, deals, and adorable pet pics!</h2>
                <?php
                $args = array(
                    'post_type' => 'instagram_post',
                    'posts_per_page' => 4, // Number of posts to display
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $instagram_query = new WP_Query($args);

                if ($instagram_query->have_posts()) :
                    echo '<div class="instagram-feed">';
                    while ($instagram_query->have_posts()) : $instagram_query->the_post();
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                        $post_url = get_post_meta(get_the_ID(), 'instagram_post_url', true);
                ?>

                        <div class="instagram-post">
                            <a href="<?php echo esc_url($post_url); ?>" target="_blank">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>

                <?php
                    endwhile;
                    echo '</div>';
                    wp_reset_postdata();
                else :
                    echo '<p>No Instagram posts found.</p>';
                endif;
                ?>
        </section>

        <!-- Newsletter -->
        <section>
            <div class="flex flex-col">
                <section class="hero-banner newsletter">
                    <div class="hero-banner-content">
                        <h2 class="text-[#FFFFFF] text-[37px] lg:text-[75.8px]">Don't miss a tail-wagging update!</h2>
                        <p class="text-[#FFFFFF] text-[18px] lg:text-[24px]">Sign up for exclusive deals, pet-approved product drops, and secret coupon codes - delivered straight to your inbox</p>
                        <div class="rounded-[30px] w-fit">
                            <?php echo do_shortcode('[mc4wp_form id="697"]'); ?>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>