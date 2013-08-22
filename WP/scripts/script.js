$(function(){
	var
		backToTop = $(".back-to-top"),
		abas;

	backToTop.click(function(){
		$("html, body").animate({ scrollTop: 0 }, 800); 
	});
});