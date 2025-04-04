<?php
/**
 * Template Name: Training
 * Description: Displays training packages for dogs, managed by Meta Box fields.
 *
 * @package tailz
 */

get_header();
?>

<div class="container mx-auto">
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
                    <p class="uppercase text-white text-[18px]">Lessons for every type of pup</p>
                </div>            
        </div>
    </section>
    
    <!-- The leash is in your hands, we'll show you how to lead -->
    <section>
        <div class="flex flex-col mx-6 gap-3">
            <h3 class="lowercase font-bold text-[22px] text-[#615849]">The leash is in your hands, we'll show you how to lead</h3>
            <p class="text-[18px] text-[#47423B]">When a dog's behavior falls outside the "normal" range, it often requires extra guidance—not just from skilled trainers, but from owners committed to their companion's growth.</p>
            <p class="text-[18px] text-[#47423B]"><span class="font-bold">First, let's drop the stigma.</span> Asking for help is not just okay—it's a sign of dedication. Training isn't a quick fix; it's a lifestyle and a lifelong partnership. To create lasting change, we focus on <span class="font-bold">THE WHY</span> behind your pup's behavior, so you can master <span class="font-bold">THE HOW</span> to support them effectively.</p>
        </div>
    </section>

    <!-- Understanding canine behavior and skill building -->
    <section>
        <div class="flex-col mx-6 gap-3">
            <h2 class="lowercase font-bold text-[22px] text-[#615849]">Understanding canine behavior and skill building</h2>
            <!-- Content Container -->  
            <div class="flex-col gap-15">
                <!-- Container 1 -->
                <div class="flex-col gap-15">
                    <!-- Your role in the process -->
                    <div class="flex-col gap-3">
                        <h3 class="lowercase text-[22px] text-[#837660]">Your role in the process</h3>
                        <p class="text-[18px] text-[#47423B]">During Canine Skill Building, we start by defining your goals. Every household is different, and success looks unique for each dog. Ask yourself:</p>
                        <ol class="flex-col gap-3 text-[18px] text-[#615849] font-bold">
                            <li>How can I help my dog reach these goals?</li>
                            <li>What time and effort am I willing to invest?</li>
                        </ol>
                        <p class="text-[18px] text-[#47423B]">These choices shape the outcome. This isn't just "training" - it's a transformative learning journey for both you and your pup. You'll gain systematic tools to help your pup develop the skills they need to thrive.</p>
                    </div>
                    <!-- Our commitment to you -->
                    <div class="flex-col gap-3">
                        <h3 class="lowercase text-[22px] text-[#837660]">Our commitment to you</h3>
                        <p class="text-[18px] text-[#47423B]">After your initial consultation, our trainer will craft a personalized plan for ongoing skill development, including:</p>
                        <ol class="flex-col gap-3 text-[18px] text-[#615849] font-bold">
                            <li>One-on-one coaching</li>
                            <li>Structured exercise</li>
                            <li>Real world practice</li>
                        </ol>
                    </div>
                </div>
                <!-- Container 2 -->
                <div class="flex-col gap-15">
                    <!-- Why skillbuilding works -->
                    <div class="flex-col gap-3">
                        <img src="" alt="">
                        <h3 class="lowercase text-[22px] text-[#837660]">Why skill building works</h3>
                        <p class="text-[18px] text-[#47423B]">True learning happens through repetition and sensory experience. Our approach is holistic, engaging your dog's mind, body, and instincts in a rich, structured way. Beyond correcting behaviors, skill building strengthens your bond and builds confidence.</p>
                    </div>
                    <!-- Common skill building focus areas -->
                    <div class="flex-col gap-3">
                        <h3>Common skill building focus areas</h3>
                        <ol class="flex-col md:flex-row gap-3 text-[18px] text-[#47423B]">
                            <div class="flex-col gap-3 mb-3 md:mb-0">
                                <li>Leash Reactivity</li>
                                <li>Dog Reactivity</li>
                                <li>Human Reactivity</li>
                                <li>Featfulness</li>
                                <li>Resource Guarding</li>
                            </div>
                            <div class="flex col gap-3">
                                <li>Barrier Frustration</li>
                                <li>Door Dash</li>
                                <li>Excessive Barking</li>
                                <li>Poor Leash Manners</li>
                                <li>Confidence Building</li>
                            </div>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MetaBox Queries -->
    <?php
    // -----------------------------
    // Retrieve cloned meta values
    // -----------------------------
    $titles       = (array) rwmb_meta( 'training_package_title' );
    $descriptions = (array) rwmb_meta( 'training_description' );
    $prices       = (array) rwmb_meta( 'training_price' );

    // Build packages array
    $packages = [];
    $total = count( $titles );
    for ( $i = 0; $i < $total; $i++ ) {
        if ( empty( $titles[ $i ] ) ) {
            continue;
        }
        $packages[] = [
            'title'       => $titles[ $i ],
            'description' => isset($descriptions[ $i ]) ? $descriptions[ $i ] : '',
            'price'       => isset($prices[ $i ]) ? $prices[ $i ] : '',
        ];
    }

    /**
     * Helper function to render training packages in a single "DOG" tab.
     */
    function render_training_packages( $packages ) {
        ?>
        <div class="tabs-container" id="training-tabs">
            <div class="tabs flex mb-4">
                <button class="tab-button active border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md flex items-center gap-2 cursor-pointer">
                    <!-- Dog Icon -->
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5.5 16l1.75-3.5a2 2 0 0 1 1.79-1.06h3.92a2 2 0 0 1 1.79 1.06L17.5 16M7 16v4m10-4v4m-10 0h10"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 8.5C8 8 6 8.5 6 6c0-2 1.5-2 2.5-2S11 4 11 6c0 2.5-2 2-2 2.5zm6 0c-1-0.5-3 0-3-2.5 0-2 1.5-2 2.5-2S17 4 17 6c0 2.5-2 2-2 2.5z"/>
                    </svg>
                    DOG
                </button>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="dog-content">
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <!-- Display each package in a grey box -->
                    <?php if ( ! empty( $packages ) ) : ?>
                        <?php foreach ( $packages as $index => $pkg ) : ?>
                            <div class="mb-4 bg-gray-200 p-4 rounded-md">
                                <h3 class="font-bold text-md mb-2">
                                    <?php echo esc_html( $pkg['title'] ); ?>
                                </h3>
                                <p class="text-sm mb-2">
                                    <?php echo esc_html( $pkg['description'] ); ?>
                                </p>
                                <p class="text-sm font-bold mb-2">
                                    <?php echo esc_html( $pkg['price'] ); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p class="text-sm text-gray-500">No training packages found.</p>
                    <?php endif; ?>
                </div>

                <!-- Book Lessons Button -->
                <div class="text-center">
                    <a href="#" class="inline-block border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition">
                        BOOK LESSONS
                    </a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>


    <!-- Render the single DOG tab with the packages from Meta Box -->
    <?php render_training_packages( $packages ); ?>



    <section class="px-4 py-6">
        <div>
            <h2 class="text-xl font-bold mb-2">Training requirements</h2>
            <p class="text-sm">Our basic requirements for attending training...</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="px-4 py-6">
        <h2 class="text-xl font-bold mb-4">Frequently Asked Questions</h2>
        <div class="mb-6">
            <h3 class="font-bold">Why does Tailz need copies of vaccination records? Will my dog's rabies tag work?</h3>
            <p class="text-sm">We respect the trust our clients have in us. We also understand that saying the vaccinations were done is not the same as knowing when the vaccinations were in fact administered...</p>
        </div>
        <!-- Additional FAQs -->
        <div class="mb-6">
            <h3 class="font-bold">Will the vaccinations I did myself work?</h3>
            <p class="text-sm">They may work, however, we require proof of purchase (the till receipt) and the sticker from the vaccination vile...</p>
        </div>
        <div class="mb-6">
            <h3 class="font-bold">Do you have a littles area?</h3>
            <p class="text-sm">Yes, we do! Little ones have an area fenced off and exclusively dedicated to them and boy do they love it!</p>
        </div>
        <div class="mb-6">
            <h3 class="font-bold">How are dogs grouped together?</h3>
            <p class="text-sm">We separate dogs according to size and play style.</p>
        </div>
        <div class="mb-6">
            <h3 class="font-bold">Are dogs free to roam?</h3>
            <p class="text-sm">Think of us like a supervised off leash park. We do have crates, however they are mostly used for personal space or time-outs.</p>
        </div>
        <div class="mb-6">
            <h3 class="font-bold">What techniques do your Canine Play Specialists use when handling dogs?</h3>
            <p class="text-sm">It is our mission to use scientifically-based techniques when handling the dogs. This means absolutely no dominating, no alpha-rolling...</p>
        </div>
        <div class="mb-6">
            <h3 class="font-bold">What is your philosophy on dog training and handling?</h3>
            <p class="text-sm">At Tailz, we believe in treating animals with the kindness and respect they deserve...</p>
        </div>
    </section>

</div>
<!-- /.container -->

<?php get_footer(); ?>
