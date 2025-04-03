<?php
/* Template Name: Our fleet EN */
?>

<?php get_header(); ?>

<section class="intro-fleet-sect">
    <div class="container">
        <h1 class="h1">Aircraft for sale and rent all over the World</h1>
        <h2 class="h3">New era of business aviation</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/section-image.png" class="intro-img" alt="">
    </div>
</section>

<section class="fleet-sect">
    <div class="container">
        <div class="search-wrap">
            <form class="search-form">
                <div class="search-form-options">
                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Type</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active" data-value="Any">Any</li>
                            <li class="dropdown__list-item" data-value="Airplane">Airplane</li>
                            <li class="dropdown__list-item" data-value="Helicopter">Helicopter</li>
                            <li class="dropdown__list-item" data-value="VTOL">VTOL</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown">
                        <button class="dropdown__button" type="button">Category</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active" data-value="Any">Any</li>
                            <li class="dropdown__list-item" data-value="Turboprop">Turboprop</li>
                            <li class="dropdown__list-item" data-value="Very Light">Very light</li>
                            <li class="dropdown__list-item" data-value="Light">Light</li>
                            <li class="dropdown__list-item" data-value="Midsize">Midsize</li>
                            <li class="dropdown__list-item" data-value="Super-Midsize">Super-Midsize</li>
                            <li class="dropdown__list-item" data-value="Heavy">Heavy</li>
                            <li class="dropdown__list-item" data-value="Ultra-heavy">Ultra-heavy</li>
                            <li class="dropdown__list-item" data-value="Long-range">Long-range</li>
                            <li class="dropdown__list-item" data-value="Business liners">Business liners</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-manufacturer-dropdown aircraft-manufacturer-plane">
                        <button class="dropdown__button" type="button">Manufacturer</button>
                        <ul class="dropdown__list">
                        <li class="dropdown__list-item" data-value="Airbus">Airbus</li>
                            <li class="dropdown__list-item" data-value="Boeing">Boeing</li>
                            <li class="dropdown__list-item" data-value="Embraer">Embraer</li>
                            <li class="dropdown__list-item" data-value="Dassault">Dassault</li>
                            <li class="dropdown__list-item" data-value="Bombardier">Bombardier</li>
                            <li class="dropdown__list-item" data-value="Gulfstream">Gulfstream</li>
                            <li class="dropdown__list-item" data-value="Avro">Avro</li>
                            <li class="dropdown__list-item" data-value="Beechcraft">Beechcraft</li>
                            <li class="dropdown__list-item" data-value="Cessna">Cessna</li>
                            <li class="dropdown__list-item" data-value="Dornier">Dornier</li>
                            <li class="dropdown__list-item" data-value="Aero Commander">Aero Commander</li>
                            <li class="dropdown__list-item" data-value="Nextant Aerospace">Nextant Aerospace</li>
                            <li class="dropdown__list-item" data-value="Grob Aerospace">Grob Aerospace</li>
                            <li class="dropdown__list-item" data-value="Eclipse Aviation">Eclipse Aviation</li>
                            <li class="dropdown__list-item" data-value="Honda">Honda</li>
                            <li class="dropdown__list-item" data-value="Piper Aircraft">Piper Aircraft</li>
                            <li class="dropdown__list-item" data-value="Adam Aircraft Industries">Adam Aircraft Industries</li>
                            <li class="dropdown__list-item" data-value="Epic Aircraft">Epic Aircraft</li>
                            <li class="dropdown__list-item" data-value="Cirrus Aircraft">Cirrus Aircraft</li>
                            <li class="dropdown__list-item" data-value="Quest Aircraft">Quest Aircraft</li>
                            <li class="dropdown__list-item" data-value="Piaggio">Piaggio</li>
                            <li class="dropdown__list-item" data-value="Pilatus">Pilatus</li>
                            <li class="dropdown__list-item" data-value="Socata (Daher)">Socata (Daher)</li>
                            <li class="dropdown__list-item" data-value="Mooney">Mooney</li>
                            <li class="dropdown__list-item" data-value="Fokker">Fokker</li>
                            <li class="dropdown__list-item" data-value="Tupolev">Tupolev</li>
                            <li class="dropdown__list-item" data-value="Sukhoi">Sukhoi</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-manufacturer-dropdown aircraft-manufacturer-helicopter" style="display: none;">
                        <button class="dropdown__button" type="button">Manufacturer</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="Airbus Helicopters">Airbus helicopters</li>
                            <li class="dropdown__list-item" data-value="Bell Helicopters">Bell Helicopters</li>
                            <li class="dropdown__list-item" data-value="Enstrom Helicopters">Enstrom Helicopters</li>
                            <li class="dropdown__list-item" data-value="Leonardo Helicopters">Leonardo Helicopters</li>
                            <li class="dropdown__list-item" data-value="MD Helicopters">MD Helicopters</li>
                            <li class="dropdown__list-item" data-value="Robinson helicopters">Robinson helicopters</li>
                            <li class="dropdown__list-item" data-value="Russian Helicopters">Russian Helicopters</li>
                            <li class="dropdown__list-item" data-value="Sikorsky">Sikorsky</li>
                            <li class="dropdown__list-item" data-value="Schweizer">Schweizer</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-manufacturer-dropdown aircraft-manufacturer-vtol" style="display: none;">
                        <button class="dropdown__button" type="button">Manufacturer</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="Joby Aviation">Joby Aviation</li>
                            <li class="dropdown__list-item" data-value="Archer Aviation Inc.">Archer Aviation Inc.</li>
                            <li class="dropdown__list-item" data-value="Ehang">Ehang</li>
                            <li class="dropdown__list-item" data-value="Lilium">Lilium</li>
                            <li class="dropdown__list-item" data-value="MD Helicopters">MD Helicopters</li>
                            <li class="dropdown__list-item" data-value="Vertical Aerospace">Vertical Aerospace</li>
                            <li class="dropdown__list-item" data-value="Volocopter">Volocopter</li>
                            <li class="dropdown__list-item" data-value="Airbus">Airbus</li>
                            <li class="dropdown__list-item" data-value="Wisk Aero">Wisk Aero</li>
                            <li class="dropdown__list-item" data-value="Beta Technologies">Beta Technologies</li>
                            <li class="dropdown__list-item" data-value="Eve Air Mobility">Eve Air Mobility</li>
                            <li class="dropdown__list-item" data-value="Wisk Aero">Overair</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown_with-chk aircraft-seats-dropdown aircraft-seats-plane">
                        <button class="dropdown_with-chk__button" type="button">Seats</button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="1-8" id="1-8" />
                                <label class="dropdown_with-chk__list-item_label" for="1-8">1-8</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="8-14" id="8-14" />
                                <label class="dropdown_with-chk__list-item_label" for="8-14">8-14</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="14-19" id="14-19" />
                                <label class="dropdown_with-chk__list-item_label" for="14-19">14-19</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="19-50" id="19-50" />
                                <label class="dropdown_with-chk__list-item_label" for="19-50">19-50</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="50" id="50" />
                                <label class="dropdown_with-chk__list-item_label" for="50">50+</label>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown_with-chk aircraft-seats-dropdown aircraft-seats-helicopter" style="display:none;">
                        <button class="dropdown_with-chk__button" type="button">Seats</button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="1-2" id="1-2" />
                                <label class="dropdown_with-chk__list-item_label" for="1-2">1-2</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="2-4" id="2-4" />
                                <label class="dropdown_with-chk__list-item_label" for="2-4">2-4</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="4-8" id="4-8" />
                                <label class="dropdown_with-chk__list-item_label" for="4-8">4-8</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="8-12" id="8-12" />
                                <label class="dropdown_with-chk__list-item_label" for="8-12">8-12</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="12-18" id="12-18" />
                                <label class="dropdown_with-chk__list-item_label" for="12-18">12-18</label>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown_with-chk aircraft-seats-dropdown aircraft-seats-vtol" style="display:none;">
                        <button class="dropdown_with-chk__button" type="button">Seats</button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="1-2" id="1-2" />
                                <label class="dropdown_with-chk__list-item_label" for="1-2">1-2</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="2-4" id="2-4" />
                                <label class="dropdown_with-chk__list-item_label" for="2-4">2-4</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="4-8" id="4-8" />
                                <label class="dropdown_with-chk__list-item_label" for="4-8">4-8</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="8-12" id="8-12" />
                                <label class="dropdown_with-chk__list-item_label" for="8-12">8-12</label>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown_with-chk aircraft-range-dropdown aircraft-range-plane">
                        <button class="dropdown_with-chk__button" type="button">Range, km</button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="1500" id="1500" />
                                <label class="dropdown_with-chk__list-item_label" for="1500">less than 1500</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="1500-4000" id="1500-4000" />
                                <label class="dropdown_with-chk__list-item_label" for="1500-4000">1500-4000</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="4000-9000" id="4000-9000" />
                                <label class="dropdown_with-chk__list-item_label" for="4000-9000">4000-9000</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="9000" id="9000" />
                                <label class="dropdown_with-chk__list-item_label" for="9000">9000+</label>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown_with-chk aircraft-range-dropdown aircraft-range-helicopter" style="display:none;">
                        <button class="dropdown_with-chk__button" type="button">Range, km</button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="600" id="600" />
                                <label class="dropdown_with-chk__list-item_label" for="600">less than 600</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="600-900" id="600-900" />
                                <label class="dropdown_with-chk__list-item_label" for="600-900">600-900</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="900" id="900" />
                                <label class="dropdown_with-chk__list-item_label" for="900">900+</label>
                            </li>
                    </div>

                    <div class="dropdown_with-chk aircraft-range-dropdown aircraft-range-vtol" style="display:none;">
                        <button class="dropdown_with-chk__button" type="button">Range, km</button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="150" id="150" />
                                <label class="dropdown_with-chk__list-item_label" for="150">less than 150</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="150-400" id="150-300" />
                                <label class="dropdown_with-chk__list-item_label" for="150-300">150-300</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="300-500" id="300-500" />
                                <label class="dropdown_with-chk__list-item_label" for="300-500">300-500</label>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown aircraft-price-dropdown aircraft-price-plane">
                        <button class="dropdown__button" type="button">Price</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="3000000">less than $3 000 000 </li>
                            <li class="dropdown__list-item" data-value="3000000-8000000">$3 000 000 - 8 000 000</li>
                            <li class="dropdown__list-item" data-value="8000000-15000000">$8 000 000 – 15 000 000</li>
                            <li class="dropdown__list-item" data-value="15000000-40000000">$15 000 000 – 40 000 000</li>
                            <li class="dropdown__list-item" data-value="40000000">$40 000 000+</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-price-dropdown aircraft-price-helicopter" style="display:none;">
                        <button class="dropdown__button" type="button">Price</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="1500000">less than $1 500 000</li>
                            <li class="dropdown__list-item" data-value="1500000-4000000">$1 500 000 - 4 000 000</li>
                            <li class="dropdown__list-item" data-value="4000000-8000000">$4 000 000 – 8 000 000</li>
                            <li class="dropdown__list-item" data-value="8000000-12000000">$8 000 000 – 12 000 000</li>
                            <li class="dropdown__list-item" data-value="12000000">$12 000 000+</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-price-dropdown aircraft-price-vtol" style="display:none;">
                        <button class="dropdown__button" type="button">Price</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="1500000">less than $1 500 000</li>
                            <li class="dropdown__list-item" data-value="1500000-4000000">$1 500 000 - 3 000 000</li>
                            <li class="dropdown__list-item" data-value="4000000-8000000">$3 000 000 – 6 000 000</li>
                            <li class="dropdown__list-item" data-value="8000000-12000000">$6 000 000 – 11 000 000</li>
                            <li class="dropdown__list-item" data-value="12000000">$11 000 000+</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                </div>
                <div class="btn-container">
                    <button type="button" class="btn btn-green-fill btn-find">Find</button>
                    <button type="button" class="btn btn-reset">Reset</button>
                </div>
            </form>
        </div>
        <div class="tabs tabs-line">
            <div class="tabs-options tabs-options-cat">
                <a href="#" class="btn btn-grey-fill">Turboprop</a>
                <a href="#" class="btn btn-grey-fill">Very Light</a>
                <a href="#" class="btn btn-grey-fill">Light</a>
                <a href="#" class="btn btn-grey-fill">Medium</a>
                <a href="#" class="btn btn-grey-fill">Super-Medium</a>
                <a href="#" class="btn btn-grey-fill">Large</a>
                <a href="#" class="btn btn-grey-fill">Ultra-Large</a>
                <a href="#" class="btn btn-grey-fill">Long-Range</a>
                <a href="#" class="btn btn-grey-fill">Business Airliners</a>
            </div>
        </div>
        <div class="tabs tabs-line">
            <div class="tabs-heading">Sort by:</div>
            <div class="tabs-options">
                <a href="#" data-sort="name" class="btn btn-tab">Name</a>
                <!-- <a href="#" data-sort="rent_price" class="btn btn-tab">Цена аренды</a>
                <a href="#" data-sort="buy_price" class="btn btn-tab">Цена покупки</a> -->
                <a href="#" data-sort="aircraft_seats" class="btn btn-tab">Seats</a>
                <a href="#" data-sort="luggage_volume_m" class="btn btn-tab">Luggage compartment</a>
                <a href="#" data-sort="range_km" class="btn btn-tab">Range</a>
                <a href="#" data-sort="cruise_speed_kmh" class="btn btn-tab">Cruising speed</a>
                <a href="#" data-sort="cabin_height_m" class="btn btn-tab">Cabin height</a>
            </div>
        </div>

        <div class="looking-grid looking-grid-full">
            <?php
            $args = [
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'meta_query'     => ['relation' => 'AND'],
            ];

            $aircrafts = new WP_Query($args);

            if ($aircrafts->have_posts()) :
                while ($aircrafts->have_posts()) : $aircrafts->the_post();
                    $product_id   = get_the_ID();
                    $manufacturer = carbon_get_post_meta($product_id, 'aircraft_make');
                    $range_km        = carbon_get_post_meta($product_id, 'range_km');
                    $aircraft_seats        = carbon_get_post_meta($product_id, 'aircraft_seats');
                    $aircraft_hour_cost        = carbon_get_post_meta($product_id, 'aircraft_hour_cost');
                    $luggage_volume_m        = carbon_get_post_meta($product_id, 'luggage_volume_m');
                    $cabin_height_m        = carbon_get_post_meta($product_id, 'cabin_height_m');
                    $cruise_speed_kmh        = carbon_get_post_meta($product_id, 'cruise_speed_kmh');
                    $aircraft_cat        = carbon_get_post_meta($product_id, 'aircraft_cat');

                    $image = get_the_post_thumbnail_url($product_id, 'full') ?: 'https://jethunter.aero/wp-content/themes/jethunter/img/planes/1.png';
            ?>
                    <div class="looking-item"
                        data-manufacturer="<?php echo esc_attr($manufacturer); ?>"
                        data-range_km="<?php echo esc_attr($range_km); ?>"
                        data-aircraft_hour_cost="<?php echo esc_attr($aircraft_hour_cost); ?>"
                        data-aircraft_seats="<?php echo esc_attr($aircraft_seats); ?>"
                        data-luggage_volume_m="<?php echo esc_attr($luggage_volume_m); ?>"
                        data-cabin_height_m="<?php echo esc_attr($cabin_height_m); ?>"
                        data-cruise_speed_kmh="<?php echo esc_attr($cruise_speed_kmh); ?>"
                        data-aircraft_cat="<?php echo esc_attr($aircraft_cat); ?>">
                        <img src="<?php echo esc_url($image); ?>" class="looking-img" loading="lazy" alt="<?php the_title(); ?>">
                        <h3 class="h3"><?php the_title(); ?></h3>
                        <div class="looking-desc">
                            <div class="looking-row">
                                <p class="looking-row-title">Speed</p>
                                <p class="looking-row-desc"><?php echo esc_html($cruise_speed_kmh); ?> km/h</p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Range</p>
                                <p class="looking-row-desc"><?php echo esc_html($range_km); ?> km</p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Seats</p>
                                <p class="looking-row-desc"><?php echo esc_html($aircraft_seats); ?></p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Hourly cost</p>
                                <p class="looking-row-desc">$<?php echo esc_html($aircraft_hour_cost); ?></p>
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-green-fill">Read more</a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Ничего не найдено.</p>';
            endif;
            ?>
        </div>

        <div class="show-more is-hidden">
            <button class="btn btn-more">Show more</button>
        </div>
        <div class="pagination">
            <nav class="pagination-left">
                <a href="" class="btn btn-pagination pagination-back">‹ Previous</a>
                <ul class="pagination-list">
                    <li class="pagination-list-item is-active">
                        <a href="">1</a>
                    </li>
                    <li class="pagination-list-item">
                        <a href="">2</a>
                    </li>
                    <li class="pagination-list-item">
                        <a href="">3</a>
                    </li>
                </ul>
                <a href="" class="btn btn-pagination pagination-forward">Next ›</a>
            </nav>
            <div class="pagination-right">
                <span class="pagination-text">Show:</span>
                <ul class="pagination-list">
                    <li class="pagination-list-item is-active">
                        <a href="">10</a>
                    </li>
                    <li class="pagination-list-item">
                        <a href="">20</a>
                    </li>
                    <li class="pagination-list-item">
                        <a href="">30</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="regular-sect">
    <div class="container">
        <h2 class="h2 center">Other services</h2>
        <div class="btn-container btn-container-wrap">
            <a href="/" class="btn">Аренда малых самолетов</a>
            <a href="/" class="btn">Аренда дальнемагистральных самолетов </a>
            <a href="/" class="btn">Аренда средних самолетов</a>
            <a href="/" class="btn">Аренда больших самолетов</a>
            <a href="/" class="btn">Аренда турбовинтовых самолетов</a>
            <a href="/" class="btn">Аренда очень легких самолетов </a>
        </div>
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/ru/quiz.php'; ?>

<section class="regular-sect">
    <div class="container">
        <div class="looking-grid looking-grid-full looking-grid-hot-offer">
            <?php
            wp_reset_postdata();

            $hot_offers_args = [
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'meta_query'     => [
                    [
                        'key'   => 'aircraft_hot_offer',
                        'value' => 'yes',
                        'compare' => '='
                    ]
                ],
            ];

            $hot_aircrafts = new WP_Query($hot_offers_args);

            if ($hot_aircrafts->have_posts()) :
                while ($hot_aircrafts->have_posts()) : $hot_aircrafts->the_post();
                    $hot_product_id   = get_the_ID();
                    $hot_range_km        = carbon_get_post_meta($hot_product_id, 'range_km');
                    $hot_aircraft_seats        = carbon_get_post_meta($hot_product_id, 'aircraft_seats');
                    $hot_aircraft_hour_cost        = carbon_get_post_meta($hot_product_id, 'aircraft_hour_cost');

                    $image = get_the_post_thumbnail_url($hot_product_id, 'full') ?: 'https://jethunter.aero/wp-content/themes/jethunter/img/planes/1.png';
            ?>
                    <div class="looking-item hot-offer">
                        <img src="<?php echo esc_url($image); ?>" class="looking-img" loading="lazy" alt="<?php the_title(); ?>">
                        <h3 class="h3"><?php the_title(); ?></h3>
                        <div class="looking-desc">
                            <div class="looking-row">
                                <p class="looking-row-title">Cruising speed, km/h</p>
                                <p class="looking-row-desc"><?php echo esc_html($cruise_speed_kmh); ?> км/ч</p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Range, km</p>
                                <p class="looking-row-desc"><?php echo esc_html($hot_range_km); ?> км</p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Seats</p>
                                <p class="looking-row-desc"><?php echo esc_html($hot_aircraft_seats); ?></p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Price per hour</p>
                                <p class="looking-row-desc">$<?php echo esc_html($hot_aircraft_hour_cost); ?></p>
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-green-fill">Learn more</a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p> </p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php include_once 'components/looking-sect.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/about-rent.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/step-3.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/instruction-8.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/cta-1.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/seo-ceo.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/features.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/services-compare.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/services-slider.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/cta-2.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/reviews.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/partners.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/faq.php'; ?>

<section class="plane-sect">
    <div class="container">
        <h2 class="h2 center">Take off anytime with JetHunter!</h2>
        <div class="plane-grid">
            <div class="plane-grid-item">
                <h3 class="h3">Turboprop</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Pilatus PC-12 NGX</li>
                    <li>King Air 360ER</li>
                    <li>King Air 260</li>
                    <li>Piaggio Avanti II</li>
                    <li>Beechcraft Denali</li>
                </ul>
                <a href="/our-fleet-en/" class="link">See all</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Super light jets</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/2.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Cessna CJ1+</li>
                    <li>HondaJet Elite II</li>
                    <li>Cessna M2</li>
                    <li>Phenom 100EX</li>
                    <li>Cirrus Vision Jet</li>
                </ul>
                <a href="/our-fleet-en/" class="link">See all</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Light jets</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/3.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Cessna CJ3 Gen 2</li>
                    <li>Cessna CJ4 Gen 2</li>
                    <li>Learjet 40XR</li>
                    <li>Learjet 75</li>
                    <li>Phenom 300E</li>
                </ul>
                <a href="/our-fleet-en/" class="link">See all</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Midsize jets</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/4.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Citation Latitude</li>
                    <li>Citation XLS+</li>
                    <li>Pilatus PC-24</li>
                    <li>Learjet 60 XR</li>
                    <li>Praetor 500</li>
                </ul>
                <a href="/our-fleet-en/" class="link">See all</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Super- Midsize jets</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/5.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Challenger 350</li>
                    <li>Citation Longitude</li>
                    <li>Citation X+</li>
                    <li>Gulfstream G280</li>
                    <li>Praetor 600</li>
                </ul>
                <a href="/our-fleet-en/" class="link">See all</a>
            </div>

            <div class="plane-grid-item">
                <h3 class="h3">Heavy jets</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/6.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Challenger 604</li>
                    <li>Challenger 605</li>
                    <li>Challenger 650</li>
                    <li>Falcon 2000S</li>
                    <li>Falcon 2000LXS</li>
                </ul>
                <a href="/our-fleet-en/" class="link">See all</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Ultra-Heavy jets</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/7.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Gulfstream G450</li>
                    <li>Falcon 900LX</li>
                    <li>Challenger 850</li>
                    <li>Legacy 600</li>
                    <li>Legacy 650</li>
                </ul>
                <a href="/our-fleet-en/" class="link">See all</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Long-range jets</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/8.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Global 5500</li>
                    <li>Global 7500</li>
                    <li>Falcon 8X</li>
                    <li>Gulfstream G550</li>
                    <li>Gulfstream G650ER</li>
                </ul>
                <a href="/our-fleet-en/" class="link">See all</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Business liners</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/9.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>ACJ 220</li>
                    <li>ACJ 320 neo</li>
                    <li>BBJ 737-8 MAX</li>
                    <li>Lineage 1000E</li>
                    <li>Sukhoi Business jet</li>
                </ul>
                <a href="/our-fleet-en/" class="link">See all</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Helicopters</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/10.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Bell 407</li>
                    <li>Airbus H125</li>
                    <li>Airbus H145</li>
                    <li>Leonardo AW109</li>
                    <li>MI-8AMT</li>
                </ul>
                <a href="/our-fleet-en/" class="link">See all</a>
            </div>
        </div>
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/en/seo-empty-legs.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/cta-3.php'; ?>

<?php get_footer(); ?>