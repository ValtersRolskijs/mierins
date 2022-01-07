jQuery(function ($) {
	$('.scroll-down').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $(this).offset().top}, 500, 'linear');
	});
});