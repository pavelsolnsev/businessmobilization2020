
{% from '../../../price/data.php' import data_packages as packages, data_academic_packages as academic_packages, data_language_packages as language_packages, data_packages_eng as packages_eng %}

{% macro payment(arg) %}
<a class="payment-button" onclick="$('#price-demo').trigger('click')"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper{{arg}}">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		{% for item in packages_eng %}
		{{ card(item) }}
		{% endfor %}
	<?php } else { ?>

		{% for item in packages %}
		{{ card(item) }}
		{% endfor %}
	<?php } ?>

</div><!-- payments__wrapper -->
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
				<span class="currency currency_rub">???</span>
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

{% macro program() %}
<?php /* ???????????????????? ????????, ???????? ?? CRM ???????? ???????? ???? 1 ???????????????? ??????????, ?????????? - ???? ?????????????? (https://sd.synergy.ru/Task/View/524092)  */ ?>
<?php if ( $PRODUCT_ID_BACHELOR || $PRODUCT_ID_MAGISTER || $PRODUCT_ID_POSTGRADUATE ) { ?>
	<div class="payments__wrapper payments__wrapper_2 <?= !$PRODUCT_ID_BACHELOR && !$PRODUCT_ID_MAGISTER && !$PRODUCT_ID_POSTGRADUATE ? 'd-none' : '' ?>">
		<div class="price-payment__title condensed">
			<span class="price-payment__title-part"><?= _('price-payment__title-academic') ?></span>
		</div>

		{% for item in academic_packages %}
		{{ card(item) }}
		{% endfor %}

	</div><!-- payments__wrapper -->
<?php } ?>
{% endmacro %}


{% macro language() %}
<div class="payments__wrapper payments__wrapper_3 <?= !$PRODUCT_ID_READY && !$PRODUCT_ID_STEADY && !$PRODUCT_ID_RUN ? 'd-none' : '' ?>">
	<div class="price-payment__title condensed">
		<span class="price-payment__title-part"><?= _('price-payment__title-language') ?></span>
	</div>

	{% for item in language_packages %}
	{{ card(item) }}
	{% endfor %}

</div><!-- payments__wrapper -->
{% endmacro %}


{% macro footer() %}
<div class="price-footer" id="price-footer">
	<a href="files/reccuring_offerta.pdf" target="_blank" data-fancybox>?????????????? ????????????</a>
</div><!-- price-promo -->
{% endmacro %}


{% macro faq() %}
{% from './data-faq.php' import data as list %}
<div class="price-faq" id="price-faq">

	<div class="price-faq__title condensed">FAQ</div>
	<div class="price-faq__box">

		{% for item in list %}
		<div class="price-faq__item price-faq__item_{{ loop.index }} faq__item " data-question="{{ item.question | safe | striptags }}">
			<div class="price-faq__item-top">{{ item.question | safe }}</div>
			<div class="price-faq__item-bottom faq__item-bottom">{{ item.answer | safe }}</div>
		</div>
		{% endfor %}

	</div><!-- price-faq__box -->

</div><!-- price-faq -->
{% endmacro %}

{% macro base() %}
<div class="price-base" id="price-base">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="price-base__title condensed"><?= _('price-base__title') ?></div>
            </div><!-- col -->
            <div class="col-md-3">
                <div class="price-base__right">
                    <div class="price-base__logo"><img data-src="../img/price/base/logo.svg" class="lazy" alt=""></div>
                </div><!-- price-base__right -->
            </div><!-- col -->
            <div class="col-md-5">
                <div class="price-base__subtitle"><?= _('price-base__subtitle-1') ?></div>
                <?= _('price-base__text-1') ?>
            </div><!-- col -->
            <div class="col-md-5">
                <div class="price-base__right">
                    <div class="price-base__subtitle"><?= _('price-base__subtitle-2') ?></div>
                    <?= _('price-base__text-2') ?>
                </div><!-- price-base__right -->
            </div><!-- col -->
        </div><!-- row -->
    </div>
</div><!-- price-base -->
{% endmacro %}

{% macro sbs() %}
<div class="price-sbs" id="price-sbs">
	<div class="container">
        <div class="price-sbs__title condensed"><?= _('price-sbs__title') ?></div>
        <div class="price-sbs__logo"><img data-src="<?= $lang == 'ru' ? 'img/@price/synergydigital/price/sbs/logo.png' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
        <div class="price-sbs__text price-sbs__text_1"><?= _('price-sbs__text_1') ?></div>
        <div class="price-sbs__text price-sbs__text_2"><?= _('price-sbs__text_2') ?></div>
    </div>
</div><!-- price-sbs -->
{% endmacro %}

{% macro crm() %}
<div class="price-crm" id="price-crm">
    <div class="container">
        <div class="price-crm__top">
            <div class="price-crm__title condensed"><?= _('price-crm__title') ?></div>
            <div class="price-crm__logo"><img data-src="img/@price/synergydigital/price/crm/logo.svg" class="lazy" alt=""></div>
        </div>
        <div class="price-crm__bottom">
            <div class="price-crm__text"><?= _('price-crm__text') ?></div>
            <div class="price-crm__photo">
                <picture>
                    <source srcset="img/@price/synergydigital/price/crm/photo-mobile.jpg" media="(max-width: 767px)">
                    <source srcset="img/@price/synergydigital/price/crm/photo-tablet.jpg" media="(max-width: 991px)">
                    <img srcset="img/@price/synergydigital/price/crm/photo.jpg" class="lazy" alt="">
                </picture>                
            </div>
        </div>
    </div>
</div><!-- price-crm -->
{% endmacro %}


{% macro lang() %}
<div class="price-lang" id="price-lang">
    <div class="container">
        <div class="price-lang__title condensed"><?= _('price-lang__title') ?></div>
        <div class="price-lang__box">
            <div class="price-lang__photo">
                <picture>
                    <source srcset="img/@price/synergydigital/price/lang/photo-mobile.jpg" media="(max-width: 767px)">
                    <source srcset="img/@price/synergydigital/price/lang/photo-tablet.jpg" media="(max-width: 991px)">
                    <img srcset="img/@price/synergydigital/price/lang/photo.jpg" class="lazy" alt="">
                </picture>
            </div>
            <div class="price-lang__bar">
                <div class="price-lang__description"><?= _('price-lang__description') ?></div>
                <div class="price-lang__subtitle condensed">
                    <div class="price-lang__subtitle-inner"><?= _('price-lang__subtitle') ?></div>
                </div>
                <ul class="price-lang__list">
                    <li class="price-lang__item price-lang__item_1 condensed"><?= _('price-lang__item_1') ?></li>
                    <li class="price-lang__item price-lang__item_2 condensed"><?= _('price-lang__item_2') ?></li>
                    <li class="price-lang__item price-lang__item_3 condensed"><?= _('price-lang__item_3') ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- price-lang -->
{% endmacro %}

{% macro university() %}
<div class="price-university" id="price-university">
    <div class="container">
        <div class="price-university__top">
            <div class="price-university__title condensed"><?= _('price-university__title') ?></div>
            <div class="price-university__logo"><img class="lazy" data-src="img/price/university/logo.png" alt="icon"></div>
        </div>
        <div class="price-university__description"><?= _('price-university__description') ?></div>
        <div class="price-university__bar">
            <div class="price-university__box">
                <div class="price-university__item">
                    <div class="price-university__item-number condensed"><?= _('price-university__item-number_1') ?></div>
                    <div class="price-university__item-text "><?= _('price-university__item-text_1') ?></div>
                </div>
                <div class="price-university__item">
                    <div class="price-university__item-number condensed"><?= _('price-university__item-number_2') ?></div>
                    <div class="price-university__item-text"><?= _('price-university__item-text_2') ?></div>
                </div>
                <div class="price-university__item">
                    <div class="price-university__item-number condensed"><?= _('price-university__item-number_3') ?></div>
                    <div class="price-university__item-text"><?= _('price-university__item-text_3') ?></div>
                </div>
            </div>
        </div>
    </div>
</div><!-- price-university -->
{% endmacro %}

{% macro footer() %}

<div class="price-footer" id="price-footer">
    <!--  -->
    <div class="container">
        <div class="price-footer__box">
            <div class="price-footer__left">
                <div class="price-footer__logo price-footer__logo_1"><img class="lazy" data-src="img/@price/synergydigital/price/footer/logo-syn.svg" alt=""></div>
                <div class="price-footer__logo price-footer__logo_2"><img class="lazy" data-src="img/@price/synergydigital/price/footer/logo-dig.svg" alt=""></div>
                <a class="price-footer__left-phone" href="tel:+74952807816" class="price-footer__phone">+7 495 280 78 16</a>
                <div class="price-footer__left-inner">
                    <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="footer__link-privacy fancybox-privacy-link" data-fancybox="" data-type="ajax">???????????????? ????????????????????????????????????</a>
                    <a href="http://sydi.ru/?utm_source=synergyglobal" target="_blank" class="price-footer__sydi">???????????????????? ?? ?????????????????????? ??? Synergy Digital</a>
                    <a href="https://synergyglobal.ru/forums/businessmobilization/2020/files/reccuring_offerta.pdf" target="_blank" data-fancybox>?????????????????? ????????????</a>
                </div>
            </div>
            <div class="price-footer__right">
                <div class="price-footer__department">
                    <div class="price-footer__department-name">?????????? ???? ???????????? ?? ???????????????????? ?? ????????????????</div>
                    <a href="tel:+79160398083" class="price-footer__department-phone">+7 916 039 80 83</a>
                    <a href="mailto:Dshaykhulova@sbs.edu.ru" class="price-footer__department-mail">Dshaykhulova@sbs.edu.ru</a>
                </div>
                <div class="price-footer__department">
                    <div class="price-footer__department-name">?????????? ???? ???????????? ?? ???????????????????????????? ??????????????????</div>
                    <a href="tel:+79067008889" class="price-footer__department-phone">+7 906 700 88 89</a>
                    <a href="mailto:AIAEngivarian@synergy.ru" class="price-footer__department-mail">AIAEngivarian@synergy.ru</a>
                </div>
                <div class="price-footer__department">
                    <div class="price-footer__department-name">?????????? ???? ???????????? ???? ????????????????????</div>
                    <a href="tel:+79164447845" class="price-footer__department-phone">+7 916 444 78 45</a>
                    <a href="mailto:VStrabykin@synergy.ru" class="price-footer__department-mail">VStrabykin@synergy.ru</a>
                </div>
                <div class="price-footer__department">
                    <div class="price-footer__department-name">?????????? ???? ???????????? ???? ??????</div>
                    <a href="tel:+79154032143" class="price-footer__department-phone">+7 915 403 21 43</a>
                    <a href="mailto:VVSHibina@synergypress.ru" class="price-footer__department-mail">VVSHibina@synergypress.ru</a>
                </div>
            </div>
        </div>

    </div>
</div><!-- price-promo -->
{% endmacro %}