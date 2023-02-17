{% import './macro.php' as pricecard %}

<section class="tariff" id="tariff">
	<?php /* ?>
	<div class="tariff__top">
		<picture>
			<source srcset="img/@lp/@synergyonline-platform/price/mobile/bg.png" media="(max-width: 575px)"/>
			<source srcset="img/@lp/@synergyonline-platform/price/bg.png"/>
			<img src="img/@lp/@synergyonline-platform/price/bg.png" alt="">
		</picture>
	</div>
	<?php */ ?>
	<div class="container">
		<div class="price">
			<div class="price__top">
				<h1 class="price__title">Базовая подписка</h1>
				<div class="price__subtitle">Откройте полный доступ ко&nbsp;всем возможностям платформы</div>
				<div class="price__content">

					<div class="price__item">
						<div class="price__item-day">Каждую субботу</div>
						<div class="price__item-title before-zipper">Тематические LIVE-форумы по&nbsp;самым актуальным темам</div>
						<div class="price__item-subtitle"></div>
						<div class="price__item-links">
							<a class="price__item-link">бизнес</a>
							<a class="price__item-link">маркетинг</a>
							<a class="price__item-link">продажи</a>
							<a class="price__item-link">менеджмент</a>
							<a class="price__item-link">MBA</a>
							<a class="price__item-link">туризм</a>
							<a class="price__item-link">мода</a>
							<a class="price__item-link">киберспорт</a>
						</div>
					</div>

					<div class="price__item">
						<div class="price__item-day">Каждый четверг</div>
						<div class="price__item-title before-star">Мастер-классы с&nbsp;ведущими мировыми экспертами и&nbsp;спикерами</div>
						<div class="price__item-subtitle">Предприниматели, авторы бестселлеров, ученые, спортсмены, актеры, музыканты</div>
						<div class="price__item-links">
							<a class="price__item-link">Нассим Талеб</a>
							<a class="price__item-link">Ник Вуйчич</a>
							<a class="price__item-link">Юваль Ной Харари</a>
							<a class="price__item-link">Люк Бессон</a>
							<a class="price__item-link">Ицхак Адизес</a>
							<a class="price__item-link">Филип Котлер</a>
							<a class="price__item-link">Джордан Белфорт</a>
							<a class="price__item-link">Элизабет Гилберт</a>
						</div>
					</div>

					<div class="price__item">
						<div class="price__item-day">Каждый вторник</div>
						<div class="price__item-title before-plane">Вебинары с&nbsp;экспертами по&nbsp;ключевым компетенциям </div>
						<div class="price__item-subtitle">Стратегическое планирование, ораторское мастерство, личная эффективность, креативное мышление </div>
						<div class="price__item-links">
							<a class="price__item-link">Александр Фридман</a>
							<a class="price__item-link">Павел Палагин</a>
							<a class="price__item-link">Кирилл Любин</a>
							<a class="price__item-link">Сергей Белан</a>
							<a class="price__item-link">Стас Кузавов</a>
							<a class="price__item-link">Андрей Сафронов</a>
						</div>
					</div>

					<div class="price__item">
						<div class="price__item-day">Каждый день</div>
						<div class="price__item-title before-sun">Зарядка и&nbsp;Медитация</div>
						<div class="price__item-subtitle">Ежедневные зарядки по&nbsp;авторской методике Synergy Mix Training и&nbsp;энергетические практики для поддержания тонуса, пробуждение вашей ясности, интуиции и&nbsp;увеличения количества энергии</div>
						<div class="price__item-links empty">
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
						</div>
					</div>

					<div class="price__item">
						<div class="price__item-title before-tv">Синергия ТВ</div>
						<div class="price__item-subtitle">Круглосуточное вещание полезного контента, лучшие выступления с&nbsp;форумов &laquo;Синергии&raquo;, интервью с&nbsp;ведущими спикерами, кейсы и&nbsp;многое другое</div>
						<div class="price__item-links empty">
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
						</div>
					</div>

					<div class="price__item">
						<div class="price__item-day">Когда вам удобно</div>
						<div class="price__item-title before-base">База знаний</div>
						<div class="price__item-subtitle">Более 1000 часов видео с&nbsp;форумов и&nbsp;мастер-классов, лучший контент в&nbsp;HD-формате, тематические подборки&nbsp;&mdash; маркетинг, продажи, переговоры, личная эффективность</div>
						<div class="price__item-links empty">
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
							<a class="price__item-link"></a>
						</div>
					</div>

				</div>
			</div>

			<div class="price__wrap">
				<div class="price__box price__box_1">
					{{ pricecard.cards_base(card_count='1', item2=2,item3=3, item2_val, item3_val) }}
				</div>
				<div class="price__title">Расширенные подписки</div>
				<div class="price__subtitle">
					<span>Всё преимущества базовой подписки</span>
					<svg width="35" height="37" viewBox="0 0 35 37" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M35 20.8758H20.4167V37H14.5833V20.8758H0V15.5789H14.5833V0H20.4167V15.5789H35V20.8758Z" fill="#F8006B"/>
					</svg>
					<span>бизнес-обучение</span>
				</div>
				<div class="price__box price__box_2">
					{{ pricecard.cards_vip() }}
				</div>
			</div>
		</div>
	</div>
</section>
