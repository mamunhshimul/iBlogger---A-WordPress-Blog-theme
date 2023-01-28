<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WriterPro
 */

get_header();
?>

	<main id="primary" class="site-main">

    <div class="container">
      <div class="row">
        <div class="col-md-8 mt-5">

           <div class="row">
              
            <?php while(have_posts()) : the_post(); ?>  
               <?php get_template_part( 'template-parts/content', get_post_type()); ?>                                
            <?php endwhile; ?> 

              <div class="writer__pagination">  
                   <?php the_posts_pagination(); ?> 
              </div>  

           </div>

        </div><!-- . row -->
        <div class="col-md-4"> 
           <div class="sidebar-area"> 
          <?php 
             if (is_active_sidebar('sidebar-1')) {
               dynamic_sidebar('sidebar-1');
             } 
            ?>

           </div>
        </div>
            
 

        </div>
      </div>

	</main><!-- #main -->

<?php
 
get_footer();
 