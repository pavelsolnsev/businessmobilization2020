{% import 'form/macro.php' as form %}


{% macro block(id) %}
<section class="registration {{ id }}" id="{{ id }}">
	<div class="container">

		{{ form.form( id, title='<?= _("registration__besson_title") ?>', title_class='xcondensed', button='<?= _("registration__besson_button") ?>',  button_class='' ) }}

	</div><!-- container -->
</section><!-- main -->
{% endmacro %}
