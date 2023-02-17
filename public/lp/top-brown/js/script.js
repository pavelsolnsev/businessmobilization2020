$(function () {
	/* Inits */
	initTabs();
	initBodyScroll();
	initSwiperPlatform();



	function initBodyScroll() {
		$(document)
		.on('scroll init.scroll', function () {
			var
			scroll_top = $(this).scrollTop(),
			header_height = $('.header').height(),
			$registration_1 = $('#registration-1'),
			$registration_2 = $('#registration-2'),
			window_height = $(window).height()
			;

			if ($registration_1.length) {
				var registration_1_top = $registration_1.offset().top;

				$('body.page-scrolled')
				.toggleClass('page-scrolled_on-mobile-form-1', scroll_top > registration_1_top - window_height && scroll_top < registration_1_top + $registration_1.height() )
				.toggleClass('page-scrolled_before-mobile-form-1', scroll_top < registration_1_top - window_height )
				.toggleClass('page-scrolled_after-mobile-form-1', scroll_top > registration_1_top + $registration_1.height() )
				;
			}

			if ($registration_2.length) {
				var registration_2_top = $registration_2.offset().top;
				$('body.page-scrolled')
				.toggleClass('page-scrolled_on-mobile-form-2', scroll_top > registration_2_top - window_height && scroll_top < registration_2_top + $registration_2.height() )
				.toggleClass('page-scrolled_before-mobile-form-2', scroll_top < registration_2_top - window_height )
				.toggleClass('page-scrolled_after-mobile-form-2', scroll_top > registration_2_top + $registration_2.height() )
				;
			}

		})
		.trigger('init.scroll');
	}


	function initSwiperPlatform() {
		const platformSwiperOpts = {
			slidesPerView: 1,
			spaceBetween: 15,
			grabCursor: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			}
		}

		let platformSwiper = null;

		togglePlatformSwiper();
		window.addEventListener('resize', togglePlatformSwiper);
		window.addEventListener('orientationchange', togglePlatformSwiper);

		function togglePlatformSwiper() {
			if (window.matchMedia("(min-width: 577px)").matches && platformSwiper !== null) {
				platformSwiper.destroy();
				platformSwiper = null;
			} else if (window.matchMedia("(max-width: 576px)").matches && platformSwiper === null) {
				platformSwiper = new Swiper('.platform-container', platformSwiperOpts);
			}
		}
	}


	function initTabs() {
		const tabsContent = $('.tabs-content'),
					tabBtn      = $('.tab-btn');

		let index = 0;

		tabBtn.on('click', function(event) {
			var thisBtnData = $(this).data('author');

			console.log(thisBtnData);

			tabsContent.removeClass('active');
			tabsContent.each(function(index, el) {
				if (thisBtnData === $(el).data('author')) {
					$(this).addClass('active');
				}
			});
		});
	}
});
