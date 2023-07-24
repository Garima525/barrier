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

$taxonomy_img = get_taxonomy_image($taxonomy->term_taxonomy_id);
$taxonomy_title = $taxonomy->name;
if ($taxonomy_title != "BAGS") { ?>
<section class="stroke-section product-cards">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="text-a">
               <!-- Drum Liners / 55 Gallon Drum Liners -->
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid mt-4">
      <div class="row p-0 offset-md-1">
         <div class="col-md-4  d-flex justify-content-center">
            <img src="<?php echo $taxonomy_img; ?>" class="img-fluid" alt="">
         </div>
         <div class="col-md-8 ps-4  d-flex align-items-center">
            <div class="row">
               <div class="col-md-10">
                  <?php the_field("category_title", $taxonomy); ?>
                  <p class="product-text"><?php echo $taxonomy->description; ?></p>
                  <h3 class="m-0"><?php the_field(
                      "category_title_copy",
                      $taxonomy
                  ); ?></h3>
                  <?php the_field("features", $taxonomy); ?>
                  <div class="mt-4"><a href="#all-products" class="product-button px-5 btn btn-outline-primary"><?php the_field(
                      "see_all_drums_button",
                      $taxonomy
                  ); ?></a></div>
               </div>
               <div class="col-md-4">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="wrapper  mt-5" id="all-products">
   <div class="container" style="max-width:100%; padding: 0 40px;">
      <div class="col-md-12 row">
         <div class="col-md-3 mb-3">
            <h3>Apply by Filters</h3>
            <div class="filter">
               <?php echo do_shortcode(
                   '[fe_widget id="150" show_selected="no" show_count="yes"]'
               ); ?>
            </div>
         </div>
         <div class="col-md-9 mb-3 ajax_posts">
            <?php
            $unique_terms = [];
            $idArr = [];
            $i = 0;
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    if (empty($product) || !$product->is_visible()) {
                        return;
                    }
                    $terms = get_the_terms(get_the_ID(), "product_cat");
                    foreach ($terms as $key => $val) {
                        if ($val->parent > 0) {
                            $idArr[$i] = get_the_id();
                            $unique_terms[$i] = $val;
                            // echo '<div class="parent '.$val->slug.'">' . $val->name . '</div>';
                        }
                    }
                    // wc_get_template_part( 'content', 'product' );
                    $i++;
                }
            }
            $duplicate_keys = [];
            $tmp = [];

            foreach ($unique_terms as $key => $val) {
                if (is_object($val)) {
                    $val = (array) $val;
                }

                if (!in_array($val, $tmp)) {
                    $tmp[] = $val;
                } else {
                    $duplicate_keys[] = $key;
                }
            }

            foreach ($duplicate_keys as $key) {
                unset($unique_terms[$key]);
            }

            foreach ($unique_terms as $key => $value) {
                echo "<h3>" . $value->name . "</h3> <div>";

                $args = [
                    "post_type" => "product",
                    "post_status" => "publish",
                    "tax_query" => [
                        [
                            "taxonomy" => "product_cat",
                            "field" => "term_id",
                            "terms" => $value->term_id, // When you have more term_id's seperate them by komma.
                            "operator" => "IN",
                        ],
                    ],
                    "orderby" => "menu_order",
                    "order" => "ASC",

                ];
                $products = new wp_query($args);

                if ($products->have_posts()):

                    $newloopcount = 1;
                    $sale_price = get_post_meta(
                        get_the_ID(),
                        "_sale_price",
                        true
                    );
                    $regular_price = get_post_meta(
                        get_the_ID(),
                        "_regular_price",
                        true
                    );
                    $length = get_post_meta(get_the_ID(), "_length", true);
                    $width = get_post_meta(get_the_ID(), "_width", true);
                    $height = get_post_meta(get_the_ID(), "_height", true);
                    $sku = get_post_meta(get_the_ID(), "_sku", true);
                    $qty = get_post_meta($post->ID, "_stock", true);
                    $color = $product->get_attribute("pa_color");
                    $thickness = $product->get_attribute("pa_thickness");
                    $pallet_fit_width = get_field("pallet_fit_width");
                    $pallet_fit_length = get_field("pallet_fit_length");
                    $pallet_fit_height = get_field("pallet_fit_height");
                    $feature = get_field("feature");
                    $capacity = get_field("capacity");
                    $finish = $product->get_attribute("pa_finish");
                    $material = $product->get_attribute("pa_material");
                    ?>
            <table class='demotable'>
               <thead>
                  <tr>
                     <th>Item #</th>
                     <?php if ($width && $length) { ?>
                     <th><?php if ($height) { ?> #WxLxH
                        <?php } else { ?>
                        #WxL
                        <?php } ?> 
                     </th>
                     <?php }elseif($color || $feature){?>
                        <th>Color/Feature</th>
                     <?php }?>
                     <th>Thickness</th>
                     <?php if ($value->parent == 27) { ?>
                     <th>Finish/Material</th>
                     <?php } elseif($capacity) { ?>
                     <th>Capacity</th>
                     <?php } ?>
                     <th>Qty/Case</th>
                     <th>Price</th>
                  </tr>
               </thead>
            </table>
            <?php while ($products->have_posts()):

                $products->the_post();
                $loopcount = $newloopcount . generateRandomString();
                $sale_price = get_post_meta(get_the_ID(), "_sale_price", true);
                $regular_price = get_post_meta(
                    get_the_ID(),
                    "_regular_price",
                    true
                );
                $length = get_post_meta(get_the_ID(), "_length", true);
                $width = get_post_meta(get_the_ID(), "_width", true);
                $height = get_post_meta(get_the_ID(), "_height", true);
                $sku = get_post_meta(get_the_ID(), "_sku", true);
                $qty = get_post_meta($post->ID, "_stock", true);
                $color = $product->get_attribute("pa_color");
                $thickness = $product->get_attribute("pa_thickness");
                $pallet_fit_width = get_field("pallet_fit_width");
                $pallet_fit_length = get_field("pallet_fit_length");
                $pallet_fit_height = get_field("pallet_fit_height");
                $feature = get_field("feature");
                $capacity = get_field("capacity");
                $finish = $product->get_attribute("pa_finish");
                $material = $product->get_attribute("pa_material");
                ?>
            <div class="wrapper">
               <div class="accordion" id="accordionExample">
                  <div class="accordion-item border-0">
                     <h2 class="accordion-header d-none d-sm-block" id="heading<?= $loopcount ?>">
                        <button class="accordion-button  collapsed p-0" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapse<?= $loopcount ?>" aria-expanded="true" aria-controls="collapse<?= $loopcount ?>">
                           <div class="table-data">
                              <table id="demotablecontent">
                                 <tr>
                                    <td class="stock"> <?= $sku ?></td>
                                    <?php if ($width && $length) { ?>
                                    <td> <?= $length ?>" x <?= $width ?>" <?php if (
                                        $height
                                    ) { ?> x <?= $height ?>
                                       <?php } ?> 
                                    </td>
                                    <?php } elseif($feature || $color){?>
                                       <td><?=$color?>
                                          <?php if($feature){?>  
                                          /<?=$feature?>
                                          <?php }?>
                                       </td>
                                    <?php }?>
                                    <td> <?= $thickness ?> Mil</td>
                                    <?php if ($value->parent == 27) { ?>
                                    <?php if ($finish || $material) { ?>
                                    <td> <?= $finish ?> 
                                          <?php if ($material) { ?>  
                                          /<?= $material ?>
                                          <?php } ?>/<?=$feature?>
                                    </td>
                                    <?php }} elseif($capacity) { ?>
                                    <td><?= $capacity ?></td>
                                    <?php } ?>
                                    <td> <?= $qty ?>/ Case</td>
                                    <td class="amount_rate">As low as $<?= $regular_price ?></td>
                                 </tr>
                              </table>
                           </div>
                        </button>
                     </h2>
                     <div id="collapse<?= $loopcount ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $loopcount ?>"
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
                                          Item #: <?= $sku ?></span>
                                          <div class="view-text py-4"><a href="<?php echo get_permalink(); ?>">View Details</a></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="d-sm-none d-md-block">
                                       <dl class="pe-3">
                                          <dt style="display: inline-block;">Price </dt>
                                          <dd style="display: inline-block;margin-left: 37px;" class="price"><del style="color:#ff0000;" aria-hidden="true"><span style="color:#ff0000;" class="woocommerce-Price-amount amount"> $<?= $regular_price ?> / Case</span></del></dd>
                                       </dl>
                                    </div>
                                    <div class="accordian-side-btn my-2">
                                       <div class="d-flex">
                                          <?php if (
                                              $product->is_type("simple")
                                          ) { ?>
                                          <form class="cart" action="<?php echo esc_url(
                                              apply_filters(
                                                  "woocommerce_add_to_cart_form_action",
                                                  $product->get_permalink()
                                              )
                                          ); ?>" method="post" enctype='multipart/form-data'>
                                             <?php do_action(
                                                 "woocommerce_before_add_to_cart_button"
                                             ); ?>
                                             <?php
                                             do_action(
                                                 "woocommerce_before_add_to_cart_quantity"
                                             );
                                             woocommerce_quantity_input([
                                                 "min_value" => apply_filters(
                                                     "woocommerce_quantity_input_min",
                                                     $product->get_min_purchase_quantity(),
                                                     $product
                                                 ),
                                                 "max_value" => apply_filters(
                                                     "woocommerce_quantity_input_max",
                                                     $product->get_max_purchase_quantity(),
                                                     $product
                                                 ),
                                                 "input_value" => isset(
                                                     $_POST["quantity"]
                                                 )
                                                     ? wc_stock_amount(
                                                         wp_unslash(
                                                             $_POST["quantity"]
                                                         )
                                                     )
                                                     : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                                             ]);

                                             do_action(
                                                 "woocommerce_after_add_to_cart_quantity"
                                             );
                                             ?>
                                             <div class="flexitem">
                                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr(
                                                    $product->get_id()
                                                ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html(
                                                    $product->single_add_to_cart_text()
                                                ); ?></button>
                                                <?php do_action(
                                                    "woocommerce_after_add_to_cart_button"
                                                ); ?>
                                             </div>
                                          </form>
                                          <?php do_action(
                                              "woocommerce_after_add_to_cart_form"
                                          );} else {do_action(
                                                  "woocommerce_after_shop_loop_item"
                                              );}
                                           // do_action( 'woocommerce_after_shop_loop_item' );
                                           ?>
                                          <!-- <a href="<?php echo $product->add_to_cart_url(); ?>" value="<?php echo esc_attr(
                                              $product->get_id()
                                          ); ?>" class="btn btn-primary px-4 border-0 product-button ms-5 ajax_add_to_cart add_to_cart_button" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="<?php echo esc_attr(
                                              $sku
                                          ); ?>" aria-label="Add “<?php the_title_attribute(); ?>” to your cart">Add to cart</i></a> -->
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
            <?php $newloopcount++;
            endwhile;
                endif;
                echo "</div>";
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
               <?php if (have_rows("shipping_tracker", "option")):
                   while (have_rows("shipping_tracker", "option")):
                       the_row(); ?>
               <div class="col-lg-3 col-6">
                  <div class="card h-100 py-3">
                     <div class="card-body">
                        <img src="<?php echo get_sub_field(
                            "logo",
                            "option"
                        ); ?>" class="img-fluid ">
                        <h6 class="pt-4"><?php echo get_sub_field(
                            "text",
                            "option"
                        ); ?></h6>
                     </div>
                  </div>
               </div>
               <?php
                   endwhile;
               else:
               endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php } else { ?>
<div class="bags-template">
   <h2>Recent Posts</h2>
   <?php
   $args = [
       "post_type" => "page",
       "p" => 323,
   ];
   $query = new WP_Query($args);
   if ($query->have_posts()):
       while ($query->have_posts()):
           $query->the_post(); ?>
   <div class="bags">
      <?php
      $page = get_template_part("templates/about-us");
      echo $page;
      ?>
   </div>
   <?php
       endwhile;
       wp_reset_postdata();
   endif;
   ?>
</div>
<?php }
?>
<?php get_footer(); ?>
