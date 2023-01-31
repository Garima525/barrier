<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;
$ProductId = get_the_ID();

if ( ! $product->is_purchasable() ) {
	return;
}
do_action( 'woocommerce_before_single_product' );
$terms = get_the_terms($ProductId, 'brand');
foreach ($terms as $term) {
	$term_link = get_term_link($term, 'brand');
	$termName = $term->name;
	if (is_wp_error($term_link))
		continue;
	'<a href="' . $term_link . '">' . $term->name . '</a>';
	// $term->name;
}
echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
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
	<span><?php echo $term->name;  ?></span>
	<?php
} ?>
                     </div>
	<?php } ?>
	<div class="flexitem">
		<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
		<a class="buyitnow" href="<?php echo home_url('/cart/?add-to-cart='.$ProductId);?>">
			Buy Now
		</a>
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</div>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
