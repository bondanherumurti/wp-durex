<?php
    $args = array(
      'cat' => 'blogs',
      'posts_per_page'    => 1,
    );
?>
<div class='col-sm-6 right'>
  <div class='white container-block height-first'>
    <h5>Blog</h5>
    <?php

      // The Query
      $the_query = new WP_Query( $args );

      // The Loop
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
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
      ?>
  </div>
</div>