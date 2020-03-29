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
          <!--======================================================================= Widget About /- -->


          <div class="col-md-3 col-sm-6 col-xs-6">
            <aside class="widget widget_about">
              <a href="index-2.html"><img src="assets/images/logo.png" alt="Logo" /></a>
              <p>Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. </p>
              <aside class="widget widget_social">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </aside>
            </aside>
          </div><!-- Widget About /- -->
          
          <!-- Widget : Popular Post -->
          <div class="col-md-3 col-sm-6 col-xs-6">
            <aside class="widget widget_latestposts">
              <h3 class="widget-title">Popular Posts</h3>
              <div class="latest-content">
                <a href="#" title="Recent Posts"><i><img src="assets/images/ftr-pp-1.jpg" class="wp-post-image" alt="blog-1"></i></a>
                <span><a href="#">March 20, 2017</a></span>
                <h5><a title="Collaboratively scale ethical total linkage " href="#">Collaboratively scale ethical total linkage </a></h5>
              </div>
              <div class="latest-content">
                <a href="#" title="Recent Posts"><i><img src="assets/images/ftr-pp-2.jpg" class="wp-post-image" alt="blog-1"></i></a>
                <span><a href="#">March 20, 2017</a></span>
                <h5><a title="Collaboratively scale ethical total linkage " href="#">Collaboratively scale ethical total linkage </a></h5>
              </div>
            </aside>
          </div><!-- Widget : Popular Post /- -->
          
          <!-- Widget : Twitter -->
          <div class="col-md-3 col-sm-6 col-xs-6">
            <aside class="widget widget_twitter">
              <h3 class="widget-title">Tweet</h3>
              <div class="tweet-box">
                <p><i class="fa fa-twitter"></i> <a href="#" title="Johe deo">@ Johe deo</a> Distinctively predominate one-to-one value whereas client-focused experiences.</p>
                <span>3 hoursago</span>
              </div>
              <div class="tweet-box">
                <p><i class="fa fa-twitter"></i> <a href="#" title="Johe deo">@ Johe deo</a> Distinctively predominate one-to-one value whereas client-focused experiences.</p>
                <span>3 hoursago</span>
              </div>
            </aside>
          </div><!-- Widget : Twitter -->
          
          <!-- Widget : Flickr -->
          <div class="col-md-3 col-sm-6 col-xs-6">
            <aside class="widget widget_flickr">
              <h3 class="widget-title">flickr PHOTO</h3>
              <ul>
                <li><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/images/ftr-flickr-1.jpg" alt="Flickr" /></a></li>
                <li><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/images/ftr-flickr-2.jpg" alt="Flickr" /></a></li>
                <li><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/images/ftr-flickr-3.jpg" alt="Flickr" /></a></li>
                <li><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/images/ftr-flickr-4.jpg" alt="Flickr" /></a></li>
                <li><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/images/ftr-flickr-5.jpg" alt="Flickr" /></a></li>
                <li><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/images/ftr-flickr-6.jpg" alt="Flickr" /></a></li>
              </ul>
            </aside>
          </div><!-- Widget : Flickr /- -->
          
        </div><!-- Row /- -->
      </div><!-- Container /- -->
    </div><!-- Top Footer -->
    <!-- Bottom Footer -->
    <div class="container-fluid bottom-footer no-left-padding no-right-padding">
      <!-- Container -->
      <div class="container">
        <p>Copyright &copy; 2017 Hoary HTML Template Design</p>
      </div><!-- Container -->
    </div><!-- Bottom Footer /- -->
  </footer><!-- Footer Main /- -->
  
  <!-- JQuery v1.12.4 -->
    <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/jquery-1.12.4.min.js"></script>  

  <!-- Library - Js -->
  <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/lib.js"></script>
  
  <!-- Library - Theme JS -->
  <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/main.js"></script>
  

  <?php wp_footer(); ?>
</body>

 </html>