
$(function(){
	/* Inits */
	initPopup();
	initToggle();
	initScroll();
	initCarousel();
	initPopupPrice();


	/* Functions */
	function initPopup() {
		if (!$('.fancybox').length) return;

		$(document).on('init', '.fancybox', function() {
			var
			defaults = {
				maxWidth: 960,
				autoResize: true,
				padding: 0,
				helpers: {
					media: {},
					overlay: {
						locked: true
					}
				},
				tpl: {
					closeBtn : '<a title="Закрыть" class="fancybox-item fancybox-close" href="javascript:;"></a>',
					next     : '<a title="Далее" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
					prev     : '<a title="Назад" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
				}
			},
			$el = $(this),
			group = $el.attr('data-fancybox-group'),
			options = eval('[' + $el.data('fancybox-options') + ']')[0]
			;

			if (group) $el = $('[data-fancybox-group="' + group + '"]');

			$.extend(defaults, options);

			$el.fancybox(defaults);
		});

		$('.fancybox').trigger('init');
	}


	function initToggle() {
		if (!$('.toggle').length) return;

		$('.toggle').on('click', function(event){
			event.preventDefault();
			$($(this).toggleClass('open').attr('href')).fadeToggle('slow');
		});
	}


	function initScroll() {
		if (!$('.scroll').length) return;

		$('.scroll').click(function(event){
			event.preventDefault();
			var hrefId = $(this).attr('href');
			var posTop = $(hrefId).offset().top;
			$('html, body').animate({scrollTop: posTop}, 1000);
		});
	}


	function initCarousel() {
		if (!$('.owl-carousel').length) return;

		$(document).on('init', '.owl-carousel', function() {
			var $carousel = $(this),
			defaults = {
				loop: true,
				margin: 30,
				nav: true,
			},
			options = {};
			if ($carousel.data('owl-options')) {
				options = eval('[' + $carousel.data('owl-options') + ']')[0];
				$.extend(defaults, options);
			}

			$carousel.owlCarousel(defaults);
		});

		$('.owl-carousel').trigger('init');
	}


	function initPopupPrice() {

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

				event.stopPropagation();
			}
		})
		.first().addClass('price-card--opened')
		;

		var prices = $('.popup-price');

		let inputMasks = function () {
			$('[name="phone"]:not([data-inputmasks-inited]), [type="tel"]:not([data-inputmasks-inited])', prices).each(function () {
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

		$.getScript('https://syn.su/js/lander.js')
		.done(function (script, textStatus) {
			let timerId = setInterval(function () {
				if (
					$('script[src="https://syn.su/js/phone-addon.js"]')
					.length > 0
					) {
					clearInterval(timerId);
				if (
					sessionStorage.getItem('mergelead') != '' &&
					sessionStorage.getItem('mergelead') != undefined
					) {
					$('.popup-price .form .form__wrapper').append(
						'<input type="hidden" name="mergelead" value="' +
						sessionStorage.getItem('mergelead') +
						'">'
						);
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
				$popup = $('.popup-price'),
				productName = $(this).find('.price-card__header-name').text(),
				productCost = $(this).find('.price-card__header-cost').text(),
				productDataId = $(this).data('productid'),
				is_recurrent = $(this).data('is-recurrent'),
				quote_id = $(this).data('quote_id')
				;

				$popup.toggleClass('popup-price_no-cost', productCost == '');
				$('[js-package]', $popup).text(productName);
				$('[js-cost]', $popup).text(productCost);
				$('[name="product_id"]', $popup).val(productDataId);
				$('[name="quote_id"]', $popup).val(quote_id);

				if (!is_recurrent) { $('.checkcontainer_is-recurrent', priceForm).remove() }

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
						) == true
					) {
					$('.popup-price .form input[name="name"]').val(localStorage.name);
				$('.popup-price .form input[name="phone"]').val(localStorage.phone);
				$('.popup-price .form input[name="email"]').val(localStorage.email);
				$('.popup-price .form').submit();
			} else {
				console.log('else');
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
		})
		.fail(function (jqxhr, settings, exception) {
			console.log('loading script failed.');
		});

	}
	

	if ($(window).width() < 768) {
		$('.price-card:not(:first-child)').removeAttr('js-payment');
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

			event.stopPropagation();
		}
	})
	.first().addClass('price-card--opened')
	;

});



$(window).ready(function(){
	if($(window).width() > 991){
		$('.module__list').trigger('destroy.owl.carousel').removeClass('owl-carousel');
		$('.info__studies').trigger('destroy.owl.carousel').removeClass('owl-carousel');
	}
});
