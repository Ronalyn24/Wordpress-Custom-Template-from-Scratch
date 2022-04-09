<?php

function dogma_styles() {	

    wp_enqueue_style( 'adobe-fonts-css', 'https://use.typekit.net/vpl7uut.css', [], null, 'all' );
    wp_enqueue_style( 'flickity-css', get_stylesheet_directory_uri() . '/assets/plugins/flickity/flickity.min.css', [], '2.2.2', 'all' );
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/fontawesome/css/all.css', ['flickity-css'], time(), 'all' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', ['fontawesome-css'], time(), 'all' );
}

add_action( 'wp_enqueue_scripts', 'dogma_styles' );


// Load in our JS
function dogma_scripts() {

    wp_enqueue_script( 'flickity-js', get_stylesheet_directory_uri() . '/assets/plugins/flickity/flickity.pkgd.min.js', array(), '2.2.2', true );
    wp_enqueue_script( 'js-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), time(), true);
}

add_action( 'wp_enqueue_scripts', 'dogma_scripts', 30, 1 );


/**************** REMOVE FILTER *******************/

remove_filter('the_content', 'wpautop'); //stop wp from adding p tags
remove_filter( 'the_excerpt', 'wpautop' ); //stop from adding br tags


/**************** REGISTER MENU *******************/

function register_my_menus() {
    register_nav_menus(
        array(
        'header-menu' => __( 'Primary Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );


/***************** REGISTER WIDGETS AREAS *****************/

function add_widgets_init() {
    register_sidebar( array(
      'name'          => 'Footer Menus',
      'id'            => 'footer-widget-one',
      'before_widget' => '<div class="widget-inner-content">',
      'after_widget'  => '</div>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'add_widgets_init' );


/**************** CUSTOM LOGO *******************/

function config_custom_logo() { 
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme' , 'config_custom_logo' );


/****************** SVG SUPPORTS ********************/

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


/**************** WEB APP MANIFEST *******************/
add_filter( 'web_app_manifest', function( $manifest ) {
    $manifest['short_name'] = 'dogmanyc';
    return $manifest;
} );

/****************** JQUERY MIGRATE ********************/

add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});


/****************** ACF OPTIONS ********************/
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Section Settings',
		'menu_title'	=> 'Global Sections',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Row Settings',
		'menu_title'	=> 'Global Rows',
		'parent_slug'	=> 'theme-general-settings',
	));
}


/**************** REGISTER IMAGE SIZES *******************/

// thumbnail 160 x 160

add_image_size( 'thumbnail_large', 200, 200, true );  

// medium 300 x 300

add_image_size( 'medium_small', 360, 260, true );

add_image_size( 'medium_small-h', 360, 500, true );  

add_image_size( 'medium_medium', 365, 365, true ); 

add_image_size( 'medium_large_small', 558, 257, true );  

add_image_size( 'medium_large-h', 740, 540, true ); 

add_image_size( 'medium_large', 840, 650, true ); 


// large 1024 x 1024

add_image_size( 'large_medium', 900, 1024, true ); 

add_image_size( 'large_large', 1400, 950, true );  

add_image_size( 'extra_large', 1680, 950, true );  


/**************** SRCSET IMAGE SIZES *******************/

function awesome_acf_responsive_image($image_id,$image_size,$max_width){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

	}
}

/**************** set the max image width *******************/

function awesome_acf_max_srcset_image_width() {
	return 1680;
}
add_filter( 'max_srcset_image_width', 'awesome_acf_max_srcset_image_width', 10 , 2 );





