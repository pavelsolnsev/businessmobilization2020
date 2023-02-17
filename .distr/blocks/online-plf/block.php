<section class="online-plf" id="online-plf">
	<div class="container">

		<div class="online-plf__box">
			<div class="online-plf__title title"><?= _('online-plf__title') ?></div>
			<div class="row">
				<div class="col-md-7">
					<div class="online-plf__text d-none d-md-block"><?= _('online-plf__text') ?></div>
					<div class="online-plf__text d-md-none"><?= _('online-plf__text_mob') ?></div>
				</div><!-- col -->
				<div class="col-md-5">
					<ul class="online-plf__list">
						<li class="online-plf__list-item"><?= _('online-plf__list-item-1') ?></li>
						<li class="online-plf__list-item"><?= _('online-plf__list-item-2') ?></li>
						<li class="online-plf__list-item"><?= _('online-plf__list-item-3') ?></li>
						<li class="online-plf__list-item"><?= _('online-plf__list-item-4') ?></li>
						<li class="online-plf__list-item"><?= _('online-plf__list-item-5') ?></li>
						<li class="online-plf__list-item"><?= _('online-plf__list-item-6') ?></li>
					</ul>
				</div><!-- col -->
			</div><!-- row -->
			<a href="#" class="online-plf__button button button_red condensed">Перейти в&nbsp;онлайн платформу</a>
		</div><!-- online-plf__box -->
		<?php if($lang == 'en'): ?>
			<div class="online-plf__bottom"><?= picture('img/online-plf/tablet-en.png', 'lazy') ?></div>
		<?php elseif($lang == 'tr'): ?>
			<div class="online-plf__bottom"><?= picture('img/online-plf/tablet-tr.jpg', 'lazy') ?></div>
		<?php else: ?>
			<div class="online-plf__bottom"><?= picture('img/online-plf/tablet.png', 'lazy') ?></div>
		<?php endif; ?>
	</div><!-- container -->
</section><!-- online-plf -->
