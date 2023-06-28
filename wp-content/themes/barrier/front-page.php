<?php get_header(); 
$siteurl = get_site_url();
?>
<section class="product-cards">
		<div class="container">
			<div class="row align-items-center">
			   <div class="col-md-8 order-2 order-md-1">
			      	<h4><?php the_field('brief_title'); ?></h4>
			      	<?php the_field('brief_description'); ?>
			   </div>
			   <div class="col-md-4 order-1">
			      <div class="combine-product">
			         <img src="<?php the_field('brief_image'); ?>" class="img-fluid" alt="">
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
									<a href="<?php echo esc_url( get_term_link($term) ); ?>"><h6 class="d-flex justify-content-center  pt-4"><?=$term->name?></h6></a>
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
		<div class="container-fluid request-bg mt-5 p-0">
			<div class="row py-3">
			   <div class="d-flex justify-content-center">
			      <div class="pe-4 pt-1 text-sample"><?php the_field('req_title'); ?></div>
			      <a href="<?php echo $siteurl.'/contact-us'; ?>"><button type="button" class="btn request-button"><?php the_field('req_link_text'); ?></button></a>
			   </div>
			</div>
		</div>
	</section>
	<section class="stroke-section">
		<div class="container-fluid py-4">
			<div class="row p-0">
			   <div class="col-md-6 bg-left d-flex justify-content-end">
			      <img src="<?php the_field('wh_image'); ?>" class="img-fluid" alt="">
			   </div>
			   <div class="col-md-6 ps-4 bg-right d-flex align-items-center">
			      <div class="row">
			         <div class="col-md-10">
			            <!-- <h2 class="stroke-text m-0 p-0">Why</h2> -->
			            <img src="<?php the_field('wh_logo'); ?>" class="img-fluid why-custom" alt="">
			            <h4>
			               <?php the_field('wh_title'); ?>
			            </h4>
			            <!-- <p class="py-2"><?php //the_field('wh_description'); ?></p> -->

			            <?php
						if( have_rows('wh_list') ): ?>

							<ul class=" footer-ul">
							<?php
						    while( have_rows('wh_list') ) : the_row(); ?>

						        <li> <span> <img src="<?php echo get_sub_field('wh_list_image'); ?>" class="img-fluid pe-4" alt=""></span><?php echo get_sub_field('wh_list_text'); ?></li>

						    <?php
						    endwhile;
						    ?>
							</ul>
						<?php
						else :
						endif;

						?>
			         </div>
			         <div class="col-md-4">
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
<?php get_footer(); ?>