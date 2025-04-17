<?php

/**
 * Template Name: Shop Categories
 * Description: A custom WooCommerce shop page.
 *
 * @package tailz
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

// Check for the filter parameters
$brand_filter  = $_GET['brands'] ?? [];
$food_filter   = $_GET['foods'] ?? [];
$treat_filter  = $_GET['treats'] ?? [];
$supply_filter = $_GET['supplies'] ?? [];

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
);

$tax_query = [];

// Ensure we're filtering only within the current category
if (is_product_category()) {
    $category = get_queried_object();

    // Filter products based on the current category
    if ($category) {
        $tax_query[] = array(
            'taxonomy' => 'product_cat',
            'field'    => 'id',
            'terms'    => $category->term_id,
            'operator' => 'IN',
        );
    }
}

// Add filter conditions based on the GET parameters
if (!empty($brand_filter)) {
    $tax_query[] = array(
        'taxonomy' => 'product_brand',
        'field'    => 'slug',
        'terms'    => $brand_filter,
        'operator' => 'IN',
    );
}

if (!empty($food_filter)) {
    $tax_query[] = array(
        'taxonomy' => 'food',
        'field'    => 'slug',
        'terms'    => $food_filter,
        'operator' => 'IN',
    );
}

if (!empty($treat_filter)) {
    $tax_query[] = array(
        'taxonomy' => 'treat',
        'field'    => 'slug',
        'terms'    => $treat_filter,
        'operator' => 'IN',
    );
}

if (!empty($supply_filter)) {
    $tax_query[] = array(
        'taxonomy' => 'supply',
        'field'    => 'slug',
        'terms'    => $supply_filter,
        'operator' => 'IN',
    );
}

// If tax queries are set, append them to the main query args
if (!empty($tax_query)) {
    $args['tax_query'] = array('relation' => 'AND') + $tax_query;
}

// If we are on a product category page, filter by that category
if (is_product_category()) {
    $category = get_queried_object();
    $args['tax_query'][] = array(
        'taxonomy' => 'product_cat',
        'field'    => 'id',
        'terms'    => $category->term_id,
        'operator' => 'IN',
    );
}

// Execute the query
$query = new WP_Query($args); ?>

<div class="my-[20px] lg:my-[30px]">
    <!-- Breadcrumbs -->
    <nav class="border-b-2 border-cream mx-[24px] lg:mx-[90px] pb-[20px] lg:pb-[30px]" aria-label="Breadcrumb">
        <ol class="flex items-center font-worksans text-[14px] md:text-[16px] text-darkbrown">
            <li>
                <a href="<?php echo home_url(); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                    Home
                </a>
            </li>
            <li class="mx-2" aria-hidden="true">/</li>
            <li aria-current="page">
                <a href="<?php echo home_url('/shop'); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                    Shop
                </a>
            </li>
            <li class="mx-2" aria-hidden="true">/</li>
            <li>
                <span class="uppercase font-bold"><?php single_term_title(); ?></span>
            </li>
        </ol>
    </nav>
    <!-- Shop Category -->
    <section class="px-[24px] pt-[20px] mb-[20px] lg:px-[90px] lg:pt-[60px] lg:mb-[30px]">
        <h2 class="lowercase text-brown text-4xl mb-[20px] lg:text-7xl lg:mb-[30px]"><?php single_term_title(); ?></h2>
        <button id="shop-filter-btn" class="md:hidden bg-blue text-white text-lg font-poppins rounded-full font-bold px-[40px] py-[6px] mb-8 lowercase hover:bg-darkblue">Filter</button>
    </section>
    <!-- Filter and Shop -->
    <section class="px-[24px] lg:px-[90px] md:flex md:gap-[70px]">
        <!-- Filters -->
        <div id="filter-menu-shop" class="hidden md:block min-w-[300px]">
            <div class="flex justify-between items-center">
                <div class="flex justify-between items-center md:flex-1 py-7">
                    <h3 class="lowercase mr-4 text-lightbrown text-3xl lg:text-[42px]">Filter <?php single_term_title(); ?></h3>
                    <button id="clear-all-shop" class="text-darkbrown text-base lg:text-2xl">Clear All</button>
                </div>
                <svg id="filter-close-btn" class="md:hidden md:absolute" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.201172" y="20" width="28" height="4" transform="rotate(-45 0.201172 20)" fill="#47423B" />
                    <rect x="3.20117" width="28" height="4" transform="rotate(45 3.20117 0)" fill="#47423B" />
                </svg>
            </div>
            <form method="GET" id="filter-form" class="w-full max-w-md mb-10 lg:mb-14">
                <!-- Brands -->
                <div class="w-full max-w-md mb-[20px] lg:mb-[30px]">
                    <div class="border-b-2 border-cream pb-6 lg:pb-8 mb-6 lg:mb-10">
                        <h4 class="lowercase text-brown text-2xl lg:text-3xl font-bold mb-4">Brand</h4>
                        <div class="flex flex-wrap gap-3">
                            <?php
                            $brands = get_terms(array(
                                'taxonomy'   => 'product_brand',
                                'hide_empty' => false,
                            ));

                            $selected_brands = $_GET['brands'] ?? [];

                            foreach ($brands as $brand) :
                                $slug = esc_attr($brand->slug);
                                $id = 'brand_' . $slug;
                                $checked = in_array($slug, (array) $selected_brands);
                            ?>
                                <input
                                    type="checkbox"
                                    name="brand[]"
                                    value="<?php echo $slug; ?>"
                                    id="<?php echo $id; ?>"
                                    class="hidden"
                                    <?php checked($checked); ?> />
                                <label
                                    for="<?php echo $id; ?>" aria-pressed="<?php echo $checked ? 'true' : 'false'; ?>" class="bg-cream text-darkbrown font-poppins font-bold text-sm lg:text-base uppercase rounded-full px-6 py-2.5 cursor-pointer transition-colors">
                                    <?php echo esc_html($brand->name); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Food -->
                <div class="w-full max-w-md mb-[20px] lg:mb-[30px]">
                    <div class="border-b-2 border-cream pb-6 lg:pb-8 mb-6 lg:mb-10">
                        <h4 class="lowercase text-brown text-2xl lg:text-3xl font-bold mb-4">Food</h4>
                        <div class="flex flex-wrap gap-3">
                            <?php
                            $foods = get_terms(array(
                                'taxonomy'   => 'food',
                                'hide_empty' => false,
                            ));

                            $selected_foods = $_GET['foods'] ?? [];

                            foreach ($foods as $food) :
                                $slug = esc_attr($food->slug);
                                $id = 'food_' . $slug;
                                $checked = in_array($slug, (array) $selected_foods);
                            ?>
                                <input
                                    type="checkbox"
                                    name="foods[]"
                                    value="<?php echo $slug; ?>"
                                    id="<?php echo $id; ?>"
                                    class="hidden"
                                    <?php checked($checked); ?> />
                                <label
                                    for="<?php echo $id; ?>" aria-pressed="<?php echo $checked ? 'true' : 'false'; ?>" class="bg-cream text-darkbrown font-poppins font-bold text-sm lg:text-base uppercase rounded-full px-6 py-2.5 cursor-pointer transition-colors">
                                    <?php echo esc_html($food->name); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Treats -->
                <div class="w-full max-w-md mb-[20px] lg:mb-[30px]">
                    <div class="border-b-2 border-cream pb-6 lg:pb-8 mb-6 lg:mb-10">
                        <h4 class="lowercase text-brown text-2xl lg:text-3xl font-bold mb-4">Treats</h4>
                        <div class="flex flex-wrap gap-3">
                            <?php
                            $treats = get_terms(array(
                                'taxonomy'   => 'treat',
                                'hide_empty' => false,
                            ));

                            $selected_treats = $_GET['treats'] ?? [];

                            foreach ($treats as $treat) :
                                $slug = esc_attr($treat->slug);
                                $id = 'treat_' . $slug;
                                $checked = in_array($slug, (array) $selected_treats);
                            ?>
                                <input
                                    type="checkbox"
                                    name="treats[]"
                                    value="<?php echo $slug; ?>"
                                    id="<?php echo $id; ?>"
                                    class="hidden"
                                    <?php checked($checked); ?> />
                                <label
                                    for="<?php echo $id; ?>" aria-pressed="<?php echo $checked ? 'true' : 'false'; ?>" class="bg-cream text-darkbrown font-poppins font-bold text-sm lg:text-base uppercase rounded-full px-6 py-2.5 cursor-pointer transition-colors">
                                    <?php echo esc_html($treat->name); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Supplies -->
                <div class="w-full max-w-md mb-[20px] lg:mb-[30px]">
                    <div class="border-b-2 border-cream pb-6 lg:pb-8 mb-6 lg:mb-10">
                        <h4 class="lowercase text-brown text-2xl lg:text-3xl font-bold mb-4">Supplies</h4>
                        <div class="flex flex-wrap gap-3">
                            <?php
                            $supplies = get_terms(array(
                                'taxonomy'   => 'supply',
                                'hide_empty' => false,
                            ));

                            $selected_supplies = $_GET['supplies'] ?? [];

                            foreach ($supplies as $supply) :
                                $slug = esc_attr($supply->slug);
                                $id = 'supply_' . $slug;
                                $checked = in_array($slug, (array) $selected_supplies);
                            ?>
                                <input
                                    type="checkbox"
                                    name="supplies[]"
                                    value="<?php echo $slug; ?>"
                                    id="<?php echo $id; ?>"
                                    class="hidden"
                                    <?php checked($checked); ?> />
                                <label
                                    for="<?php echo $id; ?>" aria-pressed="<?php echo $checked ? 'true' : 'false'; ?>" class="bg-cream text-darkbrown font-poppins font-bold text-sm lg:text-base uppercase rounded-full px-6 py-2.5 cursor-pointer">
                                    <?php echo esc_html($supply->name); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <!-- Products -->
        <div>
            <div class="products grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <?php
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        wc_get_template_part('content', 'product'); // Loads content-product.php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-brown">No products found.</p>';
                endif;
                ?>
            </div>
    </section>
</div>

<?php get_footer(); ?>