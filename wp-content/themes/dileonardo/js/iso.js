'use strict';

//var myIso;
//var Isotope = require('isotope-layout');

function iso(){
	console.log('iso.js loaded');

	$(window).on('load', function() {

		// var grid = document.querySelector('#grid');	

		// myIso = new Isotope( grid, {
		// 	itemSelector: '.grid-item',
		// 	transitionDuration: '.35s',
		// 	percentPosition: true,
		// 	masonry: {
		// 		columnWidth: '.grid-sizer',
		// 		gutter: '.gutter-sizer'
		// 	}
		// });

		// myIso.arrange({});

		// $('.project-grid').Isotope({
		// 	itemSelector: '.grid-item',
		// 	masonry: {
		// 		columnWidth: '.grid-sizer',
		// 		gutter: '.gutter-sizer'
		// 	}
		// });

		$('#grid').masonry({
			// set itemSelector so .grid-sizer is not used in layout
			itemSelector: '.grid-item',
			// use element for option
			columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer',
			percentPosition: true
	});

	});

}


export { iso };