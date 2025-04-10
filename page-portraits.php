<?php
/**
 * Template Name: Photos
 * Description: A custom template for the "Photos" (Portraits) page, displaying photoshoot packages with Dog/Cat tabs using Meta Box.
 *
 * @package tailz
 */

get_header();

// 1) Retrieve the cloned fields and cast to arrays.
$dog_titles       = (array) rwmb_meta( 'photos_dog_title' );
$dog_prices       = (array) rwmb_meta( 'photos_dog_price' );
$dog_descriptions = (array) rwmb_meta( 'photos_dog_desc' );

$cat_titles       = (array) rwmb_meta( 'photos_cat_title' );
$cat_prices       = (array) rwmb_meta( 'photos_cat_price' );
$cat_descriptions = (array) rwmb_meta( 'photos_cat_desc' );

// 2) Build dog packages array
$dog_packages = [];
$dog_total = count( $dog_titles );
for ( $i = 0; $i < $dog_total; $i++ ) {
    if ( empty( $dog_titles[ $i ] ) ) {
        continue;
    }
    $dog_packages[] = [
        'title' => $dog_titles[ $i ],
        'price' => isset( $dog_prices[ $i ] ) ? $dog_prices[ $i ] : '',
        'desc'  => isset( $dog_descriptions[ $i ] ) ? $dog_descriptions[ $i ] : '',
    ];
}

// 3) Build cat packages array
$cat_packages = [];
$cat_total = count( $cat_titles );
for ( $i = 0; $i < $cat_total; $i++ ) {
    if ( empty( $cat_titles[ $i ] ) ) {
        continue;
    }
    $cat_packages[] = [
        'title' => $cat_titles[ $i ],
        'price' => isset( $cat_prices[ $i ] ) ? $cat_prices[ $i ] : '',
        'desc'  => isset( $cat_descriptions[ $i ] ) ? $cat_descriptions[ $i ] : '',
    ];
}

/**
 * Helper function for tab content
 */
function render_portrait_tab($animal, $packages) {
    ?>
    <div class="tab-content hidden" id="<?php echo esc_attr($animal); ?>-content">
        <div class="bg-gray-100 p-4 rounded-lg mb-4">
            <div class="grid grid-cols-1 gap-4">
                <?php foreach ($packages as $pkg) : ?>
                    <div class="border border-gray-300 p-4 rounded-md">
                        <h3 class="font-bold text-md"><?php echo esc_html($pkg['title']); ?></h3>
                        <p class="price text-sm text-gray-700 mt-2"><?php echo esc_html($pkg['price']); ?></p>
                        <p class="description text-sm mt-2"><?php echo esc_html($pkg['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
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
                        <p class="uppercase text-white text-[18px]">Professional pet pictures</p>
                    </div>
            </div>
        </section>

        <!-- Fur-ever captured in art -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Enriching doggy daycare</h2>
                <p class="text-[18px] text-[#2C2C2C]">Our daycare program is thoughtfully designed to create a unique experience for your pup. We are different from your typical dpoggy daycare, and that starts first with understanding dog behavior. This allows us to create an environtment in which your pup gets appropriate exercise, enrichment, socialization, and rest.</p>
                <p class="text-[18px] text-[#2C2C2C]">Our daycare schedule includes a variety of training, games, and activities specifically chosen to enrich your pet's life and ensure they have the best time.</p>
            </div>
        </section>
</div>

<?php
get_footer();
?>