{% extends "default.php" %}

{% set PAGE_CLASS = 'page-short page-thanks' %}

{% block blocks_inner %}
{% include 'header/block.php' %}
{% include 'offer/block.php' %}
{% endblock %}

{% block blocks_popups %}
{% include 'popup/block.php' %}
{% endblock %}