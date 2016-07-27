<?php
/* Link stylesheets */
function ln_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
	// First normalize all styles
	wp_enqueue_style( 'normal_css', get_template_directory_uri() . '/css/normalize.min.css' );
// First normalize all styles
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.min.css' );
	// First normalize all styles
	wp_enqueue_style( 'editor_css', get_template_directory_uri() . '/css/editor.min.css' );
}
add_action('wp_enqueue_scripts', 'ln_resources');

/* -----------------------------------------------------------------------------
*  Add editor  styles to visual editor
* ------------------------------------------------------------------------------
*/
add_editor_style( get_template_directory_uri() . '/css/editor.min.css' );

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




	/* -----------------------------------------------------------------------------
	*  Add site logo
	* ------------------------------------------------------------------------------
	*/
	function themeslug_theme_customizer( $wp_customize ) {
		$wp_customize->add_section( 'themeslug_logo_section' , array(
			'title' 				=> __( 'Logo', 'themeslug' ),
			'priority' 			=> 30,
			'description' 	=> 'Upload a logo to replace the default site name and description in the header',
			) );
			$wp_customize->add_setting( 'themeslug_logo' );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
			'themeslug_logo', array(
				'label' 		=> __( 'Logo', 'themeslug' ),
				'section' 	=> 'themeslug_logo_section',
				'settings' 	=> 'themeslug_logo',
				)
				) );
			}
			add_action('customize_register', 'themeslug_theme_customizer');


			if(!function_exists('get_post_top_ancestor_id')){
				/**
				* Gets the id of the topmost ancestor of the current page. Returns the current
				* page's id if there is no parent.
				*
				* @uses object $post
				* @return int
				*/
				function get_post_top_ancestor_id(){
					global $post;

					if($post->post_parent){
						$ancestors = array_reverse(get_post_ancestors($post->ID));
						return $ancestors[0];
					}

					return $post->ID;
				}
			}


	?>
