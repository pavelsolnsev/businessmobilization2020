{% macro block(id) %}
<section class="main {{ id }}" id="{{ id }}" data-fancybox href="#popup-registration">

	<div class="main__info color-red"><?= _('main__besson_date') ?></div>
	<div class="main__title xcondensed"><?= _('main__besson_name') ?></div>
	<div class="main__subtitle xcondensed"><?= _('main__besson_subtitle') ?></div>
	<div class="main__button button button_red"><?= _('main__besson_button') ?></div>

</section><!-- main -->
{% endmacro %}
