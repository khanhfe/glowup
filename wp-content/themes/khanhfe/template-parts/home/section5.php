<?php
$h_section5 = get_field('h_section5', 'option');
$image = isset($h_section5['image']) ? $h_section5['image'] : '';
$sub_title = isset($h_section5['sub_title']) ? $h_section5['sub_title'] : '';
$title = isset($h_section5['title']) ? $h_section5['title'] : '';
$description = isset($h_section5['description']) ? $h_section5['description'] : '';
?>
<section class="awe-section-5">
    <section class="section_banner">
        <div class="container">
            <div class="marcsatbest">
                <div class="banner-cover">
                    <a href="#san-pham">
                        <?php
                        if ($image) {
                            echo wp_get_attachment_image($image['ID'], 'full');
                        } else {
                            echo '<img src="' . THEME_ASSETS . '/images/temp/banner-mid.jpg" alt="Glowup">';
                        }
                        ?>
                    </a>
                </div>
                <div class="banner-text">
                    <div>
                        <h3><?= $sub_title ?></h3>
                        <h2><?= $title ?></h2>
                        <p><?= $description ?></p>
                        <div class="lofi_myslbtn">
                            <a href="#form" class="btn button--secondary">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>