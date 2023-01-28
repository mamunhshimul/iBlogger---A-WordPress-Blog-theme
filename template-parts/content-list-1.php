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
    <div class="writer__list-item">

        <!-- featured images  /.-->
        <?php
        global $writerop;
        if ($writerop['writer_blog_option'][1] == '1' ){ ?>
        <a href="<?php the_permalink(); ?>">
            <div class="writerPost_thumbnail-wrap">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('post-thumbnail', ['class' => ' ', 'title' => 'Feature image']);
                }
                ?>
            </div>
            </a><?php
        }
        ?>


        <div class="writer_grid-content-wrap">
            <div class="writer_post-meta-block-1">
                <?php
                if ($writerop['writer_blog_option'][6] == '1' ){ ?>
                    <h3 class="writer_post_date"><?php the_time('M j, Y'); ?></h3> <?php
                } ?>
                <?php
                if ($writerop['writer_blog_option'][7] == '1' ){ ?>
                 <h3 class="writer__meta-title"><?php get_template_part("/template-parts/blog/view-counter"); ?></h3><?php
                }?>
            </div>


            <!-- post title -->
            <?php
            if ($writerop['writer_blog_option'][2] == '1' ){ ?>
                <h2 class="writer_post-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title();?>
                </a>
                </h2><?php
            } ?>
            <!-- post excerpt -->
            <?php
            if ($writerop['writer_blog_option'][3] == '1' ){ ?>
                <div class="writer_grid-post-content">
                    <?php the_excerpt(); ?>
                </div> <?php
            } ?>

            <div class="writer_grid-post-meta borderTop">

                <div class="row">
                    <!-- author -->
                    <?php
                    if ($writerop['writer_blog_option'][4] == '1' ){ ?>
                        <div class="col-md-6">
                            <a class="pri-link writer_post_author"
                               href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"
                               title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?>
                            </a>
                        </div>  <?php
                    } ?>
                    <!--/. author -->
                    <?php
                    if ($writerop['writer_blog_option'][5] == '1' ){ ?>
                        <div class="col-md-6">
                        <h3 class="writer_post_comments text-right">
                            <a class="pri-link" href="<?php echo get_comments_link( $post->ID ); ?>">
                                <?php comments_number(); ?>
                            </a>
                        </h3>
                        </div><?php
                    } ?>
                    <!--/.  comment -->
                </div>
            </div>
        </div>
    </div>
</div>

