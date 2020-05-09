<?php
 

get_header();
?>

<main>
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-7">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

 
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
			<aside class="col-xl-3 col-lg-4 col-md-5 middle-sidebar ml-xl-auto pl-lg-0 pl-md-0">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</main>

<?php
get_footer();
