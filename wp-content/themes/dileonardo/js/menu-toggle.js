'use strict';

function menuToggle( config ) {
	//console.log('menu-toggle.js loaded');

	$(document).ready( function() {
		$(config.menuToggleSelector).click(function(e) {
			e.preventDefault();
			menuToggle();
		});		

		//m or M	
		$(document).keypress(function(e) {
			if(e.which == 109 || e.which == 77) {	
				if($('input:focus')){
					var elem = document.activeElement;
					if ( elem.type ){ 

					}
					else{ 
						menuToggle();	
					}
				}
			}
		});		
		
	});

	//open and close the menu
	function menuToggle(){
		//console.log('menuToggle');

		if($('body').hasClass(config.bodyOffClass)){
			$(config.menuSelector).removeClass('closed').addClass('open');
			$(config.blanketSelector).removeClass('off').addClass('on');						
			$('body').removeClass(config.bodyOffClass).addClass(config.bodyOnClass);
			$('#menu-button span').text('’');
		}
		else if($('body').hasClass(config.bodyOnClass)){
			$(config.menuSelector).removeClass('open').addClass('closed');
			$(config.blanketSelector).removeClass('on').addClass('off');			
			$('body').removeClass(config.bodyOnClass).addClass(config.bodyOffClass);
			// $('body').removeClass('dropdown-on').addClass('dropdown-off');
			// $('.has-sub-menu').removeClass('open').addClass('closed');
			$('#menu-button span').text('Menu');
		}

	}	

}

export { menuToggle };
