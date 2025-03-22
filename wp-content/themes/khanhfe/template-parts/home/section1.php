<?php
$h_section1 = get_field('h_section1', 'option');
?>
<section class="awe-section-1">
    <div class="home-slider swiper-container gallery-top">
        <div class="swiper-wrapper">
            <?php
            if (!$h_section1):
                foreach ($h_section1 as $item):
                    $image = $item['image'];
            ?>
                    <div class="swiper-slide">
                        <img width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" src="<?= PLACEHOLDER ?>" data-src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="img-responsive lazy" />
                    </div>
                <?php
                endforeach;
            else : ?>
                <div class="swiper-slide">
                    <a href="#san-pham" class="clearfix" title="Glowup">
                        <picture>
                            <source media="(min-width: 1200px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_1.jpg">
                            <source media="(min-width: 992px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_1.jpg">
                            <source media="(min-width: 569px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_1.jpg">
                            <source media="(max-width: 567px)"
                                srcset="https://bizweb.dktcdn.net/thumb/large/100/473/812/themes/889220/assets/slider_1.jpg">
                            <img width="1903" height="694"
                                src="<?= PLACEHOLDER ?>"
                                data-src="<?= THEME_ASSETS ?>/images/temp/slider_1.jpg" alt="Glowup" class="img-responsive lazy" />
                        </picture>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#san-pham" class="clearfix" title="Glowup">
                        <picture>
                            <source media="(min-width: 1200px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_2.jpg">
                            <source media="(min-width: 992px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_2.jpg">
                            <source media="(min-width: 569px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_2.jpg">
                            <source media="(max-width: 567px)"
                                srcset="https://bizweb.dktcdn.net/thumb/large/100/473/812/themes/889220/assets/slider_2.jpg">
                            <img width="1903" height="694"
                                src="<?= PLACEHOLDER ?>"
                                data-src="<?= THEME_ASSETS ?>/images/temp/slider_2.jpg" alt="Glowup" class="img-responsive lazy" />
                        </picture>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#san-pham" class="clearfix" title="Glowup">
                        <picture>
                            <source media="(min-width: 1200px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_3.jpg">
                            <source media="(min-width: 992px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_3.jpg">
                            <source media="(min-width: 569px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_3.jpg">
                            <source media="(max-width: 567px)"
                                srcset="https://bizweb.dktcdn.net/thumb/large/100/473/812/themes/889220/assets/slider_3.jpg">
                            <img width="1903" height="694"
                                src="<?= PLACEHOLDER ?>"
                                data-src="<?= THEME_ASSETS ?>/images/temp/slider_3.jpg" alt="Glowup" class="img-responsive lazy" />
                        </picture>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#san-pham" class="clearfix" title="Glowup">
                        <picture>
                            <source media="(min-width: 1200px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_4.jpg">
                            <source media="(min-width: 992px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_4.jpg">
                            <source media="(min-width: 569px)" srcset="<?= THEME_ASSETS ?>/images/temp/slider_4.jpg">
                            <source media="(max-width: 567px)"
                                srcset="https://bizweb.dktcdn.net/thumb/large/100/473/812/themes/889220/assets/slider_4.jpg">
                            <img width="1903" height="694"
                                src="<?= PLACEHOLDER ?>"
                                data-src="<?= THEME_ASSETS ?>/images/temp/slider_4.jpg" alt="Glowup" class="img-responsive lazy" />
                        </picture>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
    <script>
        var swiper = new Swiper('.home-slider', {
            autoplay: true,
            pagination: {
                el: '.home-slider .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.home-slider .swiper-button-next',
                prevEl: '.home-slider .swiper-button-prev',
            },
        });
    </script>
</section>