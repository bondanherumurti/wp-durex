<?php
/*
Template Name: Menurut Kamu Template
*/
?>

<?php get_header();?>
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
            <div class='row'>
              <div class='col-sm-8 filter'>
                <div class='container-filter'>
                  <a style="color: #fff;" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Ayo Terlibat' ) ) ); ?>">
                    Klik disini untuk berbagi ceritamu
                  </a>
                </div>
                <div class='clearfix'></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='middle-section'>
        <div class='container'>
          <div class='row'>
          <?php foreach(mix_video_blog_instagram() as $content): ?>
          <?php switch($content['type']): 
          case 'video': ?>
            <div class='col-sm-4'>
              <div class='eqheight'>
                <div class='sprites badges youtube'></div>
                <img class='youtube-play youtube-video' data-video='<?php echo $content['body'];?>' src='<?php echo $content['cover']; ?>'/>
              </div>
            </div>
          <?php break;?>
          <?php case 'blog': ?>
            <div class='col-sm-4'>
              <a href="<?php echo $content['permalink'] ?>">
              <div class='white eqheight'>
                <div class='container-block'>
                  <h3><?php echo $content['title']; ?></h3>
                  <div class='line green'></div>
                  <?php echo $content['body'];?>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu sapien sagittis, tempus neque eget, commodo eros</p> -->
                </div>
              </div>
              </a>
            </div>
          <?php break;?>
          <?php case 'twitter': ?>
            <div class='col-sm-4'>
              <div class='twitter-feed white eqheight' style="margin: 0">
                <div class='container-block'>
                  <h3>@<?php echo $content['title']; ?></h3>
                  <div class='line green'></div>
                  <p><?php echo $content['body'];?></p>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu sapien sagittis, tempus neque eget, commodo eros</p> -->
                </div>
              </div>
            </div>
          <?php break;?>
          <?php case 'instagram': ?>
            <div class='col-sm-4'>
              <div class='eqheight'>
                <img src='<?php echo $content['body']['url'];?>'>
                <div class='sprites badges instagram'></div>
              </div>
            </div>
          <?php break;?>
          <?php endswitch;?>
          <?php endforeach; ?>
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
