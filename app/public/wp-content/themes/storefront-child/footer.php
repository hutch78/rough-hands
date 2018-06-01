<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

    <?php 
        $store_location = wc_get_base_location();
        $WC_Countries = new WC_Countries();
    ?>
	<?php do_action( 'storefront_before_footer' ); ?>

	<footer class="site-footer">
        
        <div class="container pr-lg-7">
            <div class="site-footer__inner">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/footer-blades.svg" alt="" class="site-footer__icon">
                <div class="site-footer__col contact-col">
                    <h5 class="site-footer__col__heading">Contact</h5>
                    <address class="mb-1">
                        <?php bloginfo('title'); ?><br />
                        <?php echo $WC_Countries->get_base_address(); ?><br />
                        <?php echo $WC_Countries->get_base_city(); ?><br />
                        <?php echo $WC_Countries->get_base_state(); ?> <?php echo $WC_Countries->get_base_postcode(); ?>
                    </address>
                    <a href="tel:71452107757" class="footer-link">7-(145)210-7757</a>
                    <a href="mailto:heyguys@rough-hands.com" class="footer-link">heyguys@rough-hands.com</a>
                </div>
                <div class="site-footer__col">
                    <h5 class="site-footer__col__heading">Page</h5>

                    <?php wp_nav_menu(array(
                        'theme_location'	=> 'footer_page_nav',
                        'menu_class'		=> 'menu-footer-navigation'
                    )); ?>
                
                </div>
                <div class="site-footer__col">
                    <h5 class="site-footer__col__heading">Various</h5>
                    <?php wp_nav_menu(array(
                        'theme_location'	=> 'footer_various_nav',
                        'menu_class'		=> 'menu-footer-navigation'
                    )); ?>
                </div>
                <div class="site-footer__col">
                    <h5 class="site-footer__col__heading">Social</h5>
                    <?php wp_nav_menu(array(
                        'theme_location'	=> 'footer_social_nav',
                        'menu_class'		=> 'menu-footer-navigation'
                    )); ?>
                </div>
            </div>
        </div>
        
    
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>