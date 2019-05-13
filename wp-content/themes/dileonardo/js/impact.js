'use strict';

//https://github.com/inorganik/CountUp.js
import { CountUp } from './countUp.min.js';

function impact(){
	//console.log('impact.js loaded');

	var impactActivated = false;
	var statistics; 

	$( document ).ready( function() {
		if( $('body').hasClass('page-id-7')){

			setupImpact();

			window.addEventListener('spyChange', function(){ 
				//console.log('spychange'); 
				if(!impactActivated){
					if( $('#impact').hasClass('activated')){
						impactActivated = true;
						activateImpact();
					}	
				}
			}, false);

		}
	});


	function setupImpact(){
		//console.log('setupImpact');
		
		statistics = $('.impact-statistic');

		statistics.each(function(index, statistic) {
			var numberStart = formatNumber($(statistic).data('number-start'));
			$(statistic).text(numberStart);
			var numberSuffix = $(statistic).data('number-suffix');
			$(statistic).siblings('.impact-statistic-number-suffix').text(numberSuffix);
		});

	}





	function activateImpact(){
		//console.log('activateImpact');

		setTimeout(function() {

			statistics.each(function(index, statistic) {
				if(index < 1 || true){
					var numberStart = $(statistic).data('number-start');
					var numberEnd = $(statistic).data('number-end');

					//https://github.com/inorganik/CountUp.js
					var id = 'impact-statistic-' + index;
					var options = {
						duration: 2,
						useEasing: false,
						startVal: numberStart
					};
					var countUp = new CountUp(id, numberEnd, options);

					if (!countUp.error) {
						countUp.start();
					} else {
						console.error(countUp.error);
					}

					//var numberContainer = $(statistic).find('.impact-statistic-number-container');
					//incrementImpact(numberContainer,numberStart,numberEnd);
				}

			});

		}, 500);

	}



	function incrementImpact(numberContainer,numberStart,numberEnd){
		console.log('incrementImpact');

		var difference = numberEnd - numberStart;
		var stepSize = Math.floor(difference / steps);

		for(var i = 1; i <= steps; i++ ){
			
			var newNumber = numberStart + i*(stepSize);
			console.log(newNumber);

			if(i !== steps){
				writeNumber(numberContainer, newNumber);
			} else{
				writeNumber(numberContainer, numberEnd);
			}

		}

	}



	function writeNumber(numberContainer, number){
		console.log('writeNumber: ' + number);

		numberContainer.text( formatNumber(number) );

	}


	function formatNumber(num) {
		return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
	}


}


export { impact };