<?php

/**
 * Template Name: Puppy Programs
 * Description: A custom template for the "Puppy Programs" page.
 *
 * @package tailz
 */

get_header();

// Banner
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
            <span class="uppercase font-bold">Puppy Programs</span>
        </li>
    </ol>
</nav>

<div>
    <div class="flex flex-col gap-[60px] md:gap-[130px]">
        <!-- Nurturing your pup's growth and socialization -->
        <section aria-labelledby="nurturing-heading">
            <div class="flex flex-col gap-[52px] lg:gap-[60px]">
                <div class="flex flex-col mx-6 lg:mx-[89px] gap-5 lg:w-2/3">
                    <h2 id="nurturing-heading" class="text-[44.8px] lg:text-[75.8px] text-[#47423B] lowercase">Nurturing your pup's growth and socialization</h2>
                    <p class="text-[18px] text-[#2C2C2C] lg:w-3/4">The first few months of a young pup's life are crucial to their development. We here at Tailz have custom tailored programs for all types of pups to help them grow into a balanced, socialized and good-natured puppy.</p>
                    <p class="text-[18px] text-[#2C2C2C] lg:w-3/4">Early socialization and desensitization leads to reduced fears and anxieties down the road, making for a friendly and sociable fur-friend. Whether your puppy visits us once a week, or every day, they will get the experience in our curriculum to develop into a sociable and well-behaved puppy.</p>
                </div>
                <!-- Quick Links -->
                <div class="flex flex-col lg:flex-row flex-wrap gap-5 mx-6 lg:mx-[5.56rem] text-center lg:text-left items-center lg:items-start lg:justify-between">
                    <!-- Puppy preschool -->
                    <a class="lg:w-[calc(33.333333%_-_30px)] hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF6A6A]" href="#puppy-preschool" aria-label="Learn more about Puppy Preschool">
                        <img class="rounded-t-[30px] w-full aspect-square object-cover" src="<?php echo esc_url(get_template_directory_uri() . '/images/puppy-programs-puppy-1.webp'); ?>" alt="Puppy in a preschool setting" width="600" height="400">
                        <div class="bg-[#FF6A6A] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[clamp(2rem,4vw,4.75rem)] text-[#47423B] lg:max-w-1/3">Puppy preschool</h3>
                        </div>
                    </a>
                    <!-- Puppy plus -->
                    <a class="lg:w-[calc(33.333333%_-_30px)] hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FEA91D]" href="#puppy-plus" aria-label="Learn more about Puppy Plus">
                        <img class="rounded-t-[30px] w-full aspect-square object-cover" src="<?php echo esc_url(get_template_directory_uri() . '/images/puppy-programs-puppy-2.webp'); ?>" alt="Puppy in advanced training" width="600" height="400">
                        <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[clamp(2rem,4vw,4.75rem)] text-[#47423B] lg:max-w-2/5">Puppy<br class="hidden lg:inline"><span class="lg:hidden"> </span>plus</h3>
                        </div>
                    </a>
                    <!-- Puppy daycare -->
                    <a class="lg:w-[calc(33.333333%_-_30px)] hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FCD41D]" href="#puppy-daycare" aria-label="Learn more about Puppy Daycare">
                        <img class="rounded-t-[30px] w-full aspect-square object-cover" src="<?php echo esc_url(get_template_directory_uri() . '/images/puppy-programs-puppy-3.webp'); ?>" alt="Puppies playing in daycare" width="600" height="400">
                        <div class="bg-[#FCD41D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[clamp(2rem,4vw,4.75rem)] text-[#47423B] lg:max-w-1/3">Puppy daycare</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Puppy preschool -->
        <section id="puppy-preschool" aria-labelledby="preschool-heading">
            <div class="flex flex-col gap-[16px] md:gap-[50px]">
                <!-- Intro -->
                <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                    <h2 id="preschool-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Puppy preschool</h2>
                    <p class="text-[18px] text-[#2C2C2C] md:w-3/4">Our daycare program is thoughtfully designed to create a unique experience for your pup. We are different from your typical doggy daycare, and that starts first with understanding dog behavior. This allows us to create an environment in which your pup gets appropriate exercise, enrichment, socialization, and rest.</p>
                </div>
                <!-- List Container -->
                <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                    <h3 id="focus-heading" class="text-[44.8px] text-[#47423B] lowercase">During their days at puppy preschool we focus on:</h3>
                    <!-- Improving manners -->
                    <div class="flex flex-col gap-[20px] md:gap-[30px]">
                        <h4 id="manners-heading" class="text-[26px] md:text-[42.7px] text-[#47423B]">Improving manners</h4>
                        <ul class="flex flex-col text-[18px] md:text-[24px] text-[#2C2C2C] gap-3 leading-normal" aria-labelledby="manners-heading">
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Sit, Down, Stay, and Wait</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Watch, Touch, Place</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Recall ("come!"), and Jumping ("Off")</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Crate training, loose leash walking, and greeting other dogs politely</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Safe play and socialization</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Outdoor walks</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Puppy Playtime</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Grooming etiquette</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Desensitization work</li>
                        </ul>
                    </div>
                    <!-- Our puppy preschool program includes -->
                    <div class="flex flex-col gap-[20px] md:gap-[30px]">
                        <h4 id="includes-heading" class="text-[26px] md:text-[42.7px] text-[#47423B]">Our puppy preschool program includes</h4>
                        <ul class="flex flex-col text-[18px] md:text-[24px] text-[#2C2C2C] gap-3 leading-normal" aria-labelledby="includes-heading">
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">1 puppy groom</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">4 or 6 weeks of puppy training</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">One-on-one training session, 2-3 times per day</li>
                        </ul>
                    </div>
                    <p class="text-[18px] md:text[24px] font-bold text-[#2C2C2C] md:w-3/4">Add an additional 2 weeks of Puppy Preschool training for a total of six weeks! Guarantee your pup is more rounded and socialized by giving them extra training. For more details about extensions, please contact us.</p>
                </div>
            </div>
        </section>

        <!-- Puppy plus -->
        <section id="puppy-plus" aria-labelledby="plus-heading">
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 id="plus-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Puppy plus</h2>
                <p class="text-[18px] text-[#2C2C2C] md:w-3/4">Our Puppy plus program offers everything our Puppy Preschool program does without the commitment of attending Monday through Friday!</p>
            </div>
        </section>

        <!-- Puppy Daycare -->
        <section id="puppy-daycare" aria-labelledby="daycare-heading">
            <div class="flex flex-col gap-[16px] md:gap-[50px] mx-6 md:mx-[89px]">
                <!-- Intro -->
                <div class="flex flex-col gap-5 md:w-2/3">
                    <h2 id="daycare-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Puppy daycare</h2>
                    <p class="text-[18px] text-[#2C2C2C] md:w-3/4">Our daycare program is thoughtfully designed to create a unique experience for your pup. We are different from your typical doggy daycare, and that starts first with understanding dog behavior. This allows us to create an environment in which your pup gets appropriate exercise, enrichment, socialization, and rest.</p>
                </div>
                <!-- List Container -->
                <div class="flex flex-col gap-[20px] md:gap-[30px]">
                    <h3 id="daycare-includes-heading" class="text-[26px] md:text-[42.7px] text-[#47423B]">Our puppy daycare program includes</h3>
                    <ul class="flex flex-col text-[18px] md:text-[24px] text-[#2C2C2C] gap-3 leading-normal" aria-labelledby="daycare-includes-heading">
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Daylong potty training</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Learning to settle in a crate</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Safe play and socialization skills</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Puppy playtime</li>
                    </ul>
                </div>
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