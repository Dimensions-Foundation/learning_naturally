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

// WP Member

add_filter( 'authenticate', 'my_login_with_email', 10, 3 );
function my_login_with_email( $user=null, $username, $password ){

    // First, check by username.
    $user = get_user_by( 'login', $username );

    // If the username is invalid, check by email.
    if( ! $user ) {
        $user = get_user_by( 'email', $username );
    }

    // Validate the password.
    if( $user ) {
        if( wp_check_password( $password, $user->user_pass ) ) {
            // If password checks out, return a valid login.
            return $user;
        }
    }

    // Return a failed login.
    return new WP_Error( 'login', "Login Failed" );
}

add_filter( 'wpmem_inc_login_inputs', 'my_login_with_email_form' );
function my_login_with_email_form( $array ){
    $array[0]['name'] = 'Email or Username';
    return $array;
}

add_filter( 'wpmem_sidebar_form', 'my_login_with_email_sidebar' );
function my_login_with_email_sidebar( $string ){
    return str_replace( '>Username<', '>Email or Username<', $string );
}


add_filter( 'wpmem_inc_resetpassword_inputs', 'my_pwd_reset_inputs' );
function my_pwd_reset_inputs( $args ) {
    unset( $args[0] );
    return $args;
}

add_filter( 'wpmem_pwdreset_args', 'my_pwd_reset_args' );
function my_pwd_reset_args( $args ) {
    if( isset( $_POST['email'] ) ) {
        $user = get_user_by( 'email', trim( $_POST['email'] ) );
    } else {
        $user = false;
    }

    if( $user ) {
        $return_array = array(
            'user' => $user->user_login,
            'email' => $_POST['email']
        );
    } else {
        $return_array = array( 'user' => '', 'email' => '' );
    }

    return $return_array;
}

	?>
