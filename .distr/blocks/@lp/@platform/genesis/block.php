<section class="genesis">
	<div class="genesis__bg">
		<div class="container">
			<div class="genesis__header">
				<div class="genesis__header-logo">
					<img src="img/@lp/@platform/genesis/logo.svg" alt="logo">
				</div>
				<div class="genesis__header-content">
					<a href="tel:<?= $phonethankslink ?>" class="genesis__header-phone"><?= $phonethanks ?></a>
					<a href="#popup-reg" class="genesis__header-btn" data-fancybox>Участвовать</a>
				</div>
			</div>
			<div class="genesis__main">
				<h2 class="genesis__main-title">Спасибо!
					<span>Мы получили вашу заявку!</span>
				</h2>
				<?php if ($version == 'mbaforum2022') { ?>
					<p class="genesis__main-column-title">MBA Forum 16&nbsp;февраля 2022, Москва, Holiday Inn</p>
				<?php } else { ?>
				<div class="genesis__main-block">
					<p class="genesis__main-name">genesis</p>
					<div class="genesis__main-time">
						<img src="img/@lp/@platform/genesis/time.svg" alt="time" class="genesis__main-time-pic">
						<div class="genesis__main-column">
							<p class="genesis__main-column-title">online-участие</p>
							<p class="genesis__main-column-description">30.01.2021</p>
						</div>
					</div>
				</div>
				<?php }?>
				<p class="genesis__main-text"><?= $textthanks ?></p>
				<p class="genesis__main-text-2"><?= $textthanks2 ?></p>
			</div>
		</div>
	</div>
	<?php if ($version !== 'mbaforum2022') { ?>
	<a href="https://bg.synergy.ru/" target="blank">
		<div class="genesis-banner__cont">
			<div class="container">
				<div class="genesis-banner__title-cont">
					<img class="icon" src="img/@lp/@platform/genesis/icon.svg">
					<h2 class="genesis-banner__title">Synergy Brain Game</h2>
				</div>

				<div class="genesis-banner__middle">
					<div class="genesis-banner__desc">
						<p class="genesis-banner__p">Интеллектуальный онлайн-марафон</p>
						<ul class="genesis-banner__list">
							<li class="genesis-banner__list-item">&mdash;&nbsp;Годовая программа по&nbsp;прокачке мозга</li>
							<li class="genesis-banner__list-item">&mdash;&nbsp;Новые задания каждую неделю</li>
							<li class="genesis-banner__list-item">&mdash;&nbsp;Призы победителям</li>
						</ul>
					</div>
					<div class="genesis-banner__img">
						<span class="genesis-banner__img-txt">
							Главный приз <br>
							Tesla Model 3
						</span>
						<img src="img/@lp/@platform/genesis/prize.png">
					</div>
				</div>

				<div href="https://bg.synergy.ru/" class="genesis-banner__button">Принять участие</div>

			</div>
		</div>
	</a>
	<?php }?>
	<div class="genesis__form">
		<div class="container">
			<form action="<?= $action_genesis ?>" class="form form_horisontal" novalidate="novalidate">
				<div class="form__wrapper">
					<div class="genesis__form-container">

						<div class="genesis__form-container-title">
							<h3 class="form__title "><?= $formthanks ?></h3>
							<img src="img/@lp/@platform/genesis/arrow.svg" alt="time" class="form__title-pic">
						</div>

						<div class="genesis__form-container-block">
							<div class="form__items">
								<div class="form__item form__item_text">
									<input name="name" type="text" placeholder="Имя" class="form__input">
								</div>
								<div class="form__item form__item_text">
									<input name="phone" type="text" placeholder="Телефон" class="form__input">
								</div><!-- form__item -->
								<div class="form__item form__item_email">
									<input name="email" type="email" placeholder="E-mail" class="form__input">
								</div><!-- form__item -->
								<div class="form__item form__button">
									<button class="btn " type="submit">Отправить</button>
								</div>
							</div><!-- form__items -->

							<div class="form__more">
								<label class="form__footer ">
									<!-- <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked="">
										<div class="form__footer-checkbox-icon lazy-loaded"></div>
									</div> -->
									<div class="form__footer-text">
										Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, 
										а также соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="form__more-link fancybox-privacy-link">политикой конфиденциальности.</a>
									</div>
								</label>
							</div>
						</div>

					</div>


				</div>
			</form>
		</div>
	</div>

	<div class="genesis__footer">
		<div class="container genesis__footer-flex">
			<a href="https://synergy.ru/lp/_chunk/privacy.php?date=27-11-2020&amp;lang=ru" class="genesis__footer-link fancybox-privacy-link">Политика конфиденциальности</a>
			<p class="genesis__footer-text">Разработка и продвижение — <a href="https://synergydigital.ru/" target="_blank" class="genesis__footer-дштл">Synergy Digital</a></p>
		</div>
	</div>
</section>