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
    <!-- Content -->
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
                                                $service_slugs = array_map(function ($term) {
                                                    return $term->slug;
                                                }, $service);
                                                echo implode(' ', $service_slugs);
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
                    <svg class="inline-block" width="105" height="104" viewBox="0 0 105 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2327_2377)">
                            <path d="M44.9498 41.4749C44.9498 43.4273 44.1742 45.2998 42.7936 46.6803C41.413 48.0609 39.5406 48.8365 37.5882 48.8365C35.6357 48.8365 33.7633 48.0609 32.3827 46.6803C31.0022 45.2998 30.2266 43.4273 30.2266 41.4749C30.2266 39.5225 31.0022 37.65 32.3827 36.2694C33.7633 34.8889 35.6357 34.1133 37.5882 34.1133C39.5406 34.1133 41.413 34.8889 42.7936 36.2694C44.1742 37.65 44.9498 39.5225 44.9498 41.4749Z" fill="#F3F2EC" />
                            <path d="M25.3194 19.3906C22.7162 19.3906 20.2196 20.4248 18.3788 22.2655C16.538 24.1063 15.5039 26.6029 15.5039 29.2061V78.2835C15.5039 80.8867 16.538 83.3833 18.3788 85.2241C20.2196 87.0648 22.7162 88.099 25.3194 88.099H84.2122C86.8155 88.099 89.3121 87.0648 91.1528 85.2241C92.9936 83.3833 94.0277 80.8867 94.0277 78.2835V29.2061C94.0277 26.6029 92.9936 24.1063 91.1528 22.2655C89.3121 20.4248 86.8155 19.3906 84.2122 19.3906H25.3194ZM84.2122 24.2984C85.5138 24.2984 86.7621 24.8154 87.6825 25.7358C88.6029 26.6562 89.12 27.9045 89.12 29.2061V61.1064L70.5835 51.551C70.1232 51.3205 69.6021 51.2405 69.0939 51.3224C68.5857 51.4043 68.1162 51.644 67.7517 52.0075L49.544 70.2152L36.4894 61.5186C36.0181 61.2048 35.4527 61.0637 34.8892 61.1192C34.3256 61.1746 33.7986 61.4233 33.3975 61.8229L20.4116 73.3757V29.2061C20.4116 27.9045 20.9287 26.6562 21.8491 25.7358C22.7695 24.8154 24.0178 24.2984 25.3194 24.2984H84.2122Z" fill="#F3F2EC" />
                        </g>
                        <line x1="2.73223" y1="102.232" x2="102.732" y2="2.23223" stroke="#F3F2EC" stroke-width="5" stroke-linejoin="round" />
                        <defs>
                            <clipPath id="clip0_2327_2377">
                                <rect width="78.5238" height="78.5238" fill="white" transform="translate(15.4941 14.4824)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p class="text-lg">You have reached the end of our gallery!</p>
                    <button class="bg-blue text-white text-lg font-poppins rounded-full font-bold px-[40px] py-[6px] mb-8 lowercase hover:bg-darkblue"><a href="<?php echo home_url(); ?>">Go to Homepage</a></button>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
get_footer();
?>