<?php get_header();

/*
Template Name: text_catory

 */
 ?>



<section class="section section-padded">
     <div class="container-fluid">
        <div class="row-fluid">
           <div class="span9">
             <?php 
                $gully_boy = get_the_category_by_ID($boX['spa_catagorY']);            
                 $national = new WP_Query(array(
					
                    'post_type'       => 'post',
                    'posts_per_page'  =>  4,
                    'category_name'   =>  $gully_boy
                    
                    ));
                 
  ?>

       <?php while($national->have_posts()) : $national->the_post(); ?>

          <h1> <?php the_title(); ?></h1>
          <p><?php readMore(50); ?>. . .</p>

      <?php endwhile; ?>	






           </div>
        </div>
     </div>
</section> 




<?php get_footer(); ?>