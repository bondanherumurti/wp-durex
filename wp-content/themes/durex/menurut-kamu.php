<?php
/*
Template Name: Menurut Kamu Template
*/
?>

<?php get_header();?>
            <div class='row'>
              <div class='col-xs-12'>
                <div class='tagline'>
                  <h1>Menurut Kamu ?</h1>
                  <div class='line pink'></div>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-8'>
                <div class='row someone-like-me'>
                  <div class='col-md-12'>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent enim leo, pharetra nec orci eu, lobortis tincidunt mi. Sed malesuada, est in interdum ornare, est justo sodales sapien, a dictum lorem odio vitae nulla</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-8 filter'>
                <div class='container-filter'>
                  <ul>
                    <li>Filter Category:</li>
                    <li>
                      <a href='<?php echo add_query_arg( 'filter', 'blog', get_permalink());?>'>Blog</a>
                    </li>
                    <li>
                      <a href='<?php echo add_query_arg( 'filter', 'photo', get_permalink());?>'>Photos</a>
                    </li>
                    <li>
                      <a href='<?php echo add_query_arg( 'filter', 'video', get_permalink());?>'>Videos</a>
                    </li>
                  </ul>
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
              <div class='white eqheight'>
                <div class='container-block'>
                  <a href="<?php echo $content['permalink'] ?>"><h3><?php echo $content['title']; ?></h3></a>
                  <div class='line green'></div>
                  <?php echo $content['body'];?>
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
  });
</script>
