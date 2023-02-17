<?php
/* Defaults */
$title = _('title');
$description = _('description');

$phone1 = '8 495 787 87 67';
$phone2 = '8 800 200 54 40';
$email = 'onlineforum@synergy.ru';

$landUnit = 'sbs';
$type = 'sof';
$land = 'synergy_online2020';

$unitTicket = '';
$typeTicket = '';

$gtm = 'GTM-M7T7GF';
$grcampaign = '';
$graccount = '';
$grtag = '';
$partner_external = '';

$quote_id = 4246;
$quote_id_franchise = '';

$quote_id_tickets = '';
$quote_id_tickets_online = '';

$date = '';
$year = '';
$city = 'Москва';
$place = 'КАМПУС ШКОЛЫ БИЗНЕСА СИНЕРГИЯ';

$version_speakers_default_num = 9;
$version_speakers_visible_num = 9;

$version_form_href = '#popup-registration';

$version_theme1_title = _('version_theme1_title');

$body_class = '';
$link_price = '';

$is_page_thanks = false;

$version_is_multi_headliners = false;
$version_is_headliner = false;
$version_is_main_speaker_date = true;
$version_speakers_exclude = ['mahmoudi', 'dover', 'kamran', 'vitoratos', 'stone', 'suzuki', 'hartman']; /* Некоторые спикеры, показывающиеся только на версиях, по умолчанию добавлены в исключения */

$main_partners_logo = '';
$main_partners_text = '';

$is_block_about = false;
$is_block_discussion = false;
$is_block_base = false;
$is_block_services = false;
$is_block_price = false;
$is_block_main_top50 = false;
$is_block_main_biohacking = false;
$is_block_main_best_performance = false;

$version_price_demo_option = '';
$version_price_economy_option = '';
$version_price_standard_option = '';
$version_price_business_option = '';
$version_price_vip_option = '';
$version_price_silver_option = '';
$version_price_gold_option = '';
$version_price_platinum_option = '';
$version_price_offline_option = '';
$version_price_offline_standard_option = '';
$version_price_offline_business_option = '';
$version_price_offline_vip_option = '';
$version_price_form = 'cloudRecurent';

$version_currency = 'rub';

$version_offer_date_1 = '17&nbsp;апреля';
$version_offer_date_2 = '17-18 апреля';
$vtbDate = '30&nbsp;января';

$version_header_logo_1 = '';
$version_header_logo_2 = '';

$external_styles = '';
$external_price_block = '';

$PRODUCT_ID_ECONOMY = '';

$share_image = 'img/common/share_en.jpg';

$version_main_speaker = [];
$version_main_speaker['id'] = 'kotler';
$version_main_speaker['image'] = 'img/main/speaker/kotler.png';
$version_main_speaker['content'] = 'img/main/speaker/kotler_book_ru.jpg';
$version_main_speaker['date'] = '29.08';


$is_block_main_best_performance = true;
$version_main_speaker['id'] = '';
$version_main_speaker['image'] = '';
$version_main_speaker['content'] = '';
$version_main_speaker['date'] = '';

$offline_unit = '';
$offline_type = '';
$offline_land = '';
$offline_quote_id = '';
$offline_event_id = '';
$offline_form_type = '';
$price_only_open = false;

/* Язык */
switch ($lang) {
	case 'ru':
	$PRODUCT_ID_EXPRESS = '';
	$share_image = 'img/common/share.jpg';
	break;

	case 'en':
	$land = 'synergy_online_world';
	$version = 'synergy_online2020_en';
	$version_price_form = 'stripeRecurent';
	$PRODUCT_ID_EXPRESS = 59202322;
	$PRODUCT_ID_STANDARD = 57860983;
	$PRODUCT_ID_BUSINESS = 57860985;
	$PRODUCT_ID_VIP = 57860988;
	$PRICE_EXPRESS = 10;
	$version_currency = 'usd';
	UpdatePrices();
	$email = 'onlineforum@synergyglobal.com';
	$_['en']['price-payment__button-pay'] = 'Check out';
	$version_main_speaker['content'] = 'img/main/speaker/kotler_book_en.jpg';
	break;

	case 'tr':
	$land = 'synergy_online_world';
	$version = 'synergy_online2020_en';
	$version_price_form = 'stripeRecurent';
	$PRODUCT_ID_EXPRESS = 59202322;
	$PRODUCT_ID_STANDARD = 57860983;
	$PRODUCT_ID_BUSINESS = 57860985;
	$PRODUCT_ID_VIP = 57860988;
	$PRICE_EXPRESS = 10;
	$version_currency = 'usd';
	UpdatePrices();
	$email = 'onlineforum@synergyglobal.com';
	$_['tr']['price-payment__button-pay'] = 'ÖDEME';
	break;

	case 'es':
	$land = 'synergy_online_world';
	$version = 'synergy_online2020_es';
	$version_price_form = 'stripeRecurent';
	$PRODUCT_ID_EXPRESS = 59202322;
	$PRODUCT_ID_STANDARD = 57860983;
	$PRODUCT_ID_BUSINESS = 57860985;
	$PRODUCT_ID_VIP = 57860988;
	$PRICE_EXPRESS = 10;
	$version_currency = 'usd';
	UpdatePrices();
	$email = 'onlineforum@synergyglobal.com';
	$_['es']['price-payment__button-pay'] = 'Pagar';
	break;

	case 'pt':
	$land = 'synergy_online_world';
	$version = 'synergy_online2020_pt';
	$version_price_form = 'stripeRecurent';
	$PRODUCT_ID_EXPRESS = 59202322;
	$PRODUCT_ID_STANDARD = 57860983;
	$PRODUCT_ID_BUSINESS = 57860985;
	$PRODUCT_ID_VIP = 57860988;
	$PRICE_EXPRESS = 10;
	$version_currency = 'usd';
	UpdatePrices();
	$PRICE_EXPRESS_NAME = 'EXPRESSO';
	$PRICE_STANDARD_NAME = 'PADRÃO';
	$PRICE_BUSINESS_NAME = 'NEGÓCIO';
	$email = 'onlineforum@synergyglobal.com';
	$_['pt']['price-payment__button-pay'] = 'CONFERIR';
	break;

}


/* Versions */
switch ($get_version) {

	/* =========== */
	/* Спикерские */

	case 'chernyak':
	$version_is_multi_headliners = true;
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'chernyak';
	$version_main_speaker['image'] = 'img/main/speaker/chernyak.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'saysembaev':
	$version_is_headliner = true;
	$version_is_multi_headliners = true;
	break;

	case 'hashimov':
	$version_is_headliner = true;
	$version_is_multi_headliners = true;
	break;

	case 'adizes':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'adizes';
	$version_main_speaker['image'] = 'img/main/speaker/adizes.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'hakamada':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'hakamada';
	$version_main_speaker['image'] = 'img/main/speaker/hakamada.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'adizes2':
	$version_is_headliner = true;
	$version_is_multi_headliners = true;
	$body_class = 'version-adizes';
	break;

	case 'myasnikov':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'myasnikov';
	$version_main_speaker['image'] = 'img/main/speaker/myasnikov.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'harari':
	$version_is_headliner = true;
	if ( $lang == 'en' ) {
		$version_main_speaker['id'] = 'harari';
		$version_main_speaker['image'] = 'img/main/speaker/harari.png';
		$version_main_speaker['content'] = 'img/main/speaker/harari_book_en.jpg';
		$version_main_speaker['date'] = '';
	}
	break;

	case 'tschohl':
	$quote_id = 4256;
	break;

	case 'sinsero':
	$version_is_headliner = true;
	$version_main_speaker['id'] = 'sinsero';
	$version_main_speaker['image'] = 'img/main/speaker/sinsero.png';
	$version_main_speaker['content'] = 'img/main/speaker/sinsero_book.jpg';
	$version_main_speaker['date'] = '27.06';
	break;

	/*case 'charm':
	$version_is_headliner = true;
	$version_main_speaker['id'] = 'charm';
	$version_main_speaker['image'] = 'img/main/speaker/charm.png';
	$version_main_speaker['content'] = 'img/main/speaker/charm_book_ru.jpg';
	if ( $lang == 'en' ) {
		$version_main_speaker['content'] = 'img/main/speaker/charm_book_en.jpg';
	}
	$version_main_speaker['date'] = '18.07';
	break;*/

	case 'nordstrem':
	$version_is_headliner = true;
	$version_main_speaker['id'] = 'nordstrem';
	$version_main_speaker['image'] = 'img/main/speaker/nordstrem.png';
	$version_main_speaker['content'] = 'img/main/speaker/nordstrem_book.jpg';
	$version_main_speaker['date'] = '29.05';
	break;

	case 'vujicic':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'vujicic';
	$version_main_speaker['image'] = 'img/main/speaker/vujicic.png';
	$version_main_speaker['content'] = 'img/main/speaker/vujicic_book_en.jpg';
	if ( $lang == 'ru' ) {
		$version_main_speaker['content'] = 'img/main/speaker/vujicic_book_ru.jpg';
	}
	$version_main_speaker['date'] = '';
	break;

	case 'vujicic-platform': /* https://synergy.online/lp/synergyonlineforum/price/?version=vujicic-platform */
	$PRODUCT_ID_DEMO = 56913349;
	$PRICE_DEMO = 'доступ на 7 дней';
	$PRODUCT_ID_ECONOMY = '';
	$version_price_demo_option = '
	<div class="price-card__list-wrap">
	<span class="price-card__list-item price-card__list-item_1">&mdash;&nbsp;Доступ к&nbsp;записи мастер класса Ника Вуйчича</span>
	<span class="price-card__list-item price-card__list-item_2">&mdash;&nbsp;Доступ к&nbsp;еженедельным онлайн-форумам &laquo;Синергии&raquo;</span>
	<span class="price-card__list-item price-card__list-item_3">&mdash;&nbsp;Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo;</span>
	</div>
	';
	$_['ru']['price-card-option-access-sof-1d'] = "Доступ к&nbsp;записи мастер-класса Ника Вуйчича";
	$_['ru']['price-card-option-access-sof-48h'] = "Доступ к&nbsp;записи мастер-класса Ника Вуйчича на&nbsp;48&nbsp;часов";
	$_['ru']['price-card-option-access-sof-unlim'] = "Неограниченный доступ к&nbsp;записи мастер-класса Ника Вуйчича";
	break;

	case 'taleb':
	$version_is_headliner = true;
	$version_main_speaker['id'] = 'taleb';
	$version_main_speaker['image'] = 'img/main/speaker/taleb.png';
	$version_main_speaker['content'] = 'img/main/speaker/taleb_book.jpg';
	$version_main_speaker['date'] = '18.07';
	break;

	case 'peresild':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'peresild';
	$version_main_speaker['image'] = 'img/main/speaker/peresild.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'koreshkov':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'koreshkov';
	$version_main_speaker['image'] = 'img/main/speaker/koreshkov.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'kurpatov':
	$version_is_headliner = true;
	$version_main_speaker['id'] = 'kurpatov';
	$version_main_speaker['image'] = 'img/main/speaker/kurpatov.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '26.08';
	break;

	case 'borzov':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'borzov';
	$version_main_speaker['image'] = 'img/main/speaker/borzov.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'bogomolov':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'bogomolov';
	$version_main_speaker['image'] = 'img/main/speaker/bogomolov.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'tcipkin':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'tcipkin';
	$version_main_speaker['image'] = 'img/main/speaker/tcipkin.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'karelin':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'karelin';
	$version_main_speaker['image'] = 'img/main/speaker/karelin.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'demchog':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'demchog';
	$version_main_speaker['image'] = 'img/main/speaker/demchog.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'belfort':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'belfort';
	$version_main_speaker['image'] = 'img/main/speaker/belfort.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'mann':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'mann';
	$version_main_speaker['image'] = 'img/main/speaker/mann.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'baytasov':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'baytasov';
	$version_main_speaker['image'] = 'img/main/speaker/baytasov.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'hof':
	$version_is_headliner = true;
	$version_main_speaker['id'] = 'hof';
	$version_main_speaker['image'] = 'img/main/speaker/hof.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '11.07';
	break;

	case 'horikiri':
	if ( $lang == 'en' ) {
		$version_is_headliner = true;
		$version_main_speaker['id'] = 'horikiri';
		$version_main_speaker['image'] = 'img/main/speaker/horikiri.png';
		$version_main_speaker['content'] = '';
		$version_main_speaker['date'] = '';
	}
	break;

	case 'besson':
	$version_is_headliner = true;
	$version_is_main_speaker_date = true;
	$version_main_speaker['id'] = 'besson';
	$version_main_speaker['image'] = 'img/main/speaker/besson.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '4.07';
	break;

	case 'roach':
	$_['ru']['price-header__title'] = '<span>Спасибо за&nbsp;регистрацию на&nbsp;онлайн<br>мастер-класс Майкла Роуча<br>в&nbsp;рамках Synergy Online Forum!</span><br>Чтобы завершить регистрацию,<br>выберите пакет участия';
	$external_forum_name = 'мастер-класса Майкла Роуча в&nbsp;рамках Synergy Online Forum'; /* https://sd.synergy.ru/Task/View/558373 */
	$_['ru']['price-card-option-access-sof-48h'] = "Доступ к&nbsp;записи трансляции {$external_forum_name} на&nbsp;48&nbsp;часов";
	$_['ru']['price-card-option-access-sof-unlim'] = "Неограниченный доступ к&nbsp;записи {$external_forum_name}";
	break;

	case 'batyrev':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'batyrev';
	$version_main_speaker['image'] = 'img/main/speaker/batyrev.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'tarasov':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'tarasov';
	$version_main_speaker['image'] = 'img/main/speaker/tarasov.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'pintosevich':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'pintosevich';
	$version_main_speaker['image'] = 'img/main/speaker/pintosevich.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'trubnikov':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'trubnikov';
	$version_main_speaker['image'] = 'img/main/speaker/trubnikov.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'kuchment':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'kuchment';
	$version_main_speaker['image'] = 'img/main/speaker/kuchment.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'fridman':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'fridman';
	$version_main_speaker['image'] = 'img/main/speaker/fridman.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'kolmanovsky':
	$version_is_headliner = true;
	$version_is_main_speaker_date = true;
	$version_main_speaker['id'] = 'kolmanovsky';
	$version_main_speaker['image'] = 'img/main/speaker/kolmanovsky.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '26.08';
	break;

	case 'arkhangelskyi':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'arkhangelskyi';
	$version_main_speaker['image'] = 'img/main/speaker/arkhangelskyi.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'schwarzenegger':
	$version_is_headliner = true;
	$version_is_main_speaker_date = false;
	$version_main_speaker['id'] = 'schwarzenegger';
	$version_main_speaker['image'] = 'img/main/speaker/schwarzenegger.png';
	$version_main_speaker['content'] = '';
	$version_main_speaker['date'] = '';
	break;

	case 'fuente':
	if ( $lang == 'en' ) {
		$version_is_headliner = true;
	}
	break;

	/* ======= */
	/* Другие */

	case 'theme1':
	$version_theme1_title = '#Кризис';
	break;

	case 'retargeting':
	$_['ru']['version_form_title'] = 'Оплатить участие в&nbsp;форуме: стоимость 1000&nbsp;<span class="currency">₽</span>';
	$_['ru']['version_form_button'] = 'Оплатить';
	$_['ru']['version_form_button_mobile'] = 'Оплатить участие';
	break;

	case 'skolkovo':
	array_push($version_speakers_exclude, 'hartman', 'belfort', 'gandapas', 'chernyak', 'pintosevich', 'avetov');
	$main_partners_logo = 'img/main/partners/skolkovo.png';
	$main_partners_text = 'Партнер события <br>Технопарк Сколково';
	break;

	case 'dxb':
	$quote_id = 4231;
	$phone1 = '+971 55 882 7677';
	$version_speakers_exclude = [];
	$phone2 = '';
	$email = 'info@synergydubai.ae';
	$body_class = 'version-harari version-hof version-taleb version-belfort version-sanei version-mahmoudi version-kaabi version-saad';
	break;

	case 'ukraine':
	array_push($version_speakers_exclude, 'chernyak');
	break;

	case 'discussion1':
	$is_block_discussion = true;
	$discussion_title = 'Трансформация отношений в&nbsp;бизнесе и&nbsp;обществе: до&nbsp;и&nbsp;после пандемии';
	$version_discussion_moderator = 'babaev';
	$version_discussion_speakers = ['babaev','akucherena','elinson','habarov','gorkov'];
	break;

	case 'discussion2':
	$is_block_discussion = true;
	$discussion_title = 'Бизнес-возможности будущего';
	$version_discussion_moderator = 'bokov';
	$version_discussion_speakers = ['bokov','nakhapetyan','binder','impolitov','koreshkov','belocerkovskiy'];
	break;

	case 'discussion3':
	$is_block_discussion = true;
	$discussion_title = 'Цифровизация отношений';
	$version_discussion_moderator = 'ryzhkova';
	$version_discussion_speakers = ['ryzhkova', 'spiridonov', 'kivokurtsev', 'babaev', 'atarasov'];
	break;

	case 'addition':
	$PRODUCT_ID_ECONOMY = '';
	$PRODUCT_ID_STANDARD = 57793076;
	$PRODUCT_ID_BUSINESS = 57793079;
	$PRODUCT_ID_VIP = 57793081;
	$PRODUCT_ID_SILVER = 57793084;
	$PRODUCT_ID_GOLD = 57793086;
	$PRODUCT_ID_PLATINUM = 57793088;
	break;

	case 'offer1':
	$version_offer_date_1 = '30&nbsp;апреля';
	$version_offer_date_2 = '30&nbsp;апреля';
	break;

	case 'offer2':
	$version_offer_date_1 = '15&nbsp;мая';
	$version_offer_date_2 = '15&nbsp;мая';
	break;

	case 'no_price':
	$is_block_price = false;
	break;

	case 'top50':
	$date = '5 сентября 2020';
	$is_block_main_top50 = true;
	$version_main_speaker['id'] = '';
	$version_speakers_exclude = array_diff( $version_speakers_exclude, array('stone', 'suzuki', 'hartman') ); /* Убираем спикеров из списка исключений */
	$body_class = 'version-ryjakov version-ketting version-kunitskiy version-akhtar version-balakhnin version-mojenkov version-dyakonov version-tursunova version-doronin version-prozorov version-teterina version-kuchment version-chumak version-sidorin';

	$_['ru']['price-header__title'] = 'ЧТОБЫ ПОЛУЧИТЬ ДОСТУП К ЗАПИСЯМ ПЛАТФОРМЫ,<br>ОФОРМИТЕ БЕСПЛАТНУЮ DEMO-ПОДПИСКУ';
	$_['ru']['popup-price-form__title'] = 'БЕСПЛАТНАЯ DEMO-ПОДПИСКА НА 14 ДНЕЙ';		
	$_['ru']['price-payment__button-pay'] ='ОФОРМИТЬ ПОДПИСКУ'; /* кнопка в карточке товара */

	$PRICE_DEMO_NAME = 'БЕСПЛАТНАЯ <br><span>DEMO-ПОДПИСКА</span> <br>НА 14 ДНЕЙ'; /* название в карточке товара */
	$_['ru']['price-payment-button'] = 'подписка DEMO';
	$_['ru']['popup-price__button-get'] = 'ОФОРМИТЬ ПОДПИСКУ'; /* кнопка купить в попап */
	$_['ru']['popup-price-form__title_demo'] = 'БЕСПЛАТНАЯ <br><span>DEMO-ПОДПИСКА</span> <br>НА 14 ДНЕЙ'; /* название в форме попап */


	$external_styles = '
	<link rel="stylesheet" href="price/css_top50/style.css">
	<link rel="stylesheet" href="price/css_top50/responsive.css" media="(max-width: 1199px)">
	';

	$price_only_open = true;

	$PRODUCT_ID_DEMO = 65589769;
	$version_price_demo_option = '
	<div class="top">
	<p class="price-card__list-item price-card__list-item_1">Доступ к записям</p>
	<p class="price-card__list-item price-card__list-item_2">14&nbsp;дней полного доступа к&nbsp;платформе Synergy.Online</p>
	<p class="price-card__list-item price-card__list-item_3">База знаний с&nbsp;10&nbsp;000+ часов контента про бизнес и&nbsp;саморазвитие</p>
	</div>
	<div class="bottom">
	<p class="card-description">Для подписки требуется привязать банковскую карту. С&nbsp;вашей карты спишется и&nbsp;тут&nbsp;же вернется 1&nbsp;рубль. Через 14&nbsp;дней вы&nbsp;будете автоматически переключены на&nbsp;стандартную подписку стоимостью 1500&nbsp;р.&nbsp;/ мес. - тариф Standard</p>
	<p class="card-description"><span>ЗА ДЕНЬ ДО СПИСАНИЯ СРЕДСТВ МЫ ОБЯЗАТЕЛЬНО ПРИШЛЁМ ВАМ EMAIL-ПИСЬМО С НАПОМИНАНИЕМ ОБ ЭТОМ. ВЫ&nbsp;МОЖЕТЕ ОТМЕНИТЬ ПОДПИСКУ В&nbsp;ЛЮБОЙ МОМЕНТ В&nbsp;ЛИЧНОМ КАБИНЕТЕ</span></p>
	</div>';

	break;

	case 'lp-version-besson': /* https://synergy.online/lp/version-besson/ -> https://synergy.online/price/?version=lp-version-besson */
	$version = 'lp-version-besson';
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
	break;

	case 'lp-version-taleb':  /* https://synergy.online/lp/version-taleb/ -> https://synergy.online/price/?version=lp-version-taleb */
	$version = 'lp-version-taleb';
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
	if ($lang == 'en') {
		$version = 'lp-version-taleb';
	}

	if ($lang == 'es') {
		$version = 'lp-version-taleb';
	}

	if ($lang == 'pt') {
		$version = 'lp-version-taleb';
	}

	if ($lang == 'tr') {
		$version = 'lp-version-taleb';
	}

	break;

	case 'lp-version-taleb-email':
	$version = 'lp-version-taleb-email';
	$BASE_HREF = str_replace('/email', '', $BASE_HREF);
	$BASE_HREF = str_replace('/lp/taleb', '', $BASE_HREF);
	break;

	case 'lp-version-brown': /* https://synergy.online/lp/version-brown/ -> https://synergy.online/price/?version=lp-version-brown */
	$version = 'lp-version-brown';
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
	break;

	case 'synergyonlineforum-ai':
	$version = 'synergyonlineforum-ai';
	$phone1 = '8 800 100-00-11';
	$phone2 = '';
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
	break;

	case 'lp-version-tracy': /* https://synergy.online/lp/version-brown/ -> https://synergy.online/price/?version=lp-version-brown */
	$version = 'lp-version-tracy';
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
	break;

	case 'lp-version-norris': /* https://synergy.online/lp/version-norris/ -> https://synergy.online/price/?version=lp-version-norris */
	$version = 'lp-version-norris';
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
	break;

	case 'lp-version-kotler': /* https://synergy.online/lp/version-kotler/ -> https://synergy.online/price/?version=lp-version-kotler */
	$version = 'lp-version-kotler';
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
		$_['ru']['version_form_button_mobile'] = "СМОТРЕТЬ БЕСПЛАТНО";
	break;

	case 'lp-version-harrold': /* https://synergy.online/lp/version-harrold/ -> https://synergy.online/price/?version=lp-version-harrold */
	$version = 'lp-version-harrold';
	$PRODUCT_ID_ECONOMY = '';
	$PRODUCT_ID_STANDARD = 65066847;
	$PRODUCT_ID_BUSINESS = 65066848;
	$PRODUCT_ID_VIP = 65066849;
	$PRODUCT_ID_SILVER = 65066850;
	$PRODUCT_ID_GOLD = 65066851;
	$PRODUCT_ID_PLATINUM = 65066852;
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
	$_['ru']['price-card-option-access-sof-48h'] = 'Доступ к&nbsp;записи мастер-класса Гранта Хэрролда в&nbsp;рамках Synergy Online Forum';
	$_['en']['price-card-option-access-sof-48h'] = 'Access to&nbsp;the video record of&nbsp; Grant Harrold live discussion';
	$_['ru']['price-card-option-access-sof-unlim'] = 'Неограниченный доступ к&nbsp;записи мастер-класса Гранта Хэрролда в&nbsp;рамках Synergy Online Forum';
	$_['en']['price-card-option-access-sof-unlim'] = 'Unlimited access to&nbsp;the video record of&nbsp;Grant Harrold  live discussion';
	$_['ru']['price-card-option-access-practicum-unlim-1m'] = 'Неограниченный доступ к&nbsp;записи мастер-класса Гранта Хэрролда в&nbsp;рамках Synergy Online Forum';
	$_['ru']['kotler__title'] = 'Спасибо за&nbsp;регистрацию на мастер-класс Гранта Хэрролда!';
	$_['en']['kotler__title'] = 'Thanks for the registration to&nbsp;the master class of&nbsp;Grant Harrold!';
	$_['ru']['kotler__note'] = 'Чтобы завершить регистрацию, <br class="d-none d-md-inline"><b class="color-red">выберите пакет участия</b>.';
	$_['en']['kotler__note'] = 'Please proceed with the payment <br class="d-none d-md-inline"><b class="color-red">to&nbsp;complete your registration</b>.';
	$_['ru']['price-card-option-access-crm-2x-business'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
	$_['ru']['price-card-option-access-crm-3x-business'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
	$_['ru']['price-card-option-access-crm-3x-silver'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;3&nbsp;месяца';
	$_['ru']['price-card-option-access-crm-3x-gold'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;6&nbsp;месяца';
	$_['ru']['price-card-option-access-crm-3x-platinum'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес+&raquo; на&nbsp;1&nbsp;год';

	$land = 'master-сlass-sbs';
	$landUnit = 'payments';
	$type = 'ticketless';
	$quote_id = 4377;

	$action = implode(array(
		'https://syn.su/lander.php?r=land/index',
		'&unit=', $landUnit,
		'&type=', $type,
		'&land=', $land,
		'&lang=', $lang,
		'&quote_id=', $quote_id,
		'&version=', $version,
		'&partner=', $partner,
		'&graccount=', $graccount,
		'&grcampaign=', $grcampaign,
		'&grtag=', $grtag,
		'&link=', urlencode($link),
		'&ignore-thanksall=1'
	));

	break;

	case 'lp-version-peters': /* https://synergy.online/lp/version-peters/ -> https://synergy.online/price/?version=lp-version-peters */
	$version = 'lp-version-peters';
	$PRODUCT_ID_MONTH = 66177976;
	$PRODUCT_ID_6_MONTH = 66178129;
	$PRODUCT_ID_12_MONTH = 66178221;
	$PRODUCT_ID_SUBS_SILVER = 66178908;
	$PRODUCT_ID_SUBS_GOLD = 66179043;
	$PRODUCT_ID_SUBS_PLATINUM = 66179187;
	$external_forum_name = 'мастер-класса Гидиона Питерса';
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
/* 	$_['ru']['price-card-option-access-sof-48h'] = 'Доступ к&nbsp;записи мастер-класса Гранта Хэрролда в&nbsp;рамках Synergy Online Forum';
	$_['en']['price-card-option-access-sof-48h'] = 'Access to&nbsp;the video record of&nbsp; Grant Harrold live discussion';
	$_['ru']['price-card-option-access-sof-unlim'] = 'Неограниченный доступ к&nbsp;записи мастер-класса Гранта Хэрролда в&nbsp;рамках Synergy Online Forum';
	$_['en']['price-card-option-access-sof-unlim'] = 'Unlimited access to&nbsp;the video record of&nbsp;Grant Harrold  live discussion';
	$_['ru']['price-card-option-access-practicum-unlim-1m'] = 'Неограниченный доступ к&nbsp;записи мастер-класса Гранта Хэрролда в&nbsp;рамках Synergy Online Forum';
	$_['ru']['kotler__title'] = 'Спасибо за&nbsp;регистрацию на мастер-класс Гранта Хэрролда!';
	$_['en']['kotler__title'] = 'Thanks for the registration to&nbsp;the master class of&nbsp;Grant Harrold!';
	$_['ru']['kotler__note'] = 'Чтобы завершить регистрацию, <br class="d-none d-md-inline"><b class="color-red">выберите пакет участия</b>.';
	$_['en']['kotler__note'] = 'Please proceed with the payment <br class="d-none d-md-inline"><b class="color-red">to&nbsp;complete your registration</b>.';
	$_['ru']['price-card-option-access-crm-2x-business'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
	$_['ru']['price-card-option-access-crm-3x-business'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
	$_['ru']['price-card-option-access-crm-3x-silver'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;3&nbsp;месяца';
	$_['ru']['price-card-option-access-crm-3x-gold'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;6&nbsp;месяца';
	$_['ru']['price-card-option-access-crm-3x-platinum'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес+&raquo; на&nbsp;1&nbsp;год'; */

	$land = 'master-сlass-sbs';
	$landUnit = 'payments';
	$type = 'ticketless';
	$quote_id = 4377;

	break;

	case 'lp-version-hoek': /* https://synergy.online/lp/version-hoek/ -> https://synergy.online/price/?version=lp-version-hoek */
		$version = 'lp-version-hoek';
		$PRODUCT_ID_MONTH = 66177976;
		$PRODUCT_ID_6_MONTH = 66178129;
		$PRODUCT_ID_12_MONTH = 66178221;
		$PRODUCT_ID_SUBS_SILVER = 66178908;
		$PRODUCT_ID_SUBS_GOLD = 66179043;
		$PRODUCT_ID_SUBS_PLATINUM = 66179187;
		$external_forum_name = 'мастер-класса Марги Хоек';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
	/* 	$_['ru']['price-card-option-access-sof-48h'] = 'Доступ к&nbsp;записи мастер-класса Гранта Хэрролда в&nbsp;рамках Synergy Online Forum';
		$_['en']['price-card-option-access-sof-48h'] = 'Access to&nbsp;the video record of&nbsp; Grant Harrold live discussion';
		$_['ru']['price-card-option-access-sof-unlim'] = 'Неограниченный доступ к&nbsp;записи мастер-класса Гранта Хэрролда в&nbsp;рамках Synergy Online Forum';
		$_['en']['price-card-option-access-sof-unlim'] = 'Unlimited access to&nbsp;the video record of&nbsp;Grant Harrold  live discussion';
		$_['ru']['price-card-option-access-practicum-unlim-1m'] = 'Неограниченный доступ к&nbsp;записи мастер-класса Гранта Хэрролда в&nbsp;рамках Synergy Online Forum';
		$_['ru']['kotler__title'] = 'Спасибо за&nbsp;регистрацию на мастер-класс Гранта Хэрролда!';
		$_['en']['kotler__title'] = 'Thanks for the registration to&nbsp;the master class of&nbsp;Grant Harrold!';
		$_['ru']['kotler__note'] = 'Чтобы завершить регистрацию, <br class="d-none d-md-inline"><b class="color-red">выберите пакет участия</b>.';
		$_['en']['kotler__note'] = 'Please proceed with the payment <br class="d-none d-md-inline"><b class="color-red">to&nbsp;complete your registration</b>.';
		$_['ru']['price-card-option-access-crm-2x-business'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
		$_['ru']['price-card-option-access-crm-3x-business'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
		$_['ru']['price-card-option-access-crm-3x-silver'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;3&nbsp;месяца';
		$_['ru']['price-card-option-access-crm-3x-gold'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;6&nbsp;месяца';
		$_['ru']['price-card-option-access-crm-3x-platinum'] = 'Доступ к&nbsp;SYNERGY CRM на&nbsp;неограниченное количество пользователей по&nbsp;тарифу &laquo;Бизнес+&raquo; на&nbsp;1&nbsp;год'; */
	
		$land = 'master-сlass-sbs';
		$landUnit = 'payments';
		$type = 'ticketless';
		$quote_id = 4377;
	
		break;

	case 'lp-version-waele': /* https://synergy.online/lp/version-waele/ -> https://synergy.online/price/?version=lp-version-waele */
		$version = 'lp-version-waele';
		$PRODUCT_ID_MONTH = 66177976;
		$PRODUCT_ID_6_MONTH = 66178129;
		$PRODUCT_ID_12_MONTH = 66178221;
		$PRODUCT_ID_SUBS_SILVER = 66178908;
		$PRODUCT_ID_SUBS_GOLD = 66179043;
		$PRODUCT_ID_SUBS_PLATINUM = 66179187;
		$_['ru']['new-price__subtitle_1'] = 'Трансляция мастер-класса <span class="color-blue">Руди де Вейле</span> состоится на&nbsp;платформе Synergy.Online:';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$land = 'master-сlass-sbs';
		$landUnit = 'payments';
		$type = 'ticketless';
		$quote_id = 4377;
	break;

		case 'lp-version-verdezi': /* https://synergy.online/lp/version-verdezi/ -> https://synergy.online/price/?version=lp-version-verdezi */
		$version = 'lp-version-verdezi';
		$PRODUCT_ID_MONTH = 66177976;
		$PRODUCT_ID_6_MONTH = 66178129;
		$PRODUCT_ID_12_MONTH = 66178221;
		$PRODUCT_ID_SUBS_SILVER = 66178908;
		$PRODUCT_ID_SUBS_GOLD = 66179043;
		$PRODUCT_ID_SUBS_PLATINUM = 66179187;
		$_['ru']['new-price__subtitle_1'] = 'Трансляция мастер-класса <span class="color-blue">Дэвида Вердези</span> состоится на&nbsp;платформе Synergy.Online:';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$land = 'master-сlass-sbs';
		$landUnit = 'payments';
		$type = 'ticketless';
		$quote_id = 4377;
	break;

		case 'lp-version-murray': /* https://synergy.online/lp/version-murray/ -> https://synergy.online/price/?version=lp-version-murray */
		$version = 'lp-version-murray';
		$PRODUCT_ID_MONTH = 66177976;
		$PRODUCT_ID_6_MONTH = 66178129;
		$PRODUCT_ID_12_MONTH = 66178221;
		$PRODUCT_ID_SUBS_SILVER = 66178908;
		$PRODUCT_ID_SUBS_GOLD = 66179043;
		$PRODUCT_ID_SUBS_PLATINUM = 66179187;
		$_['ru']['new-price__subtitle_1'] = 'Трансляция мастер-класса <span class="color-blue">Уина Мюррея</span> состоится на&nbsp;платформе Synergy.Online:';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$land = 'master-сlass-sbs';
		$landUnit = 'payments';
		$type = 'ticketless';
		$quote_id = 4377;
	break;

	case 'lp-version-peruquois': /* https://synergy.online/lp/version-peruquois/ -> https://synergy.online/price/?version=lp-version-peruquois */
		$version = 'lp-version-peruquois';
		$PRODUCT_ID_MONTH = 66177976;
		$PRODUCT_ID_6_MONTH = 66178129;
		$PRODUCT_ID_12_MONTH = 66178221;
		$PRODUCT_ID_SUBS_SILVER = 66178908;
		$PRODUCT_ID_SUBS_GOLD = 66179043;
		$PRODUCT_ID_SUBS_PLATINUM = 66179187;
		$_['ru']['new-price__subtitle_1'] = 'Трансляция мастер-класса <span class="color-blue">Перукуа</span> состоится на&nbsp;платформе Synergy.Online:';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$land = 'master-сlass-sbs';
		$landUnit = 'payments';
		$type = 'ticketless';
		$quote_id = 4377;
	break;

	case 'lp-version-elkharbotly': /* https://synergy.online/lp/version-elkharbotly/ -> https://synergy.online/price/?version=lp-version-elkharbotly */
		$version = 'lp-version-elkharbotly';
		$PRODUCT_ID_MONTH = 66177976;
		$PRODUCT_ID_6_MONTH = 66178129;
		$PRODUCT_ID_12_MONTH = 66178221;
		$PRODUCT_ID_SUBS_SILVER = 66178908;
		$PRODUCT_ID_SUBS_GOLD = 66179043;
		$PRODUCT_ID_SUBS_PLATINUM = 66179187;
		$_['ru']['new-price__subtitle_1'] = 'Трансляция мастер-класса <span class="color-blue">Мохамеда Эхаба Элкхарботли</span> состоится на&nbsp;платформе Synergy.Online:';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$land = 'master-сlass-sbs';
		$landUnit = 'payments';
		$type = 'ticketless';
	break;

	case 'lp-version-omer': /* https://synergy.online/lp/version-omer/ -> https://synergy.online/price/?version=lp-version-omer */
		$version = 'lp-version-omer';
		$PRODUCT_ID_MONTH = 66177976;
		$PRODUCT_ID_6_MONTH = 66178129;
		$PRODUCT_ID_12_MONTH = 66178221;
		$PRODUCT_ID_SUBS_SILVER = 66178908;
		$PRODUCT_ID_SUBS_GOLD = 66179043;
		$PRODUCT_ID_SUBS_PLATINUM = 66179187;
		$_['ru']['new-price__subtitle_1'] = 'Трансляция мастер-класса <span class="color-blue">Омера Экинджи</span> состоится на&nbsp;платформе Synergy.Online:';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$land = 'master-сlass-sbs';
		$landUnit = 'payments';
		$type = 'ticketless';
		$quote_id = 4377;
	break;

	case 'lp-version-liker': /* https://synergy.online/lp/version-liker/ -> https://synergy.online/price/?version=lp-version-liker */
		$version = 'lp-version-liker';
		$PRODUCT_ID_MONTH = 66177976;
		$PRODUCT_ID_6_MONTH = 66178129;
		$PRODUCT_ID_12_MONTH = 66178221;
		$PRODUCT_ID_SUBS_SILVER = 66178908;
		$PRODUCT_ID_SUBS_GOLD = 66179043;
		$PRODUCT_ID_SUBS_PLATINUM = 66179187;
		$_['ru']['new-price__subtitle_1'] = 'Трансляция мастер-класса <span class="color-blue">Джеффри Лайкера</span> состоится на&nbsp;платформе Synergy.Online:';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$land = 'master-сlass-sbs';
		$landUnit = 'payments';
		$type = 'ticketless';
		$quote_id = 4377;
	break;

	case 'lp-version-osterwalder': /* https://synergy.online/lp/version-osterwalder/ -> https://synergy.online/price/?version=lp-version-osterwalder */
		$version = 'lp-version-osterwalder';
		$PRODUCT_ID_MONTH = 66177976;
		$PRODUCT_ID_6_MONTH = 66178129;
		$PRODUCT_ID_12_MONTH = 66178221;
		$PRODUCT_ID_SUBS_SILVER = 66178908;
		$PRODUCT_ID_SUBS_GOLD = 66179043;
		$PRODUCT_ID_SUBS_PLATINUM = 66179187;
		$_['ru']['new-price__subtitle_1'] = 'Трансляция мастер-класса <span class="color-blue">Александра Остервальда</span> состоится на&nbsp;платформе Synergy.Online:';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$land = 'master-сlass-sbs';
		$landUnit = 'payments';
		$type = 'ticketless';
		$quote_id = 4377;
	break;

	case 'lp-version-robert': /* https://synergy.online/lp/version-kigan/ */
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
	$external_forum_name = 'мастер-класса Роберта Кигана';
	$_['ru']['price-header__title'] = '<span>Спасибо за&nbsp;регистрацию <br>на&nbsp;мастер-класс Роберта Кигана!</span> <br>Чтобы завершить регистрацию, <br>выберите пакет участия';
	$_['ru']['price-card-option-access-sof-48h'] = "Доступ к&nbsp;записи мастер-класса Роберта Кигана в&nbsp;рамках {$external_forum_name}";
	$_['ru']['price-card-option-access-sof-unlim'] = "Неограниченный доступ к&nbsp;записи мастер-класса Роберта Кигана в&nbsp;рамках {$external_forum_name}";
	break;

	case 'email':
	$_['ru']['price-payment__title'] = 'Содержание пакетов участия';
	break;

	case 'biohacking':
	$is_block_main_biohacking = true;
	$version_main_speaker['id'] = '';
	$version_main_speaker['date'] = '22.08';
	$body_class = 'version-belozerskaya version-alepko version-skulachev version-shilova version-metelitsa version-shimanskaya version-isaev version-kovalev version-karkukli version-popovv';
	break;

	case 'legal':
	$is_block_main_legal = true;
	$version_main_speaker['id'] = '';
	$version_main_speaker['date'] = '05.09';
	$body_class = 'version-belozerskaya version-alepko version-skulachev version-shilova version-metelitsa version-shimanskaya version-isaev version-kovalev version-karkukli version-popovv';
	break;

	case 'marketingforum':
	$BASE_HREF = '//synergyglobal.ru/';
	$gtm = 'GTM-XXXXXX';
	$PRODUCT_ID_ECONOMY = '';
	$external_forum_name = 'Synergy Marketing Forum';
	$_['ru']['price-card-option-access-sof-1d'] = "Доступ к&nbsp;трансляции {$external_forum_name}";
	$_['en']['price-card-option-access-sof-1d'] = "Access to&nbsp;the broadcast of&nbsp;{$external_forum_name}";
	$_['ru']['price-card-option-access-sof-48h'] = "Доступ к&nbsp;записи трансляции {$external_forum_name} на&nbsp;48&nbsp;часов";
	$_['en']['price-card-option-access-sof-48h'] = "Access to&nbsp;the video record of&nbsp;{$external_forum_name} broadcast for 48&nbsp;hours";
	$_['ru']['price-card-option-access-sof-unlim'] = "Неограниченный доступ к&nbsp;записи {$external_forum_name}";
	$_['en']['price-card-option-access-sof-unlim'] = "Unlimited access to&nbsp;the video record of&nbsp;{$external_forum_name}";

	break;

	case 'lp-top-brown':		
	case 'lp-top-taleb':
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/';  /*Переопределяем base_href для страницы прайс*/
	}
	break;
	
	default:
	$link = 'price-new/';
	break;
} // $version


/* external_url - для страниц price, которые показываются на других лендах */
switch ($external_url) {
	case 'platform':
	$PRODUCT_ID_DEMO = 56913349;
	$PRICE_DEMO = '1'; /* https://sd.synergy.ru/Task/View/548561 */
	$PRODUCT_ID_ECONOMY = '';

	$_['ru']['price-payment-button'] = 'Получить демо-доступ';
	$_['en']['price-payment-button'] = 'Get demo access';
	$_['ru']['price-card-option-cancel-free'] = "*При оформлении подписки с&nbsp;вашего счета будет снят и&nbsp;возвращен платеж в&nbsp;размере 1&nbsp;руб. По&nbsp;истечении пробного периода вы&nbsp;автоматически будете переключены на&nbsp;тариф Standard ({$PRICE_STANDARD}&nbsp;руб.&nbsp;в&nbsp;мес.) и&nbsp;произойдет списание первого платежа в&nbsp;{$PRICE_STANDARD}&nbsp;руб. Отменить подписку можно в&nbsp;личном кабинете.";
	$_['en']['price-card-option-cancel-free'] = "*When you sign up&nbsp;for a&nbsp;subscription, a&nbsp;payment of&nbsp;1&nbsp;RUB will be&nbsp;charged and refunded to&nbsp;your account. After expiration of&nbsp;the trial period, you will be&nbsp;automatically switched to&nbsp;the Standard tariff (1,500 rubles per month) and the first payment of&nbsp;1,500 rubles will be&nbsp;debited, unless you cancel your subscription in&nbsp;your Personal account.";
	$_['ru']['price-card-option-access-base-7d'] = 'Бесплатный демо-доступ на&nbsp;7&nbsp;дней в&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo;';

	if ($version != 'blogger' && $version != 'tv' && $version != 'retargeting' && $lang != 'en') {
		$PRODUCT_ID_DEMO = 71666127;
		$PRODUCT_ID_STANDARD = '';
		$PRODUCT_ID_BUSINESS = '';
		$PRODUCT_ID_VIP = '';
		$PRODUCT_ID_SILVER = '';
		$PRODUCT_ID_GOLD = '';
		$PRODUCT_ID_PLATINUM = '';
		$version_price_demo_option = '
		<div class="price-card__list-wrap">
		<span class="price-card__list-item price-card__list-item_1">&mdash;&nbsp;Месяц полного доступа к&nbsp;платформе</span>
		<span class="price-card__list-item price-card__list-item_2">&mdash;&nbsp;Доступ к&nbsp;записям Synergy Woman Forum</span>
		<span class="price-card__list-item price-card__list-item_3">&mdash;&nbsp;База знаний с&nbsp;10&nbsp;000 + часов контента</span>
		</div>
		';
		$_['ru']['price-header__title'] = '<span>Чтобы завершить регистрацию,</span> <br>оформите бесплатную подписку';
		$_['ru']['price-payment__title'] = 'Содержание пакета';
		$_['ru']['popup-price__button-get'] = 'Отправить';
		$_['ru']['popup-price-form__title_demo'] = 'Получить бесплатный <br> демо-доступ на&nbsp;1 месяц';
		$_['ru']['price-card-option-access-base-7d'] = 'Доступ к&nbsp;еженедельным онлайн-форумам &laquo;Синергии&raquo; <br><br> Доступ к&nbsp;записи Synergy Online Forum <br><br> Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo;';
		$_['ru']['popup-price-form__payback-text'] = 'БЕСПЛАТНО*';
		// $_['ru']['price-card-option-cancel-free'] = "*При оформлении подписки с&nbsp;вашего счета будет снят и&nbsp;возвращен платеж в&nbsp;размере 1&nbsp;руб. По&nbsp;истечении пробного периода вы&nbsp;автоматически будете переключены на&nbsp;тариф BUSINESS ({$PRICE_BUSINESS}&nbsp;руб.&nbsp;в&nbsp;мес.) и&nbsp;произойдет списание первого платежа в&nbsp;{$PRICE_BUSINESS}&nbsp;руб. Отменить подписку можно в&nbsp;личном кабинете.";
		$_['ru']['price-card-option-cancel-free'] = "*Для подписки требуется привязать банковскую карту. С&nbsp;вашей карты спишется и&nbsp;тут&nbsp;же вернется 1&nbsp;руб. Через месяц вы&nbsp;будете автоматически переключены на&nbsp;стандартную подписку стоимостью {$PRICE_STANDARD}&nbsp;р./мес. Вы&nbsp;можете отменить подписку в&nbsp;любой момент в&nbsp;личном кабинете.";
	}
	if ($version == 'blogger' || $version == 'tv') {
		$PRODUCT_ID_DEMO = 57437873;
		$_['ru']['price-card-option-access-base-24h'] = '72-часовой доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo;';
		$_['en']['price-card-option-access-base-24h'] = '72 hour access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events';
	}
	if ( $lang == 'en' ) {
		$version = 'en';
		$phone1 = '';
		$phone2 = '';
		$version_price_form = 'stripeRecurent';
		$PRODUCT_ID_STANDARD = 57860983;
		$PRODUCT_ID_BUSINESS = 57860985;
		$PRODUCT_ID_VIP = 57860988;
		$version_currency = 'usd';
		$_['en']['price-header__title'] = '<span>Please proceed with the payment</span> <br>to&nbsp;complete your registration';
		$_['en']['price-payment__button-pay'] = 'Check out';
		UpdatePrices();
	}
	break;

	case 'synergywoman': /* https://synergywoman.ru/price/ */
		$gtm = 'GTM-W3BD45Z';
		$_['ru']['price-header__title'] = 'ЧТОБЫ ПОЛУЧИТЬ ДОСТУП К ЗАПИСЯМ SYNERGY WOMAN FORUM,<br>ОФОРМИТЕ БЕСПЛАТНУЮ DEMO-ПОДПИСКУ';
		$PRODUCT_ID_ECONOMY = '';
		$external_forum_name = 'Synergy Woman Forum';
		$link_price = 'https://synergy.online/lp/synergywoman/thanks/';		
		$price_only_open = true;

		switch ($version) {
			case 'gilbert-price':
			$external_forum_name = 'мастер-класса Элизабет Гилберт в&nbsp;рамках Synergy Woman Forum';
			$_['ru']['price-header__title'] = '<span>Спасибо за&nbsp;регистрацию на&nbsp;онлайн<br>мастер-класс Элизабет Гилберт!</span><br>Чтобы завершить регистрацию,<br>выберите пакет участия';
			$PRODUCT_ID_ECONOMY = '60117310';
			break;

			case 'gilbert-noprice':
			$external_forum_name = 'мастер-класса Элизабет Гилберт в&nbsp;рамках Synergy Woman Forum';
			$_['ru']['price-header__title'] = '<span>Спасибо за&nbsp;регистрацию на&nbsp;онлайн<br>мастер-класс Элизабет Гилберт!</span><br>Чтобы завершить регистрацию,<br>выберите пакет участия';
			break;

			case 'asi':
			$_['ru']['price-header__title'] = '<span>Чтобы завершить регистрацию,</span> <br>оплатите пакет участия';
			$_['ru']['price-payment__title'] = 'Содержание пакета';
			$PRICE_STANDARD_NAME = 'SYNERGY.ONLINE УЧАСТИЕ В SYNERGY WOMAN FORUM';
			$PRODUCT_ID_DEMO = '';
			$PRODUCT_ID_ECONOMY = '';
			$PRODUCT_ID_STANDARD = '60423925';

			/* Цена прилетает в $PRICE_STANDARD неправильная, поэтому здесь зародился элегантный костыль. Если все заработало правильно, костыль (условие) можно просто удалить. */
			if(!empty($JSONDATA)){
				foreach($JSONDATA->Prices as $product){
					if($product->productId == $PRODUCT_ID_STANDARD){
						$PRICE_STANDARD = $product->price[0]->PRICE;
						break;
					}
				}
			}
			$PRODUCT_ID_BUSINESS = '';
			$PRODUCT_ID_VIP = '';
			$PRODUCT_ID_SILVER = '';
			$PRODUCT_ID_GOLD = '';
			$PRODUCT_ID_PLATINUM = '';
			break;
		};
		$_['ru']['price-card-option-access-base-7d'] = "Демо-доступ к&nbsp;записи {$external_forum_name} на&nbsp;14&nbsp;дней всего за&nbsp;1&nbsp;₽";
		$_['ru']['price-card-option-access-sof-1d'] = "Доступ к&nbsp;трансляции {$external_forum_name}";
		$_['en']['price-card-option-access-sof-1d'] = "Access to&nbsp;the broadcast of&nbsp;{$external_forum_name}";
		$_['ru']['price-card-option-access-sof-48h'] = "Доступ к&nbsp;записи трансляции {$external_forum_name} на&nbsp;48&nbsp;часов";
		$_['en']['price-card-option-access-sof-48h'] = "Access to&nbsp;the video record of&nbsp;{$external_forum_name} broadcast for 48&nbsp;hours";
		$_['ru']['price-card-option-access-sof-unlim'] = "Неограниченный доступ к&nbsp;записи {$external_forum_name}";
		$_['en']['price-card-option-access-sof-unlim'] = "Unlimited access to&nbsp;the video record of&nbsp;{$external_forum_name}";

		$version_price_demo_option = '
		<div class="top">
		<p class="card-list">&mdash;&nbsp;Доступ к&nbsp;записям Synergy Woman Forum</p>
		<p class="card-list">&mdash;&nbsp;14&nbsp;дней полного доступа к&nbsp;платформе Synergy.Online</p>
		<p class="card-list">&mdash;&nbsp;База знаний с&nbsp;10&nbsp;000 + часов контента про бизнес и саморазвитие</p>
		</div>
		<div class="bottom">
		<p class="card-description">Для подписки требуется привязать банковскую карту.</p>
		<p class="card-description">С&nbsp;вашей карты спишется и&nbsp;тут&nbsp;же вернется 1&nbsp;рубль.</p>
		<p class="card-description">Через 14&nbsp;дней вы&nbsp;будете автоматически переключены на&nbsp;стандартную подписку стоимостью 1500&nbsp;р.&nbsp;/ мес.</p>
		<p class="card-description"><span>ЗА ДЕНЬ ДО СПИСАНИЯ СРЕДСТВ МЫ ОБЯЗАТЕЛЬНО ПРИШЛЁМ ВАМ EMAIL-ПИСЬМО С НАПОМИНАНИЕМ ОБ ЭТОМ.</span></p>
		<p class="card-description"><span>ВЫ&nbsp;МОЖЕТЕ ОТМЕНИТЬ ПОДПИСКУ В&nbsp;ЛЮБОЙ МОМЕНТ В&nbsp;ЛИЧНОМ КАБИНЕТЕ</span></p>
		</div>';
		$_['ru']['price-payment__button-pay'] ='ОФОРМИТЬ ПОДПИСКУ';
		$PRICE_DEMO_NAME = 'БЕСПЛАТНАЯ <span>DEMO-ПОДПИСКА</span> НА 14 ДНЕЙ';
		$_['ru']['price-payment-button'] = 'подписка DEMO';
		$_['ru']['popup-price-form__title_demo'] = 'Подписка <span> DEMO</span>';
		$PRODUCT_ID_DEMO = 65589769;
	break;

	case 'synergydigital': /* https://synergydigital.com/lp/price/ */
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/';  /*Переопределяем base_href для страницы прайс*/
		}
		$gtm = 'GTM-TTHJ9BZ';
		$partner = 'aiaengibarian';
		$partner_external = 'da_strb'; /* Партнерская метка только для основных продуктов (не языковых и академических) */
		$external_forum_name = 'Synergy Digital Forum';
		$_['ru']['price-card-option-access-sof-1d'] = "Доступ к&nbsp;трансляции {$external_forum_name}";
		$_['en']['price-card-option-access-sof-1d'] = "Access to&nbsp;the broadcast of&nbsp;{$external_forum_name}";
		$_['ru']['price-card-option-access-sof-48h'] = "Доступ к&nbsp;записи трансляции {$external_forum_name} на&nbsp;48&nbsp;часов";
		$_['en']['price-card-option-access-sof-48h'] = "Access to&nbsp;the video record of&nbsp;{$external_forum_name} broadcast for 48&nbsp;hours";
		$_['ru']['price-card-option-access-sof-unlim'] = "Неограниченный доступ к&nbsp;записи {$external_forum_name}";
		$_['en']['price-card-option-access-sof-unlim'] = "Unlimited access to&nbsp;the video record of&nbsp;{$external_forum_name}";

		$version_price_list_temlate1 = '
		<span class="price-card__list-item price-card__list-item_1">Участие в&nbsp;онлайн-интенсиве</span>
		<span class="price-card__list-item price-card__list-item_3">Видеозапись интенсива</span>
		<span class="price-card__list-item price-card__list-item_4">Доступ к&nbsp;Базе знаний (записи всех форумов Синергии)</span>
		<span class="price-card__list-item price-card__list-item_5">Доступ к&nbsp;онлайн курсам Digital Академии</span>
		<span class="price-card__list-item price-card__list-item_6">Обучение по&nbsp;программе Digital MBA Online</span>
		';
		$version_price_list_temlate2 = '
		<span class="price-card__list-item price-card__list-item_1">Участие в&nbsp;онлайн-интенсиве</span>
		<span class="price-card__list-item price-card__list-item_3">Видеозапись интенсива</span>
		<span class="price-card__list-item price-card__list-item_4">Доступ к&nbsp;Базе знаний (записи всех форумов Синергии)</span>
		<span class="price-card__list-item price-card__list-item_5">Доступ к&nbsp;онлайн курсам Digital Академии</span>
		';

		$version_price_standard_option = $version_price_list_temlate1;
		$version_price_business_option = $version_price_list_temlate1;
		$version_price_vip_option = $version_price_list_temlate1;

		$version_price_silver_option = "
		{$version_price_list_temlate2}
		<span class='price-card__list-item price-card__list-item_6'>Обучение по&nbsp;программе &laquo;Интернет маркетинг 3&nbsp;месяца&raquo;</span>
		";
		$version_price_gold_option = "
		{$version_price_list_temlate2}
		<span class='price-card__list-item price-card__list-item_6'>Обучение по&nbsp;программе &laquo;mini MBА Интернет Маркетинг&raquo;</span>
		";
		$version_price_platinum_option = "
		{$version_price_list_temlate2}
		<span class='price-card__list-item price-card__list-item_6'>Обучение по&nbsp;программе Digital MBA Online</span>
		";

		/*$PRODUCT_ID_ECONOMY = 57521180;*/
		$_['ru']['price-sbs__text_1'] = '<div>Доступ к&nbsp;онлайн-практикумам по&nbsp;актуальным темам&nbsp; </div><span>предпринимательство, менеджмент, личная эффективность, маркетинг и&nbsp;продажи.</span>';
		$_['en']['price-sbs__text_1'] = '<div>Access to&nbsp;online workshops on&nbsp;current topics&nbsp; </div><span>entrepreneurship, management, personal effectiveness, marketing and sales.</span>';
		$_['ru']['price-sbs__text_2'] = '<div>Спикеры</div><span>Ицхак Адизес, Брайан Трейси, Радислав Гандапас, Глеб Архангельский и&nbsp;многие другие ведущие эксперты.</span>';
		$_['en']['price-sbs__text_2'] = '<div>Speakers</div><span>Ichak Adizes, Brian Tracy, Radislav Gandapas, Gleb Arkhangelskiy, and many other leading experts.</span>';
		$_['ru']['price-header__title'] = '<span>Получите доступ к просмотру SDF 2020</span><div>Оплатите доступ к <span>Synergy.Online</span></div>';
		$_['ru']['popup-price-form__title'] = 'Регистрация на форум';
		$_['ru']['popup-price-form__footer-text-2'] = 'Нажимая на кнопку, я даю согласие на обработку персональных данных, получение рассылок, а также соглашаюсь с&nbsp;<a href="#privacy" class="fancybox-privacy-link" data-fancybox="" data-type="ajax">политикой конфиденциальности</a>';
		$_['ru']['thanks__container-2'] = "Теперь Вы&nbsp;в&nbsp;списке участников <br>{$external_forum_name}";
		$_['en']['thanks__container-2'] = "Now you are in&nbsp;the list of <br>Synergy {$external_forum_name}";

		$_['ru']['title'] = 'Synergy Digital Forum. 100+ спикеров со всего мира, 50+ часов экспертного контента, 5 сцен c онлайн-трансляцией.';
		$_['ru']['price-payment__title'] = 'Выберите тариф';
		$_['ru']['price-card-time-6m'] = '6 месяцев';
		$_['ru']['price-card-time-1y'] = '12 месяцев';

		// $external_styles = '
		// <link rel="stylesheet" href="price/css_synergydigital/style.css">
		// <link rel="stylesheet" href="price/css_synergydigital/responsive.css" media="(max-width: 1199px)">
		// ';
		$version_header_logo_1 = '
		<div class="header__logo header__logo_1">
		<img src="img/@price/synergydigital/header/sbs.svg" alt="">
		</div>
		';
		$version_header_logo_2 = '
		<div class="header__logo header__logo_1">
		<img src="img/@price/synergydigital/header/sdf-online.svg" alt="">
		</div>
		';

		$phone1 = '+7 (495) 280 78 16';
		$phone2 = '';
		$email = '';
	break;

	case 'synergydigitalplatform': /* https://synergy.online/lp/platform/synergydigital/price/ */
		$gtm = 'GTM-TTHJ9BZ';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$_['ru']['price-header__title'] = 'ЧТОБЫ ПОЛУЧИТЬ ДОСТУП К ЗАПИСЯМ SYNERGY DIGITAL FORUM 2020, <br>ОФОРМИТЕ БЕСПЛАТНУЮ DEMO-ПОДПИСКУ';


		$external_styles = '
		<link rel="stylesheet" href="price/css_synergydigitalplatform/style.css">
		<link rel="stylesheet" href="price/css_synergydigitalplatform/responsive.css" media="(max-width: 1199px)">
		';
		$version_header_logo_1 = '
		<div class="header__logo header__logo_1">
		<img src="img/@price/synergydigitalplatform/header/sbs.svg" alt="">
		</div>
		';
		$version_header_logo_2 = '
		<div class="header__logo header__logo_1">
		<img src="img/@price/synergydigitalplatform/header/sdf-online.svg" alt="">
		</div>
		';

		$phone1 = '+7 (495) 280 78 16';
		$phone2 = '';
		$email = '';
		$price_only_open = true;

		$PRODUCT_ID_DEMO = 65589769;
		$version_price_demo_option = '
		<div class="top">
		<p class="price-card__list-item price-card__list-item_1">Доступ к записям Synergy Digital Forum</p>
		<p class="price-card__list-item price-card__list-item_2">14&nbsp;дней полного доступа к&nbsp;платформе Synergy.Online</p>
		<p class="price-card__list-item price-card__list-item_3">База знаний с&nbsp;10&nbsp;000+ часов контента про бизнес и&nbsp;саморазвитие</p>
		</div>
		<div class="bottom">
		<p class="card-description">Для подписки требуется привязать банковскую карту. С&nbsp;вашей карты спишется и&nbsp;тут&nbsp;же вернется 1&nbsp;рубль. Через 14&nbsp;дней вы&nbsp;будете автоматически переключены на&nbsp;стандартную подписку стоимостью 1500&nbsp;р.&nbsp;/ мес.</p>
		<p class="card-description"><span>ЗА ДЕНЬ ДО СПИСАНИЯ СРЕДСТВ МЫ ОБЯЗАТЕЛЬНО ПРИШЛЁМ ВАМ EMAIL-ПИСЬМО С НАПОМИНАНИЕМ ОБ ЭТОМ. ВЫ&nbsp;МОЖЕТЕ ОТМЕНИТЬ ПОДПИСКУ В&nbsp;ЛЮБОЙ МОМЕНТ В&nbsp;ЛИЧНОМ КАБИНЕТЕ</span></p>
		</div>';
		
		$_['ru']['price-payment__button-pay'] ='ОФОРМИТЬ ПОДПИСКУ';
		$PRICE_DEMO_NAME = 'БЕСПЛАТНАЯ <br><span>DEMO-ПОДПИСКА</span> <br>НА 14 ДНЕЙ';
		$_['ru']['price-payment-button'] = 'подписка DEMO';
		$_['ru']['popup-price-form__title_demo'] = 'Подписка <span> DEMO</span>';


	break;

	case 'beautyforum': 	/* https://synergyglobal.ru/lp/beauty-forum/price */
		$gtm = 'GTM-M7T7GF';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$_['ru']['price-header__title'] = 'ЧТОБЫ ПОЛУЧИТЬ ДОСТУП К ТРАНСЛЯЦИИ SYNERGY BEAUTY FORUM, <br>ОФОРМИТЕ БЕСПЛАТНУЮ DEMO-ПОДПИСКУ';
		$_['ru']['popup-price-form__title'] = 'БЕСПЛАТНАЯ DEMO-ПОДПИСКА НА 14 ДНЕЙ';		
		$_['ru']['price-payment__button-pay'] ='ОФОРМИТЬ ПОДПИСКУ'; /* кнопка в карточке товара */

		$PRICE_DEMO_NAME = 'БЕСПЛАТНАЯ <br><span>DEMO-ПОДПИСКА</span> <br>НА 14 ДНЕЙ'; /* название в карточке товара */
		$_['ru']['price-payment-button'] = 'подписка DEMO';
		$_['ru']['popup-price__button-get'] = 'ОФОРМИТЬ ПОДПИСКУ'; /* кнопка купить в попап */
		$_['ru']['popup-price-form__title_demo'] = 'БЕСПЛАТНАЯ <br><span>DEMO-ПОДПИСКА</span> <br>НА 14 ДНЕЙ'; /* название в форме попап */


		$external_styles = '
		<link rel="stylesheet" href="price/css_beautyforum/style.css">
		<link rel="stylesheet" href="price/css_beautyforum/responsive.css" media="(max-width: 1199px)">
		';

		$phone1 = '8 495 787 8767';
		$phone2 = '';
		$email = '';
		$price_only_open = true;

		$PRODUCT_ID_DEMO = 65589769;
		$version_price_demo_option = '
		<div class="top">
		<p class="price-card__list-item price-card__list-item_1">Доступ к записям Synergy Beauty Forum</p>
		<p class="price-card__list-item price-card__list-item_2">14&nbsp;дней полного доступа к&nbsp;платформе Synergy.Online</p>
		<p class="price-card__list-item price-card__list-item_3">База знаний с&nbsp;10&nbsp;000+ часов контента про бизнес и&nbsp;саморазвитие</p>
		</div>
		<div class="bottom">
		<p class="card-description">Для подписки требуется привязать банковскую карту. С&nbsp;вашей карты спишется и&nbsp;тут&nbsp;же вернется 1&nbsp;рубль. Через 14&nbsp;дней вы&nbsp;будете автоматически переключены на&nbsp;стандартную подписку стоимостью 1500&nbsp;р.&nbsp;/ мес. - тариф Standard</p>
		<p class="card-description"><span>ЗА ДЕНЬ ДО СПИСАНИЯ СРЕДСТВ МЫ ОБЯЗАТЕЛЬНО ПРИШЛЁМ ВАМ EMAIL-ПИСЬМО С НАПОМИНАНИЕМ ОБ ЭТОМ. ВЫ&nbsp;МОЖЕТЕ ОТМЕНИТЬ ПОДПИСКУ В&nbsp;ЛЮБОЙ МОМЕНТ В&nbsp;ЛИЧНОМ КАБИНЕТЕ</span></p>
		</div>';


	break;

	case 'kotlerprice': 	/* https://synergy.online/lp/version-kotler/price */
		$gtm = 'GTM-M7T7GF';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$_['ru']['price-header__title'] = 'ЧТОБЫ ПОЛУЧИТЬ ДОСТУП К ЗАПИСИ МАСТЕР-КЛАССА ФИЛИПА КОТЛЕРА, <br>ОФОРМИТЕ БЕСПЛАТНУЮ DEMO-ПОДПИСКУ';
		$_['ru']['popup-price-form__title'] = 'БЕСПЛАТНАЯ DEMO-ПОДПИСКА НА 14 ДНЕЙ';
		$_['ru']['price-payment__button-pay'] ='ОФОРМИТЬ ПОДПИСКУ'; /* кнопка в карточке товара */

		$PRICE_DEMO_NAME = 'БЕСПЛАТНАЯ <br><span>DEMO-ПОДПИСКА</span> <br>НА 14 ДНЕЙ'; /* название в карточке товара */
		$_['ru']['price-payment-button'] = 'подписка DEMO';
		$_['ru']['popup-price__button-get'] = 'ОФОРМИТЬ ПОДПИСКУ'; /* кнопка купить в попап */
		$_['ru']['popup-price-form__title_demo'] = 'БЕСПЛАТНАЯ <br><span>DEMO-ПОДПИСКА</span> <br>НА 14 ДНЕЙ'; /* название в форме попап */


		$external_styles = '
		<link rel="stylesheet" href="price/css_kotlerprice/style.css">
		<link rel="stylesheet" href="price/css_kotlerprice/responsive.css" media="(max-width: 1199px)">
		<link rel="stylesheet" href="css/price-new-style.css">
		<link rel="stylesheet" href="css/price-new-responsive.css" media="(max-width: 1199px)">
		';

		// $phone1 = '8 495 787 8767';
		// $phone2 = '';
		// $email = '';
		$price_only_open = true;

		$PRODUCT_ID_DEMO = 65589769;
		$version_price_demo_option = '
		<div class="top">
		<p class="price-card__list-item price-card__list-item_1">Доступ к записи мастер-класса Филипа Котлера</p>
		<p class="price-card__list-item price-card__list-item_2">14&nbsp;дней полного доступа к&nbsp;платформе Synergy.Online</p>
		<p class="price-card__list-item price-card__list-item_3">База знаний с&nbsp;10&nbsp;000+ часов контента про бизнес и&nbsp;саморазвитие</p>
		</div>
		<div class="bottom">
		<p class="card-description">Для подписки требуется привязать банковскую карту. С&nbsp;вашей карты спишется и&nbsp;тут&nbsp;же вернется 1&nbsp;рубль. Через 14&nbsp;дней вы&nbsp;будете автоматически переключены на&nbsp;стандартную подписку стоимостью 1500&nbsp;р.&nbsp;/ мес. - тариф Standard</p>
		<p class="card-description"><span>ЗА ДЕНЬ ДО СПИСАНИЯ СРЕДСТВ МЫ ОБЯЗАТЕЛЬНО ПРИШЛЁМ ВАМ EMAIL-ПИСЬМО С НАПОМИНАНИЕМ ОБ ЭТОМ. ВЫ&nbsp;МОЖЕТЕ ОТМЕНИТЬ ПОДПИСКУ В&nbsp;ЛЮБОЙ МОМЕНТ В&nbsp;ЛИЧНОМ КАБИНЕТЕ</span></p>
		</div>';


	break;

	case 'brain2020': /* https://synergyglobal.ru/forums/brain2021/price/ */
	$gtm = 'GTM-M7T7GF';
	$PRODUCT_ID_ECONOMY = '';
	$external_forum_name = 'Brain Forum';
	//$_['ru']['price-card-option-access-sof-1d'] = "Доступ к&nbsp;трансляции {$external_forum_name}";
	//$_['en']['price-card-option-access-sof-1d'] = "Access to&nbsp;the broadcast of&nbsp;{$external_forum_name}";
	//$_['ru']['price-card-option-access-sof-48h'] = "Доступ к&nbsp;записи трансляции {$external_forum_name} на&nbsp;48&nbsp;часов";
	//$_['en']['price-card-option-access-sof-48h'] = "Access to&nbsp;the video record of&nbsp;{$external_forum_name} broadcast for 48&nbsp;hours";
	//$_['ru']['price-card-option-access-sof-unlim'] = "Неограниченный доступ к&nbsp;записи {$external_forum_name}";
	//$_['en']['price-card-option-access-sof-unlim'] = "Unlimited access to&nbsp;the video record of&nbsp;{$external_forum_name}";
	$external_styles = '
	<link rel="stylesheet" href="price/css_brain/style.css">
	<link rel="stylesheet" href="price/css_brain/responsive.css" media="(max-width: 1199px)">
	';

	$econom_quote_id = '4246';

	$PRICE_ECONOMY 			= $brain2021_online_price;
	$PRODUCT_ID_ECONOMY = $product_brain2021_id_online;
	$PRICE_ECONOMY_NAME = $product_brain2021_online_name;
	$econom_unit = 'payments';
	$econom_type = 'ticketless';
	$econom_land = '';
	$econom_event_id = '';
	$econom_form_type = '';

	$version_price_economy_option = '
		<span>Трансляция всех дней форума</span>
		<span>Запись на портале synergy.online в течении 2-х недель</span>
	';

	$quote_id_tickets = '4460';

	$PRICE_BUSINESS 			= $brain2021_offline_business_price;
	$PRODUCT_ID_BUSINESS 	= $product_brain2021_id_offline_business;
	$PRICE_BUSINESS_NAME 	= $product_brain2021_offline_business_name;

	$version_price_business_option = '
	<span>Очное участие и&nbsp;аккредитация в&nbsp;категории &laquo;Business&raquo;:</span>
	<span>Сертификат об&nbsp;участии</span>
	<span>Сопровождение искусственным интеллектом на&nbsp;протяжении всего форума</span>
	<span>Пакет участника</span>
	<span>Устройство синхронного перевода</span>
	<span>Доступ к&nbsp;Базе знаний Школы Бизнеса Синергия на&nbsp;1&nbsp;месяца</span>
	<span>Подарки от&nbsp;партнеров и&nbsp;спонсоров</span>
	';

	$PRICE_VIP 			= $brain2021_offline_vip_price;
	$PRODUCT_ID_VIP = $product_brain2021_id_offline_vip;
	$PRICE_VIP_NAME = $product_brain2021_offline_vip_name;

	$version_price_vip_option = '
	<span>Очное участие и&nbsp;аккредитация в&nbsp;категории &laquo;Vip&raquo;:</span>
	<span>Сертификат об&nbsp;участии</span>
	<span>Сопровождение искусственным интеллектом на&nbsp;протяжении всего форума</span>
	<span>Пакет участника</span>
	<span>Устройство синхронного перевода</span>
	<span>Доступ к&nbsp;VIP lounge на&nbsp;протяжении форума</span>
	<span>VIP&nbsp;&mdash; обед</span>
	<span>Доступ к&nbsp;Базе знаний Школы Бизнеса Синергия на&nbsp;6&nbsp;месяцев</span>
	<span>Подарки от&nbsp;партнеров и&nbsp;спонсоров</span>
	';


	$PRICE_PLATINUM 			= $brain2021_offline_platinum_price;
	$PRODUCT_ID_PLATINUM 	= $product_brain2021_id_offline_platinum;
	$PRICE_PLATINUM_NAME 	= $product_brain2021_offline_platinum_name;

	$version_price_platinum_option = '
	<span>Очное участие и&nbsp;аккредитация в&nbsp;категории &laquo;Platinum&raquo;</span>
	<span>Сертификат об&nbsp;участии</span>
	<span>Сопровождение искусственным интеллектом на&nbsp;протяжении всего форума</span>
	<span>Пакет участника</span>
	<span>Устройство синхронного перевода</span>
	<span>Welcome&nbsp;&mdash; сервис</span>
	<span>Доступ к&nbsp;VIP lounge на&nbsp;протяжении форума</span>
	<span>VIP&nbsp;&mdash; обед</span>
	<span>Доступ к&nbsp;Базе знаний Школы Бизнеса Синергия на&nbsp;12&nbsp;месяцев</span>
	<span>Специальные подарки от&nbsp;партнеров и&nbsp;спонсоров форума</span>
	<span>Подарки от&nbsp;партнеров и&nbsp;спонсоров</span>
	<span>Доступ к&nbsp;спикерам</span>
	';

	$PRODUCT_ID_STANDARD 	= '';
	$PRODUCT_ID_SILVER 		= '';
	$PRODUCT_ID_GOLD 			= '';
	break;

	case 'artrussia': /* https://artrussiaonline.com/price/ */
	$gtm = 'GTM-WRFXPC6';
	$PRODUCT_ID_ECONOMY = '';
	$external_forum_name = 'Art Russia';
	$_['ru']['price-card-option-access-sof-1d'] = "Доступ к&nbsp;трансляции {$external_forum_name}";
	$_['en']['price-card-option-access-sof-1d'] = "Access to&nbsp;the broadcast of&nbsp;{$external_forum_name}";
	$_['ru']['price-card-option-access-sof-48h'] = "Доступ к&nbsp;записи трансляции {$external_forum_name} на&nbsp;48&nbsp;часов";
	$_['en']['price-card-option-access-sof-48h'] = "Access to&nbsp;the video record of&nbsp;{$external_forum_name} broadcast for 48&nbsp;hours";
	$_['ru']['price-card-option-access-sof-unlim'] = "Неограниченный доступ к&nbsp;записи {$external_forum_name}";
	$_['en']['price-card-option-access-sof-unlim'] = "Unlimited access to&nbsp;the video record of&nbsp;{$external_forum_name}";
	$version_price_vip_option = '<span class="price-card__list-item">Электронная версия журнала о&nbsp;современном искусстве и&nbsp;арт-бизнесе Art Synergy</span>';
	$version_price_silver_option = '<span class="price-card__list-item">Электронная версия журнала о&nbsp;современном искусстве и&nbsp;арт-бизнесе Art Synergy</span>';
	$version_price_gold_option = '
	<span class="price-card__list-item">Электронная версия журнала о&nbsp;современном искусстве и&nbsp;арт-бизнесе Art Synergy</span>
	<span class="price-card__list-item">Один из&nbsp;онлайн курсов по&nbsp;искусству от&nbsp;Synergy Art Academy на&nbsp;выбор (История искусства или История ювелирного искусства)</span>
	';
	$version_price_platinum_option = '
	<span class="price-card__list-item">Электронная версия журнала о&nbsp;современном искусстве и&nbsp;арт-бизнесе Art Synergy</span>
	<span class="price-card__list-item">Один из&nbsp;онлайн курсов по&nbsp;искусству от&nbsp;Synergy Art Academy на&nbsp;выбор (История искусства или История ювелирного искусства)</span>
	';
	if ($lang == 'en') {
		$PRODUCT_ID_SILVER 	= '';
		$PRODUCT_ID_GOLD	= '';
		$PRODUCT_ID_PLATINUM = '';
		$PRODUCT_ID_BACHELOR = '';
		$PRODUCT_ID_MAGISTER = '';
		$PRODUCT_ID_POSTGRADUATE = '';
		$PRODUCT_ID_READY = '';
		$PRODUCT_ID_STEADY = '';
		$PRODUCT_ID_RUN = '';
	}
	break;

	case 'sef': /* https://synergyglobal.ru/forums/sef/2020/price/ */
	$gtm = 'GTM-MWSF5ZN';
	$PRODUCT_ID_ECONOMY = '';
	$external_forum_name = 'Synergy Executive Forum';
	$_['ru']['price-card-option-access-sof-1d'] = "Доступ к&nbsp;трансляции {$external_forum_name}";
	$_['en']['price-card-option-access-sof-1d'] = "Access to&nbsp;the broadcast of&nbsp;{$external_forum_name}";
	$_['ru']['price-card-option-access-sof-48h'] = "Доступ к&nbsp;записи трансляции {$external_forum_name} на&nbsp;48&nbsp;часов";
	$_['en']['price-card-option-access-sof-48h'] = "Access to&nbsp;the video record of&nbsp;{$external_forum_name} broadcast for 48&nbsp;hours";
	$_['ru']['price-card-option-access-sof-unlim'] = "Неограниченный доступ к&nbsp;записи {$external_forum_name}";
	$_['en']['price-card-option-access-sof-unlim'] = "Unlimited access to&nbsp;the video record of&nbsp;{$external_forum_name}";
	break;

	case 'civilization': /* https://форумцивилизация.рф/price/ */
	$BASE_HREF = str_replace('xn--80adpcbacuftw0bk6ah9l.xn--p1ai', 'synergyglobal.ru', $BASE_HREF); /* горячая замена base href для версии на проде */
	$gtm = 'GTM-WTBRJ7';
	$PRODUCT_ID_ECONOMY = 58978143;
	$PRICE_ECONOMY_NAME = 'Стандарт';
	$PRICE_ECONOMY = '250';
	UpdatePrices();
	$_['ru']['price-payment-button'] = 'Купить';
	$_['ru']['price-card-option-access-sof-1d'] = 'Доступ к&nbsp;онлайн-трансляции форума &laquo;Цивилизация&raquo; 12&nbsp;июня';
	$_['ru']['price-card-option-cancel-free'] = '';
	$phone1 = '+7 (495) 744-55-97';
	$phone2 = '';
	$email = '';
	$external_styles = '
	<link rel="stylesheet" href="price/css_civilization/style.css">
	<link rel="stylesheet" href="price/css_civilization/responsive.css" media="(max-width: 1199px)">
	';
	$version_header_logo_1 = '
	<div class="header__logo header__logo_1">
	<a href="https://www.youtube.com/channel/UCmNDf2w5wy9m61bq7IqmWZg" target="_blank"><img src="img/@price/civilization/price/header/ch.svg" alt=""></a>
	</div>
	';
	$version_header_logo_2 = '
	<div class="header__logo header__logo_1">
	<a href="https://www.youtube.com/user/Fletcher2008" target="_blank"><img src="img/@price/civilization/price/header/pp.png" alt=""></a>
	</div>
	';
	break;

	case 'synergyonline': /* https://synergy.online */
	$gtm = 'GTM-TTN54WK';
	$phone1 = '8 800 707 41 77';
	$phone2 = '';
	$email = '';
	$is_block_about = true;
	$is_block_base = true;
	$is_block_services = true;
	break;

	case 'hrforum': /* https://synergy.online/lp/hrforum/price/ */
	$gtm = 'GTM-K77TBB';
	$phone1 = '+7 (495) 787-87-67';
	$phone2 = '';
	$PRODUCT_ID_ECONOMY = '';
	$external_forum_name = 'Synergy HR&nbsp;Forum';
	$_['ru']['new-price__subtitle_1'] = "Трансляция <span class='color-blue'>{$external_forum_name}</span> состоится на&nbsp;платформе Synergy.Online:";	
	$_['ru']['thanks__container-2'] = "Теперь Вы&nbsp;в&nbsp;списке участников {$external_forum_name}";
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}

	$land = 'hrforum_2020';
	$unitTicket = 'payments';
	$typeTicket = 'ticket';
	break;

	case 'financial': /* https://synergy.online/lp/financial/price/ */
	$gtm = 'GTM-TTN54WK';
	$phone1 = '+7 (495) 787-87-67';
	$phone2 = '';
	$PRODUCT_ID_ECONOMY = '';
	$external_forum_name = 'Форума &laquo;Финансовая грамотность&raquo;';
	$_['ru']['price-card-option-access-sof-48h'] = "Доступ к&nbsp;записи трансляции {$external_forum_name} на&nbsp;48&nbsp;часов";
	$_['ru']['price-card-option-access-sof-unlim'] = "Неограниченный доступ к&nbsp;записи {$external_forum_name}";
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
	$external_styles = '
	<link rel="stylesheet" href="price/css_financial/style.css">
	<link rel="stylesheet" href="price/css_financial/responsive.css" media="(max-width: 1199px)">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	';
	$version_header_logo_1 = '
	<div class="header__logo header__logo_1">
	<a href="https://synergy.ru/" target="_blank"><img src="img/@price/financial/header/logo.svg" alt="Университет Синергия"></a>
	</div>
	';

	$_['ru']['thanks__container-2'] = "Теперь Вы&nbsp;в&nbsp;списке участников {$external_forum_name}";

	// $land = 'hrforum_2020';
	// $unitTicket = 'payments';
	// $typeTicket = 'ticket';
	break;

	case 'developmentforum': /* https://synergy.online/lp/developmentforum/price/ */
	$gtm = 'GTM-TTN54WK';
	$phone1 = '+7 (495) 787-87-67';
	$phone2 = '';
	$product_id_offline = 65589763;

	$offline_land = 'developmentforum';	
	$offline_form_type = 'ticket';
	$offline_event_id = 157;
	$offline_quote_id = 4392;
	$external_forum_name = 'Synergy Development Forum';
	$_['ru']['new-price__subtitle_1'] = "Трансляция <span class='color-blue'>{$external_forum_name}</span> состоится на&nbsp;платформе Synergy.Online:";	
	$_['ru']['thanks__container-2'] = "Теперь Вы&nbsp;в&nbsp;списке участников {$external_forum_name}";	
	$_['ru']['price-card-offline-option-1'] = "Посещение закрытой встречи {$external_forum_name}";
	$_['ru']['price-card-offline-option-2'] = "Сертификат на&nbsp;15000 рублей на&nbsp;посещение аналитической конференции &laquo;Базовые стратегии 2021&raquo;";
	$_['ru']['price-card-offline-option-3'] = "VIP-категория на&nbsp;участие в&nbsp;{$external_forum_name}";
	if ( !is_local_dev() && !is_syndev() ) {
		$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
	}
	$external_styles = '
	<link rel="stylesheet" href="price-new/css_developmentforum/style.css">
	<link rel="stylesheet" href="price-new/css_developmentforum/responsive.css" media="(max-width: 1199px)">
	';
	$version_header_logo_1 = '
	<div class="header__logo header__logo_1">
	<a href="https://sbs.edu.ru/" target="_blank"><img src="img/@price/developmentforum/header/logo-s.svg" alt="Школа бизнеса Синергия"></a>
	</div>
	<div class="header__logo header__logo_1">
	<a href="https://sbs.edu.ru/" target="_blank"><img src="img/@price/developmentforum/header/vtb-ru.svg" alt="Школа бизнеса Синергия"></a>
	</div>
	';	
	$version_header_logo_2 = '
	<div class="header__logo header__logo_2">
	<a href="https://sbs.edu.ru/" target="_blank"><img src="img/@price/developmentforum/header/logo-mosbuild.png" alt="Школа бизнеса Синергия"></a>
	</div>
	<div class="header__logo header__logo_2">
	<a href="https://sbs.edu.ru/" target="_blank"><img src="img/@price/developmentforum/header/logo-v.svg" alt="Школа бизнеса Синергия"></a>
	</div>
	';
	break;

	case 'marketingforum': /* https://synergy.online/lp/marketingforum/price/ */
		$gtm = 'GTM-';
		$phone1 = '+7 (495) 787-87-67';
		$phone2 = '';
		$PRODUCT_ID_ECONOMY = '';
		$external_forum_name = 'Synergy Marketing Forum';
		$_['ru']['new-price__subtitle_1'] = "Трансляция <span class='color-blue'>{$external_forum_name}</span> состоится на&nbsp;платформе Synergy.Online:";
		$_['ru']['thanks__container-2'] = "Теперь Вы&nbsp;в&nbsp;списке участников {$external_forum_name}";
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}

		$land = 'synergymarketing';
		$unitTicket = 'payments';
		$typeTicket = 'ticket';
	break;

	case 'marketingforum-platform': /* https://synergy.online/lp/platform/marketingforum/price/ */
		$gtm = 'GTM-TTN54WK';
		$phone1 = '+7 (495) 787-87-67';
		$phone2 = '';
		$PRODUCT_ID_DEMO = 65589769;
		$PRICE_DEMO_NAME = "БЕСПЛАТНАЯ <br><span>DEMO-ПОДПИСКА</span><br> НА&nbsp;14&nbsp;ДНЕЙ";

		$version_price_demo_option = '
		<div class="price-card__item">&mdash;&nbsp;Доступ к&nbsp;записям Synergy Marketing Forum</div>
		<div class="price-card__item">&mdash;&nbsp;14&nbsp;дней полного доступа к&nbsp;платформе Synergy.Online</div>
		<div class="price-card__item">&mdash;&nbsp;База знаний с&nbsp;10&nbsp;000 + часов контента про бизнес и саморазвитие</div>
		<div class="price-card__item">Для подписки требуется привязать банковскую карту.</div>
		<div class="price-card__item">С&nbsp;вашей карты спишется и&nbsp;тут&nbsp;же вернется 1&nbsp;рубль.</div>
		<div class="price-card__item"><span>ЗА&nbsp;ДЕНЬ ДО&nbsp;СПИСАНИЯ СРЕДСТВ МЫ&nbsp;ОБЯЗАТЕЛЬНО ПРИШЛЁМ ВАМ EMAIL-ПИСЬМО С&nbsp;НАПОМИНАНИЕМ ОБ&nbsp;ЭТОМ.</span></div>
		<div class="price-card__item"><span>ВЫ&nbsp;МОЖЕТЕ ОТМЕНИТЬ ПОДПИСКУ В&nbsp;ЛЮБОЙ МОМЕНТ В&nbsp;ЛИЧНОМ КАБИНЕТЕ</span></div>
		';

		$link_price = 'https://synergy.online/lp/platform/marketingforum/thanks/';
		$_['ru']['new-price-card__button'] = "Подписаться";
		$external_forum_name = 'Synergy Marketing Forum';		
		$_['ru']['new-price__subtitle_1'] = "Чтобы получить доступ к записям <span class='color-blue'>{$external_forum_name}</span>, оформите бесплатную DEMO-подписку";
		$_['ru']['thanks__container-1'] = "<span class='color-blue'>Спасибо!</span>";
		$_['ru']['thanks__container-2'] = "Демо-доступ успешно оформлен. данные для входа на&nbsp;платформу придут вам на&nbsp;электронную почту.";
		$external_styles = '
		<link rel="stylesheet" href="price-new/css_marketingforum_platform/style.css">
		<link rel="stylesheet" href="price-new/css_marketingforum_platform/responsive.css" media="(max-width: 1199px)">
		';
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}

/* 		$land = 'synergymarketing';
		$unitTicket = 'payments';
		$typeTicket = 'ticket'; */
	break;


	case 'legalforum': /* https://synergy.online/lp/legalforum/price/ */
		$gtm = 'GTM-TTN54WK';
		$phone1 = '+7 (495) 787-87-67';
		$phone2 = '';

		$offline_land = 'legal_forum';	
		$offline_form_type = 'ticket';

		$offline_type ='ticketless';
		$offline_unit ='payments';

		$offline_event_id = 161;
		$offline_quote_id = 4416;

		$product_offline_name = $product_legalforum_offline_name;
		$product_id_offline = $product_legalforum_id_offline;
		$offline_price = $legalforum_offline_price;
		$offline_isRecurring = $legalforum_offline_isRecurring;

		$product_offline_standard_name = $product_legalforum_offline_standard_name;
		$product_id_offline_standard = $product_legalforum_id_offline_standard;
		$offline_standard_price = $legalforum_offline_standard_price;
		$offline_standard_isRecurring = $legalforum_offline_standard_isRecurring;

		$product_offline_business_name = $product_legalforum_offline_business_name;
		$product_id_offline_business = $product_legalforum_id_offline_business;
		$offline_business_price = $legalforum_offline_business_price;
		$offline_business_isRecurring = $legalforum_offline_business_isRecurring;

		$product_offline_vip_name = $product_legalforum_offline_vip_name;
		$product_id_offline_vip = $product_legalforum_id_offline_vip;
		$offline_vip_price = $legalforum_offline_vip_price;
		$offline_vip_isRecurring = $legalforum_offline_vip_isRecurring;

		$external_forum_name = 'Synergy Legal Forum';
		$link_price = 'https://synergy.online/lp/legalforum/thanks/';	

		$_['ru']['new-price__subtitle_1'] = "Трансляция <span class='color-blue'>{$external_forum_name}</span> состоится на&nbsp;платформе Synergy.Online:";	
		$_['ru']['thanks__container-2'] = "Теперь Вы&nbsp;в&nbsp;списке участников {$external_forum_name}";				
		$_['ru']['price-card-offline-option-1'] = "Посещение закрытой встречи {$external_forum_name}";
		$_['ru']['price-card-offline-option-2'] = "Нетворкинг зона";
		$_['ru']['price-card-offline-option-3'] = "Пакет участника";

		$version_price_offline_option = '
		<div class="price-card__item d-block">
			<div class="price-card__item-title">Доступ к&nbsp;онлайн-трансляции</div>
		</div>
		<div class="price-card__item d-block">
			<div class="price-card__item-title">Доступ к&nbsp;платформе Synergy.Online на&nbsp;месяц</div>
		</div>
		';

		$version_price_offline_business_option = '
		<div class="price-card__item">
			<div class="price-card__item-title">Обед</div>
		</div>
		';
		$version_price_offline_vip_option = '
		<div class="price-card__item">
			<div class="price-card__item-title">Обед</div>
		</div>
		<div class="price-card__item">
			<div class="price-card__item-title">Двухчасовая консультация от&nbsp;экспертов ЛКП</div>
		</div>
		';
		
		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
		$external_styles = '
		<link rel="stylesheet" href="price-new/css_legalforum/style.css">
		<link rel="stylesheet" href="price-new/css_legalforum/responsive.css" media="(max-width: 1199px)">
		';
		$version_header_logo_1 = '
		<div class="header__logo header__logo_1">
		<a href="https://sbs.edu.ru/" target="_blank"><img src="img/@price/legalforum/header/logo-s.svg" alt="Школа бизнеса Синергия"></a>
		</div>
		<div class="header__logo header__logo_1">
		<a href="https://sbs.edu.ru/" target="_blank"><img src="img/@price/legalforum/header/vtb-ru.svg" alt="Школа бизнеса Синергия"></a>
		</div>
		';	
		$version_header_logo_2 = '';
	break;

	case 'synergy_online_new': /* https://synergy.online/lp/platform/new/price/ */
		$gtm = 'GTM-TTN54WK';
		$phone1 = '8 800 200 54 40';
		$phone2 = '';
		$PRODUCT_ID_DEMO = 65589769;
		$version_price_demo_option = '
		<div class="price-card__item">&mdash;&nbsp;14 дней полного доступа к платформе</div>
		<div class="price-card__item">&mdash;&nbsp;Доступ к записям форумов, мастер-классов и вебинаров</div>
		<div class="price-card__item">&mdash;&nbsp;База знаний с 10 000 + часов контента</div>
		';

		$link_price = 'https://synergy.online/lp/platform/new/thanks/';

		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
	break;
		

	case 'platform_new': /* https://synergy.online/lp/platform/new/price/ */
		$gtm = 'GTM-TTN54WK';
		$phone1 = '8 800 200 54 40';
		$phone2 = '';

		$PRODUCT_ID_DEMO = 65589769;
		$PRODUCT_ID_STANDARD = '';
		$PRODUCT_ID_BUSINESS = '';
		$PRODUCT_ID_VIP = '';
		$PRODUCT_ID_SILVER = '';
		$PRODUCT_ID_GOLD = '';
		$PRODUCT_ID_PLATINUM = '';		
		$PRICE_DEMO_CLASS = 'price-only-open';
		$event_id = '';
		
		$version_price_demo_option = '
		<div class="price-card__list-wrap">
			<span class="price-card__list-item price-card__list-item_1">&mdash;&nbsp;14 дней полного доступа к платформе</span>
			<span class="price-card__list-item price-card__list-item_2">&mdash;&nbsp;Доступ к записям форумов, мастер-классов и вебинаров</span>
			<span class="price-card__list-item price-card__list-item_3">&mdash;&nbsp;База знаний с 10 000 + часов контента</span>
		</div>
		';

		$_['ru']['price-card-option-access-base-7d'] = '14-дневный доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo;';
		$_['en']['price-card-option-access-base-7d'] = 'Access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 14&nbsp;days';

		$link = 'https://synergy.online/lp/platform/new/thanks/';

		if ( !is_local_dev() && !is_syndev() ) {
			$BASE_HREF = '//synergyglobal.ru/'; /* Подмена base href для показа на зеркале */
		}
	break;




} // $external_url


/* Postprocess */
$phone_link = get_phone_link($phone1);
$phone_link_2 = get_phone_link($phone2);
$email_link = get_email_link($email);

$version_form_title = _('version_form_title');
$version_form_button = _('version_form_button');
$version_form_button_mobile = _('version_form_button_mobile');

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
	'&link=', urlencode($link),
	'&ignore-thanksall=1'
));


/* Functions */
function get_phone_link($phone, $text = '', $class = '', $protocol = '')
{
	if (!$phone) return;

	if (strpos($protocol, 'whatsapp') !== false) {
		$protocol = 'whatsapp://send?phone=';
		$phone = str_replace('+', '', $phone);
	}

	return '<a href="' . ($protocol ? $protocol : 'tel:') . preg_replace('/[^\\d\\+]/m', '', $phone) . '" target="_blank"' . ($class ? ' class="' . $class . '"' : '') . '>' . ($text ? $text : $phone) . '</a>';
}

function get_email_link($email, $text = '', $class = '')
{
	if (!$email) return;

	return '<a href="mailto:' . $email . '" target="_blank"' . ($class ? ' class="' . $class . '"' : '') . '>' . ($text ? $text : $email) . '</a>';
}
