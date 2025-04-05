<?php
/* Template Name: Wanted */
?>

<?php get_header(); ?>

<section class="breadcrumbs-sect">
    <div class="container">
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
    </div>
</section>

<section class="intro-fleet-sect">
    <div class="container">
        <h1 class="h1">Продажа и аренда частных самолётов по всему миру</h1>
        <h2 class="h3">Новая эра бизнес-авиации</h2>
        <div class="btn-container">
            <a href="/our-fleet" class="btn btn-green-fill">Узнать больше</a>
            <button type="button" class="btn js-modal" data-modal="#call">Связаться с нами</button>
        </div>
        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/section-wanted-image.webp" class="intro-img" alt=""> -->
    </div>
</section>

<section class="fleet-sect regular-sect">
    <div class="container">
        <?php
        $planes_data = carbon_get_post_meta(get_the_ID(), 'planes_wanted');
        // error_log(print_r($planes_data, true));

        if ($planes_data) : ?>
            <div class="looking-grid looking-grid-full show-more-grid" data-total-items="<?php echo count($planes_data); ?>">
                <?php foreach ($planes_data as $plane) : 
                    $image_url = !empty($plane['image']) ? wp_get_attachment_url($plane['image']) : get_stylesheet_directory_uri() . '/img/planes/1.png';
                    $item_class = $index >= 10 ? 'looking-item is-hidden' : 'looking-item';
                ?>
                    <div class="<?php echo $item_class; ?>">
                        <img src="<?php echo esc_url($image_url); ?>" class="looking-img" loading="lazy" alt="<?php echo esc_attr($plane['title']); ?>">
                        <h3 class="h3"><?php echo esc_html($plane['title']); ?></h3>
                        <div class="looking-desc">
                            <div class="looking-row">
                                <p class="looking-row-title">Год выпуска</p>
                                <p class="looking-row-desc"><?php echo esc_html($plane['produced_year'] ?: 'Не указан'); ?></p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Налет часов</p>
                                <p class="looking-row-desc"><?php echo esc_html($plane['hours_flown'] ?: 'Не указан'); ?></p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Цена</p>
                                <p class="looking-row-desc"><?php echo esc_html($plane['price'] ? ' ' . number_format($plane['price'], 0, ',', ' ') . '$' : 'По запросу'); ?></p>
                            </div>
                        </div>
                        <button type="button" class="btn js-modal" data-modal="#call" data-title="<?php echo esc_attr($plane['title']); ?>">Предложить</button>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if (count($planes_data) > 10) : ?>
            <div class="show-more">
                <a href="#" class="link">Смотреть ещё</a>
            </div>
            <?php endif; ?>
        <?php else : ?>
            <p>Нет данных о самолетах.</p>
        <?php endif; ?>

        <!-- <div class="looking-grid looking-grid-full">
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
        </div> -->
        <!-- <div class="show-more is-hidden">
            <button class="btn btn-more">Смотреть ещё</button>
        </div> -->
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/ru/quiz.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/empty-legs.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/about-rent.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/step-3.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/instruction-8.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-1.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-ceo.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/features.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/services-compare.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/services-slider.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-2.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/reviews.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/partners.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/faq.php'; ?>

<section class="plane-sect">
    <div class="container">
        <h2 class="h2 center">Взлетайте в любое время с&nbsp;Jet&nbsp;Hunter</h2>
        <div class="plane-grid">
            <div class="plane-grid-item">
                <h3 class="h3">Турбовинтовые</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Pilatus PC-12 NGX</li>
                    <li>King Air 360ER</li>
                    <li>King Air 260</li>
                    <li>Piaggio Avanti II</li>
                    <li>Beechcraft Denali</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Очень легкие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/2.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Cessna CJ1+</li>
                    <li>HondaJet Elite II</li>
                    <li>Cessna M2</li>
                    <li>Phenom 100EX</li>
                    <li>Cirrus Vision Jet</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Легкие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/3.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Cessna CJ3 Gen 2</li>
                    <li>Cessna CJ4 Gen 2</li>
                    <li>Learjet 40XR</li>
                    <li>Learjet 75</li>
                    <li>Phenom 300E</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Средние</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/4.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Citation Latitude</li>
                    <li>Citation XLS+</li>
                    <li>Pilatus PC-24</li>
                    <li>Learjet 60 XR</li>
                    <li>Praetor 500</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Супер-средние</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/5.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Challenger 350</li>
                    <li>Citation Longitude</li>
                    <li>Citation X+</li>
                    <li>Gulfstream G280</li>
                    <li>Praetor 600</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>

            <div class="plane-grid-item">
                <h3 class="h3">Большие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/6.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Challenger 604</li>
                    <li>Challenger 605</li>
                    <li>Challenger 650</li>
                    <li>Falcon 2000S</li>
                    <li>Falcon 2000LXS</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Ультра-большие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/7.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Gulfstream G450</li>
                    <li>Falcon 900LX</li>
                    <li>Challenger 850</li>
                    <li>Legacy 600</li>
                    <li>Legacy 650</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Дальне магистральные</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/8.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Global 5500</li>
                    <li>Global 7500</li>
                    <li>Falcon 8X</li>
                    <li>Gulfstream G550</li>
                    <li>Gulfstream G650ER</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Бизнес-лайнеры</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/9.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>ACJ 220</li>
                    <li>ACJ 320 neo</li>
                    <li>BBJ 737-8 MAX</li>
                    <li>Lineage 1000E</li>
                    <li>Sukhoi Business jet</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Вертолеты</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/10.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Bell 407</li>
                    <li>Airbus H125</li>
                    <li>Airbus H145</li>
                    <li>Leonardo AW109</li>
                    <li>MI-8AMT</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
        </div>
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-empty-legs.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-2.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/features.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/instruction-8.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-3.php'; ?>


<!-- <section class="app-sect">
    <div class="container">
        <div class="app-row">
            <div class="app-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/app.svg" class="app-icon" width="144" height="144" alt="">
                <h2 class="h2">Скачивайте мобильное приложение The Jet</h2>
                <p>Мгновенно бронируйте свой идеальный полет с The Jet в приложении с круглосуточной поддержкой.
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