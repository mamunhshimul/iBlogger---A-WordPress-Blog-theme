<?php get_header(); ?>


	<div class="main-container">		
		<main class="site-main">			
			<!-- Content Block -->
			<div class="container-fluid no-left-padding no-right-padding error-section">
				<!-- Container -->
				<div class="container">
					<h3><?php esc_html_e('Oops! That page can\'t be found.', 'iBlogger' ); ?></h3> 
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'iBlogger' ); ?></p> 
				    <a href="<?php echo esc_url( home_url( '/' )); ?>"><?php echo esc_html__( 'Back Home', 'iBlogger' ); ?> 
	 
				</div><!-- Container /- -->
			</div><!-- Content Block /- -->			
		</main>	
	</div>

<?php get_footer(); ?>