/*------------------------------------
	Theme Name: Hoary
	Start Date : 
	End Date : 
	Last change: 
	Version: 1.0
	Assigned to:
	Primary use:
---------------------------------------*/
/*	

	+ Responsive Caret
	+ Expand Panel Resize
	+ Sticky Menu
	
	+ Document On Ready
		- Scrolling Navigation
		- Responsive Caret
		- Expand Panel
		- Collapse Panel
		- Search
		- Contact Map
		- Quick Contact Form
	
	+ Window On Scroll
		- Set Sticky Menu
		
	+ Window On Resize
		- Expand Panel Resize
		
	+ Window On Load
		- Site Loader
		- Largest Post
		
*/

(function($) {

	"use strict"
	
	/* + Responsive Caret* */
	function menu_dropdown_open(){
		var width = $(window).width();
		if($(".ownavigation .nav li.ddl-active").length ) {
			if( width > 991 ) {
				$(".ownavigation .nav > li").removeClass("ddl-active");
				$(".ownavigation .nav li .dropdown-menu").removeAttr("style");
			}
		} else {
			$(".ownavigation .nav li .dropdown-menu").removeAttr("style");
		}
	}
	
	/* + Expand Panel Resize * */
	function panel_resize(){
		var width = $(window).width();
		if( width > 991 ) {
			if($(".header_s #slidepanel").length ) {
				$(".header_s #slidepanel").removeAttr("style");
			}
		}
	}
	
	/* - Gallery Masonry */
	function gallery_masonry() {
		if($(".gallery-list").length) {
			var $container = $(".gallery-list");
			$container.isotope({
				layoutMode: 'masonry',
				percentPosition: true,				
				itemSelector: ".gallery-box",
				gutter: 0
			});
			
			$("#filters a").on("click",function(){
				$('#filters a').removeClass("active");
				$(this).addClass("active");
				var selector = $(this).attr("data-filter");
				$container.isotope({ filter: selector });
				return false;
			});
		}
	}
	
	/* - Gallery Masonry */
	function gallery_masonry_full() {
		if($(".gallery-masonry-list").length) {
			var $container = $(".gallery-masonry-list");
			$container.isotope({
				percentPosition: true,				
				itemSelector: ".gallery-box",
				masonry: {
					columnWidth: '.grid-sizer'
				}
			});
			
			$("#filters a").on("click",function(){
				$('#filters a').removeClass("active");
				$(this).addClass("active");
				var selector = $(this).attr("data-filter");
				$container.isotope({ filter: selector });
				return false;
			});
		}
	}
	
	/* + Sticky Menu */
	function sticky_menu() {
		var menu_scroll = $(".header_s").offset().top;
		var scroll_top = $(window).scrollTop();
		
		if ( scroll_top > menu_scroll ) {
			$(".header_s .menu-block").addClass("navbar-fixed-top animated fadeInDown");
		} else {
			$(".header_s .menu-block").removeClass("navbar-fixed-top animated fadeInDown"); 
		}
	}
	
	/* + Document On Ready */
	$(document).on("ready", function() {

		/* - Scrolling Navigation* */
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* - Set Sticky Menu* */
		if( $(".header_s").length ) {
			sticky_menu();
		}
		
		$('.navbar-nav li a[href*="#"]:not([href="#"]), .site-logo a[href*="#"]:not([href="#"])').on("click", function(e) {
	
			var $anchor = $(this);
			
			$("html, body").stop().animate({ scrollTop: $($anchor.attr("href")).offset().top - 49 }, 1500, "easeInOutExpo");
			
			e.preventDefault();
		});

		/* - Responsive Caret* */
		$(".ddl-switch").on("click", function() {
			var li = $(this).parent();
			if ( li.hasClass("ddl-active") || li.find(".ddl-active").length !== 0 || li.find(".dropdown-menu").is(":visible") ) {
				li.removeClass("ddl-active");
				li.children().find(".ddl-active").removeClass("ddl-active");
				li.children(".dropdown-menu").slideUp();
			}
			else {
				li.addClass("ddl-active");
				li.children(".dropdown-menu").slideDown();
			}
		});
		
		/* - Expand Panel * */
		$("#slideit").on ("click", function() {
			$("#slidepanel").slideDown(1000);
			$("html").animate({ scrollTop: 0 }, 1000);
		});	

		/* - Collapse Panel * */
		$("#closeit").on("click", function() {
			$("#slidepanel").slideUp("slow");
			$("html").animate({ scrollTop: 0 }, 1000);
		});	
		
		/* Switch buttons from "Log In | Register" to "Close Panel" on click * */
		$("#toggle a").on("click", function() {
			$("#toggle a").toggle();
		});
		
		/* - Search * */
		if($(".search-box").length){
			$("#search").on("click", function(){
				$(".search-box").addClass("active")
			});
			$(".search-box span").on("click", function(){
				$(".search-box").removeClass("active")
			});
		}
		
		panel_resize();
		
		$("#back-to-top").on("click",function()
		{
			$("body,html").animate(
			{
				scrollTop : 0 // Scroll to top of body
			},800);
		});
		
		/* - Related Project */
		if( $(".related-project-carousel").length ) {
			if($('html[dir="rtl"]').length) {
				$(".related-project-carousel").owlCarousel({
					loop: true,
					margin: 20,
					nav: true,
					dots: false,
					rtl: true,
					autoplay: true,
					responsive:{
						0:{
							items: 1
						},
						480:{
							items: 2
						},
						640:{
							items: 3
						},
						991 : {
							items: 4
						},
						1200:{
							items: 5
						}
					}
				});
			} else {
				$(".related-project-carousel").owlCarousel({
					loop: true,
					margin: 20,
					nav: true,
					dots: false,
					autoplay: true,
					responsive:{
						0:{
							items: 1
						},
						480:{
							items: 2
						},
						568:{
							items: 3
						},
						991 : {
							items: 4
						},
						1200:{
							items: 5
						}
					}
				});
			}
		}
		
		gallery_masonry();
		gallery_masonry_full();
		
		/* - Gallery */
		if($(".gallery-box").length){
			var url;
			$(".gallery-box").magnificPopup({
				delegate: " > a",
				type: "image",
				tLoading: "Loading image #%curr%...",
				mainClass: "mfp-img-mobile",
				gallery: {
					enabled: true,
					navigateByImgClick: false,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: "<a href="%url%">The image #%curr%</a> could not be loaded.",				
				}
			});
		}
		
		/* - Quick Contact Form* */
		$( "#btn_submit" ).on( "click", function(event) {
			event.preventDefault();
			var mydata = $("form").serialize();
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "contact.php",
				data: mydata,
				success: function(data) {
					if( data["type"] == "error" ){
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").removeClass("alert-msg-success");
						$("#alert-msg").addClass("alert-msg-failure");
						$("#alert-msg").show();
					} else {
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").addClass("alert-msg-success");
						$("#alert-msg").removeClass("alert-msg-failure");					
						$("#input_name").val("");
						$("#input_email").val("");
						$("#input_website").val("");												
						$("#input_subject").val("");										
						$("#textarea_message").val("");
						$("#alert-msg").show();				
					}			
				},
				error: function(xhr, textStatus, errorThrown) {
					alert(textStatus);
				}
			});
		});
		
	});	/* - Document On Ready /- */
	
	/* + Window On Scroll */
	$(window).on("scroll",function() {
		/* - Set Sticky Menu* */
		if( $(".header_s").length ) {
			sticky_menu();
		}
	});
	
	/* + Window On Resize */ 
	$( window ).on("resize",function() {
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* - Expand Panel Resize */
		panel_resize();
		menu_dropdown_open();
	});
	
	/* + Window On Load */
	jQuery(window).on("load",function() {
		/* - Site Loader* */
		if ( !jQuery("html").is(".ie6, .ie7, .ie8") ) {
			jQuery("#site-loader").delay(1000).fadeOut("slow");
		}
		else {
			jQuery("#site-loader").css("display","none");
		}
		
		gallery_masonry();
		gallery_masonry_full();
	});

})(jQuery);