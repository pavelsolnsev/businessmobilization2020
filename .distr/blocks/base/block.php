<section class="base" id="base">
	<div class="container">

		<div class="base__title title"><?= _('base__title') ?></div>

		<div class="base__text"><?= _('base__text') ?></div>

		<div class="base__features">
			<div class="row">
				<div class="col-12 base__features-fl">
					<div class="base__col">
						<div class="base__col-item"><?= _('base__col-item-1') ?></div>
						<div class="base__col-item"><?= _('base__col-item-2') ?></div>
						<div class="base__col-item"><?= _('base__col-item-3') ?></div>
					</div>
					<div class="base__col">
						<img src="img/base/center-img.png" alt="">
					</div>
					<div class="base__col">
						<div class="base__col-item"><?= _('base__col-item-4') ?></div>
						<div class="base__col-item"><?= _('base__col-item-5') ?></div>
						<div class="base__col-item"><?= _('base__col-item-6') ?></div>
					</div>
				</div>
			</div><!-- row -->
		</div><!-- base__features -->

		<div class="form-horizontal lazy">
			<?php if ($version == 'blogger') { ?>
				{{ form.form( 'base',add_fields=[{name: 'promocode', placeholder: 'Промокод', required: 'required',value: '<?=$promocode?>'}] ) }}
			<?php } else { ?>
				{{ form.form( 'base' )}}
			<?php } ?>
		</div>

	</div><!-- container -->
</section><!-- base -->