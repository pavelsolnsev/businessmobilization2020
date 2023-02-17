{% extends "default.php" %}


{% block version %}
<?php
include_once $ROOT . 'lp/vujicic/version.php';
?>
{% endblock %}


{% block styles %}
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/lp-speaker-style.css">
<link rel="stylesheet" href="css/lp-speaker-responsive.css" media="(max-width: 1199px)">
{% endblock %}


{% block blocks_inner %}
{% include '@lp/@speaker/header/block.php' %}
{% include '@lp/@speaker/main/block.php' %}
{% include '@lp/@speaker/themes/block.php' %}
{% include '@lp/@speaker/result/block.php' %}
{% include '@lp/@speaker/about/block.php' %}
{% include '@lp/@speaker/rules/block.php' %}
{% include '@lp/@speaker/reviews/block.php' %}
{% include '@lp/@speaker/platform/block.php' %}
{% include '@lp/@speaker/base/block.php' %}
{% include '@lp/@speaker/services/block.php' %}
{% include 'organizer/block.php' %}
{% include '@lp/@speaker/faq/block.php' %}
{% include '@lp/@speaker/main-2/block.php' %}
{% include '@lp/@speaker/footer/block.php' %}
{% endblock %}
