<?php

/**
 * Author: khanhfe <khanhfe2020@gmail.com>
 * Last Edited: 08 April 2024
 * Edited By: khanhfe
 */

/**
 * navigation core
 * @method paginate_custom_ulli()
 * @param object $custom_query
 * @return array|string|void
 */
function wp_paginate_custom_ulli($custom_query = null)
{
    if (is_singular()) {
        return;
    }
    global $wp_query;

    if ($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;

    if ($main_query->max_num_pages <= 1) {
        return;
    }
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($main_query->max_num_pages);

    if ($paged >= 1) {
        $links[] = $paged;
    }

    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="pagination-common"> <ul class="paginate_links">' . "\n";
    if (get_previous_post_link()) {
        printf('<li class="prev">%s</li>' . "\n", get_previous_posts_link('<'));
    }

    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="is--active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
        if (!in_array(2, $links)) {
            echo '<li>...</li>';
        }
    }

    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="is--active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li>...</li>' . "\n";
        }

        $class = $paged == $max ? ' class="is--active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }
    if (get_next_posts_link()) {
        printf('<li class="next">%s</li>' . "\n", get_next_posts_link('>'));
    }
    echo '</ul> </div>' . "\n";
}

/**
 * code phan trang ajax
 * @method wp_paginate_paged_ajax()
 * @param object $custom_query
 * @param int $page
 * @return array|string|void
 */
function wp_paginate_paged_ajax($custom_query = null, $paged = 1)
{
    global $wp_query, $wp_rewrite;
    if ($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $big = 999999999;
    $total = isset($main_query->max_num_pages) ? $main_query->max_num_pages : '';
    if ($total > 1) echo '<div class="paginate_links">';
    echo paginate_links(array(
        'base'        => trailingslashit(home_url()) . "{$wp_rewrite->pagination_base}/%#%/",
        'format'   => '?paged=%#%',
        'current'  => max(1, $paged),
        'total'    => $total,
        'mid_size' => '3',
        'prev_text'    => __('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path d="M6.84179 4.82764V4.67764H6.99179H7.53876H7.68876V4.82764C7.68876 6.83224 6.6298 8.59007 5.03934 9.57782H17.9312H18.0812V9.72782V10.2723V10.4223H17.9312H5.03934C6.6298 11.41 7.68876 13.1679 7.68876 15.1725V15.3225H7.53876H6.99179H6.84179V15.1725C6.84179 12.5497 4.70563 10.4223 2.06908 10.4223H1.91908V10.2723V9.72782V9.57782H2.06908C4.70563 9.57782 6.84179 7.45044 6.84179 4.82764Z" fill="#242B35" stroke="#242B35" stroke-width="0.3"/>
      </svg>', 'devvn'),
        'next_text'    => __('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path d="M13.1582 4.82764V4.67764H13.0082H12.4612H12.3112V4.82764C12.3112 6.83224 13.3702 8.59007 14.9607 9.57782H2.06885H1.91885V9.72782V10.2723V10.4223H2.06885H14.9607C13.3702 11.41 12.3112 13.1679 12.3112 15.1725V15.3225H12.4612H13.0082H13.1582V15.1725C13.1582 12.5497 15.2944 10.4223 17.9309 10.4223H18.0809V10.2723V9.72782V9.57782H17.9309C15.2944 9.57782 13.1582 7.45044 13.1582 4.82764Z" fill="#242B35" stroke="#242B35" stroke-width="0.3"/>
      </svg>', 'next'),
    ));
    if ($total > 1) echo '</div>';
};

//Code phan trang
/**
 * code phan trang ajax
 * @method wp_paginate_paged()
 * @param object $custom_query
 * @param int $page
 * @return array|string|void
 */
function wp_paginate_paged($custom_query = null, $paged = null)
{
    global $wp_query;
    if ($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $paged = ($paged) ? $paged : get_query_var('paged');
    $big = 999999999;
    $total = isset($main_query->max_num_pages) ? $main_query->max_num_pages : '';
    if ($total > 1) echo '<div class="paginate_links">';
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'total' => $total,
        'mid_size' => '10',
        'prev_text'    => __('<', 'devvn'),
        'next_text'    => __('>', 'next'),
    ));
    if ($total > 1) echo '</div>';
}
