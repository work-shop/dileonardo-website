'use strict';

var slick = require ('slick-carousel');

function slickSlideshows( config ) {
	//console.log('slick-slideshows.js loaded');

	$( document ).ready( function() {

		$('.slick-default').slick({
			slidesToShow: config.slidesToShow,
			dots: config.dots,
			arrows: config.arrows,
			autoplay: true,
			fade: config.fade,
			autoplaySpeed: config.autoplaySpeed,
			speed: config.speed
		});

		$('.slick-home-hero').slick({
			slidesToShow: 1,
			dots: true,
			arrows: false,
			autoplay: true,
			fade: true,
			autoplaySpeed: config.autoplaySpeed,
			speed: config.speed
		});

		$('.slick-project-modal').slick({
			slidesToShow: config.slidesToShow,
			dots: config.dots,
			arrows: config.arrows,
			autoplay: false,
			fade: config.fade,
			autoplaySpeed: config.autoplaySpeed,
			speed: config.speed
		});

		$('.slick-team').slick({
			slidesToShow: config.slidesToShow,
			dots: config.dots,
			arrows: config.arrows,
			autoplay: true,
			fade: config.fade,
			autoplaySpeed: config.autoplaySpeed,
			speed: config.speed
		});

		$('.slick-history').slick({
			slidesToShow: 1,
			dots: false,
			arrows: config.arrows,
			autoplay: false,
			fade: config.fade,
			autoplaySpeed: config.autoplaySpeed,
			speed: config.speed
		});

	});

}


export { slickSlideshows };
