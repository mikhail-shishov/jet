<section class="blog-sect">
    <div class="container">
        <h1 class="h1 center">Blog</h1>
        <ul class="nav-tabs">
            <li class="nav-tabs-item active"><a href="#tab-1" class="btn btn-tab-full">Show all</a></li>
            <li class="nav-tabs-item"><a href="#tab-2" class="btn btn-tab-full">Articles</a></li>
            <li class="nav-tabs-item"><a href="#tab-3" class="btn btn-tab-full">Tours</a></li>
            <!-- <div class="nav-tabs-right">
                <div class="dropdown">
                    <button class="dropdown__button" type="button">Сортировать по</button>
                    <ul class="dropdown__list">
                        <li class="dropdown__list-item dropdown__list-item_active" data-value="Дате">Дате</li>
                        <li class="dropdown__list-item" data-value="Популярности">Популярности</li>
                        <li class="dropdown__list-item" data-value="Времени чтения">Времени чтения</li>
                    </ul>
                    <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                </div>
            </div> -->
        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">
                <div class="tour-list-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
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
                                    <a href="<?php the_permalink(); ?>" class="h2"><?php the_title(); ?></a>
                                    <span class="article-date"><?php echo get_the_date(); ?></span>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="article-info">
                                        <a href="<?php the_permalink(); ?>" class="link">Read more</a>

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
                        echo 'No posts to show.';
                    }
                    ?>
                </div>
                <!-- <div class="center">
                    <a href="" class="btn">Показать больше</a>
                </div> -->
            </div>
            <div id="tab-2" class="tab-pane">
                <div class="tour-list-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'category_name' => 'article-en',
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
                                    <a href="<?php the_permalink(); ?>" class="h2"><?php the_title(); ?></a>
                                    <span class="article-date"><?php echo get_the_date(); ?></span>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="article-info">
                                        <a href="<?php the_permalink(); ?>" class="link">Read more</a>

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
                        echo 'No posts to show.';
                    }
                    ?>
                </div>
            </div>
            <div id="tab-3" class="tab-pane">
                <div class="tour-list-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category_name' => 'tour-en',
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
                                    <a href="<?php the_permalink(); ?>" class="h2"><?php the_title(); ?></a>
                                    <span class="article-date"><?php echo get_the_date(); ?></span>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="article-info">
                                        <a href="<?php the_permalink(); ?>" class="link">Read more</a>

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
                        echo 'No posts to show.';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>