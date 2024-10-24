<?php
/*
Template Name: Контакты
Template Post Type: post, page, product
*/
$content = get_field('content');



get_header();
?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="contacts-info">
                    <h2><?= $content['title'] ?></h2>
                    <p><?= $content['text'] ?></p>
                </div>
            </div>
            <div class="col-sm-4">
                <form action="/telegram.php" method="POST" class="contacts-form">
                    <div class="form-floating">
                        <input required type="text" name="user_name" class="form-control" id="userName" placeholder="<?= $content['form_title_1'] ?>">
                        <label for="userName"><?= $content['form_title_1'] ?></label>
                    </div>
                    <div class="form-floating">
                        <input required type="text" name="user_company" class="form-control" id="userCompany" placeholder="<?= $content['form_title_2'] ?>">
                        <label for="userCompany"><?= $content['form_title_2'] ?></label>
                    </div>
                    <div class="form-floating">
                        <input required type="text" name="user_phone" class="form-control" data-plugin="phone-mask" id="userPhone" placeholder="+998 (__) ___-__-__">
                        <label for="userPhone"><?= $content['form_title_3'] ?></label>
                    </div>
                    <input type="text" name="extra_field" style="display:none;">
                    <button type="submit" class="btn gen-btn-submit"><?= $content['btn'] ?></button>
                </form>
            </div>
            <div class="col-sm-4 ml-auto mb-sm-m50" >
                <div class="contacts-content">
                    <ul>
                        <?php foreach ($content['list'] as $key => $item): ?>
                            <li>
                                <h3><?= $item['title'] ?></h3>
                                <ul class="contacts-content-mail">
                                    <?php foreach ($item['data'] as $key => $data): ?>
                                        <li>
                                            <a href="<?= $data['link'] ?>"><?= $data['title'] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endforeach; ?>
                        <li>
                            <h3><?= $content['social']['title'] ?></h3>
                            <ul class="contacts-content-social">
                                <?php foreach ($content['social']['list'] as $key => $item): ?>
                                    <li>
                                        <a href="<?= $item['link'] ?>">
                                            <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>" width="<?= $item['icon']['width'] ?>" height="<?= $item['icon']['height'] ?>">
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts-map">
        <?= $content['map'] ?>
    </div>
</section>











<?php get_footer(); ?>
