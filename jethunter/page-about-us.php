<?php
/* Template Name: About us */
?>

<?php get_header(); ?>

<?php
$page_id = get_the_ID();

$stats = carbon_get_the_post_meta('stats');
$team = carbon_get_the_post_meta('team');
$licenses = carbon_get_the_post_meta('licenses');
?>

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
                <!-- <div class="about-item">
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
                </div> -->
                <?php foreach ($stats as $stat) : ?>
                    <div class="about-item">
                        <div class="about-item-number"><?php echo esc_html($stat['number']); ?></div>
                        <div class="about-item-text"><?php echo esc_html($stat['description']); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php the_content();?>
            <h2 class="h2">Наша команда</h2>
            <div class="about-team">
                <!-- <div class="about-team-item">
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
                </div> -->
                <?php foreach ($team as $member) : ?>
                    <div class="about-team-item">
                        <div class="about-team-item-img">
                            <img src="<?php echo esc_url($member['photo']); ?>" alt="">
                        </div>
                        <h3 class="h3"><?php echo esc_html($member['name']); ?></h3>
                        <p><?php echo esc_html($member['position']); ?></p>
                        <a href="mailto:<?php echo esc_html($member['email']); ?>" class="link"><?php echo esc_html($member['email']); ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
            <h2 class="h2">Лицензии</h2>
            <div class="about-team about-license">
                <?php foreach ($licenses as $license) : ?>
                    <div class="about-team-item">
                        <div class="about-team-item-img about-license-item-img">
                            <img src="<?php echo esc_url($license['license']); ?>" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</article>

<?php include_once get_stylesheet_directory() . '/components/ru/services-slider.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/quiz.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-ceo.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/features.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/services-compare.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-2.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/partners.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-empty-legs.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-3.php'; ?>

<?php get_footer(); ?>