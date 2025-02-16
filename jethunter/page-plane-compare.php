<?php
/* Template Name: Plane compare */
?>

<?php get_header(); ?>

<section class="compare-sect">
    <div class="container">
        <div class="compare-top">
            <h1 class="h1">Сравнение самолетов</h1>
            <p>Сравните характеристики самолетов, чтобы выбрать для себя самых подходящий вариант.</p>
        </div>

        <div class="compare-main" id="comparison-container">
            <p>Пока в сравнении пусто.</p>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", fetchComparison);

            function fetchComparison() {
                fetch("<?php echo admin_url('admin-ajax.php?action=get_comparison_planes'); ?>")
                    .then(response => response.json())
                    .then(data => {
                        if (data.success && Array.isArray(data.data.planes)) {
                            renderComparison(data.data.planes);
                        } else {
                            document.getElementById('comparison-container').innerHTML =
                                '<p class="compare-empty">Нет самолётов для сравнения</p>';
                        }
                    })
                    .catch(error => console.error("Ошибка запроса:", error));
            }

            function renderComparison(planeIDs) {
                let container = document.getElementById('comparison-container');
                container.innerHTML = '';

                if (!planeIDs.length) {
                    container.innerHTML = '<p class="compare-empty">Нет самолётов для сравнения</p>';
                    return;
                }

                planeIDs.forEach(id => {
                    fetch(`<?php echo home_url('/wp-json/wc/v3/products/'); ?>${id}`)
                        .then(response => response.json())
                        .then(plane => {
                            container.innerHTML += `
                    <div class="compare-col">
                        <div class="compare-edit">
                            <button class="compare-edit-delete" onclick="removeFromComparison(${plane.id})">
                                Удалить
                            </button>
                        </div>
                        <img src="${plane.images?.[0]?.src || ''}" alt="">
                        <h2 class="h2">${plane.name}</h2>
                        <div class="compare-col-wrap">
                            <div class="compare-col-block">
                                <p class="compare-col-title">Категория</p>
                                <p class="compare-col-desc">${plane.categories?.[0]?.name || '—'}</p>
                            </div>
                            <div class="compare-col-block">
                                <p class="compare-col-title">Цена</p>
                                <p class="compare-col-desc">${plane.price}</p>
                            </div>
                            <div class="compare-col-block">
                                <p class="compare-col-title">Скорость</p>
                                <p class="compare-col-desc">${plane.meta_data?.find(m => m.key === 'speed')?.value || '—'}</p>
                            </div>
                        </div>
                    </div>`;
                        })
                        .catch(err => console.error(`Ошибка загрузки самолёта ${id}:`, err));
                });
            }

            function removeFromComparison(planeID) {
                fetch("<?php echo admin_url('admin-ajax.php?action=remove_from_comparison'); ?>", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: `plane_id=${planeID}`
                }).then(() => fetchComparison());
            }
        </script>

        <!-- <div class="compare-main">
            <div class="compare-col">
                <div class="compare-edit">
                    <button class="compare-edit-delete">Удалить</button>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" alt="">
                <h2 class="h2">Gulfstream G450</h2>
                <div class="compare-col-wrap">
                    <div class="compare-col-block">
                        <p class="compare-col-title">Категория</p>
                        <p class="compare-col-desc">Турбированный</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена нового самолета</p>
                        <p class="compare-col-desc">11 000 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена самолета с налетом</p>
                        <p class="compare-col-desc">9 000 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена аренды</p>
                        <p class="compare-col-desc">100 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Дальность</p>
                        <p class="compare-col-desc">10 000 км / 18 000 nm</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Скорость</p>
                        <p class="compare-col-desc">500 км/ч / 400 m/h</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Время в полете</p>
                        <p class="compare-col-desc">5 : 00</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Количество пассажиров</p>
                        <p class="compare-col-desc">12</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Длина самолета</p>
                        <p class="compare-col-desc">13 м / 20.12 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Высота самолета</p>
                        <p class="compare-col-desc">5 м / 7.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Размах крыла</p>
                        <p class="compare-col-desc">25 м / 32.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Длина салона</p>
                        <p class="compare-col-desc">8 м / 13.8 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Высота салона</p>
                        <p class="compare-col-desc">2 м / 5.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Ширина салона</p>
                        <p class="compare-col-desc">4 м / 8.56 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Объём салона</p>
                        <p class="compare-col-desc">10 000 л</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Объем багажника</p>
                        <p class="compare-col-desc">1000 л</p>
                    </div>
                </div>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Арендовать</button>
            </div>
            <div class="compare-col">
                <div class="compare-edit">
                    <button class="compare-edit-delete">Удалить</button>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/2.png" alt="">
                <h2 class="h2">Falcon 2000LXS</h2>
                <div class="compare-col-wrap">
                    <div class="compare-col-block">
                        <p class="compare-col-title">Категория</p>
                        <p class="compare-col-desc">Турбированный</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена нового самолета</p>
                        <p class="compare-col-desc">11 000 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена самолета с налетом</p>
                        <p class="compare-col-desc">9 000 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена аренды</p>
                        <p class="compare-col-desc">100 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Дальность</p>
                        <p class="compare-col-desc">10 000 км / 18 000 nm</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Скорость</p>
                        <p class="compare-col-desc">500 км/ч / 400 m/h</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Время в полете</p>
                        <p class="compare-col-desc">5 : 00</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Количество пассажиров</p>
                        <p class="compare-col-desc">12</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Длина самолета</p>
                        <p class="compare-col-desc">13 м / 20.12 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Высота самолета</p>
                        <p class="compare-col-desc">5 м / 7.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Размах крыла</p>
                        <p class="compare-col-desc">25 м / 32.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Длина салона</p>
                        <p class="compare-col-desc">8 м / 13.8 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Высота салона</p>
                        <p class="compare-col-desc">2 м / 5.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Ширина салона</p>
                        <p class="compare-col-desc">4 м / 8.56 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Объём салона</p>
                        <p class="compare-col-desc">10 000 л</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Объем багажника</p>
                        <p class="compare-col-desc">1000 л</p>
                    </div>
                </div>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Арендовать</button>
            </div>
            <div class="compare-col">
                <div class="compare-edit">
                    <button class="compare-edit-delete">Удалить</button>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/3.png" alt="">
                <h2 class="h2">HondaJet Elite II</h2>
                <div class="compare-col-wrap">
                    <div class="compare-col-block">
                        <p class="compare-col-title">Категория</p>
                        <p class="compare-col-desc">Турбированный</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена нового самолета</p>
                        <p class="compare-col-desc">11 000 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена самолета с налетом</p>
                        <p class="compare-col-desc">9 000 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена аренды</p>
                        <p class="compare-col-desc">100 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Дальность</p>
                        <p class="compare-col-desc">10 000 км / 18 000 nm</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Скорость</p>
                        <p class="compare-col-desc">500 км/ч / 400 m/h</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Время в полете</p>
                        <p class="compare-col-desc">5 : 00</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Количество пассажиров</p>
                        <p class="compare-col-desc">12</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Длина самолета</p>
                        <p class="compare-col-desc">13 м / 20.12 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Высота самолета</p>
                        <p class="compare-col-desc">5 м / 7.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Размах крыла</p>
                        <p class="compare-col-desc">25 м / 32.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Длина салона</p>
                        <p class="compare-col-desc">8 м / 13.8 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Высота салона</p>
                        <p class="compare-col-desc">2 м / 5.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Ширина салона</p>
                        <p class="compare-col-desc">4 м / 8.56 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Объём салона</p>
                        <p class="compare-col-desc">10 000 л</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Объем багажника</p>
                        <p class="compare-col-desc">1000 л</p>
                    </div>
                </div>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Арендовать</button>
            </div>
            <div class="compare-col">
                <div class="compare-edit">
                    <button class="compare-edit-delete">Удалить</button>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/4.png" alt="">
                <h2 class="h2">Citation Longitude</h2>
                <div class="compare-col-wrap">
                    <div class="compare-col-block">
                        <p class="compare-col-title">Категория</p>
                        <p class="compare-col-desc">Турбированный</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена нового самолета</p>
                        <p class="compare-col-desc">11 000 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена самолета с налетом</p>
                        <p class="compare-col-desc">9 000 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Цена аренды</p>
                        <p class="compare-col-desc">100 000₽</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Дальность</p>
                        <p class="compare-col-desc">10 000 км / 18 000 nm</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Скорость</p>
                        <p class="compare-col-desc">500 км/ч / 400 m/h</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Время в полете</p>
                        <p class="compare-col-desc">5 : 00</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Количество пассажиров</p>
                        <p class="compare-col-desc">12</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Длина самолета</p>
                        <p class="compare-col-desc">13 м / 20.12 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Высота самолета</p>
                        <p class="compare-col-desc">5 м / 7.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Размах крыла</p>
                        <p class="compare-col-desc">25 м / 32.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Длина салона</p>
                        <p class="compare-col-desc">8 м / 13.8 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Высота салона</p>
                        <p class="compare-col-desc">2 м / 5.28 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Ширина салона</p>
                        <p class="compare-col-desc">4 м / 8.56 ft</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Объём салона</p>
                        <p class="compare-col-desc">10 000 л</p>
                    </div>
                    <div class="compare-col-block">
                        <p class="compare-col-title">Объем багажника</p>
                        <p class="compare-col-desc">1000 л</p>
                    </div>
                </div>
                <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Арендовать</button>
            </div>
        </div> -->
    </div>
</section>

<?php get_footer(); ?>