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


						 <?php while(have_posts()) : the_post(); ?> 

							<div class="blog-onecolumn col-xs-12">
								<!-- Type Post -->
								<div class="type-post">
									<!-- Entry Cover -->
									<div class="entry-cover">
										<a href="<?php the_permalink();?>">   
                                         <?php
                                          if (has_post_thumbnail()) {    
                                               the_post_thumbnail('', array(
                                               'class' => 'img-fluid' 
                                                  ));
                                              }?> 
 										</a>
										<div class="entry-meta">
											<a href="" title="Lifestyle">
											  <?php
                                                  foreach((get_the_category()) as $category) { 
												       echo $category->cat_name . ' '; 
												      } 
												     ?>
											 </a>
										</div>
									</div><!-- Entry Cover /- -->
									<div class="entry-content">
										<h3 class="entry-title"><a href="<?php the_permalink();?>" title="Photo of a girl in flowers"><?php the_title(); ?></a></h3>
										<div class="post-meta">
											<span><a href="#"><i class="fa fa-user"></i><?php the_author(); ?></a></span>
											<span><a href="#"><i class="fa fa-clock-o"></i><?php the_time('M d, Y'); ?></a></span>
											<span><a href="#"><i class="fa fa-comment"></i> 3</a></span>
										</div>
										<p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
										<div class="read-more">
											<a href="<?php the_permalink();?>" title="Read More">Read More</a>
										</div>
									</div>
								</div><!-- Type Post /- -->
							</div>
                                 
                         <?php endwhile; ?>
 
 
				 
				 
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