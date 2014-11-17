<?php get_header(); ?>
			      <?php get_template_part('breadcrumb'); ?>
            <div class='row'>
              <div class='col-md-8 someone-like-me col-sm-7'>
                <div class='container-block'>
                  <h1><?php echo get_the_title(); ?></h1>
                  <div class='line pink'></div>
                  <div class='date'><?php echo get_the_date(); ?></div>
                </div>
              </div>
              <div class='col-md-4 hidden-xs col-sm-5'>
                <div class='share'>
                  <?php ds_social_media_icons(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='middle-section'>
        <div class='container'>
          <div class='row'>
            <div class='col-md-8 col-sm-7 white content inner-height'>
              	<?php
                  // Start the Loop.
                  while ( have_posts() ) : the_post();

                    // Include the page content template.
                    the_content();

                  endwhile;
                ?>
            </div>
            <?php get_template_part( 'single', 'sidebar' ); ?>
          </div>
          <?php get_template_part('single', 'related'); ?>
        </div>
      </div>

<?php get_footer(); ?>
<script type="text/javascript">
	jQuery(window).load(function() {
	    if (jQuery(window).width() >= 768) {
	        jQuery('.inner-height').css({
	            'height': jQuery('.set-height').height()
	        });
	    }
	});
</script>