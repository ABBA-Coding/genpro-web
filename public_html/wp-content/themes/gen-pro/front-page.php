<?php
$content = get_field('content', 'options');

$banner = get_field('banner');
$product_sections = get_field('product_sections');
$cards = get_field('cards');
$certficates = get_field('certficates');
$news = get_field('news');
$faq = get_field('faq');
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

    <?php
    $terms = get_terms(array(
        'taxonomy' => 'cats',
        'hide_empty' => false,
        'number' => 5,
    ));

    ?>

    <div class="container-fluid sm-croll">
        <div class="row">
            <?php foreach ($terms as $key => $item) : ?>
                <?php
                $icon = get_field('icon', $item);
                ?>
                <div class="col-2">
                    <a href="<?= get_category_link($item) ?>" class="category-card">
                        <div class="card">
                            <div class="category-card-img">
                                <?php if ($icon) : ?>
                                    <img src="<?= $icon['url'] ?>" alt="<?= $item->name ?>">
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $item->name ?></h5>
                                <span class="card-text"><?= $content['text_go_to'] ?> <span class="arrow">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z"
                                                fill="#1EA574" />
                                        </svg>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="col-2">
                <a href="<?= home_url('/categories') ?>" class="category-card-all">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $content['cat_btn_text'] ?></h5>
                        </div>
                        <div class="category-card-img">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z"
                                    fill="#1EA574" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="section-header">
            <h2><?= $product_sections['title'] ?></h2>
            <a href="<?= $product_sections['btn_link'] ?>"><?= $product_sections['btn'] ?></a>
        </div>
        <div class="row products-slick">

            <?php if (!empty($product_sections['list'])) : ?>

                <?php
                // Создаем массив с ID постов
                $post_ids = [];
                foreach ($product_sections['list'] as $section) {
                    if (!empty($section['posts'])) {
                        $post_ids[] = $section['posts']->ID;
                    }
                }

                // Проверяем, есть ли посты для вывода
                if (!empty($post_ids)) {
                    // Создаем WP_Query с использованием ID постов
                    $args = [
                        'post_type' => 'any', // Укажи здесь нужный тип постов или оставь "any" для всех типов
                        'post__in' => $post_ids,
                        'orderby' => 'post__in', // Чтобы сохранить порядок, как в массиве
                    ];
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();


                            get_template_part('template-parts/content', get_post_type()); ?>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p>Продукты не найдены.</p>
                    <?php endif; ?>
                <?php } ?>

            <?php endif; ?>
        </div>
    </div>
</section>

<section class="ab-sticky">
    <div class="container-fluid h-100">
        <div class="about_us sticky-top">
            <div class="about_us-header">
                <h2><?= $cards['title'] ?></h2>
                <div>
                    <p><?= $cards['text'] ?></p>
                    <a href="<?= $cards['link'] ?>" class="btn gen-btn"><?= $cards['btn'] ?>
                        <span class="arrow">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z"
                                    fill="#1EA574" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="ab-list">
                <?php foreach ($cards['list'] as $key => $item): ?>
                    <div class="ab-card ab-card-<?= $key ?>">
                        <div class="ab-card-header">
                            <?php if ( $key == 0): ?>
                                <img src="<?= get_field('logo_alt', 'options')['url']; ?>" width="<?= get_field('logo_alt', 'options')['width']; ?>" height="<?= get_field('logo_alt', 'options')['height']; ?>" alt="GenPro">
                            <?php else : ?>
                                <p>[0<?= $key ?>]</p>
                            <?php endif; ?>
                        </div>
                        <div class="ab-card-body">
                            <h3><?= $item['title'] ?></h3>
                            <h4><?= $item['subtitle'] ?></h4>
                            <p><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>


<?php if ($certficates) : ?>
<section>
    <div class="container-fluid">
        <div class="certficate">
            <?php foreach ($certficates as $key => $cert): $key++; ?>
            <div class="certficate-step step-<?= $key; ?>">
                <a href="<?= $cert['file']; ?>" target="_blank" class="certficate-item">
                    <div class="icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.4375 7.5H27.5719L22.5 2.42812V6.5625C22.5 6.81114 22.5988 7.04959 22.7746 7.22541C22.9504 7.40123 23.1889 7.5 23.4375 7.5Z"
                                fill="#0A6579" />
                            <path
                                d="M23.4375 9.375C22.6916 9.375 21.9762 9.07868 21.4488 8.55124C20.9213 8.02379 20.625 7.30842 20.625 6.5625V1.875H10.3125C9.56658 1.875 8.85121 2.17132 8.32376 2.69876C7.79632 3.22621 7.5 3.94158 7.5 4.6875V7.5C8.93957 7.5034 10.3477 7.92102 11.5564 8.70301C12.7651 9.48501 13.7231 10.5983 14.3162 11.91C14.9093 13.2218 15.1124 14.6765 14.9011 16.1004C14.6899 17.5244 14.0733 18.8576 13.125 19.9406V27.1875C13.1262 27.5077 13.069 27.8253 12.9562 28.125H25.3125C26.0584 28.125 26.7738 27.8287 27.3012 27.3012C27.8287 26.7738 28.125 26.0584 28.125 25.3125V9.375H23.4375ZM14.0625 8.4375C14.0625 8.18886 14.1613 7.9504 14.3371 7.77459C14.5129 7.59877 14.7514 7.5 15 7.5H17.8125C18.0611 7.5 18.2996 7.59877 18.4754 7.77459C18.6512 7.9504 18.75 8.18886 18.75 8.4375C18.75 8.68614 18.6512 8.9246 18.4754 9.10041C18.2996 9.27623 18.0611 9.375 17.8125 9.375H15C14.7514 9.375 14.5129 9.27623 14.3371 9.10041C14.1613 8.9246 14.0625 8.68614 14.0625 8.4375ZM23.4375 23.4375H15.9375C15.6889 23.4375 15.4504 23.3387 15.2746 23.1629C15.0988 22.9871 15 22.7486 15 22.5C15 22.2514 15.0988 22.0129 15.2746 21.8371C15.4504 21.6613 15.6889 21.5625 15.9375 21.5625H23.4375C23.6861 21.5625 23.9246 21.6613 24.1004 21.8371C24.2762 22.0129 24.375 22.2514 24.375 22.5C24.375 22.7486 24.2762 22.9871 24.1004 23.1629C23.9246 23.3387 23.6861 23.4375 23.4375 23.4375ZM23.4375 18.75H17.8125C17.5639 18.75 17.3254 18.6512 17.1496 18.4754C16.9738 18.2996 16.875 18.0611 16.875 17.8125C16.875 17.5639 16.9738 17.3254 17.1496 17.1496C17.3254 16.9738 17.5639 16.875 17.8125 16.875H23.4375C23.6861 16.875 23.9246 16.9738 24.1004 17.1496C24.2762 17.3254 24.375 17.5639 24.375 17.8125C24.375 18.0611 24.2762 18.2996 24.1004 18.4754C23.9246 18.6512 23.6861 18.75 23.4375 18.75ZM23.4375 14.0625H17.8125C17.5639 14.0625 17.3254 13.9637 17.1496 13.7879C16.9738 13.6121 16.875 13.3736 16.875 13.125C16.875 12.8764 16.9738 12.6379 17.1496 12.4621C17.3254 12.2863 17.5639 12.1875 17.8125 12.1875H23.4375C23.6861 12.1875 23.9246 12.2863 24.1004 12.4621C24.2762 12.6379 24.375 12.8764 24.375 13.125C24.375 13.3736 24.2762 13.6121 24.1004 13.7879C23.9246 13.9637 23.6861 14.0625 23.4375 14.0625Z"
                                fill="#0A6579" />
                            <path
                                d="M3.75 21.4875V27.1875C3.75092 27.3726 3.80661 27.5533 3.91005 27.7067C4.01349 27.8602 4.16004 27.9797 4.33125 28.05C4.50198 28.1218 4.69015 28.1414 4.87201 28.1064C5.05388 28.0713 5.22129 27.9832 5.35313 27.8531L7.5 25.6969L9.64687 27.8531C9.73448 27.94 9.83837 28.0088 9.95259 28.0554C10.0668 28.1021 10.1891 28.1257 10.3125 28.125C10.4355 28.1282 10.5575 28.1025 10.6688 28.05C10.84 27.9797 10.9865 27.8602 11.0899 27.7067C11.1934 27.5533 11.2491 27.3726 11.25 27.1875V21.4875C10.1114 22.1504 8.81748 22.4996 7.5 22.4996C6.18252 22.4996 4.88857 22.1504 3.75 21.4875Z"
                                fill="#0A6579" />
                            <path
                                d="M7.5 20.625C10.6066 20.625 13.125 18.1066 13.125 15C13.125 11.8934 10.6066 9.375 7.5 9.375C4.3934 9.375 1.875 11.8934 1.875 15C1.875 18.1066 4.3934 20.625 7.5 20.625Z"
                                fill="#0A6579" />
                        </svg>

                    </div>
                    <div class="content">
                        <h3><?= $cert['title']; ?></h3>
                        <p><?= $cert['sub-title']; ?></p>
                    </div>
                    <div class="arrow">
                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 5.99511C14.9948 5.46863 14.7677 4.96527 14.3679 4.5941L9.77143 0.291003C9.57068 0.104617 9.29913 0 9.01607 0C8.73302 0 8.46146 0.104617 8.26071 0.291003C8.16029 0.384033 8.08058 0.494713 8.02619 0.61666C7.97179 0.738607 7.94379 0.869407 7.94379 1.00151C7.94379 1.13362 7.97179 1.26442 8.02619 1.38637C8.08058 1.50831 8.16029 1.619 8.26071 1.71203L11.7857 4.99439L1.07143 4.99439C0.787268 4.99439 0.514746 5.09982 0.313814 5.28749C0.112883 5.47517 0 5.7297 0 5.99511C0 6.26052 0.112883 6.51506 0.313814 6.70273C0.514746 6.8904 0.787268 6.99583 1.07143 6.99583L11.7857 6.99583L8.26071 10.2882C8.05896 10.4753 7.94505 10.7296 7.94405 10.9952C7.94304 11.2607 8.05502 11.5158 8.25536 11.7042C8.45569 11.8927 8.72796 11.9991 9.01228 12C9.2966 12.0009 9.56967 11.8963 9.77143 11.7092L14.3679 7.40613C14.7703 7.03251 14.9976 6.52507 15 5.99511Z"
                                fill="#0A6579" />
                        </svg>
                    </div>
                </a>
                <div class="time-line">
                    <svg width="286" height="59" viewBox="0 0 286 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.73812 42H5.73808C2.97407 42 0.733398 44.2407 0.733398 47.0047V53.9953C0.733398 56.7593 2.97407 59 5.73808 59H5.73812C8.50213 59 10.7428 56.7593 10.7428 53.9953V47.0047C10.7428 44.2407 8.50213 42 5.73812 42Z" fill="#0A6579" />
                        <path d="M18.7503 42H18.7503C15.9863 42 13.7456 44.2407 13.7456 47.0047V53.9953C13.7456 56.7593 15.9863 59 18.7503 59H18.7503C21.5143 59 23.755 56.7593 23.755 53.9953V47.0047C23.755 44.2407 21.5143 42 18.7503 42Z" fill="#0A6579" />
                        <path d="M33.7642 29H33.7642C31.0002 29 28.7595 31.2407 28.7595 34.0047V53.9953C28.7595 56.7593 31.0002 59 33.7642 59H33.7642C36.5283 59 38.7689 56.7593 38.7689 53.9953V34.0047C38.7689 31.2407 36.5283 29 33.7642 29Z" fill="#0A6579" />
                        <path d="M48.7784 0H48.7784C46.0144 0 43.7737 2.24067 43.7737 5.00468V53.9953C43.7737 56.7593 46.0144 59 48.7784 59H48.7784C51.5424 59 53.7831 56.7593 53.7831 53.9953V5.00468C53.7831 2.24067 51.5424 0 48.7784 0Z" fill="#0A6579" />
                        <path d="M63.7923 42H63.7923C61.0283 42 58.7876 44.2407 58.7876 47.0047V53.9953C58.7876 56.7593 61.0283 59 63.7923 59H63.7923C66.5563 59 68.797 56.7593 68.797 53.9953V47.0047C68.797 44.2407 66.5563 42 63.7923 42Z" fill="#0A6579" />
                        <path d="M76.8045 42H76.8045C74.0405 42 71.7998 44.2407 71.7998 47.0047V53.9953C71.7998 56.7593 74.0405 59 76.8045 59H76.8045C79.5685 59 81.8092 56.7593 81.8092 53.9953V47.0047C81.8092 44.2407 79.5685 42 76.8045 42Z" fill="#0A6579" />
                        <path d="M91.8186 29H91.8185C89.0545 29 86.8138 31.2407 86.8138 34.0047V53.9953C86.8138 56.7593 89.0545 59 91.8185 59H91.8186C94.5826 59 96.8232 56.7593 96.8232 53.9953V34.0047C96.8232 31.2407 94.5826 29 91.8186 29Z" fill="#0A6579" />
                        <path d="M106.833 0H106.833C104.069 0 101.828 2.24067 101.828 5.00468V53.9953C101.828 56.7593 104.069 59 106.833 59H106.833C109.597 59 111.837 56.7593 111.837 53.9953V5.00468C111.837 2.24067 109.597 0 106.833 0Z" fill="#0A6579" />
                        <path d="M121.847 42H121.847C119.083 42 116.842 44.2407 116.842 47.0047V53.9953C116.842 56.7593 119.083 59 121.847 59H121.847C124.611 59 126.851 56.7593 126.851 53.9953V47.0047C126.851 44.2407 124.611 42 121.847 42Z" fill="#0A6579" />
                        <path d="M134.859 42H134.859C132.095 42 129.854 44.2407 129.854 47.0047V53.9953C129.854 56.7593 132.095 59 134.859 59H134.859C137.623 59 139.863 56.7593 139.863 53.9953V47.0047C139.863 44.2407 137.623 42 134.859 42Z" fill="#0A6579" />
                        <path d="M149.873 29H149.873C147.109 29 144.868 31.2407 144.868 34.0047V53.9953C144.868 56.7593 147.109 59 149.873 59H149.873C152.637 59 154.877 56.7593 154.877 53.9953V34.0047C154.877 31.2407 152.637 29 149.873 29Z" fill="#0A6579" />
                        <path d="M164.887 0H164.887C162.123 0 159.882 2.24067 159.882 5.00468V53.9953C159.882 56.7593 162.123 59 164.887 59H164.887C167.651 59 169.891 56.7593 169.891 53.9953V5.00468C169.891 2.24067 167.651 0 164.887 0Z" fill="#0A6579" />
                        <path d="M179.901 42H179.901C177.137 42 174.896 44.2407 174.896 47.0047V53.9953C174.896 56.7593 177.137 59 179.901 59H179.901C182.665 59 184.905 56.7593 184.905 53.9953V47.0047C184.905 44.2407 182.665 42 179.901 42Z" fill="#0A6579" />
                        <path d="M192.913 42H192.913C190.149 42 187.908 44.2407 187.908 47.0047V53.9953C187.908 56.7593 190.149 59 192.913 59H192.913C195.677 59 197.917 56.7593 197.917 53.9953V47.0047C197.917 44.2407 195.677 42 192.913 42Z" fill="#0A6579" />
                        <path d="M207.927 29H207.927C205.163 29 202.922 31.2407 202.922 34.0047V53.9953C202.922 56.7593 205.163 59 207.927 59H207.927C210.691 59 212.931 56.7593 212.931 53.9953V34.0047C212.931 31.2407 210.691 29 207.927 29Z" fill="#0A6579" />
                        <path d="M222.941 0H222.941C220.177 0 217.936 2.24067 217.936 5.00468V53.9953C217.936 56.7593 220.177 59 222.941 59H222.941C225.705 59 227.945 56.7593 227.945 53.9953V5.00468C227.945 2.24067 225.705 0 222.941 0Z" fill="#0A6579" />
                        <path d="M237.955 42H237.955C235.191 42 232.95 44.2407 232.95 47.0047V53.9953C232.95 56.7593 235.191 59 237.955 59H237.955C240.719 59 242.959 56.7593 242.959 53.9953V47.0047C242.959 44.2407 240.719 42 237.955 42Z" fill="#0A6579" />
                        <path d="M250.968 42H250.968C248.204 42 245.963 44.2407 245.963 47.0047V53.9953C245.963 56.7593 248.204 59 250.968 59H250.968C253.732 59 255.972 56.7593 255.972 53.9953V47.0047C255.972 44.2407 253.732 42 250.968 42Z" fill="#0A6579" />
                        <path d="M265.982 29H265.982C263.218 29 260.977 31.2407 260.977 34.0047V53.9953C260.977 56.7593 263.218 59 265.982 59H265.982C268.746 59 270.986 56.7593 270.986 53.9953V34.0047C270.986 31.2407 268.746 29 265.982 29Z" fill="#0A6579" />
                        <path d="M280.996 0H280.996C278.232 0 275.991 2.24067 275.991 5.00468V53.9953C275.991 56.7593 278.232 59 280.996 59H280.996C283.76 59 286 56.7593 286 53.9953V5.00468C286 2.24067 283.76 0 280.996 0Z" fill="#0A6579" />
                    </svg>




                </div>
            </div>
            <?php endforeach?>
        </div>
    </div>
</section>
<style>
    .step-1 .certficate-item{
        --cert-mb-height: 160px;
    }
    .step-2 .certficate-item{
        --cert-mb-height: 60px;
    }
    .step-3 .certficate-item{
        --cert-mb-height: 170px;
    }
    .step-4 .certficate-item{
        --cert-mb-height: 40px;
    }
</style>
<?php endif; ?>

<?php if ($news['list'] && $news['list'][0]['post']) : ?>
    <section>
        <div class="container-fluid">
            <div class="section-header">
                <h2><?= $news['title'] ?></h2>

            </div>
            <div class="row products-slick">
                <?php if (!empty($news['list'])) : ?>
                    <?php
                    // Создаем массив с ID постов
                    $post_ids = [];
                    foreach ($news['list'] as $section) {
                        if (!empty($section['post'])) {
                            $post_ids[] = $section['post']->ID;
                        }
                    }

                    // Проверяем, есть ли посты для вывода
                    if (!empty($post_ids)) {
                        // Создаем WP_Query с использованием ID постов
                        $argsNews = [
                            'post_type' => 'news', // Укажи здесь нужный тип постов или оставь "any" для всех типов
                            'post__in' => $post_ids,
                            'orderby' => 'post__in', // Чтобы сохранить порядок, как в массиве
                        ];
                        $queryNews = new WP_Query($argsNews);

                        if ($queryNews->have_posts()) :
                            while ($queryNews->have_posts()) : $queryNews->the_post();


                                get_template_part('template-parts/content', get_post_type()); ?>

                            <?php endwhile;
                            wp_reset_postdata();
                        else : ?>
                            <p>Новости не найдены.</p>
                        <?php endif; ?>
                    <?php } ?>
            </div>
        <?php endif; ?>

        </div>
    </section>
<?php endif; ?>
<section>
    <div class="container-fluid">
        <div class="section-header">
            <h2><?= $faq['title'] ?></h2>
        </div>
        <div class="accordion faq-accordion ">
            <?php


            $columns = 3;
            $totalCards = count($faq['list']);
            $cardsPerColumn = ceil($totalCards / $columns);
            ?>
            <div class="row row-cols-1 row-cols-sm-3 ">
                <?php for ($i = 0; $i < $totalCards; $i++): ?>
                    <?php if ($i % $cardsPerColumn == 0): ?>
                        <div class="col">
                        <?php endif; ?>

                        <div class="card">
                            <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapse<?= $i + 1 ?>" aria-expanded="false" aria-controls="collapse<?= $i + 1 ?>">
                                        <?= $faq['list'][$i]['question'] ?> <span class="arrow">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z" fill="#0A6579" />
                                            </svg>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse<?= $i + 1 ?>" class="collapse">
                                <div class="card-body">
                                    <?= $faq['list'][$i]['answer'] ?>
                                </div>
                            </div>
                        </div>

                        <?php if (($i + 1) % $cardsPerColumn == 0 || $i + 1 == $totalCards): ?>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>


        </div>

    </div>

</section>


<?php get_footer(); ?>

<script>
    $(document).ready(function() {
        // Функция, которая проверяет, виден ли элемент на экране
        function isElementInView(element) {
            const elementTop = $(element).offset().top;
            const elementBottom = elementTop + $(element).outerHeight();
            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();

            return elementBottom > viewportTop && elementTop < viewportBottom;
        }

        // Добавляем класс active к каждому step с задержкой
        function addActiveClassWithDelay() {
            $('.certficate-step').each(function(index) {
                const $step = $(this);

                if (isElementInView($step) && !$step.hasClass('active')) {
                    setTimeout(function() {
                        $step.addClass('active');
                    }, index * 1000); // Задержка 3 секунды для каждого шага
                }
            });
        }

        // Проверяем при загрузке страницы
        addActiveClassWithDelay();

        // Проверяем при прокрутке страницы
        $(window).on('scroll', function() {
            addActiveClassWithDelay();
        });
    });

    $(document).ready(function() {
        // Функция для покраски path элементов поочередно с автоматической скоростью
        function animatePaths() {
            const $paths = $('.time-line svg path'); // Выбираем все <path> элементы внутри SVG
            const totalPaths = $paths.length; // Общее количество элементов <path>
            const duration = 1000 * 4; // Общее время для завершения анимации (в миллисекундах)
            const interval = duration / totalPaths; // Интервал времени между анимациями

            $paths.each(function(index, path) {
                // Добавляем рассчитанную задержку для каждого элемента
                setTimeout(function() {
                    $(path).css('fill', '#0A6579'); // Задаем нужный цвет
                }, index * interval); // Используем интервал для задержки
            });
        }

        // Следим за добавлением класса active к .certficate-step
        $('.certficate-step').each(function() {
            const $step = $(this);

            // Добавляем наблюдатель на изменение класса
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.attributeName === 'class' && $step.hasClass('active')) {
                        animatePaths();
                    }
                });
            });

            // Настройки наблюдателя: отслеживаем изменения атрибутов
            observer.observe($step[0], {
                attributes: true
            });
        });
    });

    $(function () {
  // Находим все элементы с классом .ab-card
  const $abCards = $(".ab-card");

  // Определяем общую ширину всех элементов
  let totalWidth = 0;

  $abCards.each(function () {
    totalWidth += $(this).outerWidth(); // Добавляем ширину каждой карточки к общей сумме
  });

  // Задаем высоту .ab-sticky равной общей сумме ширин карточек
  $(".ab-sticky").css("height", totalWidth * 1.1 + "px");

  // console.log("Суммарная ширина всех карточек:", totalWidth);

  $(window).on("scroll", function () {
    // Получаем позицию верхней границы элемента .ab-sticky относительно документа
    const stickyOffset = $(".ab-sticky").offset().top;

    // Получаем текущее количество пикселей, на которое прокручена страница
    const scrollPosition = $(window).scrollTop();

    // Если мы дошли до .ab-sticky
    if (scrollPosition >= stickyOffset) {
      // Инициализируем переменную для отслеживания общей прокрутки относительно начала .ab-sticky
      let scrolledFromSticky = scrollPosition - stickyOffset;

      // Считаем ширину для каждой карточки
      const cardWidths = [];
      $(".ab-card").each(function () {
        cardWidths.push($(this).outerWidth() / 1);
      });

      // Переменная для хранения суммы ширин всех предыдущих карточек
      let accumulatedWidth = 0;
      let lastCardIndex = -1;

      // Итерируем через карточки и проверяем, добавлять или убирать класс show и current
      $(".ab-card").each(function (index) {
        const $card = $(this);
        const cardStart = accumulatedWidth; // Начало карточки относительно .ab-sticky
        accumulatedWidth += cardWidths[index]; // Суммируем ширину текущей карточки

        // Если прокрутка больше или равна началу карточки
        if (scrolledFromSticky >= cardStart) {
          $card.addClass("show");
          lastCardIndex = index; // Обновляем индекс последней прокрученной карточки
        } else {
          $card.removeClass("show");
        }
      });

      // Добавляем класс current только последней карточке, которая была в зоне видимости
      $(".ab-card").removeClass("current");
      if (lastCardIndex >= 0) {
        $(".ab-card").eq(lastCardIndex).addClass("current");
      }
    } else {
      // Если прокрутили выше .ab-sticky, убираем классы show и current у всех карточек
      $(".ab-card").removeClass("show current");
    }
  });
});
</script>