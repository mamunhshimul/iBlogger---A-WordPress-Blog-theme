<?php get_header(); ?>

<?php get_template_part("hero"); ?>
 

 

 
 
<nav class="navbar yamm navbar-default" id="main-navigation">
  <div class="container-fluid">
  <div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
  </div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
  <li class="dropdown">
<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>

	<ul class   ="dropdown-menu" role="menu">
		<li><a href ="index.html">Default</a></li>
		<li><a href ="index-blog.html">Blog Layout</a></li>
		<li><a href ="index-grid.html">Grid Layout</a></li>
		<li><a href ="index-list.html">List Layout</a></li>
	</ul>

  </li>
	<li><a href="index-grid.html">Fashion</a></li>
	<li class="dropdown">
	 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features <b class="caret"></b></a>
	  <ul class="dropdown-menu" role="menu">
		<li><a href="404.html">404 page</a></li>
		<li><a href="shortcodes.html">Shortcodes</a></li>
		<li><a href="post-video.html">Post with Video</a></li>
		<li><a href="about.html">Full Width Page</a></li>
		<li><a href="contact.html">Contact Form</a></li>
	  </ul>
	</li>
	<li><a href="about.html">About</a></li>
	<li><a href="contact.html">Contact</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
	<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-search"></i></a>
		<div class="dropdown-menu searchbox" role="menu">
			<form id="search" class="navbar-form search" role="search">
				<div class="input-group">
				<input type="search" class="form-control" placeholder="Type to search">
				<span class="input-group-btn"><button type="submit" class="btn btn-default btn-submit"><i class="fa fa-angle-right"></i></button></span>
				</div>
			</form>
		</div>
	</li>
</ul>
</div>
  </div>
</nav>  


<div class="slider">
<div class="row">
<div class="col-sm-12 col-md-8 slider-left">
<div class="slider-item">
<figure class="effect-milo">
<img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/1200x800-20.jpg" alt="img11" />
<figcaption>
<h2>Wine Packaging Inspired by <span>the Simpsons and Piet Mondrian</span> Goes Against the Packaging Norms</h2>
<p>Jodi started making these beautiful book sculptures when she got hooked from folding one of the pages of a used book from a second-hand book shop.</p>
<a href="post.html">View more</a>
</figcaption>
</figure>
</div>
</div>
<div class="col-sm-12 col-md-4 slider-right">
<div class="row">
<div class="col-xs-12">
<div class="slider-item rightside">
<figure class="effect-milo">
<img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/1200x800-14.jpg" alt="img11" />
<figcaption>
<h2>Make Stories Come Alive with <span>Jodi Harvey-Brown</span> Book Sculpture</h2>
<p>Maybe it's wine or maybe not but one thing is for sure, combining Homer and ...</p>
<a href="post.html">View more</a>
</figcaption>
</figure>
</div>
</div>
<div class="col-xs-12">
<div class="slider-item rightside">
<figure class="effect-milo">
<img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/1200x800-21.jpg" alt="img11" />
<figcaption>
<h2>You! Be Inspired! - The Enchanting Art of Meg Hunt</h2>
<p>Milo went to the woods. He took a fun ride and never came back.</p>
<a href="post.html">View more</a>
</figcaption>
</figure>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="content">
<div class="row">
<div class="col-md-8 main-content">

<section>


<?php while(have_posts()) : the_post(); ?>
                                    
             

<div class="row" <?php post_class(); ?>>
<div class="col-sm-12">
<div class="blog-post">
<div class="blog-post-container">
<a href="<a href="<?php the_permalink(); ?>"> 
   <?php 
       if (has_post_thumbnail()) {
          the_post_thumbnail('large', " ");
     }
 ?>
</a>
</div>
<div class="blog-post-body">
<div class="post-meta"><span class="post-category">

  <a href="#"><?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>","</li><li>","</li></ul>"); ?></a></span>
</div>
<div class="divider"></div>
<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
<div class="post-meta">Posted on <span class="post-time"><?php the_date(); ?></span> by <span class="post-author"><a href="<?php the_permalink(); ?>"><?php the_author();?></a></span></div>
<p>
  <?php 
       if (is_single()) {
       	the_content();
       }else{
       	 the_excerpt();
       } 

 
   ?> 
</p>
<p>
<div class="more-button"><a href="post.html"><span class="read-more-button">READ MORE</span></a></div>
<div class="wcircle-menu-button">
<div class="wcircle-icon">
<div class="wcircle-menu-icon"> <i class="fa fa-share-alt"></i> </div>
</div>
<div class="wcircle-menu" style="display:none;">
<div class="wcircle-menu-item share-facebook"> <a href="post.html"><i class="fa fa-facebook"></i></a> </div>
<div class="wcircle-menu-item share-youtube"> <a href="post.html"><i class="fa fa-youtube"></i></a> </div>
<div class="wcircle-menu-item share-twitter"> <a href="post.html"><i class="fa fa-twitter"></i></a> </div>
<div class="wcircle-menu-item share-google"> <a href="post.html"><i class="fa fa-google"></i></a> </div>
<div class="wcircle-menu-item share-linkedin"> <a href="post.html"><i class="fa fa-linkedin"></i></a> </div>
<div class="wcircle-menu-item share-pinterest"> <a href="post.html"><i class="fa fa-pinterest"></i></a> </div>
<div class="wcircle-menu-item share-tumblr"> <a href="post.html"><i class="fa fa-tumblr"></i></a> </div>
</div>
</div>
</p>
</div>
</div>
</div>
</div>
 
 
<?php endwhile; ?> 
 
</section>

<section>
<h4 class="main-heading"><span>Grid style</span></h4>
<div class="row">
<div class="col-md-6">

<div class="grid-post">
<div class="grid-post-container">
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/1200x800-17.jpg" alt=""></a>
<div class="post-cats"><a href="#">Beauty</a></div>
</div>
<div class="post-meta">
<span class="post-meta-publ-date">February 23, 2015</span>
<span><i class="fa fa-comments"></i> <a href="#" rel="category tag">32</a></span>
</div>
<div class="grid-post-body">
<h3 class="title"><a href="portfolio-item.html">The Jaw-Droppingly Gorgeous Illustrations of Phil Noto</a></h3>
<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
<p><a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a></p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="grid-post">
<div class="grid-post-container">
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/1200x800-11.jpg" alt=""></a>
<div class="post-cats"><a href="#">Fashion</a></div>
</div>
<div class="post-meta">
<span class="post-meta-publ-date">February 23, 2015</span>
<span><i class="fa fa-comments"></i> <a href="#" rel="category tag">32</a></span>
</div>
<div class="grid-post-body">
<h3 class="title"><a href="portfolio-item.html">Featured Artist: Interview with Diorama Artist Clemens Wirth</a></h3>
<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
<p><a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a></p>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-md-6">

<div class="grid-post">
<div class="grid-post-container">
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/1200x800-9.jpg" alt=""></a>
<div class="post-cats"><a href="#">Computers</a></div>
</div>
<div class="post-meta">
<span class="post-meta-publ-date">February 23, 2015</span>
<span><i class="fa fa-comments"></i> <a href="#" rel="category tag">32</a></span>
</div>
<div class="grid-post-body">
<h3 class="title"><a href="portfolio-item.html">5 Infographics You Should Definitely Check Out</a></h3>
<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
<p><a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a></p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="grid-post">
<div class="grid-post-container">
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/1200x800-19.jpg" alt=""></a>
<div class="post-cats"><a href="#">Transport</a></div>
</div>
<div class="post-meta">
<span class="post-meta-publ-date">February 23, 2015</span>
<span><i class="fa fa-comments"></i> <a href="#" rel="category tag">32</a></span>
</div>
<div class="grid-post-body">
<h3 class="title"><a href="portfolio-item.html">Unbelievable Anamorphic Sculptures by Jonty Hurwitz</a></h3>
<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
<p><a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a></p>
</div>
</div>

</div>
</div>
</section>


<section>
<h4 class="main-heading"><span>List style</span></h4>

<div class="list-post">
<div class="list-post-container">
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/article-298x298-1.jpg" alt=""></a>
<div class="post-cats"><a href="#">Transport</a></div>
</div>
<div class="list-post-body">
<h2><a href="post.html">Unbelievable Anamorphic Sculptures by Jonty Hurwitz</a></h2>
<div class="post-meta">
<span class="post-meta-publ-date">February 23, 2015</span>
<span class="post-meta-author">by <a href="#">Different Themes</a></span>
<span><i class="fa fa-comments"></i> <a href="#" rel="category tag">32</a></span>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium. Adipisci accusamus accusantium. Adipisci accusamus accusantium.</p>
<p><a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a></p>
</div>
</div>


<div class="list-post">
<div class="list-post-container">
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/article-298x298-2.jpg" alt=""></a>
<div class="post-cats"><a href="#">Design</a></div>
</div>
<div class="list-post-body">
<h2><a href="post.html">Minimalist Monday: Classic Children's Stories Posters</a></h2>
<div class="post-meta">
<span class="post-meta-publ-date">March 6, 2015</span>
<span class="post-meta-author">by <a href="#">John Doe</a></span>
<span><i class="fa fa-comments"></i> <a href="#" rel="category tag">132</a></span>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium. Adipisci accusamus accusantium. Adipisci accusamus accusantium.</p>
<p><a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a></p>
</div>
</div>

</section>

</div>
<div class="col-md-4">

<div id="sidebar">

<div class="sidebar-module">
<div class="sidebar-content">
<h4 class="sidebar-heading"><span>About Us</span></h4>
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/about-me.jpg" alt="fashion" /></a>
<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
<a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a>
</div>
</div>


<div class="sidebar-module">
 <div class="sidebar-content">
<h4 class="sidebar-heading"><span>Latest</span></h4>
<div class="widget-post" id="latest_posts">
<div class="widget-post-circle">
1
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Watch Top Brands and Agencies Live-Tweet</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i>15. MARCH 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>15</span></div>
</div>
</div>
<div class="widget-post" id="latest_posts">
<div class="widget-post-circle">
2
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">The Influences of Modern Minimalism</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015</div>
</div>
</div>
<div class="widget-post" id="latest_posts">
<div class="widget-post-circle">
3
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Coors Light Gets New Look, Miller Lite Targets Biculturals</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>3</span></div>
</div>
</div>
<div class="widget-post" id="latest_posts">
<div class="widget-post-circle">
4
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Facebook to Start Telling Brands Who's Talking About What Topics</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>5</span></div>
</div>
</div>
<div class="widget-post" id="latest_posts">
<div class="widget-post-circle">
5
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Notegraphy, Graphic Design Meet Note-Taking</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015</div>
</div>
</div>
</div>
</div>


<div class="sidebar-module">
<div class="sidebar-content">
<h4 class="sidebar-heading"><span>Instagram</span></h4>
<ul class="widget-instagram">
<li><a href="#" target="_self"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-1.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-2.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-3.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-4.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-5.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-6.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/article-298x298-3.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/article-298x298-2.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/article-298x298-1.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
</ul>
</div>
</div>


<div class="sidebar-module">
<div class="sidebar-content">
<h4 class="sidebar-heading"><span>Social</span></h4>
<div class="widget-social">
<a href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="https://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
<a href="https://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
<a href="https://plus.google.com/#" target="_blank"><i class="fa fa-google-plus"></i></a>
<a href="https://tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a>
<a href="#" target="_blank"><i class="fa fa-rss"></i></a>
</div>
</div>
</div>


<div class="sidebar-module">
<div class="sidebar-content">
<h4 class="sidebar-heading"><span>Fashion</span></h4>
<div class="widget-post">
<div class="widget-post-image">
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-1.jpg" alt="fashion" /></a>
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Watch Top Brands and Agencies Live-Tweet</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i>15. MARCH 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>11</span></div>
</div>
</div>
<div class="widget-post">
<div class="widget-post-image">
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-5.jpg" alt="fashion" /></a>
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">The Influences of Modern Minimalism</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>6</span></div>
</div>
</div>
<div class="widget-post">
<div class="widget-post-image">
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-7.jpg" alt="fashion" /></a>
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Coors Light Gets New Look, Miller Lite Targets Biculturals</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015</div>
</div>
</div>
<div class="widget-post">
<div class="widget-post-image">
 <a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-6.jpg" alt="fashion" /></a>
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Facebook to Start Telling Brands Who's Talking About What Topics</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>14</span></div>
</div>
</div>
<div class="widget-post">
<div class="widget-post-image">
<a href="post.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-3.jpg" alt="fashion" /></a>
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Notegraphy, Graphic Design Meet Note-Taking</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015</div>
</div>
</div>
</div>
</div>


<div class="sidebar-module">
<div class="sidebar-content">
<h4 class="sidebar-heading"><span>Latest Comments</span></h4>
<div class="lcomments-item">
<a href="#">Mr. Wordpress</a> on <a href="post.html">Monotype Typecast, Stately Type and TDC Generator</a>
</div>
<div class="lcomments-item">
<a href="#">Jeremy Clarkson</a> on <a href="post.html">Five centuries, but also the nation</a>
</div>
<div class="lcomments-item">
<a href="#">John Doe</a> on <a href="post.html">12 Animated Magnets from Fictional Places</a>
</div>
<div class="lcomments-item">
<a href="#">Claire</a> on <a href="post.html">Wonderful Pencil Drawings by Stefan</a>
</div>
<div class="lcomments-item">
<a href="#">Sarah Lee</a> on <a href="post.html">Five centuries, but also the nation</a>
</div>
</div>
</div>


<div class="sidebar-module">
<div class="sidebar-content">
<h4 class="sidebar-heading"><span>Tag cloud</span></h4>
<div class="tag-cloud">
<a href="#">Fashion</a>
<a href="#">Design</a>
<a href="#">Architecture</a>
<a href="#">Gadgets</a>
<a href="#">Cars</a>
<a href="#">Music</a>
<a href="#">Recipe</a>
<a href="#">Lifestyle</a>
<a href="#">Travel</a>
</div>
</div>
</div>


<div class="sidebar-module">
<div class="sidebar-content">
<h4 class="sidebar-heading"><span>Advertisement</span></h4>
<div class="sidebar-content banner-widget">
<a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/banner-300x250.png" alt="advertisement" width="300" height="250" /></a>
</div>
</div>
</div>


</div>
</div>
</div>
</div>
<p id="back-top">
<a href="#top"><i class="fa fa-angle-up"></i></a>
</p>

 <h4 class="main-heading"><span>Instagram</span></h4>
<div class="widget-insta">
<div id="insta-owl" class="owl-carousel owl-theme">
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-2.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-1.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-3.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-6.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-4.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-5.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/article-298x298-3.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/300x300-6.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/article-298x298-5.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/article-298x298-3.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/article-298x298-2.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/images/demo/article-298x298-1.jpg" alt=""></a></div>
</div>
</div>

</div> 
</div> 
 
 <?php get_footer();?>