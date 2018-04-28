<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


/**
* Register new custom nav menus
*/
require('includes/login/rough-hands-custom-login.php');

 /**
* Register new custom nav menus
*/
register_nav_menus([
	'left_side_nav' => "Left Side Navigation",
	'right_side_nav' => "Right Side Navigation",
]);

/**
* Show the product title in the product loop. By default this is an H2.
*/
function woocommerce_template_loop_product_title() {
    echo get_the_title();
}

/**
 * Get the add to cart template for the loop.
 *
 * @param array $args Arguments.
 */
function woocommerce_template_loop_add_to_cart( $args = array() ) {
    global $product;

    if ( $product ) {
        $defaults = array(
            'quantity'   => 1,
            'class'      => implode( ' ', array_filter( array(
                'btn',
                'btn-outline-dark',
                'product_type_' . $product->get_type(),
                $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                $product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
            ) ) ),
            'attributes' => array(
                'data-product_id'  => $product->get_id(),
                'data-product_sku' => $product->get_sku(),
                'aria-label'       => $product->add_to_cart_description(),
                'rel'              => 'nofollow',
            ),
        );

        $args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );

        wc_get_template( 'loop/add-to-cart.php', $args );
    }
}

// Change 'add to cart' text on archive product page
add_filter( 'woocommerce_product_add_to_cart_text', 'rough_hands_archive_add_to_cart_text' );
function rough_hands_archive_add_to_cart_text() {
        return 'Reserve';
}