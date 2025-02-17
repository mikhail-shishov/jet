<?php
/* Template Name: Reviews EN */
?>

<?php get_header(); ?>

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
                <p>Our customers highly appreciate the quality of our service. 
                We take care of every requirement, striving to organize your flight flawlessly. When you contact JetHunter you will be convinced of the exceptional professionalism of our employees. Your satisfaction is our main goal.</p>
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
            <div class="tabs-heading">Review type:</div>
            <div class="tabs-options">
                <a href="#" data-filter="all" class="btn btn-tab-type is-active">All</a>
                <a href="#" data-filter="rent" class="btn btn-tab-type">Rent</a>
                <a href="#" data-filter="purchase" class="btn btn-tab-type">Purchase</a>
            </div>
        </div>

        <div class="tabs">
            <div class="tabs-heading">Sort by: </div>
            <div class="tabs-options">
                <a href="#" data-sort="newest" class="btn btn-tab is-active">Recent</a>
                <a href="#" data-sort="oldest" class="btn btn-tab">Old</a>
                <a href="#" data-sort="positive" class="btn btn-tab">Good</a>
                <a href="#" data-sort="negative" class="btn btn-tab">Bad</a>
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
                        $halfStar = ($rate <= 4.7) ? 1 : 0;
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

        <!-- <div class="reviews-grid">
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
        </div> -->
    </div>
</section>

<section class="about-sect">
    <div class="container">
        <h2 class="h2 center">Word of CEO</h2>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/about.svg" width="460" height="460" class="about-img" loading="lazy" alt="">

            <p>At JetHunter we believe that time is the most valuable resource, the sky is not a limit, but space for new possibilities. We help people who value their time and strive for maximum efficiency to travel any distance with unmatched comfort and style. </p>
            <p>work and willing to exceed your expectations.  We take into account the individual needs of each client, offering not only a wide selection of aircraft from the world’s leading manufacturers, but also a full range of services related to the ownership and operation of business jet. </p>
            <p>We value the trust you give us and strive to build long-term and mutually beneficial relationships with each client. </p>
            <p>With JetHunter you get not just a plane, you get the key to unlimited possibilities! </p>
            <br>
            <p>With very best regards,</p>
            <p>Aleksei Mordvintsev</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>