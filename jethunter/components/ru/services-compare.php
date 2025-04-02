<section class="compare-sect">
    <div class="container">
        <h2 class="h2 center">Сравните уровень нашего сервиса</h2>
        <!-- <div class="compare-table">
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
        </div> -->
        <?php $compare_table = carbon_get_theme_option('compare_table');

        if ($compare_table) : ?>
            <div class="compare-table">
                <div class="compare-head">
                    <span class="compare-head-title">Обычный брокер</span>
                    <span class="compare-head-title">Обычная авиакомпания</span>
                    <span class="compare-head-title">Jet Hunter</span>
                </div>
                <div class="compare-body">
                    <?php foreach ($compare_table as $row) : ?>
                        <div class="compare-row">
                            <p class="compare-body-title"><?= esc_html($row['title']); ?></p>
                            <div class="compare-check-row">
                                <div class="compare-check-img <?= $row['broker'] !== 'yes' ? esc_attr($row['broker']) : ''; ?>">
                                    <?= $row['broker'] === 'yes' ? 'Есть' : 'Нет'; ?>
                                </div>
                                <div class="compare-check-img <?= $row['airline'] !== 'yes' ? esc_attr($row['airline']) : ''; ?>">
                                    <?= $row['airline'] === 'yes' ? 'Есть' : 'Нет'; ?>
                                </div>
                                <div class="compare-check-img <?= $row['jethunter'] !== 'yes' ? esc_attr($row['jethunter']) : ''; ?>">
                                    <?= $row['jethunter'] === 'yes' ? 'Есть' : 'Нет'; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>