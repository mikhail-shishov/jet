<?php $steps_4 = carbon_get_theme_option('steps_4');
if (empty($steps_4)) return;
?>

<section class="step-sect">
    <div class="container">
        <h2 class="h2 center">4 шага к вашему идеальному полету</h2>
        <div class="step-grid step-grid-2">
            <!-- <div class="step-item">
                <span class="step-number">1</span>
                <h3 class="h3">Заполните форму заявки</h3>
                <p>Предоставьте всю необходимую информацию.</p>
            </div>
            <div class="step-item">
                <span class="step-number">2</span>
                <h3 class="h3">Обсудите условия с менеджером</h3>
                <p>С вами свяжется менеджер, чтобы подробно обсудить нашу программу.</p>
            </div>
            <div class="step-item">
                <span class="step-number">3</span>
                <h3 class="h3">Присоединитесь к команде</h3>
                <p>Предлагайте услуги Jet Hunter вашим друзьям, партнерам и клиентам.</p>
            </div>
            <div class="step-item">
                <span class="step-number">4</span>
                <h3 class="h3">Получите кешбек</h3>
                <p>Получайте кешбек за каждый рейс каждого приведенного клиента. Мы будем платить все время, сколько с нами будет летать этот клиент.</p>
            </div> -->
            <?php foreach ($steps_4 as $index => $step): ?>
                <div class="step-item">
                    <span class="step-number"><?php echo $index + 1; ?></span>
                    <h3 class="h3"><?php echo esc_html($step['title']); ?></h3>
                    <p><?php echo esc_html($step['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>