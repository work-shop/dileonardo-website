'use strict';


function jumpLinks(config){
	//console.log("jump-links.js loaded");

	$(document).ready( function() {

		$(config.selector).click(function(e){

			e.preventDefault();

			var offset = 0;

			// if( $(window).width() > config.mobileBreakpoint ){
			// 	offset = config.navHeight + config.jumpPadding;	
			// } else{
			// 	offset = config.mobileNavHeight + config.jumpPadding;	
			// }

			offset = -1; //override

			$('html,body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top - offset
			}, config.transitionDuration);

		});


	});

}


export { jumpLinks };