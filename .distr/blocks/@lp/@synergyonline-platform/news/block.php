{% from './data.php' import data as list %}

<section class="news" id="news">
	<div class="container">
		<div class="news__title title condensed">Конспекты</div>
		<div class="news__slider">

			<div class="swiper-wrapper">
				{% for item in list %}
				<div class="swiper-slide">

					{% if item.link %}<a href="{{ item.link | safe }}" class="news__link">{% endif %}
						<div class="news__slide-photo">
							<?= picture('img/@lp/@synergyonline-platform/news/{{ item.img }}', 'lazy') ?>
						</div>
						<div class="news__slide-text">{{ item.title | safe }}</div>
						<div class="news__slide-desc">{{ item.text | safe }}</div>
					{% if item.link %}</a>{% endif %}

				</div><!-- swiper-slide -->
				{% endfor %}
			</div><!-- swiper-wrapper -->
			<div class="swiper-nav">
				<div class="swiper-prev"><img src="img/@lp/@synergyonline-platform/common/arrow-left.svg" class="lazy" alt=""></div>
				<div class="swiper-pagination"></div>
				<div class="swiper-next"><img src="img/@lp/@synergyonline-platform/common/arrow-right.svg" class="lazy" alt=""></div>
			</div><!-- swiper-nav -->

		</div>
	</div>
</section>
