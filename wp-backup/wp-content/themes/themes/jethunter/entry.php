<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">

        <?php
        if (has_category('article')) {
            echo "<a href='/blog' class='breadcrumbs-back'>← К новостям</a>";
        } elseif (has_category('tour')) {
            echo "<a href='/tour' class='breadcrumbs-back'>← К предложениям</a>";
        } else {
            echo "<a href='/blog' class='breadcrumbs-back'>← К новостям</a>";
        }
        ?>

        <?php if (is_singular()) {
            echo '<h1 class="h1 entry-title" itemprop="headline">';
        } else {
            echo '<h2 class="h1 entry-title">';
        } ?>
        <?php the_title(); ?>
        <?php if (is_singular()) {
            echo '</h1>';
        } else {
            echo '</h2>';
        } ?>
        <?php /* edit_post_link(); */ ?>
        <?php if (!is_search()) {
            get_template_part('entry', 'meta');
        } ?>

        <?php get_template_part('entry', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content')); ?>
    </div>
</article>