<?php
/*
Template Name: Archives
*/
get_header(); ?>
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
                <ul class="years">
	<?php
		$all_posts = get_posts(array(
		  'posts_per_page' => -1 // to show all posts
		));

		// this variable will contain all the posts in a associative array
		// with three levels, for every year, month and posts.

		$ordered_posts = array();

		foreach ($all_posts as $single) {

		  $year  = mysql2date('Y', $single->post_date);
		  $month = mysql2date('F', $single->post_date);

		  // specifies the position of the current post
		  $ordered_posts[$year][$month][] = $single;

		}

		// iterates the years
		foreach ($ordered_posts as $year => $months) { ?>
		  <li>

		    <h3><?php echo $year ?></h3>
		    <div style="margin: 0;" class= "line green"></div>

		    <ul class="months">
		    <?php foreach ($months as $month => $posts ) { // iterates the moths ?>
		      <li>
		        <h4><?php printf("%s (%d)", $month, count($months[$month])) ?></h4>

		      </li>
		    <?php } // ends foreach for $months ?>
		    </ul> <!-- ul.months -->

		  </li> <?php
		} // ends foreach for $ordered_posts
		?>
		</ul><!-- ul.years -->
              </div>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>