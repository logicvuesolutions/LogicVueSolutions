jQuery(function($){
	
/* Header setup on scroll / block */
	
	if( $('body').hasClass('home') ){
		$(window).scroll(function() {
			if ( $(this).scrollTop() > 50 ) { 
				$('#header').addClass('stuck');
			}else{
				$('#header').removeClass('stuck');
			}
		});
	}else{
		$('#header').addClass('stuck');
		
		var solutionsNav = $('#solutions-menu');
		var solutionsNavTop = solutionsNav.offset().top + 25;
		
		console.log( solutionsNavTop );

		$(window).scroll(function(){
			if($(window).scrollTop() > solutionsNavTop ){
				solutionsNav.addClass('stuck').removeClass('sticky');
			}
			else{
				solutionsNav.removeClass('stuck');
			}
		});
		
	}
	
	$(document).ready(function(){
		$('#solutions-menu .nav').on('click', function(){
			$('#solutions-menu').addClass('sticky').removeClass;
		});
	});
	
});




/*

	var solutionsNav = $('#solutions-menu');
	var solutionsNavTop = solutionsNav.offset().top;
	
	$(window).scroll(function(){
		if($(window).scrollTop() > solutionsNavTop ){
			solutionsNav.addClass('stuck').removeClass('sticky');
		}
		else{
			solutionsNav.removeClass('stuck');
		}
	});

*/
