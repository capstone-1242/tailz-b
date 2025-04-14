<?php

/**
 * Template Name: Shop
 * Description: A custom WooCommerce shop page.
 *
 * @package tailz
 */

get_header();

// Banner
get_template_part('template-parts/banner');

// Check for the filter parameter
$pet_filter = isset($_GET['pet']) ? sanitize_text_field($_GET['pet']) : '';
$pet_filter = $pet_filter ? $pet_filter : 'dog';

// Build the base query args
$args = [
    'post_type'      => 'product',
    'posts_per_page' => 8, // Adjust if need be
];

// If a pet filter is set, add a tax_query filter
if ($pet_filter && in_array($pet_filter, ['dog', 'cat'])) {
    $args['tax_query'] = [
        [
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $pet_filter,
        ],
    ];
}

// Run the query
$products_query = new WP_Query($args);
?>

<div>
    <!-- FEATURED Section (Using the filtered query) -->
    <section class="mb-10">
        <h2 class="lowercase text-brown text-lg font-bold mb-4">FEATURED</h2>
        <div class="grid grid-cols-2 gap-4">
            <?php
            if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : $products_query->the_post();
                    global $product;
            ?>
                    <div class="bg-gray-100 p-4 rounded flex flex-col h-full">
                        <a href="<?php the_permalink(); ?>" class="block mb-2">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="w-full h-40 overflow-hidden">
                                    <?php the_post_thumbnail('thumbnail', ['class' => 'w-full h-full object-cover']); ?>
                                </div>
                            <?php else : ?>
                                <div class="bg-gray-300 w-full h-40"></div>
                            <?php endif; ?>
                        </a>
                        <div class="flex flex-col flex-grow">
                            <div class="text-left">
                                <p class="text-sm font-bold"><?php the_title(); ?></p>
                                <p class="text-sm text-gray-600"><?php echo $product->get_price_html(); ?></p>
                            </div>
                            <!-- Custom Add to Cart Button -->
                            <form action="<?php echo esc_url($product->add_to_cart_url()); ?>" method="post" class="mt-auto self-end">
                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>"
                                    class="border border-black text-black text-sm font-bold px-3 py-1 rounded shadow-md hover:bg-black hover:text-white transition">
                                    + ADD
                                </button>
                            </form>
                        </div>
                    </div>
            <?php endwhile;
            else :
                echo '<p class="col-span-2 text-center text-gray-500">No products found.</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>

    <!-- Pet Filter Tabs -->
    <section class="bg-cream mb-6">
        <!-- SHOP BY PET as tab-like links -->
        <div class="flex items-center space-x-4">
            <a href="<?php echo esc_url(add_query_arg('pet', 'dog')); ?>"
                class="border border-black text-black text-sm font-bold px-4 py-2 rounded-full shadow-md transition flex items-center gap-2 <?php echo ($pet_filter === 'dog' || $pet_filter === '') ? 'bg-black text-white' : 'hover:bg-black hover:text-white'; ?>">
                <!-- Dog Icon Placeholder -->
                <div class="bg-gray-300 w-4 h-4"></div>
                DOG
            </a>
            <a href="<?php echo esc_url(add_query_arg('pet', 'cat')); ?>"
                class="border border-black text-black text-sm font-bold px-4 py-2 rounded-full shadow-md transition flex items-center gap-2 <?php echo ($pet_filter === 'cat') ? 'bg-black text-white' : 'hover:bg-black hover:text-white'; ?>">
                <!-- Cat Icon Placeholder -->
                <div class="bg-gray-300 w-4 h-4"></div>
                CAT
            </a>
        </div>
    </section>

    <!-- SHOP ALL Section -->
    <section class="mb-10">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">SHOP ALL</h2>
            <button class="border border-black text-black text-sm font-bold px-4 py-2 rounded-full shadow-md hover:bg-black hover:text-white transition">
                FILTER
            </button>
        </div>

        <?php

        $all_args = [
            'post_type'      => 'product',
            'posts_per_page' => 8,
        ];
        if ($pet_filter && in_array($pet_filter, ['dog', 'cat'])) {
            $all_args['tax_query'] = [
                [
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => $pet_filter,
                ],
            ];
        }
        $all_loop = new WP_Query($all_args);

        if ($all_loop->have_posts()) :
        ?>
            <div class="grid grid-cols-2 gap-4 mb-6">
                <?php
                while ($all_loop->have_posts()) : $all_loop->the_post();
                    global $product;
                ?>
                    <div class="bg-gray-100 p-4 rounded flex flex-col h-full">
                        <a href="<?php the_permalink(); ?>" class="block mb-2">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="w-full h-40 overflow-hidden">
                                    <?php the_post_thumbnail('thumbnail', ['class' => 'w-full h-full object-cover']); ?>
                                </div>
                            <?php else : ?>
                                <div class="bg-gray-300 w-full h-40"></div>
                            <?php endif; ?>
                        </a>
                        <div class="flex flex-col flex-grow">
                            <div class="text-left">
                                <p class="text-sm font-bold"><?php the_title(); ?></p>
                                <p class="text-sm text-gray-600"><?php echo $product->get_price_html(); ?></p>
                            </div>
                            <form action="<?php echo esc_url($product->add_to_cart_url()); ?>" method="post" class="mt-auto self-end">
                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>"
                                    class="border border-black text-black text-sm font-bold px-3 py-1 rounded shadow-md hover:bg-black hover:text-white transition">
                                    + ADD
                                </button>
                            </form>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php
        else :
            echo '<p class="col-span-2 text-center text-gray-500">No products found.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </section>

    <!-- Fake Pagination-->
    <section class="text-center">
        <p class="text-sm text-gray-600">PAGE 1 – 40</p>
    </section>
</div>

<?php get_footer(); ?>