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


    <div class="product-details">
        <p class="product-title text-lg lg:text-3xl/[1.2] text-darkbrown pb-2 lg:pb-4">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </p>

        <div class="product-price">
            <p class="text-base lg:text-2xl text-darkbrown font-bold">From <?php echo $product->get_price_html(); ?></p>
        </div>
    </div>
</div>