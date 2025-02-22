<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.umd.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <!--header id="header" role="banner">
            <div id="branding">
                <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <?php
                    if (is_front_page() || is_home() || is_front_page() && is_home()) {
                        echo '<h1>';
                    }
                    echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html(get_bloginfo('name')) . '</span></a>';
                    if (is_front_page() || is_home() || is_front_page() && is_home()) {
                        echo '</h1>';
                    }
                    ?>
                </div>
                <div id="site-description" <?php if (!is_single()) {
                                                echo ' itemprop="description"';
                                            } ?>><?php bloginfo('description'); ?></div>
            </div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                <div id="search"><?php get_search_form(); ?></div>
            </nav>
        </header>
        <div id="container">
            <main id="content" role="main"> -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="/" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="Logo"></a>
                <div class="nav-left">
                    <ul class="nav-links nav-links-top">
                        <li class="nav-links-item">
                            <a href="">Партнерская программа</a>
                        </li>
                        <li class="nav-links-item">
                            <a href="/reviews.php">Отзывы</a>
                        </li>
                        <li class="nav-links-item">
                            <a href="">Вопросы и ответы</a>
                        </li>
                        <li class="nav-links-item">
                            <a href="">Блог</a>
                        </li>
                        <li class="nav-links-item">
                            <a href="">Контакты</a>
                        </li>
                    </ul>
                    <ul class="nav-links nav-links-bottom">
                        <li class="nav-links-item">
                            <a href="">Пустые перелёты</a>
                        </li>
                        <li class="nav-links-item">
                            <a href="/our-fleet.php">Наш флот</a>
                        </li>
                        <li class="nav-links-item">
                            <a href="">Предложения</a>
                        </li>
                        <li class="nav-links-item">
                            <a href="">Услуги</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-right">
                    <div class="nav-right-contact">
                        <div class="nav-socials">
                            <a href="" class="nav-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/tg-white.svg" alt=""></a>
                            <a href="" class="nav-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/wa-white.svg" alt=""></a>
                            <a href="" class="nav-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/call-white.svg" alt=""></a>
                        </div>

                        <a href="tel:+74950000000" class="nav-tel-link">+7 495 000 00 00</a>
                    </div>
                    <ul class="nav-links">
                        <li class="nav-links-item">
                            <a href="">RU</a>
                        </li>
                        <li class="nav-links-item">
                            <a href="">EN</a>
                        </li>
                    </ul>
                </div>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>