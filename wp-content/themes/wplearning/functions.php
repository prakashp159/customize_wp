<?php

/*

* This is our function file.

*/

add_theme_support('custom-logo');
function wplearning_theme_scripts()
{
	
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('owl-carousel-css',get_template_directory_uri().'/owl-carousel/assets/owl.carousel.min.css');
	wp_enqueue_style('owl-carousel-css',get_template_directory_uri().'/owl-carousel/assets/owl.theme.default.min.css');
	





	wp_enqueue_script('jquery');

	wp_enqueue_style('style',get_stylesheet_uri());

	wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');

	wp_enqueue_script('owl-carousel-js',get_template_directory_uri().'/owl-carousel/owl.carousel.min.js');

	wp_enqueue_script('my-js',get_template_directory_uri().'/assets/js/my-js1.js', FALSE, NULL, true);
	
	wp_enqueue_script('jquery-new','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');


}
add_action( 'wp_enqueue_scripts', 'wplearning_theme_scripts' );



// function wplearning_woocommerce_support()
// {
//     add_theme_support('woocommerce');
// }

// add_action( 'after_setup_theme', 'wplearning_woocommerce_support' );
