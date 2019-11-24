<?php 

add_theme_support('title-tag');

add_theme_support('custom-background');


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
 
	  

  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');      wp_enqueue_style('bootstrap');
  wp_register_style('maincss', get_template_directory_uri().'/css/style.css',null,time());    wp_enqueue_style('maincss');
  wp_register_style('shortcodes', get_template_directory_uri().'/css/shortcodes.css');        wp_enqueue_style('shortcodes');
  wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css');    wp_enqueue_style('font-awesome');
  wp_register_style('owl.carousel', get_template_directory_uri().'/css/owl.carousel.css');    wp_enqueue_style('owl.carousel');
  wp_register_style('owl.theme', get_template_directory_uri().'/css/owl.theme.css');          wp_enqueue_style('owl.theme');
  wp_register_style('demo-settings', get_template_directory_uri().'/css/demo-settings.css');  wp_enqueue_style('demo-settings');


  

	wp_enqueue_script('jqueRy',get_template_directory_uri().'/js/jquery-latest.min.js',array('jquery'), false,true );
	wp_enqueue_script('bootStrap',get_template_directory_uri().'/js/bootstrap.min.js',array('bootstrap'), false,true );
	wp_enqueue_script('owl.Carousel',get_template_directory_uri().'/js/owl.carousel.min.js',null, false,true );
	wp_enqueue_script('demo-settings',get_template_directory_uri().'/js/demo-settings.js',null, false,true );
	wp_enqueue_script('SmoothScroll',get_template_directory_uri().'/js/SmoothScroll.min.js',null, false,true );
	wp_enqueue_script('scrolline',get_template_directory_uri().'/js/scrolline.js',null, false, true );
	wp_enqueue_script('WCircleMenu',get_template_directory_uri().'/js/WCircleMenu.min.js',null, false,true );
	wp_enqueue_script('ThemeScripts',get_template_directory_uri().'/js/ThemeScripts.js',null,time(),true);

}

add_action('wp_enqueue_scripts','boxCssAndJs');


 