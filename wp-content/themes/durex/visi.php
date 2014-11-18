<?php
/*
Template Name: Visi Page
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
              <div class='col-md-7'>
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
            <div class='col-sm-8'>
              <iframe allowfullscreen='' class='youtube-height' frameborder='0' src='<?php the_field('youtube_video')?>' width='100%'></iframe>
            </div>
            <div class='col-sm-4'>
              <div class='bg-purple container-block text-center spread-height'>
                <h3 class='white-text'>Spread the word</h3>
                <div class='line pink'></div>
                <ul class='share'>
                  <li>
                    <a onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=XXX_YOUR_FACEBOOK_APP_ID','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=XXX_YOUR_FACEBOOK_APP_ID" target="blank">
                    <!-- <a href='https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $post->ID ); ?>'> -->
                      <div class='sprites fb-share'></div>
                    </a>
                  </li>
                  <li>
                    <a href='#'>
                      <div class='sprites twitter-share'></div>
                    </a>
                  </li>
                  <li>
                    <a href='#'>
                      <div class='sprites google-share'></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class='row content'>
            <div class='col-sm-4'>
              <div class='white container-block first-height'>
                <h3><?php the_field('blok_1_header'); ?></h3>
                <div class='line green'></div>
                <?php the_field('blok_1_intro'); ?>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class='blue-sky container-block second-height'>
                <h3><?php the_field('blok_2_header'); ?></h3>
                <div class='line green'></div>
                <?php the_field('blok_2_intro'); ?>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class='white container-block third-height'>
                <h3><?php the_field('blok_3_header'); ?></h3>
                <div class='line green'></div>
                <?php the_field('blok_3_intro'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>