{% macro block(id) %}
<?php if ($version == 'lp-version-taleb-email'): ?>
<section class="main {{ id }} scroll" id="{{ id }}" href="#price">
<?php else: ?>
<section class="main {{ id }}" id="{{ id }}" data-fancybox href="#popup-registration">
<?php endif; ?>

	<div class="main__info color-red"><?= _('main__taleb_date') ?></div>
	<div class="main__info-banner color-red"><?= _('main__taleb_banner') ?></div>
	<div class="main__title xcondensed"><?= _('main__taleb_name') ?></div>
	<div class="main__subtitle xcondensed"><?= _('main__taleb_subtitle') ?></div>

	<?php if ($version == 'lp-version-taleb-email'): ?>
	<div class="main__button button button_red"><?= _('main__taleb_button_2') ?></div>
	<?php else: ?>
	<div class="main__button button button_red"><?= _('main__taleb_button') ?></div>
	<?php endif; ?>

</section><!-- main -->
{% endmacro %}
