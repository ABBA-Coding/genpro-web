<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gen_Pro
 */
$header = get_field('header', 'options');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="toTop">
	<?php wp_body_open(); ?>
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light gen-navbar">
				<a class="navbar-brand" href="<?= home_url('/') ?>">
					<img src="<?= $header['logo']['url'] ?>" alt="<?= $header['logo']['alt'] ?>" width="<?= $header['logo']['width'] ?>" height="<?= $header['logo']['height'] ?>" />
				</a>
				<ul class="navbar-nav flex-row sm-none">
					<?php
					wp_nav_menu(array(
						'menu'				=> 'header-nav',
						'container'			=> false,
						'items_wrap'      => '%3$s',
						'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
						'walker'			=> new WP_Bootstrap_Navwalker()
					));
					?>
					<li class="nav-item">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#cartModal">

							<svg width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#a)" fill="#1EA574">
									<path d="M11.357 2.038a1.496 1.496 0 0 0-1.152-.538H2.121L2.1 1.325A1.5 1.5 0 0 0 .611 0H.5a.5.5 0 1 0 0 1h.111a.5.5 0 0 1 .496.442l.689 5.85A2.5 2.5 0 0 0 4.277 9.5H9.5a.5.5 0 0 0 0-1H4.279a1.5 1.5 0 0 1-1.41-1h5.96a2.5 2.5 0 0 0 2.46-2.056l.393-2.177a1.496 1.496 0 0 0-.325-1.228ZM10.7 3.09l-.393 2.177A1.5 1.5 0 0 1 8.828 6.5H2.71l-.471-4h7.966a.5.5 0 0 1 .495.589ZM3.5 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM8.5 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" />
								</g>
								<defs>
									<clipPath id="a">
										<path fill="#fff" d="M0 0h12v12H0z" />
									</clipPath>
								</defs>
							</svg>
						</a>
					</li>
				</ul>
				<div class="right-nav-bar sm-none">
					<div class="dropdown gen-lang">
						<button class="btn" type="button" data-toggle="dropdown" aria-expanded="false">
							<?= apply_filters('wpml_current_language', null); ?>
						</button>
						<div class="dropdown-menu">
							<?php do_action('wpml_add_language_selector'); ?>
						</div>
					</div>

					<a href="tel:<?= $header['phone_consultant'] ?>" class="gen-nav-call">
						<div class="gen-nav-call-img">
							<img src="<?= $header['img_consultant']['url'] ?>" alt="call" width="30" height="30" />
						</div>
						<div class="gen-nav-call-content">
							<small><?= $header['text_consultant'] ?></small>
							<span><?= $header['phone_consultant'] ?></sы>
						</div>
					</a>
				</div>
			</nav>
		</div>
	</header>
	<main>