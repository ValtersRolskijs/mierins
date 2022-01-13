jQuery(function ($) {
	$('.scroll-down').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $(this).offset().top}, 500, 'linear');
	});

	$(window).scroll(function(){
		var sticky = $('.sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 50) sticky.addClass('fixed');
		else sticky.removeClass('fixed');
	});
});

jQuery(document).ready(function($){
	// initialize owlcarousel
	$(".owl-carousel").owlCarousel({
		loop:true,
		nav:true,
		autoplay:false,
		autoplayTimeout:3000,
		autoplaySpeed: 1500,
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1
			},
			1000:{
				items:3
			}
		}
	});
});