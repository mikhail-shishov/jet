<?php
/* Template Name: Buy EN */
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
        <h1 class="h1">Aircraft for sale and rent all over the World</h1>
        <h2 class="h3">New era of business aviation</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/section-image.png" class="intro-img" alt="">
    </div>
</section>

<div class="fleet-sect">
    <div class="container">
        <div class="search-wrap">
            <form class="search-form">
                <div class="search-form-options">
                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Тип</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active" data-value="Любой">Любой</li>
                            <li class="dropdown__list-item" data-value="1">1</li>
                            <li class="dropdown__list-item" data-value="2">2</li>
                            <li class="dropdown__list-item" data-value="3">3</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Категория</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active" data-value="Любой">Любой</li>
                            <li class="dropdown__list-item" data-value="1">1</li>
                            <li class="dropdown__list-item" data-value="2">2</li>
                            <li class="dropdown__list-item" data-value="3">3</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Производитель</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="Challenger">Challenger</li>
                            <li class="dropdown__list-item" data-value="Boeing">Boeing</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Дальность (км)</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="1000">1000</li>
                            <li class="dropdown__list-item" data-value="2000">2000</li>
                            <li class="dropdown__list-item" data-value="3000">3000</li>
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
        <div class="looking-grid looking-grid-full">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'meta_query' => array(
                    'relation' => 'AND',
                ),
            );

            // Фильтр по производителю
            // if (isset($_GET['manufacturer']) && $_GET['manufacturer'] !== 'Любой') {
            //     $manufacturer = sanitize_text_field($_GET['manufacturer']);
            //     $args['s'] = $manufacturer; // Ищем в заголовке
            //     $args['search_columns'] = array('post_title'); // Указываем, что искать только в названии
            // }

            // // Фильтр по дальности
            // if (isset($_GET['range']) && $_GET['range'] !== '') {
            //     $args['meta_query'][] = array(
            //         'key' => '_aircraft_range',
            //         'value' => (int) sanitize_text_field($_GET['range']),
            //         'type' => 'NUMERIC',
            //         'compare' => '>='
            //     );
            // }

            // // Фильтр по цене
            // if (isset($_GET['price']) && $_GET['price'] !== '') {
            //     $price_range = explode('-', sanitize_text_field($_GET['price']));
            //     if (count($price_range) === 2) {
            //         $args['meta_query'][] = array(
            //             'key' => '_aircraft_price',
            //             'value' => array((int)$price_range[0], (int)$price_range[1]),
            //             'type' => 'NUMERIC',
            //             'compare' => 'BETWEEN'
            //         );
            //     }
            // }

            // // Фильтр по количеству мест
            // if (isset($_GET['seats']) && is_array($_GET['seats'])) {
            //     $seat_queries = array('relation' => 'OR');
            //     foreach ($_GET['seats'] as $seat_range) {
            //         if ($seat_range === '31') {
            //             $seat_queries[] = array(
            //                 'key' => '_aircraft_seats',
            //                 'value' => 31,
            //                 'type' => 'NUMERIC',
            //                 'compare' => '>='
            //             );
            //         } else {
            //             $seat_bounds = explode('-', $seat_range);
            //             if (count($seat_bounds) === 2) {
            //                 $seat_queries[] = array(
            //                     'key' => '_aircraft_seats',
            //                     'value' => array((int)$seat_bounds[0], (int)$seat_bounds[1]),
            //                     'type' => 'NUMERIC',
            //                     'compare' => 'BETWEEN'
            //                 );
            //             }
            //         }
            //     }
            //     $args['meta_query'][] = $seat_queries;
            // }

            // Получение продуктов
            $aircrafts = new WP_Query($args);

            if ($aircrafts->have_posts()) :
                while ($aircrafts->have_posts()) : $aircrafts->the_post();
                    $manufacturer = get_post_meta(get_the_ID(), '_custom_field_manufacturer', true);
                    $range = get_post_meta(get_the_ID(), '_custom_field_range', true);
                    $seats = get_post_meta(get_the_ID(), '_custom_field_seats', true);
                    $price = get_post_meta(get_the_ID(), '_custom_field_rent_price', true);
                    $speed = get_post_meta(get_the_ID(), '_custom_field_speed', true);
            ?>
                    <div class="looking-item"
                        data-manufacturer="<?php echo esc_attr($manufacturer); ?>"
                        data-range="<?php echo esc_attr($range); ?>"
                        data-price="<?php echo esc_attr($price); ?>"
                        data-seats="<?php echo esc_attr($seats); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="looking-img" loading="lazy" alt="<?php the_title(); ?>">
                        <h3 class="h3"><?php the_title(); ?></h3>
                        <div class="looking-desc">
                            <div class="looking-row">
                                <p class="looking-row-title">Скорость</p>
                                <p class="looking-row-desc"><?php echo esc_html($speed); ?></p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Дальность</p>
                                <p class="looking-row-desc"><?php echo esc_html($range); ?> км</p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Количество мест</p>
                                <p class="looking-row-desc"><?php echo esc_html($seats); ?></p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Цена в час</p>
                                <p class="looking-row-desc">$<?php echo esc_html($price); ?></p>
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-green-fill">Подробнее</a>
                    </div>
            <?php
                endwhile;
            else :
                echo '<p>Ничего не найдено.</p>';
            endif;
            ?>

            <!-- <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <div class="looking-desc">
                        <div class="looking-row">
                            <p class="looking-row-title">Скорость</p>
                            <p class="looking-row-desc">ACJ 320 neo</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Дальность</p>
                            <p class="looking-row-desc">11000 км/
                                5939 nm</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Количество мест</p>
                            <p class="looking-row-desc">19</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Цена в час</p>
                            <p class="looking-row-desc">22 300₽</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-green-fill">Подробнее</a>
                </div>
                <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <div class="looking-desc">
                        <div class="looking-row">
                            <p class="looking-row-title">Скорость</p>
                            <p class="looking-row-desc">ACJ 320 neo</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Дальность</p>
                            <p class="looking-row-desc">11000 км/
                                5939 nm</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Количество мест</p>
                            <p class="looking-row-desc">19</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Цена в час</p>
                            <p class="looking-row-desc">22 300₽</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-green-fill">Подробнее</a>
                </div>
                <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <div class="looking-desc">
                        <div class="looking-row">
                            <p class="looking-row-title">Скорость</p>
                            <p class="looking-row-desc">ACJ 320 neo</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Дальность</p>
                            <p class="looking-row-desc">11000 км/
                                5939 nm</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Количество мест</p>
                            <p class="looking-row-desc">19</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Цена в час</p>
                            <p class="looking-row-desc">22 300₽</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-green-fill">Подробнее</a>
                </div>
                <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <div class="looking-desc">
                        <div class="looking-row">
                            <p class="looking-row-title">Скорость</p>
                            <p class="looking-row-desc">ACJ 320 neo</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Дальность</p>
                            <p class="looking-row-desc">11000 км/
                                5939 nm</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Количество мест</p>
                            <p class="looking-row-desc">19</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Цена в час</p>
                            <p class="looking-row-desc">22 300₽</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-green-fill">Подробнее</a>
                </div>
                <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <div class="looking-desc">
                        <div class="looking-row">
                            <p class="looking-row-title">Скорость</p>
                            <p class="looking-row-desc">ACJ 320 neo</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Дальность</p>
                            <p class="looking-row-desc">11000 км/
                                5939 nm</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Количество мест</p>
                            <p class="looking-row-desc">19</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Цена в час</p>
                            <p class="looking-row-desc">22 300₽</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-green-fill">Подробнее</a>
                </div>
                <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <div class="looking-desc">
                        <div class="looking-row">
                            <p class="looking-row-title">Скорость</p>
                            <p class="looking-row-desc">ACJ 320 neo</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Дальность</p>
                            <p class="looking-row-desc">11000 км/
                                5939 nm</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Количество мест</p>
                            <p class="looking-row-desc">19</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Цена в час</p>
                            <p class="looking-row-desc">22 300₽</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-green-fill">Подробнее</a>
                </div>
                <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <div class="looking-desc">
                        <div class="looking-row">
                            <p class="looking-row-title">Скорость</p>
                            <p class="looking-row-desc">ACJ 320 neo</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Дальность</p>
                            <p class="looking-row-desc">11000 км/
                                5939 nm</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Количество мест</p>
                            <p class="looking-row-desc">19</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Цена в час</p>
                            <p class="looking-row-desc">22 300₽</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-green-fill">Подробнее</a>
                </div>
                <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <div class="looking-desc">
                        <div class="looking-row">
                            <p class="looking-row-title">Скорость</p>
                            <p class="looking-row-desc">ACJ 320 neo</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Дальность</p>
                            <p class="looking-row-desc">11000 км/
                                5939 nm</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Количество мест</p>
                            <p class="looking-row-desc">19</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Цена в час</p>
                            <p class="looking-row-desc">22 300₽</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-green-fill">Подробнее</a>
                </div>
                <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <div class="looking-desc">
                        <div class="looking-row">
                            <p class="looking-row-title">Скорость</p>
                            <p class="looking-row-desc">ACJ 320 neo</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Дальность</p>
                            <p class="looking-row-desc">11000 км/
                                5939 nm</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Количество мест</p>
                            <p class="looking-row-desc">19</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Цена в час</p>
                            <p class="looking-row-desc">22 300₽</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-green-fill">Подробнее</a>
                </div>
                <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <div class="looking-desc">
                        <div class="looking-row">
                            <p class="looking-row-title">Скорость</p>
                            <p class="looking-row-desc">ACJ 320 neo</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Дальность</p>
                            <p class="looking-row-desc">11000 км/
                                5939 nm</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Количество мест</p>
                            <p class="looking-row-desc">19</p>
                        </div>
                        <div class="looking-row">
                            <p class="looking-row-title">Цена в час</p>
                            <p class="looking-row-desc">22 300₽</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-green-fill">Подробнее</a>
                </div> -->
        </div>
        <!-- <div class="show-more">
                <button class="btn btn-more">Смотреть ещё</button>
            </div> -->
    </div>
</div>

<?php get_footer(); ?>