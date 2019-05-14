'use strict';


function grid(){
	//console.log('grid.js loaded');

	$(window).on('load', function() {

		if( $('body').hasClass('single-projects') ){

			//setTimeout(function() {
				$('#grid-project').masonry({
					itemSelector: '.grid-item',
					columnWidth: '.grid-sizer',
					gutter: '.gutter-sizer',
					percentPosition: true
				});
			//}, 500);

		}

	});

}


export { grid };