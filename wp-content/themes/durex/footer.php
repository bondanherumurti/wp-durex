<div class='footer-section'>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-4'>
              <div class='sprites logo-campaign title'></div>
              <p><?php bloginfo('description'); ?></p>
            </div>
            <div class='col-sm-4'>
              <div class='title'>Broad to you by</div>
              <div class='sprites partners'></div>
            </div>
            <div class='col-sm-4'>
              <div class='title'>Follow</div>
              <ul class='social-media'>
                <li>
                  <a href='https://www.facebook.com/Durex.Id' target="_blank">
                    <div class='sprites fb-small'></div>
                  </a>
                </li>
                <li>
                  <a href='https://twitter.com/Durex_Love' target="_blank">
                    <div class='sprites twitter-small'></div>
                  </a>
                </li>
                <li>
                  <a href='http://www.youtube.com/user/DurexIndonesia' target="_blank">
                    <div class='sprites youtube-small'></div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class='bottom-section'>
        <div class='container'>
          <div class='col-sm-6 left col-xs-12'>
            <?php  wp_nav_menu( array('theme_location' => 'footer' ) ); ?>
          </div>
          <div class='col-sm-4 col-sm-offset-2 hidden-xs'>
            <div class='copyright'>Copyright 2014 All Rights Reserved</div>
          </div>
        </div>
      </div>
    </div>
  <?php wp_footer(); ?>
  </body>
</html>