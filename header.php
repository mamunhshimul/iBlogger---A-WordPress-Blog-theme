<?php 

   $mamun = get_stylesheet_directory_uri();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- title of site -->
    

    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%7CMontserrat:200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo $mamun; ?>/images/favicon.ico" type="image/x-icon">
   
    <!--flaticon.css-->
    <link rel="stylesheet" href="<?php echo $mamun; ?>/assets/css/flaticon.css">

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="<?php echo $mamun; ?>/assets/css/font-awesome.min.css">

    <!--text-animation.css-->
    <link rel="stylesheet" href="<?php echo $mamun; ?>/assets/css/animate.css">

    <!--animate.css-->
    <link rel="stylesheet" href="<?php echo $mamun; ?>/assets/css/text-animation.css">
    
    <!--fancybox.min.css-->
    <link rel="stylesheet" href="<?php echo $mamun; ?>/assets/css/jquery.fancybox.min.css">
    
    <!--fancybox.min.css-->
    <link rel="stylesheet" href="<?php echo $mamun; ?>/assets/css/magnific-popup.min.css">
    
    <!--owl.carousel.min.css-->
    <link rel="stylesheet" href="<?php echo $mamun; ?>/assets/css/owl.carousel.min.css">
    
    <!--slider revolution css -->
    <link rel="stylesheet" href="<?php  echo $mamun; ?>/rs-plugin/css/layers.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $mamun; ?>/rs-plugin/css/settings.css" type="text/css"/>
    
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="<?php echo $mamun; ?>/assets/css/bootstrap.min.css">

    <!--plugins.css-->
    <link href="<?php echo $mamun; ?>/assets/css/plugins.css" rel="stylesheet">

    <!--icons.css-->
    <link href="<?php echo $mamun; ?>/assets/css/icons.css" rel="stylesheet">
    
    <!--menu-css.css-->
    <link href="<?php echo $mamun; ?>/assets/css/menu-css.css" rel="stylesheet">

    <!--style.css-->
    <link rel="stylesheet" href="<?php  echo $mamun; ?>/assets/css/main.css">
    
    <!--responsive.css-->
    <link rel="stylesheet" href="<?php  echo $mamun; ?>/assets/css/responsive.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->   

  <?php wp_head(); ?>  
</head>
<body <?php body_class(); ?>>
<!--     Start Preloader
<div class="preloader">
    <div class="preloader-inner-area">
        <div class="loader-overlay">
            <div class="l-preloader">
                <div class="c-preloader"></div>
            </div>
        </div>
    </div>
</div> 
End Preloader -->


<div style="background-image: url(assets/images/banner_bg_masonery_01.jpg);">
    

</div>
<!--/..header-background-->



<header id="header" class="header_areaa">
        <nav class="navbar extended">
            <div class="nav-wrapper dark-wrapper inverse-text">
                <div class="container flex-it">


 <?php 
   $mamun = array(
      'theme_location' => 'header_menu',
      'container' => 'div',
      'container_class' => 'navbar-collapse collapse align-left',
      'menu_class' => 'nav navbar-nav',
 
    );
      wp_nav_menu( $mamun );
  ?>
 
                    <div class="navbar-other">
                        <div class="align-right text-right">
                            <div class="navbar-brand">
								<a href="index-01.html"><img alt="images" src="<?php echo $mamun; ?>/images/logo_consult.png"></a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- /header -->