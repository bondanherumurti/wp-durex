<?php
    $args = array(
      'cat' => 'pengetahuan',
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
          <div class='bg-knowledge container-block'>
            <h5>knowledge</h5>
            <a href="<?php the_permalink();?>"><?php the_title( '<h3>', '</h3>' ); ?></a>
            <div class='line white-line'></div>
            <p><?php the_excerpt(); ?></p>
          </div>
        </div>
<?php
      } else {
?>
        <div class='col-sm-6 right'>
          <div class='bg-tongue container-block'>
            <a href="<?php the_permalink();?>"><?php the_title( '<h3>', '</h3>' ); ?></a>
            <?php the_excerpt(); ?>
            <p><div class='sprites more-smaller'></div></p>
          </div>
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

?>