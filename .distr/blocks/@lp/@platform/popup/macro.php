{% import 'form/macro.php' as form %}


{% macro registration(id) %}
<div class="popup-registration popup" id="{{ id }}">
	<div class="popup__title condensed"><?= $version_form_title ?></div>
	<?php if ($version == 'blogger') { ?>
		{{ form.form( id, form_class='form_vertical', title='', add_fields=[{name: 'promocode', placeholder: 'Промокод', required: 'required',value: '<?=$promocode?>'}] ) }}
	<?php } else { ?>
		{{ form.form( id, form_class='form_vertical', title='' ) }}
	<?php } ?>

</div><!-- popup-registration -->
{% endmacro %}


{% macro partners() %}
<div class="popup-partners popup" id="popup-partners">
	<div class="popup__title condensed"><?= _('partners__button-partner') ?></div>
	{{ form.form( 'popup-partner', form_class='form_vertical', title='' ) }}
</div><!-- popup-partners -->
{% endmacro %}


{% macro accreditation() %}
<div class="popup-accreditation" id="popup-accreditation">
	<div class="popup-accreditation__header popup-accreditation__inner condensed"><?= _('popup-accreditation__header') ?></div>
	<div class="popup-accreditation__body popup-accreditation__inner">
		<?php if ( _('popup-accreditation__subtitle-1') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-1') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__subtitle-2') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-2') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-2') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-2') ?></div>
			<br>
		<?php } ?>
		<div class="popup-accreditation__text"><?= _('popup-accreditation__text-3') ?></div>
		<div class="popup-accreditation__rules"><a class="popup-accreditation__rules-link" href="files/media_draft_citation_rules_<?= $lang ?>.pdf" target="_blank" data-fancybox><?= _('popup-accreditation__rules') ?></a></div>
	</div><!-- popup-accreditation__inner -->
</div><!-- popup-accreditation -->
{% endmacro %}


{% macro franchise() %}
<div class="popup-franchise popup" id="popup-franchise">
	<div class="popup__title condensed"><?= _('popup-franchise__title') ?></div>
	<?php if ($version == 'blogger') { ?>
		{{ form.form( 'franchise', form_class='form_vertical', title='', add_fields=[{name: 'promocode', placeholder: 'Промокод', required: 'required'}] ) }}
	<?php } else { ?>
		{{ form.form( 'franchise', form_class='form_vertical', title='' ) }}
	<?php } ?>
</div><!-- popup-franchise -->
{% endmacro %}
