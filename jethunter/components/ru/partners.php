<!-- <section class="partners-sect">
    <div class="container">
        <h2 class="h2 center">Наши партнеры</h2>
        <div class="partners-grid">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/malindo-airlines-logo-3A2A347831-seeklogo.com 1.png" class="partners-logo"
                loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/abc.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/globeair.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/jetlinx.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/netjets.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/netjets.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/planesense.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/volato.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/wheelsup.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/xojet.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/tyrolean.png" class="partners-logo" loading="lazy" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/solairus.png" class="partners-logo" loading="lazy" alt="">
        </div>
    </div>
</section> -->

<?php $partners_logos = carbon_get_theme_option('partners_logos');
if (empty($partners_logos)) return;
?>
<section class="partners-sect">
    <div class="container">
        <h2 class="h2 center">Наши партнеры</h2>
        <div class="partners-grid">
            <?php foreach ($partners_logos as $partner) : ?>
                <img src="<?php echo esc_url($partner['logo']); ?>" class="partners-logo" loading="lazy" alt="">
            <?php endforeach; ?>
        </div>
    </div>
</section>