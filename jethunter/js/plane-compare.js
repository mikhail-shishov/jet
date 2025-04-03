document.addEventListener("DOMContentLoaded", fetchComparison);

const fieldLabels = {
    '_cruise_speed_kmh': 'Cruising speed, km/h',
    '_range_time': 'Flight time',
    '_max_takeoff_height_m': 'Maximum flight altitude, m',
    '_max_takeoff_weight_kg': 'Maximum takeoff weight, kg',
    '_max_landing_weight_kg': 'Landing weight, kg',
    '_payload_kg': 'Payload, kg',
    '_takeoff_distance_m': 'Takeoff distance, m',
    '_landing_distance_m': 'Landing distance, m',
    '_aircraft_engine_count': 'Number of engines',
    '_aircraft_engine': 'Engine',
    '_vsu': 'Auxiliary power unit',
    '_avionics': 'Avionics',
    '_cabin_width_m': 'Cabin width, m',
    '_cabin_length_m': 'Cabin length, m',
    '_cabin_height_m': 'Cabin height, m',
    '_cabin_volume_m': 'Cabin volume, m',
    '_luggage_volume_m': 'Luggage compartment, m',
    '_aircraft_length_m': 'Aircraft length, m',
    '_aircraft_height_m': 'Aircraft height, m',
    '_range_km': 'Range, km',
    '_aircraft_seats': 'Seats',
    '_production_start': 'Production start',
    '_production_end': 'Production end',
    '_production_country': 'Country',
};

function fetchComparison() {
    const comparisonPlanesCookie = getCookie('comparison_planes');
    const container = document.getElementById('comparison-container');

    if (!comparisonPlanesCookie) {
        if (container) {
            container.innerHTML = '<p class="compare-empty">Нет самолётов для сравнения</p>';
        }
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