<section class="price" id="price">
	<div class="price__top">
		<div class="container">
			<div class="row">
				<div class="price__top-title">
					<h1 class="condensed"><span>Спасибо за&nbsp;регистрацию</span> <br>на&nbsp;Synergy Online Forum</h1>
				</div>
				<p>Чтобы завершить регистрацию, оплатите билет.</p>
			</div>
		</div>
	</div>
	<div class="price__container">
		<div class="container">
			<div class="row">
				<div class="price__title condensed">
					<h2>Стоимость</h2>
				</div>
				<div class="price__wrapper">
					<a href="#price__standart" data-fancybox class="price__item fancy__form">
						<div class="price__item-top">
							<div class="price__item-package">Пакет</div>
							<div class="price__item-title condensed">Онлайн</div>
						</div>
						<div class="price__item-bottom">
							<div class="price__item-text condensed">Участвуй в&nbsp;онлайн-форуме, находясь <span>в&nbsp;любой точке мира</span></div>
							<div class="price__item-wrapper">
								<div class="price__item-button condensed">Купить / <?= $PRICE_ONLINE ?>&nbsp;<span class="currency">₽</span></div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	{#% include 'main-price/block.php' %#}
</section>