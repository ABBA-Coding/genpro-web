<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gen_Pro
 */
$banner = get_field('banner', get_option('page_on_front'));
$content = get_field('content', 'options');

get_header();
?>
<section>
	<div class="container-fluid">
		<div id="carouselExampleIndicators" class="carousel slide gen-carousel" data-ride="carousel">
			<ol class="carousel-indicators">
				<?php foreach ($banner['list'] as $key => $item): ?>
					<li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class="<?= ($key == 0) ? 'active' : '' ?>"></li>
				<?php endforeach; ?>
			</ol>
			<div class="carousel-inner">
				<?php foreach ($banner['list'] as $key => $item): ?>
					<div class="carousel-item <?= ($key == 0) ? 'active' : '' ?> ">
						<img src="<?= $item['img'] ?>" class="d-block w-100" alt="...">
						<p><?= $item['title'] ?></p>
						<p><?= $item['subtitle'] ?></p>
						<p><?= $item['text'] ?></p>
						<button><?= $banner['btn'] ?></button>
					</div>
				<?php endforeach; ?>
			</div>
			<button class="carousel-control carousel-control-prev" type="button"
				data-target="#carouselExampleIndicators" data-slide="prev">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M4.99996 10C5.00401 9.5616 5.18066 9.14243 5.49162 8.83335L9.06663 5.25002C9.22276 5.09481 9.43397 5.00769 9.65413 5.00769C9.87428 5.00769 10.0855 5.09481 10.2416 5.25002C10.3197 5.32749 10.3817 5.41965 10.424 5.5212C10.4663 5.62275 10.4881 5.73167 10.4881 5.84168C10.4881 5.95169 10.4663 6.06062 10.424 6.16216C10.3817 6.26371 10.3197 6.35588 10.2416 6.43335L7.49996 9.16668H15.8333C16.0543 9.16668 16.2663 9.25448 16.4225 9.41076C16.5788 9.56704 16.6666 9.779 16.6666 10C16.6666 10.221 16.5788 10.433 16.4225 10.5893C16.2663 10.7456 16.0543 10.8334 15.8333 10.8334H7.49996L10.2416 13.575C10.3985 13.7308 10.4871 13.9426 10.4879 14.1637C10.4887 14.3849 10.4016 14.5973 10.2458 14.7542C10.09 14.9111 9.87821 14.9997 9.65707 15.0005C9.43593 15.0013 9.22355 14.9142 9.06663 14.7584L5.49162 11.175C5.17863 10.8639 5.00182 10.4413 4.99996 10Z"
						fill="#1EA574" />
				</svg>

			</button>
			<button class="carousel-control carousel-control-next" type="button"
				data-target="#carouselExampleIndicators" data-slide="next">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z"
						fill="#1EA574" />
				</svg>
			</button>
		</div>
	</div>
</section>
<?php
$terms = get_terms(array(
	'taxonomy' => 'cats',
	'hide_empty' => false,

));
?>
<section>
	<div class="container-fluid">
		<div class="row justify-content-between">
			<div class="col-2">
				<div class="cat-nav">
					<h1><?= $content['text_catalog'] ?></h1>
					<ul class="nav flex-column">
						<?php foreach ($terms as $key => $item) : ?>

							<li class="nav-item">
								<a class="nav-link <?= ($item->slug == get_query_var('cats') ? 'active' : '') ?>" href="<?= get_category_link($item) ?>"><?= $item->name ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>

			</div>
			<div class="col-9">

				<div class="row row-cols-3 row-gap-20">
					<?php if (have_posts()) : ?>

					<?php

						while (have_posts()) :
							the_post();


							get_template_part('template-parts/content', get_post_type());

						endwhile;

						the_posts_pagination();

					else :

						get_template_part('template-parts/content', 'none');

					endif;
					?>


				</div>
				
			</div>
		</div>

	</div>
</section>



<?php

get_footer();
