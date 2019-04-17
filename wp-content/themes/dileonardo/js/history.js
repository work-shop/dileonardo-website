'use strict';


function history( config ) {
	//console.log('links-newtab.js loaded');

	$(document).ready( function() {

		$('.history-arrow').click(function(e) {
			$('.history-events-track').css('transform', 'translateX(-60vw)');
		});

	});

}

export { history };
