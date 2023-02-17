<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
include_once $ROOT . 'lp/languagecentre/version.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-M7T7GF');</script>
	<!-- End Google Tag Manager -->

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $description ?>">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image" content="http://synergy.ru/img/logo.png">

	<base href="<?= $BASE_HREF ?>">

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">

	<link rel="stylesheet" href="lp/languagecentre/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">

	<link rel="stylesheet" href="lp/languagecentre/css/styles.css">

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->
	<!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->

	<!--[if lt IE 9]><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><![endif]-->
	<!--[if gte IE 9]><!--><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script><!--<![endif]-->

	<script src="https://widget.cloudpayments.ru/bundles/cloudpayments" defer="defer"></script>

</head>
<body class="page-thanks">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7T7GF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="wrapper">

		<header class="header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-5">
						<div class="logo"><img src="lp/languagecentre/img/logo.png" alt="Synergy language centre"  class="logo__img" /></div>
					</div>
					<div class="col-7">
						<div class="header__right">
							<div class="phone">
								<a href="tel:<?= $phone_link ?>" class="phone__number"><?= $phone ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<section class="thanks">
			<div class="container">

				<div class="thanks__title color-blue">Благодарим за&nbsp;регистрацию!</div>
				<div class="thanks__subtitle">Вскоре выйдем на&nbsp;связь и&nbsp;поможем вам подобрать курс :)</div>
				<a href="https://wa.me/74957878767?text=17904" target="_blank" class="thanks-gift">
					<div class="thanks-gift__title">Дарим <span class="color-blue">500 баллов</span> на&nbsp;приобретение первого курса</div>
					<div class="thanks-gift__text">Чтобы получить бонус, перейдите по&nbsp;<u class="color-blue">ссылке</u> и&nbsp;отправьте боту код: <b>17904</b></div>
					<div class="thanks-gift__image"></div>
				</a><!-- thanks-gift -->

			</div><!-- container -->
		</section><!-- thanks -->


		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="footer__logo"><img src="lp/languagecentre/img/logo2.png" alt="Университет СИНЕРГИЯ. Языковой центр"  class="logo__img" /></div>
					</div>
					<div class="col-sm-6">
						<div class="footer__right">
							<div class="footer__phone phone_white">
								<a href="tel:<?= $phone_link ?>" class="phone__number phone__number_white"><?= $phone ?></a>
							</div>
							<div class="phone__call">
								<div href="#callme" class="phone__call-link phone__call-link_white" data-fancybox>Перезвоните мне</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="footer__developer">Разработка и&nbsp;продвижение&nbsp;&mdash; <a href="https://sydi.ru" target="_blank" class="footer__developer-link">Synergy Digital</a></div>
					</div>
					<div class="col-sm-6">
						<div class="privacy">
							<a class="fancy privacy-link" href="#privacy">Политика конфиденциальности</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- footer -->

	</div><!-- wrapper -->


	<div class="d-none">

		<div class="landformbox landformbox_v landformbox_callme" id="callme">
			<div class="landformbox-inner">
				<form action="https://synergy.ru/lander/alm/lander.php?r=land/index&amp;partner=&amp;unit=Lingva&amp;land=training_cambridge_exams&amp;version=programma&amp;quote_id=" method="post" class="form">
					<div class="form__title"><span class="form__title-part">Заказать звонок</span></div>
					<div class="form__form-group"><input type="text" name="name" placeholder="ИМЯ" class="input" required></div>
					<div class="form__form-group"><input type="tel" name="phone" placeholder="ТЕЛЕФОН" class="input" required></div>
					<div class="form__submit"><input type="submit" value="Позвоните мне" class="button"></div>
					<div class="form__checkbox">
						<div class="form__checkbox-group"><label class="form__checkbox-label"><input name="" class="checkbox" type="checkbox" checked><span class="checkbox-icon"></span> Нажимая на&nbsp;кнопку &laquo;Отправить заявку&raquo;, я&nbsp;даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;условиями договора-оферты и&nbsp;политикой конфиденциальности.</label></div>
					</div>
				</form>
			</div>
		</div><!-- landformbox -->

		<div class="landformbox landformbox_v landformbox_callme" id="reg">
			<div class="landformbox-inner">
				<form action="https://synergy.ru/lander/alm/lander.php?r=land/index&amp;partner=&amp;unit=Lingva&amp;land=training_cambridge_exams&amp;version=programma&amp;quote_id=" method="post" class="form">
					<div class="form__title"><span class="form__title-part">Зарегистрироваться</span></div>
					<div class="form__form-group"><input type="text" name="name" placeholder="ИМЯ" class="input" required></div>
					<div class="form__form-group"><input type="tel" name="phone" placeholder="ТЕЛЕФОН" class="input" required></div>
					<div class="form__form-group"><input type="mail" name="phone" placeholder="E-MAIL" class="input" required></div>
					<div class="form__submit"><input type="submit" value="Отправить" class="button"></div>
					<div class="form__checkbox">
						<div class="form__checkbox-group"><label class="form__checkbox-label"><input name="" class="checkbox" type="checkbox" checked><span class="checkbox-icon"></span> Нажимая на&nbsp;кнопку &laquo;Отправить заявку&raquo;, я&nbsp;даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;условиями договора-оферты и&nbsp;политикой конфиденциальности.</label></div>
					</div>
				</form>
			</div>
		</div><!-- landformbox -->

		<section class="popup-price fancy__class" id="popup-price">
			<div class="popup-price__wrapper">
				<div class="popup-price__info">
					<div class="popup-price__package">Пакет</div>
					<div class="popup-price__name condensed" js-package></div>
					<div class="popup-price__price condensed" js-cost></div>
				</div>
				<div class="popup-price__form">
					<form class="form" action="https://syn.su/lander.php?r=land/index&unit=sbs&type=sof&land=synergy_online2020&lang=ru&version=&partner=&graccount=&grcampaign=&grtag=&ignore-thanksall=1&form=cloudRecurent">
						<div class="form__wrapper">
							<div class="form__title">Зарегистрируйтесь, чтобы перейти к оплате</div>
							<div class="form__input">
								<input type="text" class="input" name="name" placeholder="Ваше имя" tabindex="1" value="">
							</div>
							<div class="form__input">
								<input type="tel" class="input" name="phone" placeholder="Ваш телефон" tabindex="2" value="">
							</div>
							<div class="form__input">
								<input type="email" class="input" name="email" placeholder="Ваш e-mail" tabindex="3" value="">
							</div>
							<div class="form__input">
								<button class="form__submit form__button button condensed" type="submit">
									<span class="popup-price__button-buy">Купить</span>
									<span class="popup-price__button-get">Получить</span>
								</button>
							</div>
							<div class="form__privacy">
								<label class="checkcontainer checkcontainer_is-recurrent">
									<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked>
									<span class="checkboxbtn"></span>
									<div class="checkcontainer__text">Согласен <span class="checkcontainer__text-recurrent">на&nbsp;ежемесячный платеж и&nbsp;</span>с&nbsp;условиями <a href="files/reccuring_offerta.pdf" class="footer__link-offer" data-fancybox>договора оферты</a></div>
								</label>
								<label class="checkcontainer">
									<input type="checkbox" class="checkbox_custom" name="personalDataAgree2" checked>
									<span class="checkboxbtn"></span>
									<div class="checkcontainer__text">Согласен с&nbsp;<a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="privacy fancybox-privacy-link">политикой конфиденциальности</a> и&nbsp;на&nbsp;получение рассылок от&nbsp;Школы бизнеса Синергия</div>
								</label>
							</div>
							<input type="hidden" name="product_id" value="">
							<input type="hidden" name="quote_id" value="">
						</div>
					</form>
				</div>
			</div>
		</section>

	</div><!-- hidden -->


	<!-- Плагины и хелперы -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
	<script src="lp/languagecentre/js/jquery.fancybox.min.js" defer="defer"></script>

	<script src="lp/languagecentre/js/languagecentre.js"></script>

</body>
</html>