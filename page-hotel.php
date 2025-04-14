<?php
/**
 * Template Name: Hotel
 *
 * @package Tailz
 */

get_header();

// Banner
get_template_part('template-parts/banner'); 
?>

<div>
    <div class="flex flex-col gap-[60px] md:gap-[130px]">
        <!-- Introduction -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Luxury pet hotel</h2>
                <p class="text-[18px] text-[#2C2C2C]">At Tailz, we understand that leaving your pet behind can be stressful. That's why we've created a luxurious, comfortable environment where your pet can feel at home while you're away.</p>
                <p class="text-[18px] text-[#2C2C2C]">Our hotel features spacious suites, regular exercise, and plenty of playtime. We also offer additional services like grooming and training to make your pet's stay even more enjoyable.</p>
            </div>
        </section>

        <!-- Hotel Suites -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Our suites</h2>
                </div>
                <!-- Suites -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php if (have_rows('hotel_suites')) : 
                            while (have_rows('hotel_suites')) : the_row(); ?>
                            <div class="bg-white p-6 rounded-[20px]">
                                <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4"><?php the_sub_field('title'); ?></h3>
                                <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">Starting at $<?php the_sub_field('price'); ?> per night</p>
                                <?php if (have_rows('description')) : ?>
                                    <?php while (have_rows('description')) : the_row(); ?>
                                        <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6"><?php the_sub_field('paragraph'); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                
                                <?php if (have_rows('amenities')) : ?>
                                <div class="mb-6">
                                    <h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Amenities Include:</h4>
                                    <ul class="list-disc list-inside space-y-2">
                                        <?php while (have_rows('amenities')) : the_row(); ?>
                                            <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php the_sub_field('amenity'); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>

                                <?php if (have_rows('notes')) : ?>
                                    <?php while (have_rows('notes')) : the_row(); ?>
                                        <p class="font-work-sans font-bold italic text-[16px] md:text-[18px] text-[#47423B]"><?php the_sub_field('note'); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Services -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Additional services</h2>
                </div>
                <!-- Services -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php if (have_rows('additional_services')) : 
                            while (have_rows('additional_services')) : the_row(); ?>
                            <div class="bg-white p-6 rounded-[20px]">
                                <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4"><?php the_sub_field('title'); ?></h3>
                                <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">$<?php the_sub_field('price'); ?></p>
                                <?php if (have_rows('description')) : ?>
                                    <?php while (have_rows('description')) : the_row(); ?>
                                        <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6"><?php the_sub_field('paragraph'); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Requirements -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Requirements</h2>
                <div class="flex flex-col gap-5">
                    <?php if (have_rows('requirements')) : ?>
                        <?php while (have_rows('requirements')) : the_row(); ?>
                        <div class="flex flex-col gap-3">
                            <h3 class="text-[22px] md:text-[30px] text-[#47423B]"><?php the_sub_field('title'); ?></h3>
                            <ul class="flex flex-col gap-2">
                                <?php if (have_rows('items')) : ?>
                                    <?php while (have_rows('items')) : the_row(); ?>
                                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2 text-[18px] md:text-[24px] text-[#2C2C2C]"><?php the_sub_field('item'); ?></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- FAQs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">FAQs</h2>
                <?php if (have_rows('faqs')) : ?>
                    <?php while (have_rows('faqs')) : the_row(); ?>
                    <div class="flex flex-col gap-3">
                        <h3 class="text-[22px] md:text-[30px] text-[#47423B] lowercase"><?php the_sub_field('question'); ?></h3>
                        <p class="text-[18px] md:text-[24px] text-[#2C2C2C]"><?php the_sub_field('answer'); ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>