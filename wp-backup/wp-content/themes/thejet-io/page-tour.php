<?php
/* Template Name: Tour */
?>

<?php get_header(); ?>

<section class="tour-intro-sect">
    <div class="container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/section-image-tour.png" class="intro-img" alt="">
        <h1 class="h1">Давайте отправимся в&nbsp;путешествие</h1>
        <h2 class="h3">Предложения, подобранные специально для&nbsp;вас!</h2>
    </div>
</section>

<section class="tour-goal-sect">
    <div class="container">
        <h2 class="h2">Выберите цель вашего путешествия</h2>
        <div class="tour-goal-wrap">
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-1.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3">Отдых</h3>
                <ul class="list">
                    <li>ОАЭ</li>
                    <li>Турция</li>
                    <li>Мальдивы</li>
                    <li>Тайланд</li>
                </ul>
            </div>
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-2.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3">Спорт</h3>
                <ul class="list">
                    <li>Гольф</li>
                    <li>Формула 1</li>
                    <li>Теннис</li>
                    <li>Футбол</li>
                </ul>
            </div>
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-3.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3">Шоппинг</h3>
                <ul class="list">
                    <li>Милан</li>
                    <li>Париж</li>
                    <li>Дубай</li>
                    <li>Гонконг</li>
                </ul>
            </div>
            <div class="tour-goal-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-4.svg" class="tour-goal-img" loading="lazy" alt="">
                <h3 class="h3">Достопримечательности</h3>
                <ul class="list">
                    <li>Пиза</li>
                    <li>Париж</li>
                    <li>Пекин</li>
                    <li>Нью-Йорк</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="tour-list-sect">
    <div class="container">
        <ul class="nav-tabs">
            <li class="nav-tabs-item active"><a href="#tab-1" class="btn btn-tab-full">Показать все</a></li>
            <li class="nav-tabs-item"><a href="#tab-2" class="btn btn-tab-full">Горячие предложения</a></li>
            <li class="nav-tabs-item"><a href="#tab-3" class="btn btn-tab-full">С&nbsp;детьми</a></li>
            <li class="nav-tabs-item"><a href="#tab-4" class="btn btn-tab-full">С&nbsp;друзьями</a></li>
            <div class="nav-tabs-right">
                <div class="dropdown">
                    <button class="dropdown__button" type="button">Сортировать по</button>
                    <ul class="dropdown__list">
                        <li class="dropdown__list-item dropdown__list-item_active" data-value="Дате">Дате</li>
                        <li class="dropdown__list-item" data-value="Популярности">Популярности</li>
                        <li class="dropdown__list-item" data-value="Времени чтения">Времени чтения</li>
                    </ul>
                    <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                </div>
            </div>
        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">

                <div class="tour-list-wrap">
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/article-image.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Межклубный женский чемпионат - история пишется в Strawberry Fields</h2>
                            <p>2 - 4 августа в гольф-клубе Strawberry Fields пройдет традиционный четвертый по счету межклубный матчевый чемпионат среди синьоров "Мастерс 55+". Сразу после турнира Masters55+ зажжется звезда нового турнира— межклубного женского чемпионата. Это будет не просто соревнование, а настоящий фестиваль женского гольфа.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-example-2.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Оказывается, коронованный герцог графства так же органично вписывается в наши планы</h2>
                            <p>Являясь всего лишь частью общей картины, сделанные на базе интернет-аналитики выводы, инициированные исключительно синтетически, подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, консультация с широким активом выявляет срочную потребность системы массового участия! С.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-example-3.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Давайте разбираться: в провинциях ещё есть чем поживиться</h2>
                            <p>Внезапно, активно развивающиеся страны третьего мира и по сей день остаются уделом либералов, которые жаждут быть объявлены нарушающими общечеловеческие нормы этики и морали. В частности, перспективное планирование, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для анализа.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <a href="" class="btn">Показать больше</a>
                </div>
            </div>
            <div id="tab-2" class="tab-pane">
                <div class="tour-list-wrap">
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/article-image.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Вариант 2 Межклубный женский чемпионат - история пишется в Strawberry Fields</h2>
                            <p>2 - 4 августа в гольф-клубе Strawberry Fields пройдет традиционный четвертый по счету межклубный матчевый чемпионат среди синьоров "Мастерс 55+". Сразу после турнира Masters55+ зажжется звезда нового турнира— межклубного женского чемпионата. Это будет не просто соревнование, а настоящий фестиваль женского гольфа.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-example-2.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Оказывается, коронованный герцог графства так же органично вписывается в наши планы</h2>
                            <p>Являясь всего лишь частью общей картины, сделанные на базе интернет-аналитики выводы, инициированные исключительно синтетически, подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, консультация с широким активом выявляет срочную потребность системы массового участия! С.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-example-3.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Давайте разбираться: в провинциях ещё есть чем поживиться</h2>
                            <p>Внезапно, активно развивающиеся страны третьего мира и по сей день остаются уделом либералов, которые жаждут быть объявлены нарушающими общечеловеческие нормы этики и морали. В частности, перспективное планирование, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для анализа.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <a href="" class="btn">Показать больше</a>
                </div>
            </div>
            <div id="tab-3" class="tab-pane">
                <div class="tour-list-wrap">
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/article-image.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Вариант 3 Межклубный женский чемпионат - история пишется в Strawberry Fields</h2>
                            <p>2 - 4 августа в гольф-клубе Strawberry Fields пройдет традиционный четвертый по счету межклубный матчевый чемпионат среди синьоров "Мастерс 55+". Сразу после турнира Masters55+ зажжется звезда нового турнира— межклубного женского чемпионата. Это будет не просто соревнование, а настоящий фестиваль женского гольфа.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-example-2.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Оказывается, коронованный герцог графства так же органично вписывается в наши планы</h2>
                            <p>Являясь всего лишь частью общей картины, сделанные на базе интернет-аналитики выводы, инициированные исключительно синтетически, подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, консультация с широким активом выявляет срочную потребность системы массового участия! С.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-example-3.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Давайте разбираться: в провинциях ещё есть чем поживиться</h2>
                            <p>Внезапно, активно развивающиеся страны третьего мира и по сей день остаются уделом либералов, которые жаждут быть объявлены нарушающими общечеловеческие нормы этики и морали. В частности, перспективное планирование, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для анализа.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <a href="" class="btn">Показать больше</a>
                </div>
            </div>
            <div id="tab-4" class="tab-pane">
                <div class="tour-list-wrap">
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/article-image.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Вариант 4 Межклубный женский чемпионат - история пишется в Strawberry Fields</h2>
                            <p>2 - 4 августа в гольф-клубе Strawberry Fields пройдет традиционный четвертый по счету межклубный матчевый чемпионат среди синьоров "Мастерс 55+". Сразу после турнира Masters55+ зажжется звезда нового турнира— межклубного женского чемпионата. Это будет не просто соревнование, а настоящий фестиваль женского гольфа.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-example-2.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Оказывается, коронованный герцог графства так же органично вписывается в наши планы</h2>
                            <p>Являясь всего лишь частью общей картины, сделанные на базе интернет-аналитики выводы, инициированные исключительно синтетически, подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, консультация с широким активом выявляет срочную потребность системы массового участия! С.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                    <div class="tour-list-item">
                        <a href="" class="tour-list-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/tour-example-3.jpg" loading="lazy" alt="">
                        </a>
                        <div class="tour-list-text">
                            <span class="article-date">17.07.2024</span>
                            <h2 class="h2">Давайте разбираться: в провинциях ещё есть чем поживиться</h2>
                            <p>Внезапно, активно развивающиеся страны третьего мира и по сей день остаются уделом либералов, которые жаждут быть объявлены нарушающими общечеловеческие нормы этики и морали. В частности, перспективное планирование, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для анализа.</p>
                            <div class="article-info">
                                <a href="" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <a href="" class="btn">Показать больше</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>