{% extends "default.php" %}


{% block preversion %}

if ($lang == 'ru') {
$link = 'https://synergy.online/lp/version-kotler/price/';
} else {
$link = 'https://synergyglobal.com/lp/kotler/price/';	
}

{% endblock %}


{% block version %}
<?php

if ($lang == 'en') {
	$email = "<?= _('email__kotler') ?>";
} else {
	$email_link = '';
}

$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */

$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;онлайн-мастер-класс';
?>
{% endblock %}


{% block styles %}
<link rel="stylesheet" href="css/lp-version-kotler-style.css">
<link rel="stylesheet" href="css/lp-version-kotler-responsive.css">
{% endblock %}


{% block blocks_inner %}

{% include '@lp/@version-kotler/header/block.php' %}
{% include '@lp/@version-kotler/main/block.php' %}
{% include '@lp/@version-kotler/about/block.php' %}
{% include '@lp/@version-kotler/registration/block.php' %}
<?php if ( $lang == 'ru' ) { ?>
{% include 'vtb/block.php' %}
<?php } ?>
{% include '@lp/@version-kotler/whois/block.php' %}
{% include '@lp/@version-kotler/opposition/block.php' %}
{% include '@lp/@version-kotler/what-now/block.php' %}
{% include '@lp/@version-kotler/became-few/block.php' %}
{% include '@lp/@version-kotler/charge/block.php' %}
{% include '@lp/@version-kotler/soul/block.php' %}
{% include '@lp/@version-kotler/what-will/block.php' %}
{% include '@lp/@version-kotler/registration/block.php' %}
{% include '@lp/@version-kotler/platform/block.php' %}
{% include '@lp/@version-kotler/main/block-2.php' %}

{% endblock %}


{% block script %}
{{ super() }}
<script src="lp/version-kotler/js/script.js" defer="defer"></script>
{% endblock %}
