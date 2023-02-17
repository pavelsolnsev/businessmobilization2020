{% macro block(id) %}
<section class="main {{ id }}" id="{{ id }}" data-fancybox href="#popup-registration">

	<div class="main__info color-red"><?= _('main__norris_date') ?></div>
	<div class="main__info-banner color-red"><?= _('main__norris_banner') ?></div>
	<div class="main__title xcondensed"><?= _('main__norris_name') ?></div>
	<div class="main__subtitle xcondensed"><?= _('main__norris_subtitle') ?></div>
	<div class="main__button button button_red"><?= _('main__norris_button') ?></div>

</section><!-- main -->
{% endmacro %}