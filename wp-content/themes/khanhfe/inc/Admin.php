<?php

/**
 * Author: khanhfe <khanhfe2020@gmail.com>
 * Last Edited: 08 April 2024
 * Edited By: khanhfe
 */

/**
 * edit logo login
 */
function custom_type_admin()
{ ?>
    <style type="text/css">
        #login h1 a {
            background-image: url('<?php echo LOGO_LOGIN_ADMIN; ?>');
            width: 100px;
            height: 100px;
            background-size: contain;
            background-position: center;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'custom_type_admin');

/**
 * edit href logo login wp.org -> home_url('/');
 */
add_filter('login_headerurl', 'login_logo_url');
function login_logo_url()
{
    return HOME_URL;
}


function khanhfe_admin_footer($text)
{
    $text = '<p id="footer-left" class="alignleft">
                <span>
                    Email: <a href="mailto:khanhfe2020@gmail.com">khanhfe2020@gmail.com</a> | phone: <a href="tel:0389021327">0389 021 327</a>
                </span>
                <br>
                <br>
                <span>
                    Copyright © 2025 by <a href="https://khanhtre.vn">khanhtre.vn</a>. All rights reserved
                </span> 
            </p>';
    return $text;
}
add_filter('admin_footer_text', 'khanhfe_admin_footer');

/**
 * remove wp bar login
 */
function example_admin_bar_remove_logo()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'example_admin_bar_remove_logo', 0);


?>