<?php

/**
 * Template Name: Services
 * Description: Displays a list of services.
 *
 * @package tailz
 */

get_header();

// Banner
get_template_part('template-parts/banner');
?>

<!-- Breadcrumbs -->
<nav class="border-b-2 border-cream mx-[24px] lg:mx-[90px] py-[20px] lg:py-[30px] mb-[60px] lg:mb-[130px]" aria-label="Breadcrumb">
    <ol class="flex items-center font-worksans text-[14px] md:text-[16px] text-darkbrown">
        <li>
            <a href="<?php echo home_url(); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                Home
            </a>
        </li>
        <li class="mx-2" aria-hidden="true">/</li>
        <li aria-current="page">
            <span class="uppercase font-bold">Services</span>
        </li>
    </ol>
</nav>

<div class="flex flex-col lg:grid lg:grid-cols-2 gap-[30px] mx-6 lg:mx-[89px] mb-6 lg:mb-[89px]">
    <div class="group flex flex-col h-full transition-all duration-300 hover:scale-[1.02]">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('grooming'))); ?>" class="block">
            <div class="rounded-t-[40px] overflow-hidden">
                <img class="w-full rounded-t-[40px] object-cover aspect-video" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-grooming-photo.webp'); ?>" alt="Photo of a dog getting groomed">
            </div>
            <div class="bg-[#FF6A6A] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] lg:pb-[40px] lg:px-[40px] rounded-b-[40px]">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text-[56.85px] lowercase">Grooming</h2>
                    <p class="text-[18px] text-[#2C2C2C] lg:text-[24px] uppercase">Pamper your pet from heads to tailz</p>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('grooming'))); ?>" class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-6 py-2 lg:px-8 rounded-full bg-[#FFFFFF] rounded-[60px] transition-colors duration-300 font-bold">Go to grooming</a>
            </div>
        </a>
    </div>
    <div class="group flex flex-col h-full transition-all duration-300 hover:scale-[1.02]">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('daycare'))); ?>" class="block">
            <div class="rounded-t-[40px] overflow-hidden">
                <img class="w-full rounded-t-[40px] object-cover aspect-video" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-daycare-photo.webp'); ?>" alt="Photo of a dog in a dog playground">
            </div>
            <div class="bg-[#FEA91D] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] lg:pb-[40px] lg:px-[40px] rounded-b-[40px]">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text-[56.85px] lowercase">Daycare</h2>
                    <p class="text-[18px] text-[#2C2C2C] lg:text-[24px] uppercase">It's tail waggin' enjoyment</p>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('daycare'))); ?>" class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-6 py-2 lg:px-8 rounded-full bg-[#FFFFFF] rounded-[60px] transition-colors duration-300 font-bold">Go to daycare</a>
            </div>
        </a>
    </div>
    <div class="group flex flex-col h-full transition-all duration-300 hover:scale-[1.02]">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('hotel'))); ?>" class="block">
            <div class="rounded-t-[40px] overflow-hidden">
                <img class="w-full rounded-t-[40px] object-cover aspect-video" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-hotel-photo.webp'); ?>" alt="Photo of a dog in a dog bed">
            </div>
            <div class="bg-[#FCD41D] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] lg:pb-[40px] lg:px-[40px] rounded-b-[40px]">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text-[56.85px] lowercase">Hotel</h2>
                    <p class="text-[18px] text-[#2C2C2C] lg:text-[24px] uppercase">Five-star lodging for four-legged guests</p>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('hotel'))); ?>" class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-6 py-2 lg:px-8 rounded-full bg-[#FFFFFF] rounded-[60px] transition-colors duration-300 font-bold">Go to hotel</a>
            </div>
        </a>
    </div>
    <div class="group flex flex-col h-full transition-all duration-300 hover:scale-[1.02]">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('training'))); ?>" class="block">
            <div class="rounded-t-[40px] overflow-hidden">
                <img class="w-full rounded-t-[40px] object-cover aspect-video" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-training-photo.webp'); ?>" alt="Photo of a man training a dog">
            </div>
            <div class="bg-[#C0E333] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] lg:pb-[40px] lg:px-[40px] rounded-b-[40px]">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text-[56.85px] lowercase">Training</h2>
                    <p class="text-[18px] text-[#2C2C2C] lg:text-[24px] uppercase">Building bonds of trust for better behaviour</p>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('training'))); ?>" class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-6 py-2 lg:px-8 rounded-full bg-[#FFFFFF] rounded-[60px] transition-colors duration-300 font-bold">Go to training</a>
            </div>
        </a>
    </div>
    <div class="group flex flex-col h-full transition-all duration-300 hover:scale-[1.02]">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('exercise'))); ?>" class="block">
            <div class="rounded-t-[40px] overflow-hidden">
                <img class="w-full rounded-t-[40px] object-cover aspect-video" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-exercise-photo.webp'); ?>" alt="Photo of a dog doing a stretch">
            </div>
            <div class="bg-[#6FDBFC] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] lg:pb-[40px] lg:px-[40px] rounded-b-[40px]">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text-[56.85px] lowercase">Exercise</h2>
                    <p class="text-[18px] text-[#2C2C2C] lg:text-[24px] uppercase">Unleash the fun with your dog!</p>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('exercise'))); ?>" class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-6 py-2 lg:px-8 rounded-full bg-[#FFFFFF] rounded-[60px] transition-colors duration-300 font-bold">Go to exercise</a>
            </div>
        </a>
    </div>
    <div class="group flex flex-col h-full transition-all duration-300 hover:scale-[1.02]">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('portraits'))); ?>" class="block">
            <div class="rounded-t-[40px] overflow-hidden">
                <img class="w-full rounded-t-[40px] object-cover aspect-video" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-portraits-photo.webp'); ?>" alt="Portrait of a dog">
            </div>
            <div class="bg-[#CB93FF] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] lg:pb-[40px] lg:px-[40px] rounded-b-[40px] transition-all duration-300">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text-[56.85px] lowercase">Portraits</h2>
                    <p class="text-[18px] text-[#2C2C2C] lg:text-[24px] uppercase">Professional pet pictures</p>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('portraits'))); ?>" class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-6 py-2 lg:px-8 rounded-full bg-[#FFFFFF] rounded-[60px] transition-colors duration-300 font-bold">Go to pet pictures</a>
            </div>
        </a>
    </div>
    <div class="group lg:col-span-2 flex flex-col h-full transition-all duration-300 hover:scale-[1.02]">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('puppy-programs'))); ?>" class="block">
            <div class="rounded-t-[40px] overflow-hidden aspect-video">
                <img class="w-full rounded-t-[40px] object-cover aspect-video" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-puppy-programs-photo.webp'); ?>" alt="Photo of a pile of puppies">
            </div>
            <div class="bg-[#FF8ECC] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] lg:pb-[40px] lg:px-[40px] rounded-b-[40px] transition-all duration-300">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text-[56.85px] lowercase">Puppy programs</h2>
                    <p class="text-[18px] text-[#2C2C2C] lg:text-[24px] uppercase">Giving young pups a paw up</p>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('puppy-programs'))); ?>" class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-6 py-2 lg:px-8 rounded-full bg-[#FFFFFF] transition-colors duration-300 font-bold">Go to puppy programs</a>
            </div>
        </a>
    </div>
</div>


<?php
get_footer();
?>