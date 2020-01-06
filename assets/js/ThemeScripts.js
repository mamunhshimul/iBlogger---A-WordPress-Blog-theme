jQuery(function($) {
  "use strict";

// Bottom scroll bar
    $.scrolline({
        position : 'bottom',
        opacity : 0.6,
        backColor : '#2c3e50',
        frontColor : '#5F9EA0',
        weight : 10
    });

	// circle menu for share icons
    $('.wcircle-menu-button').WCircleMenu({
    	width: '50px',
    	height: '50px',
    	angle_start : 0,//-Math.PI/2,
    	delay: 50,
    	distance: 70,
    	angle_interval: Math.PI/4,
    	easingFuncShow:"easeOutBack",
    	easingFuncHide:"easeInBack",
    	step:35,
    	itemRotation:360,
        iconRotation:90
    });

  // OWL Params for instagram slider
  $(".owl-carousel").owlCarousel({
      items : 5, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
      navigation : false,
      pagination : false
  });

  // hide #back-top first
  $("#back-top").hide();

  // fade in #back-top

  $(window).scroll(function () {
  	if ($(this).scrollTop() > 100) {
  		$('#back-top').fadeIn();
  	} else {
  		$('#back-top').fadeOut();
  	}
  });

  // scroll body to 0px on click
  $('#back-top a').on("click", function(){
  	$('body,html').animate({
  		scrollTop: 0
  	}, 800);
  	return false;
  });

  $( ".sub_menu_toggle" ).on("click", function(){
    $(this).next(".sub-menu").toggle();
  });

 // Tabbed blocks
 $(".short-tabs").each(function () {
  var thisel = $(this);
  thisel.children("div").eq(0).addClass("active");
  thisel.children("ul").children("li").eq(0).addClass("active");
 });

 $(".short-tabs > ul > li a").on("click", function() {
  var thisel = $(this).parent();
  thisel.siblings(".active").removeClass("active");
  thisel.addClass("active");
  thisel.parent().siblings("div.active").removeClass("active");
  thisel.parent().siblings("div").eq(thisel.index()).addClass("active");
  return false;
 });

// Accordion blocks
 $(".accordion > div > a").on("click", function() {
     var thisel = $(this).parent();
     if (thisel.hasClass("active")) {
         thisel.removeClass("active").children("div").animate({
             "height": "toggle",
             "opacity": "toggle",
             "padding-top": "toggle"
         }, 300);
         return false;
     }
     // thisel.siblings("div").removeClass("active");
     thisel.siblings("div").each(function () {
         var tz = $(this);
         if (tz.hasClass("active")) {
             tz.removeClass("active").children("div").animate({
                 "height": "toggle",
                 "opacity": "toggle",
                 "padding-top": "toggle"
             }, 300);
         }
     });
     // thisel.addClass("active");
     thisel.addClass("active").children("div").animate({
         "height": "toggle",
         "opacity": "toggle",
         "padding-top": "toggle"
     }, 300);
     return false;
 });

$(".alert-box .close-alert, .coloralert .close-alert").on("click", function() {
  $(this).parent().fadeOut();
  return false;
 });

});