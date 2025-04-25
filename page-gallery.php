<?php

/**
 * Template Name: Gallery
 *
 * @package Tailz
 */

get_header();

// Banner
get_template_part('template-parts/banner');

// Getting the Posts
$args = array(
    'post_type' => 'gallery-image',
    'posts_per_page' => -1,
);
$query = new WP_Query($args);
?>

<div class="mx-[24px] my-[20px] md:mx-[40px] lg:mx-[90px] lg:my-[30px]">
    <!-- Breadcrumbs -->
    <nav class="border-b-2 border-cream pb-[20px] lg:pb-[30px]" aria-label="Breadcrumb">
        <ol class="flex items-center font-worksans text-[14px] md:text-[16px] text-darkbrown">
            <li>
                <a href="<?php echo home_url(); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                    Home
                </a>
            </li>
            <li class="mx-2" aria-hidden="true">/</li>
            <li aria-current="page">
                <span class="uppercase font-bold">Gallery</span>
            </li>
        </ol>
    </nav>
    <!-- Content -->
    <h2 class="lowercase text-darkbrown text-4xl py-[20px] lg:text-7xl lg:py-[60px]">A picture speaks a thousand woofs</h2>
    <h3 class="pb-8 text-brown text-3xl lg:text-[56px]">photos</h3>
    <button id="gallery-filter-btn" class="md:hidden bg-blue text-white text-lg font-poppins rounded-full font-bold px-[40px] py-[6px] mb-8 lowercase hover:bg-darkblue">Filter</button>
    <!-- Filter and Shop -->
    <section class="md:flex md:gap-[70px]">
        <!-- Filters -->
        <div id="filter-menu" class="hidden md:block min-w-[300px]">
            <div class="flex justify-between items-center">
                <div class="flex justify-between items-center md:flex-1 py-7">
                    <h3 class="mr-4 text-lightbrown text-3xl lg:text-[42px]">filter</h3>
                    <button id="clear-all" class="text-darkbrown text-base lg:text-2xl">Clear All</button>
                </div>
                <svg id="filter-close-btn" class="md:hidden md:absolute" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.201172" y="20" width="28" height="4" transform="rotate(-45 0.201172 20)" fill="#47423B" />
                    <rect x="3.20117" width="28" height="4" transform="rotate(45 3.20117 0)" fill="#47423B" />
                </svg>
            </div>
            <!-- By Pet -->
            <div class="w-full border-cream border-b-2 pb-[20px] lg:pb-[30px] mb-[20px] mb-[30px]">
                <h4 class="pb-4 text-brown text-[26px] lg:text-3xl">by pet</h4>
                <!-- Dog -->
                <div class="flex">
                    <input type="radio" name="pet" id="dog" class="hidden" />
                    <label for="dog" class="self-start mr-4 font-poppins text-darkbrown hover:bg-blue hover:text-white bg-cream rounded-full text-base font-bold px-5 py-2.5 uppercase cursor-pointer">
                        Dog
                    </label>

                    <!-- Cat -->
                    <input type="radio" name="pet" id="cat" class="hidden" />
                    <label for="cat" class="self-start font-poppins text-darkbrown hover:bg-blue hover:text-white bg-cream rounded-full text-base font-bold px-5 py-2.5 uppercase cursor-pointer">
                        Cat
                    </label>
                </div>
            </div>
            <!-- By Service -->
            <div class="border-cream border-b-2 pb-[20px] lg:pb-[30px] mb-[60px]">
                <h4 class="text-brown text-[26px] lg:text-3xl">by service</h4>
                <div class="flex flex-col space-y-4 font-poppins">
                    <!-- Grooming -->
                    <input type="checkbox" id="grooming" name="service[]" value="grooming" class="hidden">
                    <label for="grooming" class="self-start text-darkbrown bg-cream rounded-full lg:text-lg text-base font-bold px-5 py-2.5 uppercase cursor-pointer hover:bg-red transition-colors">
                        Grooming
                    </label>

                    <!-- Daycare -->
                    <input type="checkbox" id="daycare" name="service[]" value="daycare" class="hidden">
                    <label for="daycare" class="self-start text-darkbrown bg-cream rounded-full text-base lg:text-lg font-bold px-5 py-2.5 uppercase cursor-pointer hover:bg-orange transition-colors">
                        Daycare
                    </label>

                    <!-- Hotel -->
                    <input type="checkbox" id="hotel" name="service[]" value="hotel" class="hidden">
                    <label for="hotel" class="self-start text-darkbrown bg-cream rounded-full text-base lg:text-lg font-bold px-5 py-2.5 uppercase cursor-pointer hover:bg-yellow transition-colors">
                        Hotel
                    </label>

                    <!-- Training -->
                    <input type="checkbox" id="training" name="service[]" value="training" class="hidden">
                    <label for="training" class="self-start text-darkbrown bg-cream rounded-full text-base lg:text-lg font-bold px-5 py-2.5 uppercase cursor-pointer hover:bg-lime transition-colors">
                        Training
                    </label>

                    <!-- Exercise -->
                    <input type="checkbox" id="exercise" name="service[]" value="exercise" class="hidden">
                    <label for="exercise" class="self-start text-darkbrown bg-cream rounded-full text-base lg:text-lg font-bold px-5 py-2.5 uppercase cursor-pointer hover:bg-sky transition-colors">
                        Exercise
                    </label>

                    <!-- Portraits -->
                    <input type="checkbox" id="portraits" name="service[]" value="portraits" class="hidden">
                    <label for="portraits" class="self-start text-darkbrown bg-cream rounded-full text-base lg:text-lg font-bold px-5 py-2.5 uppercase cursor-pointer hover:bg-purple transition-colors">
                        Portraits
                    </label>

                    <!-- Puppy Programs -->
                    <input type="checkbox" id="puppy-programs" name="service[]" value="puppy-programs" class="hidden">
                    <label for="puppy-programs" class="self-start text-darkbrown bg-cream rounded-full text-base lg:text-lg font-bold px-5 py-2.5 uppercase cursor-pointer hover:bg-pink transition-colors">
                        Puppy Programs
                    </label>
                </div>
            </div>
        </div>
        <!-- Gallery -->
        <div>
            <div class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                        $image = get_field('image');
                        $name = get_field('name');

                        $pet = get_field('pet-type'); // 'dog' or 'cat' (Term Object)
                        $pet_slug = '';
                        if (is_array($pet) && !empty($pet) && is_object($pet[0])) {
                            $pet_slug = $pet[0]->slug;
                        }

                        $service = get_field('service'); // Service (Array of Term Objects)
                ?>

                        <div class="gallery-image break-inside-avoid overflow-hidden pb-[10px] md:pb-[20px]"
                            data-pet="<?php echo esc_attr($pet_slug); ?>"
                            data-service="<?php
                                            if (is_array($service) && !empty($service)) {
                                                $service_slugs = array();
                                                foreach ($service as $term) {
                                                    if (is_object($term) && isset($term->slug)) {
                                                        $service_slugs[] = $term->slug;
                                                    }
                                                }
                                                echo esc_attr(implode(' ', $service_slugs));
                                            }
                                            ?>">
                            <?php if ($image): ?>
                                <img src="<?php echo esc_url($image); ?>" class="rounded-[18px] mb-[8px]">
                            <?php endif; ?>
                            <?php if ($name): ?>
                                <p class="font-bold text-darkbrown font-worksans text-lg lg:text-2xl"><?php echo esc_html($name); ?></p>
                            <?php endif; ?>
                        </div>
                <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
            <!-- End of Gallery -->
            <div class="flex items-center justify-center pt-[60px] pb-[100px]">
                <div class="text-center items-center space-y-4">
                    <button class="bg-blue text-white text-lg font-poppins rounded-full font-bold px-[40px] py-[8px] mb-8 lowercase hover:bg-darkblue"><a href="<?php echo home_url(); ?>">Go to Homepage</a></button>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
get_footer();
?>