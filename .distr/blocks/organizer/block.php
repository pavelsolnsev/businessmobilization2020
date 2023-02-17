<section class="organizer lazy" id="organizer">
	<div class="container">

		<div class="row">
			<div class="col-lg-6">
				<div class="organizer__title title"><?= _('organizer__title') ?></div>
				<div class="organizer__logo"><img data-src="<?= $lang == 'ru' ? 'img/organizer/logo.svg' : 'img/organizer/logo-eng.svg' ?>" alt="" class="lazy"></div>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="organizer__text"><?= _('organizer__text') ?></div>
			</div><!-- col -->
		</div><!-- row -->

		<div class="organizer__info">
			<div class="row">
				<div class="col-6 col-lg organizer__info-col organizer__info-col_1">
					<div class="organizer__info-num condensed"><?= _('organizer__info-num-1') ?></div>
					<?= _('organizer__info-1') ?>
				</div><!-- col -->
				<div class="col-6 col-lg organizer__info-col organizer__info-col_2">
					<div class="organizer__info-num condensed"><?= _('organizer__info-num-2') ?></div>
					<?= _('organizer__info-2') ?>
				</div><!-- col -->
				<div class="col-6 col-lg organizer__info-col organizer__info-col_3">
					<div class="organizer__info-num condensed"><?= _('organizer__info-num-3') ?></div>
					<?= _('organizer__info-3') ?>
				</div><!-- col -->
				<div class="col-6 col-lg organizer__info-col organizer__info-col_4">
					<div class="organizer__info-num condensed"><?= _('organizer__info-num-4') ?></div>
					<?= _('organizer__info-4') ?>
				</div><!-- col -->

				<?php if ( $lang == 'en' || $lang == 'tr' ) { ?>
				<div class="col-6 col-lg organizer__info-col organizer__info-col_5">
					<div class="organizer__info-num condensed"><?= _('organizer__info-num-5') ?></div>
					<?= _('organizer__info-5') ?>
				</div><!-- col -->
				<?php } ?>
			</div><!-- row -->
		</div><!-- organizer-info -->

	</div><!-- container -->
</section><!-- organizer -->

<?php if ( $lang != 'en' && $lang != 'tr' ) { ?>
	{% include 'franchise/block.php' %}
<?php } ?>