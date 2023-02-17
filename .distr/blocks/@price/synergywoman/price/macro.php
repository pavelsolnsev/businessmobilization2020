{% from '../../../price/data.php' import data_packages as packages, data_academic_packages as academic_packages, data_language_packages as language_packages, data_packages_eng as packages_eng %}

{% macro header() %}
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>Спасибо за&nbsp;регистрацию</span> <br>на&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">Чтобы завершить регистрацию, оплатите участие в&nbsp;форуме.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">Вы&nbsp;успешно зарегистрировались <br>на&nbsp;форум</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">Бесплатный доступ придет вам на&nbsp;почту.</div>
				<?php } else { ?>
					<div class="price-header__note">К&nbsp;сожалению, бесплатные билеты закончились, <br class="d-none d-lg-inline">вы&nbsp;можете принять участие в&nbsp;форуме, оплатив билет.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>СПАСИБО!<br></span>Мы&nbsp;получили вашу заявку!</h1>
						<p>В&nbsp;ближайшее время с&nbsp;вами свяжется наш консультант, даст самую актуальную информацию и&nbsp;ответит на&nbsp;все интересующие вопросы</p>
						<h2>Чтобы не&nbsp;скучать во&nbsp;время ожидания, <span>попробуйте новую платформу Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>
{% endmacro %}



{% macro payment(arg) %}
{% if not arg %}<a class="payment-button" onclick="$('#price-demo').trigger('click')"><?= _('price-payment-button') ?></a>{% endif %}
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

{#{ promo() }#}

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


{% macro program() %}
<?php /* Показываем блок, если в CRM есть хотя бы 1 активный пакет, иначе - не выводим (https://sd.synergy.ru/Task/View/524092)  */ ?>
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


{% macro lang() %}
<?php if ( $external_url ) { ?>

	<div class="price-lang" id="price-lang">
		<div class="price-lang__title condensed"><?= _('price-lang__title') ?></div>
		<div class="price-lang__description"><?= _('price-lang__description') ?></div>
		<div class="price-lang__bar">
			<div class="price-lang__subtitle condensed">
				<div class="price-lang__subtitle-inner"><?= _('price-lang__subtitle') ?></div>
			</div>
			<ul class="price-lang__list">
				<li class="price-lang__item price-lang__item_1 condensed"><?= _('price-lang__item_1') ?></li>
				<li class="price-lang__item price-lang__item_2 condensed"><?= _('price-lang__item_2') ?></li>
				<li class="price-lang__item price-lang__item_3 condensed"><?= _('price-lang__item_3') ?></li>
			</ul>
		</div>
	</div><!-- price-lang -->

<?php } else { ?>

	<div class="price-prod price-prod_lang" id="price-lang">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/lang/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-lang__title') ?></div>
				<p class="price-prod__text"><?= _('price-lang__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/lang/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-lang -->

<?php } ?>
{% endmacro %}


{% macro university() %}
<?php if ( $external_url ) { ?>

	<div class="price-university" id="price-university">
		<div class="price-university__title condensed"><?= _('price-university__title') ?></div>
		<div class="price-university__description"><?= _('price-university__description') ?></div>
		<div class="price-university__bar">
			<div class="price-university__logo"><img class="lazy" data-src="img/price/university/logo.png" alt="icon"></div>
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
	</div><!-- price-university -->

<?php } else { ?>

	<div class="price-prod price-prod_university" id="price-university">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img class="lazy" data-src="img/price/university/logo_blue.png" alt="icon"></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-university__title') ?></div>
				<p class="price-prod__text"><?= _('price-university__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/university/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-university -->

<?php } ?>
{% endmacro %}


{% macro base() %}
<?php if ( $external_url ) { ?>

	<div class="price-base" id="price-base">
		<div class="row">
			<div class="col-lg-6">
				<div class="price-base__title condensed"><?= _('price-base__title') ?></div>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__logo"><img data-src="img/price/base/logo.svg" class="lazy" alt=""></div>
				</div><!-- price-base__right -->
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__subtitle"><?= _('price-base__subtitle-1') ?></div>
				<?= _('price-base__text-1') ?>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__subtitle"><?= _('price-base__subtitle-2') ?></div>
					<?= _('price-base__text-2') ?>
				</div><!-- price-base__right -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- price-base -->

<?php } else { ?>

	<div class="price-prod price-prod_base" id="price-base">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/base/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-base__title') ?></div>
				<p class="price-prod__text"><?= _('price-base__text-1') ?></p>
				<p class="price-prod__text"><?= _('price-base__text-2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/base/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-base -->

<?php } ?>
{% endmacro %}


{% macro sbs() %}
<?php if ( $external_url ) { ?>

	<div class="price-sbs" id="price-sbs">
		<div class="price-sbs__title condensed"><?= _('price-sbs__title') ?></div>
		<div class="price-sbs__text price-sbs__text_1"><?= _('price-sbs__text_1') ?></div>
		<div class="price-sbs__text price-sbs__text_2"><?= _('price-sbs__text_2') ?></div>
		<div class="price-sbs__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.svg' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } else { ?>

	<div class="price-prod price-prod_sbs" id="price-sbs">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.png' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-sbs__title') ?></div>
				<p class="price-prod__text"><?= _('price-sbs__text_1') ?></p>
				<p class="price-prod__text"><?= _('price-sbs__text_2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/sbs/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } ?>
{% endmacro %}


{% macro crm() %}
<?php if ( $external_url ) { ?>

	<div class="price-crm" id="price-crm">
		<div class="price-crm__title condensed"><?= _('price-crm__title') ?></div>
		<div class="price-crm__text"><?= _('price-crm__text') ?></div>
		<div class="price-crm__logo"><img data-src="img/price/crm/logo.svg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } else { ?>

	<div class="price-prod price-prod_crm" id="price-crm">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/crm/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-crm__title') ?></div>
				<p class="price-prod__text"><?= _('price-crm__text') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/crm/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } ?>
{% endmacro %}


{% macro promo() %}
<div class="price-promo" id="price-promo">
	<div class="price-promo__text">
		<div class="price-promo__subtitle condensed">Оплатите прямо сейчас и&nbsp;<span class="price-promo__subtitle-part">получите в&nbsp;подарок</span></div>
		<div class="price-promo__title condensed">видео выступления <span class="color-red">Арнольда Шварценеггера</span> на&nbsp;SGF&nbsp;2020</div>
	</div><!-- price-promo__text -->
	<div class="price-promo__image"><?= picture('img/price/promo/arni.png', 'lazy') ?></div>
</div><!-- price-promo -->
{% endmacro %}


{% macro footer() %}
<div class="price-footer" id="price-footer">
	<a href="files/reccuring_offerta.pdf" target="_blank" data-fancybox>Договор оферты</a>
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

