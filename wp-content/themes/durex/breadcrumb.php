<?php
  // Get the URL of this category
  $category_link = get_category_link( the_category_ID($echo=false) );
?>
<div class='row'>
  <div class='col-xs-12'>
    <ol class='breadcrumb'>
      <li>
        <a href='<?php echo home_url(); ?>'>
          <div class='sprites home'></div>
        </a>
      </li>
      <li>
        <a href='<?php echo esc_url( $category_link ); ?>'><?php echo get_the_category()[0]->name; ?></a>
      </li>
    </ol>
  </div>
</div>