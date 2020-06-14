<?php

if ( ! function_exists( 'iBlogger_setup' ) ) :

  function iBlogger_setup() {

     load_theme_textdomain("iBlogger"); 
     add_theme_support("post-thumbnails"); 
     add_theme_support("title-tag");  
     add_theme_support("custom-logo");  
     add_theme_support("widgets");                                 
     add_theme_support( 'post-formats', array( 'aside', 'gallery', 'chat', 'link', 'image', 'quote', 'status', 'video ' ) );

  } 
endif;

add_action( 'after_setup_theme', 'iBlogger_setup' );

 
  
/**
 menu rigister
--------------------*/
 
        register_nav_menus( array(
        'header_menu' => esc_html__( 'Primary', 'iBlogger' ),
        'footer_menu' => esc_html__( 'Fpoter', 'iBlogger' ),
    ) );

 
/**
* Side Bar
*/
require_once get_theme_file_path('/template-parts/sidebar/widget-init.php');

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

 

function iBlogger_assets(){ 
/**
css files
************/  
  wp_enqueue_style( 'firezone',get_stylesheet_uri()); 
  wp_enqueue_style('apple-touch', get_template_directory_uri().'/inc/assets/images/apple-touch-icon-114x114-precomposed.png');       
  wp_enqueue_style('apple-touch-2', get_template_directory_uri().'/inc/assets/images/apple-touch-icon-72x72-precomposed.html');       
  wp_enqueue_style('apple-touch-3', get_template_directory_uri().'/inc/assets/images/apple-touch-icon-57x57-precomposed.png');       
  wp_enqueue_style('googleapis','//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i');    
  wp_enqueue_style('maincss', get_template_directory_uri().'/inc/assets/css/lib.css');     
  wp_enqueue_style('plugins', get_template_directory_uri().'/inc/assets/css/plugins.css');   
  wp_enqueue_style('elements', get_template_directory_uri().'/inc/assets/css/elements.css');   
  wp_enqueue_style('rtl', get_template_directory_uri().'/inc/assets/css/rtl.css');   

  /**********
  js files
  */ 
    wp_enqueue_script('jqueRy',get_template_directory_uri().'/inc/assets/js/jquery-1.12.4.min.js',array('jquery'), false,true );
    wp_enqueue_script('libjs',get_template_directory_uri().'/inc/assets/js/lib.js',null, false,true );
    wp_enqueue_script('libjs',get_template_directory_uri().'/inc/assets/js/lib.js',null, false,true );
    wp_enqueue_script('mainJs',get_template_directory_uri().'/inc/assets/js/main.js',null, false,true ); 
} 
add_action('wp_enqueue_scripts','iBlogger_assets');




/*
pagination
-----------*/
function iBlogger_pagination(){

  global $wp_query;
  $links =  paginate_links(
       array(

           'current'  => max(1, get_query_var('paged')),
           'total'    => $wp_query->max_num_pages,
           'type'     => 'list',
           'mid_size' => 4,
       ));
         $links = str_replace("page-numbers", "my_class", $links);
         $links = str_replace("<ul class='my_class' ", "my_ul_class", $links);
         echo $links;
}


 

include('inc/redux/ReduxCore/framework.php');
include('inc/redux/sample/config.php');
/*
tgm plugin
---------------------------*/
require_once get_theme_file_path('inc/tgm/tgm.php');



 
 function copyright_notice() {
   echo "Copyright All Rights Reserved";
}
add_action('iBlogger_footer_text','copyright_notice');