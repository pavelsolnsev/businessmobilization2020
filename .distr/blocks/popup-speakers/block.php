<div class="popup-speakers" id="popup-speakers" data-speaker="">

	<div class="popup-speakers__header">
		<div class="row no-gutters align-items-center">
			<div class="col-4 align-self-end">
				<div class="popup-speakers__image"></div>
			</div><!-- col -->
			<div class="col-8">
				<div class="popup-speakers__name condensed"></div>
				<div class="popup-speakers__meta align-items-center">
					<div class="popup-speakers__logo"></div>
					<div class="popup-speakers__note"></div>
				</div><!-- popup-speakers__meta -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- popup-speakers__header -->

	<div class="row no-gutters">
		<div class="col-md-8 popup-speakers__col-3">
			<div class="popup-speakers__info"></div>
		</div><!-- col -->
		<div class="col-md-4 popup-speakers__col-4">

			{{ form.form( 'registration-speaker', form_class='form_vertical', title_class='condensed', button_class='button_red condensed' ) }}

		</div><!-- col -->
	</div><!-- row -->

</div><!-- popup-speakers -->


<div class="popup-speakers-offer popup" id="popup-speakers-offer">
	<div class="popup__title condensed"><?= _('popup-speakers-offer__title') ?></div>
	{% set add_fields = [{name: 'comments[Тема выступления]', type: 'input', placeholder: '<?= _("popup-speakers-offer__theme") ?>', required: true}] %}
	{{ form.form( 'popup-speakers-offer', form_class='form_vertical', title='', add_fields=add_fields ) }}
</div><!-- popup-registration -->
