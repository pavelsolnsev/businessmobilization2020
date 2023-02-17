{% from './data.php' import infopartners as infopartners, partners as partners %}

<section class="partners" id="partners">
	<div class="container">

		<div class="partners__title title"><?= _('partners__title-forum') ?></div>

		<?php /* ?>
		<div class="partners__title partners__title_sm title">Технологический партнер</div>
		<div class="partners__tech">
			<div class="partners-card__tech">
				<a target="_blank">
					<?= picture("img/partners/megafon.png", "lazy") ?>
				</a>
			</div>
		</div>
		<?php */ ?>

		<?php /* ?>
		<div class="partners__title partners__title_sm title"><?= _('partners__title-general-digital') ?></div>
		<div class="partners__fitness">
			<div class="partners-card__fitness">
				<a href="https://mediakit.iportal.ru" target="_blank">
					<?= picture("img/partners/mediakit.png", "lazy") ?>
				</a>
			</div><!-- partners-card__fitness -->
		</div><!-- partners__fitness -->
		<?php */ ?>

		<div class="row justify-content-center">
			<?php /* ?>
			<div class="col-md-6">

				<div class="partners__item">
					<div class="partners__title partners__title_sm title"><?= _('partners__title-technological') ?></div>
					<div class="partners__item-box">
						<?php if ( $lang != 'en' ) { ?>
							<a href="https://hyperpc.ru/lumen/promo?utm_source=synergy&utm_medium=cpc&utm_campaign=20200413" target="_blank">
						<?php }  ?>
							<?= picture("img/partners/hyperpc.png", "lazy") ?>
						<?php if ( $lang != 'en' ) { ?>
							</a>
						<?php }  ?>
					</div><!-- partners__item-box -->
				</div><!-- partners__item -->

			</div><!-- col -->
			<?php */ ?>
			<?php if ( $lang != 'en' ) { ?>
			<div class="col-md-6">

				<div class="partners__item">
					<div class="partners__title partners__title_sm title"><?= _('partners__title-general-forum') ?></div>
					<div class="partners__item-box">
						<a href="https://krasnayapolyanaresort.ru" target="_blank"><?= picture("img/partners/krasnayapolyana.png", "lazy") ?></a>
					</div><!-- partners__item-box -->
				</div><!-- partners__item -->

			</div><!-- col -->
			<div class="col-md-6">

				<div class="partners__item">
					<div class="partners__title partners__title_sm title"><?= _('partners__title-digital') ?></div>
					<div class="partners__item-box">
						<a href="https://distant.megafon.ru/?utm_source=123&utm_medium=123&utm_campaign=synergy" target="_blank"><?= picture($lang == 'ru' ? "img/partners/megafon.png" : "img/partners/megafon-en.png", "lazy") ?></a>
					</div><!-- partners__item-box -->
				</div><!-- partners__item -->

			</div><!-- col -->
			<?php }  ?>
		</div><!-- row -->

		<div class="row justify-content-center">
			<?php if ( $lang != 'en' ) { ?>

			<div class="col-md-6">

				<div class="partners__item">
					<div class="partners__title partners__title_sm title"><?= _('partners__title-fitness') ?></div>
					<div class="partners__item-box">
						<div>
							<?= picture("img/partners/smt.png", "lazy") ?>
						</div>
					</div><!-- partners__item-box -->
				</div><!-- partners__item -->

			</div><!-- col -->

			<div class="col-md-6">

				<div class="partners__item">
					<div class="partners__title partners__title_sm title"><?= _('partners__title-vradio') ?></div>
					<div class="partners__item-box">
						<a href="https://gkvr.ru/" target="_blank">
							<?= picture( "img/partners/select-radio.jpg" , "lazy") ?>
						</a>
					</div><!-- partners__item-box -->
				</div><!-- partners__item -->

			</div><!-- col -->
			
			<?php }  ?>
		</div><!-- row -->

		
		<div class="row justify-content-center">
			<?php if ( $lang != 'en' ) { ?>

				<div class="col-md-6">

					<div class="partners__item">
						<div class="partners__title partners__title_sm title"><?= _('partners__title-sdek') ?></div>
						<div class="partners__item-box">
							<a href="https://www.cdek.ru/ru" target="_blank">
								<?= picture( "img/partners/sdek.png" , "lazy") ?>
							</a>
						</div><!-- partners__item-box -->
					</div><!-- partners__item -->

				</div><!-- col -->
				
			<?php }  ?>
		</div><!-- row -->

		<div class="partners__title partners__title_sm title"><?= _('partners__title-information') ?></div>
		<div class="partners__carousel partners__carousel_1 swiper-container">
			<div class="partners__carousel-wrapper swiper-wrapper">
				{% for item in infopartners %}
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '{{ item.en }}' : '{{ item.ru }}' ;

				if ( $is_partners_card ) { ?>
					<div class="partners-card swiper-slide">
						<div class="partners-card__inner">
						<?php if ( $lang != 'en' ) { ?>
							{% if item.href %}<a href="{{ item.href }}" target="_blank">{% endif %}
						<?php }  ?>
							<?= picture("img/partners/{{ item.image }}", "lazy") ?>
						<?php if ( $lang != 'en' ) { ?>
							{% if item.href %}</a>{% endif %}
						<?php }  ?>
						</div><!-- partners-inner -->
					</div><!-- partners-card -->
				<?php } ?>
				{% endfor %}
			</div><!-- partners__carousel-wrapper -->
			<div class="swiper-nav">
				<div class="swiper-prev"><img src="img/partners/arrow-left.svg" class="lazy" alt=""></div>
				<div class="swiper-pagination"></div>
				<div class="swiper-next"><img src="img/partners/arrow-right.svg" class="lazy" alt=""></div>
			</div><!-- swiper-nav -->
		</div><!-- partners__carousel -->

		<div class="partners__title partners__title_sm title"><?= _('partners__title-partners') ?></div>
		<div class="partners__carousel swiper-container">
			<div class="partners__carousel-wrapper swiper-wrapper">
				{% for item in partners %}
				<?php
				$is_partners_card = ( $lang == 'en' ) ? '{{ item.en }}' : '{{ item.ru }}';

				if ( $is_partners_card ) { ?>
					<div class="partners-card swiper-slide">
						<div class="partners-card__inner">
						<?php if ( $lang != 'en' ) { ?>
							{% if item.href %}<a href="{{ item.href }}" target="_blank">{% endif %}
						<?php }  ?>
								<?= picture("img/partners/{{ item.image }}", "lazy") ?>
						<?php if ( $lang != 'en' ) { ?>
							{% if item.href %}</a>{% endif %}
						<?php }  ?>
						</div><!-- partners-inner -->
					</div><!-- partners-card -->
				<?php } ?>
				{% endfor %}
			</div><!-- partners__carousel-wrapper -->
			<div class="swiper-nav">
				<div class="swiper-prev"><img src="img/partners/arrow-left.svg" class="lazy" alt=""></div>
				<div class="swiper-pagination"></div>
				<div class="swiper-next"><img src="img/partners/arrow-right.svg" class="lazy" alt=""></div>
			</div><!-- swiper-nav -->
		</div><!-- partners__carousel -->

		<div class="partners__buttons condensed">
			<a href="#popup-partners" data-form="partner" class="partners__button button button_red" data-fancybox data-options='{"baseClass": "fancybox-theme-dark"}'><?= _('partners__button-partner') ?></a>
			<a href="#popup-accreditation" data-form="accreditation" class="partners__button button button_blue" data-fancybox data-options='{"baseClass": "fancybox-theme-dark"}'><?= _('partners__button-accreditation') ?></a>
		</div><!-- partners__buttons -->

	</div><!-- container -->
</section><!-- partners -->
