{% import 'form/macro.php' as common_form %}

{% macro inner(form_id) %}
<div class="container main__container">
	<div class="row">
		<div class="col-md-6 main__col-1">
			{{ info() }}
			{{ title() }}
		</div><!-- col -->
		<div class="col-md-6 main__col-2">
			{{ speaker() }}
		</div><!-- col -->
	</div><!-- row -->
	{{ form(form_id) }}
</div><!-- container -->
{% endmacro %}


{% macro info() %}
<div class="main__info">
	<div class="main__title-speaker-date"><?= _('main__brown_date') ?></div>
</div><!-- main__info -->
{% endmacro %}


{% macro title() %}
<div class="main__title">
	<picture>
		<source srcset="<?= $lang == 'ru' ? 'img/@lp/@top-taleb/main/title_mobile.svg' : 'img/@lp/@top-taleb/main/title_mobile_en.svg' ?>" media="(max-width: 575px)"/>
		<source srcset="<?= $lang == 'ru' ? 'img/main/title_bg.svg' : 'img/main/title_bg_en.svg' ?>"/>
		<img src="<?= $lang == 'ru' ? 'img/main/title_bg.svg' : 'img/main/title_bg_en.svg' ?>" alt="">
	</picture>
</div><!-- main__title -->
{% endmacro %}


{% macro speaker() %}
<div class="main__speaker main__speaker_no-content" href="#popup-speakers" data-fancybox="" data-options='{"baseClass": "fancybox-theme-dark"}' data-speaker="brown">
	<div class="main__speaker-image" data-image>
		<img src="img/@lp/@top-brown/main/brown.png" alt="" class="main__speaker-image-desc lazy">
		<img src="img/main/speaker/brown_pure.png" alt="" class="main__speaker-image-mobile lazy">
	</div><!-- main__speaker-image -->
	<div class="main__speaker-title">
		<div class="main__speaker-box">
			<div class="main__speaker-date"><?= _('main__brown_date') ?></div>
			<div class="main__speaker-headliner"><?= _('speakers-card__role-headliner') ?></div>
		</div>
		<div class="main__speaker-name xcondensed" data-name><?= _('main__brown_name') ?></div>
	</div><!-- main__speaker-title -->
	<div class="d-none">
		<div data-note><?= _("speakers-brown-note") ?></div>
		<div data-info><?= _("speakers-brown-info") ?></div>
	</div><!-- d-none -->
</div><!-- main__speaker -->
{% endmacro %}


{% macro form(form_id) %}
	{{ form_bottom(form_id) }}
{% endmacro %}

{% macro form_bottom(form_id) %}
<div class="main__bottom-form">
	{{ common_form.form( form_id, title="<?= _('main__form-title') ?>", button="<?= _('version_form_button_reg') ?>", button_class='color-red' ) }}
</div><!-- main__form -->
{% endmacro %}
