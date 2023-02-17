{% extends "platform.php" %}

{% set PAGE_CLASS = 'page-short page-thanks' %}


{% block blocks_inner %}
	{% include '@lp/@platform/header/block.php' %}
	{% include '@lp/@platform/thanks/block-free.php' %}
	{% include '@lp/@platform/footer/block.php' %}
{% endblock %}


{% block blocks_popups %}
	{% include 'popup/block.php' %}
{% endblock %}
