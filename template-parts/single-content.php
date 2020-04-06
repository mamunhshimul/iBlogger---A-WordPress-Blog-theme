              <article class="type-post">
                <!-- Entry Cover -->
                <div class="entry-cover"> 
                      <?php
                         if (has_post_thumbnail()) {    
                                 the_post_thumbnail('', array(
                                 'class' => 'img-fluid' 
                             ));
                         }?>
                  <div class="entry-meta"><a href="#" title="Lifestyle">Lifestyle</a></div>
                </div><!-- Entry Cover /- -->
                <div class="entry-content">
                  <h3 class="entry-title"><a href="#" title="Our Writers Understand Lifestyle">Our Writers Understand Lifestyle</a></h3>
                  <div class="post-meta">
                    <span><a href="#"><i class="fa fa-user"></i> By <?php the_author(); ?></a></span>
                    <span><a href="#"><i class="fa fa-clock-o"></i> March 20, 2017</a></span>
                    <span><a href="#"><i class="fa fa-comment"></i> Comments</a></span>
                  </div>

                  <p><?php the_content();?></p>
 
  
                   <div class="entry-footer">
                    <div class="tags">
                      <span class="fa fa-tags"></span>
                      <a href="#" title="Audio">Audio</a>
                      <a href="#" title="Life Style">Life Style</a>
                      <a href="#" title="Photographer">Photographer</a>
                      <a href="#" title="Travel">Travel</a>
                    </div>
                    <ul>
                      <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                      <li><a href="#" title="Skype"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="about-author">                
                  <i><img src="assets/images/about-author.jpg" alt="Author"></i>
                  <h3><?php the_author();?></h3>
                  <p>Efficiently reintermediate distinctive leadership through backend potentialities. Compellingly incentivize granular without standardized e-tailers.</p>
                  <ul>
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </article>