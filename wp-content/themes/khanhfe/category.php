<?php


get_header();
$category = get_queried_object();
$category_id = $category->term_id;
$category_name = $category->name;
$category_slug = $category->slug;
$category_description = $category->description;
$category_link = get_term_link($category_id, 'category');


// query posts in this category
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'paged' => $paged,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $category_slug,
        ),
    ),
);
$posts = new WP_Query($args);

?>
<link href="<?= THEME_ASSETS ?>/css/bread-crumb.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= THEME_ASSETS ?>/css/news.css" rel="stylesheet" type="text/css" media="all" />
<section class="bread-crumb">
    <div class="container">
        <ul class="breadcrumb">
            <li class="home">
                <a href="<?= HOME_URL ?>" title=" Trang chủ">
                    <span>Trang chủ</span>
                </a>
            </li>
            <li>
                <strong><?= $category_name ?></strong>
            </li>
        </ul>
    </div>
</section>
<div class="blog-padding">
    <div class="container margin-top-30">
        <div class="head">
            <h2 class="heading"><?= $category_name ?></h2>
        </div>
        <div class="list-news row">
            <?php

            if ($posts->have_posts()): ?>
                <?php
                while ($posts->have_posts()) :
                    $posts->the_post();


                ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 news-item">
                        <div class="item_blog_base">
                            <div class="block-thumb">
                                <a class="thumb" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                    <img src="<?= get_the_post_thumbnail_url() ?>" data-src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" class="lazy img-responsive loaded" data-was-processed="true">
                                </a>
                            </div>
                            <div class="content_blog clearfix">
                                <h3><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="a-title"><?php the_title() ?></a></h3>

                                <p>
                                    <?= get_the_excerpt() ?>
                                </p>

                                <div class="time-post">
                                    <span class="author">
                                        <svg viewBox="0 0 1792 1792">
                                            <path d="M1600 1405q0 120-73 189.5t-194 69.5h-874q-121 0-194-69.5t-73-189.5q0-53 3.5-103.5t14-109 26.5-108.5 43-97.5 62-81 85.5-53.5 111.5-20q9 0 42 21.5t74.5 48 108 48 133.5 21.5 133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5t-271.5 112.5-271.5-112.5-112.5-271.5 112.5-271.5 271.5-112.5 271.5 112.5 112.5 271.5z"></path>
                                        </svg>
                                        <?php the_author(); ?>
                                    </span>
                                    <span class="icon posted">
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
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: echo '<p>No posts found.</p>'; ?>
            <?php endif; ?>

        </div>
        <div class="text-xs-right text-center pagging-css margin-top-10">
            <nav class="text-center">
                <?php wp_paginate_paged($posts) ?>
            </nav>
        </div>
    </div>
</div>
<?php
get_footer()
?>