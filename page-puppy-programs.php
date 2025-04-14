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

<!-- Breadcrumb -->
<nav class="flex flex-col mx-6 md:mx-[89px]" aria-label="Breadcrumb">
    <ol class="flex items-center space-x-2 text-[14px] md:text-[16px] mb-[16px] lg-[20px]">
        <li><a href="<?php echo esc_url(home_url()); ?>" class="text-[#47423B]">Home</a></li>
        <li><span class="text-[#47423B]">/</span></li>
        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-[#47423B]">Services</a></li>
        <li><span class="text-[#47423B]">/</span></li>
        <li><span class="font-bold text-[#615849]" aria-current="page">Puppy Programs</span></li>
    </ol>
    <hr class="w-full border-t-2 border-[#F3F2EC]">
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
                        <img class="rounded-t-[30px] w-full" src="<?php echo esc_url(get_template_directory_uri() . '/images/puppy-programs-puppy-1.jpg'); ?>" alt="Puppy in a preschool setting" width="600" height="400">
                        <div class="bg-[#FF6A6A] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[clamp(2rem,4vw,4.75rem)] text-[#47423B] lg:max-w-1/3">Puppy preschool</h3>
                        </div>
                    </a>
                    <!-- Puppy plus -->
                    <a class="lg:w-[calc(33.333333%_-_30px)] hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FEA91D]" href="#puppy-plus" aria-label="Learn more about Puppy Plus">
                        <img class="rounded-t-[30px] w-full" src="<?php echo esc_url(get_template_directory_uri() . '/images/puppy-programs-puppy-2.jpg'); ?>" alt="Puppy in advanced training" width="600" height="400">
                        <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[clamp(2rem,4vw,4.75rem)] text-[#47423B] lg:max-w-3/5">Puppy plus</h3>
                        </div>
                    </a>
                    <!-- Puppy daycare -->
                    <a class="lg:w-[calc(33.333333%_-_30px)] hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FCD41D]" href="#puppy-daycare" aria-label="Learn more about Puppy Daycare">
                        <img class="rounded-t-[30px] w-full" src="<?php echo esc_url(get_template_directory_uri() . '/images/puppy-programs-puppy-3.jpg'); ?>" alt="Puppies playing in daycare" width="600" height="400">
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

        <!-- FAQs -->
        <section aria-labelledby="faq-heading">
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 id="faq-heading" class="md:text-[75.8px] text-[44.8px] text-[#47423B] lowercase">FAQs</h2>

                <div class="flex flex-col gap-3">
                    <h3 id="faq-1" class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What is the puppy preschool program?</h3>
                    <p aria-labelledby="faq-1" class="text-[18px] md:text-[24px] text-[#2C2C2C]">Our Puppy Preschool program is a customized curriculum designed to help puppies grow into balanced, socialized, and well-behaved dogs through early socialization, training, and positive experiences.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 id="faq-2" class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Why is early socialization important for my puppy?</h3>
                    <p aria-labelledby="faq-2" class="text-[18px] md:text-[24px] text-[#2C2C2C]">Early socialization helps reduce fears and anxieties, leading to a more confident, friendly, and sociable dog as they grow. It sets a strong foundation for good behavior throughout their life.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 id="faq-3" class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">How often should my puppy attend the program?</h3>
                    <p aria-labelledby="faq-3" class="text-[18px] md:text-[24px] text-[#2C2C2C]">We recommend regular visits for optimal development. Whether your puppy comes once a week or every day, they will benefit from the structured environment that encourages growth and positive behavior.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 id="faq-4" class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What activities are included in the program?</h3>
                    <p aria-labelledby="faq-4" class="text-[18px] md:text-[24px] text-[#2C2C2C]">The program includes interactive play, gentle training, socialization with other dogs, and desensitization to various environments and situations to build your puppy's confidence.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 id="faq-5" class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Is the program suitable for all breeds and sizes?</h3>
                    <p aria-labelledby="faq-5" class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! Our Puppy Development program is tailored to meet the needs of all puppies, regardless of breed or size, with activities designed to support their unique development stages.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 id="faq-6" class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Will my puppy learn basic commands?</h3>
                    <p aria-labelledby="faq-6" class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! We incorporate basic training into the program, such as sit, stay, and recall, to help your puppy learn essential commands and good manners.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 id="faq-7" class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">How do I know if my puppy is ready for the program?</h3>
                    <p aria-labelledby="faq-7" class="text-[18px] md:text-[24px] text-[#2C2C2C]">Most puppies can start the program after they've had their first set of vaccinations. If you're unsure, our team can help you determine the best time to enroll your puppy.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 id="faq-8" class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Can I observe my puppy during the program?</h3>
                    <p aria-labelledby="faq-8" class="text-[18px] md:text-[24px] text-[#2C2C2C]">For the comfort and focus of your puppy, we typically recommend leaving them for their session. However, if you have concerns or special requests, we can discuss accommodations.</p>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
get_footer();
?>