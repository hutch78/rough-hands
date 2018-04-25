<?php
 /**
* Custom Login Screen
*/
function rough_hands_custom_login() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/includes/login/login-styles.css" />';
}
add_action('login_head', 'rough_hands_custom_login');

 /**
* Make logo go to our home page instead of wordpress's
*/
function rough_hands_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'rough_hands_login_logo_url' );