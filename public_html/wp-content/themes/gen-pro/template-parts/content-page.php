<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gen_Pro
 */
$content = get_field('content', 'options');
$terms = get_the_terms(get_the_ID(), 'cats');


?>

<section>
	<div class="container-fluid">
		<!-- <?php if (! empty($terms) && ! is_wp_error($terms)) :
					$term = $terms[0];
					$term_link = get_term_link($term);
				?>
			<?php if (! is_wp_error($term_link)) : ?>
				<a href="<?= $term_link ?>" class="btn gen-btn gen-btn-back">
					<span class="arrow">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z"
								fill="#1EA574" />
						</svg>
					</span>
					<?= $term->name ?>

				</a>
			<?php endif; ?>
		<?php endif ?> -->
		<div class="row row-gap-10">
			<div class="col-sm-4">
				<div class="product-img">
					<img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-content">
					<h1 class="product-title"><?= get_the_title() ?></h1>
					<div class="product-description">
						<?= the_content() ?>
					</div>
					<button type="button" data-product-image="<?= get_the_post_thumbnail_url() ?>" id="addToCart" data-product-id="<?= $post->ID; ?>" data-product-name="<?= get_the_title(); ?>" class="btn gen-btn"><?= $content['text_order'] ?>
						<span class="arrow">
							<svg class="status-default" width="20" height="20" viewBox="0 0 20 20" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z"
									fill="#1EA574" />
							</svg>
						</span>
					</button>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-svg">
					<svg width="638" height="668" viewBox="0 0 638 668" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M581.465 85.5615L262.254 432.405L253.069 424.785L164.906 351.602L209.628 601.302L130.876 528.824L71.0088 596.136" stroke="#1EA574" stroke-width="40" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</div>
		</div>
	</div>
</section>