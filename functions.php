<?php


function smart_box(){




add_theme_support('title-tag');
add_theme_support('post-thumbnails');



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

 
