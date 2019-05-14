'use strict';

var baseUrl = '/wp-json/wp/v2/';
var pagination = 1;
var currentCategory = 'all';
var updating = false;
var full = false;
var start,end,time;

function filterNews() {
	//console.log('filter-news.js loaded');

	var categoryFiltered = false;
	var categoryFilteredCurrent = 'all';

	$(document).ready( function() {

		if( $('body').hasClass('page-id-25') ){

			//initialization

			var categoryStart;
			var urlVars = getUrlVars();
			var urlCategory = urlVars.category;

			if( !isEmpty(urlCategory) ){
				var categoryButtonSelector = '.filter-button[data-target=' + urlCategory + ']';
				var categoryButtonCheck = $(categoryButtonSelector);
				if( !isEmpty(categoryButtonCheck) ){
					$(categoryButtonSelector).addClass('filter-active');
					categoryStart = $(categoryButtonSelector).data('target-id');
				}
			} else{
				categoryStart = 'all';
			}

			filterCategories(categoryStart);
			
			if( categoryStart !== 'all'){
				updateUrl(categoryStart);
			}

			//events

			$('.filter-button-category').click(function(e) {
				e.preventDefault();
				var category;

				if( $(this).hasClass('filter-active') ){
					categoryFiltered = false;
					categoryFilteredCurrent = 'all';
					category = 'all';
					filterCategories('all');
					$(this).removeClass('filter-active');
				} else{
					scrollToFilter();
					category = $(this).data('target-id');
					filterCategories(category);
					filterButtonActivate( $(this), 'categories' );
				}
				updateUrl(category);
			});	


			window.addEventListener('popstate', function(e) {
	  			//console.log(e.state);

	  			if( e.state === null ){

	  			} else{
	  				var category = e.state.category;
	  				var categoryButtonSelector = '.filter-button[data-target=' + category + ']';
	  				var categoryButtonCheck = $(categoryButtonSelector);
	  				if( !isEmpty(categoryButtonCheck) ){
	  					$('.filter-button-category').removeClass('filter-active');
	  					$(categoryButtonSelector).addClass('filter-active');
	  				}  			
	  				filterCategories( category );	
	  			}

	  		});

			$( window ).scroll( function() {
				window.requestAnimationFrame(checkPosition);
			});

		}


	});// end document.ready


	function filterCategories( category ) {
		//console.log('filterCategories: ' + category);
		currentCategory = category;
		pagination = 1;
		
		clearFilterMessages();
		$('.card-news').remove();
		turnLoaderOn();

		if( category !== 'all'){
			categoryFiltered = true;
			categoryFilteredCurrent = category;
			getPosts( category );
		} else{
			filterButtonActivate( $('#filter-button-all') );
			getPosts( 'all' );
		}

	}



	function getPosts( category, page ){
		//console.log('getPosts with category: ' + category);

		if( isEmpty(category) ){
			category = 'all';
		}
		if ( isEmpty(page) ){
			page = 1;
		} 

		var endpoint;

		if ( !isEmpty(category) ){

			if(category === 'all'){
				endpoint = baseUrl + 'news?_embed&page=' + page + '&per_page=8';
			}else{
				endpoint = baseUrl + 'news?news-categories=' + category + '&_embed&page=' + page + '&per_page=8';
			}
			console.log('Request with endpoint: ' + endpoint);
			start = new Date().getTime();

			$.ajax({
				url: endpoint,
				dataType: 'json'
			})
			.done(function(data) {
				//console.log('successful request for posts');
				//console.log(data);
				renderPosts(data);
			})
			.fail(function() {
				turnLoaderOff();
				console.log('error loading posts from API');
			})
			.always(function() {
				//console.log('completed request for posts');
			});

		} else{
			console.log('no category all or categoryID supplied to get posts');
		}

	}


	function renderPosts( posts ){
		//console.log('renderPosts');

		var postsFound = false;
		hideElements();

		if( !isEmpty(posts) ){
			postsFound = true;
			for (var i = 0; i < posts.length; i++) {
				if( i === (posts.length - 1) ){
					renderPost( posts[i], true );
				} else{
					renderPost( posts[i], false );
				}
			}
		}else{
			updating = false;
			turnLoaderOff();
			console.log('no posts in API response');
			$('#filter-messages').addClass('filter-show');
		}

	}



	function renderPost( post, last ){

		var root = $('<article>')
		.addClass('col-md-6')
		.addClass('card')
		.addClass('card-news');

		var card = $('<div>')
		.addClass('card')
		.addClass('card-post');

		var imageContainer = $('<div>')
		.addClass('card-news-image');

		var imageSrc;
		if( typeof post._embedded['wp:featuredmedia'][0].media_details.sizes.md_cropped === 'undefined' ){
			if( typeof post._embedded['wp:featuredmedia'][0].source_url !== 'undefined' ){
				imageSrc = post._embedded['wp:featuredmedia'][0].source_url;
			}
		} else{
			imageSrc = post._embedded['wp:featuredmedia'][0].media_details.sizes.md_cropped.source_url;
		}
		if( !isEmpty(imageSrc)){
			var image = $('<img>')
			.attr('src', imageSrc);
		}

		var link1 = $('<a>')
		.attr('href', post.link);

		var link2 = $('<a>')
		.attr('href', post.link)
		.html(post.title.rendered);

		var textContainer = $('<div>')
		.addClass('card-news-text');

		var date = $('<h4>')
		.addClass('card-news-date')
		.html(post.acf.article_date);

		var title = $('<h3>')
		.addClass('card-news-title');


		if( !isEmpty(imageSrc)){
			link1.append(image);
			imageContainer.append(link1);
			card.append(imageContainer);
		}
		title.append(link2);
		textContainer.append(date).append(title);
		card.append(textContainer);
		root.append(card);

		$('.news-grid').append(root);

		if(last){
			updating = false;
			end = new Date().getTime();
			time = end - start;
			console.log('time from request to last append: ' + time);
			turnLoaderOff();
		}

	}


	function hideElements(){
		var elements = $('.filter-target');
		elements.removeClass('filter-show');
	}


	function clearFilterMessages(){
		$('#filter-messages').removeClass('filter-show');
	}


	function filterButtonActivate(button){
		$('.filters .filter-active').removeClass('filter-active');
		button.addClass('filter-active');		
	}


	function scrollToFilter(){
		var offset = 0;
		$('html,body').animate({
			scrollTop: 0
		}, 100);
	}


	function isEmpty(val){
		return ( typeof val === 'undefined' || val === null || val.length <= 0 ) ? true : false;
	}


	// Read a page's GET URL variables and return them as an associative array.
	function getUrlVars(){
		var vars = [], hash;
		var url = stripTrailingSlash(window.location.href);
		var hashes = url.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++){
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}

	function updateUrl(category){
		//console.log('updateURL(category): ' + category);
		
		if( Number.isInteger(category) ){
			category = $('.filter-button[data-target-id=' + category + ']').data('target');
		}

		var stateObj = {
			category: category
		};
		if( category === 'all' ){
			history.pushState(stateObj, category, '/news/' );
		} else{
			history.pushState(stateObj, category, '/news/?category=' + category );
		}
		
	}


	function checkPosition(){

		var footerTrigger = $('#newsletter').offset().top - $(window).height();

		if( $(window).scrollTop() >= footerTrigger && updating === false ){
			//console.log('footerTrigger');

			updating = true;
			pagination ++;
			getPosts(currentCategory, pagination);

		}
		// } else if( $(window).scrollTop() < footerTrigger && stickyNavProperties.element.hasClass('hidden') ){
		// 	stickyNavProperties.element.removeClass('hidden');
		// }

	}


	function stripTrailingSlash(url){
		return url.replace(/\/$/, "");
	}


	function turnLoaderOn(){
		console.log('turn loader on');
		$('#grid-loading').removeClass('grid-loaded').addClass('grid-loading');
	}

	function turnLoaderOff(){
		console.log('turn loader off');
		$('#grid-loading').removeClass('grid-loading').addClass('grid-loaded');
	}


}


export { filterNews };