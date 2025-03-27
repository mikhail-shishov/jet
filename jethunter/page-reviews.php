<?php
/* Template Name: Reviews */
?>

<?php
get_header();
$reviews = carbon_get_the_post_meta('reviews');
?>

<section class="breadcrumbs-sect">
    <div class="container">
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
    </div>
</section>

<section class="review-overall-sect">
    <div class="container">
        <div class="review-overall-row">
            <div class="review-overall-left">
                <h1 class="h2">Отзывы клиентов о нашей работе</h1>
                <p>Наши клиенты высоко оценивают качество нашего сервиса. 
                    Мы внимательно относимся к каждому требованию, стремясь организовать ваш перелет безупречно. Обращаясь в компанию Jet Hunter, вы убедитесь в исключительном профессионализме наших сотрудников. Ваше удовлетворение — наша главная цель.</p>
            </div>

            <div class="review-overall-right">
                <div class="review-overall-rating">
                    <span class="reviews-rate">4.9</span>
                    <div class="reviews-stars">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-half.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    </div>
                </div>
                <a href="/" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo"></a>
            </div>
        </div>

        <div class="tabs">
            <div class="tabs-heading">Тип отзыва:</div>
            <div class="tabs-options">
                <a href="#" data-filter="all" class="btn btn-tab btn-tab-type is-active">Все</a>
                <a href="#" data-filter="rent" class="btn btn-tab btn-tab-type">Об аренде</a>
                <a href="#" data-filter="purchase" class="btn btn-tab btn-tab-type">О покупке</a>
            </div>
        </div>

        <div class="tabs">
            <div class="tabs-heading">Показать сначала: </div>
            <div class="tabs-options">
                <a href="#" data-sort="newest" class="btn btn-tab btn-tab-reviews is-active">Новые</a>
                <a href="#" data-sort="oldest" class="btn btn-tab btn-tab-reviews">Старые</a>
                <a href="#" data-sort="positive" class="btn btn-tab btn-tab-reviews">Положительные</a>
                <a href="#" data-sort="negative" class="btn btn-tab btn-tab-reviews">Отрицательные</a>
            </div>
        </div>

        <div class="reviews-grid">
            <?php foreach ($reviews as $review):
                $rate = isset($review['rate']) ? floatval($review['rate']) : 0;
                $author = isset($review['author']) ? esc_html($review['author']) : 'Аноним';
                $text = isset($review['text']) ? esc_html($review['text']) : '';
                $date = isset($review['date']) ? esc_html($review['date']) : '';
                $type = isset($review['review_type']) ? $review['review_type'] : [];
                $typeClass = implode(" ", $type);
            ?>
                <div class="reviews-item <?= esc_attr($typeClass) ?>"
                    data-date="<?= esc_attr($date) ?>"
                    data-rate="<?= esc_attr($rate) ?>"
                    data-type="<?= esc_attr($typeClass) ?>">
                    <span class="reviews-rate"><?= esc_html($rate) ?></span>
                    <div class="reviews-stars">
                        <?php
                        $fullStars = floor($rate);
                        $halfStar = ($rate <= 4.7 && $rate > $fullStars) ? 1 : 0; // половинная звезда, если рейтинг <= 4.7
                        if ($rate > 4.7) {
                            $fullStars = 5; // гарантируем, что будет 5 полных звезд, если рейтинг больше 4.7
                        }
                        for ($i = 0; $i < $fullStars; $i++) {
                            echo '<img src="https://jethunter.aero/wp-content/themes/jethunter/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="Full star">';
                        }
                        if ($halfStar) {
                            echo '<img src="https://jethunter.aero/wp-content/themes/jethunter/img/icons/star-half.svg" loading="lazy" class="reviews-stars-icon" alt="Half star">';
                        }
                        ?>
                    </div>
                    <p><?= esc_html($text) ?></p>
                    <p><?= esc_html($author) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- <div class="reviews-item">
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
            </div> -->
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-ceo.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/features.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/services-compare.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/services-slider.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/quiz.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-2.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/blog.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/faq.php'; ?>

<?php get_footer(); ?>