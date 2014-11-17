<?php
  // Get the URL of this category
  $category = get_the_category(); 
  $category_link = get_category_link($category[0]->term_id );
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
        <a href=''><?php echo $category[0]->name; ?></a>
      </li>
    </ol>
  </div>
</div>