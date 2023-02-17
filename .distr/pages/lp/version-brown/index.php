{% extends "default.php" %}


{% block preversion %}
$link = 'https://synergy.online/lp/version-brown/price/';
$version = 'lp-version-brown';
if ($lang == 'en') {
$link = 'https://synergyglobal.com/lp/brown/price/';
}
{% endblock %}


{% block version %}
<?php
$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */
$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;онлайн-мастер-класс';
?>
{% endblock %}


{% block styles %}
<link rel="stylesheet" href="css/lp-version-brown-style.css">
<link rel="stylesheet" href="css/lp-version-brown-responsive.css">
{% endblock %}


{% block blocks_inner %}

{% include '@lp/@version-brown/header/block.php' %}

{% include '@lp/@version-brown/main/block.php' %}

{% include '@lp/@version-brown/about/block.php' %}

{% set section1=true %}
{% include '@lp/@version-brown/speech/block.php' %}

{% include '@lp/@version-brown/who/block.php' %}

{% include '@lp/@version-brown/middle-form/block.php' %}

{% include '@lp/@version-brown/after/block.php' %}

{% set section1=false%}
{% include '@lp/@version-brown/speech/block.php' %}

{% include '@lp/@version-brown/what-now/block.php' %}

{% include '@lp/@version-brown/public-section/block.php' %}

{% include '@lp/@version-brown/platform/block.php' %}

{% include '@lp/@version-brown/bottom/block.php' %}

{% include '@lp/@version-brown/footer/block.php' %}

{% endblock %}



{% block blocks_popups %}

{% include '@lp/@version-brown/popups/block.php' %}

{% endblock %}


{% block script %}
{{ super() }}
<script src="lp/version-brown/js/script.js" defer="defer"></script>
{% endblock %}
