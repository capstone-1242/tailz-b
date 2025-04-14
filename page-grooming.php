<?php
/**
 * Template Name: Grooming
 *
 * @package Tailz
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
                        <p class="uppercase text-white text-[18px]">Professional grooming services for your furry friend</p>
                    </div>
            </div>
        </section>

        <!-- Introduction -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Professional grooming services</h2>
                <p class="text-[18px] text-[#2C2C2C]">At Tailz, we understand that grooming is not just about making your pet look good - it's about their overall health and well-being. Our professional groomers are trained to handle all breeds and temperaments with care and expertise.</p>
                <p class="text-[18px] text-[#2C2C2C]">We use only the highest quality products and equipment to ensure your pet's comfort and safety during their grooming session. Whether your pet needs a simple bath and brush or a full grooming service, we've got you covered.</p>
            </div>
        </section>

        <!-- Grooming Services -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Our grooming services</h2>
                </div>
                <!-- Services -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-[20px]">
                            <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4">Basic Grooming</h3>
                            <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">Starting at $45</p>
                            <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6">Perfect for regular maintenance and keeping your pet looking their best.</p>
                            <div class="mb-6">
                                <h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Services Include:</h4>
                                <ul class="list-disc list-inside space-y-2">
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Bath with premium shampoo</li>
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Blow dry and brush out</li>
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Nail trim</li>
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Ear cleaning</li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-[20px]">
                            <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4">Full Grooming</h3>
                            <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">Starting at $65</p>
                            <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6">Our most popular service, includes everything in Basic Grooming plus a full haircut.</p>
                            <div class="mb-6">
                                <h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Services Include:</h4>
                                <ul class="list-disc list-inside space-y-2">
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Everything in Basic Grooming</li>
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Full haircut to breed standard</li>
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Sanitary trim</li>
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Paw pad trim</li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-[20px]">
                            <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4">Spa Package</h3>
                            <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">Starting at $85</p>
                            <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6">Treat your pet to our premium spa experience, including everything in Full Grooming plus luxurious extras.</p>
                            <div class="mb-6">
                                <h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Services Include:</h4>
                                <ul class="list-disc list-inside space-y-2">
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Everything in Full Grooming</li>
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Blueberry facial</li>
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Pawdicure</li>
                                    <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">Coat conditioning treatment</li>
                                </ul>
                            </div>
                        </div>
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
                        <div class="bg-white p-6 rounded-[20px]">
                            <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4">Teeth Brushing</h3>
                            <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">$15</p>
                            <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6">Keep your pet's teeth clean and healthy with our professional teeth brushing service.</p>
                        </div>

                        <div class="bg-white p-6 rounded-[20px]">
                            <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4">Flea & Tick Treatment</h3>
                            <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">$20</p>
                            <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6">Protect your pet from fleas and ticks with our professional treatment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Requirements -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Requirements</h2>
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-3">
                        <h3 class="text-[22px] md:text-[30px] text-[#47423B]">Vaccinations</h3>
                        <ul class="flex flex-col gap-2">
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2 text-[18px] md:text-[24px] text-[#2C2C2C]">All dogs must have up-to-date vaccinations for Bordetella, Distemper/Parvovirus/Parainfluenza, and Rabies (after 6 months of age)</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2 text-[18px] md:text-[24px] text-[#2C2C2C]">Proof of vaccinations must be provided before the first appointment</li>
                        </ul>
                    </div>

                    <div class="flex flex-col gap-3">
                        <h3 class="text-[22px] md:text-[30px] text-[#47423B]">Health</h3>
                        <ul class="flex flex-col gap-2">
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2 text-[18px] md:text-[24px] text-[#2C2C2C]">Pets must be in good health and free from contagious conditions</li>
                            <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2 text-[18px] md:text-[24px] text-[#2C2C2C]">Please inform us of any medical conditions or special needs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">FAQs</h2>
                <div class="flex flex-col gap-3">
                    <h3 class="text-[22px] md:text-[30px] text-[#47423B] lowercase">How often should I get my pet groomed?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">The frequency depends on your pet's breed, coat type, and lifestyle. Generally, we recommend every 4-6 weeks for most breeds.</p>
                </div>
                <div class="flex flex-col gap-3">
                    <h3 class="text-[22px] md:text-[30px] text-[#47423B] lowercase">How long does a grooming session take?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Most grooming sessions take 2-3 hours, depending on the service and your pet's size and coat condition.</p>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>