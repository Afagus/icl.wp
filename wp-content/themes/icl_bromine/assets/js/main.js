(function($) {

	$(document).ready(function() {

		if (window.matchMedia("(min-width: 980px)").matches){

			$('.product-page-concentration').attr('id', 'stop-slider');
			$('.mob-slider').addClass('product-slider').removeClass('mob-slider');


		} else if (window.matchMedia("(max-width: 979px)").matches){

			$('.product-page-concentration').removeAttr('id');
			$('.product-slider').addClass('mob-slider').removeClass('product-slider');

		}


        // sliders
		$('.slider').bxSlider({
			auto: true,
			controls: false,
		});

		$('.product-slider').bxSlider({
			auto: false,
			controls: false,
			pager: true,
			speed: 1000,
			mode: 'fade'
		});

		$('.mob-slider').bxSlider({
			auto: true,
			controls: false,
			pager: true,
			speed: 1000,
			mode: 'fade'
		});
        // end sliders

		$('.resource-btn').click(function() {
			$(this).parent().find('.resource-pop-up').fadeIn(400);
			$(this).parent().find('.close-video-btn').css('display', 'block');
		});
        // hamburger

		$(".hamburger").click(function(){
			$(this).toggleClass("is-active");
			$('.top-nav').toggle(400);
			$('header').toggleClass('black');
		});

		// end hamburger

		$('.scroll-down-btn').click(function(){

			$("html, body").animate({scrollTop: $('.main-page-blue').offset().top }, 1200);

		});

		// case-study-btn
		$('.tab-item').mouseover(function(){

			$(this).addClass('tab-item-hover');

		});

		$('.tab-item').mouseout(function() {

			$(this).removeClass('tab-item-hover');

		});

		//end-case-study-btn

        // resource center

		$('.download-link').click(function() {
			$(this).closest('.article-content').find('.resource-pop-up').css('display', 'block');
			$(this).closest('.article-content').find('video')[0].play();
		});

		$('.resource-close-video-btn').click(function() {
			$(this).closest('.resource-pop-up').css('display', 'none');
			$(this).closest('.article-content').find('video')[0].pause();
		});

		$('.resource-pop-up').mouseup(function(e) {

			var $clickField = $('.resource-pop-up');

			if(e.target.id != $(this).attr('id') && !$(this).has(e.target).length){

				$(this).find('video')[0].pause();
				$(this).css('display', 'none');

			}

		});



        // video-home-page
		$('.play-btn').click(function() {
			$('body').css('overflowY', 'hidden');
			$('header').fadeOut(1);
			$(this).parent().find('.pop-up-video')[0].play();
			$('.pop-up-video-wrapper').css('display', 'block');
		});

		$('.close-video-btn').click(function () {
			$(this).parent().find('.pop-up-video')[0].pause();
			$('body').css('overflowY', 'auto');
			$('header').fadeIn(1);
			$(this).parent().css('display', 'none');
		});

        // close by outside click

		$('.pop-up-video-wrapper').mouseup(function(e) {

			var $clickField = $('.pop-up-video-wrapper');

			if(e.target.id != $(this).attr('id') && !$(this).has(e.target).length){

				$(this).find('.pop-up-video')[0].pause();
				$('body').css('overflowY', 'auto');
				$('header').fadeIn(1);
				$(this).css('display', 'none');

			}

		});

		// end close by outside click





		// end-video-home-page

		$('.case-study-item').mouseover(function() {
				$(this).addClass('case-study-hover');
		});

		$('.case-study-item').mouseout(function() {
				$(this).removeClass('case-study-hover');
		});

		$('.case-study-item').click(function(){

			var indexValue = $(this).index();

			$(".pop-up-window").eq(indexValue).css('display', 'block');

			$(".pop-up-window").eq(indexValue).find('.case-study-slider').bxSlider({
				auto: true,
				controls: false,
				pager: true
			});

		});

		$('.close-pop-up').click(function() {

			$(".pop-up-window").css('display', 'none');

		});

        // case study pop-up windpows next

		$('.case-next').click(function(){

			var popWindow = $(this).closest('.pop-up-window');

			var popWindowValue = popWindow.index();

			var nextPopWindow = $('.pop-up-window').eq(popWindowValue + 1);

			var lastPopWindow = $('.pop-up-window:last').index();

			popWindow.css('display', 'none');

			nextPopWindow.css('display', 'block').find('.case-study-slider').bxSlider({
				auto: true,
				controls: false,
				pager: true
			});

			if( nextPopWindow.index() == lastPopWindow ){

				$('.pop-up-window').eq(lastPopWindow).find('.case-next').css('display', 'none');

			} else {
				$('.pop-up-window').eq(lastPopWindow).find('.case-next').css('display', 'block');
			}

		});

		$('.case-prev').click(function(){

			var popWindow = $(this).closest('.pop-up-window');

			var popWindowValue = popWindow.index();

			var prevPopWindow = $('.pop-up-window').eq(popWindowValue - 1);

			var firstPopWindow = $('.pop-up-window:first').index();

			popWindow.css('display', 'none');

			prevPopWindow.css('display', 'block').find('.case-study-slider').bxSlider({
				auto: true,
				controls: false,
				pager: true
			});

			if( prevPopWindow.index() == firstPopWindow ){

				$('.pop-up-window').eq(prevPopWindow).find('.case-prev').css('display', 'none');

			} else {
				$('.pop-up-window').eq(prevPopWindow).find('.case-prev').css('display', 'block');
			}

		});

        // end pop-up

        // top-video-underlay

		var	underlayVideo = document.querySelector('.underlay-video');

		var topBlock = document.querySelector('.main-page-top-section');

		var topBlockHeigth = topBlock.offsetHeight;

		if(window.matchMedia('(max-width: 1366px)').matches){
			$('.underlay-video').css({
				'height': topBlockHeigth
			});
		} else if (window.matchMedia('(min-width: 1367px)').matches){
			$('.underlay-video').css({
				'min-height': '100%',
				'height': 'auto'
			});
		}
        // end-top-video-underlay
	});



	$(window).resize(function() {
		if (window.matchMedia("(min-width: 980px)").matches){

			$('.product-page-concentration').attr('id', 'stop-slider');
			$('.mob-slider').addClass('product-slider').removeClass('mob-slider');

		} else if (window.matchMedia("(max-width: 979px)").matches){

			$('.product-page-concentration').removeAttr('id');
			$('.product-slider').addClass('mob-slider').removeClass('product-slider');
		}
	});

	$(window).resize(function() {

		var	underlayVideo = document.querySelector('.underlay-video');

		var topBlock = document.querySelector('.main-page-top-section');

		var topBlockHeigth = topBlock.offsetHeight;

		if(window.matchMedia('(max-width: 1366px)').matches){
			$('.underlay-video').css({
				'min-height': topBlockHeigth,
				'top': '0',
			});
		} else if (window.matchMedia('(min-width: 1367px)').matches){
			$('.underlay-video').css({
				'min-height': '100%',
				'height': 'auto'
			});
		}
	});

	$(window).scroll(function() {
		// header
		if ($(window).scrollTop() >= 71) {

			$('header').addClass("fixed").fadeIn(1500);

		} else {

			$('header').removeClass("fixed");

		}

        // parallax
		var st = $(this).scrollTop();

		$('.parallax').css({
			'transform' : 'translate(0%, ' + st/4+ '%'
		});

        // stop-slider
		if($('.product-page-concentration').attr('id') == "stop-slider"){

			var stopSlider = document.getElementById('stop-slider');

			var stopSliderHeight = stopSlider.offsetHeight;

			var viewportHeight = document.documentElement.clientHeight;

			var offsetTop = stopSlider.getBoundingClientRect().top;

			var firstSlide = document.querySelector('.product-slide:first-child');

			var lastSlide = document.querySelector('.product-slide:last-child');

			var lastSlideDisplay = lastSlide.style.display;

			// if( viewportHeight >= (stopSliderHeight + offsetTop*2) && lastSlideDisplay == "none" )

			if( viewportHeight >= (stopSliderHeight + offsetTop*2) && lastSlideDisplay == "none" && offsetTop >=0){

				var scrollFunc = function (e) {

					if (e.deltaY >= 3 && !$('.product-slider.waiting').length  ) {

						$('.product-slider').addClass('waiting');

						$('.current').addClass('prev').removeClass('current').next().addClass('current');

						setTimeout(function(){

							$('.product-slider').removeClass('waiting');

						}, 1000);

						if(	$('.product-slide:last').hasClass("current")){

							if (e.deltaY >= 3){

								setTimeout(function(){

									$('.product-slide:last').removeAttr('style').removeClass('current').removeClass('prev');

									$('body').css('overflow', 'auto');

								}, 1000);

							} else {

							}
						}
					}
				};

				// stopSlider.scrollIntoView(false);

				$('body').css('overflow', 'hidden');

				window.addEventListener("wheel", scrollFunc);

			} else {

			}
		}
	});
    // end-header

})(jQuery);
