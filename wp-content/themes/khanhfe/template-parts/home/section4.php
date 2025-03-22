<?php
$h_section4 = get_field('h_section4', 'option');
$title = isset($h_section4['title']) ? $h_section4['title'] : 'Flash Sale';
$time_end_flash_sale = isset($h_section4['time_end_flash_sale']) ? $h_section4['time_end_flash_sale'] : '03-20-2025-12-00-00';
$products = isset($h_section4['products']) ? $h_section4['products'] : []; // not using woocomerce
?>
<section class="awe-section-4">
    <link rel="preload" as="script" href="<?= THEME_ASSETS ?>/js/count-down.js" />
    <script src="<?= THEME_ASSETS ?>/js/count-down.js" type="text/javascript"></script>
    <section class="section_best_sellers">
        <div class="container">
            <div class="head">
                <h2 class="heading">
                    <a href="#san-pham"><?= $title ?></a>
                </h2>
                <div class="timer">
                    <span class="text d-none">Kết thúc sau:</span>
                    <div class="time" data-countdown="countdown" data-date="<?= $time_end_flash_sale ?>"></div>
                </div>
            </div>
            <div class="block-product">
                <div class="best-sellers-swiper swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        if ($products) :
                            foreach ($products as $product) :
                                echo '<div class="swiper-slide flashsale__item">';
                                get_template_part('template-parts/home/product-item', null, [
                                    'data' => $product,
                                    'is_flash_sale' => true,
                                ]);
                                echo '</div>';
                            endforeach;
                        endif; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.falshSale = {
            type: "hours",
            dateStart: "",
            dateFinish: "",
            hourStart: "00:00",
            hourFinish: "24",
            activeDay: "7",
            finishAction: "show",
            percentMin: "40",
            percentMax: "80",
            maxInStock: "300",
            useSoldQuantity: false,
            quantityType: "sold",
            timestamp: new Date().getTime(),
        }
    </script>
    <script src="<?= THEME_ASSETS ?>/js/flashsale.js" defer></script>
</section>