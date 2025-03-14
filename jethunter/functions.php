<?php

// carbon start

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function () {
    Container::make('post_meta', 'Параметры самолёта')
        ->where('post_type', '=', 'product')
        ->add_fields([
            Field::make('file', 'aircraft_json', 'Файл JSON')
                ->set_type('application/json')
                ->set_value_type('url')
                ->set_help_text('Загрузите JSON с характеристиками самолёта.'),

            Field::make('select', 'aircraft_category', 'Категория самолёта')
                ->set_options([
                    'encyclopedia' => 'Энциклопедия',
                    'buy' => 'Покупка',
                    'rent' => 'Аренда',
                ])
                ->set_required(true),


            Field::make('text', 'aircraft_model', 'Модель'),

            Field::make('text', 'aircraft_type', 'Тип'),
            Field::make('text', 'aircraft_type_en', 'EN Тип'),

            Field::make('text', 'aircraft_cat', 'Категория'),
            Field::make('text', 'aircraft_cat_en', 'EN Категория'),

            Field::make('text', 'aircraft_make', 'Производитель'),

            Field::make('text', 'id_number_buy', 'Идентификационный номер, покупка')
                ->set_conditional_logic([
                    ['field' => 'aircraft_category', 'value' => 'buy', 'compare' => '='],
                ]),

            Field::make('text', 'id_number_rent', 'Идентификационный номер, аренда')
                ->set_conditional_logic([
                    ['field' => 'aircraft_category', 'value' => 'rent', 'compare' => '='],
                ]),

            Field::make('text', 'purchase_price', 'Цена покупки')
                ->set_conditional_logic([
                    ['field' => 'aircraft_category', 'value' => 'buy', 'compare' => '='],
                ]),

            Field::make('text', 'rental_price', 'Цена аренды')
                ->set_conditional_logic([
                    ['field' => 'aircraft_category', 'value' => 'rent', 'compare' => '='],
                ]),

            Field::make('text', 'rental_period', 'Срок аренды')
                ->set_conditional_logic([
                    ['field' => 'aircraft_category', 'value' => 'rent', 'compare' => '='],
                ]),

            Field::make('text', 'cruise_speed_kmh', 'Крейсерская скорость (км/ч)'),
            Field::make('text', 'cruise_speed_mph', 'Крейсерская скорость (миль/ч)'),

            Field::make('text', 'range_km', 'Дальность (км)'),
            Field::make('text', 'range_miles', 'Дальность (миль)'),

            Field::make('text', 'range_time', 'Время в полете'),

            Field::make('text', 'production_start', 'Год начала производства'),
            Field::make('text', 'production_end', 'Год окончания производства'),
            Field::make('text', 'production_country', 'Страна производства'),
            Field::make('text', 'production_country_en', 'EN Страна производства'),
            Field::make('text', 'aircraft_new_cost', 'Стоимость нового самолета ($)'),
            Field::make('text', 'aircraft_used_cost', 'Стоимость самолета с налетом ($)'),
            Field::make('text', 'aircraft_hour_cost', 'Себестоимость летного часа ($)'),
            Field::make('text', 'hsi', 'Инспекция горячей части (HSI) (часов)'),
            Field::make('text', 'interval_total_repair', 'Интервал капитального ремонта (часов)'),
            Field::make('text', 'interval_a_check', 'Интервал A-Check'),
            Field::make('text', 'interval_b_check', 'Интервал B-Check'),
            Field::make('text', 'interval_c_check', 'Интервал C-Check'),
            Field::make('text', 'interval_d_check', 'Интервал D-Check'),

            Field::make('text', 'max_takeoff_height_m', 'Максимальная высота полета (м)'),
            Field::make('text', 'max_takeoff_height_ft', 'Максимальная высота полета (ft)'),

            Field::make('text', 'max_takeoff_weight_kg', 'Максимальный взлетный вес (кг)'),
            Field::make('text', 'max_takeoff_weight_lbs', 'Максимальный взлетный вес (фунты)'),

            Field::make('text', 'max_landing_weight_kg', 'Посадочный вес (кг)'),
            Field::make('text', 'max_landing_weight_lbs', 'Посадочный вес (lb)'),

            Field::make('text', 'max_landing_height_kg', 'Грузоподъемность (кг)'),
            Field::make('text', 'max_landing_height_lbs', 'Грузоподъемность (lb)'),

            Field::make('text', 'takeoff_distance_m', 'Взлетная дистанция (м)'),
            Field::make('text', 'takeoff_distance_ft', 'Взлетная дистанция (ft)'),

            Field::make('text', 'landing_distance_m', 'Посадочная дистанция (м)'),
            Field::make('text', 'landing_distance_ft', 'Посадочная дистанция (ft)'),

            Field::make('text', 'aircraft_engine_count', 'Количество двигателей'),

            Field::make('text', 'aircraft_engine', 'Двигатель'),

            Field::make('text', 'vsu', 'Вспомогательная силовая установка (ВСУ)'),

            Field::make('text', 'avionics', 'Авионика'),

            Field::make('text', 'propeller', 'Пропеллер'),

            Field::make('text', 'aircraft_seats', 'Количество мест'),

            Field::make('text', 'cabin_width_m', 'Ширина салона (м)'),
            Field::make('text', 'cabin_width_ft', 'Ширина салона (футы)'),

            Field::make('text', 'cabin_height_m', 'Высота салона (м)'),
            Field::make('text', 'cabin_height_ft', 'Высота салона (футы)'),

            Field::make('text', 'cabin_length_m', 'Длина салона (м)'),
            Field::make('text', 'cabin_length_ft', 'Длина салона (ft)'),

            Field::make('text', 'cabin_volume_m', 'Объем салона (куб.м)'),
            Field::make('text', 'cabin_volume_ft', 'Объем салона (cu ft)'),

            Field::make('text', 'luggage_volume_m', 'Объём багажного отделения (куб.м)'),
            Field::make('text', 'luggage_volume_ft', 'Объём багажного отделения (cu ft)'),

            Field::make('text', 'luggage_number', 'Количество чемоданов'),

            Field::make('text', 'aircraft_length_m', 'Длина самолета (м)'),
            Field::make('text', 'aircraft_length_ft', 'Длина самолета (ft)'),

            Field::make('text', 'aircraft_height_m', 'Высота самолета (м)'),
            Field::make('text', 'aircraft_height_ft', 'Высота самолета (ft)'),

            Field::make('text', 'aircraft_wing_length_m', 'Размах крыла (м)'),
            Field::make('text', 'aircraft_wing_length_ft', 'Размах крыла (ft)'),

            Field::make('text', 'aircraft_features_heading_1', 'Особенности самолета, 1 заголовок'),
            Field::make('text', 'aircraft_features_desc_1', 'Особенности самолета, 1 описание'),
            Field::make('text', 'aircraft_features_heading_1_en', 'EN Особенности самолета, 1 заголовок'),
            Field::make('text', 'aircraft_features_desc_1_en', 'EN Особенности самолета, 1 описание'),

            Field::make('text', 'aircraft_features_heading_2', 'Особенности самолета, 2 заголовок'),
            Field::make('text', 'aircraft_features_desc_2', 'Особенности самолета, 2 описание'),
            Field::make('text', 'aircraft_features_heading_2_en', 'EN Особенности самолета, 2 заголовок'),
            Field::make('text', 'aircraft_features_desc_2_en', 'EN Особенности самолета, 2 описание'),

            Field::make('text', 'aircraft_features_heading_3', 'Особенности самолета, 3 заголовок'),
            Field::make('text', 'aircraft_features_desc_3', 'Особенности самолета, 3 описание'),
            Field::make('text', 'aircraft_features_heading_3_en', 'EN Особенности самолета, 3 заголовок'),
            Field::make('text', 'aircraft_features_desc_3_en', 'EN Особенности самолета, 3 описание'),

            Field::make('text', 'aircraft_features_heading_4', 'Особенности самолета, 4 заголовок'),
            Field::make('text', 'aircraft_features_desc_4', 'Особенности самолета, 4 описание'),
            Field::make('text', 'aircraft_features_heading_4_en', 'EN Особенности самолета, 4 заголовок'),
            Field::make('text', 'aircraft_features_desc_4_en', 'EN Особенности самолета, 4 описание'),

            Field::make('text', 'aircraft_features_heading_5', 'Особенности самолета, 5 заголовок'),
            Field::make('text', 'aircraft_features_desc_5', 'Особенности самолета, 5 описание'),
            Field::make('text', 'aircraft_features_heading_5_en', 'EN Особенности самолета, 5 заголовок'),
            Field::make('text', 'aircraft_features_desc_5_en', 'EN Особенности самолета, 5 описание'),

            Field::make('text', 'aircraft_features_heading_6', 'Особенности самолета, 6 заголовок'),
            Field::make('text', 'aircraft_features_desc_6', 'Особенности самолета, 6 описание'),
            Field::make('text', 'aircraft_features_heading_6_en', 'EN Особенности самолета, 6 заголовок'),
            Field::make('text', 'aircraft_features_desc_6_en', 'EN Особенности самолета, 6 описание'),

            Field::make('text', 'variable_cost_hour', 'Переменные расходы (USD)/час'),
            Field::make('text', 'programs_engine', 'Программы двигатель'),
            Field::make('text', 'programs_planer', 'Программы планер'),
            Field::make('text', 'programs_vsu_propeller', 'Программы ВСУ/Пропеллер'),
            Field::make('text', 'fuel_cost', 'Топливо (при цене $800/тонна)'),
            Field::make('text', 'aircraft_navigation', 'Навигация'),
            Field::make('text', 'crew_payment', 'Командировочные экипажа'),
            Field::make('text', 'other_costs', 'Другие затраты'),
            Field::make('text', 'variable_cost_sum', 'Сумма переменные расходы'),
            Field::make('text', 'crew_salary', 'Зарплата экипажа'),
            Field::make('text', 'engineer_salary', 'Зарплата инженера'),
            Field::make('text', 'crew_education', 'Обучение экипажа'),
            Field::make('text', 'sw_navigation', 'ПО и навигация'),
            Field::make('text', 'aircraft_insurance', 'Страховка'),
            Field::make('text', 'aircraft_parking', 'Стоянка'),
            Field::make('text', 'company_income', 'Доход управляющей компании'),
            Field::make('text', 'samp', 'CAMP'),
            Field::make('text', 'technical_management', 'Технический менеджмент'),
            Field::make('text', 'other_different_costs', 'Разные'),
            Field::make('text', 'constant_cost_sum', 'Сумма постоянные расходы'),
            Field::make('text', 'total_cost', 'ИТОГО расходы'),
            Field::make('text', 'total_cost_hour', 'Итого цена летного часа'),

            Field::make('complex', 'popular_destinations', 'Популярные направления')
                ->add_fields([
                    Field::make('text', 'popular_destinations_name', 'Название (например, Москва - Казань)'),
                    Field::make('text', 'popular_destinations_distance', 'Дальность полёта'),
                    Field::make('text', 'popular_destinations_time', 'Время полёта'),
                    Field::make('text', 'popular_destinations_cost', 'Стоимость'),
                ]),
            Field::make('complex', 'popular_destinations_en', 'EN Популярные направления')
                ->add_fields([
                    Field::make('text', 'popular_destinations_name', 'EN Название (например, Москва - Казань)'),
                    Field::make('text', 'popular_destinations_distance', 'EN Дальность полёта'),
                    Field::make('text', 'popular_destinations_time', 'EN Время полёта'),
                    Field::make('text', 'popular_destinations_cost', 'EN Стоимость'),
                ]),

            Field::make('complex', 'variable_costs_hour', 'Переменные затраты (USD)/час')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('text', 'cost_label', 'Название затрат'),
                    Field::make('text', 'cost_200', '200 часов')
                        ->set_default_value('-'),
                    Field::make('text', 'cost_400', '400 часов')
                        ->set_default_value('-'),
                    Field::make('text', 'cost_600', '600 часов')
                        ->set_default_value('-'),
                    Field::make('text', 'cost_800', '800 часов')
                        ->set_default_value('-'),
                ]),

            Field::make('complex', 'constant_costs_hour', 'Постоянные затраты')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('text', 'cost_label', 'Название затрат'),
                    Field::make('text', 'cost_200', '200 часов')
                        ->set_default_value('-'),
                    Field::make('text', 'cost_400', '400 часов')
                        ->set_default_value('-'),
                    Field::make('text', 'cost_600', '600 часов')
                        ->set_default_value('-'),
                    Field::make('text', 'cost_800', '800 часов')
                        ->set_default_value('-'),
                ]),

            Field::make('text', 'variable_cost_total', 'Сумма переменных затрат')
                ->set_default_value('-'),
            Field::make('text', 'constant_cost_total', 'Сумма постоянных затрат')
                ->set_default_value('-'),
            Field::make('text', 'total_expenses', 'ИТОГО расходы')
                ->set_default_value('-'),
            Field::make('text', 'total_flight_hour_cost', 'ИТОГО цена летного часа')
                ->set_default_value('-'),
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
    $country_flags = [
        'Австралия' => '/wp-content/uploads/flags/australia.png',
        'Австрия' => '/wp-content/uploads/flags/austria.png',
        'Азербайджан' => '/wp-content/uploads/flags/azerbaijan.png',
        'Албания' => '/wp-content/uploads/flags/albania.png',
        'Андорра' => '/wp-content/uploads/flags/andorra.png',
        'Антигуа и Барбуда' => '/wp-content/uploads/flags/antigua-and-barbuda.png',
        'Армения' => '/wp-content/uploads/flags/armenia.png',
        'Афганистан' => '/wp-content/uploads/flags/afghanistan.png',
        'Багамы' => '/wp-content/uploads/flags/bahamas.png',
        'Бангладеш' => '/wp-content/uploads/flags/bangladesh.png',
        'Барбадос' => '/wp-content/uploads/flags/barbados.png',
        'Бахрейн' => '/wp-content/uploads/flags/bahrain.png',
        'Беларусь' => '/wp-content/uploads/flags/belarus.png',
        'Белиз' => '/wp-content/uploads/flags/belize.png',
        'Боливия' => '/wp-content/uploads/flags/bolivia.png',
        'Бельгия' => '/wp-content/uploads/flags/belgium.png',
        'Болгария' => '/wp-content/uploads/flags/bulgaria.png',
        'Бенин' => '/wp-content/uploads/flags/benin.png',
        'Босния и Герцеговина' => '/wp-content/uploads/flags/bosnia-and-herzegovina.png',
        'Ботсвана' => '/wp-content/uploads/flags/botswana.png',
        'Бразилия' => '/wp-content/uploads/flags/brazil.png',
        'Бруней' => '/wp-content/uploads/flags/brunei.png',
        'Буркина-Фасо' => '/wp-content/uploads/flags/burkina-faso.png',
        'Бурунди' => '/wp-content/uploads/flags/burundi.png',
        'Бутан' => '/wp-content/uploads/flags/bhutan.png',
        'Вануату' => '/wp-content/uploads/flags/vanuatu.png',
        'Ватикан' => '/wp-content/uploads/flags/vatican.png',
        'Великобритания' => '/wp-content/uploads/flags/united-kingdom.png',
        'Венгрия' => '/wp-content/uploads/flags/hungary.png',
        'Венесуэла' => '/wp-content/uploads/flags/venezuela.png',
        'Вьетнам' => '/wp-content/uploads/flags/vietnam.png',
        'Габон' => '/wp-content/uploads/flags/gabon.png',
        'Гаити' => '/wp-content/uploads/flags/haiti.png',
        'Гайана' => '/wp-content/uploads/flags/guyana.png',
        'Гамбия' => '/wp-content/uploads/flags/gambia.png',
        'Гана' => '/wp-content/uploads/flags/ghana.png',
        'Гватемала' => '/wp-content/uploads/flags/guatemala.png',
        'Гвинея' => '/wp-content/uploads/flags/guinea.png',
        'Гвинея-Бисау' => '/wp-content/uploads/flags/guinea-bissau.png',
        'Германия' => '/wp-content/uploads/flags/germany.png',
        'Гондурас' => '/wp-content/uploads/flags/honduras.png',
        'Гренада' => '/wp-content/uploads/flags/grenada.png',
        'Греция' => '/wp-content/uploads/flags/greece.png',
        'Грузия' => '/wp-content/uploads/flags/georgia.png',
        'Дания' => '/wp-content/uploads/flags/denmark.png',
        'Доминикана' => '/wp-content/uploads/flags/dominicana.png',
        'Египет' => '/wp-content/uploads/flags/egypt.png',
        'Замбия' => '/wp-content/uploads/flags/zambia.png',
        'Зимбабве' => '/wp-content/uploads/flags/zimbabwe.png',
        'Израиль' => '/wp-content/uploads/flags/israel.png',
        'Индия' => '/wp-content/uploads/flags/india.png',
        'Индонезия' => '/wp-content/uploads/flags/indonesia.png',
        'Иордания' => '/wp-content/uploads/flags/jordan.png',
        'Ирак' => '/wp-content/uploads/flags/iraq.png',
        'Иран' => '/wp-content/uploads/flags/iran.png',
        'Ирландия' => '/wp-content/uploads/flags/ireland.png',
        'Исландия' => '/wp-content/uploads/flags/iceland.png',
        'Испания' => '/wp-content/uploads/flags/spain.png',
        'Италия' => '/wp-content/uploads/flags/italy.png',
        'Йемен' => '/wp-content/uploads/flags/yemen.png',
        'Кабо-Верде' => '/wp-content/uploads/flags/cabo-verde.png',
        'Казахстан' => '/wp-content/uploads/flags/kazakhstan.png',
        'Камбоджа' => '/wp-content/uploads/flags/cambodia.png',
        'Камерун' => '/wp-content/uploads/flags/cameroon.png',
        'Канада' => '/wp-content/uploads/flags/canada.png',
        'Катар' => '/wp-content/uploads/flags/qatar.png',
        'Кения' => '/wp-content/uploads/flags/kenia.png',
        'Кипр' => '/wp-content/uploads/flags/cyprus.png',
        'Кирибати' => '/wp-content/uploads/flags/kiribati.png',
        'Киргизия' => '/wp-content/uploads/flags/kyrgyzstan.png',
        'Китай' => '/wp-content/uploads/flags/china.png',
        'Колумбия' => '/wp-content/uploads/flags/columbia.png',
        'Конго' => '/wp-content/uploads/flags/congo.png',
        'Демократическая Республика Конго' => '/wp-content/uploads/flags/democratic-republic-of-congo.png',
        'КНДР' => '/wp-content/uploads/flags/north-korea.png',
        'Южная Корея' => '/wp-content/uploads/flags/south-korea.png',
        'Коста-Рика' => '/wp-content/uploads/flags/costa-rica.png',
        'Кот-д\'Ивуар' => '/wp-content/uploads/flags/cote-de-ivory.png',
        'Куба' => '/wp-content/uploads/flags/cuba.png',
        'Кувейт' => '/wp-content/uploads/flags/kuwait.png',
        'Лаос' => '/wp-content/uploads/flags/laos.png',
        'Латвия' => '/wp-content/uploads/flags/latvia.png',
        'Лесото' => '/wp-content/uploads/flags/lesotho.png',
        'Либерия' => '/wp-content/uploads/flags/liberia.png',
        'Ливан' => '/wp-content/uploads/flags/lebanon.png',
        'Литва' => '/wp-content/uploads/flags/lithuania.png',
        'Лихтенштейн' => '/wp-content/uploads/flags/liechtenstein.png',
        'Люксембург' => '/wp-content/uploads/flags/luxembourg.png',
        'Маврикий' => '/wp-content/uploads/flags/mauricius.png',
        'Мавритания' => '/wp-content/uploads/flags/mauritania.png',
        'Мадагаскар' => '/wp-content/uploads/flags/madagascar.png',
        'Малави' => '/wp-content/uploads/flags/malawi.png',
        'Малайзия' => '/wp-content/uploads/flags/malaysia.png',
        'Мали' => '/wp-content/uploads/flags/mali.png',
        'Мальдивы' => '/wp-content/uploads/flags/maldives.png',
        'Мальта' => '/wp-content/uploads/flags/malta.png',
        'Марокко' => '/wp-content/uploads/flags/morocco.png',
        'Маршалловы острова' => '/wp-content/uploads/flags/marshall-islands.png',
        'Мексика' => '/wp-content/uploads/flags/mexiko.png',
        'Микронезия' => '/wp-content/uploads/flags/micronesia.png',
        'Мозамбик' => '/wp-content/uploads/flags/mozambique.png',
        'Молдова' => '/wp-content/uploads/flags/moldova.png',
        'Монако' => '/wp-content/uploads/flags/monaco.png',
        'Монголия' => '/wp-content/uploads/flags/mongolia.png',
        'Мьянма' => '/wp-content/uploads/flags/myanmar.png',
        'Намибия' => '/wp-content/uploads/flags/namibia.png',
        'Науру' => '/wp-content/uploads/flags/nauru.png',
        'Непал' => '/wp-content/uploads/flags/nepal.png',
        'Нигер' => '/wp-content/uploads/flags/niger.png',
        'Нигерия' => '/wp-content/uploads/flags/nigeria.png',
        'Нидерланды' => '/wp-content/uploads/flags/netherlands.png',
        'Новая Зеландия' => '/wp-content/uploads/flags/new-zealand.png',
        'Норвегия' => '/wp-content/uploads/flags/norway.png',
        'ОАЭ' => '/wp-content/uploads/flags/uae.png',
        'Оман' => '/wp-content/uploads/flags/oman.png',
        'Пакистан' => '/wp-content/uploads/flags/pakistan.png',
        'Палау' => '/wp-content/uploads/flags/palau.png',
        'Панама' => '/wp-content/uploads/flags/panama.png',
        'Папуа-Новая Гвинея' => '/wp-content/uploads/flags/new-guinea.png',
        'Парагвай' => '/wp-content/uploads/flags/paraguay.png',
        'Польша' => '/wp-content/uploads/flags/poland.png',
        'Португалия' => '/wp-content/uploads/flags/portugal.png',
        'Россия' => '/wp-content/uploads/flags/russia.png',
        'Руанда' => '/wp-content/uploads/flags/rwanda.png',
        'Румыния' => '/wp-content/uploads/flags/romania.png',
        'Сальвадор' => '/wp-content/uploads/flags/salvador.png',
        'Самоа' => '/wp-content/uploads/flags/samoa.png',
        'Сан-Марино' => '/wp-content/uploads/flags/san-marino.png',
        'Саудовская Аравия' => '/wp-content/uploads/flags/saudi-arabia.png',
        'Северная Македония' => '/wp-content/uploads/flags/republic-of-macedonia.png',
        'Сейшелы' => '/wp-content/uploads/flags/seychelles.png',
        'Сенегал' => '/wp-content/uploads/flags/senegal.png',
        'Сент-Винсет и Гренадины' => '/wp-content/uploads/flags/st-vincent-grenadine.png',
        'Сент-Китс и Невис' => '/wp-content/uploads/flags/st-kits-nevis.png',
        'Сент-Люсия' => '/wp-content/uploads/flags/st-lucia.png',
        'Сербия' => '/wp-content/uploads/flags/serbia.png',
        'Сингапур' => '/wp-content/uploads/flags/singapur.png',
        'Сирия' => '/wp-content/uploads/flags/syria.png',
        'Словакия' => '/wp-content/uploads/flags/slovakia.png',
        'Словения' => '/wp-content/uploads/flags/slovenia.png',
        'США' => '/wp-content/uploads/flags/united-states.png',
        'Соломоновы острова' => '/wp-content/uploads/flags/solomon-islands.png',
        'Сомали' => '/wp-content/uploads/flags/somali.png',
        'Судан' => '/wp-content/uploads/flags/sudan.png',
        'Суринам' => '/wp-content/uploads/flags/surinam.png',
        'Сьерра-Леоне' => '/wp-content/uploads/flags/sierra-leone.png',
        'Таджикистан' => '/wp-content/uploads/flags/tajikistan.png',
        'Таиланд' => '/wp-content/uploads/flags/thailand.png',
        'Танзания' => '/wp-content/uploads/flags/tanzania.png',
        'Того' => '/wp-content/uploads/flags/togo.png',
        'Тонга' => '/wp-content/uploads/flags/tonga.png',
        'Тринидад и Тобаго' => '/wp-content/uploads/flags/trinidad-and-tobago.png',
        'Тувалу' => '/wp-content/uploads/flags/tuwalu.png',
        'Туркменистан' => '/wp-content/uploads/flags/turkmenistan.png',
        'Турция' => '/wp-content/uploads/flags/turkey.png',
        'Уганда' => '/wp-content/uploads/flags/uganda.png',
        'Узбекистан' => '/wp-content/uploads/flags/uzbekistan.png',
        'Украина' => '/wp-content/uploads/flags/ukraine.png',
        'Уругвай' => '/wp-content/uploads/flags/uruguay.png',
        'Фиджи' => '/wp-content/uploads/flags/fiji.png',
        'Филиппины' => '/wp-content/uploads/flags/phillipines.png',
        'Финляндия' => '/wp-content/uploads/flags/finland.png',
        'Франция' => '/wp-content/uploads/flags/france.png',
        'Хорватия' => '/wp-content/uploads/flags/croatia.png',
        'ЦАР' => '/wp-content/uploads/flags/car.png',
        'Чад' => '/wp-content/uploads/flags/chad.png',
        'Черногория' => '/wp-content/uploads/flags/montenegro.png',
        'Чехия' => '/wp-content/uploads/flags/czech-republic.png',
        'Чили' => '/wp-content/uploads/flags/chile.png',
        'Швейцария' => '/wp-content/uploads/flags/switzerland.png',
        'Швеция' => '/wp-content/uploads/flags/sweden.png',
        'Шри-Ланка' => '/wp-content/uploads/flags/sri-lanka.png',
        'Эквадор' => '/wp-content/uploads/flags/ecuador.png',
        'Экваториальная Гвинея' => '/wp-content/uploads/flags/equatorial-guinea.png',
        'Эритрея' => '/wp-content/uploads/flags/erithrea.png',
        'Эсватини' => '/wp-content/uploads/flags/eswatini.png',
        'Эстония' => '/wp-content/uploads/flags/estonia.png',
        'Эфиопия' => '/wp-content/uploads/flags/ethiopia.png',
        'ЮАР' => '/wp-content/uploads/flags/south-africa.png',
        'Южный Судан' => '/wp-content/uploads/flags/south-sudan.png',
        'Ямайка' => '/wp-content/uploads/flags/jamaica.png',
        'Япония' => '/wp-content/uploads/flags/japan.png'
    ];

    $planes_fields = [
        Field::make('text', 'title', 'Название самолета')->set_required(true),
        Field::make('image', 'image', 'Изображение')->set_required(true),
        Field::make('select', 'origin_country', 'Страна вылета')
            ->set_options(array_combine(array_keys($country_flags), array_keys($country_flags))),
        Field::make('text', 'origin_code', 'Код аэропорта вылета')->set_required(true),
        Field::make('text', 'origin_city', 'Город вылета')->set_required(false),
        Field::make('select', 'destination_country', 'Страна прилета')
            ->set_options(array_combine(array_keys($country_flags), array_keys($country_flags))),
        Field::make('text', 'destination_code', 'Код аэропорта прилета')->set_required(true),
        Field::make('text', 'destination_city', 'Город прилета')->set_required(true),
        Field::make('date_time', 'flight_date', 'Дата и время вылета')->set_required(true),
        Field::make('text', 'seats', 'Количество мест')->set_required(false),
        Field::make('text', 'price', 'Цена в USD')->set_required(false),
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

    Container::make('post_meta', 'Список самолетов')
        ->where('post_template', '=', 'page-wanted.php')
        ->add_fields([
            Field::make('complex', 'planes_wanted', 'Список самолетов')
                ->add_fields([
                    Field::make('text', 'title', 'Название самолета')->set_required(true),
                    Field::make('image', 'image', 'Изображение')->set_required(true),
                    Field::make('text', 'type', 'Тип')->set_required(false),
                    Field::make('text', 'category', 'Категория')->set_required(false),
                    Field::make('text', 'type_en', 'Тип (на английском языке)')->set_required(false),
                    Field::make('text', 'category_en', 'Категория (на английском языке)')->set_required(false),
                    Field::make('text', 'manufacturer', 'Производитель')->set_required(false),
                    Field::make('text', 'range_km', 'Дальность полёта (км)')->set_required(false),
                    Field::make('text', 'produced_year', 'Год выпуска')->set_required(false),
                    Field::make('text', 'hours_flown', 'Налет часов')->set_required(false),
                    Field::make('text', 'seats', 'Количество мест')->set_required(false),
                    Field::make('text', 'price', 'Цена в USD')->set_required(false)
                ]),
        ]);

    Container::make('post_meta', 'Список самолетов')
        ->where('post_template', '=', 'page-wanted-en.php')
        ->add_fields([
            Field::make('complex', 'planes_wanted', 'Список самолетов')->add_fields([
                Field::make('text', 'title', 'Название самолета')->set_required(true),
                Field::make('image', 'image', 'Изображение')->set_required(true),
                Field::make('text', 'type', 'Тип')->set_required(false),
                Field::make('text', 'category', 'Категория')->set_required(false),
                Field::make('text', 'type_en', 'Тип (на английском языке)')->set_required(false),
                Field::make('text', 'category_en', 'Категория (на английском языке)')->set_required(false),
                Field::make('text', 'manufacturer', 'Производитель')->set_required(false),
                Field::make('text', 'range_km', 'Дальность полёта (км)')->set_required(false),
                Field::make('text', 'produced_year', 'Год выпуска')->set_required(false),
                Field::make('text', 'hours_flown', 'Налет часов')->set_required(false),
                Field::make('text', 'seats', 'Количество мест')->set_required(false),
                Field::make('text', 'price', 'Цена в USD')->set_required(false)
            ]),
        ]);

    // Container::make('post_meta', 'Список самолетов')
    //     ->where('post_template', '=', 'page-wanted-en.php')
    //     ->add_fields([
    //         Field::make('complex', 'planes_wanted', 'Список самолетов')->add_fields($planes_fields_wanted),
    //     ]);

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

add_action('after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});
// carbon end

// empty legs flags start
// function get_country_flag_url($country_name) {
//     $flags_path = get_stylesheet_directory_uri() . '/img/flags/';

//     $flags = [
//         'США' => 'usa.png',
//         'Канада' => 'canada.png',
//         'Франция' => 'france.png',
//         'Германия' => 'germany.png',
//         'Великобритания' => 'uk.png',
//         'Россия' => 'russia.png',
//         'Китай' => 'china.png',
//         'Япония' => 'japan.png',
//         'Австралия' => 'australia.png',
//         'Италия' => 'italy.png',
//         'Испания' => 'spain.png',
//         'Африка' => 'africa.png',
//     ];

//     return isset($flags[$country_name]) ? $flags_path . $flags[$country_name] : '';
// }

// add_action('carbon_fields_post_meta_save', function ($post_id) {
//     $planes = carbon_get_post_meta($post_id, 'planes');
//     $flags = get_country_flags();

//     if (!$planes) return;

//     foreach ($planes as $index => $plane) {
//         if (!empty($plane['origin_country']) && isset($flags[$plane['origin_country']])) {
//             $planes[$index]['origin_flag'] = $flags[$plane['origin_country']];
//         }

//         if (!empty($plane['destination_country']) && isset($flags[$plane['destination_country']])) {
//             $planes[$index]['destination_flag'] = $flags[$plane['destination_country']];
//         }
//     }

//     carbon_set_post_meta($post_id, 'planes', $planes);
// });
// empty legs flags end

// lightbox fix
function my_lbwps_enabled($enabled, $id)
{
    if (function_exists('is_product')) {
        if (is_product()) return false;
    }

    return $enabled;
}

add_filter('lbwps_enabled', 'my_lbwps_enabled', 10, 2);

function allow_json_uploads($mimes)
{
    $mimes['json'] = 'application/json';
    return $mimes;
}
add_filter('upload_mimes', 'allow_json_uploads');

// json for aircraft start
function process_aircraft_json($post_id)
{
    if (get_post_type($post_id) !== 'product') {
        return;
    }

    $json_value = carbon_get_post_meta($post_id, 'aircraft_json');

    if (!$json_value) {
        error_log("Ошибка: JSON-файл не выбран.");
        return;
    }

    // Проверяем, что нам вернул Carbon Fields: ID или URL
    if (is_numeric($json_value)) {
        // Это ID вложения
        $json_path = get_attached_file($json_value);
    } else {
        // Это URL файла
        $upload_dir = wp_upload_dir();
        $json_path = str_replace($upload_dir['baseurl'], $upload_dir['basedir'], $json_value);
    }

    if (!$json_path || !file_exists($json_path)) {
        error_log("Ошибка: JSON-файл не найден - $json_path");
        return;
    }

    error_log("Файл найден: $json_path");

    $json_data = file_get_contents($json_path);
    $aircraft_data = json_decode($json_data, true);

    if (!$aircraft_data || !is_array($aircraft_data)) {
        error_log("Ошибка: JSON-файл поврежден.");
        return;
    }

    foreach ($aircraft_data as $entry) {
        if (empty($entry['Общие данные']) || !isset($entry['Параметры'])) {
            continue;
        }

        $key = trim($entry['Общие данные']);
        $value = trim((string)$entry['Параметры']);
        $value = preg_replace('/\x{00A0}/u', ' ', $value);

        if ($value === '') {
            continue;
        }

        error_log("Сохраняем: $key => $value");

        // Сопоставляем JSON-данные с Carbon Fields
        switch ($key) {
            case 'Модель':
                carbon_set_post_meta($post_id, 'aircraft_model', $value);
                break;
            case 'Тип':
                carbon_set_post_meta($post_id, 'aircraft_type', $value);
                break;
            case 'Категория':
                carbon_set_post_meta($post_id, 'aircraft_cat', $value);
                break;
            case 'Производитель':
                carbon_set_post_meta($post_id, 'aircraft_make', $value);
                break;
            case 'Крейсерская скорость (км/ч)':
                carbon_set_post_meta($post_id, 'cruise_speed_kmh', $value);
                break;
            case 'Крейсерская скорость (миль/ч)':
                carbon_set_post_meta($post_id, 'cruise_speed_mph', $value);
                break;
            case 'Дальность (км)':
                carbon_set_post_meta($post_id, 'range_km', $value);
                break;
            case 'Дальность (миль)':
                carbon_set_post_meta($post_id, 'range_miles', $value);
                break;
            case 'Время в полете':
                carbon_set_post_meta($post_id, 'range_time', $value);
                break;
            case 'Год начала производства':
                carbon_set_post_meta($post_id, 'production_start', $value);
                break;
            case 'Год окончания производства':
                carbon_set_post_meta($post_id, 'production_end', $value);
                break;
            case 'Страна производства':
                carbon_set_post_meta($post_id, 'production_country', $value);
                break;
            case 'Стоимость нового самолета ($)':
                carbon_set_post_meta($post_id, 'aircraft_new_cost', $value);
                break;
            case 'Стоимость самолета с налетом ($)':
                carbon_set_post_meta($post_id, 'aircraft_used_cost', $value);
                break;
            case 'Себестоимость летного часа ($)':
                carbon_set_post_meta($post_id, 'aircraft_hour_cost', $value);
                break;
            case 'Инспекция горячей части (HSI) (часов)':
                carbon_set_post_meta($post_id, 'hsi', $value);
                break;
            case 'Интервал капитального ремонта (часов)':
                carbon_set_post_meta($post_id, 'interval_total_repair', $value);
                break;
            case 'Интервал A-Check':
                carbon_set_post_meta($post_id, 'interval_a_check', $value);
                break;
            case 'Интервал B-Check':
                carbon_set_post_meta($post_id, 'interval_b_check', $value);
                break;
            case 'Интервал C-Check':
                carbon_set_post_meta($post_id, 'interval_c_check', $value);
                break;
            case 'Интервал D-Check':
                carbon_set_post_meta($post_id, 'interval_d_check', $value);
                break;
            case 'Максимальная высота полета (м)':
                carbon_set_post_meta($post_id, 'max_takeoff_height_m', $value);
                break;
            case 'Максимальная высота полета (ft)':
                carbon_set_post_meta($post_id, 'max_takeoff_height_ft', $value);
                break;
            case 'Максимальный взлетный вес (кг)':
                carbon_set_post_meta($post_id, 'max_takeoff_weight_kg', $value);
                break;
            case 'Максимальный взлетный вес (фунты)':
                carbon_set_post_meta($post_id, 'max_takeoff_weight_lbs', $value);
                break;
            case 'Посадочный вес (кг)':
                carbon_set_post_meta($post_id, 'max_landing_weight_kg', $value);
                break;
            case 'Посадочный вес (lb)':
                carbon_set_post_meta($post_id, 'max_landing_weight_lbs', $value);
                break;
            case 'Грузоподъемность (кг)':
                carbon_set_post_meta($post_id, 'max_landing_height_kg', $value);
                break;
            case 'Грузоподъемность (lb)':
                carbon_set_post_meta($post_id, 'max_landing_height_lbs', $value);
                break;
            case 'Взлетная дистанция (м)':
                carbon_set_post_meta($post_id, 'takeoff_distance_m', $value);
                break;
            case 'Взлетная дистанция (ft)':
                carbon_set_post_meta($post_id, 'takeoff_distance_ft', $value);
                break;
            case 'Посадочная дистанция (м)':
                carbon_set_post_meta($post_id, 'landing_distance_m', $value);
                break;
            case 'Посадочная дистанция (ft)':
                carbon_set_post_meta($post_id, 'landing_distance_ft', $value);
                break;
            case 'Количество двигателей':
                carbon_set_post_meta($post_id, 'aircraft_engine_count', $value);
                break;
            case 'Двигатель':
                carbon_set_post_meta($post_id, 'aircraft_engine', $value);
                break;
            case 'Вспомогательная силовая установка (ВСУ)':
                carbon_set_post_meta($post_id, 'vsu', $value);
                break;
            case 'Авионика':
                carbon_set_post_meta($post_id, 'avionics', $value);
                break;
            case 'Пропеллер':
                carbon_set_post_meta($post_id, 'propeller', $value);
                break;
            case 'Количество мест':
                carbon_set_post_meta($post_id, 'aircraft_seats', $value);
                break;
            case 'Ширина салона (м)':
                carbon_set_post_meta($post_id, 'cabin_width_m', $value);
                break;
            case 'Ширина салона (футы)':
                carbon_set_post_meta($post_id, 'cabin_width_ft', $value);
                break;
            case 'Высота салона (м)':
                carbon_set_post_meta($post_id, 'cabin_height_m', $value);
                break;
            case 'Высота салона (футы)':
                carbon_set_post_meta($post_id, 'cabin_height_ft', $value);
                break;
            case 'Длина салона (м)':
                carbon_set_post_meta($post_id, 'cabin_length_m', $value);
                break;
            case 'Длина салона (ft)':
                carbon_set_post_meta($post_id, 'cabin_length_ft', $value);
                break;
            case 'Объем салона (куб.м)':
                carbon_set_post_meta($post_id, 'cabin_volume_m', $value);
                break;
            case 'Объем салона (cu ft)':
                carbon_set_post_meta($post_id, 'cabin_volume_ft', $value);
                break;
            case 'Объём багажного отделения (куб.м)':
                carbon_set_post_meta($post_id, 'luggage_volume_m', $value);
                break;
            case 'Объём багажного отделения (cu ft)':
                carbon_set_post_meta($post_id, 'luggage_volume_ft', $value);
                break;
            case 'Количество чемоданов':
                carbon_set_post_meta($post_id, 'luggage_number', $value);
                break;
            case 'Длина самолета (м)':
                carbon_set_post_meta($post_id, 'aircraft_length_m', $value);
                break;
            case 'Длина самолета (ft)':
                carbon_set_post_meta($post_id, 'aircraft_length_ft', $value);
                break;
            case 'Высота самолета (м)':
                carbon_set_post_meta($post_id, 'aircraft_height_m', $value);
                break;
            case 'Высота самолета (ft)':
                carbon_set_post_meta($post_id, 'aircraft_height_ft', $value);
                break;
            case 'Размах крыла (м)':
                carbon_set_post_meta($post_id, 'aircraft_wing_length_m', $value);
                break;
            case 'Размах крыла (ft)':
                carbon_set_post_meta($post_id, 'aircraft_wing_length_ft', $value);
                break;
            case 'Особенности самолета, 1 заголовок':
                carbon_set_post_meta($post_id, 'aircraft_features_heading_1', $value);
                break;
            case 'Особенности самолета, 1 описание':
                carbon_set_post_meta($post_id, 'aircraft_features_desc_1', $value);
                break;
            case 'Особенности самолета, 2 заголовок':
                carbon_set_post_meta($post_id, 'aircraft_features_heading_2', $value);
                break;
            case 'Особенности самолета, 2 описание':
                carbon_set_post_meta($post_id, 'aircraft_features_desc_2', $value);
                break;
            case 'Особенности самолета, 3 заголовок':
                carbon_set_post_meta($post_id, 'aircraft_features_heading_3', $value);
                break;
            case 'Особенности самолета, 3 описание':
                carbon_set_post_meta($post_id, 'aircraft_features_desc_3', $value);
                break;
            case 'Особенности самолета, 4 заголовок':
                carbon_set_post_meta($post_id, 'aircraft_features_heading_4', $value);
                break;
            case 'Особенности самолета, 4 описание':
                carbon_set_post_meta($post_id, 'aircraft_features_desc_4', $value);
                break;
            case 'Особенности самолета, 5 заголовок':
                carbon_set_post_meta($post_id, 'aircraft_features_heading_5', $value);
                break;
            case 'Особенности самолета, 5 описание':
                carbon_set_post_meta($post_id, 'aircraft_features_desc_5', $value);
                break;
            case 'Особенности самолета, 6 заголовок':
                carbon_set_post_meta($post_id, 'aircraft_features_heading_6', $value);
                break;
            case 'Особенности самолета, 6 описание':
                carbon_set_post_meta($post_id, 'aircraft_features_desc_6', $value);
                break;
            case 'Переменные расходы (USD)/час':
                carbon_set_post_meta($post_id, 'variable_cost_hour', $value);
                break;
            case 'Программы двигатель':
                carbon_set_post_meta($post_id, 'programs_engine', $value);
                break;
            case 'Программы планер':
                carbon_set_post_meta($post_id, 'programs_planer', $value);
                break;
            case 'Программы ВСУ/Пропеллер':
                carbon_set_post_meta($post_id, 'programs_vsu_propeller', $value);
                break;
            case 'Топливо (при цене $800/тонна)':
                carbon_set_post_meta($post_id, 'fuel_cost', $value);
                break;
            case 'Навигация':
                carbon_set_post_meta($post_id, 'aircraft_navigation', $value);
                break;
            case 'Командировочные экипажа':
                carbon_set_post_meta($post_id, 'crew_payment', $value);
                break;
            case 'Другие затраты':
                carbon_set_post_meta($post_id, 'other_costs', $value);
                break;
            case 'Сумма переменные расходы':
                carbon_set_post_meta($post_id, 'variable_cost_sum', $value);
                break;
            case 'Зарплата экипажа':
                carbon_set_post_meta($post_id, 'crew_salary', $value);
                break;
            case 'Зарплата инженера':
                carbon_set_post_meta($post_id, 'engineer_salary', $value);
                break;
            case 'Обучение экипажа':
                carbon_set_post_meta($post_id, 'crew_education', $value);
                break;
            case 'ПО и навигация':
                carbon_set_post_meta($post_id, 'sw_navigation', $value);
                break;
            case 'Страховка':
                carbon_set_post_meta($post_id, 'aircraft_insurance', $value);
                break;
            case 'Стоянка':
                carbon_set_post_meta($post_id, 'aircraft_parking', $value);
                break;
            case 'Доход управляющей компании':
                carbon_set_post_meta($post_id, 'company_income', $value);
                break;
            case 'CAMP':
                carbon_set_post_meta($post_id, 'samp', $value);
                break;
            case 'Технический менеджмент':
                carbon_set_post_meta($post_id, 'technical_management', $value);
                break;
            case 'Разные':
                carbon_set_post_meta($post_id, 'other_different_costs', $value);
                break;
            case 'Сумма постоянные расходы':
                carbon_set_post_meta($post_id, 'constant_cost_sum', $value);
                break;
            case 'ИТОГО расходы':
                carbon_set_post_meta($post_id, 'total_cost', $value);
                break;
            case 'Итого цена летного часа':
                carbon_set_post_meta($post_id, 'total_cost_hour', $value);
                break;
        }
    }
}

add_action('carbon_fields_post_meta_container_saved', 'process_aircraft_json');
// json for aircraft end

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

    // $tabs['aircraft_features'] = [
    //     'label'    => __('Особенности самолета', 'woocommerce'),
    //     'target'   => 'aircraft_features_options',
    //     'class'    => ['show_if_simple', 'show_if_variable'],
    //     'priority' => 12
    // ];

    // $tabs['operating_costs'] = [
    //     'label'    => __('Эксплуатационные расходы самолета', 'woocommerce'),
    //     'target'   => 'operating_costs_options',
    //     'class'    => ['show_if_simple', 'show_if_variable'],
    //     'priority' => 13
    // ];

    // $tabs['technical_specs'] = [
    //     'label'    => __('Технические характеристики', 'woocommerce'),
    //     'target'   => 'technical_specs_options',
    //     'class'    => ['show_if_simple', 'show_if_variable'],
    //     'priority' => 14
    // ];

    // $tabs['popular_routes'] = [
    //     'label'    => __('Популярные направления', 'woocommerce'),
    //     'target'   => 'popular_routes_options',
    //     'class'    => ['show_if_simple', 'show_if_variable'],
    //     'priority' => 15
    // ];
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
    // woocommerce_wp_select([
    //     'id'      => '_db_category',
    //     'label'   => __('Категория самолёта', 'woocommerce'),
    //     'options' => [
    //         ''            => __('Общая карточка самолёта', 'woocommerce'),
    //         'for_sale'    => __('Самолёт на продажу', 'woocommerce'),
    //         'for_rent'    => __('Самолёт в аренду', 'woocommerce'),
    //     ],
    // ]);

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

    <!-- <div id="aircraft_features_options" class="panel woocommerce_options_panel hidden">
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
    </script> -->

    <!-- <div id="operating_costs_options" class="panel woocommerce_options_panel hidden">
        <h2><?php _e('Эксплуатационные расходы самолета', 'woocommerce'); ?></h2>

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

            $(document).on('click', '.remove-route-button', function() {
                $(this).closest('.route-item').remove();
            });
        });
    </script> -->

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
        delete_post_meta($post_id, '_aircraft_features');
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
    // $tabs['aircraft_features'] = [
    //     'title'    => __('Особенности самолета', 'woocommerce'),
    //     'priority' => 30,
    //     'callback' => function () {
    //         global $product;
    //         $features = get_post_meta($product->get_id(), '_aircraft_features', true);

    //         if (!empty($features) && is_array($features)) {
    //             echo '<h2>' . __('Особенности самолета', 'woocommerce') . '</h2>';
    //             foreach ($features as $index => $feature) {
    //                 $step_number = $index + 1;
    //                 $title = esc_html($feature['title'] ?? '');
    //                 $description = esc_html($feature['description'] ?? '');

    //                 if ($title || $description) {
    //                     echo '<div class="step-item">';
    //                     echo '<span class="step-number">' . $step_number . '</span>';
    //                     if ($title) {
    //                         echo '<h3 class="h3">' . $title . '</h3>';
    //                     }
    //                     if ($description) {
    //                         echo '<p>' . $description . '</p>';
    //                     }
    //                     echo '</div>';
    //                 }
    //             }
    //         }
    //     },
    // ];

    // $tabs['operating_costs'] = [
    //     'title'    => __('Эксплуатационные расходы самолета', 'woocommerce'),
    //     'priority' => 40,
    //     'callback' => function () {
    //         global $product;
    //         $value = get_post_meta($product->get_id(), '_operating_costs', true);
    //         if ($value) {
    //             echo '<h2>' . __('Эксплуатационные расходы самолета', 'woocommerce') . '</h2>';
    //             echo '<p>' . esc_html($value) . '</p>';
    //         }
    //     },
    // ];

    // $tabs['technical_specs'] = [
    //     'title'    => __('Технические характеристики', 'woocommerce'),
    //     'priority' => 50,
    //     'callback' => function () {
    //         global $product;

    //         $fields = [
    //             '_cruising_speed' => 'Крейсерская скорость (км/ч / m/h)',
    //             '_range' => 'Дальность (км / nm)',
    //             '_flight_time' => 'Время в полете (ч:м)',
    //             '_max_altitude' => 'Максимальная высота полета (м / ft)',
    //             '_max_takeoff_weight' => 'Максимальный взлетный вес (кг / lb)',
    //             '_landing_weight' => 'Посадочный вес (кг / lb)',
    //             '_payload' => 'Грузоподъемность (кг)',
    //             '_takeoff_distance' => 'Взлетная дистанция (м / ft)',
    //             '_landing_distance' => 'Посадочная дистанция (м / ft)',
    //             '_engine_count' => 'Количество двигателей',
    //             '_engine' => 'Двигатель',
    //             '_apu' => 'Вспомогательная силовая установка',
    //             '_avionics' => 'Авионика',
    //             '_width' => 'Ширина',
    //             '_cabin_length' => 'Длина салона',
    //             '_cabin_height' => 'Высота салона',
    //             '_cabin_volume' => 'Объем салона',
    //             '_luggage_volume' => 'Объём багажного отделения',
    //             '_plane_length' => 'Длина самолета',
    //             '_plane_height' => 'Высота самолета',
    //         ];

    //         echo '<h2>' . __('Технические характеристики', 'woocommerce') . '</h2>';
    //         echo '<table class="woocommerce-product-attributes shop_attributes">';
    //         foreach ($fields as $meta_key => $label) {
    //             $value = get_post_meta($product->get_id(), $meta_key, true);
    //             if ($value) {
    //                 echo '<tr>';
    //                 echo '<th>' . esc_html($label) . '</th>';
    //                 echo '<td>' . esc_html($value) . '</td>';
    //                 echo '</tr>';
    //             }
    //         }
    //         echo '</table>';
    //     },
    // ];

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
