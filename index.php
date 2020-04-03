<?php get_header();?>

<div class="main-container">	
		<main class="site-main">			
			<!-- Content Block -->
			<div class="container-fluid no-left-padding no-right-padding content-block">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<!-- Content Area -->
						<div class="col-md-8 col-sm-7 col-xs-12 content-area content-area-space no-left-padding no-right-padding">


						 <?php while(have_posts()) : the_post();
                           
                           get_template_part('template-parts/content');
                             
                                 
                           endwhile; ?> 
				 
				 
						</div><!-- Content Area /- -->
						<!-- Widget Area -->
						<?php get_sidebar();?>
                        <!-- Widget Area /- -->
					</div><!-- Row /- -->
					<div class="clearfix"></div>
					<nav class="ow-pagination">
						<ul class="pagination">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>							
							<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
						</ul>
					</nav>
				</div><!-- Container /- -->
			</div><!-- Content Block /- -->			
		</main>		
	</div>


 
<?php get_footer(); ?>