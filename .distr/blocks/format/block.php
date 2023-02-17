<section class="format" id="format">
	<div class="container">

		<div class="format__title title"><?= _('format__title') ?></div>

		<div class="format__text">
			<?= _('format__text') ?>
		</div><!-- concept__text -->

		<div class="format__features">
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="format__features-title format__features-title_1 condensed lazy"><?= _('format__features-title-1') ?></div>
				</div><!-- col -->
				<div class="col-12 col-md-4">
					<div class="format__features-title format__features-title_2 condensed lazy"><?= _('format__features-title-2') ?></div>
				</div><!-- col -->
				<div class="col-12 col-md-4">
					<div class="format__features-title format__features-title_3 condensed lazy"><?= _('format__features-title-3') ?></div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- format__features -->

		{% block format_form %}
		{{ form.form_horizontal( 'format' ) }}
		{% endblock %}

	</div><!-- container -->
</section><!-- format -->