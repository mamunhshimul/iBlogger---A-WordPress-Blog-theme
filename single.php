 <?php get_header(); ?>

  <div class="main-container">  
    <main class="site-main">      
      <!-- Content Block -->
      <div class="container-fluid no-left-padding no-right-padding content-block blog-single">
        <!-- Container -->
        <div class="container">
          <!-- Row -->
          <div class="row">
            <!-- Content Area -->
            <div class="col-md-8 col-sm-7 col-xs-12 content-area content-area-space">

              <?php
                while ( have_posts() ) : the_post(); 
              
                   get_template_part( 'template-parts/single-content', get_post_format() );
              
               endwhile; ?> 
              
              <!-- Comment Area -->
              <div id="comments" class="comments-area">
                <h2 class="comments-title">3 Comments</h2>
                <div class="comment-block">
                  <ol class="comment-list">
                    <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
                      <div class="comment-body">
                        <footer class="comment-meta">
                          <div class="comment-author vcard">
                            <img alt="img" src="assets/images/comment-1.jpg" class="avatar avatar-72 photo"/>
                            <b class="fn">Tomas Tisdale</b>
                          </div>
                          <div class="comment-metadata">
                            <a href="#">March 20, 2017</a>                    
                          </div>
                          <div class="reply">
                            <a rel="nofollow" class="comment-reply-link" href="#"><i class="fa fa-reply"></i></a>
                          </div>
                        </footer>
                        <div class="comment-content">
                          <p>Efficiently reintermediate distinctive leadership through backend potentialities. Compellingly granular without standardized e-tailers.</p>
                        </div>
                      </div>
                      <ol class="children">
                        <li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 parent">
                          <div class="comment-body">
                            <footer class="comment-meta">
                              <div class="comment-author vcard">
                                <img alt="img" src="assets/images/comment-2.jpg" class="avatar avatar-72 photo"/>
                                <b class="fn">Rachael  Kite</b>
                              </div>
                              <div class="comment-metadata">
                                <a href="#">March 20, 2017</a>
                              </div>
                              <div class="reply">
                                <a rel="nofollow" class="comment-reply-link" href="#"><i class="fa fa-reply"></i></a>
                              </div>
                            </footer>
                            <div class="comment-content">
                              <p>Efficiently reintermediate distinctive leadership through backend potentialities. Compellingly granular without standardized e-tailers.</p>
                            </div>
                          </div>
                        </li>
                      </ol>
                    </li>
                    <li class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1">
                      <div class="comment-body">
                        <footer class="comment-meta">
                          <div class="comment-author vcard">
                            <img alt="img" src="assets/images/comment-3.jpg" class="avatar avatar-72 photo"/>
                            <b class="fn">Michael  Arnold</b>
                          </div>
                          <div class="comment-metadata">
                            <a href="#">March 20, 2017</a>
                          </div>
                          <div class="reply">
                            <a rel="nofollow" class="comment-reply-link" href="#"><i class="fa fa-reply"></i></a>
                          </div>
                        </footer>
                        <div class="comment-content">
                          <p>Efficiently reintermediate distinctive leadership through backend potentialities. Compellingly granular without standardized e-tailers.</p>
                        </div>
                      </div>
                    </li>
                  </ol><!-- .comment-list -->
                </div>
                <!-- Comment Form -->
                <div id="respond" class="comment-respond">
                  <h2 class="comment-reply-title">leave your comment</h2>
                  <div class="comment-form-box">
                    <form method="post" id="commentform" class="comment-form">
                      <p class="comment-form-author">
                        <input id="author" name="author" placeholder="Name :" size="30" maxlength="245" required="required" type="text"/>
                      </p>
                      <p class="comment-form-email">
                        <input id="email" name="email" placeholder="e-mail :" required="required" type="email"/>
                      </p>
                      <p class="comment-form-url">
                        <input id="url" name="url" placeholder="website :" type="url"/>
                      </p>
                      <p class="comment-form-comment">
                        <textarea id="comment" name="comment" placeholder="comment :" rows="5" required="required"></textarea>
                      </p>
                      <p class="form-submit">
                        <input name="submit" class="submit" value="Post Comment" type="submit"/>
                      </p>
                    </form>
                  </div>
                </div><!-- Comment Form /- -->
              </div><!-- Comment Area -->
            </div><!-- Content Area /- -->
            <!-- Widget Area -->
            <?php get_sidebar();<svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
<g filter="url(#filter0_d)">
<circle cx="47.5" cy="30.5" r="23.5" fill="#C4C4C4"/>
<circle cx="47.5" cy="30.5" r="23.5" fill="url(#paint0_linear)"/>
</g>
<defs>
<filter id="filter0_d" x="0" y="0" width="93" height="93" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
<feOffset dx="-1" dy="16"/>
<feGaussianBlur stdDeviation="11.5"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.471296 0 0 0 0 0.471296 0 0 0 0 0.471296 0 0 0 0.29 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
</filter>
<linearGradient id="paint0_linear" x1="47.5" y1="7" x2="78.05" y2="38.725" gradientUnits="userSpaceOnUse">
<stop stop-color="#FFAA5F"/>
<stop offset="1" stop-color="#FED17D"/>
</linearGradient>
</defs>
</svg>
?>
          </div><!-- Row /- -->
        </div><!-- Container /- -->
      </div><!-- Content Block /- -->
    </main>
  </div>
  
<?php get_footer();?>   