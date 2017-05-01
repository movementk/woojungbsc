(function($) {
	
	// 스크롤 여부
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 0) {
			$('body').addClass('scrolled');
		} else {
			$('body').removeClass('scrolled');
		}
	});
	
})(jQuery);