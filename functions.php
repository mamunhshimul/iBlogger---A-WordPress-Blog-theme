<?php 

  add_theme_support( 'title-tag' );
  add_theme_support('post-thumbnails');

 

/*=============
   blog page header
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
      'supports'  => array( 'title','thumbnail')
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
   read more 
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
   read more 
 =====================================================================*/

















