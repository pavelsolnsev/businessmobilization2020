{% extends "default.php" %}


{% block preversion %}

if ($lang == 'ru') {
$link = 'https://synergy.online/lp/version-robert/price/';
} else {
$link = 'https://synergyglobal.com/lp/kigan/price/';	
}

{% endblock %}


{% block version %}
<?php

if ($lang == 'en') {
	$email = "<?= _('email__robert') ?>";
} else {
	$email_link = '';
	$phone_link = '';
}

$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */

$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;онлайн-мастер-класс';
?>
{% endblock %}


{% block styles %}
<link rel="stylesheet" href="css/lp-version-robert-style.css">
<link rel="stylesheet" href="css/lp-version-robert-responsive.css">
{% endblock %}


{% block blocks_inner %}

{% include '@lp/@version-robert/header/block.php' %}
{% include '@lp/@version-robert/main/block.php' %}
{% include '@lp/@version-robert/about/block.php' %}
{% include '@lp/@version-robert/registration/block.php' %}
{% include '@lp/@version-robert/whois/block.php' %}
{% include '@lp/@version-robert/opposition/block.php' %}
{% include '@lp/@version-robert/soul/block.php' %}
{% include '@lp/@version-robert/what-will/block.php' %}
{% include '@lp/@version-robert/registration/block.php' %}
{% include '@lp/@version-robert/platform/block.php' %}
{% include '@lp/@version-robert/main/block.php' %}
{% include '@lp/@version-robert/footer/block.php' %}

{% endblock %}


{% block script %}
{{ super() }}
<script src="lp/version-robert/js/script.js" defer="defer"></script>
{% endblock %}
