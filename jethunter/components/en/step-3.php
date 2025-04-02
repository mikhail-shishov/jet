<?php $steps_3 = carbon_get_theme_option('steps_3_en');
if (empty($steps_3)) return;
?>
<section class="step-sect">
    <div class="container">
        <h2 class="h2 center">You do 3 steps for your perfect flight</h2>
        <div class="step-grid">
            <!-- <div class="step-item">
                <span class="step-number">1</span>
                <h3 class="h3">Send us request</h3>
                <p>Contact and tell us about your most ambitious wishes. We will find the best aircraft for you!</p>
            </div>
            <div class="step-item">
                <span class="step-number">2</span>
                <h3 class="h3">Sign a contract</h3>
                <p>Sign Charter agreement.</p>
            </div>
            <div class="step-item">
                <span class="step-number">3</span>
                <h3 class="h3">Pay for the flight</h3>
                <p>Pay for your booked flight in any convenient way. We offer more than 50 different means of payment.</p>
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