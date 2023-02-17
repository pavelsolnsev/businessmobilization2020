{% extends 'header/block.php' %}


{% block header_logo %}

<?php if ($lang == 'ru') { ?>
	<img src="img/@lp/@version-taleb/header/synergy-online.svg" alt="Synergy online. Цифровая платформа">
<?php } else {?>
	<img src="img/@lp/@version-taleb/header/logo-en.svg" alt="">
<?php } ?>

{% endblock %}
