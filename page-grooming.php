<?php
/**
 * Template Name: Grooming
 * Description: A custom template for the Grooming page with services and FAQs
 *
 * @package tailz
 */

get_header();

// Retrieve cloned meta values and force them into arrays.
$titles       = (array) rwmb_meta( 'grooming_service_title' );
$descriptions = (array) rwmb_meta( 'grooming_service_description' );
$dog_xs       = (array) rwmb_meta( 'grooming_dog_xs' );
$dog_s        = (array) rwmb_meta( 'grooming_dog_s' );
$dog_m        = (array) rwmb_meta( 'grooming_dog_m' );
$dog_l        = (array) rwmb_meta( 'grooming_dog_l' );
$dog_xl       = (array) rwmb_meta( 'grooming_dog_xl' );
$cat_xs       = (array) rwmb_meta( 'grooming_cat_xs' );
$cat_s        = (array) rwmb_meta( 'grooming_cat_s' );
$cat_m        = (array) rwmb_meta( 'grooming_cat_m' );
$cat_l        = (array) rwmb_meta( 'grooming_cat_l' );
$cat_xl       = (array) rwmb_meta( 'grooming_cat_xl' );

// Build the services array using the cloned fields by index.
$services = [];
$total = count( $titles );
for ( $i = 0; $i < $total; $i++ ) {
    if ( empty( $titles[ $i ] ) ) {
        continue;
    }
    $services[] = [
        'service_title'       => isset( $titles[ $i ] ) ? $titles[ $i ] : '',
        'service_description' => isset( $descriptions[ $i ] ) ? $descriptions[ $i ] : '',
        'dog' => [
            'xs' => isset( $dog_xs[ $i ] ) ? $dog_xs[ $i ] : '',
            's'  => isset( $dog_s[ $i ] ) ? $dog_s[ $i ] : '',
            'm'  => isset( $dog_m[ $i ] ) ? $dog_m[ $i ] : '',
            'l'  => isset( $dog_l[ $i ] ) ? $dog_l[ $i ] : '',
            'xl' => isset( $dog_xl[ $i ] ) ? $dog_xl[ $i ] : '',
        ],
        'cat' => [
            'xs' => isset( $cat_xs[ $i ] ) ? $cat_xs[ $i ] : '',
            's'  => isset( $cat_s[ $i ] ) ? $cat_s[ $i ] : '',
            'm'  => isset( $cat_m[ $i ] ) ? $cat_m[ $i ] : '',
            'l'  => isset( $cat_l[ $i ] ) ? $cat_l[ $i ] : '',
            'xl' => isset( $cat_xl[ $i ] ) ? $cat_xl[ $i ] : '',
        ],
    ];
}

/**
 * Helper function to render a single tab (DOG or CAT) for grooming services.
 */
function render_grooming_tab( $animal, $services ) {
    $size_id = $animal . '-size';
    ?>
    <div class="tab-content hidden" id="<?php echo esc_attr( $animal ); ?>-content">
        <!-- Size Dropdown -->
        <div class="mb-4 flex items-center gap-2">
            <label for="<?php echo esc_attr( $size_id ); ?>" class="font-semibold">SIZE:</label>
            <select id="<?php echo esc_attr( $size_id ); ?>" class="border border-gray-300 px-3 py-2 rounded-full text-sm focus:outline-none">
                <option value="xs">XS</option>
                <option value="s">S</option>
                <option value="m" selected>M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
            </select>
        </div>

        <!-- Service Cards in 2x2 Layout -->
        <div class="bg-gray-100 p-4 rounded-lg mb-4">
            <div class="grid grid-cols-2 gap-4">
                <?php 
                $index = 0;
                foreach ( $services as $service ) :
                    if ( empty( $service['service_title'] ) ) {
                        continue;
                    }
                    // For the 5th item, span both columns
                    $colspan = ( $index === 4 ) ? ' col-span-2' : '';
                    $data_attrs = '';
                    $sizes = [ 'xs', 's', 'm', 'l', 'xl' ];
                    foreach ( $sizes as $size ) {
                        $data_value = isset( $service[ $animal ][ $size ] ) ? $service[ $animal ][ $size ] : '';
                        $data_attrs .= ' data-' . $animal . '-' . $size . '="' . esc_attr( $data_value ) . '"';
                    }
                ?>
                    <div class="service-card border border-gray-300 p-4 rounded-md<?php echo $colspan; ?>" <?php echo $data_attrs; ?>>
                        <h3 class="font-bold text-md"><?php echo esc_html( $service['service_title'] ); ?></h3>
                        <p class="price text-sm text-gray-700 mt-2"><?php echo isset( $service[ $animal ]['m'] ) ? esc_html( $service[ $animal ]['m'] ) : ''; ?></p>
                        <p class="description text-sm mt-2"><?php echo esc_html( $service['service_description'] ); ?></p>
                        <!-- Use grooming_service_description for the includes text -->
                        <p class="includes text-sm mt-2">Includes: <?php echo esc_html( $service['service_description'] ); ?></p>
                    </div>
                <?php 
                    $index++;
                endforeach;
                ?>
            </div>
        </div>

        <!-- Book Appointment CTA -->
        <div class="mb-6 flex justify-center">
            <a href="#" class="inline-block border border-black text-black text-sm font-bold px-6 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition">
                BOOK AN APPOINTMENT
            </a>
        </div>
    </div>
    <?php
}
?>

<div class="flex flex-col gap-[var(--section-spacing-mobile)] md:gap-[var(--section-spacing-desktop)]">
    <!-- Banner -->
    <section class="flex flex-col gap-3">
        <div class="relative h-[15.375rem] md:h-[31.25rem] w-full overflow-hidden">
            <?php
                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if($featured_image_url) : ?>
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url($featured_image_url); ?>')"></div>
                <?php endif; ?>
                <div class="container flex flex-col absolute inset-0 justify-end my-[43px] md:my-[90px]">
                    <h1 class="font-poppins font-bold text-[53.75px] md:text-[120px] text-white">grooming</h1>
                    <p class="uppercase text-[18px] md:text-[22px] text-white">Pamper your pet from head to Tailz</p>
                </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container mx-[var(--container-margin-mobile)] md:mx-[var(--container-margin-desktop)]">
        <nav class="flex items-center space-x-2 text-[14px] md:text-[16px]">
            <a href="<?php echo home_url(); ?>" class="text-[#47423B]">HOME</a>
            <span class="text-[#47423B]">/</span>
            <a href="<?php echo home_url('/services'); ?>" class="text-[#47423B]">SERVICES</a>
            <span class="text-[#47423B]">/</span>
            <span class="font-bold text-[#615849]">GROOMING</span>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="container mx-[var(--container-margin-mobile)] md:mx-[var(--container-margin-desktop)]">
        <div class="flex flex-col gap-[40px] md:gap-[60px]">
            <!-- Intro -->
            <section class="flex flex-col gap-5 md:gap-8 md:w-1/2">
                <h2 class="text-[22px] md:text-[32px] text-[#47423B]">grooming to furfection</h2>
                <div class="flex flex-col gap-4 md:gap-6">
                    <p class="text-[18px] md:text-[22px] text-[#2C2C2C]">At Tailz, we believe that grooming is more than just a bath and haircut. Our experienced pet stylists are committed to providing your furry friend with a stress-free, enjoyable experience that leaves them looking and feeling their best.</p>
                    <p class="text-[18px] md:text-[22px] text-[#2C2C2C]">We understand that every pet is unique, which is why we take the time to listen to your preferences and provide personalized grooming services. Whether you're looking for a simple bath and brush or a complete makeover, we'll work with you to achieve the perfect look for your pet.</p>
                </div>
            </section>

            <!-- Options and Prices -->
            <section class="flex flex-col gap-8 md:gap-12">
                <h2 class="text-[22px] md:text-[32px] text-[#FF6A6A] md:w-1/2">options and prices</h2>
                
                <!-- Cards section spans full width on desktop -->
                <div class="bg-[#F3F2EC] p-6 md:p-12 rounded-[20px] w-full">
                    <!-- ... existing card content ... -->

                    <!-- Note and CTA -->
                    <div class="flex flex-col items-center gap-6 md:gap-8 mt-8 md:mt-12">
                        <p class="font-worksans font-medium italic text-[18px] md:text-[22px] text-[#2C2C2C] text-center max-w-[600px]">Please review our booking policies prior to scheduling your next appointment</p>
                        <a href="#" class="inline-block bg-[#CB93FF] text-white font-poppins font-bold text-[22px] md:text-[26px] px-8 py-3 rounded-[30px] hover:bg-[#B670FF] transition-colors">book an appointment</a>
                    </div>
                </div>
            </section>

            <!-- Booking Policies -->
            <section class="flex flex-col gap-5 md:gap-8 md:w-1/2">
                <h2 class="text-[22px] md:text-[32px] text-[#47423B]">our booking policies</h2>
                <ul class="list-disc list-inside space-y-4 md:space-y-6 text-[18px] md:text-[22px] text-black">
                    <li>One pet per appointment slot. If you have multiple pets, please book separate appointments.</li>
                    <li>If your pup is larger or smaller than described at booking, we may need to reschedule to ensure proper time allocation.</li>
                    <li>Please arrive 5 minutes before your appointment to ensure a smooth check-in process.</li>
                    <li>Late arrivals may result in reduced service time or a $15 fee to maintain our schedule.</li>
                    <li>24-hour notice required for cancellations or rescheduling to avoid a $50 fee.</li>
                    <li>No-shows will be charged the full service amount.</li>
                </ul>
            </section>

            <!-- FAQs -->
            <section class="flex flex-col gap-8 md:gap-12 md:w-1/2">
                <h2 class="text-[22px] md:text-[32px] text-[#47423B]">faqs</h2>
                <div class="flex flex-col gap-6 md:gap-8">
                    <?php
                    $faqs = [
                        [
                            'question' => 'What grooming services do you offer?',
                            'answer' => 'We offer a comprehensive range of services including baths, haircuts, nail trimming, ear cleaning, and specialized treatments. Each service can be customized to your pet\'s needs.'
                        ],
                        [
                            'question' => 'How do I know what type of grooming my pet needs?',
                            'answer' => 'Our professional groomers will assess your pet\'s coat type, condition, and your preferences to recommend the best grooming package. We\'re happy to discuss options during check-in.'
                        ],
                        [
                            'question' => 'How long does a grooming session take?',
                            'answer' => 'Session length varies depending on the service, your pet\'s size, coat condition, and behavior. Basic baths typically take 1-2 hours, while full grooms may take 2-4 hours.'
                        ]
                    ];

                    foreach($faqs as $faq) : ?>
                        <div class="flex gap-4 md:gap-6">
                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-[30px] h-[26px] md:w-[34px] md:h-[30px]">
                                <path d="M11.2135 7.42917C12.9174 6.82501 13.8259 4.90571 13.242 3.14241C12.6589 1.37966 10.8046 0.438625 9.10038 1.0429C7.39639 1.64657 6.48785 3.56576 7.0712 5.32911C7.65484 7.09295 9.50923 8.03235 11.2135 7.42917Z" fill="#2C2C2C"/>
                                <path d="M5.9995 12.6826V12.6832C6.97834 11.118 6.54535 9.02784 5.03366 8.01526C3.52139 7.00322 1.50211 7.45039 0.523327 9.01505V9.01565C-0.454874 10.5803 -0.0219343 12.6699 1.48981 13.6819C3.00202 14.695 5.021 14.2473 5.9995 12.6826Z" fill="#2C2C2C"/>
                                <path d="M18.7856 7.42922C20.4898 8.03241 22.3442 7.09301 22.9278 5.32911C23.5111 3.56581 22.6026 1.64657 20.8987 1.0429C19.1945 0.438619 17.3401 1.37972 16.757 3.14241C16.1731 4.90576 17.0817 6.82507 18.7856 7.42922Z" fill="#2C2C2C"/>
                                <path d="M15.001 9.08838C9.84627 9.08838 4.15858 16.4746 5.80514 21.7301C7.39488 26.8042 12.3617 24.713 15.001 24.713C17.6403 24.713 22.6071 26.8042 24.1968 21.7301C25.8434 16.4746 20.1557 9.08838 15.001 9.08838Z" fill="#2C2C2C"/>
                                <path d="M29.4765 9.01565V9.01505C28.4977 7.45039 26.4785 7.00321 24.9662 8.01526C23.4545 9.02784 23.0216 11.118 24.0003 12.6832V12.6826C24.9788 14.2473 26.9978 14.6951 28.51 13.6819C30.0217 12.6699 30.4547 10.5804 29.4765 9.01565Z" fill="#2C2C2C"/>
                            </svg>
                            <div class="flex flex-col gap-2 md:gap-3">
                                <h3 class="font-poppins font-bold text-[22px] md:text-[26px] text-[#47423B]"><?php echo $faq['question']; ?></h3>
                                <p class="text-[18px] md:text-[22px] text-[#2C2C2C]"><?php echo $faq['answer']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </div>
</div>

<?php
get_footer();
