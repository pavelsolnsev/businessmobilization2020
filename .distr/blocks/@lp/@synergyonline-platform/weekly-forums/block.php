{% from './data.php' import data as list %}

<section class="weekly-forums" id="weekly-forums">
	<div class="container">
		<div class="weekly-forums__title title condensed">Участвуйте в еженедельных онлайн&nbsp;-&nbsp;форумах</div>
		<div class="row">
			<div class="col-md-6">
				<div class="weekly-forums__desc weekly-forums__desc_1">Еженедельно на&nbsp;платформе проводятся тематические онлайн-мероприятия&nbsp;&mdash; Synergy Online Forum. В&nbsp;формате live-трансляции на&nbsp;форуме выступают ведущие эксперты со&nbsp;всего мира.</div>
			</div><!-- col -->
			<div class="col-md-6">
				<div class="weekly-forums__desc weekly-forums__desc_2">Выступления на&nbsp;Synergy Online Forum затрагивают многие темы&nbsp;&mdash; от&nbsp;предпринимательства и&nbsp;менеджмента до&nbsp;искусства и&nbsp;спорта. Каждый может выбрать что-то интересное для себя.</div>
			</div><!-- col -->
		</div><!-- row -->
		<div class="weekly-forums__subtitle">Ближайшие события</div>
		<div class="weekly-forums__slider common__slider-class">
			<div class="swiper-wrapper">
				{% for item in list %}
				<div class="swiper-slide">

					{% if item.link %}<a href="{{item.link | safe }}" class="weekly-forums__link">{% endif %}
						<div class="weekly-forums__slide-photo">
							<?= picture('img/@lp/@synergyonline-platform/weekly-forums/slides/{{item.img }}', 'lazy') ?>
						</div>
						<div class="weekly-forums__slide-text">
							{{ item.title | safe }}<br>
							{{ item.date | safe }}
						</div>
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
	</div><!-- container -->
</section><!-- weekly-forums -->
