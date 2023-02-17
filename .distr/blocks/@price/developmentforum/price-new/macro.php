{% macro header() %}
	<div class="price__header">
		<h1 class="price__title">Спасибо за&nbsp;регистрацию!</h1>
		<div class="price__subtitle">Мероприятие пройдёт 23&nbsp;октября 2020 по&nbsp;адресу 3-я ул. Ямского Поля, 15, Москва, Golden Palace </div>
	</div><!-- price__header -->
{% endmacro %}

{% macro header_desc() %}
	<div class="price__subtitle"><?= _('new-price__subtitle_1') ?></div>
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
