<?php $data_ig = load_hashtag_instagram(4); $data_tw = load_hashtag_twitter(-1);?>

<div class='col-sm-4'>
  <div class='row'>
    <div class='col-xs-12'>
      <div class='white container-block youtube-height'>
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
    <div class='col-xs-12'>
      <div class='white container-block'>
        <div class='twitter-feed'>
          <p class='italic'><?php echo $data_tw[2]->text; ?></p>
          <p class='italic-bold'>@<?php echo $data_tw[2]->user->screen_name; ?></p>
          <div class='sprites badges twitter second'></div>
        </div>
      </div>
    </div>
  </div>
</div>