<?php
/* Template Name: Affiliate EN */
?>

<?php get_header(); ?>

<?php $affiliate = carbon_get_the_post_meta('affiliate_en'); ?>

<section class="breadcrumbs-sect">
    <div class="container">
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
    </div>
</section>

<section class="affiliate-intro-sect">
    <div class="container">
        <h1 class="h1">Join our affiliate program</h1>
        <h2 class="h3">Receive a cashback on sales from each client brought in</h2>
        <div class="center">
            <a href="" class="btn btn-green-fill">Sign up</a>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/affiliate-section-image.png" class="intro-img" alt="">
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/en/step-4.php'; ?>

<section class="about-sect">
    <div class="container">
        <?php if (!empty($affiliate)) {
            foreach ($affiliate as $section) {
                if (!empty($section['h2'])) {
                    echo '<h2 class="h2 center">' . esc_html($section['h2']) . '</h2>';
                }

                echo '<div class="about-text">';

                if (!empty($section['img'])) {
                    $img_url = wp_get_attachment_image_url($section['img'], 'full');
                    echo '<img src="' . esc_url($img_url) . '" class="about-img about-img-left" loading="lazy" alt="">';
                }

                if (!empty($section['text_1'])) {
                    echo wp_kses_post($section['text_1']);
                }

                echo '</div>';

                if (!empty($section['h3'])) {
                    echo '<h3 class="h3 center">' . esc_html($section['h3']) . '</h3>';
                }
            }
        }
        ?>
        <!-- <h2 class="h2 center">Affiliate Program of JetHunter</h2>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/comfort-2.svg" width="460" height="460" class="about-img about-img-left" loading="lazy" alt="">

            <p>The affiliate program is a great opportunity for those who want to monetize their passion for luxury private jet travel and social skills. This program opens the door to the world of business aviation, from private jets rentals, group and cargo transfers, to private jet sales.</p>

            <p>This program is designed for enthusiasts from all segments of luxury industry. If you work with people from the luxury segment, you can become our ambassador and receive cashback from your clients' successful flights.</p>

            <p>We provide 24/7 support with all the information you need. You are provided with a personal private aviation advisor who will answer any questions you may have. </p>

            <p>We guarantee complete confidentiality of our relationship, client securing to you, timely payments throughout all the time we work with your client. We provide a monthly financial report. JetHunter combines competitive pricing with quality work, thanks to years of our experience and access to exclusive offers. </p>
        </div>
        <h3 class="h3 center">Become a member of our community and earn with us.</h3> -->
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/en/faq.php'; ?>

<?php get_footer(); ?>