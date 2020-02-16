jQuery(function($){
	

	
	if( $('body').hasClass('home') ){
		$(window).scroll(function() {
			if ($(this).scrollTop() > 50) { 
				$('#header').addClass('stuck');
			}
		});
	}else{
		$('#header').addClass('stuck');
	}
	
	
	$(document).ready(function(){});
	
});
