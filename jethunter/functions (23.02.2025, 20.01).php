<?php

// carbon start

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});

add_action('carbon_fields_register_fields', function () {
    Container::make('post_meta', 'Параметры для покупки')
        ->where('post_type', '=', 'product')
        ->where('post_type', 'IN', ['product'])
        ->add_fields([
            Field::make('text', 'price', 'Цена'),
            Field::make('text', 'mileage', 'Налет (часы)'),
        ]);
});

add_action('carbon_fields_register_fields', function () {
    Container::make('post_meta', 'Время чтения')
        ->where('post_type', '=', 'post')
        ->add_fields([
            Field::make('text', 'reading_time')
                ->set_help_text('Напишите время чтения в минутах (например, 5)'),
        ]);
});

add_action('carbon_fields_register_fields', function () {
    $planes_fields = [
        Field::make('text', 'title', 'Название самолета')->set_required(true),
        Field::make('image', 'image', 'Изображение')->set_required(true),
        Field::make('text', 'origin_country', 'Страна вылета')->set_required(true),
        Field::make('text', 'origin_code', 'Код аэропорта вылета')->set_required(true),
        Field::make('text', 'origin_city', 'Город вылета')->set_required(true),
        Field::make('text', 'destination_country', 'Страна прилета')->set_required(true),
        Field::make('text', 'destination_code', 'Код аэропорта прилета')->set_required(true),
        Field::make('text', 'destination_city', 'Город прилета')->set_required(true),
        Field::make('date_time', 'flight_date', 'Дата и время вылета')->set_required(true),
        Field::make('text', 'seats', 'Количество мест')->set_required(true),
        Field::make('text', 'price', 'Цена в USD')->set_required(true),
    ];

    Container::make('post_meta', 'Пустые перелёты')
        ->where('post_template', '=', 'page-empty-legs.php')
        ->add_fields([
            Field::make('complex', 'planes', 'Список самолетов')->add_fields($planes_fields),
        ]);

    Container::make('post_meta', 'Empty legs')
        ->where('post_template', '=', 'page-empty-legs-en.php')
        ->add_fields([
            Field::make('complex', 'planes', 'Список самолетов')->add_fields($planes_fields),
        ]);

    Container::make('post_meta', 'Отзывы')
        ->where('post_template', '=', 'page-reviews.php')
        ->add_fields([
            Field::make('complex', 'reviews', 'Отзывы')
                ->add_fields([
                    Field::make('text', 'rate', 'Рейтинг')->set_attribute('type', 'number')->set_attribute('step', '0.1'),
                    Field::make('text', 'author', 'Автор'),
                    Field::make('textarea', 'text', 'Текст отзыва'),
                    Field::make('text', 'date', 'Дата')->set_attribute('type', 'date'),
                    Field::make('set', 'review_type', 'Тип отзыва')
                        ->add_options([
                            'rent' => 'Об аренде',
                            'purchase' => 'О покупке',
                        ])
                ])
        ]);

    Container::make('post_meta', 'Отзывы')
        ->where('post_template', '=', 'page-reviews-en.php')
        ->add_fields([
            Field::make('complex', 'reviews', 'Отзывы')
                ->add_fields([
                    Field::make('text', 'rate', 'Рейтинг')->set_attribute('type', 'number')->set_attribute('step', '0.1'),
                    Field::make('text', 'author', 'Автор'),
                    Field::make('textarea', 'text', 'Текст отзыва'),
                    Field::make('text', 'date', 'Дата')->set_attribute('type', 'date'),
                    Field::make('set', 'review_type', 'Тип отзыва')
                        ->add_options([
                            'rent' => 'Об аренде',
                            'purchase' => 'О покупке',
                        ])
                ])
        ]);


    Container::make('post_meta', 'О услугах')
    ->where('post_template', '=', 'page-about-services.php')
    ->add_fields([
        Field::make('text', 'heading', 'Главный заголовок'),
        Field::make('textarea', 'description', 'Описание услуги'),
        Field::make('text', 'features_heading_1', 'Заголовок преимуществ'),
        Field::make('complex', 'features_complex_1', 'Преимущества')
        ->add_fields([
            Field::make('text', 'features_number', 'Номер преимущества'),
            Field::make('text', 'features_name', 'Заголовок'),
            Field::make('textarea', 'features_text', 'Описание'),
        ]),
        Field::make('text', 'features_heading_2', 'Заголовок шагов'),
        Field::make('complex', 'features_complex_2', 'Шаги')
        ->add_fields([
            Field::make('text', 'features_number', 'Номер шага'),
            Field::make('text', 'features_name', 'Заголовок'),
            Field::make('textarea', 'features_text', 'Описание'),
        ])
    ]);

    Container::make('post_meta', 'About services')
    ->where('post_template', '=', 'page-about-services-en.php')
    ->add_fields([
        Field::make('text', 'heading', 'Главный заголовок'),
        Field::make('textarea', 'description', 'Описание услуги'),
        Field::make('text', 'features_heading_1', 'Заголовок преимуществ'),
        Field::make('complex', 'features_complex_1', 'Преимущества')
        ->add_fields([
            Field::make('text', 'features_number', 'Номер преимущества'),
            Field::make('text', 'features_name', 'Заголовок'),
            Field::make('textarea', 'features_text', 'Описание'),
        ]),
        Field::make('text', 'features_heading_2', 'Заголовок шагов'),
        Field::make('complex', 'features_complex_2', 'Шаги')
        ->add_fields([
            Field::make('text', 'features_number', 'Номер шага'),
            Field::make('text', 'features_name', 'Заголовок'),
            Field::make('textarea', 'features_text', 'Описание'),
        ])
    ]);
});
// carbon end

// phone number in header start
function get_phone_number()
{
    $apiKey = '9bbf93c81405e0';

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $userIp = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $userIp = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    } else {
        $userIp = $_SERVER['REMOTE_ADDR'];
    }

    $response = wp_remote_get("https://ipinfo.io/{$userIp}/json?token={$apiKey}");

    if (is_wp_error($response)) {
        wp_send_json_error(['message' => 'Error fetching IP info']);
    }

    $data = json_decode(wp_remote_retrieve_body($response), true);

    if (!$data || empty($data['country'])) {
        wp_send_json_error(['message' => 'Invalid response from IPInfo']);
    }

    $phoneNumbers = [
        "KZ" => "+7 (727) 357-46-65",
        "UZ" => "+998 (712) 05-08-39",
        "RU" => "+7 (499) 285-50-55",
        "default" => "+44 (203) 318-05-36"
    ];

    $formattedPhone = $phoneNumbers[$data['country']] ?? $phoneNumbers['default'];
    $cleanPhone = preg_replace('/[^+\d]/', '', $formattedPhone);

    wp_send_json_success([
        'country' => $data['country'],
        'formatted' => $formattedPhone,
        'clean' => $cleanPhone
    ]);
}

add_action('wp_ajax_get_phone_number', 'get_phone_number');
add_action('wp_ajax_nopriv_get_phone_number', 'get_phone_number');
// phone number in header end

// views in articles start
function gt_get_post_view()
{
    $count = get_post_meta(get_the_ID(), 'post_views_count', true);
    return "$count";
}

function gt_set_post_view()
{
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta($post_id, $key, true);
    $count++;
    update_post_meta($post_id, $key, $count);
}

function gt_posts_column_views($columns)
{
    $columns['post_views'] = 'Views';
    return $columns;
}

function gt_posts_custom_column_views($column)
{
    if ($column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter('manage_posts_columns', 'gt_posts_column_views');
add_action('manage_posts_custom_column', 'gt_posts_custom_column_views');
// views in articles end

// styles start
add_action('wp_enqueue_scripts', 'thejet_io_enqueue_styles');
function thejet_io_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css?2');
}
// styles end


// file upload start
add_filter('upload_mimes', function ($mimes) {
    $mimes['pdf'] = 'application/pdf';
    $mimes['docx'] = 'application/docx';
    $mimes['jpg'] = 'image/jpeg';
    $mimes['png'] = 'image/png';
    return $mimes;
});

add_action('post_edit_form_tag', function () {
    echo ' enctype="multipart/form-data"';
});
// file upload end

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

// plane comparison start
// handle adding a plane to comparison
function add_to_comparison()
{
    if (!isset($_POST['plane_id'])) {
        wp_send_json_error(['message' => 'No plane ID provided']);
    }

    $plane_id = intval($_POST['plane_id']);
    $user_id = get_current_user_id();

    error_log("Adding plane ID: $plane_id for user $user_id");

    $planes = get_user_meta($user_id, 'comparison_planes', true) ?: [];

    if (!in_array($plane_id, $planes)) {
        $planes[] = $plane_id;
        update_user_meta($user_id, 'comparison_planes', $planes);
    }

    wp_send_json_success(['planes' => $planes]);
}
add_action('wp_ajax_add_to_comparison', 'add_to_comparison');
add_action('wp_ajax_nopriv_add_to_comparison', 'add_to_comparison');

// handle removing a plane
function remove_from_comparison()
{
    if (!isset($_POST['plane_id'])) {
        wp_send_json_error(['message' => 'No plane ID provided']);
    }

    $plane_id = intval($_POST['plane_id']);
    $user_id = get_current_user_id();
    $planes = get_user_meta($user_id, 'comparison_planes', true) ?: [];

    if (($key = array_search($plane_id, $planes)) !== false) {
        unset($planes[$key]);
        update_user_meta($user_id, 'comparison_planes', array_values($planes));
    }

    wp_send_json_success(['planes' => $planes]);
}
add_action('wp_ajax_remove_from_comparison', 'remove_from_comparison');
add_action('wp_ajax_nopriv_remove_from_comparison', 'remove_from_comparison');

// get compared planes
function get_comparison_planes()
{
    $user_id = get_current_user_id();
    $planes = get_user_meta($user_id, 'comparison_planes', true) ?: [];

    error_log("Сравниваемые самолёты: " . json_encode($planes));
    wp_send_json_success(['planes' => $planes]);
}
add_action('wp_ajax_get_comparison_planes', 'get_comparison_planes');
add_action('wp_ajax_nopriv_get_comparison_planes', 'get_comparison_planes');
function allow_woocommerce_rest_access()
{
    add_filter('woocommerce_rest_check_permissions', function ($permission, $context, $object_id, $post_type) {
        if ($post_type === 'product' && $context === 'read') {
            return true;
        }
        return $permission;
    }, 10, 4);
}
add_action('init', 'allow_woocommerce_rest_access');
// plane comparison end


// получаем характеристики самолёта
function get_plane_specs($post_id)
{
    return [
        'Мест' => get_post_meta($post_id, '_custom_field_seats', true),
        // 'Скорость км/ч (m/h)' => get_post_meta($post_id, '_custom_field_speed', true),
        // 'Дальность км (nm)' => get_post_meta($post_id, '_custom_field_range', true),
        'Объем багажника в м³' => get_post_meta($post_id, '_custom_field_bag_volume', true),
        'Чемоданов' => get_post_meta($post_id, '_custom_field_suitcases', true),
        'Цена аренды в $' => get_post_meta($post_id, '_custom_field_rent_price', true),
        'Крейсерская скорость' => get_post_meta($post_id, '_cruising_speed', true),
        'Время в полете, скорость' => get_post_meta($post_id, '_flight_time', true),
        'Максимальная высота полета' => get_post_meta($post_id, '_max_altitude', true),
        'Максимальный взлетный вес' => get_post_meta($post_id, '_max_takeoff_weight', true),
        'Посадочный вес' => get_post_meta($post_id, '_landing_weight', true),
        'Грузоподъемность' => get_post_meta($post_id, '_payload', true),
        'Взлетная дистанция' => get_post_meta($post_id, '_takeoff_distance', true),
        'Посадочная дистанция' => get_post_meta($post_id, '_landing_distance', true),
        'Количество двигателей' => get_post_meta($post_id, '_engine_count', true),
        'Двигатель' => get_post_meta($post_id, '_engine', true),
        'Вспомогательная силовая установка' => get_post_meta($post_id, '_apu', true),
        'Авионика' => get_post_meta($post_id, '_avionics', true),
        'Ширина' => get_post_meta($post_id, '_width', true),
        'Длина салона' => get_post_meta($post_id, '_cabin_length', true),
        'Высота салона' => get_post_meta($post_id, '_cabin_height', true),
        'Объем салона' => get_post_meta($post_id, '_cabin_volume', true),
        'Объём багажного отделения' => get_post_meta($post_id, '_luggage_volume', true),
        'Длина самолета' => get_post_meta($post_id, '_plane_length', true),
        'Высота самолета' => get_post_meta($post_id, '_plane_height', true),
    ];
}

// обрабатываем AJAX-запрос для получения данных самолёта
function compare_planes_callback()
{
    if (!isset($_POST['compare_planes'])) {
        wp_send_json_error('Ошибка: не передан ID самолёта');
    }

    $plane_id = intval($_POST['compare_planes']);
    $plane_specs = get_plane_specs($plane_id);

    $plane_data = [
        'id' => $plane_id,
        'name' => get_the_title($plane_id),
        'image' => get_the_post_thumbnail_url($plane_id, 'full') ?: '',
        'category' => get_the_terms($plane_id, 'product_cat')[0]->name ?? '—',
        'price' => get_post_meta($plane_id, '_price', true) ?: '—',
        'specs' => $plane_specs
    ];

    wp_send_json_success($plane_data);
}
add_action('wp_ajax_compare_planes', 'compare_planes_callback');
add_action('wp_ajax_nopriv_compare_planes', 'compare_planes_callback');



// main tab start
add_action('woocommerce_product_options_general_product_data', 'add_custom_fields_to_main_tab');
function add_custom_fields_to_main_tab()
{
    echo '<div class="options_group">';

    
    $json_file = WP_CONTENT_DIR . '/uploads/airports.json'; // путь к JSON

    if (!file_exists($json_file)) {
        echo '<p style="color: red;">Файл аэропортов не найден!</p>';
        return;
    }

    // Загружаем JSON с аэропортами
    $airports = json_decode(file_get_contents($json_file), true);

    if (!$airports) {
        echo '<p style="color: red;">Ошибка загрузки данных аэропортов!</p>';
        return;
    }

    // Загружаем сохранённое значение
    global $post;
    $selected_airport = get_post_meta($post->ID, '_airport_base', true);

    // Формируем список аэропортов
    $airport_options = ['' => 'Выберите аэропорт'];
    foreach ($airports as $airport) {
        $label = "{$airport['iata_code']}, {$airport['country_ru']}, {$airport['name_ru']} ";
        $airport_options[$airport['icao_code']] = $label;
    }

    // Добавляем поле в админке
    woocommerce_wp_select([
        'id'      => '_airport_base',
        'label'   => 'Базовый аэропорт',
        'options' => $airport_options,
        'desc_tip' => true,
        'description' => 'Выберите, где базируется самолёт',
        'value'   => $selected_airport,
    ]);

    // выпадающий список для выбора категории самолёта
    woocommerce_wp_select([
        'id'      => '_db_category',
        'label'   => __('Категория самолёта', 'woocommerce'),
        'options' => [
            ''            => __('Общая карточка самолёта', 'woocommerce'),
            'for_sale'    => __('Самолёт на продажу', 'woocommerce'),
            'for_rent'    => __('Самолёт в аренду', 'woocommerce'),
        ],
    ]);

    // Add custom fields
    echo '<p class="form-field">
        <label for="_custom_file_url">' . __('Загрузка PDF-брошюры', 'woocommerce') . '</label>
        <input type="file" id="_custom_file_url" name="_custom_file_url">
        <span class="description">' . __('Загрузите файл к этому самолёту.', 'woocommerce') . '</span>
    </p>';

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

// Main tab part 2 start
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

    if (isset($_POST['_airport_base'])) {
        update_post_meta($post_id, '_airport_base', sanitize_text_field($_POST['_airport_base']));
    }
}

add_action('woocommerce_process_product_meta', function ($post_id) {
    $fields = ['_gallery_exterior', '_gallery_interior', '_gallery_layout'];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }

    error_log("Загрузка файла началась для товара ID: " . $post_id);

    if (!empty($_FILES['_custom_file_url']['name'])) {
        require_once ABSPATH . 'wp-admin/includes/file.php';

        $upload_overrides = ['test_form' => false];
        $uploaded_file = wp_handle_upload($_FILES['_custom_file_url'], $upload_overrides);

        if ($uploaded_file && !isset($uploaded_file['error'])) {
            update_post_meta($post_id, '_custom_file_url', $uploaded_file['url']);
            error_log("Файл успешно загружен: " . $uploaded_file['url']);
        } else {
            error_log("Ошибка загрузки файла: " . print_r($uploaded_file, true));
        }
    } else {
        error_log("Файл не был загружен — массив \$_FILES пуст.");
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

        echo '<div id="aircraft_common_fields">';
        foreach ($fields as $id => $label) {
            woocommerce_wp_text_input([
                'id'          => $id,
                'label'       => __($label, 'woocommerce'),
                'description' => __('Введите значение для ' . $label, 'woocommerce'),
                'desc_tip'    => true,
            ]);
        }
        echo '</div>';

        // поля для продажи
        echo '<div id="db_sale_fields" style="display: none;">';
        woocommerce_wp_text_input([
            'id'          => '_sale_price',
            'label'       => __('Цена продажи ($)', 'woocommerce'),
            'description' => __('Укажите цену самолёта для продажи', 'woocommerce'),
            'desc_tip'    => true,
        ]);
        woocommerce_wp_text_input([
            'id'          => '_sale_year',
            'label'       => __('Год выпуска', 'woocommerce'),
            'description' => __('Год выпуска самолёта', 'woocommerce'),
            'desc_tip'    => true,
        ]);
        echo '</div>';

        // поля для аренды
        echo '<div id="db_rent_fields" style="display: none;">';
        woocommerce_wp_text_input([
            'id'          => '_rental_price',
            'label'       => __('Цена аренды ($)', 'woocommerce'),
            'description' => __('Укажите цену аренды самолёта', 'woocommerce'),
            'desc_tip'    => true,
        ]);
        woocommerce_wp_text_input([
            'id'          => '_rental_period',
            'label'       => __('Срок аренды', 'woocommerce'),
            'description' => __('Укажите срок аренды (дни, месяцы и т. д.)', 'woocommerce'),
            'desc_tip'    => true,
        ]);
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

// сохранение данных
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
        '_db_category',
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

add_action('admin_footer', function () {
    if ('product' !== get_post_type()) return;
?>
    <script>
        jQuery(function($) {
            function toggleFields() {
                var category = $('#_db_category').val();
                $('#db_sale_fields').hide();
                $('#db_rent_fields').hide();

                if (category === 'for_sale') {
                    $('#db_sale_fields').show();
                } else if (category === 'for_rent') {
                    $('#db_rent_fields').show();
                }
            }

            $('#_db_category').change(toggleFields);
            toggleFields();
        });
    </script>
<?php
});
