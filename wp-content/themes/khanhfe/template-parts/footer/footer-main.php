<?php
$global_settings = get_field('global_settings', 'option');
$hotline = isset($global_settings['hotline']) ? $global_settings['hotline'] : '098 248 90 90';
$email = isset($global_settings['email']) ? $global_settings['email'] : 'glowupviet@gmail.com';
$address = isset($global_settings['address']) ? $global_settings['address'] : 'Phường Lê Trọng Tấn, Quận Thanh Xuân, TP Hà Nội';
$facebook = isset($global_settings['facebook']) ? $global_settings['facebook'] : 'https://www.facebook.com/glowupstudios/';
$instagram = isset($global_settings['instagram']) ? $global_settings['instagram'] : 'https://www.instagram.com/glowupstudios/';
$youtube = isset($global_settings['youtube']) ? $global_settings['youtube'] : '';
$zalo = isset($global_settings['zalo']) ? $global_settings['zalo'] : 'https://zalo.me/0982489090';
$about = isset($global_settings['about']) ? $global_settings['about'] : '<p>CÔNG TY CỔ PHẦN XÂY DỰNG VÀ ĐẦU TƯ XUÂN PHÚ TẠI HÀ NỘI</p>
<p>Giấy đăng kí kinh doanh số: 3301545034-001</p>
<p>Trụ sở chính: Căn số 14TM5-10, khu đô thị The Manor Central Park, phường Đại Kim, quận Hoàng Mai, Hà Nội</p>
<p>Điện thoại: 0352245785</p>
<p>Email: glowupviet@gmail.com</p>';
?>
<div class="footer index">
    <div class="footer-top d-flex">
        <div class="container ">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-12 mr-991">
                    <h4>
                        <span>
                            Giới thiệu
                        </span>
                    </h4>
                    <div class="footer-about">
                        <p><?= $about ?></p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-2 col-md-4 col-12 footer-click">
                    <h4>
                        <span>
                            Về chúng tôi
                            <i class="fa" aria-hidden="true">
                                <img width="11" height="6" class="lazy" src="<?= PLACEHOLDER ?>" data-src="<?= THEME_ASSETS ?>/images/temp/icon-down.svg" alt="Glowup" />
                            </i>
                        </span>
                    </h4>
                    <div class="footer-menu toggle-mn">
                        <a href="<?= home_url() ?>" title="Trang chủ" rel="nofollow">Trang chủ</a>
                        <a href="#gioi-thieu" title="Giới thiệu" rel="nofollow">Giới thiệu</a>
                        <a href="#san-pham" title="Sản phẩm" rel="nofollow">Sản phẩm</a>
                        <a href="#tin-tuc" title="Tin tức" rel="nofollow">Tin tức</a>
                        <a href="#lien-he" title="Liên hệ" rel="nofollow">Liên hệ</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-12 footer-click">
                    <h4>
                        <span>
                            Hỗ trợ khách hàng
                            <i class="fa" aria-hidden="true">
                                <img width="11" height="6" class="lazy" src="<?= PLACEHOLDER ?>" data-src="<?= THEME_ASSETS ?>/images/temp/icon-down.svg" alt="Glowup" />
                            </i>
                        </span>
                    </h4>
                    <div class="footer-menu toggle-mn">
                        <a href="#kiem-tra-don-hang" title="Đơn hàng" rel="nofollow">Đơn hàng</a>
                        <a href="#chinh-sach-giao-hang" title="Chính sách giao hàng" rel="nofollow">Chính sách giao hàng</a>
                        <a href="#chinh-sach-doi-tra" title="Chính sách đổi trả" rel="nofollow">Chính sách đổi trả</a>
                        <a href="#chinh-sach-ban-hang" title="Chính sách bán hàng" rel="nofollow">Chính sách bán hàng</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-12 footer-click">
                    <div class="social-footer">
                        <h4>
                            <span>
                                Theo dõi chúng tôi
                                <i class="fa" aria-hidden="true">
                                    <img width="11" height="6" class="lazy" src="<?= PLACEHOLDER ?>" data-src="<?= THEME_ASSETS ?>/images/temp/icon-down.svg" alt="Glowup" />
                                </i>
                            </span>
                        </h4>
                        <div class="social-buttons toggle-mn">
                            <a href="<?= $youtube ?>" class="social-button youtube"
                                title="Theo dõi trên Youtube">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                                    <path d="M29.607 16.1986C29.377 15.3406 28.702 14.6636 27.845 14.4326C26.279 14.0026 20.014 13.9956 20.014 13.9956C20.014 13.9956 13.75 13.9886 12.183 14.3996C11.343 14.6286 10.649 15.3206 10.417 16.1776C10.004 17.7436 10 20.9916 10 20.9916C10 20.9916 9.996 24.2556 10.406 25.8056C10.636 26.6626 11.311 27.3396 12.169 27.5706C13.751 28.0006 19.999 28.0076 19.999 28.0076C19.999 28.0076 26.264 28.0146 27.83 27.6046C28.686 27.3746 29.364 26.6986 29.597 25.8416C30.011 24.2766 30.014 21.0296 30.014 21.0296C30.014 21.0296 30.034 17.7646 29.607 16.1986ZM18.01 24.0006L18.015 18.0006L23.222 21.0056L18.01 24.0006Z" fill="white" />
                                </svg>
                            </a>
                            <a href="<?= $facebook ?>" class="social-button facebook" title="Theo dõi trên Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                                    <path d="M23.6002 11.2515L21.1667 11.2476C18.4328 11.2476 16.666 13.0583 16.666 15.861V17.9881H14.2193C14.0079 17.9881 13.8367 18.1593 13.8367 18.3705V21.4525C13.8367 21.6637 14.0081 21.8347 14.2193 21.8347H16.666V29.6114C16.666 29.8226 16.8372 29.9937 17.0487 29.9937H20.241C20.4524 29.9937 20.6236 29.8224 20.6236 29.6114V21.8347H23.4844C23.6958 21.8347 23.867 21.6637 23.867 21.4525L23.8682 18.3705C23.8682 18.2691 23.8278 18.172 23.7562 18.1002C23.6845 18.0285 23.5869 17.9881 23.4854 17.9881H20.6236V16.1849C20.6236 15.3183 20.8303 14.8783 21.9605 14.8783L23.5998 14.8777C23.811 14.8777 23.9822 14.7065 23.9822 14.4955V11.6337C23.9822 11.4229 23.8112 11.2518 23.6002 11.2515Z" fill="white" />
                                </svg>
                            </a>
                            <a href="<?= $instagram ?>" class="social-button google" title="Theo dõi trên Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                                    <path d="M20.053 14.2183C16.8578 14.2183 14.2694 16.8053 14.2694 19.9959C14.2694 23.1877 16.8578 25.7747 20.053 25.7747C23.2456 25.7747 25.8365 23.1877 25.8365 19.9959C25.8365 16.8053 23.2456 14.2183 20.053 14.2183ZM20.053 23.7501C17.9775 23.7501 16.2948 22.0692 16.2948 19.9971C16.2948 17.9238 17.9775 16.2441 20.053 16.2441C22.1284 16.2441 23.8086 17.9238 23.8086 19.9971C23.8086 22.0692 22.1284 23.7501 20.053 23.7501Z" fill="white" />
                                    <path d="M26.0667 15.3531C26.8115 15.3531 27.4153 14.7499 27.4153 14.0058C27.4153 13.2618 26.8115 12.6586 26.0667 12.6586C25.3219 12.6586 24.7181 13.2618 24.7181 14.0058C24.7181 14.7499 25.3219 15.3531 26.0667 15.3531Z" fill="white" />
                                    <path d="M30.7293 12.6361C30.1426 11.1252 28.9479 9.93041 27.4354 9.34678C26.5609 9.01809 25.6364 8.84188 24.7006 8.82188C23.4958 8.76939 23.1143 8.75439 20.0592 8.75439C17.0042 8.75439 16.6126 8.75439 15.4179 8.82188C14.4846 8.84063 13.5601 9.01684 12.6856 9.34678C11.1718 9.93041 9.97709 11.1252 9.39161 12.6361C9.06258 13.5109 8.88619 14.4333 8.86742 15.3681C8.81363 16.5703 8.79736 16.9515 8.79736 20.0046C8.79736 23.0565 8.79736 23.4452 8.86742 24.6412C8.88619 25.576 9.06258 26.4983 9.39161 27.3744C9.97834 28.8841 11.1731 30.0789 12.6868 30.6637C13.5576 31.0037 14.4821 31.1961 15.4204 31.2261C16.6251 31.2786 17.0067 31.2949 20.0617 31.2949C23.1168 31.2949 23.5083 31.2949 24.7031 31.2261C25.6376 31.2074 26.5621 31.0299 27.4379 30.7025C28.9504 30.1164 30.1451 28.9228 30.7318 27.4119C31.0609 26.5371 31.2373 25.6148 31.256 24.6799C31.3098 23.4777 31.3261 23.0965 31.3261 20.0434C31.3261 16.9902 31.3261 16.6028 31.256 15.4068C31.2398 14.4595 31.0646 13.5209 30.7293 12.6361ZM29.2056 24.5487C29.1968 25.2686 29.0667 25.9822 28.8165 26.6583C28.4349 27.6418 27.658 28.4192 26.6747 28.7966C26.0054 29.0453 25.2998 29.1753 24.5855 29.1853C23.397 29.2403 23.0617 29.254 20.0142 29.254C16.9642 29.254 16.6526 29.254 15.4416 29.1853C14.7298 29.1765 14.0217 29.0453 13.3537 28.7966C12.3666 28.4204 11.5847 27.6431 11.2031 26.6583C10.9579 25.9909 10.8253 25.2848 10.814 24.5725C10.7602 23.3852 10.7477 23.0503 10.7477 20.0059C10.7477 16.9602 10.7477 16.6491 10.814 15.4381C10.8228 14.7182 10.9529 14.0058 11.2031 13.3297C11.5847 12.3437 12.3666 11.5676 13.3537 11.1902C14.0217 10.9427 14.7298 10.8115 15.4416 10.8015C16.6314 10.7477 16.9654 10.7327 20.0142 10.7327C23.063 10.7327 23.3757 10.7327 24.5855 10.8015C25.2998 10.8102 26.0054 10.9415 26.6747 11.1902C27.658 11.5688 28.4349 12.3462 28.8165 13.3297C29.0617 13.9971 29.1943 14.7032 29.2056 15.4156C29.2594 16.6041 29.2731 16.9377 29.2731 19.9834C29.2731 23.0278 29.2731 23.3552 29.2193 24.55H29.2056V24.5487Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-12 col-12">
                    <div class="footer-mailchip">
                        <h4>Đăng ký để nhận tin</h4>
                        <p>Bạn có muốn nhận khuyến mãi đặc biệt? Đăng ký ngay.</p>
                        <div class="mail_footer subscribe">
                            <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form">
                                <input type="email" class="form-control" value="" placeholder="Nhập địa chỉ email" name="email" id="mail" autocomplete="on">
                                <span class="input-group-append subscribe">
                                    <button class="btn btn-default" type="submit" aria-label="Đăng ký ngay" name="subscribe">Gửi</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="contact-max col-xl-7 col-md-12 col-12">
                    <div class="row">
                        <ul class="col-xl-3 col-md-3 col-sm-12 col-12 list-unstyled text-center">
                            <li>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 39.333 32.817" width="39.333" height="32.817">
                                    <path id="headset" d="M34.449,19.1V16.768a14.768,14.768,0,0,0-29.535,0V19.1A8.2,8.2,0,0,0,8.2,34.817a3.282,3.282,0,0,0,3.282-3.282V21.69A3.282,3.282,0,0,0,8.2,18.409V16.768a11.486,11.486,0,1,1,22.972,0v1.641a3.282,3.282,0,0,0-3.282,3.282v9.845H22.963a1.641,1.641,0,0,0,0,3.282h8.2A8.2,8.2,0,0,0,34.449,19.1ZM8.2,31.535h0a4.923,4.923,0,1,1,0-9.845Zm22.972,0V21.69a4.923,4.923,0,1,1,0,9.845Z" transform="translate(-0.014 -2)" fill="#FFFFFF"></path>
                                </svg>
                            </li>
                            <li>
                                <h4>Điện thoại</h4>
                                <div class="contact-btn">
                                    <a href="tel:<?= $hotline ?>" class="btn button--secondary" title="<?= $hotline ?>"><?= $hotline ?></a>
                                </div>
                            </li>
                        </ul>
                        <ul class="col-xl-5 col-md-5 col-sm-12 col-12 list-unstyled text-center">
                            <li>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.696 27.517" width="39" height="32">
                                    <path id="envelope" d="M24.3,2.182H6.395A6.333,6.333,0,0,0,0,8.436V23.445A6.333,6.333,0,0,0,6.395,29.7H24.3A6.333,6.333,0,0,0,30.7,23.445V8.436A6.333,6.333,0,0,0,24.3,2.182ZM6.395,4.683H24.3a3.837,3.837,0,0,1,3.556,2.36l-9.795,9.58a3.908,3.908,0,0,1-5.428,0L2.839,7.044a3.837,3.837,0,0,1,3.556-2.36ZM24.3,27.2H6.395a3.8,3.8,0,0,1-3.837-3.752V10.312l8.267,8.08a6.507,6.507,0,0,0,9.045,0l8.267-8.08V23.445A3.8,3.8,0,0,1,24.3,27.2Z" transform="translate(0 -2.182)" fill="#FFFFFF"></path>
                                </svg>
                            </li>
                            <li>
                                <h4>Email</h4>
                                <div class="contact-btn">
                                    <a href="mailto:<?= $email ?>" class="btn button--secondary" title="<?= $email ?>"><?= $email ?></a>
                                </div>
                            </li>
                        </ul>
                        <ul class="col-xl-4 col-md-4 col-sm-12 col-12 list-unstyled text-center">
                            <li>
                                <svg viewBox="0 0 31.367 37.178">
                                    <path id="Path_798" data-name="Path 798" d="M22.238,12a6.2,6.2,0,1,0,6.239,6.2A6.218,6.218,0,0,0,22.238,12Zm0,9.294a3.1,3.1,0,1,1,3.12-3.1A3.109,3.109,0,0,1,22.238,21.293Z" transform="translate(-6.554 -2.702)"></path>
                                    <path id="Path_799" data-name="Path 799" d="M19.573,37.174a8.24,8.24,0,0,1-6.724-3.408C6.9,25.623,3.89,19.5,3.89,15.571a15.684,15.684,0,0,1,31.367,0c0,3.931-3.015,10.053-8.959,18.2a8.24,8.24,0,0,1-6.724,3.408Zm0-33.8a12.253,12.253,0,0,0-12.282,12.2c0,3.113,2.953,8.871,8.312,16.211a4.926,4.926,0,0,0,7.939,0c5.359-7.34,8.312-13.1,8.312-16.211a12.253,12.253,0,0,0-12.282-12.2Z" transform="translate(-3.89 0.004)"></path>
                                </svg>
                            </li>
                            <li>
                                <h4>Địa chỉ</h4>
                                <p><?= $address ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright d-flex">
        <div class="container">
            <div class="inner">
                <div id="copyright">
                    <div class="wsp">
                        @ Bản quyền thuộc về Glowup <span class="d-sm-inline-block d-none"> | </span><span class="opacity1">Cung cấp bởi <a href="https://khanhtre.vn/" rel="nofollow" title="khanhtre.vn" target="_blank">khanhtre.vn</a></span>
                    </div>
                </div>
            </div>
            <a href="#" class="back-to-top" title="Lên đầu trang">
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-up fa-w-10" width="20" height="20">
                    <path fill="#FFFFFF" d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z" class=""></path>
                </svg>
            </a>
        </div>
    </div>
</div>
<link href="<?= THEME_ASSETS . '/css/ajaxcart.css' ?>" rel="stylesheet" type="text/css" media="all">
<div class="backdrop__body-backdrop___1rvky"></div>
<div id="quick-view-product" class="quickview-product" style="display:none;">
    <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
    <div class="quick-view-product">
        <div class="block-quickview primary_block details-product">
            <div class="row">
                <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
                    <div class="image-block large-image col_large_default">
                    </div>
                </div>
                <div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border form_product_content" id="product-29973945">
                    <div class="head-qv group-status">
                        <h3 class="qwp-name title-product"></h3>
                        <div class="vend-qv group-status">
                            <div class="left_vend">
                                <div class="first_status ">Thương hiệu:
                                    <span class="vendor_ status_name">GlowUp</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quickview-info">
                        <span class="prices price-box">
                            <span class="price product-price sale-price"></span>
                            <del class="old-price"></del>
                        </span>
                    </div>
                    <div class="product-description"></div>
                    <div class="button_actions">
                        <button type="submit" class="btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail">
                            <span class="btn-content text_1">Mua ngay</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div title="Close" class="quickview-close close-window">
            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
                <path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path>
            </svg>
        </div>
    </div>
</div>
<link href="<?= THEME_ASSETS ?>/css/picbox.css" rel="stylesheet" type="text/css" media="all" />
<script src="<?= THEME_ASSETS ?>/js/picbox.js" type="text/javascript"></script>
<script src="<?= THEME_ASSETS ?>/js/main.js" type="text/javascript"></script>
<div class="addThis_listSharing addThis_listing">
    <div class="addThis_item">
        <a class="addThis_item-icon" href="tel:098 248 90 90" rel="nofollow" aria-label="phone"
            title="Gọi ngay cho chúng tôi">
            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="22" cy="22" r="22" fill="url(#paint2_linear)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.0087 9.35552C14.1581 9.40663 14.3885 9.52591 14.5208 9.61114C15.3315 10.148 17.5888 13.0324 18.3271 14.4726C18.7495 15.2949 18.8903 15.9041 18.758 16.3558C18.6214 16.8415 18.3953 17.0971 17.384 17.9109C16.9786 18.239 16.5988 18.5756 16.5391 18.6651C16.3855 18.8866 16.2617 19.3212 16.2617 19.628C16.266 20.3395 16.7269 21.6305 17.3328 22.6232C17.8021 23.3944 18.6428 24.3828 19.4749 25.1413C20.452 26.0361 21.314 26.6453 22.2869 27.1268C23.5372 27.7488 24.301 27.9064 24.86 27.6466C25.0008 27.5826 25.1501 27.4974 25.1971 27.4591C25.2397 27.4208 25.5683 27.0202 25.9268 26.5772C26.618 25.7079 26.7759 25.5674 27.2496 25.4055C27.8513 25.201 28.4657 25.2563 29.0844 25.5716C29.5538 25.8145 30.5779 26.4493 31.2393 26.9095C32.1098 27.5187 33.9703 29.0355 34.2221 29.3381C34.6658 29.8834 34.7427 30.5821 34.4439 31.3534C34.1281 32.1671 32.8992 33.6925 32.0415 34.3444C31.2649 34.9323 30.7145 35.1581 29.9891 35.1922C29.3917 35.222 29.1442 35.1709 28.3804 34.8556C22.3893 32.3887 17.6059 28.7075 13.8081 23.65C11.8239 21.0084 10.3134 18.2688 9.28067 15.427C8.67905 13.7696 8.64921 13.0495 9.14413 12.2017C9.35753 11.8438 10.2664 10.9575 10.9278 10.4633C12.0288 9.64524 12.5365 9.34273 12.9419 9.25754C13.2193 9.19787 13.7014 9.24473 14.0087 9.35552Z"
                    fill="white" />
                <defs>
                    <linearGradient id="paint2_linear" x1="22" y1="-7.26346e-09" x2="22.1219" y2="40.5458"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="50%" stop-color="#e8434c" />
                        <stop offset="100%" stop-color="#d61114" />
                    </linearGradient>
                </defs>
            </svg>
            <span class="tooltip-text">Gọi ngay cho chúng tôi</span>
        </a>
    </div>
    <div class="addThis_item">
        <a class="addThis_item-icon" href="<?= $zalo ?>" target="_blank"
            rel="nofollow noreferrer" aria-label="zalo" title="Chat với chúng tôi qua Zalo">
            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="22" cy="22" r="22" fill="url(#paint4_linear)" />
                <g clip-path="url(#clip0)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z" fill="white" />
                    <path d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z" fill="white" />
                    <path d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z" fill="white" />
                    <path d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z" fill="#0068FF" />
                </g>
                <defs>
                    <linearGradient id="paint4_linear" x1="22" y1="0" x2="22" y2="44" gradientUnits="userSpaceOnUse">
                        <stop offset="50%" stop-color="#3985f7" />
                        <stop offset="100%" stop-color="#1272e8" />
                    </linearGradient>
                    <clipPath id="clip0">
                        <rect width="26.3641" height="24.2" fill="white" transform="translate(8.78906 9.90234)" />
                    </clipPath>
                </defs>
            </svg>
            <span class="tooltip-text">Chat với chúng tôi qua Zalo</span>
        </a>
    </div>
    <div class="addThis_item">
        <a class="addThis_item-icon" href="mailto:support@glowup.vn" aria-label="email"
            title="Gửi email cho chúng tôi">
            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="22" cy="22" r="22" fill="url(#paint1_linear)" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4589 11.6667H32.5414C33.1621 11.6667 33.6993 11.8861 34.153 12.3245C34.6062 12.7634 34.8332 13.2904 34.8332 13.9064C34.8332 14.6435 34.599 15.3481 34.1319 16.0197C33.6639 16.6914 33.0816 17.2655 32.3846 17.7413C30.0672 19.3131 28.3185 20.4998 27.1311 21.3061C26.4785 21.7489 25.9931 22.0787 25.6817 22.2905C25.6355 22.3222 25.5634 22.3723 25.4675 22.4396C25.3643 22.5117 25.2337 22.6037 25.0729 22.7174C24.7625 22.9368 24.5048 23.114 24.2994 23.2495C24.0938 23.3846 23.8457 23.5363 23.5545 23.7043C23.2631 23.8724 22.9887 23.9983 22.7309 24.0823C22.4731 24.1661 22.2344 24.2082 22.0148 24.2082H22.0006H21.9863C21.7667 24.2082 21.5281 24.1661 21.2702 24.0823C21.0125 23.9983 20.7378 23.8721 20.4466 23.7043C20.1552 23.5363 19.9068 23.385 19.7017 23.2495C19.4964 23.114 19.2386 22.9368 18.9284 22.7174C18.7672 22.6037 18.6366 22.5118 18.5334 22.4393L18.5233 22.4323C18.4325 22.3688 18.3638 22.3208 18.3195 22.2905C17.9197 22.0157 17.4354 21.6846 16.8739 21.3022C16.2152 20.8532 15.4486 20.3329 14.5671 19.7359C12.9342 18.6303 11.9554 17.9654 11.6308 17.7413C11.0388 17.3494 10.4802 16.8107 9.95513 16.1248C9.43011 15.4387 9.16748 14.8018 9.16748 14.214C9.16748 13.4864 9.36539 12.8796 9.76184 12.3944C10.158 11.9095 10.7234 11.6667 11.4589 11.6667ZM33.4002 19.2392C31.4494 20.5296 29.7913 21.6405 28.4258 22.5725L34.8324 28.8337V18.0213C34.4217 18.4695 33.9443 18.8752 33.4002 19.2392ZM9.1665 18.0214C9.58659 18.4788 10.0691 18.8848 10.6132 19.2393C12.6414 20.5863 14.2935 21.6952 15.5757 22.5701L9.1665 28.8335V18.0214ZM34.0421 30.8208C33.6172 31.1883 33.1173 31.3745 32.5403 31.3745H11.4578C10.8809 31.3745 10.3807 31.1883 9.95575 30.8208L17.2287 23.7122C17.4107 23.8399 17.5789 23.9592 17.7306 24.0679C18.2751 24.4597 18.7165 24.7654 19.0556 24.9845C19.3944 25.2041 19.8455 25.4279 20.4091 25.6564C20.9726 25.8853 21.4976 25.9993 21.9847 25.9993H21.9989H22.0132C22.5002 25.9993 23.0253 25.8852 23.5888 25.6564C24.152 25.4279 24.6032 25.2041 24.9423 24.9845C25.2814 24.7654 25.7231 24.4597 26.2672 24.0679C26.427 23.955 26.5961 23.8362 26.7705 23.7141L34.0421 30.8208Z" fill="white" />
                <defs>
                    <linearGradient id="paint1_linear" x1="22" y1="0" x2="22" y2="44"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="50%" stop-color="#70f3ff" />
                        <stop offset="100%" stop-color="#00dcf0" />
                    </linearGradient>
                </defs>
            </svg>
            <span class="tooltip-text">Gửi email cho chúng tôi</span>
        </a>
    </div>
    <div class="addThis_item">
        <a class="addThis_item-icon" href="#lien-he" aria-label="Liên hệ" title="Liên hệ">
            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="22" cy="22" r="22" fill="url(#paint5_linear)" />
                <path d="M22 10C17.0374 10 13 13.7367 13 18.3297C13 24.0297 21.0541 32.3978 21.397 32.7512C21.7191 33.0832 22.2815 33.0826 22.603 32.7512C22.9459 32.3978 31 24.0297 31 18.3297C30.9999 13.7367 26.9626 10 22 10ZM22 22.5206C19.5032 22.5206 17.4719 20.6406 17.4719 18.3297C17.4719 16.0188 19.5032 14.1388 22 14.1388C24.4968 14.1388 26.528 16.0189 26.528 18.3297C26.528 20.6406 24.4968 22.5206 22 22.5206Z" fill="white" />
                <defs>
                    <linearGradient id="paint5_linear" x1="22" y1="0" x2="22" y2="44"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="50%" stop-color="#f5ae16" />
                        <stop offset="100%" stop-color="#d99009" />
                    </linearGradient>
                </defs>
            </svg>
            <span class="tooltip-text">Liên hệ</span>
        </a>
    </div>
</div>
<div id="popup-cart-desktop" class="popup-cart">
    <div class="header-popcart">
        <a title="Đóng" class="cart_btn-close" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 365.696 365.696" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                <g>
                    <path xmlns="http://www.w3.org/2000/svg" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0" fill="#ffffff" data-original="#000000" style="" class=""></path>
                </g>
            </svg></a>
    </div>
    <div class="cartPopupContainer">
        <?php get_template_part('template-parts/forms/form-contact'); ?>
    </div>
</div>
<script>
    jQuery(document).ready(function($) {
        $(".quick-view").click(function() {
            let product = $(this).closest(".item_product_main");

            let productName = product.find(".product-name a").text().trim();
            let productBrand = product.find(".brand").text().trim();
            let salePrice = product.find(".price-box .price").text().trim();
            let comparePrice = product.find(".price-box .compare-price").text().trim();
            let productImage = product.find(".product-image img:first").data("src"); // Ảnh đầu tiên
            let productDescription = product.find(".product-description").html()
            // Gán dữ liệu vào popup
            $("#quick-view-product .qwp-name").text(productName);
            $("#quick-view-product .vendor_").text(productBrand);
            if (salePrice) {
                $("#quick-view-product .sale-price").text(salePrice);
            } else {
                $("#quick-view-product .sale-price").hide();
            }
            if (comparePrice) {
                $("#quick-view-product .old-price").text(comparePrice);
            } else {
                $("#quick-view-product .old-price").hide();
            }
            $("#quick-view-product .image-block").html(`<img src="${productImage}" alt="${productName}">`);
            if(productDescription){
                $("#quick-view-product .product-description").html(productDescription);
            }else{
                $("#quick-view-product .product-description").hide();
            }

            // Hiển thị popup
            $("#quick-view-product").fadeIn();
        });

        // Đóng popup khi bấm nút close
        $(".quickview-close, .quickview-overlay").click(function() {
            $("#quick-view-product").fadeOut();
        });


        $('a[href="#form"], .item_product_main button.btn-buy').on('click', function(e) {
            e.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ a
            $('#popup-cart-desktop').addClass('active'); // Hiển thị popup
            $('.backdrop__body-backdrop___1rvky').addClass('active'); // Hiển thị popup
        });

        // Đóng popup khi bấm vào vùng overlay hoặc nút đóng (nếu có)
        $('.backdrop__body-backdrop___1rvky, .popup-cart .cart_btn-close').on('click', function(e) {
            $('#popup-cart-desktop').removeClass('active'); // Hiển thị popup
            $('.backdrop__body-backdrop___1rvky').removeClass('active'); // Hiển thị popup
        });
    });
</script>