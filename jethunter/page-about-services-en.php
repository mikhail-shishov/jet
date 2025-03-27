<?php
/* Template Name: About services EN */
?>

<?php get_header(); ?>

<?php
$page_id = get_the_ID();

$heading = carbon_get_the_post_meta('heading');
$description = carbon_get_the_post_meta('description');
$features_heading_1 = carbon_get_the_post_meta('features_heading_1');
$features_complex_1 = carbon_get_the_post_meta('features_complex_1');
$features_heading_2 = carbon_get_the_post_meta('features_heading_2');
$features_complex_2 = carbon_get_the_post_meta('features_complex_2');
?>

<section class="breadcrumbs-sect">
    <div class="container">
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
    </div>
</section>

<section class="services-sect">
    <div class="container">
        <h1 class="h2 center"><?php echo esc_html($heading); ?></h1>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/comfort-2.svg" width="460" height="460" class="about-img about-img-left" loading="lazy" alt="">

            <p><?php echo esc_html($description); ?> </p>
        </div>
        <!-- <h3 class="h3 center">We will take care of finding clients to rent your aircraft, organizing flights and controlling finances so that your asset brings maximum income. </h3> -->
    </div>
</section>

<?php if ($features_complex_1): ?>
    <section class="step-sect">
        <div class="container">
            <h2 class="h2 center"><?php echo esc_html($features_heading_1); ?></h2>
            <div class="step-grid">
                <?php foreach ($features_complex_1 as $feature): ?>
                    <div class="step-item">
                        <span class="step-number"><?php echo esc_html($feature['features_number']); ?></span>
                        <h3 class="h3"><?php echo esc_html($feature['features_name']); ?></h3>
                        <p><?php echo esc_html($feature['features_text']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="center">
                <button type="button" class="btn js-modal" data-modal="#call">Call Me Back</button>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($features_complex_2): ?>
    <section class="instruction-sect">
        <div class="container">
            <h2 class="h2 center"><?php echo esc_html($features_heading_2); ?></h2>
            <div class="instruction-wrap">
                <?php foreach ($features_complex_2 as $step): ?>
                    <div class="instruction-block">
                        <h3 class="h3"><?php echo esc_html($step['features_name']); ?></h3>
                        <p><?php echo esc_html($step['features_text']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- <section class="step-sect">
    <div class="container">
        <h2 class="h2 center">Our advantages</h2>
        <div class="step-grid">
            <div class="step-item">
                <span class="step-number">1</span>
                <h3 class="h3">Profit maximization</h3>
                <p>We will provide flight bookings for your aircraft during downtime, which will help offset your expenses for owning and maintaining the aircraft.</p>
            </div>
            <div class="step-item">
                <span class="step-number">2</span>
                <h3 class="h3">Cost optimization</h3>
                <p>We will conduct a market analysis and find the most advantageous terms for insurance, maintenance, refuelling and other services.</p>
            </div>
            <div class="step-item">
                <span class="step-number">3</span>
                <h3 class="h3">Legal protection</h3>
                <p>We will take care of all legal issues related to the commercial operation of the aircraft, providing you with peace of mind and protection from possible risks.</p>
            </div>
            <div class="step-item">
                <span class="step-number">4</span>
                <h3 class="h3">Transparency and accountability</h3>
                <p>You will receive regular transparent reports on the financial performance of the aircraft.</p>
            </div>
            <div class="step-item">
                <span class="step-number">5</span>
                <h3 class="h3">Geographic expansion</h3>
                <p>We will help you to obtain the necessary permits for international flights, expanding your geographical possibilities.</p>
            </div>
            <div class="step-item">
                <span class="step-number">6</span>
                <h3 class="h3">Saving time and resources</h3>
                <p>Leave all organizational processes to the professionals and focus on what is really important - your business and leisure.</p>
            </div>
        </div>
        <div class="center">
            <button type="button" class="btn js-modal" data-modal="#call">Find out more</button>
        </div>
    </div>
</section>

<section class="instruction-sect">
    <div class="container">
        <h2 class="h2 center">How to buy an aircraft? </h2>
        <div class="instruction-wrap">
            <div class="instruction-block">
                <h3 class="h3">Determine aircraft requirements</h3>
                <p>Determine your budget and travel needs: Where do you want to fly? How often? How many passengers will you carry? What level of comfort do you prefer? </p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Get a Quote </h3>
                <p>Contact our manager, who will help you understand the technical characteristics of the aircraft and choose the most suitable model. </p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Select an aircraft model</h3>
                <p>Based on your requirements, we will select several aircraft models that are optimally suited to your needs in terms of technical characteristics, capacity, range and other parameters. We will also help you compare the selected models and make an informed. We recommend choosing an aircraft that is 80% of your ideal.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Visual inspection of the aircraft</h3>
                <p>Choose one or two aircrafts from the available options. We will arrange for a visual inspection where you can personally inspect the aircraft, assess the condition of its interior and exterior and determine the most suitable option for purchase. </p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">LOI and contract</h3>
                <p>You will need to sign a Letter of Intent to purchase the aircraft (LOI), pay a deposit and sign an Aircraft Purchase Agreement drafted by our experienced lawyers.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Pre-Purchase Inspection (PPI)</h3>
                <p>We will arrange an independent technical inspection of the aircraft at a certified center to ensure that it is safe and in good working order. You will receive a detailed report on the technical condition of the aircraft to be sure of its reliability. If necessary, the aircraft will be returned to its airworthy condition.As a result, you will receive a fully operational airworthy aircraft.</p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Deal closing</h3>
                <p>At this stage, the aircraft is flown to the closing location and the aircraft is paid for in any way you like. The transaction is conducted through an escrow agent, which guarantees the safety and transparency of the transaction. Your funds will be sent to the seller only after receiving all necessary documents for the aircraft. </p>
            </div>
            <div class="instruction-block">
                <h3 class="h3">Getting an aircraft</h3>
                <p>We will organize a ceremony to put the aircraft at your disposal.
                    And we will ensure that your new aircraft gets off to a comfortable start. If necessary, we recommend the operator, insurance company and service center.</p>
            </div>
        </div>
    </div>
</section> -->

<div class="video-sect">
    <div class="container">
        <div class="video-wrap" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/planes/item/ch-350/image2264.jpg);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/play-text.png" class="video-overlay" id="video-overlay">
            <iframe class="video-player" src="https://www.youtube.com/embed/1Mh1Rro8IlE?controls=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="opacity:0;" id="video-player"></iframe>
        </div>
    </div>
</div>

<?php include_once get_stylesheet_directory() . '/components/en/cta-1.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/services-slider.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/seo-ceo.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/features.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/services-compare.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/cta-2.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/reviews.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/partners.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/faq.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/seo-empty-legs.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/cta-3.php'; ?>

<!-- <section class="app-sect">
    <div class="container">
        <div class="app-row">
            <div class="app-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/app.svg" class="app-icon" width="144" height="144" alt="">
                <h2 class="h2">Скачивайте мобильное приложение JetHunter</h2>
                <p>Мгновенно бронируйте свой идеальный полет с JetHunter в приложении с круглосуточной поддержкой.
                </p>

                <div class="btn-container">
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/google-play.png" class="app-store-icon" alt=""></a>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/app-store.png" class="app-store-icon" alt=""></a>
                </div>
            </div>
            <div class="app-col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/iphone-mockup.png" class="app-mockup" loading="lazy" alt="">
            </div>
        </div>
    </div>
</section> -->

<?php get_footer(); ?>