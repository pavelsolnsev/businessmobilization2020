{% from './data.njk' import data as services %}

<section class="services" id="services">
	<div class="container">

		<div class="services__title title"><?= _('services__title') ?></div>
		<div class="services__description"><?= _('services__description') ?></div>
		<div class="services__carousel swiper-container">
			<div class="services__carousel-wrapper swiper-wrapper">
				{% for item in services %}
				<div class="swiper-slide">
				<div class="services-card">
					{% if item.href %}<a href="{{ item.href }}" target="_blank">{% endif %}
						<?= picture("img/services/{{ item.image }}", "lazy") ?>
					{% if item.href %}</a>{% endif %}
				</div><!-- services-card -->
				</div><!-- services-card -->
				{% endfor %}
			</div>
			<div class="swiper-nav">
				<div class="swiper-prev">
					<img src="img/services/arrow-left.svg" alt="">
				</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-next">
					<img src="img/services/arrow-right.svg" alt="">
				</div>
			</div>
		</div><!-- services__carousel -->

	</div><!-- container -->
</section><!-- services -->
