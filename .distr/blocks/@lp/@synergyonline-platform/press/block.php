{% from 'press/data.php' import data as items %}

<section class="press" id="press">
	<div class="press__title title">СМИ о&nbsp;нас</div>

	<div class="press__slider">
		<div class="swiper-wrapper">
			{% for item in items %}
			<div class="swiper-slide">
				<a href="{{ item.href }}" target="_blank" class="press-card">
					{% if item.image %}<div class="press-card__image"><?= picture('img/press/{{ item.image }}', 'lazy') ?></div>{% endif %}
					<div class="press-card__title condensed">{{ item.title | safe }}</div>
					<div class="press-card__text">{{ item.text | safe }}</div>
					{% if item.author %}
					<div class="press-card__author">Автор статьи <b>{{ item.author | safe }}</b></div>
					{% endif %}
					{% if item.speaker %}
					<div class="press-card__author">Спикер <b>{{ item.speaker | safe }}</b></div>
					{% endif %}
					<div class="press-card__link">читать в&nbsp;источнике</div>
				</a><!-- press-card -->
			</div><!-- swiper-slide -->
			{% endfor %}
		</div><!-- swiper-wrapper -->
		<div class="swiper-nav">
			<div class="swiper-prev"><img src="img/partners/arrow-left.svg" class="lazy" alt=""></div>
			<div class="swiper-pagination"></div>
			<div class="swiper-next"><img src="img/partners/arrow-right.svg" class="lazy" alt=""></div>
		</div><!-- swiper-nav -->
	</div><!-- press__carousel -->

</section><!-- press -->
