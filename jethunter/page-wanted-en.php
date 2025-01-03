<?php
/* Template Name: Wanted EN */
?>

<?php get_header(); ?>

<section class="intro-fleet-sect">
    <div class="container">
        <h1 class="h1">EN Самолеты для прирожденных охотников</h1>
        <h2 class="h3">Для тех, кто всегда на высоте</h2>
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

<section class="app-sect">
    <div class="container">
        <div class="app-row">
            <div class="app-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/app.svg" class="app-icon" width="144" height="144" alt="">
                <h2 class="h2">Скачивайте мобильное приложение The Jet</h2>
                <p>Мгновенно бронируйте свой идеальный полет с The Jet в приложении с круглосуточной поддержкой.
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
</section>

<?php get_footer(); ?>