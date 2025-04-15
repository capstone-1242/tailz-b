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

<!-- Breadcrumb -->
<nav class="flex flex-col mx-6 lg:mx-[89px] my-[16px] lg:my-[60px]" aria-label="Breadcrumb">
    <ol class="flex items-center space-x-2 text-[14px] lg:text-[16px]">
        <li><a href="<?php echo esc_url(home_url()); ?>" class="text-[#47423B]">Home</a></li>
        <li><span class="text-[#47423B]">/</span></li>
        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-[#47423B]">Services</a></li>
    </ol>
    <hr class="w-full border-t-2 border-[#F3F2EC]">
</nav>

<div class="flex flex-col lg:grid lg:grid-cols-2 gap-[30px] mx-6 lg:mx-[89px] mb-6 lg:mb-[89px]">
    <div class="group flex flex-col h-full">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('grooming'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
            <div class="rounded-t-[30px] overflow-hidden aspect-square">
                <img class="w-full rounded-t-[30px]" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-grooming-photo.webp'); ?>" alt="Photo of a dog getting groomed">
            </div>
            <div class="bg-[#FF6A6A] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] pb-[62px] lg:px-[40px] rounded-b-[30px]">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text[75.8px] lowercase">Grooming</h2>
                    <p class="text-[22px] text-[#2C2C2C] lg:text[31px] uppercase">Pamper your pet from heads to tailz</p>
                </div>
                <button class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-[16px] py-[6.5px] lg:px[36.15px] lg:py[10.5px] rounded-60px bg-[#FFFFFF] rounded-[60px] transition-colors duration-300">Go to grooming</button>
            </div>
        </a>
    </div>
    <div class="group flex flex-col h-full">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('daycare'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
            <div class="rounded-t-[30px] overflow-hidden aspect-square">
                <img class="w-full rounded-t-[30px]" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-daycare-photo.webp'); ?>" alt="Photo of a dog in a dog playground">
            </div>
            <div class="bg-[#FEA91D] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] pb-[62px] lg:px-[40px] rounded-b-[30px]">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text[75.8px] lowercase">Daycare</h2>
                    <p class="text-[22px] text-[#2C2C2C] lg:text[31px] uppercase">It's tail waggin' enjoyment</p>
                </div>
                <button class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-[16px] py-[6.5px] lg:px[36.15px] lg:py[10.5px] rounded-60px bg-[#FFFFFF] rounded-[60px] transition-colors duration-300">Go to daycare</button>
            </div>
        </a>
    </div>
    <div class="group flex flex-col h-full">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('hotel'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
            <div class="rounded-t-[30px] overflow-hidden aspect-square">
                <img class="w-full rounded-t-[30px]" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-hotel-photo.webp'); ?>" alt="Photo of a dog in a dog bed">
            </div>
            <div class="bg-[#FCD41D] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] pb-[62px] lg:px-[40px] rounded-b-[30px]">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text[75.8px] lowercase">Hotel</h2>
                    <p class="text-[22px] text-[#2C2C2C] lg:text[31px] uppercase">Five-star lodging for four-legged guests</p>
                </div>
                <button class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-[16px] py-[6.5px] lg:px[36.15px] lg:py[10.5px] rounded-60px bg-[#FFFFFF] rounded-[60px] transition-colors duration-300">Go to hotel</button>
            </div>
        </a>
    </div>
    <div class="group flex flex-col h-full">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('training'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
            <div class="rounded-t-[30px] overflow-hidden aspect-square">
                <img class="w-full rounded-t-[30px]" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-training-photo.webp'); ?>" alt="Photo of a man training a dog">
            </div>
            <div class="bg-[#C0E333] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] pb-[62px] lg:px-[40px] rounded-b-[30px]">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text[75.8px] lowercase">Training</h2>
                    <p class="text-[22px] text-[#2C2C2C] lg:text[31px] uppercase">Building bonds of trust for better behaviour</p>
                </div>
                <button class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-[16px] py-[6.5px] lg:px[36.15px] lg:py[10.5px] rounded-60px bg-[#FFFFFF] rounded-[60px] transition-colors duration-300">Go to training</button>
            </div>
        </a>
    </div>
    <div class="group flex flex-col h-full">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('exercise'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
            <div class="rounded-t-[30px] overflow-hidden aspect-square">
                <img class="w-full rounded-t-[30px]" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-exercise-photo.webp'); ?>" alt="Photo of a dog doing a stretch">
            </div>
            <div class="bg-[#6FDBFC] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] pb-[62px] lg:px-[40px] rounded-b-[30px]">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text[75.8px] lowercase">Exercise</h2>
                    <p class="text-[22px] text-[#2C2C2C] lg:text[31px] uppercase">Unleash the fun with your dog!</p>
                </div>
                <button class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-[16px] py-[6.5px] lg:px[36.15px] lg:py[10.5px] rounded-60px bg-[#FFFFFF] rounded-[60px] transition-colors duration-300">Go to exercise</button>
            </div>
        </a>
    </div>
    <div class="group flex flex-col h-full">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('portraits'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
            <div class="rounded-t-[30px] overflow-hidden aspect-square">
                <img class="w-full rounded-t-[30px]" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-portraits-photo.webp'); ?>" alt="Portrait of a dog">
            </div>
            <div class="bg-[#CB93FF] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] pb-[62px] lg:px-[40px] rounded-b-[30px] transition-all duration-300">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text[75.8px] lowercase">Portraits</h2>
                    <p class="text-[22px] text-[#2C2C2C] lg:text[31px] uppercase">Professional pet pictures</p>
                </div>
                <button class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-[16px] py-[6.5px] lg:px[36.15px] lg:py[10.5px] rounded-60px bg-[#FFFFFF] rounded-[60px] transition-colors duration-300">Go to pet pictures</button>
            </div>
        </a>
    </div>
    <div class="group lg:col-span-2 flex flex-col h-full">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('puppy-programs'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
            <div class="rounded-t-[30px] overflow-hidden aspect-square">
                <img class="w-full rounded-t-[30px]" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-puppy-programs-photo.webp'); ?>" alt="Photo of a pile of puppies">
            </div>
            <div class="bg-[#FF8ECC] flex flex-col gap-[20px] lg:gap-[47px] pt-[20px] pb-[33px] px-[17px] lg:pt-[30px] pb-[62px] lg:px-[40px] rounded-b-[30px] transition-all duration-300">
                <div class="flex flex-col gap-[7.85px] lg:gap-[20px] flex-grow">
                    <h2 class="text-[37px] text-[#47423B] lg:text[75.8px] lowercase">Puppy programs</h2>
                    <p class="text-[22px] text-[#2C2C2C] lg:text[31px] uppercase">Giving young pups a paw up</p>
                </div>
                <button class="hover:cursor-pointer text-[18px] text-[#47423B] lg:text-[26px] lowercase w-fit px-[16px] py-[6.5px] lg:px[36.15px] lg:py[10.5px] rounded-60px bg-[#FFFFFF] rounded-[60px] transition-colors duration-300">Go to puppy programs</button>
            </div>
        </a>
    </div>
</div>


<?php
get_footer();
?>