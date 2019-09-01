<?php get_header(); 


/*
 Template Name: about 
*/

?>

    <!-- Main Content -->
    <div id="content" role="main">
      <!-- Promo Section -->
      <section class="section section-alt">
        <div class="row-fluid">
          <div class="super-hero-unit">

        <?php $blogHeaderitem = new WP_Query(array(
 
                    'post_type'      => 'aboutHeader',
                    'posts_per_page' => 2

                                        )); ?>

             <?php while($blogHeaderitem->have_posts()) : $blogHeaderitem->the_post();  ?>
 


            <figure>
             <img alt="some image" src="<?php the_post_thumbnail(); ?>">
              <figcaption class="flex-caption">
                <h1 class="super animated fadeinup delayedmore">
                  <?php   the_title(); ?>
                </h1>
              </figcaption>
            </figure>


             <?php endwhile; ?>

            
          </div>
        </div>
      </section>
      <!-- Founder -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="section-header">
              <h1>
                Mary Doe
                <small class="light">founder</small>
              </h1>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span6">
              <img alt="some image" class="push-bottom" src="images/assets/people/woman-2-800x800.jpg">
            </div>
            <div class="span6">
              <p class="lead">
                Pellentesque vulputate blandit condimentum. Etiam <strong>porttitor</strong> laoreet velit, quis mollis libero eleifend id. Sed in hendrerit libero. Donec vulputate placerat libero, sed convallis justo venenatis eu. Mauris ante ligula, consequat id <strong>condimentum</strong> at, ullamcorper sit amet justo. Sed odio sem, sodales vel tempor sed, sollicitudin et ipsum.
              </p>
              <ul class="icons lead icons-small">
                <li>
                  <i class="icon-ok gray"></i>
                  Donec velit augue
                </li>
                <li>
                  <i class="icon-ok gray"></i>
                  Pellentesque vulputate blandit
                </li>
                <li>
                  <i class="icon-ok gray"></i>
                  Ullamcorper sit amet
                </li>
                <li>
                  <i class="icon-ok gray"></i>
                  Etiam porttitor laoreet
                </li>
                <li>
                  <i class="icon-ok gray"></i>
                  Sollicitudin et ipsum
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Our people -->
      <section class="section section-alt section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Team
              <small class="light">& Skills</small>
            </h1>
          </div>
          <ul class="unstyled row-fluid">
            <li class="span4">
              <div class="round-box box-big">
                <span class="box-inner">
                  <img alt="some image" class="img-circle" src="images/assets/people/man-1-300x300.jpg">
                </span>
              </div>
              <h3 class="text-center">
                John Langan
                <small class="block">
                  Art director
                </small>
              </h3>
              <p>
                Cras nisi tortor, lacinia sit amet porta nec, ornare vel felis. Phasellus fermentum porta est, eget blandit felis egestas placerat. Integer pharetra sem non tellus facilisis viverra. Integer mollis odio ac dolor mattis facilisis.
              </p>
              <ul class="inline text-center big social-icons">
                <li>
                  <a data-iconcolor="#00a0d1" href="#">
                    <i class="icon-twitter"></i>
                  </a>
                </li>
                <li>
                  <a data-iconcolor="#3b5998" href="#">
                    <i class="icon-facebook"></i>
                  </a>
                </li>
                <li>
                  <a data-iconcolor="#910101" href="#">
                    <i class="icon-pinterest"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class="span4">
              <div class="round-box box-big">
                <span class="box-inner">
                  <img alt="some image" class="img-circle" src="images/assets/people/woman-3-300x300.jpg">
                </span>
              </div>
              <h3 class="text-center">
                Sue Doe
                <small class="block">
                  Creative director
                </small>
              </h3>
              <p>
                Maecenas egestas nulla vitae quam sollicitudin sed aliquam velit rutrum. Sed pulvinar lectus in leo tempor venenatis. Curabitur blandit posuere lorem, ut lobortis lorem hendrerit nec. Nulla accumsan urna congue nunc fringilla.
              </p>
              <ul class="inline big text-center social-icons">
                <li>
                  <a data-iconcolor="#00a0d1" href="#">
                    <i class="icon-twitter"></i>
                  </a>
                </li>
                <li>
                  <a data-iconcolor="#E45135" href="#">
                    <i class="icon-google-plus"></i>
                  </a>
                </li>
                <li>
                  <a data-iconcolor="#3b5998" href="#">
                    <i class="icon-facebook"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class="span4">
              <div class="round-box box-big">
                <span class="box-inner">
                  <img alt="some image" class="img-circle" src="images/assets/people/man-2-300x300.jpg">
                </span>
              </div>
              <h3 class="text-center">
                Chris Doe
                <small class="block">
                  IOS Developer
                </small>
              </h3>
              <p>
                Donec velit augue, mattis nec varius et, pellentesque ut tellus. Proin nibh nibh, viverra vel congue quis, pharetra a dolor. Vivamus neque ligula, pellentesque ut rutrum eget, venenatis nec ipsum. Vivamus faucibus tellus non mauris.
              </p>
              <ul class="inline big text-center social-icons">
                <li>
                  <a data-iconcolor="#00a0d1" href="#">
                    <i class="icon-twitter"></i>
                  </a>
                </li>
                <li>
                  <a data-iconcolor="#5FB0D5" href="#">
                    <i class="icon-linkedin"></i>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </section>
      <!-- Join us -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Want
              <small class="light">to Join?</small>
            </h1>
          </div>
          <p class="lead text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Cras lobortis congue tempus. Mauris non justo nec arcu suscipit lacinia aliquet sed purus.
          </p>
          <div class="text-center">
            <div class="btn btn-large btn-primary">
              <i class="icon-heart"></i>
              I want to join
            </div>
          </div>
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
  <!-- Page Footer -->


  <?php   get_footer(); ?>
 