jQuery(function($){
	
/* Header setup on scroll */
	
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
		/* Sticky Solutions Menu on Scroll */
		$('#solutions-menu .nav').on('click', function(){
			$('#solutions-menu').addClass('sticky').removeClass;
		});
		
		$('#menu-toggle').on('click', function(){
			$(this).toggleClass('open'); 
			$('#contact-sidebar, #overlay').toggleClass('open');
		});
		
		
		
		/*
		var pathname = window.location.pathname;
		var solutionsPath = pathname.split("solutions/").pop().replace("/", "");
		
		/* check url for active path; set class as active 
		console.log( 'Solutions Path = ' + solutionsPath );
		console.log( '#solutions-menu #'+solutionsPath+'-tab' );
		console.log( '#'+solutionsPath+'-tab' );
		
		$('#'+solutionsPath+'-tab').addClass('active');
		*/
		
		
	});
	
});

