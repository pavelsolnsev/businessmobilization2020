
{% macro fulltime() %}

{% endmacro %}
{% macro card(item) %}
<div href="#popup-price" data-fancybox class="price-card" id="price-{{ item.id }}" js-payment data-productId="{{ item.product_id | safe }}" data-is-recurrent="{{ item.is_recurrent | safe }}" data-quote_id="{{ item.quote_id | safe }}" data-partner="{{ item.partner | safe }}" data-package="{{ item.id }}" data-unit="{{ item.unit | safe }}" data-type="{{ item.type | safe }}" data-land="{{ item.land | safe }}" data-event-id="{{ item.event_id | safe }}" data-form-type="{{ item.form_type | safe }}">
	<div class="price-card__header">
		<div class="price-card__header-name">{{ item.name | safe }}</div>
		{% if item.price %}
		<div class="price-card__header-cost" data-price="{{ item.price | safe }}">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			{{ item.price | safe }}
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">₽</span>
			<?php } ?>
			{% if item.time %}
			<span class="price-card__header-time">/ {{ item.time | safe }}</span>
			{% endif %}
		</div><!-- price-card__header-cost -->
		{% endif %}
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		{{ item.options | safe }}
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed">{% if item.price %}<?= _('price-payment__button-pay') ?>{% else %}<?= _('price-payment__button-free') ?>{% endif %}</div>
	<div class="d-none">
		{% if item.popup_title %}
		<div data-popup-title>{{ item.popup_title | safe }}</div>
		{% endif %}
		{% if item.popup_text %}
		<div data-popup-text>{{ item.popup_text | safe }}</div>
		{% endif %}
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none{{ item.is_recurrent | safe }}">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->
{% endmacro %}