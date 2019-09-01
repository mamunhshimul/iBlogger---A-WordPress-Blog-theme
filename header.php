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
 
  
<style type="text/css">
  
  <?php global $boX; 
         echo  $boX['custom-css'];  
   ?>

    p{
      color: <?php global $boX;  echo $boX['coloR'];  ?>;
   }
   
   a{
      color: <?php global $boX;  echo $boX['link-color']; ?>!important;
   } 

   body{

      background-color: <?php global $boX; echo $boX['background-color']['background-color'];?>!important;
      background-image:url(<?php global $boX; echo $boX['background-color']['background-image'];?>)!important;
      background-repeat: <?php global $boX; echo $boX['background-color']['background-repeat'];?>!important;
      background-position: <?php global $boX; echo $boX['background-color']['background-position'];?>!important;
      background-size: <?php global $boX; echo $boX['background-color']['background-size'];?>!important;
   }

/*======menu border=============*/
   .section-alt::before{ 


    border-style: <?php global $boX; echo $boX['menu-border']['border-style'];?>!important;
    border-width: <?php global $boX; echo $boX['menu-border']['border-top'];?>!important;
    border-color: <?php global $boX; echo $boX['menu-border']['border-color'];?>!important;

    
 

        
   }
 /*==========page header*/
  #masthead .navbar-inner{
    width:  <?php global $boX; echo $boX['nav_height']['width'];?>!important;
    height:  <?php global $boX; echo $boX['nav_height']['height'];?>!important;
  }
  


</style>         

<?php wp_head(); ?>
</head>


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
              


              <?php if($boX['logo-visivility'] == 1) : ?>

                 <a href="<?php the_permalink(); ?>">

                  <?php 
                   global $boX;
                   echo $boX['logoUpload'];
                  ?>

                  </a>

                 <?php endif;?> 



             

<!--             <img src="<?php 
 //                  global $boX;
//                 echo $boX['logoUpload']['url'];
   ?>">  -->
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