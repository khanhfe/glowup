<?php
$h_section3 = get_field('h_section3', 'option');
$title = isset($h_section3['title']) ? $h_section3['title'] : '<strong>Sữa bột collagen</strong><span>Chiết xuất từ thiên nhiên</span>';
$content_left = isset($h_section3['content_left']) ? $h_section3['content_left'] : '';
$content_right = isset($h_section3['content_right']) ? $h_section3['content_right'] : '';
$image = isset($h_section3['image']) ? $h_section3['image'] : '';
?>
<section class="awe-section-3" id="gioi-thieu">
    <section class="section_perfect">
        <div class="container">
            <div class="head">
                <h2 class="heading">
                    <?= $title ?>
                </h2>
            </div>
            <div class="cate-list">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-12 salens-left salebanimfo salens">
                        <?php
                        if ($content_left):
                            foreach ($content_left as $item):
                                $icon = isset($item['icon']) ? $item['icon'] : '';
                                $title = $item['title'];
                                $sub_title = $item['sub_title'];
                        ?>
                                <ul>
                                    <li>
                                        <span>
                                            <?= $icon ? wp_get_attachment_image($icon, 'full') : '' ?>
                                        </span>
                                    </li>
                                    <li>
                                        <h4><?= $title ?></h4>
                                        <p><?= $sub_title ?></p>
                                    </li>
                                </ul>
                            <?php endforeach;
                        else: ?>
                            <ul>
                                <li>
                                    <span>
                                        <img src="<?= THEME_ASSETS ?>/images/temp/salens-icon-1.svg" alt="Glowup">
                                    </span>
                                </li>
                                <li>
                                    <h4>Da căng bóng, trẻ lâu</h4>
                                    <p>Nano Collagen thẩm thấu sâu, giúp da đàn hồi, giảm nếp nhăn và sáng mịn</p>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <span>
                                        <img src="<?= THEME_ASSETS ?>/images/temp/salens-icon-2.svg" alt="Glowup">
                                    </span>
                                </li>
                                <li>
                                    <h4>Xương khớp chắc khỏe</h4>
                                    <p>Hỗ trợ tái tạo sụn khớp, giúp cơ thể dẻo dai, ngăn ngừa thoái hóa sớm</p>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <img src="<?= THEME_ASSETS ?>/images/temp/salens-icon-3.svg" alt="Glowup">
                                </li>
                                <li>
                                    <h4>Ngủ ngon, hết stress</h4>
                                    <p>Hạt sen giúp thư giãn thần kinh, cải thiện giấc ngủ và giảm căng thẳng hiệu quả
                                    </p>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-12 salebanimg">
                        <div class="beffectt">
                            <?php
                            if ($image):
                                echo wp_get_attachment_image($image['ID'], 'full', false, 'class="image_cate_thumb"');
                            else: ?>
                                <img class="image_cate_thumb" width="480" height="480" src="<?= THEME_ASSETS . '/images/temp/suabot.jpg' ?>" alt="" loading="lazy">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-12 salens-right salebanimfo salens">
                        <?php
                        if ($content_right):
                            foreach ($content_right as $item):
                                $icon = isset($item['icon']) ? $item['icon'] : '';
                                $title = $item['title'];
                                $sub_title = $item['sub_title'];
                        ?>
                                <ul>
                                    <li class="icon-mobile">
                                        <span>
                                            <?= $icon ? wp_get_attachment_image($icon['ID'], 'full') : '' ?>
                                        </span>
                                    </li>
                                    <li class="text">
                                        <h4><?= $title ?></h4>
                                        <p><?= $sub_title ?></p>
                                    </li>
                                    <li>
                                        <span>
                                            <?= $icon ? wp_get_attachment_image($icon['ID'], 'full') : '' ?>
                                        </span>
                                    </li>
                                </ul>
                            <?php endforeach;
                        else: ?>
                            <ul>
                                <li class="icon-mobile">
                                    <span>
                                        <img src="<?= THEME_ASSETS ?>/images/temp/salens-icon-4.svg" alt="Glowup">
                                    </span>
                                </li>
                                <li class="text">
                                    <h4>Tốt cho tim mạch</h4>
                                    <p>Giảm cholesterol, cải thiện tuần hoàn máu </p>
                                </li>
                                <li>
                                    <span>
                                        <img src="<?= THEME_ASSETS ?>/images/temp/salens-icon-4.svg" alt="Glowup">
                                    </span>
                                </li>
                            </ul>
                            <ul>
                                <li class="icon-mobile">
                                    <span>
                                        <img src="<?= THEME_ASSETS ?>/images/temp/salens-icon-5.svg" alt="Glowup">
                                    </span>
                                </li>
                                <li class="text">
                                    <h4>Hỗ trợ tiêu hóa</h4>
                                    <p>Tăng cường hệ tiêu hóa</p>
                                </li>
                                <li>
                                    <span>
                                        <img src="<?= THEME_ASSETS ?>/images/temp/salens-icon-5.svg" alt="Glowup">
                                    </span>
                                </li>
                            </ul>
                            <ul>
                                <li class="icon-mobile">
                                    <span>
                                        <img src="<?= THEME_ASSETS ?>/images/temp/salens-icon-6.svg" alt="Glowup">
                                    </span>
                                </li>
                                <li class="text">
                                    <h4>Giữ dáng thon gọn</h4>
                                    <p>Cung cấp năng lượng mà không gây béo, tạo cảm giác no lâu, hỗ trợ duy trì vóc
                                        dáng</p>
                                </li>
                                <li>
                                    <span>
                                        <img src="<?= THEME_ASSETS ?>/images/temp/salens-icon-6.svg" alt="Glowup">
                                    </span>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>