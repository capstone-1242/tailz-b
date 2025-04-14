<?php
/**
 * Template Name: Portraits
 * Description: A custom template for the Portraits page with packages and FAQs
 *
 * @package tailz
 */

get_header();

// Retrieve ACF field for portrait packages
$portrait_packages = get_field('portrait_packages');

// Build an indexed array from the sub-groups (package_1, package_2, package_3)
$packages = array();
if (!empty($portrait_packages['package_1']) && !empty($portrait_packages['package_1']['header'])) {
    $packages[] = $portrait_packages['package_1'];
}
if (!empty($portrait_packages['package_2']) && !empty($portrait_packages['package_2']['header'])) {
    $packages[] = $portrait_packages['package_2'];
}
if (!empty($portrait_packages['package_3']) && !empty($portrait_packages['package_3']['header'])) {
    $packages[] = $portrait_packages['package_3'];
}

/**
 * Helper function for portrait tab content
 *
 * You can use this function to render tab panels. It now uses the package header as the title,
 * shows the price, and outputs a simple description if you decide to add one.
 */
function render_portrait_tab($animal, $packages) {
    ?>
    <div class="tab-content hidden" id="<?php echo esc_attr($animal); ?>-content">
        <div class="bg-[#F3F2EC] p-6 rounded-[20px]">
            <div class="grid grid-cols-1 gap-[var(--grid-gutter-mobile)] md:grid-cols-3 md:gap-[var(--grid-gutter-desktop)]">
                <?php foreach ($packages as $pkg) : ?>
                    <div class="bg-white rounded-[18px] p-6">
                        <h3 class="text-[22px] text-[#47423B] mb-4"><?php echo esc_html($pkg['header']); ?></h3>
                        <p class="text-[18px] text-[#2C2C2C] mb-2"><?php echo esc_html($pkg['price']); ?></p>
                        <?php
                        // In this example, there is no separate description field.
                        // If needed, you can output additional content here.
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
}
?>

<main class="flex flex-col gap-[var(--section-spacing-mobile)] md:gap-[var(--section-spacing-desktop)]">
    <!-- Banner -->
    <?php get_template_part('template-parts/banner'); ?>

    <!-- Breadcrumb -->
    <nav class="container mx-[var(--container-margin-mobile)] md:mx-[var(--container-margin-desktop)]" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-[14px] md:text-[16px]">
            <li><a href="<?php echo esc_url(home_url()); ?>" class="text-[#47423B]">Home</a></li>
            <li><span class="text-[#47423B]">/</span></li>
            <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-[#47423B]">Services</a></li>
            <li><span class="text-[#47423B]">/</span></li>
            <li><span class="font-bold text-[#615849]" aria-current="page">Portraits</span></li>
        </ol>
    </nav>

    <!-- Main Content -->
    <div class="container mx-[var(--container-margin-mobile)] md:mx-[var(--container-margin-desktop)]">
        <div class="flex flex-col gap-[40px] md:gap-[60px]">
            <!-- Fur-ever captured -->
            <section aria-labelledby="fur-ever-heading">
                <div class="flex flex-col gap-5 md:w-1/2">
                    <h2 id="fur-ever-heading" class="text-[40px] md:text-[53.75px] text-[#47423B] lowercase">fur-ever captured in art</h2>
                    <p class="text-[16px] md:text-[18px] text-[#47423B]">
                        From mischievous grins to regal poses—your pet's personality shines in a one-of-a-kind portrait that's as unforgettable as they are!
                    </p>
                </div>
            </section>

            <!-- Picture purr-fect -->
            <section aria-labelledby="purr-fect-heading">
                <div class="flex flex-col gap-5">
                    <h2 id="purr-fect-heading" class="text-[40px] md:text-[53.75px] text-[#47423B] lowercase">
                        picture purr-fect pet portraits from snouts to TAILZ
                    </h2>
                    <div class="flex flex-col gap-5 md:w-1/2">
                        <h3 id="studio-heading" class="text-[22px] md:text-[28px] text-[#47423B] lowercase">
                            jump into the studio with your furry friend
                        </h3>
                        <p class="text-[16px] md:text-[18px] text-[#47423B]">
                            Preserve your pet's unique personality with a professional portrait session designed to showcase their charm, energy, and quirks. Unlike smartphone snapshots, our photography service uses expert lighting, composition, and patience to create stunning, frame-worthy images you'll treasure forever.
                        </p>
                    </div>
                </div>
            </section>

            <!-- The perks -->
            <section aria-labelledby="perks-heading">
                <div class="flex flex-col gap-5 md:w-1/2">
                    <h3 id="perks-heading" class="text-[22px] md:text-[28px] text-[#47423B] lowercase">
                        the perks of going professional
                    </h3>
                    <dl class="flex flex-col gap-4">
                        <div>
                            <dt class="text-[#47423B] font-bold text-[18px] inline">authentic moments:</dt>
                            <dd class="text-[#2C2C2C] text-[18px] inline">Candid shots and posed portraits that capture your pet's true self. Perfect for a keepsake.</dd>
                        </div>
                        <div>
                            <dt class="text-[#47423B] font-bold text-[18px] inline">artistic quality:</dt>
                            <dd class="text-[#2C2C2C] text-[18px] inline">High-resolution images shot with professional equipment, along with perfect lighting and editing—no awkward angles or blurry tails.</dd>
                        </div>
                        <div>
                            <dt class="text-[#47423B] font-bold text-[18px] inline">stress-free experience:</dt>
                            <dd class="text-[#2C2C2C] text-[18px] inline">Sessions tailored to your pet's comfort (treats readily available and play breaks included!).</dd>
                        </div>
                        <div>
                            <dt class="text-[#47423B] font-bold text-[18px] inline">sentimental art piece:</dt>
                            <dd class="text-[#2C2C2C] text-[18px] inline">Digital files and print options to display your favorites at home.</dd>
                        </div>
                        <div>
                            <dt class="text-[#47423B] font-bold text-[18px] inline">furry fun:</dt>
                            <dd class="text-[#2C2C2C] text-[18px] inline">Props and costumes are always on stand-by! Choose from a variety of backdrops that will make your pet pop!</dd>
                        </div>
                    </dl>
                </div>
            </section>

            <!-- Note -->
            <section aria-labelledby="note-heading" class="bg-[#F3F2EC] rounded-[20px] p-4 md:w-1/2">
                <div class="flex flex-col gap-4">
                    <h4 id="note-heading" class="font-worksans font-semibold text-[18px] text-[#47423B]">Please Note</h4>
                    <p class="font-worksans font-medium italic text-[16px] text-[#2C2C2C]">
                        Photo sessions require advanced scheduling and prepayment prior to the session.
                    </p>
                    <p class="font-worksans font-medium italic text-[16px] text-[#2C2C2C]">
                        A minimum 24-hour notice is required to reschedule any session. Late cancellations (&lt;24 hours) will result in a $50 fee.
                    </p>
                </div>
            </section>

            <!-- Portrait Packages -->
            <section aria-labelledby="packages-heading">
                <div class="flex flex-col gap-8">
                    <h2 id="packages-heading" class="text-[44.8px] md:text-[53.8px] text-[#CB93FF] lowercase md:w-1/2">portrait packages</h2>
                    
                    <div class="bg-[#F3F2EC] p-6 rounded-[20px]">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <?php 
                            $package_index = 1;
                            foreach ($packages as $package) : ?>
                                <div class="bg-white rounded-[18px] p-6">
                                    <h3 id="package-heading-<?php echo $package_index; ?>" class="text-[22px] text-[#47423B] mb-4">
                                        <?php echo esc_html($package['header']); ?>
                                    </h3>
                                    
                                    <ul class="space-y-3 mb-6" aria-labelledby="package-heading-<?php echo $package_index; ?>">
                                        <?php
                                        // The features field is a group. We'll loop through the expected keys.
                                        $features = array();
                                        if (!empty($package['features']['feature_1'])) { $features[] = $package['features']['feature_1']; }
                                        if (!empty($package['features']['feature_2'])) { $features[] = $package['features']['feature_2']; }
                                        if (!empty($package['features']['feature_3'])) { $features[] = $package['features']['feature_3']; }
                                        foreach ($features as $feature) : ?>
                                            <li class="flex items-start">
                                                <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" aria-hidden="true">
                                                    <path d="M11.2135 7.42917C12.9174 6.82501 13.8259 4.90571 13.242 3.14241C12.6589 1.37966 10.8046 0.438625 9.10038 1.0429C7.39639 1.64657 6.48785 3.56576 7.0712 5.32911C7.65484 7.09295 9.50923 8.03235 11.2135 7.42917Z" fill="#2C2C2C"/>
                                                    <path d="M5.9995 12.6826V12.6832C6.97834 11.118 6.54535 9.02784 5.03366 8.01526C3.52139 7.00322 1.50211 7.45039 0.523327 9.01505V9.01565C-0.454874 10.5803 -0.0219343 12.6699 1.48981 13.6819C3.00202 14.695 5.021 14.2473 5.9995 12.6826Z" fill="#2C2C2C"/>
                                                    <path d="M18.7856 7.42922C20.4898 8.03241 22.3442 7.09301 22.9278 5.32911C23.5111 3.56581 22.6026 1.64657 20.8987 1.0429C19.1945 0.438619 17.3401 1.37972 16.757 3.14241C16.1731 4.90576 17.0817 6.82507 18.7856 7.42922Z" fill="#2C2C2C"/>
                                                    <path d="M15.001 9.08838C9.84627 9.08838 4.15858 16.4746 5.80514 21.7301C7.39488 26.8042 12.3617 24.713 15.001 24.713C17.6403 24.713 22.6071 26.8042 24.1968 21.7301C25.8434 16.4746 20.1557 9.08838 15.001 9.08838Z" fill="#2C2C2C"/>
                                                    <path d="M29.4765 9.01565V9.01505C28.4977 7.45039 26.4785 7.00321 24.9662 8.01526C23.4545 9.02784 23.0216 11.118 24.0003 12.6832V12.6826C24.9788 14.2473 26.9978 14.6951 28.51 13.6819C30.0217 12.6699 30.4547 10.5804 29.4765 9.01565Z" fill="#2C2C2C"/>
                                                </svg>
                                                <span class="text-[18px] text-[#47423B] ml-3">
                                                    <?php echo esc_html($feature); ?>
                                                </span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>

                                    <p class="text-[22px] font-bold text-[#CB93FF]">
                                        <?php echo esc_html($package['price']); ?> / hour
                                    </p>
                                </div>
                            <?php 
                            $package_index++;
                            endforeach; ?>
                        </div>
                    </div>

                    <!-- Book Now CTA -->
                    <div class="flex justify-center">
                        <a 
                           href="<?php echo esc_url(home_url('/book-portrait')); ?>" 
                           class="inline-block bg-[#CB93FF] text-white font-poppins font-bold text-[22px] px-8 py-3 rounded-[30px] hover:bg-[#b47ee5] transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#CB93FF]"
                           aria-label="Book a portrait session now">
                            book now
                        </a>
                    </div>
                </div>
            </section>

            <!-- Requirements -->
            <section aria-labelledby="requirements-heading">
                <div class="flex flex-col gap-5 md:w-1/2">
                    <h2 id="requirements-heading" class="text-[44.8px] md:text-[53.8px] text-[#47423B] lowercase">requirements</h2>
                    <ul class="list-disc list-inside space-y-4 text-[18px] text-[#2C2C2C]">
                        <li>Only social, friendly dogs and cats are accepted. We do not take aggressive dogs.</li>
                        <li>All dogs require up-to-date vaccinations for Bordetella, Distemper/Parvovirus/Parainfluenza, and Rabies (after 6 months of age.)</li>
                        <li>Your pet must be free of ticks, fleas and worms before coming in contact with costumes or equipment.</li>
                    </ul>
                </div>
            </section>

            <!-- Example Portraits -->
            <section aria-labelledby="examples-heading">
                <div class="flex flex-col gap-8">
                    <h2 id="examples-heading" class="text-[44.8px] md:text-[53.8px] text-[#47423B] lowercase">example portraits</h2>
                    <div class="grid grid-cols-2 gap-[var(--grid-gutter-mobile)] md:grid-cols-4 md:gap-[var(--grid-gutter-desktop)]">
                        <?php
                        $portraits = [
                            ['name' => 'PEPSI', 'package' => 'Package 1'],
                            ['name' => 'TIMMY', 'package' => 'Package 2'],
                            ['name' => 'FISH & CHIPS', 'package' => 'Package 3'],
                            ['name' => 'DUKE', 'package' => 'Package 4']
                        ];
                        $portrait_index = 1;
                        foreach ($portraits as $portrait) : ?>
                            <figure class="flex flex-col gap-2">
                                <img 
                                    src="https://placehold.co/172x210" 
                                    alt="Portrait of <?php echo esc_attr($portrait['name']); ?>" 
                                    class="rounded-[12px] w-full h-[210px] md:h-[467px] object-cover"
                                    width="413"
                                    height="467"
                                    id="portrait-example-<?php echo $portrait_index; ?>"
                                >
                                <figcaption>
                                    <p class="text-[18px] text-[#47423B] uppercase">
                                        <?php echo esc_html($portrait['name']); ?>
                                    </p>
                                    <p class="text-[18px] text-[#BBBBBB]">
                                        <?php echo esc_html($portrait['package']); ?>
                                    </p>
                                </figcaption>
                            </figure>
                        <?php 
                        $portrait_index++;
                        endforeach; ?>
                    </div>
                    <div class="flex justify-center">
                        <a 
                           href="<?php echo esc_url(home_url('/gallery')); ?>" 
                           class="inline-block bg-[#CB93FF] text-white font-poppins font-bold text-[22px] px-8 py-3 rounded-[30px] hover:bg-[#b47ee5] transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#CB93FF]"
                           aria-label="View more pet portraits in our gallery">
                            view more in gallery
                        </a>
                    </div>
                </div>
            </section>

            <!-- FAQs -->
            <section aria-labelledby="faq-heading">
                <div class="flex flex-col gap-8 md:w-1/2">
                    <h2 id="faq-heading" class="text-[44.8px] md:text-[53.8px] text-[#47423B] lowercase">faqs</h2>
                    <div class="flex flex-col gap-6">
                        <?php
                        $faqs = [
                            [
                                'question' => 'Can I bring multiple pets?',
                                'answer' => 'Of course! If you will be bringing in more than 4 pets, please let us know beforehand. We recommend booking extra time you see fit for your pets if you are bringing more than 2.'
                            ],
                            [
                                'question' => 'Do you allow pets other than cats and dogs?',
                                'answer' => 'Yes, we can take pictures of any pet if they are friendly and willing to participate! If you wish to book in your non-dog or cat pet please let us know what animal your pet is before arriving. Please keep in mind that there will be cats and dogs on the property and it may be noisy.'
                            ],
                            [
                                'question' => 'Can I use my own props and costumes?',
                                'answer' => 'Yes! You can use your own costumes and bring in specific props. Only bring in props that can easily fit through doors.'
                            ]
                        ];
                        $faq_index = 1;
                        foreach ($faqs as $faq) : ?>
                            <div class="flex gap-4">
                                <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" aria-hidden="true">
                                    <path d="M11.2135 7.42917C12.9174 6.82501 13.8259 4.90571 13.242 3.14241C12.6589 1.37966 10.8046 0.438625 9.10038 1.0429C7.39639 1.64657 6.48785 3.56576 7.0712 5.32911C7.65484 7.09295 9.50923 8.03235 11.2135 7.42917Z" fill="#2C2C2C"/>
                                    <path d="M5.9995 12.6826V12.6832C6.97834 11.118 6.54535 9.02784 5.03366 8.01526C3.52139 7.00322 1.50211 7.45039 0.523327 9.01505V9.01565C-0.454874 10.5803 -0.0219343 12.6699 1.48981 13.6819C3.00202 14.695 5.021 14.2473 5.9995 12.6826Z" fill="#2C2C2C"/>
                                    <path d="M18.7856 7.42922C20.4898 8.03241 22.3442 7.09301 22.9278 5.32911C23.5111 3.56581 22.6026 1.64657 20.8987 1.0429C19.1945 0.438619 17.3401 1.37972 16.757 3.14241C16.1731 4.90576 17.0817 6.82507 18.7856 7.42922Z" fill="#2C2C2C"/>
                                    <path d="M15.001 9.08838C9.84627 9.08838 4.15858 16.4746 5.80514 21.7301C7.39488 26.8042 12.3617 24.713 15.001 24.713C17.6403 24.713 22.6071 26.8042 24.1968 21.7301C25.8434 16.4746 20.1557 9.08838 15.001 9.08838Z" fill="#2C2C2C"/>
                                    <path d="M29.4765 9.01565V9.01505C28.4977 7.45039 26.4785 7.00321 24.9662 8.01526C23.4545 9.02784 23.0216 11.118 24.0003 12.6832V12.6826C24.9788 14.2473 26.9978 14.6951 28.51 13.6819C30.0217 12.6699 30.4547 10.5804 29.4765 9.01565Z" fill="#2C2C2C"/>
                                </svg>
                                <div class="flex flex-col gap-2">
                                    <h3 id="faq-question-<?php echo $faq_index; ?>" class="text-[22px] md:text-[28px] text-[#47423B]"><?php echo esc_html($faq['question']); ?></h3>
                                    <p class="text-[18px] md:text-[22px] text-[#2C2C2C]" aria-labelledby="faq-question-<?php echo $faq_index; ?>"><?php echo esc_html($faq['answer']); ?></p>
                                </div>
                            </div>
                        <?php 
                        $faq_index++;
                        endforeach; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>