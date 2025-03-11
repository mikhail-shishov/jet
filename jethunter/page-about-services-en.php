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

<section class="reviews-sect">
    <div class="container">
        <h2 class="h2 center">Testimonials</h2>
        <div class="reviews-grid">
            <div class="reviews-item">
                <span class="reviews-rate">4.9</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>I flew on a private jet with JetHunter for the first time and it was such a delight. Their service is at the highest level: I was met with flowers; everything was delivered on board as requested. The flight was perfect - fast, comfortable, without the slightest delays, there was no reason to worry. </p>
                <p>Helen Ponomes</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.8</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>Thanks to JetHunter, I managed to get to an important meeting in another city, although the flight could have been delayed due to bad weather. They promptly changed the route; everything was clear and professional. I was impressed with the service and attention to detail. I recommend them to anyone who values their time!</p>
                <p>Andrew Х.</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.9</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>We organized a family flight to Europe. Everything went well! The kids loved the two sofas in the airplane and a lot of entertainment for them. The flight attendant was wonderful. Thanks, JetHunter for an unforgettable experience.</p>
                <p>Levin’s Family</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">5.0</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>On behalf of a large holding company, I would like to thank JetHunter for organizing the flight. They took into account all our specific requirements for closing documents, which other brokers did not want to meet. The airplane was delivered on time, all requirements were considered. The management of my company was pleased.</p>
                <p>Evan P.</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.5</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-half.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>I often fly for business, and for me comfort and privacy come first. JetHunter managers organized everything clearly, instructed the flight attendant according to my requirements. I would like to emphasize the convenience of payment, a lot of options. I will fly again for sure.</p>
                <p>George Richmond</p>
            </div>
            <div class="reviews-item">
                <span class="reviews-rate">4.7</span>
                <div class="reviews-stars">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-full.svg" loading="lazy" class="reviews-stars-icon" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/star-half.svg" loading="lazy" class="reviews-stars-icon" alt="">
                </div>
                <p>I frequently book private jets for my executive office and have worked with many charter companies. I’ve never seen such attention to detail. And when the airport moved the departure time a few hours later, the manager was able to get a convenient slot using his connections. The company are true professionals, we will be contacting them again.</p>
                <p>Kate ls.</p>
            </div>
        </div>
    </div>
</section>

<section class="partners-sect">
    <div class="container">
        <h2 class="h2 center">Our partners</h2>
        <div class="partners-grid">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/malindo-airlines-logo-3A2A347831-seeklogo.com 1.png" class="partners-logo" loading="lazy" alt="">
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
</section>

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