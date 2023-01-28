<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WriterPro
 */
?>



<footer id="colophon" class="writerPro__footer">

 <div class="container">
 	<div class="row">
 		<div class="col-md-4">
 			<div class="footer-widget-grid">
 				<?php
                 if (is_active_sidebar('footer-widget-1')) {
   	                 dynamic_sidebar('footer-widget-1');
                    }
                   ?>
 			</div>
 		</div>
 		<div class="col-md-4">
 			<div class="footer-widget-grid">
 				<?php
                 if (is_active_sidebar('footer-widget-2')) {
   	                 dynamic_sidebar('footer-widget-2');
                    }
                   ?>
 			</div>
 		</div>
 		<div class="col-md-4">
 			<div class="footer-widget-grid">
 				<?php
                 if (is_active_sidebar('footer-widget-2')) {
   	                 dynamic_sidebar('footer-widget-2');
                    }
                   ?>
 			</div>
 		</div>
 	</div>
     <div class="writer-footer-bottom">
         <?php global $writerop;
         echo $writerop['footer_cope_right'];
         ?>
     </div>
 </div>

</footer><!-- #colophon -->

</div><!-- #page -->











<?php wp_footer(); ?>

</body>
</html>
