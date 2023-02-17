<section class="footer lazy" id="footer">
	<div class="container">
		<div class="footer__top row">
			<div class="col-md-3">

				<div class="footer__logo">
					<img data-src="<?= $lang == 'ru' ? 'img/footer/logo.svg' : 'img/footer/logo_en.svg' ?>" class="lazy" alt="">
				</div><!-- footer__logo -->

			</div><!-- col -->
			<div class="col-md-6">

				<div class="footer__links">
					<div class="row">
						<div class="col">
							<div class="footer__links-item"><a href="#concept" class="footer__links-link scroll"><?= _('header__links-concept') ?></a></div>
							<div class="footer__links-item"><a href="#speakers" class="footer__links-link scroll"><?= _('header__links-speakers') ?></a></div>
							<div class="footer__links-item"><a href="#format" class="footer__links-link scroll"><?= _('header__links-format') ?></a></div>
						</div><!-- col -->

						<div class="col">
							<div class="footer__links-item"><a href="#partners" class="footer__links-link scroll"><?= _('header__links-partners') ?></a></div>
							<div class="footer__links-item"><a href="#online-plf" class="footer__links-link scroll"><?= _('header__links-online-plf') ?></a></div>
							<div class="footer__links-item footer__links-item_franchise"><a href="#franchise" class="footer__links-link scroll"><?= _('header__links-franchise') ?></a></div>
						</div><!-- col -->

						<div class="col">
							<div class="footer__links-item footer__links-item_press"><a href="#press" class="footer__links-link scroll"><?= _('header__links-press') ?></a></div>
							<?php if($lang == 'ru'): ?>
							<div class="footer__links-item"><a href="https://xn----7sbbajfhh4bkncjkhd0a7c6e.xn--p1ai/?utm_source=synergyglobal&utm_medium=link&utm_campaign=site" target="_blank" class="footer__links-link">ФРАНШИЗА Хабиба Нурмагомедова</a></div>
							<?php endif; ?>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- footer__links -->

			</div><!-- col -->
			<div class="col-md-3">

				<div class="footer__contacts">
					<div class="footer__contacts-phone"><?= $phone_link ?></div>
					<div class="footer__contacts-email"><?= $email_link ?></div>
				</div><!-- footer__contacts -->

			</div><!-- col -->
		</div><!-- row -->

		<div class="footer__bottom row no-gutters">
			<div class="footer__meta_1-col col-lg-auto">

				<div class="footer__meta footer__meta_1">
					<span class="footer__meta-copyright">&copy;&nbsp;1988-<?= date('Y') ?> <?= _('footer__meta-copyright') ?></span>
					<?php if($lang == 'en'): ?>
						<a href="files/privacy_en.pdf" target="_blank" data-fancybox class="footer__link-privacy"><?= _('footer__link-privacy') ?></a>
					<?php elseif($lang == 'tr'): ?>
						<a href="files/privacy_tr.pdf" target="_blank" data-fancybox class="footer__link-privacy"><?= _('footer__link-privacy') ?></a>
					<?php elseif($lang == 'pt'): ?>
						<a href="files/privacy_pt.pdf" target="_blank" data-fancybox class="footer__link-privacy"><?= _('footer__link-privacy') ?></a>
					<?php elseif($lang == 'es'): ?>
						<a href="files/privacy_es.pdf" target="_blank" data-fancybox class="footer__link-privacy"><?= _('footer__link-privacy') ?></a>
					<?php else: ?>
						<a href="#privacy" data-fancybox class="footer__link-privacy"><?= _('footer__link-privacy') ?></a>
					<?php endif; ?>
					<?php /* ?>
					<a href="https://synergy.ru/assets/upload/policy_payment.pdf" target="_blank" data-fancybox class="footer__link-payment">Политика безопасности</a>
					<a href="files/public-offer.pdf" target="_blank" data-fancybox class="footer__link-offer">Публичная оферта</a>
					<?php */ ?>
				</div><!-- footer__meta -->

			</div><!-- col -->
			<div class="footer__meta_2-col col-lg">

				<div class="footer__meta footer__meta_2"><?= _('footer__meta_2') ?> <a href="http://sydi.ru/?utm_source=synergyglobal" target="_blank" rel="_nofollow">Synergy Digital</a></div>

			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- footer -->