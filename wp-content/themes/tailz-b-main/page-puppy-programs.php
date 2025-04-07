<?php
/**
 * Template Name: Puppy Programs
 * Description: A custom template for the "Puppy Programs" page.
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

        <!-- Nurturing your pup's growth and socialization -->
        <section>
            <div class="flex flex-col gap-[52px] md:gap-[60px]">
                <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                    <h2 class="text-[44.8px] text-[#47423B] lowercase">Nurturing your pup's growth and socialization</h2>
                    <p class="text-[18px] text-[#2C2C2C] md:w-3/4">The first few months of a young pup's life are cricual to their development. We here at Tailz have custom tailored programs for all types of pups to help them grow into a balanced, socializaed and good-natured puppy.</p>
                    <p class="text-[18px] text-[#2C2C2C] md:w-3/4">Early socialization and desensitization leads to reduced fears and anxieties down the road, making for a friendly and sociable fur-friend. Whether your puppy visits us once a week, or every day, they will get the experience in our cirriculum to develop into a sociable and well-behaved puppy.</p>
                </div>
                <!-- Quick Links -->
                <div class="flex flex-col md:flex-row flex-wrap gap-5 mx-6 md:mx-[5.56rem] text-center md:text-left items-center md:items-start md:justify-between">
                    <!-- Puppy preschool -->
                    <a class="md:w-[calc(33.333333%_-_30px)]" href="#">
                        <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                        <div class="bg-[#FF6A6A] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[37px] md:text-[75.8px] text-[#47423B] md:max-w-1/3">Puppy preschool</h3>
                        </div>
                    </a>
                    <!-- Puppy plus -->
                    <a class="md:w-[calc(33.333333%_-_30px)]" href="#">
                        <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                        <div class="bg-[#FEA91D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[37px] md:text-[75.8px] text-[#47423B] md:max-w-1/3">Puppy plus</h3>
                        </div>
                    </a>
                    <!-- Puppy daycare -->
                    <a class="md:w-[calc(33.333333%_-_30px)]" href="#">
                        <img class="rounded-t-[30px] w-full" src="https://placehold.co/600x400" alt="">
                        <div class="bg-[#FCD41D] p-[25px] rounded-b-[30px]">
                            <h3 class="lowercase text-[37px] md:text-[75.8px] text-[#47423B] md:max-w-1/3">Puppy daycare</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Puppy preschool -->
        <section>
            <div class="flex flex-col gap-[16px] md:gap-[50px]">
                <!-- Intro -->
                <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                    <h2 class="text-[44.8px] text-[#47423B] lowercase">Puppy preschool</h2>
                    <p class="text-[18px] text-[#47423B] md:w-3/4">Our daycare program is thoughtfully designed to create a unique experience for your pup. We are different from your typical dpoggy daycare, and that starts first with understanding dog behavior. This allows us to create an environtment in which your pup gets appropriate exercise, enrichment, socialization, and rest.</p>
                </div>
                <!-- List Container -->
                <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                    <h3 class="text-[44.8px] text-[#47423B] lowercase">During their days at puppy preschool we focus on:</h3>
                    <!-- Improving manners -->
                    <div class="flex flex-col gap-[20px] md:gap-[30px]">
                        <h4 class="text-[26px] md:text-[42.7px] text-[#47423B]">Improving manners</h4>
                        <ol class="flex flex-col text-[18px] md:text-[24px] text-[#47423B] gap-3 leading-normal">
                            <li>Sit, Down, Stay, and Wait</li>
                            <li>Watch, Touch, Place</li>
                            <li>Recall ("come!"), and Jumping ("Off")</li>
                            <li>Crate training, loose leash walking, and greeting other dogs politely</li>
                            <li>Safe play and socialization</li>
                            <li>Outdoor walks</li>
                            <li>Puppy Playtime</li>
                            <li>Grooming etiquette</li>
                            <li>Desensitization work</li>
                        </ol>
                    </div>
                    <!-- Our puppy preschool program includes -->
                    <div class="flex flex-col gap-[20px] md:gap-[30px]">
                        <h4 class="text-[26px] md:text-[42.7px] text-[#47423B]">Our puppy preschool program includes</h4>
                        <ol class="flex flex-col text-[18px] md:text-[24px] text-[#47423B] gap-3 leading-normal">
                            <li>1 puppy groom</li>
                            <li>4 or 6 weeks of puppy training</li>
                            <li>One-on-one training session, 2-3 times per day</li>
                        </ol>
                    </div>
                    <p class="text-[18px] md:text[24px] font-bold text-[#47423B] md:w-3/4">Add an additional 2 weeks of Puppy Preschool training for a total of six weeks! Guarantee your pup is more rounded and socialized by giving them extra training. For more details about extensions, pelase contact us.</p>
                </div>
            </div>
        </section>

        <!-- Puppy plus -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] text-[#47423B] lowercase">Puppy plus</h2>
                <p class="text-[18px] text-[#47423B] md:w-3/4">Our Puppy plus program offers everything our Puppy Preschool program does without the commitment of attending Monday through Friday!</p>
            </div>
        </section>

        <!-- Puppy Daycare -->
        <section>
            <div class="flex flex-col gap-[16px] md:gap-[50px] mx-6 md:mx-[89px]">
                <!-- Intro -->
                <div class="flex flex-col gap-5 md:w-2/3">
                    <h2 class="text-[44.8px] text-[#47423B] lowercase">Puppy daycare</h2>
                    <p class="text-[18px] text-[#47423B] md:w-3/4">Our daycare program is thoughtfully designed to create a unique experience for your pup. We are different from your typical dpoggy daycare, and that starts first with understanding dog behavior. This allows us to create an environtment in which your pup gets appropriate exercise, enrichment, socialization, and rest.</p>
                </div>
                <!-- List Container -->
                <div class="flex flex-col gap-[20px] md:gap-[30px]">
                    <h3 class="text-[26px] md:text-[42.7px] text-[#47423B]">Our puppy preschool program includes</h3>
                    <ol class="flex flex-col text-[18px] md:text-[24px] text-[#47423B] gap-3 leading-normal">
                        <li>Daylong potty training</li>
                        <li>Learning to settle in a crate</li>
                        <li>Safe play and socialization skills</li>
                        <li>Puppy playtime</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- FAQs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 class="md:text-[75.8px] text-[44.8px] text-[#47423B] lowercase">FAQs</h2>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What is the puppy preschool program?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Our Puppy Preschool program is a customized curriculum designed to help puppies grow into balanced, socialized, and well-behaved dogs through early socialization, training, and positive experiences.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Why is early socialization important for my puppy?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Early socialization helps reduce fears and anxieties, leading to a more confident, friendly, and sociable dog as they grow. It sets a strong foundation for good behavior throughout their life.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">How often should my puppy attending the program?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">We recommend regular visits for optimal development. Whether your puppy comes once a week or every day, they will benefit from the structured environment that encourages growth and positive behavior.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What activities are included in the program?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">The program includes interactive play, gentle training, socialization with other dogs, and desensitization to various environments and situations to build your puppy's confidence.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Is the program suitable for all breeds and sizes?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! Our Puppy Development program is tailored to meet the needs of all puppies, regardless of breed or size, with activities designed to support their unique development stages.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Will my puppy learn basic commands?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! We incorporate basic training into the program, such as sit, stay, and recall, to help your puppy learn essential commands and good manners.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">How do I know if my puppy is ready for the program?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Most puppies can start the program after they've had their first set of vaccinations. If you're unsure, our team can help you determine the best time to enroll your puppy.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Can I observe my puppy during the program?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">For the comfort and focus of your puppy, we typically recommend leaving them for their session. However, if you have concerns or special requests, we can discuss accommodations.</p>
                </div>
            </div>
        </section>

    </div>

    <!-- <article class="flex flex-col">
        <section>
            <h1>puppy programs</h1>
            <p>giving young pups a paw up</p>
        </section>

        <section>
            <div>
                <h2>Puppy Preschool</h2>
                <p>Our Puppy Preschool is our signature 4-6 week puppy training program designed for young puppies aged 8-20 weeks old.</p>
                <p>During their days at Puppy Preschool we focus on:</p>
                <ol>
                    <li>Improving manners</li>
                    <ol>
                        <li>Sit, Down, Stay, and Wait</li>
                        <li>Watch, Touch, Place</li>
                        <li>Recall ("Come!"), and Jumping ("Off")</li>
                        <li>Crate training, loose leash walking, and greeting other dogs politely</li>
                    </ol>
                    <li>Safe play and socializaiton</li>
                    <li>Outdoor walks</li>
                    <li>Puppy Playtime</li>
                    <li>Grooming etiquette</li>
                    <li>Desensitization work</li>
                </ol>
                <p>Our Puppy Preschool Program includes:</p>
                <ol>
                    <li>1 puppy groom</li>
                    <li>4 or 6 weeks of puppy training</li>
                    <li>One-on-one training session, 2-3 times per day</li>
                </ol>
            </div>
        </section>

        <section>
            <h2>Puppy Plus</h2>
            <p>Our Puppy Plus program offers everything our Puppy Preschool program does without the commitment of attending Monday through Friday!</p>
        </section>

        <section>
            <h2>Puppy Daycare</h2>
            <p>Our Puppy Daycare program focuses on the socialization of puppies. We will teach polite playtime, potty training, crate training, and socialization to help your puppy learn skills for everyday life.</p>
            <p>Our Puppy Daycare program includes:</p>
            <ol>
                <li>Daylong potty training</li>
                <li>Learning to settle in a crate</li>
                <li>Safe play and socialization skills</li>
                <li>Puppy playtime</li>
            </ol>
        </section>

        <button>Resgiter Your Puppy</button>

        <section>
            <h2>Helpful Information</h2>
            <div>
                <h3>Vaccination Requirements</h3>
                <p>Puppies must have their first Distemper Combination and Bordetella vaccination at least 7 days prior to their first day of Puppy Preschool and must be kept up to date during their time at Tailz.</p>
                <p>Historically, puppies weren't to socialize until after their third set of vaccines, however, research now shows that waiting this long has had detrimental effects on social skills.</p>
            </div>
        </section>

        <section>
            <h2>Frequently Asked Questions</h2>
            <div>
                <h3>When do the Puppy Programs run?</h3>
                <p>Our Puppy Program curriculum runs Monday - Friday and will start at 9:00am. Although our curriculum doesn’t start until mid-morning, you can drop off your puppy as soon as we open at 6:30am, and pick-up at our latest time of 6:30pm.</p>
            </div>
            <div>
                <h3>Should I bring lunch?</h3>
                <p>We recommend that you bring your puppy lunch. Please send a single serving lunch in a clearly labeled bag or container.</p>
            </div>
            <div>
                <h3>Will treats be given?</h3>
                <p>To aide in training, your puppy may also be given treats throughout the day, which we will provide. Our treats are loved by all of the pups we take in, however if you have particular treats that your puppy loves, you can bring those in a clearly labeled bag. We will use those for one-on-one training sessions.</p>
                <p>Be sure to let us know if your puppy has any food allergies or sensitivities.</p>
            </div>
            <div>
                <h3>Does my puppy have access to water?</h3>
                <p>Your puppy will have access to fresh, cold water during each structured playtime.</p>
            </div>
        </section>
    </article> -->
</div>

<?php
    get_footer();
?>