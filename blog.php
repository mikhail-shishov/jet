<?php
$meta_title = 'Блог';
$meta_description = '...';
?>

<?php include_once 'components/header.php'; ?>

<section class="blog-sect">
    <div class="container">
        <h1 class="h1 center">Новостной блог</h1>
        <ul class="nav-tabs">
            <li class="nav-tabs-item active"><a href="#tab-1" class="btn btn-tab-full">Показать все</a></li>
            <li class="nav-tabs-item"><a href="#tab-2" class="btn btn-tab-full">О нас</a></li>
            <li class="nav-tabs-item"><a href="#tab-3" class="btn btn-tab-full">О самолетах</a></li>
            <li class="nav-tabs-item"><a href="#tab-4" class="btn btn-tab-full">Об авиации</a></li>
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
                            <img src="img/illustrations/article-image.jpg" loading="lazy" alt="">
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
                            <img src="img/illustrations/tour-example-2.jpg" loading="lazy" alt="">
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
                            <img src="img/illustrations/tour-example-3.jpg" loading="lazy" alt="">
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
                <p>Контент 2</p>
            </div>
            <div id="tab-3" class="tab-pane">
                <p>Контент 3</p>
            </div>
            <div id="tab-4" class="tab-pane">
                <p>Контент 4</p>
            </div>
        </div>
    </div>
</section>

<?php include_once 'components/footer.php'; ?>