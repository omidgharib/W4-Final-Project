$(function(){
	var
		backToTop = $(".back-to-top"),
		abas;

	backToTop.click(function(){
		$("html, body").animate({ scrollTop: 0 }, 800); 
	});

	var scrollorama = $.scrollorama({
        blocks: '.scrollblock',
        enablePin: false
    });

	console.log(1);

	scrollorama.animate('#example1',{
   		duration:400, property:'opacity'
	})

	console.log(1.5);

    scrollorama.animate('#member',{
    	duration: 400, 
    	property: 'opacity',
    	start: 0,
    	end: 1
	});
	console.log(2);

});