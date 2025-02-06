<?php
/* Template Name: About us EN */
?>

<?php get_header(); ?>

<article class="article">
    <div class="container">
        <!-- <a href="" class="breadcrumbs-back">← К новостям</a> -->
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
        <h1 class="h1">About us</h1>
        <div class="article-info">
            <span class="article-date">17.07.2024</span>
            <span class="article-info-time">1 мин</span>
        </div>
        <div class="article-hero">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/about-us-hero.jpg" class="article-hero-img" alt="">
        </div>
        <div class="article-body">
            <?php the_content();?>
        </div>
    </div>
</article>


<?php get_footer(); ?>