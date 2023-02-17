{% from './data_ru.php' import data as speakers_ru %}
{% from './data_en.php' import data as speakers_en %}


<section class="speakers" id="speakers">
	<div class="container">
		<div class="speakers__title title">Учитесь у лучших спикеров</div>
		<div class="row speakers__row" data-more-options="{target:'.speakers-card__col', init:<?= $version_speakers_init_num ?>, desktop:<?= $version_speakers_desktop_num ?>, mobile:<?= $version_speakers_mobile_num ?>}">

			<?php if ( $lang == 'ru' ) { ?>

				{% set index = 1 %}
				{% for item in speakers_ru %}
				{% set index = loop.index %}
				<?php
				/* По умолчанию никто не хедлайнер */
				$speaker_is_headliner = false;
				/* Флаг, если хедлайнер определён в version.php */
				if ($version_is_headliner && $version == '{{ item.id }}') { $speaker_is_headliner = true; }
				{% if item.headliner %}
				/* Флаг, если хедлайнер определён в data.njk и нет хедлайнера версии */
				if ( !$version_is_headliner || $version_is_multi_headliners ) { $speaker_is_headliner = true; }
				{% endif %}
				?>

				<?php if( !in_array('{{ item.id }}', $version_speakers_exclude)) { ?>
					<div class="<?= $speaker_is_headliner ? 'col-12' : 'col-6 col-md-4' ?> speakers-card__col <?= $speaker_is_headliner ? 'speakers-card__col_headliner' : '' ?> speakers-{{ item.id }}" data-version="version-{{ item.id }}">
						<div href="#popup-speakers" class="speakers-card lazy" {{ 'data-fancybox' if item.info }} data-options='{"baseClass": "fancybox-theme-dark"}' data-speaker="{{ item.id }}">
							<div class="speakers-card__image {{ 'speakers-card__image_odd' if index % 2 }}" data-image>
								<?= picture("img/@lp/@platform/speakers/card/{{ item.id }}.png", "lazy") ?>
							</div>
							<div class="speakers-card__text">
								<?php if ( $speaker_is_headliner ) { ?>
									<div class="speakers-card__role condensed"><?= _('speakers-card__role-headliner') ?></div>
								<?php } ?>
								<div class="speakers-card__name condensed" data-name>{{ item.name | safe }}</div>
								<div class="speakers-card__note" data-note>{{ item.note | safe }}</div>
								<div class="speakers-card__info" data-info>{{ item.info | safe }}</div>
								<div class="speakers-card__button"><?= _('speakers-card__button') ?></div>
								<!-- {% if item.logo %}<div class="speakers-card__logo"><?= picture("img/@lp/@platform/speakers/logo/{{ item.logo }}.jpg", "lazy") ?></div>{% endif %} -->
							</div><!-- speakers-card__text -->
						</div><!-- speakers-card -->
					</div><!-- col -->
				<?php }  ?>
				{% endfor %}

			<?php } else { ?>

				{% set index = 1 %}
				{% for item in speakers_en %}
				{% set index = loop.index %}
				<?php
				/* По умолчанию никто не хедлайнер */
				$speaker_is_headliner = false;
				/* Флаг, если хедлайнер определён в version.php */
				if ($version_is_headliner && $version == '{{ item.id }}') { $speaker_is_headliner = true; }
				{% if item.headliner %}
				/* Флаг, если хедлайнер определён в data.njk и нет хедлайнера версии */
				if ( !$version_is_headliner || $version_is_multi_headliners ) { $speaker_is_headliner = true; }
				{% endif %}
				?>

				<?php if( !in_array('{{ item.id }}', $version_speakers_exclude)) { ?>
					<div class="<?= $speaker_is_headliner ? 'col-12' : 'col-6 col-md-4' ?> speakers-card__col <?= $speaker_is_headliner ? 'speakers-card__col_headliner' : '' ?> speakers-{{ item.id }}" data-version="version-{{ item.id }}">
						<div href="#popup-speakers" class="speakers-card lazy" {{ 'data-fancybox' if item.info }} data-options='{"baseClass": "fancybox-theme-dark"}' data-speaker="{{ item.id }}">
							<div class="speakers-card__image {{ 'speakers-card__image_odd' if index % 2 }}" data-image>
								<?= picture("img/@lp/@platform/speakers/card/{{ item.id }}.jpg", "lazy") ?>
							</div>
							<div class="speakers-card__text">
								<?php if ( $speaker_is_headliner ) { ?>
									<div class="speakers-card__role condensed"><?= _('speakers-card__role-headliner') ?></div>
								<?php } ?>
								<div class="speakers-card__name condensed" data-name>{{ item.name | safe }}</div>
								<div class="speakers-card__note" data-note>{{ item.note | safe }}</div>
								<div class="speakers-card__info" data-info>{{ item.info | safe }}</div>
								<div class="speakers-card__button"><?= _('speakers-card__button') ?></div>
								<!-- {% if item.logo %}<div class="speakers-card__logo"><?= picture("img/@lp/@platform/speakers/logo/{{ item.logo }}.jpg", "lazy") ?></div>{% endif %} -->
							</div><!-- speakers-card__text -->
						</div><!-- speakers-card -->
					</div><!-- col -->
				<?php }  ?>
				{% endfor %}

			<?php } ?>

			{% set index = index + 1 %}
			<div class="col-6 col-md-4 speakers-nospeaker">
				<a href="#popup-speakers-offer" class="speakers-card nospeaker" data-fancybox data-options='{"baseClass": "fancybox-theme-dark"}' data-speaker="nospeaker">
					<div class="speakers-card__image {{ 'speakers-card__image_odd' if index % 2 }}" data-image>
						<img src="img/@lp/@platform/speakers/card/nospeaker.png" alt="">
					</div>
					<div class="speakers-card__text">
						<div class="speakers-card__name condensed" data-name><?= _('speakers-card-nospeaker__name') ?></div>
						<div class="speakers-card__button button button_red condensed"><?= _('speakers-card-nospeaker__button') ?></div>
					</div><!-- speakers-card__text -->
				</a><!-- speakers-card -->
			</div><!-- col -->

		</div><!-- row -->

		<div class="speakers__link-more button" data-more-button>
			<i class="speakers__link-more-icon speakers__link-more-icon_1"></i>
			<i class="speakers__link-more-icon speakers__link-more-icon_2"></i>
			<i class="speakers__link-more-icon speakers__link-more-icon_3"></i>
			<?= _('speakers__link-more') ?>
		</div><!-- speakers__link-more -->

	</div><!-- container -->
</section><!-- speakers -->
