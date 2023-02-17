{% macro block(id) %}
<section class="main {{ id }}" id="{{ id }}" data-fancybox href="#popup-registration">

	<div class="main__info color-red"><?= _('main__tracy_date') ?></div>
	<div class="main__title xcondensed"><?= _('main__tracy_name') ?></div>
	<div class="main__subtitle xcondensed"><?= _('main__tracy_subtitle') ?></div>
	<div class="main__button button button_red"><?= _('main__tracy_button') ?></div>

</section><!-- main -->
{% endmacro %}
