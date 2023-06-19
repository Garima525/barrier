<?php 
/**
 * Template Name: Ticket support
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage aastha
 * @since 1.0
 */
get_header(); 
$field_value = get_field('contact_form');
$processed_value = do_shortcode($field_value);
?>
<section class="product-cards">
    <div class="container">
        <div class="row py-3">
           <div class="d-flex justify-content-center">
              <div class="pe-4 pt-1 pb-3 text-sample"><?php echo get_field('contact_heading'); ?></div>
           </div>
        </div>
        <div class="d-flex justify-content-center">
            <?php echo $processed_value; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
