<?php
/* Template Name: Affiliate */
?>

<?php get_header(); ?>

<?php $affiliate = carbon_get_the_post_meta('affiliate'); ?>

<section class="breadcrumbs-sect">
    <div class="container">
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
    </div>
</section>

<section class="affiliate-intro-sect">
    <div class="container">
        <h1 class="h1">Вступайте в нашу партнерскую программу</h1>
        <h2 class="h3">Получайте кешбек от продаж с каждого приведенного клиента</h2>
        <div class="center">
            <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Зарегистрироваться</button>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/affiliate-section-image.png" class="intro-img" alt="">
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/ru/step-4.php'; ?>

<section class="about-sect">
    <div class="container">
    <?php if (!empty($affiliate)) {
            foreach ($affiliate as $section) {
                if (!empty($section['h2'])) {
                    echo '<h2 class="h2 center">' . esc_html($section['h2']) . '</h2>';
                }

                echo '<div class="about-text">';

                if (!empty($section['img'])) {
                    $img_url = wp_get_attachment_image_url($section['img'], 'full');
                    echo '<img src="' . esc_url($img_url) . '" class="about-img about-img-left" loading="lazy" alt="">';
                }

                if (!empty($section['text_1'])) {
                    echo wp_kses_post($section['text_1']);
                }

                echo '</div>';

                if (!empty($section['h3'])) {
                    echo '<h3 class="h3 center">' . esc_html($section['h3']) . '</h3>';
                }
            }
        }
        ?>
        <!-- <h2 class="h2 center">Партнерская программа от JetHunter</h2>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/comfort-2.svg" width="460" height="460" class="about-img about-img-left" loading="lazy" alt="">

            <p>Партнерская программа является отличной возможностью для тех, кто хочет монетизировать свою страсть к роскошным путешествиям на частных самолетах. Эта программа открывает дверь в мир бизнес авиации: от частных самолетов и групповых чартеров до грузовых услуг, аренды самолетов и продажи реактивных джетов.</p>

            <p>Эта программа создана для энтузиастов из различных отраслей сегмента люкс. Если вы работаете с людьми из премиального сегмента, то вы можете стать нашим амбассадором и получать кэшбэк с успешных рейсов ваших клиентов. </p>

            <p>Мы обеспечиваем поддержку 24/7, предоставляя всю необходимую информацию. Вам предоставляется персональный советник по вопросам частной авиации, который будет отвечать на все интересующие вопросы.</p>

            <p>Jet Hunter сочетает конкурентные цены с качеством работы, благодаря нашему многолетнему опыту и доступу к эксклюзивным предложениям.</p>
        </div>
        <h3 class="h3 center">Станьте членом нашего сообщества и зарабатывайте вместе с нами.</h3> -->
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/ru/faq.php'; ?>

<?php get_footer(); ?>