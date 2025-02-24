<?php get_header(); ?>
<section class="regular-sect">
    <div class="container">
        <h1 class="h1" itemprop="name"><?php single_term_title(); ?></h1>
        <div class="archive-meta" itemprop="description"><?php if ('' != get_the_archive_description()) {
                                                                echo esc_html(get_the_archive_description());
                                                            } ?></div>
        <div class="tour-list-wrap">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php /* get_template_part('entry'); */ ?>
                    <div class="tour-list-item">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="tour-list-img" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php endif; ?>

                        <div class="tour-list-text">
                            <h2 class="h2"><?php the_title(); ?></h2>
                            <span class="article-date"><?php echo get_the_date(); ?></span>
                            <p><?php the_excerpt(); ?></p>
                            <div class="article-info">
                                <a href="<?php the_permalink(); ?>" class="link">Узнать больше</a>
                                <span class="article-info-time">3 мин</span>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>