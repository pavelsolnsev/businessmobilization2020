{% extends "default.php" %}

{% block version %}
<?php
$version = 'roach';
$body_class .= ' page-speaker';
$email_link = '';

$version_main_speaker['id'] = 'roach';
$version_main_speaker['image'] = 'img/main/speaker/roach.png';
$version_main_speaker['content'] = '';
$version_main_speaker['date'] = '26.08';
$version_main_speaker['time'] = '';


$_['ru']['version_form_title'] = $_['ru']['main__form-title'] = 'Зарегистрироваться на&nbsp;мастер-класс';
$_['ru']['version_form_button'] = 'Регистрация';
$version_form_title = _('version_form_title');
$version_form_button = _('version_form_button');
$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */

if ( strpos($_SERVER['HTTP_HOST'], 'synergy.online') !== false ) { /* https://sd.synergy.ru/Task/View/552120 */
	$action .= "&link=https://synergy.online/lp/synergyonlineforum/price/?version={$version}";
}
?>
{% endblock %}


{% block styles %}
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/lp-speaker-roach-style.css">
<link rel="stylesheet" href="css/lp-speaker-roach-responsive.css" media="(max-width: 1199px)">
{% endblock %}

{% block blocks_inner %}
{% include '@lp/@speaker/header/block.php' %}
{% include '@lp/@roach/main/block.php' %}
{% include '@lp/@roach/result/block.php' %}
{% include '@lp/@roach/about/block.php' %}
{% include '@lp/@roach/rules/block.php' %}
{% include '@lp/@speaker/reviews/block.php' %}
{% include '@lp/@speaker/platform/block.php' %}
{% include '@lp/@speaker/base/block.php' %}
{% include '@lp/@speaker/services/block.php' %}
{% include 'organizer/block.php' %}
{% include '@lp/@speaker/faq/block.php' %}
{% set main_bottom = true %}
{% include '@lp/@roach/main/block.php' %}
{% include '@lp/@speaker/footer/block.php' %}
{% endblock %}
