{% macro block(id) %}
<section class="main {{ id }}" id="{{ id }}" data-fancybox href="#popup-registration">

	<div class="main__info color-red"><?= _('main__robert_date') ?></div>	
	<div class="main__info-banner color-red"><?= _('main__robert_banner') ?></div>
	<div class="main__title xcondensed"><?= _('main__robert_name') ?></div>
	<div class="main__subtitle xcondensed"><?= _('main__robert_subtitle') ?></div>
	<div class="main__button button button_red"><?= _('main__robert_button') ?></div>

</section><!-- main -->
{% endmacro %}
