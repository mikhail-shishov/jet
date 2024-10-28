<?php
$meta_title = 'Наши самолёты';
$meta_description = '...';
?>

<?php include_once 'header.php'; ?>

<section class="intro-sect">
    <div class="container">
        <h1 class="h1">Самолеты для прирожденных лидеров</h1>
        <h2 class="h3">Новое слово в бизнес-авиации</h2>
        <img src="img/planes/section-image.png" class="intro-img" alt="">
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
        <div class="looking-grid">
            <div class="looking-item">
                <img src="img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Скорость</p>
                        <p class="looking-row-desc">ACJ 320 neo</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Дальность</p>
                        <p class="looking-row-desc">11000 км/
                        5939 nm</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Количество мест</p>
                        <p class="looking-row-desc">19</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена в час</p>
                        <p class="looking-row-desc">22 300₽</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Подробнее</a>
            </div>
            <div class="looking-item">
                <img src="img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Скорость</p>
                        <p class="looking-row-desc">ACJ 320 neo</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Дальность</p>
                        <p class="looking-row-desc">11000 км/
                        5939 nm</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Количество мест</p>
                        <p class="looking-row-desc">19</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена в час</p>
                        <p class="looking-row-desc">22 300₽</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Подробнее</a>
            </div>
            <div class="looking-item">
                <img src="img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Скорость</p>
                        <p class="looking-row-desc">ACJ 320 neo</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Дальность</p>
                        <p class="looking-row-desc">11000 км/
                        5939 nm</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Количество мест</p>
                        <p class="looking-row-desc">19</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена в час</p>
                        <p class="looking-row-desc">22 300₽</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Подробнее</a>
            </div>
            <div class="looking-item">
                <img src="img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Скорость</p>
                        <p class="looking-row-desc">ACJ 320 neo</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Дальность</p>
                        <p class="looking-row-desc">11000 км/
                        5939 nm</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Количество мест</p>
                        <p class="looking-row-desc">19</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена в час</p>
                        <p class="looking-row-desc">22 300₽</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Подробнее</a>
            </div>
            <div class="looking-item">
                <img src="img/planes/1.png" class="looking-img" loading="lazy" alt="">
                <h3 class="h3">Challenger 350</h3>
                <div class="looking-desc">
                    <div class="looking-row">
                        <p class="looking-row-title">Скорость</p>
                        <p class="looking-row-desc">ACJ 320 neo</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Дальность</p>
                        <p class="looking-row-desc">11000 км/
                        5939 nm</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Количество мест</p>
                        <p class="looking-row-desc">19</p>
                    </div>
                    <div class="looking-row">
                        <p class="looking-row-title">Цена в час</p>
                        <p class="looking-row-desc">22 300₽</p>
                    </div>
                </div>
                <a href="" class="btn btn-green-fill">Подробнее</a>
            </div>
        </div>
        <div class="show-more">
            <button class="btn btn-more">Смотреть ещё</button>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>