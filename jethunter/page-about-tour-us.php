<?php
/* Template Name: About tour EN */
?>

<?php get_header(); ?>

<article class="article">
    <div class="container">
        <a href="" class="breadcrumbs-back">← К предложениям</a>
        <h1 class="h1">EN Межклубный женский чемпионат — история пишется в Strawberry Fields</h1>
        <span class="article-date">17.07.2024</span>
        <div class="article-hero">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/article-image.jpg" class="article-hero-img" alt="">
        </div>
        <div class="article-body">
            <?php the_content();?>
        </div>
    </div>
</article>

<?php get_footer(); ?>