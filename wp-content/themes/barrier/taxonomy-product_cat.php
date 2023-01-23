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
                        <!-- <h2 class="stroke-text m-0 p-0">Why</h2> -->
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
                                 <div class="p-2"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                 <span class="mx-4">Fl</span></div>
                               
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
                                 <div class="p-2"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                 <span class="mx-4">Fl</span></div>
                               
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
                                 <div class="p-2"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                 <span class="mx-4">Fl</span></div>
                               
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
                           <div class="accordion-body"><div class="d-flex justify-content-between p-0">
                              <div class="p-2"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <span class="mx-4">Fl</span></div>
                            
                              <div class="ml-auto p-2">(2)</div>
                            </div></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-9 mb-3">
                  <h3>Drum Liners on Rolls</h3>
                  <div class="accordion accordion-flush mb-2" id="accordionFlushExamplemain0">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                           <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapsemainOne0" aria-expanded="false"
                              aria-controls="flush-collapsemainOne0">
                                   <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="
                             display: inline-block;
                              ">Stock:</dt>
                                       <dd style="
                                display: inline-block;
                               margin-left: 5px;" class="stock-text"> DL23865</dd>
      
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
                               ">  300 / Roll</dd>
      
                                    </dl>
      
                                    <dl class="pe-2">
                                       <dt style="
                             display: inline-block;
                              ">Price:</dt>
      
                                       <dd style="
                                display: inline-block;
                               ">  As low as
                             $310.50</dd>
      
                                    </dl>
                                    
                                   </div>
                           </button>
                        </h2>
                        <div id="flush-collapsemainOne0" class="accordion-collapse collapse"
                           aria-labelledby="flush-headingOne0" data-bs-parent="#accordionFlushExamplemain0">
                           <div class="accordion-body">
                              <div class="container">
                                 <div class="col-md-12 row d-flex align-items-center">
                                    <div class="col-md-8">
                                      <div class="row col-md-12 d-flex align-items-center">
                                        <div class="col-md-4">
                                         <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-8">
                                           <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                             Stock #: DL23865</span>
                                             <div class="view-text py-4"><a href="">View Details</a></div>
                                        </div> 
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                       
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

                                       <div class="accordian-side-btn my-2">
                              <div class="d-flex">
                                 <button class="btn btn-primary px-3 border-0 product-button1" type="submit">1</button></dd>
                                 <button class="btn btn-primary   border-0 product-button ms-5" type="submit">Add to cart</button></dd>
                              </div>
                                 
         
                                       
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="accordion accordion-flush  mb-2" id="accordionFlushExamplemain1">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                           <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapsemainOne1" aria-expanded="false"
                              aria-controls="flush-collapsemainOne1">
                                   <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="
                             display: inline-block;
                              ">Stock:</dt>
                                       <dd style="
                                display: inline-block;
                               margin-left: 5px;" class="stock-text"> DL23865</dd>
      
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
                               ">  300 / Roll</dd>
      
                                    </dl>
      
                                    <dl class="pe-2">
                                       <dt style="
                             display: inline-block;
                              ">Price:</dt>
      
                                       <dd style="
                                display: inline-block;
                               ">  As low as
                             $310.50</dd>
      
                                    </dl>
                                    
                                   </div>
                           </button>
                        </h2>
                        <div id="flush-collapsemainOne1" class="accordion-collapse collapse"
                           aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExamplemain1">
                           <div class="accordion-body">
                              <div class="container">
                                 <div class="col-md-12 row d-flex align-items-center">
                                    <div class="col-md-8">
                                      <div class="row col-md-12 d-flex align-items-center">
                                        <div class="col-md-4">
                                         <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-8">
                                           <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                             Stock #: DL23865</span>
                                             <div class="view-text py-4"><a href="" class="view-text">View Details</a></div>
                                        </div> 
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                       
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
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="accordion accordion-flush  mb-2" id="accordionFlushExamplemain">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                           <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapsemainOne" aria-expanded="false"
                              aria-controls="flush-collapsemainOne">
                                   <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="
                             display: inline-block;
                              ">Stock:</dt>
                                       <dd style="
                                display: inline-block;
                               margin-left: 5px;" class="stock-text"> DL23865</dd>
      
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
                               ">  300 / Roll</dd>
      
                                    </dl>
      
                                    <dl class="pe-2">
                                       <dt style="
                             display: inline-block;
                              ">Price:</dt>
      
                                       <dd style="
                                display: inline-block;
                               ">  As low as
                             $310.50</dd>
      
                                    </dl>
                                    
                                   </div>
                           </button>
                        </h2>
                        <div id="flush-collapsemainOne" class="accordion-collapse collapse"
                           aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExamplemain">
                           <div class="accordion-body">
                              <div class="container">
                                 <div class="col-md-12 row d-flex align-items-center">
                                    <div class="col-md-8">
                                      <div class="row col-md-12 d-flex align-items-center">
                                        <div class="col-md-4">
                                         <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-8">
                                           <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                             Stock #: DL23865</span>
                                             <div class="view-text py-4"><a href="" class="view-text">View Details</a></div>
                                        </div> 
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                       
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
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                 <div class="wrapper-parition">
                  <h3 class="mt-4">Case Packed Drum Liners</h3>
                  <div class="accordion accordion-flush mb-2" id="accordionFlushExamplemainA0">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                           <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapsemainOneA0" aria-expanded="false"
                              aria-controls="flush-collapsemainOne0">
                                   <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="
                             display: inline-block;
                              ">Stock:</dt>
                                       <dd style="
                                display: inline-block;
                               margin-left: 5px;" class="stock-text"> DL23865</dd>
      
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
                               ">  300 / Roll</dd>
      
                                    </dl>
      
                                    <dl class="pe-2">
                                       <dt style="
                             display: inline-block;
                              ">Price:</dt>
      
                                       <dd style="
                                display: inline-block;
                               ">  As low as
                             $310.50</dd>
      
                                    </dl>
                                    
                                   </div>
                           </button>
                        </h2>
                        <div id="flush-collapsemainOneA0" class="accordion-collapse collapse"
                           aria-labelledby="flush-headingOneA0" data-bs-parent="#accordionFlushExamplemainA0">
                           <div class="accordion-body">
                              <div class="container">
                                 <div class="col-md-12 row d-flex align-items-center">
                                    <div class="col-md-8">
                                      <div class="row col-md-12 d-flex align-items-center">
                                        <div class="col-md-4">
                                         <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-8">
                                           <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                             Stock #: DL23865</span>
                                             <div class="view-text py-4"><a href="">View Details</a></div>
                                        </div> 
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                       
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
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="accordion accordion-flush  mb-2" id="accordionFlushExamplemainA1">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOneA1">
                           <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapsemainOneA1" aria-expanded="false"
                              aria-controls="flush-collapsemainOne1">
                                   <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="
                             display: inline-block;
                              ">Stock:</dt>
                                       <dd style="
                                display: inline-block;
                               margin-left: 5px;" class="stock-text"> DL23865</dd>
      
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
                               ">  300 / Roll</dd>
      
                                    </dl>
      
                                    <dl class="pe-2">
                                       <dt style="
                             display: inline-block;
                              ">Price:</dt>
      
                                       <dd style="
                                display: inline-block;
                               ">  As low as
                             $310.50</dd>
      
                                    </dl>
                                    
                                   </div>
                           </button>
                        </h2>
                        <div id="flush-collapsemainOneA1" class="accordion-collapse collapse"
                           aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExamplemainA1">
                           <div class="accordion-body">
                              <div class="container">
                                 <div class="col-md-12 row d-flex align-items-center">
                                    <div class="col-md-8">
                                      <div class="row col-md-12 d-flex align-items-center">
                                        <div class="col-md-4">
                                         <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-8">
                                           <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                             Stock #: DL23865</span>
                                             <div class="view-text py-4"><a href="" class="view-text">View Details</a></div>
                                        </div> 
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                       
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
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="accordion accordion-flush  mb-2" id="accordionFlushExamplemainA2">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                           <button class="accordion-button  collapsed p-2" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapsemainOneA2" aria-expanded="false"
                              aria-controls="flush-collapsemainOne">
                                   <div class="table-data pt-2">
                                    <dl class="pe-3">
                                       <dt style="
                             display: inline-block;
                              ">Stock:</dt>
                                       <dd style="
                                display: inline-block;
                               margin-left: 5px;" class="stock-text"> DL23865</dd>
      
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
                               ">  300 / Roll</dd>
      
                                    </dl>
      
                                    <dl class="pe-2">
                                       <dt style="
                             display: inline-block;
                              ">Price:</dt>
      
                                       <dd style="
                                display: inline-block;
                               ">  As low as
                             $310.50</dd>
      
                                    </dl>
                                    
                                   </div>
                           </button>
                        </h2>
                        <div id="flush-collapsemainOneA2" class="accordion-collapse collapse"
                           aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExamplemainA2">
                           <div class="accordion-body">
                              <div class="container">
                                 <div class="col-md-12 row d-flex align-items-center">
                                    <div class="col-md-8">
                                      <div class="row col-md-12 d-flex align-items-center">
                                        <div class="col-md-4">
                                         <img src="./assets/img/round-bottom-drum-liner-500x500 1 (1).png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-8">
                                           <span>55 Gallon 38" x 65" 2 Mil Drum Liners
                                             Stock #: DL23865</span>
                                             <div class="view-text py-4"><a href="" class="view-text">View Details</a></div>
                                        </div> 
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                       
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


         </div>
      </section>



      <section class="item-list py-3">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 m-auto">
                  <div class="row">
                     <div class="col-lg-3 col-6">
                        <div class="card h-100 py-3">
                           <div class="card-body">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item-one.png" class="img-fluid ">
                              <h6 class="pt-4">Fast Same-Day Shipping</h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3  col-6">
                        <div class="card h-100 py-3">
                           <div class="card-body">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item-two.png" class="img-fluid item-img">
                              <h6 class="pt-4">Lowest Price Guarantee</h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3  col-6">
                        <div class="card h-100 py-3">
                           <div class="card-body">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item-three.png" class="img-fluid item-img">
                              <h6 class="pt-4">100% Customer Satisfaction</h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3  col-6">
                        <div class="card h-100 py-3">
                           <div class="card-body">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item-four.png" class="img-fluid  item-img ">
                              <h6 class="pt-4">30-Day Returns & Exchanges</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>

      </section>


<?php
get_footer();

?>
