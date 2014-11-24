<?php

// add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
// function enqueue_parent_theme_style() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
// }

function enqueue_theme_scripts(){
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', true);
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/assets/javascripts/bootstrap.js', true);
	wp_enqueue_script('durex', get_stylesheet_directory_uri().'/assets/javascripts/durex.js', true);
	wp_enqueue_script('popupjs', get_stylesheet_directory_uri().'/assets/javascripts/popup.js', true);
	//dd(is_category('pengetahuan'));
	if(is_category('pengetahuan')){
		wp_enqueue_script('knowledge', get_stylesheet_directory_uri().'/assets/javascripts/knowledge.js', true);
	}
	if ( is_page_template( 'menurut-kamu.php' ) ) {
		wp_enqueue_script('jscroll', get_stylesheet_directory_uri().'/assets/javascripts/jquery.jscroll.min.js', true);
	}
	// if (is_category( 'pengetahuan' )) {
	// 	dd("inside conditional");
 //    	wp_enqueue_script('knowledge', get_stylesheet_directory_uri().'/assets/javascripts/knowledge.js', true);
 //    }
}
add_action( 'wp_footer', 'enqueue_theme_scripts' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'footer', 'Footer Menu' );
}

function load_hashtag_instagram($limit){

	$api = 'https://api.instagram.com/v1/tags/someonelikeme/media/recent?client_id=d5f3ef48b54d4bcc814723ea773f82e0'; //api request (edit this to reflect tags)
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
	return $limit != -1 ? array_slice($return['data'], 0, $limit) : $return['data'];
}


require_once(get_stylesheet_directory()."/lib/TwitterAPIExchange.php");
function load_hashtag_twitter($limit){
	$settings = array(
    'oauth_access_token' => "24874329-U0KzhXoIsa8JBo5dPeSf16L7Vl2uzemk4p5e5usJY",
    'oauth_access_token_secret' => "YV0xtAqDFruDbDsWIAV8IWvQZ79FRtfnZZ0mrFC1jJPx8",
    'consumer_key' => "cwpADas2UmO48V3IrntGzUM8Z",
    'consumer_secret' => "HcXG80I7hVuOjkuAaNKTpJbKMmACkpEfCFmgP5GuA4kb3H6KgV"
	);

	$url = 'https://api.twitter.com/1.1/search/tweets.json';
	$getfield = '?q=%23someonelikeme&result_type=recent';
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
	// return array_slice(json_decode($result)->statuses, 0, 2);
	return $limit != -1 ? array_slice(json_decode($result)->statuses, 0, 2) : json_decode($result)->statuses;
}

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

function set_body_id() {
	if(is_category()){
		$categories = get_the_category();
		return strtolower($categories[0]->slug);
	} 
	if ( is_page_template( 'share.php' ) ) {
		return "ayo_terlibat";
	}
	if ( is_page_template( 'visi.php' ) ) {
		return "visi";
	}
	if ( is_page_template( 'durex.php' ) ) {
		return "home";
	}
	if ( is_page_template( 'menurut-kamu.php' ) ) {
		return "menurut_kamu";
	}
	if(is_page()){
		return "page";
	} 
	if(is_single()){
		return "inner";
	} 
}

function mix_video_blog_instagram(){
	$result = array();
	$args = array(
      'tax_query' => array(
        array(
          'taxonomy' => 'post_format',
          'field'    => 'slug',
          'terms'    => 'post-format-video',
          'order' => 'DESC',
          'max_num_pages' => '8',
        )
      )
    );
	
	$post_blogs = get_posts(array(
		'category_name' => 'blogs',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'max_num_pages' => '8',
		)
	);
	$instagram_contents = load_hashtag_instagram(8);
	$twitter_contents = load_hashtag_twitter(8);

	// dd($twitter_contents);
	// d($instagram_contents);
	// d($post_blogs);
	// d($_GET);
	$post_video = get_posts($args);
	//sorting timestamp
	if($_GET['filter']){
		switch ($_GET['filter']) {
			case 'video':
					foreach($post_video as $post){
						$container = array();
						$container['date_created'] = strtotime($post->post_date);
						$container['title'] = $post -> post_title;
						$container['body'] = $post -> post_content;
						$container['type'] = 'video';
						$container['cover'] = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
						$result[strtotime($post->post_date)] = $container;
					}
				break;
			case 'blog':
				foreach($post_blogs as $post){
					$container = array();
					$container['date_created'] = strtotime($post->post_date);
					$container['title'] = $post -> post_title;
					$container['body'] = $post -> post_excerpt;
					$container['permalink'] = get_permalink($post ->ID); 
					$container['type'] = 'blog';
					$result[strtotime($post->post_date)] = $container;
				}
				break;
			case 'photo':
				foreach ($instagram_contents as $content) {
						$container = array();
						$container['date_created'] = $content['created_time'];
						$container['title'] = $content['caption'];
						$container['body'] = $content['images']['standard_resolution'];
						$container['type'] = 'instagram';
						$result[$content['created_time']] = $container;
				}	
				break;
			default:
				# code...
				break;
		}
	}
	else {
		foreach($post_video as $post){
			$container = array();
			$container['date_created'] = strtotime($post->post_date);
			$container['title'] = $post -> post_title;
			$container['body'] = $post -> post_content;
			$container['type'] = 'video';
			$container['cover'] = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
			$result[strtotime($post->post_date)] = $container;
		}

		foreach($post_blogs as $post){
			$container = array();
			$container['date_created'] = strtotime($post->post_date);
			$container['title'] = $post -> post_title;
			$container['body'] = $post -> post_excerpt;
			$container['permalink'] = get_permalink($post ->ID); 
			$container['type'] = 'blog';
			$result[strtotime($post->post_date)] = $container;
		}

		foreach ($instagram_contents as $content) {
				$container = array();
				$container['date_created'] = $content['created_time'];
				$container['title'] = $content['caption'];
				$container['body'] = $content['images']['standard_resolution'];
				$container['type'] = 'instagram';
				$result[$content['created_time']] = $container;
		}

		foreach ($twitter_contents as $content) {
				$container = array();
				$container['date_created'] = strtotime($content->created_at);
				$container['title'] = $content->user->screen_name;
				$container['body'] = $content->text;
				$container['type'] = 'twitter';
				$result[strtotime($content->created_at)] = $container;
		}
	}



	krsort($result);
	// dd($result);
	return $result;
}

/** Get tweet count from Twitter API (v1.1) */

function ds_post_tweet_count( $post_id ) {
 
  // Check for transient
  if ( ! ( $count = get_transient( 'ds_post_tweet_count' . $post_id ) ) ) {
 
    // Do API call
    $response = wp_remote_retrieve_body( wp_remote_get( 'https://cdn.api.twitter.com/1/urls/count.json?url=' . urlencode( get_permalink( $post_id ) ) ) );
 
    // If error in API call, stop and don't store transient
    if ( is_wp_error( $response ) )
      return 'error';
 
    // Decode JSON
    $json = json_decode( $response );
 
    // Set total count
    $count = absint( $json->count );
 
    // Set transient to expire every 30 minutes
    set_transient( 'ds_post_tweet_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
 
  }
 
 return absint( $count );
 
}  /** Twitter End */
 
 
/** Get like count from Facebook FQL  */

function ds_post_like_count( $post_id ) {
 
  // Check for transient
  if ( ! ( $count = get_transient( 'ds_post_like_count' . $post_id ) ) ) {
 
    // Setup query arguments based on post permalink
    $fql  = "SELECT url, ";
    //$fql .= "share_count, "; // total shares
    //$fql .= "like_count, "; // total likes
    //$fql .= "comment_count, "; // total comments
    $fql .= "total_count "; // summed total of shares, likes, and comments (fastest query)
    $fql .= "FROM link_stat WHERE url = '" . get_permalink( $post_id ) . "'";
 
    // Do API call
    $response = wp_remote_retrieve_body( wp_remote_get( 'https://api.facebook.com/method/fql.query?format=json&query=' . urlencode( $fql ) ) );
 
    // If error in API call, stop and don't store transient
    if ( is_wp_error( $response ) )
      return 'error';
 
    // Decode JSON
    $json = json_decode( $response );
 
    // Set total count
    $count = absint( $json[0]->total_count );
 
    // Set transient to expire every 30 minutes
    set_transient( 'ds_post_like_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
 
  }
 
 return absint( $count );
 
} /** Facebook End  */


/** Get share count from Google Plus */

function ds_post_plusone_count($post_id) {

	// Check for transient
	if ( ! ( $count = get_transient( 'ds_post_plus_count' . $post_id ) ) ) {
     
	    $args = array(
	            'method' => 'POST',
	            'headers' => array(
	                // setup content type to JSON 
	                'Content-Type' => 'application/json'
	            ),
	            // setup POST options to Google API
	            'body' => json_encode(array(
	                'method' => 'pos.plusones.get',
	                'id' => 'p',
	                'method' => 'pos.plusones.get',
	                'jsonrpc' => '2.0',
	                'key' => 'p',
	                'apiVersion' => 'v1',
	                'params' => array(
	                    'nolog'=>true,
	                    'id'=> get_permalink( $post_id ),
	                    'source'=>'widget',
	                    'userId'=>'@viewer',
	                    'groupId'=>'@self'
	                ) 
	             )),
	             // disable checking SSL sertificates               
	            'sslverify'=>false
	        );
	     
	    // retrieves JSON with HTTP POST method for current URL  
	    $json_string = wp_remote_post("https://clients6.google.com/rpc", $args);
	     
	    if (is_wp_error($json_string)){
	        // return zero if response is error                             
	        return "0";             
	    } else {        
	        $json = json_decode($json_string['body'], true);                    
	        // return count of Google +1 for requsted URL
	        $count = intval( $json['result']['metadata']['globalCounts']['count'] ); 
	    }
	    
	    // Set transient to expire every 30 minutes
		set_transient( 'ds_post_plus_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
	    
	}
 
	return absint( $count );    
} /** Google Plus End */


/** Get Flattr count */

function ds_post_flattr_count( $post_id ) {
 
  // Check for transient
  if ( ! ( $count = get_transient( 'ds_post_flattr_count' . $post_id ) ) ) {
 
    // Check if URL exists
    $response = wp_remote_retrieve_body( wp_remote_get( 'https://api.flattr.com/rest/v2/things/lookup/?url=' . urlencode( get_permalink( $post_id ) ) ) );
 
    // Decode JSON
    $json = json_decode( $response );
 
	// Get URL ID
	$message = $json->message;
	
	if ($message == "not_found") {
      return 0;
	}
	
	else {
		$location = $json->location;
		$flattrs = $json->flattrs;
		$count = $flattrs;
	}
	
	// Set transient to expire every 30 minutes
	set_transient( 'ds_post_flattr_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
 
  }
 
 return absint( $count );
 
} /** Flattr End */


/** Get Count from LinkedIn */

function ds_post_linkedin_count( $post_id ) {
 
  // Check for transient
  if ( ! ( $count = get_transient( 'ds_post_linkedin_count' . $post_id ) ) ) {
 
    // Do API call
    $response = wp_remote_retrieve_body( wp_remote_get( 'https://www.linkedin.com/countserv/count/share?url=' . urlencode( get_permalink( $post_id ) ) . '&format=json' ) );
 
    // If error in API call, stop and don't store transient
    if ( is_wp_error( $response ) )
      return 'error';
 
    // Decode JSON
    $json = json_decode( $response );
 
    // Set total count
    $count = absint( $json->count );
 
    // Set transient to expire every 30 minutes
    set_transient( 'ds_post_linkedin_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
 
  }
 
 return absint( $count );

}  /** LinkedIn End */

 
/** Markup for Social Media Icons */

function ds_social_media_icons() {
	
  // Get the post ID
  $post_id = get_the_ID(); ?>
 
  <div class="social-icons-wrap">
	<ul class="social-icons">
		<!-- Facebook Button-->
		<li class="social-icon facebook">
			<span class="share-count"><?php echo ds_post_like_count( $post_id ); ?><br/> Likes</span>
			<a onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=XXX_YOUR_FACEBOOK_APP_ID','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=XXX_YOUR_FACEBOOK_APP_ID" target="blank">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb-share.png"/>		
			</a>
		</li>
		<!-- Twitter Button -->
		<li class="social-icon twitter">
			<span class="share-count"><?php echo ds_post_tweet_count( $post_id ); ?><br/>Tweets</span>
			<a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&amp;via=durex_love','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&amp;via=XXX_YOUR_TWITTER_HANDLE" target="blank">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tw-share.png"/>
			</a>
		</li>
		<!-- Google + Button-->
		<li class="social-icon google-plus">
			<span class="share-count"><?php echo ds_post_plusone_count( $post_id ); ?></br>Posts</span>
			<a onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php the_permalink(); ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="blank">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gplud.png"/>
			</a>
		</li>
	</ul>
  </div><!-- .social-icons-wrap -->
 
<?php }
