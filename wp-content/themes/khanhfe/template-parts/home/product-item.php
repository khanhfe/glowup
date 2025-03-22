<?php
$product = isset($args['data']) ? $args['data'] : [];
$image1 = isset($product['image1']) ? $product['image1'] : '';
$image2 = isset($product['image2']) && !empty($product['image2']) ? $product['image2'] : '';
$product_name = isset($product['product_name']) ? $product['product_name'] : '';
$brand = isset($product['brand']) ? $product['brand'] : '';
$price = isset($product['price']) ? $product['price'] : '';
$compare_price = isset($product['compare_price']) ? $product['compare_price'] : '';
$saleoff = null;
if ($compare_price > 0)
    $saleoff = ($compare_price - $price) / $compare_price * 100;
$price = is_numeric($price) ? number_format($price, 0, '', '.') : $price;
$compare_price = is_numeric($compare_price) ? number_format($compare_price, 0, '', '.') : $compare_price;
$flashsale = isset($product['is_flash_sale']) ? $product['is_flash_sale'] : false;
?>

<div class="item_product_main">
    <div class="product-thumbnail <?= $saleoff ? 'sale' : '' ?>" data-sale="<?= $saleoff ? $saleoff . '%' : '' ?>">
        <a href="#form" class="image_thumb">
            <div class="product-image">
                <?php if ($image1) : ?>
                    <img class="lazy" src="<?= PLACEHOLDER ?>" data-src="<?= $image1['url'] ?>" alt="<?= $image1['alt'] ?>" />
                <?php endif; ?>
                <?php if ($image2) : ?>
                    <div class="product-image second-image">
                        <img class="lazy" src="<?= PLACEHOLDER ?>" data-src="<?= $image2['url'] ?>" alt="<?= $image2['alt'] ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </a>
        <div class="lofi-mybints">
            <div class="action-cart action-child">
                <button class="btn-buy btn-views add_to_cart addcart" title="Mua ngay">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 17" fill="none">
                        <circle cx="9" cy="15.7368" r="1.26316" fill="#000"></circle>
                        <circle cx="14.0526" cy="15.7368" r="1.26316" fill="#000"></circle>
                        <path d="M2.68421 6.05273L1.8421 6.05273" stroke="#000" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M3.52631 11.1055L2.6842 11.1055" stroke="#000" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M3.52632 8.5791L1 8.5791" stroke="#000" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M5.01003 3.94737L6.72226 11.6163C6.87534 12.3019 7.48373 12.7895 8.18622 12.7895H14.6659C15.3684 12.7895 15.9768 12.3019 16.1299 11.6163L17.4342 5.77422C17.6435 4.83706 16.9305 3.94737 15.9703 3.94737H14.6341H12.7895M5.01003 3.94737L4.50902 2.10616C4.33133 1.45315 3.73839 1 3.06164 1H1M5.01003 3.94737H8.21804H9.42105" stroke="#000" stroke-width="1.5" stroke-linecap="round">
                        </path>
                    </svg>
                    <span class="action-name">Mua ngay</span>
                </button>
            </div>
            <div class="quickview action-child">
				<button title="Xem nhanh" class="quick-view btn-views">
					<svg xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.00097 2.25C13.045 2.25 16.4095 5.16 17.1152 9C16.4102 12.84 13.045 15.75 9.00097 15.75C4.95697 15.75 1.59247 12.84 0.886719 9C1.59172 5.16 4.95697 2.25 9.00097 2.25ZM9.00097 14.25C10.5306 14.2497 12.0148 13.7301 13.2106 12.7764C14.4065 11.8226 15.2431 10.4912 15.5837 9C15.2419 7.50998 14.4047 6.18 13.2089 5.22752C12.0132 4.27504 10.5297 3.7564 9.00097 3.7564C7.47224 3.7564 5.98874 4.27504 4.793 5.22752C3.59727 6.18 2.76004 7.50998 2.41822 9C2.75879 10.4912 3.59547 11.8226 4.79133 12.7764C5.98718 13.7301 7.47137 14.2497 9.00097 14.25ZM9.00097 12.375C8.10586 12.375 7.24742 12.0194 6.61448 11.3865C5.98155 10.7535 5.62597 9.89511 5.62597 9C5.62597 8.10489 5.98155 7.24645 6.61448 6.61351C7.24742 5.98058 8.10586 5.625 9.00097 5.625C9.89607 5.625 10.7545 5.98058 11.3875 6.61351C12.0204 7.24645 12.376 8.10489 12.376 9C12.376 9.89511 12.0204 10.7535 11.3875 11.3865C10.7545 12.0194 9.89607 12.375 9.00097 12.375ZM9.00097 10.875C9.49825 10.875 9.97516 10.6775 10.3268 10.3258C10.6784 9.97419 10.876 9.49728 10.876 9C10.876 8.50272 10.6784 8.02581 10.3268 7.67417C9.97516 7.32254 9.49825 7.125 9.00097 7.125C8.50369 7.125 8.02677 7.32254 7.67514 7.67417C7.32351 8.02581 7.12597 8.50272 7.12597 9C7.12597 9.49728 7.32351 9.97419 7.67514 10.3258C8.02677 10.6775 8.50369 10.875 9.00097 10.875Z" fill="#000"></path>
					</svg>
					<span class="action-name">Xem nhanh</span>
				</button>
			</div>
        </div>
    </div>
    <div class="product-info">
        <h3 class="product-name">
            <a href="#form"><?= $product_name ?></a>
        </h3>
        <span class="brand"><?= $brand ?></span>
        <div class="bottom-action">
            <div class="price-box">
                <?= $price ? '<span class="price">' . $price . '₫</span>' : '' ?>
                <?= $compare_price ? '<span class="compare-price">' . $compare_price . '₫</span>' : '' ?>
            </div>
        </div>
    </div>
    <?php if ($flashsale): ?>
        <div class="flashsale__bottom" style="display:none">
            <div class="flashsale__label">
                <b class="flashsale__sold-qty"></b> sản phẩm đã bán
            </div>
            <div class="flashsale__progressbar">
                <div class="flashsale___percent"></div>
            </div>
        </div>
    <?php endif; ?>
    <div class="d-none product-description">
        <?= isset($product['description']) ? $product['description'] : '' ?>
    </div>
</div>