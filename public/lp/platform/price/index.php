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



$external_url = 'platform';



include_once $ROOT . 'config.php';
include_once $ROOT . 'elastic.php';
include_once $ROOT . 'version.php';


?>
<!DOCTYPE html>



<?php
$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* ?????????????? base href ?????? ???????????? ???? ?????????????? */
include_once $ROOT . 'lp/platform/translation.php';
include_once $ROOT . 'lp/platform/version.php';
?>


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
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	

	<title><?= $title ?></title>

	<base href="<?= $BASE_HREF ?>">

	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $description ?>">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image" content="<?= $share_image ?>?<?= date('md') ?>">
	<link rel="image_src" href="<?= $share_image ?>?<?= date('md') ?>">

	
<!--script src="https://widget.cloudpayments.ru/bundles/cloudpayments"></script>
<script src="https://js.stripe.com/v3/"></script-->


	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
<?php if( $external_styles ) { echo $external_styles; } else { ?>
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css" media="(max-width: 1199px)">
	
<?php } ?>


	<link href="favicon.ico" type="image/x-icon" rel="icon">
</head>
<body class="<?= $body_class ?> <?= $version ? 'version-' . $version : '' ?> <?= $get_version && $get_version != $version ? 'version-' . $get_version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> <?= $version || $partner ? 'not-default' : 'default' ?> <?= $external_url ? 'external-url-' . $external_url : '' ?> lang-<?= $lang ?> page-short page-price <?= $version_main_speaker['id'] ? 'version-main-' . $version_main_speaker['id'] : '' ?> <?= $price_only_open ? 'price-only-open' : '' ?>">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?=$gtm?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php if ( empty($external_url)  || $external_url == 'platform' ){ ?>
		<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=209676029541718&ev=PageView&noscript=1"></noscript>
	<?php } ?>

	<img src="<?= $share_image ?>?<?= date('md') ?>" alt="" style="position: absolute; left: -100000px; z-index: 0">

	
	


	
	<div class="wrapper">
		
<?php if ($version == 'top50') { ?>
	<header class="header price__fixed lazy">
    <div class="container">
        <div class="header__block">
            <div class="header__block-logo">
                <img src="img/@price/beautyforum/header/logo.svg" alt="">
            </div>

            <div class="header__block-link price__block">
                <a href="+74957878767" class="phone">8 495 787 8767</a>
                <a href="+74957878767" class="phone-mobile"><img src="img/@price/beautyforum/header/phone.svg" alt=""></a>
            </div>

        </div>
    </div>
</header>
	


<section class="price" id="price">
			
	<div class="price__ticket-wrap">
		
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>

		<div class="container">
				
<a href="#payment-wrapper" class="payment-button scroll"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php /* } elseif ( $external_url == 'brain2021') { echo 'myBlock' ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="<?= $econom_event_id ?>" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		 <php */ ?>

	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php } ?>

</div><!-- payments__wrapper -->


		</div><!-- container -->
	</div>

	<div class="price__bottom">
		<div class="container">
			<?php if ( $lang != 'en' ) { ?>
			

<div class="price-faq" id="price-faq">

	<div class="price-faq__title condensed">FAQ</div>
	<div class="price-faq__box">

		
		<div class="price-faq__item price-faq__item_1 faq__item " data-question="<?= _("price-faq-question-1") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-1") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-1") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_2 faq__item " data-question="<?= _("price-faq-question-2") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-2") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-2") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_3 faq__item " data-question="<?= _("price-faq-question-3") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-3") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-3") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_4 faq__item " data-question="<?= _("price-faq-question-5") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-5") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-5") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_5 faq__item " data-question="<?= _("price-faq-question-6") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-6") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-6") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_6 faq__item " data-question="<?= _("price-faq-question-7") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-7") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-7") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_7 faq__item " data-question="<?= _("price-faq-question-8") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-8") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-8") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_8 faq__item " data-question="<?= _("price-faq-question-10") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-10") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-10") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_9 faq__item " data-question="<?= _("price-faq-question-12") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-12") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-12") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_10 faq__item " data-question="<?= _("price-faq-question-13") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-13") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-13") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_11 faq__item " data-question="<?= _("price-faq-question-14") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-14") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-14") ?></div>
		</div>
		

	</div><!-- price-faq__box -->

</div><!-- price-faq -->

			<?php } ?>
			
<?php if ( $external_url ) { ?>

	<div class="price-base" id="price-base">
		<div class="row">
			<div class="col-lg-6">
				<div class="price-base__title condensed"><?= _('price-base__title') ?></div>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__logo"><img data-src="img/price/base/logo.svg" class="lazy" alt=""></div>
				</div><!-- price-base__right -->
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__subtitle"><?= _('price-base__subtitle-1') ?></div>
				<?= _('price-base__text-1') ?>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__subtitle"><?= _('price-base__subtitle-2') ?></div>
					<?= _('price-base__text-2') ?>
				</div><!-- price-base__right -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- price-base -->

<?php } else { ?>

	<div class="price-prod price-prod_base" id="price-base">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/base/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-base__title') ?></div>
				<p class="price-prod__text"><?= _('price-base__text-1') ?></p>
				<p class="price-prod__text"><?= _('price-base__text-2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/base/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-base -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-sbs" id="price-sbs">
		<div class="price-sbs__title condensed"><?= _('price-sbs__title') ?></div>
		<div class="price-sbs__text price-sbs__text_1"><?= _('price-sbs__text_1') ?></div>
		<div class="price-sbs__text price-sbs__text_2"><?= _('price-sbs__text_2') ?></div>
		<div class="price-sbs__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.svg' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } else { ?>

	<div class="price-prod price-prod_sbs" id="price-sbs">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.png' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-sbs__title') ?></div>
				<p class="price-prod__text"><?= _('price-sbs__text_1') ?></p>
				<p class="price-prod__text"><?= _('price-sbs__text_2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/sbs/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-crm" id="price-crm">
		<div class="price-crm__title condensed"><?= _('price-crm__title') ?></div>
		<div class="price-crm__text"><?= _('price-crm__text') ?></div>
		<div class="price-crm__logo"><img data-src="img/price/crm/logo.svg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } else { ?>

	<div class="price-prod price-prod_crm" id="price-crm">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/crm/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-crm__title') ?></div>
				<p class="price-prod__text"><?= _('price-crm__text') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/crm/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-lang" id="price-lang">
		<div class="price-lang__title condensed"><?= _('price-lang__title') ?></div>
		<div class="price-lang__description"><?= _('price-lang__description') ?></div>
		<div class="price-lang__bar">
			<div class="price-lang__subtitle condensed">
				<div class="price-lang__subtitle-inner"><?= _('price-lang__subtitle') ?></div>
			</div>
			<ul class="price-lang__list">
				<li class="price-lang__item price-lang__item_1 condensed"><?= _('price-lang__item_1') ?></li>
				<li class="price-lang__item price-lang__item_2 condensed"><?= _('price-lang__item_2') ?></li>
				<li class="price-lang__item price-lang__item_3 condensed"><?= _('price-lang__item_3') ?></li>
			</ul>
		</div>
	</div><!-- price-lang -->

<?php } else { ?>

	<div class="price-prod price-prod_lang" id="price-lang">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/lang/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-lang__title') ?></div>
				<p class="price-prod__text"><?= _('price-lang__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/lang/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-lang -->

<?php } ?>

			<?php if ( $lang != 'en' ) { ?>
			
<?php if ( $external_url ) { ?>

	<div class="price-university" id="price-university">
		<div class="price-university__title condensed"><?= _('price-university__title') ?></div>
		<div class="price-university__description"><?= _('price-university__description') ?></div>
		<div class="price-university__bar">
			<div class="price-university__logo"><img class="lazy" data-src="img/price/university/logo.png" alt="icon"></div>
			<div class="price-university__box">
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_1') ?></div>
					<div class="price-university__item-text "><?= _('price-university__item-text_1') ?></div>
				</div>
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_2') ?></div>
					<div class="price-university__item-text"><?= _('price-university__item-text_2') ?></div>
				</div>
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_3') ?></div>
					<div class="price-university__item-text"><?= _('price-university__item-text_3') ?></div>
				</div>
			</div>
		</div>
	</div><!-- price-university -->

<?php } else { ?>

	<div class="price-prod price-prod_university" id="price-university">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img class="lazy" data-src="img/price/university/logo_blue.png" alt="icon"></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-university__title') ?></div>
				<p class="price-prod__text"><?= _('price-university__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/university/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-university -->

<?php } ?>

			
<div class="price-footer" id="price-footer">
	<a href="files/reccuring_offerta.pdf" target="_blank" data-fancybox>?????????????? ????????????</a>
</div><!-- price-promo -->

			<?php } ?>
		</div><!-- container -->
	</div><!-- price__bottom -->
	
</section>
<?php } else { ?>
	<?php switch ($external_url) {
		case 'brain2020': ?>
		

<section class="header" id="header">
	
	<div class="header__top">
		<div class="container">
			<div class="header__row header__row_1 row no-gutters">

				<div class="header__logo-col col align-self-center">

					<div class="header__logo">
						
						
						<a href="<?= $URL ?>../">
							<img src="<?= $lang == 'ru' ? 'img/header/synergy.svg' : 'img/header/synergy_en.svg' ?>" alt="">
						</a>

						<?php if ( $lang == 'ru') { ?>
							<span class="header__logo-vtb">
								<a href="http://vtb.synergy.ru"><img src="https://vtb.synergy.ru/vtb/img/vtb_logo_black.svg" alt="?????? - ?????????????????????? ??????????????"></a>
							</span>
						<?php } ?>
						
					</div>

					<?php if ( !$is_page_thanks ) { ?>
						<?= $version_header_logo_1 ?>
						<?= $version_header_logo_2 ?>
					<?php } ?>

				</div><!-- col -->
				<div class="header__phone-col col col-md-auto align-self-center">

					<div class="header__phone">
						<?php /* ?> <?= $email_link ?> <?php */ ?>
						<?= $phone_link ?>
						<?= $phone_link_2 ?>
					</div>

				</div><!-- col -->
				<div class="header__button-col header__button-col_reg col-md-auto">

					<?php if ($version == 'retargeting') { ?>
						<a href="#popup-registration" class="header__button header__button_registration button d-none d-md-flex" data-fancybox><?= $version_form_button ?></a>
						<a href="#mobile-form-1" class="header__button header__button_registration header__button_registration_1 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-2" class="header__button header__button_registration header__button_registration_2 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-3" class="header__button header__button_registration header__button_registration_3 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
					<?php } elseif ( $external_url == 'synergyonline' ) { ?>
						<a href="#popup-synergyonline" class="header__button header__button_enter button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#entry').show()">????????<i></i></a>
						<a href="#popup-synergyonline" class="header__button header__button_registration button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#registration').show()">??????????????????????</a>
					<?php } elseif ( $version == 'lp-version-taleb-email' ) { ?>
						<a href="#price" class="header__button header__button_registration button scroll">
							<span class="d-none d-md-inline"><?= _('main__taleb_button_2') ?></span>
							<span class="d-md-none"><?= _('main__taleb_button_2') ?></span>
						</a>
					<?php } else { ?>
						<a href="<?=$version_form_href?>" class="header__button header__button_registration button" data-fancybox>
							<span class="d-none d-md-inline"><?= $version_form_button ?></span>
							<span class="d-md-none"><?= $version_form_button_mobile ?></span>
						</a>
					<?php } ?>

				</div><!-- col -->
				<div class="header__toggle-popup-col col-auto d-md-none">

					<a class="header__toggle-popup button" data-toggle-class="page-menu-opened" data-href="body"><i class="icon-menu"></i><i class="icon-menu-close"></i></a>

				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- header__top -->
	

	
	<div class="header__bottom">
		<div class="header__row header__row_2 container">

			<div class="header__links align-self-center">
				
				<div class="header__links-item header__links-item_reg"><a href="#popup-registration" data-fancybox class="header__links-link"><?= $version_form_button ?></a></div>
				<div class="header__links-item"><a href="#speakers" class="header__links-link scroll"><?= _('header__links-speakers') ?></a></div>
				<div class="header__links-item"><a href="#concept" class="header__links-link scroll"><?= _('header__links-concept') ?></a></div>
				<?php /* ?>
				<div class="header__links-item"><a href="#themes" class="header__links-link scroll"><?= _('header__links-topics') ?></a></div>
				<?php */ ?>
				<div class="header__links-item"><a href="#format" class="header__links-link scroll"><?= _('header__links-format') ?></a></div>
				<?php if ( $is_block_price ) { ?>
					<div class="header__links-item"><a href="#price" class="header__links-link scroll"><?= _('header__links-price') ?></a></div>
					<div class="header__links-item"><a href="#faq" class="header__links-link scroll">FAQ</a></div>
				<?php } else { ?>
					<div class="header__links-item"><a href="#partners" class="header__links-link scroll"><?= _('header__links-partners') ?></a></div>
				<?php } ?>
				<div class="header__links-item"><a href="#online-plf" class="header__links-link scroll"><?= _('header__links-online-plf') ?></a></div>
				<div class="header__links-item header__links-item_franch"><a href="#franchise" class="header__links-link scroll"><?= _('header__links-franchise') ?></a></div>
				<div class="header__links-item header__links-item_press"><a href="#press" class="header__links-link scroll"><?= _('header__links-press') ?></a></div>
				
			</div><!-- header__links -->

		</div><!-- container -->
	</div><!-- header__bottom -->
	

</section><!-- header -->

		


<section class="price" id="price">
	
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>


	<div class="container">

		
<a href="#payment-wrapper" class="payment-button scroll"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php /* } elseif ( $external_url == 'brain2021') { echo 'myBlock' ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="<?= $econom_event_id ?>" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		 <php */ ?>

	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php } ?>

</div><!-- payments__wrapper -->


		

	</div><!-- container -->
	
</section>
		<?php break;

		case 'synergydigitalplatform': ?>
		

<section class="header" id="header">
	
	<div class="header__top">
		<div class="container">
			<div class="header__row header__row_1 row no-gutters">

				<div class="header__logo-col col align-self-center">

					<div class="header__logo">
						
						
						<a href="<?= $URL ?>../">
							<img src="<?= $lang == 'ru' ? 'img/header/synergy.svg' : 'img/header/synergy_en.svg' ?>" alt="">
						</a>

						<?php if ( $lang == 'ru') { ?>
							<span class="header__logo-vtb">
								<a href="http://vtb.synergy.ru"><img src="https://vtb.synergy.ru/vtb/img/vtb_logo_black.svg" alt="?????? - ?????????????????????? ??????????????"></a>
							</span>
						<?php } ?>
						
					</div>

					<?php if ( !$is_page_thanks ) { ?>
						<?= $version_header_logo_1 ?>
						<?= $version_header_logo_2 ?>
					<?php } ?>

				</div><!-- col -->
				<div class="header__phone-col col col-md-auto align-self-center">

					<div class="header__phone">
						<?php /* ?> <?= $email_link ?> <?php */ ?>
						<?= $phone_link ?>
						<?= $phone_link_2 ?>
					</div>

				</div><!-- col -->
				<div class="header__button-col header__button-col_reg col-md-auto">

					<?php if ($version == 'retargeting') { ?>
						<a href="#popup-registration" class="header__button header__button_registration button d-none d-md-flex" data-fancybox><?= $version_form_button ?></a>
						<a href="#mobile-form-1" class="header__button header__button_registration header__button_registration_1 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-2" class="header__button header__button_registration header__button_registration_2 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-3" class="header__button header__button_registration header__button_registration_3 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
					<?php } elseif ( $external_url == 'synergyonline' ) { ?>
						<a href="#popup-synergyonline" class="header__button header__button_enter button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#entry').show()">????????<i></i></a>
						<a href="#popup-synergyonline" class="header__button header__button_registration button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#registration').show()">??????????????????????</a>
					<?php } elseif ( $version == 'lp-version-taleb-email' ) { ?>
						<a href="#price" class="header__button header__button_registration button scroll">
							<span class="d-none d-md-inline"><?= _('main__taleb_button_2') ?></span>
							<span class="d-md-none"><?= _('main__taleb_button_2') ?></span>
						</a>
					<?php } else { ?>
						<a href="<?=$version_form_href?>" class="header__button header__button_registration button" data-fancybox>
							<span class="d-none d-md-inline"><?= $version_form_button ?></span>
							<span class="d-md-none"><?= $version_form_button_mobile ?></span>
						</a>
					<?php } ?>

				</div><!-- col -->
				<div class="header__toggle-popup-col col-auto d-md-none">

					<a class="header__toggle-popup button" data-toggle-class="page-menu-opened" data-href="body"><i class="icon-menu"></i><i class="icon-menu-close"></i></a>

				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- header__top -->
	

	
	<div class="header__bottom">
		<div class="header__row header__row_2 container">

			<div class="header__links align-self-center">
				
				<div class="header__links-item header__links-item_reg"><a href="#popup-registration" data-fancybox class="header__links-link"><?= $version_form_button ?></a></div>
				<div class="header__links-item"><a href="#speakers" class="header__links-link scroll"><?= _('header__links-speakers') ?></a></div>
				<div class="header__links-item"><a href="#concept" class="header__links-link scroll"><?= _('header__links-concept') ?></a></div>
				<?php /* ?>
				<div class="header__links-item"><a href="#themes" class="header__links-link scroll"><?= _('header__links-topics') ?></a></div>
				<?php */ ?>
				<div class="header__links-item"><a href="#format" class="header__links-link scroll"><?= _('header__links-format') ?></a></div>
				<?php if ( $is_block_price ) { ?>
					<div class="header__links-item"><a href="#price" class="header__links-link scroll"><?= _('header__links-price') ?></a></div>
					<div class="header__links-item"><a href="#faq" class="header__links-link scroll">FAQ</a></div>
				<?php } else { ?>
					<div class="header__links-item"><a href="#partners" class="header__links-link scroll"><?= _('header__links-partners') ?></a></div>
				<?php } ?>
				<div class="header__links-item"><a href="#online-plf" class="header__links-link scroll"><?= _('header__links-online-plf') ?></a></div>
				<div class="header__links-item header__links-item_franch"><a href="#franchise" class="header__links-link scroll"><?= _('header__links-franchise') ?></a></div>
				<div class="header__links-item header__links-item_press"><a href="#press" class="header__links-link scroll"><?= _('header__links-press') ?></a></div>
				
			</div><!-- header__links -->

		</div><!-- container -->
	</div><!-- header__bottom -->
	

</section><!-- header -->

		


<section class="price" id="price">

	
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>


	<div class="container">
		
<a class="payment-button" onclick="$('#price-demo').trigger('click')"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } ?>

</div><!-- payments__wrapper -->

		

<div class="price-faq" id="price-faq">

	<div class="price-faq__title condensed">FAQ</div>
	<div class="price-faq__box">

		
		<div class="price-faq__item price-faq__item_1 faq__item " data-question="<?= _("price-faq-question-1") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-1") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-1") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_2 faq__item " data-question="<?= _("price-faq-question-2") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-2") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-2") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_3 faq__item " data-question="<?= _("price-faq-question-3") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-3") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-3") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_4 faq__item " data-question="<?= _("price-faq-question-5") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-5") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-5") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_5 faq__item " data-question="<?= _("price-faq-question-6") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-6") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-6") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_6 faq__item " data-question="<?= _("price-faq-question-7") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-7") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-7") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_7 faq__item " data-question="<?= _("price-faq-question-8") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-8") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-8") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_8 faq__item " data-question="<?= _("price-faq-question-10") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-10") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-10") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_9 faq__item " data-question="<?= _("price-faq-question-12") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-12") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-12") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_10 faq__item " data-question="<?= _("price-faq-question-13") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-13") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-13") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_11 faq__item " data-question="<?= _("price-faq-question-14") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-14") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-14") ?></div>
		</div>
		

	</div><!-- price-faq__box -->

</div><!-- price-faq -->

	</div>
	
	
<div class="price-base" id="price-base">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="price-base__title condensed"><?= _('price-base__title') ?></div>
            </div><!-- col -->
            <div class="col-md-3">
                <div class="price-base__right">
                    <div class="price-base__logo"><img data-src="../img/price/base/logo.svg" class="lazy" alt=""></div>
                </div><!-- price-base__right -->
            </div><!-- col -->
            <div class="col-md-5">
                <div class="price-base__subtitle"><?= _('price-base__subtitle-1') ?></div>
                <?= _('price-base__text-1') ?>
            </div><!-- col -->
            <div class="col-md-5">
                <div class="price-base__right">
                    <div class="price-base__subtitle"><?= _('price-base__subtitle-2') ?></div>
                    <?= _('price-base__text-2') ?>
                </div><!-- price-base__right -->
            </div><!-- col -->
        </div><!-- row -->
    </div>
</div><!-- price-base -->

	
<div class="price-sbs" id="price-sbs">
	<div class="container">
        <div class="price-sbs__title condensed"><?= _('price-sbs__title') ?></div>
        <div class="price-sbs__logo"><img data-src="<?= $lang == 'ru' ? 'img/@price/synergydigital/price/sbs/logo.png' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
        <div class="price-sbs__text price-sbs__text_1"><?= _('price-sbs__text_1') ?></div>
        <div class="price-sbs__text price-sbs__text_2"><?= _('price-sbs__text_2') ?></div>
    </div>
</div><!-- price-sbs -->

	
<div class="price-crm" id="price-crm">
    <div class="container">
        <div class="price-crm__top">
            <div class="price-crm__title condensed"><?= _('price-crm__title') ?></div>
            <div class="price-crm__logo"><img data-src="img/@price/synergydigital/price/crm/logo.svg" class="lazy" alt=""></div>
        </div>
        <div class="price-crm__bottom">
            <div class="price-crm__text"><?= _('price-crm__text') ?></div>
            <div class="price-crm__photo">
                <picture>
                    <source srcset="img/@price/synergydigital/price/crm/photo-mobile.jpg" media="(max-width: 767px)">
                    <source srcset="img/@price/synergydigital/price/crm/photo-tablet.jpg" media="(max-width: 991px)">
                    <img srcset="img/@price/synergydigital/price/crm/photo.jpg" class="lazy" alt="">
                </picture>                
            </div>
        </div>
    </div>
</div><!-- price-crm -->

	
<div class="price-lang" id="price-lang">
    <div class="container">
        <div class="price-lang__title condensed"><?= _('price-lang__title') ?></div>
        <div class="price-lang__box">
            <div class="price-lang__photo">
                <picture>
                    <source srcset="img/@price/synergydigital/price/lang/photo-mobile.jpg" media="(max-width: 767px)">
                    <source srcset="img/@price/synergydigital/price/lang/photo-tablet.jpg" media="(max-width: 991px)">
                    <img srcset="img/@price/synergydigital/price/lang/photo.jpg" class="lazy" alt="">
                </picture>
            </div>
            <div class="price-lang__bar">
                <div class="price-lang__description"><?= _('price-lang__description') ?></div>
                <div class="price-lang__subtitle condensed">
                    <div class="price-lang__subtitle-inner"><?= _('price-lang__subtitle') ?></div>
                </div>
                <ul class="price-lang__list">
                    <li class="price-lang__item price-lang__item_1 condensed"><?= _('price-lang__item_1') ?></li>
                    <li class="price-lang__item price-lang__item_2 condensed"><?= _('price-lang__item_2') ?></li>
                    <li class="price-lang__item price-lang__item_3 condensed"><?= _('price-lang__item_3') ?></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- price-lang -->


	<?php if ( $lang != 'en' ) { ?>
		
<div class="price-university" id="price-university">
    <div class="container">
        <div class="price-university__top">
            <div class="price-university__title condensed"><?= _('price-university__title') ?></div>
            <div class="price-university__logo"><img class="lazy" data-src="img/price/university/logo.png" alt="icon"></div>
        </div>
        <div class="price-university__description"><?= _('price-university__description') ?></div>
        <div class="price-university__bar">
            <div class="price-university__box">
                <div class="price-university__item">
                    <div class="price-university__item-number condensed"><?= _('price-university__item-number_1') ?></div>
                    <div class="price-university__item-text "><?= _('price-university__item-text_1') ?></div>
                </div>
                <div class="price-university__item">
                    <div class="price-university__item-number condensed"><?= _('price-university__item-number_2') ?></div>
                    <div class="price-university__item-text"><?= _('price-university__item-text_2') ?></div>
                </div>
                <div class="price-university__item">
                    <div class="price-university__item-number condensed"><?= _('price-university__item-number_3') ?></div>
                    <div class="price-university__item-text"><?= _('price-university__item-text_3') ?></div>
                </div>
            </div>
        </div>
    </div>
</div><!-- price-university -->

		
	<?php } ?>

	
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>

	<div class="container">
		
<a class="payment-button" onclick="$('#price-demo').trigger('click')"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } ?>

</div><!-- payments__wrapper -->

		<?php if ( $lang != 'en' && $lang != 'tr' && $lang != 'es' && $lang != 'pt' && $lang != 'tr') { ?>
		

<div class="price-footer" id="price-footer">
    <!--  -->
    <div class="container">
        <div class="price-footer__box">
            <div class="price-footer__left">
                <div class="price-footer__logo price-footer__logo_1"><img class="lazy" data-src="img/@price/synergydigital/price/footer/logo-syn.svg" alt=""></div>
                <div class="price-footer__logo price-footer__logo_2"><img class="lazy" data-src="img/@price/synergydigital/price/footer/logo-dig.svg" alt=""></div>
                <a class="price-footer__left-phone" href="tel:+74952807816" class="price-footer__phone">+7 495 280 78 16</a>
                <div class="price-footer__left-inner">
                    <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="footer__link-privacy fancybox-privacy-link" data-fancybox="" data-type="ajax">???????????????? ????????????????????????????????????</a>
                    <a href="http://sydi.ru/?utm_source=synergyglobal" target="_blank" class="price-footer__sydi">???????????????????? ?? ?????????????????????? ??? Synergy Digital</a>
                    <a href="https://synergyglobal.ru/forums/businessmobilization/2020/files/reccuring_offerta.pdf" target="_blank" data-fancybox>?????????????????? ????????????</a>
                </div>
            </div>
            <div class="price-footer__right">
                <div class="price-footer__department">
                    <div class="price-footer__department-name">?????????? ???? ???????????? ?? ???????????????????? ?? ????????????????</div>
                    <a href="tel:+79160398083" class="price-footer__department-phone">+7 916 039 80 83</a>
                    <a href="mailto:Dshaykhulova@sbs.edu.ru" class="price-footer__department-mail">Dshaykhulova@sbs.edu.ru</a>
                </div>
                <div class="price-footer__department">
                    <div class="price-footer__department-name">?????????? ???? ???????????? ?? ???????????????????????????? ??????????????????</div>
                    <a href="tel:+79067008889" class="price-footer__department-phone">+7 906 700 88 89</a>
                    <a href="mailto:AIAEngivarian@synergy.ru" class="price-footer__department-mail">AIAEngivarian@synergy.ru</a>
                </div>
                <div class="price-footer__department">
                    <div class="price-footer__department-name">?????????? ???? ???????????? ???? ????????????????????</div>
                    <a href="tel:+79164447845" class="price-footer__department-phone">+7 916 444 78 45</a>
                    <a href="mailto:VStrabykin@synergy.ru" class="price-footer__department-mail">VStrabykin@synergy.ru</a>
                </div>
                <div class="price-footer__department">
                    <div class="price-footer__department-name">?????????? ???? ???????????? ???? ??????</div>
                    <a href="tel:+79154032143" class="price-footer__department-phone">+7 915 403 21 43</a>
                    <a href="mailto:VVSHibina@synergypress.ru" class="price-footer__department-mail">VVSHibina@synergypress.ru</a>
                </div>
            </div>
        </div>

    </div>
</div><!-- price-promo -->

		<?php } ?>
	</div>
</section><!-- price -->

		<?php break;

		case 'kotlerprice': ?>
		

<section class="header" id="header">
	
	<div class="header__top">
		<div class="container">
			<div class="header__row header__row_1 row no-gutters">

				<div class="header__logo-col col align-self-center">

					<div class="header__logo">
						
						
						<a href="<?= $URL ?>../">
							<img src="<?= $lang == 'ru' ? 'img/header/synergy.svg' : 'img/header/synergy_en.svg' ?>" alt="">
						</a>

						<?php if ( $lang == 'ru') { ?>
							<span class="header__logo-vtb">
								<a href="http://vtb.synergy.ru"><img src="https://vtb.synergy.ru/vtb/img/vtb_logo_black.svg" alt="?????? - ?????????????????????? ??????????????"></a>
							</span>
						<?php } ?>
						
					</div>

					<?php if ( !$is_page_thanks ) { ?>
						<?= $version_header_logo_1 ?>
						<?= $version_header_logo_2 ?>
					<?php } ?>

				</div><!-- col -->
				<div class="header__phone-col col col-md-auto align-self-center">

					<div class="header__phone">
						<?php /* ?> <?= $email_link ?> <?php */ ?>
						<?= $phone_link ?>
						<?= $phone_link_2 ?>
					</div>

				</div><!-- col -->
				<div class="header__button-col header__button-col_reg col-md-auto">

					<?php if ($version == 'retargeting') { ?>
						<a href="#popup-registration" class="header__button header__button_registration button d-none d-md-flex" data-fancybox><?= $version_form_button ?></a>
						<a href="#mobile-form-1" class="header__button header__button_registration header__button_registration_1 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-2" class="header__button header__button_registration header__button_registration_2 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-3" class="header__button header__button_registration header__button_registration_3 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
					<?php } elseif ( $external_url == 'synergyonline' ) { ?>
						<a href="#popup-synergyonline" class="header__button header__button_enter button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#entry').show()">????????<i></i></a>
						<a href="#popup-synergyonline" class="header__button header__button_registration button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#registration').show()">??????????????????????</a>
					<?php } elseif ( $version == 'lp-version-taleb-email' ) { ?>
						<a href="#price" class="header__button header__button_registration button scroll">
							<span class="d-none d-md-inline"><?= _('main__taleb_button_2') ?></span>
							<span class="d-md-none"><?= _('main__taleb_button_2') ?></span>
						</a>
					<?php } else { ?>
						<a href="<?=$version_form_href?>" class="header__button header__button_registration button" data-fancybox>
							<span class="d-none d-md-inline"><?= $version_form_button ?></span>
							<span class="d-md-none"><?= $version_form_button_mobile ?></span>
						</a>
					<?php } ?>

				</div><!-- col -->
				<div class="header__toggle-popup-col col-auto d-md-none">

					<a class="header__toggle-popup button" data-toggle-class="page-menu-opened" data-href="body"><i class="icon-menu"></i><i class="icon-menu-close"></i></a>

				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- header__top -->
	

	
	<div class="header__bottom">
		<div class="header__row header__row_2 container">

			<div class="header__links align-self-center">
				
				<div class="header__links-item header__links-item_reg"><a href="#popup-registration" data-fancybox class="header__links-link"><?= $version_form_button ?></a></div>
				<div class="header__links-item"><a href="#speakers" class="header__links-link scroll"><?= _('header__links-speakers') ?></a></div>
				<div class="header__links-item"><a href="#concept" class="header__links-link scroll"><?= _('header__links-concept') ?></a></div>
				<?php /* ?>
				<div class="header__links-item"><a href="#themes" class="header__links-link scroll"><?= _('header__links-topics') ?></a></div>
				<?php */ ?>
				<div class="header__links-item"><a href="#format" class="header__links-link scroll"><?= _('header__links-format') ?></a></div>
				<?php if ( $is_block_price ) { ?>
					<div class="header__links-item"><a href="#price" class="header__links-link scroll"><?= _('header__links-price') ?></a></div>
					<div class="header__links-item"><a href="#faq" class="header__links-link scroll">FAQ</a></div>
				<?php } else { ?>
					<div class="header__links-item"><a href="#partners" class="header__links-link scroll"><?= _('header__links-partners') ?></a></div>
				<?php } ?>
				<div class="header__links-item"><a href="#online-plf" class="header__links-link scroll"><?= _('header__links-online-plf') ?></a></div>
				<div class="header__links-item header__links-item_franch"><a href="#franchise" class="header__links-link scroll"><?= _('header__links-franchise') ?></a></div>
				<div class="header__links-item header__links-item_press"><a href="#press" class="header__links-link scroll"><?= _('header__links-press') ?></a></div>
				
			</div><!-- header__links -->

		</div><!-- container -->
	</div><!-- header__bottom -->
	

</section><!-- header -->

		


<section class="price" id="price">

	
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>


	<div class="container">
		
<a class="payment-button" onclick="$('#price-demo').trigger('click')"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } ?>

</div><!-- payments__wrapper -->

		

<div class="price-faq" id="price-faq">

	<div class="price-faq__title condensed">FAQ</div>
	<div class="price-faq__box">

		
		<div class="price-faq__item price-faq__item_1 faq__item " data-question="<?= _("price-faq-question-1") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-1") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-1") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_2 faq__item " data-question="<?= _("price-faq-question-2") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-2") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-2") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_3 faq__item " data-question="<?= _("price-faq-question-3") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-3") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-3") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_4 faq__item " data-question="<?= _("price-faq-question-5") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-5") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-5") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_5 faq__item " data-question="<?= _("price-faq-question-6") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-6") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-6") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_6 faq__item " data-question="<?= _("price-faq-question-7") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-7") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-7") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_7 faq__item " data-question="<?= _("price-faq-question-8") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-8") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-8") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_8 faq__item " data-question="<?= _("price-faq-question-10") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-10") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-10") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_9 faq__item " data-question="<?= _("price-faq-question-12") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-12") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-12") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_10 faq__item " data-question="<?= _("price-faq-question-13") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-13") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-13") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_11 faq__item " data-question="<?= _("price-faq-question-14") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-14") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-14") ?></div>
		</div>
		

	</div><!-- price-faq__box -->

</div><!-- price-faq -->

			<div class="price__desc price__desc_2" id="price__desc_2">			
				<div class="price__title">????????????????</div>
				<div class="price__item">
					<div class="price__item-day before-zipper">???????????? ??????????????</div>
					<div class="price__item-title">???????????????????????? LIVE-???????????? ????&nbsp;?????????? ???????????????????? ??????????</div>
					<div class="price__item-subtitle"></div>
					<div class="price__item-links">
						<a class="price__item-link">????????????</a>
						<a class="price__item-link">??????????????????</a>
						<a class="price__item-link">??????????????</a>
						<a class="price__item-link">????????????????????</a>
						<a class="price__item-link">MBA</a>
						<a class="price__item-link">????????????</a>
						<a class="price__item-link">????????</a>
						<a class="price__item-link">????????????????????</a>
					</div>
				</div>

				<div class="price__item">
					<div class="price__item-day before-star">???????????? ??????????????</div>
					<div class="price__item-title">????????????-???????????? ??&nbsp;???????????????? ???????????????? ???????????????????? ??&nbsp;??????????????????</div>
					<div class="price__item-subtitle">??????????????????????????????, ???????????? ????????????????????????, ????????????, ????????????????????, ????????????, ??????????????????</div>
					<div class="price__item-links">
						<a class="price__item-link">???????????? ??????????</a>
						<a class="price__item-link">?????? ????????????</a>
						<a class="price__item-link">?????????? ?????? ????????????</a>
						<a class="price__item-link">?????? ????????????</a>
						<a class="price__item-link">?????????? ????????????</a>
						<a class="price__item-link">?????????? ????????????</a>
						<a class="price__item-link">?????????????? ??????????????</a>
						<a class="price__item-link">???????????????? ??????????????</a>
					</div>
				</div>

				<div class="price__item">
					<div class="price__item-day before-plane">???????????? ??????????????</div>
					<div class="price__item-title">???????????????? ??&nbsp;???????????????????? ????&nbsp;???????????????? ???????????????????????? </div>
					<div class="price__item-subtitle">???????????????????????????? ????????????????????????, ???????????????????? ????????????????????, ???????????? ??????????????????????????, ???????????????????? ???????????????? </div>
					<div class="price__item-links">
						<a class="price__item-link">?????????????????? ??????????????</a>
						<a class="price__item-link">?????????? ??????????????</a>
						<a class="price__item-link">???????????? ??????????</a>
						<a class="price__item-link">???????????? ??????????</a>
						<a class="price__item-link">???????? ??????????????</a>
						<a class="price__item-link">???????????? ????????????????</a>
					</div>
				</div>

				<div class="price__item">
					<div class="price__item-day before-sun">???????????? ????????</div>
					<div class="price__item-title">?????????????? ??&nbsp;??????????????????</div>
					<div class="price__item-subtitle">???????????????????? ?????????????? ????&nbsp;?????????????????? ???????????????? Synergy Mix Training ??&nbsp;???????????????????????????? ???????????????? ?????? ?????????????????????? ????????????, ?????????????????????? ?????????? ??????????????, ???????????????? ??&nbsp;???????????????????? ???????????????????? ??????????????</div>
					<div class="price__item-links empty">
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
					</div>
				</div>

				<div class="price__item">
					<div class="price__item-title before-tv">???????????????? ????</div>
					<div class="price__item-subtitle">???????????????????????????? ?????????????? ?????????????????? ????????????????, ???????????? ?????????????????????? ??&nbsp;?????????????? &laquo;????????????????&raquo;, ???????????????? ??&nbsp;???????????????? ??????????????????, ?????????? ??&nbsp;???????????? ????????????</div>
					<div class="price__item-links empty">
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
					</div>
				</div>

				<div class="price__item">
					<div class="price__item-day before-base">?????????? ?????? ????????????</div>
					<div class="price__item-title">???????? ????????????</div>
					<div class="price__item-subtitle">?????????? 1000 ?????????? ?????????? ??&nbsp;?????????????? ??&nbsp;????????????-??????????????, ???????????? ?????????????? ??&nbsp;HD-??????????????, ???????????????????????? ????????????????&nbsp;&mdash; ??????????????????, ??????????????, ????????????????????, ???????????? ??????????????????????????</div>
					<div class="price__item-links empty">
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
						<a class="price__item-link"></a>
					</div>
				</div>
			</div><!-- price__desc -->
	</div>

	
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>

	<div class="container">
		
<a class="payment-button" onclick="$('#price-demo').trigger('click')"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } ?>

</div><!-- payments__wrapper -->

	</div>
</section><!-- price -->

		<?php break;

		case 'beautyforum': ?>
		<header class="header price__fixed lazy">
    <div class="container">
        <div class="header__block">
            <div class="header__block-logo">
                <img src="img/@price/beautyforum/header/logo.svg" alt="">
            </div>

            <div class="header__block-link price__block">
                <a href="+74957878767" class="phone">8 495 787 8767</a>
                <a href="+74957878767" class="phone-mobile"><img src="img/@price/beautyforum/header/phone.svg" alt=""></a>
            </div>

        </div>
    </div>
</header>
		


<section class="price" id="price">
			
	<div class="price__ticket-wrap">
		
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>

		<div class="container">
				
<a href="#payment-wrapper" class="payment-button scroll"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php /* } elseif ( $external_url == 'brain2021') { echo 'myBlock' ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="<?= $econom_event_id ?>" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		 <php */ ?>

	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php } ?>

</div><!-- payments__wrapper -->


		</div><!-- container -->
	</div>

	<div class="price__bottom">
		<div class="container">
			<?php if ( $lang != 'en' ) { ?>
			

<div class="price-faq" id="price-faq">

	<div class="price-faq__title condensed">FAQ</div>
	<div class="price-faq__box">

		
		<div class="price-faq__item price-faq__item_1 faq__item " data-question="<?= _("price-faq-question-1") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-1") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-1") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_2 faq__item " data-question="<?= _("price-faq-question-2") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-2") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-2") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_3 faq__item " data-question="<?= _("price-faq-question-3") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-3") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-3") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_4 faq__item " data-question="<?= _("price-faq-question-5") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-5") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-5") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_5 faq__item " data-question="<?= _("price-faq-question-6") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-6") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-6") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_6 faq__item " data-question="<?= _("price-faq-question-7") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-7") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-7") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_7 faq__item " data-question="<?= _("price-faq-question-8") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-8") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-8") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_8 faq__item " data-question="<?= _("price-faq-question-10") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-10") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-10") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_9 faq__item " data-question="<?= _("price-faq-question-12") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-12") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-12") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_10 faq__item " data-question="<?= _("price-faq-question-13") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-13") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-13") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_11 faq__item " data-question="<?= _("price-faq-question-14") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-14") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-14") ?></div>
		</div>
		

	</div><!-- price-faq__box -->

</div><!-- price-faq -->

			<?php } ?>
			
<?php if ( $external_url ) { ?>

	<div class="price-base" id="price-base">
		<div class="row">
			<div class="col-lg-6">
				<div class="price-base__title condensed"><?= _('price-base__title') ?></div>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__logo"><img data-src="img/price/base/logo.svg" class="lazy" alt=""></div>
				</div><!-- price-base__right -->
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__subtitle"><?= _('price-base__subtitle-1') ?></div>
				<?= _('price-base__text-1') ?>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__subtitle"><?= _('price-base__subtitle-2') ?></div>
					<?= _('price-base__text-2') ?>
				</div><!-- price-base__right -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- price-base -->

<?php } else { ?>

	<div class="price-prod price-prod_base" id="price-base">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/base/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-base__title') ?></div>
				<p class="price-prod__text"><?= _('price-base__text-1') ?></p>
				<p class="price-prod__text"><?= _('price-base__text-2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/base/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-base -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-sbs" id="price-sbs">
		<div class="price-sbs__title condensed"><?= _('price-sbs__title') ?></div>
		<div class="price-sbs__text price-sbs__text_1"><?= _('price-sbs__text_1') ?></div>
		<div class="price-sbs__text price-sbs__text_2"><?= _('price-sbs__text_2') ?></div>
		<div class="price-sbs__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.svg' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } else { ?>

	<div class="price-prod price-prod_sbs" id="price-sbs">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.png' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-sbs__title') ?></div>
				<p class="price-prod__text"><?= _('price-sbs__text_1') ?></p>
				<p class="price-prod__text"><?= _('price-sbs__text_2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/sbs/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-crm" id="price-crm">
		<div class="price-crm__title condensed"><?= _('price-crm__title') ?></div>
		<div class="price-crm__text"><?= _('price-crm__text') ?></div>
		<div class="price-crm__logo"><img data-src="img/price/crm/logo.svg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } else { ?>

	<div class="price-prod price-prod_crm" id="price-crm">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/crm/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-crm__title') ?></div>
				<p class="price-prod__text"><?= _('price-crm__text') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/crm/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-lang" id="price-lang">
		<div class="price-lang__title condensed"><?= _('price-lang__title') ?></div>
		<div class="price-lang__description"><?= _('price-lang__description') ?></div>
		<div class="price-lang__bar">
			<div class="price-lang__subtitle condensed">
				<div class="price-lang__subtitle-inner"><?= _('price-lang__subtitle') ?></div>
			</div>
			<ul class="price-lang__list">
				<li class="price-lang__item price-lang__item_1 condensed"><?= _('price-lang__item_1') ?></li>
				<li class="price-lang__item price-lang__item_2 condensed"><?= _('price-lang__item_2') ?></li>
				<li class="price-lang__item price-lang__item_3 condensed"><?= _('price-lang__item_3') ?></li>
			</ul>
		</div>
	</div><!-- price-lang -->

<?php } else { ?>

	<div class="price-prod price-prod_lang" id="price-lang">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/lang/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-lang__title') ?></div>
				<p class="price-prod__text"><?= _('price-lang__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/lang/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-lang -->

<?php } ?>

			<?php if ( $lang != 'en' ) { ?>
			
<?php if ( $external_url ) { ?>

	<div class="price-university" id="price-university">
		<div class="price-university__title condensed"><?= _('price-university__title') ?></div>
		<div class="price-university__description"><?= _('price-university__description') ?></div>
		<div class="price-university__bar">
			<div class="price-university__logo"><img class="lazy" data-src="img/price/university/logo.png" alt="icon"></div>
			<div class="price-university__box">
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_1') ?></div>
					<div class="price-university__item-text "><?= _('price-university__item-text_1') ?></div>
				</div>
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_2') ?></div>
					<div class="price-university__item-text"><?= _('price-university__item-text_2') ?></div>
				</div>
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_3') ?></div>
					<div class="price-university__item-text"><?= _('price-university__item-text_3') ?></div>
				</div>
			</div>
		</div>
	</div><!-- price-university -->

<?php } else { ?>

	<div class="price-prod price-prod_university" id="price-university">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img class="lazy" data-src="img/price/university/logo_blue.png" alt="icon"></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-university__title') ?></div>
				<p class="price-prod__text"><?= _('price-university__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/university/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-university -->

<?php } ?>

			
<div class="price-footer" id="price-footer">
	<a href="files/reccuring_offerta.pdf" target="_blank" data-fancybox>?????????????? ????????????</a>
</div><!-- price-promo -->

			<?php } ?>
		</div><!-- container -->
	</div><!-- price__bottom -->
	
</section>
		<?php break;

		case 'civilization': ?>
		

<section class="header" id="header">
	
	<div class="header__top">
		<div class="container">
			<div class="header__row header__row_1 row no-gutters">

				<div class="header__logo-col col align-self-center">

					<div class="header__logo">
						
						
						<a href="<?= $URL ?>../">
							<img src="<?= $lang == 'ru' ? 'img/header/synergy.svg' : 'img/header/synergy_en.svg' ?>" alt="">
						</a>

						<?php if ( $lang == 'ru') { ?>
							<span class="header__logo-vtb">
								<a href="http://vtb.synergy.ru"><img src="https://vtb.synergy.ru/vtb/img/vtb_logo_black.svg" alt="?????? - ?????????????????????? ??????????????"></a>
							</span>
						<?php } ?>
						
					</div>

					<?php if ( !$is_page_thanks ) { ?>
						<?= $version_header_logo_1 ?>
						<?= $version_header_logo_2 ?>
					<?php } ?>

				</div><!-- col -->
				<div class="header__phone-col col col-md-auto align-self-center">

					<div class="header__phone">
						<?php /* ?> <?= $email_link ?> <?php */ ?>
						<?= $phone_link ?>
						<?= $phone_link_2 ?>
					</div>

				</div><!-- col -->
				<div class="header__button-col header__button-col_reg col-md-auto">

					<?php if ($version == 'retargeting') { ?>
						<a href="#popup-registration" class="header__button header__button_registration button d-none d-md-flex" data-fancybox><?= $version_form_button ?></a>
						<a href="#mobile-form-1" class="header__button header__button_registration header__button_registration_1 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-2" class="header__button header__button_registration header__button_registration_2 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-3" class="header__button header__button_registration header__button_registration_3 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
					<?php } elseif ( $external_url == 'synergyonline' ) { ?>
						<a href="#popup-synergyonline" class="header__button header__button_enter button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#entry').show()">????????<i></i></a>
						<a href="#popup-synergyonline" class="header__button header__button_registration button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#registration').show()">??????????????????????</a>
					<?php } elseif ( $version == 'lp-version-taleb-email' ) { ?>
						<a href="#price" class="header__button header__button_registration button scroll">
							<span class="d-none d-md-inline"><?= _('main__taleb_button_2') ?></span>
							<span class="d-md-none"><?= _('main__taleb_button_2') ?></span>
						</a>
					<?php } else { ?>
						<a href="<?=$version_form_href?>" class="header__button header__button_registration button" data-fancybox>
							<span class="d-none d-md-inline"><?= $version_form_button ?></span>
							<span class="d-md-none"><?= $version_form_button_mobile ?></span>
						</a>
					<?php } ?>

				</div><!-- col -->
				<div class="header__toggle-popup-col col-auto d-md-none">

					<a class="header__toggle-popup button" data-toggle-class="page-menu-opened" data-href="body"><i class="icon-menu"></i><i class="icon-menu-close"></i></a>

				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- header__top -->
	

	
	<div class="header__bottom">
		<div class="header__row header__row_2 container">

			<div class="header__links align-self-center">
				
				<div class="header__links-item header__links-item_reg"><a href="#popup-registration" data-fancybox class="header__links-link"><?= $version_form_button ?></a></div>
				<div class="header__links-item"><a href="#speakers" class="header__links-link scroll"><?= _('header__links-speakers') ?></a></div>
				<div class="header__links-item"><a href="#concept" class="header__links-link scroll"><?= _('header__links-concept') ?></a></div>
				<?php /* ?>
				<div class="header__links-item"><a href="#themes" class="header__links-link scroll"><?= _('header__links-topics') ?></a></div>
				<?php */ ?>
				<div class="header__links-item"><a href="#format" class="header__links-link scroll"><?= _('header__links-format') ?></a></div>
				<?php if ( $is_block_price ) { ?>
					<div class="header__links-item"><a href="#price" class="header__links-link scroll"><?= _('header__links-price') ?></a></div>
					<div class="header__links-item"><a href="#faq" class="header__links-link scroll">FAQ</a></div>
				<?php } else { ?>
					<div class="header__links-item"><a href="#partners" class="header__links-link scroll"><?= _('header__links-partners') ?></a></div>
				<?php } ?>
				<div class="header__links-item"><a href="#online-plf" class="header__links-link scroll"><?= _('header__links-online-plf') ?></a></div>
				<div class="header__links-item header__links-item_franch"><a href="#franchise" class="header__links-link scroll"><?= _('header__links-franchise') ?></a></div>
				<div class="header__links-item header__links-item_press"><a href="#press" class="header__links-link scroll"><?= _('header__links-press') ?></a></div>
				
			</div><!-- header__links -->

		</div><!-- container -->
	</div><!-- header__bottom -->
	

</section><!-- header -->

		


<section class="price" id="price">
			
	<div class="price__ticket-wrap">
		
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>

		<div class="container">
				
<a href="#payment-wrapper" class="payment-button scroll"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php /* } elseif ( $external_url == 'brain2021') { echo 'myBlock' ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="<?= $econom_event_id ?>" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		 <php */ ?>

	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php } ?>

</div><!-- payments__wrapper -->

		
		</div><!-- container -->
	</div>
	<div class="price__bottom">
		<div class="container">
			<?php if ( $lang != 'en' ) { ?>
			

<div class="price-faq" id="price-faq">

	<div class="price-faq__title condensed">FAQ</div>
	<div class="price-faq__box">

		
		<div class="price-faq__item price-faq__item_1 faq__item " data-question="<?= _("price-faq-question-1") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-1") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-1") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_2 faq__item " data-question="<?= _("price-faq-question-2") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-2") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-2") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_3 faq__item " data-question="<?= _("price-faq-question-3") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-3") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-3") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_4 faq__item " data-question="<?= _("price-faq-question-5") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-5") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-5") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_5 faq__item " data-question="<?= _("price-faq-question-6") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-6") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-6") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_6 faq__item " data-question="<?= _("price-faq-question-7") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-7") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-7") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_7 faq__item " data-question="<?= _("price-faq-question-8") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-8") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-8") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_8 faq__item " data-question="<?= _("price-faq-question-10") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-10") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-10") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_9 faq__item " data-question="<?= _("price-faq-question-12") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-12") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-12") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_10 faq__item " data-question="<?= _("price-faq-question-13") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-13") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-13") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_11 faq__item " data-question="<?= _("price-faq-question-14") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-14") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-14") ?></div>
		</div>
		

	</div><!-- price-faq__box -->

</div><!-- price-faq -->

			<?php } ?>
			
<?php if ( $external_url ) { ?>

	<div class="price-base" id="price-base">
		<div class="row">
			<div class="col-lg-6">
				<div class="price-base__title condensed"><?= _('price-base__title') ?></div>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__logo"><img data-src="img/price/base/logo.svg" class="lazy" alt=""></div>
				</div><!-- price-base__right -->
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__subtitle"><?= _('price-base__subtitle-1') ?></div>
				<?= _('price-base__text-1') ?>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__subtitle"><?= _('price-base__subtitle-2') ?></div>
					<?= _('price-base__text-2') ?>
				</div><!-- price-base__right -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- price-base -->

<?php } else { ?>

	<div class="price-prod price-prod_base" id="price-base">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/base/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-base__title') ?></div>
				<p class="price-prod__text"><?= _('price-base__text-1') ?></p>
				<p class="price-prod__text"><?= _('price-base__text-2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/base/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-base -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-sbs" id="price-sbs">
		<div class="price-sbs__title condensed"><?= _('price-sbs__title') ?></div>
		<div class="price-sbs__text price-sbs__text_1"><?= _('price-sbs__text_1') ?></div>
		<div class="price-sbs__text price-sbs__text_2"><?= _('price-sbs__text_2') ?></div>
		<div class="price-sbs__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.svg' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } else { ?>

	<div class="price-prod price-prod_sbs" id="price-sbs">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.png' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-sbs__title') ?></div>
				<p class="price-prod__text"><?= _('price-sbs__text_1') ?></p>
				<p class="price-prod__text"><?= _('price-sbs__text_2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/sbs/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-crm" id="price-crm">
		<div class="price-crm__title condensed"><?= _('price-crm__title') ?></div>
		<div class="price-crm__text"><?= _('price-crm__text') ?></div>
		<div class="price-crm__logo"><img data-src="img/price/crm/logo.svg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } else { ?>

	<div class="price-prod price-prod_crm" id="price-crm">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/crm/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-crm__title') ?></div>
				<p class="price-prod__text"><?= _('price-crm__text') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/crm/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-lang" id="price-lang">
		<div class="price-lang__title condensed"><?= _('price-lang__title') ?></div>
		<div class="price-lang__description"><?= _('price-lang__description') ?></div>
		<div class="price-lang__bar">
			<div class="price-lang__subtitle condensed">
				<div class="price-lang__subtitle-inner"><?= _('price-lang__subtitle') ?></div>
			</div>
			<ul class="price-lang__list">
				<li class="price-lang__item price-lang__item_1 condensed"><?= _('price-lang__item_1') ?></li>
				<li class="price-lang__item price-lang__item_2 condensed"><?= _('price-lang__item_2') ?></li>
				<li class="price-lang__item price-lang__item_3 condensed"><?= _('price-lang__item_3') ?></li>
			</ul>
		</div>
	</div><!-- price-lang -->

<?php } else { ?>

	<div class="price-prod price-prod_lang" id="price-lang">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/lang/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-lang__title') ?></div>
				<p class="price-prod__text"><?= _('price-lang__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/lang/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-lang -->

<?php } ?>

			<?php if ( $lang != 'en' ) { ?>
			
<?php if ( $external_url ) { ?>

	<div class="price-university" id="price-university">
		<div class="price-university__title condensed"><?= _('price-university__title') ?></div>
		<div class="price-university__description"><?= _('price-university__description') ?></div>
		<div class="price-university__bar">
			<div class="price-university__logo"><img class="lazy" data-src="img/price/university/logo.png" alt="icon"></div>
			<div class="price-university__box">
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_1') ?></div>
					<div class="price-university__item-text "><?= _('price-university__item-text_1') ?></div>
				</div>
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_2') ?></div>
					<div class="price-university__item-text"><?= _('price-university__item-text_2') ?></div>
				</div>
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_3') ?></div>
					<div class="price-university__item-text"><?= _('price-university__item-text_3') ?></div>
				</div>
			</div>
		</div>
	</div><!-- price-university -->

<?php } else { ?>

	<div class="price-prod price-prod_university" id="price-university">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img class="lazy" data-src="img/price/university/logo_blue.png" alt="icon"></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-university__title') ?></div>
				<p class="price-prod__text"><?= _('price-university__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/university/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-university -->

<?php } ?>

			
<div class="price-footer" id="price-footer">
	<a href="files/reccuring_offerta.pdf" target="_blank" data-fancybox>?????????????? ????????????</a>
</div><!-- price-promo -->

			<?php } ?>
		</div><!-- container -->
	</div><!-- price__bottom -->
	
</section>
		<?php break;
		case 'hrforum': ?>
		

<section class="header" id="header">
	
	<div class="header__top">
		<div class="container">
			<div class="header__row header__row_1 row no-gutters">

				<div class="header__logo-col col align-self-center">

					<div class="header__logo">
						
						
						<a href="<?= $URL ?>../">
							<img src="<?= $lang == 'ru' ? 'img/header/synergy.svg' : 'img/header/synergy_en.svg' ?>" alt="">
						</a>

						<?php if ( $lang == 'ru') { ?>
							<span class="header__logo-vtb">
								<a href="http://vtb.synergy.ru"><img src="https://vtb.synergy.ru/vtb/img/vtb_logo_black.svg" alt="?????? - ?????????????????????? ??????????????"></a>
							</span>
						<?php } ?>
						
					</div>

					<?php if ( !$is_page_thanks ) { ?>
						<?= $version_header_logo_1 ?>
						<?= $version_header_logo_2 ?>
					<?php } ?>

				</div><!-- col -->
				<div class="header__phone-col col col-md-auto align-self-center">

					<div class="header__phone">
						<?php /* ?> <?= $email_link ?> <?php */ ?>
						<?= $phone_link ?>
						<?= $phone_link_2 ?>
					</div>

				</div><!-- col -->
				<div class="header__button-col header__button-col_reg col-md-auto">

					<?php if ($version == 'retargeting') { ?>
						<a href="#popup-registration" class="header__button header__button_registration button d-none d-md-flex" data-fancybox><?= $version_form_button ?></a>
						<a href="#mobile-form-1" class="header__button header__button_registration header__button_registration_1 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-2" class="header__button header__button_registration header__button_registration_2 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-3" class="header__button header__button_registration header__button_registration_3 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
					<?php } elseif ( $external_url == 'synergyonline' ) { ?>
						<a href="#popup-synergyonline" class="header__button header__button_enter button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#entry').show()">????????<i></i></a>
						<a href="#popup-synergyonline" class="header__button header__button_registration button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#registration').show()">??????????????????????</a>
					<?php } elseif ( $version == 'lp-version-taleb-email' ) { ?>
						<a href="#price" class="header__button header__button_registration button scroll">
							<span class="d-none d-md-inline"><?= _('main__taleb_button_2') ?></span>
							<span class="d-md-none"><?= _('main__taleb_button_2') ?></span>
						</a>
					<?php } else { ?>
						<a href="<?=$version_form_href?>" class="header__button header__button_registration button" data-fancybox>
							<span class="d-none d-md-inline"><?= $version_form_button ?></span>
							<span class="d-md-none"><?= $version_form_button_mobile ?></span>
						</a>
					<?php } ?>

				</div><!-- col -->
				<div class="header__toggle-popup-col col-auto d-md-none">

					<a class="header__toggle-popup button" data-toggle-class="page-menu-opened" data-href="body"><i class="icon-menu"></i><i class="icon-menu-close"></i></a>

				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- header__top -->
	

	
	<div class="header__bottom">
		<div class="header__row header__row_2 container">

			<div class="header__links align-self-center">
				
				<div class="header__links-item header__links-item_reg"><a href="#popup-registration" data-fancybox class="header__links-link"><?= $version_form_button ?></a></div>
				<div class="header__links-item"><a href="#speakers" class="header__links-link scroll"><?= _('header__links-speakers') ?></a></div>
				<div class="header__links-item"><a href="#concept" class="header__links-link scroll"><?= _('header__links-concept') ?></a></div>
				<?php /* ?>
				<div class="header__links-item"><a href="#themes" class="header__links-link scroll"><?= _('header__links-topics') ?></a></div>
				<?php */ ?>
				<div class="header__links-item"><a href="#format" class="header__links-link scroll"><?= _('header__links-format') ?></a></div>
				<?php if ( $is_block_price ) { ?>
					<div class="header__links-item"><a href="#price" class="header__links-link scroll"><?= _('header__links-price') ?></a></div>
					<div class="header__links-item"><a href="#faq" class="header__links-link scroll">FAQ</a></div>
				<?php } else { ?>
					<div class="header__links-item"><a href="#partners" class="header__links-link scroll"><?= _('header__links-partners') ?></a></div>
				<?php } ?>
				<div class="header__links-item"><a href="#online-plf" class="header__links-link scroll"><?= _('header__links-online-plf') ?></a></div>
				<div class="header__links-item header__links-item_franch"><a href="#franchise" class="header__links-link scroll"><?= _('header__links-franchise') ?></a></div>
				<div class="header__links-item header__links-item_press"><a href="#press" class="header__links-link scroll"><?= _('header__links-press') ?></a></div>
				
			</div><!-- header__links -->

		</div><!-- container -->
	</div><!-- header__bottom -->
	

</section><!-- header -->

		


<section class="price" id="price">
			
	<div class="price__ticket-wrap">
		
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>

		<div class="container">
				
<a href="#payment-wrapper" class="payment-button scroll"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php /* } elseif ( $external_url == 'brain2021') { echo 'myBlock' ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="<?= $econom_event_id ?>" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		 <php */ ?>

	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php } ?>

</div><!-- payments__wrapper -->

		
		</div><!-- container -->
	</div>

	<div class="price__live">
		<div class="container">
			<div class="price__live-title">?????????? ??????????????</div>

			<div class="price__live-wrapper">
				<div class="price__live-content">
					<div class="price__live-mode">?????????? ??????????????</div>
					<div class="price__live-object">???????? ???????????? ??????????????????????</div>
					<div class="price__live-price">10 000 &#x20bd;</div>
					<button class="price__live-button form__button button" id="liveButton" type="submit" data-fancybox data-src="#popup-ticket-price" js-payment-ticket>????????????????</button>

				</div>
				
				<label class="price__live-footer">
					<div class="price__live-footer-checkbox">
						<input onchange="liveButton.disabled = !this.checked;" type="checkbox" name="personalDataAgree" checked>
						<div class="price__live-footer-checkbox-icon"></div>
					</div>
					<div class="price__live-footer-text">???????????????? ????&nbsp;?????????????????? ???????????????????????? ????????????, ?????????????????? ????????????????, ??&nbsp;?????????? ??&nbsp;
						<a href="#privacy" class="fancybox">??????????????????&nbsp;????????????????????????????????????</a>.
					</div>
				</label>
			</div>
		</div>
	</div>

	<div class="price__bottom">
		<div class="container">
			<?php if ( $lang != 'en' ) { ?>
			

<div class="price-faq" id="price-faq">

	<div class="price-faq__title condensed">FAQ</div>
	<div class="price-faq__box">

		
		<div class="price-faq__item price-faq__item_1 faq__item " data-question="<?= _("price-faq-question-1") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-1") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-1") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_2 faq__item " data-question="<?= _("price-faq-question-2") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-2") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-2") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_3 faq__item " data-question="<?= _("price-faq-question-3") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-3") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-3") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_4 faq__item " data-question="<?= _("price-faq-question-5") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-5") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-5") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_5 faq__item " data-question="<?= _("price-faq-question-6") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-6") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-6") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_6 faq__item " data-question="<?= _("price-faq-question-7") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-7") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-7") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_7 faq__item " data-question="<?= _("price-faq-question-8") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-8") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-8") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_8 faq__item " data-question="<?= _("price-faq-question-10") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-10") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-10") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_9 faq__item " data-question="<?= _("price-faq-question-12") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-12") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-12") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_10 faq__item " data-question="<?= _("price-faq-question-13") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-13") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-13") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_11 faq__item " data-question="<?= _("price-faq-question-14") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-14") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-14") ?></div>
		</div>
		

	</div><!-- price-faq__box -->

</div><!-- price-faq -->

			<?php } ?>
			
<?php if ( $external_url ) { ?>

	<div class="price-base" id="price-base">
		<div class="row">
			<div class="col-lg-6">
				<div class="price-base__title condensed"><?= _('price-base__title') ?></div>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__logo"><img data-src="img/price/base/logo.svg" class="lazy" alt=""></div>
				</div><!-- price-base__right -->
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__subtitle"><?= _('price-base__subtitle-1') ?></div>
				<?= _('price-base__text-1') ?>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__subtitle"><?= _('price-base__subtitle-2') ?></div>
					<?= _('price-base__text-2') ?>
				</div><!-- price-base__right -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- price-base -->

<?php } else { ?>

	<div class="price-prod price-prod_base" id="price-base">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/base/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-base__title') ?></div>
				<p class="price-prod__text"><?= _('price-base__text-1') ?></p>
				<p class="price-prod__text"><?= _('price-base__text-2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/base/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-base -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-sbs" id="price-sbs">
		<div class="price-sbs__title condensed"><?= _('price-sbs__title') ?></div>
		<div class="price-sbs__text price-sbs__text_1"><?= _('price-sbs__text_1') ?></div>
		<div class="price-sbs__text price-sbs__text_2"><?= _('price-sbs__text_2') ?></div>
		<div class="price-sbs__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.svg' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } else { ?>

	<div class="price-prod price-prod_sbs" id="price-sbs">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.png' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-sbs__title') ?></div>
				<p class="price-prod__text"><?= _('price-sbs__text_1') ?></p>
				<p class="price-prod__text"><?= _('price-sbs__text_2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/sbs/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-crm" id="price-crm">
		<div class="price-crm__title condensed"><?= _('price-crm__title') ?></div>
		<div class="price-crm__text"><?= _('price-crm__text') ?></div>
		<div class="price-crm__logo"><img data-src="img/price/crm/logo.svg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } else { ?>

	<div class="price-prod price-prod_crm" id="price-crm">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/crm/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-crm__title') ?></div>
				<p class="price-prod__text"><?= _('price-crm__text') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/crm/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } ?>

			
<?php if ( $external_url ) { ?>

	<div class="price-lang" id="price-lang">
		<div class="price-lang__title condensed"><?= _('price-lang__title') ?></div>
		<div class="price-lang__description"><?= _('price-lang__description') ?></div>
		<div class="price-lang__bar">
			<div class="price-lang__subtitle condensed">
				<div class="price-lang__subtitle-inner"><?= _('price-lang__subtitle') ?></div>
			</div>
			<ul class="price-lang__list">
				<li class="price-lang__item price-lang__item_1 condensed"><?= _('price-lang__item_1') ?></li>
				<li class="price-lang__item price-lang__item_2 condensed"><?= _('price-lang__item_2') ?></li>
				<li class="price-lang__item price-lang__item_3 condensed"><?= _('price-lang__item_3') ?></li>
			</ul>
		</div>
	</div><!-- price-lang -->

<?php } else { ?>

	<div class="price-prod price-prod_lang" id="price-lang">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/lang/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-lang__title') ?></div>
				<p class="price-prod__text"><?= _('price-lang__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/lang/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-lang -->

<?php } ?>

			<?php if ( $lang != 'en' ) { ?>
			
<?php if ( $external_url ) { ?>

	<div class="price-university" id="price-university">
		<div class="price-university__title condensed"><?= _('price-university__title') ?></div>
		<div class="price-university__description"><?= _('price-university__description') ?></div>
		<div class="price-university__bar">
			<div class="price-university__logo"><img class="lazy" data-src="img/price/university/logo.png" alt="icon"></div>
			<div class="price-university__box">
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_1') ?></div>
					<div class="price-university__item-text "><?= _('price-university__item-text_1') ?></div>
				</div>
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_2') ?></div>
					<div class="price-university__item-text"><?= _('price-university__item-text_2') ?></div>
				</div>
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_3') ?></div>
					<div class="price-university__item-text"><?= _('price-university__item-text_3') ?></div>
				</div>
			</div>
		</div>
	</div><!-- price-university -->

<?php } else { ?>

	<div class="price-prod price-prod_university" id="price-university">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img class="lazy" data-src="img/price/university/logo_blue.png" alt="icon"></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-university__title') ?></div>
				<p class="price-prod__text"><?= _('price-university__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/university/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-university -->

<?php } ?>

			
<div class="price-footer" id="price-footer">
	<a href="files/reccuring_offerta.pdf" target="_blank" data-fancybox>?????????????? ????????????</a>
</div><!-- price-promo -->

			<?php } ?>
		</div><!-- container -->
	</div><!-- price__bottom -->
	
</section>
		<?php break;
		case 'synergywoman': ?>
		

<section class="header" id="header">
	
	<div class="header__top">
		<div class="container">
			<div class="header__row header__row_1 row no-gutters">

				<div class="header__logo-col col align-self-center">

					<div class="header__logo">
						
						
						<a href="<?= $URL ?>../">
							<img src="<?= $lang == 'ru' ? 'img/header/synergy.svg' : 'img/header/synergy_en.svg' ?>" alt="">
						</a>

						<?php if ( $lang == 'ru') { ?>
							<span class="header__logo-vtb">
								<a href="http://vtb.synergy.ru"><img src="https://vtb.synergy.ru/vtb/img/vtb_logo_black.svg" alt="?????? - ?????????????????????? ??????????????"></a>
							</span>
						<?php } ?>
						
					</div>

					<?php if ( !$is_page_thanks ) { ?>
						<?= $version_header_logo_1 ?>
						<?= $version_header_logo_2 ?>
					<?php } ?>

				</div><!-- col -->
				<div class="header__phone-col col col-md-auto align-self-center">

					<div class="header__phone">
						<?php /* ?> <?= $email_link ?> <?php */ ?>
						<?= $phone_link ?>
						<?= $phone_link_2 ?>
					</div>

				</div><!-- col -->
				<div class="header__button-col header__button-col_reg col-md-auto">

					<?php if ($version == 'retargeting') { ?>
						<a href="#popup-registration" class="header__button header__button_registration button d-none d-md-flex" data-fancybox><?= $version_form_button ?></a>
						<a href="#mobile-form-1" class="header__button header__button_registration header__button_registration_1 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-2" class="header__button header__button_registration header__button_registration_2 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-3" class="header__button header__button_registration header__button_registration_3 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
					<?php } elseif ( $external_url == 'synergyonline' ) { ?>
						<a href="#popup-synergyonline" class="header__button header__button_enter button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#entry').show()">????????<i></i></a>
						<a href="#popup-synergyonline" class="header__button header__button_registration button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#registration').show()">??????????????????????</a>
					<?php } elseif ( $version == 'lp-version-taleb-email' ) { ?>
						<a href="#price" class="header__button header__button_registration button scroll">
							<span class="d-none d-md-inline"><?= _('main__taleb_button_2') ?></span>
							<span class="d-md-none"><?= _('main__taleb_button_2') ?></span>
						</a>
					<?php } else { ?>
						<a href="<?=$version_form_href?>" class="header__button header__button_registration button" data-fancybox>
							<span class="d-none d-md-inline"><?= $version_form_button ?></span>
							<span class="d-md-none"><?= $version_form_button_mobile ?></span>
						</a>
					<?php } ?>

				</div><!-- col -->
				<div class="header__toggle-popup-col col-auto d-md-none">

					<a class="header__toggle-popup button" data-toggle-class="page-menu-opened" data-href="body"><i class="icon-menu"></i><i class="icon-menu-close"></i></a>

				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- header__top -->
	

	
	<div class="header__bottom">
		<div class="header__row header__row_2 container">

			<div class="header__links align-self-center">
				
				<div class="header__links-item header__links-item_reg"><a href="#popup-registration" data-fancybox class="header__links-link"><?= $version_form_button ?></a></div>
				<div class="header__links-item"><a href="#speakers" class="header__links-link scroll"><?= _('header__links-speakers') ?></a></div>
				<div class="header__links-item"><a href="#concept" class="header__links-link scroll"><?= _('header__links-concept') ?></a></div>
				<?php /* ?>
				<div class="header__links-item"><a href="#themes" class="header__links-link scroll"><?= _('header__links-topics') ?></a></div>
				<?php */ ?>
				<div class="header__links-item"><a href="#format" class="header__links-link scroll"><?= _('header__links-format') ?></a></div>
				<?php if ( $is_block_price ) { ?>
					<div class="header__links-item"><a href="#price" class="header__links-link scroll"><?= _('header__links-price') ?></a></div>
					<div class="header__links-item"><a href="#faq" class="header__links-link scroll">FAQ</a></div>
				<?php } else { ?>
					<div class="header__links-item"><a href="#partners" class="header__links-link scroll"><?= _('header__links-partners') ?></a></div>
				<?php } ?>
				<div class="header__links-item"><a href="#online-plf" class="header__links-link scroll"><?= _('header__links-online-plf') ?></a></div>
				<div class="header__links-item header__links-item_franch"><a href="#franchise" class="header__links-link scroll"><?= _('header__links-franchise') ?></a></div>
				<div class="header__links-item header__links-item_press"><a href="#press" class="header__links-link scroll"><?= _('header__links-press') ?></a></div>
				
			</div><!-- header__links -->

		</div><!-- container -->
	</div><!-- header__bottom -->
	

</section><!-- header -->

		

<section class="price" id="price">
	
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>


	<div class="container">
		
<a class="payment-button" onclick="$('#price-demo').trigger('click')"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } ?>

</div><!-- payments__wrapper -->


		

<div class="price-faq" id="price-faq">

	<div class="price-faq__title condensed">FAQ</div>
	<div class="price-faq__box">

		
		<div class="price-faq__item price-faq__item_1 faq__item " data-question="<?= _("price-faq-question-1") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-1") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-1") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_2 faq__item " data-question="<?= _("price-faq-question-2") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-2") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-2") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_3 faq__item " data-question="<?= _("price-faq-question-3") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-3") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-3") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_4 faq__item " data-question="<?= _("price-faq-question-5") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-5") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-5") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_5 faq__item " data-question="<?= _("price-faq-question-6") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-6") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-6") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_6 faq__item " data-question="<?= _("price-faq-question-7") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-7") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-7") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_7 faq__item " data-question="<?= _("price-faq-question-8") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-8") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-8") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_8 faq__item " data-question="<?= _("price-faq-question-10") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-10") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-10") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_9 faq__item " data-question="<?= _("price-faq-question-12") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-12") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-12") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_10 faq__item " data-question="<?= _("price-faq-question-13") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-13") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-13") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_11 faq__item " data-question="<?= _("price-faq-question-14") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-14") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-14") ?></div>
		</div>
		

	</div><!-- price-faq__box -->

</div><!-- price-faq -->

		
<?php if ( $external_url ) { ?>

	<div class="price-base" id="price-base">
		<div class="row">
			<div class="col-lg-6">
				<div class="price-base__title condensed"><?= _('price-base__title') ?></div>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__logo"><img data-src="img/price/base/logo.svg" class="lazy" alt=""></div>
				</div><!-- price-base__right -->
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__subtitle"><?= _('price-base__subtitle-1') ?></div>
				<?= _('price-base__text-1') ?>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__subtitle"><?= _('price-base__subtitle-2') ?></div>
					<?= _('price-base__text-2') ?>
				</div><!-- price-base__right -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- price-base -->

<?php } else { ?>

	<div class="price-prod price-prod_base" id="price-base">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/base/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-base__title') ?></div>
				<p class="price-prod__text"><?= _('price-base__text-1') ?></p>
				<p class="price-prod__text"><?= _('price-base__text-2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/base/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-base -->

<?php } ?>

		
<?php if ( $external_url ) { ?>

	<div class="price-sbs" id="price-sbs">
		<div class="price-sbs__title condensed"><?= _('price-sbs__title') ?></div>
		<div class="price-sbs__text price-sbs__text_1"><?= _('price-sbs__text_1') ?></div>
		<div class="price-sbs__text price-sbs__text_2"><?= _('price-sbs__text_2') ?></div>
		<div class="price-sbs__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.svg' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } else { ?>

	<div class="price-prod price-prod_sbs" id="price-sbs">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="<?= $lang == 'ru' ? 'img/price/sbs/logo.png' : 'img/price/sbs/logo_en.svg' ?>" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-sbs__title') ?></div>
				<p class="price-prod__text"><?= _('price-sbs__text_1') ?></p>
				<p class="price-prod__text"><?= _('price-sbs__text_2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/sbs/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-sbs -->

<?php } ?>

		
<?php if ( $external_url ) { ?>

	<div class="price-crm" id="price-crm">
		<div class="price-crm__title condensed"><?= _('price-crm__title') ?></div>
		<div class="price-crm__text"><?= _('price-crm__text') ?></div>
		<div class="price-crm__logo"><img data-src="img/price/crm/logo.svg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } else { ?>

	<div class="price-prod price-prod_crm" id="price-crm">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/crm/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-crm__title') ?></div>
				<p class="price-prod__text"><?= _('price-crm__text') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/crm/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-crm -->

<?php } ?>

		
<?php if ( $external_url ) { ?>

	<div class="price-lang" id="price-lang">
		<div class="price-lang__title condensed"><?= _('price-lang__title') ?></div>
		<div class="price-lang__description"><?= _('price-lang__description') ?></div>
		<div class="price-lang__bar">
			<div class="price-lang__subtitle condensed">
				<div class="price-lang__subtitle-inner"><?= _('price-lang__subtitle') ?></div>
			</div>
			<ul class="price-lang__list">
				<li class="price-lang__item price-lang__item_1 condensed"><?= _('price-lang__item_1') ?></li>
				<li class="price-lang__item price-lang__item_2 condensed"><?= _('price-lang__item_2') ?></li>
				<li class="price-lang__item price-lang__item_3 condensed"><?= _('price-lang__item_3') ?></li>
			</ul>
		</div>
	</div><!-- price-lang -->

<?php } else { ?>

	<div class="price-prod price-prod_lang" id="price-lang">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/lang/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-lang__title') ?></div>
				<p class="price-prod__text"><?= _('price-lang__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/lang/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-lang -->

<?php } ?>

		<?php if ( $lang != 'en' && $lang != 'tr' && $lang != 'es' && $lang != 'pt' && $lang != 'tr') { ?>
		
<?php if ( $external_url ) { ?>

	<div class="price-university" id="price-university">
		<div class="price-university__title condensed"><?= _('price-university__title') ?></div>
		<div class="price-university__description"><?= _('price-university__description') ?></div>
		<div class="price-university__bar">
			<div class="price-university__logo"><img class="lazy" data-src="img/price/university/logo.png" alt="icon"></div>
			<div class="price-university__box">
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_1') ?></div>
					<div class="price-university__item-text "><?= _('price-university__item-text_1') ?></div>
				</div>
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_2') ?></div>
					<div class="price-university__item-text"><?= _('price-university__item-text_2') ?></div>
				</div>
				<div class="price-university__item">
					<div class="price-university__item-number condensed"><?= _('price-university__item-number_3') ?></div>
					<div class="price-university__item-text"><?= _('price-university__item-text_3') ?></div>
				</div>
			</div>
		</div>
	</div><!-- price-university -->

<?php } else { ?>

	<div class="price-prod price-prod_university" id="price-university">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img class="lazy" data-src="img/price/university/logo_blue.png" alt="icon"></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-university__title') ?></div>
				<p class="price-prod__text"><?= _('price-university__description') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/university/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-university -->

<?php } ?>
			
		<?php } ?>
	</div><!-- container -->
		
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>
	
	<div class="container">		
		

<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapperbottom">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
	<?php } ?>

</div><!-- payments__wrapper -->

		<?php if ( $lang != 'en' && $lang != 'tr' && $lang != 'es' && $lang != 'pt' && $lang != 'tr') { ?>
		
<div class="price-footer" id="price-footer">
	<a href="files/reccuring_offerta.pdf" target="_blank" data-fancybox>?????????????? ????????????</a>
</div><!-- price-promo -->

		<?php } ?>
	</div><!-- container -->

	
</section>
		<?php break;
		default: ?>
		

<section class="header" id="header">
	
	<div class="header__top">
		<div class="container">
			<div class="header__row header__row_1 row no-gutters">

				<div class="header__logo-col col align-self-center">

					<div class="header__logo">
						
						
						<a href="<?= $URL ?>../">
							<img src="<?= $lang == 'ru' ? 'img/header/synergy.svg' : 'img/header/synergy_en.svg' ?>" alt="">
						</a>

						<?php if ( $lang == 'ru') { ?>
							<span class="header__logo-vtb">
								<a href="http://vtb.synergy.ru"><img src="https://vtb.synergy.ru/vtb/img/vtb_logo_black.svg" alt="?????? - ?????????????????????? ??????????????"></a>
							</span>
						<?php } ?>
						
					</div>

					<?php if ( !$is_page_thanks ) { ?>
						<?= $version_header_logo_1 ?>
						<?= $version_header_logo_2 ?>
					<?php } ?>

				</div><!-- col -->
				<div class="header__phone-col col col-md-auto align-self-center">

					<div class="header__phone">
						<?php /* ?> <?= $email_link ?> <?php */ ?>
						<?= $phone_link ?>
						<?= $phone_link_2 ?>
					</div>

				</div><!-- col -->
				<div class="header__button-col header__button-col_reg col-md-auto">

					<?php if ($version == 'retargeting') { ?>
						<a href="#popup-registration" class="header__button header__button_registration button d-none d-md-flex" data-fancybox><?= $version_form_button ?></a>
						<a href="#mobile-form-1" class="header__button header__button_registration header__button_registration_1 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-2" class="header__button header__button_registration header__button_registration_2 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
						<a href="#mobile-form-3" class="header__button header__button_registration header__button_registration_3 button scroll d-md-none"><?= $version_form_button_mobile ?></a>
					<?php } elseif ( $external_url == 'synergyonline' ) { ?>
						<a href="#popup-synergyonline" class="header__button header__button_enter button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#entry').show()">????????<i></i></a>
						<a href="#popup-synergyonline" class="header__button header__button_registration button" data-fancybox onclick="$('#popup-synergyonline form').hide();$('#registration').show()">??????????????????????</a>
					<?php } elseif ( $version == 'lp-version-taleb-email' ) { ?>
						<a href="#price" class="header__button header__button_registration button scroll">
							<span class="d-none d-md-inline"><?= _('main__taleb_button_2') ?></span>
							<span class="d-md-none"><?= _('main__taleb_button_2') ?></span>
						</a>
					<?php } else { ?>
						<a href="<?=$version_form_href?>" class="header__button header__button_registration button" data-fancybox>
							<span class="d-none d-md-inline"><?= $version_form_button ?></span>
							<span class="d-md-none"><?= $version_form_button_mobile ?></span>
						</a>
					<?php } ?>

				</div><!-- col -->
				<div class="header__toggle-popup-col col-auto d-md-none">

					<a class="header__toggle-popup button" data-toggle-class="page-menu-opened" data-href="body"><i class="icon-menu"></i><i class="icon-menu-close"></i></a>

				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- header__top -->
	

	
	<div class="header__bottom">
		<div class="header__row header__row_2 container">

			<div class="header__links align-self-center">
				
				<div class="header__links-item header__links-item_reg"><a href="#popup-registration" data-fancybox class="header__links-link"><?= $version_form_button ?></a></div>
				<div class="header__links-item"><a href="#speakers" class="header__links-link scroll"><?= _('header__links-speakers') ?></a></div>
				<div class="header__links-item"><a href="#concept" class="header__links-link scroll"><?= _('header__links-concept') ?></a></div>
				<?php /* ?>
				<div class="header__links-item"><a href="#themes" class="header__links-link scroll"><?= _('header__links-topics') ?></a></div>
				<?php */ ?>
				<div class="header__links-item"><a href="#format" class="header__links-link scroll"><?= _('header__links-format') ?></a></div>
				<?php if ( $is_block_price ) { ?>
					<div class="header__links-item"><a href="#price" class="header__links-link scroll"><?= _('header__links-price') ?></a></div>
					<div class="header__links-item"><a href="#faq" class="header__links-link scroll">FAQ</a></div>
				<?php } else { ?>
					<div class="header__links-item"><a href="#partners" class="header__links-link scroll"><?= _('header__links-partners') ?></a></div>
				<?php } ?>
				<div class="header__links-item"><a href="#online-plf" class="header__links-link scroll"><?= _('header__links-online-plf') ?></a></div>
				<div class="header__links-item header__links-item_franch"><a href="#franchise" class="header__links-link scroll"><?= _('header__links-franchise') ?></a></div>
				<div class="header__links-item header__links-item_press"><a href="#press" class="header__links-link scroll"><?= _('header__links-press') ?></a></div>
				
			</div><!-- header__links -->

		</div><!-- container -->
	</div><!-- header__bottom -->
	

</section><!-- header -->

		

<section class="price" id="price">
	
<?php if ($version != 'thanks-external') { ?>
		<div class="price-header" id="price-header">
			<div class="container">
			<?php /* ?>
			<h1 class="price-header__title condensed"><span>?????????????? ????&nbsp;??????????????????????</span> <br>????&nbsp;Synergy Online Forum</h1>
			<div class="price-header__note">?????????? ?????????????????? ??????????????????????, ???????????????? ?????????????? ??&nbsp;????????????.</div>
			<?php */ ?>

			<?php if ( $version == 'gbu' ) { /* https://sd.synergy.ru/Task/View/515265?LifeTimeId=4230365&IsShort=false#link4230365 */
				$main_form_counter = 100;
				$main_form_counter_file = 'https://syn.su/files/temp/sof-gbu-counter.txt';
				$main_form_counter_file_headers = @get_headers($main_form_counter_file);
				if( strpos($main_form_counter_file_headers[0], '200') !== false ) {
					$main_form_counter = file_get_contents($main_form_counter_file);
				}
				?>
				<h1 class="price-header__title condensed">????&nbsp;?????????????? ???????????????????????????????????? <br>????&nbsp;??????????</h1>
				<?php if ( $main_form_counter > 0 ) { ?>
					<div class="price-header__note">???????????????????? ???????????? ???????????? ?????? ????&nbsp;??????????.</div>
				<?php } else { ?>
					<div class="price-header__note">??&nbsp;??????????????????, ???????????????????? ???????????? ??????????????????????, <br class="d-none d-lg-inline">????&nbsp;???????????? ?????????????? ?????????????? ??&nbsp;????????????, ?????????????? ??????????.</div>
				<?php } ?>
			<?php } else { ?>
				<h1 class="price-header__title condensed"><?= _('price-header__title') ?></h1>
			<?php } ?>
		</div><!-- container -->
	</div><!-- price__header -->
<?php } else { ?>
	<section class="thanksExternal">
		<div class="container thanksExternal__container">
			<div class="row">
				<div class="col-12 main__col-1">
					<div class="thanksExternal__title">
						<h1><span>??????????????!<br></span>????&nbsp;???????????????? ???????? ????????????!</h1>
						<p>??&nbsp;?????????????????? ?????????? ??&nbsp;???????? ???????????????? ?????? ??????????????????????, ???????? ?????????? ???????????????????? ???????????????????? ??&nbsp;?????????????? ????&nbsp;?????? ???????????????????????? ??????????????</p>
						<h2>?????????? ????&nbsp;?????????????? ????&nbsp;?????????? ????????????????, <span>???????????????????? ?????????? ?????????????????? Synergy Online</span></h2>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- main -->
	<script>
		sessionStorage.setItem('mergelead','');
	</script>
<?php } ?>


	<div class="container">
		
<a href="#payment-wrapper" class="payment-button scroll"><?= _('price-payment-button') ?></a>
<div class="price-payment__title condensed">
	<span class="price-payment__title-part"><?= _('price-payment__title') ?></span>
	<div class="price-payment__options">
		<div class="price-payment__options-image"><?= picture('img/price/payment/visa.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/mc.png', 'lazy') ?></div>
		<?php /* ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/gpay.png', 'lazy') ?></div>
		<div class="price-payment__options-image"><?= picture('img/price/payment/apay.png', 'lazy') ?></div>
		<?php */ ?>
		<div class="price-payment__options-image"><?= picture('img/price/payment/pp.png', 'lazy') ?></div>
		<div class="price-payment__options-image <?=$lang == 'ru' ? 'd-none-false' : 'd-none'?> "><?= picture('img/price/payment/sb.png', 'lazy') ?></div>
	</div><!-- price-payment__payment -->
</div>



<div class="payments__wrapper payments__wrapper_1" id="payment-wrapper">

	<?php if ( $lang == 'en' && $lang == 'tr' && $lang == 'es' && $lang == 'pt' && $lang == 'tr' ) { ?>
		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $product_express ?>" data-is-recurrent="<?= $express_isRecurring ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?=  $product_express_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $express_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $express_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $express_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $product_standard ?>" data-is-recurrent="<?= $standard_isRecurring ?>" data-quote_id="" data-partner="" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_standard_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $standard_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $standard_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $standard_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $product_business ?>" data-is-recurrent="<?= $business_isRecurring ?>" data-quote_id="" data-partner="" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_business_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $business_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $business_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $business_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $product_vip ?>" data-is-recurrent="<?= $vip_isRecurring ?>" data-quote_id="" data-partner="" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $product_vip_name ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $vip_price ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $vip_price ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $vip_isRecurring ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php /* } elseif ( $external_url == 'brain2021') { echo 'myBlock' ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="<?= $econom_event_id ?>" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		 <php */ ?>

	<?php } else { ?>

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-demo" js-payment data-productId="<?= $PRODUCT_ID_DEMO ?>" data-is-recurrent="<?= $PRICE_DEMO_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="demo" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_DEMO_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_DEMO ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_DEMO ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-7d") ?>
		</span>
		<?= $version_price_demo_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel-free") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		<div data-popup-title><?= _("popup-price-form__title_demo") ?></div>
		
		
		<div data-popup-text><?= _("price-card-option-access-base-7d") ?> <span><?= _("popup-price-form__payback-text") ?></span></div>
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_DEMO_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-econom" js-payment data-productId="<?= $PRODUCT_ID_ECONOMY ?>" data-is-recurrent="<?= $PRICE_ECONOMY_IS_RECURRENT ?>" data-quote_id="<?= $econom_quote_id ?>" data-partner="" data-package="econom" data-unit="<?= $econom_unit ?>" data-type="<?= $econom_type ?>" data-land="<?= $econom_land ?>" data-event-id="<?= $econom_event_id ?>" data-form-type="<?= $econom_form_type ?>">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_ECONOMY_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_ECONOMY ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_ECONOMY ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1d") ?></span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-forum") ?>
		</span>
		<span class="price-card__list-item price-card__list-item_line">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-free") ?>
		</span>
		<?= $version_price_economy_option ?>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_ECONOMY_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-express" js-payment data-productId="<?= $PRODUCT_ID_EXPRESS ?>" data-is-recurrent="<?= $PRICE_EXPRESS_IS_RECURRENT ?>" data-quote_id="" data-partner="" data-package="express" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_EXPRESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_EXPRESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_EXPRESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-online") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_EXPRESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-standard" js-payment data-productId="<?= $PRODUCT_ID_STANDARD ?>" data-is-recurrent="<?= $PRICE_STANDARD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="standard" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_STANDARD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_STANDARD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_STANDARD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-48h") ?></span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-2x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_standard_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_STANDARD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-business" js-payment data-productId="<?= $PRODUCT_ID_BUSINESS ?>" data-is-recurrent="<?= $PRICE_BUSINESS_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="business" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_BUSINESS_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_BUSINESS ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_BUSINESS ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_business_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_BUSINESS_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-vip" js-payment data-productId="<?= $PRODUCT_ID_VIP ?>" data-is-recurrent="<?= $PRICE_VIP_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="vip" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_VIP_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_VIP ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_VIP ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-1m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-1m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-business") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_vip_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_VIP_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-silver" js-payment data-productId="<?= $PRODUCT_ID_SILVER ?>" data-is-recurrent="<?= $PRICE_SILVER_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="silver" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_SILVER_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_SILVER ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_SILVER ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-3m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-3m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-3m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-3m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-3m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-silver") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_silver_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_SILVER_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-gold" js-payment data-productId="<?= $PRODUCT_ID_GOLD ?>" data-is-recurrent="<?= $PRICE_GOLD_IS_RECURRENT ?>" data-quote_id="" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="gold" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_GOLD_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_GOLD ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_GOLD ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-6m") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-6m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-6m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-6m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-mini-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-6m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-gold") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_gold_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_GOLD_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		
		
<div href="#popup-price" data-fancybox class="price-card" id="price-platinum" js-payment data-productId="<?= $PRODUCT_ID_PLATINUM ?>" data-is-recurrent="<?= $PRICE_PLATINUM_IS_RECURRENT ?>" data-quote_id="<?=	$quote_id_tickets ?>" data-partner="<?= $partner_external ? $partner_external : $partner ?>" data-package="platinum" data-unit="" data-type="" data-land="" data-event-id="" data-form-type="">
	<div class="price-card__header">
		<div class="price-card__header-name"><?= $PRICE_PLATINUM_NAME ?></div>
		
		<div class="price-card__header-cost" data-price="<?= $PRICE_PLATINUM ?>">
			<?php if ( $version_currency == 'usd' ) { ?>
				<span class="currency currency_usd">$</span>
			<?php } ?>
			<?= $PRICE_PLATINUM ?>
			<?php if ( $version_currency == 'rub' ) { ?>
				<span class="currency currency_rub">???</span>
			<?php } ?>
			
			<span class="price-card__header-time">/ <?= _("price-card-time-1y") ?></span>
			
		</div><!-- price-card__header-cost -->
		
		<div class="price-card__seemore"><?= _('price-card__seemore') ?></div>
	</div><!-- price-card__header -->
	<div class="price-card__list" data-options>
		
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-12m") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-practicum-unlim-12m") ?></span>
		<?php /* ?><span class="price-card__list-item"><?= _("price-card-option-access-forums-12m") ?></span><?php */ ?>
		<span class="price-card__list-item"><?= _("price-card-option-online-mba") ?></span>
		<span class="price-card__list-item"><?= _("price-card-option-access-sof-unlim") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-base.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-base-12m-unlim") ?>
		</span>
		<span class="price-card__list-item price-card-option-access-genesis"><?= _("price-card-option-access-genesis") ?></span>
		<span class="price-card__list-item">
		<img src="img/price/logo-crm.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-crm-3x-platinum") ?>
		</span>
		<span class="price-card__list-item"><?= _("price-card-option-access-education") ?></span>
		<span class="price-card__list-item price-card-option-access-vtb">
		<img src="img/price/logo-vtb.svg" alt="" class="price-card__list-item-icon lazy">
		<?= _("price-card-option-access-vtb") ?>
		</span>
		<?= $version_price_platinum_option ?>
		<span class="price-card__list-item price-card__list-item_cancel"><?= _("price-card-option-cancel") ?></span>
		
	</div><!-- price-card__list -->
	<div class="price-payment__button button button_red condensed"><?= _('price-payment__button-pay') ?></div>
	<div class="d-none">
		
		
	</div>
	<?php /* ?>
	<div class="price-payment__label d-none<?= $PRICE_PLATINUM_IS_RECURRENT ?>">
		<div class="price-payment__label-checkbox">
			<input type="checkbox" name="isRecurrent" checked>
			<div class="price-payment__label-checkbox-icon lazy"></div>
		</div><!-- price-payment__label-checkbox -->
		<div class="price-payment__label-text"></div>
		<?= _('price-payment__label-text') ?>
	</div><!-- price-payment__label -->
	<?php */ ?>
</div><!-- price-card -->

		

	<?php } ?>

</div><!-- payments__wrapper -->


		

<div class="price-faq" id="price-faq">

	<div class="price-faq__title condensed">FAQ</div>
	<div class="price-faq__box">

		
		<div class="price-faq__item price-faq__item_1 faq__item " data-question="<?= _("price-faq-question-1") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-1") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-1") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_2 faq__item " data-question="<?= _("price-faq-question-2") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-2") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-2") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_3 faq__item " data-question="<?= _("price-faq-question-3") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-3") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-3") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_4 faq__item " data-question="<?= _("price-faq-question-5") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-5") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-5") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_5 faq__item " data-question="<?= _("price-faq-question-6") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-6") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-6") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_6 faq__item " data-question="<?= _("price-faq-question-7") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-7") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-7") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_7 faq__item " data-question="<?= _("price-faq-question-8") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-8") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-8") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_8 faq__item " data-question="<?= _("price-faq-question-10") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-10") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-10") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_9 faq__item " data-question="<?= _("price-faq-question-12") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-12") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-12") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_10 faq__item " data-question="<?= _("price-faq-question-13") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-13") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-13") ?></div>
		</div>
		
		<div class="price-faq__item price-faq__item_11 faq__item " data-question="<?= _("price-faq-question-14") ?>">
			<div class="price-faq__item-top"><?= _("price-faq-question-14") ?></div>
			<div class="price-faq__item-bottom faq__item-bottom"><?= _("price-faq-answer-14") ?></div>
		</div>
		

	</div><!-- price-faq__box -->

</div><!-- price-faq -->

		
<?php if ( $external_url ) { ?>

	<div class="price-base" id="price-base">
		<div class="row">
			<div class="col-lg-6">
				<div class="price-base__title condensed"><?= _('price-base__title') ?></div>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__logo"><img data-src="img/price/base/logo.svg" class="lazy" alt=""></div>
				</div><!-- price-base__right -->
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__subtitle"><?= _('price-base__subtitle-1') ?></div>
				<?= _('price-base__text-1') ?>
			</div><!-- col -->
			<div class="col-lg-6">
				<div class="price-base__right">
					<div class="price-base__subtitle"><?= _('price-base__subtitle-2') ?></div>
					<?= _('price-base__text-2') ?>
				</div><!-- price-base__right -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- price-base -->

<?php } else { ?>

	<div class="price-prod price-prod_base" id="price-base">
		<div class="price-prod__content">
			<div class="price-prod__logo"><img data-src="img/price/base/logo.png" class="lazy" alt=""></div>
			<div class="price-prod__info">
				<div class="price-prod__title condensed"><?= _('price-base__title') ?></div>
				<p class="price-prod__text"><?= _('price-base__text-1') ?></p>
				<p class="price-prod__text"><?= _('price-base__text-2') ?></p>
			</div>
		</div>
		<div class="price-prod__photo"><img data-src="img/price/base/photo.jpg" class="lazy" alt=""></div>
	</div><!-- price-base -->

<?php } ?>

	
	
	
		<?php if ( $lang != 'en' && $lang != 'tr' && $lang != 'es' && $lang != 'pt' && $lang != 'tr') { ?>
	
		
<div class="price-footer" id="price-footer">
	<a href="files/reccuring_offerta.pdf" target="_blank" data-fancybox>?????????????? ????????????</a>
</div><!-- price-promo -->

		<?php } ?>
	</div><!-- container -->

	
</section>
		<?php break;
	} ?>
<?php } ?>

	</div><!-- wrapper -->

	<div class="d-none">
		
<?php if ($version == 'top50') { ?>
	


<div class="popup-registration popup" id="popup-registration">
	<div class="popup__title condensed"><?= $version_form_title ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-registration">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-registration -->


<div class="popup-partners popup" id="popup-partners">
	<div class="popup__title condensed"><?= _('partners__button-partner') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-partner">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-partners -->


<div class="popup-accreditation" id="popup-accreditation">
	<div class="popup-accreditation__header popup-accreditation__inner condensed"><?= _('popup-accreditation__header') ?></div>
	<div class="popup-accreditation__body popup-accreditation__inner">
		<?php if ( _('popup-accreditation__subtitle-1') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-1') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__subtitle-2') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-2') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-2') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-2') ?></div>
			<br>
		<?php } ?>
		<div class="popup-accreditation__text"><?= _('popup-accreditation__text-3') ?></div>
		<div class="popup-accreditation__rules"><a class="popup-accreditation__rules-link" href="files/media_draft_citation_rules_<?= $lang ?>.pdf" target="_blank" data-fancybox><?= _('popup-accreditation__rules') ?></a></div>
	</div><!-- popup-accreditation__inner -->
</div><!-- popup-accreditation -->


<div class="popup-franchise popup" id="popup-franchise">
	<div class="popup__title condensed"><?= _('popup-franchise__title') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=3644&amp;form=franchising">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-franchise -->


<?php if ( $external_url == 'synergyonline' ) { ?>
	
<div class="popup-synergyonline" id="popup-synergyonline">

	<section class="login" id="login">
		<div class="login__form">
			<div class="login__logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="249" height="22" viewBox="0 0 249 22" fill="none">
					<path d="M34.7435 20.9352C32.6681 20.9352 30.9483 20.497 29.5841 19.6205C28.2198 18.7441 27.269 17.5535 26.7233 16.0652L31.0145 13.5682C31.7421 15.3045 33.0319 16.1727 34.884 16.1727C36.4137 16.1727 37.1826 15.7345 37.1826 14.858C37.1826 14.2793 36.7444 13.808 35.868 13.4607C35.4959 13.3119 34.6691 13.0555 33.404 12.7C31.6098 12.1791 30.1877 11.4432 29.1459 10.5007C28.0958 9.55807 27.5749 8.24342 27.5749 6.56496C27.5749 4.75422 28.2281 3.28246 29.5262 2.16625C30.8243 1.04177 32.4449 0.487793 34.3879 0.487793C36.0333 0.487793 37.4885 0.868133 38.7619 1.63708C40.0352 2.40603 41.0026 3.51398 41.6805 4.96919L37.4803 7.43313C36.8602 5.97792 35.8432 5.25031 34.421 5.25031C33.8257 5.25031 33.3709 5.37433 33.065 5.61411C32.7591 5.85389 32.602 6.16809 32.602 6.54016C32.602 6.97011 32.8335 7.33391 33.2883 7.63157C33.743 7.92923 34.636 8.27649 35.9672 8.6651C36.918 8.94622 37.687 9.21081 38.2658 9.45059C38.8445 9.69037 39.4812 10.0459 40.1675 10.5007C40.8537 10.9554 41.3746 11.5507 41.7054 12.2701C42.0444 12.9894 42.2097 13.8328 42.2097 14.8084C42.2097 16.7349 41.5235 18.2397 40.1675 19.3229C38.7867 20.3978 36.9842 20.9352 34.7435 20.9352Z" fill="#171717"/>
					<path d="M59.8789 0.901367L53.2643 12.9813V20.5219H48.2455V13.0392L41.6309 0.901367H47.2615L50.7342 8.1609L54.24 0.901367H59.8789Z" fill="#171717"/>
					<path d="M72.2397 0.901367H77.2254V20.5219H73.3559L66.4353 10.6579V20.5219H61.4165V0.901367H65.3191L72.2397 10.7654V0.901367Z" fill="#171717"/>
					<path d="M85.3529 15.809H92.9514V20.5137H80.3423V0.901367H92.8108V5.5812H85.3529V8.30146H92.108V12.9234H85.3529V15.809Z" fill="#171717"/>
					<path d="M105.561 20.5137L102.138 14.1802H100.343V20.5137H95.3245V0.901367H103.171C105.172 0.901367 106.85 1.53802 108.198 2.8196C109.554 4.10118 110.232 5.72176 110.232 7.68134C110.232 8.85543 109.934 9.93858 109.339 10.9142C108.744 11.8982 107.925 12.6754 106.9 13.2541L110.935 20.5137H105.561ZM100.352 5.52332V9.92204H103.13C103.75 9.93858 104.254 9.74841 104.643 9.33499C105.031 8.92158 105.23 8.39241 105.23 7.73922C105.23 7.08603 105.031 6.55686 104.643 6.14344C104.254 5.73003 103.75 5.52332 103.13 5.52332H100.352Z" fill="#171717"/>
					<path d="M131.904 9.27695V11.2696C131.904 14.147 131.002 16.4786 129.2 18.2646C127.397 20.0505 125.057 20.9435 122.18 20.9435C119.113 20.9435 116.599 19.9595 114.631 18C112.663 16.0404 111.671 13.6178 111.671 10.7404C111.671 7.86308 112.655 5.43221 114.615 3.4561C116.574 1.47172 119.005 0.487793 121.899 0.487793C123.726 0.487793 125.405 0.901206 126.926 1.71976C128.447 2.53832 129.638 3.638 130.498 5.00226L126.24 7.4414C125.851 6.82128 125.272 6.33345 124.52 5.95311C123.759 5.58104 122.908 5.39087 121.957 5.39087C120.402 5.39087 119.137 5.89524 118.145 6.90396C117.153 7.91269 116.657 9.20254 116.657 10.7735C116.657 12.2866 117.145 13.5682 118.129 14.61C119.113 15.66 120.485 16.1809 122.263 16.1809C124.545 16.1809 126.05 15.3211 126.777 13.6013H122.015V9.28522H131.904V9.27695Z" fill="#171717"/>
					<path d="M149.25 0.901367L142.636 12.9813V20.5219H137.617V13.0392L131.002 0.901367H136.633L140.106 8.1609L143.611 0.901367H149.25Z" fill="#171717"/>
					<path d="M149.954 20.9102C149.127 20.9102 148.432 20.6291 147.862 20.0586C147.291 19.4881 147.01 18.8018 147.01 17.9998C147.01 17.1978 147.299 16.5115 147.878 15.941C148.457 15.3705 149.151 15.0894 149.954 15.0894C150.756 15.0894 151.442 15.3705 152.012 15.941C152.583 16.5115 152.864 17.1978 152.864 17.9998C152.864 18.8018 152.583 19.4881 152.012 20.0586C151.442 20.6291 150.756 20.9102 149.954 20.9102Z" fill="#FF003D"/>
					<path d="M172.36 17.9257C170.392 19.8936 167.986 20.8858 165.142 20.8858C162.306 20.8858 159.9 19.9018 157.923 17.9257C155.956 15.9579 154.963 13.5518 154.963 10.7075C154.963 7.86324 155.947 5.46545 157.923 3.48933C159.891 1.52149 162.297 0.529297 165.142 0.529297C167.986 0.529297 170.384 1.51322 172.36 3.48933C174.328 5.45718 175.32 7.86324 175.32 10.7075C175.32 13.5518 174.328 15.9496 172.36 17.9257ZM160.197 15.7346C161.537 17.0741 163.182 17.7355 165.142 17.7355C167.101 17.7355 168.755 17.0658 170.086 15.7346C171.425 14.3952 172.087 12.725 172.087 10.7075C172.087 8.69007 171.417 7.01161 170.086 5.68042C168.747 4.34096 167.101 3.6795 165.142 3.6795C163.182 3.6795 161.528 4.34923 160.197 5.68042C158.858 7.01988 158.196 8.69007 158.196 10.7075C158.188 12.725 158.858 14.4034 160.197 15.7346Z" fill="#171717"/>
					<path d="M190.029 0.901367H193.254V20.5219H190.732L181.48 7.21005V20.5219H178.255V0.901367H180.777L190.029 14.2133V0.901367Z" fill="#171717"/>
					<path d="M200.398 17.4296H208.385V20.5137H197.173V0.901367H200.398V17.4296Z" fill="#171717"/>
					<path d="M210.766 0.901367H213.99V20.5219H210.766V0.901367Z" fill="#171717"/>
					<path d="M229.684 0.901367H232.909V20.5219H230.387L221.135 7.21005V20.5219H217.91V0.901367H220.432L229.684 14.2133V0.901367Z" fill="#171717"/>
					<path d="M240.052 17.4296H248.742V20.5137H236.836V0.901367H248.61V3.98543H240.061V9.08694H247.907V12.1379H240.061V17.4296H240.052Z" fill="#171717"/>
					<path d="M0 0V21.299H21.299V0H0ZM3.29904 18V3.29904H18V18H3.29904Z" fill="#FF003D"/>
					<path d="M12.8739 17.4707V12.8074L10.7159 10.6494L12.8822 8.47482V3.81152L6.05261 10.6494L12.8739 17.4707Z" fill="#FF003D"/>
				</svg>
			</div>

			<form class="login__entry" id="entry">
				<div class="login__title">????????</div>
				<div class="login__message">???? ????????????????????????????????? <a href="#registration" js-changeform>????????????????????????????????????</a></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="????????????">
				</div>
				<div class="inputfield">
					<button>??????????</button>
				</div>
				<a href="#recovery" class="login__link" js-changeform>???????????? ?????????????</a>
			</form>

			<form class="login__registration" id="registration">
				<div class="login__title">??????????????????????</div>
				<div class="login__message">?????? ????????????????????????????????? <a href="#entry" js-changeform>??????????</a></div>
				<div class="inputfield">
					<input type="text" placeholder="??????" name="name">
				</div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" pattern="[0-9]*">
				</div>
				<div class="inputfield">
					<input type="text" placeholder="????????????????">
					<div class="inputfield-hint">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999ZM12 18C11.736 17.9981 11.4834 17.892 11.2974 17.7046C11.1114 17.5173 11.007 17.264 11.007 17V11.01C11.0028 10.877 11.0253 10.7445 11.0733 10.6204C11.1213 10.4963 11.1937 10.3831 11.2863 10.2876C11.3789 10.192 11.4897 10.116 11.6122 10.0641C11.7348 10.0122 11.8665 9.9855 11.9995 9.9855C12.1326 9.9855 12.2643 10.0122 12.3868 10.0641C12.5093 10.116 12.6201 10.192 12.7127 10.2876C12.8053 10.3831 12.8777 10.4963 12.9257 10.6204C12.9737 10.7445 12.9962 10.877 12.992 11.01V17C12.9928 17.1309 12.9677 17.2606 12.9183 17.3818C12.8688 17.5029 12.7958 17.6131 12.7037 17.706C12.6115 17.7989 12.5019 17.8727 12.3812 17.9232C12.2604 17.9736 12.1309 17.9997 12 18ZM12 7.99999C11.8038 8.00019 11.6119 7.94219 11.4486 7.83331C11.2853 7.72442 11.1581 7.56955 11.0828 7.3883C11.0076 7.20705 10.9878 7.00758 11.0259 6.81509C11.0641 6.62259 11.1585 6.44574 11.2972 6.30691C11.4359 6.16808 11.6127 6.07348 11.8051 6.03512C11.9976 5.99676 12.1971 6.01637 12.3784 6.09142C12.5597 6.16648 12.7147 6.29359 12.8237 6.45675C12.9328 6.6199 12.991 6.81175 12.991 7.00799C12.9905 7.27075 12.8859 7.52263 12.7002 7.70852C12.5145 7.89441 12.2628 7.9992 12 7.99999ZM11.007 6.99999C11.0071 7.00166 11.0071 7.00333 11.007 7.005V6.99999ZM12.992 6.99999V7.01C12.9919 7.00834 12.9919 7.00666 12.992 7.005V6.99999Z" fill="#9F9F9F"/>
						</svg>
						<span class="inputfield-hint__block">
							<p>???????? ?? ?????? ???????? ????????????????, ?????????????? ?????? ?? ????????</p>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999Z" fill="black"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.73289 8.29645L8.31536 6.71399L12 10.3986L15.6847 6.71399L17.2671 8.29645L13.5825 11.9811L17.0189 15.4175L15.4364 17L12 13.5636L8.56357 17L6.98111 15.4175L10.4175 11.9811L6.73289 8.29645Z" fill="black"/>
							</svg>
						</span>
					</div>
				</div>
				<div class="inputfield">
					<button>????????????????????????????????????</button>
				</div>
				<div class="inputfield inputfield--policy">
					<input type="checkbox" id="policy" checked>
					<label for="policy">
						<span>??&nbsp;???????????????????? ??&nbsp;<a href="#">?????????????????? ????????????????????????????????????</a>,?????? ???????????????? ????&nbsp;?????????????????? ???????????????????????? ???????????? ??&nbsp;?????????????????? ????????????????</span>
					</label>
				</div>
			</form>

			<form class="login__recovery" id="recovery" data-action="change">
				<div class="login__title">???????????????????????????? ????????????</div>
				<div class="login__message">?????????????? ?????????? ?????? ??????????????, ??&nbsp;????&nbsp;???????????? ???????????? ?????? ?????????? ????&nbsp;??????????????????</div>
				<div class="error_str"></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-email" name="js-recovery-to-email">?????????????????? ???????????? ????&nbsp;??????????</button>
				</div>
				<div class="inputfield">
					<span class="login__hr">??????</span>
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-phone" name="js-recovery-to-phone">?????????????????? ???????????? ????&nbsp;??????????????</button>
				</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ?? ???????????? ??????????????</a>
			</form>

			<form class="login__newPassword" id="newpassword">
				<div class="login__title">???????????????????? ?????????? ????????????</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????? ????????????">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????????????? ????????????">
				</div>
				<div class="inputfield">
					<button>???????????????? ????????????</button>
				</div>
			</form>

			<form class="sesslogout" id="sesslogout" data-action="sesslogout">
				<div class="login__title">??????????</div>
				<div class="login__message">??????-???? ?????????????????????? ?????? ?????????? ??&nbsp;???????????? ??&nbsp;?????????? ????&nbsp;??????????????????, ?????????????? ?????? ??????????????????????. </div>
				<div class="login__message">?????? ?????????????? ??&nbsp;???????????????? ???????????????? ?????????? ???????????????????????? ???????????? ???????? ???????? ??&nbsp;???????? ???????????? ??????????????. ????&nbsp;?????????? ?????????????????? ???????? ?????????? ??&nbsp;???????????? ?????????????? ??&nbsp;????????????????. ???????????? ???????????? ?????????????????????????? ???????? ???????????? ?????? ???????????? ????????????????????????.</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ??&nbsp;???????????? ??????????????</a>
			</form>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success login__success--low" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M35.7497 3.25H30.2246C34.0655 5.79104 36.8817 9.61085 38.1733 14.0313C39.4649 18.4518 39.1485 23.1869 37.2801 27.3962C35.4116 31.6054 32.1121 35.0165 27.9673 37.0238C23.8224 39.0311 19.1005 39.5048 14.6396 38.3608C10.1786 37.2168 6.26729 34.5291 3.6 30.7749C0.932701 27.0206 -0.318139 22.4426 0.0697085 17.8537C0.457557 13.2648 2.45897 8.96168 5.71853 5.70835C8.97809 2.45503 13.285 0.461926 17.8747 0.0828667V3.25L18.0859 3.32151C14.2166 3.65977 10.5961 5.37195 7.87971 8.14823C5.16336 10.9245 3.5306 14.5814 3.27686 18.4572C3.02312 22.3331 4.16532 26.1717 6.49651 29.2784C8.82771 32.3851 12.194 34.5547 15.9863 35.3946C19.7785 36.2344 23.7459 35.689 27.1708 33.8571C30.5958 32.0251 33.2519 29.0277 34.6583 25.4071C36.0647 21.7866 36.1287 17.7822 34.8386 14.1187C33.5485 10.4551 30.9894 7.37434 27.6247 5.43399V11.375C27.6247 11.806 27.4536 12.2193 27.1488 12.524C26.8441 12.8288 26.4307 13 25.9997 13C25.5687 13 25.1553 12.8288 24.8506 12.524C24.5458 12.2193 24.3747 11.806 24.3747 11.375V1.625C24.3747 1.19402 24.5458 0.780697 24.8506 0.47595C25.1553 0.171204 25.5687 0 25.9997 0H35.7497C36.1807 0 36.5941 0.171204 36.8988 0.47595C37.2036 0.780697 37.3747 1.19402 37.3747 1.625C37.3747 2.05598 37.2036 2.4693 36.8988 2.77405C36.5941 3.0788 36.1807 3.25 35.7497 3.25Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ????&nbsp;???????????????????????????? ???????????? ?????????????????? ????&nbsp;???????? ??????????</div>
			</div>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5001 39C16.7064 39.0045 13.9444 38.4086 11.4011 37.2528C8.85771 36.097 6.59233 34.4082 4.75843 32.3008C2.92453 30.1934 1.56488 27.7165 0.771506 25.0378C-0.0218694 22.3592 -0.230424 19.5414 0.159949 16.7751C0.550323 14.0089 1.5306 11.3588 3.03425 9.00436C4.5379 6.64989 6.52981 4.64596 8.87528 3.12832C11.2208 1.61067 13.8651 0.614744 16.6289 0.207899C19.3928 -0.198946 22.2117 -0.00719279 24.895 0.770212L23.14 3.6757C19.8547 2.9206 16.416 3.20593 13.3 4.49212C10.184 5.77832 7.54502 8.0017 5.74886 10.8543C3.9527 13.7069 3.08824 17.0475 3.27506 20.4133C3.46188 23.7791 4.69084 27.0036 6.79166 29.6399C8.89248 32.2762 11.7612 34.1939 15.0004 35.1273C18.2395 36.0608 21.6888 35.9638 24.8704 34.8497C28.052 33.7357 30.8084 31.6598 32.7577 28.9096C34.7071 26.1593 35.7527 22.871 35.7501 19.5C35.7502 17.6418 35.4258 15.7979 34.7914 14.0513L36.8552 10.6258C38.378 13.5975 39.1116 16.9106 38.9858 20.2473C38.86 23.584 37.8788 26.8324 36.1365 29.681C34.3942 32.5295 31.9492 34.8825 29.036 36.5144C26.1228 38.1462 22.8392 39.0021 19.5001 39ZM20.9951 24.9746C20.9215 25.1916 20.7991 25.3889 20.6375 25.5515C20.4861 25.7043 20.3025 25.8214 20.1001 25.8942C19.8977 25.9671 19.6816 25.9937 19.4675 25.9723C19.1297 25.9959 18.7941 25.9032 18.5162 25.7096C18.2383 25.5159 18.035 25.2331 17.9401 24.908L11.7325 18.7037C11.4852 18.425 11.3535 18.0623 11.3646 17.6897C11.3756 17.3172 11.5286 16.9629 11.792 16.6993C12.0555 16.4357 12.4095 16.2825 12.7821 16.2712C13.1546 16.2599 13.5173 16.3912 13.7963 16.6384L19.0775 21.9212L31.0863 4.08845C31.1904 3.89803 31.3316 3.7304 31.5015 3.59541C31.6714 3.46043 31.8666 3.36084 32.0756 3.30253C32.2846 3.24422 32.5032 3.22838 32.7185 3.25591C32.9337 3.28344 33.1412 3.35382 33.3288 3.46286C33.7061 3.69567 33.9782 4.06608 34.0874 4.49579C34.1965 4.9255 34.1342 5.3808 33.9138 5.76547L20.9951 24.9746Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ?????????????? ??????????????</div>
				<a href="#entry" js-changeform>??????????</a>
			</div>

			<p class="login__tech">?????????????? ?????? ?????????? ????&nbsp;?????????????? ?????????????????????? ?????????????????? <a href="tel:88002005440">8&nbsp;800&nbsp;200 54&nbsp;40</a></p>

		</div><!-- login__form -->
	</section><!-- login -->

</div><!-- popup-franchise -->

<?php } ?>

 
	<div class="qwt" href="#popup-message" data-fancybox="" hidden>popup-message</div>
 

	<section class="popup-price fancy__class" id="popup-price" data-package="">
	<div class="popup-price__wrapper">
		<div class="popup-price__info">
			<div class="popup-price__package"><?= _('popup-price__package') ?></div>
			<div class="popup-price__name condensed" js-package></div>
			<div class="popup-price__text condensed" js-text></div>
			<div class="popup-price__price condensed" js-cost></div>
		</div>
		<div class="popup-price__form">
			<form class="form" action="<?= $action ?>&amp;form=<?= $version_price_form ?>&amp;external_url=<?= $external_url ?>">
				<div class="form__wrapper">
					<div class="form__title"><?= _('popup-price-form__title') ?></div>
					<div class="form__input">
						<input type="text" class="input" name="name" placeholder="<?= _('form_item_name') ?>" tabindex="1" value="<?= $get_name ?>">
					</div>
					<div class="form__input">
						<input type="tel" class="input" name="phone" placeholder="<?= _('form_item_phone') ?>" tabindex="2" value="<?= $get_phone ?>">
					</div>
					<div class="form__input">
						<input type="email" class="input" name="email" placeholder="<?= _('form_item_email') ?>" tabindex="3" value="<?= $get_email ?>">
					</div>
					<div class="form__input">
						<button class="form__submit form__button button condensed" type="submit">
							<span class="popup-price__button-buy"><?= _('popup-price__button-buy') ?></span>
							<span class="popup-price__button-get"><?= _('popup-price__button-get') ?></span>
						</button>
					</div>
					<div class="form__privacy">
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">???????????????? ??&nbsp;<a href="#privacy" class="fancybox privacy">?????????????????? ????????????????????????????????????</a> ??&nbsp;????&nbsp;?????????????????? ???????????????????????? ????????????</div>
						</label>
						<?php */ ?>
						<label class="checkcontainer checkcontainer_is-recurrent">
							<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-1') ?></div>
						</label>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree2" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-2') ?></div>
						</label>
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree3" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">??????????????????, ???? ???????????????????????? ?? ??????????????????&nbsp;<a href="files/reccuring_offerta.pdf" class="footer__link-offer" terget="_blank"> ?????????????????? ????????????</a></div>
						</label>
						<?php */ ?>
					</div>
					<input type="hidden" name="comment" value="<?= $external_url ?>">
					<input type="hidden" name="product_id" value="">
					<input type="hidden" name="quote_id" value="">
					<input type="hidden" name="partner" value="<?= $partner ?>">
				</div>
			</form>

		</div>
	</div>

</section>

<section class="popup-price fancy__class" id="popup-ticket-price" data-package="">
	<div class="popup-price__wrapper">
		<div class="popup-price__info">
			<div class="popup-price__package"><?= _('popup-price__package') ?></div>
			<div class="popup-price__name condensed" js-package></div>
			<div class="popup-price__text condensed" js-text></div>
			<div class="popup-price__price condensed" js-cost></div>
		</div>
		<div class="popup-price__form">
			<form class="form" action="<?= $action ?><?= $unitTicket ? '&amp;unit=' . $unitTicket : '' ?><?= $typeTicket ? '&amp;type=' . $typeTicket : '' ?>&amp;form=<?= $version_price_form ?>&amp;external_url=<?= $external_url ?>">
				<div class="form__wrapper">
					<div class="form__title"><?= _('popup-price-form__title') ?></div>
					<div class="form__input">
						<input type="text" class="input" name="name" placeholder="<?= _('form_item_name') ?>" tabindex="1" value="<?= $get_name ?>">
					</div>
					<div class="form__input">
						<input type="tel" class="input" name="phone" placeholder="<?= _('form_item_phone') ?>" tabindex="2" value="<?= $get_phone ?>">
					</div>
					<div class="form__input">
						<input type="email" class="input" name="email" placeholder="<?= _('form_item_email') ?>" tabindex="3" value="<?= $get_email ?>">
					</div>
					<div class="form__input">
						<input type="number" class="input" name="tickets_count" "<?= _('form_item_ticket_count') ?>" tabindex="4" min="1" value="1">
					</div>
					<div class="form__input">
						<button class="form__submit form__button button condensed" type="submit">
							<span class="popup-price__button-buy"><?= _('popup-price__button-buy') ?></span>
							<span class="popup-price__button-get"><?= _('popup-price__button-get') ?></span>
						</button>
					</div>
					<div class="form__privacy">
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">???????????????? ??&nbsp;<a href="#privacy" class="fancybox privacy">?????????????????? ????????????????????????????????????</a> ??&nbsp;????&nbsp;?????????????????? ???????????????????????? ????????????</div>
						</label>
						<?php */ ?>
						<label class="checkcontainer checkcontainer_is-recurrent">
							<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-1') ?></div>
						</label>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree2" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-2') ?></div>
						</label>
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree3" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">??????????????????, ???? ???????????????????????? ?? ??????????????????&nbsp;<a href="files/reccuring_offerta.pdf" class="footer__link-offer" terget="_blank"> ?????????????????? ????????????</a></div>
						</label>
						<?php */ ?>
					</div>
					<input type="hidden" name="comment" value="<?= $external_url ?>">
					<input type="hidden" name="product_id" value="65066869">
					<input type="hidden" name="event_id" value="154">
					<input type="hidden" name="quote_id" value="">
					<input type="hidden" name="partner" value="<?= $partner ?>">
				</div>
			</form>

		</div>
	</div>

</section>


<div class="stripe" id="stripeForm">
	<form id="payment-form" class="nolander">
		<fieldset>
			<legend class="card-only">Pay with card</legend>
			<legend class="payment-request-available">Or enter card details</legend>
			<div class="container">
				<div id="payment-elements"></div>
				<button type="submit">Buy ticket</button>
			</div>
			<div class="card-errors" id="card-errors"></div>
		</fieldset>
	</form>
</div>


<?php } else { ?>
<?php switch ($external_url) {
	case 'synergydigitalplatform': ?>
	


<div class="popup-registration popup" id="popup-registration">
	<div class="popup__title condensed"><?= $version_form_title ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-registration">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-registration -->


<div class="popup-partners popup" id="popup-partners">
	<div class="popup__title condensed"><?= _('partners__button-partner') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-partner">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-partners -->


<div class="popup-accreditation" id="popup-accreditation">
	<div class="popup-accreditation__header popup-accreditation__inner condensed"><?= _('popup-accreditation__header') ?></div>
	<div class="popup-accreditation__body popup-accreditation__inner">
		<?php if ( _('popup-accreditation__subtitle-1') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-1') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__subtitle-2') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-2') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-2') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-2') ?></div>
			<br>
		<?php } ?>
		<div class="popup-accreditation__text"><?= _('popup-accreditation__text-3') ?></div>
		<div class="popup-accreditation__rules"><a class="popup-accreditation__rules-link" href="files/media_draft_citation_rules_<?= $lang ?>.pdf" target="_blank" data-fancybox><?= _('popup-accreditation__rules') ?></a></div>
	</div><!-- popup-accreditation__inner -->
</div><!-- popup-accreditation -->


<div class="popup-franchise popup" id="popup-franchise">
	<div class="popup__title condensed"><?= _('popup-franchise__title') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=3644&amp;form=franchising">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-franchise -->


<?php if ( $external_url == 'synergyonline' ) { ?>
	
<div class="popup-synergyonline" id="popup-synergyonline">

	<section class="login" id="login">
		<div class="login__form">
			<div class="login__logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="249" height="22" viewBox="0 0 249 22" fill="none">
					<path d="M34.7435 20.9352C32.6681 20.9352 30.9483 20.497 29.5841 19.6205C28.2198 18.7441 27.269 17.5535 26.7233 16.0652L31.0145 13.5682C31.7421 15.3045 33.0319 16.1727 34.884 16.1727C36.4137 16.1727 37.1826 15.7345 37.1826 14.858C37.1826 14.2793 36.7444 13.808 35.868 13.4607C35.4959 13.3119 34.6691 13.0555 33.404 12.7C31.6098 12.1791 30.1877 11.4432 29.1459 10.5007C28.0958 9.55807 27.5749 8.24342 27.5749 6.56496C27.5749 4.75422 28.2281 3.28246 29.5262 2.16625C30.8243 1.04177 32.4449 0.487793 34.3879 0.487793C36.0333 0.487793 37.4885 0.868133 38.7619 1.63708C40.0352 2.40603 41.0026 3.51398 41.6805 4.96919L37.4803 7.43313C36.8602 5.97792 35.8432 5.25031 34.421 5.25031C33.8257 5.25031 33.3709 5.37433 33.065 5.61411C32.7591 5.85389 32.602 6.16809 32.602 6.54016C32.602 6.97011 32.8335 7.33391 33.2883 7.63157C33.743 7.92923 34.636 8.27649 35.9672 8.6651C36.918 8.94622 37.687 9.21081 38.2658 9.45059C38.8445 9.69037 39.4812 10.0459 40.1675 10.5007C40.8537 10.9554 41.3746 11.5507 41.7054 12.2701C42.0444 12.9894 42.2097 13.8328 42.2097 14.8084C42.2097 16.7349 41.5235 18.2397 40.1675 19.3229C38.7867 20.3978 36.9842 20.9352 34.7435 20.9352Z" fill="#171717"/>
					<path d="M59.8789 0.901367L53.2643 12.9813V20.5219H48.2455V13.0392L41.6309 0.901367H47.2615L50.7342 8.1609L54.24 0.901367H59.8789Z" fill="#171717"/>
					<path d="M72.2397 0.901367H77.2254V20.5219H73.3559L66.4353 10.6579V20.5219H61.4165V0.901367H65.3191L72.2397 10.7654V0.901367Z" fill="#171717"/>
					<path d="M85.3529 15.809H92.9514V20.5137H80.3423V0.901367H92.8108V5.5812H85.3529V8.30146H92.108V12.9234H85.3529V15.809Z" fill="#171717"/>
					<path d="M105.561 20.5137L102.138 14.1802H100.343V20.5137H95.3245V0.901367H103.171C105.172 0.901367 106.85 1.53802 108.198 2.8196C109.554 4.10118 110.232 5.72176 110.232 7.68134C110.232 8.85543 109.934 9.93858 109.339 10.9142C108.744 11.8982 107.925 12.6754 106.9 13.2541L110.935 20.5137H105.561ZM100.352 5.52332V9.92204H103.13C103.75 9.93858 104.254 9.74841 104.643 9.33499C105.031 8.92158 105.23 8.39241 105.23 7.73922C105.23 7.08603 105.031 6.55686 104.643 6.14344C104.254 5.73003 103.75 5.52332 103.13 5.52332H100.352Z" fill="#171717"/>
					<path d="M131.904 9.27695V11.2696C131.904 14.147 131.002 16.4786 129.2 18.2646C127.397 20.0505 125.057 20.9435 122.18 20.9435C119.113 20.9435 116.599 19.9595 114.631 18C112.663 16.0404 111.671 13.6178 111.671 10.7404C111.671 7.86308 112.655 5.43221 114.615 3.4561C116.574 1.47172 119.005 0.487793 121.899 0.487793C123.726 0.487793 125.405 0.901206 126.926 1.71976C128.447 2.53832 129.638 3.638 130.498 5.00226L126.24 7.4414C125.851 6.82128 125.272 6.33345 124.52 5.95311C123.759 5.58104 122.908 5.39087 121.957 5.39087C120.402 5.39087 119.137 5.89524 118.145 6.90396C117.153 7.91269 116.657 9.20254 116.657 10.7735C116.657 12.2866 117.145 13.5682 118.129 14.61C119.113 15.66 120.485 16.1809 122.263 16.1809C124.545 16.1809 126.05 15.3211 126.777 13.6013H122.015V9.28522H131.904V9.27695Z" fill="#171717"/>
					<path d="M149.25 0.901367L142.636 12.9813V20.5219H137.617V13.0392L131.002 0.901367H136.633L140.106 8.1609L143.611 0.901367H149.25Z" fill="#171717"/>
					<path d="M149.954 20.9102C149.127 20.9102 148.432 20.6291 147.862 20.0586C147.291 19.4881 147.01 18.8018 147.01 17.9998C147.01 17.1978 147.299 16.5115 147.878 15.941C148.457 15.3705 149.151 15.0894 149.954 15.0894C150.756 15.0894 151.442 15.3705 152.012 15.941C152.583 16.5115 152.864 17.1978 152.864 17.9998C152.864 18.8018 152.583 19.4881 152.012 20.0586C151.442 20.6291 150.756 20.9102 149.954 20.9102Z" fill="#FF003D"/>
					<path d="M172.36 17.9257C170.392 19.8936 167.986 20.8858 165.142 20.8858C162.306 20.8858 159.9 19.9018 157.923 17.9257C155.956 15.9579 154.963 13.5518 154.963 10.7075C154.963 7.86324 155.947 5.46545 157.923 3.48933C159.891 1.52149 162.297 0.529297 165.142 0.529297C167.986 0.529297 170.384 1.51322 172.36 3.48933C174.328 5.45718 175.32 7.86324 175.32 10.7075C175.32 13.5518 174.328 15.9496 172.36 17.9257ZM160.197 15.7346C161.537 17.0741 163.182 17.7355 165.142 17.7355C167.101 17.7355 168.755 17.0658 170.086 15.7346C171.425 14.3952 172.087 12.725 172.087 10.7075C172.087 8.69007 171.417 7.01161 170.086 5.68042C168.747 4.34096 167.101 3.6795 165.142 3.6795C163.182 3.6795 161.528 4.34923 160.197 5.68042C158.858 7.01988 158.196 8.69007 158.196 10.7075C158.188 12.725 158.858 14.4034 160.197 15.7346Z" fill="#171717"/>
					<path d="M190.029 0.901367H193.254V20.5219H190.732L181.48 7.21005V20.5219H178.255V0.901367H180.777L190.029 14.2133V0.901367Z" fill="#171717"/>
					<path d="M200.398 17.4296H208.385V20.5137H197.173V0.901367H200.398V17.4296Z" fill="#171717"/>
					<path d="M210.766 0.901367H213.99V20.5219H210.766V0.901367Z" fill="#171717"/>
					<path d="M229.684 0.901367H232.909V20.5219H230.387L221.135 7.21005V20.5219H217.91V0.901367H220.432L229.684 14.2133V0.901367Z" fill="#171717"/>
					<path d="M240.052 17.4296H248.742V20.5137H236.836V0.901367H248.61V3.98543H240.061V9.08694H247.907V12.1379H240.061V17.4296H240.052Z" fill="#171717"/>
					<path d="M0 0V21.299H21.299V0H0ZM3.29904 18V3.29904H18V18H3.29904Z" fill="#FF003D"/>
					<path d="M12.8739 17.4707V12.8074L10.7159 10.6494L12.8822 8.47482V3.81152L6.05261 10.6494L12.8739 17.4707Z" fill="#FF003D"/>
				</svg>
			</div>

			<form class="login__entry" id="entry">
				<div class="login__title">????????</div>
				<div class="login__message">???? ????????????????????????????????? <a href="#registration" js-changeform>????????????????????????????????????</a></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="????????????">
				</div>
				<div class="inputfield">
					<button>??????????</button>
				</div>
				<a href="#recovery" class="login__link" js-changeform>???????????? ?????????????</a>
			</form>

			<form class="login__registration" id="registration">
				<div class="login__title">??????????????????????</div>
				<div class="login__message">?????? ????????????????????????????????? <a href="#entry" js-changeform>??????????</a></div>
				<div class="inputfield">
					<input type="text" placeholder="??????" name="name">
				</div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" pattern="[0-9]*">
				</div>
				<div class="inputfield">
					<input type="text" placeholder="????????????????">
					<div class="inputfield-hint">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999ZM12 18C11.736 17.9981 11.4834 17.892 11.2974 17.7046C11.1114 17.5173 11.007 17.264 11.007 17V11.01C11.0028 10.877 11.0253 10.7445 11.0733 10.6204C11.1213 10.4963 11.1937 10.3831 11.2863 10.2876C11.3789 10.192 11.4897 10.116 11.6122 10.0641C11.7348 10.0122 11.8665 9.9855 11.9995 9.9855C12.1326 9.9855 12.2643 10.0122 12.3868 10.0641C12.5093 10.116 12.6201 10.192 12.7127 10.2876C12.8053 10.3831 12.8777 10.4963 12.9257 10.6204C12.9737 10.7445 12.9962 10.877 12.992 11.01V17C12.9928 17.1309 12.9677 17.2606 12.9183 17.3818C12.8688 17.5029 12.7958 17.6131 12.7037 17.706C12.6115 17.7989 12.5019 17.8727 12.3812 17.9232C12.2604 17.9736 12.1309 17.9997 12 18ZM12 7.99999C11.8038 8.00019 11.6119 7.94219 11.4486 7.83331C11.2853 7.72442 11.1581 7.56955 11.0828 7.3883C11.0076 7.20705 10.9878 7.00758 11.0259 6.81509C11.0641 6.62259 11.1585 6.44574 11.2972 6.30691C11.4359 6.16808 11.6127 6.07348 11.8051 6.03512C11.9976 5.99676 12.1971 6.01637 12.3784 6.09142C12.5597 6.16648 12.7147 6.29359 12.8237 6.45675C12.9328 6.6199 12.991 6.81175 12.991 7.00799C12.9905 7.27075 12.8859 7.52263 12.7002 7.70852C12.5145 7.89441 12.2628 7.9992 12 7.99999ZM11.007 6.99999C11.0071 7.00166 11.0071 7.00333 11.007 7.005V6.99999ZM12.992 6.99999V7.01C12.9919 7.00834 12.9919 7.00666 12.992 7.005V6.99999Z" fill="#9F9F9F"/>
						</svg>
						<span class="inputfield-hint__block">
							<p>???????? ?? ?????? ???????? ????????????????, ?????????????? ?????? ?? ????????</p>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999Z" fill="black"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.73289 8.29645L8.31536 6.71399L12 10.3986L15.6847 6.71399L17.2671 8.29645L13.5825 11.9811L17.0189 15.4175L15.4364 17L12 13.5636L8.56357 17L6.98111 15.4175L10.4175 11.9811L6.73289 8.29645Z" fill="black"/>
							</svg>
						</span>
					</div>
				</div>
				<div class="inputfield">
					<button>????????????????????????????????????</button>
				</div>
				<div class="inputfield inputfield--policy">
					<input type="checkbox" id="policy" checked>
					<label for="policy">
						<span>??&nbsp;???????????????????? ??&nbsp;<a href="#">?????????????????? ????????????????????????????????????</a>,?????? ???????????????? ????&nbsp;?????????????????? ???????????????????????? ???????????? ??&nbsp;?????????????????? ????????????????</span>
					</label>
				</div>
			</form>

			<form class="login__recovery" id="recovery" data-action="change">
				<div class="login__title">???????????????????????????? ????????????</div>
				<div class="login__message">?????????????? ?????????? ?????? ??????????????, ??&nbsp;????&nbsp;???????????? ???????????? ?????? ?????????? ????&nbsp;??????????????????</div>
				<div class="error_str"></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-email" name="js-recovery-to-email">?????????????????? ???????????? ????&nbsp;??????????</button>
				</div>
				<div class="inputfield">
					<span class="login__hr">??????</span>
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-phone" name="js-recovery-to-phone">?????????????????? ???????????? ????&nbsp;??????????????</button>
				</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ?? ???????????? ??????????????</a>
			</form>

			<form class="login__newPassword" id="newpassword">
				<div class="login__title">???????????????????? ?????????? ????????????</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????? ????????????">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????????????? ????????????">
				</div>
				<div class="inputfield">
					<button>???????????????? ????????????</button>
				</div>
			</form>

			<form class="sesslogout" id="sesslogout" data-action="sesslogout">
				<div class="login__title">??????????</div>
				<div class="login__message">??????-???? ?????????????????????? ?????? ?????????? ??&nbsp;???????????? ??&nbsp;?????????? ????&nbsp;??????????????????, ?????????????? ?????? ??????????????????????. </div>
				<div class="login__message">?????? ?????????????? ??&nbsp;???????????????? ???????????????? ?????????? ???????????????????????? ???????????? ???????? ???????? ??&nbsp;???????? ???????????? ??????????????. ????&nbsp;?????????? ?????????????????? ???????? ?????????? ??&nbsp;???????????? ?????????????? ??&nbsp;????????????????. ???????????? ???????????? ?????????????????????????? ???????? ???????????? ?????? ???????????? ????????????????????????.</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ??&nbsp;???????????? ??????????????</a>
			</form>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success login__success--low" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M35.7497 3.25H30.2246C34.0655 5.79104 36.8817 9.61085 38.1733 14.0313C39.4649 18.4518 39.1485 23.1869 37.2801 27.3962C35.4116 31.6054 32.1121 35.0165 27.9673 37.0238C23.8224 39.0311 19.1005 39.5048 14.6396 38.3608C10.1786 37.2168 6.26729 34.5291 3.6 30.7749C0.932701 27.0206 -0.318139 22.4426 0.0697085 17.8537C0.457557 13.2648 2.45897 8.96168 5.71853 5.70835C8.97809 2.45503 13.285 0.461926 17.8747 0.0828667V3.25L18.0859 3.32151C14.2166 3.65977 10.5961 5.37195 7.87971 8.14823C5.16336 10.9245 3.5306 14.5814 3.27686 18.4572C3.02312 22.3331 4.16532 26.1717 6.49651 29.2784C8.82771 32.3851 12.194 34.5547 15.9863 35.3946C19.7785 36.2344 23.7459 35.689 27.1708 33.8571C30.5958 32.0251 33.2519 29.0277 34.6583 25.4071C36.0647 21.7866 36.1287 17.7822 34.8386 14.1187C33.5485 10.4551 30.9894 7.37434 27.6247 5.43399V11.375C27.6247 11.806 27.4536 12.2193 27.1488 12.524C26.8441 12.8288 26.4307 13 25.9997 13C25.5687 13 25.1553 12.8288 24.8506 12.524C24.5458 12.2193 24.3747 11.806 24.3747 11.375V1.625C24.3747 1.19402 24.5458 0.780697 24.8506 0.47595C25.1553 0.171204 25.5687 0 25.9997 0H35.7497C36.1807 0 36.5941 0.171204 36.8988 0.47595C37.2036 0.780697 37.3747 1.19402 37.3747 1.625C37.3747 2.05598 37.2036 2.4693 36.8988 2.77405C36.5941 3.0788 36.1807 3.25 35.7497 3.25Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ????&nbsp;???????????????????????????? ???????????? ?????????????????? ????&nbsp;???????? ??????????</div>
			</div>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5001 39C16.7064 39.0045 13.9444 38.4086 11.4011 37.2528C8.85771 36.097 6.59233 34.4082 4.75843 32.3008C2.92453 30.1934 1.56488 27.7165 0.771506 25.0378C-0.0218694 22.3592 -0.230424 19.5414 0.159949 16.7751C0.550323 14.0089 1.5306 11.3588 3.03425 9.00436C4.5379 6.64989 6.52981 4.64596 8.87528 3.12832C11.2208 1.61067 13.8651 0.614744 16.6289 0.207899C19.3928 -0.198946 22.2117 -0.00719279 24.895 0.770212L23.14 3.6757C19.8547 2.9206 16.416 3.20593 13.3 4.49212C10.184 5.77832 7.54502 8.0017 5.74886 10.8543C3.9527 13.7069 3.08824 17.0475 3.27506 20.4133C3.46188 23.7791 4.69084 27.0036 6.79166 29.6399C8.89248 32.2762 11.7612 34.1939 15.0004 35.1273C18.2395 36.0608 21.6888 35.9638 24.8704 34.8497C28.052 33.7357 30.8084 31.6598 32.7577 28.9096C34.7071 26.1593 35.7527 22.871 35.7501 19.5C35.7502 17.6418 35.4258 15.7979 34.7914 14.0513L36.8552 10.6258C38.378 13.5975 39.1116 16.9106 38.9858 20.2473C38.86 23.584 37.8788 26.8324 36.1365 29.681C34.3942 32.5295 31.9492 34.8825 29.036 36.5144C26.1228 38.1462 22.8392 39.0021 19.5001 39ZM20.9951 24.9746C20.9215 25.1916 20.7991 25.3889 20.6375 25.5515C20.4861 25.7043 20.3025 25.8214 20.1001 25.8942C19.8977 25.9671 19.6816 25.9937 19.4675 25.9723C19.1297 25.9959 18.7941 25.9032 18.5162 25.7096C18.2383 25.5159 18.035 25.2331 17.9401 24.908L11.7325 18.7037C11.4852 18.425 11.3535 18.0623 11.3646 17.6897C11.3756 17.3172 11.5286 16.9629 11.792 16.6993C12.0555 16.4357 12.4095 16.2825 12.7821 16.2712C13.1546 16.2599 13.5173 16.3912 13.7963 16.6384L19.0775 21.9212L31.0863 4.08845C31.1904 3.89803 31.3316 3.7304 31.5015 3.59541C31.6714 3.46043 31.8666 3.36084 32.0756 3.30253C32.2846 3.24422 32.5032 3.22838 32.7185 3.25591C32.9337 3.28344 33.1412 3.35382 33.3288 3.46286C33.7061 3.69567 33.9782 4.06608 34.0874 4.49579C34.1965 4.9255 34.1342 5.3808 33.9138 5.76547L20.9951 24.9746Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ?????????????? ??????????????</div>
				<a href="#entry" js-changeform>??????????</a>
			</div>

			<p class="login__tech">?????????????? ?????? ?????????? ????&nbsp;?????????????? ?????????????????????? ?????????????????? <a href="tel:88002005440">8&nbsp;800&nbsp;200 54&nbsp;40</a></p>

		</div><!-- login__form -->
	</section><!-- login -->

</div><!-- popup-franchise -->

<?php } ?>

 
	<div class="qwt" href="#popup-message" data-fancybox="" hidden>popup-message</div>
 

	<section class="popup-price fancy__class" id="popup-price" data-package="">
	<div class="popup-price__wrapper">
		<div class="popup-price__info">
			<div class="popup-price__package"><?= _('popup-price__package') ?></div>
			<div class="popup-price__name condensed" js-package></div>
			<div class="popup-price__text condensed" js-text></div>
			<div class="popup-price__price condensed" js-cost></div>
		</div>
		<div class="popup-price__form">
			<form class="form" action="<?= $action ?>&form=cloudRecurent<?= $link_price ? '&link=' . urlencode($link_price) : '' ?>">
				<div class="form__wrapper">
					<div class="form__title"><?= _('popup-price-form__title') ?></div>
					<div class="form__input">
						<input type="text" class="input" name="name" placeholder="<?= _('form_item_name') ?>" tabindex="1" value="<?= $get_name ?>">
					</div>
					<div class="form__input">
						<input type="tel" class="input" name="phone" placeholder="<?= _('form_item_phone') ?>" tabindex="2" value="<?= $get_phone ?>">
					</div>
					<div class="form__input">
						<input type="email" class="input" name="email" placeholder="<?= _('form_item_email') ?>" tabindex="3" value="<?= $get_email ?>">
					</div>
					<div class="form__input">
						<button class="form__submit form__button button condensed" type="submit">
							<span class="popup-price__button-buy"><?= _('popup-price__button-buy') ?></span>
							<span class="popup-price__button-get"><?= _('popup-price__button-get') ?></span>
						</button>
					</div>
					<div class="form__privacy">
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">???????????????? ??&nbsp;<a href="#privacy" class="fancybox privacy">?????????????????? ????????????????????????????????????</a> ??&nbsp;????&nbsp;?????????????????? ???????????????????????? ????????????</div>
						</label>
						<?php */ ?>
						<label class="checkcontainer checkcontainer_is-recurrent">
							<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-1') ?></div>
						</label>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree2" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-2') ?></div>
						</label>
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree3" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">??????????????????, ???? ???????????????????????? ?? ??????????????????&nbsp;<a href="files/reccuring_offerta.pdf" class="footer__link-offer" terget="_blank"> ?????????????????? ????????????</a></div>
						</label>
						<?php */ ?>
					</div>
					<input type="hidden" name="comment" value="<?= $external_url ?>">
					<input type="hidden" name="product_id" value="">
					<input type="hidden" name="quote_id" value="">
					<input type="hidden" name="partner" value="<?= $partner ?>">
				</div>
			</form>

		</div>
	</div>

</section>


<div class="stripe" id="stripeForm">
	<form id="payment-form" class="nolander">
		<fieldset>
			<legend class="card-only">Pay with card</legend>
			<legend class="payment-request-available">Or enter card details</legend>
			<div class="container">
				<div id="payment-elements"></div>
				<button type="submit">Buy ticket</button>
			</div>
			<div class="card-errors" id="card-errors"></div>
		</fieldset>
	</form>
</div>


	<?php break;
	case 'hrforum': ?>
	


<div class="popup-registration popup" id="popup-registration">
	<div class="popup__title condensed"><?= $version_form_title ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-registration">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-registration -->


<div class="popup-partners popup" id="popup-partners">
	<div class="popup__title condensed"><?= _('partners__button-partner') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-partner">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-partners -->


<div class="popup-accreditation" id="popup-accreditation">
	<div class="popup-accreditation__header popup-accreditation__inner condensed"><?= _('popup-accreditation__header') ?></div>
	<div class="popup-accreditation__body popup-accreditation__inner">
		<?php if ( _('popup-accreditation__subtitle-1') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-1') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__subtitle-2') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-2') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-2') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-2') ?></div>
			<br>
		<?php } ?>
		<div class="popup-accreditation__text"><?= _('popup-accreditation__text-3') ?></div>
		<div class="popup-accreditation__rules"><a class="popup-accreditation__rules-link" href="files/media_draft_citation_rules_<?= $lang ?>.pdf" target="_blank" data-fancybox><?= _('popup-accreditation__rules') ?></a></div>
	</div><!-- popup-accreditation__inner -->
</div><!-- popup-accreditation -->


<div class="popup-franchise popup" id="popup-franchise">
	<div class="popup__title condensed"><?= _('popup-franchise__title') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=3644&amp;form=franchising">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-franchise -->


<?php if ( $external_url == 'synergyonline' ) { ?>
	
<div class="popup-synergyonline" id="popup-synergyonline">

	<section class="login" id="login">
		<div class="login__form">
			<div class="login__logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="249" height="22" viewBox="0 0 249 22" fill="none">
					<path d="M34.7435 20.9352C32.6681 20.9352 30.9483 20.497 29.5841 19.6205C28.2198 18.7441 27.269 17.5535 26.7233 16.0652L31.0145 13.5682C31.7421 15.3045 33.0319 16.1727 34.884 16.1727C36.4137 16.1727 37.1826 15.7345 37.1826 14.858C37.1826 14.2793 36.7444 13.808 35.868 13.4607C35.4959 13.3119 34.6691 13.0555 33.404 12.7C31.6098 12.1791 30.1877 11.4432 29.1459 10.5007C28.0958 9.55807 27.5749 8.24342 27.5749 6.56496C27.5749 4.75422 28.2281 3.28246 29.5262 2.16625C30.8243 1.04177 32.4449 0.487793 34.3879 0.487793C36.0333 0.487793 37.4885 0.868133 38.7619 1.63708C40.0352 2.40603 41.0026 3.51398 41.6805 4.96919L37.4803 7.43313C36.8602 5.97792 35.8432 5.25031 34.421 5.25031C33.8257 5.25031 33.3709 5.37433 33.065 5.61411C32.7591 5.85389 32.602 6.16809 32.602 6.54016C32.602 6.97011 32.8335 7.33391 33.2883 7.63157C33.743 7.92923 34.636 8.27649 35.9672 8.6651C36.918 8.94622 37.687 9.21081 38.2658 9.45059C38.8445 9.69037 39.4812 10.0459 40.1675 10.5007C40.8537 10.9554 41.3746 11.5507 41.7054 12.2701C42.0444 12.9894 42.2097 13.8328 42.2097 14.8084C42.2097 16.7349 41.5235 18.2397 40.1675 19.3229C38.7867 20.3978 36.9842 20.9352 34.7435 20.9352Z" fill="#171717"/>
					<path d="M59.8789 0.901367L53.2643 12.9813V20.5219H48.2455V13.0392L41.6309 0.901367H47.2615L50.7342 8.1609L54.24 0.901367H59.8789Z" fill="#171717"/>
					<path d="M72.2397 0.901367H77.2254V20.5219H73.3559L66.4353 10.6579V20.5219H61.4165V0.901367H65.3191L72.2397 10.7654V0.901367Z" fill="#171717"/>
					<path d="M85.3529 15.809H92.9514V20.5137H80.3423V0.901367H92.8108V5.5812H85.3529V8.30146H92.108V12.9234H85.3529V15.809Z" fill="#171717"/>
					<path d="M105.561 20.5137L102.138 14.1802H100.343V20.5137H95.3245V0.901367H103.171C105.172 0.901367 106.85 1.53802 108.198 2.8196C109.554 4.10118 110.232 5.72176 110.232 7.68134C110.232 8.85543 109.934 9.93858 109.339 10.9142C108.744 11.8982 107.925 12.6754 106.9 13.2541L110.935 20.5137H105.561ZM100.352 5.52332V9.92204H103.13C103.75 9.93858 104.254 9.74841 104.643 9.33499C105.031 8.92158 105.23 8.39241 105.23 7.73922C105.23 7.08603 105.031 6.55686 104.643 6.14344C104.254 5.73003 103.75 5.52332 103.13 5.52332H100.352Z" fill="#171717"/>
					<path d="M131.904 9.27695V11.2696C131.904 14.147 131.002 16.4786 129.2 18.2646C127.397 20.0505 125.057 20.9435 122.18 20.9435C119.113 20.9435 116.599 19.9595 114.631 18C112.663 16.0404 111.671 13.6178 111.671 10.7404C111.671 7.86308 112.655 5.43221 114.615 3.4561C116.574 1.47172 119.005 0.487793 121.899 0.487793C123.726 0.487793 125.405 0.901206 126.926 1.71976C128.447 2.53832 129.638 3.638 130.498 5.00226L126.24 7.4414C125.851 6.82128 125.272 6.33345 124.52 5.95311C123.759 5.58104 122.908 5.39087 121.957 5.39087C120.402 5.39087 119.137 5.89524 118.145 6.90396C117.153 7.91269 116.657 9.20254 116.657 10.7735C116.657 12.2866 117.145 13.5682 118.129 14.61C119.113 15.66 120.485 16.1809 122.263 16.1809C124.545 16.1809 126.05 15.3211 126.777 13.6013H122.015V9.28522H131.904V9.27695Z" fill="#171717"/>
					<path d="M149.25 0.901367L142.636 12.9813V20.5219H137.617V13.0392L131.002 0.901367H136.633L140.106 8.1609L143.611 0.901367H149.25Z" fill="#171717"/>
					<path d="M149.954 20.9102C149.127 20.9102 148.432 20.6291 147.862 20.0586C147.291 19.4881 147.01 18.8018 147.01 17.9998C147.01 17.1978 147.299 16.5115 147.878 15.941C148.457 15.3705 149.151 15.0894 149.954 15.0894C150.756 15.0894 151.442 15.3705 152.012 15.941C152.583 16.5115 152.864 17.1978 152.864 17.9998C152.864 18.8018 152.583 19.4881 152.012 20.0586C151.442 20.6291 150.756 20.9102 149.954 20.9102Z" fill="#FF003D"/>
					<path d="M172.36 17.9257C170.392 19.8936 167.986 20.8858 165.142 20.8858C162.306 20.8858 159.9 19.9018 157.923 17.9257C155.956 15.9579 154.963 13.5518 154.963 10.7075C154.963 7.86324 155.947 5.46545 157.923 3.48933C159.891 1.52149 162.297 0.529297 165.142 0.529297C167.986 0.529297 170.384 1.51322 172.36 3.48933C174.328 5.45718 175.32 7.86324 175.32 10.7075C175.32 13.5518 174.328 15.9496 172.36 17.9257ZM160.197 15.7346C161.537 17.0741 163.182 17.7355 165.142 17.7355C167.101 17.7355 168.755 17.0658 170.086 15.7346C171.425 14.3952 172.087 12.725 172.087 10.7075C172.087 8.69007 171.417 7.01161 170.086 5.68042C168.747 4.34096 167.101 3.6795 165.142 3.6795C163.182 3.6795 161.528 4.34923 160.197 5.68042C158.858 7.01988 158.196 8.69007 158.196 10.7075C158.188 12.725 158.858 14.4034 160.197 15.7346Z" fill="#171717"/>
					<path d="M190.029 0.901367H193.254V20.5219H190.732L181.48 7.21005V20.5219H178.255V0.901367H180.777L190.029 14.2133V0.901367Z" fill="#171717"/>
					<path d="M200.398 17.4296H208.385V20.5137H197.173V0.901367H200.398V17.4296Z" fill="#171717"/>
					<path d="M210.766 0.901367H213.99V20.5219H210.766V0.901367Z" fill="#171717"/>
					<path d="M229.684 0.901367H232.909V20.5219H230.387L221.135 7.21005V20.5219H217.91V0.901367H220.432L229.684 14.2133V0.901367Z" fill="#171717"/>
					<path d="M240.052 17.4296H248.742V20.5137H236.836V0.901367H248.61V3.98543H240.061V9.08694H247.907V12.1379H240.061V17.4296H240.052Z" fill="#171717"/>
					<path d="M0 0V21.299H21.299V0H0ZM3.29904 18V3.29904H18V18H3.29904Z" fill="#FF003D"/>
					<path d="M12.8739 17.4707V12.8074L10.7159 10.6494L12.8822 8.47482V3.81152L6.05261 10.6494L12.8739 17.4707Z" fill="#FF003D"/>
				</svg>
			</div>

			<form class="login__entry" id="entry">
				<div class="login__title">????????</div>
				<div class="login__message">???? ????????????????????????????????? <a href="#registration" js-changeform>????????????????????????????????????</a></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="????????????">
				</div>
				<div class="inputfield">
					<button>??????????</button>
				</div>
				<a href="#recovery" class="login__link" js-changeform>???????????? ?????????????</a>
			</form>

			<form class="login__registration" id="registration">
				<div class="login__title">??????????????????????</div>
				<div class="login__message">?????? ????????????????????????????????? <a href="#entry" js-changeform>??????????</a></div>
				<div class="inputfield">
					<input type="text" placeholder="??????" name="name">
				</div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" pattern="[0-9]*">
				</div>
				<div class="inputfield">
					<input type="text" placeholder="????????????????">
					<div class="inputfield-hint">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999ZM12 18C11.736 17.9981 11.4834 17.892 11.2974 17.7046C11.1114 17.5173 11.007 17.264 11.007 17V11.01C11.0028 10.877 11.0253 10.7445 11.0733 10.6204C11.1213 10.4963 11.1937 10.3831 11.2863 10.2876C11.3789 10.192 11.4897 10.116 11.6122 10.0641C11.7348 10.0122 11.8665 9.9855 11.9995 9.9855C12.1326 9.9855 12.2643 10.0122 12.3868 10.0641C12.5093 10.116 12.6201 10.192 12.7127 10.2876C12.8053 10.3831 12.8777 10.4963 12.9257 10.6204C12.9737 10.7445 12.9962 10.877 12.992 11.01V17C12.9928 17.1309 12.9677 17.2606 12.9183 17.3818C12.8688 17.5029 12.7958 17.6131 12.7037 17.706C12.6115 17.7989 12.5019 17.8727 12.3812 17.9232C12.2604 17.9736 12.1309 17.9997 12 18ZM12 7.99999C11.8038 8.00019 11.6119 7.94219 11.4486 7.83331C11.2853 7.72442 11.1581 7.56955 11.0828 7.3883C11.0076 7.20705 10.9878 7.00758 11.0259 6.81509C11.0641 6.62259 11.1585 6.44574 11.2972 6.30691C11.4359 6.16808 11.6127 6.07348 11.8051 6.03512C11.9976 5.99676 12.1971 6.01637 12.3784 6.09142C12.5597 6.16648 12.7147 6.29359 12.8237 6.45675C12.9328 6.6199 12.991 6.81175 12.991 7.00799C12.9905 7.27075 12.8859 7.52263 12.7002 7.70852C12.5145 7.89441 12.2628 7.9992 12 7.99999ZM11.007 6.99999C11.0071 7.00166 11.0071 7.00333 11.007 7.005V6.99999ZM12.992 6.99999V7.01C12.9919 7.00834 12.9919 7.00666 12.992 7.005V6.99999Z" fill="#9F9F9F"/>
						</svg>
						<span class="inputfield-hint__block">
							<p>???????? ?? ?????? ???????? ????????????????, ?????????????? ?????? ?? ????????</p>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999Z" fill="black"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.73289 8.29645L8.31536 6.71399L12 10.3986L15.6847 6.71399L17.2671 8.29645L13.5825 11.9811L17.0189 15.4175L15.4364 17L12 13.5636L8.56357 17L6.98111 15.4175L10.4175 11.9811L6.73289 8.29645Z" fill="black"/>
							</svg>
						</span>
					</div>
				</div>
				<div class="inputfield">
					<button>????????????????????????????????????</button>
				</div>
				<div class="inputfield inputfield--policy">
					<input type="checkbox" id="policy" checked>
					<label for="policy">
						<span>??&nbsp;???????????????????? ??&nbsp;<a href="#">?????????????????? ????????????????????????????????????</a>,?????? ???????????????? ????&nbsp;?????????????????? ???????????????????????? ???????????? ??&nbsp;?????????????????? ????????????????</span>
					</label>
				</div>
			</form>

			<form class="login__recovery" id="recovery" data-action="change">
				<div class="login__title">???????????????????????????? ????????????</div>
				<div class="login__message">?????????????? ?????????? ?????? ??????????????, ??&nbsp;????&nbsp;???????????? ???????????? ?????? ?????????? ????&nbsp;??????????????????</div>
				<div class="error_str"></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-email" name="js-recovery-to-email">?????????????????? ???????????? ????&nbsp;??????????</button>
				</div>
				<div class="inputfield">
					<span class="login__hr">??????</span>
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-phone" name="js-recovery-to-phone">?????????????????? ???????????? ????&nbsp;??????????????</button>
				</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ?? ???????????? ??????????????</a>
			</form>

			<form class="login__newPassword" id="newpassword">
				<div class="login__title">???????????????????? ?????????? ????????????</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????? ????????????">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????????????? ????????????">
				</div>
				<div class="inputfield">
					<button>???????????????? ????????????</button>
				</div>
			</form>

			<form class="sesslogout" id="sesslogout" data-action="sesslogout">
				<div class="login__title">??????????</div>
				<div class="login__message">??????-???? ?????????????????????? ?????? ?????????? ??&nbsp;???????????? ??&nbsp;?????????? ????&nbsp;??????????????????, ?????????????? ?????? ??????????????????????. </div>
				<div class="login__message">?????? ?????????????? ??&nbsp;???????????????? ???????????????? ?????????? ???????????????????????? ???????????? ???????? ???????? ??&nbsp;???????? ???????????? ??????????????. ????&nbsp;?????????? ?????????????????? ???????? ?????????? ??&nbsp;???????????? ?????????????? ??&nbsp;????????????????. ???????????? ???????????? ?????????????????????????? ???????? ???????????? ?????? ???????????? ????????????????????????.</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ??&nbsp;???????????? ??????????????</a>
			</form>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success login__success--low" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M35.7497 3.25H30.2246C34.0655 5.79104 36.8817 9.61085 38.1733 14.0313C39.4649 18.4518 39.1485 23.1869 37.2801 27.3962C35.4116 31.6054 32.1121 35.0165 27.9673 37.0238C23.8224 39.0311 19.1005 39.5048 14.6396 38.3608C10.1786 37.2168 6.26729 34.5291 3.6 30.7749C0.932701 27.0206 -0.318139 22.4426 0.0697085 17.8537C0.457557 13.2648 2.45897 8.96168 5.71853 5.70835C8.97809 2.45503 13.285 0.461926 17.8747 0.0828667V3.25L18.0859 3.32151C14.2166 3.65977 10.5961 5.37195 7.87971 8.14823C5.16336 10.9245 3.5306 14.5814 3.27686 18.4572C3.02312 22.3331 4.16532 26.1717 6.49651 29.2784C8.82771 32.3851 12.194 34.5547 15.9863 35.3946C19.7785 36.2344 23.7459 35.689 27.1708 33.8571C30.5958 32.0251 33.2519 29.0277 34.6583 25.4071C36.0647 21.7866 36.1287 17.7822 34.8386 14.1187C33.5485 10.4551 30.9894 7.37434 27.6247 5.43399V11.375C27.6247 11.806 27.4536 12.2193 27.1488 12.524C26.8441 12.8288 26.4307 13 25.9997 13C25.5687 13 25.1553 12.8288 24.8506 12.524C24.5458 12.2193 24.3747 11.806 24.3747 11.375V1.625C24.3747 1.19402 24.5458 0.780697 24.8506 0.47595C25.1553 0.171204 25.5687 0 25.9997 0H35.7497C36.1807 0 36.5941 0.171204 36.8988 0.47595C37.2036 0.780697 37.3747 1.19402 37.3747 1.625C37.3747 2.05598 37.2036 2.4693 36.8988 2.77405C36.5941 3.0788 36.1807 3.25 35.7497 3.25Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ????&nbsp;???????????????????????????? ???????????? ?????????????????? ????&nbsp;???????? ??????????</div>
			</div>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5001 39C16.7064 39.0045 13.9444 38.4086 11.4011 37.2528C8.85771 36.097 6.59233 34.4082 4.75843 32.3008C2.92453 30.1934 1.56488 27.7165 0.771506 25.0378C-0.0218694 22.3592 -0.230424 19.5414 0.159949 16.7751C0.550323 14.0089 1.5306 11.3588 3.03425 9.00436C4.5379 6.64989 6.52981 4.64596 8.87528 3.12832C11.2208 1.61067 13.8651 0.614744 16.6289 0.207899C19.3928 -0.198946 22.2117 -0.00719279 24.895 0.770212L23.14 3.6757C19.8547 2.9206 16.416 3.20593 13.3 4.49212C10.184 5.77832 7.54502 8.0017 5.74886 10.8543C3.9527 13.7069 3.08824 17.0475 3.27506 20.4133C3.46188 23.7791 4.69084 27.0036 6.79166 29.6399C8.89248 32.2762 11.7612 34.1939 15.0004 35.1273C18.2395 36.0608 21.6888 35.9638 24.8704 34.8497C28.052 33.7357 30.8084 31.6598 32.7577 28.9096C34.7071 26.1593 35.7527 22.871 35.7501 19.5C35.7502 17.6418 35.4258 15.7979 34.7914 14.0513L36.8552 10.6258C38.378 13.5975 39.1116 16.9106 38.9858 20.2473C38.86 23.584 37.8788 26.8324 36.1365 29.681C34.3942 32.5295 31.9492 34.8825 29.036 36.5144C26.1228 38.1462 22.8392 39.0021 19.5001 39ZM20.9951 24.9746C20.9215 25.1916 20.7991 25.3889 20.6375 25.5515C20.4861 25.7043 20.3025 25.8214 20.1001 25.8942C19.8977 25.9671 19.6816 25.9937 19.4675 25.9723C19.1297 25.9959 18.7941 25.9032 18.5162 25.7096C18.2383 25.5159 18.035 25.2331 17.9401 24.908L11.7325 18.7037C11.4852 18.425 11.3535 18.0623 11.3646 17.6897C11.3756 17.3172 11.5286 16.9629 11.792 16.6993C12.0555 16.4357 12.4095 16.2825 12.7821 16.2712C13.1546 16.2599 13.5173 16.3912 13.7963 16.6384L19.0775 21.9212L31.0863 4.08845C31.1904 3.89803 31.3316 3.7304 31.5015 3.59541C31.6714 3.46043 31.8666 3.36084 32.0756 3.30253C32.2846 3.24422 32.5032 3.22838 32.7185 3.25591C32.9337 3.28344 33.1412 3.35382 33.3288 3.46286C33.7061 3.69567 33.9782 4.06608 34.0874 4.49579C34.1965 4.9255 34.1342 5.3808 33.9138 5.76547L20.9951 24.9746Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ?????????????? ??????????????</div>
				<a href="#entry" js-changeform>??????????</a>
			</div>

			<p class="login__tech">?????????????? ?????? ?????????? ????&nbsp;?????????????? ?????????????????????? ?????????????????? <a href="tel:88002005440">8&nbsp;800&nbsp;200 54&nbsp;40</a></p>

		</div><!-- login__form -->
	</section><!-- login -->

</div><!-- popup-franchise -->

<?php } ?>

 
	<div class="qwt" href="#popup-message" data-fancybox="" hidden>popup-message</div>
 

	<section class="popup-price fancy__class" id="popup-price" data-package="">
	<div class="popup-price__wrapper">
		<div class="popup-price__info">
			<div class="popup-price__package"><?= _('popup-price__package') ?></div>
			<div class="popup-price__name condensed" js-package></div>
			<div class="popup-price__text condensed" js-text></div>
			<div class="popup-price__price condensed" js-cost></div>
		</div>
		<div class="popup-price__form">
			<form class="form" action="<?= $action ?>&amp;form=<?= $version_price_form ?>&amp;external_url=<?= $external_url ?>">
				<div class="form__wrapper">
					<div class="form__title"><?= _('popup-price-form__title') ?></div>
					<div class="form__input">
						<input type="text" class="input" name="name" placeholder="<?= _('form_item_name') ?>" tabindex="1" value="<?= $get_name ?>">
					</div>
					<div class="form__input">
						<input type="tel" class="input" name="phone" placeholder="<?= _('form_item_phone') ?>" tabindex="2" value="<?= $get_phone ?>">
					</div>
					<div class="form__input">
						<input type="email" class="input" name="email" placeholder="<?= _('form_item_email') ?>" tabindex="3" value="<?= $get_email ?>">
					</div>
					<div class="form__input">
						<button class="form__submit form__button button condensed" type="submit">
							<span class="popup-price__button-buy"><?= _('popup-price__button-buy') ?></span>
							<span class="popup-price__button-get"><?= _('popup-price__button-get') ?></span>
						</button>
					</div>
					<div class="form__privacy">
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">???????????????? ??&nbsp;<a href="#privacy" class="fancybox privacy">?????????????????? ????????????????????????????????????</a> ??&nbsp;????&nbsp;?????????????????? ???????????????????????? ????????????</div>
						</label>
						<?php */ ?>
						<label class="checkcontainer checkcontainer_is-recurrent">
							<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-1') ?></div>
						</label>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree2" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-2') ?></div>
						</label>
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree3" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">??????????????????, ???? ???????????????????????? ?? ??????????????????&nbsp;<a href="files/reccuring_offerta.pdf" class="footer__link-offer" terget="_blank"> ?????????????????? ????????????</a></div>
						</label>
						<?php */ ?>
					</div>
					<input type="hidden" name="comment" value="<?= $external_url ?>">
					<input type="hidden" name="product_id" value="">
					<input type="hidden" name="quote_id" value="">
					<input type="hidden" name="partner" value="<?= $partner ?>">
				</div>
			</form>

		</div>
	</div>

</section>

<section class="popup-price fancy__class" id="popup-ticket-price" data-package="">
	<div class="popup-price__wrapper">
		<div class="popup-price__info">
			<div class="popup-price__package"><?= _('popup-price__package') ?></div>
			<div class="popup-price__name condensed" js-package></div>
			<div class="popup-price__text condensed" js-text></div>
			<div class="popup-price__price condensed" js-cost></div>
		</div>
		<div class="popup-price__form">
			<form class="form" action="<?= $action ?><?= $unitTicket ? '&amp;unit=' . $unitTicket : '' ?><?= $typeTicket ? '&amp;type=' . $typeTicket : '' ?>&amp;form=<?= $version_price_form ?>&amp;external_url=<?= $external_url ?>">
				<div class="form__wrapper">
					<div class="form__title"><?= _('popup-price-form__title') ?></div>
					<div class="form__input">
						<input type="text" class="input" name="name" placeholder="<?= _('form_item_name') ?>" tabindex="1" value="<?= $get_name ?>">
					</div>
					<div class="form__input">
						<input type="tel" class="input" name="phone" placeholder="<?= _('form_item_phone') ?>" tabindex="2" value="<?= $get_phone ?>">
					</div>
					<div class="form__input">
						<input type="email" class="input" name="email" placeholder="<?= _('form_item_email') ?>" tabindex="3" value="<?= $get_email ?>">
					</div>
					<div class="form__input">
						<input type="number" class="input" name="tickets_count" "<?= _('form_item_ticket_count') ?>" tabindex="4" min="1" value="1">
					</div>
					<div class="form__input">
						<button class="form__submit form__button button condensed" type="submit">
							<span class="popup-price__button-buy"><?= _('popup-price__button-buy') ?></span>
							<span class="popup-price__button-get"><?= _('popup-price__button-get') ?></span>
						</button>
					</div>
					<div class="form__privacy">
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">???????????????? ??&nbsp;<a href="#privacy" class="fancybox privacy">?????????????????? ????????????????????????????????????</a> ??&nbsp;????&nbsp;?????????????????? ???????????????????????? ????????????</div>
						</label>
						<?php */ ?>
						<label class="checkcontainer checkcontainer_is-recurrent">
							<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-1') ?></div>
						</label>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree2" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-2') ?></div>
						</label>
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree3" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">??????????????????, ???? ???????????????????????? ?? ??????????????????&nbsp;<a href="files/reccuring_offerta.pdf" class="footer__link-offer" terget="_blank"> ?????????????????? ????????????</a></div>
						</label>
						<?php */ ?>
					</div>
					<input type="hidden" name="comment" value="<?= $external_url ?>">
					<input type="hidden" name="product_id" value="65066869">
					<input type="hidden" name="event_id" value="154">
					<input type="hidden" name="quote_id" value="">
					<input type="hidden" name="partner" value="<?= $partner ?>">
				</div>
			</form>

		</div>
	</div>

</section>


<div class="stripe" id="stripeForm">
	<form id="payment-form" class="nolander">
		<fieldset>
			<legend class="card-only">Pay with card</legend>
			<legend class="payment-request-available">Or enter card details</legend>
			<div class="container">
				<div id="payment-elements"></div>
				<button type="submit">Buy ticket</button>
			</div>
			<div class="card-errors" id="card-errors"></div>
		</fieldset>
	</form>
</div>


	<?php break;
 	case 'synergywoman': ?>
    


<div class="popup-registration popup" id="popup-registration">
	<div class="popup__title condensed"><?= $version_form_title ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-registration">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-registration -->


<div class="popup-partners popup" id="popup-partners">
	<div class="popup__title condensed"><?= _('partners__button-partner') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-partner">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-partners -->


<div class="popup-accreditation" id="popup-accreditation">
	<div class="popup-accreditation__header popup-accreditation__inner condensed"><?= _('popup-accreditation__header') ?></div>
	<div class="popup-accreditation__body popup-accreditation__inner">
		<?php if ( _('popup-accreditation__subtitle-1') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-1') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__subtitle-2') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-2') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-2') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-2') ?></div>
			<br>
		<?php } ?>
		<div class="popup-accreditation__text"><?= _('popup-accreditation__text-3') ?></div>
		<div class="popup-accreditation__rules"><a class="popup-accreditation__rules-link" href="files/media_draft_citation_rules_<?= $lang ?>.pdf" target="_blank" data-fancybox><?= _('popup-accreditation__rules') ?></a></div>
	</div><!-- popup-accreditation__inner -->
</div><!-- popup-accreditation -->


<div class="popup-franchise popup" id="popup-franchise">
	<div class="popup__title condensed"><?= _('popup-franchise__title') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=3644&amp;form=franchising">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-franchise -->


<?php if ( $external_url == 'synergyonline' ) { ?>
	
<div class="popup-synergyonline" id="popup-synergyonline">

	<section class="login" id="login">
		<div class="login__form">
			<div class="login__logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="249" height="22" viewBox="0 0 249 22" fill="none">
					<path d="M34.7435 20.9352C32.6681 20.9352 30.9483 20.497 29.5841 19.6205C28.2198 18.7441 27.269 17.5535 26.7233 16.0652L31.0145 13.5682C31.7421 15.3045 33.0319 16.1727 34.884 16.1727C36.4137 16.1727 37.1826 15.7345 37.1826 14.858C37.1826 14.2793 36.7444 13.808 35.868 13.4607C35.4959 13.3119 34.6691 13.0555 33.404 12.7C31.6098 12.1791 30.1877 11.4432 29.1459 10.5007C28.0958 9.55807 27.5749 8.24342 27.5749 6.56496C27.5749 4.75422 28.2281 3.28246 29.5262 2.16625C30.8243 1.04177 32.4449 0.487793 34.3879 0.487793C36.0333 0.487793 37.4885 0.868133 38.7619 1.63708C40.0352 2.40603 41.0026 3.51398 41.6805 4.96919L37.4803 7.43313C36.8602 5.97792 35.8432 5.25031 34.421 5.25031C33.8257 5.25031 33.3709 5.37433 33.065 5.61411C32.7591 5.85389 32.602 6.16809 32.602 6.54016C32.602 6.97011 32.8335 7.33391 33.2883 7.63157C33.743 7.92923 34.636 8.27649 35.9672 8.6651C36.918 8.94622 37.687 9.21081 38.2658 9.45059C38.8445 9.69037 39.4812 10.0459 40.1675 10.5007C40.8537 10.9554 41.3746 11.5507 41.7054 12.2701C42.0444 12.9894 42.2097 13.8328 42.2097 14.8084C42.2097 16.7349 41.5235 18.2397 40.1675 19.3229C38.7867 20.3978 36.9842 20.9352 34.7435 20.9352Z" fill="#171717"/>
					<path d="M59.8789 0.901367L53.2643 12.9813V20.5219H48.2455V13.0392L41.6309 0.901367H47.2615L50.7342 8.1609L54.24 0.901367H59.8789Z" fill="#171717"/>
					<path d="M72.2397 0.901367H77.2254V20.5219H73.3559L66.4353 10.6579V20.5219H61.4165V0.901367H65.3191L72.2397 10.7654V0.901367Z" fill="#171717"/>
					<path d="M85.3529 15.809H92.9514V20.5137H80.3423V0.901367H92.8108V5.5812H85.3529V8.30146H92.108V12.9234H85.3529V15.809Z" fill="#171717"/>
					<path d="M105.561 20.5137L102.138 14.1802H100.343V20.5137H95.3245V0.901367H103.171C105.172 0.901367 106.85 1.53802 108.198 2.8196C109.554 4.10118 110.232 5.72176 110.232 7.68134C110.232 8.85543 109.934 9.93858 109.339 10.9142C108.744 11.8982 107.925 12.6754 106.9 13.2541L110.935 20.5137H105.561ZM100.352 5.52332V9.92204H103.13C103.75 9.93858 104.254 9.74841 104.643 9.33499C105.031 8.92158 105.23 8.39241 105.23 7.73922C105.23 7.08603 105.031 6.55686 104.643 6.14344C104.254 5.73003 103.75 5.52332 103.13 5.52332H100.352Z" fill="#171717"/>
					<path d="M131.904 9.27695V11.2696C131.904 14.147 131.002 16.4786 129.2 18.2646C127.397 20.0505 125.057 20.9435 122.18 20.9435C119.113 20.9435 116.599 19.9595 114.631 18C112.663 16.0404 111.671 13.6178 111.671 10.7404C111.671 7.86308 112.655 5.43221 114.615 3.4561C116.574 1.47172 119.005 0.487793 121.899 0.487793C123.726 0.487793 125.405 0.901206 126.926 1.71976C128.447 2.53832 129.638 3.638 130.498 5.00226L126.24 7.4414C125.851 6.82128 125.272 6.33345 124.52 5.95311C123.759 5.58104 122.908 5.39087 121.957 5.39087C120.402 5.39087 119.137 5.89524 118.145 6.90396C117.153 7.91269 116.657 9.20254 116.657 10.7735C116.657 12.2866 117.145 13.5682 118.129 14.61C119.113 15.66 120.485 16.1809 122.263 16.1809C124.545 16.1809 126.05 15.3211 126.777 13.6013H122.015V9.28522H131.904V9.27695Z" fill="#171717"/>
					<path d="M149.25 0.901367L142.636 12.9813V20.5219H137.617V13.0392L131.002 0.901367H136.633L140.106 8.1609L143.611 0.901367H149.25Z" fill="#171717"/>
					<path d="M149.954 20.9102C149.127 20.9102 148.432 20.6291 147.862 20.0586C147.291 19.4881 147.01 18.8018 147.01 17.9998C147.01 17.1978 147.299 16.5115 147.878 15.941C148.457 15.3705 149.151 15.0894 149.954 15.0894C150.756 15.0894 151.442 15.3705 152.012 15.941C152.583 16.5115 152.864 17.1978 152.864 17.9998C152.864 18.8018 152.583 19.4881 152.012 20.0586C151.442 20.6291 150.756 20.9102 149.954 20.9102Z" fill="#FF003D"/>
					<path d="M172.36 17.9257C170.392 19.8936 167.986 20.8858 165.142 20.8858C162.306 20.8858 159.9 19.9018 157.923 17.9257C155.956 15.9579 154.963 13.5518 154.963 10.7075C154.963 7.86324 155.947 5.46545 157.923 3.48933C159.891 1.52149 162.297 0.529297 165.142 0.529297C167.986 0.529297 170.384 1.51322 172.36 3.48933C174.328 5.45718 175.32 7.86324 175.32 10.7075C175.32 13.5518 174.328 15.9496 172.36 17.9257ZM160.197 15.7346C161.537 17.0741 163.182 17.7355 165.142 17.7355C167.101 17.7355 168.755 17.0658 170.086 15.7346C171.425 14.3952 172.087 12.725 172.087 10.7075C172.087 8.69007 171.417 7.01161 170.086 5.68042C168.747 4.34096 167.101 3.6795 165.142 3.6795C163.182 3.6795 161.528 4.34923 160.197 5.68042C158.858 7.01988 158.196 8.69007 158.196 10.7075C158.188 12.725 158.858 14.4034 160.197 15.7346Z" fill="#171717"/>
					<path d="M190.029 0.901367H193.254V20.5219H190.732L181.48 7.21005V20.5219H178.255V0.901367H180.777L190.029 14.2133V0.901367Z" fill="#171717"/>
					<path d="M200.398 17.4296H208.385V20.5137H197.173V0.901367H200.398V17.4296Z" fill="#171717"/>
					<path d="M210.766 0.901367H213.99V20.5219H210.766V0.901367Z" fill="#171717"/>
					<path d="M229.684 0.901367H232.909V20.5219H230.387L221.135 7.21005V20.5219H217.91V0.901367H220.432L229.684 14.2133V0.901367Z" fill="#171717"/>
					<path d="M240.052 17.4296H248.742V20.5137H236.836V0.901367H248.61V3.98543H240.061V9.08694H247.907V12.1379H240.061V17.4296H240.052Z" fill="#171717"/>
					<path d="M0 0V21.299H21.299V0H0ZM3.29904 18V3.29904H18V18H3.29904Z" fill="#FF003D"/>
					<path d="M12.8739 17.4707V12.8074L10.7159 10.6494L12.8822 8.47482V3.81152L6.05261 10.6494L12.8739 17.4707Z" fill="#FF003D"/>
				</svg>
			</div>

			<form class="login__entry" id="entry">
				<div class="login__title">????????</div>
				<div class="login__message">???? ????????????????????????????????? <a href="#registration" js-changeform>????????????????????????????????????</a></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="????????????">
				</div>
				<div class="inputfield">
					<button>??????????</button>
				</div>
				<a href="#recovery" class="login__link" js-changeform>???????????? ?????????????</a>
			</form>

			<form class="login__registration" id="registration">
				<div class="login__title">??????????????????????</div>
				<div class="login__message">?????? ????????????????????????????????? <a href="#entry" js-changeform>??????????</a></div>
				<div class="inputfield">
					<input type="text" placeholder="??????" name="name">
				</div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" pattern="[0-9]*">
				</div>
				<div class="inputfield">
					<input type="text" placeholder="????????????????">
					<div class="inputfield-hint">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999ZM12 18C11.736 17.9981 11.4834 17.892 11.2974 17.7046C11.1114 17.5173 11.007 17.264 11.007 17V11.01C11.0028 10.877 11.0253 10.7445 11.0733 10.6204C11.1213 10.4963 11.1937 10.3831 11.2863 10.2876C11.3789 10.192 11.4897 10.116 11.6122 10.0641C11.7348 10.0122 11.8665 9.9855 11.9995 9.9855C12.1326 9.9855 12.2643 10.0122 12.3868 10.0641C12.5093 10.116 12.6201 10.192 12.7127 10.2876C12.8053 10.3831 12.8777 10.4963 12.9257 10.6204C12.9737 10.7445 12.9962 10.877 12.992 11.01V17C12.9928 17.1309 12.9677 17.2606 12.9183 17.3818C12.8688 17.5029 12.7958 17.6131 12.7037 17.706C12.6115 17.7989 12.5019 17.8727 12.3812 17.9232C12.2604 17.9736 12.1309 17.9997 12 18ZM12 7.99999C11.8038 8.00019 11.6119 7.94219 11.4486 7.83331C11.2853 7.72442 11.1581 7.56955 11.0828 7.3883C11.0076 7.20705 10.9878 7.00758 11.0259 6.81509C11.0641 6.62259 11.1585 6.44574 11.2972 6.30691C11.4359 6.16808 11.6127 6.07348 11.8051 6.03512C11.9976 5.99676 12.1971 6.01637 12.3784 6.09142C12.5597 6.16648 12.7147 6.29359 12.8237 6.45675C12.9328 6.6199 12.991 6.81175 12.991 7.00799C12.9905 7.27075 12.8859 7.52263 12.7002 7.70852C12.5145 7.89441 12.2628 7.9992 12 7.99999ZM11.007 6.99999C11.0071 7.00166 11.0071 7.00333 11.007 7.005V6.99999ZM12.992 6.99999V7.01C12.9919 7.00834 12.9919 7.00666 12.992 7.005V6.99999Z" fill="#9F9F9F"/>
						</svg>
						<span class="inputfield-hint__block">
							<p>???????? ?? ?????? ???????? ????????????????, ?????????????? ?????? ?? ????????</p>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999Z" fill="black"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.73289 8.29645L8.31536 6.71399L12 10.3986L15.6847 6.71399L17.2671 8.29645L13.5825 11.9811L17.0189 15.4175L15.4364 17L12 13.5636L8.56357 17L6.98111 15.4175L10.4175 11.9811L6.73289 8.29645Z" fill="black"/>
							</svg>
						</span>
					</div>
				</div>
				<div class="inputfield">
					<button>????????????????????????????????????</button>
				</div>
				<div class="inputfield inputfield--policy">
					<input type="checkbox" id="policy" checked>
					<label for="policy">
						<span>??&nbsp;???????????????????? ??&nbsp;<a href="#">?????????????????? ????????????????????????????????????</a>,?????? ???????????????? ????&nbsp;?????????????????? ???????????????????????? ???????????? ??&nbsp;?????????????????? ????????????????</span>
					</label>
				</div>
			</form>

			<form class="login__recovery" id="recovery" data-action="change">
				<div class="login__title">???????????????????????????? ????????????</div>
				<div class="login__message">?????????????? ?????????? ?????? ??????????????, ??&nbsp;????&nbsp;???????????? ???????????? ?????? ?????????? ????&nbsp;??????????????????</div>
				<div class="error_str"></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-email" name="js-recovery-to-email">?????????????????? ???????????? ????&nbsp;??????????</button>
				</div>
				<div class="inputfield">
					<span class="login__hr">??????</span>
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-phone" name="js-recovery-to-phone">?????????????????? ???????????? ????&nbsp;??????????????</button>
				</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ?? ???????????? ??????????????</a>
			</form>

			<form class="login__newPassword" id="newpassword">
				<div class="login__title">???????????????????? ?????????? ????????????</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????? ????????????">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????????????? ????????????">
				</div>
				<div class="inputfield">
					<button>???????????????? ????????????</button>
				</div>
			</form>

			<form class="sesslogout" id="sesslogout" data-action="sesslogout">
				<div class="login__title">??????????</div>
				<div class="login__message">??????-???? ?????????????????????? ?????? ?????????? ??&nbsp;???????????? ??&nbsp;?????????? ????&nbsp;??????????????????, ?????????????? ?????? ??????????????????????. </div>
				<div class="login__message">?????? ?????????????? ??&nbsp;???????????????? ???????????????? ?????????? ???????????????????????? ???????????? ???????? ???????? ??&nbsp;???????? ???????????? ??????????????. ????&nbsp;?????????? ?????????????????? ???????? ?????????? ??&nbsp;???????????? ?????????????? ??&nbsp;????????????????. ???????????? ???????????? ?????????????????????????? ???????? ???????????? ?????? ???????????? ????????????????????????.</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ??&nbsp;???????????? ??????????????</a>
			</form>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success login__success--low" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M35.7497 3.25H30.2246C34.0655 5.79104 36.8817 9.61085 38.1733 14.0313C39.4649 18.4518 39.1485 23.1869 37.2801 27.3962C35.4116 31.6054 32.1121 35.0165 27.9673 37.0238C23.8224 39.0311 19.1005 39.5048 14.6396 38.3608C10.1786 37.2168 6.26729 34.5291 3.6 30.7749C0.932701 27.0206 -0.318139 22.4426 0.0697085 17.8537C0.457557 13.2648 2.45897 8.96168 5.71853 5.70835C8.97809 2.45503 13.285 0.461926 17.8747 0.0828667V3.25L18.0859 3.32151C14.2166 3.65977 10.5961 5.37195 7.87971 8.14823C5.16336 10.9245 3.5306 14.5814 3.27686 18.4572C3.02312 22.3331 4.16532 26.1717 6.49651 29.2784C8.82771 32.3851 12.194 34.5547 15.9863 35.3946C19.7785 36.2344 23.7459 35.689 27.1708 33.8571C30.5958 32.0251 33.2519 29.0277 34.6583 25.4071C36.0647 21.7866 36.1287 17.7822 34.8386 14.1187C33.5485 10.4551 30.9894 7.37434 27.6247 5.43399V11.375C27.6247 11.806 27.4536 12.2193 27.1488 12.524C26.8441 12.8288 26.4307 13 25.9997 13C25.5687 13 25.1553 12.8288 24.8506 12.524C24.5458 12.2193 24.3747 11.806 24.3747 11.375V1.625C24.3747 1.19402 24.5458 0.780697 24.8506 0.47595C25.1553 0.171204 25.5687 0 25.9997 0H35.7497C36.1807 0 36.5941 0.171204 36.8988 0.47595C37.2036 0.780697 37.3747 1.19402 37.3747 1.625C37.3747 2.05598 37.2036 2.4693 36.8988 2.77405C36.5941 3.0788 36.1807 3.25 35.7497 3.25Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ????&nbsp;???????????????????????????? ???????????? ?????????????????? ????&nbsp;???????? ??????????</div>
			</div>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5001 39C16.7064 39.0045 13.9444 38.4086 11.4011 37.2528C8.85771 36.097 6.59233 34.4082 4.75843 32.3008C2.92453 30.1934 1.56488 27.7165 0.771506 25.0378C-0.0218694 22.3592 -0.230424 19.5414 0.159949 16.7751C0.550323 14.0089 1.5306 11.3588 3.03425 9.00436C4.5379 6.64989 6.52981 4.64596 8.87528 3.12832C11.2208 1.61067 13.8651 0.614744 16.6289 0.207899C19.3928 -0.198946 22.2117 -0.00719279 24.895 0.770212L23.14 3.6757C19.8547 2.9206 16.416 3.20593 13.3 4.49212C10.184 5.77832 7.54502 8.0017 5.74886 10.8543C3.9527 13.7069 3.08824 17.0475 3.27506 20.4133C3.46188 23.7791 4.69084 27.0036 6.79166 29.6399C8.89248 32.2762 11.7612 34.1939 15.0004 35.1273C18.2395 36.0608 21.6888 35.9638 24.8704 34.8497C28.052 33.7357 30.8084 31.6598 32.7577 28.9096C34.7071 26.1593 35.7527 22.871 35.7501 19.5C35.7502 17.6418 35.4258 15.7979 34.7914 14.0513L36.8552 10.6258C38.378 13.5975 39.1116 16.9106 38.9858 20.2473C38.86 23.584 37.8788 26.8324 36.1365 29.681C34.3942 32.5295 31.9492 34.8825 29.036 36.5144C26.1228 38.1462 22.8392 39.0021 19.5001 39ZM20.9951 24.9746C20.9215 25.1916 20.7991 25.3889 20.6375 25.5515C20.4861 25.7043 20.3025 25.8214 20.1001 25.8942C19.8977 25.9671 19.6816 25.9937 19.4675 25.9723C19.1297 25.9959 18.7941 25.9032 18.5162 25.7096C18.2383 25.5159 18.035 25.2331 17.9401 24.908L11.7325 18.7037C11.4852 18.425 11.3535 18.0623 11.3646 17.6897C11.3756 17.3172 11.5286 16.9629 11.792 16.6993C12.0555 16.4357 12.4095 16.2825 12.7821 16.2712C13.1546 16.2599 13.5173 16.3912 13.7963 16.6384L19.0775 21.9212L31.0863 4.08845C31.1904 3.89803 31.3316 3.7304 31.5015 3.59541C31.6714 3.46043 31.8666 3.36084 32.0756 3.30253C32.2846 3.24422 32.5032 3.22838 32.7185 3.25591C32.9337 3.28344 33.1412 3.35382 33.3288 3.46286C33.7061 3.69567 33.9782 4.06608 34.0874 4.49579C34.1965 4.9255 34.1342 5.3808 33.9138 5.76547L20.9951 24.9746Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ?????????????? ??????????????</div>
				<a href="#entry" js-changeform>??????????</a>
			</div>

			<p class="login__tech">?????????????? ?????? ?????????? ????&nbsp;?????????????? ?????????????????????? ?????????????????? <a href="tel:88002005440">8&nbsp;800&nbsp;200 54&nbsp;40</a></p>

		</div><!-- login__form -->
	</section><!-- login -->

</div><!-- popup-franchise -->

<?php } ?>

 
	<div class="qwt" href="#popup-message" data-fancybox="" hidden>popup-message</div>
 

    <section class="popup-price fancy__class" id="popup-price" data-package="">
	<div class="popup-price__wrapper">
		<div class="popup-price__info">
			<div class="popup-price__package"><?= _('popup-price__package') ?></div>
			<div class="popup-price__name condensed" js-package></div>
			<div class="popup-price__text condensed" js-text></div>
			<div class="popup-price__price condensed" js-cost></div>
		</div>
		<div class="popup-price__form">
			<form class="form" action="<?= $action ?>&form=cloudRecurent<?= $link_price ? '&link=' . urlencode($link_price) : '' ?>">
				<div class="form__wrapper">
					<div class="form__title"><?= _('popup-price-form__title') ?></div>
					<div class="form__input">
						<input type="text" class="input" name="name" placeholder="<?= _('form_item_name') ?>" tabindex="1" value="<?= $get_name ?>">
					</div>
					<div class="form__input">
						<input type="tel" class="input" name="phone" placeholder="<?= _('form_item_phone') ?>" tabindex="2" value="<?= $get_phone ?>">
					</div>
					<div class="form__input">
						<input type="email" class="input" name="email" placeholder="<?= _('form_item_email') ?>" tabindex="3" value="<?= $get_email ?>">
					</div>
					<div class="form__input">
						<button class="form__submit form__button button condensed" type="submit">
							<span class="popup-price__button-buy"><?= _('popup-price__button-buy') ?></span>
							<span class="popup-price__button-get"><?= _('popup-price__button-get') ?></span>
						</button>
					</div>
					<div class="form__privacy">
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">???????????????? ??&nbsp;<a href="#privacy" class="fancybox privacy">?????????????????? ????????????????????????????????????</a> ??&nbsp;????&nbsp;?????????????????? ???????????????????????? ????????????</div>
						</label>
						<?php */ ?>
						<label class="checkcontainer checkcontainer_is-recurrent">
							<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-1') ?></div>
						</label>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree2" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-2') ?></div>
						</label>
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree3" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">??????????????????, ???? ???????????????????????? ?? ??????????????????&nbsp;<a href="files/reccuring_offerta.pdf" class="footer__link-offer" terget="_blank"> ?????????????????? ????????????</a></div>
						</label>
						<?php */ ?>
					</div>
					<input type="hidden" name="comment" value="<?= $external_url ?>">
					<input type="hidden" name="product_id" value="">
					<input type="hidden" name="quote_id" value="">
					<input type="hidden" name="partner" value="<?= $partner ?>">
				</div>
			</form>

		</div>
	</div>

</section>


<div class="stripe" id="stripeForm">
	<form id="payment-form" class="nolander">
		<fieldset>
			<legend class="card-only">Pay with card</legend>
			<legend class="payment-request-available">Or enter card details</legend>
			<div class="container">
				<div id="payment-elements"></div>
				<button type="submit">Buy ticket</button>
			</div>
			<div class="card-errors" id="card-errors"></div>
		</fieldset>
	</form>
</div>


	<?php break;
 	case 'developmentforum': ?>
    


<div class="popup-registration popup" id="popup-registration">
	<div class="popup__title condensed"><?= $version_form_title ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-registration">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-registration -->


<div class="popup-partners popup" id="popup-partners">
	<div class="popup__title condensed"><?= _('partners__button-partner') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-partner">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-partners -->


<div class="popup-accreditation" id="popup-accreditation">
	<div class="popup-accreditation__header popup-accreditation__inner condensed"><?= _('popup-accreditation__header') ?></div>
	<div class="popup-accreditation__body popup-accreditation__inner">
		<?php if ( _('popup-accreditation__subtitle-1') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-1') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__subtitle-2') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-2') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-2') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-2') ?></div>
			<br>
		<?php } ?>
		<div class="popup-accreditation__text"><?= _('popup-accreditation__text-3') ?></div>
		<div class="popup-accreditation__rules"><a class="popup-accreditation__rules-link" href="files/media_draft_citation_rules_<?= $lang ?>.pdf" target="_blank" data-fancybox><?= _('popup-accreditation__rules') ?></a></div>
	</div><!-- popup-accreditation__inner -->
</div><!-- popup-accreditation -->


<div class="popup-franchise popup" id="popup-franchise">
	<div class="popup__title condensed"><?= _('popup-franchise__title') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=3644&amp;form=franchising">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-franchise -->


<?php if ( $external_url == 'synergyonline' ) { ?>
	
<div class="popup-synergyonline" id="popup-synergyonline">

	<section class="login" id="login">
		<div class="login__form">
			<div class="login__logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="249" height="22" viewBox="0 0 249 22" fill="none">
					<path d="M34.7435 20.9352C32.6681 20.9352 30.9483 20.497 29.5841 19.6205C28.2198 18.7441 27.269 17.5535 26.7233 16.0652L31.0145 13.5682C31.7421 15.3045 33.0319 16.1727 34.884 16.1727C36.4137 16.1727 37.1826 15.7345 37.1826 14.858C37.1826 14.2793 36.7444 13.808 35.868 13.4607C35.4959 13.3119 34.6691 13.0555 33.404 12.7C31.6098 12.1791 30.1877 11.4432 29.1459 10.5007C28.0958 9.55807 27.5749 8.24342 27.5749 6.56496C27.5749 4.75422 28.2281 3.28246 29.5262 2.16625C30.8243 1.04177 32.4449 0.487793 34.3879 0.487793C36.0333 0.487793 37.4885 0.868133 38.7619 1.63708C40.0352 2.40603 41.0026 3.51398 41.6805 4.96919L37.4803 7.43313C36.8602 5.97792 35.8432 5.25031 34.421 5.25031C33.8257 5.25031 33.3709 5.37433 33.065 5.61411C32.7591 5.85389 32.602 6.16809 32.602 6.54016C32.602 6.97011 32.8335 7.33391 33.2883 7.63157C33.743 7.92923 34.636 8.27649 35.9672 8.6651C36.918 8.94622 37.687 9.21081 38.2658 9.45059C38.8445 9.69037 39.4812 10.0459 40.1675 10.5007C40.8537 10.9554 41.3746 11.5507 41.7054 12.2701C42.0444 12.9894 42.2097 13.8328 42.2097 14.8084C42.2097 16.7349 41.5235 18.2397 40.1675 19.3229C38.7867 20.3978 36.9842 20.9352 34.7435 20.9352Z" fill="#171717"/>
					<path d="M59.8789 0.901367L53.2643 12.9813V20.5219H48.2455V13.0392L41.6309 0.901367H47.2615L50.7342 8.1609L54.24 0.901367H59.8789Z" fill="#171717"/>
					<path d="M72.2397 0.901367H77.2254V20.5219H73.3559L66.4353 10.6579V20.5219H61.4165V0.901367H65.3191L72.2397 10.7654V0.901367Z" fill="#171717"/>
					<path d="M85.3529 15.809H92.9514V20.5137H80.3423V0.901367H92.8108V5.5812H85.3529V8.30146H92.108V12.9234H85.3529V15.809Z" fill="#171717"/>
					<path d="M105.561 20.5137L102.138 14.1802H100.343V20.5137H95.3245V0.901367H103.171C105.172 0.901367 106.85 1.53802 108.198 2.8196C109.554 4.10118 110.232 5.72176 110.232 7.68134C110.232 8.85543 109.934 9.93858 109.339 10.9142C108.744 11.8982 107.925 12.6754 106.9 13.2541L110.935 20.5137H105.561ZM100.352 5.52332V9.92204H103.13C103.75 9.93858 104.254 9.74841 104.643 9.33499C105.031 8.92158 105.23 8.39241 105.23 7.73922C105.23 7.08603 105.031 6.55686 104.643 6.14344C104.254 5.73003 103.75 5.52332 103.13 5.52332H100.352Z" fill="#171717"/>
					<path d="M131.904 9.27695V11.2696C131.904 14.147 131.002 16.4786 129.2 18.2646C127.397 20.0505 125.057 20.9435 122.18 20.9435C119.113 20.9435 116.599 19.9595 114.631 18C112.663 16.0404 111.671 13.6178 111.671 10.7404C111.671 7.86308 112.655 5.43221 114.615 3.4561C116.574 1.47172 119.005 0.487793 121.899 0.487793C123.726 0.487793 125.405 0.901206 126.926 1.71976C128.447 2.53832 129.638 3.638 130.498 5.00226L126.24 7.4414C125.851 6.82128 125.272 6.33345 124.52 5.95311C123.759 5.58104 122.908 5.39087 121.957 5.39087C120.402 5.39087 119.137 5.89524 118.145 6.90396C117.153 7.91269 116.657 9.20254 116.657 10.7735C116.657 12.2866 117.145 13.5682 118.129 14.61C119.113 15.66 120.485 16.1809 122.263 16.1809C124.545 16.1809 126.05 15.3211 126.777 13.6013H122.015V9.28522H131.904V9.27695Z" fill="#171717"/>
					<path d="M149.25 0.901367L142.636 12.9813V20.5219H137.617V13.0392L131.002 0.901367H136.633L140.106 8.1609L143.611 0.901367H149.25Z" fill="#171717"/>
					<path d="M149.954 20.9102C149.127 20.9102 148.432 20.6291 147.862 20.0586C147.291 19.4881 147.01 18.8018 147.01 17.9998C147.01 17.1978 147.299 16.5115 147.878 15.941C148.457 15.3705 149.151 15.0894 149.954 15.0894C150.756 15.0894 151.442 15.3705 152.012 15.941C152.583 16.5115 152.864 17.1978 152.864 17.9998C152.864 18.8018 152.583 19.4881 152.012 20.0586C151.442 20.6291 150.756 20.9102 149.954 20.9102Z" fill="#FF003D"/>
					<path d="M172.36 17.9257C170.392 19.8936 167.986 20.8858 165.142 20.8858C162.306 20.8858 159.9 19.9018 157.923 17.9257C155.956 15.9579 154.963 13.5518 154.963 10.7075C154.963 7.86324 155.947 5.46545 157.923 3.48933C159.891 1.52149 162.297 0.529297 165.142 0.529297C167.986 0.529297 170.384 1.51322 172.36 3.48933C174.328 5.45718 175.32 7.86324 175.32 10.7075C175.32 13.5518 174.328 15.9496 172.36 17.9257ZM160.197 15.7346C161.537 17.0741 163.182 17.7355 165.142 17.7355C167.101 17.7355 168.755 17.0658 170.086 15.7346C171.425 14.3952 172.087 12.725 172.087 10.7075C172.087 8.69007 171.417 7.01161 170.086 5.68042C168.747 4.34096 167.101 3.6795 165.142 3.6795C163.182 3.6795 161.528 4.34923 160.197 5.68042C158.858 7.01988 158.196 8.69007 158.196 10.7075C158.188 12.725 158.858 14.4034 160.197 15.7346Z" fill="#171717"/>
					<path d="M190.029 0.901367H193.254V20.5219H190.732L181.48 7.21005V20.5219H178.255V0.901367H180.777L190.029 14.2133V0.901367Z" fill="#171717"/>
					<path d="M200.398 17.4296H208.385V20.5137H197.173V0.901367H200.398V17.4296Z" fill="#171717"/>
					<path d="M210.766 0.901367H213.99V20.5219H210.766V0.901367Z" fill="#171717"/>
					<path d="M229.684 0.901367H232.909V20.5219H230.387L221.135 7.21005V20.5219H217.91V0.901367H220.432L229.684 14.2133V0.901367Z" fill="#171717"/>
					<path d="M240.052 17.4296H248.742V20.5137H236.836V0.901367H248.61V3.98543H240.061V9.08694H247.907V12.1379H240.061V17.4296H240.052Z" fill="#171717"/>
					<path d="M0 0V21.299H21.299V0H0ZM3.29904 18V3.29904H18V18H3.29904Z" fill="#FF003D"/>
					<path d="M12.8739 17.4707V12.8074L10.7159 10.6494L12.8822 8.47482V3.81152L6.05261 10.6494L12.8739 17.4707Z" fill="#FF003D"/>
				</svg>
			</div>

			<form class="login__entry" id="entry">
				<div class="login__title">????????</div>
				<div class="login__message">???? ????????????????????????????????? <a href="#registration" js-changeform>????????????????????????????????????</a></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="????????????">
				</div>
				<div class="inputfield">
					<button>??????????</button>
				</div>
				<a href="#recovery" class="login__link" js-changeform>???????????? ?????????????</a>
			</form>

			<form class="login__registration" id="registration">
				<div class="login__title">??????????????????????</div>
				<div class="login__message">?????? ????????????????????????????????? <a href="#entry" js-changeform>??????????</a></div>
				<div class="inputfield">
					<input type="text" placeholder="??????" name="name">
				</div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" pattern="[0-9]*">
				</div>
				<div class="inputfield">
					<input type="text" placeholder="????????????????">
					<div class="inputfield-hint">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999ZM12 18C11.736 17.9981 11.4834 17.892 11.2974 17.7046C11.1114 17.5173 11.007 17.264 11.007 17V11.01C11.0028 10.877 11.0253 10.7445 11.0733 10.6204C11.1213 10.4963 11.1937 10.3831 11.2863 10.2876C11.3789 10.192 11.4897 10.116 11.6122 10.0641C11.7348 10.0122 11.8665 9.9855 11.9995 9.9855C12.1326 9.9855 12.2643 10.0122 12.3868 10.0641C12.5093 10.116 12.6201 10.192 12.7127 10.2876C12.8053 10.3831 12.8777 10.4963 12.9257 10.6204C12.9737 10.7445 12.9962 10.877 12.992 11.01V17C12.9928 17.1309 12.9677 17.2606 12.9183 17.3818C12.8688 17.5029 12.7958 17.6131 12.7037 17.706C12.6115 17.7989 12.5019 17.8727 12.3812 17.9232C12.2604 17.9736 12.1309 17.9997 12 18ZM12 7.99999C11.8038 8.00019 11.6119 7.94219 11.4486 7.83331C11.2853 7.72442 11.1581 7.56955 11.0828 7.3883C11.0076 7.20705 10.9878 7.00758 11.0259 6.81509C11.0641 6.62259 11.1585 6.44574 11.2972 6.30691C11.4359 6.16808 11.6127 6.07348 11.8051 6.03512C11.9976 5.99676 12.1971 6.01637 12.3784 6.09142C12.5597 6.16648 12.7147 6.29359 12.8237 6.45675C12.9328 6.6199 12.991 6.81175 12.991 7.00799C12.9905 7.27075 12.8859 7.52263 12.7002 7.70852C12.5145 7.89441 12.2628 7.9992 12 7.99999ZM11.007 6.99999C11.0071 7.00166 11.0071 7.00333 11.007 7.005V6.99999ZM12.992 6.99999V7.01C12.9919 7.00834 12.9919 7.00666 12.992 7.005V6.99999Z" fill="#9F9F9F"/>
						</svg>
						<span class="inputfield-hint__block">
							<p>???????? ?? ?????? ???????? ????????????????, ?????????????? ?????? ?? ????????</p>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999Z" fill="black"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.73289 8.29645L8.31536 6.71399L12 10.3986L15.6847 6.71399L17.2671 8.29645L13.5825 11.9811L17.0189 15.4175L15.4364 17L12 13.5636L8.56357 17L6.98111 15.4175L10.4175 11.9811L6.73289 8.29645Z" fill="black"/>
							</svg>
						</span>
					</div>
				</div>
				<div class="inputfield">
					<button>????????????????????????????????????</button>
				</div>
				<div class="inputfield inputfield--policy">
					<input type="checkbox" id="policy" checked>
					<label for="policy">
						<span>??&nbsp;???????????????????? ??&nbsp;<a href="#">?????????????????? ????????????????????????????????????</a>,?????? ???????????????? ????&nbsp;?????????????????? ???????????????????????? ???????????? ??&nbsp;?????????????????? ????????????????</span>
					</label>
				</div>
			</form>

			<form class="login__recovery" id="recovery" data-action="change">
				<div class="login__title">???????????????????????????? ????????????</div>
				<div class="login__message">?????????????? ?????????? ?????? ??????????????, ??&nbsp;????&nbsp;???????????? ???????????? ?????? ?????????? ????&nbsp;??????????????????</div>
				<div class="error_str"></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-email" name="js-recovery-to-email">?????????????????? ???????????? ????&nbsp;??????????</button>
				</div>
				<div class="inputfield">
					<span class="login__hr">??????</span>
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-phone" name="js-recovery-to-phone">?????????????????? ???????????? ????&nbsp;??????????????</button>
				</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ?? ???????????? ??????????????</a>
			</form>

			<form class="login__newPassword" id="newpassword">
				<div class="login__title">???????????????????? ?????????? ????????????</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????? ????????????">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????????????? ????????????">
				</div>
				<div class="inputfield">
					<button>???????????????? ????????????</button>
				</div>
			</form>

			<form class="sesslogout" id="sesslogout" data-action="sesslogout">
				<div class="login__title">??????????</div>
				<div class="login__message">??????-???? ?????????????????????? ?????? ?????????? ??&nbsp;???????????? ??&nbsp;?????????? ????&nbsp;??????????????????, ?????????????? ?????? ??????????????????????. </div>
				<div class="login__message">?????? ?????????????? ??&nbsp;???????????????? ???????????????? ?????????? ???????????????????????? ???????????? ???????? ???????? ??&nbsp;???????? ???????????? ??????????????. ????&nbsp;?????????? ?????????????????? ???????? ?????????? ??&nbsp;???????????? ?????????????? ??&nbsp;????????????????. ???????????? ???????????? ?????????????????????????? ???????? ???????????? ?????? ???????????? ????????????????????????.</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ??&nbsp;???????????? ??????????????</a>
			</form>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success login__success--low" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M35.7497 3.25H30.2246C34.0655 5.79104 36.8817 9.61085 38.1733 14.0313C39.4649 18.4518 39.1485 23.1869 37.2801 27.3962C35.4116 31.6054 32.1121 35.0165 27.9673 37.0238C23.8224 39.0311 19.1005 39.5048 14.6396 38.3608C10.1786 37.2168 6.26729 34.5291 3.6 30.7749C0.932701 27.0206 -0.318139 22.4426 0.0697085 17.8537C0.457557 13.2648 2.45897 8.96168 5.71853 5.70835C8.97809 2.45503 13.285 0.461926 17.8747 0.0828667V3.25L18.0859 3.32151C14.2166 3.65977 10.5961 5.37195 7.87971 8.14823C5.16336 10.9245 3.5306 14.5814 3.27686 18.4572C3.02312 22.3331 4.16532 26.1717 6.49651 29.2784C8.82771 32.3851 12.194 34.5547 15.9863 35.3946C19.7785 36.2344 23.7459 35.689 27.1708 33.8571C30.5958 32.0251 33.2519 29.0277 34.6583 25.4071C36.0647 21.7866 36.1287 17.7822 34.8386 14.1187C33.5485 10.4551 30.9894 7.37434 27.6247 5.43399V11.375C27.6247 11.806 27.4536 12.2193 27.1488 12.524C26.8441 12.8288 26.4307 13 25.9997 13C25.5687 13 25.1553 12.8288 24.8506 12.524C24.5458 12.2193 24.3747 11.806 24.3747 11.375V1.625C24.3747 1.19402 24.5458 0.780697 24.8506 0.47595C25.1553 0.171204 25.5687 0 25.9997 0H35.7497C36.1807 0 36.5941 0.171204 36.8988 0.47595C37.2036 0.780697 37.3747 1.19402 37.3747 1.625C37.3747 2.05598 37.2036 2.4693 36.8988 2.77405C36.5941 3.0788 36.1807 3.25 35.7497 3.25Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ????&nbsp;???????????????????????????? ???????????? ?????????????????? ????&nbsp;???????? ??????????</div>
			</div>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5001 39C16.7064 39.0045 13.9444 38.4086 11.4011 37.2528C8.85771 36.097 6.59233 34.4082 4.75843 32.3008C2.92453 30.1934 1.56488 27.7165 0.771506 25.0378C-0.0218694 22.3592 -0.230424 19.5414 0.159949 16.7751C0.550323 14.0089 1.5306 11.3588 3.03425 9.00436C4.5379 6.64989 6.52981 4.64596 8.87528 3.12832C11.2208 1.61067 13.8651 0.614744 16.6289 0.207899C19.3928 -0.198946 22.2117 -0.00719279 24.895 0.770212L23.14 3.6757C19.8547 2.9206 16.416 3.20593 13.3 4.49212C10.184 5.77832 7.54502 8.0017 5.74886 10.8543C3.9527 13.7069 3.08824 17.0475 3.27506 20.4133C3.46188 23.7791 4.69084 27.0036 6.79166 29.6399C8.89248 32.2762 11.7612 34.1939 15.0004 35.1273C18.2395 36.0608 21.6888 35.9638 24.8704 34.8497C28.052 33.7357 30.8084 31.6598 32.7577 28.9096C34.7071 26.1593 35.7527 22.871 35.7501 19.5C35.7502 17.6418 35.4258 15.7979 34.7914 14.0513L36.8552 10.6258C38.378 13.5975 39.1116 16.9106 38.9858 20.2473C38.86 23.584 37.8788 26.8324 36.1365 29.681C34.3942 32.5295 31.9492 34.8825 29.036 36.5144C26.1228 38.1462 22.8392 39.0021 19.5001 39ZM20.9951 24.9746C20.9215 25.1916 20.7991 25.3889 20.6375 25.5515C20.4861 25.7043 20.3025 25.8214 20.1001 25.8942C19.8977 25.9671 19.6816 25.9937 19.4675 25.9723C19.1297 25.9959 18.7941 25.9032 18.5162 25.7096C18.2383 25.5159 18.035 25.2331 17.9401 24.908L11.7325 18.7037C11.4852 18.425 11.3535 18.0623 11.3646 17.6897C11.3756 17.3172 11.5286 16.9629 11.792 16.6993C12.0555 16.4357 12.4095 16.2825 12.7821 16.2712C13.1546 16.2599 13.5173 16.3912 13.7963 16.6384L19.0775 21.9212L31.0863 4.08845C31.1904 3.89803 31.3316 3.7304 31.5015 3.59541C31.6714 3.46043 31.8666 3.36084 32.0756 3.30253C32.2846 3.24422 32.5032 3.22838 32.7185 3.25591C32.9337 3.28344 33.1412 3.35382 33.3288 3.46286C33.7061 3.69567 33.9782 4.06608 34.0874 4.49579C34.1965 4.9255 34.1342 5.3808 33.9138 5.76547L20.9951 24.9746Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ?????????????? ??????????????</div>
				<a href="#entry" js-changeform>??????????</a>
			</div>

			<p class="login__tech">?????????????? ?????? ?????????? ????&nbsp;?????????????? ?????????????????????? ?????????????????? <a href="tel:88002005440">8&nbsp;800&nbsp;200 54&nbsp;40</a></p>

		</div><!-- login__form -->
	</section><!-- login -->

</div><!-- popup-franchise -->

<?php } ?>

 
	<div class="qwt" href="#popup-message" data-fancybox="" hidden>popup-message</div>
 

    <section class="popup-price fancy__class" id="popup-price" data-package="">
	<div class="popup-price__wrapper">
		<div class="popup-price__info">
			<div class="popup-price__package"><?= _('popup-price__package') ?></div>
			<div class="popup-price__name condensed" js-package></div>
			<div class="popup-price__text condensed" js-text></div>
			<div class="popup-price__price condensed" js-cost></div>
		</div>
		<div class="popup-price__form">
			<form class="form" action="<?= $action ?>&amp;form=<?= $version_price_form ?>&amp;external_url=<?= $external_url ?>">
				<div class="form__wrapper">
					<div class="form__title"><?= _('popup-price-form__title') ?></div>
					<div class="form__input">
						<input type="text" class="input" name="name" placeholder="<?= _('form_item_name') ?>" tabindex="1" value="<?= $get_name ?>">
					</div>
					<div class="form__input">
						<input type="tel" class="input" name="phone" placeholder="<?= _('form_item_phone') ?>" tabindex="2" value="<?= $get_phone ?>">
					</div>
					<div class="form__input form__input_tab">
						<input type="number" class="input" name="tickets_count" "<?= _('form_item_ticket_count') ?>" tabindex="4" min="1" value="1">
					</div>
					<div class="form__input">
						<input type="email" class="input" name="email" placeholder="<?= _('form_item_email') ?>" tabindex="3" value="<?= $get_email ?>">
					</div>
					<div class="form__input">
						<button class="form__submit form__button button condensed" type="submit">
							<span class="popup-price__button-buy"><?= _('popup-price__button-buy') ?></span>
							<span class="popup-price__button-get"><?= _('popup-price__button-get') ?></span>
						</button>
					</div>
					<div class="form__privacy">
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">???????????????? ??&nbsp;<a href="#privacy" class="fancybox privacy">?????????????????? ????????????????????????????????????</a> ??&nbsp;????&nbsp;?????????????????? ???????????????????????? ????????????</div>
						</label>
						<?php */ ?>
						<label class="checkcontainer checkcontainer_is-recurrent">
							<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-1') ?></div>
						</label>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree2" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-2') ?></div>
						</label>
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree3" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">??????????????????, ???? ???????????????????????? ?? ??????????????????&nbsp;<a href="files/reccuring_offerta.pdf" class="footer__link-offer" terget="_blank"> ?????????????????? ????????????</a></div>
						</label>
						<?php */ ?>
					</div>
					<input type="hidden" name="comment" value="<?= $external_url ?>">
					<input type="hidden" name="product_id" value="">
					<input type="hidden" name="quote_id" value="">
					<input type="hidden" name="partner" value="<?= $partner ?>">
					<input type="hidden" name="unit" value="<?= $landUnit ?>">
					<input type="hidden" name="type" value="<?= $type ?>">
					<input type="hidden" name="land" value="<?= $land ?>">
					<input type="hidden" name="event_id" value="<?= $event_id ?>">
					<input type="hidden" name="form" value="<?= $version_price_form ?>">
				</div>
			</form>

		</div>
	</div>

</section>


<div class="stripe" id="stripeForm">
	<form id="payment-form" class="nolander">
		<fieldset>
			<legend class="card-only">Pay with card</legend>
			<legend class="payment-request-available">Or enter card details</legend>
			<div class="container">
				<div id="payment-elements"></div>
				<button type="submit">Buy ticket</button>
			</div>
			<div class="card-errors" id="card-errors"></div>
		</fieldset>
	</form>
</div>


	<?php break;
	default: ?>
	


<div class="popup-registration popup" id="popup-registration">
	<div class="popup__title condensed"><?= $version_form_title ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-registration">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-registration -->


<div class="popup-partners popup" id="popup-partners">
	<div class="popup__title condensed"><?= _('partners__button-partner') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=popup-partner">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-partners -->


<div class="popup-accreditation" id="popup-accreditation">
	<div class="popup-accreditation__header popup-accreditation__inner condensed"><?= _('popup-accreditation__header') ?></div>
	<div class="popup-accreditation__body popup-accreditation__inner">
		<?php if ( _('popup-accreditation__subtitle-1') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-1') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-1') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__subtitle-2') ) { ?>
			<div class="popup-accreditation__subtitle condensed"><?= _('popup-accreditation__subtitle-2') ?></div>
		<?php } ?>
		<?php if ( _('popup-accreditation__text-2') ) { ?>
			<div class="popup-accreditation__text"><?= _('popup-accreditation__text-2') ?></div>
			<br>
		<?php } ?>
		<div class="popup-accreditation__text"><?= _('popup-accreditation__text-3') ?></div>
		<div class="popup-accreditation__rules"><a class="popup-accreditation__rules-link" href="files/media_draft_citation_rules_<?= $lang ?>.pdf" target="_blank" data-fancybox><?= _('popup-accreditation__rules') ?></a></div>
	</div><!-- popup-accreditation__inner -->
</div><!-- popup-accreditation -->


<div class="popup-franchise popup" id="popup-franchise">
	<div class="popup__title condensed"><?= _('popup-franchise__title') ?></div>
	
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=3644&amp;form=franchising">

	

	

	<div class="form__items">
		
		
<div class="form__item form__item_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="<?= _("form_item_name") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="<?= _("form_item_phone") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		
		
<div class="form__item form__item_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="<?= _("form_item_email") ?>" value="" class="form__input"  required >
		

	
</div><!-- form__item -->

		

		

		<div class="form__item form__item_button">
			<button class="form__button button button_red condensed" type="submit"><?= $version_form_button ?></button>
			
		</div><!-- form__item -->

		<div class="form__footer">
			
			<label>
				<div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree2" checked value="on">
					<div class="form__footer-checkbox-icon lazy"></div>
				</div>
				<div class="form__footer-text"><?= _("form__footer-text-1") ?></div>
			</label>
			
		</div>

		
	</div><!-- form__items -->
</form><!-- form -->

</div><!-- popup-franchise -->


<?php if ( $external_url == 'synergyonline' ) { ?>
	
<div class="popup-synergyonline" id="popup-synergyonline">

	<section class="login" id="login">
		<div class="login__form">
			<div class="login__logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="249" height="22" viewBox="0 0 249 22" fill="none">
					<path d="M34.7435 20.9352C32.6681 20.9352 30.9483 20.497 29.5841 19.6205C28.2198 18.7441 27.269 17.5535 26.7233 16.0652L31.0145 13.5682C31.7421 15.3045 33.0319 16.1727 34.884 16.1727C36.4137 16.1727 37.1826 15.7345 37.1826 14.858C37.1826 14.2793 36.7444 13.808 35.868 13.4607C35.4959 13.3119 34.6691 13.0555 33.404 12.7C31.6098 12.1791 30.1877 11.4432 29.1459 10.5007C28.0958 9.55807 27.5749 8.24342 27.5749 6.56496C27.5749 4.75422 28.2281 3.28246 29.5262 2.16625C30.8243 1.04177 32.4449 0.487793 34.3879 0.487793C36.0333 0.487793 37.4885 0.868133 38.7619 1.63708C40.0352 2.40603 41.0026 3.51398 41.6805 4.96919L37.4803 7.43313C36.8602 5.97792 35.8432 5.25031 34.421 5.25031C33.8257 5.25031 33.3709 5.37433 33.065 5.61411C32.7591 5.85389 32.602 6.16809 32.602 6.54016C32.602 6.97011 32.8335 7.33391 33.2883 7.63157C33.743 7.92923 34.636 8.27649 35.9672 8.6651C36.918 8.94622 37.687 9.21081 38.2658 9.45059C38.8445 9.69037 39.4812 10.0459 40.1675 10.5007C40.8537 10.9554 41.3746 11.5507 41.7054 12.2701C42.0444 12.9894 42.2097 13.8328 42.2097 14.8084C42.2097 16.7349 41.5235 18.2397 40.1675 19.3229C38.7867 20.3978 36.9842 20.9352 34.7435 20.9352Z" fill="#171717"/>
					<path d="M59.8789 0.901367L53.2643 12.9813V20.5219H48.2455V13.0392L41.6309 0.901367H47.2615L50.7342 8.1609L54.24 0.901367H59.8789Z" fill="#171717"/>
					<path d="M72.2397 0.901367H77.2254V20.5219H73.3559L66.4353 10.6579V20.5219H61.4165V0.901367H65.3191L72.2397 10.7654V0.901367Z" fill="#171717"/>
					<path d="M85.3529 15.809H92.9514V20.5137H80.3423V0.901367H92.8108V5.5812H85.3529V8.30146H92.108V12.9234H85.3529V15.809Z" fill="#171717"/>
					<path d="M105.561 20.5137L102.138 14.1802H100.343V20.5137H95.3245V0.901367H103.171C105.172 0.901367 106.85 1.53802 108.198 2.8196C109.554 4.10118 110.232 5.72176 110.232 7.68134C110.232 8.85543 109.934 9.93858 109.339 10.9142C108.744 11.8982 107.925 12.6754 106.9 13.2541L110.935 20.5137H105.561ZM100.352 5.52332V9.92204H103.13C103.75 9.93858 104.254 9.74841 104.643 9.33499C105.031 8.92158 105.23 8.39241 105.23 7.73922C105.23 7.08603 105.031 6.55686 104.643 6.14344C104.254 5.73003 103.75 5.52332 103.13 5.52332H100.352Z" fill="#171717"/>
					<path d="M131.904 9.27695V11.2696C131.904 14.147 131.002 16.4786 129.2 18.2646C127.397 20.0505 125.057 20.9435 122.18 20.9435C119.113 20.9435 116.599 19.9595 114.631 18C112.663 16.0404 111.671 13.6178 111.671 10.7404C111.671 7.86308 112.655 5.43221 114.615 3.4561C116.574 1.47172 119.005 0.487793 121.899 0.487793C123.726 0.487793 125.405 0.901206 126.926 1.71976C128.447 2.53832 129.638 3.638 130.498 5.00226L126.24 7.4414C125.851 6.82128 125.272 6.33345 124.52 5.95311C123.759 5.58104 122.908 5.39087 121.957 5.39087C120.402 5.39087 119.137 5.89524 118.145 6.90396C117.153 7.91269 116.657 9.20254 116.657 10.7735C116.657 12.2866 117.145 13.5682 118.129 14.61C119.113 15.66 120.485 16.1809 122.263 16.1809C124.545 16.1809 126.05 15.3211 126.777 13.6013H122.015V9.28522H131.904V9.27695Z" fill="#171717"/>
					<path d="M149.25 0.901367L142.636 12.9813V20.5219H137.617V13.0392L131.002 0.901367H136.633L140.106 8.1609L143.611 0.901367H149.25Z" fill="#171717"/>
					<path d="M149.954 20.9102C149.127 20.9102 148.432 20.6291 147.862 20.0586C147.291 19.4881 147.01 18.8018 147.01 17.9998C147.01 17.1978 147.299 16.5115 147.878 15.941C148.457 15.3705 149.151 15.0894 149.954 15.0894C150.756 15.0894 151.442 15.3705 152.012 15.941C152.583 16.5115 152.864 17.1978 152.864 17.9998C152.864 18.8018 152.583 19.4881 152.012 20.0586C151.442 20.6291 150.756 20.9102 149.954 20.9102Z" fill="#FF003D"/>
					<path d="M172.36 17.9257C170.392 19.8936 167.986 20.8858 165.142 20.8858C162.306 20.8858 159.9 19.9018 157.923 17.9257C155.956 15.9579 154.963 13.5518 154.963 10.7075C154.963 7.86324 155.947 5.46545 157.923 3.48933C159.891 1.52149 162.297 0.529297 165.142 0.529297C167.986 0.529297 170.384 1.51322 172.36 3.48933C174.328 5.45718 175.32 7.86324 175.32 10.7075C175.32 13.5518 174.328 15.9496 172.36 17.9257ZM160.197 15.7346C161.537 17.0741 163.182 17.7355 165.142 17.7355C167.101 17.7355 168.755 17.0658 170.086 15.7346C171.425 14.3952 172.087 12.725 172.087 10.7075C172.087 8.69007 171.417 7.01161 170.086 5.68042C168.747 4.34096 167.101 3.6795 165.142 3.6795C163.182 3.6795 161.528 4.34923 160.197 5.68042C158.858 7.01988 158.196 8.69007 158.196 10.7075C158.188 12.725 158.858 14.4034 160.197 15.7346Z" fill="#171717"/>
					<path d="M190.029 0.901367H193.254V20.5219H190.732L181.48 7.21005V20.5219H178.255V0.901367H180.777L190.029 14.2133V0.901367Z" fill="#171717"/>
					<path d="M200.398 17.4296H208.385V20.5137H197.173V0.901367H200.398V17.4296Z" fill="#171717"/>
					<path d="M210.766 0.901367H213.99V20.5219H210.766V0.901367Z" fill="#171717"/>
					<path d="M229.684 0.901367H232.909V20.5219H230.387L221.135 7.21005V20.5219H217.91V0.901367H220.432L229.684 14.2133V0.901367Z" fill="#171717"/>
					<path d="M240.052 17.4296H248.742V20.5137H236.836V0.901367H248.61V3.98543H240.061V9.08694H247.907V12.1379H240.061V17.4296H240.052Z" fill="#171717"/>
					<path d="M0 0V21.299H21.299V0H0ZM3.29904 18V3.29904H18V18H3.29904Z" fill="#FF003D"/>
					<path d="M12.8739 17.4707V12.8074L10.7159 10.6494L12.8822 8.47482V3.81152L6.05261 10.6494L12.8739 17.4707Z" fill="#FF003D"/>
				</svg>
			</div>

			<form class="login__entry" id="entry">
				<div class="login__title">????????</div>
				<div class="login__message">???? ????????????????????????????????? <a href="#registration" js-changeform>????????????????????????????????????</a></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="????????????">
				</div>
				<div class="inputfield">
					<button>??????????</button>
				</div>
				<a href="#recovery" class="login__link" js-changeform>???????????? ?????????????</a>
			</form>

			<form class="login__registration" id="registration">
				<div class="login__title">??????????????????????</div>
				<div class="login__message">?????? ????????????????????????????????? <a href="#entry" js-changeform>??????????</a></div>
				<div class="inputfield">
					<input type="text" placeholder="??????" name="name">
				</div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email">
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" pattern="[0-9]*">
				</div>
				<div class="inputfield">
					<input type="text" placeholder="????????????????">
					<div class="inputfield-hint">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999ZM12 18C11.736 17.9981 11.4834 17.892 11.2974 17.7046C11.1114 17.5173 11.007 17.264 11.007 17V11.01C11.0028 10.877 11.0253 10.7445 11.0733 10.6204C11.1213 10.4963 11.1937 10.3831 11.2863 10.2876C11.3789 10.192 11.4897 10.116 11.6122 10.0641C11.7348 10.0122 11.8665 9.9855 11.9995 9.9855C12.1326 9.9855 12.2643 10.0122 12.3868 10.0641C12.5093 10.116 12.6201 10.192 12.7127 10.2876C12.8053 10.3831 12.8777 10.4963 12.9257 10.6204C12.9737 10.7445 12.9962 10.877 12.992 11.01V17C12.9928 17.1309 12.9677 17.2606 12.9183 17.3818C12.8688 17.5029 12.7958 17.6131 12.7037 17.706C12.6115 17.7989 12.5019 17.8727 12.3812 17.9232C12.2604 17.9736 12.1309 17.9997 12 18ZM12 7.99999C11.8038 8.00019 11.6119 7.94219 11.4486 7.83331C11.2853 7.72442 11.1581 7.56955 11.0828 7.3883C11.0076 7.20705 10.9878 7.00758 11.0259 6.81509C11.0641 6.62259 11.1585 6.44574 11.2972 6.30691C11.4359 6.16808 11.6127 6.07348 11.8051 6.03512C11.9976 5.99676 12.1971 6.01637 12.3784 6.09142C12.5597 6.16648 12.7147 6.29359 12.8237 6.45675C12.9328 6.6199 12.991 6.81175 12.991 7.00799C12.9905 7.27075 12.8859 7.52263 12.7002 7.70852C12.5145 7.89441 12.2628 7.9992 12 7.99999ZM11.007 6.99999C11.0071 7.00166 11.0071 7.00333 11.007 7.005V6.99999ZM12.992 6.99999V7.01C12.9919 7.00834 12.9919 7.00666 12.992 7.005V6.99999Z" fill="#9F9F9F"/>
						</svg>
						<span class="inputfield-hint__block">
							<p>???????? ?? ?????? ???????? ????????????????, ?????????????? ?????? ?? ????????</p>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C9.62662 24 7.30651 23.2962 5.33312 21.9776C3.35973 20.659 1.8217 18.7849 0.913445 16.5922C0.00519377 14.3995 -0.232439 11.9867 0.230584 9.6589C0.693607 7.33113 1.83647 5.19293 3.5147 3.5147C5.19293 1.83647 7.33116 0.693607 9.65893 0.230584C11.9867 -0.232439 14.3995 0.00519377 16.5922 0.913445C18.7849 1.8217 20.6591 3.35976 21.9777 5.33315C23.2962 7.30654 24 9.62662 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24ZM12 1.99999C10.0222 1.99999 8.08876 2.58648 6.44427 3.6853C4.79978 4.78411 3.5181 6.34589 2.76122 8.17315C2.00435 10.0004 1.80628 12.0111 2.19213 13.9509C2.57798 15.8907 3.53042 17.6725 4.92895 19.0711C6.32747 20.4696 8.10926 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 9.34783 20.9464 6.80428 19.071 4.92892C17.1957 3.05355 14.6522 1.99999 12 1.99999Z" fill="black"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.73289 8.29645L8.31536 6.71399L12 10.3986L15.6847 6.71399L17.2671 8.29645L13.5825 11.9811L17.0189 15.4175L15.4364 17L12 13.5636L8.56357 17L6.98111 15.4175L10.4175 11.9811L6.73289 8.29645Z" fill="black"/>
							</svg>
						</span>
					</div>
				</div>
				<div class="inputfield">
					<button>????????????????????????????????????</button>
				</div>
				<div class="inputfield inputfield--policy">
					<input type="checkbox" id="policy" checked>
					<label for="policy">
						<span>??&nbsp;???????????????????? ??&nbsp;<a href="#">?????????????????? ????????????????????????????????????</a>,?????? ???????????????? ????&nbsp;?????????????????? ???????????????????????? ???????????? ??&nbsp;?????????????????? ????????????????</span>
					</label>
				</div>
			</form>

			<form class="login__recovery" id="recovery" data-action="change">
				<div class="login__title">???????????????????????????? ????????????</div>
				<div class="login__message">?????????????? ?????????? ?????? ??????????????, ??&nbsp;????&nbsp;???????????? ???????????? ?????? ?????????? ????&nbsp;??????????????????</div>
				<div class="error_str"></div>
				<div class="inputfield">
					<input type="email" placeholder="????. ??????????" name="email" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-email" name="js-recovery-to-email">?????????????????? ???????????? ????&nbsp;??????????</button>
				</div>
				<div class="inputfield">
					<span class="login__hr">??????</span>
				</div>
				<div class="inputfield">
					<input type="tel" inputmode="numeric" placeholder="??????????????" name="phone" class="norequired">
				</div>
				<div class="inputfield">
					<button id="js-recovery-to-phone" name="js-recovery-to-phone">?????????????????? ???????????? ????&nbsp;??????????????</button>
				</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ?? ???????????? ??????????????</a>
			</form>

			<form class="login__newPassword" id="newpassword">
				<div class="login__title">???????????????????? ?????????? ????????????</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????? ????????????">
				</div>
				<div class="inputfield">
					<input type="password" placeholder="?????????????????? ????????????">
				</div>
				<div class="inputfield">
					<button>???????????????? ????????????</button>
				</div>
			</form>

			<form class="sesslogout" id="sesslogout" data-action="sesslogout">
				<div class="login__title">??????????</div>
				<div class="login__message">??????-???? ?????????????????????? ?????? ?????????? ??&nbsp;???????????? ??&nbsp;?????????? ????&nbsp;??????????????????, ?????????????? ?????? ??????????????????????. </div>
				<div class="login__message">?????? ?????????????? ??&nbsp;???????????????? ???????????????? ?????????? ???????????????????????? ???????????? ???????? ???????? ??&nbsp;???????? ???????????? ??????????????. ????&nbsp;?????????? ?????????????????? ???????? ?????????? ??&nbsp;???????????? ?????????????? ??&nbsp;????????????????. ???????????? ???????????? ?????????????????????????? ???????? ???????????? ?????? ???????????? ????????????????????????.</div>
				<a href="#entry" class="login__link" js-changeform>?????????? ??&nbsp;???????????? ??????????????</a>
			</form>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success login__success--low" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M35.7497 3.25H30.2246C34.0655 5.79104 36.8817 9.61085 38.1733 14.0313C39.4649 18.4518 39.1485 23.1869 37.2801 27.3962C35.4116 31.6054 32.1121 35.0165 27.9673 37.0238C23.8224 39.0311 19.1005 39.5048 14.6396 38.3608C10.1786 37.2168 6.26729 34.5291 3.6 30.7749C0.932701 27.0206 -0.318139 22.4426 0.0697085 17.8537C0.457557 13.2648 2.45897 8.96168 5.71853 5.70835C8.97809 2.45503 13.285 0.461926 17.8747 0.0828667V3.25L18.0859 3.32151C14.2166 3.65977 10.5961 5.37195 7.87971 8.14823C5.16336 10.9245 3.5306 14.5814 3.27686 18.4572C3.02312 22.3331 4.16532 26.1717 6.49651 29.2784C8.82771 32.3851 12.194 34.5547 15.9863 35.3946C19.7785 36.2344 23.7459 35.689 27.1708 33.8571C30.5958 32.0251 33.2519 29.0277 34.6583 25.4071C36.0647 21.7866 36.1287 17.7822 34.8386 14.1187C33.5485 10.4551 30.9894 7.37434 27.6247 5.43399V11.375C27.6247 11.806 27.4536 12.2193 27.1488 12.524C26.8441 12.8288 26.4307 13 25.9997 13C25.5687 13 25.1553 12.8288 24.8506 12.524C24.5458 12.2193 24.3747 11.806 24.3747 11.375V1.625C24.3747 1.19402 24.5458 0.780697 24.8506 0.47595C25.1553 0.171204 25.5687 0 25.9997 0H35.7497C36.1807 0 36.5941 0.171204 36.8988 0.47595C37.2036 0.780697 37.3747 1.19402 37.3747 1.625C37.3747 2.05598 37.2036 2.4693 36.8988 2.77405C36.5941 3.0788 36.1807 3.25 35.7497 3.25Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ????&nbsp;???????????????????????????? ???????????? ?????????????????? ????&nbsp;???????? ??????????</div>
			</div>

			<!-- ???????????????????? ???????????? ?????????? ajax.success -->
			<div class="login__success" style="display: none">
				<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5001 39C16.7064 39.0045 13.9444 38.4086 11.4011 37.2528C8.85771 36.097 6.59233 34.4082 4.75843 32.3008C2.92453 30.1934 1.56488 27.7165 0.771506 25.0378C-0.0218694 22.3592 -0.230424 19.5414 0.159949 16.7751C0.550323 14.0089 1.5306 11.3588 3.03425 9.00436C4.5379 6.64989 6.52981 4.64596 8.87528 3.12832C11.2208 1.61067 13.8651 0.614744 16.6289 0.207899C19.3928 -0.198946 22.2117 -0.00719279 24.895 0.770212L23.14 3.6757C19.8547 2.9206 16.416 3.20593 13.3 4.49212C10.184 5.77832 7.54502 8.0017 5.74886 10.8543C3.9527 13.7069 3.08824 17.0475 3.27506 20.4133C3.46188 23.7791 4.69084 27.0036 6.79166 29.6399C8.89248 32.2762 11.7612 34.1939 15.0004 35.1273C18.2395 36.0608 21.6888 35.9638 24.8704 34.8497C28.052 33.7357 30.8084 31.6598 32.7577 28.9096C34.7071 26.1593 35.7527 22.871 35.7501 19.5C35.7502 17.6418 35.4258 15.7979 34.7914 14.0513L36.8552 10.6258C38.378 13.5975 39.1116 16.9106 38.9858 20.2473C38.86 23.584 37.8788 26.8324 36.1365 29.681C34.3942 32.5295 31.9492 34.8825 29.036 36.5144C26.1228 38.1462 22.8392 39.0021 19.5001 39ZM20.9951 24.9746C20.9215 25.1916 20.7991 25.3889 20.6375 25.5515C20.4861 25.7043 20.3025 25.8214 20.1001 25.8942C19.8977 25.9671 19.6816 25.9937 19.4675 25.9723C19.1297 25.9959 18.7941 25.9032 18.5162 25.7096C18.2383 25.5159 18.035 25.2331 17.9401 24.908L11.7325 18.7037C11.4852 18.425 11.3535 18.0623 11.3646 17.6897C11.3756 17.3172 11.5286 16.9629 11.792 16.6993C12.0555 16.4357 12.4095 16.2825 12.7821 16.2712C13.1546 16.2599 13.5173 16.3912 13.7963 16.6384L19.0775 21.9212L31.0863 4.08845C31.1904 3.89803 31.3316 3.7304 31.5015 3.59541C31.6714 3.46043 31.8666 3.36084 32.0756 3.30253C32.2846 3.24422 32.5032 3.22838 32.7185 3.25591C32.9337 3.28344 33.1412 3.35382 33.3288 3.46286C33.7061 3.69567 33.9782 4.06608 34.0874 4.49579C34.1965 4.9255 34.1342 5.3808 33.9138 5.76547L20.9951 24.9746Z" fill="#4D2CE0"/>
				</svg>
				<div class="login__title">???????????? ?????????????? ??????????????</div>
				<a href="#entry" js-changeform>??????????</a>
			</div>

			<p class="login__tech">?????????????? ?????? ?????????? ????&nbsp;?????????????? ?????????????????????? ?????????????????? <a href="tel:88002005440">8&nbsp;800&nbsp;200 54&nbsp;40</a></p>

		</div><!-- login__form -->
	</section><!-- login -->

</div><!-- popup-franchise -->

<?php } ?>

 
	<div class="qwt" href="#popup-message" data-fancybox="" hidden>popup-message</div>
 

	<section class="popup-price fancy__class" id="popup-price" data-package="">
	<div class="popup-price__wrapper">
		<div class="popup-price__info">
			<div class="popup-price__package"><?= _('popup-price__package') ?></div>
			<div class="popup-price__name condensed" js-package></div>
			<div class="popup-price__text condensed" js-text></div>
			<div class="popup-price__price condensed" js-cost></div>
		</div>
		<div class="popup-price__form">
			<form class="form" action="<?= $action ?>&amp;form=<?= $version_price_form ?>">
				<div class="form__wrapper">
					<div class="form__title"><?= _('popup-price-form__title') ?></div>
					<div class="form__input">
						<input type="text" class="input" name="name" placeholder="<?= _('form_item_name') ?>" tabindex="1" value="<?= $get_name ?>">
					</div>
					<div class="form__input">
						<input type="tel" class="input" name="phone" placeholder="<?= _('form_item_phone') ?>" tabindex="2" value="<?= $get_phone ?>">
					</div>
					<div class="form__input">
						<input type="email" class="input" name="email" placeholder="<?= _('form_item_email') ?>" tabindex="3" value="<?= $get_email ?>">
					</div>
					<div class="form__input">
						<button class="form__submit form__button button condensed" type="submit">
							<span class="popup-price__button-buy"><?= _('popup-price__button-buy') ?></span>
							<span class="popup-price__button-get"><?= _('popup-price__button-get') ?></span>
						</button>
					</div>
					<div class="form__privacy">
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">???????????????? ??&nbsp;<a href="#privacy" class="fancybox privacy">?????????????????? ????????????????????????????????????</a> ??&nbsp;????&nbsp;?????????????????? ???????????????????????? ????????????</div>
						</label>
						<?php */ ?>
						<label class="checkcontainer checkcontainer_is-recurrent">
							<input type="checkbox" class="checkbox_custom" name="isRecurrent" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-1') ?></div>
						</label>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree2" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text"><?= _('popup-price-form__footer-text-2') ?></div>
						</label>
						<?php /* ?>
						<label class="checkcontainer">
							<input type="checkbox" class="checkbox_custom" name="personalDataAgree3" checked>
							<span class="checkboxbtn"></span>
							<div class="checkcontainer__text">??????????????????, ???? ???????????????????????? ?? ??????????????????&nbsp;<a href="files/reccuring_offerta.pdf" class="footer__link-offer" terget="_blank"> ?????????????????? ????????????</a></div>
						</label>
						<?php */ ?>
					</div>
					<input type="hidden" name="comment" value="<?= $external_url ?>">
					<input type="hidden" name="product_id" value="">
					<input type="hidden" name="quote_id" value="">
					<input type="hidden" name="partner" value="<?= $partner ?>">
					<input type="hidden" name="unit" value="<?= $landUnit ?>">
					<input type="hidden" name="type" value="<?= $type ?>">
					<input type="hidden" name="land" value="<?= $land ?>">
					<input type="hidden" name="event_id" value="<?= $event_id ?>">
					<input type="hidden" name="form" value="<?= $version_price_form ?>">
				</div>
			</form>

		</div>
	</div>

</section>


<div class="stripe" id="stripeForm">
	<form id="payment-form" class="nolander">
		<fieldset>
			<legend class="card-only">Pay with card</legend>
			<legend class="payment-request-available">Or enter card details</legend>
			<div class="container">
				<div id="payment-elements"></div>
				<button type="submit">Buy ticket</button>
			</div>
			<div class="card-errors" id="card-errors"></div>
		</fieldset>
	</form>
</div>

	<div class="popup popup-message" id="popup-message-success">
    <div class="popup-wrapper">
        <div class="popup-title">
            Congratulations!
        </div>
        <div class="popup-content">
            Your payment was successful!
        </div>
    </div>
</div>

<div class="popup popup-message" id="popup-message-failed">
    <div class="popup-wrapper">
        <div class="popup-title">
            Unfortunately, your payment failed.
        </div>
        <div class="popup-content">
            Please check the card details and the amount of funds on your account and try again later.
        </div>
    </div>
</div>
	<?php break;
} ?>
<?php } ?>

	</div><!-- d-none -->
	

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

	
	<script src="js/script.js" defer="defer"></script>

	<?php if ( $external_url == 'synergyonline' ) { ?>
		<!-- <script src="js/script-login-local.js" defer="defer"></script> -->
		<script src="https://synergy.online/local/templates/auth/js/script-login.js" defer="defer"></script>
	<?php } ?>
	

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

	
	<script src="https://syn.su/js/lander.js?v=10042020" async="async"></script>
	

	<!-- <script src="https://yastatic.net/share2/share.js" async="async"></script> -->

</body>
</html>
