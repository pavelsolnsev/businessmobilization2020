$(function () {
	var url = window.location.pathname.replace(/(^\/+|\/+$)/mg, '');
	var n = url.indexOf('?');
	var prices = $('.popup-price');
	if (n != -1) {
		url = url.substring(0, url.indexOf('?'));
	}
	url = url.split("/");
	for (let i = 0; i < url.length; i++) {
		if (url[i] == 'test') {
			// $('[js-payment]').removeAttr('data-fancybox');
			let inputMasks = function() {
				$('[name="phone"]:not([data-inputmasks-inited]), [type="tel"]:not([data-inputmasks-inited])').each(function() {
					if (navigator.userAgent.match(/Android/i)) {
						$(this).attr('type', 'text');
					}
					$(this).inputmask({
						alias: 'phone',
						url: 'https://syn.su/js/phone-codes.json' /* Параметр url для лендов, на которых подключена старая версия inputmask */
					}).attr('data-inputmasks-inited', '');
					$('body').on('keydown', '[name="phone"]', function(e){
						if ($(this).inputmask("isComplete") && $(this).val().substr(0, $(this).val().length - 1) != '+971-'){
							return false;
						}
					});
				});
			};
			$.getScript("https://syn.su/js/lander.js")
			.done(function(script, textStatus) {
				let timerId = setInterval(function () {
					if ($('script[src="https://syn.su/js/phone-addon.js"]').length > 0) {
						clearInterval(timerId);
						let priceForm = $('.popup-price .form');
						let priceFormHtml = priceForm.html();
						$('[data-fancybox]').fancybox({
							afterClose: function () {
								if (priceFormHtml) {
									priceForm.html(priceFormHtml);
								}
							}
						});
						$('body').on('click', '[js-payment]', function(e) {
							if (priceFormHtml) {
								priceForm.html(priceFormHtml);
							}
							inputMasks();
							let productName = $(this).find('.price-card__header-name').text();
							let productCost = $(this).find('.price-card__header-cost').text();
							let productDataId = $(this).data('productid');
							$('.popup-price [js-package]').text(productName);
							$('.popup-price [js-cost]').text(productCost);
							$('.popup-price .form input[name="product_id"]').val(productDataId);
							e.preventDefault();
							if (localStorage.name != "" && localStorage.name !== undefined && localStorage.phone != "" && localStorage.phone !== undefined && localStorage.email != "" && localStorage.email !== undefined && /^[А-Яа-яЁёA-Za-z\s]{2,100}$/.test(localStorage.name) == true && /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i.test(localStorage.email) == true) {
								$('.popup-price .form input[name="name"]').val(localStorage.name);
								$('.popup-price .form input[name="phone"]').val(localStorage.phone);
								$('.popup-price .form input[name="email"]').val(localStorage.email);
								$('.popup-price .form').submit();
							} else {
								console.log('else');
								$.fancybox.open({
									src  : $(this).attr('href')
								});
							}
						});
					}
				}, 100);
			})
			.fail(function(jqxhr, settings, exception) {
				console.log("loading script failed.");
			});
		}
	}
	if ($('.speakers-card__col').hasClass('speakers-card__col_headliner') && $(window).width() > 992) {
		initLoadMore('.speakers-card__col','6','7');
		initSpeakersFirst(17);
	} else {
		initLoadMore('.speakers-card__col','6','6');
		initSpeakersFirst(16);
	}
	function initLoadMore(block,count,visiblecount){
		var	loadMoreBlocks = $('.speakers-card__col');
		visiblecount = visiblecount;

		if (loadMoreBlocks.length / visiblecount > 1) {
			for (var i = loadMoreBlocks.length - 1; i >= visiblecount; i--) {
				$(loadMoreBlocks[i]).addClass('hidden').fadeOut(0);
			}
			$('.speakers__link-more').addClass('show_btn');
		}
		$('.speakers__link-more').on('click', function(e) {
			loadMoreBlocks = $('.hidden');
			if (loadMoreBlocks.length / count > 1) {
				for (var j = 0; j < count; j++) {
					$(loadMoreBlocks[j]).removeClass('hidden').fadeIn();
				}
			} else {
				for (var j = loadMoreBlocks.length - 1; j >= 0; j--) {
					$(loadMoreBlocks[j]).removeClass('hidden').fadeIn();
				}
				$(this).removeClass('show_btn');
			}
		});
	}
		function initSpeakersFirst(fancyboxCount) {
		const speakers = $('.speakers-card__col');
		$('.speakers-card__col').each(function(i){
			let version = $(this).attr('data-version');
			if ($('body').hasClass(version)) {
				$(this).insertBefore($('.speakers-card__col')[0]);
				i = 0;
			} else {
				i += 1;
			}
			// fancybox для спикеров, подключается только у некоторых (временный код)
			if (i >= fancyboxCount) {
				$('.speakers-card' , this).removeAttr('href');
			} else {
				$('.speakers-card' , this).fancybox();
			}
		});
	}
});