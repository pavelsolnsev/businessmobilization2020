<?php
$version = isset($_GET['version']) ? strtolower($_GET['version']) : '';
$lang = $get_lang = isset($_GET['lang']) && $_GET['lang'] != '' ? strtolower($_GET['lang']) : 'ru';

session_cache_limiter('nocache');
session_start();
if ( !isset($_SESSION['lang']) ) {
	$_SESSION['lang'] = $get_lang;
} else {
	$lang = $_SESSION['lang'];
}

if ($version == 'blogger' || $version == 'tv') {
	echo file_get_contents("https://synergyglobal.ru/forums/businessmobilization/2020/price?external_url=platform&version=blogger&lang={$lang}");
} else {
	echo file_get_contents("https://synergyglobal.ru/forums/businessmobilization/2020/price?external_url=platform&lang={$lang}");
}
?>