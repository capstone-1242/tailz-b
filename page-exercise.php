<?php
/**
 * Template Name: Exercise
 * Description: Exercise page with single-column cards for dog exercise options.
 *
 * @package tailz
 */

get_header();

// Banner
get_template_part('template-parts/banner');

// Retrieve the ACF group for exercise options.
$exercise_options_group = get_field('exercise_options');

$exerciseOptions = array();
if (!empty($exercise_options_group['exercise_option_1']) && !empty($exercise_options_group['exercise_option_1']['title'])) {
    $exerciseOptions[] = $exercise_options_group['exercise_option_1'];
}
if (!empty($exercise_options_group['exercise_option_2']) && !empty($exercise_options_group['exercise_option_2']['title'])) {
    $exerciseOptions[] = $exercise_options_group['exercise_option_2'];
}
if (!empty($exercise_options_group['exercise_option_3']) && !empty($exercise_options_group['exercise_option_3']['title'])) {
    $exerciseOptions[] = $exercise_options_group['exercise_option_3'];
}
?>

<!-- Breadcrumb -->
<nav class="flex flex-col mx-6 md:mx-[89px] my-[16px] md:my-[60px]" aria-label="Breadcrumb">
    <ol class="flex items-center space-x-2 text-[14px] md:text-[16px] mb-[16px] lg-[20px]">
        <li><a href="<?php echo esc_url(home_url()); ?>" class="text-[#47423B]">Home</a></li>
        <li><span class="text-[#47423B]">/</span></li>
        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-[#47423B]">Services</a></li>
        <li><span class="text-[#47423B]">/</span></li>
        <li><span class="font-bold text-[#615849]" aria-current="page">Exercise</span></li>
    </ol>
    <hr class="w-full border-t-2 border-[#F3F2EC]">
</nav>

<div>
    <div class="flex flex-col gap-[60px] md:gap-[130px]">
        <!-- Fun and engaging classes for active dogs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="text-[40px] md:text-[53.75px] text-[#47423B] lowercase">Fun and engaging classes for active dogs</h2>
                <p class="text-[18px] text-[#2C2C2C]">
                    Our Sports & Games class is designed to build teamwork between you and your dog in a non-competitive setting. Over six weeks, you'll work together to navigate agility equipment, learn fun tricks, and improve focus and relaxation exercises. It's a great way for your dog to burn off energy while developing essential skills at their own pace.
                </p>
                <p class="text-[18px] text-[#2C2C2C]">
                    For those looking for an exciting indoor activity, our Nosework Games class offers a fun and enriching way to engage your dog's senses. Over four weeks, your dog will learn to navigate obstacles and search for treats or scents, building confidence in new environments. This class is perfect for dogs with lots of energy or those needing a confidence boost. With a focus on searching skills, settling, and leash walking, Nosework Games provides an excellent outlet for mental stimulation and exercise.
                </p>
            </div>
        </section>

        <!-- Exercise Options -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#6FDBFC] lowercase">Exercise options</h2>
                    <p class="text-[18px] text-[#2C2C2C]">
                        We run carefully chosen play groups that will keep your dog happy and safe. Allowing your pup's activity level to be paced throughout the day means that we are constantly engaging with, supervising, and adjusting their environment to ensure they are comfortable, happy, and enjoying themselves.
                    </p>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
                    <!-- Dynamic columns: auto-fit with a min width -->
                    <div class="grid gap-6" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                        <?php if (!empty($exerciseOptions)) : 
                            foreach ($exerciseOptions as $index => $option) : ?>
                            <div class="bg-white p-6 rounded-[20px]">
                                <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4">
                                    <?php echo esc_html($option['title']); ?>
                                </h3>
                                <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">
                                    <?php echo esc_html($option['duration']); ?> - $<?php echo esc_html($option['price']); ?>
                                </p>
                                
                                <?php 
                                // Description is a group with a single "paragraph"
                                if (!empty($option['description']['paragraph'])) : ?>
                                    <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6">
                                        <?php echo esc_html($option['description']['paragraph']); ?>
                                    </p>
                                <?php endif; ?>
                                
                                <?php 
                                // Skills section: only show for second card onward (index > 0)
                                if ($index > 0 && !empty($option['skills'])) {
                                    // Extract all skill values from the skills group
                                    $skillsValues = [];
                                    foreach ($option['skills'] as $key => $value) {
                                        if (!empty($value)) {
                                            $skillsValues[] = $value;
                                        }
                                    }
                                    // Remove any duplicate values
                                    $uniqueSkills = array_unique($skillsValues);
                                    if (!empty($uniqueSkills)) : ?>
                                        <div class="mb-6">
                                            <h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Skills Include:</h4>
                                            <ul class="space-y-4">
                                                <?php foreach ($uniqueSkills as $skill) : ?>
                                                    <li class="flex items-center gap-3">
                                                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0">
                                                            <path d="M8.97125 5.55493C10.3344 5.07281 11.0612 3.54116 10.5941 2.13402C10.1276 0.727311 8.64417 -0.0236561 7.28079 0.458569C5.9176 0.94031 5.19077 2.47186 5.65745 3.87905C6.12436 5.28663 7.60788 6.03629 8.97125 5.55493Z" fill="#2C2C2C"/>
                                                            <path d="M4.7996 9.74671V9.74719C5.58268 8.49808 5.23628 6.83013 4.02693 6.02207C2.81711 5.21444 1.20169 5.5713 0.418662 6.81992V6.82041C-0.363899 8.06903 -0.0175474 9.7366 1.19185 10.5442C2.40162 11.3527 4.0168 10.9954 4.7996 9.74671Z" fill="#2C2C2C"/>
                                                            <path d="M15.0281 5.55498C16.3915 6.03633 17.8749 5.28667 18.3418 3.87904C18.8085 2.4719 18.0817 0.940306 16.7186 0.458564C15.3552 -0.0236609 13.8717 0.727354 13.4052 2.13401C12.9381 3.54121 13.6649 5.07285 15.0281 5.55498Z" fill="#2C2C2C"/>
                                                            <path d="M11.9994 6.87891C7.87565 6.87891 3.32549 12.7732 4.64275 16.9673C5.91453 21.0165 9.88799 19.3477 11.9994 19.3477C14.1109 19.3477 18.0843 21.0165 19.3561 16.9673C20.6734 12.7732 16.1232 6.87891 11.9994 6.87891Z" fill="#2C2C2C"/>
                                                            <path d="M23.5812 6.82041V6.81992C22.7981 5.5713 21.1828 5.21444 19.973 6.02207C18.7636 6.83013 18.4172 8.49808 19.2002 9.74719V9.74671C19.983 10.9954 21.5982 11.3527 22.808 10.5442C24.0174 9.7366 24.3638 8.06908 23.5812 6.82041Z" fill="#2C2C2C"/>
                                                        </svg>
                                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]">
                                                            <?php echo esc_html($skill); ?>
                                                        </span>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif;
                                } ?>
                                
                                <?php 
                                // Notes is a textarea (a single string)
                                if (!empty($option['notes'])) : ?>
                                    <div class="mt-6">
                                        <p class="font-work-sans italic text-[16px] md:text-[18px] text-[#47423B]">
                                            <?php echo esc_html($option['notes']); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>

                    <!-- Book Button -->
                    <div class="flex justify-center mt-8">
                        <a href="/book-a-session">
                            <button class="bg-[#6FDBFC] hover:bg-[#6FDBFC]/90 transition-colors duration-200 rounded-[10px] px-8 py-4">
                                <span class="font-poppins font-bold text-[18px] md:text-[26px] text-[#FFFFFF]">Book a session</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 class="md:text-[75.8px] text-[44.8px] text-[#47423B] lowercase">FAQs</h2>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Can any dog join these classes?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">
                        Yes! Both the Sports & Games and Nosework classes are open to dogs who have completed any Tailz class. Dogs must be comfortable in a group setting and able to work on basic obedience.
                    </p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What is the age requirement for these classes?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">
                        The Sports & Games class is for dogs 9 months and older, while the Nosework Games class is for dogs 8 months and older. If you have a puppy, we recommend starting with our Puppy Development program first.
                    </p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Do I need to have prior experience with dog training?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">
                        No prior experience is necessary! These classes are designed to be fun and beginner-friendly while also helping to improve your training skills.
                    </p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What if my dog doesn't enjoy the activities?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">
                        We tailor activities to meet your dog's individual needs and pace. If at any time your dog is feeling overwhelmed, our trainers will work with you to adjust the exercises and ensure they're comfortable.
                    </p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Can I join the class with my dog?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">
                        Yes! These classes are designed for you to participate alongside your dog. You'll work together as a team, helping to strengthen your bond and enhance your dog's skills.
                    </p>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
