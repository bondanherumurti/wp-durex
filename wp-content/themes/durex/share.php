<?php
/*
Template Name: Share Page
*/
?>

<?php get_header(); ?>
<div class='row'>
              <div class='col-xs-12'>
                <div class='tagline'>
                  <h1><?php echo get_the_title(); ?></h1>
                  <div class='line pink'></div>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-8'>
                <div class='row someone-like-me'>
                  <div class='col-md-12'>
                  	<?php
                  		// Start the Loop.
	                  	while ( have_posts() ) : the_post();

	                    	// Include the page content template.
	                    	the_content();

	                  	endwhile;
	                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='middle-section'>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-8 bg-purple eqheight'>
              <div class='container-block text-center'>
                <h3 class='white-text'><?php the_field( "intro_title" );  ?></h3>
                <div class='line pink'></div>
                <p><?php the_field( "intro_description" );  ?></p>
                <ul class='share'>
                  <li>
                    <a href='https://www.facebook.com/sharer/sharer.php?u=http://metaspace.co'>
                      <div class='sprites fb-share'></div>
                    </a>
                  </li>
                  <li>
                    <a href='https://twitter.com/home?status=Jangan%20takut%20untuk%20bercerita,%20share%20with%20us%20disini'>
                      <div class='sprites twitter-share'></div>
                    </a>
                  </li>
                  <li>
                    <a href='https://plus.google.com/share?url=Jangan%20takut%20untuk%20bercerita,%20share%20with%20us%20disini'>
                      <div class='sprites google-share'></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class='col-sm-4 left topper eqheight'>
	            <div class='text-center' style='background: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-ayo.jpg); background-size: 100% 100%; height: 333px;'></div>
	            <div class='tosca container-block text-center'>
	              <p class='bigger'>Be part of something awesome</p>
	            </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-4 blok twitter eqheight-social'>
              <div class='container-block'>
                <div class='row'>
                  <div class='col-xs-8'>
                    <p><?php the_field('twitter_intro'); ?></p>
                    <a href="<?php the_field('twitter_url'); ?>" target="_blank"><p class='follow'>
                      <?php the_field('twitter_link_text'); ?>
                      <br>
                      <?php the_field('twitter_username'); ?>
                    </p></a>
                  </div>
                  <div class='col-xs-4'>
                    <div class='sprites big-twitter'></div>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-4 blok facebook eqheight-social'>
              <div class='container-block'>
                <div class='row'>
                  <div class='col-xs-8'>
                    <p><?php the_field('instagram_intro'); ?></p>
                    <a href="<?php the_field('instagram_url'); ?>" target="_blank"><p class='follow' style='margin-top: 81px;'>
                      <?php the_field('instagram_link_text'); ?>
                      <br>
                      <?php the_field('instagram_username'); ?>
                    </p></a>
                  </div>
                  <div class='col-xs-4'>
                    <div class='sprites big-instagram'></div>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-4 blok youtube eqheight-social'>
              <div class='container-block'>
                <div class='row'>
                  <div class='col-xs-8'>
                    <p><?php the_field('youtube_intro'); ?></p>
                    <a href="<?php the_field('youtube_url'); ?>" target="_blank"><p class='follow'>
                      <?php the_field('youtube_link_text'); ?>
                      <br>
                      <?php the_field('youtube_username'); ?>
                    </p></a>
                  </div>
                  <div class='col-xs-4'>
                    <div class='sprites big-youtube'></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>
<script>
  jQuery(window).load(function() {
    if (jQuery(window).width() >= 768) {
  
      var heights = jQuery(".eqheight").map(function() {
        return jQuery(this).height();
      }).get();
  
      var maxHeight = Math.max.apply(null, heights) -90;
      jQuery(".eqheight").height(maxHeight);
  
      var heights_social = jQuery(".eqheight-social").map(function() {
        return jQuery(this).height();
      }).get();
  
      var maxHeight_social = Math.max.apply(null, heights_social);
      jQuery(".eqheight-social").height(maxHeight_social);
  
    }
  });
</script>