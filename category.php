<?php get_header(); ?>

 
<div class="container-fluid no-left-padding no-right-padding content-block">
	<!-- Container -->
    <div class="container">
	 <!-- Row -->
	   <div class="row">
	   	<!--col-md-->
 
		  <?php while(have_posts()) : the_post();
                           
                 get_template_part('template-parts/content'); 

             endwhile; ?> 
	    
	   </div><!--col-md /- -->
	</div><!-- Row /- -->
</div><!-- Container /- --> 

<?php get_footer();?>