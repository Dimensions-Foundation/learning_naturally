<?php
/* Link stylesheets */
function resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'resources');

/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	/* Site Navigation - Menu */
register_nav_menus(array( 'primary-nav' => __( 'Primary Menu')));
	
	
	// Feature Image
	add_image_size( 'sidebar-image', 200, 323 );
	
	add_theme_support( 'post-thumbnails' ); 
	
	?>