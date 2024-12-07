<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

<section class="plane-sect">
    <div class="container">
        <div class="plane-name">
            <h1 class="h1"><?php the_title(); ?></h1>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/makes/challenger.png" class="plane-logo" alt="">
        </div>
        <ul class="nav-tabs nav-tabs-plane">
            <li class="nav-tabs-item active"><a href="#tab-1" class="btn btn-tab-full">Экстерьер</a></li>
            <li class="nav-tabs-item"><a href="#tab-2" class="btn btn-tab-full">Интерьер</a></li>
            <li class="nav-tabs-item"><a href="#tab-3" class="btn btn-tab-full">План салона</a></li>
            <div class="nav-tabs-right">
                <a href="?add-to-compare=<?php echo get_the_ID(); ?>" class="btn">Добавить в сравнение</a>
            </div>
        </ul>
        <div class="plane-images">
            <div class="plane-gallery">
                <?php /* woocommerce_show_product_images(); */ ?>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <!-- Replace with WooCommerce gallery -->
                        <?php /* woocommerce_show_product_gallery(); */ ?>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="gallery-container">
                            <!-- Additional content for tab 2 -->
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane">
                        <div class="gallery-container">
                            <!-- Additional content for tab 3 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="plane-scheme">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/planes/item/ch-350/ch-350-scheme.png" alt="">
        </div>
    </div>
</section>

<section class="plane-specs">
    <div class="container">
        <div class="plane-specs-item">
            <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_plane_seats', true); ?></div>
            <div class="plane-specs-desc">Мест</div>
        </div>
        <div class="plane-specs-item">
            <div class="plane-specs-number"><?php echo get_post_meta(get_the_ID(), '_plane_speed', true); ?></div>
            <div class="plane-specs-desc">Скорость км/ч (m/h)</div>
        </div>
        <!-- Add more specs dynamically -->
    </div>
</section>

<section class="tech-sect">
    <div class="container">
        <h2 class="h2 center">Технические характеристики</h2>
        <div class="tech-table">
            <div class="tech-table-col">
                <div class="tech-table-row">
                    <div class="tech-table-title">Крейсерская скорость</div>
                    <div class="tech-table-desc"><?php echo get_post_meta(get_the_ID(), '_plane_cruise_speed', true); ?></div>
                </div>
                <!-- Add more technical details dynamically -->
            </div>
        </div>
    </div>
</section>

<section class="step-sect">
    <div class="container">
        <h2 class="h2 center">Особенности самолета</h2>
        <div class="step-grid">
            <div class="step-item">
                <span class="step-number">1</span>
                <h3 class="h3">Удобство прохода на борт</h3>
                <p>Дверь бизнес-джета оснащена электрическим моторчиком...</p>
            </div>
            <!-- Add more steps -->
        </div>
    </div>
</section>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
