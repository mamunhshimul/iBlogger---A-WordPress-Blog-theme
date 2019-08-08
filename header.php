<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!--> <html lang="en"> <!--<![endif]-->


 <head>

  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta content="Bootsrap based theme" name="description">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="yes" name="apple-mobile-web-app-capable">
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="javascripts/PIE.js"></script>
  <![endif]-->
  <link href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/responsive.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/font-awesome-all.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/fancybox.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/theme.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/fonts.css" media="screen" rel="stylesheet" type="text/css" />



</head>
<?php wp_head(); ?>

<body class="body_class">
  <div class="wrapper">
    <!-- Page Header -->
    <header id="masthead">
      <nav class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container-fluid">
            <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <h1 class="brand">
              <a href="index-2.html">
                Smart<span class="light">Box</span></a>
            </h1>
 


            <?php 
          $mamun = array(
           'theme_location'  => 'header_menu',
           'container'       => 'div',
           'container_class' => 'nav-collapse collapse',
           'menu_class'      => 'nav pull-right',  
           'menu_id'         => '',
           'depth'           => '3' 
            );
             wp_nav_menu( $mamun );
                                   ?>


 
 
          </div>
        </div>
      </nav>
    </header>