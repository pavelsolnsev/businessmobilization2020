{% import 'form/macro.php' as common_form %}

{% macro inner(form_id) %}
<div class="container main__container">
	<div class="row">
		<div class="col-12 col-md-6 main__col-1">
			{{ info() }}
			{{ title() }}
		</div><!-- col -->
		<div class="col-12 col-md-6 main__col-2">
			{{ speaker() }}
		</div><!-- col -->
	</div><!-- row -->
	{{ subtitle() }}
	{{ form(form_id) }}
</div><!-- container -->
{% endmacro %}


{% macro info() %}
<div class="main__info">
	<div class="main__title-speaker-date"><?= _('main__synergyonlineforum-ai_date') ?></div>
</div><!-- main__info -->
{% endmacro %}


{% macro title() %}
<div class="main__title">
	<picture>
		<source srcset="<?= $lang == 'ru' ? 'img/@lp/@synergyonlineforum-ai/main/title_mobile.svg' : 'img/@lp/@synergyonlineforum-ai/main/title_mobile_en.svg' ?>" media="(max-width: 575px)"/>
		<source srcset="<?= $lang == 'ru' ? 'img/@lp/@synergyonlineforum-ai/main/title_bg.svg' : 'img/main/title_bg_en.svg' ?>"/>
		<img src="<?= $lang == 'ru' ? 'img/@lp/@synergyonlineforum-ai/main/title_bg.svg' : 'img/main/title_bg_en.svg' ?>" alt="">
	</picture>
</div><!-- main__title -->
{% endmacro %}

{% macro subtitle() %}
<div class="main__subtitle">
	<div class="main__subtitle-text xcondensed"><?= _('main__synergyonlineforum-ai_subtitle') ?></div>
</div><!-- main__subtitle -->
{% endmacro %}


{% macro speaker() %}
<div class="main__speaker main__speaker_no-content">
	<div class="main__speaker-image" data-image>
		<img src="img/@lp/@synergyonlineforum-ai/main/ie.png" alt="" class="main__speaker-image-desc lazy">
		<img src="img/@lp/@synergyonlineforum-ai/main/ie_m.png" alt="" class="main__speaker-image-mobile lazy">
	</div><!-- main__speaker-image -->
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
