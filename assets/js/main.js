$(document).ready(function(){

	$(".btn-slide").click(function(){
		$("#panel").slideToggle("fast");
		$(this).toggleClass("active"); return false;
	});

});

$(document).ready(function() {
	$('.sticky').waypoint('sticky', {
	  offset: 150 // Apply "stuck" when element 150px from top
	});	
});

//	$(window).scroll(function() { 
	// The social div 
//	var $socialDiv = $('.social'); 
	
	//Get scroll position of window 
//	var windowScroll = $(this).scrollTop(); 
	
	//Slow scroll of social div and fade it out 
//	$socialDiv.css({ 
//	'margin-top' : - (windowScroll / 3) + "px", 
//	'opacity' : 1 - (windowScroll / 650) 
//	}); 
//	}); 