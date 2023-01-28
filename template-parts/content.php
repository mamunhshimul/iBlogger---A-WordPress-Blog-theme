<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WriterPro
 */
?>

	<div class="col-md-12">
		<div class="writer__grid-item">

			<a href="<?php the_permalink(); ?>">
			  <div class="writerPro_post"> 
				<?php
               if (has_post_thumbnail()) {
                 the_post_thumbnail('post-thumbnail', ['class' => ' ', 'title' => 'Feature image']);
                  }
				 ?>
			  </div>
			</a>

			<div class="writer_post-content-wrap">
				<h3 class="writer_post_date"><?php the_time('M j, Y'); ?></h3>
				<h2 class="writer_post-title">
                    <a href="<?php the_permalink(); ?>">
                    	<?php the_title();?>
			     	</a>
                </h2>
				<div class="writer_post-excerpt">
					<?php the_excerpt(); ?>
				</div>
				<div class="writer_post-meta-wrap">
					<div class="row">
						<div class="col-md-6">
				         	<h3 class="writer_post_author">By <?php the_author(); ?></h3>
						</div>
						<div class="col-md-6">
							<h3 class="writer_post_comments text-right">
						   	 <?php comments_number();?>
							</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

