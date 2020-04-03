<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

 
 <?php wp_head(); ?> 
<head>
  <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

  <title>Home - Hoary</title>

  <!-- Standard Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
  

  <!--[if lt IE 9]>
    <script src="js/html5/respond.min.js"></script>
    <![endif]-->
  
</head>

<body <?php body_class();?> data-offset="200" data-spy="scroll" data-target=".ownavigation">
  <!-- Loader -->
<!--   <div id="site-loader" class="load-complete">
    <div class="loader">
      <div class="line-scale"><div></div><div></div><div></div><div></div><div></div></div>
    </div>
  </div> -->
  <!-- Loader /- -->

  <!-- Header Section -->
  <header class="header_s">
    <!-- SidePanel -->
    <div id="slidepanel">
      <!-- Top Header -->
      <div class="container-fluid no-right-padding no-left-padding top-header">
        <!-- Container -->
        <div class="container">           
          <div class="top-left">
            <ul>
              <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" title="Pinterst"><i class="fa fa-pinterest-p"></i></a></li>
              <li><a href="#" title="Skype"><i class="fa fa-skype"></i></a></li>
            </ul>
          </div>
          <div class="top-right">
            <ul>
              <li><a href="#"><i class="fa fa-share-alt"></i></a></li> 
            </ul>
          </div>
           <!-- Search Box -->
           <?php get_search_form(); ?>  
        </div><!-- Container /- -->
      </div><!-- Top Header /- -->
    </div><!-- SidePanel /- -->



<!-- mmm----------------------------mm -->    <!-- mmm----------------------------mm -->

    <!-- Menu Block -->
    <div class="menu-block">
      <!-- Container -->
      <div class="container">
        <!-- Ownavigation -->
        <nav class="navbar ownavigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="site_url();">
             <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' ); 
                 if ( has_custom_logo() ) {
                      echo '<img src="' . esc_url( $custom_logo_id) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                      echo '<h1 class="navbar-brand">'. get_bloginfo( 'name' ) .'</h1>'; 
                   } ?>
               </a>  
          </div>


          <div id="navbar" class="navbar-collapse collapse">


                    <?php 
                      $iBlober_menu = array(
                         'theme_location'  => 'header_menu',
                         'container'       => 'ul',
                         'container_class' => 'nav navbar-nav',   
                         'container_id'    => false,  
                         'menu_class'      => 'nav navbar-nav',  
                         'menu_id'         => 'ole baba',   
                         'depth'         => '3', 
                         'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                         'walker'          => new wp_bootstrap_navwalker() 
                        );
                        wp_nav_menu( $iBlober_menu );
  ?> 
<!--             <ul class="nav navbar-nav">
              <li class="dropdown active">
                <a href="index-2.html" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                <i class="ddl-switch fa fa-angle-down"></i>
                <ul class="dropdown-menu">
                  <li><a href="index2.html" title="Home 2">Home 2</a></li>
                  <li><a href="index3.html" title="Home 3">Home 3</a></li>
                </ul>
              </li>
              <li><a href="about-page.html" title="About">About</a></li>
              <li class="dropdown">
                <a href="#" title="Pages" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                <i class="ddl-switch fa fa-angle-down"></i>
                <ul class="dropdown-menu">
                  <li><a href="portfolio-2-col.html" title="Portfolio 2 col">Portfolio 2 Column</a></li>
                  <li><a href="portfolio-3-col.html" title="Portfolio 3 col">Portfolio 3 Column</a></li>
                  <li><a href="portfolio-masonry.html" title="Portfolio Masonry">Portfolio Masonry</a></li>
                  <li><a href="portfolio-single.html" title="Portfolio Single">Portfolio Single</a></li>
                  <li><a href="404.html" title="Home 2">404</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                <i class="ddl-switch fa fa-angle-down"></i>
                <ul class="dropdown-menu">
                  <li><a href="blog-single.html" title="Blog Single">Blog Single</a></li>
                  <li><a href="blog-single-fullwidth.html" title="Blog Single Fullwidth">Blog Single Fullwidth</a></li>
                  <li><a href="blog-category-page.html" title="Category Page">Category Page</a></li>
                </ul>
              </li>
              <li><a href="contactus.html" title="Contact Us">Contact</a></li>
            </ul> -->

          </div>
          <div id="loginpanel" class="desktop-hide">
            <div class="right" id="toggle">
              <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
              <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
            </div>
          </div>
        </nav><!-- Ownavigation /- -->
      </div><!-- Container /- -->
    </div><!-- Menu Block /- -->
  </header><!-- Header Section /- -->