<?php get_header(); ?> 
<?php get_template_part("/template-parts/hero"); ?>


 

 <?php echo "this is singlepage "; ?>
 
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

<div class="content">
<div class="row">
<div class="col-md-8 main-content">

<section>
<div class="row">
<div class="col-md-12">

<article class="blog-post" <?php post_class(); ?>>
<div class="blog-post-container">
<img src="images/demo/1200x800-17.jpg" alt="">
</div>
<div class="post-entry">
<div class="post-meta"><span class="post-category"><a href="#">Fashion</a></span></div>
<div class="divider"></div>
<h1><a href="portfolio-item.html">A Letter From An Old Graphic Designer To A Young Graphic Designer</a></h1>
<div class="post-meta">Posted on <span class="post-time">February 23, 2015</span> by <span class="post-author"><a href="post.html">Different Themes</a></span></div>
<p>
   <?php the_content(); ?>
</p>
 
<div class="tag-cloud">
<a href="#">Fashion</a>
<a href="#">Design</a>
<a href="#">Architecture</a>
<a href="#">Gadgets</a>
<a href="#">Cars</a>
<a href="#">Computers</a>
</div>
</div>
</article>
<div>
  <?php next_post_link(); 
        echo "<br/>";
        previous_post_link();      

    ?>

</div>


<section>
<h4 class="main-heading"><span>Author</span></h4>
<div class="author">
<div class="author-image">
<img src="images/demo/300x300-4.jpg" alt="">
</div>
<div class="author-text-body">
<h3><a href="index-list.html">Different Themes</a> <span>Editor in chief</span></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium. Adipisci accusamus accusantium. Adipisci accusamus accusantium.</p>
<div class="author-social">
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
</section>

 

 
 
 

 
 
</div>
</div>
</section>

</div>
<div class="col-md-4">

<div id="sidebar">

<div class="sidebar-module">
<div class="sidebar-content">
<h4 class="sidebar-heading"><span>About Us</span></h4>
<a href="post.html"><img src="images/about-me.jpg" alt="fashion" /></a>
<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
<a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a>
</div>
</div>


<div class="sidebar-module">
<div class="sidebar-content">
<h4 class="sidebar-heading"><span>Instagram</span></h4>
<ul class="widget-instagram">
<li><a href="#" target="_self"><img src="images/demo/300x300-1.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="images/demo/300x300-2.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="images/demo/300x300-3.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="images/demo/300x300-4.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="images/demo/300x300-5.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="images/demo/300x300-6.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="images/demo/article-298x298-3.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="images/demo/article-298x298-2.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
<li><a href="#" target="_self"><img src="images/demo/article-298x298-1.jpg" alt="Instagram Title" title="Instagram Title" /></a></li>
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
<a href="post.html"><img src="images/demo/300x300-1.jpg" alt="fashion" /></a>
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Watch Top Brands and Agencies Live-Tweet</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i>15. MARCH 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>11</span></div>
</div>
</div>
<div class="widget-post">
<div class="widget-post-image">
<a href="post.html"><img src="images/demo/300x300-5.jpg" alt="fashion" /></a>
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">The Influences of Modern Minimalism</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>6</span></div>
</div>
</div>
<div class="widget-post">
<div class="widget-post-image">
<a href="post.html"><img src="images/demo/300x300-7.jpg" alt="fashion" /></a>
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Coors Light Gets New Look, Miller Lite Targets Biculturals</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015</div>
</div>
</div>
<div class="widget-post">
<div class="widget-post-image">
<a href="post.html"><img src="images/demo/300x300-6.jpg" alt="fashion" /></a>
</div>
<div class="widget-post-entry">
<h3 class="widget-post-title"><a href="post.html">Facebook to Start Telling Brands Who's Talking About What Topics</a></h3>
<div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>14</span></div>
</div>
</div>
<div class="widget-post">
<div class="widget-post-image">
<a href="post.html"><img src="images/demo/300x300-3.jpg" alt="fashion" /></a>
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
<a href="#"><img src="images/banner-300x250.png" alt="advertisement" width="300" height="250" /></a>
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
<div class="item"><a href="#"><img src="images/demo/300x300-2.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/300x300-1.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/300x300-3.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/300x300-6.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/300x300-4.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/300x300-5.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/article-298x298-3.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/300x300-6.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/article-298x298-5.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/article-298x298-3.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/article-298x298-2.jpg" alt=""></a></div>
<div class="item"><a href="#"><img src="images/demo/article-298x298-1.jpg" alt=""></a></div>
</div>
</div>

</div> 
</div> 

<?php get_footer() ?> 



