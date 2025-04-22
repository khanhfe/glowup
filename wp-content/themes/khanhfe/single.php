<?php
get_header();


// query related post by id post 
$post_id = get_the_ID();
$related_posts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 6,
    'post__not_in' => array($post_id),
    'orderby' => 'rand',

]);


// get link category by id post
$category = get_the_category($post_id);
$category_id = $category[0]->term_id;
$category_name = $category[0]->name;
$category_link = get_term_link($category_id, 'category');
?>
<link href="<?= THEME_ASSETS ?>/css/bread-crumb.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= THEME_ASSETS ?>/css/article.css" rel="stylesheet" type="text/css" media="all" />
<section class="bread-crumb">
    <div class="container">
        <ul class="breadcrumb">
            <li class="home">
                <a href="<?= HOME_URL ?>" title="Trang chủ">
                    <span>Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="<?= $category_link ?>" title="<?= $category_name ?>">
                    <span><?= $category_name ?></span>
                </a>
            </li>
            <li>
                <strong><?php the_title() ?></strong>
            </li>
        </ul>
    </div>
</section>
<div class="container article-wraper">
    <div class="row">
        <div class="col-md-12 col-lg-8 col-xl-9 order-lg-2">
            <div class="nd-article margin-bottom-10">
                <h1 class="title-head"><?php the_title() ?></h1>
                <div class="blog-item-author">
                    <span>
                        <svg viewBox="0 0 1792 1792">
                            <path d="M1600 1405q0 120-73 189.5t-194 69.5h-874q-121 0-194-69.5t-73-189.5q0-53 3.5-103.5t14-109 26.5-108.5 43-97.5 62-81 85.5-53.5 111.5-20q9 0 42 21.5t74.5 48 108 48 133.5 21.5 133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5t-271.5 112.5-271.5-112.5-112.5-271.5 112.5-271.5 271.5-112.5 271.5 112.5 112.5 271.5z"></path>
                        </svg>
                        <?php
                        // get author name by id post 
                        $author_id = $post->post_author;
                        the_author_meta('user_nicename', $author_id);
                        ?>
                    </span>
                    <span>
                        <svg viewBox="0 0 24 24">
                            <rect height="2" width="2" x="5" y="8"></rect>
                            <rect height="2" width="2" x="9" y="8"></rect>
                            <rect height="2" width="2" x="13" y="8"></rect>
                            <rect height="2" width="2" x="17" y="8"></rect>
                            <rect height="2" width="2" x="5" y="11"></rect>
                            <rect height="2" width="2" x="9" y="11"></rect>
                            <rect height="2" width="2" x="13" y="11"></rect>
                            <rect height="2" width="2" x="17" y="11"></rect>
                            <rect height="2" width="2" x="5" y="14"></rect>
                            <rect height="2" width="2" x="9" y="14"></rect>
                            <rect height="2" width="2" x="13" y="14"></rect>
                            <rect height="2" width="2" x="17" y="14"></rect>
                            <rect height="2" width="2" x="5" y="17"></rect>
                            <rect height="2" width="2" x="9" y="17"></rect>
                            <rect height="2" width="2" x="13" y="17"></rect>
                            <path d="M20,1H16V4H14V3.37A1.37,1.37,0,0,0,12.63,2H11.37A1.37,1.37,0,0,0,10,3.37V4H8V1H4A3,3,0,0,0,1,4V20a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V4A3,3,0,0,0,20,1Zm1,19a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H6V6H18V3h2a1,1,0,0,1,1,1Z"></path>
                        </svg>
                        <?= get_the_date('d/m/Y') ?>
                    </span>
                </div>
                <div class="article-details nd-toc-content">
                    <?php the_content() ?>
                </div>
            </div>
            <div class="nd-article-toolbar d-none">
                <div class="nd-article-toolbar-left clearfix">
                    <span class="nd-article-toolbar-head">Bạn đang xem: </span>
                    <span class="nd-article-toolbar-title" title="<?php the_title() ?>"><?php the_title() ?></span>
                </div>
                <div class="nd-article-toolbar-right">
                    <a href="" title="Bài trước">
                        <svg class="Icon Icon--select-arrow-left" viewBox="0 0 11 18">
                            <path d="M9.5 1.5L1.5 9l8 7.5" stroke-width="2" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                        </svg>Bài trước
                    </a> <a href="" title="Bài sau">
                        Bài sau<svg class="Icon Icon--select-arrow-right" viewBox="0 0 11 18">
                            <path d="M1.5 1.5l8 7.5-8 7.5" stroke-width="2" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
        <div class="col-md-12 col-lg-4 col-xl-3 blog-sidebar order-lg-1">
            <div class="article-dm">
                <div class="aside-title">Danh mục</div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => '',
                    'menu_class' => 'navbar-pills nav-category',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ));
                ?>
            </div>
            <div class="article-lq">
                <div class="aside-title">
                    <a href="tin-tuc" title="Bài viết liên quan">Bài viết liên quan</a>
                </div>
                <div class="nd-list-blogs clearfix">
                    <?php

                    if ($related_posts->have_posts()): ?>
                        <?php
                        while ($related_posts->have_posts()) :
                            $related_posts->the_post();


                        ?>

                            <article class="has-post-thumbnail clearfix">
                                <div class="qodef-e-media-image">
                                    <a class="thumb" href="<?php the_permalink() ?>" title="<?php the_title() ?>"> <img src="<?= get_the_post_thumbnail_url() ?>" data-src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" class="lazy img-responsive mx-auto d-block loaded" data-was-processed="true"> </a>
                                </div>
                                <div class="qodef-e-content">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($) {
        $('.menu-item-has-children ').append('<span class="Collapsible__Plus"></span>');
    });
</script>
<?php
get_footer()
?>