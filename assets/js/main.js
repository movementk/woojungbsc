(function($) {
	
	// 스크롤 여부
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 0) {
			$('body').addClass('scrolled');
		} else {
			$('body').removeClass('scrolled');
		}
	});
	
	// 메인 슬라이더 관련
	$('#introduce .slider').bxSlider({
		mode: 'fade',
		preventDefaultSwipeY: true,
		buildPager: function(slideIndex) {
			return '<span class="sr-only">'+slideIndex+'</span>';
		},
		onSliderLoad: function(currentIndex) {
			var $currentElem = $('#introduce .intro-item:not(.bx-clone):eq(0)');
			$currentElem.addClass('active');
			var typeContainer = $currentElem.find('span.typed:eq(0)');
			var typeString    = $currentElem.find('span.typed:eq(0)').attr("data-typed");
			typeContainer.text("").unityping({
				string: [typeString],
				typingSpeed: 1000,
				startDelay: 1500
			});
		},
		onSlideBefore: function($slideElement, oldIndex, newIndex) {
			$('#introduce .intro-item.active').removeClass('active');
		},
		onSlideAfter: function($slideElement, oldIndex, newIndex) {
			$slideElement.addClass('active');
			var typeContainer = $slideElement.find('span.typed:eq(0)');
			var typeString    = $slideElement.find('span.typed:eq(0)').attr("data-typed");
			typeContainer.text("").unityping({
				string: [typeString],
				typingSpeed: 1000,
				startDelay: 1500
			});
		}
	});
	
	// 연구개발 슬라이더 관련
	$('#rnd .slider').bxSlider({
		mode: 'fade',
		auto: true,
		speed: 0,
		adaptiveHeight: true,
		touchEnabled: false,
		nextText: '<i class="icon-right-open"></i>',
		prevText: '<i class="icon-left-open"></i>',
		pagerCustom: '#rnd .pager:eq(0)',
		onSlideBefore: function($slideElement, oldIndex, newIndex) {
			$('#rnd .pager .bar').css({
				top: newIndex * 35 + newIndex * 10
			});
		}
	});
	
})(jQuery);