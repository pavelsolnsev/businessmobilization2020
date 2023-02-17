{% extends "default.php" %}


{% block preversion %}
if ($lang == 'ru') {
$link = 'https://synergy.online/lp/version-taleb/price/';
} elseif ($lang == 'es') {
$link = 'https://synergyglobal.com/lp/taleb-es/price/';
} elseif ($lang == 'pt') {
$link = 'https://synergyglobal.com/lp/taleb-pt/price/';
}elseif ($lang == 'tr') {
$link = 'https://synergyglobal.com/lp/taleb-tr/price/';
} else {
$link = 'https://synergyglobal.com/lp/taleb/price/';
}
{% endblock %}


{% block version %}
<?php

if ($lang == 'en' || $lang == 'es' || $lang == 'pt' || $lang == 'tr') {
	$email = "<?= _('email__taleb') ?>";
} else {
	$email_link = '';
}

/* $quote_id = 4293; */

$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */

$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;онлайн-мастер-класс';
?>
{% endblock %}


{% block styles %}
<link rel="stylesheet" href="css/lp-version-taleb-style.css">
<link rel="stylesheet" href="css/lp-version-taleb-responsive.css">
{% endblock %}


{% block blocks_inner %}

{% include '@lp/@version-taleb/header/block.php' %}
{% include '@lp/@version-taleb/main/block.php' %}
{% include '@lp/@version-taleb/about/block.php' %}
<?php if ($version == 'lp-version-taleb-email') { ?>
{% include '@lp/@version-taleb/price/block.php' %}
<?php } ?>
<?php if ($version != 'lp-version-taleb-email') { ?>
{% include '@lp/@version-taleb/registration/block.php' %}
<?php } ?>
{% include '@lp/@version-taleb/whois/block.php' %}
{% include '@lp/@version-taleb/reputation/block.php' %}
{% include '@lp/@version-taleb/pay/block.php' %}
{% include '@lp/@version-taleb/beginning/block.php' %}
{% include '@lp/@version-taleb/after/block.php' %}
{% include '@lp/@version-taleb/what-now/block.php' %}
{% include '@lp/@version-taleb/comingsoon/block.php' %}
<?php if ($version != 'lp-version-taleb-email') { ?>
{% include '@lp/@version-taleb/registration/block.php' %}
<?php } ?>
{% include '@lp/@version-taleb/platform/block.php' %}
{% include '@lp/@version-taleb/main/block.php' %}
{% include '@lp/@version-taleb/footer/block.php' %}

{% endblock %}

<div class="d-none">
	{% block blocks_popups %}
		{% include 'popup/block.php' %}
		{% include 'popup-price/block.php' %}
		{% include 'popup-message/block.php' %}
	{% endblock %}
</div><!-- d-none -->

{% block script %}
{{ super() }}
<script src="lp/version-taleb/js/script.js" defer="defer"></script>
{% endblock %}


<?php if ($version == 'lp-version-taleb-email' && $lang != 'en') { ?>
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=ea126643-7c97-4cb6-aa2e-cdb0d8141ff1"> </script>
<!-- End of  Zendesk Widget script --> 
<?php } ?>
