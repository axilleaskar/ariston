$('.link1').click(function(){
	$(window).scrollTo(0,1750);
	
});

$("#link1").click(function() {
	console.log('hi')
    $('html, body').animate({
        scrollTop: $("#alfa").offset().top
    }, 2000);
});

$(window).scroll(function(){
	var wScroll = $(this).scrollTop() + 500;
	
	if(wScroll > $('.alfa').offset().top) {
		
		$('.alfa').addClass('showing');
	}
});




