<?php 
/**
 * Template Name: Winged Post
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage aastha
 * @since 1.0
 */
get_header(); ?>
<div class="swiper-container orb-slider-1s">
	<div class="swiper-wrapper">
		<?php 
			/**
			 * Setup query to show the ‘services’ post type with ‘8’ posts.
			 * Output the title with an excerpt.
			 */
		    $args = array(  
		        'post_type' => 'winged_post',
		        'post_status' => 'publish',
		        'posts_per_page' => -1, 
		        // 'orderby’ => 'title', 
		        // 'order’ => 'ASC', 
		    );

		    $loop = new WP_Query( $args );
		    while ( $loop->have_posts() ) : $loop->the_post();
		    	$post_id = $post->ID;

		    	if (($loop->current_post +1) == ($loop->post_count)){
		    		$args1 = array(  
				        'post_type' => 'winged_post',
				        'post_status' => 'publish',
				        'posts_per_page' => 1,
				    );
				    $loop1 = new WP_Query( $args1 );
		    	}else{
		    		$offset = $loop->current_post + 1;
			    	$args1 = array(  
				        'post_type' => 'winged_post',
				        'post_status' => 'publish',
				        'posts_per_page' => 1,
				        'offset' => $offset
				    );
				    $loop1 = new WP_Query( $args1 );
		    	}
		    ?>

			<div class="swiper-slide">
				<div class="orb-content" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
					<div class="orb-grid orb-sm-reverse">
						<div class="orb-g-33 orb-sm-100">
							<div class="orb-text-frame" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1250">
								<div>
									<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-post-title">
										<h2><?php the_title(); ?></h2>
									</a>
									<p><?php the_content(); ?></p>
									<div class="orb-date"><?php the_excerpt(); ?></div>
								</div>
							</div>
						</div>
						<div class="orb-g-33 orb-sm-100">
							<div class="orb-object-frame">
								<div class="orb-deco"></div>
								<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1200">
									<div class="orb-photo-frame orb-obj-1">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="photo">
									</div>
								</a>
							</div>
						</div>
						<?php while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
							<div class="orb-g-33 orb-sm-100">
								<div class="orb-addition-post" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1300">
									<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link">
										<div class="orb-photo-frame orb-obj-2">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="photo">
										</div>
									</a>
									<div class="orb-post-text">
										<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-post-title">
											<h2><?php the_title(); ?></h2>
										</a>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>

		<!-- <div class="swiper-slide">
			<div class="orb-content" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
				<div class="orb-grid orb-sm-reverse">
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-text-frame" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1250">
							<div>
								<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-post-title">
									<h2>Summer Institute and Conservatory reawaken on-campus life with in-person classes</h2>
								</a>
								<p>Winged Post Volume 23, Issue 1</>
								<div class="orb-date">Article on Page No : 02</div>
							</div>
						</div>
					</div>
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-object-frame">
							<div class="orb-deco"></div>
							<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1200">
								<div class="orb-photo-frame orb-obj-1">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/b1.jpg" alt="photo">
								</div>
							</a>
						</div>
					</div>
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-addition-post" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1300">
							<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link">
								<div class="orb-photo-frame orb-obj-2">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/bb1.jpg" alt="photo">
								</div>
							</a>
							<div class="orb-post-text">
								<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-post-title">
									<h2>Junior Named Student Poet in Scholastic Art and Writing Awards</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="orb-content" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
				<div class="orb-grid orb-sm-reverse">
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-text-frame" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1250">
							<div>
								<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-post-title">
									<h2>Junior Named Student Poet in Scholastic Art and Writing Awards</h2>
								</a>
								<p>Winged Post Volume 23, Issue 1</>
								<div class="orb-date">Article on Page No : 08</div>
							</div>
						</div>
					</div>
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-object-frame">
							<div class="orb-deco"></div>
							<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1200">
								<div class="orb-photo-frame orb-obj-1">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/b2.jpg" alt="photo">
								</div>
							</a>
						</div>
					</div>
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-addition-post" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1300">
							<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link">
								<div class="orb-photo-frame orb-obj-2">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/bb2.jpg" alt="photo">
								</div>
							</a>
							<div class="orb-post-text">
								<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-post-title">
									<h2>The significance of protecting free speech</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="orb-content" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
				<div class="orb-grid orb-sm-reverse">
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-text-frame" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1250">
							<div>
								<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-post-title">
									<h2>The significance of protecting free speech</h2>
								</a>
								<p>Winged Post Volume 23, Issue 1</>
								<div class="orb-date">Art on Page No : 09</div>
							</div>
						</div>
					</div>
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-object-frame">
							<div class="orb-deco"></div>
							<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1200">
								<div class="orb-photo-frame orb-obj-1">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/b3.jpg" alt="photo">
								</div>
							</a>
						</div>
					</div>
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-addition-post" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1300">
							<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link">
								<div class="orb-photo-frame orb-obj-2">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/bb3.jpg" alt="photo">
								</div>
							</a>
							<div class="orb-post-text">
								<a href="https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22" class="orb-post-title">
									<h2>Together, we rise</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="orb-content" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
				<div class="orb-grid orb-sm-reverse">
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-text-frame" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1250">
							<div>
								<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-post-title">
									<h2>Together, we rise</h2>
								</a>
								<p>Winged Post Volume 23, Issue 1</>
								<div class="orb-date">Art on Page No : 12</div>
							</div>
						</div>
					</div>
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-object-frame">
							<div class="orb-deco"></div>
							<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1200">
								<div class="orb-photo-frame orb-obj-1">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/b4.jpg" alt="photo">
								</div>
							</a>
						</div>
					</div>
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-addition-post" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1300">
							<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link">
								<div class="orb-photo-frame orb-obj-2">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/bb4.jpg" alt="photo">
								</div>
							</a>
							<div class="orb-post-text">
								<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-post-title">
									<h2>Within a world of uncertainty</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="orb-content" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
				<div class="orb-grid orb-sm-reverse">
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-text-frame" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1250">
							<div>
								<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_wingedpost_issue6_may2021")' class="orb-post-title">
									<h2>Within a world of uncertainty</h2>
								</a>
								<p>Winged Post Volume 22, Issue 6</>
								<div class="orb-date">Art on Page No : 06</div>
							</div>
						</div>
					</div>
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-object-frame">
							<div class="orb-deco"></div>
							<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_wingedpost_issue6_may2021 ")' class="orb-photo-link" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1200">
								<div class="orb-photo-frame orb-obj-1">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/b5.jpg" alt="photo">
								</div>
							</a>
						</div>
					</div>
					<div class="orb-g-33 orb-sm-100">
						<div class="orb-addition-post" data-swiper-parallax-y="60" data-swiper-parallax-scale="0.5" data-swiper-parallax-duration="1300">
							<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-photo-link">
								<div class="orb-photo-frame orb-obj-2">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/bb5.jpg" alt="photo">
								</div>
							</a>
							<div class="orb-post-text">
								<a href="#" onclick='window.open("https://issuu.com/harkeraqila/docs/harker_upperschool_wingedpost_issue1_21-22")' class="orb-post-title">
									<h2>Summer Institute and Conservatory reawaken on-campus life with in-person classes</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		
	</div>
	<div class="orb-description">
		<div class="orb-text">
			<p>WINGED POST (Newspaper)</p>
			<span></span>
		</div>
		<div class="orb-nav-frame">
			<div class="orb-nav">
				<div class="orb-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/arrow-1.svg" alt="arrow"></div>
				<div class="orb-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/arrow-1.svg" alt="arrow"></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>