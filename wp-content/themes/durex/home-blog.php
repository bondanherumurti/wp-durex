<?php
  $blog_id = get_cat_ID('blogs');
    $args_blog = array(
      'cat' => $blog_id,
      'posts_per_page'    => 1,
    );
?>
<div class='col-sm-6 right'>
  <div class='white container-block height-first'>
    <?php

      // The Query
      $the_query_blog = new WP_Query( $args_blog );

      // The Loop
      if ( $the_query_blog->have_posts() ) {
        while ( $the_query_blog->have_posts() ) {
          $the_query_blog->the_post();
    ?>
          <a href="<?php the_permalink();?>"><?php the_title( '<h3>', '</h3>' ); ?></a>
          <div class='line green'></div>
    <?php 
          the_excerpt();
        }
      } else {
        // no posts found
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      wp_reset_query();
      ?>
  </div>
</div>