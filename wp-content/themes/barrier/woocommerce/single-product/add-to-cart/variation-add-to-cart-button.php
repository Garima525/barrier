<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$ProductId = get_the_ID();

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
$_product = wc_get_product( $ProductId );



?>
<div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
	<div class="flexitem">
		<span class="productId">Quantity</span>
		<span>
			<?php
	do_action( 'woocommerce_before_add_to_cart_quantity' );

	woocommerce_quantity_input(
		array(
			'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
			'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
			'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
		)
	);

	do_action( 'woocommerce_after_add_to_cart_quantity' );
	?>
		</span>
	</div>
	<?php if(!empty($term->name)) { ?>
		<div id="fl-brand" class="flexitem ">
                        <span class="productId">Brand:</span>
						<?php foreach ($terms as $term) {?>
                        <span><?php echo $term->name ?></span>
						<?php } ?>
                     </div>
	<?php } ?>
	
	<div class="flexitem">
		<button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

		<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
		<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
		<input type="hidden" name="variation_id" class="variation_id" value="0" />
		<a class="buyitnow" href="<?php echo home_url('/cart/?add-to-cart='.$ProductId);?>">
			Buy Now
		</a>
	</div>

</div>
