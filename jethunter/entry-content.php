<div class="entry-content article-wrap" itemprop="mainEntityOfPage">
    <div class="article-main">
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
    <aside class="article-sidebar">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3, // Limit to 3 posts
            'post__not_in' => array(get_the_ID()), // Exclude the current post
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); ?>

                <div class="tour-list-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="tour-list-img" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    <?php endif; ?>

                    <div class="tour-list-text">
                        <span class="article-date"><?php echo get_the_date(); ?></span>
                        <a href="<?php the_permalink(); ?>" class="h2"><?php the_title(); ?></a>
                        <p><?php the_excerpt(); ?></p>
                        <div class="article-info">
                            <a href="<?php the_permalink(); ?>" class="link">Узнать больше</a>
                            <?php 
                            $language = function_exists('pll_current_language') ? pll_current_language() : 'ru';

                            $time_suffix = ($language === 'en') ? ' min' : ' мин';
                            $fallback = ($language === 'en') ? '3 min' : '3 мин';

                            $reading_time = (function_exists('carbon_get_post_meta') && get_the_ID()) 
                                ? carbon_get_post_meta(get_the_ID(), 'reading_time') 
                                : '';

                            ?>
                            <span class="article-info-time">
                                <?php echo !empty($reading_time) ? esc_html($reading_time) . $time_suffix : $fallback; ?>
                            </span>
                        </div>
                    </div>
                </div>

        <?php }
            wp_reset_postdata();
        } else {
            echo ' ';
        }
        ?>
        <a href="/ru/blog" class="btn">Смотреть все</a>
    </aside>
</div>