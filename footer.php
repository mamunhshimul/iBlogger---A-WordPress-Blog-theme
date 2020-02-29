
    <!-- Footer-->
    <footer class="site-footer bg-dark all-text-white">
      <div class="footer-top-area pt-8 pb-3">
        <div class="container">
          <div class="row large-gutters">
            
            <div class="col-lg-3 mb-4"> 
         
                   <?php if ( is_active_sidebar( 'foote-text-1' ) ) : ?> 
                   <?php dynamic_sidebar( 'foote-text-1' ); ?>
                   <?php endif; ?> 
            </div> 
            
            <div class="col-lg-3 mb-4"> 
         
                   <?php if ( is_active_sidebar( 'foote-text-2' ) ) : ?> 
                   <?php dynamic_sidebar( 'foote-text-2' ); ?>
                   <?php endif; ?> 
            </div>
            
            <div class="col-lg-3 mb-4"> 
         
                   <?php if ( is_active_sidebar( 'foote-text-3' ) ) : ?> 
                   <?php dynamic_sidebar( 'foote-text-3' ); ?>
                   <?php endif; ?> 
            </div>
            
            <div class="col-lg-3 mb-4"> 
         
                   <?php if ( is_active_sidebar( 'foote-text-4' ) ) : ?> 
                   <?php dynamic_sidebar( 'foote-text-4' ); ?>
                   <?php endif; ?> 
            </div>

          </div>
        </div>
      </div>
      <div class="footer-bottom-area py-4">
        <div class="container py-2">
          <div class="row large-gutters">
            <div class="col-md-6">
              <div class="footer-widget">
                <p class="m-md-0">© 2019 Energetic Themes</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="footer-widget">
                <ul class="list-inline m-0 p-0 text-md-right footer-nav">
                  <li class="list-inline-item mb-0"><a href="https://www.facebook.com/energeticthemes">Privacy Policy</a></li>
                  <li class="list-inline-item mb-0"><a href="https://instagram.com/energeticthemes">Terms & Conditions</a></li>
                </ul>
              </div>
            </div> 
            
            

          </div>
        </div>
      </div>
    </footer>




<?php
   global $$iBlogger_glo;
     echo $iBlogger_glo['cope-right_text'];    
?>
    <!-- End Footer--> 
     <!-- lozad js-->
    <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/lozad.min.js?>"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/bootstrap.bundle.min.js?>"></script>
    <!-- Aos js-->
    <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/aos.js?>"></script>
    <!-- Slick slider js-->
    <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/slick.min.js?>"></script>
    <!-- Magnific popup js-->
    <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/jquery.magnific-popup.min.js?>"></script>
    <!-- Countdown js-->
    <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/jquery.countdown.js?>"></script>
    <!-- CountTo js-->
    <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/jquery.countTo.js?>"></script>
    <!-- Global - Main js-->
    <script src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/js/global.js?>"></script>
  </body>

 </html>