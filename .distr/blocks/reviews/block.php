{% from './data.njk' import data as items %}

<section class="reviews" id="reviews">

	<div class="reviews__title title">Отзывы участников</div>

	<div class="reviews__slider">
		<div class="swiper-wrapper">
			{% for item in items %}
			<div class="swiper-slide">
				<a href="img/reviews/slides/{{ item }}.jpg" class="reviews__card" data-fancybox data-options="{'preload': 1}" data-fancybox-group="reviews">
					<?= picture('img/reviews/slides/{{ item }}.jpg', 'lazy') ?>
				</a><!-- reviews__card -->
			</div><!-- swiper-slide -->
			{% endfor %}
		</div><!-- swiper-wrapper -->
		<div class="swiper-nav">
			<div class="swiper-prev"><img src="img/partners/arrow-left.svg" class="lazy" alt=""></div>
			<div class="swiper-pagination"></div>
			<div class="swiper-next"><img src="img/partners/arrow-right.svg" class="lazy" alt=""></div>
		</div><!-- swiper-nav -->
	</div><!-- reviews__slider -->

</section><!-- reviews -->
