{% macro form(form_id, grtagadd='', form_class='form_inline', form_grtag='<?= $grtag ?>', form_land='<?= $land ?>', title_class, adizes=false, addSynchroToTicket=false, synchroPopup=false, button_class='button_red', title='<?= $version_form_title ?>', button='<?= $version_form_button ?>', form_text, add_fields, exclude_fields, form_contacts, synergy_base=false, quote_id, link) %}

<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $version_popup_tickets_form;
?>

<form class="form {{ form_class | safe }}" action="<?= $action ?>&amp;land={{ form_land | safe }}&amp;grtag={{ form_grtag | safe }}{{ grtagadd | safe }}&amp;form={{ form_id | safe }}<?= $blackFriday ? '&amp;black_friday=black_friday' : '' ?>">

	{% if title.length %}
	<div class="form__title {{ title_class }}">{{ title | safe }}</div>
	{% endif %}

	{% if form_text.length %}
	<div class="form__text">{{ form_text | safe }}</div>
	{% endif %}

	<div class="form__items">
		{% if not exclude_fields.name %}
		{{ form_item( 'name', 'text', '<?= _("form_item_name") ?>', true ) }}
		{% endif %}

		{% if not exclude_fields.phone %}
		{{ form_item( 'phone', 'text', '<?= _("form_item_phone") ?>', true ) }}
		{% endif %}

		{% if not exclude_fields.email %}
		{{ form_item( 'email', 'email', '<?= _("form_item_email") ?>', true ) }}
		{% endif %}

		{% if add_fields.length %}
		{% for item in add_fields %}
		{{ form_item( item.name, item.type, item.placeholder, item.required, item.value, item.options, item.attr ) }}
		{% endfor %}
		{% endif %}

		<div class="form__item form__item_button">
			<button class="form__button button {{ button_class }} condensed" type="submit">{{ button | safe }}</button>
			{% if form_contacts %}<div class="form__contacts">{{ form_contacts | safe }}</div>{% endif %}
		</div><!-- form__item -->
		<?php if ($version == 'blogger') { ?>
			<div class="form__footer">
				<label><div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked><div class="form__footer-checkbox-icon lazy"></div></div> <div class="form__footer-text"><?= _('form__footer-text-1') ?></div></label>
				<label><div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on"><div class="form__footer-checkbox-icon lazy"></div></div> <div class="form__footer-text"><?= _('form__footer-text-2') ?></div></label>
				<label><div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree3" checked value="on"><div class="form__footer-checkbox-icon lazy"></div></div> <div class="form__footer-text"><?= _('form__footer-text-3') ?></div></label>
			</div>
		<?php } else { ?>
			<div class="form__footer">
				<label><div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked><div class="form__footer-checkbox-icon lazy"></div></div> <div class="form__footer-text"><?= _('form__footer-text-1') ?></div></label>
				<label><div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on"><div class="form__footer-checkbox-icon lazy"></div></div> <div class="form__footer-text"><?= _('form__footer-text-2') ?></div></label>
			</div>
		<?php }?>
		{% if quote_id %}
		<input name="quote_id" type="hidden" value="{{ quote_id }}">
		{% endif %}
		{% if link %}
		<input name="link" type="hidden" value="{{ link | safe }}">
		{% endif %}
		<?php if ($version != 'blogger') { ?>
			<?php /* ?>
			<input type="hidden" name="product_id" value='57267888'>
			<input type="hidden" name="form" value="thanksFree">
			<?php */ ?>
		<?php } else {?>
			<label class="checkcontainer checkcontainer_is-recurrent d-none">
				<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked="">
				<span class="checkboxbtn"></span>
				<div class="checkcontainer__text">Согласен <span class="checkcontainer__text-recurrent">на&nbsp;ежемесячный платеж и&nbsp;</span>с&nbsp;условиями <a href="files/reccuring_offerta.pdf" class="footer__link-offer" data-fancybox="">договора оферты</a></div>
			</label>
			<input type="hidden" name="product_id" value='56913349'>
			<input type="hidden" name="form" value="cloudRecurent">
		<?php } ?>
	</div><!-- form__items -->
</form><!-- form -->
{% endmacro %}


{% macro form_item(name, type, placeholder, required, value, options, attr) %}
<div class="form__item form__item_{{ type }} {{ 'd-none' if type == 'hidden' }}" data-name="{{ name }}">
	{% if type == 'textarea' %}

	<textarea name="{{ name }}" placeholder="{{ placeholder | safe }}" class="form__input form__input_textarea" {{ 'required' if required }} {{ attr | safe }}></textarea>

	{% elseif type == 'select' %}

	<select name="{{ name }}" class="form__input" {{ 'required' if required }} {{ attr | safe }}>
		<option value="" disabled selected>{{ placeholder | safe }}</option>
		{% for option in options %}
		<option value="{{ option.value | safe }}">{{ option.text }}</option>
		{% endfor %}
	</select>

	{% else %}

	{% if type == 'number' %}<label class="form__item-label"><span class="form__item-label-text">{{ placeholder | safe }}</span>{% endif %}
		<input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder | striptags | safe }}" value="{{ value | safe }}" class="form__input" {{ 'min=1' if type == 'number' }} {{ 'required' if required }} {{ attr | safe }}>
	{% if type == 'number' %}</label>{% endif %}

	{% endif %}
</div><!-- form__item -->
{% endmacro %}


{% macro form_horizontal(form_id, add_fields) %}
<div class="form-horizontal lazy">
	{{ form( form_id, add_fields=add_fields ) }}
	<div class="form__pocket"></div>
</div><!-- form-horizontal -->

<?php /* ?>
<div class="form-horizontal__button-wrap d-md-none">
	<a href="#popup-registration" class="form-horizontal__button button button_red condensed" data-fancybox><?= $version_form_button ?></a>
</div>
<?php */ ?>
{% endmacro %}
