{% extends 'format/block.php' %}


{% block format_form %}
<?php if ($version != 'blogger') { ?>
	{{ form.form_horizontal( 'format' ) }}
<?php } else { ?>
	{{ form.form_horizontal( 'format', add_fields=[{name: 'promocode', type: text, placeholder: 'Промокод', required: 'required', value: '<?= $promocode ?>'}] ) }}
<?php } ?>
{% endblock %}
