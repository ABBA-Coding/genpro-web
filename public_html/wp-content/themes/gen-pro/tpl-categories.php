<?php
/*
Template Name: Категория
Template Post Type: post, page, product
*/
?>


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
        <div id="carouselExampleIndicators" class="carousel slide gen-carousel" data-ride="carousel" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/img/slide.jpg);">
            <ol class="carousel-indicators">
                <?php foreach ($banner['list'] as $key => $item): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class="<?= ($key == 0) ? 'active' : '' ?>"></li>
                <?php endforeach; ?>
            </ol>
            <div class="carousel-header">
                <div class="w-sm-50 mx-auto text-center">
                    <h1><?= $banner['title']; ?></h1>
                    <button type="button" data-toggle="modal" data-target="#contactModal" class="btn gen-btn"><?= $banner['btn'] ?>
                        <span class="edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_18_26)">
                                    <path d="M10.8826 0.542522L3.77064 7.65452C3.499 7.92469 3.28366 8.24605 3.13707 8.60001C2.99048 8.95397 2.91556 9.33349 2.91664 9.7166V10.5C2.91664 10.6547 2.9781 10.8031 3.08749 10.9125C3.19689 11.0219 3.34526 11.0834 3.49997 11.0834H4.28339C4.6665 11.0844 5.04602 11.0095 5.39998 10.8629C5.75394 10.7163 6.0753 10.501 6.34547 10.2294L13.4575 3.11735C13.7984 2.77562 13.9898 2.31263 13.9898 1.82994C13.9898 1.34724 13.7984 0.884256 13.4575 0.542522C13.1108 0.211126 12.6497 0.0261841 12.1701 0.0261841C11.6905 0.0261841 11.2293 0.211126 10.8826 0.542522ZM12.6326 2.29252L5.52064 9.40452C5.19171 9.73144 4.74714 9.91547 4.28339 9.91669H4.0833V9.7166C4.08452 9.25285 4.26855 8.80828 4.59547 8.47935L11.7075 1.36736C11.8321 1.24833 11.9977 1.18191 12.1701 1.18191C12.3424 1.18191 12.508 1.24833 12.6326 1.36736C12.7551 1.49016 12.8239 1.65651 12.8239 1.82994C12.8239 2.00337 12.7551 2.16972 12.6326 2.29252Z" fill="#F6FBFC" />
                                    <path d="M13.4167 5.23775C13.262 5.23775 13.1136 5.29921 13.0042 5.40861C12.8948 5.518 12.8333 5.66637 12.8333 5.82108V8.75H10.5C10.0359 8.75 9.59075 8.93437 9.26256 9.26256C8.93437 9.59075 8.75 10.0359 8.75 10.5V12.8333H2.91667C2.45254 12.8333 2.00742 12.649 1.67923 12.3208C1.35104 11.9926 1.16667 11.5475 1.16667 11.0833V2.91667C1.16667 2.45254 1.35104 2.00742 1.67923 1.67923C2.00742 1.35104 2.45254 1.16667 2.91667 1.16667H8.19117C8.34588 1.16667 8.49425 1.10521 8.60365 0.995812C8.71304 0.886416 8.7745 0.738043 8.7745 0.583333C8.7745 0.428624 8.71304 0.280251 8.60365 0.170854C8.49425 0.0614582 8.34588 0 8.19117 0L2.91667 0C2.1434 0.00092625 1.40208 0.308515 0.855295 0.855295C0.308515 1.40208 0.00092625 2.1434 0 2.91667L0 11.0833C0.00092625 11.8566 0.308515 12.5979 0.855295 13.1447C1.40208 13.6915 2.1434 13.9991 2.91667 14H9.53342C9.91662 14.0011 10.2962 13.9262 10.6503 13.7796C11.0043 13.633 11.3258 13.4177 11.5961 13.146L13.1454 11.5955C13.4171 11.3253 13.6325 11.004 13.7792 10.65C13.9259 10.2961 14.0009 9.91656 14 9.53342V5.82108C14 5.66637 13.9385 5.518 13.8291 5.40861C13.7198 5.29921 13.5714 5.23775 13.4167 5.23775ZM10.7713 12.3212C10.5368 12.5551 10.2402 12.717 9.91667 12.7878V10.5C9.91667 10.3453 9.97812 10.1969 10.0875 10.0875C10.1969 9.97812 10.3453 9.91667 10.5 9.91667H12.7896C12.7174 10.2396 12.5557 10.5355 12.3229 10.7707L10.7713 12.3212Z" fill="#F6FBFC" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_18_26">
                                        <rect width="14" height="14" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </button>
                </div>

            </div>
            <div class="carousel-inner">
                <?php foreach ($banner['list'] as $key => $item): ?>
                    <div class="carousel-item <?= ($key == 0) ? 'active' : '' ?> ">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="carousel-item-text"><?= $item['text'] ?></p>
                            </div>
                            <div class="col-sm-6 order-sm-0 order-1">
                                <div class="carousel-item-img">
                                    <img src="<?= $item['img'] ?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class=" ml-auto col-8 col-sm-3">
                                <p class="carousel-item-title"><?= $item['title'] ?></p>
                            </div>
                        </div>
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
));
$categories = get_categories(array(

    'taxonomy' => 'cats',

));
?>
<section>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-sm-2">
                <div class="cat-nav">
                    <h1><?= $content['text_catalog'] ?></h1>
                    <div class="dropdown d-sm-none gen-cat-drop">
                        <button class="btn gen-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            Категории
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
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
                    <ul class="nav flex-column sm-none">
                        <?php foreach ($terms as $key => $item) : ?>
                            <li class="nav-item">
                                <a class="nav-link <?= ($item->slug == get_query_var('cats') ? 'active' : '') ?>" href="<?= get_category_link($item) ?>"><?= $item->name ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
            <div class="col-sm-9">
                <div class="row row-cols-sm-3 row-cols-1 row-gap-20">
                    <?php foreach ($categories as $category) : ?>
                        <?php
                        // Создаем WP_Query для получения постов по категории
                        $query = new WP_Query(array(
                            'post_type' => 'products',
                            'posts_per_page' => 4,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'cats',
                                    'field' => 'term_id',
                                    'terms' => $category->term_id,
                                )
                            )
                        ));
                        ?>

                        <?php if ($query->have_posts()) : ?>
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <?php
                                // Используем шаблонный файл для отображения карточки
                                get_template_part('template-parts/content', get_post_type());
                                ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php
                            // Если постов нет, подключаем шаблон content-none.php
                            get_template_part('template-parts/content', 'none');
                            ?>
                        <?php endif; ?>

                        <?php
                        // Сбрасываем глобальные данные поста после кастомного запроса
                        wp_reset_postdata();
                        ?>
                    <?php endforeach; ?>
                </div>


            </div>
            <?php bootstrap_pagination(true, 'justify-content-end gen-pagination'); ?>

        </div>
    </div>

    </div>
</section>



<?php

get_footer();
