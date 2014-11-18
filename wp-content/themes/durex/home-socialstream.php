<?php $data_ig = load_hashtag_instagram(4); $data_tw = load_hashtag_twitter(2); ?>

<div class='col-sm-4'>
  <div class='row'>
    <div class='col-xs-12'>
      <img class='youtube-video youtube-height' data-video='<?php the_field('home_video_url') ?>' src='<?php the_field('display_image'); ?>'>
      <div class='sprites badges youtube'></div>
    </div>
    <div class='col-xs-12'>
      <div class='white container-block'>
        <h3>Social Stream</h3>
        <div class='line green'></div>
        <div class='twitter-feed'>
          <p class='italic'><?php echo $data_tw[0]->text; ?></p>
          <p class='italic-bold'>@<?php echo $data_tw[0]->user->screen_name; ?></p>
          <div class='sprites badges twitter'></div>
        </div>
      </div>
    </div>
    <div class='col-xs-6 right'>
      <img src='<?php echo $data_ig[0]['images']['standard_resolution']['url'];?>'>
      <div class='sprites badges instagram'></div>
    </div>
    <div class='col-xs-6 left'>
      <img src='<?php echo $data_ig[1]['images']['standard_resolution']['url'];?>'>
      <div class='sprites badges instagram'></div>
    </div>
    <div class='col-xs-12'>
      <div class='white container-block'>
        <div class='twitter-feed'>
          <p class='italic'><?php echo $data_tw[1]->text; ?></p>
          <p class='italic-bold'>@<?php echo $data_tw[1]->user->screen_name; ?></p>
          <div class='sprites badges twitter second'></div>
        </div>
      </div>
    </div>
    <div class='col-xs-6 right'>
      <img src='<?php echo $data_ig[2]['images']['standard_resolution']['url'];?>'>
      <div class='sprites badges instagram'></div>
    </div>
    <div class='col-xs-6 left'>
      <img src='<?php echo $data_ig[3]['images']['standard_resolution']['url'];?>'>
      <div class='sprites badges instagram'></div>
    </div>
  </div>
</div>