<?php
/*
Template Name: Monthly Archive Template
*/
?>

<?php get_header();?>
<?php 
  $args = array(
    'category_slug' => 'pengetahuan',
    'monthnum' => $_GET['month'],
    'year' => $_GET['year'],
  );
  $the_query = new WP_Query( $args );
  $monthNum = $_GET['month'];
  $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
?>
            <div class='row'>
              <div class='col-xs-12'>
                <div class='tagline'>
                  <h1><?php echo $monthName ?> <?php echo $_GET['year'] ?></h1>
                  <div class='line pink'></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='middle-section'>
        <div class='container'>
          
          <div class='row'>
            <?php if ( $the_query->have_posts() ) : ?>
              <!-- the loop -->
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class='col-sm-4'>
                  <a href="<?php the_permalink(); ?>">
                  <div class='white eqheight'>
                    <div class='container-block'>
                      <?php the_title( '<h3>', '</h3>' ); ?>
                      <div class='line green'></div>
                        <?php the_excerpt(); ?>
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu sapien sagittis, tempus neque eget, commodo eros</p> -->
                    </div>
                  </div>
                  </a>
                </div>
              <?php endwhile; ?>
              <!-- end of the loop -->

              <?php wp_reset_postdata(); ?>

            <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
<?php get_footer(); //d(mix_video_blog_instagram());?>
<script>
  jQuery(window).load(function() {
    if (jQuery(window).width() >= 768) {
  
      var heights = jQuery(".eqheight").map(function() {
        return jQuery(this).height();
      }).get();
      console.log(heights);

      var maxHeight = Math.max.apply(null, heights);
      jQuery(".eqheight").height(maxHeight);
      jQuery(".youtube-video").height(maxHeight);
  
    }
    // jQuery('.middle-section').jscroll({
    //   padding: 5,
    //   contentSelector: '.col-sm-4.eqheight',
    //   debug: true
    // });
  });
</script>
