/**
sidebar 
--------------*/
function iBlogger_widgets_init() { 

    register_sidebar( array(
        'name' =>__( 'Foote text 1', 'iBlogger'),
        'id' => 'foote-text-1',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget widget_about">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) ); 
 
    register_sidebar( array(
        'name' =>__( 'Foote text 2', 'iBlogger'),
        'id' => 'foote-text-2',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget widget_latestposts">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) ); 
 
    register_sidebar( array(
        'name' =>__( 'Foote text 3', 'iBlogger'),
        'id' => 'foote-text-3',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget widget_twitter">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) ); 
 
    register_sidebar( array(
        'name' =>__( 'Foote text 4', 'iBlogger'),
        'id' => 'foote-text-4',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget widget_flickr">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

     register_sidebar( array(
        'name' =>__( 'Fooeter bottom', 'iBlogger'),
        'id' => 'Fooeterbottom',
        'description' => __( 'Update your footer title', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget widget_flickr">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
   

  

}
 
add_action( 'widgets_init', 'iBlogger_widgets_init' );