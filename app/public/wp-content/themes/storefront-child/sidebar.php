<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package storefront
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

// $product_categories = woocommerce_get_product_subcategories( 0 );

// die(print_r($product_categories));

?>

<div id="secondary" class="widget-area" role="complementary">
	
<?php woocommerce_maybe_show_product_subcategories('<li>'); ?>

</div><!-- #secondary -->
