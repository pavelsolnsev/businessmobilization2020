<?php
{% set data_base_packages = [
	{
		id: 'month',
		name: '<?= $PRICE_MONTH_NAME ?>',
		product_id: '<?= $PRODUCT_ID_MONTH ?>',
		price: '<?= $PRICE_MONTH ?>',
		discount: '',
		price_desc: '',
		is_recurrent: '<?= $PRICE_MONTH_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',	
		button_text: '<?= _("new-price-card__button") ?>',	
		options: ''
	}
	,	
	{
		id: '6-month',
		name: '<?= $PRICE_6_MONTH_NAME ?>',
		product_id: '<?= $PRODUCT_ID_6_MONTH ?>',
		price: '<?= $PRICE_6_MONTH ?>',
		discount: '-30%',
		price_desc: '<div class="price-card__cost-desc old">9 000 <span class="currency">₽</span></div>',
		is_recurrent: '<?= $PRICE_6_MONTH_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',	
		button_text: '<?= _("new-price-card__button") ?>',	
		options: ''
	}
	,	
	{
		id: '12-month',
		name: '<?= $PRICE_12_MONTH_NAME ?>',
		product_id: '<?= $PRODUCT_ID_12_MONTH ?>',
		price: '<?= $PRICE_12_MONTH ?>',
		discount: '-50%',
		price_desc: '<div class="price-card__cost-desc old">18 000 <span class="currency">₽</span></div>',
		is_recurrent: '<?= $PRICE_12_MONTH_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',
		button_text: '<?= _("new-price-card__button") ?>',		
		options: ''
	}

]%}


{% set data_extended_packages = [
	{
		id: 'subs-silver',
		name: '<?= $PRICE_SUBS_SILVER_NAME ?>',
		product_id: '<?= $PRODUCT_ID_SUBS_SILVER ?>',
		price: '<?= $PRICE_SUBS_SILVER ?>',
		discount: '',
		price_desc: '',
		is_recurrent: '<?= $PRICE_SUBS_SILVER_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',
		button_text: '<?= _("new-price-card__button") ?>',		
		options: '
		<div class="price-card__item">
			<div class="price-card__item-title">Базовая подписка</div>
			<div class="price-card__item-subtitle">3 месяца</div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title">Школа бизнеса</div>
			<div class="price-card__item-subtitle">24 программы обучения</div>
		</div>
		'
	}
	,	
	{
		id: 'subs-gold',
		name: '<?= $PRICE_SUBS_GOLD_NAME ?>',
		product_id: '<?= $PRODUCT_ID_SUBS_GOLD ?>',
		price: '<?= $PRICE_SUBS_GOLD ?>',
		discount: '',
		price_desc: '',
		is_recurrent: '<?= $PRICE_SUBS_GOLD_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',
		button_text: '<?= _("new-price-card__button") ?>',		
		options: '
		<div class="price-card__item">
			<div class="price-card__item-title">Базовая подписка</div>
			<div class="price-card__item-subtitle">6 месяцев</div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title">MBA Mini</div>
			<div class="price-card__item-subtitle">Диплом о&nbsp;переподготовке</div>
		</div>
		'
	}
	,	
	{
		id: 'subs-platinum',
		name: '<?= $PRICE_SUBS_PLATINUM_NAME ?>',
		product_id: '<?= $PRODUCT_ID_SUBS_PLATINUM ?>',
		price: '<?= $PRICE_SUBS_PLATINUM ?>',
		discount: '',
		price_desc: '',
		is_recurrent: '<?= $PRICE_SUBS_PLATINUM_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',	
		button_text: '<?= _("new-price-card__button") ?>',
		options: '
		<div class="price-card__item">
			<div class="price-card__item-title">Базовая подписка</div>
			<div class="price-card__item-subtitle">12 месяцев</div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title">MBA Online</div>
			<div class="price-card__item-subtitle">Диплом и&nbsp;сертификат AMBA</div>
		</div>
		'
	}

]%}


{% set data_offline_packages = [
	{
		id: 'offline',
		name: '<?= $product_offline_name ?>',
		product_id: '<?= $product_id_offline ?>',
		price: '<?= $offline_price ?>',
		discount: '',
		price_desc: '',
		is_recurrent: '<?= $offline_isRecurring ?>',
		quote_id: '<?= $offline_quote_id ?>',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',
		button_text: '<?= _("new-price-card-offline__button") ?>',
		options: '
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-1") ?></div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-2") ?></div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-3") ?></div>
		</div>
		<?= $version_price_offline_option ?>
		',		
		land: '<?= $offline_land ?>',
		event_id: '<?= $offline_event_id ?>',
		form_type: '<?= $offline_form_type ?>',
		type: '<?= $offline_type ?>',
		unit: '<?= $offline_unit ?>'
	},
	{
		id: 'offline_standard',
		name: '<?= $product_offline_standard_name ?>',
		product_id: '<?= $product_id_offline_standard ?>',
		price: '<?= $offline_standard_price ?>',
		discount: '',
		price_desc: '',
		is_recurrent: '<?= $offline_standard_isRecurring ?>',
		quote_id: '<?= $offline_quote_id ?>',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',
		button_text: '<?= _("new-price-card-offline__button") ?>',
		options: '
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-1") ?></div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-2") ?></div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-3") ?></div>
		</div>
		<?= $version_price_offline_standard_option ?>
		',		
		land: '<?= $offline_land ?>',
		event_id: '<?= $offline_event_id ?>',
		form_type: '<?= $offline_form_type ?>'
	},
	{
		id: 'offline_business',
		name: '<?= $product_offline_business_name ?>',
		product_id: '<?= $product_id_offline_business ?>',
		price: '<?= $offline_business_price ?>',
		discount: '',
		price_desc: '',
		is_recurrent: '<?= $offline_business_isRecurring ?>',
		quote_id: '<?= $offline_quote_id ?>',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',
		button_text: '<?= _("new-price-card-offline__button") ?>',
		options: '
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-1") ?></div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-2") ?></div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-3") ?></div>
		</div>
		<?= $version_price_offline_business_option ?>
		',		
		land: '<?= $offline_land ?>',
		event_id: '<?= $offline_event_id ?>',
		form_type: '<?= $offline_form_type ?>'
	},
	{
		id: 'offline_vip',
		name: '<?= $product_offline_vip_name ?>',
		product_id: '<?= $product_id_offline_vip ?>',
		price: '<?= $offline_vip_price ?>',
		discount: '',
		price_desc: '',
		is_recurrent: '<?= $offline_vip_isRecurring ?>',
		quote_id: '<?= $offline_quote_id ?>',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',
		button_text: '<?= _("new-price-card-offline__button") ?>',
		options: '
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-1") ?></div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-2") ?></div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title"><?= _("price-card-offline-option-3") ?></div>
		</div>
		<?= $version_price_offline_vip_option ?>
		',		
		land: '<?= $offline_land ?>',
		event_id: '<?= $offline_event_id ?>',
		form_type: '<?= $offline_form_type ?>'
	}

]%}


{% set data_demo_packages = [
	{
		id: 'demo',
		name: '<?= $PRICE_DEMO_NAME ?>',
		product_id: '<?= $PRODUCT_ID_DEMO ?>',
		price: '<?= $PRICE_DEMO ?>',
		discount: '',
		price_desc: '',
		is_recurrent: '<?= $PRICE_DEMO_IS_RECURRENT ?>',
		quote_id: '',
		partner: '<?= $partner_external ? $partner_external : $partner ?>',
		popup_title: '',
		popup_text: '',
		button_text: '<?= _("new-price-card__button") ?>',
		options: '	
		<?= $version_price_demo_option ?>
		'
	}

	]%}