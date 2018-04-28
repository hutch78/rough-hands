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
	
<?php wp_nav_menu(
	array(
		'theme_location'	=> 'categories_nav',
		'container_class'	=> 'rh-categories-list-wrapper',
		'menu_class'		=> 'rh-categories-list'
	)
); ?>

</div><!-- #secondary -->
