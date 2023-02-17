{% from './data.php' import data as services %}

<section class="services" id="services">
	<div class="container">

		<div class="services__title title"><?= _('services__title') ?></div>
		<div class="services__description"><?= _('services__description') ?></div>

		<div class="row services__row">
			{% for item in services %}
			<div class="col-6 col-md-4 services-card__col">
				<div class="services-card">
					{% if item.href %}<a href="{{ item.href }}" target="_blank">{% endif %}
						<?= picture('img/services/{{ item.image }}', 'lazy') ?>
					{% if item.href %}</a>{% endif %}
				</div><!-- services-card -->
			</div><!-- col -->
			{% endfor %}
		</div><!-- row -->

	</div><!-- container -->
</section><!-- services -->
