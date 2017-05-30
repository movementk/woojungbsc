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
		preventDefaultSwipeX: true,
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
			var video = document.getElementById('video-'+(currentIndex+1));
			if (video) {
				video.play();
			}
		},
		onSlideBefore: function($slideElement, oldIndex, newIndex) {
			$('#introduce .intro-item.active').removeClass('active');
			var video = document.getElementById('video-'+(oldIndex+1));
			if (video) {
				video.pause();
			}
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
			var video = document.getElementById('video-'+(newIndex+1));
			if (video) {
				video.play();
			}
		}
	});
	
	// 연구개발 슬라이더 관련
	$('#rnd .slider').bxSlider({
		mode: 'fade',
		auto: true,
		speed: 0,
		adaptiveHeight: true,
		touchEnabled: false,
		tickerHover: true,
		nextText: '<i class="icon-right-open"></i>',
		prevText: '<i class="icon-left-open"></i>',
		pagerCustom: '#rnd .pager:eq(0)',
		onSlideBefore: function($slideElement, oldIndex, newIndex) {
			$('#rnd .pager .bar').css({
				top: newIndex * 35 + newIndex * 10
			});
		}
	});
	
	// 뉴스 더보기 버튼
	$(document).on('click', '#news .btn-more', function() {
		$('#news ul li').filter(':hidden').attr('style', 'display: block !important');
		$(this).attr('style', 'display: none !important');
	});
	
})(jQuery);