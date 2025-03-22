<?php
$h_section6 = get_field('h_section6', 'option');
?>
<section class="awe-section-6">
    <section class="section_brand">
        <div class="container">
            <div class="brand-swiper swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    if ($h_section6) :
                        foreach ($h_section6 as $item) :
                    ?>
                            <div class="swiper-slide">
                                <img class="lazy" width="<?= $item['logo']['width'] ?>" height="<?= $item['logo']['height'] ?>" src="<?= PLACEHOLDER ?>" data-src="<?= $item['logo']['url'] ?>" alt="<?= $item['logo']['alt'] ?>" />
                            </div>
                        <?php
                        endforeach;
                    else :
                        for ($i = 1; $i <= 8; $i++) :
                        ?>
                            <div class="swiper-slide">
                                <img class="lazy" width="100" height="88" src="<?= PLACEHOLDER ?>" data-src="<?= THEME_ASSETS ?>/images/temp/brand_image_<?= $i ?>.png" alt="Glowup" />
                            </div>
                    <?php
                        endfor;
                    endif; ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <script>
        var swiperwish = new Swiper('.brand-swiper', {
            slidesPerView: 8,
            loop: false,
            grabCursor: true,
            spaceBetween: 20,
            roundLengths: true,
            slideToClickedSlide: false,
            autoplay: false,
            navigation: {
                nextEl: '.brand-swiper .swiper-button-next',
                prevEl: '.brand-swiper .swiper-button-prev',
            },
            pagination: {
                el: '.brand-swiper .swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                991: {
                    slidesPerView: 6,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 8,
                    spaceBetween: 20
                }
            }
        });
    </script>
</section>