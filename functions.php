<?php

/* Theme customization from the base template to change the default headers */
function madelinesparty_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		//'default-text-color'     => '220e10',
		'default-image'          => get_stylesheet_directory_uri().'/images/headers/mpheader.jpg',


		// Callbacks for styling the header and the admin preview.
		//'wp-head-callback'       => 'twentythirteen_header_style',
		//'admin-head-callback'    => 'twentythirteen_admin_header_style',
		//'admin-preview-callback' => 'twentythirteen_admin_header_image',
	);
	add_theme_support( 'custom-header', $args );

	/*
	 * Default custom headers packaged with the theme.
	 * %s is a placeholder for the theme template directory URI.
	 */
	register_default_headers( array(
		'mpheader' => array(
			'url'           => get_stylesheet_directory_uri().'/images/headers/mpheader.jpg',
			'thumbnail_url' => get_stylesheet_directory_uri().'/images/headers/mpheader-thumbnail.jpg',
			'description'   => _x( 'MP Std', 'Standard MP Header', 'madelines_party_theme' )
		),
	) );
}
add_action( 'after_setup_theme', 'madelinesparty_custom_header_setup', 11 );

/* Hide the toolbar for the front side of the website. */
add_filter('show_admin_bar', '__return_false');

/**
 * Override the parent theme's meta to only show the post date.
 */
function twentythirteen_entry_meta() {
	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		twentythirteen_entry_date();
}

/**
 * Override the parent theme's post navigation links.
 */
function twentythirteen_post_nav() {
	global $post;

}

