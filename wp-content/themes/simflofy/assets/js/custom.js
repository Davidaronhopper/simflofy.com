'use strict';

(function($) {
  $(document).ready(function () {
    
   	$('.hamburger').click(function(e){
   		$(this).toggleClass('is-active');
   		$('#mobmenu').toggleClass('is-active');
   		$('body').toggleClass('covered'); 
   	});	
    
  });
})(jQuery);