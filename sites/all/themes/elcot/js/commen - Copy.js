$(document).ready(function(){
	
    $("#banner_slider").owlCarousel({
		autoPlay : 2000,
	  	stopOnHover : true,
	    navigation : true,
		pagination: false,  
	    singleItem : true,
		transitionStyle : "fade"
    });
	  
	  // our projects
	$("#project_slider").owlCarousel({
	autoPlay: 3000,
	items : 5,
	pagination: false,  
	navigation: true,
	transitionStyle : "fade"
  }); 
  $("#logo").owlCarousel({
	autoPlay: 3000,
	items : 5,
	rewindNav:true,
	pagination: false,  
	navigation: true,
	loop:true, 
	
  }); 
  



// navigation
$(".navigation > ul > li > .navigation_dropdown").parent().addClass("nav_arrow");



  // accordian
  
  	$(".e_policy_tab").smk_Accordion();
  	$(".widget_tab").smk_Accordion();


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
	 
}
else if($(window).width() > 881){
	$(".top_hd_cnt").removeClass("tp_hd_nav");
	
	// navigation hover
	$(".navigation > ul > li").hover(function(){
	$(this).addClass("nav_active");
	
	}, function(){
		$(this).removeClass("nav_active");
	
	});
}			


$(".mCustomScrollbar").mCustomScrollbar({
scrollButtons:{enable:true},
theme:"light-thick",
scrollbarPosition:"outside"
});	



});