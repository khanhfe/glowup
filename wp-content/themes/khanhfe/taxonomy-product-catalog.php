<?php


get_header();
$category = get_queried_object();
$category_id = $category->term_id;
$category_name = $category->name;
$category_slug = $category->slug;
$category_description = $category->description;
$category_link = get_term_link($category_id, 'product-catalog');


// query posts in this category
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 10,
    'paged' => $paged,
    'tax_query' => array(
        array(
            'taxonomy' => 'product-catalog',
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
        <div class="list-product row d-flex flex-wrap ">
            <?php
            if ($posts->have_posts()): ?>
                <?php
                while ($posts->have_posts()) :
                    $posts->the_post();

                    $image1 = get_field('image1', get_the_ID()) ? get_field('image1', get_the_ID()) : '';
                    $image2 = get_field('image2', get_the_ID()) && !empty(get_field('image2', get_the_ID())) ? get_field('image2', get_the_ID()) : '';
                    $brand = get_field('brand', get_the_ID()) ? get_field('brand', get_the_ID()) : '';
                    $price = get_field('price', get_the_ID()) ? get_field('price', get_the_ID()) : '';
                    $compare_price = get_field('compare_price', get_the_ID()) ? get_field('compare_price', get_the_ID()) : '';

                    $product = [
                        'image1' => $image1,
                        'image2' => $image2,
                        'product_name' => get_the_title(),
                        'brand' => $brand,
                        'price' => $price,
                        'compare_price' => $compare_price,
                        'is_flash_sale' => true,
                    ];

                    echo '<div class=" flashsale__item">';
                    get_template_part('template-parts/home/product-item', null, [
                        'data' => $product,
                        'is_flash_sale' => true,
                    ]);
                    echo '</div>';
                ?>
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