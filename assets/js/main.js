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
		
		var pathname = window.location.pathname;
		var solutionsPath = pathname.split("solutions/").pop().replace("/", "");
		
		/* check url for active path; set class as active 
		console.log( 'Solutions Path = ' + solutionsPath );
		console.log( '#solutions-menu #'+solutionsPath+'-tab' );
		console.log( '#'+solutionsPath+'-tab' );
		*/
		
		$('#'+solutionsPath+'-tab').addClass('active');
		
		
		
		
		$( 'a[href*="#"]:not([href="#"])' ).click(function(){
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname){
				var target = $(this.hash), headerH = $("#header").height() -110;
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				
				if (target.length){
					$('html,body').animate({
						scrollTop: target.offset().top - headerH
					}, 500);
						return false;
				}
			}
		});
		
		
		
		
		
	});
	
});

