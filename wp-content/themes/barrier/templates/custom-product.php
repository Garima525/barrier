<?php 
/**
 * Template Name: Custom Product
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage aastha
 * @since 1.0
 */
get_header(); ?>
<section class="product-cards">
    <div class="container">
        <div class="row py-3" style="text-align: center;">
           <div class="justify-content-center">
              	<h1 class="text-sample">We can make any <span class="yellow">custom product</span></h1>
              	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
           </div>
        </div>
        <div class="d-flex justify-content-center">
            <?php echo do_shortcode('[contact-form-7 id="194" title="Contact us"]'); ?>
        </div>
       
    </div>
</section>
<?php get_footer(); ?>