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

function set_class($image, $color){
	switch ($color) {
	    case "pink":
	        $rgb = "rgba(237, 44, 100, 1), rgba(237, 44, 100, 0.8)";
	        if($image){
				return "<div class='container-block bg-knowledge-pink image eqheight' style='background: linear-gradient(".$rgb."), url(".$image."); background-size: 100% 100%;'>";
			} else {
				return "<div class='container-block bg-knowledge-pink image eqheight'>";
			}
	        break;
	    case "green":
	        $rgb = "rgba(90, 218, 177, 0.8), rgba(90, 218, 177, 0.8)";
	        if($image){
				return "<div class='col-sm-4 bg-knowledge-image eqheight' style='background: linear-gradient(".$rgb."), url(".$image."); background-size: 100% 100%;'>";
			} else {
				return "<div class='col-sm-4 bg-knowledge-image eqheight'>";
			}
	        break;
	    case "green-topper":
	        $rgb = "rgba(90, 218, 177, 0.8), rgba(90, 218, 177, 0.8)";
	        if($image){
				return "<div class='col-sm-4 topper bg-knowledge-image' style='background: linear-gradient(".$rgb."), url(".$image."); background-size: 100% 100%;'>";
			} else {
				return "<div class='col-sm-4 topper bg-knowledge-image'>";
			}
	        break;
	    case "featured":
	        $rgb = "rgba(60, 3, 110, 0.8), rgba(60, 3, 110, 0.8)";
	        if($image){
				return "<div class='col-sm-8 featured' style='background: linear-gradient(".$rgb."), url(".$image."); background-size: 100%;'>";
			} else {
				return "<div class='col-sm-8 featured'>";
			}
	        break;
	    case "purple":
	        $rgb = "rgba(60, 3, 110, 0.8), rgba(60, 3, 110, 0.8)";
	        if($image){
				return "<div class='container-block bg-purple image eqheight' style='background: linear-gradient(".$rgb."), url(".$image."); background-size: 100% 100%;'>";
			} else {
				return "<div class='container-block bg-purple image eqheight'>";
			}
	}
}