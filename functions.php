<?php  
 
    load_theme_textdomain("firezone");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support( "custom-header");
    
   
    $firezone_custom_logo_defult = array(

      'width' => '100',
      'height' => '100' 
      ); 
    add_theme_support( "custom-logo",$firezone_custom_logo_defult);
                                  
 
              
 



/*-----------------
menus
-------------------------------------------*/
 
	register_nav_menus( array(
		'header_menu' => 'header menu',
		'main_menu'   => 'Main Menu',
		'footer_menu' => 'My Custom Footer Menu',
	) ); 


function fire_prtected_title_change(){
	return "talaMara: %s";
}

add_filter("protected_title_format","fire_prtected_title_change");


/*-----------------
   css and js link
-------------------------------------------*/



function boxCssAndJs(){
 
 
  wp_register_style('firezone', get_template_directory_uri().'/style.css');            wp_enqueue_style('firezone');
  wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');      wp_enqueue_style('bootstrap');
  wp_register_style('maincss', get_template_directory_uri().'/assets/css/style.css',null,time());    wp_enqueue_style('maincss');
  wp_register_style('shortcodes', get_template_directory_uri().'/assets/css/shortcodes.css');        wp_enqueue_style('shortcodes');
  wp_register_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.css');    wp_enqueue_style('font-awesome');
  wp_register_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.css');    wp_enqueue_style('owl.carousel');
  wp_register_style('owl.theme', get_template_directory_uri().'/assets/css/owl.theme.css');          wp_enqueue_style('owl.theme');
  wp_register_style('demo-settings', get_template_directory_uri().'/assets/css/demo-settings.css');  wp_enqueue_style('demo-settings');
  wp_register_style('tiny', get_template_directory_uri().'/assets/css/tiny-slider.css');  wp_enqueue_style('tiny');


 

	wp_enqueue_script('jqueRy',get_template_directory_uri().'/assets/js/jquery-latest.min.js',array('jquery'), false,true );
	wp_enqueue_script('bootStrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',array('bootstrap'), false,true );
	wp_enqueue_script('owl.Carousel',get_template_directory_uri().'/assets/js/owl.carousel.min.js',null, false,true );
	wp_enqueue_script('demo-settings',get_template_directory_uri().'/assets/js/demo-settings.js',null, false,true );
	wp_enqueue_script('SmoothScroll',get_template_directory_uri().'/assets/js/SmoothScroll.min.js',null, false,true );
	wp_enqueue_script('scrolline',get_template_directory_uri().'/assets/js/jquery.scrolline.js',null, false, true );
	wp_enqueue_script('WCircleMenu',get_template_directory_uri().'/assets/js/jquery.WCircleMenu-min.js',null, false,true );
  wp_enqueue_script('ThemeScripts',get_template_directory_uri().'/assets/js/ThemeScripts.js',null,time(),true);
  wp_enqueue_script('tinyHr',get_template_directory_uri().'/assets/js/tiny-slider.helper.ie8.js',null,time(),true);
  wp_enqueue_script('tinyJs',get_template_directory_uri().'/assets/js/tiny-slider.js',null,time(),true);
  wp_enqueue_script('mainJs',get_template_directory_uri().'/assets/js/main.js',null,time(),true);
 

}

add_action('wp_enqueue_scripts','boxCssAndJs');


 

  		

function style_somthing(){
	?> 

      <style>
  
      	  .header{
      	  	 background-image: url(<?php echo header_image();  ?>);
      	  	 background-size: cover;
      	  	 background-position: center center;
      	  	 background-repeat: no-repeat;
      	  }
          

      </style>
	<?php
}
add_action('wp_head','style_somthing',11);






 
/*-----------------
custom widget
-------------------------------------------*/

 if (class_exists('Attachments')) {
    require_once "lib/attachments.php";

}
 



 

 
