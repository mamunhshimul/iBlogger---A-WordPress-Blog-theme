<?php 

add_theme_support('title-tag'); 


require_once(get_template_directory().'/inc/enqueue.php');



$default_header = array(

    'default-image' => get_stylesheet_directory_uri().'/../assets/images/banner_bg_blog_gridt_page.jpg'
);

add_theme_support( 'custom-header', $default_header);

 
	register_nav_menus( array(
		'header_menu' => 'header menu',
		'footer_menu' => 'My Custom Footer Menu',
	) );
add_theme_support('custom-background');

 