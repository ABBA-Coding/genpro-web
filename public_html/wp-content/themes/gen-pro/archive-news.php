<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gen_Pro
 */
// add_filter('get_the_archive_title', function ($title) {
//     return preg_replace('~^[^:]+: ~', '', $title);
// });



get_header();
?>
<section>
    <div class="container-fluid">
        <h1 class="archive-title"><?= get_queried_object()->label; ?></h1>
        <?php if (have_posts()) : ?>
            <div class="row row-cols-sm-4 row-cols-1 row-gap-20">

                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();


                    get_template_part('template-parts/content', get_post_type());

                endwhile;
                ?>
            </div>
            <?php bootstrap_pagination(true, 'justify-content-end gen-pagination'); ?>
        <?php


        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>