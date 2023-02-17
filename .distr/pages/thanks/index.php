{% extends "default.php" %}

{% set PAGE_CLASS = 'page-short page-thanks' %}

{% block version %}
<?php $is_page_thanks = true; ?>
{% endblock %}

{% block blocks_inner %}
{% include 'header/block.php' %}
{% include 'thanks_form/block.php' %}
{% endblock %}

{% block blocks_popups %}
{% include 'popup/block.php' %}
{% endblock %}