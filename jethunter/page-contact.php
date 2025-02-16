<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>

<article class="article">
    <div class="container">
        <!-- <a href="" class="breadcrumbs-back">← К новостям</a> -->
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
        <h1 class="h1">Контакты</h1>
        <div class="article-info">
            <span class="article-date">17.07.2024</span>
            <span class="article-info-time">1 мин</span>
        </div>
        <div class="article-hero">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/contact-hero.jpg" class="article-hero-img" alt="">
        </div>
        <div class="article-body">
            <div class="accordion-container">
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Казахстан</p>
                    </div>
                    <div class="accordion-text">
                        <p class="article-note-name">Телефон: <a href="tel:+77273574665">+7 (727) 357-46-65</a><br>
                            Почта: <a href="mailto:sales@jethunter.aero">sales@jethunter.aero</a><br>
                            Офис: Казахстан, ул. Ауэзова, 60, Алматы</p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Узбекистан</p>
                    </div>
                    <div class="accordion-text">
                        <p class="article-note-name">Телефон: <a href="tel:+998712050839">+998 (712) 05-08-39</a><br>
                            Почта: <a href="mailto:sales@jethunter.aero">sales@jethunter.aero</a></p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Великобритания</p>
                    </div>
                    <div class="accordion-text">
                        <p class="article-note-name">Телефон: <a href="tel:+442033180536">+44 (203) 318-05-36</a><br>
                            Почта: <a href="mailto:sales@jethunter.aero">sales@jethunter.aero</a></p>
                    </div>
                </div>
            </div>
        </div>

        <section class="regular-sect">
            <div class="container">
                <div class="cta-row-big">
                    <div class="cta-left">
                        <h2 class="h1">Остались вопросы?</h2>
                        <p class="text">Оставьте свои контактные данные и мы свяжемся с вами в течении 5 минут и подробнее обо всем расскажем</p>
                        <h3 class="h3">Также мы есть в соц. сетях:</h3>
                        <div class="form-social">
                            <a href="https://t.me/+77776777527" rel="nofollow" class="btn-icon"><img src="https://jethunter.aero/wp-content/themes/jethunter/img/icons/tg-gradient.svg" loading="lazy" alt="Telegram"></a>
                            <a href="https://wa.me/+77776777527" rel="nofollow" class="btn-icon"><img src="https://jethunter.aero/wp-content/themes/jethunter/img/icons/wa-gradient.svg" loading="lazy" alt="WhatsApp"></a>
                        </div>
                    </div>
                    <div class="cta-right">
                        <div class="form-bg">
                            <?php echo do_shortcode('[contact-form-7 id="2fe469b" title="CTA 3"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>

<?php get_footer(); ?>