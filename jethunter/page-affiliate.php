<?php
/* Template Name: Affiliate */
?>

<?php get_header(); ?>

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

<section class="step-sect">
    <div class="container">
        <h2 class="h2 center">4 шага к вашему идеальному полету</h2>
        <div class="step-grid step-grid-2">
            <div class="step-item">
                <span class="step-number">1</span>
                <h3 class="h3">Заполните форму заявки</h3>
                <p>Предоставьте всю необходимую информацию.</p>
            </div>
            <div class="step-item">
                <span class="step-number">2</span>
                <h3 class="h3">Обсудите условия с менеджером</h3>
                <p>С вами свяжется менеджер, чтобы подробно обсудить нашу программу.</p>
            </div>
            <div class="step-item">
                <span class="step-number">3</span>
                <h3 class="h3">Присоединитесь к команде</h3>
                <p>Предлагайте услуги Jet Hunter вашим друзьям, партнерам и клиентам.</p>
            </div>
            <div class="step-item">
                <span class="step-number">4</span>
                <h3 class="h3">Получите кешбек</h3>
                <p>Получайте кешбек за каждый рейс каждого приведенного клиента. Мы будем платить все время, сколько с нами будет летать этот клиент.</p>
            </div>
        </div>
    </div>
</section>

<section class="about-sect">
    <div class="container">
        <h2 class="h2 center">Партнерская программа от JetHunter</h2>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/comfort-2.svg" width="460" height="460" class="about-img about-img-left" loading="lazy" alt="">

            <p>Партнерская программа является отличной возможностью для тех, кто хочет монетизировать свою страсть к роскошным путешествиям на частных самолетах. Эта программа открывает дверь в мир бизнес авиации: от частных самолетов и групповых чартеров до грузовых услуг, аренды самолетов и продажи реактивных джетов.</p>

            <p>Эта программа создана для энтузиастов из различных отраслей сегмента люкс. Если вы работаете с людьми из премиального сегмента, то вы можете стать нашим амбассадором и получать кэшбэк с успешных рейсов ваших клиентов. </p>

            <p>Мы обеспечиваем поддержку 24/7, предоставляя всю необходимую информацию. Вам предоставляется персональный советник по вопросам частной авиации, который будет отвечать на все интересующие вопросы.</p>

            <p>Jet Hunter сочетает конкурентные цены с качеством работы, благодаря нашему многолетнему опыту и доступу к эксклюзивным предложениям.</p>
        </div>
        <h3 class="h3 center">Станьте членом нашего сообщества и зарабатывайте вместе с нами.</h3>
    </div>
</section>

<?php get_footer(); ?>