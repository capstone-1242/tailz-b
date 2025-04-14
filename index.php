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

<!-- Breadcrumb -->
<nav class="flex flex-col mx-6 lg:mx-[89px]" aria-label="Breadcrumb">
    <ol class="flex items-center space-x-2 text-[14px] lg:text-[16px] mb-[16px] lg-[20px]">
        <li><span class="font-bold text-[#615849]" aria-current="page">Home</span></li>
    </ol>
    <hr class="w-full border-t-2 border-[#F3F2EC]">
</nav>

<div>
    <div class="flex flex-col gap-[60px] lg:gap-[130px]">
        <!-- Our services -->
        <section>
            <div class="flex flex-col gap-[20px] lg:gap-[30px] mx-6 lg:mx-[89px]">
                <h2 class="text-[44.8px] lg:text-[75.8px] text-[#47423B] lowercase">Our services</h2>
                <!-- Deck -->
                <div class="grid grid-cols-2 gap-4 lg:grid-cols-3 text-center">
                    <div class="group">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('grooming'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-grooming-photo.jpg'); ?>" alt="Photo of a dog getting groomed">
                            <div class="bg-[#FF6A6A] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Grooming</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="group">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('daycare'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-daycare-photo.jpg'); ?>" alt="Photo of a dog in a playground">
                            <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Daycare</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="group">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('hotel'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-hotel-photo.jpg'); ?>" alt="photo of a dog in a dog bed">
                            <div class="bg-[#FCD41D] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Hotel</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="group">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('training'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-training-photo.jpg'); ?>" alt="Photo of a man training a dog">
                            <div class="bg-[#C0E333] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Training</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="group">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('exercise'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-exercise-photo.jpg'); ?>" alt="Photo of a dog doing a stretch">
                            <div class="bg-[#6FDBFC] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Exercise</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="group">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('portraits'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-portraits-photo.jpg'); ?>" alt="Portrait of a dog">
                            <div class="bg-[#CB93FF] p-[25px] rounded-b-[30px]">
                                <h3 class="lowercase text-[26px] lg:text-[56.8px] text-[#47423B]">Portraits</h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="lg:col-start-2 col-span-2 lg:col-span-1 group">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('puppy-programs'))); ?>" class="block transition-all duration-300 hover:scale-[1.02]">
                            <img class="rounded-t-[30px] w-full" src="<?php echo esc_url(get_template_directory_uri() . '/images/services-puppy-programs-photo.jpg'); ?>" alt="Photo of a file of puppies">
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
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/home-swim-banner.jpg'); ?>" alt="Dog swimming in pool" class="w-full h-full object-cover">
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
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/home-newsletter-banner.jpg'); ?>" alt="Dog looking at laptop" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-[10px] lg:gap-[30px] absolute inset-0 mx-6 lg:mx-[89px] py-6 lg:py-[89px] justify-end">
                        <h2 class="text-[#FFFFFF] text-[37px] lg:text-[75.8px]">Don't miss a tail-wagging update!</h2>
                        <p class="text-[#FFFFFF] text-[18px] lg:text-[24px]">Sign up for exclusive deals, pet-approved product drops, and secret coupon codes - delivered straight to your inbox</p>
                        <div class="rounded-[30px] border-4 border-[#FEA91D] w-fit">
                            <input type="email" name="email" placeholder="your email address" class="py-[5px] px-[12px] focus:outline-none focus:border-transparent focus:ring-0 bg-transparent lg:text-[24px]">
                            <button class="lowercase hover:cursor-pointer text-[18px] lg:text-[24px] text-[#FFFFFF] bg-[#FEA91D] rounded-r-[25px] py-[5px] px-[12px] lg:py-[10px] lg:px-[55px]">Join the pack</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>