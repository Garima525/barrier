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
              <div class="pe-4 pt-1 pb-3 text-sample">To contact our team of barrier experts, please fill out below form.</div>
           </div>
        </div>
        <div class="d-flex justify-content-center">
            <?php echo do_shortcode('[contact-form-7 id="245" title="Contact Us"]'); ?>
        </div>
       
    </div>
</section>
<?php get_footer(); ?>
