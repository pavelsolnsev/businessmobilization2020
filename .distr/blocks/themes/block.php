{% from './data.php' import data as themes %}

<section class="themes lazy" id="themes">
	<div class="container">

		<h2 class="themes__title title"><?= _('themes__title') ?></h2>

		{% for item in themes %}
		<div class="themes__card">
			<div class="themes__card-num condensed">{{ loop.index }}</div>
			<div class="themes__card-text">
				<div class="themes__card-title condensed">{{ item.title | safe }}</div>
				<div class="themes__card-desc">{{ item.desc | safe }}</div>
			</div><!-- themes__card-text -->
		</div><!-- themes__card -->
		{% endfor %}

		{{ form.form_horizontal( 'themes' ) }}

	</div><!-- container -->
</section><!-- themes -->
