<?php
/* Template Name: About tour */
?>

<?php get_header(); ?>

<article class="article">
    <div class="container">
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
        <!-- <a href="" class="breadcrumbs-back">← К предложениям</a> -->
        <h1 class="h1">О турах</h1>
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