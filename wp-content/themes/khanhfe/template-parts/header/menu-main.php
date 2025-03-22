<?php
$global_settings = get_field('global_settings', 'option');
$hotline = isset($global_settings['hotline']) ? $global_settings['hotline'] : '098 248 90 90';
$email = isset($global_settings['email']) ? $global_settings['email'] : 'glowupviet@gmail.com';
$logo = isset($global_settings['logo']) ? $global_settings['logo'] : '';
?>
<div class="header">
	<div class="middle-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-2 col-lg-3 col-md-6 col-8 block-logo">
					<div class="d-xl-none d-inline-block">
						<div class="category-action color-white">
							<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
								class="icon" viewBox="0 0 384 384" width="384" height="384">
								<rect fill="currentColor" x="0" y="277.333" width="384" height="42.667"></rect>
								<rect fill="currentColor" x="0" y="170.667" width="384" height="42.667"></rect>
								<rect fill="currentColor" x="0" y="64" width="384" height="42.667"></rect>
							</svg>
						</div>
					</div>
					<a href="<?= home_url() ?>" class="logo">
						<?php
						if ($logo) :
							wp_get_attachment_image($logo['ID'], 'full', false, ['class' => 'img-fluid']);
						else : ?>
							<img width="200" height="79" src="<?= THEME_ASSETS ?>/images/logo.jpg" alt="Glowup">
						<?php endif; ?>

					</a>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 col-12" id="search-header">
					<div class="block-search">
						<div class="nd-header-search nd-searchs">
							<form action="" method="get" class="nd-header-search-form" role="search">
								<input type="text" name="s" class="search-auto form-control"
									placeholder="Tìm kiếm sản phẩm" autocomplete="off" />
								<input type="hidden" name="post_type" value="product" />
								<button class="btn btn-default" type="submit" aria-label="Tìm kiếm">
									<svg xmlns:xlink="http://www.w3.org/1999/xlink"
										xmlns="http://www.w3.org/2000/svg"
										class="modal__toggle-open icon icon-search" aria-hidden="true"
										focusable="false" role="presentation" width="22.468" height="22.4">
										<defs>
											<symbol id="icon-search" viewBox="0 0 22.468 22.4">
												<path id="search"
													d="M21.7,20.405l-5.464-5.464a9.169,9.169,0,1,0-1.294,1.294L20.405,21.7A.915.915,0,1,0,21.7,20.405ZM9.152,16.475a7.324,7.324,0,1,1,7.324-7.324A7.324,7.324,0,0,1,9.152,16.475Z"
													transform="translate(0.232 0.232)" stroke-width="0.4px"></path>
											</symbol>
										</defs>
										<use href="#icon-search"></use>
									</svg>
								</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 col-md-6 col-4">
					<div class="row">
						<div class="col-xl-7 header-contact d-none d-xl-block">
							<ul>
								<li class="header-phone">
									<span class="icon"><img src="<?= THEME_ASSETS ?>/images/temp/telephone-call.png"
											alt="Glowup"></span>
									<span class="text">
										<span>Hotline:</span>
										<a href="tel:<?= $hotline ?>" title="<?= $hotline ?>"><?= $hotline ?></a>
									</span>
								</li>
								<li class="header-email">
									<span class="icon"><img src="<?= THEME_ASSETS ?>/images/temp/email.png" alt="Glowup"></span>
									<span class="text line-clamp line-clamp-2">
										<span>Email:</span>
										<a href="mailto:<?= $email ?>"
											title="<?= $email ?>"><?= $email ?></a>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-menu">
		<div class="container">
			<div class="block-menu">
				<div class="heade_menunavs">
					<div class="close-menu d-xl-none d-block">
						Menu
						<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
							aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
							fill="none" viewBox="0 0 18 17" width="18" height="17">
							<path
								d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
								fill="currentColor">
							</path>
						</svg>
					</div>
					<div class="wrap_main">
						<div class="bg-header-nav ">
							<nav class="header-nav">
								<?php
								wp_nav_menu(array(
									'theme_location' => 'main-menu',
									'container' => '',
									'menu_class' => 'item_big',
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								));
								?>
							</nav>
							<div class="flash-scroll">
								<a href="javascript:;" data-href=".section_best_sellers" class="scroll-down">
									<img width="12" src="<?= THEME_ASSETS ?>/images/temp/menu_icon_3.png" alt="Glowup"> Flash
									Sale
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>