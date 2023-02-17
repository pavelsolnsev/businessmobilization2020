$(function() {
	selectForm();
	$('[js-changeform]').click(function(e){
		e.preventDefault();
		let formId = $(this).attr('href');
		$('form').animate({height: "hide", opacity: "hide"}, "500");
		$(formId).animate({height: "show", opacity: "show"}, "500");
	});
	function selectForm() {
		let currentForm =  location.hash;
		if (currentForm == '#registration' || currentForm == '#recovery') {
			$('form').animate({height: "hide", opacity: "hide"}, "500");
			$(currentForm).animate({height: "show", opacity: "show"}, "500");
		}
	}
});

