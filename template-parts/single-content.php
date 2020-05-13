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
                    <span><a href="#"><i class="fa fa-comment"></i> <?php echo get_comments_number(); ?> Comments</a></span>
                    <span>
      
                 </span>
                  </div>

                  <p><?php the_content();?></p>
 
  
                   <div class="entry-footer">
 

                   <div class="tags">
                     <span class="fa fa-tags"></span>
                     <?php  
                      $tags = get_tags(
                            array(
                              'orderby' => 'name',
                              'hide_empty' => false,
                              'parent' => 0,
                              'number' => 4, 
                          ));  
 
                        foreach ($tags as $cat) {
                             $category_link = get_tag_link($cat->cat_ID);
                             echo '<a href="'.esc_url( $category_link ).'" title="'.esc_attr($cat->name).'">'.$cat->name.'</a>';
                            } ?>  
                   </div>
  


 
                  </div>
                </div>
                <div class="about-author">                
                  <i><img src="<?php echo get_avatar(get_the_author_meta("ID")) ?>"></i>
                  <?php echo get_avatar(get_the_author_meta("ID")) ?>
                  <h3><?php the_author();?></h3>
                  <p><?php echo get_the_author_meta("description")?></p>
                    <ul>
                      <?php 
                          $iBlogger_author_facebook = get_field('facebook', 'user_'.get_the_author_meta('ID'));
                          $iBlogger_author_twitter = get_field('twitter', 'user_'.get_the_author_meta('ID'));
                          $iBlogger_author_pinterest = get_field('pinterest', 'user_'.get_the_author_meta('ID'));
                          $iBlogger_author_skype = get_field('skype', 'user_'.get_the_author_meta('ID'));
                       ?>

                       <?php if ($iBlogger_author_facebook):?>
                             <li>
                                <a href="<?php echo esc_url($iBlogger_author_facebook);?>" title="Facebook">
                                  <i class="fa fa-facebook"></i>
                                </a>
                             </li> 
                       <?php endif ?> 
                       <?php if ($iBlogger_author_twitter):?> 
                            <li>
                                <a href="<?php echo esc_url($iBlogger_author_twitter);?>" title="Twitter">
                                  <i class="fa fa-twitter"></i>
                                </a>
                             </li>
                       <?php endif ?> 
                       <?php if ($iBlogger_author_pinterest):?>
                             <li>
                                <a href="<?php echo esc_url($iBlogger_author_pinterest);?>" title="Pinterest">
                                  <i class="fa fa-pinterest-p"></i>
                                </a>
                              </li>
                       <?php endif ?> 
                       <?php if ($iBlogger_author_skype):?>
                             <li>
                              <a href="<?php echo esc_url($iBlogger_author_skype);?>" title="Skype">
                                <i class="fa fa-skype"></i>
                              </a>
                             </li> 
                       <?php endif ?>
                    </ul>
                </div>
              </article>

        