{% import 'price/macro.php' as price %}
{% import './macro.php' as price_digital %}

<section class="price" id="price">

	{{ price.header() }}

	<div class="container">
		{{ price_digital.payment() }}
		{{ price_digital.faq() }}
			<div class="price__desc price__desc_2" id="price__desc_2">			
				<div class="price__title">Подписка</div>
				<div class="price__item">
					<div class="price__item-day before-zipper">Каждую субботу</div>
					<div class="price__item-title">Тематические LIVE-форумы по&nbsp;самым актуальным темам</div>
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
					<div class="price__item-day before-star">Каждый четверг</div>
					<div class="price__item-title">Мастер-классы с&nbsp;ведущими мировыми экспертами и&nbsp;спикерами</div>
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
					<div class="price__item-day before-plane">Каждый вторник</div>
					<div class="price__item-title">Вебинары с&nbsp;экспертами по&nbsp;ключевым компетенциям </div>
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
					<div class="price__item-day before-sun">Каждый день</div>
					<div class="price__item-title">Зарядка и&nbsp;Медитация</div>
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
					<div class="price__item-day before-base">Когда вам удобно</div>
					<div class="price__item-title">База знаний</div>
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
			</div><!-- price__desc -->
	</div>

	{{ price.header() }}
	<div class="container">
		{{ price_digital.payment() }}
	</div>
</section><!-- price -->
