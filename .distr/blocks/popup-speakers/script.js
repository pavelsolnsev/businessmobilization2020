$(function () {

	if( !$('[href="#popup-speakers"]').length ) return;

	$('[href="#popup-speakers"]')
	.on('click', function(){
		var
		$card = $(this),
		$popup = $('#popup-speakers'),
		image = $('[data-image]', $card).html() || '',
		logo = $('[data-logo]', $card).html() || '',
		name = $('[data-name]', $card).html() || '',
		note = $('[data-note]', $card).html() || '',
		info = $('[data-info]', $card).html() || '',
		speaker = $card.attr('data-speaker') || ''
		;

		$('div.popup-speakers__image', $popup).html( image );
		$('div.popup-speakers__logo', $popup).html( logo );
		$('div.popup-speakers__name', $popup).html( name );
		$('div.popup-speakers__note', $popup).html( note );
		$('div.popup-speakers__info', $popup).html( info );
		$popup.attr('data-speaker', speaker);
	})
	.on('click', 'a, [data-video]', function(event) {
		event.stopPropagation();
	})
	;

});
