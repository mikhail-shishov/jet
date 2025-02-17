<?php
/* Template Name: Affiliate EN */
?>

<?php get_header(); ?>

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

<section class="step-sect">
    <div class="container">
        <h2 class="h2 center">4 steps to your perfect flight</h2>
        <div class="step-grid step-grid-2">
            <div class="step-item">
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
            </div>
        </div>
    </div>
</section>

<section class="about-sect">
    <div class="container">
        <h2 class="h2 center">Affiliate Program of JetHunter</h2>

        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/comfort-2.svg" width="460" height="460" class="about-img about-img-left" loading="lazy" alt="">

            <p>The affiliate program is a great opportunity for those who want to monetize their passion for luxury private jet travel and social skills. This program opens the door to the world of business aviation, from private jets rentals, group and cargo transfers, to private jet sales.</p>

            <p>This program is designed for enthusiasts from all segments of luxury industry. If you work with people from the luxury segment, you can become our ambassador and receive cashback from your clients' successful flights.</p>

            <p>We provide 24/7 support with all the information you need. You are provided with a personal private aviation advisor who will answer any questions you may have. </p>

            <p>We guarantee complete confidentiality of our relationship, client securing to you, timely payments throughout all the time we work with your client. We provide a monthly financial report. JetHunter combines competitive pricing with quality work, thanks to years of our experience and access to exclusive offers. </p>
        </div>
        <h3 class="h3 center">Become a member of our community and earn with us.</h3>
    </div>
</section>

<?php get_footer(); ?>