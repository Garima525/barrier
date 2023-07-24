<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! $product_attributes ) {
	return;
}
?>
<table class="woocommerce-product-attributes shop_attributes">
    <?php
    // Get the last item key from the product attributes array
    $last_item_key = array_key_last($product_attributes);
    foreach ( $product_attributes as $product_attribute_key => $product_attribute ) :
    ?>
        <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--<?php echo esc_attr( $product_attribute_key ); ?>">
            <th class="woocommerce-product-attributes-item__label"><?php echo wp_kses_post( $product_attribute['label'] ); ?></th>
            <td class="woocommerce-product-attributes-item__value"><?php echo wp_kses_post( $product_attribute['value'] ); ?></td>
        </tr>
    <?php
    // Check if the current item is the last item
    $feature = the_field('feature');
    if($feature):
    if ($product_attribute_key === $last_item_key) :
    ?>
        <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--acf-feature">
            <th class="woocommerce-product-attributes-item__label">Feature</th>
            <td class="woocommerce-product-attributes-item__value"><?php the_field('feature'); ?></td>
        </tr>
    <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; ?>
</table>
