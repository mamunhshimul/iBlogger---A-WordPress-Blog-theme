<?php
get_header(); ?>

<div class="main-container"> 
	<div class="container"> 
		<div class="row"> 
			<div class="col-md-8 col-sm-7 col-xs-12"> 

		    <?php
	        	if ( have_posts() ) : ?>

				<header class="page-header">
				  <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'iBlogger' ), '<span>' . get_search_query() . '</span>' ); ?> 
				  </h1>
				</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			 while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content');

			 endwhile; 

		    	the_posts_navigation(); 

		     else : 

			   // get_template_part( 'template-parts/content','none'); 

		     	echo "Sorry! we found nothing";

	     	 endif; ?>  
	     </div>
	  </div>
	</div>  
</div><!-- primary / -->

<?php
 
get_footer();
