//=require common/toggle-class.js

$(function () {
	/* Inits */
	initScroll();
	initBodyScroll();
	initToggle();
	initTabToggle();
	initCarousel();
	initSwiper();
	initFancybox();
	initQueryClick();
	initGTMajaxSuccess();
	checkSynchroOrder();
	initLogoScroll();
	initShowButton();
	initPrice();


	/* Functions */
	function initScroll() {
		if (!$('.scroll').length) return;

		$(document).on('click init.scroll', '.scroll', function (event) {
			event.preventDefault();
			$.fancybox.close();

			var
			hrefId = $(this).attr('href') || $(this).data('href'),
			header_height = $('.header').css('position') == 'fixed' ? $('.header').height() : 0,
			posTop = $(hrefId).offset().top - header_height + 0.5
			;

			$('html, body').animate({ scrollTop: posTop }, 1000).removeClass('page-menu-opened');
		});

		/*if ( location.hash ) {
			var $temp = $('<a href="' + location.hash + '" class="scroll d-none"/>');
			$('body').append($temp);
			setTimeout(function(){ $temp.trigger('init.scroll'); }, 500);
		}*/
	}


	function initBodyScroll() {
		$(document)
		.on('scroll init.scroll', function (event) {
			var
			scroll_top = $(this).scrollTop(),
			header_height = $('.header').height(),
			$mobile_form_1 = $('#mobile-form-1'),
			$mobile_form_2 = $('#mobile-form-2'),
			$mobile_form_3 = $('#mobile-form-3'),
			window_height = $(window).height()
			;
			/*$speakers_headliner = $('.speakers-headliner'),
			$main_bottom_form = $('#main-bottom-form'),
			headliner_bottom = $speakers_headliner.length ? $speakers_headliner.height() - (window_height - $speakers_headliner.offset().top) : window_height,
			concept_form_top = $concept_form.length ? $concept_form.offset().top : null,
			bottom_form_top = $main_bottom_form.length ? $main_bottom_form.offset().top : null*/
			$('body').toggleClass(
				'page-scrolled',
				scroll_top > header_height
				);

			if ($mobile_form_1.length) {
				var mobile_form_1_top = $mobile_form_1.offset().top;
				$('body.page-scrolled')
				.toggleClass(
					'page-scrolled_on-mobile-form-1',
					scroll_top > mobile_form_1_top - window_height &&
					scroll_top <
					mobile_form_1_top + $mobile_form_1.height()
					)
				.toggleClass(
					'page-scrolled_before-mobile-form-1',
					scroll_top < mobile_form_1_top - window_height
					)
				.toggleClass(
					'page-scrolled_after-mobile-form-1',
					scroll_top >
					mobile_form_1_top + $mobile_form_1.height()
					);
			}

			if ($mobile_form_2.length) {
				var mobile_form_2_top = $mobile_form_2.offset().top;
				$('body.page-scrolled')
				.toggleClass(
					'page-scrolled_on-mobile-form-2',
					scroll_top > mobile_form_2_top - window_height &&
					scroll_top <
					mobile_form_2_top + $mobile_form_2.height()
					)
				.toggleClass(
					'page-scrolled_before-mobile-form-2',
					scroll_top < mobile_form_2_top - window_height
					)
				.toggleClass(
					'page-scrolled_after-mobile-form-2',
					scroll_top >
					mobile_form_2_top + $mobile_form_2.height()
					);
			}

			if ($mobile_form_3.length) {
				var mobile_form_3_top = $mobile_form_3.offset().top;
				$('body.page-scrolled')
				.toggleClass(
					'page-scrolled_on-mobile-form-3',
					scroll_top > mobile_form_3_top - window_height &&
					scroll_top <
					mobile_form_3_top + $mobile_form_3.height()
					)
				.toggleClass(
					'page-scrolled_before-mobile-form-3',
					scroll_top < mobile_form_3_top - window_height
					)
				.toggleClass(
					'page-scrolled_after-mobile-form-3',
					scroll_top >
					mobile_form_3_top + $mobile_form_3.height()
					);
			}

			/*if ( $main_bottom_form.length ) {
			$('body.page-scrolled')
			.toggleClass( 'page-scrolled_on-bottom-form', scroll_top > bottom_form_top - window_height && scroll_top < bottom_form_top + $main_bottom_form.height() )
			;
		}*/
	})
		.trigger('init.scroll');
	}


	function initToggle() {
		if (!$('.toggle').length) return;

		$('.toggle').on('click', function (event) {
			event.preventDefault();
			var obj = $(this).attr('href') || $(this).data('href');
			$(obj).add(this).toggleClass('toggled');
			$.fancybox.update();
		});
	}


	function initFancybox() {
// инициализация такого вида ломает загрузку виджета клауда на ios, android
//		$('[data-fancybox').fancybox({
//			touch: false,
//			lang: 'ru',
//			i18n: {
//				ru: {
//					CLOSE: 'Закрыть',
//				},
//			},
//		});
	}


	function initCarousel() {
		$(document).on('init.carousel', '.carousel', function() {

			var
			$carousel = $(this),
			defaults = {
				slidesPerView: 1,
				spaceBetween: 0,
				breakpoints: {
					991: {
						slidesPerView: 1
					},
					500: {
						slidesPerView: 1
					}
				},
				pagination: {
					el: '.swiper-pagination',
					clickable: true
				},
				navigation: {
					nextEl: '.swiper-next',
					prevEl: '.swiper-prev'
				}
			},
			options = {}
			;

			if ( $carousel.hasClass('swiper-container-initialized') ) return;

			$('> *', $carousel).wrap('<div class="swiper-slide"/>');
			$carousel
			.addClass('swiper-container')
			.wrapInner('<div class="swiper-wrapper"/>')
			.append('<div class="swiper-nav"><div class="swiper-prev"><img src="/img/partners/arrow-left.svg" class="lazy" alt=""></div><div class="swiper-pagination"></div><div class="swiper-next"><img src="/img/partners/arrow-right.svg" class="lazy" alt=""></div></div>')
			;

			if ( $carousel.data('swiper-options') ) {
				options = eval('[' + $carousel.data('swiper-options') + ']')[0];
				$.extend(defaults, options);
			}

			var carousel = new Swiper($carousel.get(0), defaults);
		});

		$('.carousel').trigger('init.carousel');
	}


	function initSwiper() {
		/* Для IE */
		if (navigator.userAgent.match(/msie/i) || navigator.userAgent.match(/trident/i)) {
			$('.partners-card img').addClass('slider-img');
			$('.swiper-wrapper').removeClass('partners__carousel-wrapper');
			$('.partners-card').addClass('slider-ie');
			var mySwiper = new Swiper('.swiper-container', {
				spaceBetween: 10,
				slidesPerView: 4,
				slidesPerGroup: 4,
				pagination: {
					el: '.swiper-pagination',
					clickable: true
				},
				navigation: {
					nextEl: '.swiper-next',
					prevEl: '.swiper-prev'
				}
			});
		} else {

			var partners_carousel = new Swiper('.partners__carousel', {
				slidesPerView: 2,
				slidesPerColumn: 3,
				slidesPerGroup: 2,
				spaceBetween: 10,
				breakpoints: {
					500: {
						slidesPerView: 3,
						slidesPerGroup: 3,
						spaceBetween: 20
					},
					991: {
						slidesPerView: 4,
						slidesPerGroup: 4
					}
				},
				pagination: {
					el: '.swiper-pagination',
					clickable: true
				},
				navigation: {
					nextEl: '.swiper-next',
					prevEl: '.swiper-prev'
				}
			});

			var worldclass_slider = new Swiper('.worldclass__photo-list__mobile', {
				loop: true,
				slidesPerView: 1.5,
				centeredSlides: true,
				spaceBetween: 30,
				autoplay: {
					delay: 3000
				}
			});

			var reviews_slider = new Swiper('.reviews__slider', {
				spaceBetween: 20,
				slidesPerView: 'auto',
				loop: true,
				centeredSlides: true,
				breakpoints: {
					576: {
						centeredSlides: false
					}
				},
				pagination: {
					el: '.swiper-pagination',
					clickable: true
				},
				navigation: {
					nextEl: '.swiper-next',
					prevEl: '.swiper-prev'
				}
			});

			var press_slider = new Swiper('.press__slider', {
				spaceBetween: 30,
				slidesPerView: 'auto',
				centeredSlides: true,
				loop: true,
				pagination: {
					el: '.swiper-pagination',
					clickable: true
				},
				navigation: {
					nextEl: '.swiper-next',
					prevEl: '.swiper-prev'
				}
			});

			var services_carousel = new Swiper ('.services__carousel', {
				slidesPerView: 3,
				slidesPerColumn: 2,
				slidesPerGroup: 3,
				spaceBetween: 30,
				breakpoints : {
					0: {
						slidesPerView: 2,
						slidesPerColumn: 3,
						slidesPerGroup: 2,
						spaceBetween: 20,
					},
					767:{
						slidesPerView: 3,
						slidesPerColumn: 2,
						slidesPerGroup: 3,
						spaceBetween: 30,
					}
				},
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				navigation: {
					nextEl: '.swiper-next',
					prevEl: '.swiper-prev',
				}
			});

		}
	}


	function initQueryClick() {
		var query_string = location.search;
		if (query_string.indexOf('click') == -1) return;

		query_string = decodeURIComponent(query_string);
		var query_click = query_string.match(/click=\{(.+)\}/i);
		if (!query_click) return;

		query_click = query_click[1];
		query_click = decodeURIComponent(query_click);

		if (query_click && $(query_click).first().length) {
			$(query_click).first().trigger('click');
		}
	}


	function initGTMajaxSuccess() {
		$(document).ajaxSuccess(function (event, request, settings) {
			if (typeof dataLayer == 'undefined') return;
			dataLayer.push({
				event: 'gtm.formSubmit',
				ajaxSuccessData: {
					url: settings.url || '',
					data: settings.data || '',
					responseText: request.responseText || '',
				},
			});
		});
	}


	function checkOrderExist() {
		var checker = true;

		$('.message').each(function () {
			if ($(this).attr('data-pass') == '0') {
				checker = false;
			}
		});

		console.log(checker);

		if (checker) {
			$('.message')
			.parents('form')
			.find('button[type=submit]')
			.removeAttr('disabled');
		}
	}


	function checkSynchroOrder() {
		$('.jq-form-synhro')
		.find('button[type=submit]')
		.attr('disabled', 'disabled');

		$(document).on('input', '.jq-checkOrder', function (e) {
			this.value = this.value.replace(/[^0-9]/g, '');
		});

		$(document).on('keyup', '.jq-checkOrder', function () {
			var currentInput = $(this);

			var requestData = {
				method: 'isOrderOrTicket',
				id: $(this).val(),
			};

			$.ajax({
				url: 'https://api.1001tickets.org/events/116',
				data: $.param(requestData),
				type: 'POST',
				contentType: 'application/x-www-form-urlencoded',
				success: function (response) {
					if (response.response.volume != 0) {
						currentInput.siblings('.message').text('Заказ найден');
						currentInput
						.siblings('.message')
						.attr('data-pass', '1');
					} else {
						currentInput
						.siblings('.message')
						.text('Заказа не существует');
						currentInput
						.siblings('.message')
						.attr('data-pass', '0');

						currentInput
						.parents('form')
						.find('button[type=submit]')
						.attr('disabled', 'disabled');
					}

					checkOrderExist();
				},
				error: function (err, errtxt) {
					if (typeof err == 'object') {
						err = JSON.stringify(err);
					}
				},
			});
		});
	}


	/* Прокрутка к началу экрана при клике на логотип */
	function initLogoScroll() {
		$('.header__logo').click(function () {
			$('html, body').animate({ scrollTop: 0 }, 'slow');
		});
	}


	function initShowButton() {
		$('.worldclass__schedule-list').hide();
		$('.worldclass__button').click(function () {
			$('.worldclass__schedule-list').animate(
				{ height: 'toggle' },
				'slow',
				function () {
					if (
						$('.worldclass__button').text() ==
						'Показать программу тренировок'
						) {
						$('.worldclass__button').text('Свернуть программу');
				} else {
					$('.worldclass__button').text(
						'Показать программу тренировок'
						);
				}
			}
			);
		});
	}

	/* Инициализация таб переключателя */
	function initTabToggle() {
		$(".faq__item-bottom").hide();
		$(".faq__item").click(function(){
			$(this).siblings('.faq__item').find('.faq__item-bottom').slideUp("slow");
			$(this).siblings('.faq__item').removeClass('active');
			$(this).find('.faq__item-bottom').slideToggle(300);
			$(this).toggleClass('active');
			return false;
		});
	}


	function initPrice(){
		if ($(window).width() < 768 && !$('.price-only-open').length) {
			$('.price-card').removeAttr('js-payment');

			let
			$container = $('#tariff').length ? $('#tariff') : $('#payment-wrapper').length ? $('#payment-wrapper') : $('.price__wrap'),
			offset = $container.offset().top + $container.height()
			;

			$(window).scroll(function () {
				var scroll = $(window).scrollTop();
				if (scroll > offset) {
					$('.payment-button').addClass('visible');
				} else {
					$('.payment-button').removeClass('visible');
				}
			});
		}

		$('.price-card')
		.on('click', function (event) {
			event.preventDefault();

			var $card = $(this);

			if (typeof $card.attr('js-payment') === 'undefined') {
				$('.price-card')
				.removeClass('price-card--opened')
				.removeAttr('js-payment')
				.removeAttr('data-fancybox');

				var posTop = $card.offset().top - $('.header').height() - 10;
				$('html, body').animate({ scrollTop: posTop }, 500);

				setTimeout(function () {
					$card
					.attr('js-payment', '')
					.addClass('price-card--opened')
					;
				}, 500);

				/*event.stopPropagation();*/
			}
		})
		;

		/* Раскрываем или закрываем price-card по кнопке seemore */
 		$(document)
		.on('click', '.price-card__seemore', function(e) {
			if ( $('#tariff').length ) return;

			$(this).closest(".price-card").toggleClass('price-card--opened');
			e.stopPropagation();
		});

		if ( $('#popup-price').length ) {
			/*$('[js-payment]').removeAttr('data-fancybox');*/
			let inputMasks = function () {
				$('[name="phone"]:not([data-inputmasks-inited]), [type="tel"]:not([data-inputmasks-inited])', '#popup-price').each(function () {
					if (navigator.userAgent.match(/Android/i)) {
						$(this).attr('type', 'text');
					}
					$(this)
					.inputmask({
						alias: 'phone',
						url:
						'https://syn.su/js/phone-codes.json' /* Параметр url для лендов, на которых подключена старая версия inputmask */,
					})
					.attr('data-inputmasks-inited', '');
					$('body').on('keydown', '[name="phone"]', function (e) {
						if (
							$(this).inputmask('isComplete') &&
							$(this)
							.val()
							.substr(0, $(this).val().length - 1) != '+971-'
							) {
							return false;
					}
				});
				});
			};

			if ($('.popup-price input[name="name"]').val()) {
				localStorage.setItem(
					'name',
					$('.popup-price input[name="name"]').val()
					);
			}
			if ($('.popup-price input[name="phone"]').val()) {
				localStorage.setItem(
					'phone',
					$('.popup-price input[name="phone"]').val()
					);
			}
			if ($('.popup-price input[name="email"]').val()) {
				localStorage.setItem(
					'email',
					$('.popup-price input[name="email"]').val()
					);
			}


			let timerId = setInterval(function () {
				if ( $('script[src*="phone-addon.js"],script[src*="phone.js"]').length > 0 ) {
					clearInterval(timerId);
					if ( sessionStorage.getItem('mergelead') != '' && sessionStorage.getItem('mergelead') != undefined ) {
						$( '.popup-price .form .form__wrapper').append('<input type="hidden" name="mergelead" value="' + sessionStorage.getItem('mergelead') + '">' );
					}
					let priceForm = $('.popup-price .form');
					let priceFormHtml = priceForm.html();
					priceFormHtml = priceFormHtml.replace('data-inputmasks-inited', '');

					$('[data-fancybox]').fancybox({
						afterClose: function () {
							if (priceFormHtml) {
								priceForm.html(priceFormHtml);
							}
						},
					});

					$(document)
					.on('click', '[js-payment]', function (e) {
						if (priceFormHtml) {
							priceForm.html(priceFormHtml);
						}

						inputMasks();

						let
						$card = $(this),
						$popup = $('.popup-price'),
						productName = $('.price-card__header-name', $card).text() || '',
						productCost = ( $('#tariff').length ? $('.price-card__cost', $card).html() :  ($('.price-card__header-cost').length ? $('.price-card__header-cost', $card).html() : ($('.price-card__cost').length ? $('.price-card__cost', $card).html() : '' ))),
						productCostNum = productCost.replace(/\D/g, ''),
						productDataId = $card.data('productid') || '',
						is_recurrent = $card.data('is-recurrent') || '',
						quote_id = $card.data('quote_id') || '',
						partner = $card.data('partner') || '',
						popup_text = $('[data-popup-text]', $card).html() || '',
						popup_title = $('[data-popup-title]', $card).html() || '',
						options = $('[data-options]', $card).html() || '',
						package = $card.data('package') || '',
						unit = $card.data('unit') || '',
						type = $card.data('type') || '',
						land = $card.data('land') || '',
						event_id = $card.data('event-id') || '',
						form_type = $card.data('form-type') || ''
						;

						$popup.toggleClass('popup-price_no-cost', productCostNum == '' || productCostNum == 1);
						console.log($('.price-card__cost', $card));
						$popup.attr('data-package', package);
						$('[js-package]', $popup).text(productName);
						$('[js-cost]', $popup).html(productCost);
						$('[js-text]', $popup).html(popup_text);
						$('[js-options]', $popup).html(options);
						if ( popup_title ) { $('.form__title', $popup).html(popup_title); }
						$('[name="product_id"]', $popup).val(productDataId);
						$('[name="quote_id"]', $popup).val(quote_id);
						if ( partner ) { $('[name="partner"]', $popup).val(partner); }
						if ( unit ) { $('[name="unit"]', $popup).val(unit); }
						if ( type ) { $('[name="type"]', $popup).val(type); }
						if ( land ) { $('[name="land"]', $popup).val(land); }
						if ( event_id ) { $('[name="event_id"]', $popup).val(event_id); }
						if ( form_type ) { $('[name="form"]', $popup).val(form_type); }

						if (!is_recurrent) { $('.checkcontainer_is-recurrent', priceForm).remove(); }

						e.preventDefault();

						if (
							localStorage.name != '' &&
							localStorage.name !== undefined &&
							localStorage.phone != '' &&
							localStorage.phone !== undefined &&
							localStorage.email != '' &&
							localStorage.email !== undefined &&
							/^[А-Яа-яЁёA-Za-z\s]{2,100}$/.test(
								localStorage.name
								) == true &&
							/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i.test(
								localStorage.email
								) == true &&
								productDataId != 65589763 && 
								productDataId != 68969320 &&
								productDataId != 67421737 &&
								productDataId != 68969323 &&
								productDataId != 68969326
							) {
						$('.popup-price .form input[name="name"]').val(localStorage.name);
						$('.popup-price .form input[name="phone"]').val(localStorage.phone);
						$('.popup-price .form input[name="email"]').val(localStorage.email);
						$('.popup-price .form').submit();
					} else {
						$.fancybox.open({
							src: $(this).attr('href'),
						});
					}
				})
					.on('click', '.price-card label', function (event) {
						event.stopPropagation();
						let
						$checkbox = $('[name="isRecurrent"]', this),
						$checkbox_popup = $('.popup-price [name="isRecurrent"]'),
						checked = $checkbox.prop('checked')
						;

						checked = !checked;

						if (checked) { $checkbox.add($checkbox_popup).attr('checked', ''); }
						else { $checkbox.add($checkbox_popup).removeAttr('checked'); }
						priceFormHtml = priceForm.html();
						priceFormHtml = priceFormHtml.replace('data-inputmasks-inited', '');
					})
				}
			}, 100);

		}
	}


});
