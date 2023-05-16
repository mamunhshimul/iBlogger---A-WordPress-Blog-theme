<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WriterPro
 */

get_header();
global $writerop;
?>

	<main id="primary" class="site-main writer__blog">

    <!-- writer preloader -->
    <?php get_template_part("/template-parts/options/preloader"); ?>
    <!-- /. writer preloader -->



    <div class="container">
      <div class="row mt-5">
          <?php
          global $writerop;

          if  ( $writerop['writer_blog_sidebar_switcher'] == "1" &&
                  $writerop['writer_blog_sidebar_align'] == "1")  { ?>
                  <div class="col-md-9 order-3"> <?php
          }

          elseif ( $writerop['writer_blog_sidebar_switcher'] == "1"){ ?>
                      <div class="col-md-9"> <?php
           }

          else{ ?>
              <div class="col-md-12"><?php
             } ?>


           <div class="row">
           <?php
            if ($writerop['writer_blog_style'] == '1' ){ ?>
           <?php
                while(have_posts()) : the_post(); ?>
               <?php get_template_part( 'template-parts/content-grid', get_post_type()); ?>
           <?php endwhile;
            } ?>
           <!--/. grid style 1 -->

               <?php
               if ($writerop['writer_blog_style'] == '2' ){ ?>
                   <?php
                   while(have_posts()) : the_post(); ?>
                       <?php get_template_part( 'template-parts/content-list-1', get_post_type()); ?>
                   <?php endwhile;
               } ?>
               <!--/. list style 1 -->


           </div>
            <div class="row">
                <div class="col-md-12 writer__pagination">
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div>


          <?php if ( $writerop['writer_blog_sidebar_switcher'] == 1): ?>
            <div class="col-md-3">
               <?php get_sidebar(); ?>
             </div>

          <?php endif ?>

      </div>
      </div>
      <?php
 
 // Program to create copy of an object
  
  $writeropInModal = $writerop["writer_modal_content_1"];

//   var_dump($writerop["writer_modal_content_1"]);

 echo "Horsepower: ". $writeropInModal;

 

 // Creating class
 class GFG {
     public $data1;
     public $data2;
     public $data3;
     

     public function __construct() {
      global $GLOBALS;
      $this->glob =& $GLOBALS;
  }
  

     public function tiger() {
        echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
      </button>
       
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              fff
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>'; 
      }

    
 }
 
  
 // Creating object
 $obj = new GFG();
//  $obj2 = new $writeropInModal;
  
 // Creating clone or copy of object
 $copy = clone $obj;
  
 // Creating object without clone keyword
 $obj_ref = $obj;
  
 // Set values of $obj object
 $obj->data1 = "Geeksvv";
 $obj->data2 = "for";
 $obj->data3 = "Geeks";
  
 // Set values of copied object
 function whatIsToday(){
    echo "Today is";
};
 $copy->data1 = whatIsToday();
 $copy->data2 = "for ";
 $copy->data3 = "Machine learning";
 $copy->tiger();
  
 
  
 // Print values of $copy object
 echo "$copy->data1$copy->data2$copy->data3\n";
  
  
 ?>

	</main><!-- #main -->


   
<?php get_template_part("/template-parts/options/modal"); ?>   

 


<?php

get_footer();


global $writerop;


//print_r ($writerop['writer_blog-single-layout']['enabled']);
//
//$layout  = $writerop['writer_blog-single-layout']['enabled'];








