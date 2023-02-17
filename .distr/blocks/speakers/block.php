{% from './data.php' import data as speakers %}
{% from './data_en.php' import data as speakers_en %}
{% import './macro.php' as macro_speakers %}

<section class="speakers" id="speakers">
	<div class="container">
		<div class="speakers__title title"><?= _('speakers__title') ?></div>
		<?php if ( _('speakers__subtitle') ) { ?>
			<div class="speakers__subtitle"><?= _('speakers__subtitle') ?></div>
		<?php } ?>
		<div class="row speakers__row" data-speakers-params="{ default: <?= $version_speakers_default_num ?>, visible: <?= $version_speakers_visible_num ?> }">

			{# Если есть главный спикер (уже выводится в блоке main), исключаем его из общего списка #}
			<?php if ( $version_main_speaker['id'] ) { $version_speakers_exclude[] = $version_main_speaker['id']; } ?>

			<?php if ( $lang == 'ru' ) { ?>

				{{ macro_speakers.list(speakers) }}

			<?php } else { ?>

				{{ macro_speakers.list(speakers_en) }}

			<?php }  ?>

		</div><!-- row -->

		<div class="speakers__link-more button">
			<i class="speakers__link-more-icon speakers__link-more-icon_1"></i>
			<i class="speakers__link-more-icon speakers__link-more-icon_2"></i>
			<i class="speakers__link-more-icon speakers__link-more-icon_3"></i>
			<?= _('speakers__link-more') ?>
		</div><!-- speakers__link-more -->

	</div><!-- container -->
</section><!-- speakers -->
