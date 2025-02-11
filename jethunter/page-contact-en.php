<?php
/* Template Name: Contact EN */
?>

<?php get_header(); ?>

<article class="article">
    <div class="container">
        <!-- <a href="" class="breadcrumbs-back">← К новостям</a> -->
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
        <h1 class="h1">Contact</h1>
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
    </div>
</article>

<?php get_footer(); ?>