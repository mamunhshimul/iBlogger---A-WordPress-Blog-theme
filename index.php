<?php get_header(); 


/*
 Template Name: blog 
*/

?>

    <!-- Main Content -->
    <div id="content" role="main">
      <!-- Promo Section -->
      <section class="section section-alt">
        <div class="row-fluid">
          <div class="super-hero-unit">

            <?php $blogHeaderitem = new WP_Query(array(
 
                    'post_type'      => 'blogHeader',
                    'posts_per_page' => 2

                                        )); ?>

             <?php while($blogHeaderitem->have_posts()) : $blogHeaderitem->the_post();  ?>
 

                 <figure>
                   <img alt="some image" src="<?php the_post_thumbnail(); ?>">
                   <figcaption class="flex-caption">
                     <h1 class="super animated fadeinup delayed"> 
                        <?php  the_title(); ?>
                     </h1>
                    </figcaption>
                 </figure>


             <?php endwhile; ?> 

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
                      <img alt="some image" class="img-circle" src="<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>">
                    </a>
                  </div>
                  <h5 class="text-center">
                     <?php  the_author(); ?>
                  </h5>
                  <h5 class="text-center light">
                    <?php   the_time('DMY'); ?>
                  </h5>
                </div>
                <div class="span10 post-body">
                  <div class="post-head">
                    <h2 class="small-screen-center">
                      <a href="<?php  the_permalink(); ?>">
                         <?php  the_title(); ?>
                      </a>
                    </h2>
                    <div class="post-extras">
                      <i class="icon-tags"></i>
                      <a href="#"> <?php  the_tags(); ?>,</a> 
                      <i class="icon-comments"></i>
                      <a href="post.html#comments"><?php comments_popup_link('No Comment','one Comment','%comments'); ?></a>
                    </div>
                  </div>
                  <figure class="post-media">
                    <a href="post.html">
                      <img alt="some image" src="<?php  the_post_thumbnail(); ?>">
                    </a>
                  </figure>
                  <p><?php readMore(50); ?>. . .</p> 
                  <a class="more-link pull-right" href="post.html">
                    <strong>
                      Read
                    </strong>
                    More
                  </a>
                </div>
               </article>
              <?php endwhile; ?>

 
              <div class="row-fluid">
                <div class="pagination pagination-small pagination-centered offset2 span10">
                 <?php the_posts_pagination(array(

                        'prev_text'=>'New Post',
                        'next_text'=>'Old Post',
                        'screen_reader_text'=>' ',
                        'mid_size'            =>4,
                        'before_paga_number'  =>'',
                        'after_paga_number'   =>'',
                        'show_all'   =>'true',

               )); ?>   
                </div>
              </div>
            </div>
            <aside class="span3 sidebar">
              <div class="sidebar-widget widget_search">
                <form method="GET" action="<?php bloginfo('home'); ?>">

                  <div class="input-append row-fluid">
                    <input class="span12" placeholder="search" type="text">
                    <i class="icon-search"></i>
                    <button class="btn hide" type="submit">
                      search
                    </button>
                  </div>
                </form>

              </div>

              <?php dynamic_sidebar('right-sidebar'); ?>
 
            </aside>
          </div>
        </div>
      </section>
    </div>
  </div>

<?php   get_footer(); ?>