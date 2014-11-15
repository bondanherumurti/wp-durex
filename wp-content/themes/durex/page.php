<?php get_header(); ?>
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
          <div class='row content'>
            <div class='col-xs-12 white'>
              <div class='container-block'>
                <?php
                  // Start the Loop.
                  while ( have_posts() ) : the_post();

                    // Include the page content template.
                    the_content();

                  endwhile;
                ?>
                <h3>General</h3>
                <div class='line green'></div>
                <p>RECKITT BENCKISER (BRANDS) LIMITED (us" "we" "our" or "Reckitt Benckiser") respects the privacy of every individual who visits our sites or responds to our interactive advertisements and other communications.</p>
                <p>This privacy policy applies to your use of someonelikeme.com ("Site") by visiting the Site you are accepting and consenting to the practices described in this policy.</p>
                <p>This policy outlines the information Reckitt Benckiser will collect and how we will use that information. This policy will also instruct you on what to do if you do not want your personal information collected or shared when you visit the Site or respond to our advertisements and other communications.</p>
                <p>We may modify this policy from time to time and you should therefore periodically visit this page to be sure that you have read and agree with our most current privacy policy. If there is a material change to these terms we will communicate this to you via email if you have provided one to us.</p>
                <h3>User Content</h3>
                <div class='line green'></div>
                <p>Some features of the Site allow you to provide content, such as written comments.  Content submitted by you to the Site or through this Site or on any social media site where you use "#someonelikeme" (or similar #tag or  link to the Site) may be retained even after you terminate your account, but will not be kept for longer than we need it to fulfil the purpose for which it was collected.</p>
                <p>
                  For further terms governing content submitted to the Site please see our
                  <a href='#'>terms of use.</a>
                </p>
                <h3>Applying to be a global crew member</h3>
                <div class='line green'></div>
                <p>On applying to be a global crew member and "logging in" via Facebook, you consent to us obtaining and processing your profile information from Facebook (including your date of birth, country of residence, email address, likes and interests, number and type of connections, friends and followers you have and posts and comments made).  We will use this information to verify your identity and also to help assess your suitability for participating in the global crew.</p>
                <p>We will not collect any more information from Facebook than what is ordinarily available in the public domain.</p>
                <p>We will display the fact you have applied to become a global crew member and your Facebook profile photo to other people you are friends with on Facebook if they also apply to become a global crew member. We will not automatically post the fact you have applied to become a global crew member on your wall or publically display this in any other way on your Facebook page.</p>
                <p>We ask you to consent to us collecting this information so we can assess your application. You are free to decline, but if you do then you will not be able to proceed with any application to be a global crew member.</p>
                <h3>Global Crew Members</h3>
                <div class='line green'></div>
                <p>If you are successful with your application, and agree to become a global crew member, the information collected as part of your application will be retained and will be used for communicating with you and managing your role as a global crew member. Reckitt Benckiser may also use the responses to the application questions as part of the general Something Like Me content and may make these responses publically available on the Site (and / or associated Someone Like Me social media sites).</p>
                <p>As part of your role as a global crew member you will be expected to share inherently personal information on attitudes towards sex in your country or your sex education. We will provide further explanation of what information we expect you to share within our further correspondence with you and / or any Global Crew Member Agreement or Programme Rules or similar documents.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>