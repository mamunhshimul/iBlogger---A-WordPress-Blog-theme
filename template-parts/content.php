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
 								     	  <?php  
										 	$categories = get_categories(
										 	  array(
													'orderby' => 'name',
													'hide_empty' => false,
													'parent' => 0,
													'number' => 1, 
										 	    ));

										 		foreach ($categories as $cat) {
												$category_link = get_category_link($cat->cat_ID);
												echo '<a href="'.esc_url( $category_link ).'" title="'.esc_attr($cat->name).'">'.$cat->name.'</a>';
												} ?>  
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



