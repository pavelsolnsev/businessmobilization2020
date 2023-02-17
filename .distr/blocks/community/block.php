<section class="community lazy" id="community">
	<div class="container">

		<div class="community__box">
			<div class="community__title title"><?= _('community__title') ?></div>
			<div class="row">
				<div class="col-lg-6 col-xl-5">
					<div class="community__text">
						<?= _('community__text') ?>
					</div><!-- community__text -->
				</div><!-- col -->
				<div class="col-lg-6 col-xl-7">
					<div class="community__features">
						<?= _('community__features') ?>
					</div><!-- community__features -->
				</div><!-- col -->
			</div><!-- row -->
			<?php if ( $lang != 'en' && $lang != 'tr' ) { ?>
			<a href="https://synergy.online" target="_blank" class="community__button community__button_1 button button_red condensed"><?= _('community__button') ?></a>
			<?php } ?>
		</div><!-- community__box -->

		<div class="row">
			<div class="col-12 col-md-4">
				<div class="community__item community__item_1 condensed lazy"><?= _('community__item_1') ?></div>
			</div><!-- col -->
			<div class="col-12 col-md-4">
				<div class="community__item community__item_2 condensed lazy"><?= _('community__item_2') ?></div>
			</div><!-- col -->
			<div class="col-12 col-md-4">
				<div class="community__item community__item_3 condensed lazy"><?= _('community__item_3') ?></div>
			</div><!-- col -->
		</div><!-- row -->
		<?php if ( $lang != 'en' && $lang != 'tr' ) { ?>
		<a href="https://synergy.online" target="_blank" class="community__button community__button_2 button button_red condensed"><?= _('community__button') ?></a>
		<?php } ?>



	</div><!-- container -->
</section><!-- community -->
