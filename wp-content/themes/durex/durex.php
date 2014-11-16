<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

            <div class='row'>
              <div class='col-xs-12'>
                <div class='tagline' style="margin: 45px 0;">
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
            <div class='row'>
              <div class='col-md-8'>
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Ayo Terlibat' ) ) ); ?>">
                  <div class='row someone-like-me'>
                    <div class='col-md-10'>
                      <h4><?php the_field('intro_for_ayo_terlibat'); ?></h4>
                    </div>
                    <div class='col-md-2'>
                      <div class='sprites more center'></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='middle-section'>
        <div class='container'>
          <div class='row'>
            <?php get_template_part('home', 'socialstream'); ?>
            <div class='col-sm-8'>
              <div class='row'>
                <?php get_template_part('home', 'blog'); ?>
                <div class='col-sm-6 left topper height'>
                  <div class='text-center' style='background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg-ayo.jpg); background-size: 100% 100%; height: 333px;'>
                  </div>
                  <div class='tosca container-block text-center'>
                    <p class='bigger'>Be part of something awesome</p>
                  </div>
                </div>
                <div class='col-sm-12'>
                  <div class='bg-purple container-block text-center'>
                    <h3 class='white-text'>Someone like me</h3>
                    <div class='line pink'></div>
                    <p><?php the_field('campaign_description'); ?></p>
                  </div>
                </div>
                <?php get_template_part('home', 'knowledge'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>

<script type="text/javascript">
  jQuery('.youtube-height').css({
    'height': jQuery('.height').height() - 90
  });
</script>