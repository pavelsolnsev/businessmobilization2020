<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$get_version = $version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$get_partner = $partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
$external_url = isset($_GET['external_url']) ? urldecode( strtolower($_GET['external_url']) ) : '';
$lang = $get_lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode( strtolower($_GET['lang']) ) : 'ru';
$get_name = isset($_GET['name']) ? urldecode($_GET['name']) : '';
$get_phone = isset($_GET['phone']) ? urldecode($_GET['phone']) : '';
$get_email = isset($_GET['email']) ? urldecode($_GET['email']) : '';
$link = isset($_GET['link']) ? urldecode( strtolower($_GET['link']) ) : '';
$testingProductID = isset($_GET['3mm7SV0GpVEP']) ? trim($_GET['3mm7SV0GpVEP']) : null;

session_cache_limiter('nocache');
session_start();
if ( !isset($_SESSION['lang']) || isset($_GET['reset_lang']) ) {
	$_SESSION['lang'] = $get_lang;
} else {
	$lang = $_SESSION['lang'];
}



include_once $ROOT . 'chunks/translation.php';
include_once $ROOT . 'chunks/common.php';

if ( is_local_dev() ) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}




date_default_timezone_set('Europe/Moscow');
$_REQUEST["eId"] = 56989528;
if (array_key_exists("update", $_REQUEST)) {
	$_GET["update"] = $_REQUEST["update"];
}


include_once $ROOT . 'getinfo.php';
$JSONDATA = json_decode(file_get_contents($ROOT . 'content.json'));
include_once $ROOT . 'prices.php';

{# Блок для переопределения get-переменных на отдельных страницах в pages #}
{% block preversion %}{% endblock %}


include_once $ROOT . 'config.php';
include_once $ROOT . 'elastic.php';
include_once $ROOT . 'version.php';


?>
<!DOCTYPE html>

{# Блок для переопределения php-переменных версий на отдельных страницах в pages #}
{% block version %}{% endblock %}

<html lang="<?= $lang ?>" class="<?= is_webp() ? '' : 'no-webp' ?>">
<head>

	<?php if ( empty($external_url) ){ ?>
		<!-- Google Tag Manager -->
		<script>
			var fired = false;
			window.addEventListener('scroll', () => {
				if (fired === false) {
					fired = true;
					setTimeout(() => {
						(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?=$gtm?>');
					}, 1000)
				}
			});
		</script>
		<!-- End Google Tag Manager -->
		<!-- Facebook Pixel Code -->
		<script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '209676029541718'); fbq('track', 'PageView'); </script>
		<!-- End Facebook Pixel Code -->

	<?php } elseif ( $external_url == 'platform' ) { ?>

		<!-- Facebook Pixel Code -->
		<script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '209676029541718'); fbq('track', 'PageView'); </script>
		<!-- End Facebook Pixel Code -->
		<!-- Google Tag Manager --><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?=$gtm?>');</script><!-- End Google Tag Manager -->
	
	<?php } else { ?>
		<!-- Google Tag Manager --><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?=$gtm?>');</script><!-- End Google Tag Manager -->
	<?php } ?>

	<?php if ( $lang == 'ru' ) { ?>
	<meta name="facebook-domain-verification" content="9aidncvoxvvw0wazl6uwkjm64hc2c6" />
	<?php } ?>

	<?php if ( $lang == 'en' ) { ?>
	<meta name="facebook-domain-verification" content="vuwcczuee2l6ip037nfprvj3nrempd" />
	<?php } ?>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	{% block viewport %}
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	{% endblock %}
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	{% block title %}
	<title><?= $title ?></title>

	<base href="<?= $BASE_HREF ?>">

	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $description ?>">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image" content="<?= $share_image ?>?<?= date('md') ?>">
	<link rel="image_src" href="<?= $share_image ?>?<?= date('md') ?>">

	{% endblock %}

	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	{% block styles %}
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css" media="(max-width: 1199px)">
	{% endblock %}

	<link href="favicon.ico" type="image/x-icon" rel="icon">
</head>
<body class="<?= $body_class ?> <?= $version ? 'version-' . $version : '' ?> <?= $get_version && $get_version != $version ? 'version-' . $get_version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> <?= $version || $partner ? 'not-default' : 'default' ?> <?= $external_url ? 'external-url-' . $external_url : '' ?> lang-<?= $lang ?> {{ PAGE_CLASS }} <?= $version_main_speaker['id'] ? 'version-main-' . $version_main_speaker['id'] : '' ?> <?= $price_only_open ? 'price-only-open' : '' ?>">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?=$gtm?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php if ( empty($external_url)  || $external_url == 'platform' ){ ?>
		<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=209676029541718&ev=PageView&noscript=1"></noscript>
	<?php } ?>

	<img src="<?= $share_image ?>?<?= date('md') ?>" alt="" style="position: absolute; left: -100000px; z-index: 0">

	{% import 'form/macro.php' as form %}
	{% import 'popup/macro.php' as popup %}


	{% block blocks %}
	<div class="wrapper">
		{% block blocks_inner %}
		{% include 'header/block.php' %}
		<?php if ( $version == 'top50' ) { ?>
			{% include 'main-top50/block.php' %}
		<?php } else { ?>
			{% include 'main/block.php' %}
		<?php } ?>

		<?php if ( $is_block_about ) { ?>
			{% include 'about/block.php' %}
		<?php } ?>

		<?php if ( $version == 'retargeting' ) { ?>
			<div class="d-md-none">{{ popup.registration('mobile-form-1') }}</div>
		<?php } ?>

		<?php if ( $is_block_discussion ) { ?>
			{% include 'discussion/block.php' %}
		<?php } ?>

		{% include 'speakers/block.php' %}

		<?php if ( $is_block_price ) { ?>
			{% include 'price/block.php' %}
			{% include 'faq/block.php' %}
		<?php } ?>

		{#{% include 'themes/block.php' %}#}

		<?php if ( $version == 'retargeting' ) { ?>
			<div class="d-md-none">{{ popup.registration('mobile-form-2') }}</div>
		<?php } ?>

		{% include 'concept/block.php' %}

		<?php if ( $lang == 'ru' ) { ?>
		{#	{% include 'vtb/block.php' %}  #}
		<?php } ?>

		<?php if ( $lang != 'en' ) { ?>
			{% include 'digital-plf/block.php' %}
		<?php } ?>

		{% include 'format/block.php' %}

		{#{% include 'afterparty/block.php' %}#}
		{#{% include 'flash-mob/block.php' %}#}

		{% include 'community/block.php' %}
		{% include 'online-plf/block.php' %}

		<?php if ( $version == 'email' ) { ?>
			{% include 'price/block.php' %}
		<?php } ?>

		<?php if ( $is_block_base ) { ?>
			{% include 'base/block.php' %}
		<?php } ?>

		<?php if ( $is_block_services ) { ?>
			{% include 'services/block.php' %}
		<?php } ?>

		{% include 'organizer/block.php' %}

		<?php if ( $lang != 'en' ) { ?>
			{% include 'press/block.php' %}
			{% include 'reviews/block.php' %}
			{% include 'faq/block.php' %}
		<?php } ?>
		{#{% include 'worldclass/block.php' %}#}
		{% include 'partners/block.php' %}
		<?php if ( $version == 'top50' ) { ?>
			{% include 'main-top50/block.php' %}
		<?php } else { ?>
			{% include 'main-2/block.php' %}
		<?php } ?>


		<?php if ( $version == 'retargeting' ) { ?>
			<div class="d-md-none">{{ popup.registration('mobile-form-3') }}</div>
		<?php } ?>

		{% include 'footer/block.php' %}
		{% endblock %}
	</div><!-- wrapper -->

	<div class="d-none">
		{% block blocks_popups %}
		{% include 'popup/block.php' %}
		{% include 'popup-speakers/block.php' %}

		<?php if ( $is_block_price || $version == 'email') { ?>
			{% include 'popup-price/block.php' %}
			{% include 'popup-message/block.php' %}
		<?php } ?>

		{% endblock %}
	</div><!-- d-none -->
	{% endblock %}

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js" defer="defer"></script><![endif]-->
	<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.10/es5-shim.min.js" defer="defer"></script><![endif]-->
	<!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8" defer="defer"></script><![endif]-->

	<!--[if lt IE 9]><script src="https://cdn.synergy.ru/libs/jquery/jquery-1.12.4.min.js"></script><![endif]-->
	<!--[if gte IE 9]><!--><!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --><!--<![endif]-->
	<!--[if gte IE 9]><!--><script src="https://cdn.synergy.ru/libs/jquery/jquery-3.4.1.js"></script><!--<![endif]-->

	<!-- <script src="js/slick.min.js" defer="defer"></script> -->
	<script src="js/swiper.min.js"></script>
	<script src="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.js"></script>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js" defer="defer"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.js" defer="defer"></script> -->

	{% block script %}
	<script src="js/script.js" defer="defer"></script>

	<?php if ( $external_url == 'synergyonline' ) { ?>
		<!-- <script src="js/script-login-local.js" defer="defer"></script> -->
		<script src="https://synergy.online/local/templates/auth/js/script-login.js" defer="defer"></script>
	<?php } ?>
	{% endblock %}

	<script src="https://widget.cloudpayments.ru/bundles/cloudpayments"></script>
	<script src="https://js.stripe.com/v3/"></script>

	<!-- Plugins css -->
	<script>
		(function(){
			function loadCSS(hf) {var ms=document.createElement('link');ms.rel='stylesheet';ms.href=hf;document.getElementsByTagName('head')[0].insertBefore(ms, document.getElementsByTagName('link')[0]);}
			loadCSS('https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.css');
			// loadCSS('css/slick.min.css');
			loadCSS('css/swiper.min.css');
			loadCSS('https://fonts.googleapis.com/css?family=PT+Sans:400,700');
			// loadCSS('https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css');
		})();
	</script>

	{% block lander %}
	<script src="https://syn.su/js/lander.js?v=10042020" async="async"></script>
	{% endblock %}

	<!-- <script src="https://yastatic.net/share2/share.js" async="async"></script> -->

</body>
</html>
