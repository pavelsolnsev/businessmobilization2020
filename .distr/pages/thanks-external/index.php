{% extends "default.php" %}

{% set PAGE_CLASS = 'page-short page-price' %}

{% block title %}
{{ super() }}
<script src="https://widget.cloudpayments.ru/bundles/cloudpayments" defer="defer"></script>
<script src="https://js.stripe.com/v3/"></script>
{% endblock %}


{% block blocks_inner %}
{% include 'header/block.php' %}
{% include 'price/block.php' %}
{% endblock %}

{% block blocks_popups %}
{% include 'popup/block.php' %}
{% include 'popup-price/block.php' %}
{% endblock %}

{% block lander %}
{% endblock %}