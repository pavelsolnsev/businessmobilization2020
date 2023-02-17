{% from './data.njk' import data as speakers %}

<section class="speakers" id="speakers">
	<div class="container">
		<div class="speakers__title title">Спикеры форума</div>
		<div class="row speakers__row" data-more-options="{target:'.speakers-card__col', init:<?= $version_speakers_init_num ?>, desktop:<?= $version_speakers_desktop_num ?>, mobile:<?= $version_speakers_mobile_num ?>}">

			{% set index = 1 %}
			{% for item in speakers %}
			{% set index = loop.index %}
			<div class="col-6 col-md-4 <?= $version_is_headliner && $version == '{{ item.id }}' ? 'col-lg-12' : '' ?> speakers-card__col <?= $version_is_headliner && $version == '{{ item.id }}' ? 'speakers-card__col_headliner' : '' ?> speakers-{{ item.id }}" data-version="version-{{ item.id }}">
				<a href="#popup-speakers" class="speakers-card" data-options='{"baseClass": "fancybox-theme-dark"}' data-speaker="{{ item.id }}">
					<div class="speakers-card__image {{ 'speakers-card__image_odd' if index % 2 }}" data-image>
						<img src="img/speakers/card/{{ item.id }}.png" alt="">
					</div>
					<div class="speakers-card__text">
						<?php if ( $version_is_headliner && $version == '{{ item.id }}' ) { ?>
						<div class="speakers-card__role condensed">Хэдлайнер</div>
						<?php } ?>
						<div class="speakers-card__name condensed" data-name>{{ item.name | safe }}</div>
						<div class="speakers-card__note" data-note>{{ item.note | safe }}</div>
						<div class="speakers-card__info" data-info>{{ item.info | safe }}</div>
						{% if item.logo %}<div class="speakers-card__logo"><?= picture("img/speakers/logo/{{ item.logo }}.png") ?></div>{% endif %}
					</div><!-- speakers-card__text -->
				</a><!-- speakers-card -->
			</div><!-- col -->
			{% endfor %}

			{% set index = index + 1 %}
			<div class="col-6 col-md-4 speakers-card__col speakers-nospeaker">
				<a href="#popup-speakers-offer" data-fancybox class="speakers-card" data-options='{"baseClass": "fancybox-theme-dark"}' data-speaker="nospeaker">
					<div class="speakers-card__image {{ 'speakers-card__image_odd' if index % 2 }}" data-image>
						<img src="img/speakers/card/nospeaker.png" alt="">
					</div>
					<div class="speakers-card__text">
						<div class="speakers-card__name condensed" data-name>Панель спикеров продолжает формироваться</div>
						<div class="speakers-card__button button button_red condensed">Стать спикером</div>
					</div><!-- speakers-card__text -->
				</a><!-- speakers-card -->
			</div><!-- col -->

		</div><!-- row -->

		<div class="speakers__link-more button" data-more-button>
			<i class="speakers__link-more-icon speakers__link-more-icon_1"></i>
			<i class="speakers__link-more-icon speakers__link-more-icon_2"></i>
			<i class="speakers__link-more-icon speakers__link-more-icon_3"></i>
			Показать больше спикеров
		</div><!-- speakers__link-more -->

	</div><!-- container -->
</section><!-- speakers -->
