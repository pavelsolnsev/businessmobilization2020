{% import '../../../price/macro.php' as price %}
{% import './macro.php' as hrforum %}

<section class="price" id="price">
			
	<div class="price__ticket-wrap">
		{{ price.header() }}
		<div class="container">
				{{ price.payment() }}
		{#  {{ price.program() }}
				{{ price.language() }} #}
		</div><!-- container -->
	</div>

	<div class="price__live">
		<div class="container">
			<div class="price__live-title">Очное участие</div>

			<div class="price__live-wrapper">
				<div class="price__live-content">
					<div class="price__live-mode">Живое участие</div>
					<div class="price__live-object">«Арт Москва Войковская»</div>
					<div class="price__live-price">10 000 &#x20bd;</div>
					<button class="price__live-button form__button button" id="liveButton" type="submit" data-fancybox data-src="#popup-ticket-price" js-payment-ticket>Оплатить</button>

				</div>
				
				<label class="price__live-footer">
					<div class="price__live-footer-checkbox">
						<input onchange="liveButton.disabled = !this.checked;" type="checkbox" name="personalDataAgree" checked>
						<div class="price__live-footer-checkbox-icon"></div>
					</div>
					<div class="price__live-footer-text">Согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;
						<a href="#privacy" class="fancybox">политикой&nbsp;конфиденциальности</a>.
					</div>
				</label>
			</div>
		</div>
	</div>

	<div class="price__bottom">
		<div class="container">
			<?php if ( $lang != 'en' ) { ?>
			{{ price.faq() }}
			<?php } ?>
			{{ price.base() }}
			{{ price.sbs() }}
			{{ price.crm() }}
			{{ price.lang() }}
			<?php if ( $lang != 'en' ) { ?>
			{{ price.university() }}
			{{ price.footer() }}
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__bottom -->
	
</section>