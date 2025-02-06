<?php
/* Template Name: Wanted EN */
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
        <h1 class="h1">EN Продажа и аренда частных самолётов по всему миру</h1>
        <h2 class="h3">Новая эра бизнес-авиации</h2>
        <div class="btn-container">
            <a href="/our-fleet" class="btn btn-green-fill">Узнать больше</a>
            <button type="button" class="btn js-modal" data-modal="#call">Связаться с нами</button>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/section-wanted-image.webp" class="intro-img" alt="">
    </div>
</section>

<div class="fleet-sect">
    <div class="container">
        <div class="search-wrap">
            <form action="" class="search-form">
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
                            <li class="dropdown__list-item dropdown__list-item_active" data-value="Любой">Любой</li>
                            <li class="dropdown__list-item" data-value="1">1</li>
                            <li class="dropdown__list-item" data-value="2">2</li>
                            <li class="dropdown__list-item" data-value="3">3</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Дальность</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active" data-value="Любой">Любой</li>
                            <li class="dropdown__list-item" data-value="1">1</li>
                            <li class="dropdown__list-item" data-value="2">2</li>
                            <li class="dropdown__list-item" data-value="3">3</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Цена</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active" data-value="Любой">Любой</li>
                            <li class="dropdown__list-item" data-value="1">1</li>
                            <li class="dropdown__list-item" data-value="2">2</li>
                            <li class="dropdown__list-item" data-value="3">3</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown_with-chk">
                        <button class="dropdown_with-chk__button" type="button">Количество мест</button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="i-1" id="i-1" />
                                <label class="dropdown_with-chk__list-item_label" for="i-1">Вариант 1</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="i-2" id="i-2" />
                                <label class="dropdown_with-chk__list-item_label" for="i-2">Вариант 2</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="i-3" id="i-3" />
                                <label class="dropdown_with-chk__list-item_label" for="i-3">Вариант 3</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="i-4" id="i-4" />
                                <label class="dropdown_with-chk__list-item_label" for="i-4">Вариант 4</label>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="btn-container">
                    <button type="button" class="btn btn-green-fill">Найти</button>
                    <button type="button" class="btn">Сбросить</button>
                </div>
            </form>
        </div>
        <div class="looking-grid looking-grid-full">
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
            <div class="looking-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Год выпуска</p>
                        <p class="looking-row-desc">2014</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Налет часов</p>
                        <p class="looking-row-desc">2350</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена</p>
                        <p class="looking-row-desc">до 15 000 000$</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Предложить</a>
            </div>
        </div>
        <div class="show-more">
            <button class="btn btn-more">Смотреть ещё</button>
        </div>
    </div>
</div>

<section class="features-sect">
    <div class="container">
        <h2 class="h2 center">Наши преимущества</h2>
        <div class="features-grid">
            <div class="features-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/feature-1.svg" class="features-item-icon" loading="lazy" alt="">
                <div class="features-item-text">
                    <h3 class="h3">Опыт продаж</h3>
                    <p>Мы — не новички в мире бизнес-авиации.  За нашими плечами более 10 лет успешных сделок, что гарантирует вам профессионализм и глубокое понимание рынка.</p>
                </div>
            </div>
            <div class="features-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/feature-2.svg" class="features-item-icon" loading="lazy" alt="">
                <div class="features-item-text">
                    <h3 class="h3">Собственная юридическая служба</h3>
                    <p>Забудьте о бюрократических препонах и юридических тонкостях.  Наши опытные юристы обеспечат безупречную чистоту и прозрачность сделки на всех этапах.</p>
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
                    <p>Мы сотрудничаем с ведущими производителями и сервисными центрами по всему миру, что позволяет нам предлагать лучшие условия и  гарантировать  высочайший  уровень  обслуживания.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="instruction-sect">
    <div class="container">
        <h2 class="h2 center">Как купить самолет?</h2>
        <div class="instruction-wrap">
            <div class="instruction-block">
                <h3 class="h3">Шаг 1 – Определить требования к самолету</h3>
                <p>Определите свой бюджет и потребности к перелетам: куда вы хотите летать? Как часто? Сколько пассажиров будете перевозить? Какой уровень комфорта предпочитаете? </p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Шаг 2 – Связаться с нами </h3>
                <p>Свяжитесь с нашим менеджером, который поможет вам разобраться в технических характеристиках самолетов и выбрать наиболее подходящую модель.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Шаг 3 – Выбрать модель самолета</h3>
                <p>Исходя из ваших требований, мы подберем несколько моделей самолетов, оптимально подходящих по техническим характеристикам, вместимости, дальности полета и другим параметрам. А также поможем вам сравнить выбранные модели и сделать осознанный выбор. Мы рекомендуем выбирать самолет, который на 80% соответствует вашему идеалу.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Шаг 4 – Визуальный осмотр самолета</h3>
                <p>Выберите один или два самолета из предложенных вариантов. Мы договоримся о проведении визуального осмотра, где вы сможете лично осмотреть самолет, оценить состояние его интерьера и экстерьера и определить наиболее подходящий вариант для покупки.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Шаг 5 – LOI и договор</h3>
                <p>Необходимо будем подписать Письмо о намерениях приобрести воздушное судно (LOI), внести депозит и подписать Договор на покупку ВС, составленный нашими опытными юристами.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Шаг 6 – Предпродажная инспекция (PPI)</h3>
                <p>Мы организуем независимую техническую инспекцию самолета в сертифицированном центре, чтобы убедиться в его безопасности и исправности. Вы получите подробный отчет о техническом состоянии самолета, чтобы быть уверены в его надежности. В результате вы получите полностью исправный самолет в летной годности.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Шаг 7 – Закрытие сделки</h3>
                <p>На этом этапе самолет перелетает в место закрытия сделки и проводится оплата самолета любым удобным вам способом. Сделка проходит через эскроу-агента, что гарантирует безопасность и прозрачность при проведении сделки. Ваши средства будут отправлены продавцу только после получения всех необходимых документов на самолет.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Шаг 8 – Получение самолета</h3>
                <p>Мы организуем торжественную церемонию передачи самолета в ваше распоряжение.
                И обеспечим комфортное начало эксплуатации вашего нового самолета. При необходимости мы рекомендуем эксплуатанта, страховую компанию и сервисный центр.</p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="app-sect">
    <div class="container">
        <div class="app-row">
            <div class="app-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/app.svg" class="app-icon" width="144" height="144" alt="">
                <h2 class="h2">Скачивайте мобильное приложение JetHunter</h2>
                <p>Мгновенно бронируйте свой идеальный полет с JetHunter в приложении с круглосуточной поддержкой.
                </p>

                <div class="btn-container">
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/google-play.png" class="app-store-icon" alt=""></a>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/app-store.png" class="app-store-icon" alt=""></a>
                </div>
            </div>
            <div class="app-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/iphone-mockup.png" class="app-mockup" loading="lazy" alt="">
            </div>
        </div>
    </div>
</section> -->

<?php get_footer(); ?>