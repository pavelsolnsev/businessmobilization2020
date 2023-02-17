<?php
$version = 'vujicic';
$body_class .= ' page-speaker';
$email_link = '';

$version_main_speaker['id'] = 'vujicic';
$version_main_speaker['image'] = 'img/main/speaker/vujicic.png';
$version_main_speaker['content'] = $lang == 'ru' ? 'img/main/speaker/vujicic_book_ru.jpg' : 'img/main/speaker/vujicic_book_en.jpg';
$version_main_speaker['date'] = '20.06';
$version_main_speaker['time'] = '20:00';

$_['ru']['version_form_title'] = $_['ru']['main__form-title'] = 'Зарегистрироваться на&nbsp;мастер-класс';
$_['ru']['version_form_button'] = 'Регистрация';
$link = 'https://synergy.online/lp/synergyonlineforum/price/';


/* Versions */
switch ($get_version) {
	case 'vujicic-platform': /* https://synergy.online/lp/vujicic/platform/ (https://synergyglobal.ru/lp/vujicic/?version=platform) */
	$_['ru']['main__title'] = 'на&nbsp;платформе <br>Synergy Online';
	$_['ru']['main__subtitle'] = 'Смотрите бесплатно мастер-класс';
	$_['ru']['main__title-speaker-name'] = 'Ника Вуйчича';
	$_['ru']['version_form_title'] = $_['ru']['main__form-title'] = 'Зарегистрироваться для&nbsp;просмотра';
	$link .= '?version=vujicic-platform';
	break;
}


/* Postprocess */
$version_form_title = _('version_form_title');
$version_form_button = _('version_form_button');

if ( strpos($_SERVER['HTTP_HOST'], 'synergy.online') !== false ) { /* https://sd.synergy.ru/Task/View/552120 */
	$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	$action .= '&link=' . urlencode($link);
}
