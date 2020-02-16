jQuery(function($){
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 50) { 
			$('#header').css('background', 'rgba(10,2,22,1)');
		}else{
			$('#header').css('background', 'transparent');
		}
		
	});
    
	
	
	$(document).ready(function(){});
	
});
