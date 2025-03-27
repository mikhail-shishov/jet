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

<?php
$product_id = get_the_ID();

$aircraft_type = carbon_get_post_meta($product_id, 'aircraft_type');
$aircraft_model = carbon_get_post_meta($product_id, 'aircraft_model');
$aircraft_cat = carbon_get_post_meta($product_id, 'aircraft_cat');
$aircraft_make = carbon_get_post_meta($product_id, 'aircraft_make');
$aircraft_logo = carbon_get_post_meta($product_id, 'aircraft_logo');
$purchase_price = carbon_get_post_meta($product_id, 'purchase_price');
$rental_price = carbon_get_post_meta($product_id, 'rental_price');
$rental_period = carbon_get_post_meta($product_id, 'rental_period');
$cruise_speed_kmh = carbon_get_post_meta($product_id, 'cruise_speed_kmh');
$cruise_speed_mph = carbon_get_post_meta($product_id, 'cruise_speed_mph');
$range_km = carbon_get_post_meta($product_id, 'range_km');
$range_miles = carbon_get_post_meta($product_id, 'range_miles');
$max_takeoff_height_m = carbon_get_post_meta($product_id, 'max_takeoff_height_m');
$max_takeoff_height_ft = carbon_get_post_meta($product_id, 'max_takeoff_height_ft');
$max_takeoff_weight_kg = carbon_get_post_meta($product_id, 'max_takeoff_weight_kg');
$max_takeoff_weight_lbs = carbon_get_post_meta($product_id, 'max_takeoff_weight_lbs');
$max_landing_weight_kg = carbon_get_post_meta($product_id, 'max_landing_weight_kg');
$max_landing_weight_lbs = carbon_get_post_meta($product_id, 'max_landing_weight_lbs');
$max_landing_height_kg = carbon_get_post_meta($product_id, 'max_landing_height_kg');
$max_landing_height_lbs = carbon_get_post_meta($product_id, 'max_landing_height_lbs');
$takeoff_distance_m = carbon_get_post_meta($product_id, 'takeoff_distance_m');
$takeoff_distance_ft = carbon_get_post_meta($product_id, 'takeoff_distance_ft');
$aircraft_engine_count = carbon_get_post_meta($product_id, 'aircraft_engine_count');
$aircraft_engine = carbon_get_post_meta($product_id, 'aircraft_engine');
$vsu = carbon_get_post_meta($product_id, 'vsu');
$avionics = carbon_get_post_meta($product_id, 'avionics');
$propeller = carbon_get_post_meta($product_id, 'propeller');
$aircraft_seats = carbon_get_post_meta($product_id, 'aircraft_seats');
$cabin_width_m = carbon_get_post_meta($product_id, 'cabin_width_m');
$cabin_width_ft = carbon_get_post_meta($product_id, 'cabin_width_ft');
$cabin_height_m = carbon_get_post_meta($product_id, 'cabin_height_m');
$cabin_height_ft = carbon_get_post_meta($product_id, 'cabin_height_ft');
$cabin_length_m = carbon_get_post_meta($product_id, 'cabin_length_m');
$cabin_length_ft = carbon_get_post_meta($product_id, 'cabin_length_ft');
$cabin_volume_m = carbon_get_post_meta($product_id, 'cabin_volume_m');
$cabin_volume_ft = carbon_get_post_meta($product_id, 'cabin_volume_ft');
$luggage_volume_m = carbon_get_post_meta($product_id, 'luggage_volume_m');
$luggage_volume_ft = carbon_get_post_meta($product_id, 'luggage_volume_ft');
$luggage_number = carbon_get_post_meta($product_id, 'luggage_number');
$aircraft_length_m = carbon_get_post_meta($product_id, 'aircraft_length_m');
$aircraft_length_ft = carbon_get_post_meta($product_id, 'aircraft_length_ft');
$aircraft_height_m = carbon_get_post_meta($product_id, 'aircraft_height_m');
$aircraft_height_ft = carbon_get_post_meta($product_id, 'aircraft_height_ft');
$aircraft_wing_length_m = carbon_get_post_meta($product_id, 'aircraft_wing_length_m');
$aircraft_wing_length_ft = carbon_get_post_meta($product_id, 'aircraft_wing_length_ft');
$aircraft_features_heading_1 = carbon_get_post_meta($product_id, 'aircraft_features_heading_1');
$aircraft_features_desc_1 = carbon_get_post_meta($product_id, 'aircraft_features_desc_1');
$aircraft_features_heading_2 = carbon_get_post_meta($product_id, 'aircraft_features_heading_2');
$aircraft_features_desc_2 = carbon_get_post_meta($product_id, 'aircraft_features_desc_2');
$aircraft_features_heading_3 = carbon_get_post_meta($product_id, 'aircraft_features_heading_3');
$aircraft_features_desc_3 = carbon_get_post_meta($product_id, 'aircraft_features_desc_3');
$aircraft_features_heading_4 = carbon_get_post_meta($product_id, 'aircraft_features_heading_4');
$aircraft_features_desc_4 = carbon_get_post_meta($product_id, 'aircraft_features_desc_4');
$aircraft_features_heading_5 = carbon_get_post_meta($product_id, 'aircraft_features_heading_5');
$aircraft_features_desc_5 = carbon_get_post_meta($product_id, 'aircraft_features_desc_5');
$aircraft_features_heading_6 = carbon_get_post_meta($product_id, 'aircraft_features_heading_6');
$aircraft_features_desc_6 = carbon_get_post_meta($product_id, 'aircraft_features_desc_6');
$variable_cost_hour = carbon_get_post_meta($product_id, 'variable_cost_hour');
$programs_engine = carbon_get_post_meta($product_id, 'programs_engine');
$programs_planer = carbon_get_post_meta($product_id, 'programs_planer');
$programs_vsu_propeller = carbon_get_post_meta($product_id, 'programs_vsu_propeller');
$fuel_cost = carbon_get_post_meta($product_id, 'fuel_cost');
$aircraft_navigation = carbon_get_post_meta($product_id, 'aircraft_navigation');
$crew_payment = carbon_get_post_meta($product_id, 'crew_payment');
$other_costs = carbon_get_post_meta($product_id, 'other_costs');
$variable_cost_sum = carbon_get_post_meta($product_id, 'variable_cost_sum');
$crew_salary = carbon_get_post_meta($product_id, 'crew_salary');
$engineer_salary = carbon_get_post_meta($product_id, 'engineer_salary');
$crew_education = carbon_get_post_meta($product_id, 'crew_education');
$sw_navigation = carbon_get_post_meta($product_id, 'sw_navigation');
$aircraft_insurance = carbon_get_post_meta($product_id, 'aircraft_insurance');
$aircraft_parking = carbon_get_post_meta($product_id, 'aircraft_parking');
$company_income = carbon_get_post_meta($product_id, 'company_income');
$samp = carbon_get_post_meta($product_id, 'samp');
$technical_management = carbon_get_post_meta($product_id, 'technical_management');
$other_different_costs = carbon_get_post_meta($product_id, 'other_different_costs');
$constant_cost_sum = carbon_get_post_meta($product_id, 'constant_cost_sum');
$total_cost = carbon_get_post_meta($product_id, 'total_cost');
$total_cost_hour = carbon_get_post_meta($product_id, 'total_cost_hour');
$aircraft_category = carbon_get_post_meta($product_id, 'aircraft_category');
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

                <li>
                    <!-- <a href="#" class="btn" data-id="<?php echo get_the_ID(); ?>">В сравнение</a> -->
                    <button onclick="addToComparison(<?php the_ID(); ?>)" class="btn">Добавить в сравнение</button>
                </li>

                <a href="/plane-compare" class="" style="display:none;">Переход к сравнению</a>
                <script>
                    function addToComparison(planeID) {
                        fetch("<?php echo admin_url('admin-ajax.php?action=add_to_comparison'); ?>", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/x-www-form-urlencoded"
                                },
                                body: `plane_id=${planeID}`
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log("Response:", data);
                                if (data.success) {
                                    alert("Добавлено в сравнение!");
                                    // document.querySelector(".")
                                } else {
                                    alert("Ошибка: " + data.message);
                                }
                            })
                            .catch(error => console.error("Fetch error:", error));
                    }
                </script>
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
                    <?php if (!empty($aircraft_logo)) :
                        $aircraft_logo_url = wp_get_attachment_url($aircraft_logo);
                        if ($aircraft_logo_url) : ?>
                            <img src="<?php echo esc_url($aircraft_logo_url); ?>" class="plane-logo" alt="Logo">
                    <?php endif;
                    endif;
                    ?>
                    <div class="plane-main-info-wrap">
                        <?php
                        if ($aircraft_category === 'rent') {
                            if (!empty($rental_price)) {
                                echo '
                                    <div class="plane-main-info-item">
                                        <p class="plane-main-info-badge">Цена аренды</p>
                                        <p class="plane-main-info-price">$ ' . esc_html($rental_price) . '</p>
                                        ';
                                if (!empty($rental_period)) {
                                    echo '<p class="plane-main-info-price">$ ' . esc_html($rental_period) . '</p>';
                                }
                                echo '<button type="button" class="btn btn-full-width js-modal" data-modal="#call">Арендовать</button>
                                    </div>
                                ';
                            }
                        }
                        ?>
                        <?php
                        if ($aircraft_category === 'buy') {
                            if (!empty($purchase_price)) {
                                echo '
                                    <div class="plane-main-info-item">
                                        <p class="plane-main-info-badge">Цена покупки</p>
                                        <p class="plane-main-info-price">$  ' . esc_html($purchase_price) . '</p>
                                        <button type="button" class="btn btn-full-width js-modal" data-modal="#call">Купить</button>
                                    </div>
                                ';
                            }
                        }
                        ?>
                    </div>
                    <a href="#call" data-modal="#call" class="btn btn-green-fill js-modal btn-full-width">Заказать звонок</a>
                </div>
            </div>

            <div class="plane-specs">
                <?php
                // $_custom_field_seats = get_post_meta(get_the_ID(), '_custom_field_seats', true);
                // $_custom_field_speed = get_post_meta(get_the_ID(), '_custom_field_speed', true);
                // $_custom_field_range = get_post_meta(get_the_ID(), '_custom_field_range', true);
                // $_custom_field_bag_volume = get_post_meta(get_the_ID(), '_custom_field_bag_volume', true);
                // $_custom_field_suitcases = get_post_meta(get_the_ID(), '_custom_field_suitcases', true);
                // $_custom_field_rent_price = get_post_meta(get_the_ID(), '_custom_field_rent_price', true);
                ?>

                <?php if (!empty($aircraft_seats)) : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number">
                            <?php echo esc_html($aircraft_seats); ?>
                        </div>
                        <div class="plane-specs-desc">Мест</div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($cruise_speed_kmh)) : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number">
                            <?php echo esc_html($cruise_speed_kmh); ?>
                        </div>
                        <div class="plane-specs-desc">Скорость км/ч (m/h)</div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($range_km)) : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number">
                            <?php echo esc_html($range_km); ?>
                        </div>
                        <div class="plane-specs-desc">Дальность км (nm)</div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($luggage_volume_m)) : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number">
                            <?php echo esc_html($luggage_volume_m); ?>
                        </div>
                        <div class="plane-specs-desc">Объем багажника в м<sup>3</sup></div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($rental_price)) : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number">
                            <?php echo esc_html($rental_price); ?>
                        </div>
                        <div class="plane-specs-desc">Цена аренды в $</div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($luggage_number)) : ?>
                    <div class="plane-specs-item">
                        <div class="plane-specs-number">
                            <?php echo esc_html($luggage_number); ?>
                        </div>
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
                    // $_cruising_speed = get_post_meta(get_the_ID(), '_cruising_speed', true);
                    // $_range = get_post_meta(get_the_ID(), '_range', true);
                    // $_flight_time = get_post_meta(get_the_ID(), '_flight_time', true);
                    // $_max_altitude = get_post_meta(get_the_ID(), '_max_altitude', true);
                    // $_max_takeoff_weight = get_post_meta(get_the_ID(), '_max_takeoff_weight', true);
                    // $_landing_weight = get_post_meta(get_the_ID(), '_landing_weight', true);
                    // $_payload = get_post_meta(get_the_ID(), '_payload', true);

                    // $_takeoff_distance = get_post_meta(get_the_ID(), '_takeoff_distance', true);
                    // $_landing_distance = get_post_meta(get_the_ID(), '_landing_distance', true);
                    // $_engine_count = get_post_meta(get_the_ID(), '_engine_count', true);
                    // $_engine = get_post_meta(get_the_ID(), '_engine', true);
                    // $_apu = get_post_meta(get_the_ID(), '_apu', true);
                    // $_avionics = get_post_meta(get_the_ID(), '_avionics', true);
                    ?>

                    <?php if (!empty($cruise_speed_kmh)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Крейсерская скорость</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($cruise_speed_kmh); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($range_km)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Дальность</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($range_km); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($range_time)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Время в полете, скорость</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($range_time); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($max_takeoff_height_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Максимальная высота полета</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($max_takeoff_height_m); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($max_takeoff_weight_kg)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Максимальный взлетный вес</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($max_takeoff_weight_kg); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($max_landing_weight_kg)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Посадочный вес</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($max_landing_weight_kg); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($max_landing_height_kg)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Грузоподъемность</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($max_landing_height_kg); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($takeoff_distance_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Взлетная дистанция</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($takeoff_distance_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($landing_distance_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Посадочная дистанция</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($landing_distance_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_engine_count)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Количество двигателей</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($aircraft_engine_count); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_engine)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Двигатель</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($aircraft_engine); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($vsu)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Вспомогательная силовая установка</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($vsu); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($avionics)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Авионика</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($avionics); ?></div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="tech-table-col">
                    <h3 class="h3">Салон</h3>
                    <?php
                    // $_width = get_post_meta(get_the_ID(), '_width', true);
                    // $_cabin_length = get_post_meta(get_the_ID(), '_cabin_length', true);
                    // $_cabin_height = get_post_meta(get_the_ID(), '_cabin_height', true);
                    // $_cabin_volume = get_post_meta(get_the_ID(), '_cabin_volume', true);
                    // $_luggage_volume = get_post_meta(get_the_ID(), '_luggage_volume', true);
                    // $_plane_length = get_post_meta(get_the_ID(), '_plane_length', true);
                    // $_plane_height = get_post_meta(get_the_ID(), '_plane_height', true);
                    ?>

                    <?php if (!empty($cabin_width_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Ширина</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($cabin_width_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($cabin_length_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Длина салона</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($cabin_length_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($cabin_height_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Высота салона</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($cabin_height_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($cabin_volume_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Объем салона</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($cabin_volume_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($luggage_volume_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Объём багажного отделения</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($luggage_volume_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <h3 class="h3">Размер самолёта</h3>
                    <?php if (!empty($aircraft_length_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Длина самолета</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($aircraft_length_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_height_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Высота самолета</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($aircraft_height_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_wing_length_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title">Размах крыла</div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($aircraft_wing_length_m); ?></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="regular-sect">
        <div class="container">
            <div class="quiz-wrap">
                <div class="quiz-left">
                    <div class="quiz-left-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/quiz-img.jpg" alt="">
                    </div>
                </div>
                <div class="quiz-right">
                    <?php echo do_shortcode('[contact-form-7 id="a1ae65c" title="Квиз"]'); ?>
                </div>
            </div>
        </div>
    </section> -->

    <?php include_once get_stylesheet_directory() . '/components/ru/quiz.php'; ?>

    <!-- <section class="step-sect">
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
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Узнать стоимость</button>
                <button type="button" class="btn js-modal" data-modal="#call">Связаться с нами</button>
            </div>
        </div>
    </section> -->
    <section class="step-sect">
        <div class="container">
            <h2 class="h2 center"><?php _e('Особенности самолёта', 'textdomain'); ?></h2>
            <div class="step-grid">
                <?php
                $lang_suffix = (pll_current_language() === 'en') ? '_en' : '';

                for ($i = 1; $i <= 6; $i++) {
                    $title = carbon_get_post_meta(get_the_ID(), "aircraft_features_heading_{$i}{$lang_suffix}");
                    $desc = carbon_get_post_meta(get_the_ID(), "aircraft_features_desc_{$i}{$lang_suffix}");

                    if (!empty($title) || !empty($desc)) {
                        echo '<div class="step-item">';
                        echo '<span class="step-number">' . $i . '</span>';
                        if (!empty($title)) {
                            echo '<h3 class="h3">' . esc_html($title) . '</h3>';
                        }
                        if (!empty($desc)) {
                            echo '<p>' . esc_html($desc) . '</p>';
                        }
                        echo '</div>';
                    }
                }
                ?>
            </div>
            <div class="btn-container">
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call"><?php _e('Узнать стоимость', 'textdomain'); ?></button>
                <button type="button" class="btn js-modal" data-modal="#call"><?php _e('Связаться с нами', 'textdomain'); ?></button>
            </div>
        </div>
    </section>

    <!-- <section class="commerce-sect">
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
    </section> -->
    <section class="commerce-sect">
        <div class="container">
            <h2 class="h2 center">Коммерческие данные</h2>
            <div class="plane-specs">
                <?php
                $fields = [
                    'production_start' => 'Год начала производства',
                    'production_end' => 'Год окончания производства',
                    'production_country' => 'Страна производства',
                    'aircraft_new_cost' => 'Стоимость нового самолета ($)',
                    'aircraft_used_cost' => 'Стоимость самолета с налетом ($)',
                    'aircraft_hour_cost' => 'Себестоимость летного часа ($)',
                    'interval_total_repair' => 'Интервал капитального ремонта (часов)',
                    'interval_a_check' => 'Интервал A-Check',
                    'interval_b_check' => 'Интервал B-Check',
                    'interval_c_check' => 'Интервал C-Check',
                    'interval_d_check' => 'Интервал D-Check'
                ];

                foreach ($fields as $meta_key => $label) :
                    $value = carbon_get_post_meta(get_the_ID(), $meta_key);
                    if (!empty($value)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number"><?php echo esc_html($value); ?></div>
                            <div class="plane-specs-desc"><?php echo esc_html($label); ?></div>
                        </div>
                <?php endif;
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <section class="exp-sect">
        <div class="container">
            <h2 class="h2 center">Эксплуатационные расходы самолета</h2>
            <p class="center">Приблизительные расходы, рассчитанные для указанного ниже налета</p>

            <!-- <div class="table-container">
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
            </div> -->
            <?php
            $variable_costs = carbon_get_post_meta(get_the_ID(), 'variable_costs_hour');
            $constant_costs = carbon_get_post_meta(get_the_ID(), 'constant_costs_hour');

            $variable_total       = carbon_get_post_meta(get_the_ID(), 'variable_cost_total') ?: '-';
            $constant_total       = carbon_get_post_meta(get_the_ID(), 'constant_cost_total') ?: '-';
            $total_expenses       = carbon_get_post_meta(get_the_ID(), 'total_expenses') ?: '-';
            $total_flight_hour_cost = carbon_get_post_meta(get_the_ID(), 'total_flight_hour_cost') ?: '-';
            ?>

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
                        <?php if (is_array($variable_costs) && !empty($variable_costs)) : ?>
                            <?php foreach ($variable_costs as $row) : ?>
                                <tr>
                                    <td class="table-item"><?php echo esc_html($row['cost_label'] ?: '-'); ?></td>
                                    <td class="table-item center"><?php echo esc_html($row['cost_200'] ?: '-'); ?></td>
                                    <td class="table-item center"><?php echo esc_html($row['cost_400'] ?: '-'); ?></td>
                                    <td class="table-item center"><?php echo esc_html($row['cost_600'] ?: '-'); ?></td>
                                    <td class="table-item center"><?php echo esc_html($row['cost_800'] ?: '-'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <tr>
                            <td class="table-item"><b>Сумма переменных затрат</b></td>
                            <td class="table-item" colspan="4"><?php echo esc_html($variable_total); ?></td>
                        </tr>
                        <!-- Constant Costs Header -->
                        <tr>
                            <th class="table-heading">Постоянные затраты</th>
                            <th class="table-heading">&nbsp;</th>
                            <th class="table-heading">&nbsp;</th>
                            <th class="table-heading">&nbsp;</th>
                            <th class="table-heading">&nbsp;</th>
                        </tr>
                        <?php if (is_array($constant_costs) && !empty($constant_costs)) : ?>
                            <?php foreach ($constant_costs as $row) : ?>
                                <tr>
                                    <td class="table-item"><?php echo esc_html($row['cost_label'] ?: '-'); ?></td>
                                    <td class="table-item"><?php echo esc_html($row['cost_200'] ?: '-'); ?></td>
                                    <td class="table-item"><?php echo esc_html($row['cost_400'] ?: '-'); ?></td>
                                    <td class="table-item"><?php echo esc_html($row['cost_600'] ?: '-'); ?></td>
                                    <td class="table-item"><?php echo esc_html($row['cost_800'] ?: '-'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <tr>
                            <td class="table-item"><b>Сумма постоянных затрат</b></td>
                            <td class="table-item" colspan="4"><?php echo esc_html($constant_total); ?></td>
                        </tr>
                        <tr>
                            <td class="table-item"><b>ИТОГО расходы</b></td>
                            <td class="table-item" colspan="4"><?php echo esc_html($total_expenses); ?></td>
                        </tr>
                        <tr>
                            <td class="table-item"><b>ИТОГО цена летного часа</b></td>
                            <td class="table-item" colspan="4"><?php echo esc_html($total_flight_hour_cost); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- <div class="btn-container">
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Узнать больше</button>
                <button type="button" class="btn js-modal" data-modal="#call">Получить звонок</button>
            </div> -->
        </div>
    </section>

    <!-- <section class="regular-sect">
        <div class="container">
            <div class="center">
                <h2 class="h2">Узнать больше о комплектации самолета</h2>
                <p class="text">Подскажем, подберем и проконсультруем вас по всем вопросам</p>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="a460904" title="CTA 1"]'); ?>
        </div>
    </section> -->

    <?php include_once get_stylesheet_directory() . '/components/ru/cta-1.php'; ?>

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

    <section class="directions-sect">
        <div class="container">
            <h2 class="h2 center">Популярные направления</h2>
            <?php /* $routes = get_post_meta($product->get_id(), '_popular_routes', true);
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
            } */ ?>

            <?php
            $destinations = carbon_get_post_meta(get_the_ID(), 'popular_destinations');

            if (is_array($destinations) && !empty($destinations)) : ?>
                <div class="directions-grid">
                    <?php foreach ($destinations as $destination) : ?>
                        <div class="directions-item">
                            <img src="https://jethunter.aero/wp-content/themes/jethunter/img/illustrations/direction.png" loading="lazy" alt="">
                            <p class="directions-name">
                                <?php echo esc_html($destination['popular_destinations_name']); ?>
                            </p>
                            <ul class="list">
                                <li>Дальность полёта (км) – <?php echo esc_html($destination['popular_destinations_distance']); ?></li>
                                <li>Время полёта – <?php echo esc_html($destination['popular_destinations_time']); ?></li>
                                <li>Стоимость – <?php echo esc_html($destination['popular_destinations_cost']); ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="btn-container">
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Узнать больше</button>
                <button type="button" class="btn js-modal" data-modal="#call">Получить звонок</button>
            </div>
        </div>
    </section>

    <!-- <section class="about-sect">
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
    </section> -->

    <?php include_once get_stylesheet_directory() . '/components/ru/about-rent.php'; ?>

    <!-- <section class="step-sect">
        <div class="container">
            <h2 class="h2 center">3 шага к вашему идеальному полету</h2>
            <div class="step-grid">
                <div class="step-item">
                    <span class="step-number">1</span>
                    <h3 class="h3">Оставьте заявку</h3>
                    <p>Свяжитесь с нами и расскажите о своих самых смелых пожеланиях. Мы найдем для вас самый
                        оптимальный самолет!</p>
                </div>
                <div class="step-item">
                    <span class="step-number">2</span>
                    <h3 class="h3">Подпишите договор</h3>
                    <p>Подпишите договор аренды. Это обеспечивает защиту и понимание условий аренды для обеих сторон.
                    </p>
                </div>
                <div class="step-item">
                    <span class="step-number">3</span>
                    <h3 class="h3">Оплатите рейс</h3>
                    <p>Оплатите забронированный рейс любым удобным способом. Мы предлагаем более 50 различных вариантов
                        оплаты.</p>
                </div>
            </div>
        </div>
    </section> -->

    <?php include_once get_stylesheet_directory() . '/components/ru/step-3.php'; ?>

    <!-- <section class="instruction-sect">
        <div class="container">
            <h2 class="h2 center">Мы делаем 8 шагов для Вашего безупречного полета</h2>
            <div class="instruction-wrap">
                <div class="instruction-block">
                    <h3 class="h3">Заявка на рейс</h3>
                    <p>В отличие от многих других брокеров, мы проверяем всю документацию по полету, наличие всех
                        необходимых запросов от оператора и разрешений, заказываем питание исходя из ваших
                        предпочтений и координируем работу служб в аэропортах. С нами у вас не будет никаких
                        сюрпризов!</p>
                </div>
                <div class="instruction-block">
                    <h3 class="h3">Подбор самолёта</h3>
                    <p>Мы подберем идеальный вариант, отвечающий вашим требованиям и бюджету. Мы предложим несколько
                        самолетов и подробно расскажем о каждом, чтобы вы могли сделать правильный выбор!</p>
                </div>
                <div class="instruction-block">
                    <h3 class="h3">Договор на перелёт</h3>
                    <p>После согласования всех деталей мы подготовим договор аренды, регламентирующий все нюансы нашей
                        работы, чтобы вы были уверены в юридической и финансовой безопасности.</p>
                </div>
                <div class="instruction-block">
                    <h3 class="h3">Проверка обеспечения</h3>
                    <p>В отличие от многих других брокеров, мы проверяем всю документацию по полету, наличие всех
                        необходимых запросов от оператора и разрешений, заказываем питание исходя из ваших предпочтений
                        и координируем работу служб в аэропортах. С нами у вас не будет никаких сюрпризов!</p>
                </div>
                <div class="instruction-block">
                    <h3 class="h3">Брифинг по рейсу</h3>
                    <p>Мы заранее проверяем все данные и готовим для вас бриф со всем деталями вашего идеального полета:
                        маршрут, номер самолета, контакты экипажа и терминалов.</p>
                </div>
                <div class="instruction-block">
                    <h3 class="h3">Проверка питания</h3>
                    <p>За сутки до рейса мы проверяем корректность заказа, чтобы не допустить никаких сюрпризов.  Редкие
                        позиции, которые не может предоставить кейтеринг, мы докупаем самостоятельно. Мы сделаем все для
                        вашего комфорта и удовольствия.</p>
                </div>
                <div class="instruction-block">
                    <h3 class="h3">Проверка подлёта</h3>
                    <p>Отслеживаем местонахождение воздушного судна в режиме реального времени, контролируем
                        своевременный вылет и информируем вас о времени прибытия самолета в аэропорт. Это нужно, чтобы
                        не допустить опозданий и предупредить вас о них заранее.</p>
                </div>
                <div class="instruction-block">
                    <h3 class="h3">Вылет по расписанию</h3>
                    <p>Мы лично проконтролируем подготовку к вылету, встретим вас в терминале и сделаем все, чтобы ваше
                        путешествие было максимально комфортным и безопасным. Вы и ваша семья будете довольны!</p>
                </div>
            </div>
        </div>
    </section> -->

    <?php include_once get_stylesheet_directory() . '/components/ru/instruction-8.php'; ?>

    <!-- <section class="regular-sect">
        <div class="container">
            <div class="cta-row">
                <div class="cta-left">
                    <h2 class="h1">Остались вопросы?</h2>
                    <p class="text">Оставьте свои контактыне данные, и мы свяжемся с вами в течении 5 минут и подробнее обо всем расскажем</p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="74ced67" title="CTA 2"]'); ?>
            </div>
        </div>
    </section> -->

    <?php include_once get_stylesheet_directory() . '/components/ru/cta-2.php'; ?>

    <?php
    $current_id = get_the_ID();
    $current_model = carbon_get_post_meta($current_id, 'aircraft_model');

    $args = [
        'post_type'      => 'product',
        'posts_per_page' => 4,
        'post__not_in'   => [$current_id], // Exclude the current product
        'meta_query'     => [
            [
                'key'     => 'aircraft_model',
                'value'   => $current_model,
                'compare' => '='
            ],
            [
                'key'     => 'aircraft_category',
                'value'   => 'buy',
                'compare' => '='
            ]
        ]
    ];

    $queryBuy = new WP_Query($args);
    if ($queryBuy->have_posts()) : ?>
        <section class="looking-sect">
            <div class="container">
                <h2 class="h2 center">Список самолётов для приобретения</h2>
                <div class="looking-grid">
                    <?php while ($queryBuy->have_posts()) : $queryBuy->the_post();
                        $product_id = get_the_ID();
                        $model       = carbon_get_post_meta($product_id, 'aircraft_model');
                        $speed       = carbon_get_post_meta($product_id, 'cruise_speed_kmh');
                        $range       = carbon_get_post_meta($product_id, 'range_km');
                        $seats       = carbon_get_post_meta($product_id, 'aircraft_seats');
                        $hour_cost   = carbon_get_post_meta($product_id, 'aircraft_hour_cost');
                        $id_number_buy = carbon_get_post_meta($product_id, 'id_number_buy');

                        $image = get_the_post_thumbnail_url($product_id, 'full');
                        if (!$image) {
                            $image = 'https://jethunter.aero/wp-content/themes/jethunter/img/planes/1.png';
                        }
                    ?>
                        <div class="looking-item">
                            <img src="<?php echo esc_url($image); ?>" class="looking-img" loading="lazy" alt="">
                            <h3 class="h3"><?php echo esc_html($model); ?></h3>
                            <?php if ($id_number_buy) : ?>
                                <p class="looking-serial"><?php echo esc_html($id_number_buy); ?></p>
                            <?php endif; ?>
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
                                <?php if (!empty($hour_cost)) : ?>
                                    <div class="looking-row">
                                        <p class="looking-row-title">Цена в час</p>
                                        <p class="looking-row-desc"><?php echo esc_html($hour_cost); ?>₽</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-green-fill">Подробнее</a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <!-- <div class="looking-grid">
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
            </div> -->

    <?php
    $current_cat = carbon_get_post_meta(get_the_ID(), 'aircraft_cat');
    if (empty($current_cat)) {
        return;
    }

    $args = [
        'post_type'      => 'product',
        'posts_per_page' => 4,
        'post__not_in'   => [get_the_ID()],
        'meta_query'     => [
            [
                'key'     => 'aircraft_cat',
                'value'   => $current_cat,
                'compare' => '='
            ],
            [
                'key'     => 'aircraft_category',
                'value'   => 'encyclopedia',
                'compare' => '='
            ]
        ]
    ];

    $queryAll = new WP_Query($args);

    if ($queryAll->have_posts()) : ?>
        <section class="looking-sect">
            <div class="container">
                <h2 class="h2 center">Самолеты такой же категории</h2>
                <div class="looking-grid">
                    <?php
                    while ($queryAll->have_posts()) :
                        $queryAll->the_post();
                        $product_id = get_the_ID();

                        $model     = carbon_get_post_meta($product_id, 'aircraft_model');
                        $speed     = carbon_get_post_meta($product_id, 'cruise_speed_kmh');
                        $range     = carbon_get_post_meta($product_id, 'range_km');
                        $seats     = carbon_get_post_meta($product_id, 'aircraft_seats');
                        $hour_cost = carbon_get_post_meta($product_id, 'aircraft_hour_cost');

                        $image = get_the_post_thumbnail_url($product_id, 'full');
                        if (! $image) {
                            $image = get_stylesheet_directory_uri() . '/img/planes/1.png';
                        }
                        $sku = get_post_meta($product_id, '_sku', true);
                    ?>
                        <div class="looking-item">
                            <img src="<?php echo esc_url($image); ?>" class="looking-img" loading="lazy" alt="">
                            <h3 class="h3"><?php echo esc_html($model); ?></h3>
                            <?php if ($sku) : ?>
                                <p class="looking-serial"><?php echo esc_html($sku); ?></p>
                            <?php endif; ?>
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
                                <?php if (! empty($hour_cost)) : ?>
                                    <div class="looking-row">
                                        <p class="looking-row-title">Цена в час</p>
                                        <p class="looking-row-desc"><?php echo esc_html($hour_cost); ?>₽</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-green-fill">Подробнее</a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- <div class="article-wrap article-wrap-page">
        <div class="article-body">
            <p><strong>В этой статье мы отвечаем на самые частые вопросы о наших клиентов: Как арендовать частный самолет? Как выбрать воздушное судно при заказе самолета? Что входит в стоимость аренды частного самолета? Могу ли я изменить условия забронированного рейса? Каким образом обеспечивается безопасность перелета? Каков уровень подготовки пилотов? Что случится, если я опоздаю на свой рейс?</strong></p>
            <div class="accordion-container">
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Как арендовать частный самолет?</p>
                    </div>
                    <div class="accordion-text">
                        <p>Позвонить нам в компанию / оставить заявку любым удобным способом и сообщить желаемые даты перелета и количество пассажиров. Мы подготовим вам лучшее предложение, исходя из ваших пожеланий. Далее вы выбираете понравившийся самолет и после подписания договора – оплачиваете его. После вы предоставляете список пассажиров и пожелания по питанию, а мы организовываем для вас рейс. В назначенный день вы приезжаете в аэропорт, где вас будет ждать заказанный самолет и экипаж.</p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Как выбрать воздушное судно при заказе самолета?</p>
                    </div>
                    <div class="accordion-text">
                        <p>При выборе судна существуют несколько основных критериев: количество пассажиров, дальность перелета, размер самолета, от которого зависит уровень комфорта и бюджет. Мы предоставим несколько самолетов на выбор и расскажем, чем они отличаются.</p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Что входит в стоимость аренды частного самолета?</p>
                    </div>
                    <div class="accordion-text">
                        <p>В стоимость перелета на частном борту включены: воздушное судно с экипажем; VIP-терминалы (при их наличии); VIP-питание, аэропортовые сборы и дополнительные услуги по вашему желанию.</p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Могу ли я изменить условия забронированного рейса?</p>
                    </div>
                    <div class="accordion-text">
                        <p>Вы, несомненно, можете изменить условия рейса, а мы приложим все усилия, чтобы все изменения были выполнены.</p>
                    </div>
                </div>
                <div class="accordion-block">
                    <div class="accordion-heading">
                        <p class="accordion-heading-name">Каким образом обеспечивается безопасность перелета? Каков уровень подготовки пилотов?</p>
                    </div>
                    <div class="accordion-text">
                        <p>Мы предлагаем самолеты только в летной годности, с действующими страховыми сертификатами и своевременно пройденным техобслуживанием. Все пилоты имеют действующие лицензии и регулярно проходят обучение.</p>
                    </div>
                </div>
            </div>
        </div>
        <aside class="article-sidebar">
            <div class="form-bg">
                <?php echo do_shortcode('[contact-form-7 id="1f2bdf6" title="Вопрос в FAQ"]'); ?>
            </div>
        </aside>
    </div> -->

    <?php include_once get_stylesheet_directory() . '/components/ru/faq.php'; ?>

    <?php include_once get_stylesheet_directory() . '/components/ru/seo-sect-empty-legs.php'; ?>

    <!-- <div class="seo-sect">
        <div class="container">
            <h2 class="h2 center">Как найти расписание пустых перелетов</h2>
            <p>Партнерская программа является отличной возможностью для тех, кто хочет монетизировать свою страсть к роскошным путешествиям на частных самолетах. Эта программа открывает дверь в мир бизнес авиации: от частных самолетов и групповых чартеров до грузовых услуг, аренды самолетов и продажи реактивных джетов.</p>
            <p>Эта программа создана для энтузиастов из различных отраслей сегмента люкс. Если вы работаете с людьми из премиального сегмента, то вы можете стать нашим амбассадором и получать кэшбэк с успешных рейсов ваших клиентов. </p>
            <p>Мы обеспечиваем поддержку 24/7, предоставляя всю необходимую информацию. Вам предоставляется персональный советник по вопросам частной авиации, который будет отвечать на все интересующие вопросы. </p>
            <p>Лидер.Джет сочетает конкурентные цены с качеством работы, благодаря нашему многолетнему опыту и доступу к эксклюзивным предложениям.</p>
        </div>
    </div> -->
</div>

<?php do_action('woocommerce_after_single_product'); ?>