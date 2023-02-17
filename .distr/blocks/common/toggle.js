$(function () {

	if (!$('[data-toggle-class]').length) return;

	$('[data-toggle-class]').on('click', function(event) {
		event.preventDefault();
		var
		obj = $(this).data('href'),
		obj_class = $(this).attr('data-toggle-class'),
		$obj
		;

		if ( obj.indexOf('$') != -1	 ) {
			$obj = eval(obj); /* Если передан jQuery-объект */
		}
		else {
			$obj = $(obj); /* Если передан jQuery-селектор */
		}

		$obj.toggleClass(obj_class);
		$.fancybox.update();
	});

});
