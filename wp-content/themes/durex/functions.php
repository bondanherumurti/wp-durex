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

function load_hashtag_instagram(){
	$instagramClientID = '9110e8c268384cb79901a96e3a16f588';

	$api = 'https://api.instagram.com/v1/tags/belsbee/media/recent?client_id=d5f3ef48b54d4bcc814723ea773f82e0'; //api request (edit this to reflect tags)
	$cache = './ig-cache.json';

	if(file_exists($cache) && filemtime($cache) > time() - 60*60){
	    // If a cache file exists, and it is newer than 1 hour, use it
	    $result = file_get_contents($cache); //Decode as an json array
	}
	else{
	    // Make an API request and create the cache file
	    // For example, gets the 32 most popular images on Instagram
	    $response = wp_remote_get($api); //change request path to pull different photos

	    $images = array();

	    if($response){
	        file_put_contents($cache,$response['body']); //Save as json
	        $result = $response['body'];
	    }
	}

	$return = json_decode($result,true);
	return array_slice($return['data'], 0, 4);
}


require_once(get_stylesheet_directory()."/lib/TwitterAPIExchange.php");
function load_hashtag_twitter(){
	$settings = array(
    'oauth_access_token' => "24874329-U0KzhXoIsa8JBo5dPeSf16L7Vl2uzemk4p5e5usJY",
    'oauth_access_token_secret' => "YV0xtAqDFruDbDsWIAV8IWvQZ79FRtfnZZ0mrFC1jJPx8",
    'consumer_key' => "cwpADas2UmO48V3IrntGzUM8Z",
    'consumer_secret' => "HcXG80I7hVuOjkuAaNKTpJbKMmACkpEfCFmgP5GuA4kb3H6KgV"
	);

	$url = 'https://api.twitter.com/1.1/search/tweets.json';
	$getfield = '?q=%23superbowl&result_type=recent';
	$requestMethod = 'GET';
	$cache = './twitter-cache.json';

	if(file_exists($cache) && filemtime($cache) > time() - 60*60){
	    // If a cache file exists, and it is newer than 1 hour, use it
	    $result = file_get_contents($cache); //Decode as an json array
	}
	else{
	    // Make an API request and create the cache file
	    // For example, gets the 32 most popular images on Instagram
	    $twitter = new TwitterAPIExchange($settings);
			$response = $twitter->setGetfield($getfield)
	             ->buildOauth($url, $requestMethod)
	             ->performRequest();

	    if($response){
	        file_put_contents($cache,$response); //Save as json
	        $result = $response;
	    }
		}
	return array_slice(json_decode($result)->statuses, 0, 2);
}
