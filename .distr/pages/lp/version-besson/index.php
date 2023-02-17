{% extends "default.php" %}


{% block preversion %}
$link = 'https://synergy.online/lp/version-besson/price/';
if ($lang == 'en') {
$link = 'https://synergyglobal.com/lp/version-besson/price/';
}
{% endblock %}


{% block version %}
<?php

if ($lang == 'en') {
	$email = "<?= _('email__besson') ?>";
} else {
	$email_link = '';
}

$quote_id = 4293;

$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */

$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;онлайн-мастер-класс';
?>
{% endblock %}


{% block styles %}
<link rel="stylesheet" href="css/lp-version-besson-style.css">
<link rel="stylesheet" href="css/lp-version-besson-responsive.css">
{% endblock %}


{% block blocks_inner %}

{% include '@lp/@version-besson/header/block.php' %}
{% include '@lp/@version-besson/main/block.php' %}
{% include '@lp/@version-besson/about/block.php' %}
{% include '@lp/@version-besson/registration/block.php' %}
{% include '@lp/@version-besson/whois/block.php' %}
{% include '@lp/@version-besson/beginning/block.php' %}
{% include '@lp/@version-besson/breakthrough/block.php' %}
{% include '@lp/@version-besson/success/block.php' %}
{% include '@lp/@version-besson/tabs/block.php' %}
{% include '@lp/@version-besson/cite/block.php' %}
{% include '@lp/@version-besson/after/block.php' %}
{% include '@lp/@version-besson/current/block.php' %}
{% include '@lp/@version-besson/comingsoon/block.php' %}
{% include '@lp/@version-besson/registration/block.php' %}
{% include '@lp/@version-besson/platform/block.php' %}
{% include '@lp/@version-besson/main/block.php' %}

{% endblock %}


{% block script %}
{{ super() }}
<script src="lp/version-besson/js/script.js" defer="defer"></script>
{% endblock %}
