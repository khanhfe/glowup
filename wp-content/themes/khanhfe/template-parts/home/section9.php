<?php
$h_section9 = get_field('h_section9', 'option');
$title = isset($h_section9['title']) ? $h_section9['title'] : 'Tin tức';
$news = isset($h_section9['news']) ? $h_section9['news'] : [];
?>
<section class="awe-section-9">
    <div class="section_blog">
        <div class="container">
            <div class="head">
                <h2 class="heading"><?= $title ?></h2>
            </div>
            <div class="row blogs_mobile_base">
                <?php
                if ($news) :
                    foreach ($news as $item) :
                        $title = $item['title'];
                        $description = $item['description'];
                        $author = $item['author'];
                        $date = $item['date'];
                        $image = $item['image'];
                        $link = $item['link'];
                ?>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="item_blog_base">
                                <div class="article-card row">
                                    <div class="col-sm-6 col-12">
                                        <div class="block-thumb">
                                            <a class="thumb" href="<?= $link ?>">
                                                <img width="480" height="480" src="<?= PLACEHOLDER ?>" data-src="<?= $image['url'] ?>" alt="" class="lazy img-responsive" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="content_blog clearfix">
                                            <h3><a href="<?= $link ?>" class="a-title"><?= $title ?></a></h3>
                                            <p><?= $description ?></p>
                                            <div class="time-post">
                                                <span class="author">
                                                    <img src="<?= THEME_ASSETS ?>/images/temp/author.svg" alt="" loading="lazy" width="14" height="14">
                                                    <?= $author ?>
                                                </span>
                                                <span class="icon posted">
                                                    <img src="<?= THEME_ASSETS ?>/images/temp/calendar.svg" alt="" loading="lazy" width="14" height="14">
                                                    <?= $date ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div>
</section>