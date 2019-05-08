
'use strict';

var projects;

//loadProjects();

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
		projects = data;
		printTime();
	})
	.fail(function() {
		console.log('error loading projects from API');
	})
	.always(function() {
		//console.log('completed request for projects');
	});

}



function printTime(){
	var currentTime = new Date().getTime();
	totalTime = currentTime - startTime;
	var timeSinceLastStep = totalTime - lastStep;
	console.log('⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱⏱');
	console.log('time since last step: ' + timeSinceLastStep);
	lastStep = timeSinceLastStep;
	console.log('totalTime: ' + totalTime);
}
