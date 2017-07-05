(function($) {
	
	// 스크롤 여부
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 0) {
			$('body').addClass('scrolled');
		} else {
			$('body').removeClass('scrolled');
		}
	});
	
	// 스크롤 스파이 관련
	$(document).on('click', '#quick-nav > ul > li > a', function(e) {
		var $target = $($(this).attr('href'));
		var scrollTop = $target.offset().top - $('#top-nav').height() - $('#header').height();
		if ($(this).parent().index() == 0) {
			scrollTop = 0;
		}
		$('html, body').stop().animate({
			scrollTop: scrollTop
		}, 500, 'swing');
		e.preventDefault();
	});
	
	// 메인 슬라이더 관련
	$('#introduce .slider').bxSlider({
		mode: 'fade',
		auto: true,
		pause: 10000,
		preventDefaultSwipeY: true,
		preventDefaultSwipeX: true,
		touchEnabled: false,
		buildPager: function(slideIndex) {
			return '<span class="sr-only">'+slideIndex+'</span>';
		},
		prevText: '<img src="/assets/images/main/ico_slider_prev.png" alt="이전">',
		nextText: '<img src="/assets/images/main/ico_slider_next.png" alt="다음">',
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
			var introVideo = document.getElementById('intro-video-'+(currentIndex+1));
			if (introVideo) {
				introVideo.addEventListener("loadeddata", function() {
					this.play();
				}, false);
			}
		},
		onSlideBefore: function($slideElement, oldIndex, newIndex) {
			$('#introduce .intro-item.active').removeClass('active');
			var introVideo = document.getElementById('intro-video-'+(oldIndex+1));
			if (introVideo) {
				if (introVideo.readyState === 4) {
					introVideo.pause();
				}
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
			var introVideo = document.getElementById('intro-video-'+(newIndex+1));
			if (introVideo) {
				if (introVideo.readyState === 4) {
					introVideo.play();
				}
			}
		}
	});
	
	// 연구개발 슬라이더 관련
	var rndSlider = $('#rnd .slider').bxSlider({
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
	$(document).on("mouseenter focus", "#rnd .pager, #rnd .bx-controls-direction", function() {
		rndSlider.stopAuto();
	});
	$(document).on("mouseleave blur", "#rnd .pager, #rnd .bx-controls-direction", function() {
		rndSlider.startAuto();
	});
	
	// 뉴스 더보기 버튼
	$(document).on('click', '#news .btn-more', function() {
		$('#news ul li').filter(':hidden').attr('style', 'display: block !important');
		$(this).attr('style', 'display: none !important');
	});
	
})(jQuery);