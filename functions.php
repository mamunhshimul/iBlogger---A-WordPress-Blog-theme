<?php


     load_theme_textdomain("firezone"); 
     add_theme_support("post-thumbnails"); 
     add_theme_support("title-tag");  
     add_theme_support("custom-logo");                                   
 



include('inc/redux/ReduxCore/framework.php');
include('inc/redux/sample/config.php');

  
/*==============================================================================
---------------------menu rigister
===============================================================================*/
 
        register_nav_menus( array(
        'header_menu' => esc_html__( 'Primary', 'iBlogger' ),
        'footer_menu' => esc_html__( 'Fpoter', 'iBlogger' ),
    ) );

/*==============================================================================
---------------------sidebar
===============================================================================
*/
function wpb_widgets_init() {
 
 
 
    register_sidebar( array(
        'name' =>__( 'Foote text 1', 'iBlogger'),
        'id' => 'foote-text-1',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h6 class="mb-3">',
        'after_title' => '</h6>',
    ) ); 
 
    register_sidebar( array(
        'name' =>__( 'Foote text 2', 'iBlogger'),
        'id' => 'foote-text-2',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h6 class="mb-3">',
        'after_title' => '</h6>',
    ) ); 
 
    register_sidebar( array(
        'name' =>__( 'Foote text 3', 'iBlogger'),
        'id' => 'foote-text-3',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h6 class="mb-3">',
        'after_title' => '</h6>',
    ) ); 
 
    register_sidebar( array(
        'name' =>__( 'Foote text 4', 'iBlogger'),
        'id' => 'foote-text-4',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h6 class="mb-3">',
        'after_title' => '</h6>',
    ) );
 
 


}
 
add_action( 'widgets_init', 'wpb_widgets_init' );  



/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}