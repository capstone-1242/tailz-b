<?php
/**
 * Template Name: Exercise
 * Description: Exercise page with Dog/Cat tabs, single-column cards, and no size dropdown.
 *
 * @package tailz
 */

get_header();

// Retrieve cloned meta values and cast them to arrays.
$titles       = (array) rwmb_meta( 'exercise_service_title' );
$descriptions = (array) rwmb_meta( 'exercise_service_description' );
$dog_prices   = (array) rwmb_meta( 'exercise_dog_price' );
$cat_prices   = (array) rwmb_meta( 'exercise_cat_price' );

// Build the services array using the cloned fields by index.
$services = [];
$total = count( $titles );
for ( $i = 0; $i < $total; $i++ ) {
    if ( empty( $titles[ $i ] ) ) {
        continue;
    }
    $services[] = [
        'service_title'       => $titles[ $i ],
        'service_description' => isset($descriptions[ $i ]) ? $descriptions[ $i ] : '',
        'dog' => [
            'price' => isset( $dog_prices[ $i ] ) ? $dog_prices[ $i ] : '',
        ],
        'cat' => [
            'price' => isset( $cat_prices[ $i ] ) ? $cat_prices[ $i ] : '',
        ],
    ];
}

/**
 * Helper function to render a single tab for exercise services.
 */
function render_exercise_tab( $animal, $services ) {
    ?>
    <div class="tab-content hidden" id="<?php echo esc_attr($animal); ?>-content">
        <div class="bg-gray-100 p-4 rounded-lg mb-4">
            <div class="space-y-4">
                <?php foreach ( $services as $service ) : 
                    if ( empty( $service['service_title'] ) ) continue;
                ?>
                    <div class="border border-gray-300 p-4 rounded-md">
                        <h3 class="font-bold text-md"><?php echo esc_html( $service['service_title'] ); ?></h3>
                        <p class="price text-sm text-gray-700 mt-2"><?php echo esc_html( $service[ $animal ]['price'] ); ?></p>
                        <p class="description text-sm mt-2"><?php echo esc_html( $service['service_description'] ); ?></p>
                        <p class="includes text-sm mt-2">Includes: Lorem ipsum.</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Book Now CTA -->
        <div class="mb-6 flex justify-center">
            <a href="#" class="inline-block border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition">
                BOOK NOW
            </a>
        </div>
    </div>
    <?php
}
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
                        <p class="uppercase text-white text-[18px]">Unleash the fun with your dog!</p>
                    </div>
            </div>
        </section>

        <!-- Fun and engaging classes for active dogs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] text-[#47423B] lowercase">Fun and engaging classes for active dogs</h2>
                <p class="text-[18px] text-[#2C2C2C]">Our Sports & Games class is designed to build teamwork between you and your dog in a non-competitive setting. Over six weeks, you'll work together to navigate agility equipment, learn fun tricks, and improve focus and relaxation exercises. It's a great way for your dog to burn off energy while developing essential skills at their own pace. Whether learning to jump, crawl, or lcimb, both you and your dog will enjoy the process of bonding through physical activity.</p>
                <p class="text-[18px] text-[#2C2C2C]">For those looking for an exciting indoor activity, our Nosework Games class offers a fun and enriching way to engage your dog's senses. Over four weeks, your dog will learn to navigate obstacles and search for treats or scents, building confidence in new environments. This class is perfect for dogs with lots of energy or those needing a confidence boost. With a focus on searching skills, settling, and leash walking, Nosework Games provides an excellent outlet for mental stimulation and exercise.</p>
            </div>
        </section>

        <!-- Exercise Options -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] text-[#6FDBFC] lowercase">Exercise options</h2>
                    <p class="text-[18px] text-[#2C2C2C]">We run carefully chosen play groups that will keep your dog happy and safe. Allowing your pup's activity level to be paced throughout the day means that we are constantly engaging with, supervising, and adjusting their environtment to ensure they are comfortable, happy, and enjoying themselves.</p>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC]">
                    <h2 class="text-[44.8px] text-[#6FDBFC] lowercase py-[30px]">PACKAGES AND PRICES HERE</h2>
                </div>
            </div>
        </section>

        <!-- Requirements for attending -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] text-[#47423B] lowercase">Requirements for attending</h2>
                <ol class="flex flex-col md:text-[24px] text-[18px] text-[#2C2C2C] gap-3 leading-normal">
                    <li>All dogs looking to join us at Doggy Daycare are assessed during their Meet & Greet, and an ongoing basis for suitability in our daycare program. This behavioral assessment is to ensure initial suitability for our facility and pups. As we want all pups to be safe and enjoy their time in a structured daycare, not all pups are accepted into our daycare program</li>
                    <li>Our day is very busy and active, therefore we have mandatory nap times for all of our daycare guests to ensure the dogs get adequate rest for their mental well being</li>
                    <li>Our daycare program is not only about coming to play, but to enrich their life through physical exercise, mental stimulation, and socialization</li>
                    <li>Safety and comfort of your pup is important, so our playgroups are based on size and temperament and are always supervised by a qualified team member</li>
                </ol>
            </div>
        </section>

        <!-- FAQs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="md:text-[75.8px] text-[44.8px] text-[#47423B] lowercase">FAQs</h2>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What are the benefits of the sports * games and nosework classes?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Theses classes offer great mental and physical stimulation for your dog. They help improve focus, build teamwork, burn off energy, and boost confidence - all while having fun!</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What is included in the sports & games class?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">In this 6-week class, your dog will enjoy activities like agility equipment, tricks, and focus exercises. It's all about fun, non-competitive learning and improving your dog's skill at their own pace.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What will my dog learn in the nosework games class?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">The Nosework Games class introduces your dog to the world of scent work, teaching them to search for treats and scents through obstacles and distractions. It's perfect for boosting confidence and energy in dogs who need an outlet.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Can any dog join these classes?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! Both the Sports & Games and Nosework classes are open to dogs who have completed any Tailz class. Dogs must be comfortable in a group setting and able to work on basic obedience.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What is the age requirement for these classes?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">The Sports & Games class is for dogs 9 months and older, while the Nosework Games class is for dogs 8 months and older. If you have a puppy, we recommend starting with our Puppy Development program first.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Do I need to have prior experience with dog training?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">No prior experience is necessary! These classes are designed to be fun and beginner-friendly while also helping to improve your training skills.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What if my dog doesn't enjoy the activities?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">We tailor activities to meet your dog's individual needs and pace. If at any time your dog is feeling overwhelmed, our trainers will work with you to adjust the exercises and ensure they're comfortable.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Can I join the class with my dog?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! Theses classes are designed for you to participate alongside your dog. You'll work together as a team, helping to strengthen your bond and enhance your dog's skills.</p>
                </div>
            </div>
        </section>

    </div>














    <!-- Breadcrumb -->
    <nav class="text-sm text-gray-500 mb-4" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-gray-700 uppercase">HOME</a>
        <span class="mx-1">/</span>
        <a href="#" class="hover:text-gray-700 uppercase">SERVICES</a>
        <span class="mx-1">/</span>
        <span class="uppercase font-bold">EXERCISE</span>
    </nav>

    <!-- Exercise Options Heading -->
    <section class="mb-4">
        <h2 class="text-xl font-bold text-gray-900">EXERCISE OPTIONS</h2>
    </section>

    <!-- Tabs Container -->
    <div class="tabs-container" id="exercise-tabs" aria-labelledby="tabs-heading">
        <h2 id="tabs-heading" class="sr-only">Exercise Tabs</h2>
        <div class="tabs flex items-center gap-4 mb-4">
            <!-- DOG Tab -->
            <button class="tab-button active cursor-pointer border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition flex items-center gap-2" data-tab="dog">
                <!-- Dog SVG Icon -->
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                     xmlns="http://www.w3.org/2000/svg">
                    <!-- Insert Dog SVG paths here -->
                </svg>
                DOG
            </button>
            <!-- CAT Tab -->
            <button class="tab-button cursor-pointer border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition flex items-center gap-2" data-tab="cat">
                <!-- Cat SVG Icon -->
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                     xmlns="http://www.w3.org/2000/svg">
                    <!-- Insert Cat SVG paths here -->
                </svg>
                CAT
            </button>
        </div>

        <!-- Render DOG Tab Content -->
        <?php render_exercise_tab( 'dog', $services ); ?>

        <!-- Render CAT Tab Content -->
        <?php render_exercise_tab( 'cat', $services ); ?>
    </div>

    <!-- Instagram Feed Section -->
    <section class="mb-10">
        <h2 class="text-xl font-bold mb-4">FOLLOW OUR FURRY ADVENTURES</h2>
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </section>

</div>

<?php
get_footer();
