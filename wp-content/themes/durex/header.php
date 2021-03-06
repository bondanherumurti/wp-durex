<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <title>Someone Like Me : Dare to Speak Up, Dare to Understand, Dare to Take Action | An Initiaive by Durex</title>
    <!-- Bootstrap -->
    <link href='<?php echo get_stylesheet_directory_uri(); ?>/style.css' rel='stylesheet'>
    <link href='<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/font.css' rel='stylesheet'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
<body id="<?php echo set_body_id(); ?>">
	<div class='container-fluid'>
	  <div class='top-section'>
	    <div class='container'>
	      <div class='header'>
	        <div class='row'>
	          <div class='col-xs-4'>
	            <a href='#'>
	              <img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png'>
	            </a>
	          </div>
	          <div class='col-xs-8'>
	            <div class='float-right'>
	              <ul class='social-media hidden-xs'>
	                <li>
	                  <a href='https://www.facebook.com/Durex.Id' target="_blank">
	                    <div class='sprites fb-small'></div>
	                  </a>
	                </li>
	                <li>
	                  <a href='https://twitter.com/Durex_Love' target="_blank">
	                    <div class='sprites twitter-small'></div>
	                  </a>
	                </li>
	                <li>
	                  <a href='http://www.youtube.com/user/DurexIndonesia' target="_blank">
	                    <div class='sprites youtube-small'></div>
	                  </a>
	                </li>
	              </ul>
	            </div>
	          </div>
	        </div>
	        <div class='row'>
	          <nav class='navbar navbar-default' role='navigation'>
	            <div class='container-fluid'>
	              <!-- Brand and toggle get grouped for better mobile display -->
	              <div class='navbar-header'>
	                <button class='navbar-toggle collapsed' data-target='#bs-example-navbar-collapse-1' data-toggle='collapse' type='button'>
	                  <span class='sr-only'>Toggle navigation</span>
	                  <span class='icon-bar'></span>
	                  <span class='icon-bar'></span>
	                  <span class='icon-bar'></span>
	                </button>
	              </div>
	              <!-- Collect the nav links, forms, and other content for toggling -->
	      		  <?php  wp_nav_menu( array( 'container_class' => 'collapse navbar-collapse', 'menu_class' => 'nav navbar-nav', 'container_id' => 'bs-example-navbar-collapse-1', 'theme_location' => 'primary' ) ); ?>
	            </div>
	            <!-- /.container-fluid -->
	          </nav>
	        </div>