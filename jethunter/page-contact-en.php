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
            <span class="article-info-time">1 min</span>
        </div>
        <div class="article-hero">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/contact-hero.jpg" class="article-hero-img" alt="">
        </div>
        <div class="article-body">
            <div class="accordion-container">
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Kazakhstan</p>
                    </div>
                    <div class="accordion-text">
                        <p class="article-note-name">Phone number: <a href="tel:+77273574665">+7 (727) 357-46-65</a><br>
                            E-mail: <a href="mailto:sales@jethunter.aero">sales@jethunter.aero</a><br>
                            Office: Kazakhstan, Auezova street, 60, Almaty</p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Uzbekistan</p>
                    </div>
                    <div class="accordion-text">
                        <p class="article-note-name">Phone number: <a href="tel:+998712050839">+998 (712) 05-08-39</a><br>
                        E-mail: <a href="mailto:sales@jethunter.aero">sales@jethunter.aero</a></p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">United Kingdom</p>
                    </div>
                    <div class="accordion-text">
                        <p class="article-note-name">Phone number: <a href="tel:+442033180536">+44 (203) 318-05-36</a><br>
                        E-mail: <a href="mailto:sales@jethunter.aero">sales@jethunter.aero</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<?php include_once get_stylesheet_directory() . '/components/en/services-slider.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/quiz.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/features.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/faq.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/cta-1.php'; ?>

<?php get_footer(); ?>