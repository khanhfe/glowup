<?php
$h_section7 = get_field('h_section7', 'option');
$title = isset($h_section7['title']) ? $h_section7['title'] : 'Sản phẩm mới';
$products = isset($h_section7['products']) ? $h_section7['products'] : [];
?>
<section class="awe-section-7" id="san-pham">
	<section class="section_product_new">
		<div class="container">
			<div class="head">
				<h2 class="heading">
					<a href="#san-pham-noi-bat" title="<?= $title ?>">
						<?= $title ?>
					</a>
				</h2>
			</div>
			<div class="block-product">
				<div class="product-new-swiper swiper-container">
					<div class="swiper-wrapper">
						<?php
						if ($products) :
							foreach ($products as $product) :
								echo '<div class="swiper-slide">';
								get_template_part('template-parts/home/product-item', null, [
									'data' => $product,
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
		var swiperwish = new Swiper('.product-new-swiper', {
			slidesPerView: 5,
			loop: false,
			grabCursor: true,
			spaceBetween: 20,
			slidesPerColumn: 2,
			slidesPerColumnFill: 'row',
			roundLengths: true,
			slideToClickedSlide: false,
			navigation: {
				nextEl: '.product-new-swiper .swiper-button-next',
				prevEl: '.product-new-swiper .swiper-button-prev',
			},
			pagination: {
				el: '.product-new-swiper .swiper-pagination',
				clickable: true,
			},
			autoplay: false,
			breakpoints: {
				300: {
					slidesPerView: 2,
					spaceBetween: 10
				},
				500: {
					slidesPerView: 2,
					spaceBetween: 10
				},
				640: {
					slidesPerView: 2,
					spaceBetween: 20
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 20
				},
				991: {
					slidesPerView: 3,
					spaceBetween: 20
				},
				1200: {
					slidesPerView: 5,
					spaceBetween: 20
				}
			}
		});
	</script>
</section>