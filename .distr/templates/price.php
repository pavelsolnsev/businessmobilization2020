{% extends "default.php" %}
{% set popup_message = true %}
{% set PAGE_CLASS = 'page-short page-price' %}


{% block title %}
{{ super() }}
<!--script src="https://widget.cloudpayments.ru/bundles/cloudpayments"></script>
<script src="https://js.stripe.com/v3/"></script-->
{% endblock %}


{% block styles %}
<?php if( $external_styles ) { echo $external_styles; } else { ?>
	{{ super() }}
<?php } ?>
{% endblock %}


{% block blocks_inner %}
<?php if ($version == 'top50') { ?>
	{% include '@price/top50/header/block.php' %}
	{% include '@price/top50/price/block.php' %}
<?php } else { ?>
	<?php switch ($external_url) {
		case 'brain2020': ?>
		{% include 'header/block.php' %}
		{% include '@price/brain2021/price/block.php' %}
		<?php break;

		case 'synergydigitalplatform': ?>
		{% include 'header/block.php' %}
		{% include '@price/synergydigitalplatform/price/block.php' %}
		<?php break;

		case 'kotlerprice': ?>
		{% include 'header/block.php' %}
		{% include '@price/kotlerprice/price/block.php' %}
		<?php break;

		case 'beautyforum': ?>
		{% include '@price/beautyforum/header/block.php' %}
		{% include '@price/beautyforum/price/block.php' %}
		<?php break;

		case 'civilization': ?>
		{% include 'header/block.php' %}
		{% include '@price/civilization/price/block.php' %}
		<?php break;
		case 'hrforum': ?>
		{% include 'header/block.php' %}
		{% include '@price/hrforum/price/block.php' %}
		<?php break;
		case 'synergywoman': ?>
		{% include 'header/block.php' %}
		{% include '@price/synergywoman/price/block.php' %}
		<?php break;
		default: ?>
		{% include 'header/block.php' %}
		{% include 'price/block.php' %}
		<?php break;
	} ?>
<?php } ?>
{% endblock %}


{% block blocks_popups %}
<?php if ($version == 'top50') { ?>
	{% include 'popup/block.php' %}
	{% include '@price/top50/popup-price/block.php' %}
<?php } else { ?>
<?php switch ($external_url) {
	case 'synergydigitalplatform': ?>
	{% include 'popup/block.php' %}
	{% include '@price/synergydigitalplatform/popup-price/block.php' %}
	<?php break;
	case 'hrforum': ?>
	{% include 'popup/block.php' %}
	{% include '@price/hrforum/popup-price/block.php' %}
	<?php break;
 	case 'synergywoman': ?>
    {% include 'popup/block.php' %}
    {% include '@price/synergywoman/popup-price/block.php' %}
	<?php break;
 	case 'developmentforum': ?>
    {% include 'popup/block.php' %}
    {% include '@price/developmentforum/popup-price/block.php' %}
	<?php break;
	default: ?>
	{% include 'popup/block.php' %}
	{% include 'popup-price/block.php' %}
	{% include 'popup-message/block.php' %}
	<?php break;
} ?>
<?php } ?>
{% endblock %}
