<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


add_action('wp_enqueue_scripts', 'thejet_io_enqueue_styles');
function thejet_io_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}



add_filter('woocommerce_product_data_tabs', function ($tabs) {
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

    $tabs['popular_routes'] = [
        'label'    => __('Популярные направления', 'woocommerce'),
        'target'   => 'popular_routes_options',
        'class'    => ['show_if_simple', 'show_if_variable'],
        'priority' => 15
    ];
    return $tabs;
});

// Main tab
add_action('woocommerce_product_options_general_product_data', 'add_custom_fields_to_main_tab');
function add_custom_fields_to_main_tab()
{
    echo '<div class="options_group">';

    // Add custom fields
    woocommerce_wp_text_input(array(
        'id' => '_custom_field_seats',
        'label' => 'Мест',
        'type' => 'number',
        'desc_tip' => true,
        'description' => 'Укажите количество мест.',
    ));

    woocommerce_wp_text_input(array(
        'id' => '_custom_field_speed',
        'label' => 'Скорость км/ч (m/h)',
        'type' => 'text',
        'desc_tip' => true,
        'description' => 'Укажите скорость.',
    ));

    woocommerce_wp_text_input(array(
        'id' => '_custom_field_range',
        'label' => 'Дальность км (nm)',
        'type' => 'text',
        'desc_tip' => true,
        'description' => 'Укажите дальность.',
    ));

    woocommerce_wp_text_input(array(
        'id' => '_custom_field_bag_volume',
        'label' => 'Объем багажника в м3',
        'type' => 'number',
        'desc_tip' => true,
        'description' => 'Укажите объем багажника.',
    ));

    woocommerce_wp_text_input(array(
        'id' => '_custom_field_suitcases',
        'label' => 'Чемоданов',
        'type' => 'number',
        'desc_tip' => true,
        'description' => 'Укажите количество чемоданов.',
    ));

    woocommerce_wp_text_input(array(
        'id' => '_custom_field_rent_price',
        'label' => 'Цена аренды в $',
        'type' => 'number',
        'desc_tip' => true,
        'description' => 'Укажите цену аренды.',
    ));

    woocommerce_wp_text_input(array(
        'id' => '_custom_yt_id',
        'label' => 'ID видео на Youtube',
        'type' => 'text',
        'desc_tip' => true,
        'description' => 'Укажите последнюю часть ссылки - например, это может быть 1Mh1Rro8IlE. Работает только с Youtube.',
    ));

    // Вкладка "Экстерьер"
    woocommerce_wp_textarea_input([
        'id' => '_gallery_exterior',
        'label' => 'Экстерьер (URLs через запятую)',
        'description' => 'Введите URL изображений для вкладки Экстерьер, разделённые запятыми.',
        'desc_tip' => true,
    ]);

    // Вкладка "Интерьер"
    woocommerce_wp_textarea_input([
        'id' => '_gallery_interior',
        'label' => 'Интерьер (URLs через запятую)',
        'description' => 'Введите URL изображений для вкладки Интерьер, разделённые запятыми.',
        'desc_tip' => true,
    ]);

    // Вкладка "План салона"
    woocommerce_wp_textarea_input([
        'id' => '_gallery_layout',
        'label' => 'План салона (URLs через запятую)',
        'description' => 'Введите URL изображений для вкладки План салона, разделённые запятыми.',
        'desc_tip' => true,
    ]);

    woocommerce_wp_text_input([
        'id' => '_flight_range',
        'label' => __('Дальность полета (км) <b>для подстановки в карту</b>', 'woocommerce'),
        'description' => __('Введите дальность полета в километрах для карты.', 'woocommerce'),
        'type' => 'number',
        'desc_tip' => true,
    ]);

    echo '</div>';
}

// Main tab part 2
add_action('woocommerce_process_product_meta', 'save_custom_fields');
function save_custom_fields($post_id)
{
    // Save each custom field
    $fields = [
        '_custom_field_seats',
        '_custom_field_speed',
        '_custom_field_range',
        '_custom_field_bag_volume',
        '_custom_field_suitcases',
        '_custom_field_rent_price',
        '_custom_yt_id'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}

add_action('woocommerce_process_product_meta', function ($post_id) {
    $fields = ['_gallery_exterior', '_gallery_interior', '_gallery_layout'];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
});

add_action('woocommerce_product_data_panels', function () {
?>
    <div id="commercial_data_options" class="panel woocommerce_options_panel hidden">
        <?php
        $fields = [
            '_start_year'          => 'Год начала производства',
            '_end_year'            => 'Год окончания производства',
            '_country_of_origin'   => 'Страна производства',
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
        <div id="aircraft_features_wrapper">
            <?php
            $features = get_post_meta(get_the_ID(), '_aircraft_features', true);
            $features = is_array($features) ? $features : [];
            foreach ($features as $index => $feature) {
            ?>
                <div class="aircraft-feature">
                    <p>
                        <label><?php _e('Заголовок', 'woocommerce'); ?></label>
                        <input type="text" placeholder="Заголовок" name="_aircraft_features[<?php echo $index; ?>][title]"
                            value="<?php echo esc_attr($feature['title']); ?>" class="short">
                    </p>
                    <p>
                        <label><?php _e('Описание', 'woocommerce'); ?></label>
                        <textarea placeholder="Описание" name="_aircraft_features[<?php echo $index; ?>][description]" class="short"><?php echo esc_textarea($feature['description']); ?></textarea>
                    </p>
                </div>
            <?php
            }
            ?>
            <p>Не забудьте сохранить продукт после внесения изменений.</p>
        </div>
        <button type="button" class="button add_aircraft_feature"><?php _e('Добавить особенность', 'woocommerce'); ?></button>
    </div>
    <script>
        jQuery(function($) {
            $('.add_aircraft_feature').on('click', function() {
                const wrapper = $('#aircraft_features_wrapper');
                const index = wrapper.children('.aircraft-feature').length;
                const html = `
                <div class="aircraft-feature">
                    <p>
                        <label><?php _e('Заголовок', 'woocommerce'); ?></label>
                        <input type="text" placeholder="Заголовок" name="_aircraft_features[${index}][title]" class="short">
                    </p>
                    <p>
                        <label><?php _e('Описание', 'woocommerce'); ?></label>
                        <textarea placeholder="Описание" name="_aircraft_features[${index}][description]" class="short"></textarea>
                    </p>
                </div>
            `;
                wrapper.append(html);
            });
        });
    </script>

    <div id="operating_costs_options" class="panel woocommerce_options_panel hidden">
        <h2><?php _e('Эксплуатационные расходы самолета', 'woocommerce'); ?></h2>

        <!-- Переменные затраты Table -->
        <h3><?php _e('Переменные затраты (USD)/час', 'woocommerce'); ?></h3>
        <div id="variable_costs_table_wrapper">
            <table class="variable-costs-table" style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="border: 1px solid #ccc; padding: 5px;"><?php _e('Переменные затраты (USD)/час', 'woocommerce'); ?></th>
                        <th style="border: 1px solid #ccc; padding: 5px;">200 часов</th>
                        <th style="border: 1px solid #ccc; padding: 5px;">400 часов</th>
                        <th style="border: 1px solid #ccc; padding: 5px;">600 часов</th>
                        <th style="border: 1px solid #ccc; padding: 5px;">800 часов</th>
                        <th style="border: 1px solid #ccc; padding: 5px;"><?php _e('Действие', 'woocommerce'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $variable_costs = get_post_meta(get_the_ID(), '_variable_costs', true);
                    $variable_costs = is_array($variable_costs) ? $variable_costs : [];
                    foreach ($variable_costs as $index => $cost) {
                    ?>
                        <tr>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <input type="text" style="width: 100%;" name="_variable_costs[<?php echo $index; ?>][name]" value="<?php echo esc_attr($cost['name']); ?>" placeholder="Название" class="short">
                            </td>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <input type="text" style="width: 100%;" name="_variable_costs[<?php echo $index; ?>][200]" value="<?php echo esc_attr($cost['200']); ?>" placeholder="200 часов" class="short">
                            </td>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <input type="text" style="width: 100%;" name="_variable_costs[<?php echo $index; ?>][400]" value="<?php echo esc_attr($cost['400']); ?>" placeholder="400 часов" class="short">
                            </td>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <input type="text" style="width: 100%;" name="_variable_costs[<?php echo $index; ?>][600]" value="<?php echo esc_attr($cost['600']); ?>" placeholder="600 часов" class="short">
                            </td>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <input type="text" style="width: 100%;" name="_variable_costs[<?php echo $index; ?>][800]" value="<?php echo esc_attr($cost['800']); ?>" placeholder="800 часов" class="short">
                            </td>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <button type="button" class="button remove-cost-row"><?php _e('Удалить', 'woocommerce'); ?></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button type="button" class="button add-variable-cost-row"><?php _e('Добавить строку', 'woocommerce'); ?></button>
        </div>

        <!-- Постоянные затраты Table -->
        <h3><?php _e('Постоянные затраты', 'woocommerce'); ?></h3>
        <div id="fixed_costs_table_wrapper">
            <table class="fixed-costs-table" style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="border: 1px solid #ccc; padding: 5px;"><?php _e('Постоянные затраты', 'woocommerce'); ?></th>
                        <th style="border: 1px solid #ccc; padding: 5px;">200 часов</th>
                        <th style="border: 1px solid #ccc; padding: 5px;">400 часов</th>
                        <th style="border: 1px solid #ccc; padding: 5px;">600 часов</th>
                        <th style="border: 1px solid #ccc; padding: 5px;">800 часов</th>
                        <th style="border: 1px solid #ccc; padding: 5px;"><?php _e('Действие', 'woocommerce'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $fixed_costs = get_post_meta(get_the_ID(), '_fixed_costs', true);
                    $fixed_costs = is_array($fixed_costs) ? $fixed_costs : [];
                    foreach ($fixed_costs as $index => $cost) {
                    ?>
                        <tr>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <input type="text" name="_fixed_costs[<?php echo $index; ?>][name]" value="<?php echo esc_attr($cost['name']); ?>" placeholder="Название" class="short">
                            </td>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <input type="text" name="_fixed_costs[<?php echo $index; ?>][200]" value="<?php echo esc_attr($cost['200']); ?>" placeholder="200 часов" class="short">
                            </td>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <input type="text" name="_fixed_costs[<?php echo $index; ?>][400]" value="<?php echo esc_attr($cost['400']); ?>" placeholder="400 часов" class="short">
                            </td>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <input type="text" name="_fixed_costs[<?php echo $index; ?>][600]" value="<?php echo esc_attr($cost['600']); ?>" placeholder="600 часов" class="short">
                            </td>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <input type="text" name="_fixed_costs[<?php echo $index; ?>][800]" value="<?php echo esc_attr($cost['800']); ?>" placeholder="800 часов" class="short">
                            </td>
                            <td style="border: 1px solid #ccc; padding: 5px;">
                                <button type="button" class="button remove-cost-row"><?php _e('Удалить', 'woocommerce'); ?></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button type="button" class="button add-fixed-cost-row"><?php _e('Добавить строку', 'woocommerce'); ?></button>
        </div>
    </div>

    <script>
        jQuery(function($) {
            // Add and remove rows dynamically for variable costs.
            $('.add-variable-cost-row').on('click', function() {
                const wrapper = $('.variable-costs-table tbody');
                const index = wrapper.children('tr').length;
                const rowHtml = `
                <tr>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <input type="text" style="width: 100%;" name="_variable_costs[${index}][name]" placeholder="Название" class="short">
                    </td>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <input type="text" style="width: 100%;" name="_variable_costs[${index}][200]" placeholder="200 часов" class="short">
                    </td>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <input type="text" style="width: 100%;" name="_variable_costs[${index}][400]" placeholder="400 часов" class="short">
                    </td>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <input type="text" style="width: 100%;" name="_variable_costs[${index}][600]" placeholder="600 часов" class="short">
                    </td>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <input type="text" style="width: 100%;" name="_variable_costs[${index}][800]" placeholder="800 часов" class="short">
                    </td>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <button type="button" class="button remove-cost-row"><?php _e('Удалить', 'woocommerce'); ?></button>
                    </td>
                </tr>`;
                wrapper.append(rowHtml);
            });

            // Add and remove rows dynamically for fixed costs.
            $('.add-fixed-cost-row').on('click', function() {
                const wrapper = $('.fixed-costs-table tbody');
                const index = wrapper.children('tr').length;
                const rowHtml = `
                <tr>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <input type="text" name="_fixed_costs[${index}][name]" placeholder="Название" class="short">
                    </td>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <input type="text" name="_fixed_costs[${index}][200]" placeholder="200 часов" class="short">
                    </td>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <input type="text" name="_fixed_costs[${index}][400]" placeholder="400 часов" class="short">
                    </td>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <input type="text" name="_fixed_costs[${index}][600]" placeholder="600 часов" class="short">
                    </td>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <input type="text" name="_fixed_costs[${index}][800]" placeholder="800 часов" class="short">
                    </td>
                    <td style="border: 1px solid #ccc; padding: 5px;">
                        <button type="button" class="button remove-cost-row"><?php _e('Удалить', 'woocommerce'); ?></button>
                    </td>
                </tr>`;
                wrapper.append(rowHtml);
            });

            // Remove rows from either table.
            $(document).on('click', '.remove-cost-row', function() {
                $(this).closest('tr').remove();
            });
        });
    </script>

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


    <div id="popular_routes_options" class="panel woocommerce_options_panel hidden">
        <h2><?php _e('Популярные направления', 'woocommerce'); ?></h2>
        <div id="popular_routes_wrapper">
            <?php
            $routes = get_post_meta(get_the_ID(), '_popular_routes', true);
            $routes = is_array($routes) ? $routes : [];
            foreach ($routes as $index => $route) {
            ?>
                <div class="route-item">
                    <p>
                        <label><?php _e('Город (откуда)', 'woocommerce'); ?></label>
                        <input type="text" placeholder="Москва" name="_popular_routes[<?php echo $index; ?>][from_city]"
                            value="<?php echo esc_attr($route['from_city'] ?? ''); ?>" class="short">
                    </p>
                    <p>
                        <label><?php _e('Город (куда)', 'woocommerce'); ?></label>
                        <input type="text" placeholder="Дубай" name="_popular_routes[<?php echo $index; ?>][to_city]"
                            value="<?php echo esc_attr($route['to_city'] ?? ''); ?>" class="short">
                    </p>
                    <p>
                        <label><?php _e('Дальность полёта (км)', 'woocommerce'); ?></label>
                        <input type="number" placeholder="4500" name="_popular_routes[<?php echo $index; ?>][distance]"
                            value="<?php echo esc_attr($route['distance'] ?? ''); ?>" class="short">
                    </p>
                    <p>
                        <label><?php _e('Время полёта (пример - 05:35)', 'woocommerce'); ?></label>
                        <input type="text" placeholder="05:35" name="_popular_routes[<?php echo $index; ?>][time]"
                            value="<?php echo esc_attr($route['time'] ?? ''); ?>" class="short">
                    </p>
                    <p>
                        <label><?php _e('Стоимость и валюта (пример - 10 000 USD)', 'woocommerce'); ?></label>
                        <input type="text" placeholder="10 000 USD" name="_popular_routes[<?php echo $index; ?>][cost]"
                            value="<?php echo esc_attr($route['cost'] ?? ''); ?>" class="short">
                    </p>
                    <button type="button" class="button remove-route-button"><?php _e('Удалить направление', 'woocommerce'); ?></button>
                </div>
            <?php
            }
            ?>
        </div>
        <button type="button" class="button add_route_button"><?php _e('Добавить направление', 'woocommerce'); ?></button>
    </div>
    <script>
        jQuery(function($) {
            // Add new route
            $('.add_route_button').on('click', function() {
                const wrapper = $('#popular_routes_wrapper');
                const index = wrapper.children('.route-item').length;
                const html = `
                <div class="route-item">
                    <p>
                        <label><?php _e('Город (откуда)', 'woocommerce'); ?></label>
                        <input type="text" placeholder="Москва" name="_popular_routes[${index}][from_city]" class="short">
                    </p>
                    <p>
                        <label><?php _e('Город (куда)', 'woocommerce'); ?></label>
                        <input type="text" placeholder="Дубай" name="_popular_routes[${index}][to_city]" class="short">
                    </p>
                    <p>
                        <label><?php _e('Дальность полёта (км)', 'woocommerce'); ?></label>
                        <input type="number" placeholder="4500" name="_popular_routes[${index}][distance]" class="short">
                    </p>
                    <p>
                        <label><?php _e('Время полёта (пример - 05:35)', 'woocommerce'); ?></label>
                        <input type="text" placeholder="05:35" name="_popular_routes[${index}][time]" class="short">
                    </p>
                    <p>
                        <label><?php _e('Стоимость и валюта (пример - 10 000 USD)', 'woocommerce'); ?></label>
                        <input type="text" placeholder="10 000 USD" name="_popular_routes[${index}][cost]" class="short">
                    </p>
                    <button type="button" class="button remove-route-button"><?php _e('Удалить направление', 'woocommerce'); ?></button>
                </div>
                `;
                wrapper.append(html);
            });

            // Remove route
            $(document).on('click', '.remove-route-button', function() {
                $(this).closest('.route-item').remove();
            });
        });
    </script>
<?php
});

add_action('woocommerce_process_product_meta', function ($post_id) {
    if (isset($_POST['_aircraft_features']) && is_array($_POST['_aircraft_features'])) {
        $features = array_map(function ($feature) {
            return [
                'title' => sanitize_text_field($feature['title'] ?? ''),
                'description' => sanitize_textarea_field($feature['description'] ?? ''),
            ];
        }, $_POST['_aircraft_features']);

        update_post_meta($post_id, '_aircraft_features', $features);
    } else {
        delete_post_meta($post_id, '_aircraft_features'); // Remove if empty.
    }

    if (isset($_POST['_popular_routes'])) {
        $routes = array_map(function ($route) {
            return [
                'from_city' => sanitize_text_field($route['from_city'] ?? ''),
                'to_city' => sanitize_text_field($route['to_city'] ?? ''),
                'distance' => sanitize_text_field($route['distance'] ?? ''),
                'time' => sanitize_text_field($route['time'] ?? ''),
                'cost' => sanitize_text_field($route['cost'] ?? ''),
            ];
        }, $_POST['_popular_routes']);
        update_post_meta($post_id, '_popular_routes', $routes);
    }

    // Save variable costs.
    if (isset($_POST['_variable_costs']) && is_array($_POST['_variable_costs'])) {
        $variable_costs = [];
        foreach ($_POST['_variable_costs'] as $cost) {
            $variable_costs[] = [
                'name' => sanitize_text_field($cost['name'] ?? ''),
                '200'  => sanitize_text_field($cost['200'] ?? ''),
                '400'  => sanitize_text_field($cost['400'] ?? ''),
                '600'  => sanitize_text_field($cost['600'] ?? ''),
                '800'  => sanitize_text_field($cost['800'] ?? ''),
            ];
        }
        update_post_meta($post_id, '_variable_costs', $variable_costs);
    } else {
        delete_post_meta($post_id, '_variable_costs'); // Remove if empty.
    }

    // Save fixed costs.
    if (isset($_POST['_fixed_costs']) && is_array($_POST['_fixed_costs'])) {
        $fixed_costs = [];
        foreach ($_POST['_fixed_costs'] as $cost) {
            $fixed_costs[] = [
                'name' => sanitize_text_field($cost['name'] ?? ''),
                '200'  => sanitize_text_field($cost['200'] ?? ''),
                '400'  => sanitize_text_field($cost['400'] ?? ''),
                '600'  => sanitize_text_field($cost['600'] ?? ''),
                '800'  => sanitize_text_field($cost['800'] ?? ''),
            ];
        }
        update_post_meta($post_id, '_fixed_costs', $fixed_costs);
    } else {
        delete_post_meta($post_id, '_fixed_costs'); // Remove if empty.
    }

    if (isset($_POST['_flight_range'])) {
        update_post_meta($post_id, '_flight_range', sanitize_text_field($_POST['_flight_range']));
    }

    $fields = [
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

add_filter('woocommerce_product_tabs', function ($tabs) {
    $tabs['aircraft_features'] = [
        'title'    => __('Особенности самолета', 'woocommerce'),
        'priority' => 30,
        'callback' => function () {
            global $product;
            $features = get_post_meta($product->get_id(), '_aircraft_features', true);

            if (!empty($features) && is_array($features)) {
                echo '<h2>' . __('Особенности самолета', 'woocommerce') . '</h2>';
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
        },
    ];

    $tabs['operating_costs'] = [
        'title'    => __('Эксплуатационные расходы самолета', 'woocommerce'),
        'priority' => 40,
        'callback' => function () {
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
        'callback' => function () {
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
        'callback' => function () {
            global $product;

            $fields = [
                '_start_year'          => 'Год начала производства',
                '_end_year'            => 'Год окончания производства',
                '_country_of_origin'   => 'Страна производства',
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
