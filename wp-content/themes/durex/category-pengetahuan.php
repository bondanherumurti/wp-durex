<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
        <div class='row'>
          <div class='col-xs-12'>
            <div class='tagline'>
              <h1>
                <?php
                  if(is_category('pengetahuan')){
                    //dd(get_the_category());
                    echo get_the_category()[0]->name;
                  } 
                ?>
              </h1>
              <div class='line pink'></div>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-8'>
            <div class='row someone-like-me'>
              <div class='col-md-12'>
                <h4>
                <?php
                  if(is_category('pengetahuan')){
                    //dd(get_the_category());
                    echo get_the_category()[0]->description;
                  }
                ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class='middle-section'>
    <div class='container'>
      <div class='row'>
      	<?php
      		$posts_featured = get_posts(array(
						'category_name' => 'pengetahuan',
						'meta_key' => 'teaser_appearance_type',
						'meta_value' => 'featured',
						'orderby' => 'post_date',
						'order' => 'DESC',
						'numberposts' => 1
						)
					);
      	?>

        <?php
          $posts_one_grid = get_posts(array(
            'category_name' => 'pengetahuan',
            'meta_key' => 'teaser_appearance_type',
            'meta_value' => 'one_grid',
            'orderby' => 'post_date',
            'order' => 'ASC',
            'numberposts' => 5
            )
          );
        ?>

        <?php
          $posts_double_grid = get_posts(array(
            'category_name' => 'pengetahuan',
            'meta_key' => 'teaser_appearance_type',
            'meta_value' => 'double_grid',
            'orderby' => 'post_date',
            'order' => 'ASC',
            'numberposts' => 3
            )
          );
        ?>

      	<? foreach ($posts_featured as $post_featured):?>
      	<?php
      		$feat_image = wp_get_attachment_url(get_post_thumbnail_id($post_featured->ID));
          echo set_class($feat_image, "featured");
      	?>
	          <div class='container-block'>
	            <a href="<?php echo get_permalink($post_featured->ID); ?>"><h3><?php echo $post_featured->post_title; ?></h3></a>
	            <div class='line pink'></div>
	            <p><?php echo $post_featured->post_excerpt; ?></p>
	          </div>
	        </div> 
        <? endforeach; ?>
        <?php //dd($posts_one_grid); ?>
        <?php
          $bg_image = wp_get_attachment_url(get_post_thumbnail_id($posts_one_grid[0]->ID));
          echo set_class($bg_image, "green-topper");
        ?>
          <div class='container-block'>
            <a href="<?php echo get_permalink($posts_one_grid[0]->ID); ?>"><h3><?php print $posts_one_grid[0]->post_title;?></h3></a>
            <div class='line white-line'></div>
            <p><?php print $posts_one_grid[0]->post_excerpt;?></p>
          </div>
        </div>
      </div>
      <div class='row'>
        <?php
          $bg_image_1 = wp_get_attachment_url(get_post_thumbnail_id($posts_one_grid[1]->ID));
          echo set_class($bg_image, "green");
        ?>
          <div class='container-block'>
            <a href="<?php echo get_permalink($posts_one_grid[1]->ID); ?>"><h3><?php print $posts_one_grid[1]->post_title;?></h3></a>
            <div class='line white-line'></div>
            <p><?php print $posts_one_grid[1]->post_excerpt;?></p>
          </div>
        </div>
          <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($posts_double_grid[0]->ID));?>
        <div class='col-sm-8'>
          <div class='row'>
            <div class='col-sm-6 right'>
              <div class='container-block bg-knowledge-pink eqheight'>
                <a href="<?php echo get_permalink($posts_double_grid[0]->ID); ?>"><h3><?php echo $posts_double_grid[0]->post_title; ?></h3></a>
                <div class='line white-line'></div>
                <p><?php echo $posts_double_grid[0]->post_excerpt; ?></p>
                <div class='arrow-right hidden-xs'></div>
              </div>
            </div>
            <div class='col-sm-6 left eqheight hidden-xs'>
              <img class='eqheight' src='<?php echo $feat_image; ?>'>
            </div>
          </div>
        </div>
      </div>
        <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($posts_double_grid[1]->ID));?>
      <div class='row'>
        <div class='col-sm-4'>
          <div class='row'>
            <div class='col-sm-12'>
              <div class='container-block bg-purple eqheight'>
                <a href="<?php echo get_permalink($posts_double_grid[1]->ID); ?>"><h3><?php echo $posts_double_grid[1]->post_title; ?></h3></a>
                <div class='line white-line'></div>
                <p><?php echo $posts_double_grid[1]->post_excerpt; ?></p>
                <div class='arrow-down hidden-xs'></div>
              </div>
            </div>
            <div class='col-sm-12 hidden-xs'>
              <img class='eqheight' src='<?php echo $feat_image; ?>'>
            </div>
          </div>
        </div>
          <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($posts_double_grid[2]->ID));?>
        <div class='col-sm-8'>
          <div class='row'>
            <div class='col-sm-6 right hidden-xs'>
              <img class='eqheight' src='<?php echo $feat_image; ?>'>
            </div>
            <div class='col-sm-6 left'>
              <div class='container-block bg-green eqheight'>
                <a href="<?php echo get_permalink($posts_double_grid[2]->ID); ?>"><h3><?php echo $posts_double_grid[2]->post_title; ?></h3></a>
                <div class='line white-line'></div>
                <p><?php echo $posts_double_grid[2]->post_excerpt; ?></p>
                <div class='arrow-left hidden-xs'></div>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-6 right'>
              <?php $bg_image_3 = wp_get_attachment_url(get_post_thumbnail_id($posts_one_grid[2]->ID));?>
              <?php echo set_class($bg_image_3, 'purple'); ?>
                <a href="<?php echo get_permalink($posts_one_grid[2]->ID); ?>"><h3><?php print $posts_one_grid[2]->post_title;?></h3></a>
                <div class='line white-line'></div>
                <p><?php print $posts_one_grid[2]->post_excerpt;?></p>
              </div>
            </div>
            <div class='col-sm-6 left'>
              <?php $bg_image_4 = wp_get_attachment_url(get_post_thumbnail_id($posts_one_grid[3]->ID));?>
              <?php echo set_class($bg_image_4, 'pink'); ?>
                <a href="<?php echo get_permalink($posts_one_grid[3]->ID); ?>"><h3><?php print $posts_one_grid[3]->post_title;?></h3></a>
                <div class='line white-line'></div>
                <p><?php print $posts_one_grid[3]->post_excerpt;?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
// get_sidebar( 'content' );
// get_sidebar();
get_footer();
