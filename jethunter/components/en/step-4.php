<?php $steps_4 = carbon_get_theme_option('steps_4_en');
if (empty($steps_4)) return;
?>
<section class="step-sect">
    <div class="container">
        <h2 class="h2 center">4 steps to your perfect flight</h2>
        <div class="step-grid step-grid-2">
            <!-- <div class="step-item">
                <span class="step-number">1</span>
                <h3 class="h3">Fill out an application form</h3>
                <p>Provide all necessary information</p>
            </div>
            <div class="step-item">
                <span class="step-number">2</span>
                <h3 class="h3">Discuss terms with your manager</h3>
                <p>Our manager will contact you to discuss our program in detail</p>
            </div>
            <div class="step-item">
                <span class="step-number">3</span>
                <h3 class="h3">Join the team</h3>
                <p>Offer JetHunter services to your friends, partners and customers. We guarantee you top notch service</p>
            </div>
            <div class="step-item">
                <span class="step-number">4</span>
                <h3 class="h3">Get a cashback</h3>
                <p>Get cashback for every flight of every customer you bring in. We will pay all the time that customer flies with us.</p>
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