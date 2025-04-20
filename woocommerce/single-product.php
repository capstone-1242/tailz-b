<?php

/**
 * Template Name: Simplified single product view.
 * Description: A custom product view.
 * 
 * @package tailz
 */

defined('ABSPATH') || exit;

global $product;

if (!$product || !is_a($product, 'WC_Product')) {
    $product = wc_get_product(get_the_ID());
}

if (post_password_required()) {
    echo get_the_password_form();
    return;
}

get_header();
?>

<?php while (have_posts()) : ?>
    <?php the_post(); ?>

    <?php wc_get_template_part('content'); ?>

<?php endwhile; // end of the loop. 
?>



<div class="mx-[24px] lg:mx-[90px] py-[20px] lg:py-[30px]">

    <div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
        <!-- Breadcrumbs -->
        <div>
            <?php
            if (function_exists('woocommerce_breadcrumb')) {
                woocommerce_breadcrumb();
            }
            ?>
        </div>
        <!-- Product -->
        <div class="my-[80px] grid grid-cols-1 md:grid-cols-2 gap-[20px] md:gap-[32px]">
            <div>
                <!-- Product Image -->
                <div class="product-image">
                    <?php echo $product->get_image('woocommerce_single', ['class' => 'w-full rounded-xl']); ?>
                </div>
            </div>

            <!-- Product Info -->
            <div class="flex flex-col gap-6">

                <!-- Title -->
                <h1 class="normal-case text-brown text-3xl/[1.2] lg:text-[56px] font-semibold"><?php the_title(); ?></h1>

                <!-- Price -->
                <div class="flex gap-2 items-center">
                    <p class="text-md lg:text-2xl text-darkbrown">From:</p>
                    <?php
                    echo '<p class="text-xl lg:text-3xl text-darkblue font-bold">' . $product->get_price_html() . '</p>';
                    ?>
                </div>

                <!-- Stock Quantity -->
                <div>
                    <?php
                    $stock_quantity = $product->get_stock_quantity();
                    if ($product->is_in_stock()) {
                        // If the product is in stock, display stock quantity or a message
                        if ($stock_quantity > 0) {
                            echo '<p class="text-base text-darkbrown font-bold">In stock: ' . $stock_quantity . ' available</p>';
                        } else {
                            echo '<p class="text-base text-darkbrown font-bold">In stock: Limited stock available</p>';
                        }
                    } else {
                        // If the product is out of stock
                        echo '<p class="text-base text-darkbrown font-bold">Out of stock</p>';
                    }
                    ?>
                </div>

                <!-- Variations / Add to Cart -->
                <div>
                    <?php if ($product->is_type('variable')) : ?>
                        <form class="variations_form cart space-y-8 text-lg" method="post" enctype='multipart/form-data'>
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </form>
                    <?php else : ?>
                        <?php woocommerce_template_single_add_to_cart(); ?>
                    <?php endif; ?>
                </div>

                <!-- Description -->
                <div class="prose max-w-none">
                    <h2 class="lowercase text-lightbrown text-xl lg:text-2xl mb-2">Description</h2>
                    <p class="text-darkbrown font-worksans"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>