{% extends "default.php" %}


{% block preversion %}
$link = 'https://synergy.online/lp/synergyonlineforum-ai/price/';
if ($lang == 'en') {
$link = 'https://synergyglobal.com/lp/synergyonlineforum-ai/price/';
}
{% endblock %}


{% block version %}
<?php

$version = 'synergyonlineforum-ai';
//$_['ru']['version_form_button'] = 'Открыть демо-доступ';
//$_['en']['version_form_button'] = 'Open demo access';
//$version_form_button = _('version_form_button');
//$version_form_button_mobile = $version_form_button;

if ($lang == 'en') {
	$email = "<?= _('email__besson') ?>";
} else {
	$email_link = '';
}

$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */

$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;онлайн-мастер-класс';
?>
{% endblock %}


{% block styles %}
<link rel="stylesheet" href="css/lp-synergyonlineforum-ai-style.css">
<link rel="stylesheet" href="css/lp-synergyonlineforum-ai-responsive.css" media="(max-width: 1199px)">
{% endblock %}


{% block blocks_inner %}

{% include '@lp/@synergyonlineforum-ai/header/block.php' %}
{% include '@lp/@synergyonlineforum-ai/main/block.php' %}

{% include 'speakers/block.php' %}
{% include 'concept/block.php' %}
{% include 'format/block.php' %}
{% include 'community/block.php' %}
{% include 'online-plf/block.php' %}
{% include 'organizer/block.php' %}
<?php if ( $lang == 'ru' ) { ?>
	{% include 'reviews/block.php' %}
	{% include 'press/block.php' %}
<?php } ?>
{% include 'partners/block.php' %}
{% include '@lp/@synergyonlineforum-ai/main-2/block.php' %}
{% include 'footer/block.php' %}

{% endblock %}


{% block script %}
{{ super() }}
<script src="lp/top-brown/js/script.js" defer="defer"></script>
{% endblock %}
