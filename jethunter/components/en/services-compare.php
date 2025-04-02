<?php $compare_table = carbon_get_theme_option('compare_table_en'); ?>

<section class="compare-sect">
    <div class="container">
        <h2 class="h2 center">Compare our level of service</h2>
        <!-- <div class="compare-table">
            <div class="compare-head">
                <span class="compare-head-title">A regular broker</span>
                <span class="compare-head-title">A regular airline</span>
                <span class="compare-head-title">Jet Hunter</span>
            </div>
            <div class="compare-body">
                <div class="compare-row">
                    <p class="compare-body-title">More than 12 years of experience</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Personal manager</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Our own fleet</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Aircraft from the open market</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Access to exclusive aircraft</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Only proven partners</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Price optimization using empty legs</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Replacement of aircraft from our fleet in case of AOG</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Replacement of aircraft with any from the market in case of AOG</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">OPS monitors your flight 24/7</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Own representative at major airports</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Quality Control Service guarantees constant quality of flight performance</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Conventional payment methods</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img compare-check-grey">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
                <div class="compare-row">
                    <p class="compare-body-title">Modern payment methods</p>
                    <div class="compare-check-row">
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img invisible">No</div>
                        <div class="compare-check-img">Yes</div>
                    </div>
                </div>
            </div>
        </div> -->
        <?php if ($compare_table) : ?>
            <div class="compare-table">
                <div class="compare-head">
                    <span class="compare-head-title">A regular broker</span>
                    <span class="compare-head-title">A regular airline</span>
                    <span class="compare-head-title">Jet Hunter</span>
                </div>
                <div class="compare-body">
                    <?php foreach ($compare_table as $row) : ?>
                        <div class="compare-row">
                            <p class="compare-body-title"><?= esc_html($row['title']); ?></p>
                            <div class="compare-check-row">
                                <div class="compare-check-img <?= $row['broker'] !== 'yes' ? esc_attr($row['broker']) : ''; ?>">
                                    <?= $row['broker'] === 'yes' ? 'Yes' : 'No'; ?>
                                </div>
                                <div class="compare-check-img <?= $row['airline'] !== 'yes' ? esc_attr($row['airline']) : ''; ?>">
                                    <?= $row['airline'] === 'yes' ? 'Yes' : 'No'; ?>
                                </div>
                                <div class="compare-check-img <?= $row['jethunter'] !== 'yes' ? esc_attr($row['jethunter']) : ''; ?>">
                                    <?= $row['jethunter'] === 'yes' ? 'Yes' : 'No'; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>