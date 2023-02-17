{% extends "default.php" %}


{% block preversion %}
$link = 'https://synergy.online/lp/top-taleb/price/';
if ($lang == 'en') {
$link = 'https://synergyglobal.com/lp/top-taleb/price/';
}
{% endblock %}


{% block version %}
<?php

$version = 'lp-top-taleb';
$_['ru']['version_form_button'] = 'Открыть демо-доступ';
$_['en']['version_form_button'] = 'Open demo access';
$version_form_button = _('version_form_button');
$version_form_button_mobile = $version_form_button;

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
<link rel="stylesheet" href="css/lp-top-taleb-style.css">
<link rel="stylesheet" href="css/lp-top-taleb-responsive.css" media="(max-width: 1199px)">
{% endblock %}


{% block blocks_inner %}

{% include '@lp/@top-taleb/header/block.php' %}
{% include '@lp/@top-taleb/main/block.php' %}

{#% include '@lp/@top-taleb/headliners/block.php' %#}
{% include '@lp/@top-taleb/main-headliner/block.php' %}
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
{% include '@lp/@top-taleb/main-2/block.php' %}
{% include 'footer/block.php' %}

{% endblock %}


{% block script %}
{{ super() }}
<script src="lp/top-taleb/js/script.js" defer="defer"></script>
{% endblock %}
