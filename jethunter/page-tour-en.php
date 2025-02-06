<?php
/* Template Name: Tour EN */
?>

<?php get_header(); ?>

<section class="breadcrumbs-sect">
    <div class="container">
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
    </div>
</section>

<section class="tour-intro-sect">
    <div class="container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/section-image-tour.png" class="intro-img" alt="">
        <h1 class="h1">Давайте отправимся в&nbsp;путешествие</h1>
        <h2 class="h3">Предложения, подобранные специально для&nbsp;вас!</h2>
    </div>
</section>

<section class="tour-goal-sect">
    <div class="container">
        <h2 class="h2">Выберите цель вашего путешествия</h2>
        <div class="tour-goal-wrap">
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-1.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3">Отдых</h3>
                <ul class="list">
                    <li>ОАЭ</li>
                    <li>Турция</li>
                    <li>Мальдивы</li>
                    <li>Тайланд</li>
                </ul>
            </div>
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-2.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3">Спорт</h3>
                <ul class="list">
                    <li>Гольф</li>
                    <li>Формула 1</li>
                    <li>Теннис</li>
                    <li>Футбол</li>
                </ul>
            </div>
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-3.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3">Шоппинг</h3>
                <ul class="list">
                    <li>Милан</li>
                    <li>Париж</li>
                    <li>Дубай</li>
                    <li>Гонконг</li>
                </ul>
            </div>
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-4.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3">Достопримечательности</h3>
                <ul class="list">
                    <li>Пиза</li>
                    <li>Париж</li>
                    <li>Пекин</li>
                    <li>Нью-Йорк</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="tour-list-sect">
    <div class="container">
        <ul class="nav-tabs">
            <li class="nav-tabs-item active"><a href="#tab-1" class="btn btn-tab-full">Показать все</a></li>
            <li class="nav-tabs-item"><a href="#tab-2" class="btn btn-tab-full">Горячие предложения</a></li>
            <li class="nav-tabs-item"><a href="#tab-3" class="btn btn-tab-full">С&nbsp;детьми</a></li>
            <li class="nav-tabs-item"><a href="#tab-4" class="btn btn-tab-full">С&nbsp;друзьями</a></li>
            <div class="nav-tabs-right">
                <div class="dropdown">
                    <button class="dropdown__button" type="button">Сортировать по</button>
                    <ul class="dropdown__list">
                        <li class="dropdown__list-item dropdown__list-item_active" data-value="Дате">Дате</li>
                        <li class="dropdown__list-item" data-value="Популярности">Популярности</li>
                        <li class="dropdown__list-item" data-value="Времени чтения">Времени чтения</li>
                    </ul>
                    <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                </div>
            </div>
        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">
                <div class="tour-list-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'category_name' => 'tour',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post(); ?>

                            <div class="tour-list-item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="tour-list-img" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                <?php endif; ?>

                                <div class="tour-list-text">
                                    <h2 class="h2"><?php the_title(); ?></h2>
                                    <span class="article-date"><?php echo get_the_date(); ?></span>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="article-info">
                                        <a href="<?php the_permalink(); ?>" class="link">Узнать больше</a>
                                        <span class="article-info-time">3 мин</span>
                                    </div>
                                </div>
                            </div>

                    <?php }
                        wp_reset_postdata();
                    } else {
                        echo 'Статей пока нет.';
                    }
                    ?>
                </div>
                <!-- <div class="center">
                    <a href="" class="btn">Показать больше</a>
                </div> -->
            </div>
            <div id="tab-2" class="tab-pane">
                <div class="tour-list-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'category_name' => 'hot',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post(); ?>

                            <div class="tour-list-item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="tour-list-img" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                <?php endif; ?>

                                <div class="tour-list-text">
                                    <h2 class="h2"><?php the_title(); ?></h2>
                                    <span class="article-date"><?php echo get_the_date(); ?></span>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="article-info">
                                        <a href="<?php the_permalink(); ?>" class="link">Узнать больше</a>
                                        <span class="article-info-time">3 мин</span>
                                    </div>
                                </div>
                            </div>

                    <?php }
                        wp_reset_postdata();
                    } else {
                        echo 'Статей пока нет.';
                    }
                    ?>
                </div>
                <!-- <div class="center">
                    <a href="" class="btn">Показать больше</a>
                </div> -->
            </div>
            <div id="tab-3" class="tab-pane">
                <div class="tour-list-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'category_name' => 'children',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post(); ?>

                            <div class="tour-list-item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="tour-list-img" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                <?php endif; ?>

                                <div class="tour-list-text">
                                    <h2 class="h2"><?php the_title(); ?></h2>
                                    <span class="article-date"><?php echo get_the_date(); ?></span>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="article-info">
                                        <a href="<?php the_permalink(); ?>" class="link">Узнать больше</a>
                                        <span class="article-info-time">3 мин</span>
                                    </div>
                                </div>
                            </div>

                    <?php }
                        wp_reset_postdata();
                    } else {
                        echo 'Статей пока нет.';
                    }
                    ?>
                </div>
                <!-- <div class="center">
                    <a href="" class="btn">Показать больше</a>
                </div> -->
            </div>
            <div id="tab-4" class="tab-pane">
                <div class="tour-list-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'category_name' => 'friends',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post(); ?>

                            <div class="tour-list-item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="tour-list-img" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                <?php endif; ?>

                                <div class="tour-list-text">
                                    <h2 class="h2"><?php the_title(); ?></h2>
                                    <span class="article-date"><?php echo get_the_date(); ?></span>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="article-info">
                                        <a href="<?php the_permalink(); ?>" class="link">Узнать больше</a>
                                        <span class="article-info-time">3 мин</span>
                                    </div>
                                </div>
                            </div>

                    <?php }
                        wp_reset_postdata();
                    } else {
                        echo 'Статей пока нет.';
                    }
                    ?>
                </div>
                <!-- <div class="center">
                    <a href="" class="btn">Показать больше</a>
                </div> -->
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>