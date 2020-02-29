<?php 
/**
* Template name: Custom
**/ 
 ?> 

<?php get_header( ); ?> 


    <!-- Page Title-->
    <div class="page-main-title">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h1 class="entry-title h2">Blog Three Col</h1>
            <p>Duis auctor eros ac urna dictum, eget rhoncus ex fringilla. Vestibulum in ex massa. Sed accumsan tortor libero. Phasellus gravida nibh vel odio semper vitae.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title-->
    <div class="container mb-7">
      <!-- Blog-->
      <div class="row blog-post">

      

  <?php while(have_posts()) : the_post(); ?>

        <div class="col-md-12 col-lg-12">
          <article>
            <figure class="entry-media"><img class="lozad" src="<?php the_post_thumbnail();?>">
            </figure>
            <div class="entry-content-wrapper">
              <header class="entry-header">
                <div class="entry-meta-top"><span class="entry-meta-category"><i class="far fa-folder"></i><a href="blog-three-col.html">Photography</a></span><span class="entry-meta-date"> <i class="far fa-clock"></i>NOV 11, 2020</span>
                </div>
                <h2 class="entry-title"><a href="blog-single-post.html"><?php the_title( ); ?></a></h2>
              </header>
              <div class="entry-content">
                <p><?php the_content( ); ?></p>
              </div>
            </div>
          </article>
        </div> 

  <?php endwhile; ?> 

      </div>

      <!-- End Blog-->
      <div class="text-center align-items-center"><a class="btn btn-light" href="#">Load More</a></div>
    </div> 



                 <?php 
                $gully_boy = get_the_category_by_ID($iBlogger_glo['spa_catagorY']);            
                 $national = new WP_Query(array(
          
                    'post_type'       => 'post',
                    'posts_per_page'  =>  2,
                    'category_name'   =>  $gully_boy
                    
        ));
  ?>

       <?php while($national->have_posts()) : $national->the_post(); ?>

          <h1> <?php the_title(); ?></h1>
          <p><?php the_content(); ?>. . .</p>

       <?php endwhile; ?>


    <?php get_footer( ); ?> 