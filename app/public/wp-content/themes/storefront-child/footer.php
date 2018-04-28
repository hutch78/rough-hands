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

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer class="site-footer">
        
        <div class="container">
            <div class="site-footer__inner">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/footer-blades.svg" alt="" class="site-footer__icon">
                <div class="site-footer__col contact-col">
                    <h5 class="site-footer__col__heading">Contact</h5>
                    <address class="mb-1">
                        Rough Hands Barber Shop<br />
                        8 Walton City<br />
                        Imperial beach<br />
                        Wa 574311
                    </address>
                    <a href="tel:71452107757" class="footer-link">7-(145)210-7757</a>
                    <a href="mailto:heyguys@rough-hands.com" class="footer-link">heyguys@rough-hands.com</a>
                </div>
                <div class="site-footer__col">
                    <h5 class="site-footer__col__heading">Page</h5>
                   <ul class="menu-footer-navigation">
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">Store</a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">Contact</a>
                        </li>
                   </ul>
                </div>
                <div class="site-footer__col">
                    <h5 class="site-footer__col__heading">Various</h5>
                   <ul class="menu-footer-navigation">
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">FAQ</a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">Legal</a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">Pricing</a>
                        </li>
                   </ul>
                </div>
                <div class="site-footer__col">
                    <h5 class="site-footer__col__heading">Social</h5>
                   <ul class="menu-footer-navigation">
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">Facebook</a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">Instagram</a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">Pinterest</a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php bloginfo('url'); ?>">Grease Monkeys</a>
                        </li>
                   </ul>
                </div>
            </div>
        </div>
        
    
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>