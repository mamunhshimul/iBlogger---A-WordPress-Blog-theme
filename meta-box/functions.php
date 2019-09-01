<?php 


function we_are_making(array $ourmetabox){


  $ourmetabox[] = array(

    'id' => 'first-boxes',
    'title' => 'what is this post all about',
    'object_types' => array('post'), 

  );
  return $ourmetabox;

}


add_filter('cmb2_meta_boxes', 'we_are_making');  