<?php


function smart_box(){




add_theme_support('title-tag');
add_theme_support('post-thumbnails');

 
/*=============
      navigation
 ===========================================================*/


	register_nav_menus(array(
		'header_menu' => 'header menu',
		'footer_menu' => 'My Custom Footer Menu',
	) );

 



/*=============
      slider  
 ===========================================================*/
register_post_type('BoxSlide', array(

    'labels' => array(

         'name'         => 'sliders',
         'add_new_item' => 'Add new Slider'
    ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

));

/*=============
      services  
 ===========================================================*/

register_post_type('boxServices', array(

	 'labels'   => array(
             
             'name'          => 'Services',
             'add_new_item'  => 'A New Seevice'
            
	 ),
	 'public'   => true,
	 'supports'  =>array( 'title', 'editor', 'thumbnail' )

     
   
));

/*=============
      frongPageBlog
 ===========================================================*/

register_post_type('front-page-blog', array(

	'labels'=>array(

		'name'           => 'BlogBlocks',
		'add_new_item'   => 'Add a new Blog Block',


	),
	'public'     => true,
	'supports'   => array('title', 'editor', 'thumbnail')   

));

/*=============
      frongPageclints
 ===========================================================*/

register_post_type('front-page-clints', array(

	'labels'=>array(

		'name'           => 'Clients',
		'add_new_item'   => 'Add a new Clients',


	),
	'public'     => true,
	'supports'   => array('title', 'thumbnail')   

));






}
add_action('after_setup_theme', 'smart_box');

 


/*=============
      sidebar
 ===========================================================*/

 function blog_right_sideBar(){


 	register_sidebar( array(

 	'name'          =>'Right side bar',
 	'description'   =>'Add your right from here',
 	'id'            => 'right-sidebar',
 	'before_title'  =>'<h3 class="sidebar-header">',
 	'after_title'   => '</h3>',
 	'before_widget' =>' <div class="sidebar-widget">',
 	'after_widget'  =>'</div>'



 	) );


 	register_sidebar(array(
      
      'name'        => 'Footer',
      'description' => 'Add Your Footer items frome here',
      'id'          => 'box-footer',
      'before_title'  =>'<h3 class="sidebar-header">',
      'after_title'   => '</h3>',
      'before_widget' =>'<div class="span6 small-screen-center"<p>>',
  	  'after_widget'  =>'</p></div>'

 	));

 }
 add_action('widgets_init', 'blog_right_sideBar');


/*=============
      page navigation
 ===========================================================*/
 
 