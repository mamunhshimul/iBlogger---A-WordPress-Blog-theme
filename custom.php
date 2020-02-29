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
          <div class="col-lg-8">
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

  <?php


 $paged = get_query_var("paged")?get_query_var("paged"):1;
 $post_per_page = 2; 
 $total         = 9;


 $_p = get_posts(array(
     
     'posts_per_page'=> $post_per_page,
     'author__in'      => 1,
     'order'         => $total,
     'numberposts'         => 'post__in',
     'paged'         => '$paged' 


 )); 
   ?>      

  <?php  foreach($_p as $post){ 
          setup_postdata($post);  ?>

        <div class="col-md-6 col-lg-4">
          <article>
            <figure class="entry-media"><img class="lozad" src="<?php the_post_thumbnail(); ?>" data-src="assets/images/home-1/10.jpg" alt="Entry Image"/>
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
  <?php } ?>  
      </div>   
       <?php 
            echo paginate_links(array(

              'total' =>ceil($total/$post_per_page)  
            ));
       ?>

      <!-- End Blog-->
<!--       <div class="text-center align-items-center"><a class="btn btn-light" href="#">Load More</a></div> -->
    </div> 


    <?php get_footer( ); ?> 