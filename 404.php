<?php 

 get_header();

 get_template_part("/template-parts/hero");
 ?>

<body <?php body_class(); ?>>
	
	<div class="containet">
		<h1>
			<?php 

                  _e( "Sorry! we are couldn't find whet you are looking.","firezone");
			 ?>
		</h1>
	</div>
</body>


 <?php 
    get_footer();
   