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
                        <?php the_field('category_title'); ?>
                        <p class="product-text"><?php echo $taxonomy->description; ?></p>
                        <h3 class="m-0"><?php the_field('category_title_copy'); ?></h3>
                        <?php the_field('features'); ?>
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
                     <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item mb-2">
                           <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#flush-collapseOne" aria-expanded="false"
                                 aria-controls="flush-collapseOne">
                                 Thickness
                              </button>
                           </h2>
                           <div id="flush-collapseOne" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                 <div class="d-flex justify-content-between p-0">
                                    <div class="p-2"><input class="form-check-input" type="checkbox" value=""
                                          id="flexCheckDefault">
                                       <span class="mx-4">Fl</span>
                                    </div>
                                    <div class="ml-auto p-2">(2)</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item mb-2">
                           <h2 class="accordion-header" id="flush-headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                 aria-controls="flush-collapseTwo">
                                 Width
                              </button>
                           </h2>
                           <div id="flush-collapseTwo" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                 <div class="d-flex justify-content-between p-0">
                                    <div class="p-2"><input class="form-check-input" type="checkbox" value=""
                                          id="flexCheckDefault">
                                       <span class="mx-4">Fl</span>
                                    </div>

                                    <div class="ml-auto p-2">(2)</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item mb-2">
                           <h2 class="accordion-header" id="flush-headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#flush-collapseThree" aria-expanded="false"
                                 aria-controls="flush-collapseThree">
                                 Length
                              </button>
                           </h2>
                           <div id="flush-collapseThree" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                 <div class="d-flex justify-content-between p-0">
                                    <div class="p-2"><input class="form-check-input" type="checkbox" value=""
                                          id="flexCheckDefault">
                                       <span class="mx-4">Fl</span>
                                    </div>

                                    <div class="ml-auto p-2">(2)</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item mb-2">
                           <h2 class="accordion-header" id="flush-headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#flush-collapseFour" aria-expanded="false"
                                 aria-controls="flush-collapseThree">
                                 Color
                              </button>
                           </h2>
                           <div id="flush-collapseFour" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                 <div class="d-flex justify-content-between p-0">
                                    <div class="p-2"><input class="form-check-input" type="checkbox" value=""
                                          id="flexCheckDefault">
                                       <span class="mx-4">Fl</span>
                                    </div>

                                    <div class="ml-auto p-2">(2)</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-9 mb-3">
                  <?php
                  $product_child_terms =  get_terms(
                                        array(
                                            'taxonomy'   => $taxonomy->taxonomy,
                                            'parent' => $taxonomy->term_id,
                                            'hide_empty' => true,
                                        )
                                    );

                  foreach ($product_child_terms as $key => $value) { 
                     echo "<h3>".$value->name."</h3>";

                     $args = array(
                              'post_status' => 'publish',
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
                        $i = 1;
                        while($products->have_posts()) : $products->the_post(); 
                           $price = get_post_meta( get_the_ID(), '_price', true );
                           $length = get_post_meta( get_the_ID(), '_length', true );
                           $width = get_post_meta( get_the_ID(), '_width', true );
                           $height = get_post_meta( get_the_ID(), '_height', true );
                           $sku = get_post_meta( get_the_ID(), '_sku', true );
                           ?>

                           <div class="wrapper">
                              <div class="accordion" id="accordionExample">
                                 <div class="accordion-item mb-2 border-0">
                                    <h2 class="accordion-header d-none d-sm-block" id="heading<?=$i?>">
                                       <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">
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
                                    <div id="collapse<?=$i?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$i?>"
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
                                                         <?php
                                                         do_action('woocommerce_simple_add_to_cart');

                                                         ?>
                                                         <!-- <button class="btn btn-primary px-3 border-0 product-button1"
                                                            type="submit">1</button>
                                                         <button class="btn btn-primary   px-4 border-0 product-button ms-5"
                                                            type="submit">Add to cart</button> -->
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
                        $i++;
                        endwhile;
                     endif;
                  }
                  ?>
                  <!-- <h3>Drum Liners on Rolls</h3>

                  <div class="wrapper">
                     <div class="accordion" id="accordionExample">
                        <div class="accordion-item mb-2 border-0">
                           <h2 class="accordion-header d-none d-sm-block" id="headingOne">
                              <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Stock:</dt>
                                       <dd style="display: inline-block;margin-left: 2px;" class="stock-text"> DL23865</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">#WxL: </dt>
                                       <dd style="display: inline-block;"> 38" x 65"</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Thickness:</dt>
                                       <dd style="display: inline-block;"> 2 Mil</dd>
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
                                       <dd style="display: inline-block;"> As low as $310.50</dd>
                                    </dl>
                                 </div>
                              </button>
                           </h2>
                           <h2 class="accordion-header d-block d-sm-none" id="headingOne">
                              <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <div class="table-data pt-2">
                                    <dl class="pe-3 ">
                                       <dt style="display: inline-block;">Stock:</dt>
                                       <dd style="display: inline-block;margin-left: 2px;" class="text-dark me-5"> DL23865</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Price:</dt>
                                       <dd style="display: inline-block;"> As low as $310.50</dd>
                                    </dl>
                                 </div>
                              </button>
                           </h2>
                           <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="container">
                                    <div class="col-md-12 col-12 row d-flex align-items-center">
                                       <div class="col-md-8 col-12">
                                          <div class="row col-md-12 col-12 d-flex align-items-center">
                                             <div class="col-md-4 col-5">
                                                <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png"
                                                   class="img-fluid" alt="">
                                             </div>
                                             <div class="col-md-8 col-7">
                                                <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                                   Stock #: DL23865</span>
                                                <div class="view-text py-4"><a href="">View Details</a></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="d-none d-sm-block">
                                             <dl class="pe-3">
                                                <dt style="display: inline-block;">Price </dt>
                                                <dd style="display: inline-block;margin-left: 37px;"> 38" x 65"</dd>
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
                                                <button class="btn btn-primary px-3 border-0 product-button1"
                                                   type="submit">1</button></dd>
                                                <button class="btn btn-primary   px-4 border-0 product-button ms-5"
                                                   type="submit">Add to cart</button></dd>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item mb-2 border-0">
                           <h2 class="accordion-header d-none d-sm-block" id="headingTwo">
                              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Stock:</dt>
                                       <dd style="display: inline-block;margin-left: 2px;" class="stock-text"> DL23865</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">#WxL: </dt>
                                       <dd style="display: inline-block;"> 38" x 65"</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Thickness:</dt>
                                       <dd style="display: inline-block;"> 2 Mil</dd>
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
                                       <dd style="display: inline-block;"> As low as $310.50</dd>
                                    </dl>
                                 </div>
                              </button>
                           </h2>
                           <h2 class="accordion-header d-block d-sm-none" id="headingTwo">
                              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <div class="table-data pt-2">
                                    <dl class="pe-3 ">
                                       <dt style="display: inline-block;">Stock:</dt>
                                       <dd style="display: inline-block;margin-left: 2px;" class="text-dark me-5"> DL23865</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Price:</dt>
                                       <dd style="display: inline-block;"> As low as$310.50</dd>
                                    </dl>
                                 </div>
                              </button>
                           </h2>
                           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="container">
                                    <div class="col-md-12 col-12 row d-flex align-items-center">
                                       <div class="col-md-8 col-12">
                                          <div class="row col-md-12 col-12 d-flex align-items-center">
                                             <div class="col-md-4 col-5">
                                                <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png"
                                                   class="img-fluid" alt="">
                                             </div>
                                             <div class="col-md-8 col-7">
                                                <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                                   Stock #: DL23865</span>
                                                <div class="view-text py-4"><a href="">View Details</a></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="d-none d-sm-block">
                                             <dl class="pe-3">
                                                <dt style="display: inline-block;">Price </dt>
                                                <dd style="display: inline-block;margin-left: 37px;"> 38" x 65"</dd>
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
                                                <button class="btn btn-primary px-3 border-0 product-button1"
                                                   type="submit">1</button></dd>
                                                <button class="btn btn-primary  px-4  border-0 product-button ms-5"
                                                   type="submit">Add to cart</button></dd>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item mb-2 border-0">
                           <h2 class="accordion-header d-none d-sm-block" id="headingThree">
                              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="
                          display: inline-block;
                           ">Stock:</dt>
                                       <dd style="
                             display: inline-block;
                            margin-left: 2px;" class="stock-text"> DL23865</dd>

                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="
                          display: inline-block;
                           ">#WxL: </dt>
                                       <dd style="
                             display: inline-block;
                            "> 38" x 65"</dd>

                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="
                          display: inline-block;
                           ">Thickness:</dt>
                                       <dd style="
                             display: inline-block;
                            "> 2 Mil</dd>

                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="
                          display: inline-block;
                           ">Color:</dt>
                                       <dd style="
                             display: inline-block;
                            "> Clear</dd>

                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="
                          display: inline-block;
                           ">Qty/Roll:</dt>
                                       <dd style="
                             display: inline-block;
                            "> 300 / Roll</dd>

                                    </dl>

                                    <dl class="pe-3">
                                       <dt style="
                          display: inline-block;
                           ">Price:</dt>

                                       <dd style="
                             display: inline-block;
                            "> As low as
                                          $310.50</dd>

                                    </dl>

                                 </div>
                              </button>
                           </h2>
                           <h2 class="accordion-header d-block d-sm-none" id="headingThree">
                              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <div class="table-data pt-2">
                                    <dl class="pe-3 ">
                                       <dt style="
                          display: inline-block;
                           ">Stock:</dt>
                                       <dd style="
                             display: inline-block;
                            margin-left: 2px;" class="text-dark me-5"> DL23865</dd>

                                    </dl>

                                    <dl class="pe-3">
                                       <dt style="
                          display: inline-block;
                           ">Price:</dt>

                                       <dd style="
                             display: inline-block;
                            "> As low as
                                          $310.50</dd>

                                    </dl>
                                 </div>
                              </button>
                           </h2>
                           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="container">
                                    <div class="col-md-12 col-12 row d-flex align-items-center">
                                       <div class="col-md-8 ">
                                          <div class="row col-md-12 col-12 d-flex align-items-center">
                                             <div class="col-md-4 col-5">
                                                <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png"
                                                   class="img-fluid" alt="">
                                             </div>
                                             <div class="col-md-8 col-7">
                                                <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                                   Stock #: DL23865</span>
                                                <div class="view-text py-4"><a href="">View Details</a></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="d-none d-sm-block">
                                             <dl class="pe-3">
                                                <dt style="
                                display: inline-block;
                                 ">Price </dt>
                                                <dd style="
                                   display: inline-block;
                                   margin-left: 37px;
                                  "> 38" x 65"</dd>

                                             </dl>
                                             <dl class="pe-3">
                                                <dt style="
                                display: inline-block;
                                 ">Buy 1:</dt>
                                                <dd style="
                                   display: inline-block;
                                   margin-left: 37px;
                                  "> 2 Mil</dd>

                                             </dl>
                                             <dl class="pe-3">
                                                <dt style="
                                display: inline-block;
                                 ">Buy 1:</dt>
                                                <dd style="
                                   display: inline-block;
                                   margin-left: 37px;
                                  "> 2 Mil</dd>

                                             </dl>
                                             <dl class="pe-3">
                                                <dt style="
                                display: inline-block;
                                 ">Buy 1:</dt>
                                                <dd style="
                                   display: inline-block;
                                   margin-left: 37px;
                                  "> 2 Mil</dd>

                                             </dl>
                                          </div>
                                          <div class="accordian-side-btn my-2">
                                             <div class="d-flex">
                                                <button class="btn btn-primary px-3 border-0 product-button1"
                                                   type="submit">1</button></dd>
                                                <button class="btn btn-primary   px-4  border-0 product-button ms-5"
                                                   type="submit">Add to cart</button></dd>
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
                  <div class="wrapper-paritions">
                     <h3 class="mt-4">Case Packed Drum Liners</h3>
                     <div class="accordion" id="accordionExample2">
                        <div class="accordion-item border-0 mb-2">
                           <h2 class="accordion-header d-none d-sm-block" id="casepacked1">
                              <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#casepacked-accordion2" aria-expanded="true"
                                 aria-controls="casepacked-accordion2">
                                 <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Stock:</dt>
                                       <dd style="display: inline-block;margin-left: 2px;" class="stock-text"> DL23865</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">#WxL: </dt>
                                       <dd style="display: inline-block;"> 38" x 65"</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Thickness:</dt>
                                       <dd style="display: inline-block;"> 2 Mil</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Color:</dt>
                                       <dd style="display: inline-block;"> Clear</dd>
                                    </dl>
                                    <dl class="pe-3"><dt style="display: inline-block;">Qty/Roll:</dt>
                                       <dd style="display: inline-block;"> 300 / Roll</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Price:</dt>
                                       <dd style="display: inline-block;"> As low as$310.50</dd>
                                    </dl>

                                 </div>
                              </button>
                           </h2>
                           <h2 class="accordion-header d-block d-sm-none" id="casepacked1">
                              <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#casepacked-accordion2" aria-expanded="true"
                                 aria-controls="casepacked-accordion2">
                                 <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Stock:</dt>
                                       <dd style="display: inline-block;margin-left: 2px;" class="text-dark me-5"> DL23865</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Price:</dt>
                                       <dd style="display: inline-block;"> As low as $310.50</dd>
                                    </dl>
                                 </div>
                              </button>
                           </h2>
                           <div id="casepacked-accordion2" class="accordion-collapse collapse"
                              aria-labelledby="casepacked1" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                                 <div class="container">
                                    <div class="col-md-12 col-12 row d-flex align-items-center">
                                       <div class="col-md-8 col-12">
                                          <div class="row col-md-12 col-12 d-flex align-items-center">
                                             <div class="col-md-4  col-5">
                                                <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png"
                                                   class="img-fluid" alt="">
                                             </div>
                                             <div class="col-md-8 col-7 ">
                                                <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                                   Stock #: DL23865</span>
                                                <div class="view-text py-4"><a href="">View Details</a></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="d-none d-sm-block">
                                             <dl class="pe-3">
                                                <dt style="display: inline-block;">Price </dt>
                                                <dd style="display: inline-block;margin-left: 37px;"> 38" x 65"</dd>
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
                                                <button class="btn btn-primary px-3 border-0 product-button1"
                                                   type="submit">1</button>
                                                <button class="btn btn-primary px-4 border-0 product-button ms-5" type="submit">Add to cart</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item border-0 mb-2">
                           <h2 class="accordion-header  d-none d-sm-block" id="casepacke2">
                              <button class="accordion-button p-2 collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#case-packedaccordion3" aria-expanded="false"
                                 aria-controls="case-packedaccordion3">
                                 <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Stock:</dt>
                                       <dd style="display: inline-block;margin-left: 2px;" class="stock-text"> DL23865</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">#WxL: </dt>
                                       <dd style="display: inline-block;"> 38" x 65"</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Thickness:</dt>
                                       <dd style="display: inline-block;"> 2 Mil</dd>
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
                                       <dd style="display: inline-block;"> As low as $310.50</dd>
                                    </dl>
                                 </div>
                              </button>
                           </h2>
                           <h2 class="accordion-header d-block d-sm-none" id="casepacke2">
                              <button class="accordion-button p-2 collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#case-packedaccordion3" aria-expanded="false"
                                 aria-controls="case-packedaccordion3">
                                 <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Stock:</dt>
                                       <dd style="display: inline-block;margin-left: 2px;" class="text-dark me-5"> DL23865</dd>
                                    </dl>
                                    <dl class="pe-3">
                                       <dt style="display: inline-block;">Price:</dt>
                                       <dd style="display: inline-block;"> As low as $310.50</dd>
                                    </dl>
                                 </div>
                              </button>
                           </h2>
                           <div id="case-packedaccordion3" class="accordion-collapse collapse"
                              aria-labelledby="casepacke2" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                                 <div class="container">
                                    <div class="col-md-12 col-12 row d-flex align-items-center">
                                       <div class="col-md-8 col-12">
                                          <div class="row col-md-12 col-12 d-flex align-items-center">
                                             <div class="col-md-4  col-5">
                                                <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png"
                                                   class="img-fluid" alt="">
                                             </div>
                                             <div class="col-md-8 col-7 ">
                                                <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                                   Stock #: DL23865</span>
                                                <div class="view-text py-4"><a href="">View Details</a></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="d-none d-sm-block">
                                             <dl class="pe-3">
                                                <dt style="display: inline-block;">Price </dt>
                                                <dd style="display: inline-block;margin-left: 37px;"> 38" x 65"</dd>
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
                                                <button class="btn btn-primary px-3 border-0 product-button1"
                                                   type="submit">1</button>
                                                <button class="btn btn-primary   px-4 border-0 product-button ms-5" type="submit">Add to cart</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
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
