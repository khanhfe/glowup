<?php
$h_section1 = get_field('h_section1', 'option');
?>
<section class="awe-section-1">
    <div class="home-slider swiper-container gallery-top">
        <div class="swiper-wrapper">
            <?php
            if ($h_section1):
                foreach ($h_section1 as $item):
                    $image = $item['image'];
            ?>
                    <div class="swiper-slide">
                        <img width="<?= $image['width'] ?>" height="<?= $image['height'] ?>" src="<?= PLACEHOLDER ?>" data-src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="img-responsive lazy" />
                    </div>
                <?php
                endforeach;
             endif; ?>
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