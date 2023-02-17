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



$link = 'https://synergy.online/lp/version-brown/price/';
$version = 'lp-version-brown';
if ($lang == 'en') {
$link = 'https://synergyglobal.com/lp/brown/price/';
}



include_once $ROOT . 'config.php';
include_once $ROOT . 'elastic.php';
include_once $ROOT . 'version.php';


?>
<!DOCTYPE html>



<?php
$BASE_HREF = str_replace('synergy.online', 'synergyglobal.ru', $BASE_HREF); /* Подмена base href для показа на зеркале */
$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;онлайн-мастер-класс';
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

	

	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
<link rel="stylesheet" href="css/lp-version-brown-style.css">
<link rel="stylesheet" href="css/lp-version-brown-responsive.css">


	<link href="favicon.ico" type="image/x-icon" rel="icon">
</head>
<body class="<?= $body_class ?> <?= $version ? 'version-' . $version : '' ?> <?= $get_version && $get_version != $version ? 'version-' . $get_version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> <?= $version || $partner ? 'not-default' : 'default' ?> <?= $external_url ? 'external-url-' . $external_url : '' ?> lang-<?= $lang ?>  <?= $version_main_speaker['id'] ? 'version-main-' . $version_main_speaker['id'] : '' ?> <?= $price_only_open ? 'price-only-open' : '' ?>">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?=$gtm?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php if ( empty($external_url)  || $external_url == 'platform' ){ ?>
		<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=209676029541718&ev=PageView&noscript=1"></noscript>
	<?php } ?>

	<img src="<?= $share_image ?>?<?= date('md') ?>" alt="" style="position: absolute; left: -100000px; z-index: 0">

	
	


	
	<div class="wrapper">
		

<header class="header">
    <div class="container">
        <div class="header__row header__row_1 row no-gutters">
            <div class="header__logo-col col align-self-center">
                <div class="header__logo">
                <?php if ($lang == 'ru') { ?>
                    <img src="img/@lp/@version-brown/header/synergy-online.svg" alt="Synergy online. Цифровая платформа" class="header__logo-img">
                <?php } else {?>
                    <img src="img/@lp/@version-brown/header/logo-en.svg" alt="" class="header__logo-img">
                <?php } ?>
                </div>
            </div><!-- col -->
            <div class="header__phone-col col col-md-auto align-self-center">
                <div class="header__phone xcondensed">
                    <?= $email_link ?>
                </div>
            </div><!-- col -->
            <div class="header__button-col header__button-col_reg col-md-auto">
                <a href="#popup-reg" class="header__button button button_link d-none d-md-flex" data-fancybox><?= $version_form_button ?></a>
            </div>
        </div>
    </div>
</header>

<section class="main">
    <div class="container">
        <div class="main__content">
            <div class="main__date xcondensed color-blue">
                <div class="main__day"><?= _('speakers-brown-main__day') ?></div>
                <div class="main__time"><?= _('speakers-brown-main__time') ?></div>
            </div>
            <h1 class="main__title"><?= _('speakers-brown-main__title') ?></h1>
            <div class="main__person">
                <img src="img/@lp/@version-brown/common/brown.png" alt="<?= _('speakers-brown-main__name') ?>" class="header__person-img">
            </div>
            <div class="main__subtitle xcondensed color-white">
                <div class="main__subtitle-text"><?= _('speakers-brown-main__subtitle') ?></div>
            </div>
            <div class="main__buttonbox">
                <a href="#popup-reg" class="main__button button button_link" data-fancybox><?= $version_form_button ?></a>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        
        
<div class="blockquote">
    <div class="blockquote__info"><?= _('speakers-brown-about__blockquote__info') ?></div>
    <div class="blockquote__box">
        <div class="blockquote__left"><?= _('speakers-brown-about__blockquote__left') ?></div>
        <div class="blockquote__right">
            <div class="blockquote__text">
                <span class="blockquote__text_string blockquote__text_blue xcondensed blockquote__text_quote_top"><?= _('speakers-brown-about__blockquote__text_string_1') ?><br></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-about__blockquote__text_string_2') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-about__blockquote__text_string_3') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed"><?= _('speakers-brown-about__blockquote__text_string_4') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed blockquote__text_quote_bottom"><?= _('speakers-brown-about__blockquote__text_string_5') ?></span>
            </div>
        </div>
    </div>
</div>

    </div>
</section>



<section class="speech">
  <div class="container">
    <div class="speech__box">
      <div class="speech__left">
        <div class="speech__photo">
          <picture>
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/tablet/bg.jpg" media="(max-width: 1199px)">
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/bg.jpg">
							<img alt="" class="lazy-loaded" src="img/@lp/@version-brown/speech/bg.jpg">
          </picture>
        </div>
        <div class="speech__subtitle xcondensed"><span><?= _('speakers-brown-speech__subtitle') ?></span></div>
        <a href="#popup-reg" class="speech__button button button_link" data-fancybox><?= $version_form_button ?></a>
      </div>
      <div class="speech__right">
        
        <div class="speech__title xcondensed"><p class="quotes"><?= _('speakers-brown-speech__title_1') ?></p></div>
        
        <div class="speech__books">
          <picture>
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/mobile/books.png" media="(max-width: 575px)">
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/books.png">
							<img alt="" class="lazy-loaded" src="img/@lp/@version-brown/speech/books.png">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="who">
    <div class="container">
        <h2 class="who__title xcondensed"><?= _('speakers-brown-who__title') ?></h2>
        
        
<div class="blockquote">
    <div class="blockquote__info"><?= _('speakers-brown-who__blockquote_info') ?></div>
    <div class="blockquote__box">
        <div class="blockquote__left"><?= _('speakers-brown-who__blockquote_left') ?></div>
        <div class="blockquote__right">
            <div class="blockquote__text">
                <span class="blockquote__text_string blockquote__text_blue xcondensed blockquote__text_quote_top"><?= _('speakers-brown-who__blockquote_text_1') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-who__blockquote_text_2') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-who__blockquote_text_3') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-who__blockquote_text_4') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed"><?= _('speakers-brown-who__blockquote_text_5') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed"><?= _('speakers-brown-who__blockquote_text_6') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed blockquote__text_quote_bottom"><?= _('speakers-brown-who__blockquote_text_7') ?></span>
            </div>
        </div>
    </div>
</div>

        
        <div class="who__banner">
            <div class="who__banner_box">
                <div class="who__banner_left">
                    <div class="who__banner_left_img"><img src="img/@lp/@version-brown/who/sof.png" class="lazy-loaded" alt=""></div>
                </div>
                <div class="who__banner_center">
                    <div class="who__banner_center_img"><img src="img/@lp/@version-brown/who/photo.jpg" class="lazy-loaded" alt=""></div>
                </div>
                <div class="who__banner_right">
                    <div class="who__banner_right_quote xcondensed">
                        <span class="who__banner_right_line"><?= _('speakers-brown-who__right_1') ?></span><br>
                        <span class="who__banner_right_line"><?= _('speakers-brown-who__right_2') ?></span><br>
                        <span class="who__banner_right_line who__banner_right_background"><?= _('speakers-brown-who__right_3') ?></span><br>
                        <span class="who__banner_right_line who__banner_right_background"><?= _('speakers-brown-who__right_4') ?></span>
                    </div>
                    <div class="who__buttonbox">
                        <a href="#popup-reg" class="who__button button button_link" data-fancybox><?= $version_form_button ?></a>
                    </div>
                </div>
            </div>
        </div>
        
            
            
            
<div class="blockquote">
    <div class="blockquote__info">
        <div class="blockquote__info_big"><?= _('speakers-brown-who-2_blockquote__info_big') ?></div>
        <div class="blockquote__info_small"><?= _('speakers-brown-who-2_blockquote__info_small') ?></div>
    </div>

    <div class="blockquote__box blockquote__box_margin">
        <div class="blockquote__left blockquote__left_order"><?= _('speakers-brown-who-2_blockquote__left') ?></div>
        <div class="blockquote__right">
            <div class="blockquote__text">
                <span class="blockquote__text_string blockquote__text_blue xcondensed blockquote__text_quote_top"><?= _('speakers-brown-who-2_blockquote__text_1') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-who-2_blockquote__text_2') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-who-2_blockquote__text_3') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-who-2_blockquote__text_4') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed"><?= _('speakers-brown-who-2_blockquote__text_5') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed"><?= _('speakers-brown-who-2_blockquote__text_6') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed blockquote__text_quote_bottom"><?= _('speakers-brown-who-2_blockquote__text_7') ?></span>
            </div>
            <div class="blockquote__img">
                <img src="img/@lp/@version-brown/blockquote/quote-img.jpg" class="lazy-loaded" alt="">
            </div>
        </div>
    </div>

    <div class="blockquote__box blockquote__box_margin">
        <div class="blockquote__right blockquote__right_padding">
            <div class="blockquote__text">
                <span class="blockquote__text_string blockquote__text_string_blue xcondensed blockquote__text_quote_top"><?= _('speakers-brown-who-2_blockquote__text_8') ?></span><br>
                <span class="blockquote__text_string blockquote__text_string_dark xcondensed"><?= _('speakers-brown-who-2_blockquote__text_9') ?></span><br>
                <span class="blockquote__text_string blockquote__text_string_dark xcondensed"><?= _('speakers-brown-who-2_blockquote__text_10') ?></span><br>
                <span class="blockquote__text_string blockquote__text_string_dark xcondensed"><?= _('speakers-brown-who-2_blockquote__text_11') ?></span><br>
                <span class="blockquote__text_string blockquote__text_string_dark xcondensed"><?= _('speakers-brown-who-2_blockquote__text_12') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-who-2_blockquote__text_13') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed blockquote__text_quote_bottom blockquote__text_quote_bottom_blue"><?= _('speakers-brown-who-2_blockquote__text_14') ?></span>
            </div>
        </div>
        <div class="blockquote__left"><?= _('speakers-brown-who-2_blockquote__left_2') ?></div>
    </div>
</div>

    </div>

</section>

<section class="middle-form">
  <div class="middle-form__top">  
    <div class="container">
      <div class="middle-form__row">
        <div class="middle-form__photo"><img src="img/@lp/@version-brown/middle-form/speaker.png" alt=""></div>
        <div class="middle-form__title-wrap">
          <picture>
            <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/middle-form/mobile/name.png" media="(max-width: 575px)">
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/middle-form/tablet/name.png" media="(max-width: 1199px)">
							<img class="d-xl-none" src="img/@lp/@version-brown/middle-form/tablet/name.png" alt="">
          </picture>
          <div class="middle-form__title xcondensed color-white">
            <div class="middle-form__subtitle-text quotes"><?= _('speakers-brown-middle-form__subtitle') ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div class="middle-form__bottom">
    <div class="container">
      
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_horizontal form_inline middle-form__form" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=reg">

	
	<div class="form__title xcondensed"><?= _("speakers-brown-registration__title_1") ?></div>
	

	

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
			<button class="form__button button button_red condensed" type="submit"><?= _("speakers-brown-registration__button") ?></button>
			
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

    </div>
  </div>
</section>

<section class="after">
    <div class="container">
        <h2 class="after__title xcondensed"><?= _('speakers-brown-after__title') ?></h2>
        
        
<div class="blockquote">
    <div class="blockquote__info"><?= _('speakers-brown-after_blockquote__info') ?></div>

    <div class="blockquote__box">
        <div class="blockquote__left"><?= _('speakers-brown-after_blockquote__left') ?></div>
        <div class="blockquote__right">
            <div class="blockquote__text">
                <span class="blockquote__text_string blockquote__text_blue xcondensed blockquote__text_quote_top"><?= _('speakers-brown-after_blockquote__text_1') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-after_blockquote__text_2') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-after_blockquote__text_3') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed"><?= _('speakers-brown-after_blockquote__text_4') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed"><?= _('speakers-brown-after_blockquote__text_5') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed blockquote__text_quote_bottom"><?= _('speakers-brown-after_blockquote__text_6') ?></span>
            </div>
        </div>
    </div>
</div>

    
        <div class="after__banner">
            <div class="after__banner_box">
                <div class="after__banner_left">
                    <div class="after__banner_left_img"><img src="img/@lp/@version-brown/after/sof.png" class="lazy-loaded" alt=""></div>
                </div>
                <div class="after__banner_center">
                    <div class="after__banner_center_img"><img src="img/@lp/@version-brown/after/photo-2.jpg" class="lazy-loaded" alt=""></div>
                </div>
                <div class="after__banner_right">
                    <div class="after__banner_right_quote xcondensed">
                        <span class="after__banner_right_line"><?= _('speakers-brown-after__right_1') ?></span><br>
                        <span class="after__banner_right_line"><?= _('speakers-brown-after__right_2') ?></span><br>
                        <span class="after__banner_right_line"><?= _('speakers-brown-after__right_3') ?></span><br>
                        <span class="after__banner_right_line after__banner_right_background"><?= _('speakers-brown-after__right_4') ?></span><br>
                        <span class="after__banner_right_line after__banner_right_background"><?= _('speakers-brown-after__right_5') ?></span>
                    </div>
                    <div class="after__buttonbox">
                        <a href="#popup-reg" class="after__button button button_link" data-fancybox><?= $version_form_button ?></a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
<div class="blockquote">

    <div class="blockquote__box">
        <div class="blockquote__right blockquote__right_padding">
            <div class="blockquote__text">
                <span class="blockquote__text_string blockquote__text_string_blue xcondensed blockquote__text_quote_top"><?= _('speakers-brown-after_2_blockquote__text_7') ?></span><br>
                <span class="blockquote__text_string blockquote__text_string_blue xcondensed"><?= _('speakers-brown-after_2_blockquote__text_8') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed"><?= _('speakers-brown-after_2_blockquote__text_9') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed"><?= _('speakers-brown-after_2_blockquote__text_10') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed blockquote__text_quote_bottom blockquote__text_quote_bottom_blue"><?= _('speakers-brown-after_2_blockquote__text_11') ?></span>
            </div>
        </div>
        <div class="blockquote__left"><?= _('speakers-brown-after_2_blockquote__left') ?></div>
    </div>
    <div class="blockquote__box blockquote__box_margin">
        <div class="blockquote__left blockquote__left_order"><?= _('speakers-brown-after_2_blockquote__left_order') ?></div>
        <div class="blockquote__right">
            <div class="blockquote__text">
                <span class="blockquote__text_string blockquote__text_blue xcondensed blockquote__text_quote_top"><?= _('speakers-brown-after_2_blockquote__text_12') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-after_2_blockquote__text_13') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue xcondensed"><?= _('speakers-brown-after_2_blockquote__text_14') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed"><?= _('speakers-brown-after_2_blockquote__text_15') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark xcondensed blockquote__text_quote_bottom"><?= _('speakers-brown-after_2_blockquote__text_16') ?></span>
            </div>
        </div>
    </div>
</div>


    </div>
</section>


<section class="speech">
  <div class="container">
    <div class="speech__box">
      <div class="speech__left">
        <div class="speech__photo">
          <picture>
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/tablet/bg.jpg" media="(max-width: 1199px)">
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/bg.jpg">
							<img alt="" class="lazy-loaded" src="img/@lp/@version-brown/speech/bg.jpg">
          </picture>
        </div>
        <div class="speech__subtitle xcondensed"><span><?= _('speakers-brown-speech__subtitle') ?></span></div>
        <a href="#popup-reg" class="speech__button button button_link" data-fancybox><?= $version_form_button ?></a>
      </div>
      <div class="speech__right">
        
        <div class="speech__title speech__title_big xcondensed"><p class="quotes"><?= _('speakers-brown-speech__title_2') ?></p></div>
        
        <div class="speech__books">
          <picture>
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/mobile/books.png" media="(max-width: 575px)">
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/books.png">
							<img alt="" class="lazy-loaded" src="img/@lp/@version-brown/speech/books.png">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="what-now">
  <div class="container">
      <div class="what-now__title color-blue xcondensed"><?= _('speakers-brown-what-now__title') ?></div>
      
      
<div class="blockquote">
    <div class="blockquote__info"><?= _('speakers-brown-what-now_blockquote__info') ?></div>
    <div class="blockquote__box">
        <div class="blockquote__left blockquote__left_1"><?= _('speakers-brown-what-now_blockquote__left') ?></div>
        <div class="blockquote__right blockquote__right_1">
            <div class="blockquote__text">
                <span class="blockquote__text_string blockquote__text_blue"><?= _('speakers-brown-what-now_blockquote__text_1') ?><br></span><br>
                <span class="blockquote__text_string blockquote__text_blue"><?= _('speakers-brown-what-now_blockquote__text_2') ?></span><br>
                <span class="blockquote__text_string blockquote__text_blue"><?= _('speakers-brown-what-now_blockquote__text_3') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark"><?= _('speakers-brown-what-now_blockquote__text_4') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark"><?= _('speakers-brown-what-now_blockquote__text_5') ?></span><br>
                <span class="blockquote__text_string blockquote__text_dark"><?= _('speakers-brown-what-now_blockquote__text_6') ?></span>
            </div>
        </div>
    </div>
</div>


  </div>
</section>



<section class="public-section">
    <div class="container">
        <h2 class="public-section__title xcondensed"><?= _('speakers-brown-public-section__title') ?></h2>
        <div class="public-section__description"><?= _('speakers-brown-public-section__description') ?></div>
        <div class="public-section__box">
            <div class="public-section__left">
                <div class="public-section__text"><?= _('speakers-brown-public-section__text') ?></div>
            </div>
            <div class="public-section__right">
                <div class="public-section__wrap">
                    <span class="public-section__decoration public-section__decoration_padding-top"><?= _('speakers-brown-public-section__decoration_1') ?></span>
                    <br>
                    <span class="public-section__decoration"><?= _('speakers-brown-public-section__decoration_2') ?></span>
                    <span class="public-section__decoration"><?= _('speakers-brown-public-section__decoration_3') ?></span>
                    <span class="public-section__decoration"><?= _('speakers-brown-public-section__decoration_4') ?></span>
                    <span class="public-section__decoration public-section__decoration_padding-bottom"><?= _('speakers-brown-public-section__decoration_5') ?></span>
                </div>
                <div class="public-section__years"><?= _('speakers-brown-public-section__years') ?></div>
            </div>
        </div>
    </div>
</section>

<section class="platform">
    <div class="container">
        <div class="platform__head">
            <h2 class="platform__title xcondensed"><?= _('speakers-brown-platform__title') ?></h2>
            <div class="platform__logo"><img src="img/@lp/@version-brown/platform/logo-platform.svg" class="lazy-loaded" alt=""></div>
        </div>
        <div class="platform__content"><?= _('speakers-brown-platform__content') ?></div>
        <div class="platform__text"><?= _('speakers-brown-platform__text') ?></div>
        <ul class="platform__list">
            <li class="platform__item platform__item_order_start">
                <div class="platform__box platform__box_blue">
                    <div class="platform__description xcondensed"><?= _('speakers-brown-platform__description_1') ?></div>
                </div>
            </li>
            <li class="platform__item platform__item_order_start">
                <div class="platform__box platform__box_black">
                    <div class="platform__description xcondensed"><?= _('speakers-brown-platform__description_2') ?></div>
                </div>
            </li>
            <li class="platform__item platform__item_order_10">
                <div class="platform__box platform__box_blue">
                    <div class="platform__description xcondensed"><?= _('speakers-brown-platform__description_3') ?></div>
                </div>
            </li>
            <li class="platform__item platform__item_order_5">
                <div class="platform__box platform__box_black">
                    <div class="platform__description xcondensed"><?= _('speakers-brown-platform__description_4') ?></div>
                </div>
            </li>
            <li class="platform__item platform__item_order_end">
                <div class="platform__box platform__box_blue">
                    <div class="platform__description xcondensed"><?= _('speakers-brown-platform__description_5') ?></div>
                </div>
            </li>
            <li class="platform__item platform__item_order_end">
                <div class="platform__box platform__box_black">
                    <div class="platform__description xcondensed"><?= _('speakers-brown-platform__description_6') ?></div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="bottom">
    <div class="container">
        <div class="bottom__box">
            <div class="bottom__left">
                <div class="bottom__left-top">
                    <div class="bottom__person">
                        <img src="img/@lp/@version-brown/common/brown.png" alt="<?= _('speakers-brown-main__name') ?>" class="header__person-img lazy">
                    </div>
                    <div class="bottom__info">
                        <div class="bottom__date xcondensed color-blue">
                            <?= _('speakers-brown-main__day') ?>,
                            <?= _('speakers-brown-main__time') ?>
                        </div>
                        <div class="bottom__name xcondensed"><?= _('speakers-brown-name') ?></div>
                    </div>
                </div>
                <div class="bottom__head">
                    <div class="bottom__title xcondensed"><?= _('speakers-brown-bottom__title') ?></div>
                    <div class="bottom__subtitle xcondensed"><?= _('speakers-brown-main__subtitle') ?></div>
                </div>
            </div>
            <div class="bottom__right">
                <div class="bottom__bormbox">
                    
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=reg">

	
	<div class="form__title xcondensed"><?= _("speakers-brown-registration__title") ?></div>
	

	

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
			<button class="form__button button button_red condensed" type="submit"><?= _("speakers-brown-registration__button") ?></button>
			
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

                </div>
                <div class="bottom__phone xcondensed">
                    <?= $email_link ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__call">
        <div class="footer__call-container">
            <a href="#popup-reg" class="speech__button button button_link" data-fancybox><?= $version_form_button ?></a>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer__box">
            <div class="footer__logo">
                <?php if ($lang == 'ru') { ?>
                    <img src="img/@lp/@version-brown/footer/logo.png" alt="Synergy online. Цифровая платформа" class="footer__logo-img lazy">
                <?php } else {?>
                    <img src="img/@lp/@version-brown/footer/logo-en.svg" alt="" class="footer__logo-img lazy">
                <?php } ?>
            </div>
            <div class="footer__right">
                <div class="footer__privacy">
                    <?php if($lang == 'en'): ?>
					<a href="files/privacy_en.pdf" target="_blank" data-fancybox class="footer__link-privacy"><?= _('speakers-brown-footer__link-privacy') ?></a>
					<?php else: ?>
					<a href="#privacy" data-fancybox class="footer__link-privacy"><?= _('speakers-brown-footer__link-privacy') ?></a>
					<?php endif; ?>
                </div>
                <div class="footer__meta footer__meta_2"><?= _('footer__meta_2') ?> <a href="http://sydi.ru/?utm_source=synergyglobal" target="_blank" rel="_nofollow">Synergy Digital</a></div>
            </div>
        </div>
    </div>
</footer>


	</div><!-- wrapper -->

	<div class="d-none">
		

<div class="popup popup-reg" id="popup-reg">
    
<?php
global $action, $land, $version, $grtag, $version_form_title, $version_form_button, $blackFriday, $PRICE_SYNCHRO_CURRENT, $IS_PROMOCODE, $version_promocode, $quote_id, $version_popup_tickets_form;
?>

<form class="form form_vertical" action="<?= $action ?>&amp;land=<?= $land ?>&amp;grtag=<?= $grtag ?>&amp;quote_id=<?= $quote_id ?>&amp;form=reg">

	
	<div class="form__title xcondensed"><?= _("speakers-brown-registration__title") ?></div>
	

	

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
			<button class="form__button button button_red condensed" type="submit"><?= _("speakers-brown-registration__button") ?></button>
			
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

</div>


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
	
<script src="lp/version-brown/js/script.js" defer="defer"></script>


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
