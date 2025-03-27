<?php
/* Template Name: Rent */
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
        <h1 class="h1">Самолеты для прирожденных лидеров</h1>
        <h2 class="h3">Новое слово в бизнес-авиации</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/section-image.png" class="intro-img" alt="">
    </div>
</section>

<section class="fleet-sect">
    <div class="container">
        <div class="search-wrap">
            <form class="search-form">
                <div class="search-form-options">
                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Тип</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active" data-value="Любой">Любой</li>
                            <li class="dropdown__list-item" data-value="Самолет">Самолет</li>
                            <li class="dropdown__list-item" data-value="Вертолет">Вертолет</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Категория</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active" data-value="Любой">Любой</li>
                            <li class="dropdown__list-item" data-value="Турбовинтовой">Турбовинтовой</li>
                            <li class="dropdown__list-item" data-value="Очень легкий">Очень легкий</li>
                            <li class="dropdown__list-item" data-value="Легкий">Легкий</li>
                            <li class="dropdown__list-item" data-value="Средний">Средний</li>
                            <li class="dropdown__list-item" data-value="Супер-средний">Супер-средний</li>
                            <li class="dropdown__list-item" data-value="Большой">Большой</li>
                            <li class="dropdown__list-item" data-value="Ультра-большой">Ультра-большой</li>
                            <li class="dropdown__list-item" data-value="Дальнемагистральный">Дальнемагистральный</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Производитель</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="Boeing">Boeing</li>
                            <li class="dropdown__list-item" data-value="Challenger">Challenger</li>
                            <li class="dropdown__list-item" data-value="Pilatus">Pilatus</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Дальность (км)</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="1000">1000</li>
                            <li class="dropdown__list-item" data-value="2000">2000</li>
                            <li class="dropdown__list-item" data-value="3000">3000</li>
                            <li class="dropdown__list-item" data-value="4000">4000</li>
                            <li class="dropdown__list-item" data-value="5000">5000</li>
                            <li class="dropdown__list-item" data-value="6000">6000</li>
                            <li class="dropdown__list-item" data-value="7000">7000</li>
                            <li class="dropdown__list-item" data-value="8000">8000</li>
                            <li class="dropdown__list-item" data-value="9000">9000</li>
                            <li class="dropdown__list-item" data-value="10000">10000</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Цена</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="500-1000">500-1000</li>
                            <li class="dropdown__list-item" data-value="1001-2000">1001-2000</li>
                            <li class="dropdown__list-item" data-value="2001-3000">2001-3000</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown_with-chk">
                        <button class="dropdown_with-chk__button" type="button">Количество мест</button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="2-5" id="2-5" />
                                <label class="dropdown_with-chk__list-item_label" for="2-5">2-5</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="6-15" id="6-15" />
                                <label class="dropdown_with-chk__list-item_label" for="6-15">6-15</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="16-30" id="16-30" />
                                <label class="dropdown_with-chk__list-item_label" for="16-30">16-30</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="31" id="31" />
                                <label class="dropdown_with-chk__list-item_label" for="31">31+</label>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="btn-container">
                    <button type="button" class="btn btn-green-fill btn-find">Найти</button>
                    <button type="button" class="btn btn-reset">Сбросить</button>
                </div>
            </form>
        </div>
        <div class="tabs tabs-line">
            <div class="tabs-options tabs-options-cat">
                <a href="#" class="btn btn-grey-fill">Турбовинтовой</a>
                <a href="#" class="btn btn-grey-fill">Очень легкий</a>
                <a href="#" class="btn btn-grey-fill">Легкий</a>
                <a href="#" class="btn btn-grey-fill">Средний</a>
                <a href="#" class="btn btn-grey-fill">Супер-средний</a>
                <a href="#" class="btn btn-grey-fill">Большой</a>
                <a href="#" class="btn btn-grey-fill">Ультра-большой</a>
                <a href="#" class="btn btn-grey-fill">Дальнемагистральный</a>
                <a href="#" class="btn btn-grey-fill">Бизнес-лайнер</a>
            </div>
        </div>
        <div class="tabs tabs-line">
            <div class="tabs-heading">Сортировать:</div>
            <div class="tabs-options">
                <a href="#" data-sort="name" class="btn btn-tab">Название</a>
                <!-- <a href="#" data-sort="rent_price" class="btn btn-tab">Цена аренды</a>
                <a href="#" data-sort="buy_price" class="btn btn-tab">Цена покупки</a> -->
                <a href="#" data-sort="aircraft_seats" class="btn btn-tab">Количество мест</a>
                <a href="#" data-sort="luggage_volume_m" class="btn btn-tab">Объем багажника</a>
                <a href="#" data-sort="range_km" class="btn btn-tab">Дальность</a>
                <a href="#" data-sort="cruise_speed_kmh" class="btn btn-tab">Скорость</a>
                <a href="#" data-sort="cabin_height_m" class="btn btn-tab">Высота салона</a>
            </div>
        </div>

        <div class="looking-grid looking-grid-full">
            <?php
            $args = [
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'meta_query'     => ['relation' => 'AND'],
            ];

            $aircrafts = new WP_Query($args);

            if ($aircrafts->have_posts()) :
                while ($aircrafts->have_posts()) : $aircrafts->the_post();
                    $product_id   = get_the_ID();
                    $manufacturer = carbon_get_post_meta($product_id, 'aircraft_make');
                    $range_km        = carbon_get_post_meta($product_id, 'range_km');
                    $aircraft_seats        = carbon_get_post_meta($product_id, 'aircraft_seats');
                    $aircraft_hour_cost        = carbon_get_post_meta($product_id, 'aircraft_hour_cost');
                    $luggage_volume_m        = carbon_get_post_meta($product_id, 'luggage_volume_m');
                    $cabin_height_m        = carbon_get_post_meta($product_id, 'cabin_height_m');
                    $cruise_speed_kmh        = carbon_get_post_meta($product_id, 'cruise_speed_kmh');
                    $aircraft_cat        = carbon_get_post_meta($product_id, 'aircraft_cat');

                    $image = get_the_post_thumbnail_url($product_id, 'full') ?: 'https://jethunter.aero/wp-content/themes/jethunter/img/planes/1.png';
            ?>
                    <div class="looking-item"
                        data-manufacturer="<?php echo esc_attr($manufacturer); ?>"
                        data-range_km="<?php echo esc_attr($range_km); ?>"
                        data-aircraft_hour_cost="<?php echo esc_attr($aircraft_hour_cost); ?>"
                        data-aircraft_seats="<?php echo esc_attr($aircraft_seats); ?>"
                        data-luggage_volume_m="<?php echo esc_attr($luggage_volume_m); ?>"
                        data-cabin_height_m="<?php echo esc_attr($cabin_height_m); ?>"
                        data-cruise_speed_kmh="<?php echo esc_attr($cruise_speed_kmh); ?>"
                        data-aircraft_cat="<?php echo esc_attr($aircraft_cat); ?>">
                        <img src="<?php echo esc_url($image); ?>" class="looking-img" loading="lazy" alt="<?php the_title(); ?>">
                        <h3 class="h3"><?php the_title(); ?></h3>
                        <div class="looking-desc">
                            <div class="looking-row">
                                <p class="looking-row-title">Скорость</p>
                                <p class="looking-row-desc"><?php echo esc_html($cruise_speed_kmh); ?> км/ч</p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Дальность</p>
                                <p class="looking-row-desc"><?php echo esc_html($range_km); ?> км</p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Количество мест</p>
                                <p class="looking-row-desc"><?php echo esc_html($aircraft_seats); ?></p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Цена в час</p>
                                <p class="looking-row-desc">$<?php echo esc_html($aircraft_hour_cost); ?></p>
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-green-fill">Подробнее</a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Ничего не найдено.</p>';
            endif;
            ?>
        </div>

        <div class="show-more is-hidden">
            <button class="btn btn-more">Смотреть ещё</button>
        </div>
        <div class="pagination">
            <nav class="pagination-left">
                <a href="" class="btn btn-pagination pagination-back">‹ Назад</a>
                <ul class="pagination-list">
                    <li class="pagination-list-item is-active">
                        <a href="">1</a>
                    </li>
                    <li class="pagination-list-item">
                        <a href="">2</a>
                    </li>
                    <li class="pagination-list-item">
                        <a href="">3</a>
                    </li>
                </ul>
                <a href="" class="btn btn-pagination pagination-forward">Вперед ›</a>
            </nav>
            <div class="pagination-right">
                <span class="pagination-text">Показывать:</span>
                <ul class="pagination-list">
                    <li class="pagination-list-item is-active">
                        <a href="">10</a>
                    </li>
                    <li class="pagination-list-item">
                        <a href="">20</a>
                    </li>
                    <li class="pagination-list-item">
                        <a href="">30</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/ru/quiz.php'; ?>

<?php include_once 'components/looking-sect.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/about-rent.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/step-3.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/instruction-8.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-1.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-ceo.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/features.php'; ?>


<!-- <section class="compare-sect">
    <div class="container">
        <h2 class="h2 center">Сравните уровень нашего сервиса</h2>
        <div class="compare-table">
            <div class="compare-head">
                <span class="compare-head-title">Обычный брокер</span>
                <span class="compare-head-title">Обычная авиакомпания</span>
                <span class="compare-head-title">Jet Hunter</span>
            </div>
            <div class="compare-body">
                <div class="compare-row">
                    <p class="compare-body-title">Опыт более 20 лет</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Персональный менеджер</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Предложения в рамках своего флота</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Поиск самолёта по общей базе</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Доступ к эксклюзивным самолетам</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Только Проверенные подрядчики</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Оптимизация цены за счет пустых перелетов</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Замена самолета из своего флота в случае поломки</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Замена самолета любым с рынка в случае поломки</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Своя служба OPS контролирует ваш рейс 24/7</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Свой представитель в крупнейших аэропортах</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Служба Контроля Качества гарантирует постоянное качество
                        выполнения рейсов</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Традиционные способы оплаты</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Более 50 других способов оплаты!</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
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

<?php include_once get_stylesheet_directory() . '/components/ru/cta-3.php'; ?>

<?php get_footer(); ?>