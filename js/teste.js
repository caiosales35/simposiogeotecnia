$(document).ready(function(){

	//Init ScrollMagic
	var controller = new ScrollMagic.Controller();

	//build a scene
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '#quemsomos',	
		triggerHook: 0.7
		// reverse: false
	})
	.setClassToggle('#quemsomos', 'fade-in') //add class to project
	// .addIndicators({
	// 	name: 'quemsomos',
	// 	colorTrigger:'black',
	// 	colorStart:'black',
	// 	colorEnd: 'black'
	// })
	.addTo(controller);

	// //pin
	// var pinIntroScene = new ScrollMagic.Scene({
	// 	triggerElement: '#intro',
	// 	triggerHook: 0,
	// 	durantion: '30%'
	// })
	// .setPin('#intro')
	// .addTo(controller);

	// loop 
	$('.card-servs').each(function(){
		//build a scene
		var ourScene2 = new ScrollMagic.Scene({
			triggerElement: this,	
			triggerHook: 0.7
		})
		.setClassToggle(this, 'fade-in') //add class to project
		// .addIndicators({
		// 	name: 'servicos',
		// 	colorTrigger:'blue',
		// 	colorStart:'blue',
		// 	colorEnd: 'blue'
		// })
		.addTo(controller);
	});


});