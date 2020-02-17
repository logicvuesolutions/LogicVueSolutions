jQuery(function($){
	
	if( $('body').hasClass('home') ){
		$(window).scroll(function() {
			if ( $(this).scrollTop() > 50 ) { 
				$('#header').addClass('stuck');
			}
		});
	}else{
		$('#header').addClass('stuck');
	}
	
	var solutionsNav = $('#solutions-menu');
	var solutionsNavTop = solutionsNav.offset().top-50;
	$(window).scroll(function(){
		if($(window).scrollTop() > solutionsNavTop ){
			solutionsNav.addClass('compressed');
		}
		else{
			solutionsNav.removeClass('compressed');
		}
	});
	
	$(document).ready(function(){});
	
});
