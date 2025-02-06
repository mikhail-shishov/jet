<div class="article-info entry-meta">
    <time class="article-date entry-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>" title="<?php echo esc_attr(get_the_date()); ?>" <?php if (is_single()) {
                                                                                                                                                    echo 'itemprop="datePublished" pubdate';
                                                                                                                                                } ?>><?php the_time(get_option('date_format')); ?></time>
    <?php if (is_single()) {
        echo '<meta itemprop="dateModified" content="' . esc_attr(get_the_modified_date()) . '">';
    } ?>
    <div class="article-info-right">
        <div class="article-views"><span><?= gt_get_post_view(); ?></span></div>
        <!-- <span class="article-info-time">3 мин</span> -->

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