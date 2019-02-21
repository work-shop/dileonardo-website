'use strict';


function linksNewtab( config ) {
	//console.log('links-newtab.js loaded');

	$(document).ready( function() {
		$('a').each(function() {
			var a = new RegExp('/' + window.location.host + '/');
			if(!a.test(this.href)) {
				$(this).click(function(event) {
					event.preventDefault();
					event.stopPropagation();
					window.open(this.href, '_blank');
				});
			}
		});
	});

}

export { linksNewtab };
