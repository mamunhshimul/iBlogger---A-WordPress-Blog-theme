<?php


function smart_box(){




add_theme_support('title-tag');
add_theme_support('post-thumbnails');


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
         'supports'  => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

));










}
add_action('after_setup_theme', 'smart_box');

 
