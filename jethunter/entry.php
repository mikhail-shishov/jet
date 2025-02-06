<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">

        <div class='breadcrumbs'>
            <?php if (pll_current_language() == 'en') {
                echo '<a href="' . home_url() . '" class="breadcrumbs-link">Home</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;';
                echo '<a href="/en/blog-en/" class="breadcrumbs-link">Blog</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;';
            } else {
                echo '<a href="' . home_url() . '" class="breadcrumbs-link">Главная</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;';
                echo '<a href="/ru/blog/" class="breadcrumbs-link">Блог</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;';
            } ?>
            <span class="breadcrumbs-item"><?php the_title(); ?></span>
        </div>

        <?php /*
        if (has_category('article')) {
            echo "<a href='/blog' class='breadcrumbs-back'>← К новостям</a>";
        } elseif (has_category('tour')) {
            echo "<a href='/tour' class='breadcrumbs-back'>← К предложениям</a>";
        } else {
            echo "<a href='/blog' class='breadcrumbs-back'>← К новостям</a>";
        } */
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