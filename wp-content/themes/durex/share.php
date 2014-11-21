<?php
/*
Template Name: Share Page
*/
?>

<?php get_header(); ?>
<div class='row'>
              <div class='col-xs-12'>
                <div class='tagline'>
                  <h1>Dare to Speak</h1>
                  <h1>Dare to Understand</h1>
                  <h1>Dare to take action</h1>
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
                    <a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php the_permalink(); ?>&amp;text=Tulis%20cerita%20kamu%20disini%20dan%20berbagi%20untuk%20menginspirasi.%20%23SomeOneLikeMe','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php the_permalink(); ?>&amp;text=Tulis%20cerita%20kamu%20disini%20dan%20berbagi%20untuk%20menginspirasi.%20%23SomeOneLikeMe" target="blank">
                      <div class='sprites twitter-share'></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class='col-sm-4 left eqheight'>
	            <div class='text-center' style='background: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-ayo.jpg); background-size: 100% 100%; height: 379px;'></div>
	            <div class='tosca container-block text-center'>
	            </div>
            </div>
          </div>
          <div class='row'>
            <a href="<?php the_field('twitter_url'); ?>" target="_blank">
              <div class='col-sm-4 blok twitter eqheight-social'>
                <div class='container-block'>
                  <div class='row'>
                    <div class='col-xs-8'>
                      <p><?php the_field('twitter_intro'); ?></p>
                      <p class='follow'>
                        <?php the_field('twitter_link_text'); ?>
                        <br>
                        <?php the_field('twitter_username'); ?>
                      </p>
                    </div>
                    <div class='col-xs-4'>
                      <div class='sprites big-twitter'></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <a href="<?php the_field('instagram_url'); ?>" target="_blank">
              <div class='col-sm-4 blok facebook eqheight-social'>
                <div class='container-block'>
                  <div class='row'>
                    <div class='col-xs-8'>
                      <p><?php the_field('instagram_intro'); ?></p>
                      <p class='follow' style='margin-top: 81px;'>
                        <?php the_field('instagram_link_text'); ?>
                        <br>
                        <?php the_field('instagram_username'); ?>
                      </p>
                    </div>
                    <div class='col-xs-4'>
                      <div class='sprites big-instagram'></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <a href="<?php the_field('youtube_url'); ?>" target="_blank">
              <div class='col-sm-4 blok youtube eqheight-social'>
                <div class='container-block'>
                  <div class='row'>
                    <div class='col-xs-8'>
                      <p><?php the_field('youtube_intro'); ?></p>
                      <p class='follow'>
                        <?php the_field('youtube_link_text'); ?>
                        <br>
                        <?php the_field('youtube_username'); ?>
                      </p>
                    </div>
                    <div class='col-xs-4'>
                      <div class='sprites big-youtube'></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
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

      console.log(heights);
  
      var maxHeight = Math.max.apply(null, heights);
      jQuery(".eqheight").height(maxHeight);
  
      var heights_social = jQuery(".eqheight-social").map(function() {
        return jQuery(this).height();
      }).get();
  
      var maxHeight_social = Math.max.apply(null, heights_social);
      jQuery(".eqheight-social").height(maxHeight_social);
  
    }
  });
</script>