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
            <div class='col-sm-8 eqheight'>
              <div class="bg-spread"></div>
            </div>
            <div class='col-sm-4 eqheight'>
              <div class='bg-purple container-block text-center spread-height'>
                <h3 class='white-text'>Spread the word</h3>
                <div class='line pink'></div>
                <ul class='share'>
                  <li>
                    <a onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=XXX_YOUR_FACEBOOK_APP_ID','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=XXX_YOUR_FACEBOOK_APP_ID" target="blank">
                      <div class='sprites fb-share'></div>
                    </a>
                  </li>
                  <li>
                    <a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php the_permalink(); ?>&amp;text=Berani%20bicara%20untuk%20kamu%20dan%20temanmu!%20Mari%20menginspirasi%20dengan%20menciptakan%20dunia%20bebas%20HIV/AIDS%20di%20sini%20%23someonelikeme','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php the_permalink(); ?>&amp;text=Berani%20bicara%20untuk%20kamu%20dan%20temanmu!%20Mari%20menginspirasi%20lewat%20aksi%20untuk%20menciptakan%20dunia%20bebas%20HIV/AIDS%20di" target="blank">
                      <div class='sprites twitter-share'></div>
                    </a>
                  </li>
                  <li>
                    <a onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php the_permalink(); ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="blank">
                      <div class='sprites google-share'></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class='row content'>
            <div class='col-sm-4'>
              <div class='white container-block eqheight2'>
                <h3><?php the_field('blok_1_header'); ?></h3>
                <div class='line green'></div>
                <?php the_field('blok_1_intro'); ?>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class='blue-sky container-block eqheight2'>
                <h3><?php the_field('blok_2_header'); ?></h3>
                <div class='line green'></div>
                <?php the_field('blok_2_intro'); ?>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class='white container-block eqheight2'>
                <h3><?php the_field('blok_3_header'); ?></h3>
                <div class='line green'></div>
                <?php the_field('blok_3_intro'); ?>
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

      var maxHeight = Math.max.apply(null, heights);
      jQuery(".eqheight").height(maxHeight);

      var heights2 = jQuery(".eqheight2").map(function() {
        return jQuery(this).height();
      }).get();

      var maxHeight2 = Math.max.apply(null, heights2);
      jQuery(".eqheight2").height(maxHeight2);
  
    }
  });
</script>