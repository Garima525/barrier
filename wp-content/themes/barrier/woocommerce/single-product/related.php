<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>
<div class="container">
	<section class=" col-lg-12 m-auto pt-4 related products">
		<div class="row py-5">
		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>
		
		<?php woocommerce_product_loop_start(); ?>
		<div class="row">
			<?php foreach ( $related_products as $related_product ) : ?>

					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

					wc_get_template_part( 'content', 'product' );
					?>

			<?php endforeach; ?>
			</div>
		<?php woocommerce_product_loop_end(); ?>
		</div>
		
	</section>
	
</div>
<div class="row">
		<div class="container-fluid request-bg mt-5 p-0">
			<div class="row py-3">
			   <div class="d-flex justify-content-center">
			      <div class="pe-4 pt-1 text-sample">Request a Free Sample</div>
			      <button type="button" class="btn request-button">Request Now</button>
			   </div>
			</div>
		</div>
		</div>
		<section class="item-list mt-5 py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 m-auto">
				  <div class="row">

				  	<?php
					if( have_rows('shipping_tracker','option') ): 
					    while( have_rows('shipping_tracker','option') ) : the_row(); ?>

							<div class="col-lg-3 col-6">
								<div class="card h-100 py-3">
									<div class="card-body">
										<img src="<?php echo get_sub_field('logo', 'option'); ?>" class="img-fluid ">
										<h6 class="pt-4"><?php echo get_sub_field('text', 'option'); ?></h6>
									</div>
								</div>
							</div>
					    <?php
					    endwhile;
					else :
					endif;
					?>
				  </div>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;

wp_reset_postdata();
