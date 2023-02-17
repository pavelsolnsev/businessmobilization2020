{% import 'form/macro.php' as common_form %}

{% macro inner(form_id) %}
<div class="container main__container">

	<?php if ( $version_main_speaker['id'] ) { ?>
		<div class="row">
			<div class="col-md-7 main__col-1">
				{{ info() }}
				{{ title() }}
				<?php if ($main_partners_logo) { ?>
					{{ partner() }}
				<?php } ?>
				<?php if ($version == 'email') { ?>					
					{% if form_id == 'intro' %} 
						{{ button_scroll() }}
					{% endif %}
				<?php } ?>
			</div><!-- col -->
			<div class="col-md-5 main__col-2">
				{{ speaker() }}
			</div><!-- col -->
			{#<div class="col-12 main__col-3">
				{{ features() }}
			</div><!-- col -->#}
		</div><!-- row -->
		<?php if ($version != 'email') { ?>
		{{ form(form_id) }}
		<?php } else { ?>
			{% if form_id == 'intro-2' %} 
				{{ form(form_id) }}
			{% endif %}
		<?php } ?>
	<?php } elseif ( $is_block_main_best_performance ) { ?>
		{{ bestpeformance() }}
		{{ form_bottom(form_id) }}
	<?php } elseif ( $is_block_main_top50 ) { ?>

		{{ top50() }}
		{{ form_bottom(form_id) }}

	<?php } elseif ( $is_block_main_biohacking ) { ?>

		<div class="row">
			<div class="col-md-5 main__col-1">
				{{ info() }}
				{{ title_biohacking() }}
				<?php if ($version == 'email') { ?>					
					{% if form_id == 'intro' %} 
						{{ button_scroll() }}
					{% endif %}
				<?php } ?>
			</div><!-- col -->
			<div class="col-md-7 main__col-2">
			<div class="main__image" >
				<picture>
					<source srcset="img/main/biohacking-bg-mobile.png" media="(max-width: 767px)">
					<source srcset="img/main/biohacking-bg.png">
					<img src="img/main/biohacking-bg.png" alt="">
				</picture>
			</div><!-- main__image -->
			</div><!-- col -->			
		</div><!-- row -->
		<?php if ($version != 'email') { ?>
		{{ form_bottom(form_id) }}
		<?php } else { ?>
			{% if form_id == 'intro-2' %} 
				{{ form_bottom(form_id) }}
			{% endif %}
		<?php } ?>
		<?php } elseif ( $is_block_main_legal ) { ?>

			<div class="row">
				<div class="col-md-5 main__col-1">
					{{ info() }}
					{{ title_legal() }}
					<?php if ($version == 'email') { ?>					
						{% if form_id == 'intro' %} 
							{{ button_scroll() }}
						{% endif %}
					<?php } ?>
				</div><!-- col -->
				<div class="col-md-7 main__col-2">
				<div class="main__image" >
					<picture>
						<source srcset="img/main/legal-bg-mobile.png" media="(max-width: 767px)">
						<source srcset="img/main/legal-bg.png">
						<img src="img/main/legal-bg2.png" alt="">
					</picture>
				</div><!-- main__image -->
				</div><!-- col -->			
			</div><!-- row -->
			<?php if ($version != 'email') { ?>
			{{ form_bottom(form_id) }}
			<?php } else { ?>
				{% if form_id == 'intro-2' %} 
					{{ form_bottom(form_id) }}
				{% endif %}
			<?php } ?>
	<?php } else { ?>

		<div class="row">
			<div class="col-md-7 col-lg-8 main__col-1">
				{{ info() }}
				{{ title() }}
				<?php if ($main_partners_logo != '') { ?>
					{{ partner() }}
				<?php } ?>
			</div><!-- col -->
			<div class="col-md-5 col-lg-4 main__col-2">
				{{ form(form_id) }}
			</div><!-- col -->
		</div><!-- row -->

	<?php } ?>

</div><!-- container -->
{% endmacro %}


{% macro info() %}
<div class="main__info">
	<?php if ( $version_is_main_speaker_date ) { ?>
		<div class="main__title-speaker-date"><?= $lang == 'ru' ? date_ru( $version_main_speaker['date'] . '.' . date('Y'), '%e %bg %Y' ) : date( 'F j, Y',  strtotime($version_main_speaker['date'] . '.' . date('Y') ) ) ?></div>
	<?php } else { ?>
		<img src="img/main/info.svg" alt="">
	<?php } ?>
</div><!-- main__info -->
{% endmacro %}


{% macro title() %}
<div class="main__title">
	<?php if ( $lang == 'en' ) { ?>
		<img src="img/main/title_en.svg" alt="">
	<?php } elseif ( $lang == 'tr' ) { ?>
		<img src="img/main/title_tr.svg" alt="">
	<?php } else { ?>
		<img src="img/main/title.svg" alt="">
	<?php } ?>
</div><!-- main__title -->
{% endmacro %}

{% macro title_biohacking() %}
<div class="main__title">
		<img src="img/main/title_bio.svg" alt="">
</div><!-- main__title -->
{% endmacro %}

{% macro title_legal() %}
<div class="main__title">
		<img src="img/main/title_legal.svg" alt="">
</div><!-- main__title -->
{% endmacro %}

{% macro partner() %}
<div class="main__partner xcondensed">
	<div class="main__partner-logo"><img src="<?= $main_partners_logo ?>" alt=""></div>
	<div class="main__partner-text"><?= $main_partners_text ?></div>
</div>
{% endmacro %}


{% macro speaker() %}
<?php if ( $version_main_speaker['id'] ) { ?>
	<div class="main__speaker <?= !$version_main_speaker['content'] ? 'main__speaker_no-content' : '' ?>" href="#popup-speakers" <?= _("speakers-{$version_main_speaker['id']}-info") ? 'data-fancybox' : '' ?> data-options='{"baseClass": "fancybox-theme-dark"}' data-speaker="<?= $version_main_speaker['id'] ?>">
		<div class="main__speaker-image" data-image>
			<img src="<?= $version_main_speaker['image'] ?>" alt="">
		</div><!-- main__speaker-image -->
		<?php if ( $version_main_speaker['content'] ) { ?>
			<div class="main__speaker-content">
				<img src="<?= $version_main_speaker['content'] ?>" alt="">
			</div><!-- main__speaker-content -->
		<?php } ?>
		<div class="main__speaker-title">
			<?php if ( !$version_is_main_speaker_date ) { ?>
				<?php if ( $version_main_speaker['date'] ) { ?>
					<div class="main__speaker-date"><span>Live:</span>&nbsp;<?= $version_main_speaker['date'] ?></div>
				<?php } else { ?>
					<div class="main__speaker-base">
						<img src="img/speakers/icons/syn-icon.svg">
					</div>
				<?php } ?>
			<?php } ?>
			<div class="main__speaker-name xcondensed color-red" data-name><?= _("speakers-{$version_main_speaker['id']}-name") ?></div>
		</div><!-- main__speaker-title -->
		<div class="d-none">
			<div data-note><?= _("speakers-{$version_main_speaker['id']}-note") ?></div>
			<div data-info><?= _("speakers-{$version_main_speaker['id']}-info") ?></div>
		</div><!-- d-none -->
	</div><!-- main__speaker -->
<?php } ?>
{% endmacro %}


{% macro form(form_id) %}
<?php if ( $version_main_speaker['id'] ) { ?>
	{{ form_bottom(form_id) }}
	<?php if ($version == 'gbu') { ?>
		{{ form_counter() }}
	<?php } ?>
<?php } else { ?>
	{{ form_common(form_id) }}
<?php } ?>
{% endmacro %}


{% macro form_common(form_id) %}
<div class="main__form">
	{{ common_form.form( form_id, form_class='form_vertical' ) }}
</div><!-- main__form -->
{% endmacro %}


{% macro form_bottom(form_id) %}
<div class="main__bottom-form">
	{{ common_form.form( form_id, title="<?= _('main__form-title') ?>", button="<?= _('version_form_button_reg') ?>", button_class='color-red' ) }}
</div><!-- main__form -->
{% endmacro %}


{% macro form_counter() %}
<?php
$main_form_counter = 100;
$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
$main_form_counter_file_headers = @get_headers($main_form_counter_file);
if (strpos($main_form_counter_file_headers[0], '200') !== false) {
	$main_form_counter = file_get_contents($main_form_counter_file);
}
?>
<div class="main__form-counter condensed">
	<?php if ($main_form_counter > 0) { ?>
		<div class="text-center">
			<div class="main__form-counter-title color-red">Осталось</div>
			<?= $main_form_counter ?>
			<?= get_declination($main_form_counter, ['бесплатное место', 'бесплатных места', 'бесплатных мест']) ?>
		</div>
	<?php } else { ?>
		Бесплатные билеты закончились
	<?php } ?>
</div><!-- main__form-counter -->
{% endmacro %}


{% macro top50() %}
<div class="main__top50">
	<div class="main__top50-date"><?=$date?></div>
	<div class="main__top50-title"><img src="img/main/title_top50.svg" alt=""></div>
	<div class="main__top50-info xcondensed">
		<div class="main__top50-info-item">
			<div class="main__top50-info-num">1 </div> день
		</div><!-- main__top50-info-item -->
		<div class="main__top50-info-item">
			<div class="main__top50-info-num">2</div> тематики
		</div><!-- main__top50-info-item -->
		<div class="main__top50-info-item">
			<div class="main__top50-info-num">2</div> сцены
		</div><!-- main__top50-info-item -->
		<div class="main__top50-info-item">
			<div class="main__top50-info-num">25</div> выступлений
		</div><!-- main__top50-info-item -->
	</div><!-- main__top50-info -->
</div><!-- main__top50 -->
{% endmacro %}

{% macro bestpeformance() %}
<div class="main__best-performance">
	<div class="main__best-performance-date"><?=$date?></div>
	<div class="main__best-performance-title">
		<?php if ( $lang == 'en' ) { ?>
			<h1>best videos</h1>
			<h2>on Synergy.Online</h2>
		<?php } else { ?>
			<h1>Лучшие выступления</h1>
			<h2>на online-платформе</h2>
		<?php } ?>

	</div>
	<div class="main__best-performance-info xcondensed">
		<?php if ( $lang == 'en' ) { ?>
		<div class="main__best-performance-info-item">
			<div class="main__best-performance-info-num">1 </div> day
		</div><!-- main__best-performance-info-item -->
		<div class="main__best-performance-info-item">
			<div class="main__best-performance-info-num">2</div> topics
		</div><!-- main__best-performance-info-item -->
		<div class="main__best-performance-info-item">
			<div class="main__best-performance-info-num">2</div> stages
		</div><!-- main__best-performance-info-item -->
		<div class="main__best-performance-info-item">
			<div class="main__best-performance-info-num">25</div> videos
		</div><!-- main__best-performance-info-item -->
		<?php } else { ?>
		<div class="main__best-performance-info-item">
			<div class="main__best-performance-info-num">1 </div> день
		</div><!-- main__best-performance-info-item -->
		<div class="main__best-performance-info-item">
			<div class="main__best-performance-info-num">2</div> тематики
		</div><!-- main__best-performance-info-item -->
		<div class="main__best-performance-info-item">
			<div class="main__best-performance-info-num">2</div> сцены
		</div><!-- main__best-performance-info-item -->
		<div class="main__best-performance-info-item">
			<div class="main__best-performance-info-num">25</div> выступлений
		</div><!-- main__best-performance-info-item -->
		<?php } ?>
	</div><!-- main__best-performance-info -->
	<img class="main__best-performance-img" src="img/main/speakers.png" alt="">
</div><!-- main__best-performance -->
{% endmacro %}


{# Резерв #}

{% macro slogan() %}
<div class="main__slogan xcondensed color-red"><?= _('main__slogan') ?></div>
{% endmacro %}


{% macro features() %}
<div class="main__features xcondensed">
	<?php /* ?>
	<div class="main__features-item main__features-item_center"><span class="color-red">24/7/</span>365</div>
	<div class="main__features-item main__features-item_center"><span class="color-red">world</span>&nbsp;wide</div>
	<div class="main__features-item"><span class="color-red">10+&nbsp;сцен</span>&nbsp;с&nbsp;онлайн-<br>трансляцией</div>
	<?php */ ?>
	<div class="main__features-item"><?= _('main__features-item-1') ?></div>
	<div class="main__features-item"><?= _('main__features-item-2') ?></div>
	<div class="main__features-item"><?= _('main__features-item-3') ?></div>
</div><!-- main__features -->
{% endmacro %}


{% macro about() %}
<?php /* ?>
<div class="main__about xcondensed">
	<?php if ( time() < strtotime('04-10-2019 12:00:00') ) { ?>
		{{ timer | safe }}
	<?php } else { ?>
		<?= $version_main_about ?>
	<?php } ?>
</div><!-- main__about -->
<?php */ ?>

<a href="https://vimeo.com/364776866/0fc32d437b" class="d-md-none d-flex main__button main__button_video button fancybox fancybox.iframe condensed" data-fancybox-options="{wrapCSS: 'fancybox-theme-dark', width: 1057}">Видео о&nbsp;форуме</a>
<a href="#get-video" class="main__button button button_red d-md-none condensed scroll">Получить видеозаписи всех выступлений</a>
{% endmacro %}


{% macro timer() %}
<span class="main-final-countdown" id="main-final-countdown">
	<span class="main-final-countdown__title xcondensed">
		<span class="d-md-none">Старт<br> через</span>
		<span class="d-none d-md-inline">Осталось<br> до&nbsp;форума</span>
	</span>
	<span class="main-final-countdown__timer" id="main-final-countdown__timer"></span>
</span>
<span>200+<br> спикеров</span>
{% endmacro %}


{% macro marquee() %}
<div class="main__marquee d-none d-md-block" id="main__marquee" onclick="$('.tickets-card_online').trigger('click')">
	<?= $version_main_marquee ?>
</div><!-- main__marquee -->
{% endmacro %}


{% macro mobile_button(form_id) %}
<a href="#popup-main" class="main__mobile-button button button_red fancybox d-md-none" data-fancybox-options="{width: 600}">Купить видеозаписи</a>

<div class="d-none">
	<div class="popup-main popup" id="popup-main">
		{{ common_form.form(form_id, form_class='form_vertical') }}
	</div><!-- popup-callback -->
</div><!-- d-none -->
{% endmacro %}

{% macro button_scroll() %}
<a href="#price" class="main__button button button_red scroll">Зарегистрироваться</a>
{% endmacro %}
