<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Gen_Pro
 */
$error = get_field('error', 'options');

get_header();
?>
<section>
	<div class="container-fluid">
		<div class="body-404">
			<img src="<?= get_template_directory_uri() ?>/assets/img/404.svg" alt="404">
			<h1><?= $error['not_found'] ?></h1>
			<a href="<?= home_url('/') ?>"> <?= $error['btn'] ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
