'use strict';

var myIso;
var Isotope = require('isotope-layout');

function iso(){
	console.log('iso.js loaded');

	$(window).on('load', function() {

		var grid = document.querySelector('#grid');	

		myIso = new Isotope( grid, {
			itemSelector: '.grid-item',
			transitionDuration: '.35s',
			masonry: {
				columnWidth: '.grid-sizer',
				gutter: '.gutter-sizer'
			},				
			// getSortData: {
			// 	number: '[data-order]',
			// 	featured: function(itemElem) {
			// 		var order = $(itemElem).attr('data-sort');
			// 		return parseInt(order);
			// 	}
			// },
			hiddenStyle: {
				opacity: 0
			},
			visibleStyle: {
				opacity: 1
			}
		});

		// $('.project-grid').Isotope({
		// 	itemSelector: '.grid-item',
		// 	masonry: {
		// 		columnWidth: 100
		// 	}
		// });

	});

}


export { iso };