<section class="services-slider-sect">
    <div class="container">
        <h2 class="h2 center">Наши услуги</h2>

        <!-- Slider main container -->
        <div class="swiper-container">
            <div class="swiper services-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php
                    $slides = carbon_get_theme_option('services_slider');
                    if (!empty($slides)) :
                        foreach ($slides as $slide) :
                    ?>
                            <div class="swiper-slide">
                                <a href="<?php echo esc_url($slide['slide_link']); ?>" class="services-swiper-item">
                                    <img src="<?php echo esc_url($slide['slide_image']); ?>" loading="lazy" class="services-swiper-item-img" alt="">
                                    <span class="services-swiper-item-name"><?php echo esc_html($slide['slide_text']); ?></span>
                                </a>
                            </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                    <!-- Slides -->
                    <!-- <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Консалтинг</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Управление самолётом</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Консалтинг</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Управление самолётом</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/services/" class="services-swiper-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrations/service-img.jpg" loading="lazy" class="services-swiper-item-img" alt="">
                            <span class="services-swiper-item-name">Консалтинг</span>
                        </a>
                    </div> -->
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev services-swiper-button-prev"></div>
            <div class="swiper-button-next services-swiper-button-next"></div>
        </div>

        <!-- <a href="/services/" class="link">Посмотреть все</a> -->
    </div>
</section>