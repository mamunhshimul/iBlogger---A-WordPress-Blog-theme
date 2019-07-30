<?php get_header(); ?>

    <!-- Main Content -->
    <div id="content" role="main">
      <!-- Promo Section -->
      <section class="section section-alt">
        <div class="row-fluid">
          <div class="flexslider" data-flex-animation="slide" data-flex-controlsalign="center" data-flex-controlsposition="inside" data-flex-directions="hide" data-flex-speed="7000" id="intro">
            <ul class="slides">

                <?php $slideritem = new WP_Query(array(

                       'post_type'  => 'BoxSlide',


                )); ?>

                <?php while($slideritem->have_posts()) : $slideritem->the_post();  ?>
                  <li>
                    <div class="super-hero-unit">
                      <figure>
                        <img alt="some image" src="<?php the_post_thumbnail();?>">
                          <figcaption class="flex-caption">
                            <h1 class="super">
                                   Bold
                                 <span class="lighter">
                                  &amp;
                                 </span>
                                  Beautiful
                             </h1>
                          </figcaption>
                      </figure>
                    </div>
                  </li>
                <?php endwhile; ?>
            </ul>
          </div>
        </div>
      </section>
      <!-- Our Services -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="section-header">
              <h1>
                What
                <small class="light">we do?</small>
              </h1>
            </div>
            <ul class="unstyled row-fluid">


              <?php 
                   $box_service = new WP_Query(array(

                        'post_type' => 'boxServices',
                        'post_per_page' => 9

                   ));
               ?>

              <?php while($box_service->have_posts()) : $box_service->the_post(); ?>

                  <li class="span3">
                <div class="round-box round-medium">
                  <span class="box-inner">
                    <img class="img-circle" src="<?php the_post_thumbnail() ?> ">
                    <i class="icon-heart"></i>
                  </span>
                </div>
                <h3 class="text-center">
                  <?php the_title(); ?>
                </h3>
                <p><?php the_content(); ?></p>
                <a class="more-link" href="services.html">
                  <strong>
                    Read
                  </strong>
                  More
                </a>
                  </li>

              <?php endwhile; ?>  



   
            </ul>
          </div>
        </div>
      </section>
      <!-- Our work -->
      <section class="section section-alt section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Recent
              <small class="light">work?</small>
            </h1>
          </div>
          <div class="row-fluid">
            <div class="span6">
              <div class="flexslider margin-bottom" data-flex-directions="hide" data-flex-speed="10000" id="work">
                <ul class="slides">

                  <li>
                    <img alt="some image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/devices/imac-2.png">
                  </li>
                  <li>
                    <img alt="some image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/devices/macbook.png">
                  </li>
                  <li>
                    <img alt="some image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/devices/ipad.png">
                  </li>
                </ul>
              </div>
            </div>
            <div class="span6">
              <ul class="icons">
                <li>
                  <h4>
                    <a href="services.html">
                      <i class="icon-twitter"></i>
                      Social apps development
                    </a>
                  </h4>
                  <p>
                    Quisque et risus in lectus fringilla consectetur. In quis semper lacus. Pellentesque sed magna quis risus placerat tempor vel non lacus.
                  </p>
                </li>
                <li>
                  <h4>
                    <a href="services.html">
                      <i class="icon-heart"></i>
                      Apps that your clients are goind to love
                    </a>
                  </h4>
                  <p>
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis consectetur venenatis ante in adipiscing.
                  </p>
                </li>
                <li>
                  <h4>
                    <a href="services.html">
                      <i class="icon-cog"></i>
                      Inovations that takes you to the next level
                    </a>
                  </h4>
                  <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ultrices pretium nibh, ac mollis lacus congue vel.
                  </p>
                </li>
                <li>
                  <h4>
                    <a href="services.html">
                      <i class="icon-leaf"></i>
                      Enviromental friendly design
                    </a>
                  </h4>
                  <p>
                    Nunc vitae nulla urna. Integer feugiat mauris at massa egestas vel eleifend sem commodo. Suspendisse non ante ut lacus venenatis cursus.
                  </p>
                </li>
                <li>
                  <h4>
                    <a href="services.html">
                      <i class="icon-magic"></i>
                      Design that has some magic in it
                    </a>
                  </h4>
                  <p>
                    Nam sodales tincidunt diam, ut accumsan augue molestie eget. Nullam euismod molestie elit ut tempus.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest News -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Latest
              <small class="light">news?</small>
            </h1>
          </div>
          <ul class="unstyled row-fluid">

              <?php $frontPageBlog = new WP_Query(array(

                       'post_type'      => 'front-page-blog',
                       'post_per_page'  => 3

                      
                    ));?>

            <?php while($frontPageBlog->have_posts()) : $frontPageBlog->the_post(); ?>
              <li class="span4">
                 <div class="row-fluid">
                 <div class="span4">
                   <div class="round-box box-small">
                     <a class="box-inner" href="post.html">
                       <img alt="some image" class="img-circle" src="<?php the_post_thumbnail();?>">
                     </a>
                   </div>
                   <h5 class="text-center light">
                     <?php the_time('DMY'); ?>
                   </h5>
                 </div>
                 <div class="span8">
                   <h3>
                     <a href="post.html">
                       <?php the_title(); ?>
                     </a>
                   </h3>
                   <p>
                      <?php the_content(); ?>
                   </p>
                </div>
              </div>
             </li>                     
           <?php endwhile; ?> 


 
 
          </ul>
        </div>
      </section>
      <!-- Our Clients -->
      <section class="section section-alt section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Clients
              <small class="light">We Love</small>
            </h1>
          </div>
          <div class="flexslider fadein-links" data-flex-animation="slide" data-flex-controls="hide" data-flex-directions-position="outside" data-flex-directions-type="fancy" data-flex-itemwidth="250" data-flex-slideshow="false" id="client">
            <ul class="slides">

                  <?php $frontPageBlog = new WP_Query(array(

                      'post_type'      => 'front-page-clints'
                    ));?>
 
                   <?php while($frontPageBlog->have_posts()) : $frontPageBlog->the_post(); ?>
                   
                    <li>
                      <a href="#">
                        <?php the_post_thumbnail();?>
                      </a>
                    </li>
                   <?php endwhile; ?> 
            </ul>
          </div>
        </div>
      </section>
    </div>

 <?php
 /*
 Template Name: Home
 */ 
 ?>
  </div>
 
 <?php get_footer(); ?>