<?php
    $knowledge_id = get_cat_ID('pengetahuan');
    $args = array(
      'cat' => $knowledge_id,
      'posts_per_page'    => 2,
    );
?>

<?php

  // The Query
  $the_query = new WP_Query( $args );
  $i = 1;
  // The Loop
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      if($i == 2){
?>
        <div class='col-sm-6 left'>
          <a href="<?php the_permalink();?>">
            <div class='bg-knowledge container-block'>
              <?php the_title( '<h3>', '</h3>' ); ?>
              <div class='line white-line'></div>
              <p><?php the_excerpt(); ?></p>
            </div>
          </a>
        </div>
<?php
      } else {
?>
        <div class='col-sm-6 right'>
          <a href="<?php the_permalink();?>">
            <div class='bg-tongue container-block'>
              <?php the_title( '<h3>', '</h3>' ); ?>
              <?php the_excerpt(); ?>
            </div>
          </a>
        </div>
<?php
      }
      $i++;
    }
  } else {
    // no posts found
  }
  /* Restore original Post Data */
  wp_reset_postdata();
  wp_reset_query();

?>