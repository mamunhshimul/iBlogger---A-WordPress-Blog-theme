<?php
/**
Template Name: custom query
 */ 



 $paged = get_query_var("paged")?get_query_var("paged"):1;
 $post_per_page = 1;  


$_p = new WP_Query (array(
 
     'posts_per_page'=> $post_per_page,
     'category_name ' => 'mamun', 
     'paged'         => $paged 

));?>      

    

       <?php while($_p->have_posts()) : $_p->the_post(); ?>

         <div>
            <a href="#">
            <?php the_title(); ?></a>
         </div> 
                                 
        <?php endwhile; 
           wp_reset_query();
 ?> 


       <?php 
           echo paginate_links(array(

             'total' => $_p->max_num_pages,
             'current' => $paged,  
             'prev_next' => false,  
        ));?>
