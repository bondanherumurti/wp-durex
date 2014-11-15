<?php get_header(); ?>
			<div class='row'>
              <div class='col-xs-12'>
                <ol class='breadcrumb'>
                  <li>
                    <a href='#'>
                      <div class='sprites home'></div>
                    </a>
                  </li>
                  <li>
                    <a href='#'><?php echo get_the_category()[0]->name; ?></a>
                  </li>
                </ol>
              </div>
            </div>
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
                  <img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/share.png'>
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
          <div class='row'>
            <div class='col-sm-4'>
              <div class='container-block'>
                <h5>Related Post</h5>
                <div class='line green' style='margin-bottom: 25px;'></div>
              </div>
            </div>
          </div>
          <div class='row related-post'>
            <div class='col-sm-4'>
              <div class='white container-block'>
                <h3>Does everyone think about sex in the same way?</h3>
                <div class='line green'></div>
                <p>Lorem ipsum dolor sit amet, consectetur. Duis porta eros at nisl vehicula.</p>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class='blue-sky container-block'>
                <h3>How much do you really know about sex?</h3>
                <div class='line green'></div>
                <p>Lorem ipsum dolor sit amet, consectetur. Duis porta eros at nisl vehicula.</p>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class='white container-block'>
                <h3>Chlamydia: The Stealthy STI</h3>
                <div class='line green'></div>
                <p>Lorem ipsum dolor sit amet, consectetur. Duis porta eros at nisl vehicula.</p>
              </div>
            </div>
          </div>
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