'use strict';

var stickyNavProperties = {
	offset : {},
	triggerPosition : {}
};

function stickyNav( config ) {
	//console.log("sticky-nav.js loaded");

	$(document).ready( function() {

		if( $('.sticky-nav').length ){
			//console.log('page nav present');

			stickyNavProperties.selector = config.selector || '#nav';
			stickyNavProperties.navHeight = config.navHeight || 75;
			stickyNavProperties.mobileNavHeight = config.mobileNavHeight || 66;
			stickyNavProperties.element = $(stickyNavProperties.selector);
			stickyNavProperties.mobileBreakpoint = config.mobileBreakpoint;
			stickyNavProperties.activeOnMobile = config.activeOnMobile;

			if( $('body').hasClass('page-id-21') ){
				//projects page
				stickyNavProperties.top = 0;
			} else{
				stickyNavProperties.top = 90;//container fluid x 1
			}

			calculatePositions();

			$('body').on({ 'touchmove': function() { 
				window.requestAnimationFrame(checkNavPosition); } 
			});

			$( window ).scroll( function() {
				window.requestAnimationFrame(checkNavPosition);
			});

			$( window ).resize( function() {
				window.requestAnimationFrame(calculatePositions);
				window.requestAnimationFrame(checkNavPosition);
			});	

			setTimeout(function() {
				window.requestAnimationFrame(checkNavPosition); 
			}, 200);

			setTimeout(function() {
				//window.requestAnimationFrame(calculatePositions); 
			}, 3000);

		}

	});

}


function calculatePositions(){

	if( $(window).width() < 768){
		stickyNavProperties.top = 66;
	}
	if($('body').hasClass('page-id-25')){
		//news page
		stickyNavProperties.triggerPosition = 0;
	} else{
		stickyNavProperties.offset = stickyNavProperties.element.offset();
		//console.log('stickyNavProperties.offset: ' + stickyNavProperties.offset.top);
		stickyNavProperties.triggerPosition = stickyNavProperties.offset.top - stickyNavProperties.top;
		//console.log('stickyNavProperties.triggerPosition: ' + stickyNavProperties.triggerPosition);
	}

}


function checkNavPosition(){

	if( $(window).width() > stickyNavProperties.mobileBreakpoint || stickyNavProperties.activeOnMobile ){

		//var footerTrigger = $('#footer').offset().top - ( $(window).height() * 1 );
		var footerTrigger = $('#footer').offset().top - ( $(window).height() * 1 ) - 100;

		if ( $(window).scrollTop() >= stickyNavProperties.triggerPosition && stickyNavProperties.element.hasClass('before') ){
			toggleNav();
		}else if($(window).scrollTop() < stickyNavProperties.triggerPosition && stickyNavProperties.element.hasClass('after') ){
			toggleNav();
		}

		if( $(window).scrollTop() >= footerTrigger && stickyNavProperties.element.hasClass('shown') ){
			//console.log('footer hiding');
			stickyNavProperties.element.addClass('sticky-hidden');		
		} else if( $(window).scrollTop() < footerTrigger && stickyNavProperties.element.hasClass('sticky-hidden') ){
			//console.log('footer showing');
			stickyNavProperties.element.removeClass('sticky-hidden');
		}

	}

}


function toggleNav(){

	if ( stickyNavProperties.element.hasClass('before') ){
		stickyNavProperties.element.removeClass('before').addClass('after');
		$('body').addClass('sticky-nav-after');
	}else if( stickyNavProperties.element.hasClass('after') ){
		stickyNavProperties.element.removeClass('after').addClass('before');
		$('body').removeClass('sticky-nav-after');			
	}	

}

function hideNav(){

	if ( stickyNavProperties.element.hasClass('hidden') ){
		stickyNavProperties.element.removeClass('hidden');
	}else {
		stickyNavProperties.element.addClass('hidden');		
	}	

}


export { stickyNav };