<?php
add_action('wp_enqueue_scripts', 'thejet_io_enqueue_styles');
function thejet_io_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}












add_filter('woocommerce_product_data_tabs', function($tabs) {
    $tabs['commercial_data_tab'] = [
        'label'    => __('Коммерческие данные', 'woocommerce'),
        'target'   => 'commercial_data_options',
        'class'    => ['show_if_simple', 'show_if_variable'],
        'priority' => 11,
    ];

	$tabs['aircraft_features'] = [
        'label'    => __('Особенности самолета', 'woocommerce'),
        'target'   => 'aircraft_features_options',
        'class'    => ['show_if_simple', 'show_if_variable'],
        'priority' => 12
    ];

    $tabs['operating_costs'] = [
        'label'    => __('Эксплуатационные расходы самолета', 'woocommerce'),
        'target'   => 'operating_costs_options',
        'class'    => ['show_if_simple', 'show_if_variable'],
        'priority' => 13
    ];

    $tabs['technical_specs'] = [
        'label'    => __('Технические характеристики', 'woocommerce'),
        'target'   => 'technical_specs_options',
        'class'    => ['show_if_simple', 'show_if_variable'],
        'priority' => 14
    ];
    return $tabs;
});


add_action('woocommerce_product_data_panels', function() {
    ?>
    <div id="commercial_data_options" class="panel woocommerce_options_panel hidden">
        <?php
        $fields = [
            '_start_year'          => 'Год начала производства',
            '_end_year'            => 'Год окончания производства',
            '_country_of_origin'   => 'Страна производства',
            '_out_of_production'   => 'Снят с производства',
            '_new_plane_cost'      => 'Стоимость нового самолета ($)',
            '_used_plane_cost'     => 'Стоимость самолета с налетом',
            '_hour_cost'           => 'Себестоимость летного часа',
            '_overhaul_interval'   => 'Интервал капитального ремонта (часов)',
            '_a_check_interval'    => 'Интервал A-Check',
            '_b_check_interval'    => 'Интервал B-Check',
            '_c_check_interval'    => 'Интервал C-Check',
            '_d_check_interval'    => 'Интервал D-Check'
        ];

        foreach ($fields as $id => $label) {
            woocommerce_wp_text_input([
                'id'          => $id,
                'label'       => __($label, 'woocommerce'),
                'description' => __('Введите значение для ' . $label, 'woocommerce'),
                'desc_tip'    => true,
            ]);
        }
        ?>
    </div>

	<div id="aircraft_features_options" class="panel woocommerce_options_panel hidden">
        <h2><?php _e('Особенности самолета', 'woocommerce'); ?></h2>
        <?php
        woocommerce_wp_textarea_input([
            'id'          => '_aircraft_features',
            'label'       => __('Особенности самолета', 'woocommerce'),
            'description' => __('Введите описание особенностей самолета.', 'woocommerce'),
            'desc_tip'    => true,
        ]);
        ?>
    </div>

    <div id="operating_costs_options" class="panel woocommerce_options_panel hidden">
        <h2><?php _e('Эксплуатационные расходы самолета', 'woocommerce'); ?></h2>
        <?php
        woocommerce_wp_textarea_input([
            'id'          => '_operating_costs',
            'label'       => __('Эксплуатационные расходы самолета', 'woocommerce'),
            'description' => __('Введите данные о расходах.', 'woocommerce'),
            'desc_tip'    => true,
        ]);
        ?>
    </div>

    <div id="technical_specs_options" class="panel woocommerce_options_panel hidden">
        <h2><?php _e('Технические характеристики', 'woocommerce'); ?></h2>
        <?php
        $fields = [
            '_cruising_speed' => 'Крейсерская скорость (км/ч / m/h)',
            '_range' => 'Дальность (км / nm)',
            '_flight_time' => 'Время в полете (ч:м)',
            '_max_altitude' => 'Максимальная высота полета (м / ft)',
            '_max_takeoff_weight' => 'Максимальный взлетный вес (кг / lb)',
            '_landing_weight' => 'Посадочный вес (кг / lb)',
            '_payload' => 'Грузоподъемность (кг)',
            '_takeoff_distance' => 'Взлетная дистанция (м / ft)',
            '_landing_distance' => 'Посадочная дистанция (м / ft)',
            '_engine_count' => 'Количество двигателей',
            '_engine' => 'Двигатель',
            '_apu' => 'Вспомогательная силовая установка',
            '_avionics' => 'Авионика',
            '_width' => 'Ширина',
            '_cabin_length' => 'Длина салона',
            '_cabin_height' => 'Высота салона',
            '_cabin_volume' => 'Объем салона',
            '_luggage_volume' => 'Объём багажного отделения',
            '_plane_length' => 'Длина самолета',
            '_plane_height' => 'Высота самолета',
        ];

        foreach ($fields as $id => $label) {
            woocommerce_wp_text_input([
                'id'          => $id,
                'label'       => __($label, 'woocommerce'),
                'description' => __('Введите значение для ' . $label, 'woocommerce'),
                'desc_tip'    => true,
            ]);
        }
        ?>
    </div>
    <?php
});


add_action('woocommerce_process_product_meta', function($post_id) {
    $fields = [
		'_aircraft_features',
        '_operating_costs',
        '_cruising_speed',
        '_range',
        '_flight_time',
        '_max_altitude',
        '_max_takeoff_weight',
        '_landing_weight',
        '_payload',
        '_takeoff_distance',
        '_landing_distance',
        '_engine_count',
        '_engine',
        '_apu',
        '_avionics',
        '_width',
        '_cabin_length',
        '_cabin_height',
        '_cabin_volume',
        '_luggage_volume',
        '_plane_length',
        '_plane_height',
        '_start_year',
        '_end_year',
        '_country_of_origin',
        '_out_of_production',
        '_new_plane_cost',
        '_used_plane_cost',
        '_hour_cost',
        '_overhaul_interval',
        '_a_check_interval',
        '_b_check_interval',
        '_c_check_interval',
        '_d_check_interval'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
});

add_filter('woocommerce_product_tabs', function($tabs) {
	$tabs['aircraft_features'] = [
        'title'    => __('Особенности самолета', 'woocommerce'),
        'priority' => 30,
        'callback' => function() {
            global $product;
            $value = get_post_meta($product->get_id(), '_aircraft_features', true);
            if ($value) {
                echo '<h2>' . __('Особенности самолета', 'woocommerce') . '</h2>';
                echo '<p>' . esc_html($value) . '</p>';
            }
        },
    ];

    $tabs['operating_costs'] = [
        'title'    => __('Эксплуатационные расходы самолета', 'woocommerce'),
        'priority' => 40,
        'callback' => function() {
            global $product;
            $value = get_post_meta($product->get_id(), '_operating_costs', true);
            if ($value) {
                echo '<h2>' . __('Эксплуатационные расходы самолета', 'woocommerce') . '</h2>';
                echo '<p>' . esc_html($value) . '</p>';
            }
        },
    ];

    $tabs['technical_specs'] = [
        'title'    => __('Технические характеристики', 'woocommerce'),
        'priority' => 50,
        'callback' => function() {
            global $product;

            $fields = [
                '_cruising_speed' => 'Крейсерская скорость (км/ч / m/h)',
                '_range' => 'Дальность (км / nm)',
                '_flight_time' => 'Время в полете (ч:м)',
                '_max_altitude' => 'Максимальная высота полета (м / ft)',
                '_max_takeoff_weight' => 'Максимальный взлетный вес (кг / lb)',
                '_landing_weight' => 'Посадочный вес (кг / lb)',
                '_payload' => 'Грузоподъемность (кг)',
                '_takeoff_distance' => 'Взлетная дистанция (м / ft)',
                '_landing_distance' => 'Посадочная дистанция (м / ft)',
                '_engine_count' => 'Количество двигателей',
                '_engine' => 'Двигатель',
                '_apu' => 'Вспомогательная силовая установка',
                '_avionics' => 'Авионика',
                '_width' => 'Ширина',
                '_cabin_length' => 'Длина салона',
                '_cabin_height' => 'Высота салона',
                '_cabin_volume' => 'Объем салона',
                '_luggage_volume' => 'Объём багажного отделения',
                '_plane_length' => 'Длина самолета',
                '_plane_height' => 'Высота самолета',
            ];

            echo '<h2>' . __('Технические характеристики', 'woocommerce') . '</h2>';
            echo '<table class="woocommerce-product-attributes shop_attributes">';
            foreach ($fields as $meta_key => $label) {
                $value = get_post_meta($product->get_id(), $meta_key, true);
                if ($value) {
                    echo '<tr>';
                    echo '<th>' . esc_html($label) . '</th>';
                    echo '<td>' . esc_html($value) . '</td>';
                    echo '</tr>';
                }
            }
            echo '</table>';
        },
    ];

    $tabs['commercial_data'] = [
        'title'    => __('Коммерческие данные', 'woocommerce'),
        'priority' => 50,
        'callback' => function() {
            global $product;

            $fields = [
                '_start_year'          => 'Год начала производства',
                '_end_year'            => 'Год окончания производства',
                '_country_of_origin'   => 'Страна производства',
                '_out_of_production'   => 'Снят с производства',
                '_new_plane_cost'      => 'Стоимость нового самолета ($)',
                '_used_plane_cost'     => 'Стоимость самолета с налетом',
                '_hour_cost'           => 'Себестоимость летного часа',
                '_overhaul_interval'   => 'Интервал капитального ремонта (часов)',
                '_a_check_interval'    => 'Интервал A-Check',
                '_b_check_interval'    => 'Интервал B-Check',
                '_c_check_interval'    => 'Интервал C-Check',
                '_d_check_interval'    => 'Интервал D-Check'
            ];

            echo '<h2>' . __('Коммерческие данные', 'woocommerce') . '</h2>';
            echo '<table class="woocommerce-product-attributes shop_attributes">';
            foreach ($fields as $meta_key => $label) {
                $value = get_post_meta($product->get_id(), $meta_key, true);
                if ($value) {
                    echo '<tr class="woocommerce-product-attributes-item">';
                    echo '<th class="woocommerce-product-attributes-item__label">' . esc_html($label) . '</th>';
                    echo '<td class="woocommerce-product-attributes-item__value">' . esc_html($value) . '</td>';
                    echo '</tr>';
                }
            }
            echo '</table>';
        }
    ];

    return $tabs;
});

