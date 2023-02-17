{% extends "default.php" %}


{% block preversion %}

if ($lang == 'ru') {
$link = 'https://synergy.online/lp/version-tracy/price/';
} else {
$link = 'https://synergyglobal.com/lp/tracy/price/';	
}

{% endblock %}


{% block version %}
<?php

if ($lang == 'en') {
	$email = "<?= _('email__tracy') ?>";
} else {
	$email_link = '';
}

$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */

$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;онлайн-мастер-класс';
?>
{% endblock %}


{% block styles %}
<link rel="stylesheet" href="css/lp-version-tracy-style.css">
<link rel="stylesheet" href="css/lp-version-tracy-responsive.css">
{% endblock %}


{% block blocks_inner %}

{% include '@lp/@version-tracy/header/block.php' %}
{% include '@lp/@version-tracy/main/block.php' %}
{% include '@lp/@version-tracy/about/block.php' %}
{% include '@lp/@version-tracy/registration/block.php' %}
{% include '@lp/@version-tracy/whois/block.php' %}
{% include '@lp/@version-tracy/tabs/block.php' %}
{% include '@lp/@version-tracy/cite/block.php' %}
{% include '@lp/@version-tracy/breakthrough/block.php' %}
{% include '@lp/@version-tracy/beginning/block.php' %}
{% include '@lp/@version-tracy/current/block.php' %}
{% include '@lp/@version-tracy/comingsoon/block.php' %}
{% include '@lp/@version-tracy/registration/block.php' %}
{% include '@lp/@version-tracy/platform/block.php' %}
{% include '@lp/@version-tracy/main/block.php' %}
{% include '@lp/@version-tracy/footer/block.php' %}

{% endblock %}


{% block script %}
{{ super() }}
<script src="lp/version-tracy/js/script.js" defer="defer"></script>
{% endblock %}
