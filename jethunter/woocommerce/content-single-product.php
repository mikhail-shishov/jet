<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

    <section class="plane-sect">
        <div class="container">
            <div class='breadcrumbs'>
                <?php if (pll_current_language() == 'en') {
                    echo '<a href="' . home_url() . '" class="breadcrumbs-link">Home</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;';
                    echo '<a href="/en/our-fleet-en/" class="breadcrumbs-link">Our fleet</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;';
                } else {
                    echo '<a href="' . home_url() . '" class="breadcrumbs-link">Главная</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;';
                    echo '<a href="/ru/our-fleet/" class="breadcrumbs-link">Наш флот</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;';
                } ?>
                <span class="breadcrumbs-item"><?php the_title(); ?></span>
            </div>
            <div class="plane-name">
                <h1 class="h1">Купить самолет <?php the_title(); ?></h1>
            </div>


            <?php global $product;
            if (!isset($product) || !$product instanceof WC_Product) {
                global $product;
            }

            // Получаем поля
            $gallery_exterior = get_post_meta($product->get_id(), '_gallery_exterior', true);
            $gallery_interior = get_post_meta($product->get_id(), '_gallery_interior', true);
            $gallery_layout = get_post_meta($product->get_id(), '_gallery_layout', true);

            // Преобразуем строки в массивы
            $gallery_exterior = !empty($gallery_exterior) ? explode(', ', $gallery_exterior) : [];
            $gallery_interior = !empty($gallery_interior) ? explode(', ', $gallery_interior) : [];
            $gallery_layout = !empty($gallery_layout) ? explode(', ', $gallery_layout) : [];

            // Начинаем вывод галереи
            ?>
            <ul class="nav-tabs nav-tabs-plane">
                <li class="nav-tabs-item active"><a href="#tab-1" class="btn btn-tab-full">Экстерьер</a></li>
                <li class="nav-tabs-item"><a href="#tab-2" class="btn btn-tab-full">Интерьер</a></li>
                <li class="nav-tabs-item"><a href="#tab-3" class="btn btn-tab-full">План салона</a></li>

                <?php
                $file_url = get_post_meta(get_the_ID(), '_custom_file_url', true);

                if (!empty($file_url)) {
                    echo '<li class="nav-tabs-item"><a href="' . esc_url($file_url) . '" target="_blank" class="btn btn-tab-full">PDF брошюра</a></li>';
                }
                ?>

                <li class="nav-tabs-item"><a href="" class="btn">В сравнение</a></li>
                <!-- <div class="nav-tabs-right">
                    <a href="" class="btn">В сравнение</a>
                </div> -->
            </ul>
            <div class="plane-images">
                <div class="plane-gallery">
                    <div class="tab-content">
                        <?php if (!empty($gallery_exterior)) : ?>
                            <div id="tab-1" class="tab-pane active">
                                <div class="gallery-container">
                                    <div class="lightgallery">
                                        <?php
                                        if (!empty($gallery_exterior)) {
                                            $main_image_exterior_url = esc_url(trim($gallery_exterior[0]));
                                        }
                                        ?>
                                        <div class="plane-main-image">
                                            <?php if (!empty($main_image_exterior_url)) : ?>
                                                <img src="<?php echo $main_image_exterior_url; ?>" alt="" class="plane-gallery-main main-img">
                                            <?php endif; ?>
                                        </div>
                                        <div class="plane-thumb-wrap">
                                            <?php foreach ($gallery_exterior as $image_url) : ?>
                                                <a href="<?php echo esc_url(trim($image_url)); ?>">
                                                    <img src="<?php echo esc_url(trim($image_url)); ?>" alt="" class="plane-thumb-img">
                                                </a>
                                            <?php endforeach; ?>

                                            <button class="show-more-btn">Ещё</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($gallery_interior)) : ?>
                            <div id="tab-2" class="tab-pane">
                                <div class="gallery-container">
                                    <div class="lightgallery">
                                        <?php
                                        if (!empty($gallery_interior)) {
                                            $main_image_interior_url = esc_url(trim($gallery_interior[0]));
                                        }
                                        ?>
                                        <div class="plane-main-image">
                                            <?php if (!empty($main_image_interior_url)) : ?>
                                                <img src="<?php echo $main_image_interior_url; ?>" alt="" class="plane-gallery-main main-img">
                                            <?php endif; ?>
                                        </div>
                                        <div class="plane-thumb-wrap">
                                            <?php foreach ($gallery_interior as $image_url) : ?>
                                                <a href="<?php echo esc_url(trim($image_url)); ?>">
                                                    <img src="<?php echo esc_url(trim($image_url)); ?>" alt="" class="plane-thumb-img">
                                                </a>
                                            <?php endforeach; ?>

                                            <button class="show-more-btn">Ещё</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($gallery_layout)) : ?>
                            <div id="tab-3" class="tab-pane">
                                <div class="gallery-container">
                                    <div class="lightgallery">
                                        <?php
                                        if (!empty($gallery_layout)) {
                                            $main_image_layout_url = esc_url(trim($gallery_layout[0]));
                                        }
                                        ?>
                                        <div class="plane-main-image">
                                            <?php if (!empty($main_image_layout_url)) : ?>
                                                <img src="<?php echo $main_image_layout_url; ?>" alt="" class="plane-gallery-main main-img">
                                            <?php endif; ?>
                                        </div>
                                        <div class="plane-thumb-wrap">
                                            <?php foreach ($gallery_layout as $image_url) : ?>
                                                <a href="<?php echo esc_url(trim($image_url)); ?>">
                                                    <img src="<?php echo esc_url(trim($image_url)); ?>" alt="" class="plane-thumb-img">
                                                </a>
                                            <?php endforeach; ?>

                                            <button class="show-more-btn">Ещё</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- <div class="plane-scheme">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/item/ch-350/ch-350-scheme.png" alt="">
                </div> -->
                <div class="plane-main-info">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/makes/challenger.png" class="plane-logo" alt="Challenger">
                    <div class="plane-main-info-wrap">
                        <div class="plane-main-info-item">
                            <p class="plane-main-info-badge">Цена аренды</p>
                            <p class="plane-main-info-price">$ 10 000</p>
                            <a href="" class="btn btn-full-width">Арендовать</a>
                        </div>
                        <div class="plane-main-info-item">
                            <p class="plane-main-info-badge">Цена покупки</p>
                            <p class="plane-main-info-price">$ 1 000 000</p>
                            <a href="" class="btn btn-full-width">Купить</a>
                        </div>
                    </div>
                    <a href="#call" data-modal="#call" class="btn btn-green-fill js-modal btn-full-width">Заказать звонок</a>
                </div>
            </div>

            <div class="plane-specs">
                <?php
                $_custom_field_seats = get_post_meta(get_the_ID(), '_custom_field_seats', true);
                $_custom_field_speed = get_post_meta(get_the_ID(), '_custom_field_speed', true);
                $_custom_field_range = get_post_meta(get_the_ID(), '_custom_field_range', true);
                $_custom_field_bag_volume = get_post_meta(get_the_ID(), '_custom_field_bag_volume', true);
                $_custom_field_suitcases = get_post_meta(get_the_ID(), '_custom_field_suitcases', true);
                $_custom_field_rent_price = get_post_meta(get_the_ID(), '_custom_field_rent_price', true);

                if (!empty($_custom_field_seats) && trim($_custom_field_seats) !== '') : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_custom_field_seats', true); ?></div>
                        <div class="plane-specs-desc">Мест</div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($_custom_field_speed) && trim($_custom_field_speed) !== '') : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_custom_field_speed', true); ?></div>
                        <div class="plane-specs-desc">Скорость км/ч (m/h)</div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($_custom_field_range) && trim($_custom_field_range) !== '') : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_custom_field_range', true); ?></div>
                        <div class="plane-specs-desc">Дальность км (nm)</div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($_custom_field_bag_volume) && trim($_custom_field_bag_volume) !== '') : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_custom_field_bag_volume', true); ?></div>
                        <div class="plane-specs-desc">Объем багажника в м<sup>3</sup></div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($_custom_field_rent_price) && trim($_custom_field_rent_price) !== '') : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_custom_field_rent_price', true); ?></div>
                        <div class="plane-specs-desc">Цена аренды в $</div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($_custom_field_suitcases) && trim($_custom_field_suitcases) !== '') : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_custom_field_suitcases', true); ?></div>
                        <div class="plane-specs-desc">Чемоданов</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="tech-sect">
        <div class="container">
            <h2 class="h2 center">Технические характеристики</h2>
            <div class="tech-table">
                <div class="tech-table-col">
                    <?php
                    $_cruising_speed = get_post_meta(get_the_ID(), '_cruising_speed', true);
                    $_range = get_post_meta(get_the_ID(), '_range', true);
                    $_flight_time = get_post_meta(get_the_ID(), '_flight_time', true);
                    $_max_altitude = get_post_meta(get_the_ID(), '_max_altitude', true);
                    $_max_takeoff_weight = get_post_meta(get_the_ID(), '_max_takeoff_weight', true);
                    $_landing_weight = get_post_meta(get_the_ID(), '_landing_weight', true);
                    $_payload = get_post_meta(get_the_ID(), '_payload', true);

                    $_takeoff_distance = get_post_meta(get_the_ID(), '_takeoff_distance', true);
                    $_landing_distance = get_post_meta(get_the_ID(), '_landing_distance', true);
                    $_engine_count = get_post_meta(get_the_ID(), '_engine_count', true);
                    $_engine = get_post_meta(get_the_ID(), '_engine', true);
                    $_apu = get_post_meta(get_the_ID(), '_apu', true);
                    $_avionics = get_post_meta(get_the_ID(), '_avionics', true);

                    if (!empty($_cruising_speed) && trim($_cruising_speed) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Крейсерская скорость</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_cruising_speed', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_range) && trim($_range) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Дальность</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_range', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_flight_time) && trim($_flight_time) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Время в полете, скорость</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_flight_time', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_max_altitude) && trim($_max_altitude) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Максимальная высота полета</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_max_altitude', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_max_takeoff_weight) && trim($_max_takeoff_weight) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Максимальный взлетный вес</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_max_takeoff_weight', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_landing_weight) && trim($_landing_weight) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Посадочный вес</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_landing_weight', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_payload) && trim($_payload) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Грузоподъемность</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_payload', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_takeoff_distance) && trim($_takeoff_distance) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Взлетная дистанция</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_takeoff_distance', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_landing_distance) && trim($_landing_distance) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Посадочная дистанция</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_landing_distance', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_engine_count) && trim($_engine_count) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Количество двигателей</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_engine_count', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_engine) && trim($_engine) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Двигатель</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_engine', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_apu) && trim($_apu) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Вспомогательная силовая установка</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_apu', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_avionics) && trim($_avionics) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Авионика</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_avionics', true); ?></div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="tech-table-col">
                    <h3 class="h3">Салон</h3>
                    <?php
                    $_width = get_post_meta(get_the_ID(), '_width', true);
                    $_cabin_length = get_post_meta(get_the_ID(), '_cabin_length', true);
                    $_cabin_height = get_post_meta(get_the_ID(), '_cabin_height', true);
                    $_cabin_volume = get_post_meta(get_the_ID(), '_cabin_volume', true);
                    $_luggage_volume = get_post_meta(get_the_ID(), '_luggage_volume', true);
                    $_plane_length = get_post_meta(get_the_ID(), '_plane_length', true);
                    $_plane_height = get_post_meta(get_the_ID(), '_plane_height', true);

                    if (!empty($_width) && trim($_width) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Ширина</div>
                            <div class="tech-table-desc"><?php echo esc_html($_width); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_cabin_length) && trim($_cabin_length) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Длина салона</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_cabin_length', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_cabin_height) && trim($_cabin_height) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Высота салона</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_cabin_height', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_cabin_volume) && trim($_cabin_volume) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Объем салона</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_cabin_volume', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_luggage_volume) && trim($_luggage_volume) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Объём багажного отделения</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_luggage_volume', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_plane_length) && trim($_plane_length) !== '') : ?>
                        <h3 class="h3">Размер самолёта</h3>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Длина самолета</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_plane_length', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_plane_height) && trim($_plane_height) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Высота самолета</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_plane_height', true); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_cabin_height) && trim($_cabin_height) !== '') : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Высота салона</div>
                            <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_cabin_height', true); ?></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="tech-sect" style="display: none;">
        <div class="container">
            <h2 class="h2 center">Характеристики самолёта <?php the_title(); ?></h2>

        </div>
    </section>

    <section class="step-sect">
        <div class="container">
            <h2 class="h2 center">Особенности самолета</h2>
            <div class="step-grid">
                <?php
                global $product;
                $features = get_post_meta($product->get_id(), '_aircraft_features', true);

                if (!empty($features) && is_array($features)) {
                    foreach ($features as $index => $feature) {
                        $step_number = $index + 1;
                        $title = esc_html($feature['title'] ?? '');
                        $description = esc_html($feature['description'] ?? '');

                        if ($title || $description) {
                            echo '<div class="step-item">';
                            echo '<span class="step-number">' . $step_number . '</span>';
                            if ($title) {
                                echo '<h3 class="h3">' . $title . '</h3>';
                            }
                            if ($description) {
                                echo '<p>' . $description . '</p>';
                            }
                            echo '</div>';
                        }
                    }
                }
                ?>

            </div>
            <div class="btn-container">
                <button href="/our-fleet" class="btn btn-green-fill js-modal" data-modal="#call">Узнать стоимость</button>
                <button type="button" class="btn js-modal" data-modal="#call">Связаться с нами</button>
            </div>
        </div>
    </section>

    <section class="video-sect">
        <div class="container">
            <div class="video-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/planes/item/ch-350/image2264.jpg);">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/play-text.png" class="video-overlay" id="video-overlay">
                <iframe class="video-player" src="https://www.youtube.com/embed/<?php echo get_post_meta(get_the_ID(), '_custom_yt_id', true); ?>?controls=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="opacity:0;" id="video-player"></iframe>
            </div>
        </div>
    </section>

    <section class="distance-map-sect">
        <div class="container">
            <h2 class="h2 center">Карта дальности</h2>
            <div class="distance-map-wrap">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/distance-map.png" class="distance-map" loading="lazy" alt="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/distance-1.svg" class="distance-shown" loading="lazy" alt="">
            </div>
            <?php
            $flight_range = (int) get_post_meta(get_the_ID(), '_flight_range', true);
            $max_distance = 11000;
            $circle_percent = ($flight_range / $max_distance) * 100;

            echo '<style>
                .woocommerce .distance-shown {
                    width: ' . $circle_percent . '%;
                }
            </style>';
            ?>
        </div>
    </section>

    <section class="directions-sect">
        <div class="container">
            <h2 class="h2 center">Популярные направления</h2>
            <?php $routes = get_post_meta($product->get_id(), '_popular_routes', true);
            if (is_array($routes) && !empty($routes)) {
                echo '<div class="directions-grid">';
                foreach ($routes as $route) {
            ?>
                    <div class="directions-item">
                        <img src="https://jethunter.aero/wp-content/themes/jethunter/img/illustrations/direction.png" loading="lazy" alt="">
                        <p class="directions-name"><?php echo esc_html($route['from_city'] . ' – ' . $route['to_city']); ?></p>
                        <ul class="list">
                            <li>Дальность полёта (км) – <?php echo esc_html($route['distance']); ?></li>
                            <li>Время полёта – <?php echo esc_html($route['time']); ?></li>
                            <li>Стоимость – <?php echo esc_html($route['cost']); ?></li>
                        </ul>
                    </div>
            <?php
                }
                echo '</div>';
            } ?>

            <div class="btn-container">
                <a href="" class="btn btn-green-fill">Узнать стоимость</a>
                <a href="" class="btn">Получить звонок</a>
            </div>
        </div>
    </section>

    <section class="commerce-sect">
        <div class="container">
            <h2 class="h2 center">Коммерческие данные</h2>
            <div class="plane-specs">
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_start_year', true); ?></div>
                    <div class="plane-specs-desc">Год начала прозводства</div>
                </div>
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_end_year', true); ?></div>
                    <div class="plane-specs-desc">Год окончания производства</div>
                </div>
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_country_of_origin', true); ?></div>
                    <div class="plane-specs-desc">Страна производства</div>
                </div>
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_new_plane_cost', true); ?></div>
                    <div class="plane-specs-desc">Стоимость нового самолета ($)</div>
                </div>
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_used_plane_cost', true); ?></div>
                    <div class="plane-specs-desc">Стоимость самолета с налетом</div>
                </div>
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_hour_cost', true); ?></div>
                    <div class="plane-specs-desc">Себестоимость летного часа</div>
                </div>
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_overhaul_interval', true); ?></div>
                    <div class="plane-specs-desc">Интервал капитального ремонта (часов)</div>
                </div>
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_a_check_interval', true); ?></div>
                    <div class="plane-specs-desc">Интервал A-Check</div>
                </div>
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_b_check_interval', true); ?></div>
                    <div class="plane-specs-desc">Интервал B-Check</div>
                </div>
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_c_check_interval', true); ?></div>
                    <div class="plane-specs-desc">Интервал C-Check</div>
                </div>
                <div class="plane-specs-item">
                    <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_d_check_interval', true); ?></div>
                    <div class="plane-specs-desc">Интервал D-Check</div>
                </div>
            </div>
        </div>
    </section>

    <section class="exp-sect">
        <div class="container">
            <h2 class="h2 center">Эксплуатационные расходы самолета</h2>
            <p class="center">Приблизительные расходы, рассчитанные для указанного ниже налета</p>
            <?php
            // Get the product meta for variable and fixed costs.
            $variable_costs = get_post_meta(get_the_ID(), '_variable_costs', true);
            $fixed_costs = get_post_meta(get_the_ID(), '_fixed_costs', true);

            // Check if either table has data.
            if (!empty($variable_costs) || !empty($fixed_costs)) : ?>
                <div class="table-container">
                    <?php if (!empty($variable_costs)) : ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="table-heading">Переменные затраты (USD)/час</th>
                                    <th class="table-heading center">200<br>часов</th>
                                    <th class="table-heading center">400<br>часов</th>
                                    <th class="table-heading center">600<br>часов</th>
                                    <th class="table-heading center">800<br>часов</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($variable_costs as $cost) : ?>
                                    <tr>
                                        <td><?php echo esc_html($cost['name']); ?></td>
                                        <td><?php echo esc_html($cost['200']); ?></td>
                                        <td><?php echo esc_html($cost['400']); ?></td>
                                        <td><?php echo esc_html($cost['600']); ?></td>
                                        <td><?php echo esc_html($cost['800']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>

                    <?php if (!empty($fixed_costs)) : ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="table-heading">Постоянные затраты</th>
                                    <th class="table-heading center">200<br>часов</th>
                                    <th class="table-heading center">400<br>часов</th>
                                    <th class="table-heading center">600<br>часов</th>
                                    <th class="table-heading center">800<br>часов</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($fixed_costs as $cost) : ?>
                                    <tr>
                                        <td><?php echo esc_html($cost['name']); ?></td>
                                        <td><?php echo esc_html($cost['200']); ?></td>
                                        <td><?php echo esc_html($cost['400']); ?></td>
                                        <td><?php echo esc_html($cost['600']); ?></td>
                                        <td><?php echo esc_html($cost['800']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="table-container">
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-heading">Переменные затраты (USD)/час</th>
                            <th class="table-heading center">200<br>часов</th>
                            <th class="table-heading center">400<br>часов</th>
                            <th class="table-heading center">600<br>часов</th>
                            <th class="table-heading center">800<br>часов</th>
                        </tr>
                        <tr>
                            <td class="table-item">Программы двигатель</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Программы планер</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Программы ВСУ/Пропеллер</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Техническое обслуживание</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Топливо (при цене $800/тонна)</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Взлет, посадка, сборы</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Навигация</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Командировочные экипажа</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Другие затраты</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item"><b>Сумма переменные</b></td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <th class="table-heading">Постоянные затраты</th>
                            <th class="table-heading"> </th>
                            <th class="table-heading"> </th>
                            <th class="table-heading"> </th>
                            <th class="table-heading"> </th>
                        </tr>
                        <tr>
                            <td class="table-item">Зарплата экипажа</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Зарплата инженера</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Обучение экипажа</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">ПО и навигация</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Страховка</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Стоянка</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Доход управляющей компании</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">CAMP</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Технический менеджмент</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item">Разные</td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item"><b>Сумма постоянные</b></td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item"><b>ИТОГО расходы</b></td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                        <tr>
                            <td class="table-item"><b>Итого цена летного часа</b></td>
                            <td class="table-item">1 000</td>
                            <td class="table-item">3 000</td>
                            <td class="table-item">5 000</td>
                            <td class="table-item">1 000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="btn-container">
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Узнать больше</button>
                <button type="button" class="btn js-modal" data-modal="#call">Получить звонок</button>
            </div>
        </div>
    </section>

    <section class="about-sect">
        <div class="container">
            <h2 class="h2 center">Как выбрать самолет в аренду?</h2>
            <h3 class="h3 center">Выбор самолета для аренды – это важный шаг, от которого зависит комфорт и успешность вашего путешествия. Вот ключевые факторы, которые стоит учесть:</h3>

            <div class="about-text">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/comfort.svg" width="460" height="460" class="about-img" loading="lazy" alt="">

                <h3 class="h3">Цель поездки:</h3>
                <ul class="list">
                    <li>Деловая поездка: для деловых встреч подойдет небольшой, но комфортабельный самолет, например, Cessna Citation CJ3+ или Embraer Phenom 300.</li>
                    <li>Отдых с семьей/друзьями: если вы путешествуете большой компанией, выбирайте более вместительные модели, например, Bombardier Challenger 605 или Gulfstream G550.</li>
                    <li>Трансконтинентальный перелет: для длительных перелетов необходим самолет с большим запасом хода, например, Bombardier Global 6000 или Gulfstream G650ER.</li>
                </ul>

                <h3 class="h3">Количество пассажиров:</h3>
                <ul class="list">
                    <li>Определите точное число пассажиров, чтобы выбрать самолет с достаточным количеством мест и уровнем комфорта.</li>
                </ul>

                <div class="about-row">
                    <div class="about-col">
                        <h3 class="h3">Расстояние и маршрут:</h3>
                        <ul class="list">
                            <li>Учитывайте дальность полета выбранной модели и возможность посадки в аэропорту назначения. Изучите особенности маршрута: для горной местности могут потребоваться самолеты с определенными техническими характеристиками.</li>
                        </ul>
                    </div>
                    <div class="about-col">
                        <h3 class="h3">Бюджет:</h3>
                        <ul class="list">
                            <li>Определите бюджет и сравните стоимость аренды разных моделей.</li>
                            <li>Учитывайте дополнительные расходы: посадка, обслуживание в аэропорту, питание на борту.</li>
                        </ul>
                    </div>
                    <div class="about-col">
                        <h3 class="h3">Дополнительные требования:</h3>
                        <ul class="list">
                            <li>Наличие спальни, кухни, душевой кабины, интернета, развлекательной системы.</li>
                            <li>Необходимость перевозки багажа, спортивного инвентаря, домашних животных.</li>
                        </ul>
                    </div>
                </div>

            </div>
            <h3 class="h3 center">Правильно выбранный самолет – это гарантия комфортного, безопасного и незабываемого путешествия!</h3>
        </div>
    </section>

    <section class="looking-sect">
        <div class="container">
            <h2 class="h2 center">Список самолётов Challenger 350</h2>
            <div class="looking-grid">
                <div class="looking-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                    <h3 class="h3">Challenger 350</h3>
                    <p class="looking-serial">sn20670</p>
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
                    <p class="looking-serial">sn20670</p>
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
                    <p class="looking-serial">sn20670</p>
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
                    <p class="looking-serial">sn20670</p>
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
                    <p class="looking-serial">sn20670</p>
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
            </div>
        </div>
    </section>

    <section class="looking-sect">
        <div class="container">
            <h2 class="h2 center">Самолеты такой же категории</h2>
            <div class="looking-grid">
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
            </div>
        </div>
    </section>
</div>

<?php do_action('woocommerce_after_single_product'); ?>