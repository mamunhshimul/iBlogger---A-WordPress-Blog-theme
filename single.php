 <?php get_header(); ?>

  <div class="main-container">  
    <main class="site-main">      
      <!-- Content Block -->
      <div class="container-fluid no-left-padding no-right-padding content-block blog-single">
        <!-- Container -->
        <div class="container">
          <!-- Row -->
          <div class="row">
            <!-- Content Area -->
            <div class="col-md-8 col-sm-7 col-xs-12 content-area content-area-space">

              <?php
                while ( have_posts() ) : the_post(); 
              
                   get_template_part( 'template-parts/single-content', get_post_format() );
              
               endwhile; ?> 
              



<!-- Comment Area -->
<?php 
      if( get_theme_mod ('comments',true) ) :
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() ) :
          comments_template();
        endif;
      endif;
 ?>




              
            </div><!-- Content Area /- -->
            <!-- Widget Area -->
            <?php get_sidebar();  
?>
          </div><!-- Row /- -->
        </div><!-- Container /- -->
      </div><!-- Content Block /- -->
    </main>
  </div>
  

  <h1>camera mode: <?php the_field('Camera_model'); ?></h1>
  <h1>loccation: <?php the_field('location'); ?></h1>
  <h1>date: <?php the_field('date'); ?></h1> 
  <h1>free or paid: <?php the_field('free_or_paid'); ?></h1> 
 



<?php get_footer();?>   