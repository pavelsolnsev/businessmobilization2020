<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
include_once $ROOT . 'chunks/common.php';

$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
$testingProductID = isset($_GET['3mm7SV0GpVEP']) ? trim($_GET['3mm7SV0GpVEP']) : null;
$theme = 'light';
$canonical = parse_url($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], PHP_URL_PATH);
$httpHostName = filter_var($_SERVER['HTTP_HOST'], FILTER_SANITIZE_URL);

require_once $ROOT . 'version.php';

  date_default_timezone_set('Europe/Moscow');
  $_REQUEST["eId"] = 54800428;
  include_once $ROOT . 'getinfo.php';

  $JSONDATA = json_decode(file_get_contents($ROOT . 'content.json'));

  include_once $ROOT . 'prices.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php if (!empty($_SERVER['DOCUMENT_URI'])) : ?>
    <base href="//<?= $_SERVER['HTTP_HOST'] . str_replace(substr($_SERVER['DOCUMENT_URI'], 1, -9), '', $_SERVER['REQUEST_URI']) ?>">
    <?php else : ?>
      <base href="//<?= $_SERVER['HTTP_HOST'] ?>">
    <?php endif; ?>

    <title><?=$title?></title>

    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css" media="(max-width: 1199px)">

    <link rel="shortcut icon" href="//synergy.ru/img/favicon.ico" type="image/x-icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.10/es5-shim.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/rem/1.3.4/js/rem.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->
<!-- Google Tag Manager -->
<script>
  var fired = false;

  window.addEventListener('scroll', () => {
    if (fired === false) {
      fired = true;
      setTimeout(() => {
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-M7T7GF');
      }, 1000)
    }
  });
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '209676029541718');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=209676029541718&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
<script src="https://widget.cloudpayments.ru/bundles/cloudpayments"></script>
</head>
<body class="<?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> <?= $version || $partner ? 'not-default' : 'default' ?> {{ PAGE_CLASS }}">
  <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M7T7GF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager -->

  {% import 'form/macro.php' as form %}

  <div class="wrapper">
    {% include 'header/block.php' %}
    {% include 'speakers-test/block.php' %}
    {% include 'price/block.php' %}
  </div>

  <div class="d-none">
    {% include 'popup/block.php' %}
    {% include 'popup-price/block.php' %}
  </div>

  <script src="https://cdn.synergy.ru/libs/jquery/jquery-3.4.1.js"></script>
  <script src="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.js"></script>
  <!-- <script src="https://syn.su/js/lander.js"></script> -->
  <script src="js/test.js"></script>
</body>

</html>
