$(document).ready(function(){
	var width = $('.mobileboxes').width();
	$('.mobileboxes').css("height",0.667*width);
	$(window).resize(function(){
	var width = $('.mobileboxes').width();
	$('.mobileboxes').css("height",0.667*width);
	});
});