<?php
/* Template Name: About services */
?>

<?php get_header(); ?>

<?php
$page_id = get_the_ID();

$heading = carbon_get_the_post_meta('heading');
$description = carbon_get_the_post_meta('description');
$features_heading_1 = carbon_get_the_post_meta('features_heading_1');
$features_complex_1 = carbon_get_the_post_meta('features_complex_1');
$features_heading_2 = carbon_get_the_post_meta('features_heading_2');
$features_complex_2 = carbon_get_the_post_meta('features_complex_2');
?>

<section class="breadcrumbs-sect">
    <div class="container">
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
    </div>
</section>

<section class="services-sect">
    <div class="container">
        <h1 class="h2 center"><?php echo esc_html($heading); ?></h1>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/comfort-2.svg" width="460" height="460" class="about-img about-img-left" loading="lazy" alt="">

            <p><?php echo esc_html($description); ?></p>
        </div>
        <!-- <h3 class="h3 center">Мы возьмем в управление каждое воздушное судно: от легких реактивных бортов до вместительных лайнеров. Вы, по-прежнему, сможете использовать самолет в нужное вам время, но, при этом, вы контролируете операционные, транспортные расходы и расходы на техобслуживание. Кроме того, передача борта в коммерческое управление даст вам налоговые преимущества.</h3> -->
    </div>
</section>

<?php if ($features_complex_1): ?>
    <section class="step-sect">
        <div class="container">
            <h2 class="h2 center"><?php echo esc_html($features_heading_1); ?></h2>
            <div class="step-grid">
                <?php foreach ($features_complex_1 as $feature): ?>
                    <div class="step-item">
                        <span class="step-number"><?php echo esc_html($feature['features_number']); ?></span>
                        <h3 class="h3"><?php echo esc_html($feature['features_name']); ?></h3>
                        <p><?php echo esc_html($feature['features_text']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="center">
                <button type="button" class="btn js-modal" data-modal="#call">Получить звонок</button>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($features_complex_2): ?>
    <section class="instruction-sect">
        <div class="container">
            <h2 class="h2 center"><?php echo esc_html($features_heading_2); ?></h2>
            <div class="instruction-wrap">
                <?php foreach ($features_complex_2 as $step): ?>
                    <div class="instruction-block">
                        <h3 class="h3"><?php echo esc_html($step['features_name']); ?></h3>
                        <p><?php echo esc_html($step['features_text']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<div class="video-sect">
    <div class="container">
        <div class="video-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/planes/item/ch-350/image2264.jpg);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/play-text.png" class="video-overlay" id="video-overlay">
            <iframe class="video-player" src="https://www.youtube.com/embed/1Mh1Rro8IlE?controls=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="opacity:0;" id="video-player"></iframe>
        </div>
    </div>
</div>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-1.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/services-slider.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-ceo.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/features.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/services-compare.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-2.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/reviews.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/partners.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/faq.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-empty-legs.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-3.php'; ?>

<!-- <section class="app-sect">
    <div class="container">
        <div class="app-row">
            <div class="app-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/app.svg" class="app-icon" width="144" height="144" alt="">
                <h2 class="h2">Скачивайте мобильное приложение JetHunter</h2>
                <p>Мгновенно бронируйте свой идеальный полет с JetHunter в приложении с круглосуточной поддержкой.
                </p>

                <div class="btn-container">
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/google-play.png" class="app-store-icon" alt=""></a>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/app-store.png" class="app-store-icon" alt=""></a>
                </div>
            </div>
            <div class="app-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/iphone-mockup.png" class="app-mockup" loading="lazy" alt="">
            </div>
        </div>
    </div>
</section> -->

<?php get_footer(); ?>