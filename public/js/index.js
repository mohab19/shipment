$(document).ready(function() {
	$(".begin").click(function() {
	$('html,body').animate({
		scrollTop: $(".features").offset().top}, 'slow');
	});
});

// $('b[data-toggle="tooltip"]').tooltip();

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
// navbar background changes

let topsec = $(".main-panel .content").offset().top - 200;
console.log(topsec);
$(window).scroll(function(){
	if($(window).scrollTop() > topsec)
	{
		$(".navbar").css("background-color", " #6BCBD9");
		$("nav a ").hover(function() {$(this).css("color","#fff")});
		$(".navbar-brand span").css("color","#343A40");
	}
	else
	{
		$(".navbar").css("background-color", "transparent");
		$("nav a ").hover(function(){$(this).css("color","#6BCBD9")});
		$(".navbar-brand span").css("color","#6BCBD9");
    }
});
