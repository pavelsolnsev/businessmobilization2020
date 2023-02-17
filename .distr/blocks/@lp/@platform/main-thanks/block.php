<div class="main__bg">
	<section class="main-1 main" id="main-1">
		<div class="container main__container">
			<div class="row">
				<div class="col-12 col-md-7 main__col-1">
					<div class="thanks__title">
						<h1><span>СПАСИБО!<br></span>Мы&nbsp;получили вашу заявку!</h1>
						<p>В&nbsp;ближайшее время с&nbsp;вами свяжется наш консультант, даст самую актуальную информацию и&nbsp;ответит на&nbsp;все интересующие вопросы</p>
						<h2>Чтобы не скучать во время ожидания звонка специалиста, <span>получите БЕСПЛАТНЫЙ ДЕМО-ДОСТУП НА 14 ДНЕЙ К ПЛАТФОРМЕ SYNERGY.ONLINE</span></h2>
					</div>
				</div><!-- col -->
				<div class="col-12 col-md-5 main__col-2">
					<form class="form form_vertical main__form" action="<?=$action?>">
						<div class="form__title ">Оформить <br>демо-доступ</div>
						<div class="form__items">
							<div class="form__item form__item_text " data-name="name">
								<input name="name" type="text" placeholder="Ваше имя" value="" class="form__input" required>
							</div>
							<div class="form__item form__item_text " data-name="phone">
								<input name="phone" type="text" placeholder="Ваш телефон" value="" class="form__input" required>
							</div>
							<div class="form__item form__item_email " data-name="email">
								<input name="email" type="email" placeholder="Ваш e-mail" value="" class="form__input" required>
							</div><!-- form__item -->
							<div class="form__item form__item_button">
								<button class="form__button button button_red condensed" type="submit">
									Оформить доступ
								</button>
							</div><!-- form__item -->
							<div class="form__footer">
								<label><div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked><div class="form__footer-checkbox-icon lazy"></div></div> <div class="form__footer-text">Согласен с&nbsp;<a href="#privacy" class="fancybox privacy">политикой конфиденциальности</a> и&nbsp;на&nbsp;обработку персональных данных</div></label>
								<label><div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on"><div class="form__footer-checkbox-icon lazy"></div></div> <div class="form__footer-text">Согласен на&nbsp;получение рассылок от&nbsp;Школы бизнеса Синергия</div></label>
							</div>
							<input type="hidden" name="product_id" value='57267888'>
							<?php if ( $thanksExternal == 'free' ) { ?>
								<input type="hidden" name="form" value="thanksFree">
							<?php } ?>
						</div><!-- form__items -->
					</form><!-- form -->
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
</div><!-- main__bg -->
<script>
	sessionStorage.setItem('mergelead','');
</script>