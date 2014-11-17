            <?php $data = load_hashtag_instagram(4);//dd($data);//dd(load_hashtag_twitter());//dd(load_hashtag_instagram());?>
            <?php $data_tw = load_hashtag_twitter(); ?>
            <div class='col-md-4 col-sm-5 set-height'>
              <div class='row'>
                <div class='col-xs-12 reset-padding'>
                  <div class='text-center' style='background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg-ayo.jpg); background-size: 100% 100%; height: 279px;'>
                  </div>
                  <div class='tosca container-block text-center'>
                    <p class='bigger'>Be part of something awesome</p>
                  </div>
                </div>
                <div class='col-xs-12 blue-sky'>
                  <div class='container-block'>
                    <h3>Social Stream</h3>
                    <div class='line green'></div>
                    <div class='twitter-feed'>
                      <p class='italic'><?php echo $data_tw[0]->text; ?></p>
                      <p class='italic-bold'>@<?php echo $data_tw[0]->user->screen_name; ?></p>
                      <div class='sprites badges twitter right'></div>
                    </div>
                  </div>
                </div>
                <div class='col-xs-6'>
                  <img class='youtube' src='<?php echo $data[0]['images']['standard_resolution']['url'];?>'>
                  <div class='sprites badges instagram'></div>
                </div>
                <div class='col-xs-6'>
                  <img class='youtube' src='<?php echo $data[1]['images']['standard_resolution']['url'];?>'>
                  <div class='sprites badges instagram'></div>
                </div>
                <div class='col-xs-12 blue-sky'>
                  <div class='container-block'>
                    <div class='twitter-feed'>
                      <p class='italic'><?php echo $data_tw[1]->text; ?></p>
                      <p class='italic-bold'>@<?php echo $data_tw[1]->user->screen_name; ?></p>
                      <div class='sprites badges twitter second right'></div>
                    </div>
                  </div>
                </div>
                <div class='col-xs-6'>
                  <img class='youtube' src='<?php echo $data[2]['images']['standard_resolution']['url'];?>'>
                  <div class='sprites badges instagram'></div>
                </div>
                <div class='col-xs-6'>
                  <img class='youtube' src='<?php echo $data[3]['images']['standard_resolution']['url'];?>'>
                  <div class='sprites badges instagram'></div>
                </div>
              </div>
            </div>