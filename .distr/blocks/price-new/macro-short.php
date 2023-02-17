{% from './data.php' import data_base_packages as base_packages, data_extended_packages as extended_packages, data_offline_packages as offline_packages, data_demo_packages as demo_packages %}


{% macro header(item) %}
	<div class="price__header">		
		{% if item %} 
			<div class="price__title"></div>
		{% else %}
			<h1 class="price__title">Спасибо за&nbsp;регистрацию!</h1>
		{% endif %}
		<div class="price__subtitle"><?= _('new-price__subtitle_1') ?></div>
	</div><!-- price__header -->
{% endmacro %}

{% macro header_desc() %}
	<div class="price__header">
		<div class="price__desc price__desc_1">
			<div class="price__item">
				<div class="price__item-title before-plane">Более 10&nbsp;онлайн-событий в&nbsp;месяц</div>
				<div class="price__item-subtitle">Форумы, мастер-классы, вебинары</div>
			</div>
			<div class="price__item">
				<div class="price__item-title before-zipper">Более 1000 часов видеозаписей </div>
				<div class="price__item-subtitle">База знаний лучших выступлений</div>
			</div>
			<div class="price__item">
				<div class="price__item-title before-star">Лучшие спикеры со&nbsp;всего мира</div>
				<div class="price__item-subtitle">Знания и&nbsp;опыт более 500 спикеров планеты</div>
			</div>
			<div class="price__item">
				<div class="price__item-title before-tv">Синергия ТВ</div>
				<div class="price__item-subtitle">Круглосуточное вещание на&nbsp;актуальные темы</div>
			</div>
		</div>
		<a href="#price__desc_2" class="price__header-button button scroll">Подробнее о подписке</a>
	</div><!-- price__header -->
{% endmacro %}


{% macro base() %}
	<div class="payments__wrapper payments__wrapper_1" id="payments__wrapper_1">
		<div class="price-payment__title">Базовая подписка</div>
		{% for item in base_packages %}
		{{ card(item) }}
		{% endfor %}
	</div><!-- payments__wrapper -->
{% endmacro %}


{% macro extended() %}
	<div class="payments__wrapper payments__wrapper_2">
		<div class="price-payment__title">Расширенные подписки</div>
		<div class="price-payment__subtitle">
			<span>Всё преимущества базовой подписки</span> 
			<svg width="35" height="37" viewBox="0 0 35 37" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M35 20.8758H20.4167V37H14.5833V20.8758H0V15.5789H14.5833V0H20.4167V15.5789H35V20.8758Z" fill="#F8006B"/>
			</svg>
			<span>бизнес-обучение</span>
		</div>	

		{% for item in extended_packages %}
		{{ card(item) }}
		{% endfor %}

	</div><!-- payments__wrapper -->
{% endmacro %}

{% macro description() %}
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
{% endmacro %}


{% macro bottom() %}
	<div class="price__bottom">
		<div class="price__bottom-text">Откройте полный доступ ко&nbsp;всем возможностям платформы</div>
		<a href="#payments__wrapper_1" class="price__bottom-button button scroll">Оформить подписку</a>
	</div>
{% endmacro %}


{% macro card(item) %}
	<div href="#popup-price" data-fancybox class="price-card price-card_{{card_class}}" id="price-{{ item.id }}" js-payment data-productId="{{ item.product_id | safe }}" data-is-recurrent="{{ item.is_recurrent | safe }}" data-quote_id="{{ item.quote_id | safe }}" data-partner="{{ item.partner | safe }}" data-package="{{ item.id }}" data-unit="{{ item.unit | safe }}" data-type="{{ item.type | safe }}" data-land="{{ item.land | safe }}" data-event-id="{{ item.event_id | safe }}" data-form-type="{{ item.form_type | safe }}">
		<div class="price-card__header">
			<div class="price-card__header-name">{{ item.name | safe }}</div>			
			<div class="price-card__header-price">{{ item.price | safe }} <span class="currency">₽</span></div>
			<span class="price-card__discount">{{ item.discount | safe }}</span>
		</div>
		<div class="price-card__body">
			{% if item.options %}
			<div class="price-card__box">
				{{ item.options | safe }}
			</div>
			{% endif %}

			<div class="price-card__cost" data-price="{{ item.price | safe }}">{{ item.price | safe }} <span class="currency">₽</span></div>
			{% if item.price_desc %}
				{{ item.price_desc | safe }}
			{% endif %}
			<div class="price-card__button button button_red">{{ item.button_text | safe }}</div>

			{% if item.is_recurrent %}		
			<div class="price-card__label d-none {{ item.is_recurrent | safe }}">
				<div class="price-card__label-checkbox">
					<input type="checkbox" name="isRecurrent" checked>
					<div class="price-card__label-checkbox-icon lazy"></div>
				</div><!-- price-card__label-checkbox -->
				<div class="price-card__label-text">Я&nbsp;согласен на&nbsp;ежемесячный автоплатеж в&nbsp;размере стоимости пакета и&nbsp;с&nbsp;условиями договора-оферты</div>
			</div><!-- price-card__label -->			
			{% endif %}

			<div class="d-none">
				{% if item.popup_title %}
				<div data-popup-title>{{ item.popup_title | safe }}</div>
				{% endif %}
				{% if item.popup_text %}
				<div data-popup-text>{{ item.popup_text | safe }}</div>
				{% endif %}
			</div>
			
		</div>
	</div><!-- price-card -->
{% endmacro %}




{% macro offline() %}
	{% for item in offline_packages %}
	{{ card(item) }}
	{% endfor %}
{% endmacro %}

{% macro demo() %}
	{% for item in demo_packages %}
	{{ card(item) }}
	{% endfor %}
{% endmacro %}


{% macro faq() %}
{% from './data-faq.php' import data as list %}
<div class="price-faq" id="price-faq">

	<div class="price-faq__title condensed">FAQ</div>
	<div class="price-faq__box">

		{% for item in list %}
		<div class="price-faq__item price-faq__item_{{ loop.index }} faq__item " data-question="{{ item.question | safe | striptags }}">
			<div class="price-faq__item-top">{{ item.question | safe }}</div>
			<div class="price-faq__item-bottom faq__item-bottom">{{ item.answer | safe }}</div>
		</div>
		{% endfor %}

	</div><!-- price-faq__box -->

</div><!-- price-faq -->
{% endmacro %}
