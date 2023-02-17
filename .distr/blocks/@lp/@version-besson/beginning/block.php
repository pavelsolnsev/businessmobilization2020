<section class="beginning" id="beginning">

	<div class="container-fluid">

		<div class="row beginning__content">
			<div class="beginning__text">
				<div class="beginning__img"><?= picture('img/@lp/@version-besson/beginning/big_img_4.png', 'lazy') ?></div>
				<div class="beginning__text--title">
					<h2 class="beginning__title xcondensed color-blue"><?= _('beginning__besson_title') ?></h2>
					<?php if ($lang == 'en'): ?>
						<div class="beginning__text--img"><?= picture('img/@lp/@version-besson/beginning/dolphin-eng.png', 'lazy') ?></div>
					<?php else: ?>
						<div class="beginning__text--img"><?= picture('img/@lp/@version-besson/beginning/dolphin.png', 'lazy') ?></div>
					<?php endif; ?>
				</div>
				<div class="beginning__subtitle xcondensed"><?= _('beginning__besson_subtitle') ?></div>
				<div class="beginning__text--box">
					<p><?= _('beginning__besson_text_box-1') ?></p>
					<p><?= _('beginning__besson_text_box-2') ?></p>
				</div>
			</div>
		</div>

	</div>

	<div class="blockquote">
		<div class="blockquote__img blockquote__img--bottom--left"><?= picture('img/@lp/@version-besson/beginning/img_4_left.png', 'lazy') ?></div>
		<div class="blockquote__img blockquote__img--bottom--right"><?= picture('img/@lp/@version-besson/beginning/img_4_right.png', 'lazy') ?></div>
		<div class="container">
			<div class="blockquote__text">
				<p class="subtext"><?= _('beginning__besson_blockquote_subtext') ?></p>
				<p><?= _('beginning__besson_blockquote_text') ?></p>
			</div>
		</div>
	</div>

	<div class="container-fluid">

		<div class="row beginning__content beginning__content--bottom">
			<div class="beginning__text beginning__text--bottom">
				<p><?= _('beginning__besson_content_text') ?></p>
			</div>
		</div>

	</div>

</section><!-- beginning -->
