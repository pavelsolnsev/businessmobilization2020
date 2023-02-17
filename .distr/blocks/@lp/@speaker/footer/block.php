<section class="footer lazy" id="footer">
	<div class="container">
		<div class="footer__top row">
			<div class="col-md-3">

				<div class="footer__logo">
					<img alt="" class="lazy" src="<?= _('vujicic-img') ?>">
					<? //= picture('img/@lp/@speaker/header/synergy-online.svg', 'lazy') ?>
				</div><!-- footer__logo -->

			</div><!-- col -->
			<div class="col-md-6">

				<div class="footer__links">
					<div class="row">
						<div class="col">
							<div class="footer__links-item"><a href="#themes" class="footer__links-link scroll"><?= _('header_1-vujicic') ?></a></div>
							<div class="footer__links-item"><a href="#about" class="footer__links-link scroll"><?= _('header_2-vujicic') ?></a></div>
							<div class="footer__links-item"><a href="#platform" class="footer__links-link scroll"><?= _('header_3-vujicic') ?></a></div>
						</div><!-- col -->

						<div class="col">
							<div class="footer__links-item"><a href="#organizer" class="footer__links-link scroll"><?= _('header_4-vujicic') ?></a></div>
							<div class="footer__links-item"><a href="#faq" class="footer__links-link scroll"><?= _('header_5-vujicic') ?></a></div>
						</div><!-- col -->

						<div class="col">
							<div class="footer__links-item footer__links-item_press"><a href="#press" class="footer__links-link scroll"><?= _('footer__links-press') ?></a></div>
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
					<a href="#privacy" class="footer__link-privacy" data-fancybox data-type="ajax"><?= _('footer__link-privacy') ?></a>
					<?php /* ?>
					<a href="https://synergy.ru/assets/upload/policy_payment.pdf" target="_blank" class="footer__link-payment fancybox fancybox.iframe">Политика безопасности</a>
					<a href="/files/public-offer.pdf" class="footer__link-offer fancybox fancybox.iframe">Публичная оферта</a>
					<?php */ ?>
				</div><!-- footer__meta -->

			</div><!-- col -->
			<div class="footer__meta_2-col col-lg">

				<div class="footer__meta footer__meta_2"><?= _('footer__meta_2') ?> <a href="http://sydi.ru/?utm_source=synergyglobal" target="_blank" rel="_nofollow">Synergy Digital</a></div>

			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- footer -->