<?php
/*
Template Name: Monthly Archive Template
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
    jQuery('.middle-section').jscroll({
      padding: 5,
      contentSelector: '.col-sm-4.eqheight',
      debug: true
    });
  });
</script>
