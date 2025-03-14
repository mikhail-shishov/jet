<?php
/* Template Name: Empty legs */
?>

<?php get_header(); ?>

<section class="breadcrumbs-sect">
    <div class="container">
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
    </div>
</section>

<section class="empty-intro-sect">
    <div class="container">
        <h1 class="h1">Самолеты для прирожденных лидеров</h1>
        <h2 class="h3">Новая эра бизнес-авиации</h2>

        <div class="search-wrap search-flight-wrap">
            <form action="" class="search-flight-form">
                <div class="city-list" style="display: none;">
                    Москва, Санкт-Петербург, Новосибирск, Екатеринбург, Нижний Новгород, Казань, Челябинск, Омск, Самара, Ростов-на-Дону, Уфа, Красноярск, Воронеж, Пермь, Волгоград
                </div>

                <div class="autocomplete form-input-wrap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/from.svg" class="form-input-icon" alt="">
                    <input type="text" class="form-input form-input-round city-input" placeholder="Откуда" autocomplete="off">
                    <div class="suggestions"></div>
                </div>

                <div class="autocomplete form-input-wrap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/to.svg" class="form-input-icon" alt="">
                    <input type="text" class="form-input form-input-round city-input" placeholder="Куда" autocomplete="off">
                    <div class="suggestions"></div>
                </div>

                <div class="form-input-wrap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/calendar.svg" class="form-input-icon" alt="">
                    <input type="date" class="form-input form-input-round" placeholder="Когда" name="" id="">
                </div>

                <div class="passenger-counter">
                    <button class="minus" type="button">−</button>
                    <div class="passenger-counter-output">
                        <input type="text" class="passenger-counter-input" value="1" readonly>
                        <span class="passenger-label">пассажир</span>
                    </div>
                    <button class="plus" type="button">+</button>
                </div>

                <button class="btn btn-green-fill" type="submit">Найти</button>
            </form>
        </div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/empty-section-image.png" class="intro-img" alt="">
    </div>
</section>

<section class="empty-all-sect">
    <div class="container">
        <div class="center">
            <h2 class="h2">Пустые перелеты</h2>
            <p>Арендуйте со скидкой самолет, который совершает перелет пустым по заданному маршруту. Если у авиакомпании заказали бизнес-джет для перелета только в одну сторону, то обратно он полетит пустым. Такие перелеты продаются с большими скидками.</p>
        </div>


        <?php
        $planes = carbon_get_the_post_meta('planes');

        if (!empty($planes)) : ?>
            <div class="empty-grid empty-all-grid">
                <?php foreach ($planes as $plane) :
                    // Получаем URL флага по стране
                    $origin_flag = isset($country_flags[$plane['origin_country']]) ? $country_flags[$plane['origin_country']] : '';
                    $destination_flag = isset($country_flags[$plane['destination_country']]) ? $country_flags[$plane['destination_country']] : '';

                    // Получаем изображение самолета
                    $image_url = !empty($plane['image']) ? wp_get_attachment_image_url($plane['image'], 'medium') : get_stylesheet_directory_uri() . '/img/planes/default.png';

                    // Проверяем наличие необходимых данных
                    if (empty($plane['title']) && empty($plane['origin_country']) && empty($plane['destination_country'])) {
                        continue;
                    }
                ?>
                    <div class="empty-item">
                        <img src="<?php echo esc_url($image_url); ?>" class="empty-img" loading="lazy" alt="<?php echo esc_attr($plane['title'] ?? 'Самолет'); ?>">
                        <h3 class="h3"><?php echo esc_html($plane['title'] ?? 'Без названия'); ?></h3>

                        <div class="empty-path">
                            <div class="empty-path-row">
                                <div class="empty-path-start">
                                    <div class="empty-path-airport">
                                        <span class="empty-path-country">
                                            <?php
                                            // Получаем страну
                                            $origin_country = $plane['origin_country'] ?? '';
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

                                            if ($origin_country) :
                                                // Выводим флаг и страну
                                                $flag = $country_flags[$origin_country] ?? '';
                                                echo $flag ? "<img src='$flag' alt='Флаг $origin_country'> $origin_country" : $origin_country;
                                            endif;
                                            ?>
                                        </span>
                                        <span class="empty-path-code"><?php echo esc_html($plane['origin_code'] ?? ''); ?></span>
                                        <span class="empty-path-city"><?php echo esc_html($plane['origin_city'] ?? ''); ?></span>
                                    </div>
                                </div>
                                <div class="empty-path-end">
                                    <div class="empty-path-airport">
                                        <span class="empty-path-country">
                                            <?php
                                            // Получаем страну
                                            $destination_country = $plane['destination_country'] ?? '';
                                            // $country_flags = [
                                            //     'США' => '/wp-content/uploads/flags/united-states.png',
                                            //     'Канада' => '/wp-content/uploads/flags/canada.png',
                                            //     'Франция' => '/wp-content/uploads/flags/france.png',
                                            //     'Германия' => '/wp-content/uploads/flags/germany.png',
                                            //     'Великобритания' => '/wp-content/uploads/flags/united-kingdom.png',
                                            //     'Россия' => '/wp-content/uploads/flags/russia.png',
                                            //     'Китай' => '/wp-content/uploads/flags/china.png',
                                            //     'Япония' => '/wp-content/uploads/flags/japan.png',
                                            //     'Австралия' => '/wp-content/uploads/flags/australia.png',
                                            //     'Италия' => '/wp-content/uploads/flags/italy.png',
                                            //     'Испания' => '/wp-content/uploads/flags/spain.png',
                                            // ];

                                            if ($destination_country) :
                                                // Выводим флаг и страну
                                                $flag = $country_flags[$destination_country] ?? '';
                                                echo $flag ? "<img src='$flag' alt='Флаг $destination_country'> $destination_country" : $destination_country;
                                            endif;
                                            ?>
                                        </span>
                                        <span class="empty-path-code"><?php echo esc_html($plane['origin_code'] ?? ''); ?></span>
                                        <span class="empty-path-city"><?php echo esc_html($plane['origin_city'] ?? ''); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="empty-path-flight">
                                <div class="empty-path-date">
                                    <p class="empty-path-info">
                                        <?php
                                        if (!empty($plane['flight_date'])) {
                                            echo date('d.m, H:i', strtotime($plane['flight_date']));
                                        } else {
                                            echo 'Дата не указана';
                                        }
                                        ?>
                                    </p>
                                    <p class="empty-path-label">Дата вылета</p>
                                </div>
                                <div class="empty-path-seat">
                                    <p class="empty-path-info"><?php echo esc_html($plane['seats'] ?? '—'); ?></p>
                                    <p class="empty-path-label">Всего мест</p>
                                </div>
                            </div>
                            <p class="empty-path-price">$<?php echo esc_html($plane['price'] ?? '—'); ?></p>
                            <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p>Нет данных о перелётах.</p>
        <?php endif; ?>



        <!-- <div class="empty-grid empty-all-grid" style="display: none;">
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                    <p class="empty-path-price">$10 000</p>
                    <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
                </div>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                    <p class="empty-path-price">$10 000</p>
                    <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
                </div>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
            <div class="empty-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="empty-img" loading="lazy" alt="">
                <h3 class="h3">Citation Longitude</h3>
                <div class="empty-path">
                    <div class="empty-path-row">
                        <div class="empty-path-start">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/usa.png" loading="lazy"
                                        alt="">США</span>
                                <span class="empty-path-code">NCY</span>
                                <span class="empty-path-city">Абердин, SD</span>
                            </div>
                        </div>
                        <div class="empty-path-end">
                            <div class="empty-path-airport">
                                <span class="empty-path-country"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/flags/Flag2.png" loading="lazy"
                                        alt="">Африка</span>
                                <span class="empty-path-code">AEV</span>
                                <span class="empty-path-city">Абилин, TX</span>
                            </div>
                        </div>
                    </div>
                    <div class="empty-path-flight">
                        <div class="empty-path-date">
                            <p class="empty-path-info">24.03, 18:15</p>
                            <p class="empty-path-label">Дата вылета</p>
                        </div>
                        <div class="empty-path-seat">
                            <p class="empty-path-info">125</p>
                            <p class="empty-path-label">Всего мест</p>
                        </div>
                    </div>
                </div>
                <p class="empty-path-price">$10 000</p>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Забронировать</button>
            </div>
        </div> -->
        <!-- <div class="show-more">
            <a href="" class="link">Смотреть ещё</a>
        </div> -->
    </div>
</section>

<div class="seo-sect">
    <div class="container">
        <h2 class="h2 center">Как найти расписание пустых перелетов</h2>
        <p>Партнерская программа является отличной возможностью для тех, кто хочет монетизировать свою страсть к роскошным путешествиям на частных самолетах. Эта программа открывает дверь в мир бизнес авиации: от частных самолетов и групповых чартеров до грузовых услуг, аренды самолетов и продажи реактивных джетов.</p>
        <p>Эта программа создана для энтузиастов из различных отраслей сегмента люкс. Если вы работаете с людьми из премиального сегмента, то вы можете стать нашим амбассадором и получать кэшбэк с успешных рейсов ваших клиентов. </p>
        <p>Мы обеспечиваем поддержку 24/7, предоставляя всю необходимую информацию. Вам предоставляется персональный советник по вопросам частной авиации, который будет отвечать на все интересующие вопросы. </p>
        <p>Лидер.Джет сочетает конкурентные цены с качеством работы, благодаря нашему многолетнему опыту и доступу к эксклюзивным предложениям.</p>
    </div>
</div>

<section class="regular-sect">
    <div class="container">
        <div class="cta-row-big">
            <div class="cta-left">
                <h2 class="h1">Остались вопросы?</h2>
                <p class="text">Оставьте свои контактные данные и мы свяжемся с вами в течении 5 минут и подробнее обо всем расскажем</p>
                <h3 class="h3">Также мы есть в соц. сетях:</h3>
                <div class="form-social">
                    <a href="https://t.me/+77776777527" rel="nofollow" class="btn-icon"><img src="https://jethunter.aero/wp-content/themes/jethunter/img/icons/tg-gradient.svg" loading="lazy" alt="Telegram"></a>
                    <a href="https://wa.me/+77776777527" rel="nofollow" class="btn-icon"><img src="https://jethunter.aero/wp-content/themes/jethunter/img/icons/wa-gradient.svg" loading="lazy" alt="WhatsApp"></a>
                </div>
            </div>
            <div class="cta-right">
                <div class="form-bg">
                    <?php echo do_shortcode('[contact-form-7 id="2fe469b" title="CTA 3"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="instruction-sect">
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
</section>

<section class="features-sect">
    <div class="container">
        <h2 class="h2 center">Наши преимущества</h2>
        <div class="features-grid">
            <div class="features-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/feature-1.svg" class="features-item-icon" loading="lazy" alt="">
                <div class="features-item-text">
                    <h3 class="h3">Опыт продаж</h3>
                    <p>Мы — не новички в мире бизнес-авиации. За нашими плечами более 10 лет успешных сделок, что гарантирует вам профессионализм и глубокое понимание рынка.</p>
                </div>
            </div>
            <div class="features-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/feature-2.svg" class="features-item-icon" loading="lazy" alt="">
                <div class="features-item-text">
                    <h3 class="h3">Собственная юридическая служба</h3>
                    <p>Забудьте о бюрократических препонах и юридических тонкостях. Наши опытные юристы обеспечат безупречную чистоту и прозрачность сделки на всех этапах.</p>
                </div>
            </div>
            <div class="features-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/feature-3.svg" class="features-item-icon" loading="lazy" alt="">
                <div class="features-item-text">
                    <h3 class="h3">Одобрение основными эскроу-агентами</h3>
                    <p>Мы сотрудничаем с ведущими эскроу-агентами, что гарантирует безопасность и надежность ваших финансовых операций.</p>
                </div>
            </div>
            <div class="features-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/feature-4.svg" class="features-item-icon" loading="lazy" alt="">
                <div class="features-item-text">
                    <h3 class="h3">Удобные способы оплаты</h3>
                    <p>Мы предлагаем гибкие условия и большой выбор способов оплаты, чтобы сделка была максимально комфортной для вас.</p>
                </div>
            </div>
            <div class="features-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/feature-5.svg" class="features-item-icon" loading="lazy" alt="">
                <div class="features-item-text">
                    <h3 class="h3">Эксклюзивный доступ к рынку</h3>
                    <p>Мы обладаем обширной базой данных бизнес-джетов и налаженными контактами с владельцами самолетов, что даёт нам доступ к эксклюзивным предложениям и редким моделям самолетов.</p>
                </div>
            </div>
            <div class="features-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/feature-6.svg" class="features-item-icon" loading="lazy" alt="">
                <div class="features-item-text">
                    <h3 class="h3">Партнерские отношения с мировыми лидерами</h3>
                    <p>Мы сотрудничаем с ведущими производителями и сервисными центрами по всему миру, что позволяет нам предлагать лучшие условия и гарантировать высочайший уровень обслуживания.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reviews-sect">
    <div class="container">
        <h2 class="h2 center">Отзывы клиентов о нас</h2>
        <div class="reviews-grid">
            <div class="reviews-item">
                <span class="reviews-rate">4.8</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Jet Hunter внимательно прислушивались к нашим потребностям и очень быстро реагировали, предлагая индивидуальные экономически-эффективные решения. Вам будет трудно найти другую организацию, которая может сравниться с их гибкостью и универсальностью. Я бы порекомендовал любую из услуг Jet Hunter любому владельцу бизнеса или оператору.</p>
                <p>Евгений С.</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.9</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Продажа самолета похожа на прокладывание пути по минному полю потенциальных ошибок: но Jet Hunter устранила все неопределенности, которые у нас были, и дала нам уверенность в правильности своего курса действий, тщательно объясняя и обосновывая свои доводы на каждом этапе пути. Мы не могли быть более довольны руководством, поддержкой и личным вниманием, которые мы получили от всей команды Jet Hunter!</p>
                <p>Агентство Х.</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.5</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-half.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Мы обратились в Jet Hunter по рекомендации партнеров и не пожалели! Высокий профессионализм, оперативность и широкий выбор самолетов — вот что отличает эту компанию. Мы уверены в нашем выборе и рекомендуем Jet Hunter всем, кто ценит свой комфорт.</p>
                <p>Корпорация А</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.7</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-half.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Сделка по покупке самолета — это всегда сложный и многоэтапный процесс. Но с Jet Hunter все прошло гладко и прозрачно. Отдельное спасибо юридической службе за оперативное решение всех вопросов!</p>
                <p>Виталий</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.9</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Как профессионал, я могу оценить техническое состояние самолетов, предлагаемых Jet Hunter. Все машины находятся в отличном состоянии и соответствуют высочайшим стандартам безопасности.</p>
                <p>Леонид Х.</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.8</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Творчество моего руководителя требует вдохновения, и он нашел его в путешествиях. Благодаря Jet Hunter у него появилась возможность проводить выставки по всему миру, не тратя время на аренду джетов. Не тратили лишнего времени на бухгалтерию, минимальное присутствие, рекомендуем.</p>
                <p>Менеджер Майкла О</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>