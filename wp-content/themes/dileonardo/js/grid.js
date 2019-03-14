'use strict';


function grid(){
	//console.log('grid.js loaded');

	$(window).on('load', function() {

		setTimeout(function() {
			$('#grid').masonry({
			// set itemSelector so .grid-sizer is not used in layout
			itemSelector: '.grid-item',
			// use element for option
			columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer',
			percentPosition: true
		});
		}, 500);

	});

}


export { grid };