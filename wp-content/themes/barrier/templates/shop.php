<?php
   /**
    * Template Name: Shop
    * Template Post Type: page
    *
    * @package WordPress
    * @subpackage aastha
    * @since 1.0
    */
   get_header(); ?>
<section class="product-cards">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 m-auto">
            <div class="row py-5">
               <?php
                  $product_terms = get_terms(
                    array(
                        'taxonomy'   => 'product_cat',
                        'hide_empty' => false,
                        'parent' => 0,
                        'exclude' => array( 23 ),
                    )
                  );
                  $i = 1;
                  foreach($product_terms as $term){
                  	$taxonomy_img = get_taxonomy_image( $term->term_taxonomy_id );
                   ?>
               <div class="col-lg-4 <?php if($i <= 3){?>pb-5<?php } ?>">
                  <div class="card h-100 py-3">
                     <div class="card-body">
                        <a href="<?php echo esc_url( get_term_link($term) ); ?>"><img src="<?=$taxonomy_img?>" class="img-fluid product-img"></a>
                        <a href="<?php echo esc_url( get_term_link($term) ); ?>">
                           <h6 class="d-flex justify-content-center  pt-4"><?=$term->name?></h6>
                        </a>
                     </div>
                  </div>
               </div>
               <?php
                  $i++;
                  }
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>