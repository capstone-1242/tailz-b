<?php
/**
 * Template Name: Grooming
 * Description: Grooming page that uses Meta Box for prices and descriptions.
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


</div>

<?php
    get_footer();
?>