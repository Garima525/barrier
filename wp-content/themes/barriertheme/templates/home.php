<?php 
	/* Template Name: Homepage */ 
	get_header();
?>

<div id="content" class="site-content">
  <div data-elementor-type="wp-page" data-elementor-id="6790" class="elementor elementor-6790">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-3608aaf1 dark-section1 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no" data-id="3608aaf1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-68fe88fd" data-id="68fe88fd" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-1179281e elementor-invisible elementor-widget elementor-widget-rt-post-grid" data-id="1179281e" data-element_type="widget" data-widget_type="rt-post-grid.default">
              <div class="elementor-widget-container">
                <div class="rt-post-grid-default number-counter rt-post-grid-style3 grid-default-layout play-position-default">
                  <div class="row g-4">

                  	<?php 
                  	$args = array(  
				        'post_type' => 'post',
				        'post_status' => 'publish',
				        'posts_per_page' => 4, 
				        'orderby' => 'title', 
				        'order' => 'DESC', 
				    );

				    $loop = new WP_Query( $args ); 
                  	if ( $loop->have_posts() ) : 
                  		while ( $loop->have_posts() ) : $loop->the_post();
                  			$post_ID = get_the_id(); 
							$category_object = get_the_category($post_ID);
							$category_name = $category_object[0]->name;
							$count = $category_object[0]->category_count;

							if($category_name == 'Europe'){
								$background = '#ffae25';
							}elseif($category_name == 'America'){
								$background = '#ac27c4';
							}
							elseif($category_name == 'Canada'){
								$background = '#558811';
							}
							elseif($category_name == 'Travel'){
								$background = '#3dd800';
							}

                  			?>

						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 hide fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
							<div class="rt-item count-on">
								<div class="rt-image">
									<a href="<?php echo get_permalink(); ?>">
										<?php the_post_thumbnail('thumbnail'); ?>
									</a>
								</div>
								<div class="entry-content">
									<div class="post-terms">
										<a href="#">
											<span class="category-style" style="background:<?=$background?>"><?=$category_name?></span>
										</a>
									</div>
									<h3 class="entry-title title-animation-black-normal">
										<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<ul class="entry-meta">
										<li class="post-date">
											<i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
                  		<?php endwhile;
                  	endif;
                  	?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-407be7d4 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no" data-id="407be7d4" data-element_type="section">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-687480bb" data-id="687480bb" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-cf053df elementor-invisible elementor-widget elementor-widget-rt-post-overlay" data-id="cf053df" data-element_type="widget" data-widget_type="rt-post-overlay.default">
              <div class="elementor-widget-container">
                <div class="rt-post-overlay-default rt-post-overlay-style9">
                  <div class="row g-2 left-order">

                  	<?php 
                  	$args = array(  
				        'post_type' => 'post',
				        'post_status' => 'publish',
				        'posts_per_page' => 4, 
				        'orderby' => 'title', 
				        'order' => 'DESC', 
				    );

				    $loop = new WP_Query( $args ); 
                  	if ( $loop->have_posts() ) : 
                  		$i = 1;
                  		while ( $loop->have_posts() ) : $loop->the_post(); 
                  			$post_ID = get_the_id(); 
							$category_object = get_the_category($post_ID);
							$category_name = $category_object[0]->name;
							$author_id = $post->post_author;
							$count = $category_object[0]->category_count;

							if($category_name == 'Europe'){
								$background = '#ffae25';
							}elseif($category_name == 'America'){
								$background = '#ac27c4';
							}
							elseif($category_name == 'Canada'){
								$background = '#558811';
							}
							elseif($category_name == 'Travel'){
								$background = '#3dd800';
							}


							if($i == 1){?>

								<div class="col-xl-8 col-lg-6">
									<div class="rt-item-wrap hide fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
										<div class="rt-item">
											<div class="rt-image">
												<a href="<?php echo get_permalink(); ?>">
													<img width="900" height="600" src="<?php echo get_the_post_thumbnail_url($post_ID, 'full'); ?>" class="attachment-neeon-size9 size-neeon-size9 wp-post-image" alt="" decoding="async" loading="lazy" />
												</a>
											</div>
											<div class="entry-content">
												<div class="post-terms">
													<a href="#">
														<span class="category-style" style="background:<?=$background?>"><?=$category_name?></span>
													</a>
												</div>
												<h3 class="entry-title single-title title-animation-white-bold">
													<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
												</h3>
												<ul class="entry-meta">
													<li class="post-author">by <a href="#" title="Posts by admin" rel="author"><?php the_author_meta( 'user_nicename' , $author_id ); ?></a>
													</li>
													<li class="post-date">
													<i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							<?php
							}else{
								if($i == 2){?>
									<div class="col-xl-4 col-lg-6">
                      					<div class="row g-2">
								<?php
								}?>
								<div class="col-12 hide fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.2s">
									<div class="rt-item rt-item-list">
										<div class="rt-image">
											<a href="<?php echo get_permalink(); ?>">
												<?php the_post_thumbnail('full'); ?>
											</a>
										</div>
										<div class="entry-content">
											<div class="post-terms">
												<a href="#">
													<span class="category-style" style="background:<?=$background?>"><?=$category_name?></span>
												</a>
											</div>
											<h3 class="entry-title small-title title-animation-white-normal">
												<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
											</h3>
											<ul class="entry-meta">
												<li class="post-author">by <a href="#" title="Posts by admin" rel="author"><?php the_author_meta( 'user_nicename' , $author_id ); ?></a>
												</li>
												<li class="post-date">
												<i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?>
												</li>
											</ul>
										</div>
									</div>
		                        </div>
		                        <?php
		                        if($i == 4){?>
										</div>
									</div>
								<?php
								}
							}
                  			$i++; endwhile;
                  	endif;
                  	?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-551a7bb2 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no" data-id="551a7bb2" data-element_type="section">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6b134153" data-id="6b134153" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-524768e5 elementor-invisible elementor-widget elementor-widget-rt-post-tab" data-id="524768e5" data-element_type="widget" data-widget_type="rt-post-tab.default">
              <div class="elementor-widget-container">
                <div class="rt-post-tab-default rt-post-tab-style5 tab-default-layout play-position-default  rt-isotope-wrapper">
                  <div class="section-title rt_ajax_tab_section">
                    <h2 class="related-title">Editor&#039;s Choice <span class="titledot"></span>
                      <span class="titleline"></span>
                    </h2>
                    <div class="rt-post-tab">
                      <div class="post-cat-tab rt_ajax_tab" data-layout="5">
                        <a href="javascript:void(0)" data-id="*" class="current">All</a>
						<?php 
							$args = array(
								'orderby' => 'id',
								'hide_empty'=> 1,
								'exclude'=>array(1)
							);
						$categories = get_categories($args);
						foreach ($categories as $cat) {?>
							<a href="javascript:void(0)" class="" data-id="<?=$cat->term_id?>"><?=$cat->name?></a>
						<?php
						}
						?>
                      </div>
                    </div>
                  </div>
                  <div class="row rt-ajax-tab-content g-4">
					
                  	<?php 
                  	$args = array(  
				        'post_type' => 'post',
				        'post_status' => 'publish',
				        'posts_per_page' => 4, 
				        'orderby' => 'title', 
				        'order' => 'DESC', 
				    );

				    $loop = new WP_Query( $args ); 
                  	if ( $loop->have_posts() ) : 
                  		$i = 1;
                  		while ( $loop->have_posts() ) : $loop->the_post(); 
                  			$post_ID = get_the_id(); 
							$category_object = get_the_category($post_ID);
							$category_name = $category_object[0]->name;
							$author_id = $post->post_author;
							$count = $category_object[0]->category_count;

							if($category_name == 'Europe'){
								$background = '#ffae25';
							}elseif($category_name == 'America'){
								$background = '#ac27c4';
							}
							elseif($category_name == 'Canada'){
								$background = '#558811';
							}
							elseif($category_name == 'Travel'){
								$background = '#3dd800';
							}


							if($i == 1){?>

			                    <div class="col-lg-6">
			                      <div class="rt-item rt-item-box fadeInUp">
			                        <div class="rt-image">
			                          <a href="<?php echo get_permalink(); ?>">
			                            <img decoding="async" loading="lazy" width="551" height="431" src="<?php the_post_thumbnail_url( array(455, 379) ); ?>" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" />
			                          </a>
			                        </div>
			                        <div class="entry-content">
			                          <div class="post-terms">
			                            <a href="#">
			                              <span class="category-style" style="background:<?=$background?>"><?=$category_name?></span>
			                            </a>
			                          </div>
			                          <h3 class="entry-title big-title title-animation-black-bold">
			                            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
			                          </h3>
			                          <ul class="entry-meta">
			                            <li class="post-author">by <a href="#" title="Posts by admin" rel="author"><?php the_author_meta( 'user_nicename' , $author_id ); ?></a>
			                            </li>
			                            <li class="post-date">
			                              <i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?>
			                            </li>
			                          </ul>
			                        </div>
			                      </div>
			                    </div>

		                    <?php
		                	}else{
		                		if($i == 2){
		                		?>
			                    	<div class="col-lg-6">
			                      		<div class="row g-4">
			                    <?php 
			                	} ?>
			                        <div class="col-12 fadeInUp">
			                          <div class="rt-item rt-item-list">
			                            <div class="rt-image">
			                              <a href="<?php echo get_permalink(); ?>">
			                                <img decoding="async" loading="lazy" width="220" height="175" src="<?php echo get_the_post_thumbnail_url($post_ID, 'full'); ?>" class="attachment-neeon-size10 size-neeon-size10 wp-post-image" alt="" />
			                              </a>
			                            </div>
			                            <div class="entry-content">
			                              <div class="post-terms">
			                                <a href="#">
			                                  <span class="category-style" style="background:<?=$background?>"><?=$category_name?></span>
			                                </a>
			                              </div>
			                              <h3 class="entry-title small-title title-animation-black-normal">
			                                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
			                              </h3>
			                              <ul class="entry-meta">
			                                <li class="post-author">by <a href="#" title="Posts by admin" rel="author"><?php the_author_meta( 'user_nicename' , $author_id ); ?></a>
			                                </li>
			                                <li class="post-date">
			                                  <i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?>
			                                </li>
			                              </ul>
			                            </div>
			                          </div>
			                        </div>
			                    <?php 
			                    if($i == 4){?>
				                      </div>
				                    </div>
			                	<?php 
			                	} 
			                }
			                $i++;
			            endwhile;
			        endif;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b84ae4e" data-id="b84ae4e" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <!-- <div class="elementor-element elementor-element-7626b52f elementor-invisible elementor-widget elementor-widget-rt-title" data-id="7626b52f" data-element_type="widget" data-widget_type="rt-title.default">
              <div class="elementor-widget-container">
                <div class="rt-section-title style1">
                  <div class="title-holder">
                    <h2 class="entry-title hide fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s">STAY CONNECTED <span class="titledot"></span>
                      <span class="titleline"></span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="elementor-element elementor-element-2b7666bd elementor-widget elementor-widget-wp-widget-apsc_widget" data-id="2b7666bd" data-element_type="widget" data-widget_type="wp-widget-apsc_widget.default">
              <div class="elementor-widget-container">
                <div class="apsc-icons-wrapper clearfix apsc-theme-2 ">
                  <div class="apsc-each-profile">
                    <a class="apsc-facebook-icon clearfix" href="https://facebook.com/" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="fab fa-facebook-f apsc-facebook"></i>
                          <span class="media-name">Facebook</span>
                        </span>
                        <span class="apsc-count">0</span>
                        <span class="apsc-media-type">Fans</span>
                      </div>
                    </a>
                  </div>
                  <div class="apsc-each-profile">
                    <a class="apsc-twitter-icon clearfix" href="https://twitter.com/" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="fab fa-twitter apsc-twitter"></i>
                          <span class="media-name">Twitter</span>
                        </span>
                        <span class="apsc-count">0</span>
                        <span class="apsc-media-type">Followers</span>
                      </div>
                    </a>
                  </div>
                  <div class="apsc-each-profile">
                    <a class="apsc-instagram-icon clearfix" href="https://instagram.com/" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="apsc-instagram fab fa-instagram"></i>
                          <span class="media-name">Instagram</span>
                        </span>
                        <span class="apsc-count">0</span>
                        <span class="apsc-media-type">Followers</span>
                      </div>
                    </a>
                  </div>
                  <div class="apsc-each-profile">
                    <a class="apsc-youtube-icon clearfix" href="" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="apsc-youtube fab fa-youtube"></i>
                          <span class="media-name">Youtube</span>
                        </span>
                        <span class="apsc-count">0</span>
                        <span class="apsc-media-type">Subscriber</span>
                      </div>
                    </a>
                  </div>
                  <div class="apsc-each-profile">
                    <a class="apsc-soundcloud-icon clearfix" href="https://soundcloud.com/" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="apsc-soundcloud fab fa-soundcloud"></i>
                          <span class="media-name">Soundcloud</span>
                        </span>
                        <span class="apsc-count"></span>
                        <span class="apsc-media-type">Followers</span>
                      </div>
                    </a>
                  </div>
                  <div class="apsc-each-profile">
                    <a class="apsc-dribble-icon clearfix" href="https://dribbble.com/" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="apsc-dribbble fab fa-dribbble"></i>
                          <span class="media-name">dribble</span>
                        </span>
                        <span class="apsc-count"></span>
                        <span class="apsc-media-type">Followers</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="elementor-element elementor-element-16a357b7 elementor-invisible elementor-widget elementor-widget-rt-title" data-id="16a357b7" data-element_type="widget" data-widget_type="rt-title.default">
              <div class="elementor-widget-container">
                <div class="rt-section-title style1">
                  <div class="title-holder">
                    <h2 class="entry-title hide fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s">HOT CATEGORIES <span class="titledot"></span>
                      <span class="titleline"></span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="elementor-element elementor-element-7a94bd36 elementor-invisible elementor-widget elementor-widget-rt-category" data-id="7a94bd36" data-element_type="widget" data-widget_type="rt-category.default">
              <div class="elementor-widget-container">
                <div class="rt-category rt-category-style2">
                  <div class="row g-2">
                  	<?php

                  	$categoriesArr = get_categories();
                  	foreach($categoriesArr as $category){ 
                  		$cat_id = $category->term_id;
											$image_id = get_term_meta ( $cat_id, 'category-image-id', true );

											$post_count_query = new WP_Query( array('post_type' => 'post','cat' => $cat_id) );
											$count = $post_count_query->found_posts;
                  		?>

                  		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                      <div class="rt-item hide fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
	                        <a href="<?=get_category_link($cat_id);?>">
	                        	<?php 
	                        	echo wp_get_attachment_image ( $image_id, 'large' ); ?>
	                          <div class="rt-content">
	                            <h4 class="rt-cat-name"><?=$category->name?></h4>
	                            <p class="rt-cat-count"><?=$count?></p>
	                          </div>
	                        </a>
	                      </div>
	                    </div>

                  	<?php
                  	}
                  	?>
                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="rt-item hide fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                        <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/animal/">
                          <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/03/animal_01-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3" alt="" decoding="async" loading="lazy" />
                          <div class="rt-content">
                            <h4 class="rt-cat-name">Animal</h4>
                            <p class="rt-cat-count">7</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="rt-item hide fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.1s">
                        <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/food/">
                          <img width="310" height="170" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/food.jpg" class="attachment-neeon-size3 size-neeon-size3" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/food.jpg 310w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/food-300x165.jpg 300w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/food-155x85.jpg 155w" sizes="(max-width: 310px) 100vw, 310px" />
                          <div class="rt-content">
                            <h4 class="rt-cat-name">Food</h4>
                            <p class="rt-cat-count">6</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="rt-item hide fadeInUp" data-wow-delay="0.9s" data-wow-duration="1.2s">
                        <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/health/">
                          <img width="310" height="170" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/health.jpg" class="attachment-neeon-size3 size-neeon-size3" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/health.jpg 310w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/health-300x165.jpg 300w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/health-155x85.jpg 155w" sizes="(max-width: 310px) 100vw, 310px" />
                          <div class="rt-content">
                            <h4 class="rt-cat-name">Health</h4>
                            <p class="rt-cat-count">6</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="rt-item hide fadeInUp" data-wow-delay="1.1s" data-wow-duration="1.3s">
                        <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/sports/">
                          <img width="310" height="170" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/sports.jpg" class="attachment-neeon-size3 size-neeon-size3" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/sports.jpg 310w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/sports-300x165.jpg 300w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/sports-155x85.jpg 155w" sizes="(max-width: 310px) 100vw, 310px" />
                          <div class="rt-content">
                            <h4 class="rt-cat-name">Sports</h4>
                            <p class="rt-cat-count">6</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="rt-item hide fadeInUp" data-wow-delay="1.3s" data-wow-duration="1.4s">
                        <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/">
                          <img width="410" height="240" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/02/travel_cat.jpg" class="attachment-neeon-size3 size-neeon-size3" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/02/travel_cat.jpg 410w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/02/travel_cat-300x176.jpg 300w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/02/travel_cat-155x91.jpg 155w" sizes="(max-width: 410px) 100vw, 410px" />
                          <div class="rt-content">
                            <h4 class="rt-cat-name">Travel</h4>
                            <p class="rt-cat-count">6</p>
                          </div>
                        </a>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-6f6e2051 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no" data-id="6f6e2051" data-element_type="section">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5b19d7b9" data-id="5b19d7b9" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-7e83e086 elementor-invisible elementor-widget elementor-widget-rt-title" data-id="7e83e086" data-element_type="widget" data-widget_type="rt-title.default">
              <div class="elementor-widget-container">
                <div class="rt-section-title style1">
                  <div class="title-holder">
                    <h2 class="entry-title hide fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s">Top Stories <span class="titledot"></span>
                      <span class="titleline"></span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="elementor-element elementor-element-1058b7e7 elementor-invisible elementor-widget elementor-widget-rt-post-grid" data-id="1058b7e7" data-element_type="widget" data-widget_type="rt-post-grid.default">
              <div class="elementor-widget-container">
                <div class="rt-post-grid-default rt-post-grid-style2 grid-default-layout play-position-default">
                  <div class="row rt-masonry-grid g-4">
                    <div class="rt-grid-item col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="rt-item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                        <div class="rt-image">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/african-nation-are-strugling-to-save-their-wildlife-2/">
                            <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_7-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" decoding="async" loading="lazy" />
                          </a>
                          <div class="post-terms">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/america/">
                              <span class="category-style" style="background:#ac27c4">America</span>
                            </a>
                          </div>
                        </div>
                        <div class="entry-content">
                          <h3 class="entry-title title-animation-black-normal">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/african-nation-are-strugling-to-save-their-wildlife-2/">African Nation Are Strugling To Save Their Wildlife</a>
                          </h3>
                          <ul class="entry-meta">
                            <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                            </li>
                            <li class="post-date">
                              <i class="far fa-calendar-alt"></i>January 21, 2022
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="rt-grid-item col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="rt-item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.3s">
                        <div class="rt-image">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-2/">
                            <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sport_6-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" decoding="async" loading="lazy" />
                          </a>
                          <div class="post-terms">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/sports/tennis/">
                              <span class="category-style" style="background:#ff3385">Tennis</span>
                            </a>
                          </div>
                        </div>
                        <div class="entry-content">
                          <h3 class="entry-title title-animation-black-normal">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-2/">Novak appeals in court against dear less Care</a>
                          </h3>
                          <ul class="entry-meta">
                            <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                            </li>
                            <li class="post-date">
                              <i class="far fa-calendar-alt"></i>January 21, 2022
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="rt-grid-item col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="rt-item wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.4s">
                        <div class="rt-image">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-7/">
                            <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_8-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" decoding="async" loading="lazy" />
                          </a>
                          <div class="post-terms">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/europe/">
                              <span class="category-style" style="background:#ffae25">Europe</span>
                            </a>
                          </div>
                        </div>
                        <div class="entry-content">
                          <h3 class="entry-title title-animation-black-normal">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-7/">Novak appeals in court against dear less Care</a>
                          </h3>
                          <ul class="entry-meta">
                            <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                            </li>
                            <li class="post-date">
                              <i class="far fa-calendar-alt"></i>January 21, 2022
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="rt-grid-item col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="rt-item wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1.5s">
                        <div class="rt-image">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dear-less-care-cancellation-of-australian/">
                            <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_6-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" decoding="async" loading="lazy" />
                          </a>
                          <div class="post-terms">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/canada/">
                              <span class="category-style" style="background:#558811">Canada</span>
                            </a>
                          </div>
                        </div>
                        <div class="entry-content">
                          <h3 class="entry-title title-animation-black-normal">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dear-less-care-cancellation-of-australian/">Novak appeals in court against dear less Care</a>
                          </h3>
                          <ul class="entry-meta">
                            <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                            </li>
                            <li class="post-date">
                              <i class="far fa-calendar-alt"></i>January 21, 2022
                            </li>
                          </ul>
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
    <section class="elementor-section elementor-top-section elementor-element elementor-element-39de62c5 elementor-section-full_width elementor-section-height-default elementor-section-height-default rt-parallax-bg-no" data-id="39de62c5" data-element_type="section">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-46729c50" data-id="46729c50" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-28dd7f27 elementor-widget elementor-widget-rt-thumb-slider" data-id="28dd7f27" data-element_type="widget" data-widget_type="rt-thumb-slider.default">
              <div class="elementor-widget-container">
                <div class="rt-thumb-slider-default rt-thumb-slider-horizontal-3 neeon-horizontal-slider">
                  <div class="swiper-container horizontal-slider" data-xld="{&quot;slidesPerView&quot;:2,&quot;loop&quot;:true,&quot;spaceBetween&quot;:0,&quot;slideToClickedSlide&quot;:true,&quot;autoplay&quot;:{&quot;delay&quot;:5000},&quot;speed&quot;:1000,&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;}},&quot;auto&quot;:false}">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="rt-item rt-slide">
                          <div class="slide-animation" data-bg-image="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sport_6.jpg"></div>
                          <div class="container">
                            <div class="row justify-content-center text-center">
                              <div class="col-xl-6 col-lg-8">
                                <div class="post-content"></div>
                                <h2 class="entry-title big-title title-animation-white-bold">
                                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/how-to-have-fantas-tic-trip-without-blowing-your-budget-3/">How to have fantas tic trip without blowing your budget</a>
                                </h2>
                                <ul class="entry-meta">
                                  <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                                  </li>
                                  <li class="post-date">
                                    <i class="far fa-calendar-alt"></i>January 21, 2022
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="rt-item rt-slide">
                        <div class="slide-animation" data-bg-image="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_1.jpg"></div>
                        <div class="container">
                          <div class="row justify-content-center text-center">
                            <div class="col-xl-6 col-lg-8">
                              <div class="post-content"></div>
                              <h2 class="entry-title big-title title-animation-white-bold">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/how-to-get-the-best-deals-on-hotels-and-flights-2/">How to get the best deals on hotels and flights</a>
                              </h2>
                              <ul class="entry-meta">
                                <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                                </li>
                                <li class="post-date">
                                  <i class="far fa-calendar-alt"></i>January 21, 2022
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="rt-item rt-slide">
                      <div class="slide-animation" data-bg-image="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_50.jpg"></div>
                      <div class="container">
                        <div class="row justify-content-center text-center">
                          <div class="col-xl-6 col-lg-8">
                            <div class="post-content"></div>
                            <h2 class="entry-title big-title title-animation-white-bold">
                              <a href="https://radiustheme.com/demo/wordpress/themes/neeon/how-to-get-the-best-deals-on-hotels-and-flights/">How to get the best deals on hotels and flights</a>
                            </h2>
                            <ul class="entry-meta">
                              <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                              </li>
                              <li class="post-date">
                                <i class="far fa-calendar-alt"></i>December 9, 2021
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end swiper-slide -->
              </div>
            </div>
            <!-- end video-slider-style-1 -->
            <!-- start video-thumnail-area -->
            <div class="rt-thumnail-area">
              <div class="container">
                <div class="swiper-container swiper-item-wrap horizontal-thumb-slider" data-xld="{&quot;slidesPerView&quot;:2,&quot;loop&quot;:true,&quot;spaceBetween&quot;:0,&quot;slideToClickedSlide&quot;:true,&quot;autoplay&quot;:{&quot;delay&quot;:5000},&quot;speed&quot;:1000,&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;}},&quot;auto&quot;:false}">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="rt-item rt-slide-thumb">
                        <div class="rt-image">
                          <img loading="lazy" width="200" height="200" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sport_6-200x200.jpg" class="attachment-neeon-size8 size-neeon-size8 wp-post-image" alt="" decoding="async" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sport_6-200x200.jpg 200w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sport_6-150x150.jpg 150w" sizes="(max-width: 200px) 100vw, 200px" />
                        </div>
                        <div class="entry-content">
                          <div class="post-terms rt-cat">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/canada/" rel="category tag">Canada</a>
                          </div>
                          <h3 class="entry-title small-title title-animation-white-normal">
                            <a href="javascript:void(0)">How to have fantas tic trip without blowing your</a>
                          </h3>
                          <ul class="entry-meta">
                            <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                            </li>
                            <li class="post-date">
                              <i class="far fa-calendar-alt"></i>January 21, 2022
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="rt-item rt-slide-thumb">
                        <div class="rt-image">
                          <img width="200" height="200" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_1-200x200.jpg" class="attachment-neeon-size8 size-neeon-size8 wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_1-200x200.jpg 200w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_1-150x150.jpg 150w" sizes="(max-width: 200px) 100vw, 200px" />
                        </div>
                        <div class="entry-content">
                          <div class="post-terms rt-cat">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/america/" rel="category tag">America</a>
                          </div>
                          <h3 class="entry-title small-title title-animation-white-normal">
                            <a href="javascript:void(0)">How to get the best deals on hotels and</a>
                          </h3>
                          <ul class="entry-meta">
                            <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                            </li>
                            <li class="post-date">
                              <i class="far fa-calendar-alt"></i>January 21, 2022
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="rt-item rt-slide-thumb">
                        <div class="rt-image">
                          <img width="200" height="200" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_50-200x200.jpg" class="attachment-neeon-size8 size-neeon-size8 wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_50-200x200.jpg 200w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_50-150x150.jpg 150w" sizes="(max-width: 200px) 100vw, 200px" />
                        </div>
                        <div class="entry-content">
                          <div class="post-terms rt-cat">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/" rel="category tag">Travel</a>
                          </div>
                          <h3 class="entry-title small-title title-animation-white-normal">
                            <a href="javascript:void(0)">How to get the best deals on hotels and</a>
                          </h3>
                          <ul class="entry-meta">
                            <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                            </li>
                            <li class="post-date">
                              <i class="far fa-calendar-alt"></i>December 9, 2021
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
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
<section class="elementor-section elementor-top-section elementor-element elementor-element-55ce5fd5 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no" data-id="55ce5fd5" data-element_type="section">
  <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5aff8e64" data-id="5aff8e64" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-ac28199 elementor-widget elementor-widget-image" data-id="ac28199" data-element_type="widget" data-widget_type="image.default">
          <div class="elementor-widget-container">
            <img decoding="async" width="960" height="150" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sports-ad_2.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sports-ad_2.jpg 960w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sports-ad_2-300x47.jpg 300w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sports-ad_2-768x120.jpg 768w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sports-ad_2-155x24.jpg 155w" sizes="(max-width: 960px) 100vw, 960px" />
          </div>
        </div>
        <div class="elementor-element elementor-element-164a22a5 elementor-invisible elementor-widget elementor-widget-rt-title" data-id="164a22a5" data-element_type="widget" data-widget_type="rt-title.default">
          <div class="elementor-widget-container">
            <div class="rt-section-title style1">
              <div class="title-holder">
                <h2 class="entry-title hide fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s">Latest Blog <span class="titledot"></span>
                  <span class="titleline"></span>
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="elementor-element elementor-element-fb94cdc elementor-invisible elementor-widget elementor-widget-rt-post-grid" data-id="fb94cdc" data-element_type="widget" data-widget_type="rt-post-grid.default">
          <div class="elementor-widget-container">
            <div class="rt-post-grid-default rt-post-grid-style4 grid-default-layout play-position-default">
              <div class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                <div class="rt-item">
                  <div class="rt-image">
                    <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-2/">
                      <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sport_6-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" decoding="async" loading="lazy" />
                    </a>
                  </div>
                  <div class="entry-content">
                    <div class="post-terms">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/sports/tennis/">
                        <span class="category-style" style="background:#ff3385">Tennis</span>
                      </a>
                    </div>
                    <h3 class="entry-title title-animation-black-bold">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-2/">Novak appeals in court against dear less Care cancellation of Australian</a>
                    </h3>
                    <div class="post_excerpt">
                      <p>Ahen an unknown printer took a galley of type and their scrambled imaketype specimen book.</p>
                    </div>
                    <ul class="entry-meta">
                      <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                      </li>
                      <li class="post-date">
                        <i class="far fa-calendar-alt"></i>January 21, 2022
                      </li>
                    </ul>
                    <div class="post-read-more">
                      <a class="button-style-1 btn-common rt-animation-out" href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-2/">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                          <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                          <g class="rt-button-cap-fake">
                            <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.3s">
                <div class="rt-item">
                  <div class="rt-image">
                    <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-7/">
                      <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_8-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" decoding="async" loading="lazy" />
                    </a>
                  </div>
                  <div class="entry-content">
                    <div class="post-terms">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/europe/">
                        <span class="category-style" style="background:#ffae25">Europe</span>
                      </a>
                    </div>
                    <h3 class="entry-title title-animation-black-bold">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-7/">Novak appeals in court against dear less Care cancellation of Australian</a>
                    </h3>
                    <div class="post_excerpt">
                      <p>Ahen an unknown printer took a galley of type and their scrambled imaketype specimen book.</p>
                    </div>
                    <ul class="entry-meta">
                      <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                      </li>
                      <li class="post-date">
                        <i class="far fa-calendar-alt"></i>January 21, 2022
                      </li>
                    </ul>
                    <div class="post-read-more">
                      <a class="button-style-1 btn-common rt-animation-out" href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-7/">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                          <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                          <g class="rt-button-cap-fake">
                            <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.4s">
                <div class="rt-item">
                  <div class="rt-image">
                    <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dear-less-care-cancellation-of-australian/">
                      <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_6-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" decoding="async" loading="lazy" />
                    </a>
                  </div>
                  <div class="entry-content">
                    <div class="post-terms">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/canada/">
                        <span class="category-style" style="background:#558811">Canada</span>
                      </a>
                    </div>
                    <h3 class="entry-title title-animation-black-bold">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dear-less-care-cancellation-of-australian/">Novak appeals in court against dear less Care cancellation of Australian</a>
                    </h3>
                    <div class="post_excerpt">
                      <p>Ahen an unknown printer took a galley of type and their scrambled imaketype specimen book.</p>
                    </div>
                    <ul class="entry-meta">
                      <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                      </li>
                      <li class="post-date">
                        <i class="far fa-calendar-alt"></i>January 21, 2022
                      </li>
                    </ul>
                    <div class="post-read-more">
                      <a class="button-style-1 btn-common rt-animation-out" href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dear-less-care-cancellation-of-australian/">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                          <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                          <g class="rt-button-cap-fake">
                            <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1.5s">
                <div class="rt-item">
                  <div class="rt-image">
                    <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-3/">
                      <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sport_7-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" decoding="async" loading="lazy" />
                    </a>
                  </div>
                  <div class="entry-content">
                    <div class="post-terms">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/sports/tennis/">
                        <span class="category-style" style="background:#ff3385">Tennis</span>
                      </a>
                    </div>
                    <h3 class="entry-title title-animation-black-bold">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-3/">Novak appeals in court against dearless Care cancellation of Australian</a>
                    </h3>
                    <div class="post_excerpt">
                      <p>Ahen an unknown printer took a galley of type and their scrambled imaketype specimen book.</p>
                    </div>
                    <ul class="entry-meta">
                      <li class="post-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                      </li>
                      <li class="post-date">
                        <i class="far fa-calendar-alt"></i>January 21, 2022
                      </li>
                    </ul>
                    <div class="post-read-more">
                      <a class="button-style-1 btn-common rt-animation-out" href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-cancellation-of-australian-3/">Read More <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                          <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                          <g class="rt-button-cap-fake">
                            <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5e7a1762" data-id="5e7a1762" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-43c0230f elementor-invisible elementor-widget elementor-widget-rt-title" data-id="43c0230f" data-element_type="widget" data-widget_type="rt-title.default">
          <div class="elementor-widget-container">
            <div class="rt-section-title style1">
              <div class="title-holder">
                <h2 class="entry-title hide fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s">POPULAR NEWS <span class="titledot"></span>
                  <span class="titleline"></span>
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="elementor-element elementor-element-63fd0644 elementor-widget elementor-widget-wp-widget-rt-post-box" data-id="63fd0644" data-element_type="widget" data-widget_type="wp-widget-rt-post-box.default">
          <div class="elementor-widget-container">
            <div class="post-box-style number-counter g-3 ">
              <div class="rt-news-box-widget box-style-1">
                <div class="item-list">
                  <div class="post-box-img">
                    <a class="post-img" href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-6/" title="Here What In Battlefield Deluxe Hotel Area  Edition Nmply Dummy Text">
                      <img width="200" height="200" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_01-200x200.jpg" class="media-object wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_01-200x200.jpg 200w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_01-150x150.jpg 150w" sizes="(max-width: 200px) 100vw, 200px" />
                    </a>
                  </div>
                  <div class="post-content">
                    <div class="entry-cat">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/movie/science-fiction/">Science Fiction</a>
                    </div>
                    <h4 class="entry-title title-animation-black-normal">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-6/">Here What In Battlefield Deluxe Hotel Area Edition Nmply Dummy Text</a>
                    </h4>
                    <div class="entry-date">
                      <i class="far fa-calendar-alt icon"></i>November 30, 2022
                    </div>
                  </div>
                </div>
              </div>
              <div class="rt-news-box-widget box-style-1">
                <div class="item-list">
                  <div class="post-box-img">
                    <a class="post-img" href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-5/" title="Here What In Battlefield Deluxe Hotel Area  Edition Nmply Dummy Text">
                      <img width="200" height="200" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_03-200x200.jpg" class="media-object wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_03-200x200.jpg 200w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_03-150x150.jpg 150w" sizes="(max-width: 200px) 100vw, 200px" />
                    </a>
                  </div>
                  <div class="post-content">
                    <div class="entry-cat">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/movie/horror/">Horror</a>
                    </div>
                    <h4 class="entry-title title-animation-black-normal">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-5/">Here What In Battlefield Deluxe Hotel Area Edition Nmply Dummy Text</a>
                    </h4>
                    <div class="entry-date">
                      <i class="far fa-calendar-alt icon"></i>November 30, 2022
                    </div>
                  </div>
                </div>
              </div>
              <div class="rt-news-box-widget box-style-1">
                <div class="item-list">
                  <div class="post-box-img">
                    <a class="post-img" href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-4/" title="Here What In Battlefield Deluxe Hotel Area  Edition Nmply Dummy Text">
                      <img width="200" height="200" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_02-200x200.jpg" class="media-object wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_02-200x200.jpg 200w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_02-150x150.jpg 150w" sizes="(max-width: 200px) 100vw, 200px" />
                    </a>
                  </div>
                  <div class="post-content">
                    <div class="entry-cat">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/movie/thriller/">Thriller</a>
                    </div>
                    <h4 class="entry-title title-animation-black-normal">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-4/">Here What In Battlefield Deluxe Hotel Area Edition Nmply Dummy Text</a>
                    </h4>
                    <div class="entry-date">
                      <i class="far fa-calendar-alt icon"></i>November 30, 2022
                    </div>
                  </div>
                </div>
              </div>
              <div class="rt-news-box-widget box-style-1">
                <div class="item-list">
                  <div class="post-box-img">
                    <a class="post-img" href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-3/" title="Here What In Battlefield Deluxe Hotel Area  Edition Nmply Dummy Text">
                      <img width="200" height="200" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_06-200x200.jpg" class="media-object wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_06-200x200.jpg 200w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_06-150x150.jpg 150w" sizes="(max-width: 200px) 100vw, 200px" />
                    </a>
                  </div>
                  <div class="post-content">
                    <div class="entry-cat">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/movie/science-fiction/">Science Fiction</a>
                    </div>
                    <h4 class="entry-title title-animation-black-normal">
                      <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-3/">Here What In Battlefield Deluxe Hotel Area Edition Nmply Dummy Text</a>
                    </h4>
                    <div class="entry-date">
                      <i class="far fa-calendar-alt icon"></i>November 30, 2022
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="elementor-element elementor-element-29abd6c5 elementor-widget elementor-widget-image" data-id="29abd6c5" data-element_type="widget" data-widget_type="image.default">
          <div class="elementor-widget-container">
            <img decoding="async" width="310" height="450" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/11/ad-post_3.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/11/ad-post_3.jpg 310w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/11/ad-post_3-207x300.jpg 207w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/11/ad-post_3-108x157.jpg 108w" sizes="(max-width: 310px) 100vw, 310px" />
          </div>
        </div>
        <div class="elementor-element elementor-element-756e138f elementor-invisible elementor-widget elementor-widget-rt-title" data-id="756e138f" data-element_type="widget" data-widget_type="rt-title.default">
          <div class="elementor-widget-container">
            <div class="rt-section-title style1">
              <div class="title-holder">
                <h2 class="entry-title hide fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s">MOST VIEWS POST <span class="titledot"></span>
                  <span class="titleline"></span>
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="elementor-element elementor-element-70a3240d elementor-invisible elementor-widget elementor-widget-rt-post-slider" data-id="70a3240d" data-element_type="widget" data-widget_type="rt-post-slider.default">
          <div class="elementor-widget-container">
            <div class="rt-post-slider-default rt-post-slider-style4">
              <div class="rt-swiper-slider rt-swiper-nav-1" data-xld="{&quot;slidesPerView&quot;:2,&quot;loop&quot;:true,&quot;spaceBetween&quot;:24,&quot;slidesPerGroup&quot;:1,&quot;centeredSlides&quot;:false,&quot;slideToClickedSlide&quot;:true,&quot;autoplay&quot;:{&quot;delay&quot;:5000},&quot;speed&quot;:1000,&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;1600&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;}},&quot;auto&quot;:false}">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="rt-item first-post hide fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                      <div class="rt-image">
                        <a href="https://radiustheme.com/demo/wordpress/themes/neeon/how-to-have-fantas-tic-trip-without-blowing-your-budget-4/">
                          <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/sport_2-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" decoding="async" loading="lazy" />
                        </a>
                      </div>
                      <div class="entry-content">
                        <h3 class="entry-title title-animation-black-normal">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/how-to-have-fantas-tic-trip-without-blowing-your-budget-4/">How to have fantas tic trip without</a>
                        </h3>
                        <ul class="entry-meta">
                          <li class="post-date">
                            <i class="far fa-calendar-alt"></i>January 21, 2022
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="rt-item hide fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.1s">
                      <div class="entry-content">
                        <h3 class="entry-title title-animation-black-normal">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/african-nation-are-strugling-to-save-their-wildlife-2/">African Nation Are Strugling To Save Their</a>
                        </h3>
                        <ul class="entry-meta">
                          <li class="post-date">
                            <i class="far fa-calendar-alt"></i>January 21, 2022
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="rt-item hide fadeInUp" data-wow-delay="0.9s" data-wow-duration="1.2s">
                      <div class="entry-content">
                        <h3 class="entry-title title-animation-black-normal">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/how-to-have-fantas-tic-trip-without-blowing-your-budget-2/">How to have fantas tic trip without</a>
                        </h3>
                        <ul class="entry-meta">
                          <li class="post-date">
                            <i class="far fa-calendar-alt"></i>January 21, 2022
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="rt-item first-post hide fadeInUp" data-wow-delay="1.1s" data-wow-duration="1.3s">
                      <div class="rt-image">
                        <a href="https://radiustheme.com/demo/wordpress/themes/neeon/how-to-get-the-best-deals-on-hotels-and-flights-2/">
                          <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_1-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" decoding="async" loading="lazy" />
                        </a>
                      </div>
                      <div class="entry-content">
                        <h3 class="entry-title title-animation-black-normal">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/how-to-get-the-best-deals-on-hotels-and-flights-2/">How to get the best deals on</a>
                        </h3>
                        <ul class="entry-meta">
                          <li class="post-date">
                            <i class="far fa-calendar-alt"></i>January 21, 2022
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-72ac06df dark-section1 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no" data-id="72ac06df" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
  <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6a5d8af1" data-id="6a5d8af1" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <section class="elementor-section elementor-inner-section elementor-element elementor-element-a60753e elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no" data-id="a60753e" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-34eda4d4" data-id="34eda4d4" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-5da4a4f4 elementor-view-default elementor-widget elementor-widget-icon" data-id="5da4a4f4" data-element_type="widget" data-widget_type="icon.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-icon-wrapper">
                      <div class="elementor-icon">
                        <i aria-hidden="true" class="fas fa-envelope"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-59ed9363" data-id="59ed9363" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-3c496faf elementor-invisible elementor-widget elementor-widget-rt-text-with-button" data-id="3c496faf" data-element_type="widget" data-widget_type="rt-text-with-button.default">
                  <div class="elementor-widget-container">
                    <div class="rt-title-text-button barshow">
                      <h2 class="entry-title hide fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s">Subscribe To Our Mailing List <span class="title-bar"></span>
                      </h2>
                      <div class="entry-content hide fadeInUp" data-wow-delay="1.4s" data-wow-duration="1s">
                        <p>
                          <strong>Get the news right tn your inbox</strong>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="elementor-element elementor-element-7a5eaa68 animated-slow elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-image" data-id="7a5eaa68" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
          <div class="elementor-widget-container">
            <img decoding="async" width="72" height="44" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/vector-1.png" class="attachment-full size-full" alt="" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-55f5bd4d" data-id="55f5bd4d" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-1b8b817c animated-slow elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-image" data-id="1b8b817c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
          <div class="elementor-widget-container">
            <img decoding="async" width="42" height="42" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/vector-2.png" class="attachment-full size-full" alt="" loading="lazy" />
          </div>
        </div>
        <div class="elementor-element elementor-element-a57af9c elementor-widget elementor-widget-wp-widget-fluentform_widget" data-id="a57af9c" data-element_type="widget" data-widget_type="wp-widget-fluentform_widget.default">
          <div class="elementor-widget-container">
            <div class='fluentform fluentform_wrapper_3'>
              <form data-form_id="3" id="fluentform_3" class="frm-fluent-form fluent_form_3 ff-el-form-top ff_form_instance_3_1 ff-form-loading" data-form_instance="ff_form_instance_3_1" method="POST">
                <input type='hidden' name='__fluent_form_embded_post_id' value='6923' />
                <input type="hidden" id="_fluentform_3_fluentformnonce" name="_fluentform_3_fluentformnonce" value="08b4a0376f" />
                <input type="hidden" name="_wp_http_referer" value="/demo/wordpress/themes/neeon/home-08/" />
                <div data-name="ff_cn_id_1" class='ff-t-container ff-column-container ff_columns_total_2 subscribe-form-2 '>
                  <div class='ff-t-cell ff-t-column-1' style='flex-basis: 50%;'>
                    <div class='ff-el-group'>
                      <div class='ff-el-input--content'>
                        <input type="email" name="email_1" id="ff_3_email_1" class="ff-el-form-control" placeholder="Your e-mail*" data-name="email_1">
                      </div>
                    </div>
                  </div>
                  <div class='ff-t-cell ff-t-column-2' style='flex-basis: 50%;'>
                    <div class='ff-el-group ff-text-left ff_submit_btn_wrapper ff_submit_btn_wrapper_custom'>
                      <button class="ff-btn ff-btn-submit ff-btn-md ff_btn_style wpf_has_custom_css" type="submit">Subscribe</button>
                      <style>
                        form.fluent_form_3 .wpf_has_custom_css.ff-btn-submit {
                          min-width: 100%;
                        }

                        form.fluent_form_3 .wpf_has_custom_css.ff-btn-submit:hover {
                          min-width: 100%;
                        }
                      </style>
                    </div>
                  </div>
                </div>
              </form>
              <div id='fluentform_3_errors' class='ff-errors-in-stack ff_form_instance_3_1 ff-form-loading_errors ff_form_instance_3_1_errors'></div>
            </div>
            <script type="text/javascript">
              window.fluent_form_ff_form_instance_3_1 = {
                "id": "3",
                "settings": {
                  "layout": {
                    "labelPlacement": "top",
                    "helpMessagePlacement": "with_label",
                    "errorMessagePlacement": "inline",
                    "asteriskPlacement": "asterisk-right"
                  },
                  "restrictions": {
                    "denyEmptySubmission": {
                      "enabled": false
                    }
                  }
                },
                "form_instance": "ff_form_instance_3_1",
                "form_id_selector": "fluentform_3",
                "rules": {
                  "email_1": {
                    "required": {
                      "value": true,
                      "message": "This field is required"
                    },
                    "email": {
                      "value": true,
                      "message": "This field must contain a valid email"
                    }
                  }
                }
              };
            </script>
          </div>
        </div>
        <div class="elementor-element elementor-element-17dd1275 animated-slow elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-image" data-id="17dd1275" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
          <div class="elementor-widget-container">
            <img decoding="async" width="102" height="68" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/vector-3.png" class="attachment-full size-full" alt="" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div></div><div class="scroll-wrap">
  <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.post-cat-tab a').click(function(){
			var category_id = $(this).attr('data-id');
			$.ajax({
			    type: "post",
			    url: "<?php echo admin_url( 'admin-ajax.php' ); ?>",
			    data: {action: "get_specific_cat_posts",cat_id: category_id},
			    beforeSend: function() {
			        // $('.rt-ajax-tab-content').html("");
			        // $('.rt-ajax-tab-content').html('<img class="loader" style="position: absolute;width: 100px;top: 100px;right: 333px;" src="http://localhost/tour_guide/wp-content/uploads/2022/12/Hourglass.gif">');
			    },
			    success: function(msg){
			    	setTimeout(function(){
			        	$('.rt-ajax-tab-content').html(msg);
			    	},1000);
			        console.log(msg);
			    }
			});
		});
	});
</script>

<?php 
	get_footer(); 
?>