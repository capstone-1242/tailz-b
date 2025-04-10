<?php
/**
 * Template Name: Services
 * Description: Displays a list of services.
 *
 * @package tailz
 */

get_header();
?>

<div>
    <div class="flex flex-col gap-[60px] md:gap-[130px]">
        <!-- Banner -->
        <section class="flex flex-col gap-3">
            <div class="relative h-[15.375rem] w-full overflow-hidden">
                <?php
                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    if($featured_image_url) : ?>
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url($featured_image_url); ?>')"></div>
                    <?php endif; ?>
                    <div class="flex flex-col absolute inset-0 mx-6 justify-end my-[43px]">
                        <h2 class="lowercase font-bold text-white text-[53.8px]"><?php the_title(); ?></h2>
                        <p class="uppercase text-white text-[18px]">Giving young pups a paw up</p>
                    </div>
            </div>
        </section>

        <!-- Our services -->
        <section>
            <div class="flex flex-col gap-[20px] md:gap-[30px]">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Our services</h2>
                <!-- Deck -->
                <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                    <div class="p-6 rounded-lg">
                        <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                        <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[37px] md:text-[75.8px] text-[#47423B] md:max-w-1/3">Grooming</h3>
                        </div>
                    </div>
                    </div>
                    
                    <div class="p-6 rounded-lg">
                        <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                        <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[37px] md:text-[75.8px] text-[#47423B] md:max-w-1/3">Daycare</h3>
                        </div>
                    </div>                    </div>
                    
                    <div class="p-6 rounded-lg">
                        <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                        <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[37px] md:text-[75.8px] text-[#47423B] md:max-w-1/3">Hotel</h3>
                        </div>
                    </div>                    </div>
                    
                    <div class="p-6 rounded-lg">
                        <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                        <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[37px] md:text-[75.8px] text-[#47423B] md:max-w-1/3">Training</h3>
                        </div>
                    </div>                    </div>
                    
                    <div class="p-6 rounded-lg">
                        <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                        <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[37px] md:text-[75.8px] text-[#47423B] md:max-w-1/3">Exercise</h3>
                        </div>
                    </div>                    </div>
                    
                    <div class="p-6 rounded-lg">
                        <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                        <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[37px] md:text-[75.8px] text-[#47423B] md:max-w-1/3">Portraits</h3>
                        </div>
                    </div>                    </div>
                    
                    <div class="p-6 rounded-lg md:col-span-2">
                        <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                        <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[37px] md:text-[75.8px] text-[#47423B] md:max-w-1/3">Puppy programs</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>

<?php
get_footer();
