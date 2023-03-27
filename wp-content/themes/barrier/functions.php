<?php
/**
 * Aastha theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Barrier Custom Theme
 * @since Barrier Custom Theme 1.0
 */


if ( ! function_exists( 'barrier_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Aastha 1.0
	 *
	 * @return void
	 */
	function barrier_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'barrier_theme_support' );


//Woocommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce');
}  

add_action( 'after_setup_theme', 'barrier_theme_setup' );
function barrier_theme_setup() {
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'wc-product-gallery-lightbox' );
}


if ( ! function_exists( 'barrier_theme_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Aastha 1.0
	 *
	 * @return void
	 */
	function barrier_theme_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'barrier-theme-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'barrier-theme-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'barrier_theme_styles' );


/**
 * Register nav menus.
 *
 * @since Aastha 1.0
 *
 * @return void
 */

function barrier_theme_menu_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
 }

add_action( 'after_setup_theme', 'barrier_theme_menu_setup' );



/**
 * Adding classes to nav menus.
 *
 * @since Aastha 1.0
 *
 * @return void
 */

/*function add_additional_class_on_li($classes, $item, $args) {
	// echo '<pre>'; print_r($classes);
    if(isset($args->add_li_class)) {

    	if( in_array('current-menu-item', $classes) ){
	        $classes[] = 'orb-current';
	    }

        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);*/

// Add block patterns
// require get_template_directory() . '/inc/block-patterns.php';


add_theme_support( 'post-thumbnails' );
add_theme_support('woocommerce');




/*Registering Side bars*/


function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Front page sidebar', 'wpb'),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer sidebar 1', 'wpb' ),
        'id' => 'footer-sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<p id="%1$s" class="mt-3 widget %2$s">',
        'after_widget' => '</p>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer sidebar 2', 'wpb' ),
        'id' => 'footer-sidebar-2',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer sidebar 3', 'wpb' ),
        'id' => 'footer-sidebar-3',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer sidebar 4', 'wpb' ),
        'id' => 'footer-sidebar-4',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );

}
 
add_action( 'widgets_init', 'wpb_widgets_init' );





/*Manage nav menus classes*/

function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    if(in_array('menu-item-has-children',$item->classes)){
       	if(isset($args->add_parent_li_class)) {
       		$classes[] = $args->add_parent_li_class;
       	}
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


class Child_Wrap extends Walker_Nav_Menu{
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		// Change sub-menu to dropdown menu
		$output .= "\n$indent<ul class=\"dropdown-menu\">\n";
	}

	function start_el ( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		// Most of this code is copied from original Walker_Nav_Menu
		global $wp_query, $wpdb;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$has_children = $wpdb->get_var("SELECT COUNT(meta_id)
		        FROM wp_postmeta
		        WHERE meta_key='_menu_item_menu_item_parent'
		        AND meta_value='".$item->ID."'");

		$output .= $indent . '<li' . $id . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		// Check if menu item is in main menu
		if ( $depth == 0 && $has_children > 0  ) {
			// These lines adds your custom class and attribute
			$attributes .= ' class="dropdown-toggle"';
			$attributes .= ' data-bs-toggle="dropdown"';
		}elseif($item->menu_item_parent > 0){
			$attributes .= ' class="dropdown-item"';
		}
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

		// Add the caret if menu level is 0
		if ( $depth == 0 && $has_children > 0  ) {
			$item_output .= ' <i class="fa fa-chevron-down ms-2"></i>';
		}

		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
/*End*/


/*Set option page in ACF*/

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}

// remove wp version number from scripts and styles
function remove_css_js_version( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );


function generateRandomString($length = 4) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


/*Show category title on product title*/

function wpa89819_wc_single_product(){

    $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );

    if ( $product_cats && ! is_wp_error ( $product_cats ) ){

        $single_cat = array_shift( $product_cats ); ?>

        <p itemprop="name" class="product_category_title"><span><?php echo $single_cat->name; ?></span></p>

<?php }
}
add_action( 'woocommerce_single_product_summary', 'wpa89819_wc_single_product', 2 );


// SVG Icons class.
require get_template_directory() . '/classes/class-barrier-custom-theme-svg-icons.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';
add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields' );
 function addBootstrapToCheckoutFields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            $field['class'][] = 'form-group'; 

            // add form-control to the actual input
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}

/*----- Start to add the cart icon on header menu -----*/
add_filter("woocommerce_add_to_cart_fragments", "wc_refresh_mini_cart_count");
function wc_refresh_mini_cart_count($fragments)
{
ob_start(); ?>
<span id="mini-cart-count" class="pcount">
<?php echo WC()->cart->get_cart_contents_count(); ?>
</span>
<?php
 $fragments[".pcount"] = ob_get_clean();
 return $fragments;
}
/*-----end-----*/