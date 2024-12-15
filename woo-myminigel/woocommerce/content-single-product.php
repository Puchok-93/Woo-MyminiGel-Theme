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


?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'detail-product', $product ); ?>>

	<!-- Gallery -->
	<div class="product-gallery">
		<div class="product-thumb-slider">
			<div class="swiper-wrapper">
				<?php
					$product_img_id = $product->get_image_id();
					if ( $product_img_id ) {
						$main_img = wp_get_attachment_url( $product_img_id );
					} else {
						$main_img = wc_placeholder_img_src( 'woocommerce_full' );
					}
					$product_img_ids = $product->get_gallery_image_ids();
				?>
				<div class="swiper-slide">
					<img src="<?php echo $main_img; ?>" alt="<?php echo $product->get_title(); ?>">
				</div>
				<?php if ( $product_img_ids ): ?>
					<?php foreach ( $product_img_ids as $product_img_id ): ?>
						<div class="swiper-slide">
							<img src="<?php echo wp_get_attachment_url( $product_img_id ); ?>" alt="<?php echo $product->get_title(); ?>">
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

		<div id="main-product-slider" class="product-main-slider swiper">
			<div class="swiper-wrapper">
				<?php
					$product_img_id = $product->get_image_id();
					if ( $product_img_id ) {
						$main_img = wp_get_attachment_url( $product_img_id );
					} else {
						$main_img = wc_placeholder_img_src( 'woocommerce_full' );
					}
					$product_img_ids = $product->get_gallery_image_ids();
				?>
				<div class="swiper-slide">
					<img data-fancybox="gallery" src="<?php echo $main_img; ?>" alt="<?php echo $product->get_title(); ?>">
				</div>
				<?php if ( $product_img_ids ): ?>
					<?php foreach ( $product_img_ids as $product_img_id ): ?>
						<div class="swiper-slide">
							<img data-fancybox="gallery" src="<?php echo wp_get_attachment_url( $product_img_id ); ?>" alt="<?php echo $product->get_title(); ?>">
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<?php if ( $product_img_ids ): ?>
				<button class="swiper-button-prev" type="button"></button>
				<button class="swiper-button-next" type="button"></button>
				<div class="swiper-pagination"></div>
			<?php endif; ?>
		</div>
	</div>

	<div class="product-content">
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

	<div class="product-aside summary entry-summary">
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

</div>

<?php woocommerce_output_related_products() ?>


<?php do_action( 'woocommerce_after_single_product' ); ?>
