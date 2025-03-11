<?php
/* Template Name: Buy */
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

<?php get_footer(); ?>