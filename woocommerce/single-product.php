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
                    <p class="text-lg lg:text-2xl text-darkbrown">From:</p>
                    <?php
                    if ($product->is_type('variable')) {
                        $variable_product = new WC_Product_Variable($product->get_id());
                        $available_variations = $variable_product->get_available_variations();

                        if (!empty($available_variations)) {
                            $first_variation = current($available_variations);
                            $first_price = wc_price($first_variation['display_price']);
                    ?>
                            <p id="custom-dynamic-price"
                                data-default-price="<?php echo esc_attr($first_price); ?>"
                                class="text-xl lg:text-3xl text-blue font-semibold">
                                <?php echo $first_price; ?>
                            </p>
                    <?php
                        }
                    } else {
                        echo '<p class="text-xl lg:text-3xl text-blue font-semibold">' . $product->get_price_html() . '</p>';
                    }
                    ?>
                </div>

                <!-- Stock Quantity -->
                <div>
                    <?php
                    $stock_quantity = $product->get_stock_quantity();
                    if ($product->is_in_stock()) {
                        // If the product is in stock, display stock quantity or a message
                        if ($stock_quantity > 0) {
                            echo '<p class="text-sm text-green-600">In stock: ' . $stock_quantity . ' available</p>';
                        } else {
                            echo '<p class="text-sm text-yellow-500">In stock: Limited stock available</p>';
                        }
                    } else {
                        // If the product is out of stock
                        echo '<p class="text-sm text-red-500">Out of stock</p>';
                    }
                    ?>
                </div>

                <!-- Description -->
                <div class="prose max-w-none">
                    <?php the_content(); ?>
                </div>

                <!-- Attributes -->
                <div class="text-sm text-gray-700 space-y-1">
                    <?php
                    $attributes = $product->get_attributes();
                    if (!empty($attributes)) {
                        foreach ($attributes as $attribute) {
                            $name = wc_attribute_label($attribute->get_name());
                            $options = wc_get_product_terms($product->get_id(), $attribute->get_name(), ['fields' => 'names']);
                            echo '<p><strong>' . esc_html($name) . ':</strong> ' . implode(', ', $options) . '</p>';
                        }
                    }
                    ?>
                </div>

                <!-- Variations / Add to Cart -->
                <div>
                    <?php if ($product->is_type('variable')) : ?>
                        <form class="variations_form cart space-y-4" method="post" enctype='multipart/form-data'>
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </form>
                    <?php else : ?>
                        <?php woocommerce_template_single_add_to_cart(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>