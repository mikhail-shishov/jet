<?php
/* Template Name: Buy EN */
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
        <h1 class="h1">Aircraft for sale and rent all over the World</h1>
        <h2 class="h3">New era of business aviation</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/section-image.png" class="intro-img" alt="">
    </div>
</section>

<section class="fleet-sect">
    <div class="container">
        <div class="search-wrap">
        <form class="search-form" action="/en/sell/" method="POST">
                <div class="search-form-options">
                    <div class="dropdown aircraft-type-dropdown">
                        <?php
                            $selectedType = '';
                            $defName = 'Type';
                            if(isset($_REQUEST['selectedType'])){
                              $selectedType = $_REQUEST['selectedType'];
                              $defName = $selectedType;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active">Any</li>
                            <li class="dropdown__list-item <?php if($selectedType=='Airplane'){echo 'dropdown__list-item_active';}?>" data-value="Airplane">Airplane</li>
                            <li class="dropdown__list-item <?php if($selectedType=='Helicopter'){echo 'dropdown__list-item_active';}?>" data-value="Helicopter">Helicopter</li>
                            <li class="dropdown__list-item <?php if($selectedType=='VTOL'){echo 'dropdown__list-item_active';}?>" data-value="VTOL">VTOL</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-type-dropdown aircraft-type-plane">
                        <?php
                            $selectedCategory = '';
                            $defName = 'Category';
                            if(isset($_REQUEST['selectedCategory'])){
                              $selectedCategory = $_REQUEST['selectedCategory'];
                              $defName = $selectedCategory;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item ">Any</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Turboprop'){echo 'dropdown__list-item_active';}?>" data-value="Turboprop">Turboprop</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Very Light'){echo 'dropdown__list-item_active';}?>" data-value="Very Light">Very Light</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Light'){echo 'dropdown__list-item_active';}?>" data-value="Light">Light</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Medium'){echo 'dropdown__list-item_active';}?>" data-value="Medium">Medium</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Super-Medium'){echo 'dropdown__list-item_active';}?>" data-value="Super-Medium">Super-Medium</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Large'){echo 'dropdown__list-item_active';}?>" data-value="Large">Large</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Ultra-Large'){echo 'dropdown__list-item_active';}?>" data-value="Ultra-Large">Ultra-Large</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Long-Range'){echo 'dropdown__list-item_active';}?>" data-value="Long-Range">Long-Range</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Business Airliners'){echo 'dropdown__list-item_active';}?>" data-value="Business Airliners">Business Airliners</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-type-dropdown aircraft-type-helicopter" style="display: none;">
                        <?php
                            $selectedCategory = '';
                            $defName = 'Category';
                            if(isset($_REQUEST['selectedCategory'])){
                              $selectedCategory = $_REQUEST['selectedCategory'];
                              $defName = $selectedCategory;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active">Any</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Single-engine'){echo 'dropdown__list-item_active';}?>" data-value="Single-engine">Single-engine</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Twin-engine'){echo 'dropdown__list-item_active';}?>" data-value="Twin-engine">Twin-engine</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-type-dropdown aircraft-type-vtol" style="display: none;">
                        <?php
                            $selectedCategory = '';
                            $defName = 'Category';
                            if(isset($_REQUEST['selectedCategory'])){
                              $selectedCategory = $_REQUEST['selectedCategory'];
                              $defName = $selectedCategory;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item dropdown__list-item_active">Any</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Classic'){echo 'dropdown__list-item_active';}?>" data-value="Classic">Classic</li>
                            <li class="dropdown__list-item <?php if($selectedCategory=='Electric'){echo 'dropdown__list-item_active';}?>" data-value="Electric">Electric</li>
                        </ul>
                        <input class="dropdown__input_hidden" type="text" name="select-category" value="" />
                    </div>

                    <div class="dropdown aircraft-manufacturer-dropdown aircraft-manufacturer-plane">
                        <?php
                            $manufacturerSelector = '';
                            $defName = 'Manufacturer';
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
                            $defName = 'Manufacturer';
                            if(isset($_REQUEST['manufacturerSelector'])){
                              $manufacturerSelector = $_REQUEST['manufacturerSelector'];
                              $defName = $manufacturerSelector;
                            }
                        ?>
                        <button class="dropdown__button" type="button">Manufacturer</button>
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
                            $defName = 'Manufacturer';
                            if(isset($_REQUEST['manufacturerSelector'])){
                              $manufacturerSelector = $_REQUEST['manufacturerSelector'];
                              $defName = $manufacturerSelector;
                            }
                        ?>
                        <button class="dropdown__button" type="button">Manufacturer</button>
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
                            $defName = 'Seats';
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
                            $defName = 'Seats';
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
                            $defName = 'Seats';
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
                            $defName = 'Range (km)';
                            if(isset($_REQUEST['rangeSelector'])){
                              $rangeSelectorArray = $_REQUEST['rangeSelector'];
                              $defName = implode(',', $rangeSelectorArray);
                            }
                        ?>
                        <button class="dropdown_with-chk__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="0-1500" id="0-1500" <?php if(in_array('0-1500', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="0-1500">under 1500</label>
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
                            $defName = 'Range (km)';
                            if(isset($_REQUEST['rangeSelector'])){
                              $rangeSelectorArray = $_REQUEST['rangeSelector'];
                              $defName = implode(',', $rangeSelectorArray);
                            }
                        ?>
                        <button class="dropdown_with-chk__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="0-600" id="0-600" <?php if(in_array('0-600', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="0-600">under 600</label>
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
                            $defName = 'Range (km)';
                            if(isset($_REQUEST['rangeSelector'])){
                              $rangeSelectorArray = $_REQUEST['rangeSelector'];
                              $defName = implode(',', $rangeSelectorArray);
                            }
                        ?>
                        <button class="dropdown_with-chk__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown_with-chk__list">
                            <li class="dropdown_with-chk__list-item">
                                <input class="dropdown_with-chk__list-item_label" type="checkbox" name="0-150" id="0-150" <?php if(in_array('0-150', $rangeSelectorArray)){echo 'checked';}?>/>
                                <label class="dropdown_with-chk__list-item_label" for="0-150">under 150</label>
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
                            $defName = 'Price';
                            if(isset($_REQUEST['selectedPrice'])){
                              $selectedPrice = $_REQUEST['selectedPrice'];
                              $defName = $selectedPrice;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="0-3000000" <?php if($selectedPrice=='0-3000000'){echo 'dropdown__list-item_active';}?>>under $3 000 000 </li>
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
                            $defName = 'Price';
                            if(isset($_REQUEST['selectedPrice'])){
                              $selectedPrice = $_REQUEST['selectedPrice'];
                              $defName = $selectedPrice;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="0-1500000" <?php if($selectedPrice=='0-1500000'){echo 'dropdown__list-item_active';}?>>under $1 500 000</li>
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
                            $defName = 'Price';
                            if(isset($_REQUEST['selectedPrice'])){
                              $selectedPrice = $_REQUEST['selectedPrice'];
                              $defName = $selectedPrice;
                            }
                        ?>
                        <button class="dropdown__button" type="button"><?php echo $defName;?></button>
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item" data-value="0-1500000" <?php if($selectedPrice=='0-1500000'){echo 'dropdown__list-item_active';}?>>under $1 500 000</li>
                            <li class="dropdown__list-item" data-value="1500000-4000000" <?php if($selectedPrice=='1500000-4000000'){echo 'dropdown__list-item_active';}?>>$1 500 000 - 3 000 000</li>
                            <li class="dropdown__list-item" data-value="4000000-8000000" <?php if($selectedPrice=='4000000-8000000'){echo 'dropdown__list-item_active';}?>>$3 000 000 – 6 000 000</li>
                            <li class="dropdown__list-item" data-value="8000000-12000000" <?php if($selectedPrice=='8000000-12000000'){echo 'dropdown__list-item_active';}?>>$6 000 000 – 11 000 000</li>
                            <li class="dropdown__list-item" data-value="12000000-99999999" <?php if($selectedPrice=='12000000-99999999'){echo 'dropdown__list-item_active';}?>>$11 000 000+</li>
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
        <?php            
            if(isset($_REQUEST['pages'])){$paged=$_REQUEST['pages'];}else{$paged = 1;}
            if(isset($_REQUEST['limit'])){$limit=$_REQUEST['limit'];}else{$limit = 5;}
            if(isset($_REQUEST['sort'])){$sort=$_REQUEST['sort'];}else{$sort = 1;}
             $filterParamsUrl = filterParamsUrls($_REQUEST);
            
        ?>
        <div class="tabs tabs-line">
            <div class="tabs-options tabs-options-cat">
                <a href="?selectedCategory=Turboprop" class="btn btn-grey-fill">Turboprop</a>
                <a href="?selectedCategory=Very Light" class="btn btn-grey-fill">Very Light</a>
                <a href="?selectedCategory=Light" class="btn btn-grey-fill">Light</a>
                <a href="?selectedCategory=Medium" class="btn btn-grey-fill">Medium</a>
                <a href="?selectedCategory=Super-Medium" class="btn btn-grey-fill">Super-Medium</a>
                <a href="?selectedCategory=Large" class="btn btn-grey-fill">Large</a>
                <a href="?selectedCategory=Ultra-Large" class="btn btn-grey-fill">Ultra-Large</a>
                <a href="?selectedCategory=Long-Range" class="btn btn-grey-fill">Long-Range</a>
                <a href="?selectedCategory=Business Airliners" class="btn btn-grey-fill">Business Airliners</a>
            </div>
        </div>
        <div class="tabs tabs-line">
            <div class="tabs-heading">Sort:</div>
            <div class="tabs-options">
                <a href="?sort=1&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==1){ echo 'is-active';}?>">Name</a>
                <a href="?sort=2&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==2){ echo 'is-active';}?>">Seats</a>
                <a href="?sort=3&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==3){ echo 'is-active';}?>">Luggage compartment</a>
                <a href="?sort=4&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==4){ echo 'is-active';}?>">Range</a>
                <a href="?sort=5&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==5){ echo 'is-active';}?>">Cruising speed</a>
                <a href="?sort=6&pages=<?php echo $paged;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-tab <?php if($sort==6){ echo 'is-active';}?>">Cabin height</a>
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
                        'terms'    => 'sell',
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
                                <p class="looking-row-desc"><?php echo esc_html($cruise_speed_kmh); ?> km/h</p>
                            </div>
                            <div class="looking-row">
                                <p class="looking-row-title">Дальность</p>
                                <p class="looking-row-desc"><?php echo esc_html($range_km); ?> km</p>
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
                        <a href="<?php the_permalink(); ?>" class="btn btn-green-fill">Show more</a>
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
                   <a href="?pages=<?php echo ($paged-1);?>&sort=<?php echo $sort;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-pagination">‹ Prev</a>
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
                   <a href="?pages=<?php echo ($paged+1);?>&sort=<?php echo $sort;?>&limit=<?php echo $limit;?><?php echo $filterParamsUrl;?>" class="btn btn-pagination">Next ›</a>
                <?php } ?>
            </nav>
            <div class="pagination-right">
                <span class="pagination-text">Show:</span>
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

<?php include_once get_stylesheet_directory() . '/components/en/quiz.php'; ?>

<?php include_once get_stylesheet_directory() . '/components/en/wanted.php'; ?>

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

<?php get_footer(); ?>