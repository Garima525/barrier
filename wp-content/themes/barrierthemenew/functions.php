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


if ( ! function_exists( 'barrier_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
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

if ( ! function_exists( 'barrier_theme_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
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


add_theme_support( 'custom-logo' );


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
	/*echo '<pre>'; print_r($classes);
	echo '<pre>'; print_r($item);
	echo '<pre>'; print_r($args);*/
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
