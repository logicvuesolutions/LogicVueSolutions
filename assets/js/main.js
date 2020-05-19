jQuery(function($){
	
	$(window).on("load resize", function() {
		
		$('#header, #menu-toggle, #contact-sidebar, #overlay').removeClass('open')
		
        if ($(window).width() >= 768) {
			$('#menu-toggle').on('click', function(){
				$(this).toggleClass('open');
				$('#contact-sidebar, #overlay').toggleClass('open');
			});
			
		}else{
			$('#menu-toggle').on('click', function(){
				$(this).toggleClass('open');
				$('.menu').toggle();
			});
		}
			
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

