<?php
/* Template Name: Rent */
?>

<?php get_header(); ?>
<?php
    $query = new WP_Query(array(
       'post_type' => 'product',
       'meta_query' => array(
            array(
               'key' => 'aircraft_type',
               'value' => 'Самолет',
            ),
        ),
    ));

    $line = '';
    if ($query->have_posts()){
        while ($query->have_posts()) {
            $query->the_post();
            $line = $line.'-'.get_the_title();
        }
    }

    //echo $line.'!';die;
?>
<section class="breadcrumbs-sect">
    <div class="container">
        <?php include_once "breadcrumbs/breadcrumbs.php" ?>
        <?php get_breadcrumb(); ?>
    </div>
</section>

<section class="intro-fleet-sect">
    <div class="container">
        <h1 class="h1">Самолеты для прирожденных лидеров</h1>
        <h2 class="h3">Новое слово в бизнес-авиации</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/section-image.png" class="intro-img" alt="">
    </div>
</section>

<section class="fleet-sect">
    <div class="container">
        <div class="search-wrap">
        <form class="search-form" action="/ru/rent/" method="POST">
                <div class="search-form-options">
                    <div class="dropdown aircraft-type-dropdown">
                        <?php
                            $selectedType = '';
                            $defName = 'Тип';
                            if(isset($_REQUEST['selectedType'])){
                              $selectedType = $_REQUEST['selectedType'];
                              $defName = $selectedType;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active">Любой</li>
                            <li class="dropdown__list-item <?php if($selectedType=='Самолет'){echo 'dropdown__list-item_active';}?>" data-value="Самолет">Самолет</li>
                            <li class="dropdown__list-item <?php if($selectedType=='Вертолет'){echo 'dropdown__list-item_active';}?>" data-value="Вертолет">Вертолет</li>
                            <li class="dropdown__list-item <?php if($selectedType=='VTOL'){echo 'dropdown__list-item_active';}?>" data-value="VTOL">VTOL</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-type-dropdown aircraft-type-plane">
                        <?php
                            $selectedCategory = '';
                            $defName = 'Категория';
                            if(isset($_REQUEST['selectedCategory'])){
                              $selectedCategory = $_REQUEST['selectedCategory'];
                              $defName = $selectedCategory;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item ">Любой</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Турбовинтовые'){echo 'dropdown__list-item_active';}?>" data-value="Турбовинтовые">Турбовинтовые</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Очень легкие'){echo 'dropdown__list-item_active';}?>" data-value="Очень легкие">Очень легкие</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Легкие'){echo 'dropdown__list-item_active';}?>" data-value="Легкие">Легкие</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Средние'){echo 'dropdown__list-item_active';}?>" data-value="Средние">Средние</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Супер-средние'){echo 'dropdown__list-item_active';}?>" data-value="Супер-средние">Супер-средние</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Большие'){echo 'dropdown__list-item_active';}?>" data-value="Большие">Большие</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Ультра-большие'){echo 'dropdown__list-item_active';}?>" data-value="Ультра-большие">Ультра-большие</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Дальнемагистральные'){echo 'dropdown__list-item_active';}?>" data-value="Дальнемагистральные">Дальнемагистральные</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Бизнес-лайнеры'){echo 'dropdown__list-item_active';}?>" data-value="Бизнес-лайнеры">Бизнес-лайнеры</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-type-dropdown aircraft-type-helicopter" style="display: none;">
                        <?php
                            $selectedCategory = '';
                            $defName = 'Категория';
                            if(isset($_REQUEST['selectedCategory'])){
                              $selectedCategory = $_REQUEST['selectedCategory'];
                              $defName = $selectedCategory;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active">Любой</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Однодвигательный'){echo 'dropdown__list-item_active';}?>" data-value="Однодвигательный">Однодвигательный</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Двухдвигательный'){echo 'dropdown__list-item_active';}?>" data-value="Двухдвигательный">Двухдвигательный</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-type-dropdown aircraft-type-vtol" style="display: none;">
                        <?php
                            $selectedCategory = '';
                            $defName = 'Категория';
                            if(isset($_REQUEST['selectedCategory'])){
                              $selectedCategory = $_REQUEST['selectedCategory'];
                              $defName = $selectedCategory;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active">Любой</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Классический'){echo 'dropdown__list-item_active';}?>" data-value="Классический">Классический</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Электрический'){echo 'dropdown__list-item_active';}?>" data-value="Электрический">Электрический</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-manufacturer-dropdown aircraft-manufacturer-plane">
                        <?php
                            $manufacturerSelector = '';
                            $defName = 'Производитель';
                            if(isset($_REQUEST['manufacturerSelector'])){
                              $manufacturerSelector = $_REQUEST['manufacturerSelector'];
                              $defName = $manufacturerSelector;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Airbus'){echo 'dropdown__list-item_active';}?>" data-value="Airbus">Airbus</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Boeing'){echo 'dropdown__list-item_active';}?>" data-value="Boeing">Boeing</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Embraer'){echo 'dropdown__list-item_active';}?>" data-value="Embraer">Embraer</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Dassault'){echo 'dropdown__list-item_active';}?>" data-value="Dassault">Dassault</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Bombardier Aerospace'){echo 'dropdown__list-item_active';}?>" data-value="Bombardier Aerospace">Bombardier Aerospace</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Gulfstream'){echo 'dropdown__list-item_active';}?>" data-value="Gulfstream">Gulfstream</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Avro'){echo 'dropdown__list-item_active';}?>" data-value="Avro">Avro</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Beechcraft'){echo 'dropdown__list-item_active';}?>" data-value="Beechcraft">Beechcraft</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Cessna'){echo 'dropdown__list-item_active';}?>" data-value="Cessna">Cessna</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Dornier'){echo 'dropdown__list-item_active';}?>" data-value="Dornier">Dornier</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Aero Commander'){echo 'dropdown__list-item_active';}?>" data-value="Aero Commander">Aero Commander</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Nextant Aerospace'){echo 'dropdown__list-item_active';}?>" data-value="Nextant Aerospace">Nextant Aerospace</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Grob Aerospace'){echo 'dropdown__list-item_active';}?>" data-value="Grob Aerospace">Grob Aerospace</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Eclipse Aviation'){echo 'dropdown__list-item_active';}?>" data-value="Eclipse Aviation">Eclipse Aviation</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Honda'){echo 'dropdown__list-item_active';}?>" data-value="Honda">Honda</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Piper Aircraft'){echo 'dropdown__list-item_active';}?>" data-value="Piper Aircraft">Piper Aircraft</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Adam Aircraft Industries'){echo 'dropdown__list-item_active';}?>" data-value="Adam Aircraft Industries">Adam Aircraft Industries</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Epic Aircraft'){echo 'dropdown__list-item_active';}?>" data-value="Epic Aircraft">Epic Aircraft</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Cirrus Aircraft'){echo 'dropdown__list-item_active';}?>" data-value="Cirrus Aircraft">Cirrus Aircraft</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Quest Aircraft'){echo 'dropdown__list-item_active';}?>" data-value="Quest Aircraft">Quest Aircraft</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Piaggio'){echo 'dropdown__list-item_active';}?>" data-value="Piaggio">Piaggio</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Pilatus'){echo 'dropdown__list-item_active';}?>" data-value="Pilatus">Pilatus</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Socata (Daher)'){echo 'dropdown__list-item_active';}?>" data-value="Socata (Daher)">Socata (Daher)</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Mooney'){echo 'dropdown__list-item_active';}?>" data-value="Mooney">Mooney</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Fokker'){echo 'dropdown__list-item_active';}?>" data-value="Fokker">Fokker</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Tupolev'){echo 'dropdown__list-item_active';}?>" data-value="Tupolev">Tupolev</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Sukhoi'){echo 'dropdown__list-item_active';}?>" data-value="Sukhoi">Sukhoi</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-manufacturer-dropdown aircraft-manufacturer-helicopter" style="display: none;">
                         <?php
                            $manufacturerSelector = '';
                            $defName = 'Производитель';
                            if(isset($_REQUEST['manufacturerSelector'])){
                              $manufacturerSelector = $_REQUEST['manufacturerSelector'];
                              $defName = $manufacturerSelector;
                            }
                        ?>
                        <button class="dropdown__button" type="button">Производитель</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Airbus helicopters'){echo 'dropdown__list-item_active';}?>" data-value="Airbus Helicopters">Airbus helicopters</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Bell Helicopters'){echo 'dropdown__list-item_active';}?>" data-value="Bell Helicopters">Bell Helicopters</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Enstrom Helicopters'){echo 'dropdown__list-item_active';}?>" data-value="Enstrom Helicopters">Enstrom Helicopters</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Leonardo Helicopters'){echo 'dropdown__list-item_active';}?>" data-value="Leonardo Helicopters">Leonardo Helicopters</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='MD Helicopters'){echo 'dropdown__list-item_active';}?>" data-value="MD Helicopters">MD Helicopters</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Robinson helicopters'){echo 'dropdown__list-item_active';}?>" data-value="Robinson helicopters">Robinson helicopters</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Russian Helicopters'){echo 'dropdown__list-item_active';}?>" data-value="Russian Helicopters">Russian Helicopters</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Sikorsky'){echo 'dropdown__list-item_active';}?>" data-value="Sikorsky">Sikorsky</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Schweizer'){echo 'dropdown__list-item_active';}?>" data-value="Schweizer">Schweizer</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-manufacturer-dropdown aircraft-manufacturer-vtol" style="display: none;">
                         <?php
                            $manufacturerSelector = '';
                            $defName = 'Производитель';
                            if(isset($_REQUEST['manufacturerSelector'])){
                              $manufacturerSelector = $_REQUEST['manufacturerSelector'];
                              $defName = $manufacturerSelector;
                            }
                        ?>
                        <button class="dropdown__button" type="button">Производитель</button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Joby Aviation'){echo 'dropdown__list-item_active';}?>" data-value="Joby Aviation">Joby Aviation</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Archer Aviation Inc.'){echo 'dropdown__list-item_active';}?>" data-value="Archer Aviation Inc.">Archer Aviation Inc.</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Ehang'){echo 'dropdown__list-item_active';}?>" data-value="Ehang">Ehang</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Lilium'){echo 'dropdown__list-item_active';}?>" data-value="Lilium">Lilium</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='MD Helicopters'){echo 'dropdown__list-item_active';}?>" data-value="MD Helicopters">MD Helicopters</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Vertical Aerospace'){echo 'dropdown__list-item_active';}?>" data-value="Vertical Aerospace">Vertical Aerospace</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Volocopter'){echo 'dropdown__list-item_active';}?>" data-value="Volocopter">Volocopter</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Airbus'){echo 'dropdown__list-item_active';}?>" data-value="Airbus">Airbus</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Wisk Aero'){echo 'dropdown__list-item_active';}?>" data-value="Wisk Aero">Wisk Aero</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Beta Technologies'){echo 'dropdown__list-item_active';}?>" data-value="Beta Technologies">Beta Technologies</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Eve Air Mobility'){echo 'dropdown__list-item_active';}?>" data-value="Eve Air Mobility">Eve Air Mobility</li>
                            <li class="dropdown__list-item <?php if($manufacturerSelector=='Overair'){echo 'dropdown__list-item_active';}?>" data-value="Overair">Overair</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown_with-chk aircraft-seats-dropdown aircraft-seats-plane">
                        <?php
                            $seatsSelectorArray = array();
                            $defName = 'Количество мест';
                            if(isset($_REQUEST['seatsSelector'])){
                              $seatsSelectorArray = $_REQUEST['seatsSelector'];
                              $defName = implode(',', $seatsSelectorArray);
                            }
                        ?>
                        <button class="dropdown_with-chk__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="1-8" id="1-8" <?php if(in_array('1-8', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="1-8">1-8</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="8-14" id="8-14" <?php if(in_array('8-14', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="8-14">8-14</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="14-19" id="14-19" <?php if(in_array('14-19', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="14-19">14-19</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="19-50" id="19-50" <?php if(in_array('19-50', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="19-50">19-50</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="50" id="50" <?php if(in_array('50', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="50">50+</label>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown_with-chk aircraft-seats-dropdown aircraft-seats-helicopter" style="display:none;">
                        <?php
                            $seatsSelectorArray = array();
                            $defName = 'Количество мест';
                            if(isset($_REQUEST['seatsSelector'])){
                              $seatsSelectorArray = $_REQUEST['seatsSelector'];
                              $defName = implode(',', $seatsSelectorArray);
                            }
                        ?>
                        <button class="dropdown_with-chk__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="1-2" id="1-2" <?php if(in_array('1-2', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="1-2">1-2</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="2-4" id="2-4" <?php if(in_array('2-4', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="2-4">2-4</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="4-8" id="4-8" <?php if(in_array('4-8', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="4-8">4-8</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="8-12" id="8-12" <?php if(in_array('8-12', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="8-12">8-12</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="12-18" id="12-18" <?php if(in_array('12-18', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="12-18">12-18</label>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown_with-chk aircraft-seats-dropdown aircraft-seats-vtol" style="display:none;">
                        <?php
                            $seatsSelectorArray = array();
                            $defName = 'Количество мест';
                            if(isset($_REQUEST['seatsSelector'])){
                              $seatsSelectorArray = $_REQUEST['seatsSelector'];
                              $defName = implode(',', $seatsSelectorArray);
                            }
                        ?>
                        <button class="dropdown_with-chk__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="1-2" id="1-2" <?php if(in_array('1-2', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="1-2">1-2</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="2-4" id="2-4" <?php if(in_array('2-4', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="2-4">2-4</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="4-8" id="4-8" <?php if(in_array('4-8', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="4-8">4-8</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="8-12" id="8-12" <?php if(in_array('8-12', $seatsSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="8-12">8-12</label>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown_with-chk aircraft-range-dropdown aircraft-range-plane">
                        <?php
                            $rangeSelectorArray = array();
                            $defName = 'Дальность (км)';
                            if(isset($_REQUEST['rangeSelector'])){
                              $rangeSelectorArray = $_REQUEST['rangeSelector'];
                              $defName = implode(',', $rangeSelectorArray);
                            }
                        ?>
                        <button class="dropdown_with-chk__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="0-1500" id="0-1500" <?php if(in_array('0-1500', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="0-1500">до 1500</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="1500-4000" id="1500-4000" <?php if(in_array('1500-4000', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="1500-4000">1500-4000</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="4000-9000" id="4000-9000" <?php if(in_array('4000-9000', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="4000-9000">4000-9000</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="9000-99999" id="9000-99999" <?php if(in_array('9000-99999', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="9000-99999">9000+</label>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown_with-chk aircraft-range-dropdown aircraft-range-helicopter" style="display:none;">
                        <?php
                            $rangeSelectorArray = array();
                            $defName = 'Дальность (км)';
                            if(isset($_REQUEST['rangeSelector'])){
                              $rangeSelectorArray = $_REQUEST['rangeSelector'];
                              $defName = implode(',', $rangeSelectorArray);
                            }
                        ?>
                        <button class="dropdown_with-chk__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="0-600" id="0-600" <?php if(in_array('0-600', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="0-600">до 600</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="600-900" id="600-900" <?php if(in_array('600-900', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="600-900">600-900</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="900-99999" id="900-99999" <?php if(in_array('900-99999', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="900-99999">900+</label>
                            </li>
                    </div>

                    <div class="dropdown_with-chk aircraft-range-dropdown aircraft-range-vtol" style="display:none;">
                        <?php
                            $rangeSelectorArray = array();
                            $defName = 'Дальность (км)';
                            if(isset($_REQUEST['rangeSelector'])){
                              $rangeSelectorArray = $_REQUEST['rangeSelector'];
                              $defName = implode(',', $rangeSelectorArray);
                            }
                        ?>
                        <button class="dropdown_with-chk__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="0-150" id="0-150" <?php if(in_array('0-150', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="0-150">до 150</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="150-300" id="150-300" <?php if(in_array('150-300', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="150-300">150-300</label>
                            </li>
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="300-500" id="300-500" <?php if(in_array('300-500', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="300-500">300-500</label>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown aircraft-price-dropdown aircraft-price-plane">
                        <?php
                            $selectedPrice = '';
                            $defName = 'Цена';
                            if(isset($_REQUEST['selectedPrice'])){
                              $selectedPrice = $_REQUEST['selectedPrice'];
                              $defName = $selectedPrice;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="0-3000000" <?php if($selectedPrice=='0-3000000'){echo 'dropdown__list-item_active';}?>>до $3 000 000 </li>
                            <li class="dropdown__list-item" data-value="3000000-8000000" <?php if($selectedPrice=='3000000-8000000'){echo 'dropdown__list-item_active';}?>>$3 000 000 - 8 000 000</li>
                            <li class="dropdown__list-item" data-value="8000000-15000000" <?php if($selectedPrice=='8000000-15000000'){echo 'dropdown__list-item_active';}?>>$8 000 000 – 15 000 000</li>
                            <li class="dropdown__list-item" data-value="15000000-40000000" <?php if($selectedPrice=='15000000-40000000'){echo 'dropdown__list-item_active';}?>>$15 000 000 – 40 000 000</li>
                            <li class="dropdown__list-item" data-value="40000000-99999999" <?php if($selectedPrice=='40000000-99999999'){echo 'dropdown__list-item_active';}?>>$40 000 000+</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-price-dropdown aircraft-price-helicopter" style="display:none;">
                         <?php
                            $selectedPrice = '';
                            $defName = 'Цена';
                            if(isset($_REQUEST['selectedPrice'])){
                              $selectedPrice = $_REQUEST['selectedPrice'];
                              $defName = $selectedPrice;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="0-1500000" <?php if($selectedPrice=='0-1500000'){echo 'dropdown__list-item_active';}?>>до $1 500 000</li>
                            <li class="dropdown__list-item" data-value="1500000-4000000" <?php if($selectedPrice=='1500000-4000000'){echo 'dropdown__list-item_active';}?>>$1 500 000 - 4 000 000</li>
                            <li class="dropdown__list-item" data-value="4000000-8000000" <?php if($selectedPrice=='4000000-8000000'){echo 'dropdown__list-item_active';}?>>$4 000 000 – 8 000 000</li>
                            <li class="dropdown__list-item" data-value="8000000-12000000" <?php if($selectedPrice=='8000000-12000000'){echo 'dropdown__list-item_active';}?>>$8 000 000 – 12 000 000</li>
                            <li class="dropdown__list-item" data-value="12000000-99999999" <?php if($selectedPrice=='12000000-99999999'){echo 'dropdown__list-item_active';}?>>$12 000 000+</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-price-dropdown aircraft-price-vtol" style="display:none;">
                         <?php
                            $selectedPrice = '';
                            $defName = 'Цена';
                            if(isset($_REQUEST['selectedPrice'])){
                              $selectedPrice = $_REQUEST['selectedPrice'];
                              $defName = $selectedPrice;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="0-1500000" <?php if($selectedPrice=='0-1500000'){echo 'dropdown__list-item_active';}?>>до $1 500 000</li>
                            <li class="dropdown__list-item" data-value="1500000-4000000" <?php if($selectedPrice=='1500000-4000000'){echo 'dropdown__list-item_active';}?>>$1 500 000 - 3 000 000</li>
                            <li class="dropdown__list-item" data-value="4000000-8000000" <?php if($selectedPrice=='4000000-8000000'){echo 'dropdown__list-item_active';}?>>$3 000 000 – 6 000 000</li>
                            <li class="dropdown__list-item" data-value="8000000-12000000" <?php if($selectedPrice=='8000000-12000000'){echo 'dropdown__list-item_active';}?>>$6 000 000 – 11 000 000</li>
                            <li class="dropdown__list-item" data-value="12000000-99999999" <?php if($selectedPrice=='12000000-99999999'){echo 'dropdown__list-item_active';}?>>$11 000 000+</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                </div>
                <div class="btn-container">
                    <button type="button" class="btn btn-green-fill btn-find">Найти</button>
                    <button type="button" class="btn btn-reset">Сбросить</button>
                </div>
            </form>
        </div>
        <?php            
            if(isset($_REQUEST['pages'])){$paged=$_REQUEST['pages'];}else{$paged = 1;}
            if(isset($_REQUEST['limit'])){$limit=$_REQUEST['limit'];}else{$limit = 5;}
            if(isset($_REQUEST['sort'])){$sort=$_REQUEST['sort'];}else{$sort = 1;}
             $filterParamsUrl = filterParamsUrls($_REQUEST);
            
        ?>
        <div class="tabs tabs-line">
            <div class="tabs-options tabs-options-cat">
                <a href="?selectedCategory=Турбовинтовые" class="btn btn-grey-fill">Турбовинтовой</a>
                <a href="?selectedCategory=Очень легкие" class="btn btn-grey-fill">Очень легкие</a>
                <a href="?selectedCategory=Легкие" class="btn btn-grey-fill">Легкие</a>
                <a href="?selectedCategory=Средние" class="btn btn-grey-fill">Средние</a>
                <a href="?selectedCategory=Супер-средние" class="btn btn-grey-fill">Супер-средние</a>
                <a href="?selectedCategory=Большие" class="btn btn-grey-fill">Большие</a>
                <a href="?selectedCategory=Ультра-большие" class="btn btn-grey-fill">Ультра-большие</a>
                <a href="?selectedCategory=Дальнемагистральные" class="btn btn-grey-fill">Дальнемагистральные</a>
                <a href="?selectedCategory=Бизнес-лайнеры" class="btn btn-grey-fill">Бизнес-лайнеры</a>
            </div>
        </div>
        <div class="tabs tabs-line">
            <div class="tabs-heading">Сортировать:</div>
            <div class="tabs-options">
                <a href="?sort=1&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==1){ echo 'is-active';}?>">Название</a>
                <!-- <a href="#" data-sort="rent_price" class="btn btn-tab">Цена аренды</a>
                <a href="#" data-sort="buy_price" class="btn btn-tab">Цена покупки</a> -->
                <a href="?sort=2&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==2){ echo 'is-active';}?>">Количество мест</a>
                <a href="?sort=3&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==3){ echo 'is-active';}?>">Объем багажника</a>
                <a href="?sort=4&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==4){ echo 'is-active';}?>">Дальность</a>
                <a href="?sort=5&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==5){ echo 'is-active';}?>">Скорость</a>
                <a href="?sort=6&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==6){ echo 'is-active';}?>">Высота салона</a>
            </div>
        </div>

        <div class="looking-grid looking-grid-full backSearchWrapper">
            <?php

            $args = [
                'post_type'      => 'product',
                'posts_per_page' => $limit,
                'paged'          => $paged,
                'tax_query'      => [
                    [
                        'taxonomy' => 'product_cat',
                        'field'    => 'slug',
                        'terms'    => 'rent',
                    ],
                ],
                'meta_query'     => array(array('relation' => 'AND')),
            ];
            $args = sortingParams($args, $sort);
            $args = filterParams($args, $_REQUEST, 1);

            //print_r($args);
            $aircrafts = new WP_Query($args);
            $total = $aircrafts->found_posts;
            $total_pages = ceil($total/$limit);

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
                    <div class="looking-item">
                        <img src="<?php echo esc_url($image); ?>" class="looking-img" loading="lazy" alt="<?php the_title(); ?>">
                        <h3 class="h3"><?php the_title(); ?></h3>
                        <div class="looking-desc">
                            <div class="looking-row">
                                <p class="looking-row-title">Скорость</p>
                                <p class="looking-row-desc"><?php echo esc_html($cruise_speed_kmh); ?> км/ч</p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Дальность</p>
                                <p class="looking-row-desc"><?php echo esc_html($range_km); ?> км</p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Количество мест</p>
                                <p class="looking-row-desc"><?php echo esc_html($aircraft_seats); ?></p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Цена в час</p>
                                <p class="looking-row-desc">$<?php echo esc_html($aircraft_hour_cost); ?></p>
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-green-fill">Подробнее</a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Ничего не найдено.</p>';
            endif;
            ?>
        </div>

        <div class="pagination">
            <nav class="pagination-left">
                <?php if($paged > 1){ ?>
                   <a href="?pages=<?php echo ($paged-1);?>&sort=<?php echo $sort;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-pagination">‹ Предыдущий</a>
                <?php } ?>
                <ul class="pagination-list">
                    <?php if($paged > 1){ ?>
                    <li class="pagination-list-item ">
                        <a href="?pages=<?php echo ($paged-1);?>&sort=<?php echo $sort;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>"><?php echo ($paged-1);?></a>
                    </li>
                    <?php } ?>
                    <li class="pagination-list-item is-active">
                        <a href="javascript:void(0)"><?php echo $paged;?></a>
                    </li>
                    <?php if(($paged+1) <= $total_pages){ ?>
                    <li class="pagination-list-item">
                        <a href="?pages=<?php echo ($paged+1);?>&sort=<?php echo $sort;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>"><?php echo ($paged+1);?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php if(($paged+1) <= $total_pages){ ?>
                   <a href="?pages=<?php echo ($paged+1);?>&sort=<?php echo $sort;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-pagination">Следующий ›</a>
                <?php } ?>
            </nav>
            <div class="pagination-right">
                <span class="pagination-text">Показывать:</span>
                <ul class="pagination-list">
                    <li class="pagination-list-item <?php if($limit==5){ echo 'is-active';}?>">
                        <a href="?limit=5&sort=<?php echo $sort;?>&pages=1<?php  echo $filterParamsUrl;?>">5</a>
                    </li>
                    <li class="pagination-list-item <?php if($limit==10){ echo 'is-active';}?>">
                        <a href="?limit=10&sort=<?php echo $sort;?>&pages=1<?php echo $filterParamsUrl;?>">10</a>
                    </li>
                    <li class="pagination-list-item <?php if($limit==20){ echo 'is-active';}?>">
                        <a href="?limit=20&sort=<?php echo $sort;?>&pages=1<?php echo $filterParamsUrl;?>">20</a>
                    </li>
                    <li class="pagination-list-item <?php if($limit==30){ echo 'is-active';}?>">
                        <a href="?limit=30&sort=<?php echo $sort;?>&pages=1<?php echo $filterParamsUrl;?>">30</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/ru/quiz.php'; ?>

<?php include_once 'components/looking-sect.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/about-rent.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/step-3.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/instruction-8.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-1.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-ceo.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/features.php'; ?>


<!-- <section class="compare-sect">
    <div class="container">
        <h2 class="h2 center">Сравните уровень нашего сервиса</h2>
        <div class="compare-table">
            <div class="compare-head">
                <span class="compare-head-title">Обычный брокер</span>
                <span class="compare-head-title">Обычная авиакомпания</span>
                <span class="compare-head-title">Jet Hunter</span>
            </div>
            <div class="compare-body">
                <div class="compare-row">
                    <p class="compare-body-title">Опыт более 20 лет</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Персональный менеджер</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Предложения в рамках своего флота</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Поиск самолёта по общей базе</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Доступ к эксклюзивным самолетам</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Только Проверенные подрядчики</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Оптимизация цены за счет пустых перелетов</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Замена самолета из своего флота в случае поломки</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Замена самолета любым с рынка в случае поломки</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Своя служба OPS контролирует ваш рейс 24/7</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Свой представитель в крупнейших аэропортах</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Служба Контроля Качества гарантирует постоянное качество
                        выполнения рейсов</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Традиционные способы оплаты</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img compare-check-grey">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Более 50 других способов оплаты!</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img invisible">Нет</div>
                        <div class="compare-check-img">Есть</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php include_once get_stylesheet_directory() . '/components/ru/services-compare.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/services-slider.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-2.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/reviews.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/partners.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/faq.php'; ?>

<section class="plane-sect">
    <div class="container">
        <h2 class="h2 center">Взлетайте в любое время с&nbsp;Jet&nbsp;Hunter</h2>
        <div class="plane-grid">
            <div class="plane-grid-item">
                <h3 class="h3">Турбовинтовые</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/1.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Pilatus PC-12 NGX</li>
                    <li>King Air 360ER</li>
                    <li>King Air 260</li>
                    <li>Piaggio Avanti II</li>
                    <li>Beechcraft Denali</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Очень легкие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/2.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Cessna CJ1+</li>
                    <li>HondaJet Elite II</li>
                    <li>Cessna M2</li>
                    <li>Phenom 100EX</li>
                    <li>Cirrus Vision Jet</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Легкие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/3.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Cessna CJ3 Gen 2</li>
                    <li>Cessna CJ4 Gen 2</li>
                    <li>Learjet 40XR</li>
                    <li>Learjet 75</li>
                    <li>Phenom 300E</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Средние</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/4.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Citation Latitude</li>
                    <li>Citation XLS+</li>
                    <li>Pilatus PC-24</li>
                    <li>Learjet 60 XR</li>
                    <li>Praetor 500</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Супер-средние</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/5.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Challenger 350</li>
                    <li>Citation Longitude</li>
                    <li>Citation X+</li>
                    <li>Gulfstream G280</li>
                    <li>Praetor 600</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>

            <div class="plane-grid-item">
                <h3 class="h3">Большие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/6.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Challenger 604</li>
                    <li>Challenger 605</li>
                    <li>Challenger 650</li>
                    <li>Falcon 2000S</li>
                    <li>Falcon 2000LXS</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Ультра-большие</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/7.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Gulfstream G450</li>
                    <li>Falcon 900LX</li>
                    <li>Challenger 850</li>
                    <li>Legacy 600</li>
                    <li>Legacy 650</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Дальне магистральные</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/8.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Global 5500</li>
                    <li>Global 7500</li>
                    <li>Falcon 8X</li>
                    <li>Gulfstream G550</li>
                    <li>Gulfstream G650ER</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Бизнес-лайнеры</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/9.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>ACJ 220</li>
                    <li>ACJ 320 neo</li>
                    <li>BBJ 737-8 MAX</li>
                    <li>Lineage 1000E</li>
                    <li>Sukhoi Business jet</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
            <div class="plane-grid-item">
                <h3 class="h3">Вертолеты</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/10.png" class="plane-grid-img" loading="lazy" alt="">
                <ul class="list">
                    <li>Bell 407</li>
                    <li>Airbus H125</li>
                    <li>Airbus H145</li>
                    <li>Leonardo AW109</li>
                    <li>MI-8AMT</li>
                </ul>
                <a href="/our-fleet/" class="link">Посмотреть все</a>
            </div>
        </div>
    </div>
</section>

<?php include_once get_stylesheet_directory() . '/components/ru/seo-empty-legs.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/ru/cta-3.php'; ?>

<?php get_footer(); ?>