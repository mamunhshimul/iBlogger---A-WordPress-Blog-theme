<?php


     load_theme_textdomain("firezone"); 
     add_theme_support("post-thumbnails"); 
     add_theme_support("title-tag");  
     add_theme_support("custom-logo");  
     // add_theme_support("widgets");                                 
 



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
 
 
 //ragister About me widget
    register_sidebar( array(
        'name' =>__( 'About Your Self', 'iBlogger'),
        'id' => 'iBlogger_About-me', 
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h6 class="mb-3">',
        'after_title' => '</h6>',
    ) );  

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

  register_widget( 'aboutMe_widget' );
 
 


}
 
add_action( 'widgets_init', 'wpb_widgets_init' );  



/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}






 



class aboutMe_widget extends WP_Widget {
 
 public function __construct() {
    parent::__construct(
 
     // Base ID of your widget
        'aboutMe_widget', 
 
     // Widget name will appear in UI
      __('About Me Widget', 'wpb_widget_domain'), 
 
     // Widget description
    array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
);

}

public function widget( $args, $instance ) {

if ( $instance['title'] ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}

$name = $instance['name'];
$company = $instance['company'];
 

 echo $args['before_widget'].$args['before_title'].$title.$args['after_title']; 
 echo $name.$args['after_widget']; 
 echo $company.$args['after_widget']; 

}

// Widget Backend 
public function form( $instance ) {

if (  $instance[ 'title' ] ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}


  $name = $instance['name'];
  $company = $instance['company']; 
  ?>
 
<!-- // Widget admin form -->
  <p>
 <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'title:' ); ?></label> 
 <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
 <label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e( 'name:' ); ?></label> 
</p>
<p>
 <input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />
</p>
<p>
 <label for="<?php echo $this->get_field_id( 'company' ); ?>"><?php _e( 'company:' ); ?></label> 
</p>
<p>
 <input class="widefat" id="<?php echo $this->get_field_id( 'company' ); ?>" name="<?php echo $this->get_field_name( 'company' ); ?>" type="text" value="<?php echo esc_attr( $company ); ?>" />
</p>

}