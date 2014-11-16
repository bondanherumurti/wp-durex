<div class='row'>
    <div class='col-sm-4'>
      <div class='container-block'>
        <h5>Related Post</h5>
        <div class='line green' style='margin-bottom: 25px;'></div>
      </div>
    </div>
</div>

<?php

	$args = array(
		'cat' => the_category_ID($echo=false),
		'posts_per_page'    => 3,
		'post__not_in' => array($post->ID),
	);
	// The Query
	$the_query = new WP_Query( $args );

	$i = 1;
	// The Loop
	if ( $the_query->have_posts() ) { 
?>
		<div class='row related-post'>
<?php
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
?>
			<div class='col-sm-4'>
				<?php if($i == 2){ ?>
					<div class='blue-sky container-block'>
				<?php } else { ?>
              		<div class='white container-block'>
				<?php } ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_title( '<h3>', '</h3>' ); ?>
				</a>
                <div class='line green'></div>
                <?php the_excerpt(); ?>
              </div>
            </div>
<?php
	$i++;
	}
?>
	</div>
<?php
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>