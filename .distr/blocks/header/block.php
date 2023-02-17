{# Блок разделён на составные блоки для его экстенда в других блоках #}
{% block header %}
<section class="header" id="header">
	{% block header_top %}
	<div class="header__top">
		<div class="container">
			<div class="header__row header__row_1 row no-gutters">

				<div class="header__logo-col col align-self-center">

					<div class="header__logo">
						{% block header_logo %}
						{% set regExp = r/page-main/g %}
						{% if not regExp.test(PAGE_CLASS) %}<a href="<?= $URL ?>../">{% endif %}
							<img src="<?= $lang == 'ru' ? 'img/header/synergy.svg' : 'img/header/synergy_en.svg' ?>" alt="">
						{% if not regExp.test(PAGE_CLASS) %}</a>{% endif %}

						<?php if ( $lang == 'ru') { ?>
							<span class="header__logo-vtb">
								<a href="http://vtb.synergy.ru"><img src="https://vtb.synergy.ru/vtb/img/vtb_logo_black.svg" alt="ВТБ - генеральный партнёр"></a>
							</span>
						<?php } ?>
						{% endblock %}
					</div>

					<?php if ( !$is_page_thanks ) { ?>
						<?= $version_header_logo_1 ?>
						<?= $version_header_logo_2 ?>
					<?php } ?>

				</div><!-- col -->
				<div class="header__phone-col col col-md-auto align-self-center">

					<div class="header__phone">
						<?php /* ?> <?= $email_link ?> <?php */ ?>
						<?= $phone_link ?>
						<?= $phone_link_2 ?>
					</div>

				</div><!-- col -->
				<div class="header__button-col header__button-col_reg col-md-auto">

					<?php if ($version == 'retargeting') { ?>
						<a href="#popup-registration" class="header__button header__button_registration button d-none d-md-flex" data-fancybox><?= $version_form_button ?></a>
						<a href="#mobile-form-1" class="header__button header__button_registration header__button_registration_1 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-2" class="header__button header__button_registration header__button_registration_2 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-3" class="header__button header__button_registration header__button_registration_3 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
					<?php } elseif ( $external_url == 'synergyonline' ) { ?>
						<a href="#popup-synergyonline" class="header__button header__button_enter button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#entry').show()">Вход<i></i></a>
						<a href="#popup-synergyonline" class="header__button header__button_registration button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#registration').show()">Регистрация</a>
					<?php } elseif ( $version == 'lp-version-taleb-email' ) { ?>
						<a href="#price" class="header__button header__button_registration button scroll">
							<span class="d-none d-md-inline"><?= _('main__taleb_button_2') ?></span>
							<span class="d-md-none"><?= _('main__taleb_button_2') ?></span>
						</a>
					<?php } else { ?>
						<a href="<?=$version_form_href?>" class="header__button header__button_registration button" data-fancybox>
							<span class="d-none d-md-inline"><?= $version_form_button ?></span>
							<span class="d-md-none"><?= $version_form_button_mobile ?></span>
						</a>
					<?php } ?>

				</div><!-- col -->
				<div class="header__toggle-popup-col col-auto d-md-none">

					<a class="header__toggle-popup button" data-toggle-class="page-menu-opened" data-href="body"><i class="icon-menu"></i><i class="icon-menu-close"></i></a>

				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- header__top -->
	{% endblock %}

	{% block header_bottom %}
	<div class="header__bottom">
		<div class="header__row header__row_2 container">

			<div class="header__links align-self-center">
				{% block header_links %}
				<div class="header__links-item header__links-item_reg"><a href="#popup-registration" data-fancybox class="header__links-link"><?= $version_form_button ?></a></div>
				<div class="header__links-item"><a href="#speakers" class="header__links-link scroll"><?= _('header__links-speakers') ?></a></div>
				<div class="header__links-item"><a href="#concept" class="header__links-link scroll"><?= _('header__links-concept') ?></a></div>
				<?php /* ?>
				<div class="header__links-item"><a href="#themes" class="header__links-link scroll"><?= _('header__links-topics') ?></a></div>
				<?php */ ?>
				<div class="header__links-item"><a href="#format" class="header__links-link scroll"><?= _('header__links-format') ?></a></div>
				<?php if ( $is_block_price ) { ?>
					<div class="header__links-item"><a href="#price" class="header__links-link scroll"><?= _('header__links-price') ?></a></div>
					<div class="header__links-item"><a href="#faq" class="header__links-link scroll">FAQ</a></div>
				<?php } else { ?>
					<div class="header__links-item"><a href="#partners" class="header__links-link scroll"><?= _('header__links-partners') ?></a></div>
				<?php } ?>
				<div class="header__links-item"><a href="#online-plf" class="header__links-link scroll"><?= _('header__links-online-plf') ?></a></div>
				<div class="header__links-item header__links-item_franch"><a href="#franchise" class="header__links-link scroll"><?= _('header__links-franchise') ?></a></div>
				<div class="header__links-item header__links-item_press"><a href="#press" class="header__links-link scroll"><?= _('header__links-press') ?></a></div>
				{% endblock %}
			</div><!-- header__links -->

		</div><!-- container -->
	</div><!-- header__bottom -->
	{% endblock %}

</section><!-- header -->
{% endblock %}