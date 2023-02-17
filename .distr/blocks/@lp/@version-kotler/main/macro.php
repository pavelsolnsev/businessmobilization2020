{% macro block(id) %}
<section class="main {{ id }}" id="{{ id }}" data-fancybox href="#popup-registration">

	<div class="main__info color-red"><?= _('main__kotler_date') ?></div>	
	<div class="main__info-banner color-red"><?= _('main__kotler_banner') ?></div>
	<div class="main__title xcondensed"><?= _('main__kotler_name') ?></div>
	<div class="main__subtitle xcondensed"><?= _('main__kotler_subtitle') ?></div>
	<div class="main__button button button_red"><?= _('main__kotler_button') ?></div>

</section><!-- main -->
{% endmacro %}
