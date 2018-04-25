<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="container px-lg-0 d-lg-flex justify-content-lg-between">
			<?php wp_nav_menu(
				array(
					'theme_location'	=> 'left_side_nav',
					'container_class'	=> 'left-side-nav',
					'menu_class'		=> 'site-header__nav'
					)
			); ?>
			<a href="<?php bloginfo('url'); ?>" class="site-header__logo-wrapper d-block">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/logo-rough-hands.png" alt="" class="site-header__logo">
			</a>
			<?php wp_nav_menu(
				array(
					'theme_location'	=> 'right_side_nav',
					'container_class'	=> 'right-side-nav',
					'menu_class'		=> 'site-header__nav'
				)
			); ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
