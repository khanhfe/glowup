<?php

/**
 * Author: khanhfe <khanhfe2020@gmail.com>
 * Last Edited: 08 April 2024
 * Edited By: khanhfe
 */

define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());
define('THEME_ASSETS', THEME_URI . '/assets');
define('ADMIN_AJAX_URL', admin_url('admin-ajax.php'));
define('HOME_URL', home_url('/'));
define('FAVICON', THEME_ASSETS . '/images/favicon.png');
define('FAVICON_ADMIN', THEME_URI . '/inc/assets/images/favicon.png');
define('LOGO_LOGIN_ADMIN', THEME_URI . '/inc/assets/images/logo-admin.png');
define('LOGO_LOGIN_ADMIN_W', THEME_URI . '/inc/assets/images/logo-admin-w.svg');
define('SCREEN_SHOT', THEME_URI . '/screenshot.png?v=' . date('dmY'));
define('NOT_IMAGE', THEME_ASSETS . '/images/image-placeholder.png');
define('FACEBOOK_APP_ID', '');
define('PLACEHOLDER', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC');

require_once('inc/Optimize.php');
require_once('inc/Admin.php');
require_once('inc/Menu.php');
require_once('inc/contact-form/FormAjax.php');
$formCommon = new FormCommon();

class MainCore
{
    private static $_instance = null;
    function __construct()
    {
        add_action('after_setup_theme', array($this, 'afterSetupTheme'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }
    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function afterSetupTheme()
    {
        load_theme_textdomain('corex', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
    public function enqueue()
    {
        //libs css
        // wp_enqueue_style('wow', THEME_URI . '/assets/css/animate.min.css');
        wp_enqueue_style('styles', THEME_URI . '/style.css');
        //libs js
        // wp_enqueue_script('wow', THEME_URI . '/assets/js/wow.min.js', array('jquery'), false, true);
        wp_enqueue_script('validator', THEME_URI . '/assets/js/scripts/form-validation.min.js', array(), false, true);
        wp_enqueue_script('scripts', THEME_URI . '/assets/js/scripts/scripts.min.js', array(), false, true);
        $wp_script_data = array(
            'AJAX_URL' => ADMIN_AJAX_URL,
            'HOME_URL' => HOME_URL
        );
        wp_localize_script('scripts', 'obj', $wp_script_data);
    }
}
MainCore::instance();


if (!function_exists('pll__')) {
    function pll__($text)
    {
        return $text;
    }
}

if (!function_exists('pll_e')) {
    function pll_e($text)
    {
        echo $text;
    }
}

if (!function_exists('pll_get_post')) {
    function pll_get_post($post_id, $slug = '')
    {
        return $post_id;
    }
}

if (!function_exists('pll_register_string')) {
    function pll_register_string($name, $string, $group = 'theme')
    {
        return $string;
    }
}

if (!function_exists('get_field')) {
    function get_field($field)
    {
        return '';
    }
}

