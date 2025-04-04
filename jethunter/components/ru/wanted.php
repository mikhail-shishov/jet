<section class="regular-sect">
    <div class="container">
        <div class="center">
            <h2 class="h2">Мы ищем</h2>
        </div>

        <?php $planes_data = carbon_get_theme_option(get_the_ID(), 'wanted_short');
        // error_log(print_r($planes_data, true));

        if ($planes_data) : ?>
            <div class="looking-grid looking-grid-full">
                <?php foreach ($planes_data as $plane) :
                    $image_url = !empty($plane['image']) ? wp_get_attachment_url($plane['image']) : get_stylesheet_directory_uri() . '/img/planes/1.png';
                    $item_class = $index >= 10 ? 'looking-item is-hidden' : 'looking-item';
                ?>
                    <div class="<?php echo $item_class; ?>">
                        <img src="<?php echo esc_url($image_url); ?>" class="looking-img" loading="lazy" alt="<?php echo esc_attr($plane['title']); ?>">
                        <h3 class="h3"><?php echo esc_html($plane['title']); ?></h3>
                        <div class="looking-desc">
                            <div class="looking-row">
                                <p class="looking-row-title">Год выпуска</p>
                                <p class="looking-row-desc"><?php echo esc_html($plane['produced_year'] ?: 'Не указан'); ?></p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Налет часов</p>
                                <p class="looking-row-desc"><?php echo esc_html($plane['hours_flown'] ?: 'Не указан'); ?></p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Цена</p>
                                <p class="looking-row-desc"><?php echo esc_html($plane['price'] ? ' ' . number_format($plane['price'], 0, ',', ' ') . '$' : 'По запросу'); ?></p>
                            </div>
                        </div>
                        <button type="button" class="btn js-modal" data-modal="#call">Предложить</button>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>