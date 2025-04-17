<?php

/**
 * Template Name: Shop
 * Description: A custom WooCommerce shop page.
 *
 * @package tailz
 */

defined('ABSPATH') || exit; // Exit if accessed directly

global $product;
?>

<div class="product-item col-span-1">
    <div class="w-full max-w-[150px] md:max-w-[200px] mx-auto">
        <?php
        if (has_post_thumbnail()) {
            echo '<a href="' . esc_url(get_permalink()) . '" class="block ">'; // fixed square size
            the_post_thumbnail('woocommerce_thumbnail', [
                'class' => 'w-full h-full object-contain'
            ]);
            echo '</a>';
        }
        ?>
    </div>

    <!-- Product Info -->
    <div class="product-details">

        <!-- Title -->
        <p class="product-title text-lg lg:text-3xl/[1.2] text-darkbrown pb-2 lg:pb-4">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </p>

        <!-- Price -->
        <div class="flex gap-2 items-center">
            <p class="text-md lg:text-xl text-darkbrown">From:</p>
            <?php
            if ($product->is_type('variable')) {
                // Get the minimum price for variable products
                $min_price = $product->get_variation_price('min');

                // Display only the minimum price (first price)
                echo '<span class="text-base lg:text-2xl text-darkbrown font-bold">' . wc_price($min_price) . '</span>';
            } else {
                echo '<p class="text-base lg:text-2xl text-darkbrown font-bold">' . $product->get_price_html() . '</p>';
            }
            ?>
        </div>
    </div>
</div>