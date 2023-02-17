{% extends "price.php" %}


{% block preversion %}
$external_url = 'platform';
{% endblock %}


{% block version %}
<?php
$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */
include_once $ROOT . 'lp/platform/translation.php';
include_once $ROOT . 'lp/platform/version.php';
?>
{% endblock %}
