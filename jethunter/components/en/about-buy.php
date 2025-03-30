<?php $about_section = carbon_get_theme_option('about_buy_en'); ?>

<!-- <section class="about-sect">
    <div class="container">
        <h2 class="h2 center">Как выбрать самолет в аренду?</h2>
        <h3 class="h3 center">Выбор самолета для аренды – это важный шаг, от которого зависит комфорт и успешность вашего путешествия. Вот ключевые факторы, которые стоит учесть:</h3>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/comfort.svg" width="460" height="460" class="about-img" loading="lazy" alt="">

            <h3 class="h3">Цель поездки:</h3>
            <ul class="list">
                <li>Деловая поездка: для деловых встреч подойдет небольшой, но комфортабельный самолет, например, Cessna Citation CJ3+ или Embraer Phenom 300.</li>
                <li>Отдых с семьей/друзьями: если вы путешествуете большой компанией, выбирайте более вместительные модели, например, Bombardier Challenger 605 или Gulfstream G550.</li>
                <li>Трансконтинентальный перелет: для длительных перелетов необходим самолет с большим запасом хода, например, Bombardier Global 6000 или Gulfstream G650ER.</li>
            </ul>

            <h3 class="h3">Количество пассажиров:</h3>
            <ul class="list">
                <li>Определите точное число пассажиров, чтобы выбрать самолет с достаточным количеством мест и уровнем комфорта.</li>
            </ul>

            <div class="about-row">
                <div class="about-col">
                    <h3 class="h3">Расстояние и маршрут:</h3>
                    <ul class="list">
                        <li>Учитывайте дальность полета выбранной модели и возможность посадки в аэропорту назначения. Изучите особенности маршрута: для горной местности могут потребоваться самолеты с определенными техническими характеристиками.</li>
                    </ul>
                </div>
                <div class="about-col">
                    <h3 class="h3">Бюджет:</h3>
                    <ul class="list">
                        <li>Определите бюджет и сравните стоимость аренды разных моделей.</li>
                        <li>Учитывайте дополнительные расходы: посадка, обслуживание в аэропорту, питание на борту.</li>
                    </ul>
                </div>
                <div class="about-col">
                    <h3 class="h3">Дополнительные требования:</h3>
                    <ul class="list">
                        <li>Наличие спальни, кухни, душевой кабины, интернета, развлекательной системы.</li>
                        <li>Необходимость перевозки багажа, спортивного инвентаря, домашних животных.</li>
                    </ul>
                </div>
            </div>

        </div>
        <h3 class="h3 center">Правильно выбранный самолет – это гарантия комфортного, безопасного и незабываемого путешествия!</h3>
    </div>
</section> -->
<section class="about-sect">
    <div class="container">
        <?php if (!empty($about_section)) {
            foreach ($about_section as $section) {
                if (!empty($section['h2'])) {
                    echo '<h2 class="h2 center">' . esc_html($section['h2']) . '</h2>';
                }

                if (!empty($section['h3'])) {
                    echo '<h3 class="h3 center">' . esc_html($section['h3']) . '</h3>';
                }

                echo '<div class="about-text">';

                if (!empty($section['img'])) {
                    $img_url = wp_get_attachment_image_url($section['img'], 'full');
                    echo '<img src="' . esc_url($img_url) . '" class="about-img" loading="lazy" alt="">';
                }

                if (!empty($section['text_1'])) {
                    echo wp_kses_post($section['text_1']);
                }

                echo '<div class="about-row">';

                if (!empty($section['text_2'])) {
                    echo '<div class="about-col">' . wp_kses_post($section['text_2']) . '</div>';
                }

                if (!empty($section['text_3'])) {
                    echo '<div class="about-col">' . wp_kses_post($section['text_3']) . '</div>';
                }

                if (!empty($section['text_4'])) {
                    echo '<div class="about-col">' . wp_kses_post($section['text_4']) . '</div>';
                }

                echo '</div>'; // .about-row
                echo '</div>'; // .about-text

                if (!empty($section['h3_bottom'])) {
                    echo '<h3 class="h3 center">' . esc_html($section['h3_bottom']) . '</h3>';
                }
            }
        }
        ?>
    </div>
</section>