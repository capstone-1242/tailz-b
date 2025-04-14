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
    <div class="product-image flex justify-center mb-4">
        <?php
        // Product Thumbnail (image)
        if (has_post_thumbnail()) {
            echo '<a href="' . esc_url(get_permalink()) . '">';
            the_post_thumbnail('woocommerce_thumbnail');
            echo '</a>';
        }
        ?>
    </div>

    <div class="product-details">
        <p class="product-title text-lg lg:text-[43px] text-darkbrown">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </p>

        <div class="product-price">
            <p class="text-base lg:text-3xl text-darkbrown font-bold">From <?php echo $product->get_price_html(); ?></p>
        </div>
    </div>
</div>