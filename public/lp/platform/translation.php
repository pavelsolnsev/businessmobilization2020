<?php
/*
При добавлении перевода просьба в качестве ключа массива копипастом указывать класс блока/элемента (для простоты и удобства), в котором будет выводиться текст, например:
$_['ru']['price-header__title'] = '<span>Чтобы завершить регистрацию,</span> <br>выберите пакет участия';
$_['en']['price-header__title'] = '<span>Please, proceed the payment</span> <br>to&nbsp;complete your check&nbsp;in';

Если класс у элементов одинаковый, а тексты разные, через дефис добавлять дополнительный уникальный идентификатор, например:
$_['ru']['header__links-speakers'] = 'Спикеры';
$_['en']['header__links-speakers'] = 'Speakers';
$_['ru']['header__links-concept'] = 'Концепция';
$_['en']['header__links-concept'] = 'Concept';

Если это переменная в version.php, то в качестве ключа используем её же имя, например:
$_['ru']['version_form_title'] = 'Зарегистрироваться на&nbsp;форум';
$_['en']['version_form_title'] = 'Register to&nbsp;the Forum';

В коде перевод вставляется через функцию _(), например:
<?= _('price-header__title') ?>
$version_form_title = _('version_form_title');
*/


$_['ru']['title'] = 'Synergy Online Forum. 100+ спикеров со всего мира, 50+ часов экспертного контента, 5 сцен c онлайн-трансляцией. Хедлайнер – Ицхак Адизес';
$_['en']['title'] = 'Synergy Online Forum. 100+ speakers from all over the world, 50+ hours of expert-based content, 5 online streaming stages. Headliner – Ichak Adizes';

/* version.php */
$_['ru']['version_form_button'] = 'Зарегистрироваться';
$_['en']['version_form_button'] = 'Check in ';
$_['ru']['version_form_button_mobile'] = 'Бесплатный демо-доступ';
$_['en']['version_form_button_mobile'] = $_['en']['version_form_button'];
$_['ru']['version_header_button'] = 'Оформить доступ';
$_['en']['version_header_button'] = 'Get access';

$_['ru']['version_header_button_blogger'] = 'попробовать за 1 рубль';
$_['en']['version_header_button'] = 'попробовать за 1 рубль';
//оформить доступ
$_['ru']['version_form_title'] = 'Оформить бесплатный демо-доступ';
$_['en']['version_form_title'] = 'Get free demo access';


/* Блоки */
$_['ru']['form_item_name'] = 'Ваше имя';
$_['en']['form_item_name'] = 'Name';
$_['ru']['form_item_phone'] = 'Ваш телефон';
$_['en']['form_item_phone'] = 'Phone';
$_['ru']['form_item_email'] = 'Ваш e-mail';
$_['en']['form_item_email'] = 'Email';
$_['ru']['form__footer-text-1'] = 'Согласен с&nbsp;<a href="#privacy" class="fancybox privacy">политикой конфиденциальности</a> и&nbsp;на&nbsp;обработку персональных данных';
$_['en']['form__footer-text-1'] = 'I&nbsp;agree to&nbsp;the <a href="#privacy" class="fancybox privacy">privacy policy</a> and to&nbsp;the processing of&nbsp;personal data';
$_['ru']['form__footer-text-2'] = 'Согласен на&nbsp;получение рассылок от&nbsp;Школы бизнеса Синергия';
$_['en']['form__footer-text-2'] = 'I&nbsp;agree to&nbsp;receive newsletters Synergy Business School';

$_['ru']['form__footer-text-3'] = 'ПРИ ОФОРМЛЕНИИ ПОДПИСКИ С ВАШЕГО СЧЕТА БУДЕТ СНЯТ И ВОЗВРАЩЕН ПЛАТЕЖ В РАЗМЕРЕ 1 РУБ. ПО ИСТЕЧЕНИИ ПРОБНОГО ПЕРИОДА ВЫ АВТОМАТИЧЕСКИ БУДЕТЕ ПЕРЕКЛЮЧЕНЫ НА ТАРИФ STANDARD (1 500 РУБ. В МЕС.) И ПРОИЗОЙДЕТ СПИСАНИЕ ПЕРВОГО ПЛАТЕЖА В 1 500 РУБ. ОТМЕНИТЬ ПОДПИСКУ МОЖНО В ЛИЧНОМ КАБИНЕТЕ. ';
$_['en']['form__footer-text-3'] = 'ПРИ ОФОРМЛЕНИИ ПОДПИСКИ С ВАШЕГО СЧЕТА БУДЕТ СНЯТ И ВОЗВРАЩЕН ПЛАТЕЖ В РАЗМЕРЕ 1 РУБ. ПО ИСТЕЧЕНИИ ПРОБНОГО ПЕРИОДА ВЫ АВТОМАТИЧЕСКИ БУДЕТЕ ПЕРЕКЛЮЧЕНЫ НА ТАРИФ STANDARD (1 500 РУБ. В МЕС.) И ПРОИЗОЙДЕТ СПИСАНИЕ ПЕРВОГО ПЛАТЕЖА В 1 500 РУБ. ОТМЕНИТЬ ПОДПИСКУ МОЖНО В ЛИЧНОМ КАБИНЕТЕ. ';

$_['ru']['header__links-digital-plf'] = 'О&nbsp;платформе';
$_['en']['header__links-digital-plf'] = 'About the platform';
$_['ru']['header__links-speakers'] = 'Спикеры';
$_['en']['header__links-speakers'] = 'Speakers';
$_['ru']['header__links-online-plf'] = 'Трансляция';
$_['en']['header__links-online-plf'] = 'Live broadcast';
$_['ru']['header__links-base'] = 'База знаний';
$_['en']['header__links-base'] = 'Knowledge base';
$_['ru']['header__links-services'] = 'Сервисы';
$_['en']['header__links-services'] = 'Services';
$_['ru']['header__links-organizer'] = 'Франшиза';
$_['en']['header__links-organizer'] = 'Franchise';
$_['ru']['header__links-press'] = 'СМИ о нас';
$_['en']['header__links-press'] = 'Mass Media about us';

$_['ru']['main-platform__title'] = 'Цифровая платформа';
$_['en']['main-platform__title'] = 'Digital platform';
$_['ru']['main-platform__description-1'] = '500+&nbsp;спикеров';
$_['en']['main-platform__description-1'] = '500+&nbsp;speakers';
$_['ru']['main-platform__description-2'] = 'Еженедельный live-форум';
$_['en']['main-platform__description-2'] = 'Weekly live forum';
$_['ru']['main-platform__description-3'] = 'Сервисы для бизнеса';
$_['en']['main-platform__description-3'] = 'Service for business';

$_['ru']['digital-plf__title'] = 'О&nbsp;платформе';
$_['en']['digital-plf__title'] = 'About the platform';
$_['ru']['digital-plf__text_1'] = '<span>Еженедельные <br>онлайн-форумы</span> с&nbsp;ведущими мировыми спикерами';
$_['en']['digital-plf__text_1'] = '<span>Weekly online <br>forums</span> with the world&rsquo;s best speakers';
$_['ru']['digital-plf__text_2'] = '<span>Онлайн-практикумы</span> и&nbsp;вебинары';
$_['en']['digital-plf__text_2'] = '<span>Online workshops</span> and webinars';
$_['ru']['digital-plf__text_3'] = '<span>База знаний</span> с&nbsp;лучшими видео с&nbsp;событий &laquo;Синергии&raquo;';
$_['en']['digital-plf__text_3'] = '<span>Knowledge base</span> with best videos from synergy events';
$_['ru']['digital-plf__text_4'] = '<span>Цифровые сервисы</span> для бизнеса';
$_['en']['digital-plf__text_4'] = '<span>Digital services</span> for business';
$_['ru']['digital-plf__text_5'] = 'Антикризисные <span>IT-решения</span>';
$_['en']['digital-plf__text_5'] = 'Anti-crisis <span>it&nbsp;solutions</span>';
$_['ru']['digital-plf__text_6'] = '<span>Новости</span> и&nbsp;аналитика';
$_['en']['digital-plf__text_6'] = '<span>News</span> and analytics';

$_['ru']['speakers__title'] = 'Ведущие спикеры мира';
$_['en']['speakers__title'] = 'World&rsquo;s Best Speakers';
$_['ru']['speakers-card__role-headliner'] = 'Хэдлайнер';
$_['en']['speakers-card__role-headliner'] = 'Headliner';
$_['ru']['speakers-card__button'] = 'Подробнее';
$_['en']['speakers-card__button'] = 'More';
$_['ru']['speakers__link-more'] = 'Показать больше спикеров';
$_['en']['speakers__link-more'] = 'See more speakers';
$_['ru']['speakers-card-nospeaker__name'] = 'Панель спикеров продолжает формироваться';
$_['en']['speakers-card-nospeaker__name'] = 'The speaker panel is&nbsp;still under formation';
$_['ru']['speakers-card-nospeaker__button'] = 'Стать спикером';
$_['en']['speakers-card-nospeaker__button'] = 'Become a&nbsp;speaker';

$_['ru']['online-plf__title'] = 'Трансляция <br>Synergy Online Forum';
$_['en']['online-plf__title'] = 'Broadcast of&nbsp;Synergy Online Forum';
$_['ru']['online-plf__text'] = 'На&nbsp;платформе проходит трансляция Synergy Online Forum. Каждую неделю вас ждут новые хедлайнеры, новые эксперты и&nbsp;новые панельные дискуссии с&nbsp;генерацией решений по&nbsp;выходу из&nbsp;кризиса для разных отраслей бизнеса.';
$_['en']['online-plf__text'] = 'Synergy Online Forum is&nbsp;broadcast on&nbsp;platform. Every week you will find new headliners, new experts and new panel discussions generating solutions to&nbsp;overcome the crisis for different business sectors.';
$_['ru']['online-plf__list-item-1'] = '<span>500+</span> <br>спикеров <br>со&nbsp;всего мира';
$_['en']['online-plf__list-item-1'] = '<span>500+</span> <br>speakers <br>from all&nbsp;over the world';
$_['ru']['online-plf__list-item-2'] = '<span>50+&nbsp;часов</span> <br>экспертного <br>контента';
$_['en']['online-plf__list-item-2'] = '<span>50+&nbsp;hours</span> <br>of&nbsp;expert <br>content';
$_['ru']['online-plf__list-item-3'] = '<span>5&nbsp;сцен</span> <br>с&nbsp;онлайн-<br>трансляцией';
$_['en']['online-plf__list-item-3'] = '<span>5&nbsp;live</span> <br>broadcast <br>stages';

$_['ru']['format__text'] = 'Оформив подписку на&nbsp;Synergy.Online, вы&nbsp;получите доступ к&nbsp;базе знаний, где собраны обучающие видео от&nbsp;ведущих экспертов России и&nbsp;мира.';
$_['en']['format__text'] = 'By&nbsp;subscribing to&nbsp;Synergy.Online, you will get access to&nbsp;the Knowledge Base, which contains training videos from leading experts in&nbsp;Russia and the world.';
$_['ru']['format__col-item-1'] = '465 ведущих <br>бизнес-спикеров <br>планеты';
$_['en']['format__col-item-1'] = '465 leading <br>business speakers <br>of&nbsp;the planet';
$_['ru']['format__col-item-2'] = '500+ часов <br>обучающих <br>видео';
$_['en']['format__col-item-2'] = '500+ hours <br>of&nbsp;training <br>videos';
$_['ru']['format__col-item-3'] = '10+&nbsp;ключевых тем: <br>от&nbsp;старта бизнеса <br>до&nbsp;личной <br>эффективности';
$_['en']['format__col-item-3'] = '10+&nbsp;key topics: <br>from startups <br>to&nbsp;personal <br>effectiveness';
$_['ru']['format__col-item-4'] = 'Онлайн-программы <br>Школы бизнеса <br>&laquo;Синергия&raquo;';
$_['en']['format__col-item-4'] = 'Online programmes <br>of&nbsp;Synergy <br>Business School';
$_['ru']['format__col-item-5'] = 'Дополнительные <br>материалы: <br>чек-листы, <br>презентации';
$_['en']['format__col-item-5'] = 'Additional <br>materials: <br>checklists, <br>presentations';
$_['ru']['format__col-item-6'] = 'Просмотр <br>на&nbsp;любых <br>устройствах <br>в&nbsp;HD-качестве';
$_['en']['format__col-item-6'] = 'Watch <br>on&nbsp;any <br>device <br>in&nbsp;HD quality';

$_['ru']['partners__title'] = 'Сервисы для <br>предпринимателей';
$_['en']['partners__title'] = 'Services for <br>entrepreneurs';
$_['ru']['partners__description'] = 'На&nbsp;Synergy.Online вы&nbsp;можете воспользоваться <br>10+&nbsp;сервисами для бизнеса в&nbsp;формате одного окна.';
$_['en']['partners__description'] = 'Synergy.Onlines you to&nbsp;use <br>10+&nbsp;services for business in&nbsp;a&nbsp;single window format.';

$_['ru']['franchise__title'] = 'Станьте эксклюзивным представителем Школы&nbsp;бизнеса &laquo;Синергия&raquo;';
$_['en']['franchise__title'] = 'Become an&nbsp;exclusive Synergy Business School representative';
$_['ru']['franchise__subtitle-1'] = 'Франшиза';
$_['en']['franchise__subtitle-1'] = 'Synergy Business School';
$_['ru']['franchise__subtitle-2'] = 'Школы Бизнеса';
$_['en']['franchise__subtitle-2'] = 'Franchise';
$_['ru']['franchise__button'] = 'Скачать презентацию франшизы';
$_['en']['franchise__button'] = 'Download the presentation';
$_['ru']['franchise__item-1'] = 'Проводите программы МВА,&nbsp;семинары, тренинги, корпоративное обучение под&nbsp;брендом &laquo;Синергии&raquo;';
$_['en']['franchise__item-1'] = 'Conduct MBA programs, seminars, and corporate workshops under the Synergy brand';
$_['ru']['franchise__item-2'] = 'Получите доступ к&nbsp;широкой линейке авторского контента&nbsp;и&nbsp;ведущим бизнес&nbsp;-&nbsp;спикерам';
$_['en']['franchise__item-2'] = 'Get access to&nbsp;a&nbsp;wide range of&nbsp;authorial content and leading business speakers';
$_['ru']['franchise__item-3'] = 'Организуйте масштабные форумы и&nbsp;другие бизнес&nbsp;-&nbsp;события &laquo;Синергии&raquo; в&nbsp;своем&nbsp;регионе';
$_['en']['franchise__item-3'] = 'Hold large-scale forums and other business events of&nbsp;Synergy in&nbsp;your region';

$_['ru']['footer__meta-copyright'] = 'Университет «Синергия». Все права защищены.';
$_['en']['footer__meta-copyright'] = 'Synergy University. All rights reserved.';
$_['ru']['footer__link-privacy'] = 'Политика конфиденциальности';
$_['en']['footer__link-privacy'] = 'Privacy policy';
$_['ru']['footer__meta_2'] = 'Разработка и&nbsp;продвижение:';
$_['en']['footer__meta_2'] = 'Developed and promoted by';


/* Попапы */
$_['ru']['popup-franchise__title'] = 'Получить презентацию';
$_['en']['popup-franchise__title'] = 'Get presentation';

$_['ru']['popup-speakers-offer__title'] = 'Стать спикером';
$_['en']['popup-speakers-offer__title'] = 'Become a&nbsp;speaker';
$_['ru']['popup-speakers-offer__theme'] = 'Тема выступления';
$_['en']['popup-speakers-offer__theme'] = 'Speech Topic';


/* Страницы */
/* thanks-free */
$_['ru']['thanks-free__title'] = '<span>Спасибо за&nbsp;регистрацию</span> на&nbsp;платформе Synergy.Online!';
$_['en']['thanks-free__title'] = '<span>Thanks for singing up</span> on&nbsp;the Synergy.Online platform!';
$_['ru']['thanks-free__container-text-1'] = 'Вам открыт доступ на&nbsp;14&nbsp;дней к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo;. <span>Проверьте свою электронную почту: мы&nbsp;направили на&nbsp;нее данные для входа на&nbsp;платформу.</span>';
$_['en']['thanks-free__container-text-1'] = 'You have 48-hour access to&nbsp;the Knowledge Base with videos of&nbsp;all Synergy events. <br><span>Check your email address: we&nbsp;sent you a&nbsp;letter with login data.</span>';
$_['ru']['thanks-free__container-text-2'] = 'Если вы&nbsp;не&nbsp;увидели письмо:';
$_['en']['thanks-free__container-text-2'] = 'If&nbsp;you didn&rsquo;t see the email:';
$_['ru']['thanks-free__container-text-3'] = 'Проверьте папку «Спам»';
$_['en']['thanks-free__container-text-3'] = 'Check the spam folder';
$_['ru']['thanks-free__container-text-4'] = 'Проверьте корректность введенного e-mail';
$_['en']['thanks-free__container-text-4'] = 'Check the correctness of&nbsp;the e-mail';
$_['ru']['thanks-free__container-text-5'] = 'В&nbsp;случае возникновения проблем с&nbsp;доступом обращайтесь в&nbsp;службу технической поддержки: <a href="tel:88002005440" target="_blank">8&nbsp;800&nbsp;200 54&nbsp;40</a>';
$_['en']['thanks-free__container-text-5'] = 'If&nbsp;you have any problems with access, please, contact technical support: <a href="tel:88002005440" target="_blank">8&nbsp;800&nbsp;200 54 40</a>';
$_['ru']['thanks-free__container-text-6'] = 'Желаем вам приятного и&nbsp;продуктивного использования платформы Synergy.Online!';
$_['en']['thanks-free__container-text-6'] = 'We&nbsp;wish you a&nbsp;pleasant and productive use of&nbsp;the Synergy.Online platform!';
$_['ru']['thanks-free__container-text-7'] = 'Скачайте конспекты и&nbsp;презентации лучших выступлений форумов &laquo;Синергии&raquo; в&nbsp;официальном Телеграм канале.';

$_['ru']['price-demo-cancel-free'] = '*ПРИ ОФОРМЛЕНИИ ПОДПИСКИ С&nbsp;ВАШЕГО СЧЕТА БУДЕТ СНЯТ И&nbsp;ВОЗВРАЩЕН ПЛАТЕЖ В&nbsp;РАЗМЕРЕ 1&nbsp;РУБ. ПО&nbsp;ИСТЕЧЕНИИ ПРОБНОГО ПЕРИОДА ВЫ&nbsp;АВТОМАТИЧЕСКИ БУДЕТЕ ПЕРЕКЛЮЧЕНЫ НА&nbsp;ТАРИФ BUSINESS (3&nbsp;000&nbsp;РУБ. В&nbsp;МЕС.) И&nbsp;ПРОИЗОЙДЕТ СПИСАНИЕ ПЕРВОГО ПЛАТЕЖА В&nbsp;3&nbsp;000&nbsp;РУБ. ОТМЕНИТЬ ПОДПИСКУ МОЖНО В&nbsp;ЛИЧНОМ КАБИНЕТЕ.';
