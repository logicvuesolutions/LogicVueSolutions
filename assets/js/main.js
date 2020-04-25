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
	
});

