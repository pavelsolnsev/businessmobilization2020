<section class="popup-price fancy__class" id="popup-price" data-package="">
	<div class="popup-price__wrapper">
		<div class="popup-price__info">
			<div class="popup-price__package"><?= _('popup-price__package') ?></div>
			<div class="popup-price__name condensed" js-package></div>
			<div class="popup-price__text condensed" js-text></div>
			<div class="popup-price__price condensed" js-cost></div>
		</div>
		<div class="popup-price__form">
			<form class="form" action="<?= $action ?>&form=cloudRecurent<?= $link_price ? '&link=' . urlencode($link_price) : '' ?>">
				<div class="form__wrapper">
					<div class="form__title"><?= _('popup-price-form__title') ?></div>
					<div class="form__input">
						<input type="text" class="input" name="name" placeholder="<?= _('form_item_name') ?>" tabindex="1" value="<?= $get_name ?>">
					</div>
					<div class="form__input">
						<input type="tel" class="input" name="phone" placeholder="<?= _('form_item_phone') ?>" tabindex="2" value="<?= $get_phone ?>">
					</div>
					<div class="form__input">
						<input type="email" class="input" name="email" placeholder="<?= _('form_item_email') ?>" tabindex="3" value="<?= $get_email ?>">
					</div>
					<div class="form__input">
						<button class="form__submit form__button button condensed" type="submit">
							<span class="popup-price__button-buy"><?= _('popup-price__button-buy') ?></span>
							<span class="popup-price__button-get"><?= _('popup-price__button-get') ?></span>
						</button>
					</div>
					<div class="form__privacy">
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">Согласен с&nbsp;<a href="#privacy" class="fancybox privacy">политикой конфиденциальности</a> и&nbsp;на&nbsp;обработку персональных данных</div>
						</label>
						<?php */ ?>
						<label class="checkcontainer checkcontainer_is-recurrent">
							<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-1') ?></div>
						</label>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree2" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-2') ?></div>
						</label>
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree3" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">Оплачивая, Вы соглашаетесь с условиями&nbsp;<a href="files/reccuring_offerta.pdf" class="footer__link-offer" terget="_blank"> публичной оферты</a></div>
						</label>
						<?php */ ?>
					</div>
					<input type="hidden" name="comment" value="<?= $external_url ?>">
					<input type="hidden" name="product_id" value="">
					<input type="hidden" name="quote_id" value="">
					<input type="hidden" name="partner" value="<?= $partner ?>">
				</div>
			</form>

		</div>
	</div>

</section>


<div class="stripe" id="stripeForm">
	<form id="payment-form" class="nolander">
		<fieldset>
			<legend class="card-only">Pay with card</legend>
			<legend class="payment-request-available">Or enter card details</legend>
			<div class="container">
				<div id="payment-elements"></div>
				<button type="submit">Buy ticket</button>
			</div>
			<div class="card-errors" id="card-errors"></div>
		</fieldset>
	</form>
</div>

