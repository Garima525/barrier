<?php 
	/* Template Name: Homepage */ 
	get_header();
?>
	<section class="product-cards">
		<div class="container">
			<div class="row align-items-center">
			   <div class="col-md-8 mt-5 order-2 order-md-1">
			      <h4>Manufacturer & Wholesale Supplier of Plastic <span class="yellow">Drum Liners </span></h4>
			      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
			         incididunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			         sed do eiusmod tempor incididunt ut labore et dolore magna.
			      </p>
			   </div>
			   <div class="col-md-4 order-1">
			      <div class="combine-product">
			         <img src="./assets/img/product-banner.png" class="img-fluid" alt="">
			      </div>
			   </div>
			</div>
			<div class="row">
			   <div class="col-lg-12 m-auto pt-4">
			      <div class="row py-5">

			      	<?php
			      	$product_terms = get_terms(
								    array(
								        'taxonomy'   => 'product_cat',
								        'hide_empty' => false,
								        'exclude' => array( 23 ),
								    )
								);
			      	$i = 1;
			      	foreach($product_terms as $term){
			      		$taxonomy_img = get_taxonomy_image( $term->term_taxonomy_id );
			      	 ?>
						<div class="col-lg-4 <?php if($i < 3){?>pb-5<?php } ?>">
							<div class="card h-100 py-3">
								<div class="card-body">
									<img src="<?=$taxonomy_img?>" class="img-fluid product-img">
									<h6 class="d-flex justify-content-center  pt-4"><?=$term->name?></h6>
								</div>
							</div>
						</div>
					<?php
					$i++;
			      	}

			      	?>
			         <!-- <div class="col-lg-4">
			            <div class="card h-100 py-3">
			               <div class="card-body">
			                  <img src="./assets/img/product-one.png" class="img-fluid product-img">
			                  <h6 class="d-flex justify-content-center  pt-4">Drum Covers</h6>
			               </div>
			            </div>
			         </div>
			         <div class="col-lg-4">
			            <div class="card h-100 py-3">
			               <div class="card-body">
			                  <img src="./assets/img/product-two.png" class="img-fluid product-img">
			                  <h6 class="d-flex justify-content-center   pt-4">Drum Liners</h6>
			               </div>
			            </div>
			         </div>
			         <div class="col-lg-4">
			            <div class="card h-100 py-3">
			               <div class="card-body">
			                  <img src="./assets/img/product-three.png" class="img-fluid product-img">
			                  <h6 class="d-flex justify-content-center   pt-4">Round Bottom Liners</h6>
			               </div>
			            </div>
			         </div> -->
			      </div>
			      <!-- <div class="row custom-mobile-row  pb-5"> -->
			         <!-- <div class="col-lg-4">
			            <div class="card h-100 py-3">
			               <div class="card-body">
			                  <img src="./assets/img/product-four.png" class="img-fluid product-img">
			                  <h6 class="d-flex justify-content-center  pt-4">Custom Bags</h6>
			               </div>
			            </div>
			         </div>
			         <div class="col-lg-4">
			            <div class="card h-100 py-3">
			               <div class="card-body">
			                  <img src="./assets/img/product-five.png" class="img-fluid product-img">
			                  <h6 class="d-flex justify-content-center  pt-4">Pallet Covers</h6>
			               </div>
			            </div>
			         </div>
			         <div class="col-lg-4">
			            <div class="card h-100 py-3">
			               <div class="card-body">
			                  <img src="./assets/img/product-six.png" class="img-fluid product-img">
			                  <h6 class="d-flex justify-content-center  pt-4">Bags</h6>
			               </div>
			            </div>
			         </div> -->
			      <!-- </div> -->

			   </div>
			</div>
		</div>
		<div class="container-fluid request-bg mt-5 p-0">
			<div class="row py-3">
			   <div class="d-flex justify-content-center">
			      <div class="pe-4 pt-1 text-sample">Request a Free Sample</div>
			      <button type="button" class="btn request-button">Request</button>
			   </div>
			</div>
		</div>
	</section>
	<section class="stroke-section">
		<div class="container-fluid py-4">
			<div class="row p-0">
			   <div class="col-md-6 bg-left d-flex justify-content-end">
			      <img src="./assets/img/combine-products.png" class="img-fluid" alt="">
			   </div>
			   <div class="col-md-6 ps-4 bg-right d-flex align-items-center">
			      <div class="row">
			         <div class="col-md-10">
			            <!-- <h2 class="stroke-text m-0 p-0">Why</h2> -->
			            <img src="./assets/img/Why.png" class="img-fluid why-custom" alt="">
			            <h4>
			               Why Use a Drum, Bucket, Pail Liner or Inserts?
			            </h4>
			            <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
			               incididunt ut labore et dolore magna aliqua. </p>
			            <ul class=" footer-ul">
			               <li> <span> <img src="./assets/img/checked.png" class="img-fluid pe-4" alt=""></span>Increase
			                  life of drums and pails</li>
			               <li> <span> <img src="./assets/img/checked.png" class="img-fluid pe-4" alt=""></span>Increase
			                  turn-around time for drum reuse</li>
			               <li> <span> <img src="./assets/img/checked.png" class="img-fluid pe-4" alt=""></span>Decrease
			                  time spent cleaning</li>
			               <li> <span> <img src="./assets/img/checked.png" class="img-fluid pe-4" alt=""></span>Decrease
			                  decontamination and environmental impact</li>
			               <li> <span> <img src="./assets/img/checked.png" class="img-fluid pe-4" alt=""></span> Saving
			                  and protection</li>
			            </ul>
			         </div>
			         <div class="col-md-4">
			         </div>
			      </div>
			   </div>
			</div>
		</div>
	</section>
	<section class="product-bags bg-line">
		<div class="container">
			<div class="row ">
			   <div class="col-lg-12 m-auto pt-4">
			      <div class="row py-5">
			         <div class="col-lg-4">
			            <div class="card h-100 py-3">
			               <div class="card-body">
			                  <img src="./assets/img/custom-bag.png" class="img-fluid product-img">
			                  <h6 class="d-flex justify-content-center pt-4">Custom Bags</h6>
			               </div>
			            </div>
			         </div>
			         <div class="col-lg-4">
			            <div class="card h-100 py-3">
			               <div class="card-body">
			                  <img src="./assets/img/product-five.png" class="img-fluid product-img">
			                  <h6 class="d-flex justify-content-center pt-4">Custom Liners</h6>
			               </div>
			            </div>
			         </div>
			         <div class="col-lg-4">
			            <div class="card h-100 py-3">
			               <div class="card-body">
			                  <img src="./assets/img/product-six.png" class="img-fluid product-img">
			                  <h6 class="d-flex justify-content-center pt-4">Custom Drum Covers</h6>
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
				              <img src="./assets/img/item-one.png" class="img-fluid ">
				              <h6 class="pt-4">Fast Same-Day Shipping</h6>
				           </div>
				        </div>
				     </div>
				     <div class="col-lg-3  col-6">
				        <div class="card h-100 py-3">
				           <div class="card-body">
				              <img src="./assets/img/item-two.png" class="img-fluid item-img">
				              <h6 class="pt-4">Lowest Price Guarantee</h6>
				           </div>
				        </div>
				     </div>
				     <div class="col-lg-3  col-6">
				        <div class="card h-100 py-3">
				           <div class="card-body">
				              <img src="./assets/img/item-three.png" class="img-fluid item-img">
				              <h6 class="pt-4">100% Customer Satisfaction</h6>
				           </div>
				        </div>
				     </div>
				     <div class="col-lg-3  col-6">
				        <div class="card h-100 py-3">
				           <div class="card-body">
				              <img src="./assets/img/item-four.png" class="img-fluid  item-img ">
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