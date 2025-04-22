<?php
get_header();


// query related post by id post
$post_id = get_the_ID();
$related_posts = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 6,
    'post__not_in' => array($post_id),
    'orderby' => 'rand',

]);


// get link taxonomy by id post
$taxonomy = get_the_terms($post_id, 'product-catalog');
$taxonomy_id = $taxonomy[0]->term_id;
$category_name = $taxonomy[0]->name;
$category_link = get_term_link($taxonomy_id, 'product-catalog');

$product_code = get_field('product_code', $post_id) ? get_field('product_code', $post_id) : '';
$brand = get_field('brand', $post_id) ? get_field('brand', $post_id) : '';
$gallery = get_field('gallery', $post_id) ? get_field('gallery', $post_id) : [];
$return_policy = get_field('return_policy', $post_id) ? get_field('return_policy', $post_id) : '';
$brand_introduction = get_field('brand_introduction', $post_id) ? get_field('brand_introduction', $post_id) : '';
$detail = get_field('detail', $post_id) ? get_field('detail', $post_id) : '';
$brand = get_field('brand', $post_id) ? get_field('brand', $post_id) : '';
$price = get_field('price', $post_id) ? get_field('price', $post_id) : '';
$compare_price = get_field('compare_price', $post_id) ? get_field('compare_price', $post_id) : '';



?>
<link href="<?= THEME_ASSETS ?>/css/bread-crumb.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= THEME_ASSETS ?>/css/article.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= THEME_ASSETS ?>/css/detail-product.css" rel="stylesheet" type="text/css" media="all" />
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
<div class="container margin-top-30">
    <div class="details-product">
        <div class="row">
            <div class="product-detail-left product-images col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="product-image-detail relative">
                    <div class="product-image-block relative">
                        <div class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" id="lightgallery">
                                <?php if ($gallery): ?>
                                    <?php foreach ($gallery as $image): ?>
                                        <a class="swiper-slide" href="<?= esc_url($image) ?>" title="Click để xem">
                                            <img height="540" width="540" src="<?= esc_url($image) ?>" alt="<?php the_title() ?>" data-image="<?= esc_url($image) ?>" class="img-responsive mx-auto d-block lazy loading" data-was-processed="true">
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif ?>
                            </div>
                            <div class="swiper-button-next swiper-button-disabled">
                            </div>
                            <div class="swiper-button-prev">
                            </div>
                        </div>
                        <div class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs">
                            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                <?php if ($gallery): ?>
                                    <?php foreach ($gallery as $image): ?>
                                        <div class="swiper-slide swiper-slide-active swiper-slide-visible">
                                            <div class="p-100">
                                                <img height="80" width="80" src="<?= esc_url($image) ?>" alt="<?php the_title() ?>" data-image="<?= esc_url($image) ?>" class="lazy loading" data-was-processed="true">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif ?>

                            </div>
                            <div class="swiper-button-next swiper-button-disabled">
                            </div>
                            <div class="swiper-button-prev swiper-button-disabled">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="details-pro col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="wrapright-content">
                    <h1 class="title-head"><?php the_title() ?></h1>

                    <div class="sapo-product-reviews-badge" data-id="29867725" onclick="scrollToxx();"></div>

                    <div class="product-top clearfix">

                        <div class="sku-product clearfix">
                            <span itemprop="brand" itemtype="http://schema.org/Brand" itemscope="">
                                <meta itemprop="name" content="<?= $brand ?>">Thương hiệu: <strong><?= $brand ?></strong>
                            </span>
                            <span class="variant-sku" itemprop="sku" content="<?= $product_code ?>">Mã: <strong><?= $product_code ?></strong></span>

                        </div>
                    </div>
                    <div class="group-power">

                        <div class="inventory_quantity d-none">


                            <span class="a-stock a1">
                                <link itemprop="availability" href="http://schema.org/InStock">Còn hàng
                            </span>


                        </div>
                        <div class="price-box clearfix">

                            <span class="special-price">
                                <span class="price product-price"><?= is_numeric($price) ? number_format($price, 0, '', '.') : $price ?>₫</span>
                            </span> <!-- Giá Khuyến mại -->
                            <span class="old-price">
                                <del class="price product-price-old">
                                    <?= is_numeric($compare_price) ? number_format($compare_price, 0, '', '.') : $compare_price; ?>₫
                                </del>
                            </span> <!-- Giás gốc -->
                            <span class="save-price">
                                (Tiết kiệm: <span class="price product-price-save"><?= is_numeric($compare_price) && is_numeric($price)  ? number_format($compare_price - $price, 0, '', '.') : ''  ?>₫</span>)
                            </span> <!-- Tiết kiệm -->

                        </div>
                    </div>


                    <form enctype="multipart/form-data" id="add-to-cart-form" data-cart-form="" action="/cart/add" method="post" class="wishItem">
                        <div class="form-product">

                            <div class="box-variant clearfix  d-none ">

                                <input type="hidden" id="one_variant" name="variantId" value="83130126">

                            </div>


                            <div class="product-trustbadge">
                                <span class="title-menu">Phương thức thanh toán</span>
                                <div class="product-trustbadge my-3">
                                    <ul>

                                        <li>
                                            <a href="#" target="_blank">
                                                <img height="40" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/trustbadge_1.jpg?1743735157458" data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/trustbadge_1.jpg?1743735157458" alt="Lofi Cosmetic" data-was-processed="true">
                                            </a>
                                        </li>


                                        <li>
                                            <a href="#" target="_blank">
                                                <img height="40" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/trustbadge_2.jpg?1743735157458" data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/trustbadge_2.jpg?1743735157458" alt="Lofi Cosmetic" data-was-processed="true">
                                            </a>
                                        </li>


                                        <li>
                                            <a href="#" target="_blank">
                                                <img height="40" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/trustbadge_3.jpg?1743735157458" data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/trustbadge_3.jpg?1743735157458" alt="Lofi Cosmetic" data-was-processed="true">
                                            </a>
                                        </li>


                                        <li>
                                            <a href="#" target="_blank">
                                                <img height="40" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/trustbadge_4.jpg?1743735157458" data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/trustbadge_4.jpg?1743735157458" alt="Lofi Cosmetic" data-was-processed="true">
                                            </a>
                                        </li>


                                        <li>
                                            <a href="#" target="_blank">
                                                <img height="40" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/trustbadge_5.jpg?1743735157458" data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/trustbadge_5.jpg?1743735157458" alt="Lofi Cosmetic" data-was-processed="true">
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </div>

                            <div class="product-policises-wrapper">
                                <ul class="product-policises list-unstyled row">

                                    <li class="media col-12">
                                        <div class="mr-3">
                                            <img width="32" height="32" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_1.png?1743735157458" data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_1.png?1743735157458" alt="Giao hàng toàn quốc" data-was-processed="true">
                                        </div>
                                        <div class="media-body">
                                            Giao hàng toàn quốc
                                        </div>
                                    </li>


                                    <li class="media col-12">
                                        <div class="mr-3">
                                            <img width="32" height="32" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_2.png?1743735157458" data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_2.png?1743735157458" alt="Tích điểm tất cả sản phẩm" data-was-processed="true">
                                        </div>
                                        <div class="media-body">
                                            Tích điểm tất cả sản phẩm
                                        </div>
                                    </li>


                                    <li class="media col-12">
                                        <div class="mr-3">
                                            <img width="32" height="32" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_3.png?1743735157458" data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_3.png?1743735157458" alt="Miễn phí vận chuyển đơn từ 80k" data-was-processed="true">
                                        </div>
                                        <div class="media-body">
                                            Miễn phí vận chuyển đơn từ 80k
                                        </div>
                                    </li>


                                    <li class="media col-12">
                                        <div class="mr-3">
                                            <img width="32" height="32" class="lazy img-responsive loaded" src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_4.png?1743735157458" data-src="//bizweb.dktcdn.net/100/473/812/themes/889220/assets/policises_4.png?1743735157458" alt="Cam kết chính hãng" data-was-processed="true">
                                        </div>
                                        <div class="media-body">
                                            Cam kết chính hãng
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="product-right col-12 col-xl-2">

            </div> -->
        </div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="product-tab e-tabs not-dqtab">
                    <ul class="tabs tabs-title clearfix">

                        <li class="tab-link current" data-tab="tab-1">
                            <span>Thông tin chi tiết</span>
                        </li>


                        <li class="tab-link" data-tab="tab-2">
                            <span>Thương hiệu</span>
                        </li>


                        <li class="tab-link" data-tab="tab-3">
                            <span>Chính sách đổi trả</span>
                        </li>

                    </ul>

                    <div class="tab-1 tab-content content_extab current">
                        <div class="rte product_getcontent">
                            <div class="ba-text-fpt has-height">
                                <?= $detail ?>
                            </div>
                            <div class="show-more">
                                <div class="btn btn-default btn--view-more">
                                    <span class="more-text">Xem thêm <i class="fa fa-chevron-down"></i></span>
                                    <span class="less-text">Thu gọn <i class="fa fa-chevron-up"></i></span>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="tab-2 tab-content content_extab">
                        <div class="rte">
                            <?= $brand_introduction ?>
                        </div>
                    </div>


                    <div class="tab-3 tab-content content_extab">
                        <div class="rte">
                            <?= $return_policy ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section_prd_feature swiper_related recommend">
                    <div class="head">
                        <h2 class="heading">
                            <a href="/cham-soc-co-the" title="Sản phẩm tương tự">
                                Sản phẩm tương tự
                            </a>
                        </h2>
                    </div>
                    <div class="products product_related recent-recommend swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">

                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <?php
                            if ($related_posts->have_posts()): ?>
                                <?php
                                while ($related_posts->have_posts()) :
                                    $related_posts->the_post();

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

                                    echo '<div class="swiper-slide flashsale__item">';
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

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($) {


        $('.tabs-title li').on('click', function(e) {
            $('.tabs-title li, .tab-content').removeClass('current');
            $(this).addClass('current');
            $('.' + $(this).data('tab') + '').addClass('current');

            var active = $(this);
            var left = active.position().left;
            var currScroll = $(this).parent('.tabs-title').scrollLeft();
            var contWidth = $(this).parent('.tabs-title').width() / 2;
            var activeOuterWidth = active.outerWidth() / 2;
            left = left + currScroll - contWidth + activeOuterWidth;

            $(this).parent('.tabs-title').animate({
                scrollLeft: left
            }, 'slow');
        });



        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 5,
            slidesPerView: 10,
            freeMode: true,
            lazy: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            hashNavigation: true,
            slideToClickedSlide: true,
            breakpoints: {
                300: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                500: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1199: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
            },
            navigation: {
                nextEl: '.gallery-thumbs .swiper-button-next',
                prevEl: '.gallery-thumbs .swiper-button-prev',
            },
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 0,
            lazy: true,
            hashNavigation: true,
            thumbs: {
                swiper: galleryThumbs
            },
            navigation: {
                nextEl: '.gallery-top .swiper-button-next',
                prevEl: '.gallery-top .swiper-button-prev',
            },
        });
        var swiper = new Swiper('.product_related', {
            slidesPerView: 4,
            loop: false,
            grabCursor: true,
            spaceBetween: 20,
            roundLengths: true,
            slideToClickedSlide: false,
            navigation: {
                nextEl: '.product_related .swiper-button-next',
                prevEl: '.product_related .swiper-button-prev',
            },
            autoplay: false,
            breakpoints: {
                300: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                991: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20
                }
            }
        });
        $(document).ready(function() {
            $("#lightgallery").lightGallery({
                thumbnail: false
            });
        });

        setTimeout(function() {
            var ch = $('.product_getcontent').height(),
                smore = $('.show-more');
            if (ch > 500) {
                $('.ba-text-fpt').addClass('has-height');
                smore.removeClass('d-none');
            }
        }, 200);
        $('.btn--view-more').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            $this.parents('.tab-content').find('.product_getcontent').toggleClass('expanded');
            $('html, body').animate({
                scrollTop: $('.product_getcontent').offset().top - 110
            }, 'slow');
            $(this).toggleClass('active');
            return false;
        });

    });
</script>
<?php
get_footer()
?>