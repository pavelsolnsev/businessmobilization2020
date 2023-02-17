{% extends "platform.php" %}

{% set PAGE_CLASS = 'page-main page-platform' %}


{% block version %}
{{ super() }}
<?php
$phone1 = '';
$phone2 = '8 800 200 54 40';
$email = '';
$gtm = 'GTM-TTN54WK';

$version_speakers_default_num = 15;
$version_speakers_visible_num = 15;

$_['ru']['speakers__title'] = 'Учитесь у&nbsp;лучших спикеров';
$_['en']['speakers__title'] = 'Speakers';

$_['ru']['speakers__subtitle'] = 'Подборки самых вдохновляющих выступлений приглашенных спикеров';

$_['ru']['speakers__link-more'] = 'Показать ещё спикеров';
$_['en']['speakers__link-more'] = 'See more speakers';

$_['ru']['price-payment__title'] = 'Тарифы подписки';

$_['ru']['price-payment__button-pay'] = 'Оформить подписку';


/* Postprocess */
$phone_link = get_phone_link($phone1);
$phone_link_2 = get_phone_link($phone2);
$email_link = get_email_link($email);
?>
{% endblock %}


{% block styles %}
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/lp-synergyonline-platform-style.css">
<link rel="stylesheet" href="css/lp-synergyonline-platform-responsive.css" media="(max-width: 1199px)">
{% endblock %}


{% block blocks_inner %}
{% include '@lp/@synergyonline-platform/header/block.php' %}
{% include '@lp/@synergyonline-platform/main/block.php' %}
{% include '@lp/@synergyonline-platform/about/block.php' %}
{% include '@lp/@synergyonline-platform/weekly-forums/block.php' %}
{% include '@lp/@synergyonline-platform/videos/block.php' %}
{% include 'speakers/block.php' %}
{% include 'vtb/block.php' %}
{% include '@lp/@synergyonline-platform/community/block.php' %}
{#{% include '@lp/@synergyonline-platform/price/block.php' %}#}
{% include '@lp/@synergyonline-platform/faq/block.php' %}
{% include '@lp/@synergyonline-platform/press/block.php' %}
{% include '@lp/@synergyonline-platform/news/block.php' %}
{% include '@lp/@synergyonline-platform/footer/block.php' %}

{% endblock %}

{% block blocks_popups %}
{% include 'popup-speakers/block.php' %}
{% include 'popup-price/block.php' %}
{% include 'popup-message/block.php' %}
{% include '@lp/@synergyonline-platform/popup/block.php' %}
{% endblock %}

{% block script %}
{{ super() }}
<script src="https://widget.cloudpayments.ru/bundles/cloudpayments" defer="defer"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="lp/platform/js/script.js" defer="defer"></script>
<script src="https://synergy.online/local/templates/auth/js/script-login.js" defer="defer"></script>
{% endblock %}
