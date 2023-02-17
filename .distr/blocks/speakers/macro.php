{% macro list(array) %}
{% set index = 1 %} {# Индекс для чередования чётных и нечётных карточек #}
{% for item in array %}
{% set index = loop.index %}
<?php
$speaker_is_headliner = false; /* По умолчанию никто не хедлайнер */
$speaker_is_base = false; /* По умолчанию никто не спикер Базы знаний */

/* Флаг, если хедлайнер определён в version.php */
if ( $version_is_headliner && ($get_version == '{{ item.id }}' || strpos($body_class, '{{ item.id }}') !== false) ) { $speaker_is_headliner = true; }

{% if item.headliner %}
/* Флаг, если хедлайнер определён в data.njk и нет хедлайнера версии */
if ( !$version_is_headliner || $version_is_multi_headliners ) { $speaker_is_headliner = true; }
{% endif %}

{% if item.version %}
/* Если у спикера указана конкреная версия, то выводим его только на версии, иначе - исключаем из списка */
if ( $get_version != '{{ item.version }}' ) { $version_speakers_exclude[] = '{{ item.id }}'; }
{% endif %}

{% if item.date %}
/* Флаг, если у спикера есть дата выступления и она прошла */
if ( strtotime( '{{ item.date | safe }}.' . date('Y') ) < time() ) {
	$speaker_is_base = true;
}
{% else %}
/* Флаг, если у спикера нет даты выступления */
$speaker_is_base = true;
{% endif %}
?>

<?php /* Спикер показывается, если его нет в списке исключений и есть ключ его имени в массиве словаря $_ */ ?>
<?php if( !in_array('{{ item.id }}', $version_speakers_exclude) && _('speakers-{{ item.id }}-name') ) { ?>
	<div class="<?= $speaker_is_headliner ? 'col-12' : 'col-6 col-md-4' ?> speakers-card__col <?= $speaker_is_headliner ? 'speakers-card__col_headliner' : '' ?> speakers-{{ item.id }}" data-version="version-{{ item.id }}">
		<div href="#popup-speakers" class="speakers-card lazy" <?= _('speakers-{{ item.id }}-info') ? 'data-fancybox' : ''  ?> data-options='{"baseClass": "fancybox-theme-dark"}' data-speaker="{{ item.id }}">
			<div class="speakers-card__image {{ 'speakers-card__image_odd' if index % 2 }}" data-image>
				<div class="speakers-card__date <?= $speaker_is_base ? 'speakers-card__date_base' : '' ?>">
					<?php if ( !$speaker_is_base ) { ?>
						<?php if ( $lang != 'tr' ) { ?>
						<span>Live:</span>
						<?php } else { ?>
						<span>CANLI:</span>
						<?php } ?>
						{{ item.date | safe }}
					<?php } ?>
				</div>
				<?php if ( $speaker_is_headliner ) { ?>
					<?= picture("img/speakers/card/{{ item.id }}{{ '_big' if item.photo_big and item.headliner }}.png", "lazy") ?>
				<?php } else { ?>
					<?= picture("img/speakers/card/{{ item.id }}.png", "lazy") ?>
				<?php } ?>
			</div>
			<div class="speakers-card__text">
				<?php if ( $speaker_is_headliner ) { ?>
					<div class="speakers-card__role condensed"><?= _('speakers-card__role-headliner') ?></div>
				<?php } ?>
				<div class="speakers-card__name condensed" data-name><?= _('speakers-{{ item.id }}-name') ?? '' ?></div>
				<div class="speakers-card__note" data-note><?= _('speakers-{{ item.id }}-note') ?? '' ?></div>
				<div class="speakers-card__info" data-info><?= _('speakers-{{ item.id }}-info') ?? '' ?></div>
				{% if item.logo %}<div class="speakers-card__logo"><?= picture("img/speakers/logo/{{ item.logo }}.png", "lazy") ?></div>{% endif %}
			</div><!-- speakers-card__text -->
		</div><!-- speakers-card -->
	</div><!-- col -->
<?php }  ?>
{% endfor %}

{% set index = index + 1 %}
<div class="col-6 col-md-4 speakers-nospeaker">
	<a href="#popup-speakers-offer" class="speakers-card nospeaker" data-fancybox data-options='{"baseClass": "fancybox-theme-dark"}' data-speaker="nospeaker">
		<div class="speakers-card__image {{ 'speakers-card__image_odd' if index % 2 }}" data-image>
			<img src="img/speakers/card/nospeaker.png" alt="">
		</div>
		<div class="speakers-card__text">
			<div class="speakers-card__name condensed" data-name><?= _('speakers-card-nospeaker__name') ?></div>
			<div class="speakers-card__button button button_red condensed"><?= _('speakers-card-nospeaker__button') ?></div>
		</div><!-- speakers-card__text -->
	</a><!-- speakers-card -->
</div><!-- col -->
{% endmacro %}
