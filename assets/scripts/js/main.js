jQuery(function ($) {
	// Scroll down button functionality
	$('.scroll-down').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $(this).offset().top}, 500, 'linear');
	});

	// Sticky header functionality
	$(window).scroll(function(){
		var sticky = $('.sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 50) sticky.addClass('fixed');
		else sticky.removeClass('fixed');
	});
});

jQuery(document).ready(function($){
	// News slider settings
	$('.news-slider').owlCarousel({
		loop: true,
		nav: true,
		dots: true,
		autoplay: false,
		autoplayTimeout: 3000,
		autoplaySpeed: 1500,
		autoplayHoverPause: true,
		responsive:{
			0:{
				items:1
			},
			1000:{
				items:3
			}
		}
	});

	// Services slider settings
	$('.service__gallery').owlCarousel({
		loop: true,
		nav: false,
		dots: false,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplaySpeed: 1000,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		items: 1
	});

	// Mobile nav javascript
	$('.hamburger').click(function () {
		$(this).toggleClass('active');
		$('#main-nav').toggleClass('active');
	});

	// Gallery filter
	$('.gallery-filter').click(function () {
		$(this).toggleClass('active');

		if ( $(this).hasClass('active') ) {
			$(this).find('ul').removeClass('hidden');
		} else {
			$(this).find('ul').addClass('hidden');
		}
	});
});