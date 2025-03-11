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

<section class="reviews-sect">
    <div class="container">
        <h2 class="h2 center">Отзывы клиентов о нас</h2>
        <div class="reviews-grid">
            <div class="reviews-item">
                <span class="reviews-rate">4.8</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Jet Hunter внимательно прислушивались к нашим потребностям и очень быстро реагировали, предлагая индивидуальные экономически-эффективные решения. Вам будет трудно найти другую организацию, которая может сравниться с их гибкостью и универсальностью. Я бы порекомендовал любую из услуг Jet Hunter любому владельцу бизнеса или оператору.</p>
                <p>Евгений С.</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.9</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Продажа самолета похожа на прокладывание пути по минному полю потенциальных ошибок: но Jet Hunter устранила все неопределенности, которые у нас были, и дала нам уверенность в правильности своего курса действий, тщательно объясняя и обосновывая свои доводы на каждом этапе пути. Мы не могли быть более довольны руководством, поддержкой и личным вниманием, которые мы получили от всей команды Jet Hunter!</p>
                <p>Агентство Х.</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.5</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-half.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Мы обратились в Jet Hunter по рекомендации партнеров и не пожалели! Высокий профессионализм, оперативность и широкий выбор самолетов — вот что отличает эту компанию. Мы уверены в нашем выборе и рекомендуем Jet Hunter всем, кто ценит свой комфорт.</p>
                <p>Корпорация А</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.7</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-half.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Сделка по покупке самолета — это всегда сложный и многоэтапный процесс. Но с Jet Hunter все прошло гладко и прозрачно. Отдельное спасибо юридической службе за оперативное решение всех вопросов!</p>
                <p>Виталий</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.9</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Как профессионал, я могу оценить техническое состояние самолетов, предлагаемых Jet Hunter. Все машины находятся в отличном состоянии и соответствуют высочайшим стандартам безопасности.</p>
                <p>Леонид Х.</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.8</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Творчество моего руководителя требует вдохновения, и он нашел его в путешествиях. Благодаря Jet Hunter у него появилась возможность проводить выставки по всему миру, не тратя время на аренду джетов. Не тратили лишнего времени на бухгалтерию, минимальное присутствие, рекомендуем.</p>
                <p>Менеджер Майкла О</p>
            </div>
        </div>
    </div>
</section>

<section class="partners-sect">
    <div class="container">
        <h2 class="h2 center">Наши партнеры</h2>
        <div class="partners-grid">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/malindo-airlines-logo-3A2A347831-seeklogo.com 1.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/abc.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/globeair.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/jetlinx.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/netjets.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/netjets.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/planesense.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/volato.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/wheelsup.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/xojet.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/tyrolean.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/solairus.png" class="partners-logo" loading="lazy" alt="">
        </div>
    </div>
</section>

<section class="regular-sect">
    <div class="container">
        <div class="cta-row">
            <div class="cta-left">
                <h2 class="h1">Остались вопросы?</h2>
                <p class="text">Оставьте свои контактыне данные, и мы свяжемся с вами в течении 5 минут и подробнее обо всем расскажем</p>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="74ced67" title="CTA 2"]'); ?>
        </div>
    </div>
</section>

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