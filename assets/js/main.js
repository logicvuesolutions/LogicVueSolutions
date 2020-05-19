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
		
		$('#header, #footer, #solutions-menu, #menu-toggle').delay(600).queue(function(animateStep1){
			$(this).addClass("fadeIn");
			animateStep1();
		});	
		$('.intro .container, body.home .content h1').delay(1000).queue(function(animateStep2){
			$(this).addClass("slideIn");
			animateStep2();
		});	
		$('body.body .content, body.home .content p, body.home .content a').delay(1500).queue(function(animateStep3){
			$(this).addClass("slideIn");
			animateStep3();
		});
		
	});

	
});

