<?php

// Hide dashboard update notifications for all users
function kinsta_hide_update_nag()
{
    remove_action('admin_notices', 'update_nag', 3);
}

add_action('admin_menu', 'kinsta_hide_update_nag');


// remove jquery-core
function remove_jquery_core()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}

// remove wp emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
// remove wp embed
function my_deregister_scripts()
{
    wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');
// remove wp version
remove_action('wp_head', 'wp_generator');
// remove wp json
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('template_redirect', 'rest_output_link_header', 11);
// remove wp oembed
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
// remove wp shortlink
remove_action('wp_head', 'wp_shortlink_wp_head');
// remove wp rss
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// remove wp sitemap
remove_action('wp_head', 'wp_sitemaps_index');
remove_action('wp_head', 'wp_sitemaps_posts_index');

// disable query author from anoymous user
if (!is_admin()) {
    // default URL format
    if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) {
        header('Location: /', true, 301);
        exit();
    }
    add_filter('redirect_canonical', 'shapeSpace_check_enum', 10, 2);
}
function shapeSpace_check_enum($redirect, $request)
{
    // permalink URL format
    if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) {
        header('Location: /', true, 301);
        exit();
    } else
        return $redirect;
}
// disable xmlrpc
add_filter('xmlrpc_enabled', '__return_false');
// disable xmlrpc pingback
add_filter('wp_headers', 'disable_pingback_header');
function disable_pingback_header($headers)
{
    unset($headers['X-Pingback']);
    return $headers;
}
// disable xmlrpc pingback
add_filter('xmlrpc_methods', 'remove_xmlrpc_pingback');
function remove_xmlrpc_pingback($methods)
{
    unset($methods['pingback.ping']);
    return $methods;
}
// remove wp-block-library-css
add_action('wp_print_styles', 'wps_deregister_styles', 100);
function wps_deregister_styles()
{
    wp_dequeue_style('wp-block-library');
}
// remove global-styles-inline-css
add_action('wp_print_styles', 'wps_deregister_styles_global', 100);
function wps_deregister_styles_global()
{
    wp_dequeue_style('global-styles');
}

// remove classic-theme-styles-inline-css
add_action('wp_print_styles', 'wps_deregister_styles_classic', 100);
function wps_deregister_styles_classic()
{
    wp_dequeue_style('classic-theme-styles');
}

// remove rsd_link
remove_action('wp_head', 'rsd_link');

// remove jquery
add_action('wp_enqueue_scripts', 'remove_jquery');
function remove_jquery()
{
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
}


// remove menu in admin: post, page, comment, link, tag, category, plugin, theme, user, tools, settings
function remove_menus()
{
    // check if user is khanhfe
    $user = wp_get_current_user();
    if ($user->user_login !== 'khanhfe') {
        remove_menu_page('edit.php');
        remove_menu_page('edit.php?post_type=page');
        remove_menu_page('edit-comments.php');
        remove_menu_page('link-manager.php');
        remove_menu_page('edit-tags.php?taxonomy=post_tag');
        remove_menu_page('edit-tags.php?taxonomy=category');

        remove_menu_page('themes.php');
        remove_menu_page('users.php');
        remove_menu_page('tools.php');
        
        remove_menu_page('edit.php?post_type=acf-field-group');
    }
}
add_action('admin_menu', 'remove_menus');

// allow upload svg
function cc_mime_types($mimes)
{
    // Chỉ cho phép Admin upload SVG để tránh rủi ro bảo mật
    if (current_user_can('manage_options')) {
        $mimes['svg'] = 'image/svg+xml';
    }
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
