<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package WordPress
 * @subpackage Barrier Custom Theme
 * @since Barrier Custom Theme 1.0
 */
/**
 * Determines if post thumbnail can be displayed.
 *
 * @since Barrier Custom Theme 1.0
 *
 * @return bool
 */
function barrier_custom_theme_can_show_post_thumbnail() {
	/**
	 * Filters whether post thumbnail can be displayed.
	 *
	 * @since Barrier Custom Theme 1.0
	 *
	 * @param bool $show_post_thumbnail Whether to show post thumbnail.
	 */
	return apply_filters(
		'barrier_custom_theme_can_show_post_thumbnail',
		! post_password_required() && ! is_attachment() && has_post_thumbnail()
	);
}

/**
 * Gets the SVG code for a given icon.
 *
 * @since Barrier Custom Theme 1.0
 *
 * @param string $group The icon group.
 * @param string $icon  The icon.
 * @param int    $size  The icon size in pixels.
 * @return string
 */
function barrier_custom_theme_get_icon_svg( $group, $icon, $size = 24 ) {
	return Barrier_Custom_Theme_SVG_Icons::get_svg( $group, $icon, $size );
}


/**
 * Creates continue reading text.
 *
 * @since Twenty Twenty-One 1.0
 */
function barrier_custom_theme_continue_reading_text() {
    $continue_reading = sprintf(
        /* translators: %s: Post title. Only visible to screen readers. */
        esc_html__( 'Continue reading %s', 'twentytwentyone' ),
        the_title( '<span class="screen-reader-text">', '</span>', false )
    );

    return $continue_reading;
}