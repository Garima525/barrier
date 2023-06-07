<?php 
/**
 * Template Name: Contact Us
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage aastha
 * @since 1.0
 */
get_header(); ?>

<section class="product-cards">
    <div class="container">
        <div class="row py-3">
           <div class="d-flex justify-content-center">
              <div class="pe-4 pt-1 pb-3 text-sample"><?php get_field('contact_heading'); ?></div>
           </div>
        </div>
        <div class="d-flex justify-content-center">
            <?php echo do_shortcode('<?php get_field('contact_form'); ?>'); ?>
        </div>
       
    </div>
</section>
<?php get_footer(); ?>
