<?php $steps_3 = carbon_get_theme_option('steps_3');
if (empty($steps_3)) return;
?>
<section class="step-sect">
    <div class="container">
        <h2 class="h2 center">3 шага к вашему идеальному полету</h2>
        <div class="step-grid">
            <!-- <div class="step-item">
                <span class="step-number">1</span>
                <h3 class="h3">Оставьте заявку</h3>
                <p>Свяжитесь с нами и расскажите о своих самых смелых пожеланиях. Мы найдем для вас самый
                    оптимальный самолет!</p>
            </div>
            <div class="step-item">
                <span class="step-number">2</span>
                <h3 class="h3">Подпишите договор</h3>
                <p>Подпишите договор аренды. Это обеспечивает защиту и понимание условий аренды для обеих сторон.
                </p>
            </div>
            <div class="step-item">
                <span class="step-number">3</span>
                <h3 class="h3">Оплатите рейс</h3>
                <p>Оплатите забронированный рейс любым удобным способом. Мы предлагаем более 50 различных вариантов
                    оплаты.</p>
            </div> -->
            <?php foreach ($steps_3 as $index => $step): ?>
                <div class="step-item">
                    <span class="step-number"><?php echo $index + 1; ?></span>
                    <h3 class="h3"><?php echo esc_html($step['title']); ?></h3>
                    <p><?php echo esc_html($step['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>