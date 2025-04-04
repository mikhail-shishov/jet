<section class="empty-all-sect">
    <div class="container">
        <div class="center">
            <h2 class="h2">Empty legs</h2>
            <p>Book an aircraft at a discounted price that flies empty on a given route. When a business jet is booked for a one-way flight only, it flies back empty. Such flights are listed for rent with a massive discount.</p>
        </div>

        <?php
        $empty_legs_short_en = carbon_get_theme_option('empty_legs_short_en');

        if (!empty($empty_legs_short_en)) : ?>
            <div class="empty-grid empty-all-grid">
                <?php foreach ($empty_legs_short_en as $plane) :
                    // Получаем URL флага по стране
                    $origin_flag = isset($country_flags[$plane['origin_country']]) ? $country_flags[$plane['origin_country']] : '';
                    $destination_flag = isset($country_flags[$plane['destination_country']]) ? $country_flags[$plane['destination_country']] : '';

                    // Получаем изображение самолета
                    $image_url = !empty($plane['image']) ? wp_get_attachment_image_url($plane['image'], 'medium') : get_stylesheet_directory_uri() . '/img/planes/default.png';

                    // Проверяем наличие необходимых данных
                    if (empty($plane['title']) && empty($plane['origin_country']) && empty($plane['destination_country'])) {
                        continue;
                    }

                    $item_class = $index >= 10 ? 'empty-item is-hidden' : 'empty-item';
                ?>
                    <div class="<?php echo $item_class; ?>">
                        <img src="<?php echo esc_url($image_url ?: 'https://jethunter.aero/wp-content/themes/jethunter/img/planes/1.png'); ?>" class="empty-img" loading="lazy" alt="<?php echo esc_attr($plane['title'] ?? 'Самолет'); ?>">
                        <h3 class="h3"><?php echo esc_html($plane['title'] ?? 'Без названия'); ?></h3>

                        <div class="empty-path">
                            <div class="empty-path-row">
                                <div class="empty-path-start">
                                    <div class="empty-path-airport">
                                        <span class="empty-path-country">
                                            <?php 
                                                $origin_country = $plane['origin_country'] ?? '';
                                                if ($origin_country){
                                                    $flag = $country_flags_global[$origin_country] ?? '';
                                                    echo $flag ? "<img src='$flag' alt='Флаг $origin_country'> $origin_country" : $origin_country;
                                                }?>
                                        </span>
                                        <span class="empty-path-code"><?php echo esc_html($plane['origin_code'] ?? ''); ?></span>
                                        <span class="empty-path-city"><?php echo esc_html($plane['origin_city'] ?? ''); ?></span>
                                    </div>
                                </div>
                                <div class="empty-path-end">
                                    <div class="empty-path-airport">
                                        <span class="empty-path-country">
                                            <?php 
                                                $origin_country = $plane['destination_country'] ?? '';
                                                if ($origin_country){
                                                    $flag = $country_flags_global[$origin_country] ?? '';
                                                    echo $flag ? "<img src='$flag' alt='Флаг $origin_country'> $origin_country" : $origin_country;
                                                }?>
                                        </span>
                                        <span class="empty-path-code"><?php echo esc_html($plane['destination_code'] ?? ''); ?></span>
                                        <span class="empty-path-city"><?php echo esc_html($plane['destination_city'] ?? ''); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="empty-path-flight">
                                <div class="empty-path-date">
                                    <p class="empty-path-info">
                                        <?php
                                        if (!empty($plane['flight_date'])) {
                                            echo date('d.m, H:i', strtotime($plane['flight_date']));
                                        } else {
                                            echo 'Дата не указана';
                                        }
                                        ?>
                                    </p>
                                    <p class="empty-path-label">Flight date</p>
                                </div>
                                <div class="empty-path-seat">
                                    <p class="empty-path-info"><?php echo esc_html($plane['seats'] ?? '—'); ?></p>
                                    <p class="empty-path-label">Seats</p>
                                </div>
                            </div>
                            <p class="empty-path-price">$<?php echo esc_html($plane['price'] ?? '—'); ?></p>
                            <button type="button" class="btn btn-green-fill js-modal" data-modal="#call">Book</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>