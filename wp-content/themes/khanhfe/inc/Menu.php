<?php

/**
 * Author: khanhfe <khanhfe2020@gmail.com>
 * Last Edited: 26 April 2021
 * Edited By: khanhfe
 */
/** Custom Menus */
register_nav_menus(array(
    'main-menu' => 'Main Menu',
));

// thay doi class menu li.menu-item thanh nav-item 
add_filter('nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2);
function add_my_class_to_nav_menu($classes, $item)
{
    $classes[] = 'nav-item';
    return $classes;
}