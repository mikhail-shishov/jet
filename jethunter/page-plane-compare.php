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
            <p class="ru-only">Загрузка сравнения...</p>
            <p class="en-only">Loading comparison...</p>
        </div>

        <script>
            const fieldLabels = {
                '_cruise_speed_kmh': 'Крейсерская скорость, км/ч',
                '_range_time': 'Время в полете',
                '_max_takeoff_height_m': 'Макс. высота полета, м',
                '_max_takeoff_weight_kg': 'Макс. взлётный вес, кг',
                '_max_landing_weight_kg': 'Посадочный вес, кг',
                '_payload_kg': 'Грузоподъемность, кг',
                '_takeoff_distance_m': 'Взлетная дистанция, м',
                '_landing_distance_m': 'Посадочная дистанция, м',
                '_aircraft_engine_count': 'Количество двигателей',
                '_aircraft_engine': 'Тип двигателя',
                '_vsu': 'Вспомогательная силовая установка',
                '_avionics': 'Авионика',
                '_cabin_width_m': 'Ширина салона, м',
                '_cabin_length_m': 'Длина салона, м',
                '_cabin_height_m': 'Высота салона, м',
                '_cabin_volume_m': 'Объём салона, м',
                '_luggage_volume_m': 'Объём багажного отделения, м',
                '_aircraft_length_m': 'Длина самолёта, м',
                '_aircraft_height_m': 'Высота самолёта, м',
                '_range_km': 'Радиус полёта, км',
                '_aircraft_seats': 'Мест в салоне',
                '_production_start': 'Начало производства',
                '_production_end': 'Конец производства',
                '_production_country': 'Страна происхождения',
            };

            function fetchComparison() {
                console.log("fetchComparison вызван");

                const comparisonPlanesCookie = getCookie('comparison_planes');
                const container = document.getElementById('comparison-container');

                if (!comparisonPlanesCookie) {
                    container.innerHTML = '<p class="compare-empty">Нет самолётов для сравнения</p>';
                    return;
                }

                const planeIDs = JSON.parse(decodeURIComponent(comparisonPlanesCookie));

                if (!Array.isArray(planeIDs) || planeIDs.length === 0) {
                    container.innerHTML = '<p class="compare-empty">Нет самолётов для сравнения</p>';
                    return;
                }

                container.innerHTML = ''; // Полностью очищаем контейнер перед рендерингом

                renderComparison(planeIDs);
            }

            function renderComparison(planeIDs) {
                let container = document.getElementById('comparison-container');

                Promise.all(planeIDs.map(id =>
                    fetch(`https://jethunter.aero/wp-json/wc/v3/products/${id}`, {
                        method: 'GET',
                        headers: {
                            // 'Authorization': 'Basic ' + btoa('ck_e3b52bac31a8a8848d8e509f18073d2d3237a51e:cs_92a9460a5d930ec5b1423b431c3fe9be07283a38')
                            'Authorization': 'Basic ' + comparisonData.apiKey
                        }
                    })
                    .then(response => response.json())
                    .then(plane => {
                        console.log(`Самолёт ${id}:`, plane);
                        console.log("Meta data:", plane.meta_data); // Печатаем meta_data

                        let specsHTML = '';
                        if (plane.meta_data && plane.meta_data.length > 0) {
                            specsHTML = plane.meta_data
                                .filter(data => fieldLabels.hasOwnProperty(data.key)) // Фильтруем только те, что есть в fieldLabels
                                .map(data => {
                                    const label = fieldLabels[data.key];
                                    return `
                                <div class="compare-col-block">
                                    <p class="compare-col-title">${label}</p>
                                    <p class="compare-col-desc">${data.value || '—'}</p>
                                </div>`;
                                })
                                .join('');
                        }

                        return `
                    <div class="compare-col">
                        <div class="compare-edit">
                            <button class="compare-edit-delete" onclick="removeFromComparison(${plane.id})">
                                Удалить
                            </button>
                        </div>
                        <img src="${plane.images?.[0]?.src || ''}" alt="">
                        <h2 class="h2">${plane.name}</h2>
                        <div class="compare-specs">
                            ${specsHTML || '<p class="no-specs">Характеристики не найдены</p>'}
                        </div>
                    </div>`;
                    })
                    .catch(err => {
                        console.error(`Ошибка загрузки самолёта ${id}:`, err);
                        return '';
                    })
                )).then(results => {
                    container.innerHTML = results.filter(Boolean).join('') || '<p class="compare-empty">Нет самолётов для сравнения</p>';
                });
            }

            function removeFromComparison(planeID) {
                // Удаление самолёта из куки
                const comparisonPlanesCookie = getCookie('comparison_planes');
                let planeIDs = comparisonPlanesCookie ? JSON.parse(decodeURIComponent(comparisonPlanesCookie)) : [];

                // Удаляем самолет по ID
                planeIDs = planeIDs.filter(id => id !== planeID);

                // Обновляем куки с новыми данными
                setCookie('comparison_planes', JSON.stringify(planeIDs), 7); // срок действия 7 дней

                fetchComparison(); // Перезагружаем сравнение
            }

            function getCookie(name) {
                const value = `; ${document.cookie}`;
                const parts = value.split(`; ${name}=`);
                if (parts.length === 2) return parts.pop().split(';').shift();
                return null;
            }

            function setCookie(name, value, days) {
                const d = new Date();
                d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
                const expires = "expires=" + d.toUTCString();
                document.cookie = `${name}=${value}; ${expires}; path=/`;
            }

            document.addEventListener("DOMContentLoaded", fetchComparison);
        </script>
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-1.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/features.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/quiz.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/blog.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/faq.php'; ?>

<?php get_footer(); ?>