'use strict';

function filter2() {
	//console.log('filter.js loaded');

	var $grid;
	var categoryFilteredCurrent = 'all';
	var regionFilteredCurrent = 'all';
	var initial = true;
	var baseUrl = '/projects/';
	var stateObj = {};


	//when the window is loaded, create isotope
	$(window).on('load', function() {
		
		if( $('.filters').length ){

			//SETUP ISOTOPE
			$grid = $('#grid').isotope({
				itemSelector: '.grid-item',
				percentPosition: true,
				transitionDuration: '.5s',
				masonry: {
					columnWidth: '.grid-sizer',
					gutter: '.gutter-sizer'
				}
			});

			$grid.on( 'arrangeComplete', onArrange );


			//INITIAL URL BASED FILTERING

			var urlVars = getUrlVars();
			var urlCategory = urlVars.type;
			var urlRegion = urlVars.region;
			var categoryStart, regionStart;

			if( !isEmpty(urlCategory) && urlCategory !== 'all' ){
				//console.log('urlCategory: ' + urlCategory);
				var categoryButtonSelector = '.filter-button[data-target=filter-category-' + urlCategory + ']';
				var categoryButtonCheck = $(categoryButtonSelector);
				if( !isEmpty(categoryButtonCheck) ){
					$(categoryButtonSelector).addClass('filter-active');
					var categoryTitle = $(categoryButtonSelector).text();
					$('.filter-current-category').text(categoryTitle);
					$('.filter-current-category').removeClass('inactive').addClass('active');
					$('.filter-button-all-category').removeClass('filter-active');
					categoryStart = 'filter-category-' + urlCategory;
				}
			} else{
				categoryStart = 'all';
			}

			if( !isEmpty(urlRegion) && urlRegion !== 'all' ){
				//console.log('urlRegion: ' + urlRegion);
				var regionButtonSelector = '.filter-button[data-target=filter-region-' + urlRegion + ']';
				var regionButtonCheck = $(regionButtonSelector);
				if( !isEmpty(regionButtonCheck) ){
					$(regionButtonSelector).addClass('filter-active');
					var regionTitle = $(regionButtonSelector).text();
					$('.filter-current-region').text(regionTitle);
					$('.filter-current-region').removeClass('inactive').addClass('active');
					$('.filter-button-all-region').removeClass('filter-active');
					regionStart = 'filter-region-' + urlRegion;
				}
			} else{
				regionStart = 'all';
			}


			//INITIAL FILTER
			filter(categoryStart, regionStart);


			//FILTERING BUTTONS 

			//category buttons
			$('.filter-button-category').click(function(e) {
				e.preventDefault();

				if( $(this).hasClass('filter-active') ){ //turn off a filter

					if( !$(this).hasClass('filter-button-all') ){
						filter('all', regionFilteredCurrent);
						//updateURL('all',)
						$(this).removeClass('filter-active');
						$('.filter-button-all-category').addClass('filter-active');
						$('.filter-current-category').removeClass('active').addClass('inactive');		
					}

				} else{ //turn on a filter

					var filterCategory = $(this).data('target');
					filter(filterCategory, regionFilteredCurrent);
					//updateURL()

					$('.filter-category .filter-button').removeClass('filter-active');
					$(this).addClass('filter-active');

					if( $(this).hasClass('filter-button-all') ){
						$('.filter-current-category').removeClass('active').addClass('inactive');		
					} else{
						var categoryTitle = $(this).text();
						$('.filter-current-category').text(categoryTitle);
						$('.filter-current-category').removeClass('inactive').addClass('active');
					}

				}

			});	


			//region buttons
			$('.filter-button-region').click(function(e) {
				e.preventDefault();
				
				if( $(this).hasClass('filter-active') ){ //turn off a filter

					if( !$(this).hasClass('filter-button-all') ){
						filter(categoryFilteredCurrent, 'all');
						$(this).removeClass('filter-active');
						$('.filter-button-all-region').addClass('filter-active');
						$('.filter-current-region').removeClass('active').addClass('inactive');		
					}

				} else{ //turn on a filter 

					var filterRegion = $(this).data('target');
					filter(categoryFilteredCurrent, filterRegion);

					$('.filter-region .filter-button').removeClass('filter-active');
					$(this).addClass('filter-active');

					if( $(this).hasClass('filter-button-all') ){
						$('.filter-current-region').removeClass('active').addClass('inactive');		
					} else{
						var regionTitle = $(this).text();
						$('.filter-current-region').text(regionTitle);
						$('.filter-current-region').removeClass('inactive').addClass('active');
					}

				}

			});	


			$('.filter-current-category').click(function(e) {
				e.preventDefault();
				if( $(this).hasClass('active') ){
					categoryFilteredCurrent = 'all';
					filter(categoryFilteredCurrent,regionFilteredCurrent);
					$(this).removeClass('active').addClass('inactive');
				}
				if( $(this).closest('.filter-menu').hasClass('open') ){
					var target = $(this).data('toggle-target');
					filterMenuToggle(target);
				}
			});

			$('.filter-current-region').click(function(e) {
				e.preventDefault();
				if( $(this).hasClass('active') ){
					regionFilteredCurrent = 'all';
					filter(categoryFilteredCurrent,regionFilteredCurrent);
					$(this).removeClass('active').addClass('inactive');
				}
				if( $(this).closest('.filter-menu').hasClass('open') ){
					var target = $(this).data('toggle-target');
					filterMenuToggle(target);
				}
			});


			$('.filter-menu-toggle').click(function(e) {
				var target = $(this).data('toggle-target');
				filterMenuToggle(target);
			});

			$('.page-intro').click(function(e) {
				if($('#filter-buttons-regions').hasClass('open')){
					var target = '#filter-buttons-regions';
					filterMenuToggle(target);
				}
				if($('#filter-buttons-categories').hasClass('open')){
					var target = '#filter-buttons-categories';
					filterMenuToggle(target);
				}
			});

			$('.close-filter-menus').click(function(e) {
				if($('#filter-buttons-regions').hasClass('open')){
					var target = '#filter-buttons-regions';
					filterMenuToggle(target);
				}
				if($('#filter-buttons-categories').hasClass('open')){
					var target = '#filter-buttons-categories';
					filterMenuToggle(target);
				}
			});


			//HISTORY MANAGEMENT

			window.onpopstate = function(event){
				var category, region;
				if(event.state.category === 'all'){
					category = 'all';
					$('.filter-current-category').removeClass('active').addClass('inactive');
					$('.filter-button-category').removeClass('filter-active');
					$('.filter-button-all-category').addClass('filter-active');
				} else{
					category = 'filter-category-' + event.state.category;
				}
				if(event.state.region === 'all'){
					region = 'all';
					$('.filter-current-region').removeClass('active').addClass('inactive');
					$('.filter-button-region').removeClass('filter-active');
					$('.filter-button-all-region').addClass('filter-active');
				} else{
					region = 'filter-region-' + event.state.region;
				}
				
				filter(category, region);
			};

		}


	}); //end window.onload



	//isotope arrange event
	function onArrange() {
		//console.log('arrange done');
		setTimeout(function() {
			reveal();
		}, 500);		
	}



	function reveal(){
		$('#projects-grid').removeClass('grid-loading').addClass('grid-loaded');
		$('#grid-loading').removeClass('grid-loading').addClass('grid-loaded');
	}



	function filterMenuToggle(target){
		var parent = $(target).closest('.filter-menu');
		if( $(target).hasClass('closed') ){
			$(target).removeClass('closed').addClass('open');
			$(parent).removeClass('closed').addClass('open');
		} else{
			$(target).removeClass('open').addClass('closed');
			$(parent).removeClass('open').addClass('closed');
		}
	}



	function filter(category, region) {
		console.log('filter: ' + category + ', ' + region);
		var filterClass;
		var urlCategory, urlRegion;

		if( category === 'all'){
			if( region === 'all'){
				filterClass = '*';
				categoryFilteredCurrent = 'all';
				regionFilteredCurrent = 'all';
				urlCategory = 'all';
				urlRegion = 'all';
			} else{
				filterClass = '.' + region;
				categoryFilteredCurrent = 'all';
				regionFilteredCurrent = region;
				urlCategory = 'all';
				urlRegion = regionFilteredCurrent.replace('filter-region-','');
			}
		} else{
			if( region === 'all'){
				filterClass = '.' + category;
				categoryFilteredCurrent = category;
				regionFilteredCurrent = 'all';
				urlCategory = categoryFilteredCurrent.replace('filter-category-','');
				urlRegion = 'all';
			} else{
				filterClass = '.' + category + '.' + region;
				categoryFilteredCurrent = category;
				regionFilteredCurrent = region;
				urlCategory = categoryFilteredCurrent.replace('filter-category-','');
				urlRegion = regionFilteredCurrent.replace('filter-region-','');
			}
		}

		$grid.isotope({ filter: filterClass });

		if(initial){
			initial = false;
		} else{
			//scrollToFilter();
		}

		updateURL(urlCategory, urlRegion);

	}



	function scrollToFilter(){
		var offset = $('.page-intro').outerHeight();
		$('html,body').animate({
			scrollTop: offset
		}, 500);
	}


	function updateURL(urlCategory, urlRegion){
		console.log('updateURL: ' + urlCategory + ', ' + urlRegion);
		var url = baseUrl + '?type=' + urlCategory + '&region=' + urlRegion;
		stateObj.category = urlCategory;
		stateObj.region = urlRegion;
		history.pushState( stateObj, '', url );
	}


	function isEmpty(val){
		return (val === undefined || val === null || val.length <= 0) ? true : false;
	}


	// Read a page's GET URL variables and return them as an associative array.
	function getUrlVars(){
		var vars = [], hash;
		var url = stripTrailingSlash(window.location.href);
		var hashes = url.slice(window.location.href.indexOf('?') + 1).split('&');
		console.log(hashes.length);
		if ( hashes.length > 1 ){
			for(var i = 0; i < hashes.length; i++){
				hash = hashes[i].split('=');
				vars.push(hash[0]);
				if ( isEmpty(hash[1]) ){
					hash[1] = hash[1].replace(/[^a-zA-Z0-9\-]/g, '');
				}
				vars[hash[0]] = hash[1];
			}
		}
		return vars;
	}


	function stripTrailingSlash(url){
		return url.replace(/\/$/, "");
	}


	// function getProjects(){
	// 	console.log('getProjects');

	// 	var endpoint = '/wp-json/wp/v2/projects/?per_page_100&_embed=true';

	// 	$.ajax({
	// 		url: endpoint,
	// 		dataType: 'json'
	// 	})
	// 	.done(function(data) {
	// 		console.log('successful request for projects');
	// 		console.log(data);
	// 		renderProjects(data);
	// 	})
	// 	.fail(function() {
	// 		console.log('error loading projects from API');
	// 		throwError();
	// 	})
	// 	.always(function() {
	// 		console.log('completed request for projects');
	// 	});

	// }


	// function renderProjects(data){
	// 	console.log('renderProjects');
	// 	reveal();
	// }


}


export { filter2 };
