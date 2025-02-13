<?php
/* Template Name: About us */
?>

<?php get_header(); ?>

<article class="article">
    <div class="container">
        <!-- <a href="" class="breadcrumbs-back">← К новостям</a> -->
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
        <h1 class="h1">О нас</h1>
        <div class="article-info">
            <span class="article-date">17.07.2024</span>
            <span class="article-info-time">1 мин</span>
        </div>
        <div class="article-hero">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/about-us-hero.jpg" class="article-hero-img" alt="">
        </div>
        <div class="article-body">
            <div class="about-wrap">
                <div class="about-item">
                    <div class="about-item-number">11</div>
                    <div class="about-item-text">лет на рынке авиаперелетов</div>
                </div>
                <div class="about-item">
                    <div class="about-item-number">42</div>
                    <div class="about-item-text">специалиста работают в нашей команде</div>
                </div>
                <div class="about-item">
                    <div class="about-item-number">5000</div>
                    <div class="about-item-text">самолетов и вертолетов доступно для заказа</div>
                </div>
                <div class="about-item">
                    <div class="about-item-number">4</div>
                    <div class="about-item-text">менее 4 часов для организации срочного рейса</div>
                </div>
                <div class="about-item">
                    <div class="about-item-number">107</div>
                    <div class="about-item-text">более 107 постоянных клиентов по всему миру</div>
                </div>
            </div>
            <?php the_content();?>
            <h2 class="h2">Наша команда</h2>
            <div class="about-team">
                <div class="about-team-item">
                    <div class="about-team-item-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/about-1.jpg" alt="">
                    </div>
                    <h3 class="h3">Полина Добрынникова</h3>
                    <p>руководитель Российского направления и стран СНГ</p>
                    <a href="mailto:polina.dobrynnikova@jethunter.aero" class="link">polina.dobrynnikova@jethunter.aero</a>
                </div>
                <div class="about-team-item">
                    <div class="about-team-item-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/about-2.jpg" alt="">
                    </div>
                    <h3 class="h3">Роман Федоров</h3>
                    <p>руководитель Американского направления и стран СНГ</p>
                    <a href="mailto:roman.fedorov@jethunter.aero" class="link">roman.fedorov@jethunter.aero</a>
                </div>
                <div class="about-team-item">
                    <div class="about-team-item-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/about-3.jpg" alt="">
                    </div>
                    <h3 class="h3">Ольга Полицина</h3>
                    <p>руководитель направления стран Латинской Америки</p>
                    <a href="mailto:olga.politsina@jethunter.aero" class="link">olga.politsina@jethunter.aero</a>
                </div>
                <div class="about-team-item">
                    <div class="about-team-item-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/about-4.jpg" alt="">
                    </div>
                    <h3 class="h3">Андрей Рябов</h3>
                    <p>руководитель полетов в страны Азии и Ближнего Востока</p>
                    <a href="mailto:andrey.ryabov@jethunter.aero" class="link">andrey.ryabov@jethunter.aero</a>
                </div>
            </div>
            <h2 class="h2">Лицензии</h2>
            <div class="about-team about-license">
                <div class="about-team-item">
                    <div class="about-team-item-img about-license-item-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/license.jpg" alt="">
                    </div>
                </div>
                <div class="about-team-item">
                    <div class="about-team-item-img about-license-item-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/license.jpg" alt="">
                    </div>
                </div>
                <div class="about-team-item">
                    <div class="about-team-item-img about-license-item-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/license.jpg" alt="">
                    </div>
                </div>
                <div class="about-team-item">
                    <div class="about-team-item-img about-license-item-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/license.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<section class="regular-sect">
    <div class="container">
        <div class="cta-row-big">
            <div class="cta-left">
                <h2 class="h1">Остались вопросы?</h2>
                <p class="text">Оставьте свои контактные данные и мы свяжемся с вами в течении 5 минут и подробнее обо всем расскажем</p>
                <h3 class="h3">Также мы есть в соц. сетях:</h3>
                <div class="form-social">
                    <a href="" class="btn-icon"><img src="https://jethunter.aero/wp-content/themes/jethunter/img/icons/tg-gradient.svg" loading="lazy" alt="Telegram"></a>
                    <a href="" class="btn-icon"><img src="https://jethunter.aero/wp-content/themes/jethunter/img/icons/wa-gradient.svg" loading="lazy" alt="WhatsApp"></a>
                </div>
            </div>
            <div class="cta-right">
                <div class="form-bg">
                    <?php echo do_shortcode('[contact-form-7 id="5c9874b" title="Узнать стоимость"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>