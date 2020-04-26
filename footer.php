  <!-- Footer Main -->
  <footer id="footer-main" class="container-fluid no-left-padding no-right-padding footer-main">
    <!-- Top Footer -->
    <div class="container-fluid no-left-padding no-right-padding top-footer">
      <!-- Container -->
      <div class="container">
        <div class="back-to-top">
          <a href="#" id="back-to-top" title="Back To Top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Row -->
        <div class="row">
          <!-- Widget About -->
          <div class="col-md-3 col-sm-6 col-xs-6">
           
              <?php if ( is_active_sidebar( 'foote-text-1' ) ) : ?>
                      <?php dynamic_sidebar( 'foote-text-1' ); ?>
              <?php endif; ?> 

          </div>
          <!-- Widget About -->
          <div class="col-md-3 col-sm-6 col-xs-6">  
              <?php if ( is_active_sidebar( 'foote-text-2' ) ) : ?>
                      <?php dynamic_sidebar( 'foote-text-2' ); ?>
              <?php endif; ?> 
          </div>
          <!-- Widget About -->
          <div class="col-md-3 col-sm-6 col-xs-6"> 
              <?php if ( is_active_sidebar( 'foote-text-3' ) ) : ?>
                   <?php dynamic_sidebar( 'foote-text-3' ); ?>   
              <?php endif; ?> 
          </div>
          <!-- Widget About -->
          <div class="col-md-3 col-sm-6 col-xs-6"> 
              <?php if ( is_active_sidebar( 'foote-text-4' ) ) : ?>
                      <?php dynamic_sidebar( 'foote-text-4' ); ?>
              <?php endif; ?> 
          </div>
 

 
          
        </div><!-- Row /- -->
      </div><!-- Container /- -->
    </div><!-- Top Footer -->
    <!-- Bottom Footer -->
    <div class="container-fluid bottom-footer no-left-padding no-right-padding">
      <!-- Container -->
      <div class="container"> 
 
              <?php if ( is_active_sidebar( 'Fooeterbottom' ) ) : ?>
                      <?php dynamic_sidebar( 'Fooeterbottom' ); ?>
              <?php endif; ?>   
 
      </div><!-- Container -->
    </div><!-- Bottom Footer /- -->
  </footer><!-- Footer Main /- -->
  
  <!-- JQuery v1.12.4 -->
 

  <!-- Library - Js -->
 
 
  

  <?php wp_footer(); ?>
</body>

 </html>