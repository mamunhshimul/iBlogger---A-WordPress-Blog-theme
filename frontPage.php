<?php get_header(); 


/*
 Template Name: home 
*/

?>

    <!-- Main Content -->
    <div id="content" role="main">
      <!-- Promo Section -->
      <section class="section section-alt">
        <div class="row-fluid">
          <div class="flexslider" data-flex-animation="slide" data-flex-controlsalign="center" data-flex-controlsposition="inside" data-flex-directions="hide" data-flex-speed="7000" id="intro">
            <ul class="slides">

             <?php $homeHeaderitem = new WP_Query(array(
 
                    'post_type'      => 'homeHeader',
                    'posts_per_page' => 5

                                        )); ?>

              <?php while($homeHeaderitem->have_posts()) : $homeHeaderitem->the_post();  ?>
 

              <li>
                <div class="super-hero-unit">

                  <figure>
                    <img alt="some image" src="<?php the_post_thumbnail(); ?>">
                    <figcaption class="flex-caption">
                      <h1 class="super">
                        <?php the_title(); ?> 
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
              <li class="span3">
                <div class="round-box round-medium">
                  <span class="box-inner">
                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-a-300x300.jpg">
                    <i class="icon-heart"></i>
                  </span>
                </div>
                <h3 class="text-center">
                  Web Applications
                </h3>
                <p>
                  Nam vitae ligula eu mi molestie fringilla sed ac massa. Quisque justo metus, commodo eu viverra quis, volutpat et urna.
                </p>
                <a class="more-link" href="services.html">
                  <strong>
                    Read
                  </strong>
                  More
                </a>
              </li>
              <li class="span3">
                <div class="round-box round-medium">
                  <span class="box-inner">
                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-b-300x300.jpg">
                    <i class="icon-aws"></i>
                  </span>
                </div>
                <h3 class="text-center">Cloud Hosting</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a class="more-link" href="services.html">
                  <strong>
                    Read
                  </strong>
                  More
                </a>
              </li>
              <li class="span3">
                <div class="round-box round-medium">
                  <span class="box-inner">
                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-c-300x300.jpg">
                    <i class="icon-apple"></i>
                  </span>
                </div>
                <h3 class="text-center">Social apps</h3>
                <p>
                  Sed rhoncus leo eget elit tincidunt vestibulum nec ac urna. Aliquam lobortis odio in felis ultricies bibendum sunt in culpa qui.
                </p>
                <a class="more-link" href="services.html">
                  <strong>
                    Read
                  </strong>
                  More
                </a>
              </li>
              <li class="span3">
                <div class="round-box round-medium">
                  <span class="box-inner">
                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-d-300x300.jpg">
                    <i class="icon-cog"></i>
                  </span>
                </div>
                <h3 class="text-center">Smart design</h3>
                <p>
                  Phasellus turpis metus, aliquam a facilisis nec, aliquet et elit. Suspendisse fermentum mattis dolor ut tristique nibh sapien mollis.
                </p>
                <a class="more-link" href="services.html">
                  <strong>
                    Read
                  </strong>
                  More
                </a>
              </li>
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
                    <img alt="some image" src="images/assets/devices/imac-2.png">
                  </li>
                  <li>
                    <img alt="some image" src="images/assets/devices/macbook.png">
                  </li>
                  <li>
                    <img alt="some image" src="images/assets/devices/ipad.png">
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
            <li class="span4">
              <div class="row-fluid">
                <div class="span4">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-3-300x300.jpg">
                    </a>
                  </div>
                  <h5 class="text-center light">
                    12 dec 2012
                  </h5>
                </div>
                <div class="span8">
                  <h3>
                    <a href="post.html">
                      A normal post
                    </a>
                  </h3>
                  <p>
                    Curabitur euismod ultrices purus eget vehicula. Cras interdum est sed dui congue imperdiet.
                  </p>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="row-fluid">
                <div class="span4">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-1-300x300.jpg">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                  <h5 class="text-center light">
                    10 dec 2012
                  </h5>
                </div>
                <div class="span8">
                  <h3>
                    <a href="post.html">
                      Link post
                    </a>
                  </h3>
                  <p>
                    Donec viverra pulvinar ante, a placerat risus tincidunt vitae. Donec felis dolor, malesuada purus.
                  </p>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="row-fluid">
                <div class="span4">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-e-300x300.jpg">
                      <i class="icon-play"></i>
                    </a>
                  </div>
                  <h5 class="text-center light">
                    12 Nov 2012
                  </h5>
                </div>
                <div class="span8">
                  <h3>
                    <a href="post.html">
                      Video post
                    </a>
                  </h3>
                  <p>
                    Phasellus condimentum dapibus ligula vel dapibus. Praesent dictum aliquet pharetra magna.
                  </p>
                </div>
              </div>
            </li>
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
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client1.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client2.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client3.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client4.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client5.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client6.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client7.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client1.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client2.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client3.png">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
  

  <?php get_footer(); ?>