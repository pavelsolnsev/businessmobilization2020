{% extends "default.php" %}


{% block preversion %}
$promocode = isset($_GET['promocode']) ? urldecode( strtolower($_GET['promocode']) ) : '';
$thanksExternal = isset($_GET['thanksExternal']) ? urldecode( strtolower($_GET['thanksExternal']) ) : '';
{% endblock %}


{% block version %}
<?php
$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */
$BASE_HREF = str_replace('xn--80aahhocvjdpijgdy6a2o.xn--p1ai', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */
include_once $ROOT . 'lp/platform/translation.php';
include_once $ROOT . 'lp/platform/version.php';
?>
{% endblock %}


{% block styles %}
<link rel="stylesheet" href="css/lp-platform-style.css">
<link rel="stylesheet" href="css/lp-platform-responsive.css" media="(max-width: 1199px)">

<!--script src="https://widget.cloudpayments.ru/bundles/cloudpayments"></script-->
{% endblock %}



{% block blocks_inner %}
{% import '@lp/@platform/form/macro.php' as form %}

{% include '@lp/@platform/header/block.php' %}

<?php if ($version != 'blogger' && $version != 'tv' && $lang != 'en' && $version != 'retargeting') { ?>
	{% include '@lp/@platform/main-demo/block.php' %}
<?php } else { ?>
	{% include '@lp/@platform/main/block.php' %}
<?php } ?>


<?php if ($is_block_about) { ?>
	{% include 'about/block.php' %}
<?php } ?>

<?php if ($version == 'retargeting') { ?>
	<div class="d-md-none">{{ popup.registration('mobile-form-1') }}</div>
<?php } ?>

<?php if ($is_block_discussion) { ?>
	{% include 'discussion/block.php' %}
<?php } ?>

{% include '@lp/@platform/speakers/block.php' %}

<?php if ($is_block_price) { ?>
	{% include 'price/block.php' %}
	{% include 'faq/block.php' %}
<?php } ?>

{% include 'concept/block.php' %}

<?php if ($lang != 'en') { ?>
	{% include 'digital-plf/block.php' %}
<?php } ?>

{% include '@lp/@platform/format/block.php' %}
{% include 'community/block.php' %}
{% include '@lp/@platform/online-plf/block.php' %}

<?php if ($is_block_base) { ?>
	{% include 'base/block.php' %}
<?php } ?>

<?php if ($is_block_services) { ?>
	{% include 'services/block.php' %}
<?php } ?>

{% include 'organizer/block.php' %}

<?php if ($lang != 'en') { ?>
	{% include 'press/block.php' %}
	{% include 'reviews/block.php' %}
	{% include 'faq/block.php' %}
<?php } ?>

{% include 'partners/block.php' %}

<?php if ($version != 'blogger' && $version != 'tv' && $lang != 'en' && $version != 'retargeting') { ?>
	{% include '@lp/@platform/main-demo/block.php' %}
<?php } else { ?>
	{% include '@lp/@platform/main-platform/block.php' %}
<?php } ?>


{% include '@lp/@platform/footer/block.php' %}
{% endblock %}


{% block blocks_popups %}
{% include '@lp/@platform/popup/block.php' %}
{% include '@lp/@platform/popup-speakers/block.php' %}
{% include '@lp/@platform/popup-demo/block.php' %}

<?php if ($is_block_price) { ?>
	{% include 'popup-price/block.php' %}
	{% include 'popup-message/block.php' %}
<?php } ?>

{% endblock %}