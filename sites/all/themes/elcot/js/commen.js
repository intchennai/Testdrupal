jQuery.noConflict()(function($) {
    "use strict";
$(document).ready(function(){
    $('.resp-tabs-list li .tabs-text a').on('click', function(){ //alert($(this).attr('href'));
window.location.href = $(this).attr('href'); 

});

   $("#banner_slider").owlCarousel({
		items : 1,
	    slideSpeed : 1000,
	    nav: true,
	    autoplay: true,
	    dots: false,
	    loop: true,
	    responsiveRefreshRate : 200
    });
	  
	  // our projects
	$("#project_slider").owlCarousel({
		items : 5,
	    slideSpeed : 1000,
	    nav: true,
	    autoplay: true,
	    autoplayHoverPause: true,
	    smartSpeed: 1000,
	    dots: false,
	    loop: true,
	    responsiveClass: true,
        responsive: {
           0: {
            items: 1          
          },
           480: {
            items: 2
          },           
          768: {
            items: 3
          },
          1024: {
            items: 4            
          },
          1025: {
            items: 5
            
          }
        }
	  }); 
	
  	$("#logo").owlCarousel({
		items : 5,
	    slideSpeed : 3000,
	    nav: true,
	    autoplay: true,
	    autoplayHoverPause: true,
	    rtl:true,
	    smartSpeed: 1000,
	    dots: false,
	    loop: true,
	     responsiveClass: true,
        responsive: {
          0: {
            items: 1
          },
          360: {
            items: 2
          },
           480: {
            items: 3
          },
          768: {
            items: 4
          },
          1000: {
            items: 5
          }
        }
  	}); 
  
  	// Boxer popup
  	
$(".log_in").boxer();	
$(".regi_ster").boxer();	

// navigation
$(".navigation > ul > li > .navigation_dropdown").parent().addClass("nav_arrow");
$(".navigation > ul > li > ul > li > .navigation_sub_dropdown").parent().addClass("sub_nav_arrow");

 // accordian
 
$(".e_policy_tab").smk_Accordion();

$(".widget_tab").smk_Accordion();
$(".zone_tab").smk_Accordion();

// news tab

	$('.e_news_list > li > a').click(function() { 
	  $('.e_news_list > li').removeClass('newsactive');
	  $(this).parent('li').addClass('newsactive');	
	  var checkElement = $(this).next();
	  if((checkElement.is('.e_news_list_toggle')) && (checkElement.is(':visible'))) {
	    $(this).parent('li').addClass('newsactive');
	    checkElement.hide();
	  }
	  if((checkElement.is('.e_news_list_toggle')) && (!checkElement.is(':visible'))) {
	    $('.e_news_list li .e_news_list_toggle:visible').hide();

	    checkElement.show();
	  }	

	});
	$('.ad_ser_click').click(function() { 
		$('.search_toggle').slideToggle();

		$('.search_toggle').toggleClass('search_active');
	});

$("body").click(function(e) {				
					if($('.search_toggle').is(":visible")){
					if (!e.target.closest('.search_toggle') && e.target.className != 'ad_ser_li ad_ser_click') {
						$('.search_toggle').slideToggle();
					}
					}
				});

if($(window).width() < 531){
	
	//search
	 $("#main-menu .search").addClass("mob_search");

	 $(".mob_search").prepend('<a href="javascript:void(0)" class="top_search_click"></a>');	
	 $(".top_search_click").click(function() {
	 	$(this).toggleClass("top_search_tog_click");
	 	$('.nl_ser').slideToggle();
	 });
}				

// navigation

if($(window).width() < 880){
	
	// top nav
	$(".top_hd_cnt").addClass("tp_hd_nav");
	$(".tp_hd_nav").append('<a href="javascript:void(0)" class="top_nav_click"></a>')		
	$('.top_nav_click').click(function() {
	$(this).toggleClass("top_nav_tog_click");
	$('.top_hd_nav').slideToggle();
	});

	 //navigation
	 
	 //$(".nav_block").addClass("mob_nav");
	 
	  $(".navigation").addClass("mob_ser_nav");
	 $(".nav_block ").append('<a href="javascript:void(0)" class="nav_click"></a>')	
	 $(".navigation").append('<a href="javascript:void(0)" class="nav_ser_click"></a>')	 
	 $('.nav_click').click(function() {
	 	$(this).toggleClass("nav_tog_click");
		$(this).parent().toggleClass("mob_nav");

		//$(".nav_block").addClass("hide_nav");

	});
	 $('.nav_ser_click').click(function() {
	 	$(this).toggleClass("nav_ser_tog_click");
		$(this).prev().slideToggle();
	});


	 //mobile nav

	$(".navigation > ul > li").click(function(){
		$(this).addClass('nav_active').siblings().removeClass('nav_active');
	});	 
	
	// top nav sub
	
	$(".hd_nav ul li.hd_tp_nav").click(function(){
	$(this).toggleClass("hd_tp_activ");
	
	});
}
else if($(window).width() > 881){
	$(".top_hd_cnt").removeClass("tp_hd_nav");	

	// navigation hover
	

$(".navigation > ul > li").hover(function(){
$(this).addClass("nav_active");

$(this).prev().addClass("nav_prev");
}, function(){
$(this).removeClass("nav_active");
$(this).prev().removeClass("nav_prev");
});
	$(".navigation > ul > li > ul > li").hover(function(){
	$(this).addClass("sub_nav_active");
	}, function(){
	$(this).removeClass("sub_nav_active");
	});
	
	// top nav sub
	$(".hd_nav ul li.hd_tp_nav").hover(function(){
	$(this).addClass("hd_tp_activ");
	
	}, function(){
		$(this).removeClass("hd_tp_activ");
	
	});	
}			


$(".mCustomScrollbar").mCustomScrollbar({
scrollButtons:{enable:true},
theme:"light-thick",
scrollbarPosition:"outside"
});	

/*gallery popup*/

$('.gal_pop').lightGallery();	

// Gallery Hover effect
$(' .effect_img_list > li ').each( function() { 
$(this).hoverdir({
hoverDelay : 75
}); 
});

/* sticky js*/

$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('.header_bot').addClass("sticky");
}
else{
    $('.header_bot').removeClass("sticky");
	}
});


/*$(".skip_cnt").click(function(){
	$(".page_main_content").delay( 1000 ).addClass("main_add_content");
});
$(window).scroll(function() {
	$(".page_main_content").removeClass("main_add_content");
});*/



});



}); // close