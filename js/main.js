	$(window).scroll(function() { 
	// The social div 
	var $socialDiv = $('.social'); 
	
	//Get scroll position of window 
	var windowScroll = $(this).scrollTop(); 
	
	//Slow scroll of social div and fade it out 
	$socialDiv.css({ 
	'margin-top' : - (windowScroll / 3) + "px", 
	'opacity' : 1 - (windowScroll / 650) 
	}); 
	}); 

//	$('nav').waypoint('sticky', {
//	  offset: 300 // Apply "stuck" when element 30px from top
//	});
