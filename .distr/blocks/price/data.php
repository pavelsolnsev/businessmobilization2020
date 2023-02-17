<?php

{% set data_brain2021_packages = [

	{
		id: 'econom',
		name: '<?= $PRICE_ECONOMY_NAME ?>',
		product_id: '<?= $PRODUCT_ID_ECONOMY ?>',
		price: '<?= $PRICE_ECONOMY ?>',
		time: '',
		is_recurrent: '<?= $PRICE_ECONOMY_IS_RECURRENT ?>',
		quote_id: '<?= $econom_quote_id ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		',
		unit: '<?= $econom_unit ?>',
		type: '<?= $econom_type ?>',
		land: '<?= $econom_land ?>',
		event_id: '<?= $econom_event_id ?>',
		form_type: '<?= $econom_form_type ?>'
		
	},
	{
		id: 'business',
		name: '<?= $PRICE_BUSINESS_NAME ?>',
		product_id: '<?= $PRODUCT_ID_BUSINESS ?>',
		price: '<?= $PRICE_BUSINESS ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_BUSINESS_IS_RECURRENT ?>',
		quote_id: '<?=	$quote_id_tickets ?>',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		',
		event_id: '<?= $econom_event_id ?>'
	},
	{
		id: 'vip',
		name: '<?= $PRICE_VIP_NAME ?>',
		product_id: '<?= $PRODUCT_ID_VIP ?>',
		price: '<?= $PRICE_VIP ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_VIP_IS_RECURRENT ?>',
		quote_id: '<?=	$quote_id_tickets ?>',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	},
	{
		id: 'platinum',
		name: '<?= $PRICE_PLATINUM_NAME ?>',
		product_id: '<?= $PRODUCT_ID_PLATINUM ?>',
		price: '<?= $PRICE_PLATINUM ?>',
		time: '<?= _("price-card-time-1y") ?>',
		is_recurrent: '<?= $PRICE_PLATINUM_IS_RECURRENT ?>',
		quote_id: '<?=	$quote_id_tickets ?>',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}	


]%}

{% set data_packages = [
	{
		id: 'demo',
		name: '<?= $PRICE_DEMO_NAME ?>',
		product_id: '<?= $PRODUCT_ID_DEMO ?>',
		price: '<?= $PRICE_DEMO ?>',
		time: '',
		is_recurrent: '<?= $PRICE_DEMO_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '<?= _("popup-price-form__title_demo") ?>',
		popup_text: '<?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span>',
		options: '
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		'
	}
	,
	{
		id: 'econom',
		name: '<?= $PRICE_ECONOMY_NAME ?>',
		product_id: '<?= $PRODUCT_ID_ECONOMY ?>',
		price: '<?= $PRICE_ECONOMY ?>',
		time: '',
		is_recurrent: '<?= $PRICE_ECONOMY_IS_RECURRENT ?>',
		quote_id: '<?= $econom_quote_id ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		',
		unit: '<?= $econom_unit ?>',
		type: '<?= $econom_type ?>',
		land: '<?= $econom_land ?>',
		event_id: '<?= $econom_event_id ?>',
		form_type: '<?= $econom_form_type ?>'
		
	}
	,
	{
		id: 'express',
		name: '<?= $PRICE_EXPRESS_NAME ?>',
		product_id: '<?= $PRODUCT_ID_EXPRESS ?>',
		price: '<?= $PRICE_EXPRESS ?>',
		time: '',
		is_recurrent: '<?= $PRICE_EXPRESS_IS_RECURRENT ?>',
		quote_id: '',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		'
	}
	,
	{
		id: 'standard',
		name: '<?= $PRICE_STANDARD_NAME ?>',
		product_id: '<?= $PRODUCT_ID_STANDARD ?>',
		price: '<?= $PRICE_STANDARD ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_STANDARD_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'business',
		name: '<?= $PRICE_BUSINESS_NAME ?>',
		product_id: '<?= $PRODUCT_ID_BUSINESS ?>',
		price: '<?= $PRICE_BUSINESS ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_BUSINESS_IS_RECURRENT ?>',
		quote_id: '<?=	$quote_id_tickets ?>',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'vip',
		name: '<?= $PRICE_VIP_NAME ?>',
		product_id: '<?= $PRODUCT_ID_VIP ?>',
		price: '<?= $PRICE_VIP ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_VIP_IS_RECURRENT ?>',
		quote_id: '<?=	$quote_id_tickets ?>',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'silver',
		name: '<?= $PRICE_SILVER_NAME ?>',
		product_id: '<?= $PRODUCT_ID_SILVER ?>',
		price: '<?= $PRICE_SILVER ?>',
		time: '<?= _("price-card-time-3m") ?>',
		is_recurrent: '<?= $PRICE_SILVER_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'gold',
		name: '<?= $PRICE_GOLD_NAME ?>',
		product_id: '<?= $PRODUCT_ID_GOLD ?>',
		price: '<?= $PRICE_GOLD ?>',
		time: '<?= _("price-card-time-6m") ?>',
		is_recurrent: '<?= $PRICE_GOLD_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'platinum',
		name: '<?= $PRICE_PLATINUM_NAME ?>',
		product_id: '<?= $PRODUCT_ID_PLATINUM ?>',
		price: '<?= $PRICE_PLATINUM ?>',
		time: '<?= _("price-card-time-1y") ?>',
		is_recurrent: '<?= $PRICE_PLATINUM_IS_RECURRENT ?>',
		quote_id: '<?=	$quote_id_tickets ?>',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}

]%}


{% set data_packages_eng = [
    {
		id: 'express',
		name: '<?=  $product_express_name ?>',
		product_id: '<?= $product_express ?>',
		price: '<?= $express_price ?>',
		time: '',
		is_recurrent: '<?= $express_isRecurring ?>',
		quote_id: '',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		'
	}
	,
	{
		id: 'standard',
		name: '<?= $product_standard_name ?>',
		product_id: '<?= $product_standard ?>',
		price: '<?= $standard_price ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $standard_isRecurring ?>',
		quote_id: '',
		partner: '',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'business',
		name: '<?= $product_business_name ?>',
		product_id: '<?= $product_business ?>',
		price: '<?= $business_price ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $business_isRecurring ?>',
		quote_id: '',
		partner: '',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'vip',
		name: '<?= $product_vip_name ?>',
		product_id: '<?= $product_vip ?>',
		price: '<?= $vip_price ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $vip_isRecurring ?>',
		quote_id: '',
		partner: '',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
] 
%}

/*
{ Резерв }
	{
		id: 'econom',
		name: '<?= $PRICE_ECONOMY_NAME ?>',
		product_id: '<?= $PRODUCT_ID_ECONOMY ?>',
		price: '<?= $PRICE_ECONOMY ?>',
		time: '',
		is_recurrent: '<?= $PRICE_ECONOMY_IS_RECURRENT ?>',
		quote_id: '',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		'
	}
	,
*/

{% set data_academic_packages = [
	{
		id: 'bachelor',
		name: '<?= _("price_bachelor_name") ?>',
		product_id: '<?= $PRODUCT_ID_BACHELOR ?>',
		price: '<?= $PRICE_BACHELOR ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_BACHELOR_IS_RECURRENT ?>',
		quote_id: '4250',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-1") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-1m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-education-bachelor") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'magister',
		name: '<?= _("price_magister_name") ?>',
		product_id: '<?= $PRODUCT_ID_MAGISTER ?>',
		price: '<?= $PRICE_MAGISTER ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_MAGISTER_IS_RECURRENT ?>',
		quote_id: '4250',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-1") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-1m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-education-magister") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'postgraduate',
		name: '<?= _("price_postgraduate_name") ?>',
		product_id: '<?= $PRODUCT_ID_POSTGRADUATE ?>',
		price: '<?= $PRICE_POSTGRADUATE ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_POSTGRADUATE_IS_RECURRENT ?>',
		quote_id: '4250',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-1") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-1m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-education-postgraduate") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}

]%}

{% set data_language_packages = [
	{
		id: 'ready',
		name: '<?= $PRICE_READY_NAME ?>',
		product_id: '<?= $PRODUCT_ID_READY ?>',
		price: '<?= $PRICE_READY ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_READY_IS_RECURRENT ?>',
		quote_id: '',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-1m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-education-language-ready") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'steady',
		name: '<?= $PRICE_STEADY_NAME ?>',
		product_id: '<?= $PRODUCT_ID_STEADY ?>',
		price: '<?= $PRICE_STEADY ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_STEADY_IS_RECURRENT ?>',
		quote_id: '',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-1m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-education-language-steady") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}
	,
	{
		id: 'run',
		name: '<?= $PRICE_RUN_NAME ?>',
		product_id: '<?= $PRODUCT_ID_RUN ?>',
		price: '<?= $PRICE_RUN ?>',
		time: '<?= _("price-card-time-1m") ?>',
		is_recurrent: '<?= $PRICE_RUN_IS_RECURRENT ?>',
		quote_id: '',
		options: '
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-1m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-education-language-run") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		'
	}

]%}
