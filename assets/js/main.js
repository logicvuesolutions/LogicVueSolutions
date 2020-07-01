jQuery(function($){
	
	$(window).on("load resize", function() {
		
		$('#menu-toggle, #bg-menu, #bg-menu-cover, #header').removeClass('open');
		$('#bg-menu .col').fadeOut();
		
			$('#menu-toggle').on('click', function(){
				$(this).toggleClass('open');
				$('#bg-menu, #bg-menu-cover').toggleClass('open');
				$('#header').delay(300).toggleClass('open');
				$('#bg-menu .col').delay(300).fadeToggle(800);
			});
		
			
	});
	
	// load animations
	$(window).on("load", function() {
		$('.load-bar').addClass("scaleInOut");
		
		$(window).delay(600).queue(function(animateBackground){
			$('.bg, .intro').addClass("fadeIn");
			animateBackground();
		});	
		
		$(window).delay(600).queue(function(animateHeader){
			$('#header, #footer, #solutions-menu, #menu-toggle').addClass("fadeIn");
			$('.intro .container, body.home .content h1').addClass("slideIn");
			animateHeader();
		});	
			
		$(window).delay(800).queue(function(animateContent){
			$('body.body .content, body.home .content p, body.home .content a').addClass("slideIn");
			animateContent();
		});
		
	});

	
});

