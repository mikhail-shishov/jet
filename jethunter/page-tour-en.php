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
        <h1 class="h1">Let's take a trip</h1>
        <h2 class="h3">Offers tailored just for you!</h2>
    </div>
</section>

<section class="tour-goal-sect">
    <div class="container">
        <h2 class="h2">Choose the purpose of your trip</h2>
        <div class="tour-goal-wrap">
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-1.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3"><a href="/en/category/rest-en/">Vacation</a></h3>
                <ul class="list">
                    <li><a href="/en/category/rest-en/uae-en/">UAE</a></li>
                    <li><a href="/en/category/rest-en/turkey-en/">Turkey</a></li>
                    <li><a href="/en/category/rest-en/maldives-en/">Maldives</a></li>
                    <li><a href="/en/category/rest-en/thailand-en/">Thailand</a></li>
                </ul>
            </div>
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-2.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3"><a href="/en/category/sport-en/">Sport</a></h3>
                <ul class="list">
                    <li><a href="/en/category/sport-en/golf-en/">Golf</a></li>
                    <li><a href="/en/category/sport-en/formula-1-en/">Formula 1</a></li>
                    <li><a href="/en/category/sport-en/tennis-en/">Tennis</a></li>
                    <li><a href="/en/category/sport-en/soccer-en/">Football</a></li>
                </ul>
            </div>
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-3.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3"><a href="/en/category/shopping-en/">Shopping</a></h3>
                <ul class="list">
                    <li><a href="/en/category/shopping-en/milan-en/">Milan</a></li>
                    <li><a href="/en/category/shopping-en/paris-en/">Paris</a></li>
                    <li><a href="/en/category/shopping-en/dubai-en/">Dubai</a></li>
                    <li><a href="/en/category/shopping-en/hongkong-en/">Hong Kong</a></li>
                </ul>
            </div>
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-4.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3"><a href="/en/category/shopping-en/sights-en/">Sightseeing</a></h3>
                <ul class="list">
                    <li><a href="/en/category/shopping-en/pisa-en/">Pisa</a></li>
                    <li><a href="/en/category/shopping-en/paris-en/">Paris</a></li>
                    <li><a href="/en/category/shopping-en/beijing-en/">Beijing</a></li>
                    <li><a href="/en/category/shopping-en/ny-en/">New York</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="tour-list-sect">
    <div class="container">
        <ul class="nav-tabs">
            <li class="nav-tabs-item active"><a href="#tab-1" class="btn btn-tab-full">Show all</a></li>
            <li class="nav-tabs-item"><a href="#tab-2" class="btn btn-tab-full">Hot offers</a></li>
            <li class="nav-tabs-item"><a href="#tab-3" class="btn btn-tab-full">With children</a></li>
            <li class="nav-tabs-item"><a href="#tab-4" class="btn btn-tab-full">With friends</a></li>
            <div class="nav-tabs-right">
                <div class="dropdown">
                    <button class="dropdown__button" type="button">Sort by</button>
                    <ul class="dropdown__list">
                        <li class="dropdown__list-item dropdown__list-item_active" data-value="Date">Date</li>
                        <li class="dropdown__list-item" data-value="Popularity">Popularity</li>
                        <li class="dropdown__list-item" data-value="Reading time">Reading time</li>
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
                        'category_name' => 'tour-en',
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
                                        <a href="<?php the_permalink(); ?>" class="link">Read more</a>
                                        <?php
                                        $language = function_exists('pll_current_language') ? pll_current_language() : 'ru';

                                        $time_suffix = ($language === 'en') ? ' min' : ' мин';
                                        $fallback = ($language === 'en') ? '3 min' : '3 мин';

                                        $reading_time = (function_exists('carbon_get_post_meta') && get_the_ID())
                                            ? carbon_get_post_meta(get_the_ID(), 'reading_time')
                                            : '';

                                        ?>
                                        <span class="article-info-time">
                                            <?php echo !empty($reading_time) ? esc_html($reading_time) . $time_suffix : $fallback; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                    <?php }
                        wp_reset_postdata();
                    } else {
                        echo 'No articles for now.';
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
                        'category_name' => 'hot-en',
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
                                        <a href="<?php the_permalink(); ?>" class="link">Read more</a>
                                        <span class="article-info-time">3 min</span>
                                    </div>
                                </div>
                            </div>

                    <?php }
                        wp_reset_postdata();
                    } else {
                        echo 'No articles for now.';
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
                        'category_name' => 'children-en',
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
                                        <a href="<?php the_permalink(); ?>" class="link">Read more</a>
                                        <span class="article-info-time">3 min</span>
                                    </div>
                                </div>
                            </div>

                    <?php }
                        wp_reset_postdata();
                    } else {
                        echo 'No articles for now.';
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
                        'category_name' => 'friends-en',
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
                                        <a href="<?php the_permalink(); ?>" class="link">Read more</a>
                                        <span class="article-info-time">3 min</span>
                                    </div>
                                </div>
                            </div>

                    <?php }
                        wp_reset_postdata();
                    } else {
                        echo 'No articles for now.';
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

<?php include_once get_stylesheet_directory() . '/components/en/quiz.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/about-rent.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/step-3.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/instruction-8.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/cta-2.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/faq.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/seo-empty-legs.php'; ?>

<?php get_footer(); ?>