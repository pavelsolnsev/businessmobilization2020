{% extends "platform.php" %}

{% block styles %}
<link rel="stylesheet" href="css/lp-platform-style.css">
<link rel="stylesheet" href="css/lp-platform-responsive.css">
{% endblock %}

{% set PAGE_CLASS = 'page-short page-thanks' %}

{% block blocks_inner %}
	{#% include '@lp/@platform/header/block.php' %#}
	{#% include '@lp/@platform/main-thanks/block.php' %#}
	{#% include '@lp/@platform/about/block.php' %#}
	{#% include '@lp/@platform/speakers/block.php' %#}
	{#% include '@lp/@platform/main-thanks/block.php' %#}
	{#% include '@lp/@platform/footer/block.php' %#}

	{% include '@lp/@platform/genesis/block.php' %}

{% endblock %}


{% block blocks_popups %}
	{% include 'popup/block.php' %}
	{#% include '@lp/@platform/popup-speakers/block.php' %#}
{% endblock %}