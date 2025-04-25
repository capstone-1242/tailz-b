<?php
/**
 * Template Name: Hotel
 * Description: A custom template for the "Hotel" (Portraits) page.
 *
 * @package tailz
 */

get_header();

// Get ACF fields for hotel packages and surcharge notice
$hotel_packages = get_field('hotel_packages');
$surcharge_notice = get_field('surcharge_notice');

// Banner
get_template_part('template-parts/banner');
?>

<!-- Breadcrumb -->
<nav class="flex flex-col mx-6 md:mx-[89px] my-[16px] md:my-[60px]" aria-label="Breadcrumb">
    <ol class="flex items-center space-x-2 text-[14px] md:text-[16px] mb-[16px] lg-[20px]">
        <li><a href="<?php echo esc_url(home_url()); ?>" class="text-[#47423B]">Home</a></li>
        <li><span class="text-[#47423B]">/</span></li>
        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-[#47423B]">Services</a></li>
        <li><span class="text-[#47423B]">/</span></li>
        <li><span class="font-bold text-[#615849]" aria-current="page">Hotel</span></li>
    </ol>
    <hr class="w-full border-t-2 border-[#F3F2EC]">
</nav>

<div>
    <div class="flex flex-col gap-[60px] md:gap-[130px]">
        <!-- A home away from home retreat for pets -->
        <section aria-labelledby="home-away-heading">
            <div class="flex flex-col gap-[60px]">
                <!-- Intro -->
                <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                    <h2 id="home-away-heading" class="text-[44.8px] text-[#47423B] lowercase">A home away from home retreat for pets</h2>
                    <p class="text-[#2C2C2C] text-[18px] md:text-[24px] md:w-3/4">
                        You've worked hard throughout the year to take time off. Whether it's a vacation or a business trip – there are plenty of times when our lives take us out of town for a few days and pets are not always welcome. Luckily, you can feel comfortable leaving your dog at Tailz for a few nights of overnight lodging!
                    </p>
                </div>
                <!-- Your pet's stay at tailz -->
                <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                    <h3 id="stay-heading" class="lowercase text-[#47423B] text-[31px] md:text-[56.85px]">Your pet's stay at tailz</h3>
                    <p class="text-[#2C2C2C] text-[18px] md:text-[24px] md:w-3/4">
                        When dogs stay the night at Tailz, they receive all the benefits of doggy daycare, plus extra special time at night before being tucked into bed! The mental and physical stimulation throughout the day provides a restful sleep in one of our suites, and your pup will wake up in the morning ready for another fun-filled day with us! A full day of doggy daycare is included with every night of overnight lodging at Tailz.
                    </p>
                    <p class="text-[#2C2C2C] text-[18px] md:text-[24px] md:w-3/4">
                        You deserve peace of mind knowing that your beloved pet is being well cared for. Rest assured, we provide all the blankets, dog beds, feeding bowls, and toys that your dog needs; all you need to bring is a container with their food!
                    </p>
                    <div class="flex flex-col rounded-[20px] bg-[#F3F2EC] px-[25px] md:px-[30px] py-[20px] gap-[10px]">
                        <h4 class="uppercase text-[#47423B] text-[18px] md:text-[20px] italic">Please note</h4>
                        <p class="text-[#2C2C2C] text-[16px] md:text-[18px] italic md:w-3/4">Blankets and personal items from home may be damaged.</p>
                    </div>
                    <p class="text-[#2C2C2C] text-[18px] md:text-[24px]">
                        Though twice a day is normal, we will feed your pup up to three times per day with their allotted food.
                    </p>
                    <div class="flex flex-col rounded-[20px] bg-[#F3F2EC] px-[25px] md:px-[30px] py-[20px] gap-[10px]">
                        <h4 class="uppercase text-[#47423B] text-[18px] md:text-[20px] italic">Please note</h4>
                        <p class="text-[#2C2C2C] text-[16px] md:text-[18px] italic md:w-3/4">Bring all items in a marked reusable shopping bag.</p>
                        <p class="text-[#2C2C2C] text-[16px] md:text-[18px] italic md:w-3/4">Food that is pre-portioned is appreciated.</p>
                    </div>
                    <p class="text-[#2C2C2C] text-[18px] md:text-[24px]">
                        For the perfect finishing touch, add a departure spa appointment on their last day – they'll come home fresh, squeaky clean, and ready to snuggle!
                    </p>
                    <div class="flex flex-col rounded-[20px] bg-[#F3F2EC] px-[25px] md:px-[30px] py-[20px] gap-[10px]">
                        <h4 class="uppercase text-[#47423B] text-[18px] md:text-[20px] italic">Please note</h4>
                        <p class="text-[#2C2C2C] text-[16px] md:text-[18px] italic md:w-3/4">Sign your pup up for a departure bath on their last day of lodging.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hotel packages -->
        <section aria-labelledby="packages-heading">
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 id="packages-heading" class="text-[44.8px] md:text-[75.8px] text-[#FEA91D] lowercase">Hotel packages</h2>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <?php 
                        // Collect individual packages if they have a title defined
                        $packages = array();
                        if (!empty($hotel_packages['package_1']) && !empty($hotel_packages['package_1']['title'])) {
                            $packages[] = $hotel_packages['package_1'];
                        }
                        if (!empty($hotel_packages['package_2']) && !empty($hotel_packages['package_2']['title'])) {
                            $packages[] = $hotel_packages['package_2'];
                        }
                        if (!empty($hotel_packages['package_3']) && !empty($hotel_packages['package_3']['title'])) {
                            $packages[] = $hotel_packages['package_3'];
                        }
                        if (!empty($packages)) :
                            $package_index = 1;
                            foreach ($packages as $package) :
                                $package_type_text = '';
                                switch ($package['package_type']) {
                                    case 'basic':
                                        $package_type_text = 'Basic';
                                        break;
                                    case 'most_popular':
                                        $package_type_text = 'Most Popular';
                                        break;
                                    case 'best_value':
                                        $package_type_text = 'Best Value';
                                        break;
                                }
                        ?>
                        <div class="bg-white p-6 rounded-[20px]">
                            <!-- Package Type -->
                            <p class="font-poppins font-bold italic text-[18px] md:text-[24px] text-[#2C2C2C] mb-4">
                                <?php echo esc_html($package_type_text); ?>
                            </p>
                            
                            <!-- Title -->
                            <h3 id="package-heading-<?php echo $package_index; ?>" class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-2">
                                <?php echo esc_html($package['title']); ?>
                            </h3>
                            
                            <!-- Subtitle -->
                            <h4 class="font-work-sans font-bold text-[18px] md:text-[32px] text-[#837660] mb-6">
                                <?php echo esc_html($package['subtitle']); ?>
                            </h4>
                            
                            <!-- Features List -->
                            <?php 
                            if (!empty($package['features'])) {
                                $features = array();
                                if (!empty($package['features']['feature_1'])) {
                                    $features[] = $package['features']['feature_1'];
                                }
                                if (!empty($package['features']['feature_2'])) {
                                    $features[] = $package['features']['feature_2'];
                                }
                                if (!empty($package['features']['feature_3'])) {
                                    $features[] = $package['features']['feature_3'];
                                }
                                if (!empty($features)) : ?>
                                    <ul class="space-y-4 mb-6" aria-labelledby="package-heading-<?php echo $package_index; ?>">
                                        <?php foreach ($features as $feature) : ?>
                                            <li class="flex items-center gap-3">
                                                <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" aria-hidden="true">
                                                    <path d="M8.97125 5.55493C10.3344 5.07281 11.0612 3.54116 10.5941 2.13402C10.1276 0.727311 8.64417 -0.0236561 7.28079 0.458569C5.9176 0.94031 5.19077 2.47186 5.65745 3.87905C6.12436 5.28663 7.60788 6.03629 8.97125 5.55493Z" fill="#2C2C2C"/>
                                                    <path d="M4.7996 9.74671V9.74719C5.58268 8.49808 5.23628 6.83013 4.02693 6.02207C2.81711 5.21444 1.20169 5.5713 0.418662 6.81992V6.82041C-0.363899 8.06903 -0.0175474 9.7366 1.19185 10.5442C2.40162 11.3527 4.0168 10.9954 4.7996 9.74671Z" fill="#2C2C2C"/>
                                                    <path d="M15.0281 5.55498C16.3915 6.03633 17.8749 5.28667 18.3418 3.87904C18.8085 2.4719 18.0817 0.940306 16.7186 0.458564C15.3552 -0.0236609 13.8717 0.727354 13.4052 2.13401C12.9381 3.54121 13.6649 5.07285 15.0281 5.55498Z" fill="#2C2C2C"/>
                                                    <path d="M11.9994 6.87891C7.87565 6.87891 3.32549 12.7732 4.64275 16.9673C5.91453 21.0165 9.88799 19.3477 11.9994 19.3477C14.1109 19.3477 18.0843 21.0165 19.3561 16.9673C20.6734 12.7732 16.1232 6.87891 11.9994 6.87891Z" fill="#2C2C2C"/>
                                                    <path d="M23.5812 6.82041V6.81992C22.7981 5.5713 21.1828 5.21444 19.973 6.02207C18.7636 6.83013 18.4172 8.49808 19.2002 9.74719V9.74671C19.983 10.9954 21.5982 11.3527 22.808 10.5442C24.0174 9.7366 24.3638 8.06908 23.5812 6.82041Z" fill="#2C2C2C"/>
                                                </svg>
                                                <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">
                                                    <?php echo esc_html($feature); ?>
                                                </span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif;
                            }
                            ?>
                            
                            <!-- Price -->
                            <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">
                                $<?php echo esc_html($package['price']); ?> / night
                            </p>
                        </div>
                        <?php 
                            $package_index++;
                            endforeach;
                        endif;
                        ?>
                    </div>

                    <!-- Surcharge Notice -->
                    <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-6 text-center">
                        <?php echo esc_html($surcharge_notice); ?>
                    </p>

                    <!-- Book Button -->
                    <div class="flex justify-center mt-8">
                        <a href="https://tailz.propetware.com/" 
                           class="font-bold rounded-[40px] bg-[#FCD41D] px-[20px] py-[11px] lowercase text-white inline-block border-2 border-transparent hover:bg-white hover:text-[#FCD41D] hover:border-[#FCD41D] transition-all duration-300">
                            Book a sleepover
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lodging requirements -->
        <section aria-labelledby="requirements-heading">
            <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                <h2 id="requirements-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Lodging requirements</h2>
                <ul class="flex flex-col md:text-[24px] text-[18px] text-[#2C2C2C] gap-3 leading-normal md:w-3/4">
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All stays are required to be prepaid at the time of arrival.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">During the holiday season a single night deposit is required to hold your pup's Luxury Overnight Lodging reservation. This is a non-refundable holiday season deposit.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Only social, dog friendly dogs are accepted into our lodging. We do not take aggressive dogs.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All dogs must pass a Meet & Greet prior to lodging.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">They must have attended Doggy Daycare at least once in the last 3 months.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Alternatively, new pups must have passed their Meet & Greet within the last 2 months.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All dogs require up-to-date vaccinations for Bordetella, Distemper/Parvovirus/Parainfluenza, and Rabies (after 6 months of age.)</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All current vaccination records must be received 24-hours in advance of your pet's overnight stay.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All pups are to be spayed or neutered by 7 months of age. If a medical exception has been granted, intact pups older than 10 months will not be accepted.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Our Canine Care Team may change the activity level of your dog should their needs require it during their stay.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Check-in time is 12:00PM or afterwards during regular business hours. Early check-in fee of $17.99 applies before 12:00PM.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Checkout time is 12:00PM during regular business hours. Late checkout fee of $17.99 applies after 12:00PM.</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Dogs not checked out by closing time must stay overnight and will be surcharged for additional night's stay and can be picked up the following business day.</li>
                </ul>
            </div>
        </section>

        <!-- Our rooms -->
        <section aria-labelledby="rooms-heading">
            <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px]">
                <h2 id="rooms-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Our rooms</h2>
                <!-- Gallery -->
                <?php
                    $gallery_args = array(
                        'post_type'      => 'gallery-image',
                        'posts_per_page' => 5,
                        'orderby'       => 'rand',
                        'order'         => 'DESC',
                        'tax_query'     => array(
                            array(
                                'taxonomy' => 'service',
                                'field'    => 'slug',
                                'terms'    => 'hotel',
                            ),
                        ),
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
                        <p class="font-bold text-[clamp(22px,2vw,24px)]">No hotel gallery images yet. Check back soon!</p>
                    <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <a class="self-center lowercase font-bold text-[18px] lg:text-[26px] text-[#FFFFFF] py-[9.5px] px-[16.5px] lg:py-[16px] lg:px-[53px] rounded-[60px] bg-[#FEA91D] w-fit" href="<?php echo esc_url(get_permalink(get_page_by_path('gallery'))); ?>">View more in gallery</a>
            </div>
        </section>

        <!-- FAQ Section -->
        <div class="mt-[60px] md:mt-[100px] mb-[60px] md:mb-[100px] mx-6 md:mx-[89px]">
            <?php get_template_part('template-parts/faq-section'); ?>
        </div>

    </div>
</div>

<?php
get_footer();
?>