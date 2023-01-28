<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WriterPro
 */


get_header();
?>

<main id="primary" class="site-main">

    <div class="container">
       <div class="row">


           <?php
           global $writerop;

           if  ( $writerop['writer_post_sidebar_switcher'] == "1" &&
           $writerop['writer_post_sidebar_align'] == "1")  { ?>
           <div class="col-md-9 order-3"> <?php
               }

               elseif ( $writerop['writer_post_sidebar_switcher'] == "1"){ ?>
               <div class="col-md-9"> <?php
                   }

                else{ ?>
                   <div class="col-md-12"><?php
                }


		while ( have_posts() ) : the_post();

            echo do_shortcode('[setPostView]');
			get_template_part( 'template-parts/content-single', get_post_type() );  ?>

			<div class="row">
				<div class="col-md-6">
				  <div class="post-categories"><?php
						$categories = get_categories();
						foreach ($categories as $cat) {
							$category_link = get_category_link($cat->cat_ID);
							echo '<a href="'.esc_url( $category_link ).'" title="'.esc_attr($cat->name).'">'.$cat->name.'</a>';
						}
			   	    ?>
				   </div>
				</div><!-- .col -->
				<div class="col-md-6">
				</div>
			</div>
          <?php





			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( '← Previous', 'writerpro' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next →', 'writerpro' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
       	  </div>

           <?php if ( $writerop['writer_post_sidebar_switcher'] == 1): ?>
               <div class="col-md-3">
                   <?php get_sidebar(); ?>
               </div>
           <?php endif ?>

           </div>
    </div>

<?php
get_footer();  ?>
	</main><!-- #main -->

