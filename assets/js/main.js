jQuery(function($){
	
	$(window).on("load resize", function() {
		$('#header, #menu-toggle').fadeIn(1000);
		$('.intro').delay(500).fadeIn(1000);
		$('body.home .content').delay(500).fadeIn(1000);
		$('body.body .content').delay(1000).fadeIn(1000);
		
		
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
	
});

