<section class="thanks" id="thanks">
	<div class="container">

		<div class="thanks__container">
			<h1><span><?= _('thanks__container-1') ?></span><br><?= _('thanks__container-2') ?></h1>
		</div>

		<div class="thanks__form">

			<div class="thanks__form-title">Задайте вопрос спикеру</div>
			<div class="thanks__form-descr">Сформулируйте вопрос и&nbsp;кому из&nbsp;спикеров вы&nbsp;хотите его задать. Мы&nbsp;выберем лучшие вопросы и&nbsp;озвучим их&nbsp;в&nbsp;прямом эфире.</div>

			<div class="thanks__form-container">

				<form class="form" action="<?= $action ?>&form=question" novalidate="novalidate">
					<div class="form__items">
						<div class="form__item form__item_text " data-name="name">
							<input name="name" type="text" placeholder="ФИО Спикера" value="" class="form__input" required="" aria-required="true">
						</div>
						<div class="form__item form__item_text " data-name="phone">
							<input name="email" type="email" placeholder="Ваш email" value="" class="form__input" required="" aria-required="true">
						</div>
						<div class="form__item form__item_email " data-name="email">
							<textarea name="question" placeholder="Ваш вопрос" class="form__input" required="" aria-required="true"></textarea>
						</div>
						<div class="form__item form__item_button">
							<button class="form__button button color-red condensed" type="submit">Отправить</button>
						</div>

						<div class="form__footer">
							<label>
								<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked="" value="on">
									<div class="form__footer-checkbox-icon"></div>
								</div>
								<div class="form__footer-text">Я соглашаюсь с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="privacy fancybox-privacy-link">политикой конфиденциальности</a>, даю согласие на обработку персональных данных и получение рассылок</div>
							</label>
						</div>
					</div>
				</form>

			</div><!-- thanks__form-container -->

		</div><!-- thanks__form -->

	</div><!-- container -->
</section><!-- thanks -->
