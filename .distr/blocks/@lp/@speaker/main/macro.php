{% import 'form/macro.php' as common_form %}
{% import 'main/macro.php' as common_main %}


{% macro inner(form_id) %}
<div class="container main__container">

	<?php if ( $version_main_speaker['id'] ) { ?>

		<div class="row">
			<div class="col-md-6 main__col-1">
				{{ title() }}
			</div><!-- col -->
			<div class="col-md-6 main__col-2">
				{{ common_main.speaker() }}
			</div><!-- col -->
		</div><!-- row -->
		{{ common_main.form(form_id) }}

	<?php } ?>

</div><!-- container -->
{% endmacro %}


{% macro title() %}
<div class="main__title">
	<div class="main__title-speaker-date"><?= $lang == 'ru' ? date_ru( $version_main_speaker['date'] . '.' . date('Y') ) : date( 'F j',  strtotime($version_main_speaker['date'] . '.' . date('Y') ) ) ?> <?= $version_main_speaker['time'] ?></div>
	<?php if ( _('main__subtitle') ) { ?>
		<div class="main__title-speaker-note xcondensed"><?= _('main__subtitle') ?></div>
	<?php } ?>
	<div class="main__title-speaker-name xcondensed">
		<?php if ( _('main__title-speaker-name') ) { ?>
			<?= _('main__title-speaker-name') ?>
		<?php } else { ?>
			<?= _("speakers-{$version_main_speaker['id']}-name") ?>
		<?php } ?>
	</div>
	<div class="main__title-speaker-note xcondensed"><?= _('main__title') ?></div>
</div><!-- main__title -->
{% endmacro %}
