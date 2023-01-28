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
		<div class="writer__single-post">

			<div class="writer_post-content-wrap"> <?php

                global $writerop;
                $list = $writerop['writer_blog-single-layout']['enabled'];
                $Post_Title = array_search('Post_Title',array_values($list));
                $post_Meta = array_search('post_Meta',array_values($list));
                $Featured_Images = array_search('Featured_Images',array_values($list));
                $Content = array_search('Content',array_values($list));
                $Pagination = array_search('Pagination',array_values($list));
                $Comment_Box = array_search('Comment_Box',array_values($list));
                ?>


                <h2 class="writer_single-post-title <?php echo 'order-' . $Post_Title?>">
                    <?php the_title();?>
                </h2>

                <div class="writer_post-meta-wrap d-flex <?php echo 'order-' . $post_Meta?>">

                    <h3 class="writer_post_date p-2"><?php the_time('M j, Y'); ?></h3>
                    <span>_</span>
                    <h3 class="writer_post_author p-2">By
                        <a class="pri-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>
                    </h3>
                    <span>_</span>

                    <h3 class="writer_post_comments text-right p-2">
                        <a class="pri-link" href="<?php echo get_comments_link( $post->ID ); ?>">
                            <?php   comments_number(); ?>
                        </a>
                    </h3>

                </div>
                <!--/.  writer_post-meta-wrap-->

                <div class="writerPro_post-thumbnail <?php echo 'order-' . $Featured_Images?>">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('post-thumbnail', ['class' => 'write-thumb-lg', 'title' => 'Feature image']);
                    }
                    ?>
                </div>

                <div class="writer_post-content <?php echo 'order-' . $Content?>">
                    <?php the_content(); ?>
                </div>
                <div class="writer_post-meta-wrap">
                    <div class="row">
                    </div>
                </div>

			</div>

		</div>
	</div>

