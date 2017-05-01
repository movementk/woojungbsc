(function($) {
			
	/* 데스크탑용 네비게이션 관련 이벤트 */
	$(document).on('click', '#header #btn-nav-open', function() {
		$('body').addClass('nav-opened');
	});
	$(document).on('mouseenter focus', '#header #nav > ul > li > a', function(e) {
		if ($(this).parent().hasClass('active')) {
			$(this).parent().removeClass('active');
		} else {
			$(this).parent().siblings('.active').removeClass('active');
			$(this).parent().addClass('active');
		}
		e.preventDefault();
	});
	$(document).on('mouseleave', '#header #nav > ul > li', function(e) {
		$(this).removeClass('active');
	});

	/* 모바일, 테블릿 네비게이션 관련 이벤트 */
	$(document).on('click', '#nav-aside', function(e) {
		if ($(e.target).attr('id') == 'nav-aside') {
			$('body').removeClass('nav-opened');
		}
	});
	$(document).on('click', '#nav-aside #btn-nav-close', function() {
		$('body').removeClass('nav-opened');
	});
	$(document).on('click', '#nav-aside .nav-body > ul > li > a', function(e) {
		if ($(this).parent().hasClass('selected')) {
			$(this).parent().removeClass('selected');
		} else {
			$(this).parent().siblings('.selected').removeClass('selected');
			$(this).parent().addClass('selected');
		}
		e.preventDefault();
	});

})(jQuery);