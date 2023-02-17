<?php

$version = isset($_GET['version']) ? strtolower($_GET['version']) : '';
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'];
include_once $ROOT . 'lp/languagecentre/version.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= $gtm ?>');</script>
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
<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-5">
						<div class="logo"><img src="lp/languagecentre/img/logo.png" alt="Synergy language centre" class="logo__img" /></div>
					</div>
					<div class="col-7">
						<div class="header__right">
							<div class="phone">
								<a href="tel:<?= $phone_link ?>" class="phone__number"><?= $phone ?></a>
							</div>
							<div class="reg">
								<div href="#reg" class="reg__link" data-fancybox>Регистрация</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<div class="container">

			<div class="top-wrapper">
				<div class="certificate">
					<div class="certificate__photo"><img src="lp/languagecentre/img/bg/certificate.jpg" alt="" class="certificate__img" /></div>
					<div class="certificate__content">
						<div class="certificate__text"><span class="">Учионлайн</span></div>
						<div class="certificate__title">Synergy Language Centre <br><span class="certificate__title-part">это:</span></div>
						<ul class="certificate__list">
							<li class="certificate__item certificate__item_1">Эксперты-практики, которые интересно и харизматично подают материал</li>
							<li class="certificate__item certificate__item_2">Модульная система занятий - вы учите то, что вам нужнее всего в первую очередь</li>
							<li class="certificate__item certificate__item_3">Доступ в закрытый разговорный клуб - участвуйте в обсуждениях на интересные темы на английском</li>
							<li class="certificate__item certificate__item_4">В программу интегрированы записи выступлений зарубежных бизнес-спикеров. Совмещайте учебу английского и бизнес-образование</li>
						</ul>
					</div>
				</div><!-- certificate -->

				<div class="main">
					<div class="main__content">
						<h1 class="section-title">Synergy Language Centre <br><br><span class="section-title__part">Изучение английского <br>доступное всем</span></h1>
						<ul class="main__list">
							<li class="main__item">Формат, актуальный всегда и особенно при самоизоляции <!--&mdash;с&nbsp;нуля до&nbsp;уровня Upper-Intermediate за&nbsp;8&nbsp;месяцев--></li>
							<li class="main__item">Снятие языкового барьера&nbsp;&mdash; вы&nbsp;заговорите на&nbsp;английском уверенно</li>
							<li class="main__item">Преподаватели - носители языка, работающие с голливудскими звездами <!--из&nbsp;Великобритании и&nbsp;США--></li>
							<li class="main__item">Мультиформатные учебные материалы <!--Oxford, английские разговорные клубы, вебинары, мастер-классы--></li>
							<li class="main__item">Модульная система и языковой конструктор поможет избежать скучных тем</li>
						</ul>
						<div class="landformbox landformbox_v">
							<div class="landformbox__inner">
								<form action="<?= $action ?>" method="post" class="form">
									<div class="form__subtitle">Мир успешных людей говорит на&nbsp;английском</div>
									<div class="form__title">Подайте заявку <span class="form__title-part">на&nbsp;обучение</span></div>
									<div class="form__form-group"><input type="text" name="name" placeholder="Ваше имя" class="input" required></div>
									<div class="form__form-group"><input type="tel" name="phone" placeholder="Ваш телефон" class="input" required></div>
									<div class="form__form-group"><input type="email" name="email" placeholder="Ваш E-mail" class="input" required></div>
									<div class="form__bottom">
										<div class="form__submit"><input type="submit" value="Отправить" class="button"></div>
										<div class="form__checkbox">
											<div class="form__checkbox-group"><label class="form__checkbox-label"><input name="" class="checkbox" type="checkbox" checked><span class="checkbox-icon"></span> Нажимая на&nbsp;кнопку &laquo;Отправить заявку&raquo;, я&nbsp;даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;условиями договора-оферты и&nbsp;политикой конфиденциальности.</label></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div><!-- main -->

			</div><!-- top-wrapper -->

		</div><!-- container -->


		<section class="module">
			<div class="container">
				<div class="module__content clearfix">
					<div class="module__box">
						<div class="section-title module__title">Модули языкового центра</div>
						<ul class="module__list owl-carousel" data-owl-options="{items: 1, slideBy: 1, margin: 10, center: true, dots: false, nav: true, navText: '', autoplay:true, responsive: { 768:{items:3, slideBy:1}, 992:{items:3, slideBy:1},} }">
							<li class="module__item">
								<div class="module__numder-big">1</div>
								<div class="module__numder">1</div>
								<div class="module__text">Английский для командировок&nbsp;&mdash; спецкурс</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">2</div>
								<div class="module__numder">2</div>
								<div class="module__text">Все понимаю&nbsp;&mdash; сказать не&nbsp;могу</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">3</div>
								<div class="module__numder">3</div>
								<div class="module__text">Деловая переписка</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">4</div>
								<div class="module__numder">4</div>
								<div class="module__text">Избавление от&nbsp;акцента (от&nbsp;Ali Stoner)</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">5</div>
								<div class="module__numder">5</div>
								<div class="module__text">Подготовка к&nbsp;выступлению на&nbsp;TED</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">6</div>
								<div class="module__numder">6</div>
								<div class="module__text">Искусство переговоров</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">7</div>
								<div class="module__numder">7</div>
								<div class="module__text">Английский для инвесторов</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">8</div>
								<div class="module__numder">8</div>
								<div class="module__text">Адаптация в&nbsp;США</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">9</div>
								<div class="module__numder">9</div>
								<div class="module__text">Service strategy&nbsp;&mdash; спецкурс от&nbsp;Джона Шоула</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">10</div>
								<div class="module__numder">10</div>
								<div class="module__text">Английский для путешествий</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">11</div>
								<div class="module__numder">11</div>
								<div class="module__text">Публичные выступления</div>
							</li>
							<li class="module__item">
								<div class="module__numder-big">12</div>
								<div class="module__numder">12</div>
								<div class="module__text">English for sales</div>
							</li>
						</ul>
					</div>

					<div class="landformbox landformbox_v">
						<div class="landformbox__inner">
							<form action="<?= $action ?>" method="post" class="form">
								<div class="form__title">Оставьте заявку <span class="form__title-part">для подбора программы</span></div>
								<div class="form__form-group"><input type="text" name="name" placeholder="Ваше имя" class="input" required></div>
								<div class="form__form-group"><input type="tel" name="phone" placeholder="Ваш телефон" class="input" required></div>
								<div class="form__form-group"><input type="email" name="email" placeholder="Ваш E-mail" class="input" required></div>
								<div class="form__bottom">
									<div class="form__submit"><input type="submit" value="Отправить" class="button"></div>
									<div class="form__checkbox">
										<div class="form__checkbox-group"><label class="form__checkbox-label"><input name="" class="checkbox" type="checkbox" checked><span class="checkbox-icon"></span> Нажимая на&nbsp;кнопку &laquo;Отправить заявку&raquo;, я&nbsp;даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;условиями договора-оферты и&nbsp;политикой конфиденциальности.</label></div>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>

			</div>
		</section><!-- module -->


		<section class="info">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="section-title info__studies-head">Форма занятий</div>
						<ul class="info__studies owl-carousel" data-owl-options="{items: 1, slideBy: 1, margin: 10, dots: false, nav: true, navText: '', autoplay:true, responsive: { 768:{items:3, slideBy:1}, 992:{items:3, slideBy:1},} }">
							<li class="info__studies-item info__studies-item_1">
								<div class="info__studies-title">Индивидуально</div>
								<div class="info__studies-text">максимум сосредоточения на&nbsp;индвидуальных запросах в&nbsp;изучении языка</div>
							</li>
							<li class="info__studies-item info__studies-item_2">
								<div class="info__studies-title">Мини-группа</div>
								<div class="info__studies-text">интерактивный опыт изучения языка для средних и&nbsp;продвинутых пользователей английского</div>
							</li>
							<li class="info__studies-item info__studies-item_3">
								<div class="info__studies-title">Групповая</div>
								<div class="info__studies-text">максимально эффективно для развития навыков общения и&nbsp;продвинутых пользователей</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="section-title info__teacher-head">Наши преподаватели</div>
						<ul class="info__teacher">
							<li class="info__teacher-item">Все преподаватели&nbsp;&mdash; действующие практики и широкопрофильные специалисты</li>
							<li class="info__teacher-item">Каждый урок проводиться как уникальный мастер-класс</li>
							<li class="info__teacher-item">Среди преподавателей Synergy Language Centre топ-менеджеры и&nbsp;актеры, специалисты по&nbsp;работе с&nbsp;голливудскими актерами</li>
							<li class="info__teacher-item">Слушателям доступны курсы американской актрисы Ali Stoner, которая ставит произношение голливудским актерам</li>
						</ul>
					</div>
				</div>
			</div>
		</section><!-- info -->




		<section class="price">
			<div class="container">
				<div class="section-title price__title">Выберите пакет занятий</div>
				<div class="payments__wrapper payments__wrapper_3">
					<div href="#popup-price" data-fancybox="" class="price-card" id="price-ready" js-payment="" data-productid="57155438" data-is-recurrent="1" data-quote_id="">
						<div class="price-card__header">
							<div class="price-card__header-name">READY</div>
							<div class="price-card__header-cost"> 3 500 <span class="currency">₽</span> <span class="price-card__header-time">/ мес.</span> </div>
							<!-- price-card__header-cost -->

							<div class="price-card__seemore">Показать подробнее</div>
						</div>
						<!-- price-card__header -->
						<div class="price-card__list"> <span class="price-card__list-item">Доступ к&nbsp;еженедельным прямым трансляциям Synergy Online Forum в&nbsp;течение 1&nbsp;месяца</span> <span class="price-card__list-item"> <img src="lp/languagecentre/img/logo-base.svg" alt="" class="price-card__list-item-icon lazy-loaded"> Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий «Синергии» на&nbsp;1&nbsp;месяц </span> <span class="price-card__list-item"> <img src="lp/languagecentre/img/logo-crm.svg" alt="" class="price-card__list-item-icon lazy-loaded"> Доступ к&nbsp;Synergy CRM&nbsp;— 2&nbsp;месяца </span> <span class="price-card__list-item">Доступ к&nbsp;прямым трансляциям других форумов «Синергии» в&nbsp;течение 1&nbsp;месяца</span> <span class="price-card__list-item">Обучение в&nbsp;группе по&nbsp;выбранной программе Synergy Language Сеntre в&nbsp;течение 1&nbsp;месяца</span> </div>
						<!-- price-card__list -->
						<div class="price-payment__button">Оплатить</div>
						<label class="price-payment__label d-none1">
							<div class="price-payment__label-checkbox">
								<input type="checkbox" name="isRecurrent" checked="">
								<div class="price-payment__label-checkbox-icon lazy-loaded"></div>
							</div>
							<!-- price-payment__label-checkbox -->
							<div class="price-payment__label-text">Я&nbsp;согласен на&nbsp;регулярный автоплатеж в&nbsp;соответствии с&nbsp;условиями тарифа, а&nbsp;также с&nbsp;<span href="files/reccuring_offerta.pdf" data-fancybox="">договором-офертой</span></div>
						</label>
						<!-- price-payment__label -->
					</div>
					<!-- price-card -->

					<div href="#popup-price" data-fancybox="" class="price-card" id="price-steady" js-payment="" data-productid="57155440" data-is-recurrent="1" data-quote_id="">
						<div class="price-card__header">
							<div class="price-card__header-name">STEADY</div>
							<div class="price-card__header-cost"> 7 500 <span class="currency">₽</span> <span class="price-card__header-time">/ мес.</span> </div>
							<!-- price-card__header-cost -->

							<div class="price-card__seemore">Показать подробнее</div>
						</div>
						<!-- price-card__header -->
						<div class="price-card__list"> <span class="price-card__list-item">Доступ к&nbsp;еженедельным прямым трансляциям Synergy Online Forum в&nbsp;течение 1&nbsp;месяца</span> <span class="price-card__list-item"> <img src="lp/languagecentre/img/logo-base.svg" alt="" class="price-card__list-item-icon lazy-loaded"> Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий «Синергии» на&nbsp;1&nbsp;месяц </span> <span class="price-card__list-item"> <img src="lp/languagecentre/img/logo-crm.svg" alt="" class="price-card__list-item-icon lazy-loaded"> Доступ к&nbsp;Synergy CRM&nbsp;— 2&nbsp;месяца </span> <span class="price-card__list-item">Доступ к&nbsp;прямым трансляциям других форумов «Синергии» в&nbsp;течение 1&nbsp;месяца</span> <span class="price-card__list-item">Обучение в&nbsp;мини-группе (из&nbsp;5&nbsp;чел.) по&nbsp;выбранной программе Synergy Language Сеntre в&nbsp;течение 1&nbsp;месяца</span> </div>
						<!-- price-card__list -->
						<div class="price-payment__button button button_red condensed">Оплатить</div>
						<label class="price-payment__label d-none1">
							<div class="price-payment__label-checkbox">
								<input type="checkbox" name="isRecurrent" checked="">
								<div class="price-payment__label-checkbox-icon lazy-loaded"></div>
							</div>
							<!-- price-payment__label-checkbox -->
							<div class="price-payment__label-text">Я&nbsp;согласен на&nbsp;регулярный автоплатеж в&nbsp;соответствии с&nbsp;условиями тарифа, а&nbsp;также с&nbsp;<span href="files/reccuring_offerta.pdf" data-fancybox="">договором-офертой</span></div>
						</label>
						<!-- price-payment__label -->
					</div>
					<!-- price-card -->

					<div href="#popup-price" data-fancybox="" class="price-card" id="price-run" js-payment="" data-productid="57155442" data-is-recurrent="1" data-quote_id="">
						<div class="price-card__header">
							<div class="price-card__header-name">RUN!</div>
							<div class="price-card__header-cost"> 15 000 <span class="currency">₽</span> <span class="price-card__header-time">/ мес.</span> </div>
							<!-- price-card__header-cost -->

							<div class="price-card__seemore">Показать подробнее</div>
						</div>
						<!-- price-card__header -->
						<div class="price-card__list"> <span class="price-card__list-item">Доступ к&nbsp;еженедельным прямым трансляциям Synergy Online Forum в&nbsp;течение 1&nbsp;месяца</span> <span class="price-card__list-item"> <img src="lp/languagecentre/img/logo-base.svg" alt="" class="price-card__list-item-icon lazy-loaded"> Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий «Синергии» на&nbsp;1&nbsp;месяц </span> <span class="price-card__list-item"> <img src="lp/languagecentre/img/logo-crm.svg" alt="" class="price-card__list-item-icon lazy-loaded"> Доступ к&nbsp;Synergy CRM&nbsp;— 2&nbsp;месяца </span> <span class="price-card__list-item">Доступ к&nbsp;прямым трансляциям других форумов «Синергии» в&nbsp;течение 1&nbsp;месяца</span> <span class="price-card__list-item">Индивидуальное обучение по&nbsp;выбранной программе Synergy Language Сеntre в&nbsp;течение 1&nbsp;месяца, включая занятие по&nbsp;избавлению от&nbsp;акцента от&nbsp;Ali Stoner</span> </div>
						<!-- price-card__list -->
						<div class="price-payment__button button button_red condensed">Оплатить</div>
						<label class="price-payment__label d-none1">
							<div class="price-payment__label-checkbox">
								<input type="checkbox" name="isRecurrent" checked="">
								<div class="price-payment__label-checkbox-icon lazy-loaded"></div>
							</div>
							<!-- price-payment__label-checkbox -->
							<div class="price-payment__label-text">Я&nbsp;согласен на&nbsp;регулярный автоплатеж в&nbsp;соответствии с&nbsp;условиями тарифа, а&nbsp;также с&nbsp;<span href="files/reccuring_offerta.pdf" data-fancybox="">договором-офертой</span></div>
						</label>
						<!-- price-payment__label -->
					</div>
					<!-- price-card -->

				</div>
			</div>
		</section><!-- price -->

		<section class="spanish">
			<div class="container">
				<div class="spanish__box clearfix">
					<div class="col-md-7 offset-md-5">
						<div class="spanish__title condensed">Учи испанский,<br>амиго!
							<img src="lp/languagecentre/img/smile.png" alt="">
							<img src="lp/languagecentre/img/food.png" alt="">
						</div>
						<div class="spanish__subtitle">
							<span><span class="condensed">2й&nbsp;в&nbsp;мире</span><br>язык после китайского</span>
							<span><span class="condensed">573,000,000</span><br>носителей</span>
						</div>
						<div class="landformbox landformbox_v landformbox_spanish">
							<div class="landformbox__inner">
								<form action="<?= $action ?>" method="post" class="form">
									<div class="form__title form__title_spanish">Оставьте заявку для подбора программы </div>
									<div class="form__form-group"><input type="text" name="name" placeholder="Ваше имя" class="input" required></div>
									<div class="form__form-group"><input type="tel" name="phone" placeholder="Ваш телефон" class="input" required></div>
									<div class="form__form-group"><input type="email" name="email" placeholder="Ваш E-mail" class="input" required></div>
									<div class="form__bottom">
										<div class="form__submit"><input type="submit" value="Отправить" class="button"></div>
										<div class="form__checkbox">
											<div class="form__checkbox-group"><label class="form__checkbox-label"><input name="" class="checkbox" type="checkbox" checked><span class="checkbox-icon"></span>Я&nbsp;даю согласие на&nbsp;обработку персональных данных, согласен на&nbsp;получение информационных рассылок от&nbsp;Университета &laquo;Синергия&raquo; и&nbsp;соглашаюсь c&nbsp;политикой конфиденциальности</label></div>
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div><!-- spanish-box -->

			</div>
		</section><!-- spanish -->


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
				<form action="<?= $action ?>" method="post" class="form">
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
				<form action="<?= $action ?>" method="post" class="form">
					<div class="form__title"><span class="form__title-part">Зарегистрироваться</span></div>
					<div class="form__form-group"><input type="text" name="name" placeholder="ИМЯ" class="input" required></div>
					<div class="form__form-group"><input type="tel" name="phone" placeholder="ТЕЛЕФОН" class="input" required></div>
					<div class="form__form-group"><input type="mail" name="email" placeholder="E-MAIL" class="input" required></div>
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