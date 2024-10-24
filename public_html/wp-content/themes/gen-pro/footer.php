<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gen_Pro
 */
$footer = get_field('footer', 'options');
$form = get_field('form', 'options');
$cart = get_field('cart', 'options');
$ordering = get_field('ordering', 'options');
$success = get_field('success', 'options');
$header = get_field('header', 'options');
?>
</main>
<footer>
	<div class="container-fluid">
		<button class="btn footer-btn" data-toggle="modal" data-target="#contactModal"><?= $footer['btn_text'] ?> <span class="arrow">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z"
						fill="#1EA574" />
				</svg>
			</span></button>
	</div>

	<div class="container-fluid">
		<div class="footer">
			<svg class="footer_svg" width="336" height="404" viewBox="0 0 336 404" fill="none"
				xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_2033_2548)">
					<path
						d="M381.89 -250.941L209.153 187.645L197.839 183.849L89.2239 147.362L220.941 364.158L121.36 324.938L89.7779 409.303"
						stroke="#E5EFF1" stroke-width="50" stroke-miterlimit="22.9256" stroke-linecap="round"
						stroke-linejoin="round" />
				</g>
				<defs>
					<clipPath id="clip0_2033_2548">
						<rect width="336" height="404" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<div class="row">
				<div class="col-sm-5">
					<div class="footer-header">
						<a href="<?= home_url('/') ?>" class="footer-logo">
							<img src="<?= $footer['logo']['url'] ?>" alt="<?= $footer['logo']['alt'] ?>" width="<?= $footer['logo']['width'] ?>" height="<?= $footer['logo']['height'] ?>" />
						</a>
						<p><?= $footer['text'] ?></p>
					</div>
				</div>
			</div>
			<div class="footer-nav">
				<h2 class="footer-section-title"><?= $footer['nav_title'] ?></h2>
				<div class="row">
					<div class="col-sm-6">
						<div class="row row-gap-30">
							<div class="col-6 col-sm">
								<h3>Главная</h3>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="#">Категории</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Товары</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">О нас</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Сертификаты</a>
									</li>
								</ul>
							</div>
							<div class="col-6 col-sm">
								<h3>Каталог</h3>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#">Active</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled">Disabled</a>
									</li>
								</ul>
							</div>
							<div class="col-6 col-sm">
								<h3>О нас</h3>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#">Active</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled">Disabled</a>
									</li>
								</ul>
							</div>
							<div class="col-6 col-sm">
								<h3>Новости</h3>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#">Active</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled">Disabled</a>
									</li>
								</ul>
							</div>
							<div class="col-6 col-sm">
								<h3>Контакты</h3>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#">Active</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled">Disabled</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-social">
				<h3><?= $footer['social_title'] ?></h3>
				<ul class="nav">
					<?php foreach ($footer['list'] as $key => $item): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?= $item['link'] ?>">
								<img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>" width="<?= $item['icon']['width'] ?>" height="<?= $item['icon']['height'] ?>">
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

		</div>
		<div class="footer-second">
			<p>Gen Pro ©2024</p>
			<p><?= $footer['text_footer'] ?></p>
			<p>Made by ABBA</p>
		</div>
	</div>
</footer>

<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content step-1">
			<div class="modal-header">
				<h5 class="modal-title" id="cartModalLabel"><?= $cart['title'] ?><span id="cartItemCount"></span></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M8.44727 21.5538L15.001 15L21.5548 21.5538M21.5548 8.44629L14.9998 15L8.44727 8.44629" stroke="#646464" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>

				</button>
			</div>
			<div class="modal-body">
				<div class="cart-body">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="startOrder" class="btn gen-btn"><?= $cart['btn'] ?></button>
				<p><?= $cart['text_under_btn'] ?></p>
			</div>
		</div>
		<div class="modal-content step-2 d-none">
			<div class="modal-header">
				<h5 class="modal-title" id="cartModalLabel"><?= $ordering['title'] ?></h5>
			</div>
			<div class="modal-body">
				<div class="order-body">
				</div>
			</div>
			<div class="modal-footer">
				<form id="orderForm" method="POST">
					<div class="form-floating">
						<input required type="text" name="user_name" class="form-control" id="userName" placeholder="<?= $form['form_text_name'] ?>">
						<label for="userName"><?= $form['form_text_name'] ?></label>
					</div>
					<div class="form-floating">
						<input required type="text" name="user_phone" class="form-control" data-plugin="phone-mask" id="userPhone" placeholder="+998 (__) ___-__-__">
						<label for="userPhone"><?= $form['form_text_phone'] ?></label>
					</div>
					<button type="submit" id="continueOrder" class="btn gen-btn"><?= $ordering['btn'] ?></button>
				</form>
				<p><?= $ordering['text'] ?></p>
			</div>
		</div>
		<div class="modal-content step-3 d-none">
			<div class="modal-body">
				<div class="succes-order">
					<h4><?= $success['title'] ?></h4>
					<a class="btn gen-btn" href="<?= home_url(); ?>/categories/"> <?= $success['btn'] ?></a>
					<p><?= $success['text'] ?></p>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<div class="succes-order">
					<h4>Спасибо за заявку!</h4>
					<p>Наши операторы объязательно свяжутся с вами в ближайшее время!</p>
				</div>

			</div>
		</div>
	</div>
</div>




<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<form action="/telegram.php" method="POST">
				<div class="modal-header">
					<h5 class="modal-title" id="contactModalLabel"><?= $form['title'] ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-floating">
						<input required type="text" name="user_name" class="form-control" id="userName" placeholder="<?= $form['form_text_name'] ?>">
						<label for="userName"><?= $form['form_text_name'] ?></label>
					</div>
					<div class="form-floating">
						<input required type="text" name="user_phone" class="form-control" data-plugin="phone-mask" id="userPhone" placeholder="+998 (__) ___-__-__">
						<label for="userPhone"><?= $form['form_text_phone'] ?></label>
					</div>
					<div class="form-floating">
						<textarea name="user_message" oninput="auto_grow(this)" class="form-control" id="userMessage" cols="30" rows="10" placeholder="<?= $form['form_text_message'] ?>"></textarea>
						<label for="userMessage"><?= $form['form_text_message'] ?></label>
					</div>
				</div>
				<div class="modal-footer">
					<input type="text" name="extra_field" style="display:none;">

					<button type="submit" class="btn gen-btn"><?= $form['btn_text'] ?></button>
					<p>Lorem ipsum dolor sit amet consectetur. Praesent enim integer enim quam.</p>
				</div>

			</form>
		</div>
	</div>
</div>



<div class="modal fade" id="mobMenu" tabindex="-1" aria-labelledby="mobMenuLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mobMenuLabel">
					<img src="<?= $header['logo']['url'] ?>" alt="<?= $header['logo']['alt'] ?>" width="<?= $header['logo']['width'] ?>" height="<?= $header['logo']['height'] ?>" />

				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul class="navbar-nav ">
					<?php
					wp_nav_menu(array(
						'menu'				=> 'mobMenu',
						'container'			=> false,
						'items_wrap'      => '%3$s',
						'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
						'walker'			=> new WP_Bootstrap_Navwalker()
					));
					?>
				</ul>
			</div>

		</div>
	</div>
</div>

<div class="mobile-footer d-sm-none">
	<div class="dropdown gen-cat-drop dropup">
		<button class="btn gen-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
			Каталог
		</button>
		<ul class="dropdown-menu">
			<?php
			$terms = get_terms(array(
				'taxonomy' => 'cats',
			));
			?>
			<?php foreach ($terms as $key => $item) : ?>
				<?php
				$icon = get_field('icon', $item);
				?>
				<li class="nav-item <?= ($item->slug == get_query_var('cats') ? 'active' : '') ?>">
					<a href="<?= get_category_link($item) ?>" class="dropdown-item">
						<?php if ($icon) : ?>
							<img src="<?= $icon['url'] ?>" alt="<?= $item->name ?>">
						<?php endif; ?>
						<?= $item->name ?>
						<span class="arrow">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z" fill="currentColor"></path>
							</svg>
						</span>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="right-bar">
		<div class="dropdown gen-lang dropup">
			<button class="btn" type="button" data-toggle="dropdown" aria-expanded="false">
				<?= apply_filters('wpml_current_language', null); ?>
			</button>
			<div class="dropdown-menu">
				<?php do_action('wpml_add_language_selector'); ?>
			</div>
		</div>
		<button data-toggle="modal" data-target="#cartModal">
			<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_338_2538)">
					<path d="M14.1956 2.54813C14.0198 2.33715 13.7997 2.16747 13.551 2.05113C13.3022 1.9348 13.0309 1.87466 12.7562 1.875H2.65125L2.625 1.65562C2.57128 1.19964 2.35212 0.779208 2.00906 0.474049C1.666 0.16889 1.22289 0.000213621 0.76375 0L0.625 0C0.45924 0 0.300268 0.065848 0.183058 0.183058C0.065848 0.300269 0 0.45924 0 0.625C0 0.79076 0.065848 0.949732 0.183058 1.06694C0.300268 1.18415 0.45924 1.25 0.625 1.25H0.76375C0.916833 1.25002 1.06459 1.30622 1.17898 1.40795C1.29338 1.50967 1.36646 1.64984 1.38437 1.80187L2.24437 9.11438C2.33366 9.87487 2.69905 10.5761 3.27119 11.085C3.84334 11.5939 4.58241 11.875 5.34812 11.875H11.875C12.0408 11.875 12.1997 11.8092 12.3169 11.6919C12.4342 11.5747 12.5 11.4158 12.5 11.25C12.5 11.0842 12.4342 10.9253 12.3169 10.8081C12.1997 10.6908 12.0408 10.625 11.875 10.625H5.34812C4.96128 10.6239 4.58425 10.5032 4.26871 10.2794C3.95317 10.0556 3.71457 9.73972 3.58562 9.375H11.0356C11.7683 9.37504 12.4777 9.11764 13.0399 8.64777C13.6021 8.1779 13.9813 7.52544 14.1112 6.80438L14.6019 4.08313C14.6508 3.81313 14.6398 3.53567 14.5696 3.2704C14.4994 3.00513 14.3717 2.75855 14.1956 2.54813ZM13.375 3.86125L12.8837 6.5825C12.8057 7.01562 12.5778 7.4075 12.2399 7.6895C11.902 7.9715 11.4757 8.12567 11.0356 8.125H3.38687L2.79875 3.125H12.7562C12.8481 3.12445 12.9389 3.14414 13.0222 3.18266C13.1055 3.22118 13.1794 3.27759 13.2385 3.34788C13.2975 3.41817 13.3404 3.50061 13.364 3.58934C13.3876 3.67806 13.3913 3.7709 13.375 3.86125Z" fill="#1EA574" />
					<path d="M4.375 15C5.06536 15 5.625 14.4404 5.625 13.75C5.625 13.0596 5.06536 12.5 4.375 12.5C3.68464 12.5 3.125 13.0596 3.125 13.75C3.125 14.4404 3.68464 15 4.375 15Z" fill="#1EA574" />
					<path d="M10.625 15C11.3154 15 11.875 14.4404 11.875 13.75C11.875 13.0596 11.3154 12.5 10.625 12.5C9.93464 12.5 9.375 13.0596 9.375 13.75C9.375 14.4404 9.93464 15 10.625 15Z" fill="#1EA574" />
				</g>
				<defs>
					<clipPath id="clip0_338_2538">
						<rect width="15" height="15" fill="white" />
					</clipPath>
				</defs>
			</svg>


		</button>
		<button data-toggle="modal" data-target="#mobMenu">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M3.33333 15H16.6667C17.125 15 17.5 14.625 17.5 14.1667C17.5 13.7083 17.125 13.3333 16.6667 13.3333H3.33333C2.875 13.3333 2.5 13.7083 2.5 14.1667C2.5 14.625 2.875 15 3.33333 15ZM3.33333 10.8333H16.6667C17.125 10.8333 17.5 10.4583 17.5 10C17.5 9.54167 17.125 9.16667 16.6667 9.16667H3.33333C2.875 9.16667 2.5 9.54167 2.5 10C2.5 10.4583 2.875 10.8333 3.33333 10.8333ZM2.5 5.83333C2.5 6.29167 2.875 6.66667 3.33333 6.66667H16.6667C17.125 6.66667 17.5 6.29167 17.5 5.83333C17.5 5.375 17.125 5 16.6667 5H3.33333C2.875 5 2.5 5.375 2.5 5.83333Z" fill="#1EA574" />
			</svg>
		</button>
	</div>
</div>

<div class="addons-bar">
	<a href="#toTop" class="gen-icon">
		<svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M5.99511 0.5C5.46863 0.505214 4.96527 0.732334 4.5941 1.13214L0.291002 5.72857C0.104617 5.92932 -4.06478e-07 6.20087 -3.94105e-07 6.48393C-3.81732e-07 6.76698 0.104617 7.03854 0.291002 7.23929C0.384032 7.33971 0.494713 7.41942 0.61666 7.47381C0.738607 7.52821 0.869407 7.55621 1.00151 7.55621C1.13362 7.55621 1.26442 7.52821 1.38637 7.47381C1.50831 7.41942 1.619 7.33971 1.71203 7.23929L4.99439 3.71429L4.99439 14.4286C4.99439 14.7127 5.09982 14.9853 5.2875 15.1862C5.47517 15.3871 5.7297 15.5 5.99511 15.5C6.26052 15.5 6.51506 15.3871 6.70273 15.1862C6.8904 14.9853 6.99583 14.7127 6.99583 14.4286L6.99583 3.71429L10.2882 7.23929C10.4753 7.44104 10.7296 7.55495 10.9952 7.55595C11.2607 7.55696 11.5158 7.44498 11.7042 7.24464C11.8927 7.04431 11.9991 6.77204 12 6.48772C12.0009 6.2034 11.8963 5.93032 11.7092 5.72857L7.40613 1.13214C7.03251 0.729727 6.52507 0.502392 5.99511 0.5Z" fill="#1EA574" />
		</svg>
	</a>
	<a href="#" class="gen-icon-alt" data-toggle="modal" data-target="#contactModal">
		<svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#clip0_164_1482)">
				<path d="M15 7.52936C14.9096 6.06687 14.3932 4.66281 13.5145 3.49025C12.6357 2.3177 11.4331 1.42792 10.0548 0.930608C8.67649 0.433297 7.18279 0.350194 5.75782 0.691546C4.33286 1.0329 3.03894 1.78378 2.03557 2.85162C1.0322 3.91947 0.363248 5.25759 0.111187 6.70102C-0.140875 8.14446 0.0349708 9.6301 0.617046 10.9748C1.19912 12.3195 2.16198 13.4645 3.38692 14.2686C4.61185 15.0727 6.04532 15.5007 7.5106 15.5H11.875C12.7035 15.4992 13.4979 15.1697 14.0838 14.5838C14.6696 13.9979 14.9991 13.2035 15 12.375V7.52936ZM13.75 12.375C13.75 12.8723 13.5524 13.3492 13.2008 13.7008C12.8492 14.0524 12.3723 14.25 11.875 14.25H7.5106C6.62868 14.2496 5.75675 14.0633 4.95166 13.7033C4.14657 13.3433 3.42639 12.8176 2.8381 12.1606C2.24696 11.5039 1.80305 10.7284 1.53616 9.8861C1.26926 9.0438 1.18553 8.15417 1.2906 7.27686C1.4565 5.89307 2.07822 4.60385 3.05775 3.61244C4.03728 2.62102 5.31891 1.9838 6.7006 1.80124C6.97012 1.76746 7.24147 1.75034 7.5131 1.74999C8.96965 1.74601 10.3811 2.25493 11.5 3.18749C12.1534 3.73058 12.6898 4.40071 13.0766 5.15725C13.4633 5.9138 13.6924 6.74101 13.75 7.58874V12.375Z" fill="#F6FBFC" />
				<path d="M5 6.125H7.5C7.66576 6.125 7.82473 6.05915 7.94194 5.94194C8.05915 5.82473 8.125 5.66576 8.125 5.5C8.125 5.33424 8.05915 5.17527 7.94194 5.05806C7.82473 4.94085 7.66576 4.875 7.5 4.875H5C4.83424 4.875 4.67527 4.94085 4.55806 5.05806C4.44085 5.17527 4.375 5.33424 4.375 5.5C4.375 5.66576 4.44085 5.82473 4.55806 5.94194C4.67527 6.05915 4.83424 6.125 5 6.125Z" fill="#F6FBFC" />
				<path d="M10 7.375H5C4.83424 7.375 4.67527 7.44085 4.55806 7.55806C4.44085 7.67527 4.375 7.83424 4.375 8C4.375 8.16576 4.44085 8.32473 4.55806 8.44194C4.67527 8.55915 4.83424 8.625 5 8.625H10C10.1658 8.625 10.3247 8.55915 10.4419 8.44194C10.5592 8.32473 10.625 8.16576 10.625 8C10.625 7.83424 10.5592 7.67527 10.4419 7.55806C10.3247 7.44085 10.1658 7.375 10 7.375Z" fill="#F6FBFC" />
				<path d="M10 9.875H5C4.83424 9.875 4.67527 9.94085 4.55806 10.0581C4.44085 10.1753 4.375 10.3342 4.375 10.5C4.375 10.6658 4.44085 10.8247 4.55806 10.9419C4.67527 11.0592 4.83424 11.125 5 11.125H10C10.1658 11.125 10.3247 11.0592 10.4419 10.9419C10.5592 10.8247 10.625 10.6658 10.625 10.5C10.625 10.3342 10.5592 10.1753 10.4419 10.0581C10.3247 9.94085 10.1658 9.875 10 9.875Z" fill="#F6FBFC" />
			</g>
			<defs>
				<clipPath id="clip0_164_1482">
					<rect width="15" height="15" fill="white" transform="translate(0 0.5)" />
				</clipPath>
			</defs>
		</svg>

	</a>
</div>

<div class="addToCartToast">
	<!-- <div class="card mb-1">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img src="https://websize.uz/wp-content/uploads/2024/10/product.png" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Товар добавлен в корзину!</p>
				</div>
			</div>
		</div>
	</div> -->
</div>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Получаем корзину при загрузке страницы
		getCart();
		let productsArr = []
		const addToCartButton = document.getElementById('addToCart');
		const startOrderButton = document.getElementById('startOrder');
		const toastContainer = document.querySelector(".addToCartToast"); // Используем существующий контейнер
		startOrderButton.disabled = true;
		addToCartButton.addEventListener('click', function() {
			const productId = this.getAttribute('data-product-id');
			const productName = this.getAttribute('data-product-name');
			const productImage = this.getAttribute('data-product-image');

			addToCart(productId, productName, productImage)
				.then((data) => {
					showToast(productName, productImage); // Показать уведомление о добавлении
					startOrderButton.disabled = false;
				})
				.catch((error) => {
					console.error("Error:", error);
				});
		});

		// Функция для создания и отображения карточки уведомления
		function showToast(productName, productImage) {
			const toastHtml = `
      <div class="card mb-1">
        <div class="row no-gutters">
          <div class="col-4">
            <img src="${productImage}" alt="${productName}">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title">${productName}</h5>
              <p class="card-text">Товар добавлен в корзину!</p>
            </div>
          </div>
        </div>
      </div>`;

			toastContainer.innerHTML = toastHtml; // Очищаем и добавляем новую карточку
		}


		// Функция для получения корзины из сессии
		function getCart() {
			const formData = new FormData();
			formData.append('action', 'get');

			fetch('/wp-content/themes/gen-pro/template-parts/cart-handler.php', {
					method: 'POST',
					body: formData
				})
				.then(response => response.json())
				.then(data => {
					updateCartModal(data);
					productsArr = data
					toggleStartOrderButton(productsArr);
				})
				.catch(error => {
					console.error('Error:', error);
				});
		}

		// Функция для отправки товара на сервер
		function addToCart(productId, productName, productImage) {
			return new Promise((resolve, reject) => {
				const formData = new FormData();
				formData.append('action', 'add');
				formData.append('productId', productId);
				formData.append('productName', productName);
				formData.append('productImage', productImage);

				fetch('/wp-content/themes/gen-pro/template-parts/cart-handler.php', {
						method: 'POST',
						body: formData
					})
					.then(response => {
						if (!response.ok) {
							throw new Error(`Server error: ${response.status}`);
						}
						return response.json();
					})
					.then(data => {
						updateCartModal(data);
						resolve(data); // Оповещаем об успешном выполнении
					})
					.catch(error => {
						console.error('Error:', error);
						reject(error); // Оповещаем об ошибке
					});
			});
		}


		// Функция для обновления модального окна корзины
		function updateCartModal(cart) {
			const cartModalBody = document.querySelector('.cart-body');
			const cartItemCountElem = document.getElementById('cartItemCount');

			if (cart.length === 0) {
				cartModalBody.innerHTML = '<p>Корзина пуста</p>';
				cartItemCountElem.textContent = '';
			} else {
				const uniqueItemsCount = cart.length;
				cartModalBody.innerHTML = cart.map(item => `
                <div class="cart-item" data-product-id="${item.id}">
                    <div class="cart-item-left">
                        <img src="${item.image}" alt="${item.name}" class="product-image">
                        <div class="product-details">
                            <h5 class="product-title">${item.name}</h5>
                        </div>
                    </div>
                    <div class="cart-item-right">
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity">${item.quantity}</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <button class="remove-btn"><?= $cart['delete'] ?></button>
                    </div>
                </div>
            `).join('');
				cartItemCountElem.textContent = `[${uniqueItemsCount}]`;
			}
		}

		function updateOrderModal(cart) {
			const cartModalBody = document.querySelector('.order-body');
			const cartItemCountElem = document.getElementById('cartItemCount');
			if (cart.length === 0) {
				cartModalBody.innerHTML = '<p>Корзина пуста</p>';
				cartItemCountElem.textContent = '';
			} else {
				const uniqueItemsCount = cart.length;
				cartModalBody.innerHTML = cart.map(item => `
                <div class="cart-item" data-product-id="${item.id}">
                    <div class="cart-item-left">
                        <img src="${item.image}" alt="${item.name}" class="product-image">
                        <div class="product-details">
                            <h5 class="product-title">${item.name}</h5>
                        </div>
                    </div>
                    <div class="cart-item-right">                                      
                         <span class="quantity">x${item.quantity}</span>                                               
                    </div>
                </div>
            `).join('');
				cartItemCountElem.textContent = `(${uniqueItemsCount})`;
			}
		}

		function toggleStartOrderButton(cart) {
			if (cart.length === 0) {
				startOrderButton.disabled = true;
			} else {
				startOrderButton.disabled = false;
			}
		}
		// Делегирование событий для кнопок "Удалить" и изменения количества
		document.querySelector('.cart-body').addEventListener('click', function(event) {
			if (event.target.classList.contains('remove-btn')) {
				const cartItem = event.target.closest('.cart-item');
				const productId = cartItem.getAttribute('data-product-id');
				removeFromCart(productId);
				cartItem.remove();
			}

			if (event.target.classList.contains('minus')) {
				const cartItem = event.target.closest('.cart-item');
				const quantityElem = event.target.nextElementSibling;
				let quantity = parseInt(quantityElem.textContent);

				if (quantity > 1) {
					quantity--;
					quantityElem.textContent = quantity;
					updateCart(cartItem.getAttribute('data-product-id'), quantity);
				}
			}

			if (event.target.classList.contains('plus')) {
				const cartItem = event.target.closest('.cart-item');
				const quantityElem = event.target.previousElementSibling;
				let quantity = parseInt(quantityElem.textContent);

				quantity++;
				quantityElem.textContent = quantity;
				updateCart(cartItem.getAttribute('data-product-id'), quantity);
			}
		});

		// Функции для обновления количества и удаления из корзины на сервере
		function updateCart(productId, quantity) {
			const formData = new FormData();
			formData.append('action', 'update');
			formData.append('productId', productId);
			formData.append('quantity', quantity);

			fetch('/wp-content/themes/gen-pro/template-parts/cart-handler.php', {
					method: 'POST',
					body: formData
				})
				.then(response => response.json())
				.then(data => {
					updateCartModal(data);
				});
		}

		function removeFromCart(productId) {
			const formData = new FormData();
			formData.append('action', 'remove');
			formData.append('productId', productId);

			fetch('/wp-content/themes/gen-pro/template-parts/cart-handler.php', {
					method: 'POST',
					body: formData
				})
				.then(response => response.json())
				.then(data => {
					updateCartModal(data);
					toggleStartOrderButton(data);
				});
		}
		document.querySelector('#startOrder').addEventListener('click', function() {
			document.querySelector('.step-1').classList.add('d-none');
			document.querySelector('.step-2').classList.remove('d-none');
			updateOrderModal(productsArr)

		})
	});

	document.addEventListener('DOMContentLoaded', function() {
		// Получаем форму по id
		const form = document.getElementById('orderForm');

		// Перехват отправки формы
		form.addEventListener('submit', function(event) {
			event.preventDefault(); // Предотвращаем стандартное поведение формы (редирект)

			// Собираем данные формы
			const formData = new FormData(form);

			// Отправляем данные на сервер через fetch
			fetch('/telegram.php', {
					method: 'POST',
					body: formData
				})
				.then(response => response.text()) // Получаем ответ сервера (если нужно)
				.then(data => {

					document.querySelector('.step-2').classList.add('d-none');
					document.querySelector('.step-3').classList.remove('d-none');
					localStorage.removeItem('cart');
				})
				.catch(error => {
					console.error('Ошибка:', error); // Обрабатываем ошибки
					alert('Ошибка при оформлении заказа. Попробуйте еще раз.');
				});
		});
	});
</script>

<?php wp_footer(); ?>

</body>

</html>