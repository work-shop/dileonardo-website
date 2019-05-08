'use strict';

function filter2() {
	//console.log('filter.js loaded');

	var $grid;
	var categoryFilteredCurrent = 'all';
	var regionFilteredCurrent = 'all';
	var initial = true;
	var initialUrlEmpty = true;
	var arranged = false;
	var baseUrl = '/projects/';
	var stateObj = {};
	var startTime = new Date().getTime();
	var lastStep = startTime;
	var totalTime;

	$(document).ready( function() {
		console.log('document.ready');
		printTime();

		if ($('body').hasClass('page-id-21')) {
			//loadProjects();
		}

	});

	//when the window is loaded, create isotope
	$(window).on('load', function() {

		if ($('body').hasClass('page-id-21')) {

			console.log('window.onload');
			
			printTime();

			//SETUP ISOTOPE
			$grid = $('#grid').isotope({
				itemSelector: '.grid-item',
				percentPosition: true,
				transitionDuration: '.5s',
				masonry: {
					columnWidth: '.grid-sizer',
					gutter: '.gutter-sizer'
				},
				getSortData: {
					featured: '[data-sort]' // value of attribute
				},
				sortBy: 'featured'
			});

			$grid.on('arrangeComplete', onArrange);

			//INITIAL URL BASED FILTERING
			var urlCategory = getUrlParameter('type');
			var urlRegion = getUrlParameter('region');
			var categoryStart, regionStart;

			if (!isEmpty(urlCategory) && !isEmpty(urlRegion)) {
				initialUrlEmpty = false;
			}

			if (!isEmpty(urlCategory) && urlCategory !== 'all') {
				//console.log('urlCategory: ' + urlCategory);
				var categoryButtonSelector =
				'.filter-button[data-target=filter-category-' +
				urlCategory +
				']';
				var categoryButtonCheck = $(categoryButtonSelector);

				if (!isEmpty(categoryButtonCheck)) {
					$(categoryButtonSelector).addClass('filter-active');
					var categoryTitle = $(categoryButtonSelector).text();
					$('.filter-current-category').text(categoryTitle);
					$('.filter-current-category')
					.removeClass('inactive')
					.addClass('active');
					$('.filter-button-all-category').removeClass(
						'filter-active'
						);
					categoryStart = 'filter-category-' + urlCategory;
				}
			} else {
				categoryStart = 'all';
			}

			if (!isEmpty(urlRegion) && urlRegion !== 'all') {
				//console.log('urlRegion: ' + urlRegion);
				var regionButtonSelector =
				'.filter-button[data-target=filter-region-' +
				urlRegion +
				']';
				var regionButtonCheck = $(regionButtonSelector);
				if (!isEmpty(regionButtonCheck)) {
					$(regionButtonSelector).addClass('filter-active');
					var regionTitle = $(regionButtonSelector).text();
					$('.filter-current-region').text(regionTitle);
					$('.filter-current-region')
					.removeClass('inactive')
					.addClass('active');
					$('.filter-button-all-region').removeClass('filter-active');
					regionStart = 'filter-region-' + urlRegion;
				}
			} else {
				regionStart = 'all';
			}

			//INITIAL FILTER
			filter(categoryStart, regionStart);

			//FILTERING BUTTONS

			//category buttons
			$('.filter-button-category').click(function(e) {
				e.preventDefault();

				if ($(this).hasClass('filter-active')) {
					//turn off a filter

					if (!$(this).hasClass('filter-button-all')) {
						filter('all', regionFilteredCurrent);
						$(this).removeClass('filter-active');
						$('.filter-button-all-category').addClass(
							'filter-active'
							);
						$('.filter-current-category')
						.removeClass('active')
						.addClass('inactive');
					}
				} else {
					//turn on a filter

					var filterCategory = $(this).data('target');
					filter(filterCategory, regionFilteredCurrent);
					$('.filter-category .filter-button').removeClass(
						'filter-active'
						);
					$(this).addClass('filter-active');

					if ($(this).hasClass('filter-button-all')) {
						$('.filter-current-category')
						.removeClass('active')
						.addClass('inactive');
					} else {
						var categoryTitle = $(this).text();
						$('.filter-current-category').text(categoryTitle);
						$('.filter-current-category')
						.removeClass('inactive')
						.addClass('active');
					}
				}
			});

			//region buttons
			$('.filter-button-region').click(function(e) {
				e.preventDefault();

				if ($(this).hasClass('filter-active')) {
					//turn off a filter

					if (!$(this).hasClass('filter-button-all')) {
						filter(categoryFilteredCurrent, 'all');
						$(this).removeClass('filter-active');
						$('.filter-button-all-region').addClass(
							'filter-active'
							);
						$('.filter-current-region')
						.removeClass('active')
						.addClass('inactive');
					}
				} else {
					//turn on a filter

					var filterRegion = $(this).data('target');
					filter(categoryFilteredCurrent, filterRegion);

					$('.filter-region .filter-button').removeClass(
						'filter-active'
						);
					$(this).addClass('filter-active');

					if ($(this).hasClass('filter-button-all')) {
						$('.filter-current-region')
						.removeClass('active')
						.addClass('inactive');
					} else {
						var regionTitle = $(this).text();
						$('.filter-current-region').text(regionTitle);
						$('.filter-current-region')
						.removeClass('inactive')
						.addClass('active');
					}
				}
			});

			$('.filter-current-category').click(function(e) {
				e.preventDefault();
				if ($(this).hasClass('active')) {
					categoryFilteredCurrent = 'all';
					filter(categoryFilteredCurrent, regionFilteredCurrent);
					$(this)
					.removeClass('active')
					.addClass('inactive');
					$('.filter-button-category').removeClass('filter-active');
					$('.filter-button-all-category').addClass('filter-active');
				}
				if (
					$(this)
					.closest('.filter-menu')
					.hasClass('open')
					) {
					var target = $(this).data('toggle-target');
				filterMenuToggle(target);
			}
		});

			$('.filter-current-region').click(function(e) {
				e.preventDefault();
				if ($(this).hasClass('active')) {
					regionFilteredCurrent = 'all';
					filter(categoryFilteredCurrent, regionFilteredCurrent);
					$(this)
					.removeClass('active')
					.addClass('inactive');
					$('.filter-button-region').removeClass('filter-active');
					$('.filter-button-all-region').addClass('filter-active');
				}
				if (
					$(this)
					.closest('.filter-menu')
					.hasClass('open')
					) {
					var target = $(this).data('toggle-target');
				filterMenuToggle(target);
			}
		});

			$('.filter-menu-toggle').click(function(e) {
				var target = $(this).data('toggle-target');
				filterMenuToggle(target);
			});

			$('.page-intro').click(function(e) {
				if ($('#filter-buttons-regions').hasClass('open')) {
					var target = '#filter-buttons-regions';
					filterMenuToggle(target);
				}
				if ($('#filter-buttons-categories').hasClass('open')) {
					var target = '#filter-buttons-categories';
					filterMenuToggle(target);
				}
			});

			$('.close-filter-menus').click(function(e) {
				if ($('#filter-buttons-regions').hasClass('open')) {
					var target = '#filter-buttons-regions';
					filterMenuToggle(target);
				}
				if ($('#filter-buttons-categories').hasClass('open')) {
					var target = '#filter-buttons-categories';
					filterMenuToggle(target);
				}
			});

			//HISTORY MANAGEMENT

			window.onpopstate = function(event) {
				var category, region;
				if (event.state.category === 'all') {
					category = 'all';
					$('.filter-current-category')
					.removeClass('active')
					.addClass('inactive');
					$('.filter-button-category').removeClass('filter-active');
					$('.filter-button-all-category').addClass('filter-active');
				} else {
					var categoryButtonSelector =
					'.filter-button[data-target=filter-category-' +
					event.state.category +
					']';
					var categoryButtonCheck = $(categoryButtonSelector);
					console.log(
						'categoryButtonSelector: ' + categoryButtonSelector
						);
					if (!isEmpty(categoryButtonCheck)) {
						$('.filter-button-category').removeClass(
							'filter-active'
							);
						$(categoryButtonSelector).addClass('filter-active');
						var categoryTitle = $(categoryButtonSelector).text();
						$('.filter-current-category').text(categoryTitle);
						$('.filter-current-category')
						.removeClass('inactive')
						.addClass('active');
						$('.filter-button-all-category').removeClass(
							'filter-active'
							);
					}
					category = 'filter-category-' + event.state.category;
				}
				if (event.state.region === 'all') {
					region = 'all';
					$('.filter-current-region')
					.removeClass('active')
					.addClass('inactive');
					$('.filter-button-region').removeClass('filter-active');
					$('.filter-button-all-region').addClass('filter-active');
				} else {
					var regionButtonSelector =
					'.filter-button[data-target=filter-region-' +
					event.state.region +
					']';
					var regionButtonCheck = $(regionButtonSelector);
					if (!isEmpty(regionButtonCheck)) {
						$('.filter-button-region').removeClass('filter-active');
						$(regionButtonSelector).addClass('filter-active');
						var regionTitle = $(regionButtonSelector).text();
						$('.filter-current-region').text(regionTitle);
						$('.filter-current-region')
						.removeClass('inactive')
						.addClass('active');
						$('.filter-button-all-region').removeClass(
							'filter-active'
							);
					}
					region = 'filter-region-' + event.state.region;
				}

				filter(category, region, false);
			};

		}

	}); //end window.onload


	//isotope arrange event
	function onArrange() {
		//console.log('arrange done');
		
		if(!arranged){
			arranged = true;
			progressive();
			setTimeout(function() {
				reveal();
			}, 100);
		}

	}

	function reveal() {
		$('#projects-grid')
		.removeClass('grid-loading')
		.addClass('grid-loaded');
		$('#grid-loading')
		.removeClass('grid-loading')
		.addClass('grid-loaded');
	}

	function filterMenuToggle(target) {
		var parent = $(target).closest('.filter-menu');
		if ($(target).hasClass('closed')) {
			$(target)
			.removeClass('closed')
			.addClass('open');
			$(parent)
			.removeClass('closed')
			.addClass('open');
		} else {
			$(target)
			.removeClass('open')
			.addClass('closed');
			$(parent)
			.removeClass('open')
			.addClass('closed');
		}
	}

	function filter(category, region, updateUrlFlag) {
		//console.log('filter: ' + category + ', ' + region);
		if (category === undefined) {
			category = 'all';
		}
		if (region === undefined) {
			region = 'all';
		}
		if (updateUrlFlag === undefined) {
			updateUrlFlag = true;
		}

		var filterClass;
		var urlCategory, urlRegion;

		if (category === 'all') {
			if (region === 'all') {
				filterClass = '*';
				categoryFilteredCurrent = 'all';
				regionFilteredCurrent = 'all';
				urlCategory = 'all';
				urlRegion = 'all';
			} else {
				filterClass = '.' + region;
				categoryFilteredCurrent = 'all';
				regionFilteredCurrent = region;
				urlCategory = 'all';
				urlRegion = regionFilteredCurrent.replace('filter-region-', '');
			}
		} else {
			if (region === 'all') {
				filterClass = '.' + category;
				categoryFilteredCurrent = category;
				regionFilteredCurrent = 'all';
				urlCategory = categoryFilteredCurrent.replace(
					'filter-category-',
					''
					);
				urlRegion = 'all';
			} else {
				filterClass = '.' + category + '.' + region;
				categoryFilteredCurrent = category;
				regionFilteredCurrent = region;
				urlCategory = categoryFilteredCurrent.replace(
					'filter-category-',
					''
					);
				urlRegion = regionFilteredCurrent.replace('filter-region-', '');
			}
		}

		$grid.isotope({
			filter: filterClass,
			sortBy: 'featured'
		});

		if (initial) {
			initial = false;
			var url = baseUrl + '?type=' + urlCategory + '&region=' + urlRegion;
			stateObj.category = urlCategory;
			stateObj.region = urlRegion;
			history.replaceState(stateObj, '', url);
		} else {
			scrollToFilter();
			if (updateUrlFlag === true) {
				updateURL(urlCategory, urlRegion);
			}
		}
	}

	function scrollToFilter() {
		var offset = $('.page-intro').outerHeight();
		offset = 0;
		$('html,body').animate(
		{
			scrollTop: offset
		},
		500
		);
	}

	function updateURL(urlCategory, urlRegion) {
		//console.log('updateURL: ' + urlCategory + ', ' + urlRegion);
		var url = baseUrl + '?type=' + urlCategory + '&region=' + urlRegion;
		stateObj.category = urlCategory;
		stateObj.region = urlRegion;
		history.pushState(stateObj, '', url);
	}

	function isEmpty(val) {
		return val === undefined || val === null || val.length <= 0
		? true
		: false;
	}

	function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
		sURLVariables = sPageURL.split('&'),
		sParameterName,
		i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined
				? true
				: decodeURIComponent(sParameterName[1]);
			}
		}
	}



	function loadProjects(){
		console.log('loadProjects');
		printTime();

		var endpoint = '/wp-json/wp/v2/projects/?per_page=10&_embed=true';

		$.ajax({
			url: endpoint,
			dataType: 'json'
		})
		.done(function(data) {
			console.log('successful request for projects');
			console.log(data);
			printTime();
			renderProjects(data);
		})
		.fail(function() {
			console.log('error loading projects from API');
		})
		.always(function() {
			//console.log('completed request for projects');
		});

	}


	function renderProjects(data){
		console.log('renderProjects');
		printTime();
		reveal();
	}


	function printTime(){
		// var currentTime = new Date().getTime();
		// totalTime = currentTime - startTime;
		// var timeSinceLastStep = totalTime - lastStep;
		// console.log('⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱');
		// console.log('time since last step: ' + timeSinceLastStep);
		// lastStep = timeSinceLastStep;
		// console.log('totalTime: ' + totalTime);
	}


	function progressive(){
		var images = $('.progressive');

		for(var i = 0; i < images.length; i++){
			var container = $(images[i]);
			var img = container.children('img');
			var src = container.data('src');

			var newImg = $('<img>');
			newImg.attr('src',src);
			newImg.addClass('reveal');

			container.append(newImg);

			setTimeout(function() {
				newImg.addClass('revealed');
				img.remove();	
			}, 500);
			
		}

	}


}

export { filter2 };
