<?php

/**
 * Template Name: Daycare
 * Description: A custom template for the Daycare page with services and FAQs
 *
 * @package tailz
 */

get_header();

// Get ACF fields for daycare services
$daily_rates_group   = get_field('daily_rates');
$flex_passes_group   = get_field('flex_passes');
$monthly_play_group  = get_field('monthly_play');
$membership_perks_group = get_field('membership_perks');

get_template_part('template-parts/banner');
?>

<!-- Breadcrumbs -->
<nav class="border-b-2 border-cream py-[20px] lg:py-[30px] mx-[24px] lg:mx-[90px] mb-[60px] lg:mb-[130px]" aria-label="Breadcrumb">
    <ol class="flex items-center font-worksans text-[14px] md:text-[16px] text-darkbrown">
        <li>
            <a href="<?php echo home_url(); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                Home
            </a>
        </li>
        <li class="mx-2" aria-hidden="true">/</li>
        <li>
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                Services
            </a>
        </li>
        <li class="mx-2" aria-hidden="true">/</li>
        <li aria-current="page">
            <span class="uppercase font-bold">Daycare</span>
        </li>
    </ol>
</nav>

<!-- Main Content -->
<main id="main-content" class="mx-6 md:mx-[89px]">
    <div class="flex flex-col gap-[60px] md:gap-[130px]">
        <!-- Enriching doggy daycare -->
        <section aria-labelledby="enriching-daycare-heading" role="region">
            <div class="flex flex-col gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 id="enriching-daycare-heading" class="text-[40px] md:text-[53.75px] text-[#47423B] lowercase">Enriching doggy daycare</h2>
                <p class="text-[16px] md:text-[18px] text-[#2C2C2C]">
                    Our daycare program is thoughtfully designed to create a unique experience for your pup. We are different from your typical doggy daycare, and that starts first with understanding dog behavior. This allows us to create an environment in which your pup gets appropriate exercise, enrichment, socialization, and rest.
                </p>
                <p class="text-[16px] md:text-[18px] text-[#2C2C2C]">
                    Our daycare schedule includes a variety of training, games, and activities specifically chosen to enrich your pet's life and ensure they have the best time.
                </p>
            </div>
        </section>

        <!-- Daycare rates -->
        <section aria-labelledby="daycare-rates-heading" role="region">
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 md:w-2/3">
                    <h2 id="daycare-rates-heading" class="text-[44.8px] md:text-[75.8px] text-[#FEA91D] lowercase">Daycare rates</h2>
                    <p class="text-[18px] text-[#2C2C2C]">
                        We run carefully chosen play groups that will keep your dog happy and safe. Allowing your pup's activity level to be paced throughout the day means that we are constantly engaging with, supervising, and adjusting their environment to ensure they are comfortable, happy, and enjoying themselves.
                    </p>
                </div>
                <!-- Packages Container -->
                <div class="px-4 md:px-8 bg-[#F3F2EC] py-8 rounded-[20px]" role="region" aria-label="Daycare packages">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Daily Rates -->
                        <div class="bg-white p-6 rounded-[20px] w-full md:w-auto" role="region" aria-label="Daily rates">
                            <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-6">daily</h3>
                            <?php if ($daily_rates_group) : ?>
                                <?php if (!empty($daily_rates_group['daily_rate_1']) && !empty($daily_rates_group['daily_rate_1']['title'])) :
                                    $rate = $daily_rates_group['daily_rate_1']; ?>
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($rate['title']); ?></span>
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">$<?php echo esc_html($rate['price']); ?></span>
                                    </div>
                                    <?php if (!empty($rate['note'])) : ?>
                                        <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-2">
                                            <?php echo esc_html($rate['note']); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if (!empty($daily_rates_group['daily_rate_2']) && !empty($daily_rates_group['daily_rate_2']['title'])) :
                                    $rate = $daily_rates_group['daily_rate_2']; ?>
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($rate['title']); ?></span>
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">$<?php echo esc_html($rate['price']); ?></span>
                                    </div>
                                    <?php if (!empty($rate['note'])) : ?>
                                        <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-2">
                                            <?php echo esc_html($rate['note']); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if (!empty($daily_rates_group['daily_rate_3']) && !empty($daily_rates_group['daily_rate_3']['title'])) :
                                    $rate = $daily_rates_group['daily_rate_3']; ?>
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($rate['title']); ?></span>
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">$<?php echo esc_html($rate['price']); ?></span>
                                    </div>
                                    <?php if (!empty($rate['note'])) : ?>
                                        <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-2">
                                            <?php echo esc_html($rate['note']); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>

                        <!-- Flex Passes -->
                        <div class="bg-white p-6 rounded-[20px] w-full md:w-auto" role="region" aria-label="Flex passes">
                            <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-6">flex passes</h3>
                            <?php if ($flex_passes_group) : ?>
                                <?php if (!empty($flex_passes_group['flex_pass_1']) && !empty($flex_passes_group['flex_pass_1']['title'])) :
                                    $pass = $flex_passes_group['flex_pass_1']; ?>
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($pass['title']); ?></span>
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">$<?php echo esc_html($pass['price']); ?></span>
                                    </div>
                                    <?php if (!empty($pass['note'])) : ?>
                                        <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-2">
                                            <?php echo esc_html($pass['note']); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if (!empty($flex_passes_group['flex_pass_2']) && !empty($flex_passes_group['flex_pass_2']['title'])) :
                                    $pass = $flex_passes_group['flex_pass_2']; ?>
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($pass['title']); ?></span>
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">$<?php echo esc_html($pass['price']); ?></span>
                                    </div>
                                    <?php if (!empty($pass['note'])) : ?>
                                        <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-2">
                                            <?php echo esc_html($pass['note']); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if (!empty($flex_passes_group['flex_pass_3']) && !empty($flex_passes_group['flex_pass_3']['title'])) :
                                    $pass = $flex_passes_group['flex_pass_3']; ?>
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($pass['title']); ?></span>
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">$<?php echo esc_html($pass['price']); ?></span>
                                    </div>
                                    <?php if (!empty($pass['note'])) : ?>
                                        <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-2">
                                            <?php echo esc_html($pass['note']); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>

                        <!-- Monthly Play -->
                        <div class="bg-white p-6 rounded-[20px] w-full md:w-auto" role="region" aria-label="Monthly play packages">
                            <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-6">monthly play packages</h3>
                            <?php if ($monthly_play_group) : ?>
                                <?php if (!empty($monthly_play_group['monthly_play_1']) && !empty($monthly_play_group['monthly_play_1']['title'])) :
                                    $package = $monthly_play_group['monthly_play_1']; ?>
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($package['title']); ?></span>
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">$<?php echo esc_html($package['price']); ?></span>
                                    </div>
                                    <?php if (!empty($package['note'])) : ?>
                                        <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-2">
                                            <?php echo esc_html($package['note']); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if (!empty($monthly_play_group['monthly_play_2']) && !empty($monthly_play_group['monthly_play_2']['title'])) :
                                    $package = $monthly_play_group['monthly_play_2']; ?>
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($package['title']); ?></span>
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">$<?php echo esc_html($package['price']); ?></span>
                                    </div>
                                    <?php if (!empty($package['note'])) : ?>
                                        <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-2">
                                            <?php echo esc_html($package['note']); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if (!empty($monthly_play_group['monthly_play_3']) && !empty($monthly_play_group['monthly_play_3']['title'])) :
                                    $package = $monthly_play_group['monthly_play_3']; ?>
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($package['title']); ?></span>
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">$<?php echo esc_html($package['price']); ?></span>
                                    </div>
                                    <?php if (!empty($package['note'])) : ?>
                                        <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-2">
                                            <?php echo esc_html($package['note']); ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if (!empty($membership_perks_group)) : ?>
                                <div class="mt-6" role="region" aria-label="Monthly membership perks">
                                    <h4 class="font-poppins font-bold text-[24px] md:text-[32px] text-[#47423B] mb-4">monthly membership perks</h4>
                                    <ul class="space-y-2">
                                        <?php
                                        if (!empty($membership_perks_group['membership_perk_1'])) {
                                            echo '<li class="font-work-sans text-[16px] md:text-[20px] text-[#2C2C2C]">' . esc_html($membership_perks_group['membership_perk_1']) . '</li>';
                                        }
                                        if (!empty($membership_perks_group['membership_perk_2'])) {
                                            echo '<li class="font-work-sans text-[16px] md:text-[20px] text-[#2C2C2C]">' . esc_html($membership_perks_group['membership_perk_2']) . '</li>';
                                        }
                                        if (!empty($membership_perks_group['membership_perk_3'])) {
                                            echo '<li class="font-work-sans text-[16px] md:text-[20px] text-[#2C2C2C]">' . esc_html($membership_perks_group['membership_perk_3']) . '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B] mt-6 text-center">
                        Monthly Automatic Passes and Flex Packages purchases are non-refundable, not transferable and not eligible for in-store credit.
                    </p>

                    <!-- Note + CTA -->
                    <div class="max-w-[600px] mx-auto text-center mt-12">
                        <button class="self-start">
                            <a class="rounded-[40px] bg-[#FEA91D] px-[20px] py-[11px] lowercase text-white border-2 border-transparent hover:bg-white hover:text-[#FEA91D] hover:border-[#FEA91D] transition-all duration-300 font-bold"
                                href="https://tailz.propetware.com/">
                                Book now
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Requirements for attending -->
        <section aria-labelledby="requirements-heading" role="region">
            <div class="flex flex-col gap-5 md:w-2/3">
                <h2 id="requirements-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Requirements for attending</h2>
                <ul class="flex flex-col md:text-[24px] text-[18px] text-[#2C2C2C] gap-3 leading-normal">
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">
                        All dogs looking to join us at Doggy Daycare are assessed during their Meet & Greet, and on an ongoing basis for suitability in our daycare program. This behavioral assessment is to ensure initial suitability for our facility and pups. As we want all pups to be safe and enjoy their time in a structured daycare, not all pups are accepted into our daycare program.
                    </li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">
                        Our day is very busy and active, therefore we have mandatory nap times for all of our daycare guests to ensure the dogs get adequate rest for their mental well being.
                    </li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">
                        Our daycare program is not only about coming to play, but to enrich their life through physical exercise, mental stimulation, and socialization.
                    </li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">
                        Safety and comfort of your pup is important, so our playgroups are based on size and temperament and are always supervised by a qualified team member.
                    </li>
                </ul>
            </div>
        </section>

        <!-- Puppy Program Sell -->
        <section aria-labelledby="puppy-heading" class="bg-[#F3F2EC] rounded-[20px]" role="region">
            <div class="flex flex-col px-6 pt-6 pb-[41px] md:pt-[89px] md:pb-[100px] gap-5 md:w-2/3">
                <h2 id="puppy-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Got a puppy?</h2>
                <p class="text-[18px] text-[#2C2C2C]">
                    Our Puppy Program is designed to give your little one the perfect start with early training, socialization, and plenty of fun to help them grow into a happy, well-adjusted dog!
                </p>
                <a
                    class="font-bold self-start rounded-[40px] bg-[#FF8ECC] px-[20px] py-[11px] lowercase text-white inline-block border-2 border-transparent hover:bg-white hover:text-[#FF8ECC] hover:border-[#FF8ECC] transition-all duration-300"
                    href="<?php echo esc_url(home_url('/puppy-programs')); ?>"
                    aria-label="Learn more about our puppy programs">
                    Puppy programs
                </a>
            </div>
        </section>

        <!-- FAQs -->
        <?php get_template_part('template-parts/faq-section'); ?>

    </div>
</main>

<?php get_footer(); ?>