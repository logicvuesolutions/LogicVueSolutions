jQuery(function($){
	
	$(window).on("load resize", function() {
        if ($(window).width() >= 768) {
			//if screen is large, show the contact us sidebar when menu-toggle is clicked
			$('#menu-toggle').on('click', function(){
				$(this).toggleClass('open'); 
				$('#contact-sidebar, #overlay').toggleClass('open');
			});
			
		}else{
			// else show the main menu when menu-toggle is clicked
			$('#menu-toggle').on('click', function(){
				$('#header .menu').toggleClass('open');
				$('#header').addClass('stuck');
			});
		}
	});
	
/* Header setup on scroll */
	
	if( $('body').hasClass('home') ){
		$(window).scroll(function() {
			if ( $(this).scrollTop() > 50 ) { 
				$('#header, #menu-toggle').addClass('stuck');
			}else{
				$('#header, #menu-toggle').removeClass('stuck');
			}
		});
	}else{
		$('#header, #menu-toggle').addClass('stuck');
		
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
		
	}
	
	$(document).ready(function(){
		/* Sticky Solutions Menu on Scroll */
		$('#solutions-menu .nav').on('click', function(){
			$('#solutions-menu').addClass('sticky');
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

