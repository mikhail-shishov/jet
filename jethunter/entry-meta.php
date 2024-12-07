<div class="article-info entry-meta">
    <time class="article-date entry-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>" title="<?php echo esc_attr(get_the_date()); ?>" <?php if (is_single()) {
                                                                                                                                                            echo 'itemprop="datePublished" pubdate';
                                                                                                                                                        } ?>><?php the_time(get_option('date_format')); ?></time>
    <?php if (is_single()) {
        echo '<meta itemprop="dateModified" content="' . esc_attr(get_the_modified_date()) . '">';
    } ?>
    <span class="article-info-time">3 мин</span>
</div>