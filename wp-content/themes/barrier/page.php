<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tehilim
 */

get_header();
?>

<div class="unit-case">
    <div class="unit-content">
    	<?php while ( have_posts() ) : ?>
    	<div class="common-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="100"><h1><?php the_title(); ?></h1></div>
    	<div class="about-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
    		<div class="static-content">
    			<!-- <img src="/build/images/others/about.jpg" alt="about image"> -->
				<?php
				// while ( have_posts() ) :
					the_post();

					the_post_thumbnail();

					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tehilim' ),
						'after'  => '</div>',
					) );

				
				?>
			</div>
		</div>
		<?php endwhile; // End of the loop. ?>

	</div>

    
	
</div>

<?php
get_footer();
