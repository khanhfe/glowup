<?php
$h_section8 = get_field('h_section8', 'option');
$title = isset($h_section8['title']) ? $h_section8['title'] : 'Khách hàng nói gì về chúng tôi';
$testimonials = isset($h_section8['testimonials']) ? $h_section8['testimonials'] : [];
?>
<section class="awe-section-8">
    <section class="section_customer testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="testimonial-text">
                        <div class="head">
                            <h2 class="heading"><?= $title ?></h2>
                        </div>
                        <div class="main">
                            <div id="testimonial-slider" class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php
                                    if ($testimonials):
                                        foreach ($testimonials as $testimonial):
                                            $image = $testimonial['image'];
                                            $description = $testimonial['description'];
                                            $name = $testimonial['name'];
                                    ?>
                                            <div class="swiper-slide">
                                                <div class="testimonial">
                                                    <div class="pic">
                                                        <img width="100" height="100" class="lazy" src="<?= PLACEHOLDER ?>" data-src="<?= $iamge['url'] ?>" alt="<?= $image['alt'] ?>" />
                                                    </div>
                                                    <p class="description"><?= $description ?></p>
                                                    <h3 class="title"><?= $name ?></h3>
                                                </div>
                                            </div>
                                    <?php
                                        endforeach;
                                    endif; ?>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var swiper = new Swiper('#testimonial-slider', {
            direction: "horizontal",
            loop: true,
            autoHeight: false,
            centeredSlides: true,
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                }
            },
            pagination: {
                el: "#testimonial-slider .swiper-pagination"
            },
            navigation: {
                nextEl: "#testimonial-slider .swiper-button-next",
                prevEl: "#testimonial-slider .swiper-button-prev"
            }
        });
    </script>
</section>