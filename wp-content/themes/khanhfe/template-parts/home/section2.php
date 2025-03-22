<?php
$h_section2 = get_field('h_section2', 'option');
?>
<section class="awe-section-2">
    <section class="section_service">
        <div class="container">
            <div class="block-content">
                <div class="service-swiper swiper-container delivery-info">
                    <div class="swiper-wrapper">
                        <?php
                        if ($h_section2):
                            foreach ($h_section2 as $item):
                        ?>
                                <div class="swiper-slide item">
                                    <div class="icon">
                                        <img width="60" height="60" class="lazy" src="<?= PLACEHOLDER ?>" data-src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>" />
                                    </div>
                                    <div class="info">
                                        <h3><?= $item['title'] ?></h3>
                                        <p><?= $item['content'] ?></p>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                        else : ?>
                            <div class="swiper-slide item">
                                <div class="icon">
                                    <img width="60" height="60" class="lazy"
                                        src="<?= PLACEHOLDER ?>"
                                        data-src="<?= THEME_ASSETS ?>/images/temp/icon_service_1.png" alt="Giao hàng toàn quốc" />
                                </div>
                                <div class="info">
                                    <h3>Giao hàng toàn quốc</h3>
                                    <p>Miễn phí vận chuyển với các đơn hàng trị giá trên 2.000.000Đ</p>
                                </div>
                            </div>
                            <div class="swiper-slide item">
                                <div class="icon">
                                    <img width="60" height="60" class="lazy" src="<?= PLACEHOLDER ?>" data-src="<?= THEME_ASSETS ?>/images/temp/icon_service_2.png" alt="Hỗ trợ online 24/24" />
                                </div>
                                <div class="info">
                                    <h3>Hỗ trợ online 24/24</h3>
                                    <p>Luôn hỗ trợ khách hàng 24/24 tất cả các ngày trong tuần</p>
                                </div>
                            </div>
                            <div class="swiper-slide item">
                                <div class="icon">
                                    <img width="60" height="60" class="lazy" src="<?= PLACEHOLDER ?>" data-src="<?= THEME_ASSETS ?>/images/temp/icon_service_3.png" alt="Đỗi hàng dễ dàng" />
                                </div>
                                <div class="info">
                                    <h3>Đỗi hàng dễ dàng</h3>
                                    <p>Miễn phí đổi trả trong vòng 30 ngày đầu tiên cho tất cả các mặt hàng</p>
                                </div>
                            </div>
                            <div class="swiper-slide item">
                                <div class="icon">
                                    <img width="60" height="60" class="lazy" src="<?= PLACEHOLDER ?>" data-src="<?= THEME_ASSETS ?>/images/temp/icon_service_4.png" alt="Quà tặng hấp dẫn" />
                                </div>
                                <div class="info">
                                    <h3>Quà tặng hấp dẫn</h3>
                                    <p>Chương trình khuyễn mãi cực lớn và hấp dẫn hàng tháng</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var swiperwish = new Swiper('.service-swiper', {
            slidesPerView: 4,
            loop: false,
            grabCursor: true,
            spaceBetween: 40,
            roundLengths: true,
            slideToClickedSlide: false,
            navigation: {
                nextEl: '.service-swiper .swiper-button-next',
                prevEl: '.service-swiper .swiper-button-prev',
            },
            pagination: {
                el: '.service-swiper .swiper-pagination',
                clickable: true,
            },
            autoplay: false,
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 40
                }
            }
        });
    </script>
</section>