{% extends "default.php" %}


{% block preversion %}
if ($lang == 'ru') {
$link = 'https://synergy.online/lp/version-norris/price/';
} else {
$link = 'https://synergyglobal.com/lp/norris/price/';
}
{% endblock %}


{% block version %}
<?php

if ($lang == 'en') {
	$email = "<?= _('email__norris') ?>";
} else {
	$email_link = '';
}

/* $quote_id = 4293; */

$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */

$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;онлайн-мастер-класс';
?>
{% endblock %}


{% block styles %}
<link rel="stylesheet" href="css/lp-version-norris-style.css">
<link rel="stylesheet" href="css/lp-version-norris-responsive.css">
{% endblock %}


{% block blocks_inner %}

{% include '@lp/@version-norris/header/block.php' %}
{% include '@lp/@version-norris/main/block.php' %}
{% include '@lp/@version-norris/about/block.php' %}
{% include '@lp/@version-norris/registration/block.php' %}
<?php if ( $lang == 'ru' ) { ?>
{% include 'vtb/block.php' %}
<?php } ?>
{% include '@lp/@version-norris/beginning/block.php' %}
{% include '@lp/@version-norris/reputation/block.php' %}
{% include '@lp/@version-norris/pay/block.php' %}
{% include '@lp/@version-norris/lee/block.php' %}
{% include '@lp/@version-norris/start/block.php' %}
{% include '@lp/@version-norris/what-now/block.php' %}
{% include '@lp/@version-norris/comingsoon/block.php' %}
{% include '@lp/@version-norris/registration/block.php' %}
{% include '@lp/@version-norris/platform/block.php' %}
{% include '@lp/@version-norris/main/block-2.php' %}
{% include '@lp/@version-norris/footer/block.php' %}

{% endblock %}

<div class="d-none">
	{% block blocks_popups %}
		{% include 'popup/block.php' %}
		{% include 'popup-price/block.php' %}
		{% include 'popup-message/block.php' %}
		{% include '@lp/@version-norris/popup/block.php' %}
	{% endblock %}
</div><!-- d-none -->

{% block script %}
{{ super() }}
<script src="lp/version-norris/js/script.js" defer="defer"></script>
{% endblock %}


<?php if ($version == 'lp-version-norris-email' && $lang != 'en') { ?>
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=ea126643-7c97-4cb6-aa2e-cdb0d8141ff1"> </script>
<!-- End of  Zendesk Widget script --> 
<?php } ?>
