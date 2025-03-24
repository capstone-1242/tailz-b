<?php
/**
 * Template Name: Training
 * Description: Displays training packages for dogs, managed by Meta Box fields.
 *
 * @package tailz
 */

get_header();
?>

<div class="container mx-auto my-8">

    <!-- Page Content -->
    <section class="flex flex-col gap-3 mt-8">
        <h2 class="uppercase font-bold">Daycare</h2>
        <div class="page-content">

        <!-- Hardcode for now -->
        <div>
            <p>When a dog's behaviour is out of the "normal range", extra guidance is required from skilled trainers who specialize in dog behaviour and additional attending from their companions.</p>
            <p>In these circumstances, it is crucial to know it is okay to ask for help. Training your pup needs to be a lifestyle and a life-long commitment. Open yourself up to learn why your pup may have these behaviours in order to understand how to help your pup get results.</p>
            <div>
                <p>During the Canine Skill Building process, we need to figure out your goals for your pup. Two different households can be looking for different results. Ultimately, we want you to able to answer a few fundamental questions:</p>
                <ol>
                    <li>How do I help them achieve my goal for them?</li>
                    <li>How much time and effort am I willing to commit to their success?</li>
                </ol>
            </div>
            <p>All these factors affect the outcome. Canine Skill building is not just training - it's a learning process for both you and your pup. Throughout the process, you will be systematically given tools to help your pup build the skills they need to improve their behaviour.</p>
            <p>Training happens through repetition and with the Skill Building, learning occurs as a sensory experience. It is more holistic - one in which all your dog's senses are activated in a rich and robust way. Skill Building will deepen your relationship with your dog.</p>
            <p>After your initial consultation, our trainer will thoughtfully develop a plan for ongoing skill enhances, structure and one-on-one support.</p>
            <div>
                <p>Some common Canine Skill Building Includes:</p>
                <ol>
                    <li>Leash reactivity</li>
                    <li>Reactivity (other dogs or humans)</li>
                    <li>Barrier frustration (ie. fence fighting)</li>
                    <li>Excessive barking</li>
                    <li>Door dashing</li>
                    <li>Resource guarding</li>
                    <li>Fearfulness (dogs or humans)</li>
                    <li>Poor leash manners</li>
                    <li>Confidence issues</li>
                </ol>
            </div>
        </div>
    </section>

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

    <div class="container mx-auto px-4 py-6">
        <!-- Page Heading -->
        <section class="mb-6">
            <h1 class="text-2xl font-extrabold mb-2">TRAINING PACKAGES</h1>
            <p class="text-sm text-gray-700 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada consectetur justo.
            </p>
        </section>

        <!-- Render the single DOG tab with the packages from Meta Box -->
        <?php render_training_packages( $packages ); ?>

        <h3 class="mt-6 font-bold">Book some skillz for your pup today!</h3>
        <button class="border border-black text-black text-sm font-bold px-4 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition">
            Book Now
        </button>
        <p class="mt-2 text-sm">Services must be pre-paid prior to commencing. Canine Skill Building sessions are to be scheduled in advance.</p>
        <p class="text-sm">We require a minimum of 24-hour notice for rescheduling any Canine Skill Building sessions - not doing so will result in a $50 late cancellation fee or use of one session from the bundle.</p>
    </div>

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

</div><!-- /.container -->

<?php get_footer(); ?>
