<?php

/**
 * The template for displaying product content in the single-product.php template
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

// Простая функция перевода, использующая напрямую pll_current_language()
function t($ru, $en)
{
    if (function_exists('pll_current_language') && pll_current_language() === 'en') {
        return $en;
    }
    return $ru;
}

// Альтернативная функция перевода для тестирования
function translate_text($ru, $en)
{
    if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) {
        return $en;
    }
    return $ru;
}

// Получаем данные о продукте
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
$payload_kg = carbon_get_post_meta($product_id, 'payload_kg');
$payload_lbs = carbon_get_post_meta($product_id, 'payload_lbs');
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

// Получаем разделители из настроек WooCommerce
$thousands_separator = get_option('woocommerce_price_thousand_sep');
$decimal_separator = get_option('woocommerce_price_decimal_sep');

// Функция для форматирования чисел
function format_number($number, $decimal_separator = '.', $thousands_separator = ' ')
{
    // Skip if empty
    if (empty($number)) {
        return '';
    }

    // Remove existing spaces or other thousand separators
    $clean_number = str_replace(' ', '', $number);
    $clean_number = str_replace(',', '.', $clean_number);

    // Convert to float
    $float_number = floatval($clean_number);

    // Determine if we need decimals
    $decimals = (floor($float_number) == $float_number) ? 0 : 2;

    // Format the number
    return number_format($float_number, $decimals, $decimal_separator, $thousands_separator);
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

    <section class="plane-sect">
        <div class="container">
            <div class='breadcrumbs'>
                <?php if ($current_language == 'en') : ?>
                    <a href="<?php echo home_url(); ?>" class="breadcrumbs-link"><?php echo t('Главная', 'Home'); ?></a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;
                    <a href="/en/our-fleet-en/" class="breadcrumbs-link"><?php echo t('Наш флот', 'Our fleet'); ?></a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;
                <?php else : ?>
                    <a href="<?php echo home_url(); ?>" class="breadcrumbs-link"><?php echo t('Главная', 'Home'); ?></a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;
                    <a href="/ru/our-fleet/" class="breadcrumbs-link"><?php echo t('Наш флот', 'Our fleet'); ?></a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;
                <?php endif; ?>
                <span class="breadcrumbs-item"><?php the_title(); ?></span>
            </div>
            <div class="plane-name">
                <h1 class="h1"><span class="capitalize"><?php echo esc_html($aircraft_type); ?></span> <?php the_title(); ?></h1>
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
                <li class="nav-tabs-item active"><a href="#tab-1" class="btn btn-tab-full">
                        <?php echo t('Экстерьер', 'Exterior'); ?>
                    </a></li>
                <li class="nav-tabs-item"><a href="#tab-2" class="btn btn-tab-full">
                        <?php echo t('Интерьер', 'Interior'); ?>
                    </a></li>
                <li class="nav-tabs-item"><a href="#tab-3" class="btn btn-tab-full">
                        <?php echo t('План салона', 'Cabin plan'); ?></a></li>

                <?php
                $file_url = get_post_meta(get_the_ID(), '_custom_file_url', true);

                if (!empty($file_url)) {
                    echo '<li class="nav-tabs-item"><a href="' . esc_url($file_url) . '" target="_blank" class="btn btn-tab-full">' .
                        t('PDF брошюра', 'PDF brochure') . '</a></li>';
                }
                ?>

                <li>
                    <button onclick="addToComparison(<?php the_ID(); ?>)" class="btn before-comparison">
                        <?php echo t('Добавить в сравнение', 'Add to comparison'); ?>
                    </button>
                    <a href="/plane-compare" class="btn after-comparison is-hidden"><?php echo t('Перейти к сравнению', 'Go to comparison'); ?></a>
                </li>

                <script>
                    function addToComparison(planeID) {
                        fetch("<?php echo admin_url('admin-ajax.php?action=add_to_comparison'); ?>", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/x-www-form-urlencoded",
                                },
                                body: `plane_id=${planeID}`,
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    console.log('Updated planes in comparison:', data.data.planes);
                                    document.querySelector('.before-comparison').classList.add('is-hidden');
                                    document.querySelector('.after-comparison').classList.remove('is-hidden');
                                } else {
                                    console.error('Error adding to comparison:', data.message);
                                }
                            })
                            .catch(error => console.error('Fetch error:', error));
                    }
                </script>
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

                                            <button class="show-more-btn">
                                                <?php echo t('Ещё', 'More'); ?>
                                            </button>
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

                                            <button class="show-more-btn">
                                                <?php echo t('Ещё', 'More'); ?>
                                            </button>
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

                                            <button class="show-more-btn">
                                                <?php echo t('Ещё', 'More'); ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="plane-main-info">
                    <?php /* if (!empty($aircraft_logo)) :
                        $aircraft_logo_url = wp_get_attachment_url($aircraft_logo);
                        if ($aircraft_logo_url) : ?>
                            <img src="<?php echo esc_url($aircraft_logo_url); ?>" class="plane-logo" alt="Logo">
                    <?php endif;
                    endif; */
                    ?>

                    <?php
                    $terms = get_the_terms(get_the_ID(), 'product_brand'); // получаем бренды
                    if (!empty($terms) && !is_wp_error($terms)) {
                        foreach ($terms as $brand) {
                            $brand_logo_id = get_term_meta($brand->term_id, 'thumbnail_id', true); // получаем ID логотипа
                            $brand_logo_url = wp_get_attachment_url($brand_logo_id); // URL изображения

                            if ($brand_logo_url) : ?>
                                <img src="<?php echo esc_url($brand_logo_url); ?>" class="plane-logo" alt="<?php echo esc_attr($brand->name); ?>">
                    <?php endif;
                        }
                    }
                    ?>
                    <div class="plane-main-info-wrap">
                        <?php
                        if ($aircraft_category === 'rent') {
                            if (!empty($rental_price)) {
                                echo '
                                    <div class="plane-main-info-item">
                                        <p class="plane-main-info-badge">' . t('Цена аренды', 'Rental price') . '</p>
                                        <p class="plane-main-info-price">$ ' . esc_html($rental_price) . '</p>
                                        ';
                                if (!empty($rental_period)) {
                                    echo '<p class="plane-main-info-price">$ ' . esc_html($rental_period) . '</p>';
                                }
                                echo '<button type="button" class="btn btn-full-width js-modal" data-modal="#call">' . t('Арендовать', 'Rent') . '</button>
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
                                        <p class="plane-main-info-badge">' . t('Цена покупки', 'Purchase price') . '</p>
                                        <p class="plane-main-info-price">$  ' . esc_html($purchase_price) . '</p>
                                        <button type="button" class="btn btn-full-width js-modal" data-modal="#call">' . t('Купить', 'Buy') . '</button>
                                    </div>
                                ';
                            }
                        }
                        ?>
                    </div>
                    <a href="#call" data-modal="#call" class="btn btn-green-fill js-modal btn-full-width">
                        <?php echo t('Заказать звонок', 'Call me back'); ?>
                    </a>
                </div>
            </div>

            <div class="plane-specs">
                <?php
                $product_terms = get_the_terms(get_the_ID(), 'product_cat');
                $is_buy = false;
                $is_rent = false;
                $is_sell = false;

                if (!empty($product_terms) && !is_wp_error($product_terms)) {
                    foreach ($product_terms as $term) {
                        if ($term->slug === 'buy') {
                            $is_buy = true;
                            break;
                        } elseif ($term->slug === 'rent') {
                            $is_rent = true;
                            break;
                        } elseif ($term->slug === 'sell') {
                            $is_sell = true;
                            break;
                        }
                    }
                }

                // Get additional fields for buy category
                $aircraft_produced_year = carbon_get_post_meta($product_id, 'aircraft_produced_year');
                $aircraft_serial_number = carbon_get_post_meta($product_id, 'aircraft_serial_number');
                $aircraft_flown_hours = carbon_get_post_meta($product_id, 'aircraft_flown_hours');
                $aircraft_cycles = carbon_get_post_meta($product_id, 'aircraft_cycles');
                $aircraft_buy_price = carbon_get_post_meta($product_id, 'aircraft_buy_price');

                // Display buy category specific fields
                if ($is_buy) :
                ?>
                    <?php if (!empty($aircraft_produced_year)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($aircraft_produced_year); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Год выпуска', 'Produced, year'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_serial_number)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($aircraft_serial_number); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Серийный номер', 'Serial number'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_flown_hours)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html(format_number($aircraft_flown_hours, $decimal_separator, $thousands_separator)); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Налет (часов)', 'Flight hours'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_cycles)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html(format_number($aircraft_cycles, $decimal_separator, $thousands_separator)); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Циклы', 'Cycles'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_buy_price)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html(format_number($aircraft_buy_price, $decimal_separator, $thousands_separator)); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Цена', 'Cost'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php elseif ($is_rent): ?>
                    <?php if (!empty($aircraft_hull_number)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($aircraft_hull_number); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Бортовой номер', 'Hull number'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_rent_produced) || !empty($aircraft_rent_updated)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($aircraft_rent_produced); ?><?php echo !empty($aircraft_rent_updated) ? ' / ' . esc_html($aircraft_rent_updated) : ''; ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Производство/Обновление', 'Produced/Updated'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_seats)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($aircraft_seats); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Мест', 'Seats'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_cat)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($aircraft_cat); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Категория', 'Category'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($rental_price)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number"><?php echo esc_html($rental_price); ?></div>
                            <div class="plane-specs-desc">
                                <?php echo t('Цена аренды (USD)', 'Rental price (USD)'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php else : ?>
                    <?php if (!empty($aircraft_seats)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($aircraft_seats); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Мест', 'Seats'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($is_buy && !empty($aircraft_cost)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html(format_number($aircraft_cost, $decimal_separator, $thousands_separator)); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Стоимость (USD)', 'Cost (USD)'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($cruise_speed_kmh)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html(format_number($cruise_speed_kmh, $decimal_separator, $thousands_separator)); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Скорость, км/ч', 'Cruise speed, km/h'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_seats)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($aircraft_seats); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Мест', 'Seats'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($cruise_speed_kmh)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html(format_number($cruise_speed_kmh, $decimal_separator, $thousands_separator)); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Скорость, км/ч', 'Cruise speed, km/h'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($range_km)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html(format_number($range_km, $decimal_separator, $thousands_separator)); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Дальность, км', 'Range, km'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($luggage_volume_m)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($luggage_volume_m); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Объем багажника в м<sup>3</sup>', 'Trunk volume in m<sup>3</sup>'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($rental_price)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($rental_price); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Цена аренды в $', 'Rental price in $'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($luggage_number)) : ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number">
                                <?php echo esc_html($luggage_number); ?>
                            </div>
                            <div class="plane-specs-desc">
                                <?php echo t('Чемоданов', 'Bags'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="tech-sect">
        <div class="container">
            <h2 class="h2 center">
                <?php echo t('Технические характеристики', 'Technical parameters'); ?>
            </h2>
            <div class="tech-table">
                <div class="tech-table-col">
                    <?php
                    // Check if this is an encyclopedia product
                    $is_encyclopedia = false;

                    if (!empty($product_terms) && !is_wp_error($product_terms)) {
                        foreach ($product_terms as $term) {
                            if ($term->slug === 'encyclopedia') {
                                $is_encyclopedia = true;
                                break;
                            }
                        }
                    }

                    // Get manufacturer from product brand
                    $manufacturer = '';
                    $terms = get_the_terms(get_the_ID(), 'product_brand');
                    if (!empty($terms) && !is_wp_error($terms)) {
                        $manufacturer = $terms[0]->name;
                    }

                    // Display technical specifications for encyclopedia products
                    if ($is_encyclopedia) :
                    ?>
                        <?php if (!empty($aircraft_type)) : ?>
                            <div class="tech-table-row">
                                <div class="tech-table-title">
                                    <?php echo t('Тип ВС', 'Aircraft type'); ?>
                                </div>
                                <div class="tech-table-desc">
                                    <?php echo esc_html($aircraft_type); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($aircraft_cat)) : ?>
                            <div class="tech-table-row">
                                <div class="tech-table-title">
                                    <?php echo t('Категория ВС', 'Aircraft category'); ?>
                                </div>
                                <div class="tech-table-desc">
                                    <?php echo esc_html($aircraft_cat); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($manufacturer)) : ?>
                            <div class="tech-table-row">
                                <div class="tech-table-title">
                                    <?php echo t('Производитель', 'Manufacturer'); ?>
                                </div>
                                <div class="tech-table-desc">
                                    <?php echo esc_html($manufacturer); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php elseif ($is_rent) : ?>
                        <?php if (!empty($aircraft_hull_number)) : ?>
                            <div class="tech-table-row">
                                <div class="tech-table-title">
                                    <?php echo t('Бортовой номер', 'Hull number'); ?>
                                </div>
                                <div class="tech-table-desc">
                                    <?php echo esc_html($aircraft_hull_number); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (!empty($cruise_speed_kmh)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Крейсерская скорость', 'Cruising speed'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($cruise_speed_kmh); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($range_km)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Дальность', 'Range'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($range_km); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($range_time)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Время в полете, скорость', 'Flight time, speed'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($range_time); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($max_takeoff_height_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Максимальная высота полета', 'Maximum flight altitude'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($max_takeoff_height_m); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($max_takeoff_weight_kg)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Максимальный взлетный вес', 'Maximum takeoff weight'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($max_takeoff_weight_kg); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($max_landing_weight_kg)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Посадочный вес', 'Landing weight'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($max_landing_weight_kg); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($max_landing_height_kg)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Грузоподъемность', 'Payload'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($max_landing_height_kg); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($takeoff_distance_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Взлетная дистанция', 'Takeoff distance'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($takeoff_distance_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($landing_distance_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Посадочная дистанция', 'Landing distance'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($landing_distance_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_engine_count)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Количество двигателей', 'Number of engines'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($aircraft_engine_count); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_engine)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Двигатель', 'Engine'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($aircraft_engine); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($vsu)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Вспомогательная силовая установка', 'Auxiliary power unit'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($vsu); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($avionics)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Авионика', 'Avionics'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($avionics); ?></div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="tech-table-col">
                    <h3 class="h3"><?php echo t('Салон', 'Cabin'); ?></h3>
                    <?php if (!empty($cabin_width_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Ширина', 'Width'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($cabin_width_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($cabin_length_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Длина салона', 'Cabin length'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($cabin_length_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($cabin_height_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Высота салона', 'Cabin height'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($cabin_height_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($cabin_volume_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Объем салона', 'Cabin volume'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($cabin_volume_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($luggage_volume_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Объём багажного отделения', 'Luggage compartment volume'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($luggage_volume_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <h3 class="h3"><?php echo t('Размер самолёта', 'Aircraft size'); ?></h3>
                    <?php if (!empty($aircraft_length_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Длина самолета', 'Aircraft length'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($aircraft_length_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_height_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Высота самолета', 'Aircraft height'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($aircraft_height_m); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($aircraft_wing_length_m)) : ?>
                        <div class="tech-table-row">
                            <div class="tech-table-title"><?php echo t('Размах крыла', 'Wingspan'); ?></div>
                            <div class="tech-table-desc">
                                <?php echo esc_html($aircraft_wing_length_m); ?></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php if ($is_buy) :
    ?>
        <section class="regular-sect">
            <div class="container">
                <h2 class="h2 center"><?php echo t('Характеристики ВС', 'Aircraft specifications'); ?></h2>
                <div class="tech-table">
                    <div class="tech-table-col">
                        <h3 class="h3"><?php echo t('Общие данные', 'General information'); ?></h3>
                        <?php if (!empty($aircraft_serial_number)) : ?>
                            <div class="tech-table-row">
                                <div class="tech-table-title"><?php echo t('Серийный номер', 'Serial number'); ?></div>
                                <div class="tech-table-desc"><?php echo esc_html($aircraft_serial_number); ?></div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($aircraft_hull_number)) : ?>
                            <div class="tech-table-row">
                                <div class="tech-table-title"><?php echo t('Бортовой номер', 'Hull number'); ?></div>
                                <div class="tech-table-desc"><?php echo esc_html($aircraft_hull_number); ?></div>
                            </div>
                        <?php endif; ?>

                        <h3 class="h3"><?php echo t('Вспомогательная силовая установка (ВСУ)', 'Auxiliary power unit (APU)'); ?></h3>
                        <?php if (!empty($aircraft_flown_hours)) : ?>
                            <div class="tech-table-row">
                                <div class="tech-table-title"><?php echo t('Налет (часов)', 'Flown hours'); ?></div>
                                <div class="tech-table-desc"><?php echo esc_html($aircraft_flown_hours); ?></div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($aircraft_cycles)) : ?>
                            <div class="tech-table-row">
                                <div class="tech-table-title"><?php echo t('Циклы', 'Cycles'); ?></div>
                                <div class="tech-table-desc"><?php echo esc_html($aircraft_cycles); ?></div>
                            </div>
                        <?php endif; ?>

                        <?php
                        $additional_equipment = carbon_get_the_post_meta('additional_equipment');
                        $additional_equipment_en = carbon_get_the_post_meta('additional_equipment_en'); ?>
                        <?php if (pll_current_language() == 'ru') : ?>
                            <?php if (!empty($additional_equipment)) : ?>
                                <h3 class="h3"><?php echo t('Дополнительное оборудование', 'Additional equipment'); ?></h3>
                                <div class="tech-table-row">
                                    <div class="tech-table-title"><?php echo esc_html($additional_equipment); ?></div>
                                </div>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php if (!empty($additional_equipment_en)) : ?>
                                <h3 class="h3"><?php echo t('Дополнительное оборудование', 'Additional equipment'); ?></h3>
                                <div class="tech-table-row">
                                    <div class="tech-table-title"><?php echo esc_html($additional_equipment_en); ?></div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="tech-table-col">
                        <h3 class="h3"><?php echo t('Двигатели', 'Engines'); ?></h3>
                        <?php
                        $engines = carbon_get_the_post_meta('aircraft_engines');
                        if (!empty($engines)) :
                            foreach ($engines as $index => $engine) : ?>
                                <div class="tech-table-row">
                                    <div class="tech-table-title"><?php echo t('Налет (часов), двигатель ', 'Hours, engine') . ' ' . ($index + 1); ?></div>
                                    <div class="tech-table-desc">
                                        <?php if (!empty($engine['engine_hours'])) : ?>
                                            <?php echo esc_html($engine['engine_hours']); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="tech-table-row">
                                    <div class="tech-table-title"><?php echo t('Циклы, двигатель ', 'Cycles, engine') . ' ' . ($index + 1); ?></div>
                                    <div class="tech-table-desc">
                                        <?php if (!empty($engine['engine_cycles'])) : ?>
                                            <?php echo esc_html($engine['engine_cycles']); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>
                        <h3 class="h3"><?php echo t('Программы', 'Programmes'); ?></h3>
                        <?php
                        $programmes = carbon_get_the_post_meta('aircraft_programmes');
                        $additional_info = carbon_get_the_post_meta('additional_info');
                        $additional_info_en = carbon_get_the_post_meta('additional_info_en');
                        if (!empty($programmes)) :
                            foreach ($programmes as $index => $program) : ?>
                                <div class="tech-table-row">
                                    <div class="tech-table-title">
                                        <?php if (!empty($program['programme_key'])) : ?>
                                            <?php echo esc_html($program['programme_key']); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="tech-table-desc">
                                        <?php if (!empty($program['programme_value'])) : ?>
                                            <?php echo esc_html($program['programme_value']); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        <?php endforeach;
                        endif; ?>

                        <?php if (pll_current_language() == 'ru') : ?>
                            <?php if (!empty($additional_info)) : ?>
                                <h3 class="h3"><?php echo t('Дополнительная информация', 'Additional information'); ?></h3>
                                <div class="tech-table-row">
                                    <div class="tech-table-title"><?php echo esc_html($additional_info); ?></div>
                                </div>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php if (!empty($additional_info_en)) : ?>
                                <h3 class="h3"><?php echo t('Дополнительная информация', 'Additional information'); ?></h3>
                                <div class="tech-table-row">
                                    <div class="tech-table-title"><?php echo esc_html($additional_info_en); ?></div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (pll_current_language() == 'ru') : ?>
        <?php include_once get_stylesheet_directory() . '/components/ru/quiz.php'; ?>
    <?php else : ?>
        <?php include_once get_stylesheet_directory() . '/components/en/quiz.php'; ?>
    <?php endif; ?>

    <section class="step-sect">
        <div class="container">
            <h2 class="h2 center"><?php echo t('Особенности самолёта', 'Aircraft features'); ?></h2>
            <div class="step-grid">
                <?php
                $lang_suffix = ($current_language === 'en') ? '_en' : '';

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
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call"><?php echo t('Узнать стоимость', 'Learn price'); ?></button>
                <button type="button" class="btn js-modal" data-modal="#call"><?php echo t('Связаться с нами', 'Contact us'); ?></button>
            </div>
        </div>
    </section>

    <section class="commerce-sect">
        <div class="container">
            <h2 class="h2 center"><?php echo t('Коммерческие данные', 'Commercial data'); ?></h2>
            <div class="plane-specs">
                <?php
                $fields = [
                    'production_start' => ['Год начала производства', 'Production start year'],
                    'production_end' => ['Год окончания производства', 'Production end year'],
                    'production_country' => ['Страна производства', 'Country of production'],
                    'aircraft_new_cost' => ['Стоимость нового самолета ($)', 'New aircraft cost ($)'],
                    'aircraft_used_cost' => ['Стоимость самолета с налетом ($)', 'Used aircraft cost ($)'],
                    'aircraft_hour_cost' => ['Себестоимость летного часа ($)', 'Flight hour cost ($)'],
                    'hsi' => ['Инспекция горячей части (HSI) (часов)', 'HSI inspection interval (hours)'],
                    'interval_total_repair' => ['Интервал капитального ремонта (часов)', 'Overhaul interval (hours)'],
                    'interval_a_check' => ['Интервал A-Check', 'A-Check interval'],
                    'interval_b_check' => ['Интервал B-Check', 'B-Check interval'],
                    'interval_c_check' => ['Интервал C-Check', 'C-Check interval'],
                    'interval_d_check' => ['Интервал D-Check', 'D-Check interval']
                ];

                foreach ($fields as $meta_key => $labels) :
                    $value = carbon_get_post_meta(get_the_ID(), $meta_key);
                    if (!empty($value)) :
                        // Only format if the value contains only numbers, spaces, commas, and periods
                        if (preg_match('/^[\d\s\.,]+$/', $value)) {
                            $value = format_number($value, $decimal_separator, $thousands_separator);
                        }
                ?>
                        <div class="plane-specs-item">
                            <div class="plane-specs-number"><?php echo esc_html($value); ?></div>
                            <div class="plane-specs-desc"><?php echo t($labels[0], $labels[1]); ?></div>
                        </div>
                <?php endif;
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <section class="exp-sect">
        <div class="container">
            <h2 class="h2 center"><?php echo t('Эксплуатационные расходы самолета', 'Aircraft operating costs'); ?></h2>
            <p class="center"><?php echo t('Приблизительные расходы, рассчитанные для указанного ниже налета', 'Approximate costs calculated for the flight time indicated below'); ?></p>

            <?php
            $variable_costs = carbon_get_post_meta(get_the_ID(), 'variable_costs_hour');
            $constant_costs = carbon_get_post_meta(get_the_ID(), 'constant_costs_hour');

            $variable_cost_total       = carbon_get_post_meta(get_the_ID(), 'variable_cost_total') ?: '-';
            $constant_cost_total       = carbon_get_post_meta(get_the_ID(), 'constant_cost_total') ?: '-';
            $total_expenses       = carbon_get_post_meta(get_the_ID(), 'total_expenses') ?: '-';
            $total_flight_hour_cost = carbon_get_post_meta(get_the_ID(), 'total_flight_hour_cost') ?: '-';
            ?>

            <div class="table-container">
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="table-heading"><?php echo t('Переменные затраты (USD)/час', 'Variable costs (USD)/hour'); ?></th>
                            <th class="table-heading center">200<br><?php echo t('часов', 'hours'); ?></th>
                            <th class="table-heading center">400<br><?php echo t('часов', 'hours'); ?></th>
                            <th class="table-heading center">600<br><?php echo t('часов', 'hours'); ?></th>
                            <th class="table-heading center">800<br><?php echo t('часов', 'hours'); ?></th>
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
                        <!-- Variable Cost Total -->
                        <?php if (is_array($variable_cost_total) && !empty($variable_cost_total)) : ?>
                            <tr>
                                <td class="table-item"><b><?php echo t('Сумма переменных затрат', 'Total variable costs'); ?></b></td>
                                <td class="table-item center"><?php echo esc_html($variable_cost_total[0]['cost_200'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($variable_cost_total[0]['cost_400'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($variable_cost_total[0]['cost_600'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($variable_cost_total[0]['cost_800'] ?: '-'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <!-- Constant Costs Header -->
                        <tr>
                            <th class="table-heading"><?php echo t('Постоянные затраты', 'Fixed costs'); ?></th>
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
                        <!-- Constant Cost Total -->
                        <?php if (is_array($constant_cost_total) && !empty($constant_cost_total)) : ?>
                            <tr>
                                <td class="table-item"><b><?php echo t('Сумма постоянных затрат', 'Total fixed costs'); ?></b></td>
                                <td class="table-item center"><?php echo esc_html($constant_cost_total[0]['cost_200'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($constant_cost_total[0]['cost_400'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($constant_cost_total[0]['cost_600'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($constant_cost_total[0]['cost_800'] ?: '-'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <!-- Total Expenses -->
                        <?php if (is_array($total_expenses) && !empty($total_expenses)) : ?>
                            <tr>
                                <td class="table-item"><b><?php echo t('ИТОГО расходы', 'TOTAL expenses'); ?></b></td>
                                <td class="table-item center"><?php echo esc_html($total_expenses[0]['cost_200'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($total_expenses[0]['cost_400'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($total_expenses[0]['cost_600'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($total_expenses[0]['cost_800'] ?: '-'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <!-- Total Flight Hour Cost -->
                        <?php if (is_array($total_flight_hour_cost) && !empty($total_flight_hour_cost)) : ?>
                            <tr>
                                <td class="table-item"><b><?php echo t('ИТОГО цена летного часа', 'TOTAL flight hour cost'); ?></b></td>
                                <td class="table-item center"><?php echo esc_html($total_flight_hour_cost[0]['cost_200'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($total_flight_hour_cost[0]['cost_400'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($total_flight_hour_cost[0]['cost_600'] ?: '-'); ?></td>
                                <td class="table-item center"><?php echo esc_html($total_flight_hour_cost[0]['cost_800'] ?: '-'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <?php if (pll_current_language() == 'ru') : ?>
        <?php include_once get_stylesheet_directory() . '/components/ru/cta-1.php'; ?>
    <?php else : ?>
        <?php include_once get_stylesheet_directory() . '/components/en/cta-1.php'; ?>
    <?php endif; ?>

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
            <h2 class="h2 center"><?php echo t('Карта дальности', 'Range map'); ?></h2>
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
                    <h2 class="h1"><?php echo t('Остались вопросы?', 'Any questions?'); ?></h2>
                    <p class="text"><?php echo t('Оставьте свои контактные данные, и мы свяжемся с вами в течении 5 минут и подробнее обо всем расскажем', 'Leave your contact details, and we will contact you within 5 minutes and tell you more about everything'); ?></p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="74ced67" title="CTA 2"]'); ?>
            </div>
        </div>
    </section>

    <section class="directions-sect">
        <div class="container">
            <h2 class="h2 center"><?php echo t('Популярные направления', 'Popular destinations'); ?></h2>

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
                                <li><?php echo t('Дальность полёта (км)', 'Flight range (km)'); ?> – <?php echo esc_html($destination['popular_destinations_distance']); ?></li>
                                <li><?php echo t('Время полёта', 'Flight time'); ?> – <?php echo esc_html($destination['popular_destinations_time']); ?></li>
                                <li><?php echo t('Стоимость', 'Cost'); ?> – <?php echo esc_html($destination['popular_destinations_cost']); ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="btn-container">
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call"><?php echo t('Узнать больше', 'Learn more'); ?></button>
                <button type="button" class="btn js-modal" data-modal="#call"><?php echo t('Получить звонок', 'Get a call'); ?></button>
            </div>
        </div>
    </section>


    <?php if (pll_current_language() == 'ru') : ?>
        <?php include_once get_stylesheet_directory() . '/components/ru/about-rent.php'; ?>

        <?php include_once get_stylesheet_directory() . '/components/ru/step-3.php'; ?>

        <?php include_once get_stylesheet_directory() . '/components/ru/instruction-8.php'; ?>

        <?php include_once get_stylesheet_directory() . '/components/ru/cta-2.php'; ?>
    <?php else : ?>
        <?php include_once get_stylesheet_directory() . '/components/en/about-rent.php'; ?>

        <?php include_once get_stylesheet_directory() . '/components/en/step-3.php'; ?>

        <?php include_once get_stylesheet_directory() . '/components/en/instruction-8.php'; ?>

        <?php include_once get_stylesheet_directory() . '/components/en/cta-2.php'; ?>
    <?php endif; ?>

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
                <h2 class="h2 center"><?php echo t('Список самолётов для приобретения', 'List of aircraft for purchase'); ?></h2>
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
                                    <p class="looking-row-title"><?php echo t('Скорость', 'Speed'); ?></p>
                                    <p class="looking-row-desc"><?php echo esc_html($speed); ?></p>
                                </div>
                                <div class="looking-row">
                                    <p class="looking-row-title"><?php echo t('Дальность', 'Range'); ?></p>
                                    <p class="looking-row-desc"><?php echo esc_html($range); ?> км</p>
                                </div>
                                <div class="looking-row">
                                    <p class="looking-row-title"><?php echo t('Количество мест', 'Number of seats'); ?></p>
                                    <p class="looking-row-desc"><?php echo esc_html($seats); ?></p>
                                </div>
                                <?php if (!empty($hour_cost)) : ?>
                                    <div class="looking-row">
                                        <p class="looking-row-title"><?php echo t('Цена в час', 'Price per hour'); ?></p>
                                        <p class="looking-row-desc"><?php echo esc_html($hour_cost); ?>₽</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-green-fill"><?php echo t('Подробнее', 'Details'); ?></a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

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
                <h2 class="h2 center"><?php echo t('Самолеты такой же категории', 'Aircraft of the same category'); ?></h2>
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
                                    <p class="looking-row-title"><?php echo t('Скорость', 'Speed'); ?></p>
                                    <p class="looking-row-desc"><?php echo esc_html($speed); ?></p>
                                </div>
                                <div class="looking-row">
                                    <p class="looking-row-title"><?php echo t('Дальность', 'Range'); ?></p>
                                    <p class="looking-row-desc"><?php echo esc_html($range); ?> км</p>
                                </div>
                                <div class="looking-row">
                                    <p class="looking-row-title"><?php echo t('Количество мест', 'Number of seats'); ?></p>
                                    <p class="looking-row-desc"><?php echo esc_html($seats); ?></p>
                                </div>
                                <?php if (! empty($hour_cost)) : ?>
                                    <div class="looking-row">
                                        <p class="looking-row-title"><?php echo t('Цена в час', 'Price per hour'); ?></p>
                                        <p class="looking-row-desc"><?php echo esc_html($hour_cost); ?>₽</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-green-fill"><?php echo t('Подробнее', 'Details'); ?></a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (pll_current_language() == 'ru') : ?>
        <?php include_once get_stylesheet_directory() . '/components/ru/faq.php'; ?>
        <?php include_once get_stylesheet_directory() . '/components/ru/seo-empty-legs.php'; ?>
    <?php else : ?>
        <?php include_once get_stylesheet_directory() . '/components/en/faq.php'; ?>
        <?php include_once get_stylesheet_directory() . '/components/en/seo-empty-legs.php'; ?>
    <?php endif; ?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>