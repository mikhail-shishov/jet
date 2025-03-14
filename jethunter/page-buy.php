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

<section class="regular-sect">
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
</section>

<?php include_once 'components/looking-sect.php'; ?>

<section class="about-sect">
    <div class="container">
        <h2 class="h2 center">Как выбрать самолет в аренду?</h2>
        <h3 class="h3 center">Выбор самолета для аренды – это важный шаг, от которого зависит комфорт вашего
            путешествия. Вот ключевые факторы, которые стоит учесть:</h3>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/comfort.svg" width="460" height="460" class="about-img" loading="lazy" alt="">

            <h3 class="h3">Определите цель поездки</h3>
            <ul class="list">
                <li>Деловая поездка: для деловых встреч подойдет небольшой, но комфортабельный самолет, например,
                    Cessna Citation CJ3+ или Embraer Phenom 300E.</li>
                <li>Отдых с семьей/друзьями: если вы путешествуете большой компанией, выбирайте более вместительные
                    модели, например, Bombardier Challenger 605 или Gulfstream G550.</li>
                <li>Трансконтинентальный перелет: для длительных перелетов необходим самолет с большой дальностью,
                    например, Bombardier Global 6000 или Gulfstream G650ER.</li>
            </ul>

            <h3 class="h3">Количество пассажиров</h3>
            <ul class="list">
                <li>Определите точное число пассажиров, чтобы выбрать самолет с достаточным количеством мест и
                    уровнем комфорта для каждого.</li>
            </ul>

            <div class="about-row">
                <div class="about-col">
                    <h3 class="h3">Расстояние и маршрут</h3>
                    <ul class="list">
                        <li>Учитывайте дальность полета выбранной модели и возможность посадки в аэропорту
                            назначения.
                            Изучите особенности маршрута: для горной или морской местности могут потребоваться
                            самолеты с
                            определенными техническими характеристиками. В этом мы вам поможем!</li>
                    </ul>
                </div>
                <div class="about-col">
                    <h3 class="h3">Рассчитайте бюджет</h3>
                    <ul class="list">
                        <li>Определите бюджет и сравните стоимость аренды разных моделей.</li>
                        <li>Учитывайте дополнительные расходы: посадка, обслуживание в аэропорту, питание на борту.
                        </li>
                        <li>Мы подскажем, когда можно снизить стоимость, а когда не стоит экономить.</li>
                    </ul>
                </div>
                <div class="about-col">
                    <h3 class="h3">Дополнительные требования</h3>
                    <ul class="list">
                        <li>Наличие спальни, кухни, душевой кабины, интернета, развлекательной системы. </li>
                        <li>Необходимость перевозки багажа, спортивного инвентаря, домашних животных.</li>
                    </ul>
                </div>
            </div>

        </div>
        <h3 class="h3 center">Правильно выбранный самолет – это гарантия комфортного, безопасного и
            незабываемого путешествия!</h3>
    </div>
</section>

<section class="step-sect">
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

<section class="regular-sect">
    <div class="container">
        <div class="center">
            <h2 class="h2">Узнать больше о комплектации самолета</h2>
            <p class="text">Подскажем, подберем и проконсультруем вас по всем вопросам</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="a460904" title="CTA 1"]'); ?>
    </div>
</section>

<section class="about-sect">
    <div class="container">
        <h2 class="h2 center">Слово генерального директора</h2>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/about.svg" width="460" height="460" class="about-img" loading="lazy" alt="">

            <p>В Jet Hunter мы верим, что время – самый ценный ресурс, небо – не предел, а пространство для новых возможностей. Мы помогаем людям, ценящим свое время и стремящимся к максимальной эффективности, преодолевать любые расстояния с непревзойденным комфортом и стилем.</p>
            <p>Jet Hunter – это не просто компания по продаже бизнес-джетов. Это команда, страстно преданных своему делу и готовых превзойти ваши ожидания. Мы учитываем индивидуальные потребности каждого клиента, предлагая не только широкий выбор самолетов от ведущих мировых производителей, но и полный спектр услуг, связанных с владением и эксплуатацией бизнес-джета.</p>
            <p>Мы ценим доверие, которое вы нам оказываете, и стремимся строить долгосрочные и взаимовыгодные отношения с каждым клиентом.</p>
            <p>С Jet Hunter вы получаете не просто самолет, вы получаете ключ к безграничным возможностям!</p>
            <br>
            <p>С уважением,</p>
            <p>Алексей Мордвинцев</p>
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

<section class="compare-sect">
    <div class="container">
        <h2 class="h2 center">Сравните уровень нашего сервиса</h2>
        <div class="compare-table">
            <div class="compare-head">
                <span class="compare-head-title">Обычный брокер</span>
                <span class="compare-head-title">Обычная авиакомпания</span>
                <span class="compare-head-title">Jet Hunter</span>
            </div>
            <div class="compare-body">
                <div class="compare-row">
                    <p class="compare-body-title">Опыт более 20 лет</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Персональный менеджер</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Предложения в рамках своего флота</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Поиск самолёта по общей базе</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Доступ к эксклюзивным самолетам</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Только Проверенные подрядчики</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Оптимизация цены за счет пустых перелетов</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Замена самолета из своего флота в случае поломки</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Замена самолета любым с рынка в случае поломки</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Своя служба OPS контролирует ваш рейс 24/7</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Свой представитель в крупнейших аэропортах</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Служба Контроля Качества гарантирует постоянное качество
                        выполнения рейсов</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Традиционные способы оплаты</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Более 50 других способов оплаты!</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-slider-sect">
    <div class="container">
        <h2 class="h2 center">Наши услуги</h2>

        <!-- Slider main container -->
        <div class="swiper-container">
            <div class="swiper services-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Консалтинг</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Управление самолётом</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Консалтинг</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Консалтинг</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Управление самолётом</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Консалтинг</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev services-swiper-button-prev"></div>
            <div class="swiper-button-next services-swiper-button-next"></div>
        </div>

        <!-- <a href="/services/" class="link">Посмотреть все</a> -->
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

<section class="partners-sect">
    <div class="container">
        <h2 class="h2 center">Наши партнеры</h2>
        <div class="partners-grid">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/malindo-airlines-logo-3A2A347831-seeklogo.com 1.png" class="partners-logo"
                loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/abc.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/globeair.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/jetlinx.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/netjets.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/netjets.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/planesense.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/volato.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/wheelsup.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/xojet.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/tyrolean.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/solairus.png" class="partners-logo" loading="lazy" alt="">
        </div>
    </div>
</section>

<div class="article-wrap article-wrap-page">
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

        <!-- <h3 class="h3">Что случится, если я опоздаю на свой рейс?</h3>
            <div class="article-note article-note-contact">
                <div class="article-note-person">
                    <p class="article-note-name">При опоздании самолет и экипаж будет ждать вас, и вы сможете вылететь во столько, во сколько вам будет удобно. В случае сильной задержки мы согласуем с авиакомпанией перенос рейса на более позднее время или следующий день.</p>
                </div>
            </div> -->
    </div>
    <aside class="article-sidebar">
        <div class="form-bg">
            <?php echo do_shortcode('[contact-form-7 id="1f2bdf6" title="Вопрос в FAQ"]'); ?>
        </div>
    </aside>
</div>

<section class="plane-sect">
    <div class="container">
        <h2 class="h2 center">Взлетайте в любое время с&nbsp;Jet&nbsp;Hunter</h2>
        <div class="plane-grid">
            <div class="plane-grid-item">
                <h3 class="h3">Турбовинтовые</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Pilatus PC-12 NGX</li>
                    <li>King Air 360ER</li>
                    <li>King Air 260</li>
                    <li>Piaggio Avanti II</li>
                    <li>Beechcraft Denali</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Очень легкие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/2.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Cessna CJ1+</li>
                    <li>HondaJet Elite II</li>
                    <li>Cessna M2</li>
                    <li>Phenom 100EX</li>
                    <li>Cirrus Vision Jet</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Легкие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/3.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Cessna CJ3 Gen 2</li>
                    <li>Cessna CJ4 Gen 2</li>
                    <li>Learjet 40XR</li>
                    <li>Learjet 75</li>
                    <li>Phenom 300E</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Средние</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/4.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Citation Latitude</li>
                    <li>Citation XLS+</li>
                    <li>Pilatus PC-24</li>
                    <li>Learjet 60 XR</li>
                    <li>Praetor 500</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Супер-средние</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/5.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Challenger 350</li>
                    <li>Citation Longitude</li>
                    <li>Citation X+</li>
                    <li>Gulfstream G280</li>
                    <li>Praetor 600</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>

            <div class="plane-grid-item">
                <h3 class="h3">Большие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/6.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Challenger 604</li>
                    <li>Challenger 605</li>
                    <li>Challenger 650</li>
                    <li>Falcon 2000S</li>
                    <li>Falcon 2000LXS</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Ультра-большие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/7.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Gulfstream G450</li>
                    <li>Falcon 900LX</li>
                    <li>Challenger 850</li>
                    <li>Legacy 600</li>
                    <li>Legacy 650</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Дальне магистральные</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/8.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Global 5500</li>
                    <li>Global 7500</li>
                    <li>Falcon 8X</li>
                    <li>Gulfstream G550</li>
                    <li>Gulfstream G650ER</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Бизнес-лайнеры</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/9.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>ACJ 220</li>
                    <li>ACJ 320 neo</li>
                    <li>BBJ 737-8 MAX</li>
                    <li>Lineage 1000E</li>
                    <li>Sukhoi Business jet</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Вертолеты</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/10.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Bell 407</li>
                    <li>Airbus H125</li>
                    <li>Airbus H145</li>
                    <li>Leonardo AW109</li>
                    <li>MI-8AMT</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
        </div>
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

<?php get_footer(); ?>