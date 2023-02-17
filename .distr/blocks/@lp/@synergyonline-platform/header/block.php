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
						{% if not regExp.test(PAGE_CLASS) %}<a href="<?= $BASE_HREF ?>">{% endif %}
							<img src="<?= $lang == 'ru' ? 'img/header/synergy.svg' : 'img/header/synergy_en.svg' ?>" alt="">

							<?php if ( $lang == 'ru') { ?>
								<span class="header__logo-vtb">
									<img src="img/@lp/@synergyonline-platform/header/logo_vtb.png" alt="ВТБ - генеральный партнёр">
								</span>
							<?php } ?>
						{% if not regExp.test(PAGE_CLASS) %}</a>{% endif %}
						{% endblock %}
					</div>

					<?= $version_header_logo_1 ?>
					<?= $version_header_logo_2 ?>

				</div><!-- col -->
				<div class="header__phone-col col col-md-auto align-self-center">

					<div class="header__phone">
						<?= $email_link ?>
						<?= $phone_link ?>
						<?= $phone_link_2 ?>
					</div>

				</div><!-- col -->
				<div class="header__button-col header__button-col_reg col-md-auto">
					<?php /* ?>
					<a href="#popup-synergyonline" class="header__button header__button_enter button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#entry').show()">Вход<i></i></a>
					<a href="#popup-demo-form" class="header__button header__button_registration button" data-fancybox>Бесплатный демо-доступ</a>
					<?php */ ?>
					<a href="#videos-form" class="header__button button button_red scroll d-none d-md-flex">Оформить доступ</a>
					<a href="#popup-demo-form" class="header__button button button_red d-md-none" data-fancybox>Оформить бесплатный демо-доступ</a>
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
				<div class="header__links-item"><a href="#about" class="header__links-link scroll">О платформе</a></div>
				<div class="header__links-item"><a href="#videos" class="header__links-link scroll">Видео</a></div>
				<div class="header__links-item"><a href="#weekly-forums" class="header__links-link scroll">Форумы</a></div>
				{#<div class="header__links-item"><a href="#tariff" class="header__links-link scroll">Тарифы подписки</a></div>#}
				<div class="header__links-item"><a href="#faq" class="header__links-link scroll">FAQ</a></div>
				<div class="header__links-item"><a href="#news" class="header__links-link scroll">Конспекты</a></div>
				<div class="header__links-item"><a href="#press" class="header__links-link scroll">СМИ о&nbsp;нас</a></div>
				{% endblock %}
			</div><!-- header__links -->

		</div><!-- container -->
	</div><!-- header__bottom -->
	{% endblock %}

</section><!-- header -->
{% endblock %}
