<?php

// add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
// function enqueue_parent_theme_style() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
// }

function enqueue_theme_scripts(){
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', true);
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/assets/javascripts/bootstrap.js', true);
	wp_enqueue_script('durex', get_stylesheet_directory_uri().'/assets/javascripts/durex.js', true);
	//dd(is_category('pengetahuan'));
	if(is_category('pengetahuan')){
		wp_enqueue_script('knowledge', get_stylesheet_directory_uri().'/assets/javascripts/knowledge.js', true);
	}
	// if (is_category( 'pengetahuan' )) {
	// 	dd("inside conditional");
 //    	wp_enqueue_script('knowledge', get_stylesheet_directory_uri().'/assets/javascripts/knowledge.js', true);
 //    }
}
add_action( 'wp_footer', 'enqueue_theme_scripts' );