<?php

/**
 * Simple product add to cart
 *
 * @package tailz
 * 
 */

defined('ABSPATH') || exit;

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button">
    <?php do_action('woocommerce_before_add_to_cart_button'); ?>

    <?php
    do_action('woocommerce_before_add_to_cart_quantity');

    woocommerce_quantity_input(
        array(
            'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
            'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
            'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
        )
    );

    do_action('woocommerce_after_add_to_cart_quantity');
    ?>

    <button type="submit" class="single_add_to_cart_button alt rounded-full bg-orange text-white hover:shadow-md focus:outline-none focus:ring-2 focus:ring-darkbrown font-poppins lowercase font-bold text-lg lg:text-2xl px-6 py-2.5<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>

    <?php do_action('woocommerce_after_add_to_cart_button'); ?>

    <input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
    <input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>" />
    <input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>