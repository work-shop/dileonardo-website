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
			speed: config.speed,
			pauseOnDotsHover: true
		});

		$('.slick-home-hero').slick({
			slidesToShow: 1,
			dots: true,
			arrows: false,
			autoplay: true,
			fade: false,
			autoplaySpeed: config.autoplaySpeed,
			speed: config.speed,
			vertical: false,
			pauseOnDotsHover: true
		});

		$('.slick-project-modal').slick({
			slidesToShow: config.slidesToShow,
			dots: config.dots,
			arrows: config.arrows,
			autoplay: false,
			fade: config.fade,
			autoplaySpeed: config.autoplaySpeed,
			speed: 400,
			pauseOnDotsHover: true,
		});

		// $('.slick-team').slick({
		// 	slidesToShow: config.slidesToShow,
		// 	dots: config.dots,
		// 	arrows: config.arrows,
		// 	autoplay: true,
		// 	fade: config.fade,
		// 	autoplaySpeed: config.autoplaySpeed,
		// 	speed: config.speed
		// });

		$('.slick-history').slick({
			slidesToShow: 3,
			slidesToScroll: 2,
			dots: false,
			arrows: true,
			autoplay: false,
			fade: false,
			infinite: false,
			autoplaySpeed: config.autoplaySpeed,
			speed: config.speed,
			pauseOnDotsHover: true,
			responsive: [
			{
				breakpoint: 993,
				settings: {
					infinite: false,
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					infinite: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			]
		});
	});

}


export { slickSlideshows };
