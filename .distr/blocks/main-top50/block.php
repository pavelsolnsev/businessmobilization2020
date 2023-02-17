{% from './data.nj' import speaker as speaker %}
<div class="main_top50__bg">
	<section class="main_top50">
		<div class="container">
			<div class="main_top50__block">
				<div class="main_top50__logo">
					<img src="img/main-top50/logo.svg" alt="">
				</div>
				<div class="main_top50__text">
					Лучшие выступления спикеров<br>
					о предпринимательстве на synegy.online
				</div>
				<div class="main_top50__speakers">
				{% for item in speaker %}
					<div class="main_top50__speakers-card">
						<img src="img/main-top50/speakers/{{ item.id | safe }}.png" class="picture" alt="">
						<p class="text">{{ item.name | safe }}</p>
					</div>
				{% endfor %}
				</div>
				<div class="main_top50__bottom">
				и многие другие
				</div>
			</div>
		</div>
	</section><!-- main -->
</div><!-- main__bg -->