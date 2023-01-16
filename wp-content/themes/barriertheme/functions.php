<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'travelbeyond_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function travelbeyond_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'travelbeyond_support' );

if ( ! function_exists( 'travelbeyond_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'travelbeyond-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'travelbeyond-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

/*
** register_nav_menus
*/

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
	    array(
	    'primary-menu' => __( 'Primary Menu' ),
	    'secondary-menu' => __( 'Secondary Menu' )
	    )
	);
}


/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );



/*
** Ajax requests
*/

function get_specific_cat_posts() {

	if($_POST['cat_id'] == '*'){
		$args = array(  
	        'post_type' => 'post',
	        'post_status' => 'publish',
	        'posts_per_page' => 4,
	        'orderby' => 'title', 
	        'order' => 'DESC', 
	    );
	}else{
		$args = array(  
	        'post_type' => 'post',
	        'post_status' => 'publish',
	        'posts_per_page' => 4,
	        'cat' => $_POST['cat_id'],
	        'orderby' => 'title', 
	        'order' => 'DESC', 
	    );
	}

  	

    $loop = new WP_Query( $args ); 
  	if ( $loop->have_posts() ) : 
  		$i = 1;
  		$html = '';
  		while ( $loop->have_posts() ) : $loop->the_post(); 
  			$post_ID = get_the_id(); 
			$category_object = get_the_category($post_id);
			$category_name = $category_object[0]->name;
			$author_id = $post->post_author;
			$count = $category_object->category_count;

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

			
			if($i == 1){
				$html .= '<div class="col-lg-6 '.$i.'">
	                      <div class="rt-item rt-item-box fadeInUp">
	                        <div class="rt-image">
	                          <a href="'.get_permalink().'">
	                            <img decoding="async" loading="lazy" width="551" height="431" src="'.get_the_post_thumbnail_url($post_ID, 'full').'" class="attachment-neeon-size3 size-neeon-size3 wp-post-image" alt="" />
	                          </a>
	                        </div>
	                        <div class="entry-content">
	                          <div class="post-terms">
	                            <a href="#">
	                              <span class="category-style" style="background:'.$background.'">'.$category_name.'</span>
	                            </a>
	                          </div>
	                          <h3 class="entry-title big-title title-animation-black-bold">
	                            <a href="<?php echo get_permalink(); ?>">'.get_the_title().'</a>
	                          </h3>
	                          <ul class="entry-meta">
	                            <li class="post-author">by <a href="#" title="Posts by admin" rel="author">'.get_the_author_meta( 'user_nicename' , $author_id ).'</a>
	                            </li>
	                            <li class="post-date">
	                              <i class="far fa-calendar-alt"></i>'.get_the_date().'
	                            </li>
	                          </ul>
	                        </div>
	                      </div>
	                    </div>';
			}else{
				if($i == 2){
					$html .= '<div class="col-lg-6 '.$i.'">
			                      		<div class="row g-4">';
				}
				$html .= '<div class="col-12 fadeInUp">
			                          <div class="rt-item rt-item-list">
			                            <div class="rt-image">
			                              <a href="'.get_permalink().'">
			                                <img decoding="async" loading="lazy" width="220" height="175" src="'.get_the_post_thumbnail_url($post_ID, 'full').'" class="attachment-neeon-size10 size-neeon-size10 wp-post-image" alt="" />
			                              </a>
			                            </div>
			                            <div class="entry-content">
			                              <div class="post-terms">
			                                <a href="#">
			                                  <span class="category-style" style="background:'.$background.'">'.$category_name.'</span>
			                                </a>
			                              </div>
			                              <h3 class="entry-title small-title title-animation-black-normal">
			                                <a href="'.get_permalink().'">'.get_the_title().'</a>
			                              </h3>
			                              <ul class="entry-meta">
			                                <li class="post-author">by <a href="#" title="Posts by admin" rel="author">'.get_the_author_meta( 'user_nicename' , $author_id ).'</a>
			                                </li>
			                                <li class="post-date">
			                                  <i class="far fa-calendar-alt"></i>'.get_the_date().'
			                                </li>
			                              </ul>
			                            </div>
			                          </div>
			                        </div>';
			    
			    if($count == 2){
			            	$html .= '</div>
			                </div>';
			            }
	            if($count == 3){
	            	$html .= '</div>
	                </div>';
	            }
			    if($i == 4){
					$html .= '</div>
			                </div>';
				}

			}
			$i++;
		endwhile;
	endif;
	echo $html;
	die();
}

add_action( 'wp_ajax_nopriv_get_specific_cat_posts', 'get_specific_cat_posts' );
add_action( 'wp_ajax_get_specific_cat_posts', 'get_specific_cat_posts' );



/*
** Shortcode to display categories on sidebar
*/

function html_code_categories(){
	$categoriesArr = get_categories();
	echo '<pre>'; print_r($categoriesArr);
}

add_shortcode('categories','html_code_categories');