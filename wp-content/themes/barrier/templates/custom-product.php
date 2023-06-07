<?php 
/**
 * Template Name: Custom Product
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage aastha
 * @since 1.0
 */
get_header(); 
$field_form = get_field('custom_form');
$processed_form = do_shortcode($field_form);
?>
<section class="product-cards">
    <div class="container">
        <div class="row py-3" style="text-align: center;">
           <div class="justify-content-center">
              	<h1 class="text-sample"><?php echo get_field('custom_heading'); ?></h1>
              	<p><?php echo get_field('custom_sub_heading'); ?></p>
           </div>
        </div>
        <div class="d-flex justify-content-center">
            <?php echo $processed_form; ?>
        </div>
       
    </div>
</section>
<?php get_footer(); ?>