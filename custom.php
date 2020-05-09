<?php 

/*
   Template Name: AboutjnkjkjZ
*/ ?>


<?php get_header( ); ?>

<?php
$category = '';
if ( $category !='' ) {
	$query = array(
		'posts_per_page' => 3,
		'order' => 'DESC',
		'nopaging' => 0,
		'post_status' => 'publish',
		'ignore_sticky_posts' => 1,
	);
}else {
	$query = array(
        'posts_per_page' => 3,
		'order' => 'DESC',
		'nopaging' => 0,
		'post_status' => 'publish',
		'ignore_sticky_posts' => 1,
		'offset'=>1
	);
 }
$args = new WP_Query($query); ?>

<?php

	if ($args->have_posts()) {
	?>
	<div class="coblog-post-grid">
		<div class="container">
            <div class="coblog-post-grid-wrap">
                <?php
                while ($args->have_posts()) : $args->the_post();

                the_post_thumbnail(); 
                ?>
                <div class="coblog-post-grid-item">
                    <div class="coblog-post-grid-overlay">
                        <div class="coblog-grid-overlay-img" <?php  the_post_thumbnail();?>></div>
                        <a class="coblog-grid-link-overlay" href="<?php echo esc_url( get_permalink() ); ?>"><span class="screen-reader-text"><?php the_title(); ?></span></a>
                        <div class="coblog-grid-no-image">
                                <?php echo esc_url($coblog_src2);?>
                        </div>
                        <div class="coblog-post-grid-content">
                            <div class="coblog-post-grid-content-overlay">
                                <span class="coblog-post-grid-category"><?php echo wp_kses_post(get_the_category_list( esc_html__( 'Category', 'coblog' ), '', get_the_ID() ));?></span>
                                <h4 class="coblog-post-grid-title">
                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                </h4>
                                <div class="coblog-post-grid-meta">
 
                                </div>
                            </div> <!--/.coblog-post-grid-content-overlay-->
                        </div> <!--/.coblog-post-grid-content-->
                    </div> <!--/.coblog-post-grid-overlay-->
                </div> <!--/.coblog-post-grid-item-->
                <?php
                endwhile;
                wp_reset_postdata(); ?>
            </div> <!--/.coblog-post-grid-wrap-->
		</div> <!--/.container-->
	</div> <!--/.coblog-post-grid-->
	<?php
	}


get_footer();