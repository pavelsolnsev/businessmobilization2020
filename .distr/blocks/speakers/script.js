$(function () {
	/* Inits */
	initSpeakersFirst();

	/* Functions */
	/* Для версии спикера - тот который указан в версии, ставится первым */
	function initSpeakersFirst() {
		const
		$speakers = $('.speakers'),
		$speakers_cols = $('.speakers-card__col', $speakers),
		count_headliners = $speakers_cols.filter('.speakers-card__col_headliner').length,
		versions = $('body').attr('class').split(' ').reverse(),
		$params = $('[data-speakers-params]', $speakers)
		;
        
		let
		defaultcount = 9,
		visiblecount = 9,
		params = $params.data('speakers-params') || {}
		;

		if ( params.default ) { defaultcount = params.default; }
		if ( params.visible ) { visiblecount = params.visible; }

        /*if( $(window).width() < 768 ) {
            visiblecount = 6;
            defaultcount = 6;
        }*/

        if( $(window).width() < 768 ) {
            if ( defaultcount % 2 != 0 ) { defaultcount++; }
            if ( visiblecount % 2 != 0 ) { visiblecount++; }
        }

		for (i in versions) {
			$speakers_cols.filter('[data-version="' + versions[i] + '"]')
			.insertBefore($('.speakers-card__col')[0])
			.removeClass('speakers-hidden')
			;
		}

		if (count_headliners > 0) {
			visiblecount = visiblecount + count_headliners;
		}
		initLoadMore(defaultcount, visiblecount);
	}


	/* Button */
	function initLoadMore(count, visiblecount) {
		var
		$loadMoreBlocks = $('.speakers .speakers-card__col'),
		loadMoreBlocks_count = $loadMoreBlocks.length,
		$button = $('.speakers__link-more')
		;

		$('.speakers .speakers-nospeaker').addClass('speakers-hidden');

		if (loadMoreBlocks_count / visiblecount > 1) {
			for (var i = loadMoreBlocks_count - 1; i >= visiblecount; i--) {
				$($loadMoreBlocks[i]).addClass('speakers-hidden');
			}
			updateButton($button, loadMoreBlocks_count - visiblecount);
			$button.addClass('d-flex');
		}

		$button.on('click', function (e) {
			var
			$loadMoreBlocks = $('.speakers-hidden'),
			loadMoreBlocks_count = $loadMoreBlocks.length
			;

			if (loadMoreBlocks_count / count > 1) {
				for (var j = 0; j < count; j++) {
					$($loadMoreBlocks[j]).removeClass('speakers-hidden');
				}
			} else {
				for (var j = loadMoreBlocks_count - 1; j >= 0; j--) {
					$($loadMoreBlocks[j]).removeClass('speakers-hidden');
				}
				$(this).removeClass('d-flex');
				$('.speakers-nospeaker').removeClass('speakers-hidden');
			}

			updateButton($button, $('.speakers-hidden').length - 1);

			$('html, body')
			.animate({ scrollTop: '+=1' }, 0)
			.animate({ scrollTop: '-=1' }, 0);
		});
	}


	function updateButton($button, count) {
		var
		$number = $('[data-more-number]', $button),
		lang = $('html').attr('lang') || 'ru'
		;

		if ( lang == 'ru' ) {
			$number.html( count + '&nbsp;' + getDeclination(count, ['спикера', 'спикера', 'спикеров']) );
		}
		else {
			$number.text( count );
		}
	}


	function getDeclination(number, text) {
		cases = [2, 0, 1, 1, 1, 2];
		return text[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
	}


});

