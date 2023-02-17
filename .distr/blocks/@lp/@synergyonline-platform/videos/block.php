{% from './data.php' import data as list %}

<section class="videos" id="videos">
	<div class="container">
		<div class="videos__title title condensed">Смотрите учебные видео в&nbsp;Базе знаний</div>
		<div class="row">
			<div class="col-md-6">
				<div class="videos__desc videos__desc_1">Смотрите учебные видео в&nbsp;Базе знаний Synergy Online&nbsp;&mdash; это библиотека образовательных материалов на&nbsp;самые разные темы: развитие бизнеса, переход в&nbsp;онлайн, личная эффективность, тайм-менеджмент, психология, фитнес, искусство и&nbsp;многое другое.</div>
			</div><!-- col -->
			<div class="col-md-6">
				<div class="videos__desc videos__desc_2">Все видео доступны в&nbsp;HD-формате на&nbsp;всех устройствах и&nbsp;в&nbsp;любой точке мира. Выбирайте самый полезный контент, пересматривайте записи, сохраняйте в&nbsp;подборку и&nbsp;используйте новые знания на&nbsp;практике.</div>
			</div><!-- col -->
		</div><!-- row -->
		<div class="row">
			<div class="col-12 col-md-4">
				<div class="videos__text videos__text_1 condensed lazy">1000+ часов видеоконтента<br>в&nbsp;HD-формате</div>
			</div><!-- col -->
			<div class="col-12 col-md-4">
				<div class="videos__text videos__text_2 condensed lazy">Выступления<br>с&nbsp;форумов, семинары и&nbsp;вебинары</div>
			</div><!-- col -->
			<div class="col-12 col-md-4">
				<div class="videos__text videos__text_3 condensed lazy">Большой выбор<br>тем и&nbsp;доступ с&nbsp;любых устройств</div>
			</div><!-- col -->
		</div><!-- row -->
		<div class="videos__subtitle">Лучшее из базы знаний</div>
		<div class="videos__slider common__slider-class">

			<div class="swiper-wrapper">
				{% for item in list %}
				<div class="swiper-slide">

					{% if item.link %}<a href="{{item.link | safe }}" class="videos__link">{% endif %}
						<div class="videos__slide-photo">
							<?= picture('img/@lp/@synergyonline-platform/videos/slides/{{ item.img }}', 'lazy') ?>
						</div>
						<div class="videos__slide-text">{{ item.text | safe }}</div>
						<div class="videos__slide-theme">{{ item.theme | safe }}</div>
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
		{#<div class="videos__button"><a href="#popup-demo-form" class="videos__button-link button_pink" data-fancybox >Получите бесплатный <br class="d-block d-sm-none"> демо-доступ на&nbsp;7&nbsp;дней</a></div>#}

		<div id="videos-form">
			{{ form.form_horizontal( 'videos' ) }}
		</div>

	</div><!-- container -->
</section><!-- videos -->
