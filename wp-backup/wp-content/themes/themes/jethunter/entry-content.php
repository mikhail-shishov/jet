<div class="entry-content" itemprop="mainEntityOfPage">
    <?php if (has_post_thumbnail()) : ?>
        <div class="article-hero">
            <?php the_post_thumbnail('full', array('itemprop' => 'image', 'class' => 'article-hero-img')); ?>
        </div>
    <?php endif; ?>
    <meta itemprop="description" content="<?php echo esc_html(wp_strip_all_tags(get_the_excerpt(), true)); ?>">
    <div class="article-body">
        <?php the_content(); ?>
    </div>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
</div>