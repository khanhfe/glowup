<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#0a402b" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="icon" href="<?= THEME_ASSETS ?>/images/favicon.jpg" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= THEME_ASSETS ?>/images/favicon.jpg">
	<link rel="preload" as="style" type="text/css" href="<?= THEME_ASSETS ?>/css/bootstrap.css" onload="this.rel='stylesheet'" />
	<link href="<?= THEME_ASSETS ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="preload" as="style" type="text/css" href="<?= THEME_ASSETS ?>/css/main.css" onload="this.rel='stylesheet'" />
	<link href="<?= THEME_ASSETS ?>/css/main.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?= THEME_ASSETS ?>/css/index.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="preload" as="style" type="text/css" href="<?= THEME_ASSETS ?>/css/swiper.css" onload="this.rel='stylesheet'" />
	<link href="<?= THEME_ASSETS ?>/css/swiper.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="preload" as='style' type="text/css" href="<?= THEME_ASSETS ?>/css/quickviews_popup_cart.css">
	<link href="<?= THEME_ASSETS ?>/css/quickviews_popup_cart.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="preload" as="script" href="<?= THEME_ASSETS ?>/js/jquery.js" />
	<script src="<?= THEME_ASSETS ?>/js/jquery.js" type="text/javascript"></script>
	<link rel="preload" as="script" href="<?= THEME_ASSETS ?>/js/swiper.js" />
	<script src="<?= THEME_ASSETS ?>/js/swiper.js" type="text/javascript"></script>
	<link rel="preload" as="script" href="<?= THEME_ASSETS ?>/js/lazy.js" />
	<script src="<?= THEME_ASSETS ?>/js/lazy.js" type="text/javascript"></script>
	<script>
		$(document).ready(function($) {
			awe_lazyloadImage();
		});

		function awe_lazyloadImage() {
			var ll = new LazyLoad({
				elements_selector: ".lazy",
				load_delay: 200,
				threshold: 0
			});
		}
		window.awe_lazyloadImage = awe_lazyloadImage;
	</script>
	<?php wp_head(); ?>
</head>

<body class="index">
	<header>
		<div class="opacity_menu"></div>
		<?php get_template_part('template-parts/header/menu-main'); ?>
	</header>