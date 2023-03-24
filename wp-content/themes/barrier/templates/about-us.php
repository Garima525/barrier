<?php 
/**
 * Template Name: About Us
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage aastha
 * @since 1.0
 */
get_header(); ?>

<section class="product-cards">
   <div class="container">
      <div class="row pb-5">
         <div class="col-md-4 order-1">
            <div class="about-product">
               <img src="<?php the_field('about_header_image'); ?>" class="img-fluid" alt="">
            </div>
         </div>
         <div class="col-md-4 order-1 col-md-8 mt-5 order-2 order-md-1">
            <h4><?php the_field('about_header_title'); ?></h4>
            <?php the_field('about_header_description'); ?>
         </div>
      </div>
      <div class="row py-3 mb-3">
         <div class="d-flex justify-content-center">
            <div class="pe-4 pt-1 text-sample"><?php the_field('we_offer_heading'); ?></div>
         </div>
      </div>
      <div class="row pb-5">
         <div class="col-lg-12 m-auto">
            <div class="row">
               <?php
                  if (have_rows('we_offer_first_row')): ?>
               <?php
                  while (have_rows('we_offer_first_row')):
                      the_row(); ?>
               <div class="col-lg-4 col-6">
                  <div class="card we-offers h-100 py-3">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-4">
                              <img src="<?php echo get_sub_field('icon'); ?>" class="img-fluid ">
                           </div>
                           <div class="col-md-8">
                              <div class="offers-headding"><?php echo get_sub_field('title'); ?></div>
                              <p class="offers-text"><?php echo get_sub_field('sub_title'); ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  endwhile;
                  ?>
               <?php
                  else:
                  endif;
                  ?>
            </div>
            <div class="row pt-5 justify-content-center">
               <?php
                  if (have_rows('we_offer_second_row')): ?>
               <?php
                  while (have_rows('we_offer_second_row')):
                      the_row(); ?>
               <div class="col-lg-6 col-6">
                  <div class="card we-offers h-100 py-3">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-4">
                              <img src="<?php echo get_sub_field('icon'); ?>" class="img-fluid ">
                           </div>
                           <div class="col-md-8">
                              <h6 class="offers-headding"><?php echo get_sub_field('title'); ?></h6>
                              <p class="offers-text"><?php echo get_sub_field('sub_title'); ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  endwhile;
                  ?>
               <?php
                  else:
                  endif;
                  ?>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>