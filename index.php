<?php get_header(); ?>






    <!-- Main Content -->
    <div id="content" role="main">
      <!-- Promo Section -->
      <section class="section section-alt">
        <div class="row-fluid">
          <div class="super-hero-unit">
            <figure>
              <img alt="some image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/assets/landscapes/landscape-2-1250x300.jpg">
              <figcaption class="flex-caption">
                <h1 class="super animated fadeinup delayed">
                  News
                  <span class="lighter">
                    &amp;
                  </span>
                  Posts
                </h1>
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
      <!-- Blog -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span9">

 <?php while(have_posts()) : the_post(); ?>
              <article class="post row-fluid">
                <div class="span2 post-info">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="<?php get_stylesheet_directory_uri(); ?>/images/assets/people/man-1-300x300.jpg">
                    </a>
                  </div>
                  <h5 class="text-center">
                    <?php the_author(); ?>
                  </h5>
                  <h5 class="text-center light">
                    <?php the_time("d M Y"); ?>
                  </h5>
                </div>
                <div class="span10 post-body">
                  <div class="post-head">
                    <h2 class="small-screen-center">
                      <?php the_title(); ?>
                      <a href="post.html">
                        <?php the_title(); ?>
                      </a>
                    </h2>
                    <div class="post-extras">
                      <i class="icon-tags"></i>
                      <a href="#">PHP,</a>
                      <a href="#">Web Design,</a>
                      <a href="#">Bootstrap</a>
                      <i class="icon-bookmark"></i>
                      <a href="#">News,</a>
                      <a href="#">Business</a>
                      <i class="icon-comments"></i>
                      <a href="post.html#comments">5 comments</a>
                    </div>
                  </div>
                  <figure class="post-media">
                    <a href="post.html">
                      <img alt="some image" src="<?php get_stylesheet_directory_uri(); ?>/images/assets/landscapes/landscape-3-800x400.jpg">
                    </a>
                  </figure>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                  </p>
                  <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <a class="more-link pull-right" href="post.html">
                    <strong>
                      Read
                    </strong>
                    More
                  </a>
                </div>
              </article>
              <!--/..blog-post-->


              <?php endwhile;?>

 
              <div class="row-fluid">
                <div class="pagination pagination-small pagination-centered offset2 span10">
                  <ul>
                    <li class="disabled">
                      <a href="#">
                        <i class="icon-angle-left"></i>
                      </a>
                    </li>
                    <li class="active">
                      <a href="#">1</a>
                    </li>
                    <li>
                      <a href="#">2</a>
                    </li>
                    <li>
                      <a href="#">3</a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <aside class="span3 sidebar">


 

 
                      <?php dynamic_sidebar('right-sidebar'); ?> 
 
 
 
<!--               <div class="sidebar-widget widget_recent_entries">
  <h3 class="sidebar-header">Recent posts</h3>
  <ul>
    <li>
      <div class="row-fluid">
        <div class="span3">
          <div class="round-box box-mini">
            <a class="box-inner" href="post.html">
              <img alt="some image" class="img-circle" src= /images/assets/landscapes/landscape-1-300x300.jpg">
            </a>
          </div>
        </div>
        <div class="span9">
          <h4>
            <a href="post.html">
              Nunc vehicula dapibus
            </a>
          </h4>
          <h5 class="light">
            12 Feb 2013
          </h5>
        </div>
      </div>
    </li>
    <li>
      <div class="row-fluid">
        <div class="span3">
          <div class="round-box box-mini">
            <a class="box-inner" href="post.html">
              <img alt="some image" class="img-circle" src=" /images/assets/landscapes/landscape-2-300x300.jpg">
            </a>
          </div>
        </div>
        <div class="span9">
          <h4>
            <a href="post.html">
              Fusce a metus eu diam
            </a>
          </h4>
          <h5 class="light">
            21 Jan 2013
          </h5>
        </div>
      </div>
    </li>
    <li>
      <div class="row-fluid">
        <div class="span3">
          <div class="round-box box-mini">
            <a class="box-inner" href="post.html">
              <img alt="some image" class="img-circle" src=" /images/assets/landscapes/landscape-3-300x300.jpg">
            </a>
          </div>
        </div>
        <div class="span9">
          <h4>
            <a href="post.html">
              Quisque lacus augue
            </a>
          </h4>
          <h5 class="light">
            13 dec 2012
          </h5>
        </div>
      </div>
    </li>
  </ul>
</div>
<div class="sidebar-widget widget_archive">
  <h3 class="sidebar-header">Archive</h3>
  <ul>
    <li>
      <h4>
        <a href="#">
          January
          <span class="light">
            (12)
          </span>
        </a>
      </h4>
    </li>
    <li>
      <h4>
        <a href="#">
          December
          <span class="light">
            (7)
          </span>
        </a>
      </h4>
    </li>
    <li>
      <h4>
        <a href="#">
          October
          <span class="light">
            (4)
          </span>
        </a>
      </h4>
    </li>
    <li>
      <h4>
        <a href="#">
          September
          <span class="light">
            (9)
          </span>
        </a>
      </h4>
    </li>
    <li>
      <h4>
        <a href="#">
          August
          <span class="light">
            (13)
          </span>
        </a>
      </h4>
    </li>
  </ul>
</div>
<div class="sidebar-widget widget_twitter">
  <h3 class="sidebar-header">Twitter feed</h3>
  <div class="twitter-feed"></div>
</div> -->

            </aside>
          </div>
        </div>

      </section>
    </div>
 
  </div>
 

<?php get_footer(); ?>


<?php
 /*
 Template Name: Blog
 */ 
 ?>