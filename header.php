 <!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon--> 
    <!-- Site Title-->
    <title>iBlogger – Magazine &  Blog Theme</title>
    <meta name="description" content="A iBlogger – Magazine &  Blog Theme">
    <!-- Bootstrap CSS file-->
    <link href="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/css/bootstrap.min.css ?>" rel="stylesheet">
    <!-- Main CSS file-->
    <link href="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/css/style.css ?>" rel="stylesheet">
    <!-- Fontawesome 5 CSS file-->
    <link href="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/css/fontawesome-all.min.css ?>" rel="stylesheet">
    <!-- Magnific Popup CSS-->
    <link href="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/css/magnific-popup.css ?>" rel="stylesheet">
    <!-- Google Fonts-->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri());?>/https://fonts.googleapis.com/css?family=Lato:400,700,900%7CLora:400,700">
  </head>
  <body<?php body_class();?>>
    <!-- Navbar-->
    <div class="site-header">
      <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container">
           <a class="navbar-brand" href="index.html">
            <img class="etcodes-logo" src="<?php    
                  global $iBlogger_glo; echo $iBlogger_glo['upload-logo']['url']; 
                ?>" alt="Logo">
                
            <img class="etcodes-mobile-logo" src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/images/home-1/18-lqip.jpg'?>" alt="Logo">
           </a>
         
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                <div class="dropdown-menu"><a class="dropdown-item" href="index.html">1 - Home</a><a class="dropdown-item" href="home-2.html">2 - Home</a><a class="dropdown-item" href="home-3.html">3 - Home</a></div>
              </li>
              <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu"><a class="dropdown-item" href="page-about-us.html">About us</a><a class="dropdown-item" href="page-contact.html">Contact</a></div>
              </li>
              <li class="nav-item dropdown mega_menu_holder"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                <div class="dropdown-menu"><a class="dropdown-item" href="blog-right-sidebar.html">Right Sidebar</a><a class="dropdown-item" href="blog-left-sidebar.html">Left Sidebar</a><a class="dropdown-item" href="blog-three-col.html">Three Col</a><a class="dropdown-item" href="blog-two-col-right-sidebar.html">Two Col Right Sidebar</a><a class="dropdown-item" href="blog-two-col-left-sidebar.html">Two Col Left Sidebar</a><a class="dropdown-item" href="blog-card-right-sidebar.html">Card Right Sidebar</a><a class="dropdown-item" href="blog-card-left-sidebar.html">Card Left Sidebar</a><a class="dropdown-item" href="blog-card-three-col.html">Card Three Col</a><a class="dropdown-item" href="blog-card-two-col-right-sidebar.html">Card two Col Right Sidebar</a><a class="dropdown-item" href="blog-card-two-col-left-sidebar.html">Card two Col Left Sidebar</a><a class="dropdown-item" href="blog-single-post.html">Single Post</a><a class="dropdown-item" href="blog-single-post-gallery.html">Single Gallary Post </a><a class="dropdown-item" href="blog-single-post-video.html">Single Video Post</a><a class="dropdown-item" href="blog-single-post-audio.html">Single Audio Post</a></div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                <div class="dropdown-menu"><a class="dropdown-item" href="shop-right-sidebar.html">Shop Right Sidebar</a><a class="dropdown-item" href="shop-left-sidebar.html">Shop Left Sidebar</a><a class="dropdown-item" href="shop-full-width.html">Shop Full Width</a><a class="dropdown-item" href="shop-single-product.html">Shop Single Product</a></div>
              </li>
              <li class="nav-item"><a class="nav-link" href="element-accordions.html">Elements</a></li>
              <!-- Search bar-->
              <li class="nav-item-search">
                <form class="form-inline navbar-search-bar">
                  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
              </li>
              <!-- Social nav-->
              <li class="nav-item-social-nav d-flex align-items-center"><a class="text-light-blue" href="#"><i class="fab fa-twitter"></i></a><a class="text-dark-blue" href="#"><i class="fab fa-facebook"></i></a><a class="text-red" href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- End Navbar-->