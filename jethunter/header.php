<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.umd.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            // cookies
            if (localStorage.getItem("cookie") == null) {
                document.querySelector(".btn-cookie-ok").addEventListener("click", function(e) {
                    e.preventDefault();
                    document.querySelector(".cookie").style.display = "none";
                    localStorage.setItem("cookie", "ok");
                });
            } else if (localStorage.getItem("cookie") === "ok") {
                document.querySelector(".cookie").style.display = "none";
            }
        })
    </script>

    <?php wp_head(); ?>

    <!-- <script type="text/javascript" async src="https://app.callgear.com/static/cs.min.js?k=LKOTYngKOGm9I5QUL7vp7L6p4mWQ_Ft0"></script> -->
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <!--header id="header" role="banner">
            <div id="branding">
                <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <?php /*
                    if (is_front_page() || is_home() || is_front_page() && is_home()) {
                        echo '<h1>';
                    }
                    echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html(get_bloginfo('name')) . '</span></a>';
                    if (is_front_page() || is_home() || is_front_page() && is_home()) {
                        echo '</h1>';
                    }
                    */ ?>
                </div>
                <div id="site-description" <?php /* if (!is_single()) {
                                                echo ' itemprop="description"';
                                            } ?>><?php bloginfo('description'); */ ?></div>
            </div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php /* wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                <div id="search"><?php get_search_form(); */ ?></div>
            </nav>
        </header>
        <div id="container">
            <main id="content" role="main"> -->
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <a href="/" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo"></a>
                    <div class="nav-left">
                        <ul class="nav-links nav-links-top">
                            <li class="nav-links-item">
                                <!-- <a href="/affiliate">Партнерская программа</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/affiliate-en' : '/affiliate'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Affiliate Program' : 'Партнерская программа'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item ru-only">
                                <!-- <a href="/reviews">Отзывы</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/reviews-en' : '/reviews'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Reviews' : 'Отзывы'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item">
                                <!-- <a href="/faq">Вопросы и ответы</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/faq-en' : '/faq'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'FAQ' : 'Вопросы и ответы'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item">
                                <!-- <a href="/blog">Блог</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/blog-en' : '/blog'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Blog' : 'Блог'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item">
                                <!-- <a href="/contact">Контакты</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/contact-en' : '/contact'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Contacts' : 'Контакты'; ?>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-links nav-links-bottom">
                            <li class="nav-links-item">
                                <!-- <a href="/buy">Покупка</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/buy-en' : '/buy'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Acquisition' : 'Покупка'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item">
                                <!-- <a href="/rent">Аренда</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/rent-en' : '/rent'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Rent' : 'Аренда'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item">
                                <!-- <a href="/our-fleet">Наши самолёты</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/our-fleet-en' : '/our-fleet'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Inventory' : 'Наши самолёты'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item">
                                <!-- <a href="/wanted">Мы ищем</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/wanted-en' : '/wanted'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'We buy' : 'Мы ищем'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item">
                                <!-- <a href="/our-fleet">Все самолёты</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/our-fleet-en' : '/our-fleet'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Our fleet' : 'Все самолёты'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item">
                                <!-- <a href="/services">Услуги</a> -->
                                <a href="<?php echo pll_current_language() == 'en' ? '/services-en' : '/services'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Services' : 'Услуги'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item mob-only">
                                <a href="<?php echo pll_current_language() == 'en' ? '/empty-legs-en' : '/empty-legs'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Empty legs' : 'Пустые перелёты'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item mob-only">
                                <a href="<?php echo pll_current_language() == 'en' ? '/tour-en' : '/tour'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Offers' : 'Предложения'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item mob-only">
                                <a href="<?php echo pll_current_language() == 'en' ? '/about-us-en' : '/about-us'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'About us' : 'О нас'; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-right">
                        <div class="nav-right-contact">
                            <div class="nav-socials">
                                <a href="https://t.me/+77776777527" class="nav-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/tg-white.svg" alt="Telegram"></a>
                                <a href="https://wa.me/+77776777527" class="nav-social-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/wa-white.svg" alt="Whatsapp"></a>
                                <a href="#" class="nav-social-link nav-social-link-tel"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/socials/call-white.svg" alt="Phone number"></a>
                            </div>

                            <a href="#" class="nav-tel-link">&nbsp;</a>
                        </div>
                        <?php if (pll_current_language() == 'ru') : ?>
                            <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Обратный звонок</button>
                        <?php else : ?>
                            <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Call Me Back</button>
                        <?php endif; ?>
                        <ul class="nav-links">
                            <!-- <li class="nav-links-item">
                                <a href="">RU</a>
                            </li>
                            <li class="nav-links-item">
                                <a href="">EN</a>
                            </li> -->
                            <?php
                            // capture the output of pll_the_languages
                            /* $language_switcher = pll_the_languages(array(
                                'echo' => 0, // Get the output as a string
                                'show_flags' => 0, // Disable flags
                                'show_names' => 1 // Keep names (we'll replace them)
                            ));

                            // use preg_replace to replace the language names with uppercase slugs
                            $custom_language_switcher = preg_replace_callback(
                                '/<a[^>]*>(.*?)<\/a>/',
                                function ($matches) {
                                    // Map language names to codes
                                    $language_map = [
                                        'Русский' => 'RU',
                                        'English' => 'EN',
                                    ];

                                    // Replace the name with its corresponding code
                                    $language_name = $matches[1];
                                    $language_code = $language_map[$language_name] ?? $language_name;

                                    // Return the modified anchor tag
                                    return str_replace($language_name, $language_code, $matches[0]);
                                },
                                $language_switcher
                            );

                            // Print the cleaned-up language switcher
                            echo '<ul class="nav-links">' . $custom_language_switcher . '</ul>';*/
                            $current_lang = pll_current_language(); // получаем текущий язык

                            // получаем список языков без флагов и без эха
                            $languages = pll_the_languages(array(
                                'echo' => 0,
                                'show_flags' => 0,
                                'show_names' => 1,
                                'hide_current' => 1 // скрываем текущий язык
                            ));

                            // заменяем названия языков на их коды
                            $custom_language_switcher = preg_replace_callback(
                                '/<a[^>]*>(.*?)<\/a>/',
                                function ($matches) {
                                    $language_map = [
                                        'Русский' => 'RU',
                                        'English' => 'EN',
                                    ];

                                    $language_name = $matches[1];
                                    $language_code = $language_map[$language_name] ?? $language_name;

                                    return str_replace($language_name, $language_code, $matches[0]);
                                },
                                $languages
                            );

                            // Выводим результат
                            if (!empty($custom_language_switcher)) {
                                echo '<div class="nav-links">' . $custom_language_switcher . '</div>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <div class="nav-right-more">
                        <ul class="nav-links">
                            <li class="nav-links-item">
                                <a href="<?php echo pll_current_language() == 'en' ? '/empty-legs-en' : '/empty-legs'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Empty legs' : 'Пустые перелёты'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item">
                                <a href="<?php echo pll_current_language() == 'en' ? '/tour-en' : '/tour'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'Offers' : 'Предложения'; ?>
                                </a>
                            </li>
                            <li class="nav-links-item">
                                <a href="<?php echo pll_current_language() == 'en' ? '/about-us-en' : '/about-us'; ?>">
                                    <?php echo pll_current_language() == 'en' ? 'About us' : 'О нас'; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>