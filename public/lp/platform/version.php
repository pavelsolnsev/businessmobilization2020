<?php
/* Defaults */
$title = _('title');
$land = 'sof_platform';

$quote_id = '';
$quote_id_franchise = '';
$gtm = 'GTM-TTN54WK';

$version_form_title = _('version_form_title');
$version_form_button = _('version_header_button');
$version_form_button_mobile = _('version_form_button_mobile');
$version_form_href = '#popup-demo-form';

$_['ru']['main__form-title'] = $_['ru']['version_form_title'];
$_['en']['main__form-title'] = $_['en']['version_form_title'];
$_['ru']['version_form_button_reg'] = $_['ru']['version_header_button'];
$_['en']['version_form_button_reg'] = $_['en']['version_header_button'];

$is_block_about = true;
$is_block_base = true;
$is_block_services = true;

$PRODUCT_ID_BACHELOR = '';
$PRODUCT_ID_MAGISTER = '';
$PRODUCT_ID_POSTGRADUATE = '';
$PRODUCT_ID_READY = '';
$PRODUCT_ID_STEADY = '';
$PRODUCT_ID_RUN = '';

$phonethanks = '+7 (495) 787 87 67';
$phonethankslink = '+74957878767';
$textthanks = 'Зарегистрируйся <b>на&nbsp;Бизнес-Лектории</b> и получите в подарок доступ к&nbsp;трансляции Genesis 30&nbsp;января';
$formthanks = 'Принять участие в программе бесплатно';

/* Versions */
switch ($version) {
	case 'blogger':
		$land = 'synergy_online2020';
		$version_form_title = 'Получите <span>доступ за&nbsp;1&nbsp;рубль</span> к&nbsp;платформе на&nbsp;7&nbsp;дней при вводе промокода';
		$version_form_button = _('version_header_button_blogger');
		$quote_id = 4246;
		$version_form_href = '#popup-registration';
		$_['ru']['price-demo-cancel-free'] = '*ПРИ ОФОРМЛЕНИИ ПОДПИСКИ С&nbsp;ВАШЕГО СЧЕТА БУДЕТ СНЯТ И&nbsp;ВОЗВРАЩЕН ПЛАТЕЖ В&nbsp;РАЗМЕРЕ 1&nbsp;РУБ. ПО&nbsp;ИСТЕЧЕНИИ ПРОБНОГО ПЕРИОДА ВЫ&nbsp;АВТОМАТИЧЕСКИ БУДЕТЕ ПЕРЕКЛЮЧЕНЫ НА&nbsp;ТАРИФ STANDARD (1&nbsp;500&nbsp;РУБ. В&nbsp;МЕС.) И&nbsp;ПРОИЗОЙДЕТ СПИСАНИЕ ПЕРВОГО ПЛАТЕЖА В&nbsp;1&nbsp;500&nbsp;РУБ. ОТМЕНИТЬ ПОДПИСКУ МОЖНО В&nbsp;ЛИЧНОМ КАБИНЕТЕ.';
		break;

	case 'tv':
		$version_form_href = '#popup-registration';
		$_['ru']['price-demo-cancel-free'] = '*ПРИ ОФОРМЛЕНИИ ПОДПИСКИ С&nbsp;ВАШЕГО СЧЕТА БУДЕТ СНЯТ И&nbsp;ВОЗВРАЩЕН ПЛАТЕЖ В&nbsp;РАЗМЕРЕ 1&nbsp;РУБ. ПО&nbsp;ИСТЕЧЕНИИ ПРОБНОГО ПЕРИОДА ВЫ&nbsp;АВТОМАТИЧЕСКИ БУДЕТЕ ПЕРЕКЛЮЧЕНЫ НА&nbsp;ТАРИФ STANDARD (1&nbsp;500&nbsp;РУБ. В&nbsp;МЕС.) И&nbsp;ПРОИЗОЙДЕТ СПИСАНИЕ ПЕРВОГО ПЛАТЕЖА В&nbsp;1&nbsp;500&nbsp;РУБ. ОТМЕНИТЬ ПОДПИСКУ МОЖНО В&nbsp;ЛИЧНОМ КАБИНЕТЕ.';
		break;

	case 'retargeting':
		$version_form_href = '#popup-registration';
		$_['ru']['price-demo-cancel-free'] = '*ПРИ ОФОРМЛЕНИИ ПОДПИСКИ С&nbsp;ВАШЕГО СЧЕТА БУДЕТ СНЯТ И&nbsp;ВОЗВРАЩЕН ПЛАТЕЖ В&nbsp;РАЗМЕРЕ 1&nbsp;РУБ. ПО&nbsp;ИСТЕЧЕНИИ ПРОБНОГО ПЕРИОДА ВЫ&nbsp;АВТОМАТИЧЕСКИ БУДЕТЕ ПЕРЕКЛЮЧЕНЫ НА&nbsp;ТАРИФ STANDARD (1&nbsp;500&nbsp;РУБ. В&nbsp;МЕС.) И&nbsp;ПРОИЗОЙДЕТ СПИСАНИЕ ПЕРВОГО ПЛАТЕЖА В&nbsp;1&nbsp;500&nbsp;РУБ. ОТМЕНИТЬ ПОДПИСКУ МОЖНО В&nbsp;ЛИЧНОМ КАБИНЕТЕ.';
		break;

	case 'mba':
		$quote_id = 3928;
		$_['ru']['price-demo-cancel-free'] = '*ПРИ ОФОРМЛЕНИИ ПОДПИСКИ С&nbsp;ВАШЕГО СЧЕТА БУДЕТ СНЯТ И&nbsp;ВОЗВРАЩЕН ПЛАТЕЖ В&nbsp;РАЗМЕРЕ 1&nbsp;РУБ. ПО&nbsp;ИСТЕЧЕНИИ ПРОБНОГО ПЕРИОДА ВЫ&nbsp;АВТОМАТИЧЕСКИ БУДЕТЕ ПЕРЕКЛЮЧЕНЫ НА&nbsp;ТАРИФ STANDARD (1&nbsp;500&nbsp;РУБ. В&nbsp;МЕС.) И&nbsp;ПРОИЗОЙДЕТ СПИСАНИЕ ПЕРВОГО ПЛАТЕЖА В&nbsp;1&nbsp;500&nbsp;РУБ. ОТМЕНИТЬ ПОДПИСКУ МОЖНО В&nbsp;ЛИЧНОМ КАБИНЕТЕ.';
		break;

	case 'free':
		$PRODUCT_ID_DEMO = 65589773;
		// $land = 'synergy_online2020';
		$version_price_form = 'freeTicket';
		$_['ru']['price-demo-cancel-free'] = '';
		$_['ru']['price-card-option-cancel-free'] = '';
		$partner = 'aiaengibarian';
		$partner_external = 'da_strb';
		break;

	case 'freefull':
		$version_price_form = 'freeTicket';
		$partner = 'aiaengibarian';
		$partner_external = 'da_strb';
		break;

	case 'mbaforum2022':
		$land = 'mbaforum2022';
		$phonethanks = '+7 495 685 92 06';
		$phonethankslink = '+74956859206';
		$textthanks = 'Зарегистрируйтесь на <a href="https://synergyglobal.ru/forums/mba2021/"><b>Synergy МВА Forum 2022</b></a>';
		$textthanks2 = 'Концентрация профессионального бизнес-образования, практики, реальных кейсов, опыта экспертов,<br>рабочих стратегий и современных технологий.';
		$formthanks = 'Принять участие в программе';
		$title = 'Synergy MBA Forum';
		break;

	case 'rouble':
		$PRODUCT_ID_DEMO = 65589769;
		break;
} // $version


/* Язык */
if ($lang == 'en') {
	$land = 'synergy_online2020';
	// $version = 'en';
	$phone1 = '';
	$phone2 = '';
}

$partner_array = json_decode(file_get_contents("https://franch.sbs.edu.ru/global__FR-partners.json"), true);
if (isset($partner_array[$partner])) {
    $value  = $partner_array[$partner];
    $phonethanks = $value["phone"];
    $phonethankslink = $phonethanks;
    $email = $value["email"];
}


/* Postprocess */
$phone_link = get_phone_link($phone1);
$phone_link_2 = get_phone_link($phone2);
$email_link = get_email_link($email);

$action = implode(array(
	'https://syn.su/lander.php?r=land/index',
	'&unit=', $landUnit,
	'&type=', $type,
	'&land=', $land,
	'&lang=', $lang,
	'&version=', $version,
	'&partner=', $partner,
	'&graccount=', $graccount,
	'&grcampaign=', $grcampaign,
	'&grtag=', $grtag,
	'&quote_id=', $quote_id,
	'&ignore-thanksall=1'
));


$versionThanks = $_GET['version'] ?? 'thanks';

$action_genesis = implode(array(
	'https://syn.su/lander.php?r=land/index',
	'&unit=sbs',
	'&type=genesis',
	'&land=genesis',
	'&lang=', $lang,
	'&version=', $versionThanks,
	'&partner=', $partner,
	'&graccount=', $graccount,
	'&grcampaign=', $grcampaign,
	'&grtag=', $grtag,
	'&link=',
	'&ignore-thanksall=1'
));

if ($version == 'mbaforum2022') {
	$action_genesis = implode(array(
		'https://syn.su/lander.php?r=land/index',
		'&unit=sbs',
		'&type=genesis',
		'&land=mbaforum2022',
		'&lang=', $lang,
		'&version=', $versionThanks,
		'&partner=', $partner,
		'&graccount=', $graccount,
		'&grcampaign=', $grcampaign,
		'&grtag=', $grtag,
		'&link=',
		'&ignore-thanksall=1'
	));
}
