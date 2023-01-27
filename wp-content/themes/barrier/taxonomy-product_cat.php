<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Barrier Custom Theme
 * @since Barrier Custom Theme 1.0
 */
get_header();

$taxonomy = get_queried_object();
$taxonomy_img = get_taxonomy_image( $taxonomy->term_taxonomy_id );
 ?>
    <section class="stroke-section product-cards">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="text-a">
                        Drum Liners / 55 Gallon Drum Liners
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid mt-4">
            <div class="row p-0 offset-md-1">
               <div class="col-md-4  d-flex align-items-center">
                  <img src="<?php echo $taxonomy_img ?>" class="img-fluid" alt="">
               </div>
               <div class="col-md-8 ps-4  d-flex align-items-center">
                  <div class="row">
                     <div class="col-md-10">
                        <?php the_field('category_title',$taxonomy); ?>
                        <p class="product-text"><?php echo $taxonomy->description; ?></p>
                        <h3 class="m-0"><?php the_field('category_title_copy',$taxonomy); ?></h3>
                        <?php the_field('features',$taxonomy); ?>
                        <div class="mt-4"> <button type="button" class="product-button px-5 btn btn-outline-primary">See
                              all Drum Liners</button></div>
                     </div>
                     <div class="col-md-4">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="wrapper  mt-5">
         <div class="container">

            <div class="col-md-12 row">
               <div class="col-md-3 mb-3">
                  <h3>Apply by Filters</h3>
                  <div class="filter">

                     <?php echo do_shortcode('[fe_widget id="150" show_selected="no" show_count="yes"]'); ?>
                  </div>
               </div>
               <div class="col-md-9 mb-3 ajax_posts">
                  <?php
                     $unique_terms = [];
                     $idArr = [];
                     $i = 0;
                     if(have_posts()){
                        while( have_posts()){
                           the_post();
                           if ( empty( $product ) || ! $product->is_visible() ) {
                              return;
                           }
                           $terms = get_the_terms(get_the_ID(), 'product_cat');
                           foreach ( $terms as $key => $val ){
                              if($val->parent > 0){
                                 $idArr[$i] = get_the_id();
                                 $unique_terms[$i] = $val;
                                 // echo '<div class="parent '.$val->slug.'">' . $val->name . '</div>';
                              }
                           }
                           // wc_get_template_part( 'content', 'product' );
                           $i++;
                        }
                     }
                     // echo '<pre>'; print_r($idArr);
                     // echo '<pre>'; print_r($unique_terms);

                     $duplicate_keys = array();
                     $tmp = array();       

                     foreach ($unique_terms as $key => $val){
                        if (is_object($val))
                           $val = (array)$val;

                        if (!in_array($val, $tmp))
                           $tmp[] = $val;
                        else
                           $duplicate_keys[] = $key;
                     }

                     foreach ($duplicate_keys as $key)
                        unset($unique_terms[$key]);


                     foreach($unique_terms as $key => $value){
                        echo "<h3>".$value->name."</h3>";

                        $args = array(
                                 'post_status' => 'publish',
                                 'post__in' => $idArr,
                                 'tax_query' => array(
                                    array(
                                       'taxonomy' => 'product_cat',
                                       'field'    => 'term_id',
                                       'terms'     =>  $value->term_id, // When you have more term_id's seperate them by komma.
                                       'operator'  => 'IN'
                                    )
                                 )
                              );
                        $products = new wp_query($args);

                        if($products->have_posts()) :
                           $newloopcount = 1;
                           while($products->have_posts()) : $products->the_post(); 
                              $loopcount = $newloopcount.generateRandomString();
                              $price = get_post_meta( get_the_ID(), '_price', true );
                              $length = get_post_meta( get_the_ID(), '_length', true );
                              $width = get_post_meta( get_the_ID(), '_width', true );
                              $height = get_post_meta( get_the_ID(), '_height', true );
                              $sku = get_post_meta( get_the_ID(), '_sku', true );
                              ?>

                              <div class="wrapper">
                                 <div class="accordion" id="accordionExample">
                                    <div class="accordion-item mb-2 border-0">
                                       <h2 class="accordion-header d-none d-sm-block" id="heading<?=$loopcount?>">
                                          <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                                             data-bs-target="#collapse<?=$loopcount?>" aria-expanded="true" aria-controls="collapse<?=$loopcount?>">
                                             <div class="table-data pt-2">
                                                <dl class="pe-3">
                                                   <dt style="display: inline-block;">Stock:</dt>
                                                   <dd style="display: inline-block;margin-left: 2px;" class="stock-text"> <?=$sku?></dd>
                                                </dl>
                                                <dl class="pe-3">
                                                   <dt style="display: inline-block;">#WxL: </dt>
                                                   <dd style="display: inline-block;"> <?=$width?>" x <?=$length?>"</dd>
                                                </dl>
                                                <dl class="pe-3">
                                                   <dt style="display: inline-block;">Thickness:</dt>
                                                   <dd style="display: inline-block;"> <?=$height?> Mil</dd>
                                                </dl>
                                                <dl class="pe-3">
                                                   <dt style="display: inline-block;">Color:</dt>
                                                   <dd style="display: inline-block;"> Clear</dd>
                                                </dl>
                                                <dl class="pe-3">
                                                   <dt style="display: inline-block;">Qty/Roll:</dt>
                                                   <dd style="display: inline-block;"> 300 / Roll</dd>
                                                </dl>
                                                <dl class="pe-3">
                                                   <dt style="display: inline-block;">Price:</dt>
                                                   <dd style="display: inline-block;"> As low as $<?=$price?></dd>
                                                </dl>
                                             </div>
                                          </button>
                                       </h2>
                                       <div id="collapse<?=$loopcount?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$loopcount?>"
                                          data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                             <div class="container">
                                                <div class="col-md-12 col-12 row d-flex align-items-center">
                                                   <div class="col-md-8 col-12">
                                                      <div class="row col-md-12 col-12 d-flex align-items-center">
                                                         <div class="col-md-4 col-5">
                                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                                                         </div>
                                                         <div class="col-md-8 col-7">
                                                            <span><?php the_title(); ?>
                                                               Stock #: <?=$sku?></span>
                                                            <div class="view-text py-4"><a href="<?php echo get_permalink(); ?>">View Details</a></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="d-none d-sm-block">
                                                         <dl class="pe-3">
                                                            <dt style="display: inline-block;">Price </dt>
                                                            <dd style="display: inline-block;margin-left: 37px;"> <?=$price?></dd>
                                                         </dl>
                                                         <dl class="pe-3">
                                                            <dt style="display: inline-block;">Buy 1:</dt>
                                                            <dd style="display: inline-block;margin-left: 37px;"> 2 Mil</dd>
                                                         </dl>
                                                         <dl class="pe-3">
                                                            <dt style="display: inline-block;">Buy 1:</dt>
                                                            <dd style="display: inline-block;margin-left: 37px;"> 2 Mil</dd>
                                                         </dl>
                                                         <dl class="pe-3">
                                                            <dt style="display: inline-block;">Buy 1:</dt>
                                                            <dd style="display: inline-block;margin-left: 37px;"> 2 Mil</dd>
                                                         </dl>
                                                      </div>
                                                      <div class="accordian-side-btn my-2">
                                                         <div class="d-flex">
                                                            <a href="<?php echo $product->add_to_cart_url() ?>" value="<?php echo esc_attr($product->get_id()); ?>" class="btn btn-primary px-4 border-0 product-button ms-5 ajax_add_to_cart add_to_cart_button" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="<?php echo esc_attr($sku) ?>" aria-label="Add “<?php the_title_attribute() ?>” to your cart">Add to cart</i></a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           <?php
                           $newloopcount++;
                           endwhile;
                        endif;
                     }
                     ?>
               </div>
            </div>
         </div>
      </section>
      <section class="item-list py-3">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 m-auto">
                 <div class="row">

                  <?php
                  if( have_rows('shipping_tracker','option') ): 
                      while( have_rows('shipping_tracker','option') ) : the_row(); ?>

                        <div class="col-lg-3 col-6">
                           <div class="card h-100 py-3">
                              <div class="card-body">
                                 <img src="<?php echo get_sub_field('logo', 'option'); ?>" class="img-fluid ">
                                 <h6 class="pt-4"><?php echo get_sub_field('text', 'option'); ?></h6>
                              </div>
                           </div>
                        </div>
                      <?php
                      endwhile;
                  else :
                  endif;
                  ?>
                 </div>
               </div>
            </div>
         </div>
      </section>
<?php
get_footer();

?>
