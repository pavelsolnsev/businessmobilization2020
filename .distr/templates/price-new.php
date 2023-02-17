{% extends "default.php" %}
{% set popup_message = true %}
{% set PAGE_CLASS = 'page-short page-price' %}


{% block title %}
{{ super() }}
<!--script src="https://widget.cloudpayments.ru/bundles/cloudpayments"></script>
<script src="https://js.stripe.com/v3/"></script-->
{% endblock %}

{% block version %}
	<?php 
		$price_only_open = true;	
	?>
{% endblock %}

{% block styles %}
<?php if( $external_styles ) { echo $external_styles; } else { ?>
	<link rel="stylesheet" href="css/price-new-style.css">
	<link rel="stylesheet" href="css/price-new-responsive.css" media="(max-width: 1199px)">
<?php } ?>
{% endblock %}


{% block blocks_inner %}
	<?php switch ($external_url) {
 	case 'marketingforum-platform': ?>
	{% include 'header/block.php' %}
	{% include '@price/marketingforum-platform/price-new/block.php' %}
	<?php break;

	case 'developmentforum': ?>
	{% include 'header/block.php' %}
	{% include '@price/developmentforum/price-new/block.php' %}
	<?php break;

	case 'legalforum': ?>
	{% include 'header/block.php' %}
	{% include '@price/legalforum/price-new/block.php' %}
	<?php break;

	default: ?>
	{% include 'header/block.php' %}
	{% include 'price-new/block.php' %}
	<?php break;
	} ?>
{% endblock %}


{% block blocks_popups %}
	<?php switch ($external_url) {
 	case 'developmentforum': ?>
	{% include 'popup/block.php' %}
	{% include '@price/developmentforum/popup-price/block.php' %}
	<?php break;

	case 'legalforum': ?>
	{% include 'popup/block.php' %}
	{% include '@price/legalforum/popup-price/block.php' %}
	<?php break;

	default: ?>
	{% include 'popup/block.php' %}
	{% include 'popup-price-new/block.php' %}
	{% include 'popup-message/block.php' %}
	<?php break;
	} ?>
{% endblock %}
