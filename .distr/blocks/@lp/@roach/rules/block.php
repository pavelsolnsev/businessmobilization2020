{% from './data.php' import data as items %}

<section class="rules" id="rules">
	<div class="container">

		<div class="rules__title title">Правила жизни Майкла Роуча</div>

		<div class="rules__slider carousel serif">
			{% for item in items %}
			<div class="rules-card">
				{{ item | safe }}
			</div><!-- rules__card -->
			{% endfor %}
		</div><!-- rules__slider -->

	</div><!-- container -->
</section><!-- rules -->
