<?php get_header(); ?>
            <div class='row'>
              <div class='col-xs-12'>
                <div class='tagline'>
                  <h1><?php echo get_the_title(); ?></h1>
                  <div class='line pink'></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='middle-section'>
        <div class='container'>
          <div class='row content'>
            <div class='col-xs-12 white'>
              <div class='container-block'>
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
<?php get_footer(); ?>