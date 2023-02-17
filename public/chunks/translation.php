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

$_ = [];


/* Общие параметры */
$_['ru']['title'] = 'Synergy Online Forum. 100+ спикеров со всего мира, 50+ часов экспертного контента, 5 сцен c онлайн-трансляцией.';
$_['en']['title'] = 'Synergy Online Forum. 100+ speakers from all over the world, 50+ hours of expert-based content, 5 online streaming stages';
$_['es']['title'] = 'Synergy Online Forum. 100+ oradores de todo el mundo, 50+ horas de contenido experto, 5 escenas con transmisión en línea';
$_['pt']['title'] = 'Synergy Online Forum 100+ oradores de todo o mundo, 50+ horas de conteúdo especializado, 5 cenas com transmissão ao vivo';
$_['tr']['title'] = 'Synergy Online Forum. D&uuml;nyanın her yerinden 100+&nbsp;konuşmacı, 50&nbsp;saatten fazla uzman i&ccedil;eriği, Canlı yayına sahip 5&nbsp;g&ouml;sterim';

$_['ru']['description'] = 'Еженедельный live-форум. Цифровая платформа с 1000+ часов контента. Сервисы для бизнеса 24/7 и 365 дней в году';
$_['en']['description'] = '';
$_['es']['description'] = 'Foro en vivo semanal. Plataforma digital con 1000+ horas de contenido. Servicios para negocios 24/7 y 365 días al año';
$_['pt']['description'] = 'Fórum semanal de transmissões ao vivo Plataforma digital com 1000+ horas de conteúdo Serviços para negócios 24/7 e 365 dias por ano';
$_['tr']['description'] = 'Haftalık canlı forum 1000+ saatlik i&ccedil;eriğe sahip dijital platform 365 g&uuml;n ve&nbsp;7/24&nbsp;iş hizmetleri';

/* version.php */
$_['ru']['version_form_button'] = 'Смотреть бесплатно';
$_['en']['version_form_button'] = 'Sign up';
$_['es']['version_form_button'] = 'Regístrate';
$_['tr']['version_form_button'] = 'KAYDOL';
$_['pt']['version_form_button'] = 'Inscrever-se';

$_['ru']['version_form_button_reg'] = 'Регистрация';
$_['en']['version_form_button_reg'] = 'Sign up';
$_['es']['version_form_button_reg'] = 'Regístrate';
$_['tr']['version_form_button_reg'] = 'KAYDOL';
$_['pt']['version_form_button_reg'] = 'Registro';
$_['ru']['version_form_button_mobile'] = 'Зарегистрироваться';
$_['en']['version_form_button_mobile'] = 'Sign up';
$_['es']['version_form_button_mobile'] = 'Regístrate';
$_['tr']['version_form_button_mobile'] = 'KAYDOL';
$_['pt']['version_form_button_mobile'] = 'Inscrever-se';
$_['ru']['version_form_title'] = 'СМОТРИТЕ ЗАПИСЬ МАСТЕР-КЛАССА БЕСПЛАТНО, ОТПРАВИВ ЗАЯВКУ.';
$_['en']['version_form_title'] = 'Reserve your spot';
$_['es']['version_form_title'] = 'Regístrate';
$_['tr']['version_form_title'] = 'Yerinizi ayırtın';
$_['pt']['version_form_title'] = 'Registro';
$_['ru']['version_theme1_title'] = '#Коронавирус';
$_['en']['version_theme1_title'] = '#Coronavirus';


/* ====== */
/* Блоки */

$_['ru']['form_item_name'] = 'Ваше имя';
$_['en']['form_item_name'] = 'Name';
$_['es']['form_item_name'] = 'Nombre';
$_['tr']['form_item_name'] = 'Ad';
$_['pt']['form_item_name'] = 'Seu nome';
$_['ru']['form_item_phone'] = 'Ваш телефон';
$_['en']['form_item_phone'] = 'Phone';
$_['es']['form_item_phone'] = 'Telefono';
$_['tr']['form_item_phone'] = 'Telefon';
$_['pt']['form_item_phone'] = 'Seu telefone';
$_['ru']['form_item_email'] = 'Ваш e-mail';
$_['en']['form_item_email'] = 'Email';
$_['es']['form_item_email'] = 'Email';
$_['tr']['form_item_email'] = 'E-posta';
$_['pt']['form_item_email'] = 'Seu email';

$_['ru']['form_item_ticket_count'] = 'Количество билетов';
$_['en']['form_item_ticket_count'] = 'Number of tickets';
$_['es']['form_item_ticket_count'] = 'Number of tickets';
$_['tr']['form_item_ticket_count'] = 'bilet sayısı';
$_['pt']['form_item_ticket_count'] = 'número de ingressos';

$_['ru']['form__footer-text-1'] = 'Согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также с&nbsp;<a href="#privacy" class="fancybox privacy">политикой конфиденциальности</a>';
$_['en']['form__footer-text-1'] = 'I&nbsp;AGREE TO&nbsp;THE <a href="files/privacy_en.pdf" target="_blank" data-fancybox>PRIVACY POLICY</a>, THE PROCESSING OF&nbsp;PERSONAL DATA, AND RECEIVING NEWSLETTERS';
$_['es']['form__footer-text-1'] = 'ACEPTO EL&nbsp;TRATAMIENTO DE&nbsp;MIS DATOS PERSONALES, RECIBO DE&nbsp;BOLETINES Y&nbsp;CON <a href="files/privacy_es.pdf" target="_blank" data-fancybox>LA&nbsp;POL&Iacute;TICA DE&nbsp;PRIVACIDAD</a>';
$_['tr']['form__footer-text-1'] = 'KİŞİSEL VERİLERİMİN İŞLENMESİNİ, HABER E-POSTALARI ALMAYI VE&nbsp;<a href="files/privacy_en.pdf" target="_blank" data-fancybox>GİZLİLİK POLİTİKASINI</a> ONAYLIYORUM';
$_['pt']['form__footer-text-1'] = 'CONCORDO COM O&nbsp;TRATAMENTO DOS DADOS PESSOAIS, O&nbsp;RECEBIMENTO DE&nbsp;NEWSLETTERS, BEM COMO COM&nbsp;<a href="files/privacy_pt.pdf" target="_blank" data-fancybox>A&nbsp;POL&Iacute;TICA DE&nbsp;PRIVACIDADE</a>';
$_['ru']['form__footer-text-2'] = 'Оплачивая, Вы&nbsp;соглашаетесь с&nbsp;условиями <a href="files/public_offerta.pdf" data-fancybox class="footer__link-offer">публичной оферты</a>';
$_['en']['form__footer-text-2'] = 'By&nbsp;proceeding the payment, you agree to&nbsp;the terms of&nbsp;the <a href="files/public_offerta.pdf" target="_blank" data-fancybox class="footer__link-offer">public offer</a>';

$_['ru']['header__links-speakers'] = 'Спикеры';
$_['en']['header__links-speakers'] = 'Speakers';
$_['tr']['header__links-speakers'] = 'Konuşmacılar';
$_['ru']['header__links-concept'] = 'Концепция';
$_['en']['header__links-concept'] = 'Concept';
$_['tr']['header__links-concept'] = 'KONSEPT';
$_['ru']['header__links-topics'] = 'Темы';
$_['en']['header__links-topics'] = 'Topics';
$_['ru']['header__links-format'] = 'Формат';
$_['en']['header__links-format'] = 'Format';
$_['tr']['header__links-format'] = 'Format';
$_['ru']['header__links-partners'] = 'Партнёры';
$_['en']['header__links-partners'] = 'Partners';
$_['tr']['header__links-partners'] = 'İş&nbsp;Ortakları';
$_['ru']['header__links-online-plf'] = 'Платформа';
$_['en']['header__links-online-plf'] = 'Platform';
$_['es']['header__links-online-plf'] = 'PLATAFORMA';
$_['tr']['header__links-online-plf'] = 'Platform';
$_['pt']['header__links-online-plf'] = 'PLATAFORMA';
$_['ru']['header__links-franchise'] = 'Франшиза';
$_['en']['header__links-franchise'] = 'Franchise';
$_['ru']['header__links-press'] = 'СМИ&nbsp;о&nbsp;нас';
$_['en']['header__links-press'] = 'Mass Media about us';
$_['ru']['header__links-price'] = 'Стоимость';
$_['en']['header__links-price'] = 'Price';
$_['tr']['header__links-price'] = 'FİYAT';

$_['ru']['main__slogan'] = 'Больше чем <span class="main__slogan-part color-white">форум</span>';
$_['en']['main__slogan'] = 'More than a <span class="color-white">forum</span>';
$_['ru']['main__features-item-1'] = '<span class="color-red">100+</span>&nbsp;<br>спикеров <br>со&nbsp;всего&nbsp;мира';
$_['en']['main__features-item-1'] = '<span class="color-red">100+</span>&nbsp;<br>speakers from <br>all over the world';
$_['ru']['main__features-item-2'] = '<span class="color-red">50+ часов</span> <br>экспертного <br>контента';
$_['en']['main__features-item-2'] = '<span class="color-red">50+ hours</span> <br>of&nbsp;expert-based <br>content';
$_['ru']['main__features-item-3'] = '<span class="color-red">5 сцен</span> <br>с&nbsp;онлайн-<br>трансляцией';
$_['en']['main__features-item-3'] = '<span class="color-red">5</span> <br>online streaming <br>stages';
$_['ru']['main__form-title'] = 'Зарегистрироваться на&nbsp;форум';
$_['en']['main__form-title'] = 'Reserve your spot';
$_['tr']['main__form-title'] = 'Yerinizi ayırtın';

$_['ru']['speakers__title'] = 'Спикеры';
$_['en']['speakers__title'] = 'Speakers';
$_['tr']['speakers__title'] = 'KONUŞMACILAR';
$_['ru']['speakers-card__role-headliner'] = 'Хэдлайнер';
$_['en']['speakers-card__role-headliner'] = 'Headliner';
$_['ru']['speakers__link-more'] = 'Показать ещё&nbsp;<span data-more-number>спикеров</span>';
$_['en']['speakers__link-more'] = 'See&nbsp;<span data-more-number></span>&nbsp;more speakers';
$_['tr']['speakers__link-more'] = '<span data-more-number></span>&nbsp;KONUŞMACIYI DAHA G&Ouml;Z ATIN';
$_['ru']['speakers-card-nospeaker__name'] = 'Панель спикеров продолжает формироваться';
$_['en']['speakers-card-nospeaker__name'] = 'The speaker panel is&nbsp;still under formation';
$_['tr']['speakers-card-nospeaker__name'] = 'Konuşmacı kadrosu daha sonra ilan edilecek';
$_['ru']['speakers-card-nospeaker__button'] = 'Стать спикером';
$_['en']['speakers-card-nospeaker__button'] = 'Become a&nbsp;speaker';
$_['tr']['speakers-card-nospeaker__button'] = 'KONUŞMACI&nbsp;OLUN';

$_['ru']['themes__title'] = 'Ключевые темы';
$_['en']['themes__title'] = 'Key Topics';
$_['ru']['themes__card-desc-1'] = 'Как не&nbsp;поддаваться панике и&nbsp;минимизировать ее&nbsp;эффект на&nbsp;бизнес';
$_['en']['themes__card-desc-1'] = 'How to&nbsp;avoid panic and minimize its effect on&nbsp;business';
$_['ru']['themes__card-title-2'] = '#Кризис';
$_['en']['themes__card-title-2'] = '#Crisis';
$_['ru']['themes__card-desc-2'] = 'Как сохранить и&nbsp;приумножить капитал в&nbsp;условиях обвала рубля и&nbsp;падающих рынков';
$_['en']['themes__card-desc-2'] = 'How to&nbsp;save and increase capital while ruble collapse and markets downturn';
$_['ru']['themes__card-title-3'] = '#Самоизоляция';
$_['en']['themes__card-title-3'] = '#Self-isolation';
$_['ru']['themes__card-desc-3'] = 'Какие практики и&nbsp;инструменты помогут пережить период самоизоляции';
$_['en']['themes__card-desc-3'] = 'What practices and tools will help you to&nbsp;survive during the self-isolation';
$_['ru']['themes__card-title-4'] = '#Удаленная работа';
$_['en']['themes__card-title-4'] = '#Remote work';
$_['ru']['themes__card-desc-4'] = 'Как эффективно управлять удаленными командами';
$_['en']['themes__card-desc-4'] = 'How to&nbsp;manage remote teams effectively';
$_['ru']['themes__card-title-5'] = '#Онлайн';
$_['en']['themes__card-title-5'] = '#Online';
$_['ru']['themes__card-desc-5'] = 'Как вывести бизнес в&nbsp;онлайн и&nbsp;обернуть кризис себе на&nbsp;пользу';
$_['en']['themes__card-desc-5'] = 'How to&nbsp;bring your business online and turn the crisis to&nbsp;your advantage';
$_['ru']['themes__card-title-6'] = '#Будущее';
$_['en']['themes__card-title-6'] = '#Future';
$_['ru']['themes__card-desc-6'] = 'Что ждет человечество после глобального кризиса 2020';
$_['en']['themes__card-desc-6'] = 'Challenges for humanity after the global crisis of&nbsp;2020';
$_['ru']['themes__card-title-7'] = '#Новые возможности';
$_['en']['themes__card-title-7'] = '#New opportunities';
$_['ru']['themes__card-desc-7'] = 'Какие возможности для развития дает ситуация нестабильности';
$_['en']['themes__card-desc-7'] = 'What opportunities for development can be&nbsp;found during the instability period';

$_['ru']['concept__title'] = 'Концепция';
$_['en']['concept__title'] = 'Concept';
$_['tr']['concept__title'] = 'Konsept';
$_['ru']['concept__text_1'] = 'В&nbsp;2020 году человечество в&nbsp;очередной раз переживает глобальные изменения. Новые условия требуют новых подходов к&nbsp;построению стратегии роста и&nbsp;развития в&nbsp;бизнесе, формированию культурных привычек и&nbsp;поведенческих паттернов в&nbsp;обществе.';
$_['en']['concept__text_1'] = 'The world will never be&nbsp;the same again. With the pandemic, the downturn in&nbsp;global markets, a&nbsp;widespread migration of&nbsp;services online, the crisis in&nbsp;2020 will inevitably result in&nbsp;the breakdown of&nbsp;old business models and behavioral patterns. It&rsquo;s time to&nbsp;build a&nbsp;new model for our changing world.';
$_['tr']['concept__text_1'] = 'D&uuml;nya artık eskisi gibi olmayacak. Pandemi, k&uuml;resel pazarlardaki kriz, hizmetlerin &ccedil;evrimi&ccedil;i hale gelmesi ve&nbsp;2020&rsquo;deki kriz eski iş&nbsp;modellerinin ve&nbsp;davranış kalıplarını ka&ccedil;ınılmaz olarak değiştirecektir.';
$_['ru']['concept__text_2'] = 'Synergy Online Forum&nbsp;&mdash; это уникальная цифровая площадка, работающая в&nbsp;режиме нон-стоп, где лучшие спикеры страны и&nbsp;мира, эксперты в&nbsp;разных областях, от&nbsp;предпринимательства и&nbsp;менеджмента до&nbsp;искусства и&nbsp;спорта, делятся своими знаниями и&nbsp;опытом. Каждую неделю на&nbsp;форуме вас ждут яркие выступления лидеров мнений, интервью на&nbsp;актуальные темы, панельные дискуссии и&nbsp;тематические онлайн-сцены.';
$_['en']['concept__text_2'] = 'Synergy Online Forum will perform several online platforms, with leading expert presentations, panel discussions with solutions for each industry, inspiring new ideas on&nbsp;how to&nbsp;overcome the crisis. We&nbsp;have invited representatives from various industries in&nbsp;order to&nbsp;develop a&nbsp;comprehensive plan for adapting to&nbsp;the changes that have shaken the world in&nbsp;2020.';
$_['tr']['concept__text_2'] = 'Synergy Online Forum, &ouml;nde gelen uzmanların sunumlarının, farklı end&uuml;strilere y&ouml;nelik &ccedil;&ouml;z&uuml;mlerin konuşulacağı panel tartışmalarının ve&nbsp;krizin nasıl aşılacağı konusunda ortak fikirlerin yer alacağı &ccedil;evrimi&ccedil;i oturumlar d&uuml;zenler. Bu&nbsp;oturumlara, sosyal yaşam alanlarını 2020&rsquo;de d&uuml;nyayı sarsan değişikliklere adapte etmek &uuml;zere kapsamlı bir plan geliştirmek amacıyla &ccedil;eşitli sekt&ouml;r temsilcilerini davet edildi.';

$_['ru']['format__title'] = 'Формат';
$_['en']['format__title'] = 'Format';
$_['tr']['format__title'] = 'Format';
$_['ru']['format__text'] = '<p>Synergy Online Forum объединяет участников со&nbsp;всего мира вне зависимости от&nbsp;места проживания и&nbsp;рода деятельности. Смотрите расписание и&nbsp;подключайтесь к&nbsp;просмотру в&nbsp;любой момент, чтобы увидеть выступления, которые интересны именно вам.</p><p>Форум проходит в&nbsp;режиме прямой онлайн-трансляции: вы&nbsp;можете свободно переключаться между сценами и&nbsp;слушать зарубежных спикеров как в&nbsp;переводе, так и&nbsp;в&nbsp;оригинале. Записи выступлений со&nbsp;всех сцен доступны подписчикам платформы Synergy.Online.</p>';
$_['en']['format__text'] = '<p>Synergy Online Forum concept includes Live Broadcast with the best opinion shapers. This unique concept is&nbsp;available anyplace, anytime, on&nbsp;any device.</p><p>Ask your questions to&nbsp;the speakers, share your opinion, and maximize your networking opportunities.</p>';
$_['tr']['format__text'] = '<p>Synergy Online Forum konsepti, d&uuml;nyanın en&nbsp;iyi fikir &ouml;nderlerini Canlı Yayınlar aracılığıyla seyircilerle buluşturur.</p><p>Bu&nbsp;benzersiz konsept ayrıca herhangi bir cihazla d&uuml;nyanın her yerinden, her zaman bu&nbsp;konuşmalara erişmenize olanak sağlar.</p>';
$_['ru']['format__features-title-1'] = 'Онлайн-трансляции <br>на&nbsp;5&nbsp;сценах';
$_['en']['format__features-title-1'] = 'From any part of&nbsp;the globe';
$_['tr']['format__features-title-1'] = 'D&uuml;nyanın herhangi bir noktasından';
$_['ru']['format__features-title-2'] = 'Выступления и&nbsp;панельные дискуссии';
$_['en']['format__features-title-2'] = 'Weekly live-broadcasting forum with world known speakers';
$_['tr']['format__features-title-2'] = 'D&uuml;nyaca &uuml;nl&uuml; konuşmacıların katıldığı haftalık canlı yayınlar';
$_['ru']['format__features-title-3'] = 'Ведущие спикеры <br>со&nbsp;всего мира';
$_['en']['format__features-title-3'] = '50+&nbsp;hours of&nbsp;video content from opinion leaders concerning various topics';
$_['tr']['format__features-title-3'] = 'Fikir &ouml;nderlerinin farklı konularda yaptığı konuşmalara ait 50&nbsp;saati aşkın video kaydı';

$_['ru']['online-plf__title'] = 'Платформа';
$_['en']['online-plf__title'] = 'Platform';
$_['es']['online-plf__title'] = 'PLATAFORMA';
$_['tr']['online-plf__title'] = 'Platform';
$_['pt']['online-plf__title'] = 'PLATAFORMA';
$_['ru']['online-plf__text'] = 'Каждый участник форума получит доступ к&nbsp;платформе Synergy.Online, которая создана для того, чтобы аккумулировать самые актуальные знания и&nbsp;сервисы для предпринимателей. Получайте образование в&nbsp;онлайн-формате, используйте современные IT-решения, развивайтесь и&nbsp;развивайте свой бизнес.';
$_['en']['online-plf__text'] = 'Each forum participant will have access to&nbsp;the Synergy.Online platform, which is&nbsp;designed to&nbsp;gather the latest knowledge and services for entrepreneurs. Get your education online with&nbsp;us, use modern&nbsp;IT solutions, and advance your business even through conditions of&nbsp;instability.';
$_['tr']['online-plf__text'] = 'Platforma erişim hakkı kazandıktan sonra, Synergy Online Forumun t&uuml;m video kayıtlarını seyredebilirsiniz. Ayrıca Arnold Schwarzenegger, Mike Tyson, Sir Richard Branson, Dr. Ichak Adizes, Nassim Taleb gibi y&uuml;z&uuml; aşkın konuşmacının katılmış olduğu daha &ouml;nceki &ccedil;evrimdışı etkinliklerimize de&nbsp;erişebilirsiniz.';
$_['ru']['online-plf__text_mob'] = 'Платформа Synergy Online&nbsp;&mdash; это более чем 500 часов эксклюзивного образовательного контента на&nbsp;самые разные темы от&nbsp;предпринимательства и&nbsp;менеджмента до&nbsp;искусства и&nbsp;спорта, а&nbsp;также доступ к&nbsp;множеству полезных сервисов для масштабирования и&nbsp;развития бизнеса.';
$_['en']['online-plf__text_mob'] = 'Each forum participant gets the access to&nbsp;the Synergy.Online platform, which is&nbsp;designed to&nbsp;accumulate the most up-to-date knowledge and services for entrepreneurs. Get an&nbsp;education online, use modern&nbsp;IT solutions and develop your business even in&nbsp;conditions of&nbsp;instability.';
$_['ru']['online-plf__list-item-1'] = 'Видео с&nbsp;лучших событий &laquo;Синергии&raquo;';
$_['en']['online-plf__list-item-1'] = 'Synergy&rsquo;s best recorded Videos';
$_['tr']['online-plf__list-item-1'] = 'Synergy&rsquo;nin en&nbsp;iyi etkinliklerinin video kaydı';
$_['ru']['online-plf__list-item-2'] = 'Онлайн-практикумы и&nbsp;вебинары';
$_['en']['online-plf__list-item-2'] = 'Online workshops and webinars';
$_['tr']['online-plf__list-item-2'] = '&Ccedil;evrimi&ccedil;i at&ouml;lye &ccedil;alışmaları ve&nbsp;web seminerleri';
$_['ru']['online-plf__list-item-3'] = 'Цифровые сервисы для бизнеса';
$_['en']['online-plf__list-item-3'] = 'Digital services for business';
$_['tr']['online-plf__list-item-3'] = 'İşletmeniz i&ccedil;in dijital hizmetler';
$_['ru']['online-plf__list-item-4'] = 'Новости и&nbsp;аналитика';
$_['en']['online-plf__list-item-4'] = 'News and analytics';
$_['tr']['online-plf__list-item-4'] = 'Haberler ve&nbsp;analizler';
$_['ru']['online-plf__list-item-5'] = 'Экспертные рекомендации';
$_['en']['online-plf__list-item-5'] = 'Expert-based recommendations';
$_['tr']['online-plf__list-item-5'] = 'Uzman bazlı &ouml;neriler';
$_['ru']['online-plf__list-item-6'] = 'Антикризисные IT-решения';
$_['en']['online-plf__list-item-6'] = 'Anti-crisis IT&nbsp;solutions';
$_['tr']['online-plf__list-item-6'] = 'Krizle m&uuml;cadelede&nbsp;BT &ccedil;&ouml;z&uuml;mleri';

$_['ru']['organizer__title'] = 'Организатор';
$_['en']['organizer__title'] = 'Organizer';
$_['tr']['organizer__title'] = 'Organizatör';
$_['ru']['organizer__text'] = 'Школа бизнеса &laquo;Синергия&raquo; была основана в&nbsp;1988 году и&nbsp;является первой бизнес-школой в&nbsp;России и&nbsp;СНГ. На&nbsp;базе школы проводится обучение по&nbsp;программам МВА и&nbsp;профессиональной переподготовки, семинары и&nbsp;тренинги ведущих российских и&nbsp;мировых экспертов.';
$_['en']['organizer__text'] = 'Synergy organizes massive, top-notch business forums, workshops, and seminars worldwide, presenting our guests with world famous expertise in&nbsp;the fields of&nbsp;business, science, sport, and art.';
$_['tr']['organizer__text'] = 'Synergy, d&uuml;nya &ccedil;apında son derece kapsamlı birinci sınıf iş&nbsp;forumları, at&ouml;lyeler ve&nbsp;seminerler d&uuml;zenler. İş&nbsp;d&uuml;nyası, bilim, spor ve&nbsp;sanat gibi alanlarda uzman olan d&uuml;nyaca &uuml;nl&uuml; konuşmacıları konuklarla bir araya getirir.';
$_['ru']['organizer__info-num-1'] = '50 000';
$_['en']['organizer__info-num-1'] = '1,000,000';
$_['tr']['organizer__info-num-1'] = '1,000,000';
$_['ru']['organizer__info-1'] = 'успешных <br>выпускников';
$_['en']['organizer__info-1'] = 'Synergy participants all over the world';
$_['tr']['organizer__info-1'] = 'Farklı &uuml;lkelerden Synergy etkinliklerinde yer alan katılımcı sayısı';
$_['ru']['organizer__info-num-2'] = '500+';
$_['en']['organizer__info-num-2'] = '26,000';
$_['tr']['organizer__info-num-2'] = '26,000';
$_['ru']['organizer__info-2'] = 'профессиональных <br>программ по&nbsp;развитию <br>бизнеса';
$_['en']['organizer__info-2'] = 'Guests have attended one of&nbsp;our live forums';
$_['tr']['organizer__info-2'] = 'Canlı forumlarımızdan sadece birine katılan misafir sayısı';
$_['ru']['organizer__info-num-3'] = '30';
$_['en']['organizer__info-num-3'] = '5,000';
$_['tr']['organizer__info-num-3'] = '5,000';
$_['ru']['organizer__info-3'] = 'лет на&nbsp;рынке <br>бизнес-образования';
$_['en']['organizer__info-3'] = 'Business forums, seminars and workshops held over the past 5&nbsp;years';
$_['tr']['organizer__info-3'] = 'Son 5&nbsp;yılda d&uuml;zenlenen iş&nbsp;d&uuml;nyası forumları, seminerler ve&nbsp;at&ouml;lyeler';
$_['ru']['organizer__info-num-4'] = '6';
$_['en']['organizer__info-num-4'] = '250';
$_['tr']['organizer__info-num-4'] = '250';
$_['ru']['organizer__info-4'] = 'престижных <br>аккредитаций AMBA';
$_['en']['organizer__info-4'] = 'Speakers presented programs in&nbsp;one forum day';
$_['tr']['organizer__info-4'] = 'Forumun sadece tek bir g&uuml;n&uuml;nde sunum yapan konuşmacı sayısı';
$_['en']['organizer__info-num-5'] = '2';
$_['tr']['organizer__info-num-5'] = '2';
$_['en']['organizer__info-5'] = 'Mentions in&nbsp;the Guinness Book of&nbsp;Records';
$_['tr']['organizer__info-5'] = 'Guinness Rekorlar Kitabında adımızın ge&ccedil;tiği sayı';

$_['ru']['franchise__title'] = 'Станьте эксклюзивным представителем Школы&nbsp;бизнеса &laquo;Синергия&raquo;';
$_['en']['franchise__title'] = 'Become an&nbsp;exclusive Synergy Business School representative';
$_['ru']['franchise__button'] = 'Скачать презентацию франшизы';
$_['en']['franchise__button'] = 'Download franchise presentation';
$_['ru']['franchise__item-1'] = 'Проводите программы МВА,&nbsp;семинары, тренинги, корпоративное обучение под&nbsp;брендом &laquo;Синергии&raquo;';
$_['en']['franchise__item-1'] = 'Conduct MBA programs, seminars, and corporate workshops under the Synergy brand';
$_['ru']['franchise__item-2'] = 'Получите доступ к&nbsp;широкой линейке авторского контента&nbsp;и&nbsp;ведущим бизнес&nbsp;-&nbsp;спикерам';
$_['en']['franchise__item-2'] = 'Get access to&nbsp;a&nbsp;wide range of&nbsp;authorial content and leading business speakers';
$_['ru']['franchise__item-3'] = 'Организуйте масштабные форумы и&nbsp;другие бизнес&nbsp;-&nbsp;события &laquo;Синергии&raquo; в&nbsp;своем&nbsp;регионе';
$_['en']['franchise__item-3'] = 'Hold large-scale forums and other business events of&nbsp;Synergy in&nbsp;your region';

$_['ru']['partners__title-forum'] = 'Партнеры форума';
$_['en']['partners__title-forum'] = 'Forum Partners';
$_['tr']['partners__title-forum'] = 'Forum İş&nbsp;Ortakları';
$_['ru']['partners__title-general-forum'] = 'Генеральный партнер форума';
$_['en']['partners__title-general-forum'] = 'General Forum Partner';
$_['ru']['partners__title-general-digital'] = 'Главный digital-партнер';
$_['en']['partners__title-general-digital'] = 'General Digital Partner';
$_['ru']['partners__title-technological'] = 'Технологический партнёр';
$_['en']['partners__title-technological'] = 'Technological Partner';
$_['ru']['partners__title-digital'] = 'Цифровой партнёр';
$_['en']['partners__title-digital'] = 'Digital Partner';
$_['ru']['partners__title-information'] = 'Информационные партнеры';
$_['en']['partners__title-information'] = 'Information Partners';
$_['tr']['partners__title-information'] = 'Bilgi Ortakları';
$_['ru']['partners__title-fitness'] = 'Фитнес-партнер';
$_['en']['partners__title-fitness'] = 'Fitness partner';
$_['ru']['partners__title-vradio'] = 'Федеральный радио партнер';
$_['en']['partners__title-vradio'] = 'Federal radio partner';
$_['ru']['partners__title-sdek'] = 'Логистический партнёр';
$_['en']['partners__title-sdek'] = '';
$_['ru']['partners__title-partners'] = 'Партнеры';
$_['en']['partners__title-partners'] = 'Partners';
$_['tr']['partners__title-partners'] = 'İş&nbsp;Ortakları';
$_['ru']['partners__button-partner'] = 'Стать партнером';
$_['en']['partners__button-partner'] = 'Become a&nbsp;partner';
$_['tr']['partners__button-partner'] = 'İŞ&nbsp;ORTAĞI&nbsp;OLUN';
$_['ru']['partners__button-accreditation'] = 'Аккредитация СМИ';
$_['en']['partners__button-accreditation'] = 'Media accreditation';
$_['tr']['partners__button-accreditation'] = 'BASIN AKREDİTASYON';

$_['ru']['footer__meta-copyright'] = 'ООО &laquo;Бизнес-форумы&raquo;';
$_['en']['footer__meta-copyright'] = 'Business Forums LLC';
$_['tr']['footer__meta-copyright'] = 'Business Forums LLC';
$_['ru']['footer__link-privacy'] = 'Политика конфиденциальности персональных данных';
$_['en']['footer__link-privacy'] = 'Personal data privacy policy';
$_['tr']['footer__link-privacy'] = 'KIŞISEL VERILER GIZLILIK POLITIKASI';
$_['ru']['footer__meta_2'] = 'Разработка и&nbsp;продвижение:';
$_['en']['footer__meta_2'] = 'Developed and promoted by';
$_['pt']['footer__meta_2'] = 'Desenvolvimento e&nbsp;promo&ccedil;&atilde;o:';
$_['es']['footer__meta_2'] = 'Desarrollo y&nbsp;promoci&oacute;n:';

$_['ru']['digital-plf__text_1'] = 'Live-трансляции <br>форумов еженедельно';
$_['ru']['digital-plf__text_2'] = 'Доступ 24/7&nbsp;с любого устройства';
$_['ru']['digital-plf__text_3'] = 'База знаний с&nbsp;500+ часов видеоконтента';

$_['ru']['community__title'] = 'Сообщество';
$_['en']['community__title'] = 'Community';
$_['tr']['community__title'] = 'Topluluk';
$_['ru']['community__text'] = '
<div class="d-none d-md-block">
<p>Сообщество &laquo;Synergy Community&raquo; объединяет предпринимателей и&nbsp;профессионалов в&nbsp;различных сферах деятельности по&nbsp;всему миру.</p>
Присоединяйтесь к&nbsp;&laquo;Synergy Community&raquo;, чтобы получить возможность:
</div>
<div class="d-md-none">
<p>Сообщество Synergy Community&nbsp;&mdash; это пространство для общения пользователей платформы, созданное для нетворкинга, обмена знаниями и&nbsp;опытом.</p>
Присоединяйтесь к&nbsp;сообществу, чтобы:
</div>
';
$_['en']['community__text'] = '
<p>The Synergy Community brings together entrepreneurs and professionals in&nbsp;various areas of&nbsp;performance around the world.</p>
Join The Synergy Community and you will have the opportunity&nbsp;to:
';
$_['tr']['community__text'] = '
<p>Synergy Topluluğu d&uuml;nyanın farklı yerlerinden, farklı uzmanlık alanlarındaki girişimcileri ve&nbsp;profesyonelleri bir araya getirir.</p>
Synergy Topluluğuna katılarak aşağıdaki fırsatları yakalayın:
';
$_['ru']['community__features'] = '
<ul class="list-dashed d-none d-md-block">
<li>стать участником крупнейших онлайн-мероприятий страны или организовать свое мероприятие</li>
<li>получать образовательные услуги</li>
<li>продвигать товары и&nbsp;услуги вашего предприятия</li>
<li>увеличить свои продажи</li>
<li>получить новых клиентов, партнеров, поставщиков и&nbsp;исполнителей</li>
<li>нанять квалифицированные кадры</li>
<li>получить работу и&nbsp;развивать свою карьеру</li>
<li>узнать о&nbsp;лучших мировых практиках от&nbsp;экспертов</li>
</ul>
<ul class="list-dashed d-md-none">
<li>получить доступ к&nbsp;эксклюзивному контенту;</li>
<li>познакомиться с&nbsp;представителями перспективных отраслей; </li>
<li>найти новых партнёров и&nbsp;коллег;</li>
<li>организовать собственное онлайн-мероприятие.</li>
</ul>
';
$_['en']['community__features'] = '
<ul class="list-dashed">
<li>Become a&nbsp;participant in&nbsp;the largest online events of&nbsp;the country or&nbsp;hold your own event</li>
<li>Access educational services</li>
<li>Promote your company&rsquo;s products and services</li>
<li>Increase your sales</li>
<li>Get new customers, partners, suppliers, and contractors</li>
<li>Hire qualified personnel</li>
<li>Get a&nbsp;job and develop your career</li>
<li>Learn the world&rsquo;s best practices from real experts</li>
</ul>
';
$_['tr']['community__features'] = '
<ul class="list-dashed">
<li>&Uuml;lkenin en&nbsp;b&uuml;y&uuml;k &ccedil;evrimi&ccedil;i etkinliğinde katılımcı olarak yer alın, kendi etkinliğinizi d&uuml;zenleyin,</li>
<li>Eğitim hizmetlerinden faydalanın,</li>
<li>Şirketinizin &uuml;r&uuml;n ve&nbsp;hizmetlerini tanıtın,</li>
<li>Satışlarınızı artırın,</li>
<li>Yeni m&uuml;şteriler, iş&nbsp;ortakları, tedarik&ccedil;iler ve&nbsp;y&uuml;klenicilere ulaşın,</li>
<li>İşe kalifiye personel alın,</li>
<li>İş&nbsp;bulup kariyer basamaklarını tırmanın,</li>
<li>D&uuml;nyanın en&nbsp;iyi uygulamalarını ger&ccedil;ek uzmanlardan &ouml;ğrenin.</li>
</ul>
';
$_['ru']['community__item_1'] = 'Круг <br>единомышленников';
$_['en']['community__item_1'] = 'Meet like-minded people';
$_['tr']['community__item_1'] = 'Sizin gibi d&uuml;ş&uuml;nen insanlarla tanışın';
$_['ru']['community__item_2'] = 'Обмен знаниями и&nbsp;опытом';
$_['en']['community__item_2'] = 'Share your experience';
$_['tr']['community__item_2'] = 'Deneyiminizi paylaşın';
$_['ru']['community__item_3'] = 'Нетворкинг и&nbsp;поиск партнеров';
$_['en']['community__item_3'] = 'Find new business partners and clients';
$_['tr']['community__item_3'] = 'Yeni iş&nbsp;ortakları ve&nbsp;m&uuml;şteriler bulun';
$_['ru']['community__button'] = 'Вступить в&nbsp;сообщество';
$_['en']['community__button'] = 'Join community';

$_['ru']['about__title'] = 'О&nbsp;платформе';
$_['en']['about__title'] = 'About the platform';
$_['ru']['about__text_1'] = '<span>Еженедельные <br>онлайн-форумы</span> с&nbsp;ведущими мировыми спикерами';
$_['en']['about__text_1'] = '<span>Weekly online <br>forums</span> with the world&rsquo;s best speakers';
$_['ru']['about__text_2'] = '<span>Онлайн- <br></span>практикумы и&nbsp;вебинары';
$_['en']['about__text_2'] = '<span>Online workshops</span> and webinars';
$_['ru']['about__text_3'] = '<span>База знаний</span> <br>с&nbsp;лучшими видео <br>с&nbsp;событий &laquo;Синергии&raquo;';
$_['en']['about__text_3'] = '<span>Knowledge base</span> with best videos from synergy events';
$_['ru']['about__text_4'] = '<span>Цифровые сервисы</span> для&nbsp;бизнеса';
$_['en']['about__text_4'] = '<span>Digital services</span> for business';
$_['ru']['about__text_5'] = '<span>Антикризисные</span> <br>IT-решения';
$_['en']['about__text_5'] = 'Anti-crisis <span>it&nbsp;solutions</span>';
$_['ru']['about__text_6'] = '<span>Новости</span> <br>и&nbsp;аналитика';
$_['en']['about__text_6'] = '<span>News</span> and analytics';

$_['ru']['base__title'] = 'База знаний <br>Synergy Base';
$_['en']['base__title'] = 'Synergy <br>Knowledge Base';
$_['ru']['base__text'] = 'Оформив подписку на&nbsp;Synergy.Online, вы&nbsp;получите доступ к&nbsp;базе знаний, где собраны обучающие видео от&nbsp;ведущих экспертов России и&nbsp;мира.';
$_['en']['base__text'] = 'By&nbsp;subscribing to&nbsp;Synergy.Online, you will get access to&nbsp;the Knowledge Base, which contains training videos from leading experts in&nbsp;Russia and the world.';
$_['ru']['base__col-item-1'] = '465 ведущих <br>бизнес-спикеров <br>планеты';
$_['en']['base__col-item-1'] = '465 leading <br>business speakers <br>of&nbsp;the planet';
$_['ru']['base__col-item-2'] = '500+ часов <br>обучающих <br>видео';
$_['en']['base__col-item-2'] = '500+ hours <br>of&nbsp;training <br>videos';
$_['ru']['base__col-item-3'] = '10+&nbsp;ключевых тем: <br>от&nbsp;старта бизнеса <br>до&nbsp;личной <br>эффективности';
$_['en']['base__col-item-3'] = '10+&nbsp;key topics: <br>from startups <br>to&nbsp;personal <br>effectiveness';
$_['ru']['base__col-item-4'] = 'Онлайн-программы <br>Школы бизнеса <br>&laquo;Синергия&raquo;';
$_['en']['base__col-item-4'] = 'Online programmes <br>of&nbsp;Synergy <br>Business School';
$_['ru']['base__col-item-5'] = 'Дополнительные <br>материалы: <br>чек-листы, <br>презентации';
$_['en']['base__col-item-5'] = 'Additional <br>materials: <br>checklists, <br>presentations';
$_['ru']['base__col-item-6'] = 'Просмотр <br>на&nbsp;любых <br>устройствах <br>в&nbsp;HD-качестве';
$_['en']['base__col-item-6'] = 'Watch <br>on&nbsp;any <br>device <br>in&nbsp;HD quality';

$_['ru']['services__title'] = 'Сервисы для <br>предпринимателей';
$_['en']['services__title'] = 'Services for <br>entrepreneurs';
$_['ru']['services__description'] = 'На&nbsp;Synergy.Online вы&nbsp;можете воспользоваться <br>10+&nbsp;сервисами для бизнеса в&nbsp;формате одного окна.';
$_['en']['services__description'] = 'Synergy.Onlines you to&nbsp;use <br>10+&nbsp;services for business in&nbsp;a&nbsp;single window format.';

$_['ru']['faq-question-1'] = 'Что такое Synergy Online Forum?';
$_['en']['faq-question-1'] = 'What is&nbsp;Synergy Online Forum?';
$_['ru']['faq-answer-1'] = 'Synergy Online Forum&nbsp;&mdash; масштабное digital-мероприятие, которое собирает сотни крупнейших спикеров со&nbsp;всего мира. Приглашенные эксперты открыто обсуждают ключевые темы дня&nbsp;&mdash; от&nbsp;карантина и&nbsp;посткризисного маркетинга до&nbsp;фитнеса и&nbsp;запуска стартапа&nbsp;&mdash; и&nbsp;делятся взглядами на&nbsp;то, как меняется мир, к&nbsp;которому мы&nbsp;привыкли.';
$_['en']['faq-answer-1'] = 'Synergy Online Forum is&nbsp;a&nbsp;large-scale digital event that gathers hundreds of&nbsp;leading speakers from around the world. Our experts openly discuss key topics of&nbsp;the day; from quarantine and post-crisis marketing to&nbsp;fitness and launching a&nbsp;startup. Experts share their views on&nbsp;how the world is&nbsp;changing.';
$_['ru']['faq-question-2'] = 'Кто такие &laquo;ведущие спикеры&raquo; и&nbsp;о&nbsp;чем они говорят?';
$_['en']['faq-question-2'] = 'Who are these &laquo;leading speakers&raquo; and what are they talking about?';
$_['ru']['faq-answer-2'] = 'Среди хедлайнеров и&nbsp;спикеров в&nbsp;программе Synergy Online Forum&nbsp;&mdash; экономисты, аналитики, бизнес-консультанты, политики, общепризнанные лидеры мнений в&nbsp;своих областях. На&nbsp;Форуме уже выступили Ицхак Адизес, Кьелл Нордстрем, Ирина Хакамада, Нассим Талеб, Джордан Белфорт, Михаил Кучмент, Евгений Черняк и&nbsp;многие другие яркие личности. Панель спикеров Synergy Online Forum постоянно дополняется. После оплаты вам на&nbsp;почту придет письмо с&nbsp;чеком и&nbsp;просьбой подтвердить подписку. Сделайте это&nbsp;&mdash; и&nbsp;свободно пользуйтесь Synergy Online.<br><br>Каждый спикер в&nbsp;рамках своего выступления акцентирует внимание на&nbsp;том, в&nbsp;чем он&nbsp;разбирается лучше всего&nbsp;&mdash; будь&nbsp;то управление изменениями, легкое отношение к&nbsp;жизни, запуск собственного бизнеса или поиск внутреннего Я.&nbsp;Режим прямой трансляции позволяет зрителям задать приглашенному эксперту вопрос в&nbsp;чате и&nbsp;участвовать в&nbsp;выступлении.';
$_['en']['faq-answer-2'] = 'Synergy Online Forum includes economists, analysts, business consultants, politicians, and recognized opinion leaders in&nbsp;their fields. Ichak Adizes, Kjell Nordstr&ouml;m, Nassim Taleb, Jordan Belfort, Yuval Noah Harari, Manfred Kets de&nbsp;Vries, John Tschohl, and many other bright persons have already performed at&nbsp;the forum. The speaker panel at&nbsp;Synergy Online Forum is&nbsp;constantly being updated. <br><br>Each speaker focuses on&nbsp;his specialization&nbsp;&mdash; managing change, taking things easy, start-ups, or&nbsp;searching for your inner self. Live broadcast mode allows viewers to&nbsp;participate by&nbsp;asking questions to&nbsp;the guest speaker via live chat.';
$_['ru']['faq-question-3'] = 'Где и&nbsp;как проходят выступления?';
$_['en']['faq-question-3'] = 'Where can&nbsp;I watch the forum?';
$_['ru']['faq-answer-3'] = 'Трансляции Synergy Online Forum проходят на&nbsp;цифровой платформе Synergy Online. Чтобы получить доступ к&nbsp;эфиру, нужно зарегистрироваться на&nbsp;платформе и&nbsp;оформить подписку по&nbsp;одному из&nbsp;доступных тарифов. Подробности об&nbsp;условиях пакетов участия ищите в&nbsp;разделе &laquo;Тарифы&raquo;.<br><br>Форум проходит каждую неделю. Новая неделя&nbsp;&mdash; новые спикеры. Программа Форума и&nbsp;состав панели спикеров регулярно обновляется&nbsp;&mdash; вся информация доступна в&nbsp;разделе &laquo;Программа&raquo;.<br><br>Трансляция Synergy Online Forum ведется параллельно с&nbsp;пяти сцен&nbsp;&mdash; переключайтесь между экранами в&nbsp;личном кабинете, чтобы смотреть выступление каждого спикера. Экраны сцен и&nbsp;медиацентра Форума находятся в&nbsp;разделе &laquo;Трансляции&raquo;.';
$_['en']['faq-answer-3'] = 'Synergy Online Forum broadcasts are hosted on&nbsp;the digital platform, Synergy.Online. To&nbsp;get access to&nbsp;broadcast, you need to&nbsp;sign up&nbsp;on&nbsp;the platform and subscribe to&nbsp;one of&nbsp;the available subscription packages. After payment, you will receive an&nbsp;email with a&nbsp;receipt and a&nbsp;request to&nbsp;confirm your subscription. Synergy Online can then be&nbsp;accessed anytime you want. For more information about the terms of&nbsp;participation packages, see the &laquo;Subscription&raquo; section. <br><br>The forum is&nbsp;held every week. New week, new speakers. The forum program and speaker panel are updated regularly. All information is&nbsp;available in&nbsp;the &laquo;Program&raquo; section.';
$_['ru']['faq-question-4'] = 'Как мне оплатить доступ к&nbsp;Synergy Online Forum?';
$_['en']['faq-question-4'] = 'How can&nbsp;I pay for access to&nbsp;Synergy Online Forum?';
$_['ru']['faq-answer-4'] = 'Если вы&nbsp;хотите посмотреть Synergy Online Forum один раз, ищите анонс предстоящего Форума в&nbsp;разделе &laquo;Трансляции&raquo;. Там вы&nbsp;найдете информацию о&nbsp;ближайшем Synergy Online Forum и&nbsp;кнопку &laquo;Оплатить&raquo;. Нажмите&nbsp;ее, чтобы внести платеж. После покупки вам на&nbsp;почту придет письмо с&nbsp;подтверждением регистрации и&nbsp;доступа к&nbsp;трансляции Форума. Оплатить билет можно Apple Pay, Google Pay или картой.';
$_['en']['faq-answer-4'] = 'If&nbsp;you want to&nbsp;watch Synergy Online Forum, look for the announcement of&nbsp;the upcoming Forum in&nbsp;the &laquo;Live Broadcasts&raquo; section. There you will find information about the next Synergy Online Forum and the &laquo;Pay&raquo; button. Click it&nbsp;to&nbsp;make a&nbsp;payment. After your purchase, you will receive an&nbsp;email confirming your registration and access to&nbsp;the forum broadcast. You can pay for your ticket using Apple Pay, Google Pay, or&nbsp;a&nbsp;credit card.';
$_['ru']['faq-question-5'] = 'А&nbsp;если я&nbsp;хочу смотреть Synergy Online Forum чаще?';
$_['en']['faq-question-5'] = 'What if I want to watch Synergy Online Forum more often?';
$_['ru']['faq-answer-5'] = 'Оформите постоянную подписку на&nbsp;Synergy Online. Платформа предлагает 12&nbsp;разных тарифов&nbsp;&mdash; выбирайте самый комфортный. Условия пакетов участия различаются, но&nbsp;суть в&nbsp;одном: чем выше тариф, тем шире доступ. Подробнее о&nbsp;составе и&nbsp;условиях подписки читайте в&nbsp;описании тарифов Synergy Online.';
$_['en']['faq-answer-5'] = 'Sign up&nbsp;for a&nbsp;permanent subscription to&nbsp;Synergy Online. The platform offers 3&nbsp;subscription packages. Terms of&nbsp;participation packages vary; the higher the rate, the wider the access. For more information about subscription terms and conditions, see the description of&nbsp;Synergy Online packages.';
$_['ru']['faq-question-6'] = 'Если я&nbsp;оплатил разовый доступ к&nbsp;форуму, я&nbsp;смогу смотреть все сцены?';
$_['en']['faq-question-6'] = 'If&nbsp;I&nbsp;paid for one-time access to&nbsp;the forum, will I&nbsp;be able to&nbsp;watch all the speeches?';
$_['ru']['faq-answer-6'] = 'Да, на&nbsp;протяжении всего Форума можно переключаться между экранами, смотреть выступления каждого спикера параллельно или по&nbsp;очереди&nbsp;&mdash; как вам больше нравится.';
$_['en']['faq-answer-6'] = 'Yes. Throughout the forum, you can switch between screens and watch each speaker&rsquo;s speeches in&nbsp;or&nbsp;out of&nbsp;order.';
$_['ru']['faq-question-7'] = 'Я&nbsp;не&nbsp;успел посмотреть&nbsp;&mdash; что мне делать?';
$_['en']['faq-question-7'] = 'I&nbsp;didn&rsquo;t have time to&nbsp;watch&nbsp;&mdash; what should I&nbsp;do?';
$_['ru']['faq-answer-7'] = 'Не&nbsp;волнуйтесь&nbsp;&mdash; все трансляции записываются и&nbsp;попадают в&nbsp;архив роликов Synergy Online, их&nbsp;можно посмотреть позже. Ищите нужную запись в&nbsp;разделе &laquo;Трансляции&raquo; и&nbsp;в&nbsp;Базе знаний.<br><br>Обратите внимание: оформив подписку на&nbsp;пакет Standard, вы&nbsp;сможете посмотреть запись трансляции в&nbsp;течение 48&nbsp;часов с&nbsp;момента проведения. А&nbsp;при подписке на&nbsp;пакет Business записи будут доступны всегда.';
$_['en']['faq-answer-7'] = 'Don&rsquo;t worry, all broadcasts are recorded and archived in&nbsp;Synergy Online Videos, and you can watch them later. Search for the desired recording in&nbsp;the &laquo;Live Broadcasts&raquo; section in&nbsp;the Synergy Knowledge Base. <br><br>Please note: by&nbsp;subscribing to&nbsp;the Standard package, you will only be&nbsp;able to&nbsp;access the broadcast within the first 48&nbsp;hours of&nbsp;the event, and if&nbsp;you subscribe to&nbsp;the Business package, your records will always be&nbsp;available.';


/* ======= */
/* Попапы */
$_['ru']['popup-accreditation__header'] = 'Запрос на&nbsp;аккредитацию СМИ присылать на&nbsp;почту';
$_['en']['popup-accreditation__header'] = 'Media Accreditation Procedure';
$_['tr']['popup-accreditation__header'] = 'Medya Akreditayon Prosed&uuml;r&uuml;';
$_['ru']['popup-accreditation__subtitle-1'] = '';
$_['en']['popup-accreditation__subtitle-1'] = '';
$_['ru']['popup-accreditation__text-1'] = 'Раиса Бояхчян&nbsp;&mdash; <a href="mailto:RBoiakhchian@synergy.ru" target="_blank">RBoiakhchian@synergy.ru</a>';
$_['en']['popup-accreditation__text-1'] = '';
$_['ru']['popup-accreditation__subtitle-2'] = '';
$_['en']['popup-accreditation__subtitle-2'] = '';
$_['ru']['popup-accreditation__text-2'] = '';
$_['en']['popup-accreditation__text-2'] = '';
$_['ru']['popup-accreditation__text-3'] = 'Решение о&nbsp;предоставление аккредитации будет направлено Вам на&nbsp;почту.';
$_['en']['popup-accreditation__text-3'] = 'For media accreditation please send a&nbsp;request to&nbsp;<a href="mailto:media@synergyglobal.com" target="_blank">media@synergyglobal.com</a>';
$_['tr']['popup-accreditation__text-3'] = 'Medya akreditasyon taleplerinizi <a href="mailto:media@synergyglobal.com" target="_blank">media@synergyglobal.com</a> e-posta adresine g&ouml;nderebilirsiniz.';
$_['ru']['popup-accreditation__rules'] = 'Правила цитирования для&nbsp;СМИ';
$_['en']['popup-accreditation__rules'] = 'Citation rules for mass media';
$_['tr']['popup-accreditation__rules'] = 'BASIN MENSUPLARI İ&Ccedil;İN ATIF KURALLARI';

$_['ru']['popup-franchise__title'] = 'Получить презентацию';
$_['en']['popup-franchise__title'] = 'Get presentation';

$_['ru']['popup-speakers-offer__title'] = 'Стать спикером';
$_['en']['popup-speakers-offer__title'] = 'Become a&nbsp;speaker';
$_['tr']['popup-speakers-offer__title'] = 'KONUŞMACI&nbsp;OLUN';
$_['ru']['popup-speakers-offer__theme'] = 'Тема выступления';
$_['en']['popup-speakers-offer__theme'] = 'Speech Topic';

$_['ru']['popup-price__package'] = 'Пакет';
$_['en']['popup-price__package'] = 'Package';
$_['tr']['popup-price__package'] = 'Paket';
$_['ru']['popup-price-form__title'] = 'Зарегистрируйтесь, чтобы перейти к&nbsp;оплате';
$_['en']['popup-price-form__title'] = 'Register to&nbsp;proceed to&nbsp;payment';
$_['tr']['popup-price-form__title'] = 'Register to&nbsp;proceed to&nbsp;payment &Ouml;demeye devam etmek i&ccedil;in kaydolun';
$_['ru']['popup-price-form__title_demo'] = 'Попробуйте демо-доступ';
$_['en']['popup-price-form__title_demo'] = 'Try demo access';
$_['ru']['popup-price-form__payback-text'] = 'С&nbsp;вашего счета будет снят и&nbsp;возвращен платеж в&nbsp;размере 1&nbsp;руб.';
$_['ru']['popup-price-form__footer-text-1'] = 'Согласен <span class="checkcontainer__text-recurrent">на&nbsp;ежемесячный платеж и&nbsp;</span>с&nbsp;условиями <a href="files/reccuring_offerta.pdf" target="_blank" data-fancybox class="footer__link-offer">договора оферты</a>';
$_['en']['popup-price-form__footer-text-1'] = 'I&nbsp;agree to&nbsp;the monthly payment and the terms of&nbsp;the <a href="files/reccuring_offerta.pdf" target="_blank" data-fancybox class="footer__link-offer">offer agreement</a>';
$_['ru']['popup-price-form__footer-text-2'] = 'Согласен с&nbsp;<a href="#privacy" class="fancybox privacy">политикой конфиденциальности</a> и&nbsp;на&nbsp;получение рассылок от&nbsp;Школы бизнеса Синергия';
$_['en']['popup-price-form__footer-text-2'] = 'I&nbsp;agree with the <a href="files/privacy_en.pdf" target="_blank" data-fancybox>Privacy Policy</a> and to&nbsp;receive newsletters from Synergy Business School';
$_['es']['popup-price-form__footer-text-2'] = 'ACEPTO EL&nbsp;TRATAMIENTO DE&nbsp;MIS DATOS PERSONALES, RECIBO DE&nbsp;BOLETINES Y&nbsp;CON <a href="files/privacy_es.pdf" target="_blank" data-fancybox>LA&nbsp;POL&Iacute;TICA DE&nbsp;PRIVACIDAD</a>';
$_['pt']['popup-price-form__footer-text-2'] = 'Concordo com a&nbsp;<a href="files/privacy_pt.pdf" target="_blank" data-fancybox>pol&iacute;tica de&nbsp;privacidade</a>e&nbsp;receber boletins informativos de&nbsp;Synergy Business School';
$_['tr']['popup-price-form__footer-text-2'] = '<a href="files/privacy_tr.pdf" target="_blank" data-fancybox>Gizlilik Politikasını</a> kabul ediyorum ve&nbsp;Synergy Business School&rsquo;dan b&uuml;lten almayı kabul ediyorum';
$_['ru']['popup-price__button-buy'] = 'Купить';
$_['en']['popup-price__button-buy'] = 'Buy';
$_['es']['popup-price__button-buy'] = 'Comprar';
$_['tr']['popup-price__button-buy'] = 'AL';
$_['pt']['popup-price__button-buy'] = 'Comprar';
$_['ru']['popup-price__button-get'] = 'Получить';
$_['en']['popup-price__button-get'] = 'Sign up';
$_['es']['popup-price__button-get'] = 'Conseguir';
$_['pt']['popup-price__button-get'] = 'Obter';
$_['tr']['popup-price__button-get'] = '&Ouml;deme';

/* ========= */
/* Страницы */

/* /price/ */
$_['ru']['price-header__title'] = '<span>Чтобы завершить регистрацию,</span> <br>выберите пакет участия';
$_['en']['price-header__title'] = '<span>Please proceed with the payment</span> <br>to&nbsp;complete your registration';
$_['es']['price-header__title'] = '<span>Para completar el&nbsp;registro</span> <br>, seleccione el&nbsp;paquete de&nbsp;suscripci&oacute;n';
$_['tr']['price-header__title'] = '<span>L&uuml;tfen kayıt işleminizi tamamamlamak</span> <br>i&ccedil;in &ouml;deme adımına ilerleyin';
$_['pt']['price-header__title'] = '<span>Por favor, prossiga com o&nbsp;pagamento</span> <br>para completar o&nbsp;seu registro';

$_['ru']['price-payment__title'] = 'Содержание пакетов';
$_['en']['price-payment__title'] = 'Package Contents';
$_['pt']['price-payment__title'] = 'Conte&uacute;do da&nbsp;Embalagem';
$_['es']['price-payment__title'] = 'Contenido del paquete';
$_['tr']['price-payment__title'] = 'Paket İ&ccedil;eriği';
$_['ru']['price-payment__title-academic'] = 'Академические пакеты';
$_['en']['price-payment__title-academic'] = 'Academic Packs';
$_['ru']['price-payment__title-language'] = 'Языковые пакеты';
$_['en']['price-payment__title-language'] = 'Language Packs';
$_['ru']['price-payment-button'] = 'Оплатить участие';
$_['en']['price-payment-button'] = 'Pay for participation';

$_['ru']['price-card__seemore'] = 'Показать подробнее';
$_['en']['price-card__seemore'] = 'Show more';

$_['ru']['price-payment__button-pay'] = 'Оплатить';
$_['en']['price-payment__button-pay'] = 'Pay';
$_['es']['price-payment__button-pay'] = 'Pagar';
$_['tr']['price-payment__button-pay'] = '&Ouml;DEME';
$_['pt']['price-payment__button-pay'] = 'Pagar';
$_['ru']['price-payment__button-get'] = 'Получить';
$_['en']['price-payment__button-get'] = 'Sign up';
$_['ru']['price-payment__button-free'] = 'Бесплатно*';
$_['en']['price-payment__button-free'] = 'Free*';
// $_['ru']['price-payment__label-text'] = 'Я&nbsp;согласен на&nbsp;регулярный автоплатеж в&nbsp;соответствии с&nbsp;условиями тарифа, а&nbsp;также с&nbsp;<span href="files/reccuring_offerta.pdf" data-fancybox>договором-офертой</span>';
// $_['en']['price-payment__label-text'] = 'I&nbsp;agree to&nbsp;a&nbsp;monthly autopayment in&nbsp;the amount of&nbsp;the package price and the terms of&nbsp;the <span href="files/reccuring_offerta.pdf" data-fancybox>offer agreement</span>';
$_['ru']['price-payment__label-text'] = 'Продление подписки происходит автоматически';
$_['en']['price-payment__label-text'] = 'Subscription renewal is&nbsp;automatic';

$_['ru']['price-lang__title'] = 'Synergy <span>language <br>сеntre</span>';
$_['en']['price-lang__title'] = 'Synergy <span>Language <br>Сеntre</span>';
$_['es']['price-lang__title'] = 'Synergy <span>Language <br>Сеntre</span>';
$_['tr']['price-lang__title'] = 'Synergy <span>Dil <br>Merkezi</span>';
$_['pt']['price-lang__title'] = 'Synergy <span>Language <br>Centro</span>';
$_['ru']['price-lang__description'] = 'В&nbsp;Преподаватели центра&nbsp;&mdash; действующие практики, международные эксперты, в&nbsp;том числе работающие над произношением голливудских звезд. В&nbsp;программу новой модульной программе обучения входят международные вебинары, мастер-классы с&nbsp;носителями языка, работа в&nbsp;креативных проектах и&nbsp;творческих мастерских.';
$_['en']['price-lang__description'] = 'In&nbsp;our language centre, you can learn the language using a&nbsp;new modular method that guarantees fast results and an&nbsp;exciting studying process. Our teachers are current practitioners and international experts, including those working on&nbsp;the pronunciation of&nbsp;Hollywood stars. A&nbsp;modular system of&nbsp;language courses and a&nbsp;language constructor will allow you to&nbsp;avoid boring and uninteresting topics. The training program includes international webinars, master classes with native speakers, work in&nbsp;creative projects and workshops.';
$_['es']['price-lang__description'] = 'En&nbsp;nuestro centro de&nbsp;idiomas, puede aprender el&nbsp;idioma utilizando un&nbsp;nuevo m&eacute;todo modular que garantiza resultados r&aacute;pidos y&nbsp;un&nbsp;proceso de&nbsp;estudio emocionante. Nuestros profesores son profesionales actuales y&nbsp;expertos internacionales, incluidos aquellos que trabajan en&nbsp;la&nbsp;pronunciaci&oacute;n de&nbsp;las estrellas de&nbsp;Hollywood. Un&nbsp;sistema modular de&nbsp;cursos de&nbsp;idiomas y&nbsp;un&nbsp;constructor de&nbsp;idiomas le&nbsp;permitir&aacute;n evitar temas aburridos y&nbsp;poco interesantes. El&nbsp;programa de&nbsp;capacitaci&oacute;n incluye seminarios web internacionales, clases magistrales con hablantes nativos, trabajo en&nbsp;proyectos creativos y&nbsp;talleres.';
$_['tr']['price-lang__description'] = 'Dil merkezimizde, hızlı sonu&ccedil;lar ve&nbsp;heyecan verici bir eğitim deneyimini garanti eden yeni mod&uuml;ler y&ouml;ntemi kullanarak dil &ouml;ğrenebilirsiniz. Eğitmenlerimiz ve&nbsp;uluslararası uzmanlarımız arasında Hollywood yıldızlarıyla telaffuz konularında &ccedil;alışmakta olan &ouml;ğretmenler de&nbsp;bulunur. Mod&uuml;ler dil kursu sistemi ve&nbsp;dil &ouml;ğretme uygulaması sıkılmanızı engeller, dili ilginizi &ccedil;ekecek konular &uuml;zerinden &ouml;ğretir. Eğitim programı, uluslararası web seminerleri, anadili konulan eğitmenlerin ders anlattığı ana sınıflar, yaratıcı projelerde ve&nbsp;at&ouml;lyelerde yapılan g&ouml;revleri i&ccedil;erir.';
$_['pt']['price-lang__description'] = 'Em&nbsp;nosso centro de&nbsp;idiomas, voc&ecirc; pode aprender o&nbsp;idioma usando um&nbsp;novo m&eacute;todo modular que garante resultados r&aacute;pidos e&nbsp;um&nbsp;processo de&nbsp;estudo emocionante. Nossos professores s&atilde;o profissionais atuais e&nbsp;especialistas internacionais, incluindo aqueles que trabalham na&nbsp;pron&uacute;ncia de&nbsp;Estrelas de&nbsp;Hollywood. Um&nbsp;sistema modular de&nbsp;cursos de&nbsp;idiomas e&nbsp;um&nbsp;construtor de&nbsp;idiomas permitir&aacute; que voc&ecirc; evite temas chatos e&nbsp;desinteressantes. O&nbsp;programa de&nbsp;treinamento inclui webinars internacionais, aulas de&nbsp;mestrado com falantes nativos, trabalho em&nbsp;projetos criativos e&nbsp;oficinas.';

$_['ru']['price-lang__subtitle'] = 'Формы занятий';
$_['en']['price-lang__subtitle'] = 'Form of&nbsp;studies';
$_['ru']['price-lang__item_1'] = 'Групповая';
$_['en']['price-lang__item_1'] = 'Group';
$_['ru']['price-lang__item_2'] = 'Мини-группа <span class="price-lang__item-part">из&nbsp;5&nbsp;человек</span>';
$_['en']['price-lang__item_2'] = 'Mini group <span class="price-lang__item-part">of&nbsp;5&nbsp;people</span>';
$_['ru']['price-lang__item_3'] = 'Индивидуальная';
$_['en']['price-lang__item_3'] = 'Individual';

$_['ru']['price-base__title'] = '<span>500+</span> часов видео выступлений';
$_['en']['price-base__title'] = '<span>500+</span> hours of&nbsp;video performances';
$_['es']['price-base__title'] = '<span>M&aacute;s de&nbsp;500</span> horas de&nbsp;actuaciones en&nbsp;video';
$_['tr']['price-base__title'] = '<span>500</span> saati aşkın video kaydı';
$_['pt']['price-base__title'] = '<span>500</span> horas de&nbsp;apresenta&ccedil;&otilde;es em&nbsp;v&iacute;deo';

$_['ru']['price-base__subtitle-1'] = 'Выступления <br class="d-none d-lg-inline">с&nbsp;лучших форумов Синергии';
$_['en']['price-base__subtitle-1'] = 'Presentations <br class="d-none d-lg-inline">from the best Synergy forums';
$_['ru']['price-base__text-1'] = 'Synergy Global Forum, Synergy Insight Forum, Synergy Digital Forum, Synergy Woman Forum и&nbsp;другие.';
$_['en']['price-base__text-1'] = 'Synergy Global Forum, Synergy Insight Forum, Synergy Digital Forum, Synergy Woman Forum and others.';
$_['es']['price-base__text-1'] = 'Synergy Global Forum, Synergy Insight Forum, Synergy Digital Forum, Synergy Woman Forum y&nbsp;otros.';
$_['tr']['price-base__text-1'] = 'Synergy Global Forum, Synergy Insight Forum, Synergy Dijital Forum, Synergy Kadın Forumu ve&nbsp;diğer forumlar.';
$_['pt']['price-base__text-1'] = 'Synergy Global Forum, Synergy Insight Forum, Synergy Digital Forum, Synergy Woman Forum e&nbsp;outros.';

$_['ru']['price-base__subtitle-2'] = 'Среди <br class="d-none d-lg-inline">спикеров';
$_['en']['price-base__subtitle-2'] = 'Speakers <br class="d-none d-lg-inline">of&nbsp;the Forum:';
$_['ru']['price-base__text-2'] = 'Арнольд Шварценеггер, Оливер Стоун, Нассим Талеб, Майк Тайсон, Ричард Брэнсон, Ник Вуйчич, Игорь Манн и&nbsp;еще 200+&nbsp;экспертов.';
$_['en']['price-base__text-2'] = 'Arnold Schwarzenegger, Oliver Stone, Nassim Taleb, Mike Tyson, Richard Branson, Nick Vujicic, Igor Mann and 200+ other experts';
$_['es']['price-base__text-2'] = 'Arnold Schwarzenegger, Oliver Stone, Nassim Taleb, Mike Tyson, Richard Branson, Nick Vujicic, Igor Mann y&nbsp;200+ otros expertos';
$_['tr']['price-base__text-2'] = 'Arnold Schwarzenegger, Oliver Stone, Nassim Taleb, Mike Tyson, Richard Branson, Nick Vujicic, Igor Mann ve&nbsp;200&rsquo;&uuml; aşkın uzman';
$_['pt']['price-base__text-2'] = 'Arnold Schwarzenegger, Oliver Stone, Nassim Taleb, Mike Tyson, Richard Branson, Nick Vujicic, Igor Mann e&nbsp;200+ especialistas';

$_['ru']['price-sbs__title'] = 'Онлайн-<span>практикумы</span>';
$_['en']['price-sbs__title'] = 'Online <span>workshops</span>';
$_['es']['price-sbs__title'] = '<span>Talleres</span> Online';
$_['tr']['price-sbs__title'] = '&Ccedil;evrimi&ccedil;i <span>at&ouml;lye &ccedil;alışmaları</span>';
$_['pt']['price-sbs__title'] = 'Oficinas <span>online</span>';

$_['ru']['price-sbs__text_1'] = 'Неограниченный доступ к&nbsp;онлайн-практикумам по&nbsp;актуальным темам&nbsp;&mdash; предпринимательство, менеджмент, личная эффективность, маркетинг и&nbsp;продажи.';
$_['en']['price-sbs__text_1'] = 'Access to&nbsp;online workshops on&nbsp;current topics&nbsp;&mdash; entrepreneurship, management, personal effectiveness, marketing and sales.';
$_['es']['price-sbs__text_1'] = 'Acceso a&nbsp;talleres en&nbsp;l&iacute;nea sobre temas de&nbsp;actualidad: emprendimiento, gesti&oacute;n, efectividad personal, marketing y&nbsp;ventas.';
$_['tr']['price-sbs__text_1'] = 'Girişimcilik, y&ouml;netim, kişisel verimlilik, pazarlama ve&nbsp;satış gibi g&uuml;ncel konulardaki &ccedil;evrimi&ccedil;i at&ouml;lyelere erişim.';
$_['pt']['price-sbs__text_1'] = 'Acesso a&nbsp;oficinas online sobre temas atuais&nbsp;&mdash; empreendedorismo, gest&atilde;o, efic&aacute;cia pessoal, marketing e&nbsp;vendas.';

$_['ru']['price-sbs__text_2'] = 'Спикеры&nbsp;&mdash; Ицхак Адизес, Брайан Трейси, Радислав Гандапас, Глеб Архангельский и&nbsp;многие другие ведущие эксперты.';
$_['en']['price-sbs__text_2'] = 'Speakers&nbsp;&mdash; Ichak Adizes, Brian Tracy, Radislav Gandapas, Gleb Arkhangelskiy, and many other leading experts.';
$_['es']['price-sbs__text_2'] = 'Oradores: Ichak Adizes, Brian Tracy, Radislav Gandapas, Gleb Arkhangelskiy y&nbsp;muchos otros expertos l&iacute;deres.';
$_['tr']['price-sbs__text_2'] = 'Ichak Adizes, Brian Tracy, Radislav Gandapas, Gleb Arkhangelskiy ve&nbsp;diğer bir&ccedil;ok &ouml;nde gelen uzmandan oluşan konuşmacı kadrosu.';
$_['pt']['price-sbs__text_2'] = 'Oradores&nbsp;&mdash; Ichak Adizes, Brian Tracy, Radislav Gandapas, Gleb Arkhangelskiy, e&nbsp;muitos outros especialistas l&iacute;deres.';

$_['ru']['price-crm__title'] = 'Synergy <span>CRM</span>';
$_['en']['price-crm__title'] = 'Synergy <span>CRM</span>';
$_['es']['price-crm__title'] = 'Synergy <span>CRM</span>';
$_['tr']['price-crm__title'] = 'Synergy <span>CRM</span>';
$_['pt']['price-crm__title'] = 'Synergy <span>CRM</span>';

$_['ru']['price-crm__text'] = 'Новое решение корпорации Синергия для&nbsp;управления распределенными командами: контроль за&nbsp;выполнением задач, отчетность, статистика и&nbsp;аналитика, обработка клиентских обращений: максимальный функционал на&nbsp;неограниченное число пользователей.';
$_['en']['price-crm__text'] = 'Synergy Corporation&rsquo;s new solution for managing distributed teams: monitoring task performance, reporting, statistics and analytics, processing client requests: maximum functionality for an&nbsp;unlimited number of&nbsp;users.';
$_['es']['price-crm__text'] = 'La&nbsp;nueva soluci&oacute;n de&nbsp;Synergy Corporation para gestionar equipos distribuidos: monitoreo del rendimiento de&nbsp;las tareas, informes, estad&iacute;sticas y&nbsp;an&aacute;lisis, procesamiento de&nbsp;solicitudes de&nbsp;clientes: funcionalidad m&aacute;xima para un&nbsp;n&uacute;mero ilimitado de&nbsp;usuarios.';
$_['tr']['price-crm__text'] = 'Synergy Corporation&rsquo;ın farklı yerlerde &ccedil;alışan takımların y&ouml;netimi amacıyla geliştirdiği yeni &ccedil;&ouml;z&uuml;m: G&ouml;rev performansını takip etme, istatistikler ve&nbsp;analizler, m&uuml;şteri taleplerini işleme, sınırsız sayıda kullanım i&ccedil;in maksimum işlevsellik.';
$_['pt']['price-crm__text'] = 'A&nbsp;nova solu&ccedil;&atilde;o da&nbsp;Synergy Corporation para a&nbsp;gest&atilde;o de&nbsp;equipas distribu&iacute;das: monitoriza&ccedil;&atilde;o do&nbsp;desempenho da&nbsp;tarefa, relat&oacute;rios, estat&iacute;sticas e&nbsp;an&aacute;lises, processamento de&nbsp;pedidos dos clientes: m&aacute;xima funcionalidade para um&nbsp;n&uacute;mero ilimitado de&nbsp;utilizadores.';


$_['ru']['price-university__title'] = 'Университет <br><span>Синергия</span>';
$_['ru']['price-university__description'] = 'Фундаментальное академическое образование, максимум практики и&nbsp;погружение в&nbsp;профессию с&nbsp;самого начала обучения&nbsp;&mdash; главные принципы Университета. Выбирайте более чем из&nbsp;сотни образовательных программ, и&nbsp;вы&nbsp;обязательно найдете&nbsp;ту, которая вам действительно интересна.';

$_['ru']['price-university__item-number_1'] = '95&nbsp;000+';
$_['ru']['price-university__item-text_1'] = 'студентов из&nbsp;50&nbsp;стран учится в&nbsp;2019 году';

$_['ru']['price-university__item-number_2'] = '200+';
$_['ru']['price-university__item-text_2'] = 'образовательных программ по&nbsp;всем уровням образования';

$_['ru']['price-university__item-number_3'] = '70&nbsp;000';
$_['ru']['price-university__item-text_3'] = 'выпускников за 10 лет';

/* Пакеты */
$_['ru']['price-card-option-cancel'] = 'Продление подписки произойдёт автоматически. Вы&nbsp;можете отменить подписку в&nbsp;Личном кабинете в&nbsp;любой момент.';
$_['en']['price-card-option-cancel'] = 'Your subscription will be&nbsp;extended automatically. You can unsubscribe in&nbsp;your Personal account at&nbsp;any time.';
$_['pt']['price-card-option-cancel'] = 'A&nbsp;sua inscri&ccedil;&atilde;o ser&aacute; prorrogada automaticamente. Voc&ecirc; pode cancelar a&nbsp;inscri&ccedil;&atilde;o em&nbsp;sua conta pessoal a&nbsp;qualquer momento.';
$_['es']['price-card-option-cancel'] = 'Su&nbsp;suscripci&oacute;n se&nbsp;extender&aacute; autom&aacute;ticamente. Puede darse de&nbsp;baja en&nbsp;su&nbsp;cuenta personal en&nbsp;cualquier momento.';
$_['tr']['price-card-option-cancel'] = 'Aboneliğiniz otomatik olarak uzatılacaktır. Aboneliğinizi, kişisel hesabınızdan istediğiniz zaman iptal edebilirsiniz.';
$_['ru']['price-card-option-cancel-free'] = '*При оформлении подписки с&nbsp;вашего счета будет снят и&nbsp;возвращен платеж в&nbsp;размере 1&nbsp;руб. По&nbsp;истечении пробного периода вы&nbsp;автоматически будете переключены на&nbsp;тариф Standard (1&nbsp;000&nbsp;руб.&nbsp;в&nbsp;мес.) и&nbsp;произойдет списание первого платежа в&nbsp;1&nbsp;000&nbsp;руб. Отменить подписку можно в&nbsp;личном кабинете.';
$_['en']['price-card-option-cancel-free'] = '*When you sign up&nbsp;for a&nbsp;subscription, a&nbsp;payment of&nbsp;1&nbsp;RUB will be&nbsp;charged and refunded to&nbsp;your account. After expiration of&nbsp;the trial period, you will be&nbsp;automatically switched to&nbsp;the Standard tariff (1,000 rubles per month) and the first payment of&nbsp;1,000 rubles will be&nbsp;debited, unless you cancel your subscription in&nbsp;your Personal account.';

$_['ru']['price-card-option-access-base-24h'] = '24-часовой доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo;';
$_['en']['price-card-option-access-base-24h'] = '24/7 access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events';
$_['ru']['price-card-option-access-base-7d'] = '7-дневный доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo;';
$_['en']['price-card-option-access-base-7d'] = 'Access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 7&nbsp;days';
$_['ru']['price-card-option-access-base-1w'] = 'Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo; на&nbsp;1&nbsp;неделю';
$_['en']['price-card-option-access-base-1w'] = 'Access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 1&nbsp;week';
$_['ru']['price-card-option-access-base-1m'] = 'Ограниченный доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo; на&nbsp;1&nbsp;месяц';
$_['en']['price-card-option-access-base-1m'] = 'Limited access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 1&nbsp;month';
$_['ru']['price-card-option-access-base-1m-unlim'] = 'Неограниченный доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo; на&nbsp;1&nbsp;месяц';
$_['en']['price-card-option-access-base-1m-unlim'] = 'Unlimited access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 1&nbsp;month';
$_['es']['price-card-option-access-base-1m-unlim'] = 'Acceso ilimitado a&nbsp;Synergy Base de&nbsp;Conocimiento con videos de&nbsp;todos los eventos de&nbsp;Synergy durante 1&nbsp;mes';
$_['tr']['price-card-option-access-base-1m-unlim'] = 'Tüm Synergy etkinliklerinin video kayıtları da dahil olmak üzere Synergy Bilgi Deposuna 1 ay boyunca sınırsız erişim';
$_['pt']['price-card-option-access-base-1m-unlim'] = 'Acesso ilimitado &agrave;&nbsp;Base de&nbsp;Conhecimentos de&nbsp;Synergy com v&iacute;deos de&nbsp;todos os&nbsp;eventos por 1&nbsp;m&ecirc;s';

$_['ru']['price-card-option-access-base-3m'] = 'Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo; на&nbsp;3&nbsp;месяца';
$_['en']['price-card-option-access-base-3m'] = 'Access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 3&nbsp;months';
$_['ru']['price-card-option-access-base-3m-unlim'] = 'Неограниченный доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo; на&nbsp;3&nbsp;месяца';
$_['en']['price-card-option-access-base-3m-unlim'] = 'Unlimited access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 3&nbsp;months';
$_['ru']['price-card-option-access-base-6m'] = 'Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo; на&nbsp;6&nbsp;месяцев';
$_['en']['price-card-option-access-base-6m'] = 'Access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 6&nbsp;months';
$_['ru']['price-card-option-access-base-6m-unlim'] = 'Неограниченный доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo; на&nbsp;6&nbsp;месяцев';
$_['en']['price-card-option-access-base-6m-unlim'] = 'Unlimited access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 6&nbsp;months';
$_['ru']['price-card-option-access-base-12m'] = 'Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo; на&nbsp;12&nbsp;месяцев';
$_['en']['price-card-option-access-base-12m'] = 'Access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 12&nbsp;months';
$_['ru']['price-card-option-access-base-12m-unlim'] = 'Неограниченный доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo; на&nbsp;12&nbsp;месяцев';
$_['en']['price-card-option-access-base-12m-unlim'] = 'Unlimited access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events for 12&nbsp;months';
$_['ru']['price-card-option-access-base-date'] = 'Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo; до&nbsp;1&nbsp;мая';
$_['en']['price-card-option-access-base-date'] = 'Access to&nbsp;Synergy Knowledge Base with videos of&nbsp;all Synergy events up&nbsp;to&nbsp;may&nbsp;1';
$_['ru']['price-card-option-access-base-forum'] = 'Доступ к&nbsp;Базе знаний на&nbsp;время форума';
$_['en']['price-card-option-access-base-forum'] = 'Access to&nbsp;Synergy Knowledge Base during the Forum';

$_['en']['price-card-option-access-sof-online'] = 'Access to&nbsp;Synergy Live Forum. Valid for the time of&nbsp;live broadcast';
$_['es']['price-card-option-access-sof-online'] = 'Acceso a&nbsp;Synergy Live Forum. V&aacute;lido para el&nbsp;momento de&nbsp;la&nbsp;transmisi&oacute;n en&nbsp;vivo';
$_['tr']['price-card-option-access-sof-online'] = 'Synergy Canlı Foruma erişim. Yalnızca canlı yayın s&uuml;resince ge&ccedil;erli';
$_['pt']['price-card-option-access-sof-online'] = 'Acesso ao&nbsp;Synergy Live Forum. V&aacute;lido para o&nbsp;tempo de&nbsp;transmiss&atilde;o ao&nbsp;vivo';
$_['ru']['price-card-option-access-sof-1d'] = 'Доступ к&nbsp;трансляции Synergy Online Forum 23&nbsp;мая';
$_['en']['price-card-option-access-sof-1d'] = 'Access to&nbsp;the broadcast of&nbsp;Synergy Online Forum on&nbsp;May&nbsp;23';
$_['ru']['price-card-option-access-sof-1m'] = 'Доступ к&nbsp;еженедельным LIVE-форумам &laquo;Синергии&raquo; в&nbsp;течение 1&nbsp;месяца';
$_['en']['price-card-option-access-sof-1m'] = 'Access to&nbsp;Synergy Weekly Live Forums for 1&nbsp;month';
$_['es']['price-card-option-access-sof-1m'] = 'Acceso a&nbsp;todos Synergy Weekly Live Forum durante 1&nbsp;mes';
$_['tr']['price-card-option-access-sof-1m'] = 'Synergy Haftalık Canlı Forumlarına 1&nbsp;ay boyunca erişim';

$_['pt']['price-card-option-access-sof-1m'] = 'Acesso a&nbsp;F&oacute;runs Semanais Synergy ao&nbsp;Vivo por 1&nbsp;m&ecirc;s';
$_['ru']['price-card-option-access-sof-3m'] = 'Доступ к&nbsp;еженедельным LIVE-форумам &laquo;Синергии&raquo; в&nbsp;течение 3&nbsp;месяцев';
$_['en']['price-card-option-access-sof-3m'] = 'Access to&nbsp;Synergy Weekly Live Forums for 3&nbsp;months';
$_['ru']['price-card-option-access-sof-6m'] = 'Доступ к&nbsp;еженедельным LIVE-форумам &laquo;Синергии&raquo; в&nbsp;течение 6&nbsp;месяцев';
$_['en']['price-card-option-access-sof-6m'] = 'Access to&nbsp;Synergy Weekly Live Forums for 6&nbsp;months';
$_['ru']['price-card-option-access-sof-12m'] = 'Доступ к&nbsp;еженедельным LIVE-форумам &laquo;Синергии&raquo; в&nbsp;течение 12&nbsp;месяцев';
$_['en']['price-card-option-access-sof-12m'] = 'Access to&nbsp;Synergy Weekly Live Forums for 12&nbsp;months';
$_['ru']['price-card-option-access-sof-48h'] = 'Доступ к&nbsp;записи трансляции Synergy Online Forum на&nbsp;48&nbsp;часов';
$_['en']['price-card-option-access-sof-48h'] = 'Access to&nbsp;the video record of&nbsp;Synergy Online Forum broadcast for 48&nbsp;hours';
$_['es']['price-card-option-access-sof-48h'] = 'Acceso a&nbsp;la&nbsp;grabaci&oacute;n de&nbsp;v&iacute;deo de&nbsp;Synergy Online Forum transmitido durante 48&nbsp;horas';
$_['tr']['price-card-option-access-sof-48h'] = 'Access to&nbsp;the video record of&nbsp;Synergy Online Forum broadcast for 48&nbsp;hours';
$_['pt']['price-card-option-access-sof-48h'] = 'Acesso ao&nbsp;v&iacute;deo do&nbsp;Synergy Online Forum transmitido por 48&nbsp;horas';
$_['ru']['price-card-option-access-sof-unlim'] = 'Неограниченный доступ к&nbsp;записи Synergy Online Forum';
$_['en']['price-card-option-access-sof-unlim'] = 'Unlimited access to&nbsp;the video record of&nbsp;Synergy Online Forum';
$_['es']['price-card-option-access-sof-unlim'] = 'Acceso ilimitado a&nbsp;la&nbsp;grabaci&oacute;n de&nbsp;v&iacute;deo de&nbsp;Synergy Online Forum';
$_['tr']['price-card-option-access-sof-unlim'] = 'Synergy Online Forumun video kayıtlarına sınırsız erişim';
$_['pt']['price-card-option-access-sof-unlim'] = 'Acesso ilimitado aos v&iacute;deos gravados do&nbsp;Synergy Online Forum';

$_['ru']['price-card-option-access-crm-1m'] = 'Доступ к&nbsp;Synergy CRM&nbsp;&mdash; 1&nbsp;месяц';
$_['en']['price-card-option-access-crm-1m'] = 'Access to&nbsp;Synergy CRM&nbsp;&mdash; 1&nbsp;month';
$_['ru']['price-card-option-access-crm-2m'] = 'Доступ к&nbsp;Synergy CRM&nbsp;&mdash; 2&nbsp;месяца';
$_['en']['price-card-option-access-crm-2m'] = 'Access to&nbsp;Synergy CRM&nbsp;&mdash; 2&nbsp;months';
$_['ru']['price-card-option-access-crm-free'] = 'Synergy CRM&nbsp;&mdash; доступ по&nbsp;тарифу &laquo;Бесплатный&raquo;';
$_['en']['price-card-option-access-crm-free'] = 'Access to&nbsp;Synergy CRM at&nbsp;the &ldquo;Free&rdquo; tariff';
$_['ru']['price-card-option-access-crm-2x-business'] = 'Доступ к&nbsp;Synergy CRM для 2-х рабочих мест по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
$_['en']['price-card-option-access-crm-2x-business'] = 'Access to&nbsp;Synergy CRM for 2&nbsp;accounts at&nbsp;the &ldquo;Business&rdquo; tariff&nbsp;&mdash; 1&nbsp;month';
$_['es']['price-card-option-access-crm-2x-business'] = 'Acceso a&nbsp;Synergy CRM para 2&nbsp;cuentas en&nbsp;la&nbsp;tarifa &laquo;Business&raquo;&nbsp;&mdash; 1&nbsp;mes';
$_['tr']['price-card-option-access-crm-2x-business'] = '&laquo;Business&raquo; tarifesinde 1&nbsp;ay boyunca 2&nbsp;hesap i&ccedil;in Synergy CRM erişimi';
$_['pt']['price-card-option-access-crm-2x-business'] = 'Acesso a&nbsp;Synergy CRM para 2&nbsp;contas na&nbsp;tarifa &laquo;Neg&oacute;cio&raquo;&nbsp;&mdash; 1&nbsp;m&ecirc;s';
$_['ru']['price-card-option-access-crm-3x-business'] = 'Доступ к&nbsp;Synergy CRM для 3-х рабочих мест по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
$_['en']['price-card-option-access-crm-3x-business'] = 'Access to&nbsp;Synergy CRM for 3&nbsp;accounts at&nbsp;the &ldquo;Business&rdquo; tariff&nbsp;&mdash; 1&nbsp;month';
$_['es']['price-card-option-access-crm-3x-business'] = 'Acceso a&nbsp;Synergy CRM para 3&nbsp;cuentas en&nbsp;la&nbsp;tarifa &laquo;Business&raquo;&nbsp;&mdash; 1&nbsp;mes';
$_['tr']['price-card-option-access-crm-3x-business'] = 'Business tarifesinde 1&nbsp;ay boyunca 3&nbsp;hesap i&ccedil;in Synergy CRM erişimi';
$_['pt']['price-card-option-access-crm-3x-business'] = 'Acesso a&nbsp;Synergy CRM para 3&nbsp;contas na&nbsp;tarifa &laquo;Neg&oacute;cio&raquo;&nbsp;&mdash; 1&nbsp;m&ecirc;s';
$_['ru']['price-card-option-access-crm-3x-silver'] = 'Доступ к&nbsp;Synergy CRM для 3-х рабочих мест по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
$_['en']['price-card-option-access-crm-3x-silver'] = 'Access to&nbsp;Synergy CRM for 3&nbsp;accounts at&nbsp;the &ldquo;Business&rdquo; tariff&nbsp;&mdash; 1&nbsp;month';
$_['es']['price-card-option-access-crm-3x-silver'] = 'Acceso a&nbsp;Synergy CRM para 3&nbsp;cuentas en&nbsp;la&nbsp;tarifa &laquo;Business&raquo;&nbsp;&mdash; 1&nbsp;mes';
$_['tr']['price-card-option-access-crm-3x-silver'] = 'Business tarifesinde 1&nbsp;ay boyunca 3&nbsp;hesap i&ccedil;in Synergy CRM erişimi';
$_['pt']['price-card-option-access-crm-3x-silver'] = 'Acesso a&nbsp;Synergy CRM para 3&nbsp;contas na&nbsp;tarifa &laquo;Neg&oacute;cio&raquo;&nbsp;&mdash; 1&nbsp;m&ecirc;s';
$_['ru']['price-card-option-access-crm-3x-gold'] = 'Доступ к&nbsp;Synergy CRM для 3-х рабочих мест по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
$_['en']['price-card-option-access-crm-3x-gold'] = 'Access to&nbsp;Synergy CRM for 3&nbsp;accounts at&nbsp;the &ldquo;Business&rdquo; tariff&nbsp;&mdash; 1&nbsp;month';
$_['es']['price-card-option-access-crm-3x-gold'] = 'Acceso a&nbsp;Synergy CRM para 3&nbsp;cuentas en&nbsp;la&nbsp;tarifa &laquo;Business&raquo;&nbsp;&mdash; 1&nbsp;mes';
$_['tr']['price-card-option-access-crm-3x-gold'] = 'Business tarifesinde 1&nbsp;ay boyunca 3&nbsp;hesap i&ccedil;in Synergy CRM erişimi';
$_['pt']['price-card-option-access-crm-3x-gold'] = 'Acesso a&nbsp;Synergy CRM para 3&nbsp;contas na&nbsp;tarifa &laquo;Neg&oacute;cio&raquo;&nbsp;&mdash; 1&nbsp;m&ecirc;s';
$_['ru']['price-card-option-access-crm-3x-platinum'] = 'Доступ к&nbsp;Synergy CRM для 3-х рабочих мест по&nbsp;тарифу &laquo;Бизнес&raquo; на&nbsp;1&nbsp;месяц';
$_['en']['price-card-option-access-crm-3x-platinum'] = 'Access to&nbsp;Synergy CRM for 3&nbsp;accounts at&nbsp;the &ldquo;Business&rdquo; tariff&nbsp;&mdash; 1&nbsp;month';
$_['es']['price-card-option-access-crm-3x-platinum'] = 'Acceso a&nbsp;Synergy CRM para 3&nbsp;cuentas en&nbsp;la&nbsp;tarifa &laquo;Business&raquo;&nbsp;&mdash; 1&nbsp;mes';
$_['tr']['price-card-option-access-crm-3x-platinum'] = 'Business tarifesinde 1&nbsp;ay boyunca 3&nbsp;hesap i&ccedil;in Synergy CRM erişimi';
$_['pt']['price-card-option-access-crm-3x-platinum'] = 'Acesso a&nbsp;Synergy CRM para 3&nbsp;contas na&nbsp;tarifa &laquo;Neg&oacute;cio&raquo;&nbsp;&mdash; 1&nbsp;m&ecirc;s';

$_['ru']['price-card-option-access-practicum-1'] = '1&nbsp;онлайн-практикум Школы бизнеса (на&nbsp;выбор)';
$_['en']['price-card-option-access-practicum-1'] = '1&nbsp;online workshop of&nbsp;Synergy Business School (at&nbsp;your choice)';
$_['ru']['price-card-option-access-practicum-monthly-1'] = '1&nbsp;онлайн-практикум Школы бизнеса &laquo;Синергия&raquo; ежемесячно (на&nbsp;выбор)';
$_['en']['price-card-option-access-practicum-monthly-1'] = '1&nbsp;online workshop of&nbsp;Synergy Business School monthly (at&nbsp;your choice)';
$_['ru']['price-card-option-access-practicum-monthly-3'] = '3&nbsp;онлайн-практикума Школы бизнеса &laquo;Синергия&raquo; ежемесячно (на&nbsp;выбор)';
$_['en']['price-card-option-access-practicum-monthly-3'] = '3&nbsp;online workshops of&nbsp;Synergy Business School monthly (at&nbsp;your choice)';
$_['ru']['price-card-option-access-practicum-unlim'] = 'Неограниченный доступ к&nbsp;онлайн-практикумам Школы бизнеса &laquo;Синергия&raquo;';
$_['en']['price-card-option-access-practicum-unlim'] = 'Unlimited access to&nbsp;online workshops of&nbsp;Synergy Business School';
$_['ru']['price-card-option-access-practicum-unlim-1m'] = 'Неограниченный доступ к&nbsp;онлайн-практикумам Школы бизнеса &laquo;Синергия&raquo; сроком на&nbsp;1&nbsp;месяц';
$_['en']['price-card-option-access-practicum-unlim-1m'] = 'Unlimited access to&nbsp;online workshops of&nbsp;Synergy Business School for 1&nbsp;month';
$_['es']['price-card-option-access-practicum-unlim-1m'] = 'Acceso ilimitado a&nbsp;los talleres en&nbsp;l&iacute;nea de&nbsp;de&nbsp;Synergy Business School por un&nbsp;per&iacute;odo de&nbsp;1&nbsp;mes';
$_['tr']['price-card-option-access-practicum-unlim-1m'] = 'Synergy Business School&rsquo;un online at&ouml;lyelerine sınırsız erişim';
$_['pt']['price-card-option-access-practicum-unlim-1m'] = 'Acesso ilimitado a&nbsp;oficinas online da&nbsp;Synergy Business School por 1&nbsp;m&ecirc;s';
$_['ru']['price-card-option-access-practicum-unlim-3m'] = 'Неограниченный доступ к&nbsp;онлайн-практикумам Школы бизнеса &laquo;Синергия&raquo; сроком на&nbsp;3&nbsp;месяца';
$_['en']['price-card-option-access-practicum-unlim-3m'] = 'Unlimited access to&nbsp;online workshops of&nbsp;Synergy Business School for 3&nbsp;months';
$_['ru']['price-card-option-access-practicum-unlim-6m'] = 'Неограниченный доступ к&nbsp;онлайн-практикумам Школы бизнеса &laquo;Синергия&raquo; сроком на&nbsp;6&nbsp;месяцев';
$_['en']['price-card-option-access-practicum-unlim-6m'] = 'Unlimited access to&nbsp;online workshops of&nbsp;Synergy Business School for 6&nbsp;months';
$_['ru']['price-card-option-access-practicum-unlim-12m'] = 'Неограниченный доступ к&nbsp;онлайн-практикумам Школы бизнеса &laquo;Синергия&raquo; сроком на&nbsp;12&nbsp;месяцев';
$_['en']['price-card-option-access-practicum-unlim-12m'] = 'Unlimited access to&nbsp;online workshops of&nbsp;Synergy Business School for 12&nbsp;months';

$_['ru']['price-card-option-access-forums-1m'] = 'Доступ к&nbsp;прямым трансляциям других форумов &laquo;Синергии&raquo; в&nbsp;течение 1&nbsp;месяца';
$_['en']['price-card-option-access-forums-1m'] = 'Access to&nbsp;live broadcasts of&nbsp;other Synergy forums for 1&nbsp;month';
$_['ru']['price-card-option-access-forums-3m'] = 'Доступ к&nbsp;прямым трансляциям других форумов &laquo;Синергии&raquo; в&nbsp;течение 3&nbsp;месяцев';
$_['en']['price-card-option-access-forums-3m'] = 'Access to&nbsp;live broadcasts of&nbsp;other Synergy forums for 3&nbsp;months';
$_['ru']['price-card-option-access-forums-6m'] = 'Доступ к&nbsp;прямым трансляциям других форумов &laquo;Синергии&raquo; в&nbsp;течение 6&nbsp;месяцев';
$_['en']['price-card-option-access-forums-6m'] = 'Access to&nbsp;live broadcasts of&nbsp;other Synergy forums for 6&nbsp;months';
$_['ru']['price-card-option-access-forums-12m'] = 'Доступ к&nbsp;прямым трансляциям других форумов &laquo;Синергии&raquo; в&nbsp;течение 12&nbsp;месяцев';
$_['en']['price-card-option-access-forums-12m'] = 'Access to&nbsp;live broadcasts of&nbsp;other Synergy forums for 12&nbsp;months';

$_['ru']['price-card-option-access-education'] = 'Возможность обучения на&nbsp;программах магистратуры, второго и&nbsp;первого высшего образования в&nbsp;Университете &laquo;Синергия&raquo;';
$_['en']['price-card-option-access-education'] = '';

$_['ru']['price-card-option-access-vtb'] = '1&nbsp;год бесплатного обслуживания РКО для бизнеса в&nbsp;банке ВТБ';

$_['ru']['price-card-option-access-genesis'] = 'Интенсив по&nbsp;старту и&nbsp;развитию бизнеса &laquo;Genesis&raquo;';
$_['en']['price-card-option-access-genesis'] = '';
$_['ru']['price-card-option-mini-mba'] = 'Обучение по&nbsp;программе Mini МВА';
$_['en']['price-card-option-mini-mba'] = 'Mini MBA program';
$_['ru']['price-card-option-online-mba'] = 'Обучение по&nbsp;программе Online МВА';
$_['en']['price-card-option-online-mba'] = 'Online MBA program';

$_['ru']['price_bachelor_name'] = 'Бакалавр';
$_['en']['price_bachelor_name'] = 'Bachelor';
$_['ru']['price_magister_name'] = 'Магистр';
$_['en']['price_magister_name'] = 'Master';
$_['ru']['price_postgraduate_name'] = 'Аспирант';
$_['en']['price_postgraduate_name'] = 'Postgraduate';

$_['ru']['price-card-option-education-bachelor'] = 'Обучение по&nbsp;выбранной программе высшего образования (бакалавриат) в&nbsp;Университете &laquo;Синергия&raquo;';
$_['en']['price-card-option-education-bachelor'] = 'Training in&nbsp;the chosen higher education program (Bachelor&rsquo;s degree) at&nbsp;Synergy University';
$_['ru']['price-card-option-education-magister'] = 'Обучение по&nbsp;выбранной программе магистратуры в&nbsp;Университете &laquo;Синергия&raquo;';
$_['en']['price-card-option-education-magister'] = 'Training in&nbsp;the chosen master&rsquo;s program at&nbsp;Synergy University';
$_['ru']['price-card-option-education-postgraduate'] = 'Обучение по&nbsp;выбранной программе аспирантуры в&nbsp;Университете &laquo;Синергия&raquo;';
$_['en']['price-card-option-education-postgraduate'] = 'Training in&nbsp;the chosen postgraduate program at&nbsp;Synergy University';

$_['ru']['price-card-option-education-language-ready'] = 'Обучение в&nbsp;группе по&nbsp;выбранной программе Synergy Language Сеntre в&nbsp;течение 1&nbsp;месяца';
$_['en']['price-card-option-education-language-ready'] = 'Study in&nbsp;a&nbsp;group on&nbsp;to&nbsp;the selected program of&nbsp;Synergy Language Сеntre for 1&nbsp;month';
$_['ru']['price-card-option-education-language-steady'] = 'Обучение в&nbsp;мини-группе (из&nbsp;5&nbsp;чел.) по&nbsp;выбранной программе Synergy Language Сеntre в&nbsp;течение 1&nbsp;месяца';
$_['en']['price-card-option-education-language-steady'] = 'Study in&nbsp;a&nbsp;mini-group (5&nbsp;students) on&nbsp;to&nbsp;the selected program of&nbsp;Synergy Language Сеntre for 1&nbsp;month';
$_['ru']['price-card-option-education-language-run'] = 'Индивидуальное обучение по&nbsp;выбранной программе Synergy Language Сеntre в&nbsp;течение 1&nbsp;месяца, включая занятие по&nbsp;избавлению от&nbsp;акцента от&nbsp;Ali Stoner';
$_['en']['price-card-option-education-language-run'] = 'Individual training on&nbsp;to&nbsp;the selected program of&nbsp;Synergy Language Сеntre for 1&nbsp;month, including the course &ldquo;Speak without accent&rdquo; from Ali Stoner';

$_['ru']['price-card-time-1m'] = 'мес.';
$_['en']['price-card-time-1m'] = 'Month';
$_['es']['price-card-time-1m'] = 'Mes';
$_['tr']['price-card-time-1m'] = 'Aylik';
$_['pt']['price-card-time-1m'] = 'MÊS';

$_['ru']['price-card-time-3m'] = '3&nbsp;месяца';
$_['en']['price-card-time-3m'] = '3&nbsp;Months';
$_['ru']['price-card-time-6m'] = 'полгода';
$_['en']['price-card-time-6m'] = '6&nbsp;Months';
$_['ru']['price-card-time-1y'] = 'год';
$_['en']['price-card-time-1y'] = 'year';

$_['ru']['price-faq-question-1'] = 'Я&nbsp;новый пользователь. С&nbsp;чего мне начать?';
$_['en']['price-faq-question-1'] = 'I&nbsp;am a&nbsp;new user. What should I&nbsp;do at&nbsp;first?';
$_['es']['price-faq-question-1'] = 'Soy un&nbsp;usuario nuevo. &iquest;Qu&eacute; debo hacer al&nbsp;principio?';
$_['tr']['price-faq-question-1'] = 'Yeni kullanıcıyım. İlk adımda ne&nbsp;yapmalıyım?';
$_['pt']['price-faq-question-1'] = 'Sou um&nbsp;novo utilizador. O&nbsp;que devo fazer no&nbsp;in&iacute;cio?';

$_['ru']['price-faq-answer-1'] = '<p>Добро пожаловать! После авторизации на&nbsp;Synergy Online вы&nbsp;попадаете на&nbsp;страницу &laquo;Трансляции&raquo;&nbsp;&mdash; здесь вы&nbsp;видите календарь и&nbsp;архив мероприятий Synergy Online Forum.</p><p>Слева на&nbsp;экране есть боковое меню&nbsp;&mdash; это карта платформы. Она содержит разделы, между которыми можно перемещаться в&nbsp;пространстве Synergy.Online.</p><p>Если вы&nbsp;оформили демо-доступ к&nbsp;платформе, вам откроется раздел Synergy.Base на&nbsp;7&nbsp;дней.</p><p>Если вы&nbsp;хотите расширить доступ и&nbsp;пользоваться другими разделами, оформите постоянную подписку.</p>';
$_['en']['price-faq-answer-1'] = '<p>Welcome! After logging in&nbsp;to&nbsp;Synergy Online, you will see the &ldquo;Live Broadcasts&rdquo; page&nbsp;&mdash; here you can find the calendar and archive of&nbsp;Synergy Online Forum events.</p><p>There is&nbsp;a&nbsp;side menu on&nbsp;the left side of&nbsp;the screen&nbsp;&mdash; it&nbsp;is&nbsp;the map of&nbsp;the platform. It&nbsp;contains sections of&nbsp;the Synergy.Online platform.</p><p>If&nbsp;you have demo access to&nbsp;the platform, you can use the Synergy.Base section for 7&nbsp;days.</p><p>If&nbsp;you want to&nbsp;expand your access and use other sections, sign up&nbsp;for a&nbsp;permanent subscription.</p>';
$_['es']['price-faq-answer-1'] = '<p>&iexcl;Bienvenidos! Despu&eacute;s de&nbsp;iniciar sesi&oacute;n en&nbsp;Synergy Online, ver&aacute; la&nbsp;p&aacute;gina &laquo;Transmisiones en&nbsp;Vivo&raquo;; aqu&iacute; puede encontrar el&nbsp;calendario y&nbsp;el&nbsp;archivo de&nbsp;los eventos de&nbsp;Synergy Online Forum.</p><p>Hay un&nbsp;men&uacute; lateral en&nbsp;el&nbsp;lado izquierdo de&nbsp;la&nbsp;pantalla&nbsp;&mdash; es&nbsp;el&nbsp;mapa de&nbsp;la&nbsp;plataforma. Contiene secciones de&nbsp;la&nbsp;Synergy.Online plataform.</p><p>Si&nbsp;tiene acceso de&nbsp;demostraci&oacute;n a&nbsp;la&nbsp;plataforma, puede usar Synergy.Base durante 7&nbsp;d&iacute;as.</p><p>Si&nbsp;desea ampliar su&nbsp;acceso y&nbsp;utilizar otras secciones, reg&iacute;strese para obtener una suscripci&oacute;n permanente.</p>';
$_['tr']['price-faq-answer-1'] = '<p>Hoş geldiniz! Synergy Online&rsquo;da oturum a&ccedil;tıktan sonra, &laquo;Canlı Yayınlar&raquo; sayfasını g&ouml;receksiniz. Burada Synergy Online Forumun etkinlik takvimini ve&nbsp;arşivini bulabilirsiniz.</p><Bu&nbsp;men&uuml;de>Ekranın sol tarafındaki yan men&uuml; platformun haritasını g&ouml;sterir. Bu&nbsp;men&uuml;de Synergy.Online&rsquo;ın b&ouml;l&uuml;mleri bulunur.</p><p>Platforma demo erişiminiz varsa Synergy.Base b&ouml;l&uuml;m&uuml;n&uuml; 7&nbsp;g&uuml;n boyunca kullanabilirsiniz.</p><p>Erişim kapsamınızı genişleterek diğer b&ouml;l&uuml;mleri de&nbsp;kullanmak isterseniz kalıcı aboneliğe ge&ccedil;in.</p>';
$_['pt']['price-faq-answer-1'] = '<p>Seja bem-vindo(a)! Depois de&nbsp;entrar no&nbsp;Synergy Online, voc&ecirc; vai ver a&nbsp;p&aacute;gina &laquo;Transmiss&otilde;es ao&nbsp;Vivo&raquo;&nbsp;&mdash; aqui voc&ecirc; pode encontrar o&nbsp;calend&aacute;rio e&nbsp;arquivo de&nbsp;eventos do&nbsp;Synergy Online Forum.</p><p>H&aacute;&nbsp;um&nbsp;menu lateral no&nbsp;lado esquerdo da&nbsp;tela contendo o&nbsp;mapa da&nbsp;plataforma. Ele cont&eacute;m se&ccedil;&otilde;es da&nbsp;plataforma Synergy.Online.</p><p>Se&nbsp;voc&ecirc; tem acesso demo &agrave;&nbsp;plataforma, voc&ecirc; pode usar a&nbsp;se&ccedil;&atilde;o Synergy.Base durante 7&nbsp;dias.</p><p>Se&nbsp;voc&ecirc; quiser expandir o&nbsp;seu acesso e&nbsp;usar outras se&ccedil;&otilde;es, fa&ccedil;a uma inscri&ccedil;&atilde;o permanente.</p>';


$_['ru']['price-faq-question-2'] = 'Что такое Synergy.Base?';
$_['en']['price-faq-question-2'] = 'What is&nbsp;Synergy.Base?';
$_['es']['price-faq-question-2'] = '&iquest;Qu&eacute; es&nbsp;Synergy.Base?';
$_['tr']['price-faq-question-2'] = 'Synergy.Base nedir?';
$_['pt']['price-faq-question-2'] = 'O&nbsp;que &eacute;&nbsp;Synergy.Base?';

$_['ru']['price-faq-answer-2'] = '<p>Synergy.Base&nbsp;&mdash; это база знаний &laquo;Синергии&raquo;. На&nbsp;платформе собрана библиотека образовательных материалов на&nbsp;самые разные темы: развитие бизнеса, переход в&nbsp;онлайн, личная эффективность, тайм-менеджмент, психология, фитнес, искусство, духовный рост и&nbsp;многое другое.</p><p>Она включает 500+ часов записей трансляций Synergy Online Forum, лучшие выступления спикеров всех прошедших форумов &laquo;Синергии&raquo;, практикумы, вебинары и&nbsp;тренинги Школы бизнеса &laquo;Синергии&raquo;.</p><p>Все видео доступны в&nbsp;HD-формате на&nbsp;всех гаджетах и&nbsp;в&nbsp;любой точке мира. Выбирайте самый полезный контент, пересматривайте записи, сохраняйте в&nbsp;подборку и&nbsp;используйте новые знания на&nbsp;практике</p>';
$_['en']['price-faq-answer-2'] = '<p>Synergy.Base is&nbsp;the knowledge base of&nbsp;Synergy. The platform contains a&nbsp;library of&nbsp;educational materials on&nbsp;a&nbsp;variety of&nbsp;topics: business development, transition to&nbsp;online, personal effectiveness, time management, psychology, fitness, art, spiritual growth and much more.</p><p>It&nbsp;includes 500+ hours of&nbsp;Synergy Online Forum broadcast recordings, the best speeches by&nbsp;speakers of&nbsp;all previous Synergy forums, workshops, webinars and trainings of&nbsp;Synergy Business School.</p><p>All videos are available in&nbsp;HD format on&nbsp;all gadgets and anywhere in&nbsp;the world. Choose the most useful content, watch video records, save them and put new knowledge into practice</p>';
$_['es']['price-faq-answer-2'] = '<p>Synergy.Base es&nbsp;la&nbsp;Base de&nbsp;Conocimiento de&nbsp;Synergy. La&nbsp;plataforma contiene una biblioteca de&nbsp;materiales educativos sobre una variedad de&nbsp;temas: desarrollo econ&oacute;mico, transici&oacute;n a&nbsp;l&iacute;nea, efectividad personal, administraci&oacute;n del tiempo, psicolog&iacute;a, fitness, arte, crecimiento espiritual y&nbsp;mucho m&aacute;s.</p><p>Incluye m&aacute;s de&nbsp;500 horas de&nbsp;grabaciones de&nbsp;transmisi&oacute;n de&nbsp;Synergy Online Forum, los mejores discursos de&nbsp;los oradores de&nbsp;todos los foros de&nbsp;Synergy, talleres, seminarios web y&nbsp;capacitaciones anteriores de&nbsp;Synergy Business School.</p><p>Todos los videos est&aacute;n disponibles en&nbsp;formato&nbsp;HD en&nbsp;todos los gadgets y&nbsp;en&nbsp;cualquier parte del mundo. Elija el&nbsp;contenido m&aacute;s &uacute;til, vea las grabaciones de&nbsp;video, gu&aacute;rdelos y&nbsp;ponga nuevos conocimientos en&nbsp;pr&aacute;ctica</p>';
$_['tr']['price-faq-answer-2'] = '<p>Synergy.Base, Synergy&rsquo;nin bilgi deposudur. Platform, &ccedil;eşitli konular hakkındaki eğitim materyalleri i&ccedil;eren bir k&uuml;t&uuml;phanedir: İş&nbsp;geliştirme, &ccedil;evrimi&ccedil;i sisteme ge&ccedil;iş, kişisel verimlilik, zaman y&ouml;netimi, psikoloji, fitness, sanat, ruhsal gelişim ve&nbsp;&ccedil;ok daha fazlası.</p><p>Ayrıca platformda 500 saati aşkın Synergy Online Forum yayın kaydı bulunur. Bu&nbsp;kayıtlar, &ouml;nceki Synergy forumlarında, at&ouml;lyelerinde ve&nbsp;Synergy Business School eğitimlerinde yer almış en&nbsp;iyi konuşmacıların konuşmalarını i&ccedil;erir.</p><p>Kayıtların tamamı, d&uuml;nyanın her yerinden her t&uuml;rden cihazda&nbsp;HD formatında seyredilebilir. En&nbsp;kullanışlı i&ccedil;eriği se&ccedil;in, video kayıtlarını izleyin, kaydedin ve&nbsp;&ouml;ğrendiğiniz yeni bilgileri hayata ge&ccedil;irin.</p>';
$_['pt']['price-faq-answer-2'] = '<p>Synergy.Base &eacute;&nbsp;a&nbsp;base de&nbsp;conhecimentos da&nbsp;Synergy. A&nbsp;plataforma cont&eacute;m uma biblioteca de&nbsp;materiais educacionais sobre uma variedade de&nbsp;t&oacute;picos: desenvolvimento de&nbsp;neg&oacute;cios, transi&ccedil;&atilde;o para online, efic&aacute;cia pessoal, gest&atilde;o de&nbsp;tempo, psicologia, aptid&atilde;o, arte, crescimento espiritual e&nbsp;muito mais.</p><p>Ela Inclui 500+ horas de&nbsp;grava&ccedil;&otilde;es de&nbsp;transmiss&atilde;o do&nbsp;Synergy Online Forum, os&nbsp;melhores discursos dos oradores de&nbsp;todos os&nbsp;f&oacute;runs de&nbsp;Synergy anteriores, oficinas, webinars e&nbsp;treinamentos da&nbsp;Synergy Business School.</p><p>Todos os&nbsp;v&iacute;deos est&atilde;o dispon&iacute;veis em&nbsp;formato&nbsp;HD em&nbsp;todos os&nbsp;dispositivos e&nbsp;em&nbsp;qualquer lugar do&nbsp;mundo. Escolha o&nbsp;conte&uacute;do mais &uacute;til, veja v&iacute;deos gravados, salv&aacute;-los e&nbsp;coloque novos conhecimentos em&nbsp;pr&aacute;tica.</p>';

$_['ru']['price-faq-question-3'] = 'Как оформить подписку и&nbsp;зачем она мне?';
$_['en']['price-faq-question-3'] = 'How to&nbsp;subscribe and why do&nbsp;I need&nbsp;it?';
$_['es']['price-faq-question-3'] = '&iquest;C&oacute;mo suscribirse y&nbsp;por qu&eacute; lo&nbsp;necesito?';
$_['tr']['price-faq-question-3'] = 'Nasıl abone olurum? Neden abone olmalıyım?';
$_['pt']['price-faq-question-3'] = 'Como se&nbsp;inscrevo e&nbsp;por que preciso disso?';

$_['ru']['price-faq-answer-3'] = '<p>Подписка на&nbsp;Synergy.Online оформляется в&nbsp;личном кабинете.</p><p>Слева, над боковым меню, есть кнопка &laquo;Оформить подписку&raquo;&nbsp;&mdash; нажмите на&nbsp;неё. Вы&nbsp;попадаете в&nbsp;раздел &laquo;Тарифы&raquo;.</p><p>Здесь есть перечень пакетов участия (подписки) и&nbsp;условий пользования платформой. Чтобы узнать подробности о&nbsp;каждом пакете участия, нажмите на&nbsp;подпись &laquo;Что входит в&nbsp;пакет&raquo;.</p><p>Подписка на&nbsp;платформу Synergy.Online платная. Чем выше тариф, тем шире доступ. Когда определитесь с&nbsp;оптимальным пакетом участия, нажмите на&nbsp;кнопку &laquo;Подключить&raquo;. Оплатить подписку можно любым удобным способом&nbsp;&mdash; картой, Google Pay или Apple Pay.</p><p>После оплаты вам на&nbsp;почту придет письмо с&nbsp;чеком и&nbsp;просьбой подтвердить подписку. Она активируется сразу после подтверждения.</p><p>Сделайте это&nbsp;&mdash; и&nbsp;свободно пользуйтесь Synergy.Online.</p>';
$_['en']['price-faq-answer-3'] = '<p>You can subscribe to&nbsp;Synergy.Online in&nbsp;your personal account.</p><p>There is&nbsp;a&nbsp;button &ldquo;Subscribe&rdquo; on&nbsp;the left, above the side menu&nbsp;&mdash; click on&nbsp;it. You will find yourself in&nbsp;the &ldquo;Rates&rdquo; section.</p><p>Here is&nbsp;a&nbsp;list of&nbsp;subscription packages and conditions for using the platform. To&nbsp;find out details about each subscription package, click on&nbsp;the button &ldquo;What&rsquo;s in&nbsp;the package&rdquo;.</p><p>Subscription to&nbsp;the Synergy.Online platform is&nbsp;paid. The higher the subscription package, the greater the access. When you decide on&nbsp;the optimal package, click on&nbsp;the &ldquo;Subscribe&rdquo; button. You can pay for your subscription in&nbsp;any convenient way-by card, Google Pay, or&nbsp;Apple Pay.</p><p>After payment, you will receive an&nbsp;email with a&nbsp;receipt and a&nbsp;request to&nbsp;confirm your subscription. It&nbsp;will be&nbsp;activated immediately after confirmation.</p><p>Do&nbsp;this and use Synergy Online anytime you want.</p>';
$_['es']['price-faq-answer-3'] = '<p>Puede suscribirse a&nbsp;Synergy.Online en&nbsp;su&nbsp;cuenta personal.</p><p>Hay un&nbsp;bot&oacute;n &laquo;Suscribirse&raquo; a&nbsp;la&nbsp;izquierda, encima del men&uacute; lateral, haga clic en&nbsp;&eacute;l. Usted se&nbsp;encontrar&aacute; en&nbsp;la&nbsp;secci&oacute;n &laquo;Tarifas&raquo;.</p><p>Aqu&iacute; hay una lista de&nbsp;paquetes de&nbsp;suscripci&oacute;n y&nbsp;condiciones para usar la&nbsp;plataforma. Para obtener detalles sobre cada paquete de&nbsp;suscripci&oacute;n, haga clic en&nbsp;el&nbsp;bot&oacute;n &laquo;Qu&eacute; hay en&nbsp;el&nbsp;paquete&raquo;.</p><p>Suscripci&oacute;n a&nbsp;la&nbsp;plataforma Synergy.Online es&nbsp;de&nbsp;pago. Cuanto mayor sea el&nbsp;paquete de&nbsp;suscripci&oacute;n, mayor ser&aacute; el&nbsp;acceso. Cuando elija el&nbsp;paquete &oacute;ptimo, haga clic en&nbsp;el&nbsp;bot&oacute;n &laquo;Suscribirse&raquo;. Puede pagar su&nbsp;suscripci&oacute;n de&nbsp;cualquier forma conveniente mediante tarjeta, Google Pay o&nbsp;Apple Pay.</p><p>Despu&eacute;s del pago, recibir&aacute; un&nbsp;correo electr&oacute;nico con un&nbsp;recibo y&nbsp;una solicitud para confirmar su&nbsp;suscripci&oacute;n. Se&nbsp;activar&aacute; inmediatamente despu&eacute;s de&nbsp;la&nbsp;confirmaci&oacute;n.</p><p>Haga esto y&nbsp;use Synergy Online en&nbsp;cualquier momento lo&nbsp;desee.</p>';
$_['tr']['price-faq-answer-3'] = '<p>Synergy.Online&rsquo;a kişisel hesabınızda &uuml;ye olabilirsiniz.</p><p>Yan men&uuml;n&uuml;n sol &uuml;st&uuml;ndeki &laquo;Abone&nbsp;Ol&raquo; butonuna tıklayın. &laquo;Oranlar&raquo; b&ouml;l&uuml;m&uuml;nde hesabınızı bulabilirsiniz.</p><p>Platformun abonelik paketleri ile koşullarının listesini bu&nbsp;b&ouml;l&uuml;mde bulabilirsiniz. Abonelik paketleriyle ilgili ayrıntıları &ouml;ğrenmek i&ccedil;in &laquo;Bu&nbsp;pakete ne&nbsp;dahil?&raquo; butonuna tıklayın.</p><p>Synergy.Online platformu aboneliği &uuml;cretlidir. Abonelik paketinin fiyatı ne&nbsp;kadar y&uuml;ksek olursa erişebileceğiniz i&ccedil;erik sayısı da&nbsp;bir o&nbsp;kadar &ccedil;eşitli olur. Size en&nbsp;uygun pakete karar verdiğinizde &laquo;Abone&nbsp;Ol&raquo; butonuna tıklayın. &Uuml;cretinizi, Apple Pay ve&nbsp;Google Pay &uuml;zerinden ya&nbsp;da&nbsp;kredi kartı kullanarak &ouml;deyebilirsiniz.</p><p>&Ouml;deme yapıldıktan sonra makbuzunuzu ve&nbsp;abonelik onay talebini i&ccedil;eren bir e-posta alacaksınız. Aboneliğinizi onayladıktan sonra hesabınız anında etkinleştirilecektir.</p><p>Aboneliğinizi onayladıktan sonra Synergy Online&rsquo;ı dilediğiniz zaman kullanabilirsiniz.</p>';
$_['pt']['price-faq-answer-3'] = '<p>Voc&ecirc; pode inscrever-se para Synergy.Online em&nbsp;sua conta pessoal.</p><p>Para fazer isso, clique no&nbsp;bot&atilde;o &laquo;Inscrever-se&raquo; &agrave;&nbsp;esquerda, por cima do&nbsp;menu lateral. Voc&ecirc; vai ver a&nbsp;se&ccedil;&atilde;o &laquo;Tarifas&raquo;.</p><p>Aqui h&aacute;&nbsp;uma lista de&nbsp;pacotes de&nbsp;inscri&ccedil;&atilde;o e&nbsp;condi&ccedil;&otilde;es para usar a&nbsp;plataforma. Para saber mais detalhes sobre cada pacote de&nbsp;inscri&ccedil;&atilde;o, clique no&nbsp;bot&atilde;o &laquo;O&nbsp;que est&aacute; no&nbsp;Pacote&raquo;.</p><p>Inscri&ccedil;&atilde;o para a&nbsp;plataforma Synergy.Online &eacute;&nbsp;paga. Quanto maior o&nbsp;pacote de&nbsp;inscri&ccedil;&atilde;o, maior o&nbsp;acesso. Quando voc&ecirc; decidir sobre o&nbsp;pacote ideal, clique no&nbsp;bot&atilde;o &laquo;Inscrever-se&raquo;. Voc&ecirc; pode pagar por sua inscri&ccedil;&atilde;o de&nbsp;qualquer forma conveniente, seja por cart&atilde;o, Google Pay, ou&nbsp;Apple Pay.</p><p>Ap&oacute;s o&nbsp;pagamento, voc&ecirc; vai receber um&nbsp;email com um&nbsp;recibo e&nbsp;um&nbsp;pedido para confirmar a&nbsp;sua inscri&ccedil;&atilde;o. A&nbsp;inscri&ccedil;&atilde;o ser&aacute; ativada imediatamente ap&oacute;s a&nbsp;confirma&ccedil;&atilde;o.</p><p>Fa&ccedil;a isso e&nbsp;use Synergy Online quando quiser.</p>';

$_['ru']['price-faq-question-4'] = 'Если я&nbsp;&mdash; юрлицо, мне нужна подписка для постоянного доступа?';
$_['en']['price-faq-question-4'] = 'If&nbsp;I&nbsp;am a&nbsp;legal entity, do&nbsp;I need a&nbsp;subscription for permanent access?';
$_['es']['price-faq-question-4'] = 'Si&nbsp;soy una entidad legal, &iquest;necesito una suscripci&oacute;n para el&nbsp;acceso permanente?';
$_['tr']['price-faq-question-4'] = 'T&uuml;zel kişilerin de&nbsp;kalıcı erişim i&ccedil;in aboneliğe ihtiyacı var&nbsp;mı?';
$_['pt']['price-faq-question-4'] = 'Se&nbsp;eu&nbsp;sou uma entidade jur&iacute;dica, eu&nbsp;preciso de&nbsp;uma inscri&ccedil;&atilde;o para acesso permanente?';

$_['ru']['price-faq-answer-4'] = '<p>Да. Чтобы оформить корпоративную подписку, свяжитесь со&nbsp;службой поддержки Synergy.Online, чтобы оставить заявку на&nbsp;интересующий тариф. Консультанты направят абонентский договор, в&nbsp;котором будут прописаны условия оплаты и&nbsp;распространения доступа к&nbsp;платформе.</p>';
$_['en']['price-faq-answer-4'] = '<p>Yes. To&nbsp;sign up&nbsp;for a&nbsp;corporate subscription, contact the Synergy.Online support service to&nbsp;submit a&nbsp;request for the package you are interested&nbsp;in. Our specialist will send you a&nbsp;subscription agreement specifying the conditions for payment and distribution of&nbsp;access to&nbsp;the platform.</p>';
$_['es']['price-faq-answer-4'] = '<p>S&iacute;. Para suscribirse a&nbsp;una suscripci&oacute;n corporativa, comun&iacute;quese con el&nbsp;servicio de&nbsp;soporte de&nbsp;Synergy.Online para enviar una solicitud del paquete que le&nbsp;interesa. Nuestro especialista le&nbsp;enviar&aacute; un&nbsp;acuerdo de&nbsp;suscripci&oacute;n especificando las condiciones de&nbsp;pago y&nbsp;distribuci&oacute;n del acceso a&nbsp;la&nbsp;plataforma.</p>';
$_['tr']['price-faq-answer-4'] = '<p>Evet. Kurumsal aboneliğe kaydolmak i&ccedil;in Synergy.Online destek ekibiyle iletişime ge&ccedil;erek ilgilendiğiniz pakete y&ouml;nelik bir talepte bulunun. Uzmanımız, &ouml;deme ve&nbsp;platforma erişim hakkının &ccedil;alışanlarınıza nasıl dağıtılacağı hakkındaki koşulları i&ccedil;eren abonelik s&ouml;zleşmesini size g&ouml;nderecektir.</p>';
$_['pt']['price-faq-answer-4'] = '<p>Sim. Para fazer uma inscri&ccedil;&atilde;o corporativa, contate o&nbsp;servi&ccedil;o de&nbsp;suporte da&nbsp;Synergy.Online para enviar um&nbsp;pedido para o&nbsp;pacote em&nbsp;que voc&ecirc; est&aacute; interessado. Nosso especialista lhe enviar&aacute; um&nbsp;contrato de&nbsp;inscri&ccedil;&atilde;o especificando as&nbsp;condi&ccedil;&otilde;es de&nbsp;pagamento e&nbsp;distribui&ccedil;&atilde;o do&nbsp;acesso &agrave;&nbsp;plataforma.</p>';

$_['ru']['price-faq-question-5'] = 'Хочу посмотреть трансляцию&nbsp;&mdash; куда нажимать?';
$_['en']['price-faq-question-5'] = 'How can&nbsp;I watch the broadcast?';
$_['es']['price-faq-question-5'] = '&iquest;C&oacute;mo puedo ver la&nbsp;transmisi&oacute;n?';
$_['tr']['price-faq-question-5'] = 'Yayını nasıl izleyeceğim?';
$_['pt']['price-faq-question-5'] = 'Como posso ver a&nbsp;transmiss&atilde;o?';

$_['ru']['price-faq-answer-5'] = '<p>Если вы&nbsp;оформили подписку с&nbsp;еженедельным доступом к&nbsp;трансляциям Synergy Online Forum, перейдите в&nbsp;раздел &laquo;Трансляции&raquo;, найдите в&nbsp;списке актуальное видео и&nbsp;нажмите на&nbsp;Play. Трансляция начнется сразу&nbsp;же.</p><p>Не&nbsp;забывайте, что спикеры Форума выступают на&nbsp;параллельно на&nbsp;пяти разных сценах и&nbsp;с&nbsp;каждой из&nbsp;них ведется трансляция. Между экранами можно переключаться и&nbsp;слушать спикеров поочередно.</p>';
$_['en']['price-faq-answer-5'] = '<p>If&nbsp;you have a&nbsp;subscription with weekly access to&nbsp;Synergy Online Forum broadcasts, go&nbsp;to&nbsp;the &ldquo;Live Broadcasts&rdquo; section, find the latest video in&nbsp;the list and click &ldquo;Play&rdquo;. The broadcast will begin immediately.</p><p>Do&nbsp;not forget that the speakers of&nbsp;the forum perform on&nbsp;five different stages, and each of&nbsp;them is&nbsp;broadcast. You can switch between screens and listen to&nbsp;speakers alternately.</p>';
$_['es']['price-faq-answer-5'] = '<p>Si&nbsp;tiene una suscripci&oacute;n con acceso semanal a&nbsp;las transmisiones de&nbsp;Synergy Online Forum, vaya a&nbsp;la&nbsp;secci&oacute;n &laquo;Transmisiones en&nbsp;Vivo&raquo;, encuentre el&nbsp;&uacute;ltimo video en&nbsp;la&nbsp;lista y&nbsp;haga clic en&nbsp;&laquo;Reproducir&raquo;. La&nbsp;transmisi&oacute;n comenzar&aacute; de&nbsp;inmediato.</p><p>No&nbsp;olvide que los oradores del foro trabajan en&nbsp;cinco escenas diferentes, y&nbsp;cada una de&nbsp;ellas se&nbsp;transmite. Puede cambiar entre pantallas y&nbsp;escuchar los oradores alternativamente.</p>';
$_['tr']['price-faq-answer-5'] = '<p>Synergy Online Forum yayınlarına haftalık erişim hakkı olan aboneliğiniz varsa &laquo;Canlı Yayınlar&raquo; b&ouml;l&uuml;m&uuml;ne gidin, listedeki en&nbsp;son videoyu bulduktan sonra &laquo;Oynat&raquo; butonuna tıklayın. Yayın hemen başlayacaktır.</p><p>Forumun konuşmacılarının beş farklı sahnede performans g&ouml;stermekte olduğunu ve&nbsp;her performansın aynı anda yayınlandığını unutmayın. Ekranlar arasında ge&ccedil;iş yaparak kullanıcıları d&ouml;n&uuml;ş&uuml;ml&uuml; şekilde dinleyebilirsiniz.</p>';
$_['pt']['price-faq-answer-5'] = '<p>Se&nbsp;voc&ecirc; tem uma inscri&ccedil;&atilde;o com acesso semanal &agrave;s&nbsp;transmiss&otilde;es do&nbsp;Synergy Online Forum, v&aacute;&nbsp;para a&nbsp;se&ccedil;&atilde;o &laquo;Transmiss&otilde;es ao&nbsp;Vivo&raquo;, encontre o&nbsp;v&iacute;deo mais recente na&nbsp;lista e&nbsp;clique em&nbsp;&laquo;Tocar&raquo;. A&nbsp;transmiss&atilde;o come&ccedil;ar&aacute; imediatamente.</p><p>N&atilde;o se&nbsp;esque&ccedil;a que os&nbsp;oradores do&nbsp;f&oacute;rum atuam em&nbsp;cinco palcos diferentes, e&nbsp;cada um&nbsp;deles &eacute;&nbsp;transmitido ao&nbsp;mesmo tempo. Voc&ecirc; pode alternar entre telas e&nbsp;ouvir os&nbsp;oradores alternadamente.</p>';

$_['ru']['price-faq-question-6'] = 'На&nbsp;экране трансляции есть кнопки&nbsp;&mdash; для чего они?';
$_['en']['price-faq-question-6'] = 'There are buttons on&nbsp;the broadcast screen&nbsp;&mdash; what are they intended for?';
$_['es']['price-faq-question-6'] = 'Hay botones en&nbsp;la&nbsp;pantalla de&nbsp;transmisi&oacute;n&nbsp;&mdash; &iquest;para qu&eacute; est&aacute;n destinados?';
$_['tr']['price-faq-question-6'] = 'Yayın ekranındaki d&uuml;ğmeler ne&nbsp;işe yarar?';
$_['pt']['price-faq-question-6'] = 'H&aacute;&nbsp;bot&otilde;es na&nbsp;tela de&nbsp;transmiss&atilde;o&nbsp;&mdash; para que se&nbsp;destinam?';

$_['ru']['price-faq-answer-6'] = '<p>Панель управления экрана позволяет переключаться между трансляциями с&nbsp;разных сцен, настраивать громкость и&nbsp;качество звука, включить синхронный перевод или субтитры. Вы&nbsp;можете адаптировать трансляцию под себя, чтобы получить наилучшее впечатление от&nbsp;мероприятия.</p>';
$_['en']['price-faq-answer-6'] = '<p>The screen control panel allows you to&nbsp;switch between broadcasts from different scenes, adjust the volume and sound quality, enable simultaneous translation or&nbsp;subtitles. You can adjust the broadcast to&nbsp;get the best impression of&nbsp;the event.</p>';
$_['es']['price-faq-answer-6'] = '<p>La&nbsp;pantalla con el&nbsp;panel de&nbsp;control le&nbsp;permite cambiar entre transmisiones de&nbsp;diferentes escenas, ajustar el&nbsp;volumen y&nbsp;la&nbsp;calidad del sonido, habilitar la&nbsp;traducci&oacute;n simult&aacute;nea o&nbsp;los subt&iacute;tulos. Puede ajustar la&nbsp;transmisi&oacute;n para obtener la&nbsp;mejor impresi&oacute;n del evento.</p>';
$_['tr']['price-faq-answer-6'] = '<p>Ekran kontrol paneli, farklı sahnelerde s&uuml;regiden yayınlar arasında ge&ccedil;iş yapmanıza, ses seviyesini ve&nbsp;ses kalitesini ayarlamanıza, eşzamanlı &ccedil;eviri veya altyazıları etkinleştirmenize olanak tanır. Etkinlikten en&nbsp;iyi şekilde yararlanmak i&ccedil;in yayını dilediğinizce yapılandırabilirsiniz.</p>';
$_['pt']['price-faq-answer-6'] = '<p>O&nbsp;painel de&nbsp;controle de&nbsp;tela permite que voc&ecirc; alterne entre transmiss&otilde;es de&nbsp;diferentes palcos, ajuste o&nbsp;volume e&nbsp;qualidade de&nbsp;som, permita tradu&ccedil;&atilde;o simult&acirc;nea ou&nbsp;legendas. Voc&ecirc; pode ajustar a&nbsp;transmiss&atilde;o para obter a&nbsp;melhor impress&atilde;o do&nbsp;evento.</p>';

$_['ru']['price-faq-question-7'] = 'Хочу включить трансляцию на&nbsp;всех моих гаджетах сразу&nbsp;&mdash; можно?';
$_['en']['price-faq-question-7'] = 'I&nbsp;want to&nbsp;turn on&nbsp;the broadcast on&nbsp;all my&nbsp;gadgets at&nbsp;once&nbsp;&mdash; can I&nbsp;do it?';
$_['es']['price-faq-question-7'] = 'Quiero activar la&nbsp;transmisi&oacute;n en&nbsp;todos mis dispositivos a&nbsp;la&nbsp;vez, &iquest;puedo hacerlo?';
$_['tr']['price-faq-question-7'] = 'Yayını t&uuml;m cihazlarımda aynı anda a&ccedil;mak istiyorum. Bu&nbsp;m&uuml;mk&uuml;n&nbsp;m&uuml;?';
$_['pt']['price-faq-question-7'] = 'Quero ligar a&nbsp;transmiss&atilde;o em&nbsp;todos os&nbsp;meus dispositivos ao&nbsp;mesmo tempo. Posso fazer isso?';

$_['ru']['price-faq-answer-7'] = '<p>Конечно. Авторизуйтесь на&nbsp;всех нужных устройствах, зайдите в&nbsp;раздел &laquo;Трансляции&raquo; на&nbsp;платформе Synergy.Online и&nbsp;запустите эфир актуального Synergy Online Forum.</p>';
$_['en']['price-faq-answer-7'] = '<p>Sure. Log in&nbsp;to&nbsp;all the necessary devices, go&nbsp;to&nbsp;the Live Broadcasts&quot; section on&nbsp;the Synergy.Online platform and start the broadcast of&nbsp;the current Synergy Online Forum.</p>';
$_['es']['price-faq-answer-7'] = '<p>Por supuesto. Inicie sesi&oacute;n en&nbsp;todos los dispositivos necesarios, vaya a&nbsp;la&nbsp;secci&oacute;n &laquo;Transmisiones en&nbsp;Vivo&raquo; en&nbsp;Synergy.Online plataforma e&nbsp;iniciar la&nbsp;transmision de&nbsp;actual Synergy Online Forum.</p>';
$_['tr']['price-faq-answer-7'] = '<p>Elbette. Gerekli t&uuml;m cihazlardan hesabınızda oturum a&ccedil;tıktan sonra Synergy.Online platformundaki &laquo;Canlı Yayınlar&raquo; b&ouml;l&uuml;m&uuml;ne gidin ve&nbsp;Synergy Online Forum&rsquo;un o&nbsp;andaki yayınını oynatmaya başlayın.</p>';
$_['pt']['price-faq-answer-7'] = '<p>Certo. Entra em&nbsp;todos os&nbsp;dispositivos necess&aacute;rios, v&aacute;&nbsp;para a&nbsp;se&ccedil;&atilde;o &laquo;Transmiss&otilde;es ao&nbsp;Vivo&raquo; na&nbsp;plataforma Synergy.Online e&nbsp;inicie a&nbsp;transmiss&atilde;o do&nbsp;Synergy Online Forum atual.</p>';

$_['ru']['price-faq-question-8'] = 'Я&nbsp;пропустил трансляцию&nbsp;&mdash; что мне делать?';
$_['en']['price-faq-question-8'] = 'I&nbsp;missed the broadcast&nbsp;&mdash; what should I&nbsp;do?';
$_['es']['price-faq-question-8'] = 'Me&nbsp;perd&iacute; la&nbsp;transmisi&oacute;n, &iquest;qu&eacute; debo hacer?';
$_['tr']['price-faq-question-8'] = 'Yayını ka&ccedil;ırdım. Ne&nbsp;yapmalıyım?';
$_['pt']['price-faq-question-8'] = 'Perdi a&nbsp;transmiss&atilde;o&nbsp;&mdash; o&nbsp;que devo fazer?';
$_['ru']['price-faq-answer-8'] = '<p>Без паники&nbsp;&mdash; все трансляции записываются и&nbsp;попадают в&nbsp;архив роликов Synergy Online, их&nbsp;можно посмотреть позже.</p><p>Ищите нужную запись в&nbsp;разделе &laquo;Трансляции&raquo; и&nbsp;в&nbsp;разделе Synergy.Base. Обратите внимание: оформив подписку на&nbsp;пакет Standard, вы&nbsp;сможете посмотреть запись трансляции в&nbsp;течение 48&nbsp;часов. </p><p>При подписке на&nbsp;пакет Business и&nbsp;выше записи будут доступны всегда.</p>';
$_['en']['price-faq-answer-8'] = '<p>Don&rsquo;t worry&nbsp;&mdash; all broadcasts are recorded and archived in&nbsp;Synergy Online videos, and you can watch them later.</p><p>Search for the desired record in&nbsp;the &ldquo;Live Broadcasts&rdquo; section and in&nbsp;Synergy Knowledge Base. Please note: by&nbsp;subscribing to&nbsp;the Standard package, you can watch the broadcast within 48&nbsp;hours after the event.</p><p>When you subscribe to&nbsp;the Business package and higher packages, your records will always be&nbsp;available.</p>';
$_['es']['price-faq-answer-8'] = '<p>No&nbsp;se&nbsp;preocupe: todas las transmisiones se&nbsp;graban y&nbsp;archivan en&nbsp;videos de&nbsp;Synergy Online, y&nbsp;puede verlas m&aacute;s tarde.</p><p>Busque el&nbsp;registro deseado en&nbsp;la&nbsp;secci&oacute;n &laquo;Transmisiones en&nbsp;Vivo&raquo; y&nbsp;en&nbsp;Synergy Base de&nbsp;Conocimiento. Tenga en&nbsp;cuenta: al&nbsp;suscribirse al&nbsp;paquete &laquo;Standard&raquo;, puede ver la&nbsp;transmisi&oacute;n dentro de&nbsp;las 48&nbsp;horas posteriores al&nbsp;evento.</p><p>Cuando se suscribe al paquete "Business" y paquetes superiores, su grabaciones siempre estarán disponibles.</p>';
$_['tr']['price-faq-answer-8'] = '<p>Endişelenmenize hi&ccedil; gerek yok. T&uuml;m yayınlar Synergy Online b&ouml;l&uuml;m&uuml;ne kaydedilerek arşivlenir. Konuşmaları daha sonra izleyebilirsiniz.</p><p>İstediğiniz kaydı &laquo;Canlı Yayınlar&raquo; b&ouml;l&uuml;m&uuml;nde ve&nbsp;Synergy Bilgi Deposunda bulabilirsiniz. L&uuml;tfen unutmayın: Standart paket aboneleri, konuşmaları etkinlik sona erdikten sonraki 48&nbsp;saat boyunca seyredebilir.</p><p>Business paket ve&nbsp;&uuml;st&uuml;ne abone olan kullanıcılar i&ccedil;inse kayıtlar her zaman erişime a&ccedil;ıktır.</p>';
$_['pt']['price-faq-answer-8'] = '<p>N&atilde;o se&nbsp;preocupe&nbsp;&mdash; todas as&nbsp;transmiss&otilde;es s&atilde;o gravadas e&nbsp;arquivadas em&nbsp;v&iacute;deos do&nbsp;Synergy Online, e&nbsp;voc&ecirc; pode v&ecirc;-las mais tarde.</p><p>Procure por v&iacute;deo gravado desejado na&nbsp;se&ccedil;&atilde;o &laquo;Transmiss&otilde;es ao&nbsp;Vivo&raquo; e&nbsp;na&nbsp;Base de&nbsp;Conhecimentos do&nbsp;Synergy. Observa&ccedil;&atilde;o: ao&nbsp;se&nbsp;inscrever para o&nbsp;pacote Padr&atilde;o, voc&ecirc; pode assistir a&nbsp;transmiss&atilde;o dentro de&nbsp;48&nbsp;horas ap&oacute;s o&nbsp;evento.</p><p>Quando voc&ecirc; se&nbsp;inscrever para o&nbsp;pacote Neg&oacute;cio e&nbsp;pacotes maiores, seus v&iacute;deos estar&atilde;o sempre dispon&iacute;veis.</p>';

$_['ru']['price-faq-question-9'] = 'Вижу, что есть подписка с&nbsp;получением MBA&nbsp;&mdash; расскажете детали?';
$_['en']['price-faq-question-9'] = 'There are packages with an&nbsp;MBA&nbsp;&mdash; could you tell me&nbsp;about&nbsp;it?';
$_['es']['price-faq-question-9'] = 'Hay paquetes con un&nbsp;MBA, &iquest;podr&iacute;as contarme al&nbsp;respecto?';
$_['tr']['price-faq-question-9'] = 'MBA programı i&ccedil;eren paketler de&nbsp;var. Bunlardan bahsedebilir misiniz?';
$_['pt']['price-faq-question-9'] = 'H&aacute;&nbsp;pacotes com um&nbsp;MBA&nbsp;&mdash; pode me&nbsp;contar sobre eles?';

$_['ru']['price-faq-answer-9'] = '<p>Действительно, в&nbsp;перечне пакетов участия есть тарифы Gold и&nbsp;Platinum. Выбрав&nbsp;их, вы&nbsp;получите расширенный доступ к&nbsp;платформе Synergy.Online и&nbsp;заодно степень магистра делового администрирования.</p><p>Если вы&nbsp;выберете пакет Gold, вы&nbsp;сможете пройти онлайн-программу Mini MBA. Обучение пройдет в&nbsp;режиме онлайн: вы&nbsp;получите доступ к&nbsp;библиотеке образовательных материалов Школы Бизнеса &laquo;Синергия&raquo;, персональной программе и&nbsp;домашним заданиям.</p><p>Если вы&nbsp;выберете пакет Platinum, вы&nbsp;сможете пройти расширенную программу Online MBA. Обучение также пройдет в&nbsp;онлайн: помимо доступа к&nbsp;библиотеке образовательных материалов Школы Бизнеса &laquo;Синергии&raquo;, персональной программе и&nbsp;домашних заданий вам предоставят тьютора, который поможет наметить дальнейшие планы личного и&nbsp;профессионального развития.</p>';
$_['en']['price-faq-answer-9'] = '<p>Indeed, the list of&nbsp;participation packages includes gold and Platinum packages. If&nbsp;you choose one of&nbsp;them, you will get expanded access to&nbsp;the Synergy.Online platform and at&nbsp;the same time a&nbsp;master&rsquo;s degree in&nbsp;business administration.</p><p>If&nbsp;you choose the Gold package, you will get the opportunity to&nbsp;complete the online Mini MBA program. The training will take place online: you will receive access to&nbsp;the library of&nbsp;educational materials of&nbsp;Synergy Business School, a&nbsp;personal program and homework.</p><p>If&nbsp;you choose the Platinum package, you will get the opportunity to&nbsp;complete the extended MBA program. Your training will also take place online: in&nbsp;addition to&nbsp;access to&nbsp;the Synergy Business School&rsquo;s library of&nbsp;educational materials, a&nbsp;personal program and homework, you will have a&nbsp;tutor to&nbsp;help you with your personal and professional development plans.</p>';
$_['es']['price-faq-answer-9'] = '<p>De&nbsp;hecho, la&nbsp;lista de&nbsp;paquetes de&nbsp;participaci&oacute;n incluye paquetes &laquo;Gold&raquo; y&nbsp;&laquo;Platinum&raquo;. Si&nbsp;elige uno de&nbsp;ellos, obtendr&aacute; un&nbsp;acceso ampliado a&nbsp;la&nbsp;plataforma Synergy.Online y&nbsp;al&nbsp;mismo tiempo un&nbsp;m&aacute;ster en&nbsp;administraci&oacute;n de&nbsp;empresas.</p><p>Si&nbsp;elige el&nbsp;paquete &laquo;Gold&raquo;, tendr&aacute; la&nbsp;oportunidad de&nbsp;completar el&nbsp;programa Mini MBA en&nbsp;l&iacute;nea. La&nbsp;capacitaci&oacute;n se&nbsp;llevar&aacute; a&nbsp;cabo en&nbsp;l&iacute;nea: recibir&aacute; acceso a&nbsp;la&nbsp;biblioteca de&nbsp;materiales educativos de&nbsp;Synergy Business School, un&nbsp;programa personal y&nbsp;tareas.</p><p>Si&nbsp;elige el&nbsp;paquete &laquo;Platinum&raquo;, tendr&aacute; la&nbsp;oportunidad de&nbsp;completar el&nbsp;programa MBA en&nbsp;l&iacute;nea. Su&nbsp;capacitaci&oacute;n tambi&eacute;n se&nbsp;llevar&aacute; a&nbsp;cabo en&nbsp;l&iacute;nea: adem&aacute;s de&nbsp;acceder a&nbsp;la&nbsp;biblioteca de&nbsp;materiales educativos de&nbsp;Synergy Business School, un&nbsp;programa personal y&nbsp;tareas, tendr&aacute; un&nbsp;tutor para ayudarle con sus planes de&nbsp;desarrollo personal y&nbsp;profesional.</p>';
$_['tr']['price-faq-answer-9'] = '<p>Doğru. Katılım paketleri, Gold ve&nbsp;Platinum paketlerini de&nbsp;i&ccedil;erir. Bunlardan birini se&ccedil;erseniz hem Synergy.Online &ccedil;evrimi&ccedil;i platforma erişim haklarınızı genişletmiş olursunuz hem de&nbsp;işletme y&uuml;ksek lisans derecesi elde edersiniz.</p><p>Gold paketi se&ccedil;erseniz online Mini MBA programına katılma şansı da&nbsp;yakalarsınız. Eğitimler &ccedil;evrimi&ccedil;i ortamda uzaktan verilecektir: B&ouml;ylece Synergy Business School&rsquo;un eğitim materyallerine erişebilir, kişisel ders programınızı takip edebilir ve&nbsp;&ouml;devlerinizi yapabilirsiniz.</p><p>Platinum paketi se&ccedil;erseniz kapsamlı MBA programına katılma hakkı kazanırsınız. Eğitiminiz yine &ccedil;evrimi&ccedil;i olarak ger&ccedil;ekleşir: Synergy Business School&rsquo;un eğitim materyalleri k&uuml;t&uuml;phanesine ve&nbsp;kişisel ders programınıza erişebilir, &ouml;devlerinizi platform &uuml;zeriden yapabilirsiniz. Kişisel ve&nbsp;mesleki gelişim planlarınızda size rehberlik edecek bir eğitmen de&nbsp;size eşlik edecektir.</p>';
$_['pt']['price-faq-answer-9'] = '<p>Verdade, a&nbsp;lista de&nbsp;pacotes de&nbsp;participa&ccedil;&atilde;o inclui pacotes &laquo;Gold&raquo; e&nbsp;&laquo;Platinum&raquo;. Se&nbsp;voc&ecirc; escolher um&nbsp;deles, voc&ecirc; ter&aacute; acesso expandido &agrave;&nbsp;plataforma Synergy.Online e, ao&nbsp;mesmo tempo, um&nbsp;mestrado em&nbsp;Administra&ccedil;&atilde;o de&nbsp;Neg&oacute;cios.</p><p>Se&nbsp;voc&ecirc; escolher o&nbsp;pacote &laquo;Gold&raquo;, voc&ecirc; ter&aacute; a&nbsp;oportunidade de&nbsp;completar o&nbsp;programa online Mini MBA. O&nbsp;treinamento ser&aacute; realizado online: voc&ecirc; vai receber acesso &agrave;&nbsp;biblioteca de&nbsp;materiais educacionais da&nbsp;Synergy Business School, um&nbsp;programa pessoal e&nbsp;tarefas de&nbsp;casa.</p><p>Se&nbsp;voc&ecirc; escolher o&nbsp;pacote &laquo;Platinum&raquo;, voc&ecirc; ter&aacute; a&nbsp;oportunidade de&nbsp;completar o&nbsp;programa MBA expandido. Seu treinamento tamb&eacute;m ser&aacute; realizado online: al&eacute;m do&nbsp;acesso &agrave;&nbsp;biblioteca de&nbsp;materiais educacionais da&nbsp;Synergy Business School, um&nbsp;programa pessoal e&nbsp;tarefas de&nbsp;casa, voc&ecirc; ter&aacute; um&nbsp;tutor para ajudar voc&ecirc; com seus planos de&nbsp;desenvolvimento pessoal e&nbsp;profissional.</p>';

$_['ru']['price-faq-question-10'] = 'В&nbsp;сервисах есть Synergy CRM&nbsp;&mdash; как подключить?';
$_['en']['price-faq-question-10'] = 'The services include Synergy CRM&nbsp;&mdash; how can&nbsp;I enable&nbsp;it?';
$_['es']['price-faq-question-10'] = 'Los servicios incluyen Synergy CRM: &iquest;c&oacute;mo puedo habilitarlo?';
$_['tr']['price-faq-question-10'] = 'Synergy CRM da&nbsp;hizmetler kapsamında g&ouml;r&uuml;n&uuml;yor. Bu&nbsp;&ouml;zelliği nasıl etkinleştirebilirim?';
$_['pt']['price-faq-question-10'] = 'Os&nbsp;servi&ccedil;os incluem Synergy CRM&nbsp;&mdash; como posso ativ&aacute;-lo?';

$_['ru']['price-faq-answer-10'] = '<p>Чтобы воспользоваться сервисом, нужно оформить подписку на&nbsp;Synergy.Online. Система Synergy CRM доступна на&nbsp;всех тарифах платформы.</p><p>Synergy CRM помогает скоординировать работу компании, отследить продажи и&nbsp;прибыль, найти &laquo;слепые&raquo; зоны в&nbsp;системе работы, автоматизировать рутинные операции и&nbsp;обеспечить полноценный клиентский сервис.</p><p>Пользователи платформы, оформившие постоянную подписку на&nbsp;платформу, могут пользоваться функционалом Synergy CRM бесплатно на&nbsp;протяжении 60&nbsp;дней. Чтобы подключить, настроить и&nbsp;освоить Synergy CRM, свяжитесь со&nbsp;службой поддержки собственной странице сервиса или позвоните по&nbsp;телефону +7&nbsp;495&nbsp;800 10&nbsp;01.</p>';
$_['en']['price-faq-answer-10'] = '<p>To&nbsp;use the service, ou need to subscribe to Synergy.Online. Synergy CRM is available for all subscription packages.</p><p>Synergy CRM helps to coordinate the company’s work, track sales and profits, find “blind spots” in the work system, automate routine operations and provide a full-fledged customer service.</p><p>Platform users who have subscribed to the platform can use Synergy CRM functionality for free for 60 days. To enable, adjust, and master Synergy CRM, contact the support service on the service’s own page.</p>';
$_['es']['price-faq-answer-10'] = '<p>Para utilizar el&nbsp;servicio, debe suscribirse a&nbsp;Synergy.Online. Synergy CRM est&aacute; disponible para todos los paquetes de&nbsp;suscripci&oacute;n.</p><p>Synergy CRM ayuda a&nbsp;coordinar el&nbsp;trabajo de&nbsp;la&nbsp;empresa, rastrear las ventas y&nbsp;los beneficios, encontrar &laquo;puntos ciegos&raquo; en&nbsp;el&nbsp;sistema de&nbsp;trabajo, automatizar las operaciones de&nbsp;rutina y&nbsp;proporcionar un&nbsp;servicio al&nbsp;cliente completo.</p><p>Los usuarios de&nbsp;la&nbsp;plataforma que se&nbsp;han suscrito a&nbsp;la&nbsp;plataforma pueden usar la&nbsp;funcionalidad de&nbsp;Synergy CRM de&nbsp;forma gratuita durante 60&nbsp;d&iacute;as. Para habilitar, ajustar y&nbsp;dominar Synergy CRM, comun&iacute;quese con el&nbsp;servicio de&nbsp;soporte en&nbsp;la&nbsp;p&aacute;gina del servicio o&nbsp;llame al&nbsp;+7&nbsp;495&nbsp;800 10&nbsp;01.</p>';
$_['tr']['price-faq-answer-10'] = '<p>Bu&nbsp;hizmeti kullanmak i&ccedil;in Synergy.Online&rsquo;a abone olmanız gerekir. T&uuml;m abonelik paketlerine Synergy CRM dahildir.</p><p>Synergy CRM, şirketinizin &ccedil;alışmalarını koordine etmeye, satış ve&nbsp;karları takip etmeye, iş&nbsp;sisteminizdeki &laquo;k&ouml;r noktaları&raquo; bulmaya, rutin işlemleri otomatikleştirmeye ve&nbsp;tam teşekk&uuml;ll&uuml; bir m&uuml;şteri hizmeti sunmanıza yardımcı olur.</p><p>Platforma abone olan platform kullanıcıları, 60&nbsp;g&uuml;n boyunca Synergy CRM &ouml;zelliğini &uuml;cretsiz kullanabilir. Synergy CRM &ouml;zelliğini etkinleştirmek, ayarlamak ve&nbsp;y&ouml;netmek i&ccedil;in, hizmetin kendi sayfasını ziyaret ederek destek ekibine başvurun veya destek ekibini +7&nbsp;495&nbsp;800 10 01&nbsp;telefonundan arayın.</p>';
$_['pt']['price-faq-answer-10'] = '<p>Para usar o&nbsp;servi&ccedil;o, voc&ecirc; precisa se&nbsp;inscrever para Synergy.Online. Synergy CRM est&aacute; dispon&iacute;vel para todos os&nbsp;pacotes de&nbsp;inscri&ccedil;&atilde;o.</p><p>Synergy CRM ajuda a&nbsp;coordenar o&nbsp;funcionamento da&nbsp;empresa, acompanhar as&nbsp;vendas e&nbsp;os&nbsp;lucros, encontrar &laquo;pontos cegos&raquo; no&nbsp;sistema de&nbsp;funcionamento, automatizar opera&ccedil;&otilde;es de&nbsp;rotina e&nbsp;fornecer um&nbsp;servi&ccedil;o completo ao&nbsp;cliente.</p><p>Os&nbsp;usu&aacute;rios da&nbsp;plataforma que se&nbsp;inscreveram na&nbsp;plataforma podem usar a&nbsp;funcionalidade Synergy CRM gratuitamente por 60&nbsp;dias. Para ativar, ajustar e&nbsp;dominar Synergy CRM, entre em&nbsp;contato com o&nbsp;servi&ccedil;o de&nbsp;suporte na&nbsp;pr&oacute;pria p&aacute;gina do&nbsp;servi&ccedil;o ou&nbsp;ligue para +7&nbsp;495&nbsp;800 10&nbsp;01.</p>';

$_['ru']['price-faq-question-11'] = 'Хочу на&nbsp;бизнес-интенсив Genesis&nbsp;&mdash; как попасть?';
$_['en']['price-faq-question-11'] = 'How can&nbsp;I participate in&nbsp;Genesis business intensive?';
$_['es']['price-faq-question-11'] = '&iquest;C&oacute;mo puedo participar en&nbsp;el&nbsp;negocio intensivo de&nbsp;Genesis?';
$_['tr']['price-faq-question-11'] = 'Genesis Business Intensive programına nasıl katılabilirim?';
$_['pt']['price-faq-question-11'] = 'Como posso participar da&nbsp;Genesis business intensive?';

$_['ru']['price-faq-answer-11'] = '<p>Перейдите в&nbsp;раздел &laquo;События&raquo; на&nbsp;платформе Synergy.Online, откройте страничку мероприятия и&nbsp;оставьте заявку на&nbsp;участие. Позже вам на&nbsp;почту придет письмо с&nbsp;просьбой подтвердить присутствие на&nbsp;бизнес-интенсиве &laquo;Genesis&raquo;. После подтверждения вы&nbsp;получите напоминание о&nbsp;начале мероприятия и&nbsp;ссылку на&nbsp;трансляцию.</p><p>Интенсив Genesis&nbsp;&mdash; однодневный практикум от&nbsp;лучших экспертов Школы Бизнеса &laquo;Синергия&raquo;. Вы&nbsp;узнаете, как выбрать трендовую нишу, привлечь лиды, грамотно управлять финансами, разработать стратегию развития своего бизнеса и&nbsp;преуспеть в&nbsp;любом деле.</p><p>Будем рады вашему участию!</p>';
$_['en']['price-faq-answer-11'] = '<p>Go&nbsp;to&nbsp;the &ldquo;Events&rdquo; section on&nbsp;the Synergy.Online platform, open the event page and submit a&nbsp;request for participation. You will receive the mail asking you to&nbsp;confirm your presence at&nbsp;the Genesis business intensive. After confirmation, you will receive a&nbsp;reminder about the start of&nbsp;the event and a&nbsp;link to&nbsp;the broadcast.</p><p>Genesis is&nbsp;a&nbsp;one-day workshop from the best experts of&nbsp;Synergy Business School. You will learn how to&nbsp;choose a&nbsp;trending niche, attract leads, manage finances competently, develop a&nbsp;strategy for developing your business and succeed in&nbsp;any business.</p><p>We&nbsp;are looking forward to&nbsp;your participation!</p>';
$_['es']['price-faq-answer-11'] = '<p>Ve&nbsp;a&nbsp;la&nbsp;secci&oacute;n &laquo;Eventos&raquo; de&nbsp;plataforma Synergy.Online, abra la&nbsp;p&aacute;gina del evento y&nbsp;env&iacute;e una solicitud de&nbsp;participaci&oacute;n. Usted recibir&aacute; el&nbsp;correo pidi&eacute;ndole que confirme su&nbsp;presencia en&nbsp;el&nbsp;G&eacute;nesis intensivo de&nbsp;negocios. Despu&eacute;s de&nbsp;la&nbsp;confirmaci&oacute;n, recibir&aacute; un&nbsp;recordatorio sobre el&nbsp;inicio del evento y&nbsp;un&nbsp;enlace a&nbsp;la&nbsp;transmisi&oacute;n.</p><p>Genesis es&nbsp;un&nbsp;taller de&nbsp;un&nbsp;d&iacute;a de&nbsp;duraci&oacute;n de&nbsp;los mejores expertos de&nbsp;Synergy Business School. Aprender&aacute; c&oacute;mo elegir un&nbsp;nicho de&nbsp;tendencia, atraer clientes potenciales, administrar las finanzas de&nbsp;manera competente, desarrollar una estrategia para desarrollar su&nbsp;negocio y&nbsp;tener &eacute;xito en&nbsp;cualquier negocio.</p><p>Esperamos su&nbsp;participaci&oacute;n!</p>';
$_['tr']['price-faq-answer-11'] = '<p>Synergy.Online platformu &uuml;zerindeki &laquo;Etkinlikler&raquo; b&ouml;l&uuml;m&uuml;ne gidin. Etkinlik sayfasını a&ccedil;tıktan sonra katılım talebinizi g&ouml;nderin. Genesis Business Intensive programına katılacağınızı onaylamanızı isteyen bir e-posta alacaksınız. Onay işleminden sonra, etkinliğin başlangıcı ve&nbsp;yayın bağlantısı hakkında bir hatırlatma e-postası alacaksınız.</p><p>Genesis, Synergy Business School&rsquo;un en&nbsp;iyi uzmanlarının yer aldığı tek g&uuml;nl&uuml;k at&ouml;lyedir. Kimsenin g&ouml;rmediği ama trend olabilecek bir alan se&ccedil;meyi, potansiyel m&uuml;şterileri firmanıza &ccedil;ekmeyi, finansmanınızı yetkin şekilde y&ouml;netmeyi, işinizi geliştirmek i&ccedil;in strateji oluşturmayı ve&nbsp;herhangi bir işte başarılı olmayı &ouml;ğreneceksiniz.</p><p>Katılımınızı d&ouml;rt g&ouml;zle bekliyoruz!</p>';
$_['pt']['price-faq-answer-11'] = '<p>Vai &agrave;&nbsp;sec&ccedil;&atilde;o &laquo;Eventos&raquo; na&nbsp;plataforma Synergy.Online, abre a&nbsp;p&aacute;gina do&nbsp;evento e&nbsp;submeta um&nbsp;pedido de&nbsp;participa&ccedil;&atilde;o. Voc&ecirc; vai receber o&nbsp;email pedindo para confirmar sua presen&ccedil;a na&nbsp;Genesis business intensive. Ap&oacute;s a&nbsp;confirma&ccedil;&atilde;o, voc&ecirc; vai receber um&nbsp;lembrete sobre o&nbsp;in&iacute;cio do&nbsp;evento e&nbsp;um&nbsp;link para a&nbsp;transmiss&atilde;o.</p><p>Genesis &eacute;&nbsp;uma oficina de&nbsp;um&nbsp;dia dos melhores especialistas da&nbsp;Synergy Business School. Voc&ecirc; vai aprender a&nbsp;escolher um&nbsp;nicho de&nbsp;tend&ecirc;ncia, atrair pistas, gerir as&nbsp;finan&ccedil;as com compet&ecirc;ncia, desenvolver uma estrat&eacute;gia para desenvolver o&nbsp;seu neg&oacute;cio e&nbsp;ter sucesso em&nbsp;qualquer neg&oacute;cio.</p><p>Aguardamos a&nbsp;sua participa&ccedil;&atilde;o!</p>';

$_['ru']['price-faq-question-12'] = 'Я&nbsp;хочу поменять/отменить подписку&nbsp;&mdash; куда нажимать?';
$_['en']['price-faq-question-12'] = 'How can I&nbsp;change/cancel my&nbsp;subscription?';
$_['es']['price-faq-question-12'] = '&iquest;C&oacute;mo puedo cambiar/cancelar mi&nbsp;suscripci&oacute;n?';
$_['tr']['price-faq-question-12'] = 'Aboneliğimi nasıl değiştirebilirim veya iptal edebilirim?';
$_['pt']['price-faq-question-12'] = 'Como posso alterar/cancelar a&nbsp;minha inscri&ccedil;&atilde;o?';

$_['ru']['price-faq-answer-12'] = '<p>В&nbsp;правом верхнем углу экрана есть ссылка на&nbsp;личный кабинет. Перейдите туда, а&nbsp;потом нажмите на&nbsp;кнопку &laquo;PRO-подписка&raquo;.</p><p>В&nbsp;этом разделе вы&nbsp;можете поменять пакет участия или отписаться от&nbsp;платформы. И&nbsp;то, и&nbsp;другое можно сделать в&nbsp;любое время суток, отовсюду и&nbsp;со&nbsp;всех гаджетов.</p><p>Отписаться от&nbsp;платформы можно двумя способами: <br>&middot; Если вы&nbsp;оплатили подписку картой, отпишитесь от&nbsp;Synergy.Online в&nbsp;личном кабинете; <br>&middot; Если вы&nbsp;воспользовались Google Pay или Apple Pay, удалите Synergy Online из&nbsp;перечня подписок в&nbsp;учетной записи телефона.</p>';
$_['en']['price-faq-answer-12'] = '<p>There is&nbsp;a&nbsp;link to&nbsp;your personal account in&nbsp;the upper-right corner of&nbsp;the screen. Go&nbsp;there, and then click the &ldquo;PRO-subscription&rdquo; button.</p><p>In&nbsp;this section, you can change the participation package or&nbsp;unsubscribe from the platform. Both can be&nbsp;done at&nbsp;any time of&nbsp;the day, from any place and any gadget.</p><p>There are two ways to&nbsp;unsubscribe from the platform:</p><p>&bull; If&nbsp;you paid for your subscription by&nbsp;card, you can unsubscribe on&nbsp;Synergy.Online in&nbsp;your personal account;</p><p>&bull; If&nbsp;you paid via Google Pay or&nbsp;Apple Pay, remove Synergy Online from the list of&nbsp;subscriptions in&nbsp;your phone account.</p>';
$_['es']['price-faq-answer-12'] = '<p>Hay un&nbsp;enlace a&nbsp;su&nbsp;cuenta personal en&nbsp;la&nbsp;esquina superior derecha de&nbsp;la&nbsp;pantalla. Vaya all&iacute; y&nbsp;luego haga clic en&nbsp;el&nbsp;bot&oacute;n &laquo;Suscripci&oacute;n PRO&raquo;.</p><p>En&nbsp;esta secci&oacute;n, puede cambiar el&nbsp;paquete de&nbsp;participaci&oacute;n o&nbsp;darse de&nbsp;baja de&nbsp;la&nbsp;plataforma. Ambos se&nbsp;pueden hacer en&nbsp;cualquier momento del d&iacute;a, desde cualquier lugar y&nbsp;cualquier gadget.</p><p>Hay dos formas de darse de baja de la plataforma:</p><p>&bull; Si&nbsp;pag&oacute; su&nbsp;suscripci&oacute;n con tarjeta, puede darse de&nbsp;baja en&nbsp;Synergy.Online en&nbsp;su&nbsp;cuenta personal;</p><p>&bull; Si&nbsp;pag&oacute; a&nbsp;trav&eacute;s de&nbsp;Google Pay o&nbsp;Apple Pay, elimina Synergy Online de&nbsp;la&nbsp;lista de&nbsp;suscripciones de&nbsp;tu&nbsp;cuenta de&nbsp;tel&eacute;fono.</p>';
$_['tr']['price-faq-answer-12'] = '<p>Kişisel hesabınızda, ekranın sağ &uuml;st k&ouml;şesinde bir bağlantı yer alır. &Ouml;nce bu&nbsp;bağlantıya, ardından &laquo;PRO-Abonelik&raquo; butonuna tıklayın.</p><p>Bu&nbsp;b&ouml;l&uuml;mde, katılım paketinizin t&uuml;r&uuml;n&uuml; değiştirebilir veya platform aboneliğinizi sonlandırabilirsiniz. Bu&nbsp;işlem, d&uuml;nyanın herhangi bir yerinde herhangi bir cihaz &uuml;zerinden g&uuml;n&uuml;n her anında yapılabilir.</p><p>Platform aboneliğinizi iki y&ouml;ntemden biriyle sonlandırabilirsiniz:</p><p>&bull; Aboneliğinizi kredi kartı kullanarak &ouml;dediyseniz Synergy.Online aboneliğinizi kişisel hesabınızı kullanarak sonlandırabilirsiniz.</p><p>&bull; &Ouml;demenizi Google Pay ya&nbsp;da&nbsp;Apple Pay &uuml;zerinden yaptıysanız Synergy.Online&rsquo;ı telefon hesabınızdaki abonelikler listesinden kaldırın.</p>';
$_['pt']['price-faq-answer-12'] = '<p>H&aacute;&nbsp;um&nbsp;link para sua conta pessoal no&nbsp;canto superior direito da&nbsp;tela. V&aacute;&nbsp;l&aacute;, e&nbsp;depois clique no&nbsp;bot&atilde;o &laquo;PRO-inscri&ccedil;&atilde;o&raquo;.</p><p>Nesta se&ccedil;&atilde;o, voc&ecirc; pode alterar o&nbsp;pacote de&nbsp;participa&ccedil;&atilde;o ou&nbsp;cancelar a&nbsp;inscri&ccedil;&atilde;o da&nbsp;plataforma. Ambas as&nbsp;a&ccedil;&otilde;es podem ser feitas a&nbsp;qualquer hora do&nbsp;dia, de&nbsp;qualquer lugar e&nbsp;qualquer dispositivo.</p><p>H&aacute;&nbsp;duas maneiras de&nbsp;cancelar a&nbsp;inscri&ccedil;&atilde;o da&nbsp;plataforma:</p><p>&bull; Se&nbsp;voc&ecirc; pagou por sua inscri&ccedil;&atilde;o por cart&atilde;o, voc&ecirc; pode cancelar ela em&nbsp;Synergy.Online em&nbsp;sua conta pessoal;</p><p>&bull; Se&nbsp;voc&ecirc; pagou atrav&eacute;s do&nbsp;Google Pay ou&nbsp;da&nbsp;Apple Pay, remova o&nbsp;Synergy Online da&nbsp;lista de&nbsp;inscri&ccedil;&otilde;es em&nbsp;sua conta telef&oacute;nica.</p>';

$_['ru']['price-faq-question-13'] = 'Я&nbsp;забыл пароль&nbsp;&mdash; как восстановить?';
$_['en']['price-faq-question-13'] = 'How can&nbsp;I restore my&nbsp;password if&nbsp;I forgot&nbsp;it?';
$_['es']['price-faq-question-13'] = '&iquest;C&oacute;mo puedo restaurar mi&nbsp;contrase&ntilde;a si&nbsp;la&nbsp;olvid&eacute;?';
$_['tr']['price-faq-question-13'] = 'Parolamı unuttum. Parolamı nasıl sıfırlayabilirim?';
$_['pt']['price-faq-question-13'] = 'Como posso restaurar a&nbsp;minha senha se&nbsp;a&nbsp;esqueci?';

$_['ru']['price-faq-answer-13'] = '<p>Нажмите на&nbsp;кнопку &laquo;Забыл пароль&raquo; в&nbsp;окне авторизации.</p><p>Укажите адрес почты или номер телефона, который вы&nbsp;внесли в&nbsp;анкету при регистрации.</p><p>Позже вам придет письмо или сообщение с&nbsp;новым паролем&nbsp;&mdash; используйте его для входа на&nbsp;платформу.</p><p>Изменить выданный пароль можно в&nbsp;личном кабинете.</p>';
$_['en']['price-faq-answer-13'] = '<p>Click the button &ldquo;I&nbsp;forgot my&nbsp;password&rdquo; in&nbsp;the authorization window.</p><p>Enter the email address or&nbsp;phone number that you specified in&nbsp;the registration form.</p><p>You will receive an&nbsp;email or&nbsp;message with a&nbsp;new password&nbsp;&mdash; use it&nbsp;to&nbsp;enter the platform.</p><p>You can change the issued password in&nbsp;your personal account.</p>';
$_['es']['price-faq-answer-13'] = '<p>Haga clic en&nbsp;el&nbsp;bot&oacute;n &laquo;Olvid&eacute; mi&nbsp;contrase&ntilde;a&raquo; en&nbsp;la&nbsp;ventana de&nbsp;autorizaci&oacute;n.</p><p>Ingrese la&nbsp;direcci&oacute;n de&nbsp;correo electr&oacute;nico o&nbsp;el&nbsp;n&uacute;mero de&nbsp;tel&eacute;fono que especific&oacute; en&nbsp;el&nbsp;formulario de&nbsp;registro.</p><p>Recibir&aacute; un&nbsp;correo electr&oacute;nico o&nbsp;un&nbsp;mensaje con una nueva contrase&ntilde;a; &uacute;selo para ingresar a&nbsp;la&nbsp;plataforma.</p><p>Puede cambiar la&nbsp;contrase&ntilde;a emitida en&nbsp;su&nbsp;cuenta personal.</p>';
$_['tr']['price-faq-answer-13'] = '<p>Yetkilendirme penceresindeki &laquo;Parolamı Unuttum&raquo; butonuna tıklayın.</p><p>Daha &ouml;nce kayıt formuna girdiğiniz e-posta adresini veya telefon numarasını girin.</p><p>E-posta veya kısa mesaj yoluyla yeni parolanızı alacaksınız. Bu&nbsp;parolayı platforma girerken kullanabilirsiniz.</p><p>Parolanızı kişisel hesabınızdan değiştirebilirsiniz.</p>';
$_['pt']['price-faq-answer-13'] = '<p>Clique no&nbsp;bot&atilde;o &laquo;Esqueci minha senha&raquo; na&nbsp;janela de&nbsp;autoriza&ccedil;&atilde;o.</p><p>Indique o&nbsp;endere&ccedil;o de&nbsp;email ou&nbsp;o&nbsp;n&uacute;mero de&nbsp;telefone que indicou no&nbsp;formul&aacute;rio de&nbsp;registro.</p><p>Voc&ecirc; vai receber um&nbsp;email ou&nbsp;mensagem com uma nova senha&nbsp;&mdash; use o&nbsp;para entrar na&nbsp;plataforma.</p><p>Voc&ecirc; pode alterar a&nbsp;senha emitida em&nbsp;sua conta pessoal.</p>';

$_['ru']['price-faq-question-14'] = 'У&nbsp;меня есть еще много других вопросов&nbsp;&mdash; кому задать?';
$_['en']['price-faq-question-14'] = 'I&nbsp;have many other questions&nbsp;&mdash; who can&nbsp;I ask them?';
$_['es']['price-faq-question-14'] = 'Tengo muchas otras preguntas, &iquest;a qui&eacute;n puedo hacerles?';
$_['tr']['price-faq-question-14'] = 'Daha pek &ccedil;ok sorum var. Bu&nbsp;soruları kime sorabilirim?';
$_['pt']['price-faq-question-14'] = 'Tenho muitas outras perguntas&nbsp;&mdash; quem pode responder a&nbsp;elas?';

$_['ru']['price-faq-answer-14'] = '<p>В&nbsp;случае технических неполадок или затруднений свяжитесь с&nbsp;нами одним из&nbsp;удобных способов: <br>&middot; напишите в&nbsp;Телеграм @synergy_online <br>&middot; отправьте письмо на&nbsp;почту global@synergy.ru <br>&middot; позвоните в&nbsp;техподдержку: 8 (800) 200-54-40 или&nbsp;8 (495) 787-87-67</p>';
$_['en']['price-faq-answer-14'] = '<p>In&nbsp;case of&nbsp;technical malfunctions or&nbsp;difficulties, contact&nbsp;us in&nbsp;one of&nbsp;the convenient ways:</p><p>&bull; send an email to onlineforum@synergyglobal.com</p><p>&bull; via live chat at synergyglobal.com</p>';
$_['es']['price-faq-answer-14'] = '<p>En&nbsp;caso de&nbsp;mal funcionamiento t&eacute;cnico o&nbsp;dificultades, cont&aacute;ctenos de&nbsp;una de&nbsp;las maneras convenientes:</p><p>&bull; escribir a&nbsp;Telegram @synergy_online</p><p>&bull; Env&iacute;e el&nbsp;correo electr&oacute;nico a&nbsp;global@synergy.ru</p><p>&bull; Llame al&nbsp;servicio de&nbsp;soporte t&eacute;cnico: 8 (800) 200-54-40&nbsp;o 8 (495) 787-87-67</p>';
$_['tr']['price-faq-answer-14'] = '<p>Teknik aksaklıklar veya g&uuml;&ccedil;l&uuml;kler yaşamanız halinde aşağıdaki kanallardan birini kullanarak bize ulaşın:</p><p>&bull; Telegram&rsquo;dan yazın: @synergy_online</p><p>&bull; E-posta g&ouml;nderin: global@synergy.ru</p><p>&bull; Teknik destek hattını arayın: 8 (800) 200-54-40 veya&nbsp;8 (495) 787-87-67</p>';
$_['pt']['price-faq-answer-14'] = '<p>Em&nbsp;caso de&nbsp;avarias ou&nbsp;dificuldades t&eacute;cnicas, entre em&nbsp;contato conosco de&nbsp;uma das maneiras convenientes:</p><p>&bull; Escreva para Telegram @synergy_online</p><p>&bull; Envie o&nbsp;email para global@synergy.com</p><p>&bull; Ligue para o&nbsp;servi&ccedil;o de&nbsp;suporte t&eacute;cnico: 8 (800) 200-54-40&nbsp;ou 8 (495) 787-87-67</p>';


/* ======== */
/* /price-new/ Переменные для новой странциы прайс с приставкой new */

include_once 'translation-price-new.php';


/* /thanks/ */
$_['ru']['thanks__container-1'] = 'Оплата прошла успешно!';
$_['en']['thanks__container-1'] = 'The payment was successful!';
$_['ru']['thanks__container-2'] = 'Теперь Вы&nbsp;в&nbsp;списке участников <br>Synergy Online Forum';
$_['en']['thanks__container-2'] = 'Now you are in&nbsp;the list of <br>Synergy Online Forum participants';
$_['ru']['thanks-promo__title'] = 'Получите ваши подарки';
$_['en']['thanks-promo__title'] = 'Get your gifts';
$_['ru']['thanks-promo__subtitle'] = 'Антикризисный дайджест <br>Школы бизнеса Синергия';
$_['en']['thanks-promo__subtitle'] = 'Exclusive video of&nbsp;Arnold Schwarzenegger&rsquo;s speech at&nbsp;Synergy Global Forum 2019';
$_['ru']['thanks-promo__text-1'] = 'который позволит вам быть в&nbsp;курсе ежедневно меняющейся экономической и&nbsp;информационной ситуации';
$_['ru']['thanks-promo__text-2'] = 'Управляйте своими сотрудниками и&nbsp;клиентской базой удаленно. <br>Получите 60&nbsp;дней бесплатного использования Synergy CRM.';
$_['en']['thanks-promo__text-2'] = 'Manage your employees and customers base remotely. <br>Get 60&nbsp;days of&nbsp;free use of&nbsp;Synergy CRM.';
$_['ru']['thanks-promo__button'] = 'Получить подарки в&nbsp;мессенджер';
$_['en']['thanks-promo__button'] = 'get gifts in&nbsp;messenger';
$_['ru']['thanks-promo__button-link'] = 'https://wep.wf/uqhcam';
$_['en']['thanks-promo__button-link'] = 'https://wep.wf/dqw88g';


/* ======== */
/* Спикеры */

include_once 'translation-speakers.php';


/* ============ */
/* Подстраницы */

/* https://synergyglobal.ru/lp/version-besson/ */
$_['ru']['email__besson'] = '';
$_['en']['email__besson'] = 'onlineforum@synergyglobal.com';

$_['ru']['logo__besson'] = '<img src="img/@lp/@version-besson/header/synergy-online.svg" alt="">';
$_['en']['logo__besson'] = '<img src="img/@lp/@version-besson/header/logo-en.svg" alt="">';

$_['ru']['main__besson_name'] = 'Люк <br>Бессон';
$_['en']['main__besson_name'] = 'LUC <br>BESSON';

$_['ru']['main__besson_date'] = '4&nbsp;июля 20:00';
$_['en']['main__besson_date'] = 'JULY 4, 20:00';

$_['ru']['main__besson_subtitle'] = '<span class="color-red">Проживать нереальное:</span><br> онлайн Мастер-класс <br> культового режиссера <br> на&nbsp;Synergy Online Forum';
$_['en']['main__besson_subtitle'] = '<span class="color-red">LIVING THE UNREAL:</span><br> ONLINE MASTER CLASS  <br> OF THE CULT FILM DIRECTOR  <br> AT SYNERGY ONLINE FORUM';

$_['ru']['main__besson_button'] = 'Зарегистрироваться';
$_['en']['main__besson_button'] = 'SIGN UP';

$_['ru']['about__besson_title'] = '4&nbsp;июля хедлайнером Synergy Online Forum станет Люк Бессон&nbsp;&mdash; режиссер кинохитов <nobr>&nbsp;&nbsp;<span class="about__icon"><img class="lazy-loaded" src="img/@lp/@version-besson/about/corben_gun.jpg"></span> &laquo;Пятый элемент&raquo;,</nobr> <nobr><span class="about__icon"><img class="lazy-loaded" src="img/@lp/@version-besson/about/flower.jpg"></span> &laquo;Леон&raquo;,</nobr> &laquo;Голубая бездна&raquo;, &laquo;Такси&raquo;, &laquo;Никита&raquo; и&nbsp;других картин, определивших поп-культуру начала 2000-х.';
$_['en']['about__besson_title'] = 'On JULY 4, SYNERGY ONLINE FORUM WILL INTRODUCE YOU THE HEADLINER OF THE EVENT - LUC BESSON, DIRECTOR OF SUCH BLOCKBUSTERS AS <nobr>&nbsp;&nbsp;<span class="about__icon"><img class="lazy-loaded" src="img/@lp/@version-besson/about/corben_gun.jpg"></span> "THE FIFTH ELEMENT",</nobr> <nobr><span class="about__icon"><img class="lazy-loaded" src="img/@lp/@version-besson/about/flower.jpg"></span>"LEON",</nobr> "THE BIG BLUE", "TAXI", "NIKITA", AND OTHER MOVIES THAT DEFINED POP CULTURE IN THE EARLY 2000s.';

$_['ru']['about__besson_text'] = 'Специально для зрителей Synergy Online Forum режиссер представит собственный мастер-класс о&nbsp;креативности, упорстве, смелости, авантюризме, устойчивости к&nbsp;критике, дружбе с&nbsp;внутренним ребенком и&nbsp;эстетике слабой силы.';
$_['en']['about__besson_text'] = 'ESPECIALLY FOR THE AUDIENCE OF SYNERGY ONLINE FORUM, THE DIRECTOR WILL PRESENT HIS OWN MASTER CLASS ON CREATIVITY, PERSEVERANCE, COURAGE, ADVENTURISM, RESISTANCE TO CRITICISM, FRIENDSHIP WITH THE INNER CHILD AND THE AESTHETICS OF WEAK POWER.';

$_['ru']['about__besson_mc-title'] = 'На&nbsp;мастер-классе Люка Бессона вы&nbsp;узнаете:';
$_['en']['about__besson_mc-title'] = 'AT THE MASTER CLASS OF LUC BESSON, YOU WILL LEARN:';

$_['ru']['about__besson_mc-item-1'] = 'Зачем рисковать, когда в&nbsp;кармане всего 20&nbsp;франков';
$_['en']['about__besson_mc-item-1'] = 'WHY YOU SHOULD RISK WHEN YOU HAVE ONLY 20 FRANCS IN YOUR POCKET';

$_['ru']['about__besson_mc-item-2'] = 'Почему не&nbsp;нужно бояться, <nobr><span class="about__icon about__mc-icon-1"><img class="lazy-loaded" src="img/@lp/@version-besson/about/mc-gun.jpg"></span> что</nobr> вы&nbsp;чего-то не&nbsp;знаете';
$_['en']['about__besson_mc-item-2'] = 'WHY YOU SHOULDN\'T BE AFRAID <nobr><span class="about__icon about__mc-icon-1"><img class="lazy-loaded" src="img/@lp/@version-besson/about/mc-gun.jpg"></span> THAT</nobr> YOU DON\'T KNOW SOMETHING';

$_['ru']['about__besson_mc-item-3'] = 'Когда следует отложить проект в&nbsp;долгий ящик';
$_['en']['about__besson_mc-item-3'] = 'WHEN TO SHELVE A PROJECT';

$_['ru']['about__besson_mc-item-4'] = 'Как трезво оценить свои способности и&nbsp;найти дело жизни';
$_['en']['about__besson_mc-item-4'] = 'HOW TO SOBERLY ASSESS YOUR ABILITIES AND FIND A LIFE\'S WORK';

$_['ru']['about__besson_mc-item-5'] = 'Как оставаться личностью <nobr><span class="about__icon about__mc-icon-2"><img class="lazy-loaded" src="img/@lp/@version-besson/about/mc-milk.jpg"></span> и&nbsp;сохранять</nobr> индивидуальность';
$_['en']['about__besson_mc-item-5'] = 'HOW TO REMAIN A PERSON <nobr><span class="about__icon about__mc-icon-2"><img class="lazy-loaded" src="img/@lp/@version-besson/about/mc-milk.jpg"></span> AND MAINTAIN</nobr> YOUR IDENTITY';

$_['ru']['registration__besson_title'] = 'Зарегистрироваться на&nbsp;онлайн мастер-класс';
$_['en']['registration__besson_title'] = 'REGISTER TO THE ONLINE MASTER CLASS';
$_['pt']['registration__besson_title'] = 'INSCREVER-SE NO MASTER CLASS';

$_['ru']['registration__besson_button'] = 'Регистрация';
$_['en']['registration__besson_button'] = 'REGISTRATION';

$_['ru']['whois__besson_title'] = 'КТО ТАКОЙ <br>ЛЮК БЕССОН';
$_['en']['whois__besson_title'] = 'WHO IS LUC BESSON';

$_['ru']['whois__besson_text_1'] = 'За&nbsp;30&nbsp;лет карьеры в&nbsp;кино Люк Бессон неоднократно выводил из&nbsp;себя профессионалов индустрии и&nbsp;зрителей. Ему приписывали звания &laquo;современного неандертальца&raquo;, &laquo;дикого ребенка французского кино&raquo;, &laquo;внебрачного сына новой волны&raquo;&nbsp;&mdash; и&nbsp;все&nbsp;же признали &laquo;самым голливудским режиссером Франции&raquo; и&nbsp;&laquo;пионером необарокко&raquo;.';
$_['en']['whois__besson_text_1'] = 'Over 30 years of his career in film industry, Luc Besson has repeatedly exasperated industry professionals and audiences. He was called "modern neanderthal", "wild child of French cinema", "illegitimate son of the new wave" — and yet he was recognized as "the most Hollywood Director in France" and "pioneer of neobarocco".';

$_['ru']['whois__besson_text_2'] = 'Фильмы Бессона называли &laquo;воплощениями его странных фантазий&raquo;, крупнейшие издания Франции выпускали издевательские репортажи с&nbsp;премьер, а&nbsp;интеллектуалы и&nbsp;синефилы презирали режиссера за&nbsp;&laquo;отсутствие предмета&raquo; и&nbsp;&laquo;бюджетную гигантоманию&raquo;&nbsp;&mdash; и&nbsp;все&nbsp;же позже признали его &laquo;главной ставкой <nobr>90-х</nobr>&raquo;, носителем первобытной творческой силы.';
$_['en']['whois__besson_text_2'] = 'Besson\'s films were called "embodiments of his strange fantasies", the largest French magazines issued mocking reports from his premieres, and intellectuals and cinephiles despised the Director for "lack of subject matter" and "budget gigantomania" — and yet later recognized him as "the main bet of the 90s", the carrier of primitive creative power.';

$_['ru']['whois__besson_text_3'] = 'Люк Бессон отрицает опыт и&nbsp;традиции кинематографа, строит кадр по&nbsp;законам видеоклипа или рекламного плаката, снимает жестокие и&nbsp;трогательные фильмы&nbsp;&mdash; и&nbsp;остается верен себе, не&nbsp;сдерживая свои интересы и&nbsp;желания.';
$_['en']['whois__besson_text_3'] = 'Luc Besson denies the experience and traditions of cinema, builds a frame according to the laws of a video clip or advertising poster, makes violent and touching films — and remains true to himself, without restraining his interests and desires.';

$_['ru']['whois__besson_blockquote_text'] = '&laquo;Мне интересны экстраординарные истории. Так и&nbsp;появлялись мои дельфины Жаки, убийцы Леоны и&nbsp;минипуты. <br>Мне интересно проживать нереальные жизни&nbsp;&mdash; поэтому я&nbsp;устраиваю себе такие путешествия, снимая фильмы&raquo;.';
$_['en']['whois__besson_blockquote_text'] = 'I am interested in extraordinary stories, from which my dolphin Jacques, the killer Leon, and Invisibles appeared. <br>I\'m interested in living unreal lives — that\'s why I make these trips, making movies.';

$_['ru']['beginning__besson_title'] = 'КАК ВСЕ <br>НАЧАЛОСЬ';
$_['en']['beginning__besson_title'] = 'HOW IT ALL STARTED';

$_['ru']['beginning__besson_subtitle'] = 'Снимать кино Люка Бессона заставили <br>дельфины — и это не преувеличение.';
$_['en']['beginning__besson_subtitle'] = 'DOLPHINS MADE LUKE BESSON TO SHOOT <br>MOVIES — AND THIS IS NOT AN EXAGGERATION.';

$_['ru']['beginning__besson_text_box-1'] = 'Режиссер вырос в&nbsp;семье дайверов: погружения и&nbsp;плавание в&nbsp;открытом море было будничной нормой, а&nbsp;сам Бессон мечтал стать цетологом (морским зоологом) и&nbsp;специализироваться на&nbsp;дельфинах. По&nbsp;его словам, животные помогли сформировать идеальную модель жизни&nbsp;&mdash; &laquo;легкую и&nbsp;беззаботную, всегда открытую для игры, дружбы и&nbsp;любви&raquo;.';
$_['en']['beginning__besson_text_box-1'] = 'The Director grew up in a family of divers: diving and swimming in the open sea was the everyday norm. Besson dreamed of becoming a cetologist (marine zoologist) specializing in dolphins. According to him, the animals helped him to form an ideal model of life — "easy and carefree, always open to play, friendship and love."';

$_['ru']['beginning__besson_text_box-2'] = 'Планы не&nbsp;сбылись: когда Бессону было 17&nbsp;лет, выяснилось, что показатели здоровья не&nbsp;позволяют ему долго находиться под водой. Тогда молодой человек решился на&nbsp;перемены: как рассказывал сам Бессон, он&nbsp;составил список из&nbsp;профессий, которыми он&nbsp;готов был заниматься, и&nbsp;понял, что &laquo;ему нужна была творческая профессия&raquo;.';
$_['en']['beginning__besson_text_box-2'] = 'Plans did not come true: when Besson was 17 years old, it turned out that his health does not allow him to stay underwater for a long time. Then the young man decided to make a change: according to Besson himself, he made a list of professions that he was ready to do, and realized that "he needed a creative profession."';

$_['ru']['beginning__besson_blockquote_subtext'] = 'Определиться с&nbsp;карьерой помог случай:';
$_['en']['beginning__besson_blockquote_subtext'] = 'AN ACCIDENT HELPED ME DECIDE ON THE CAREER:';

$_['ru']['beginning__besson_blockquote_text'] = '&laquo;Мой друг знал парня, чей брат был третьим ассистентом режиссера одного короткометражного фильма. <br>Да, так началась моя карьера&raquo;.';
$_['en']['beginning__besson_blockquote_text'] = '"My friend knew a guy whose brother was the third Assistant Director of a short film. <br> Yes, that\'s how my career started."';

$_['ru']['beginning__besson_content_text'] = 'В&nbsp;начале 1980-х 19-летний Люк стал ассистентом режиссера: сначала он&nbsp;работал во&nbsp;Франции под началом кинематографистов Клода Фаральдо и&nbsp;Патрика Грандперрета, потом на&nbsp;три года уехал в&nbsp;Голливуд';
$_['en']['beginning__besson_content_text'] = 'In the early 1980s, 19-year-old Luke became an Assistant Director: at first, he worked in France in subordination to cinematographers Claude Faraldo and Patrick Grandperret, then he went to Hollywood for three years';

$_['ru']['breakthrough__besson_title'] = 'ПРОРЫВ';
$_['en']['breakthrough__besson_title'] = 'BREAKTHROUGH';

$_['ru']['breakthrough__besson_subtitle'] = '<span class="color-red">Набравшись опыта и&nbsp;смелости в&nbsp;США, режиссер вернулся во&nbsp;Францию и&nbsp;открыл продюсерский центр Les&nbsp;Films du&nbsp;Dauphin&nbsp;&mdash; </span>и&nbsp;уже в&nbsp;1988 году выпустил в&nbsp;прокат свой первый полнометражный фильм о&nbsp;любви к&nbsp;морю, свободе и&nbsp;дельфинам &laquo;Голубая бездна&raquo;, в&nbsp;котором снялся его друг и&nbsp;коллега, актер Жан Рено.';
$_['en']['breakthrough__besson_subtitle'] = '<span class="color-red">HAVING GAINED EXPERIENCE AND COURAGE IN THE UNITED STATES, THE DIRECTOR RETURNED TO FRANCE AND OPENED THE PRODUCTION CENTER "LES FILMS DU DAUPHIN"  </span>AND IN 1988 HE RELEASED HIS FIRST FULL-LENGTH FILM ABOUT THE LOVE OF THE SEA, FREEDOM, AND DOLPHINS "THE BIG BLUE" WITH HIS FRIEND AND COLLEAGUE, JEAN RENO, IN THE MAIN ROLE.';

$_['ru']['breakthrough__besson_text_1'] = 'Картина сделала Бессона популярным во&nbsp;Франции, но&nbsp;не&nbsp;произвела впечатления на&nbsp;американскую аудиторию&nbsp;&mdash; что, впрочем, скоро изменилось.';
$_['en']['breakthrough__besson_text_1'] = 'The picture made Besson popular in France, but did not impress the American audience, which, however, changed very soon.';

$_['ru']['breakthrough__besson_text_2'] = 'В&nbsp;1990 году Бессон представил легендарный боевик &laquo;Никита&raquo; с&nbsp;Анн Парийо в&nbsp;главной роли, за&nbsp;который получил престижную французскую кинопремию &laquo;Сезар&raquo; в&nbsp;номинации &laquo;Лучший фильм&raquo;. Тогда Бессон впервые завоевал восторженные отзывы от&nbsp;критиков и&nbsp;зрителей за&nbsp;пределами Европы.';
$_['en']['breakthrough__besson_text_2'] = 'In 1990, Besson presented the legendary action film "Nikita" with Anne Parillaud in the main role, for which he received the prestigious French film award "César" in the category "Best Film". This was the first time that Besson won rave reviews from critics and audiences outside of Europe.';

$_['ru']['success__besson_title'] = 'МЕЖДУНАРОДНЫЙ УСПЕХ';
$_['en']['success__besson_title'] = 'INTERNATIONAL SUCCESS';

$_['ru']['success__besson_p_1'] = 'Кинематографист закрепил успех, <br>выпустив в 1994 году мрачный романтический <br>боевик «Леон» с Жаном Рено и Натали Портман';
$_['en']['success__besson_p_1'] = 'The filmmaker has secured the success by releasing <br> the dark romantic action movie "Leon" in 1994 <br> with Jean Reno and Natalie Portman';

$_['ru']['success__besson_p_2'] = 'А в 1997 году мир увидел ключевую <br>картину в фильмографии Бессона – <br>«Пятый элемент».';
$_['en']['success__besson_p_2'] = 'And in 1997 the world saw the key <br>picture in the Besson\'s filmography – <br>"The Fifth Element".';

$_['ru']['tabs__besson_name_1'] = 'Жан &laquo;МЁБИУС&raquo; жиро';
$_['en']['tabs__besson_name_1'] = 'JEAN "MOEBIUS" GIRAUD';

$_['ru']['tabs__besson_name_2'] = 'Жан-Клод мезьер';
$_['en']['tabs__besson_name_2'] = 'Jean-Claude Mézières';

$_['ru']['tabs__besson_name_3'] = 'Жан-поль готье';
$_['en']['tabs__besson_name_3'] = 'Jean Paul Gaultier';

$_['ru']['tabs__besson_name_4'] = 'Тяжелый металл';
$_['en']['tabs__besson_name_4'] = 'Heavy Metal';

$_['ru']['tabs__besson_text'] = 'Сценарием &laquo;Пятого элемента&raquo; Бессон занялся задолго до&nbsp;того, как стал снимать кино. Сюжет межгалактического боевика опирается на&nbsp;фантазии и&nbsp;рисунки самого режиссера, оставшегося под впечатлением от&nbsp;мультфильма <span class="text-label tab-btn" data-author="hard-metal">&laquo;<span class="d-sm-block d-none">Тяжелый металл</span><a href="#tabs-content1" class="d-block d-sm-none" data-fancybox>Тяжелый металл</a>&raquo;</span> 1981&nbsp;года. Снять фильм о&nbsp;Лилу, Корбене Далласе и&nbsp;поиске Пятого элемента Бессону помогали лучшие в&nbsp;своем деле специалисты: графические художники <span class="text-label tab-btn" data-author="jan-jiro"><span class="d-sm-block d-none ">Жан &laquo;Мёбиус&raquo; Жиро</span><a href="#tabs-content2" class="d-block d-sm-none" data-fancybox>Жан &laquo;Мёбиус&raquo; Жиро</a></span> и&nbsp;<span class="text-label tab-btn" data-author="zhan-klod-mez\'er"><span class="d-sm-block d-none ">Жан-Клод Мезьер</span><a href="#tabs-content3" class="d-block d-sm-none" data-fancybox>Жан-Клод Мезьер</a></span> создали визуальный ряд и&nbsp;декорации для фильма, а&nbsp;костюмы персонажей&nbsp;&mdash; фэшн-дизайнер <span class="text-label tab-btn" data-author="zhan-pol\'-gat\'e"><span class="d-sm-block d-none ">Жан-Поль Готье.</span><a href="#tabs-content4" class="d-block d-sm-none" data-fancybox>Жан-Поль Готье.</a></span> В&nbsp;1990-х съемки &laquo;Пятого элемента&raquo; признали самыми масштабными, технологически сложными и&nbsp;затратными после &laquo;Звездных войн&raquo; Джорджа Лукаса.<br><br> Воплощение Бессоном мечты детства принесло даже больше удовольствия, чем можно было ожидать: картина вышла в&nbsp;мировой прокат в&nbsp;1997 году и&nbsp;произвела эффект разорвавшейся бомбы. Фильм не&nbsp;только полностью окупился (бюджет картины составил $90&nbsp;млн, а&nbsp;кассовые сборы&nbsp;&mdash; $263 млн в&nbsp;мировом прокате), но&nbsp;и&nbsp;оставался самым кассовым релизом Франции до&nbsp;2011&nbsp;года.';
$_['en']['tabs__besson_text'] = 'Besson started writing the script for "The Fifth Element" long before he started making movies. The plot of the intergalactic action film is based on the imagination and drawings of the Director himself, who was impressed by the 1981 cartoon <span class="text-label tab-btn" data-author="hard-metal">&laquo;<span class="d-sm-block d-none">Heavy Metal</span><a href="#tabs-content1" class="d-block d-sm-none" data-fancybox>Heavy Metal</a>&raquo;</span>. Best-in-class experts helped Besson make a film about Lilu, Korben Dallas, and the search for the Fifth Element: graphic artists <span class="text-label tab-btn" data-author="jan-jiro"><span class="d-sm-block d-none ">Jean "Moebius" Giraud</span><a href="#tabs-content2" class="d-block d-sm-none" data-fancybox>Jean "Moebius" Giraud</a></span> and  <span class="text-label tab-btn" data-author="zhan-klod-mez\'er"><span class="d-sm-block d-none ">Jean-Claude Mézières</span><a href="#tabs-content3" class="d-block d-sm-none" data-fancybox>Jean-Claude Mézières</a></span> have created visuals and sets for the film, and the fashion designer <span class="text-label tab-btn" data-author="zhan-pol\'-gat\'e"><span class="d-sm-block d-none ">Jean Paul Gaultier</span><a href="#tabs-content4" class="d-block d-sm-none" data-fancybox>Jean Paul Gaultier</a></span> created costumes. In the 1990s, the shooting of "The Fifth Element" was recognized as the most large-scale, technologically complex and expensive after "Star Wars" by George Lucas.<br><br> The realization of this childhood dream brought even more pleasure to Besson than he could have been expected: the picture was released worldwide in 1997 and produced the effect of an exploding bomb. The film not only paid off completely (the film\'s budget was $90 million, and the box office — $263 million at the global box office), but also remained the highest-grossing release in France until 2011.';

$_['ru']['cite__besson__blockquote_text'] = '&laquo;Нет никаких правил, единственное правило&nbsp;&mdash; это делать все, что в&nbsp;ваших силах. А&nbsp;еще нужно, чтобы вам повезло!&raquo;';
$_['en']['cite__besson__blockquote_text'] = '"There are no rules, the only rule is to do everything you can. And you also need to be lucky!"';

$_['ru']['after__besson__title'] = 'ЧТО БЫЛО ПОТОМ';
$_['en']['after__besson__title'] = 'WHAT HAPPENED NEXT';

$_['ru']['after__besson__text'] = 'После выхода &laquo;Пятого элемента&raquo; режиссер выпустил, спродюсировал и&nbsp;написал сценарии для десятков кассовых картин: комедийной франшизы &laquo;Такси&raquo;, мистических триллеров &laquo;Багровые реки&raquo; исторической драмы &laquo;Жанна д&rsquo;Арк&raquo;, боевиков &laquo;Васаби&raquo;, &laquo;Хитмен&raquo; и&nbsp;&laquo;Перевозчик&raquo;. Любимым сюжетом Бессона остается превращение девушки в&nbsp;беде в&nbsp;&laquo;ангела-истребителя&raquo;&nbsp;&mdash; на&nbsp;этом приеме построены сценарии его женских боевиков &laquo;Никита&raquo;, &laquo;Люси&raquo; и&nbsp;&laquo;Анна&raquo;. Бессон по-прежнему любит сказки и&nbsp;космические путешествия: с&nbsp;2006 года режиссёр представил анимационную сказку об&nbsp;Артуре и&nbsp;минипутах и&nbsp;серию одноименных детских книг, а&nbsp;в&nbsp;2017 году &mdash; приключенческий ромком о&nbsp;космосе и&nbsp;его обитателях&nbsp;&mdash; &laquo;Валериан и&nbsp;тысячи планет&raquo;.';
$_['en']['after__besson__text'] = 'After the release of "The Fifth Element", the Director released, produced and wrote scripts for dozens grossing pictures: comedy franchise "Taxi", a mystical thriller "Crimson Rivers", the historical drama "Jeanne d\'Arc", action movies "Wasabi", "Hitman" and "The Transporter". The favorite plot of Besson is the transformation of a girl in trouble into a "fighter angel" — his female action movies "Nikita", "Lucy" and "Anna" is based on this technique. Besson continues to love fairy tales and space travel: since 2006, the Director has presented an animated fairy tale about "Arthur and the Invisibles" and a series of children\'s books of the same name, and in 2017, an adventure romantic comedy about space and its inhabitants — "Valerian and the City of a Thousand Planets".';

$_['ru']['current__besson__title'] = 'ЧТО ПРОИСХОДИТ СЕЙЧАС';
$_['en']['current__besson__title'] = 'WHAT IS HAPPENING NOW';

$_['ru']['current__besson__text'] = 'Люк Бессон продолжает активно работать, снимать, продюсировать и&nbsp;искать единомышленников для воплощения любых идей. Режиссера трудно вывести из&nbsp;равновесия: по&nbsp;признанию Бессона, его расстраивают только &laquo;люди со&nbsp;злым сердцем&raquo; и&nbsp;отсутствие магии на&nbsp;съемочной площадке.';
$_['en']['current__besson__text'] = 'Luc Besson continues to actively work, shoot, produce and search for like-minded people to implement any ideas. The Director is difficult to unbalance: according to Besson, he is upset only by "people with evil hearts" and the lack of magic on the movie site.';

$_['ru']['current__besson__blockquote_text'] = '&laquo;В&nbsp;сущности, я&nbsp;&mdash; ребенок, <br>все время жду каких-то чудес&raquo;.';
$_['en']['current__besson__blockquote_text'] = '"In fact, I am a child, <br> always waiting for some kind of miracle."';

$_['ru']['comingsoon__besson__title'] = 'ЧТО БУДЕТ <br>СОВСЕМ СКОРО';
$_['en']['comingsoon__besson__title'] = 'WHAT WILL HAPPEN<br>VERY SOON';

$_['ru']['comingsoon__besson__subtitle'] = '<span class="color-red">4&nbsp;июля на&nbsp;Synergy Online Forum Люк Бессон в&nbsp;рамках собственного мастер-класса</span> расскажет о&nbsp;волшебстве киносъемок, работе с&nbsp;лучшими представителями мировой киноиндустрии,';
$_['en']['comingsoon__besson__subtitle'] = '<span class="color-red">ON JULY 4, AT SYNERGY ONLINE FORUM, LUC BESSON WILL TALK ABOUT THE MAGIC OF FILMING AND WORKING WITH THE BEST REPRESENTATIVES OF THE WORLD\'S FILM INDUSTRY </span> AS PART OF HIS OWN MASTER CLASS,';

$_['ru']['comingsoon__besson__text'] = 'подскажет, что помогает сохранять уверенность в&nbsp;себе, когда все идет не&nbsp;так, как ожидалось, как поддержать отношения со&nbsp;своей аудиторией и&nbsp;где находить вдохновение, чтобы не&nbsp;повторяться и&nbsp;удивлять себя самого.';
$_['en']['comingsoon__besson__text'] = 'he will tell you about self-confidence, which helps you when things don\'t go as expected, how to maintain relationships with your audience, and where to find inspiration so as not to repeat yourself and surprise yourself.';

$_['ru']['platform__besson__title'] = 'Платформа';
$_['en']['platform__besson__title'] = 'PLATFORM';
$_['es']['platform__besson__title'] = 'PLATAFORMA';
$_['pt']['platform__besson__title'] = 'PLATAFORMA';
$_['ея']['platform__besson__title'] = 'PLATFORM';

$_['ru']['platform__besson__text'] = 'Мастер-класс будет проходить на&nbsp;платформе Synergy.Online, которая создана для того, чтобы аккумулировать самые актуальные знания и&nbsp;сервисы для предпринимателей. Получайте образование в&nbsp;онлайн-формате, используйте современные IT-решения, развивайтесь и&nbsp;развивайте свой бизнес.';
$_['en']['platform__besson__text'] = 'The live discussion will be&nbsp;held on&nbsp;the Synergy.Online platform, which is&nbsp;designed to&nbsp;accumulate the most up-to-date knowledge and services for entrepreneurs. Get an&nbsp;education in&nbsp;an&nbsp;online format, use modern&nbsp;IT solutions, develop yourself and your business.';
$_['es']['platform__besson__text'] = 'La&nbsp;clase magistral se&nbsp;llevar&aacute; a&nbsp;cabo en&nbsp;la&nbsp;plataforma Synergy.Online, que fue creado para acumular los conocimientos y&nbsp;servicios m&aacute;s relevantes para los empresarios. Obtenga educaci&oacute;n en&nbsp;un&nbsp;formato en&nbsp;l&iacute;nea, use soluciones de&nbsp;TI modernas, desarrolle y&nbsp;haga crecer su&nbsp;negocio.';
$_['pt']['platform__besson__text'] = 'O&nbsp;master class ser&aacute; realizado na&nbsp;plataforma Synergy.Online criada para acumular os&nbsp;conhecimentos e&nbsp;servi&ccedil;os mais relevantes para os&nbsp;empreendedores. Obtenha educa&ccedil;&atilde;o online, use solu&ccedil;&otilde;es de&nbsp;TI modernas, expanda e&nbsp;desenvolva seus neg&oacute;cios.';
$_['tr']['platform__besson__text'] = 'Master sınıf, girişimciler i&ccedil;in en&nbsp;alakalı bilgi ve&nbsp;hizmetleri biriktirmek amacıyla oluşturulan Synergy Online platformunda ger&ccedil;ekleştirilecektir. &Ccedil;evrimi&ccedil;i formatta eğitim alın, modern&nbsp;BT &ccedil;&ouml;z&uuml;mlerini kullanın, işinizi b&uuml;y&uuml;t&uuml;n ve&nbsp;geliştirin.';


$_['ru']['platform__besson__block_text_1'] = 'ЕЖЕНЕДЕЛЬНЫЕ <br>ОНЛАЙН-ФОРУМЫ С ВЕДУЩИМИ <br>МИРОВЫМИ СПИКЕРАМИ';
$_['en']['platform__besson__block_text_1'] = 'WEEKLY <br>ONLINE FORUMS WITH <br> THE WORLD\'S BEST SPEAKERS';
$_['es']['platform__besson__block_text_1'] = 'FOROS SEMANALES <br> EN&nbsp;L&Iacute;NEA <br> CON LOS PRINCIPALES <br> ORADORES DEL MUNDO';
$_['pt']['platform__besson__block_text_1'] = 'F&Oacute;RUNS ON-LINE SEMANAIS <br> COM OS&nbsp;PRINCIPAIS ORADORES <br> DO&nbsp;MUNDO';
$_['tr']['platform__besson__block_text_1'] = 'DÜNYANIN ÖNDE <br>GELEN KONUŞMACILARIYLA <br>HAFTALIK <br>ÇEVRİMİÇİ FORUMLAR';

$_['ru']['platform__besson__block_text_2'] = 'ОНЛАЙН-ПРАКТИКУМЫ <br>И ВЕБИНАРЫ';
$_['en']['platform__besson__block_text_2'] = 'ONLINE WORKSHOPS <br>AND WEBINARS';
$_['es']['platform__besson__block_text_2'] = 'TALLERES Y&nbsp;SEMINARIOS <br>EN&nbsp;L&Iacute;NEA';
$_['pt']['platform__besson__block_text_2'] = 'ON-LINE-OFICINAS <br>E&nbsp;WEBINARS';
$_['tr']['platform__besson__block_text_2'] = '&Ccedil;EVRİMİ&Ccedil;İ <br>AT&Ouml;LYE &Ccedil;ALIŞMALARI VE&nbsp;WEB SEMİNERLERİ';

$_['ru']['platform__besson__block_text_3'] = 'БАЗА ЗНАНИЙ <br>С ЛУЧШИМИ ВИДЕО <br>С СОБЫТИЙ &laquo;СИНЕРГИИ&raquo;';
$_['en']['platform__besson__block_text_3'] = 'KNOWLEDGE BASE <br>WITH BEST VIDEOS <br>FROM SYNERGY EVENTS';
$_['es']['platform__besson__block_text_3'] = 'BASE DE&nbsp;CONOCIMIENTOS <br>CON LOS MEJORES VIDEOS <br>DE&nbsp;EVENTOS DE&nbsp;SINERGY';
$_['pt']['platform__besson__block_text_3'] = 'BASE DE&nbsp;DADOS DE&nbsp;CONHECIMENTO <br>COM OS&nbsp;MELHORES V&Iacute;DEOS <br>DOS EVENTOS DO&nbsp;&laquo;SYNERGY&raquo;';
$_['tr']['platform__besson__block_text_3'] = '&laquo;SİNERJİ&raquo; <br>ETKİNLİĞİNDEN EN&nbsp;İYİ VİDEOLARLA <br> BİLGİ TABANI';

$_['ru']['platform__besson__block_text_4'] = 'ЦИФРОВЫЕ СЕРВИСЫ <br>ДЛЯ БИЗНЕСА';
$_['en']['platform__besson__block_text_4'] = 'DIGITAL SERVICES <br>FOR BUSINESS';
$_['es']['platform__besson__block_text_4'] = 'SERVICIOS DIGITALES <br>PARA EMPRESAS';
$_['pt']['platform__besson__block_text_4'] = 'SERVI&Ccedil;OS DIGITAIS <br>PARA NEG&Oacute;CIOS';
$_['tr']['platform__besson__block_text_4'] = 'İŞLETMELER İÇİN <br>DİJİTAL HİZMETLER';

$_['ru']['platform__besson__block_text_5'] = 'АНТИКРИЗИСНЫЕ <br>IT-РЕШЕНИЯ';
$_['en']['platform__besson__block_text_5'] = 'ANTI-CRISIS <br>IT SOLUTIONS';
$_['es']['platform__besson__block_text_5'] = 'SOLUCIONES <br>DE&nbsp;IT&nbsp;ANTICRISIS';
$_['pt']['platform__besson__block_text_5'] = 'SOLU&Ccedil;&Otilde;ES DE&nbsp;TI <br>ANTI-CRISE';
$_['tr']['platform__besson__block_text_5'] = 'KRİZLE MÜCADELE <br> BT ÇÖZÜMLERİ';

$_['ru']['platform__besson__block_text_6'] = 'НОВОСТИ <br>И АНАЛИТИКА';
$_['en']['platform__besson__block_text_6'] = 'NEWS <br>AND ANALYTICS';
$_['es']['platform__besson__block_text_6'] = 'NOTICIAS <br>Y&nbsp;AN&Aacute;LISIS';
$_['pt']['platform__besson__block_text_6'] = 'NOT&Iacute;CIAS <br>E&nbsp;AN&Aacute;LISE';
$_['tr']['platform__besson__block_text_6'] = 'HABERLER VE ANALİZLER';

/* https://synergyglobal.ru/lp/version-tracy/ */
$_['ru']['email__tracy'] = '';
$_['en']['email__tracy'] = 'onlineforum@synergyglobal.com';

$_['ru']['logo__tracy'] = '<img src="img/@lp/@version-tracy/header/synergy-online.svg" alt="">';
$_['en']['logo__tracy'] = '<img src="img/@lp/@version-tracy/header/logo-en.svg" alt="">';

$_['ru']['main__tracy_name'] = 'Брайан <br>Трейси';
$_['en']['main__tracy_name'] = 'Brian <br>Tracy';

$_['ru']['main__tracy_date'] = '1&nbsp;августа';
$_['en']['main__tracy_date'] = 'August&nbsp;1';

$_['ru']['main__tracy_subtitle'] = '<span class="color-red">Онлайн Мастер-класс</span><br> о&nbsp;лягушках, оптимизме, <br> масштабе и&nbsp;достижениях';
$_['en']['main__tracy_subtitle'] = '<span class="color-red">Online Master-Class</span><br> about Frogs, Optimism, <br> Scale, and Achievements';

$_['ru']['main__tracy_button'] = 'Зарегистрироваться';
$_['en']['main__tracy_button'] = 'SIGN UP';

$_['ru']['about__tracy_title'] = '1&nbsp;августа на&nbsp;Synergy Online Forum выступит классик мотивации, один из&nbsp;первых крупных специалистов США в&nbsp;области личностного роста, автор более 60&nbsp;книг о&nbsp;саморазвитии, тайм-менеджменте и&nbsp;раскрытии потенциала, бизнес-тренер и&nbsp;консультант с&nbsp;мировым именем <span class="color-red">Брайан Трейси.</span>';
$_['en']['about__tracy_title'] = 'A&nbsp;motivational guru, one of&nbsp;the first major&nbsp;US experts in&nbsp;the field of&nbsp;personal growth, world-known author of&nbsp;more than 60&nbsp;books on&nbsp;self-development, time management, and potential disclosure, business coach and consultant, <span class="color-red">Brian Tracy</span> at&nbsp;Synergy Online Forum on&nbsp;August&nbsp;1.';

$_['ru']['about__tracy_text'] = 'В&nbsp;рамках выступления на&nbsp;Synergy Online Forum спикер расскажет о&nbsp;том, почему режим выживания не&nbsp;так уж&nbsp;вреден, почему позитивное мышление важнее, чем рациональное, правда&nbsp;ли, что за&nbsp;два года можно стать вице-президентом компании и&nbsp;зачем все-таки есть лягушек.';
$_['en']['about__tracy_text'] = 'He&nbsp;will tell&nbsp;us why survival mode is&nbsp;not so&nbsp;harmful, why positive thinking is&nbsp;more important than rational, whether it&nbsp;is&nbsp;true that you can become a&nbsp;Vice President of&nbsp;a&nbsp;company in&nbsp;two years, and why you should eat frogs.';

$_['ru']['registration__tracy_title'] = 'Зарегистрироваться на&nbsp;онлайн мастер-класс';
$_['en']['registration__tracy_title'] = 'REGISTER TO THE ONLINE MASTER CLASS';

$_['ru']['registration__tracy_button'] = 'Регистрация';
$_['en']['registration__tracy_button'] = 'REGISTRATION';

$_['ru']['whois__tracy_title'] = 'КТО ТАКОЙ <br> БРАЙАН ТРЕЙСИ';
$_['en']['whois__tracy_title'] = 'WHO IS <br> BRIAN TRACY';

$_['ru']['whois__tracy_text_1'] = 'О&nbsp;прошлом Брайана Трейси известно не&nbsp;так много&nbsp;&mdash; и&nbsp;оттого эффектнее история его успеха.';
$_['en']['whois__tracy_text_1'] = 'Not much is&nbsp;known about Brian Tracy&rsquo;s past&nbsp;&mdash; and that&rsquo;s why his success story is&nbsp;more spectacular.';

$_['ru']['whois__tracy_text_2'] = 'Будущий мотиватор родился в&nbsp;1944 году в&nbsp;Канаде. По&nbsp;рассказу спикера, он&nbsp;вырос в&nbsp;бедности и&nbsp;до&nbsp;сих пор хорошо помнит &laquo;чувство голода, которое почти никогда не&nbsp;оставляло его&raquo;. Впрочем, тяжелая финансовая ситуация дома не&nbsp;помешала юноше поступить в&nbsp;Альбертский университет, который Трейси закончил весьма посредственно и&nbsp;за&nbsp;время учебы порядком надоел преподавателям. По&nbsp;его словам, администрация учреждения была счастлива выдать ему сертификат и&nbsp;отпустить юношу в&nbsp;свободное плавание.';
$_['en']['whois__tracy_text_2'] = 'The future motivator was born in&nbsp;1944 in&nbsp;Canada. According to&nbsp;the speaker, he&nbsp;grew up&nbsp;in&nbsp;poverty and still remembers &laquo;the feeling of&nbsp;hunger that almost never left him.&raquo; However, the difficult financial situation at&nbsp;home did not prevent the young man from entering the University of&nbsp;Alberta, which Tracy graduated very mediocre and during his studies, the teachers were quite tired of&nbsp;him. According to&nbsp;him, the administration of&nbsp;the University was happy to&nbsp;give him a&nbsp;diploma and let the young man to&nbsp;freewheeling.';

$_['ru']['whois__tracy_text_3'] = 'Кстати, в&nbsp;плавание Трейси отправился в&nbsp;буквальном смысле. В&nbsp;двадцать лет Брайан не&nbsp;знал, кем он&nbsp;станет и&nbsp;чем займется. Чтобы разобраться в&nbsp;себе и&nbsp;освежить голову, молодой человек присоединился к&nbsp;команде торгового корабля и&nbsp;отправился в&nbsp;долгое путешествие по&nbsp;миру. Как признается Трейси, он&nbsp;пробыл в&nbsp;море более восьми лет и&nbsp;объездил около 80&nbsp;стран.';
$_['en']['whois__tracy_text_3'] = 'By&nbsp;the way, Tracy went freewheeling literally. At&nbsp;twenty, Brian didn&rsquo;t know what he&nbsp;was going to&nbsp;be&nbsp;or&nbsp;what he&nbsp;was going to&nbsp;do. To&nbsp;clear his head, the young man joined the crew of&nbsp;a&nbsp;merchant ship and went on&nbsp;a&nbsp;long journey around the world. As&nbsp;Tracy admits, he&nbsp;has been at&nbsp;sea for more than eight years and traveled to&nbsp;about 80&nbsp;countries.';

$_['ru']['whois__tracy_text_4'] = 'За&nbsp;этот срок у&nbsp;молодого человека было время не&nbsp;только насладиться свободой, увидеть незнакомые страны и&nbsp;встретить людей разных национальностей и&nbsp;укладов жизни, но&nbsp;и&nbsp;основательно поучиться. Трейси признается, что, прежде чем заняться карьерой в&nbsp;сфере продаж и&nbsp;мотивации, он&nbsp;потратил больше 30&nbsp;тысяч часов на&nbsp;самообразование и&nbsp;приобретение навыков&nbsp;&mdash; от&nbsp;чтения собраний классиков мировой литературы, философов и&nbsp;биографий своих кумиров до&nbsp;изучения языков (Брайан свободно говорит и&nbsp;выступает на&nbsp;четырех).';
$_['en']['whois__tracy_text_4'] = 'During this period, the young man had time not only to&nbsp;enjoy freedom, see unfamiliar countries and meet people of&nbsp;different nationalities and lifestyles, but also to&nbsp;thoroughly learn. Tracy admits that before pursuing a&nbsp;career in&nbsp;sales and motivation, he&nbsp;spent more than 30,000 hours on&nbsp;self-education and skills&nbsp;&mdash; from reading collections of&nbsp;world literature classics, philosophers, and biographies of&nbsp;his idols to&nbsp;learning languages (Brian speaks and performs fluently in&nbsp;four languages).';

$_['ru']['whois__tracy_blockquote_text_1'] = '&laquo;Принципы успеха понятны и&nbsp;предсказуемы, как восход и&nbsp;закат&raquo;.';
$_['en']['whois__tracy_blockquote_text_1'] = '&laquo;The principles of&nbsp;success are clear and predictable, like sunrise and sunset.&raquo;';

$_['ru']['whois__tracy_blockquote_text_2'] = '&laquo;Закон приложенных усилий&nbsp;&mdash; важнейший фактор успеха. Он&nbsp;гласит: любая цель достижима, любая работа выполнима, если проявить упорство и&nbsp;приложить достаточно стараний&raquo;.';
$_['en']['whois__tracy_blockquote_text_2'] = '&laquo;The law of&nbsp;effort is&nbsp;the most important factor of&nbsp;success. It&nbsp;says: any goal is&nbsp;achievable, any work is&nbsp;achievable if&nbsp;you persevere and put enough effort into&nbsp;it.&raquo;';

$_['ru']['beginning__tracy_title'] = 'правило <br> шести &laquo;п&raquo;';
$_['en']['beginning__tracy_title'] = '6P&nbsp;Rule';

$_['ru']['beginning__tracy_text_box-1'] = 'В&nbsp;сфере продаж Брайан Трейси показал себя как динамичный и&nbsp;интересный докладчик, который умел привлечь внимание не&nbsp;только к&nbsp;продукту и&nbsp;к&nbsp;компании, но&nbsp;и&nbsp;к&nbsp;себе как к&nbsp;отдельному активу. Подспорьем в&nbsp;этом стало глубокое погружение в&nbsp;изучение психологии влияния; коронный навык Трейси &laquo;входить в&nbsp;контакт&raquo; с&nbsp;собеседником и&nbsp;слышать между строк помогли ему собрать знания в&nbsp;единую систему, которая отразилась в&nbsp;его авторских аудиокурсах, выпускаемых еще с&nbsp;80-х годов: &laquo;Преодолей барьер к&nbsp;успеху&raquo;, &laquo;Психология продаж&raquo;, &laquo;Совершенная женщина&raquo;, &laquo;Наука самоуверенности&raquo;, &laquo;Думай масштабно&raquo;, &laquo;Как распоряжаться своим временем&raquo;. Погружение в&nbsp;науку влияния и&nbsp;коммуникаций помогло Трейси усвоить еще несколько истин, которые свелись в&nbsp;еще одно правило жизни:';
$_['en']['beginning__tracy_text_box-1'] = 'In&nbsp;sales, Brian Tracy proved to&nbsp;be&nbsp;a&nbsp;dynamic and interesting speaker who was able to&nbsp;draw attention not only to&nbsp;the product and the company, but also to&nbsp;himself as&nbsp;a&nbsp;separate asset. This was helped by&nbsp;a&nbsp;deep dive into the study of&nbsp;influence psychology; Tracy&rsquo;s signature skill of&nbsp;&laquo;getting in&nbsp;touch&raquo; with the interlocutor and hearing between the lines helped him gather knowledge into a&nbsp;single system, which was reflected in&nbsp;his author&rsquo;s audio courses, produced since the &rsquo;80s: &laquo;Overcome the Barrier to&nbsp;Success&raquo;, &laquo;Sales Psychology&raquo;, &laquo;The Perfect Woman&raquo;, &laquo;The Science of&nbsp;Self-Confidence&raquo;, &laquo;Think Big&raquo;, &laquo;How to&nbsp;Manage Your Time&raquo;. The immersion in&nbsp;the science of&nbsp;influence and communication helped Tracy learn a&nbsp;few more truths that became another rule of&nbsp;life:';

$_['ru']['beginning__tracy_blockquote_text'] = '&laquo;Есть &laquo;правило шести&nbsp;П&raquo;: правильная предварительная подготовка предотвращает плохие показатели. Ваша готовность к&nbsp;основательной подготовке предопределяет, как хорошо вы&nbsp;сделаете свое дело, как далеко доберетесь и&nbsp;сколько заработаете&raquo;.';
$_['en']['beginning__tracy_blockquote_text'] = '&laquo;There is&nbsp;a&nbsp;&bdquo;six-P rule&ldquo;: Proper Pre-Preparation Prevents Poor Performance. Your readiness for thorough training determines how well you will do&nbsp;your job, how far you will get, and how much you will earn.&raquo;';

$_['ru']['breakthrough__tracy_subtitle'] = 'Следуя этому правилу, Брайан Трейси задумался о&nbsp;том, чего хочет&nbsp;&mdash; и&nbsp;понял, что развитая речь, поставленный голос, коммуникабельность и&nbsp;дар убеждения могут сделать ему <span class="color-red">карьеру в&nbsp;продажах.</span>';
$_['en']['breakthrough__tracy_subtitle'] = 'Following this rule, Brian Tracy thought about what he&nbsp;wanted&nbsp;&mdash; and realized that a&nbsp;developed speech, a&nbsp;well-trained voice, communication skills, and a&nbsp;gift of&nbsp;persuasion can make him <span class="color-red">a&nbsp;career in&nbsp;sales.</span>';

$_['ru']['breakthrough__tracy_text_1'] = 'В&nbsp;1981 году Трейси запустил собственный тренинг для менеджеров по&nbsp;продажам &laquo;The Phoenix Seminar&raquo;. В&nbsp;1985 году Трейси отформатировал содержание курса и&nbsp;выпустил его на&nbsp;кассетах под названием &laquo;Психология достижений&raquo;. Авторская программа стала национальным мотивационным бестселлером и&nbsp;обеспечила спикеру признание поклонников темы личностного роста.';
$_['en']['breakthrough__tracy_text_1'] = 'In&nbsp;1981, Tracy launched his own training for sales managers called &laquo;The Phoenix Seminar&raquo;. In&nbsp;1985, Tracy edited the course content and released it&nbsp;on&nbsp;cassette under the title &laquo;Psychology of&nbsp;Achievement&raquo;. The author&rsquo;s program became a&nbsp;national motivational bestseller and provided the speaker with the recognition of&nbsp;fans of&nbsp;personal growth.';

$_['ru']['breakthrough__tracy_text_2'] = 'Сам Брайан публично высказывался о&nbsp;том, что &laquo;амбиции в&nbsp;сфере продаж свойственны совсем отчаявшимся&raquo;. В&nbsp;его случае было именно так: мужчина не&nbsp;знал, где еще себя применить. Пойдя по&nbsp;простому пути, Брайан выиграл&nbsp;&mdash; и&nbsp;закрепил в&nbsp;сознании еще один жизненный принцип:';
$_['en']['breakthrough__tracy_text_2'] = 'Bryan himself has publicly stated that &laquo;sales ambitions tend to&nbsp;be&nbsp;quite desperate people.&raquo; In&nbsp;his case, it&nbsp;was like this: the man did not know what he&nbsp;wanted to&nbsp;do. By&nbsp;following the simple path, Brian won&nbsp;&mdash; and cemented another life principle in&nbsp;his mind:';

$_['ru']['breakthrough__tracy_blockquote_text'] = '&laquo;Самое пустое прожигание времени&nbsp;&mdash; в&nbsp;поте лица карабкаться по&nbsp;лестнице успеха и&nbsp;только на&nbsp;вершине обнаружить, что лестница приставлена не&nbsp;к&nbsp;тому зданию&raquo;.';
$_['en']['breakthrough__tracy_blockquote_text'] = '&laquo;The most futile waste of&nbsp;time is&nbsp;to&nbsp;climb the ladder of&nbsp;success and find out at&nbsp;the top that the ladder is&nbsp;attached to&nbsp;the wrong building.&raquo;';

$_['ru']['tabs__tracy_title'] = 'В чем его секрет';
$_['en']['tabs__tracy_title'] = 'WHAT IS&nbsp;HIS SECRET';

$_['ru']['tabs__tracy_name_1'] = 'Уи&#769;льям Шекспи&#769;р&nbsp;&mdash; английский поэт и&nbsp;драматург, зачастую считается величайшим англоязычным писателем и&nbsp;одним из&nbsp;лучших драматургов мира. Часто именуется национальным поэтом Англии.';
$_['en']['tabs__tracy_name_1'] = 'William Shakespeare is&nbsp;an&nbsp;English poet and playwright. He&nbsp;is&nbsp;often considered the greatest English-speaking writer and one of&nbsp;the world&rsquo;s best playwrights. He&nbsp;is&nbsp;often called as&nbsp;the national poet of&nbsp;England.';

$_['ru']['tabs__tracy_name_2'] = 'Ге&#769;нри Форд&nbsp;&mdash; американский промышленник, владелец заводов по&nbsp;производству автомобилей по&nbsp;всему миру, изобретатель, автор 161 патента США. Его лозунг&nbsp;&mdash; &laquo;автомобиль для всех&raquo;; завод Форда выпускал наиболее дешёвые автомобили в&nbsp;начале эпохи автомобилестроения. Компания &laquo;Ford Motor Company&raquo; существует по&nbsp;сей день.';
$_['en']['tabs__tracy_name_2'] = 'Henry Ford is&nbsp;an&nbsp;American industrialist, owner of&nbsp;car factories all over the world, inventor, author of&nbsp;151&nbsp;US patents. His slogan is&nbsp;&laquo;A&nbsp;car for everyone&raquo;. His factory produced the cheapest cars in&nbsp;the early days of&nbsp;the automotive era. Ford Motor Company exists to&nbsp;this day.';

$_['ru']['tabs__tracy_text'] = 'Почти в&nbsp;каждом интервью Брайан Трейси повторяет, что секрет успеха очень прост: нужно учиться у&nbsp;экспертов. Они точно знают, как достичь желаемого, поэтому в&nbsp;поисках успеха стоит следовать по&nbsp;пути победителей, а&nbsp;не&nbsp;бессознательно набивать собственные шишки. Этим внутренним правилом Трейси и&nbsp;руководствовался в&nbsp;возрасте 25&nbsp;лет, когда он&nbsp;вернулся в&nbsp;Канаду после продолжительного отпуска в&nbsp;море. Прочитав десятки книг людей, которыми он&nbsp;восхищался&nbsp;&mdash; от&nbsp;<span class="text-label tab-btn" data-author="shekspir"><span class="d-sm-block d-none">Уильяма Шекспира</span><a href="#tabs-content1" class="d-block d-sm-none" data-fancybox>Уильяма Шекспира</a></span> до&nbsp;<span class="text-label tab-btn" data-author="ford"><span class="d-sm-block d-none ">Генри Форда</span><a href="#tabs-content2" class="d-block d-sm-none" data-fancybox>Генри Форда</a></span> &mdash; будущий оратор аккумулировал вневременные правила жизни, которые было пора испытать на&nbsp;практике. Первый закон, который усвоил спикер, заключалось в&nbsp;следующем:';
$_['en']['tabs__tracy_text'] = 'In&nbsp;almost every interview, Brian Tracy repeats that the secret to&nbsp;success is&nbsp;very simple: you need to&nbsp;learn from experts. They know exactly how to&nbsp;achieve what they want, so&nbsp;in&nbsp;the search for success, you should follow the path of&nbsp;winners, and not unconsciously make your own mistakes. Tracy followed this internal rule at&nbsp;the age of&nbsp;25, when he&nbsp;returned to&nbsp;Canada after a&nbsp;long vacation at&nbsp;sea. After reading dozens of&nbsp;books by&nbsp;people he&nbsp;admired&nbsp;&mdash; from&nbsp;<span class="text-label tab-btn" data-author="shekspir"><span class="d-sm-block d-none">William Shakespeare</span><a href="#tabs-content1" class="d-block d-sm-none" data-fancybox>William Shakespeare</a></span> to&nbsp;<span class="text-label tab-btn" data-author="ford"><span class="d-sm-block d-none ">Henry Ford</span><a href="#tabs-content2" class="d-block d-sm-none" data-fancybox>Henry Ford</a></span> &mdash; the future speaker accumulated timeless rules of&nbsp;life that he&nbsp;was ready to&nbsp;put into practice. The first law he&nbsp;learned was as&nbsp;follows:';

$_['ru']['cite__tracy__blockquote_text'] = '&laquo;Чтобы быть успешным и&nbsp;счастливым, вы&nbsp;должны заставить себя не&nbsp;думать и&nbsp;не&nbsp;говорить о&nbsp;том, чего вы&nbsp;не&nbsp;хотите. Эта идея может показаться простой и&nbsp;очевидной, но&nbsp;практическое ее&nbsp;осуществление может быть чрезвычайно трудным упражнением, требующим полного владения собой&raquo;.';
$_['en']['cite__tracy__blockquote_text'] = '&laquo;To&nbsp;be&nbsp;successful and happy, you must force yourself not to&nbsp;think or&nbsp;talk about things that you don&rsquo;t want. This idea may seem simple and obvious, but its practical implementation can be&nbsp;an&nbsp;extremely difficult exercise that requires complete self-control.&raquo;';

$_['ru']['current__tracy__title'] = 'ЧТО ПРОИСХОДИТ СЕЙЧАС';
$_['en']['current__tracy__title'] = 'WHAT IS&nbsp;HAPPENING NOW';

$_['ru']['current__tracy__text'] = 'За&nbsp;25&nbsp;лет карьеры в&nbsp;продажах и&nbsp;маркетинге Трейси выступил в&nbsp;90&nbsp;странах мира перед 250 тысячами зрителей, в&nbsp;числе его постоянных клиентов&nbsp;&mdash; топ-менеджмент и&nbsp;команды компаний IBM, Deloitte Touche, McDonnell Douglas and The Million Dollar Round Table, а&nbsp;он&nbsp;сам возглавляет собственную интернациональную консалтинговую компанию Brian Tracy Global. С&nbsp;начала карьеры спикер опубликовал более 60&nbsp;книг, среди которых любимые международной аудиторией мотивационные хиты: &laquo;Съешьте лягушку: 21&nbsp;способ научиться успевать&raquo;, &laquo;Нет оправданий: Сила дисциплины&raquo;, &laquo;Достижение максимума. Стратегии и&nbsp;навыки, которые разбудят ваши скрытые силы&raquo;, &laquo;Привычки на&nbsp;миллионы долларов: проверенно эффективные методики по&nbsp;удвоению и&nbsp;утроению ваших доходов&raquo; и&nbsp;другие бестселлеры. В&nbsp;2010 году оратор основал Университет Брайана Трейси, который в&nbsp;онлайн-формате обучает предпринимателей и&nbsp;менеджеров по&nbsp;продажам и&nbsp;консультирует около 400 компаний ежегодно.';
$_['en']['current__tracy__text'] = 'During his 25-year career in&nbsp;sales and marketing, Tracy has performed in&nbsp;90&nbsp;countries in&nbsp;front of&nbsp;250,000&nbsp;viewers. His regular clients include top management and teams from IBM, Deloitte Touche, McDonnell Douglas, and The Million Dollar Round Table, and he&nbsp;heads his own international consulting company, Brian Tracy Global. Since the beginning of&nbsp;his career, the speaker has published more than 60&nbsp;books, including motivational hits that are beloved by&nbsp;international audiences: &laquo;Eat that Frog: 21&nbsp;Great Ways to&nbsp;Stop Procrastinating and Get More Done in&nbsp;Less Time&raquo;, &laquo;No&nbsp;Excuses: The Power Of&nbsp;Self-Discipline&raquo;, &laquo;Maximum Achievement: Strategies and Skills that Will Unlock Your Hidden Powers to&nbsp;Succeed&raquo;, &laquo;Million Dollar Habits: Proven Power Practices to&nbsp;Double and Triple Your Income&raquo; and other bestsellers. In&nbsp;2010, he&nbsp;founded Brian Tracy University, which trains entrepreneurs and sales managers online and advises about 400 companies annually.';

$_['ru']['current__tracy__blockquote_text'] = '&laquo;Прежде чем мечтать об&nbsp;успехе и&nbsp;деньгах, подумайте: какой один навык, если его в&nbsp;совершенстве развить и&nbsp;применять, окажет наиболее позитивное воздействие на&nbsp;мою карьеру?&raquo;';
$_['en']['current__tracy__blockquote_text'] = '&laquo;Before you dream about success and money, think about one skill that will have the most positive impact on&nbsp;your career if&nbsp;you develop and apply it&nbsp;perfectly.&raquo;';

$_['ru']['comingsoon__tracy__title'] = 'ЧТО БУДЕТ <br>СОВСЕМ СКОРО';
$_['en']['comingsoon__tracy__title'] = 'WHAT WILL<br>HAPPEN NEXT';

$_['ru']['comingsoon__tracy__subtitle'] = 'Брайан Трейси продолжает активно работать, выступать перед зрителями по&nbsp;всему миру&nbsp;и, по&nbsp;его собственным словам, не&nbsp;представляет, как &laquo;просто сидеть дома&raquo;. <span class="color-red">Спикер часто выступает в&nbsp;России&nbsp;&mdash; и&nbsp;этим летом познакомится с&nbsp;аудиторией Synergy Online Forum.</span>';
$_['en']['comingsoon__tracy__subtitle'] = 'Brian Tracy continues to&nbsp;work actively, performing in&nbsp;front of&nbsp;audiences around the world and, in&nbsp;his own words, does not think about &laquo;just sit at&nbsp;home&raquo;. <span class="color-red">The speaker often performs in&nbsp;Russia&nbsp;&mdash; and this summer he&nbsp;will meet the audience of&nbsp;Synergy Online Forum.</span>';

$_['ru']['comingsoon__tracy__text_1'] = '1&nbsp;августа на&nbsp;Synergy Online Forum Брайан Трейси присоединится к&nbsp;панели спикеров мероприятия, чтобы поделиться простыми и&nbsp;эффективными секретами управления своей жизнью, временем и&nbsp;достижениями, развеять мифы о&nbsp;том, что достичь процветания&nbsp;&mdash; это что-то из&nbsp;грани фантастики, объяснит и&nbsp;почему законы успеха работают одинаково в&nbsp;любую эпоху.';
$_['en']['comingsoon__tracy__text_1'] = 'On&nbsp;August&nbsp;1, at&nbsp;Synergy Online Forum, Brian Tracy will join the panel of&nbsp;speakers of&nbsp;the event to&nbsp;share simple and effective secrets of&nbsp;managing your life, time and achievements, dispel the myths that achieving prosperity is&nbsp;something from the edge of&nbsp;science fiction, and explain why the laws of&nbsp;success work the same in&nbsp;any era.';

$_['ru']['comingsoon__tracy__text_2'] = 'Присоединяйтесь к&nbsp;Synergy Online Forum&nbsp;&mdash; подключайтесь к&nbsp;трансляции!';
$_['en']['comingsoon__tracy__text_2'] = 'Join Synergy Online Forum&nbsp;&mdash; connect to&nbsp;the broadcast!';

$_['ru']['platform__tracy__title'] = 'Платформа';
$_['en']['platform__tracy__title'] = 'PLATFORM';

$_['ru']['platform__tracy__text'] = 'Мастер-класс будет проходить на&nbsp;платформе Synergy.Online, которая создана для того, чтобы аккумулировать самые актуальные знания и&nbsp;сервисы для предпринимателей. Получайте образование в&nbsp;онлайн-формате, используйте современные IT-решения, развивайтесь и&nbsp;развивайте свой бизнес.';
$_['en']['platform__tracy__text'] = 'The live discussion will be&nbsp;held on&nbsp;the Synergy.Online platform, which is&nbsp;designed to&nbsp;accumulate the most up-to-date knowledge and services for entrepreneurs. Get an&nbsp;education in&nbsp;an&nbsp;online format, use modern&nbsp;IT solutions, develop yourself and your business.';

$_['ru']['platform__tracy__block_text_1'] = 'ЕЖЕНЕДЕЛЬНЫЕ <br>ОНЛАЙН-ФОРУМЫ С ВЕДУЩИМИ <br>МИРОВЫМИ СПИКЕРАМИ';
$_['en']['platform__tracy__block_text_1'] = 'WEEKLY <br>ONLINE FORUMS WITH <br> THE WORLD\'S BEST SPEAKERS';

$_['ru']['platform__tracy__block_text_2'] = 'ОНЛАЙН-ПРАКТИКУМЫ <br>И ВЕБИНАРЫ';
$_['en']['platform__tracy__block_text_2'] = 'ONLINE WORKSHOPS <br>AND WEBINARS';

$_['ru']['platform__tracy__block_text_3'] = 'БАЗА ЗНАНИЙ <br>С ЛУЧШИМИ ВИДЕО <br>С СОБЫТИЙ &laquo;СИНЕРГИИ&raquo;';
$_['en']['platform__tracy__block_text_3'] = 'KNOWLEDGE BASE <br>WITH BEST VIDEOS <br>FROM SYNERGY EVENTS';

$_['ru']['platform__tracy__block_text_4'] = 'ЦИФРОВЫЕ СЕРВИСЫ <br>ДЛЯ БИЗНЕСА';
$_['en']['platform__tracy__block_text_4'] = 'DIGITAL SERVICES <br>FOR BUSINESS';

$_['ru']['platform__tracy__block_text_5'] = 'АНТИКРИЗИСНЫЕ <br>IT-РЕШЕНИЯ';
$_['en']['platform__tracy__block_text_5'] = 'ANTI-CRISIS <br>IT SOLUTIONS';

$_['ru']['platform__tracy__block_text_6'] = 'НОВОСТИ <br>И АНАЛИТИКА';
$_['en']['platform__tracy__block_text_6'] = 'NEWS <br>AND ANALYTICS';



/* https://synergyglobal.ru/lp/vujicic/ */
$_['ru']['vujicic-img'] = 'img/@lp/@speaker/header/synergy-online.svg';
$_['en']['vujicic-img'] = 'img/@lp/@speaker/header/synergy-online-en.png';

$_['ru']['about__vujicic_title'] = 'Кто такой Ник Вуйчич';
$_['en']['about__vujicic_title'] = 'Who is Nick Vujicic';
$_['ru']['about__vujicic_text'] = 'Мотивационный спикер, писатель, благотворитель, предприниматель, общественный деятель. Из-за синдрома тетраамелии родился без рук и&nbsp;ног. Смог найти свое место в&nbsp;жизни, добиться успеха, помочь миллионам людей, завести семью и&nbsp;стать счастливым человеком.';
$_['en']['about__vujicic_text'] = 'Motivational speaker, writer, philanthropist, entrepreneur, public figure. Due to tetraamelia syndrome, he was born without arms and legs. He was able to find his place in life, achieve success, help millions of people, acquire a family and become a happy person.';

$_['ru']['main__title'] = 'ОНЛАЙН МАСТЕР-КЛАСС';
$_['en']['main__title'] = 'ONLINE MASTER CLASS';

$_['ru']['header_1-vujicic'] = 'ТЕМЫ МАСТЕР-КЛАССА';
$_['en']['header_1-vujicic'] = 'TOPICS';
$_['ru']['header_2-vujicic'] = 'О СПИКЕРЕ';
$_['en']['header_2-vujicic'] = 'SPEAKER';
$_['ru']['header_3-vujicic'] = 'О ПЛАТФОРМЕ';
$_['en']['header_3-vujicic'] = 'PLATFORM';
$_['ru']['header_4-vujicic'] = 'ОРГАНИЗАТОР';
$_['en']['header_4-vujicic'] = 'PRODUCER';
$_['ru']['header_5-vujicic'] = 'ВОПРОСЫ И ОТВЕТЫ';
$_['en']['header_5-vujicic'] = 'FAQ';

$_['ru']['about__vujicic_info_1'] = 'Писатель';
$_['en']['about__vujicic_info_1'] = 'Writer';
$_['ru']['about__vujicic_info_text_1'] = 'Автор 5 мировых бестселлеров о личной силе, преодолении трудностей, любви к себе и обретении счастья';
$_['en']['about__vujicic_info_text_1'] = "Author of 5 of the worlds best-selling books on personal power, overcoming difficulties, loving yourself and finding happiness";
$_['ru']['about__vujicic_info_2'] = 'Оратор';
$_['en']['about__vujicic_info_2'] = 'Speaker';
$_['ru']['about__vujicic_info_text_2'] = 'Международный спикер, за спиной у которого более 250 публичных выступлений в 63 странах мира';
$_['en']['about__vujicic_info_text_2'] = 'International speaker with more than 250 public speeches in 63 countries';
$_['ru']['about__vujicic_info_3'] = 'Филантроп';
$_['en']['about__vujicic_info_3'] = 'Philanthropist';
$_['ru']['about__vujicic_info_text_3'] = 'Основатель международного благотворительного фонда «Жизнь без конечностей»';
$_['en']['about__vujicic_info_text_3'] = 'Founder of the international charity Foundation "Life Without Limbs"';
$_['ru']['about__vujicic_info_4'] = 'Лидер мнений';
$_['en']['about__vujicic_info_4'] = 'Opinion leader';
$_['ru']['about__vujicic_info_text_4'] = 'Вдохновитель миллионов человек по всему миру';
$_['en']['about__vujicic_info_text_4'] = 'Mastermind of millions of people around the world';

$_['ru']['themes__title-1-vujicic'] = 'Обратить боль в веру<br>Почувствовать внутреннюю мощь';
$_['en']['themes__title-1-vujicic'] = 'Turn your pain into faith<br>Feel your inner power';
$_['ru']['themes__title-2-vujicic'] = 'Стать счастливым';
$_['en']['themes__title-2-vujicic'] = 'Become happy';
$_['ru']['themes__title-3-vujicic'] = 'Расширьте границы возможного';
$_['en']['themes__title-3-vujicic'] = 'Expand the boundaries of the possible';
$_['ru']['themes__title-4-vujicic'] = 'Ник Вуйчич, мотивационный оратор и автор бестселлеров «Жизнь без границ», «Неудержимый» и «Безграничность», раскроет секреты управления потенциалом и личной силой.';
$_['en']['themes__title-4-vujicic'] = 'Nick Vujicic, a motivational speaker and author of the best-selling books "Life Without Limits", "Unstoppable" and "Infinity", will reveal the secrets of managing potential and personal power.';

$_['ru']['result__title-vujicic'] = 'Чего вы добьетесь<br>на мастер-классе Ника Вуйчича';
$_['en']['result__title-vujicic'] = 'At the Nick Vujicic<br>master class you will';
$_['ru']['result__item_1-vujicic'] = 'Осмыслите, отпустите и простите себе ошибки прошлого';
$_['en']['result__item_1-vujicic'] = 'Understand, let go, and forgive yourself for the mistakes of the past';
$_['ru']['result__item_2-vujicic'] = 'Увидите в собственных травмах важные жизненные уроки';
$_['en']['result__item_2-vujicic'] = 'Look at important life lessons in your own injuries';
$_['ru']['result__item_3-vujicic'] = 'Обнаружите и осознаете свои ограничивающие установки';
$_['en']['result__item_3-vujicic'] = 'Discover and become aware of your limiting attitudes';
$_['ru']['result__item_4-vujicic'] = 'Избавитесь от необоснованных страхов и сомнений';
$_['en']['result__item_4-vujicic'] = 'Get rid of unfounded fears and doubts';
$_['ru']['result__item_5-vujicic'] = 'Представите себе будущее, в котором вы хотели бы быть';
$_['en']['result__item_5-vujicic'] = 'Imagine the future you would like to be in';
$_['ru']['result__item_6-vujicic'] = 'Представите себе будущее, в котором вы хотели бы быть';
$_['en']['result__item_6-vujicic'] = 'Imagine the future you would like to be in';

$_['ru']['rules__title-vujicic'] = 'Правила жизни Ника Вуйчича';
$_['en']['rules__title-vujicic'] = 'Rules of life by Nick Vujicic';
$_['ru']['rules-card_1-vujicic'] = 'Моя миссия – это помочь людям найти свой путь в жизни.';
$_['en']['rules-card_1-vujicic'] = 'My mission is to help people find their path in life.';
$_['ru']['rules-card_2-vujicic'] = 'Каждый из нас – подарок, который еще предстоит открыть';
$_['en']['rules-card_2-vujicic'] = 'Each of us is a gift that has yet to be opened';
$_['ru']['rules-card_3-vujicic'] = 'Мы должны любить друг другу, прощать людей, прощать даже себя, когда мы сделали что-то неправильно.';
$_['en']['rules-card_3-vujicic'] = 'We must love each other, forgive people, and even forgive ourselves when we have done something wrong.';
$_['ru']['rules-card_4-vujicic'] = 'Жизнь может быть хорошей, если мы выбираем это.';
$_['en']['rules-card_4-vujicic'] = 'Life can be good if we choose it.';
$_['ru']['rules-card_5-vujicic'] = 'Одна из величайших радостей жизни – стать частью чего-то большего, чем твоя собственная жизнь и личный опыт.';
$_['en']['rules-card_5-vujicic'] = 'One of the greatest joys of life is to be a part of something bigger than your own life and personal experience.';


/* https://synergyglobal.ru/lp/version-taleb/ */
$_['ru']['email__taleb'] = '';
$_['en']['email__taleb'] = 'onlineforum@synergyglobal.com';
$_['es']['email__taleb'] = 'onlineforum@synergyglobal.com';
$_['pt']['email__taleb'] = 'onlineforum@synergyglobal.com';

$_['ru']['logo__taleb'] = '<img src="img/@lp/@version-taleb/header/synergy-online.svg" alt="">';
$_['en']['logo__taleb'] = '<img src="img/@lp/@version-taleb/header/synergy-online.svg" alt="">';
$_['es']['logo__taleb'] = '<img src="img/@lp/@version-taleb/header/synergy-online.svg" alt="">';
$_['pt']['logo__taleb'] = '<img src="img/@lp/@version-taleb/header/synergy-online.svg" alt="">';

$_['ru']['main__taleb_name'] = 'Нассим<br>Николас<br>Талеб';
$_['en']['main__taleb_name'] = 'Nassim<br>Nicholas<br>Taleb';
$_['es']['main__taleb_name'] = 'Nassim<br>Nicholas<br>Taleb';
$_['pt']['main__taleb_name'] = 'Nassim<br>Nicholas<br>Taleb';
$_['tr']['main__taleb_name'] = 'Nassim<br>Nicholas<br>Taleb';

$_['ru']['main__taleb_date'] = '';
$_['en']['main__taleb_date'] = 'JULY 18, 20:00';
$_['es']['main__taleb_date'] = 'Julio&nbsp;18, 20:00';
$_['pt']['main__taleb_date'] = '18&nbsp;de julho, 20:00h';
$_['tr']['main__taleb_date'] = '18&nbsp;Temmuz&nbsp;20:00';

$_['ru']['main__taleb_banner'] = 'Онлайн мастер-класс';
$_['en']['main__taleb_banner'] = 'Live discussion';
$_['es']['main__taleb_banner'] = 'Taller en&nbsp;l&iacute;nea';
$_['pt']['main__taleb_banner'] = 'Live discussion';
$_['tr']['main__taleb_banner'] = '&Ccedil;EVRİMİ&Ccedil;İ TARTIŞMA';

$_['ru']['main__taleb_subtitle'] = '<span class="color-red">Антихрупкость:</span><br> управлять случайностью, <br> не рискуя шкурой. Погружение <br>в разум Нассима Николаса ТАЛЕБА.';
$_['en']['main__taleb_subtitle'] = 'Author of&nbsp;the best-selling books <br>&laquo;The Black Swan&raquo; and &laquo;Antifragile&raquo;, <br>an&nbsp;expert in&nbsp;the study of&nbsp;uncertainty, <br>randomness, and unpredictability.';
$_['es']['main__taleb_subtitle'] = '<span class="color-red">Antifragilidad:</span><br> gestionar la&nbsp;aleatoriedad <br> sin correr riesgos <br> Inmersi&oacute;n en&nbsp;el&nbsp;mundo <br> de&nbsp;Nassim Nicholas Taleb <br> en&nbsp;Synergy Online Forum.';
$_['pt']['main__taleb_subtitle'] = '<span class="color-red">Anti-Fragilidade:</span><br> controlar o&nbsp;acaso <br> sem arriscar a&nbsp;pr&oacute;pria pele. <br> Mergulho na&nbsp;mente <br> do&nbsp;Nassim Nicholas Taleb<br> no&nbsp;Synergy Online Forum.';
$_['tr']['main__taleb_subtitle'] = '<span class="color-red">Antikırılganlık:</span><br> taşın altına elinizi koymadan <br>olayı y&ouml;netin. Synergy Online Forum <br>da&nbsp;Nassim Nicholas <br>ın&nbsp;zihnine dalın';

$_['ru']['main__taleb_button'] = 'Зарегистрироваться';
$_['en']['main__taleb_button'] = 'SIGN UP';
$_['es']['main__taleb_button'] = 'Regístrate';
$_['pt']['main__taleb_button'] = 'Inscrever-se';
$_['tr']['main__taleb_button'] = 'Kayıt ol';

$_['ru']['main__taleb_button_2'] = 'Оплатить участие';
$_['en']['main__taleb_button_2'] = 'Pay for participation';

$_['ru']['about__taleb_title'] = 'На&nbsp;платформе <br> Synergy.Online выступит <br>Нассим Николас Талеб, <br>которого называют одним <br>из&nbsp;наиболее влиятельных <br>мыслителей современности.';
$_['en']['about__taleb_title'] = 'Nassim Nicholas Taleb is&nbsp;one of&nbsp;the most influential thinkers of&nbsp;our time&nbsp;&mdash; he&nbsp;will speak live at&nbsp;Synergy Online Forum on&nbsp;July&nbsp;18.';
$_['es']['about__taleb_title'] = 'El&nbsp;18&nbsp;de julio, Nassim Nicholas Taleb, quien es&nbsp;nombrado uno de&nbsp;los pensadores m&aacute;s influyentes de&nbsp;los tiempos modernos, hablar&aacute; en&nbsp;Synergy Online Forum.';
$_['pt']['about__taleb_title'] = '18&nbsp;DE JULHO, <br> NO&nbsp;SYNERGY ONLINE FORUM VAI SE&nbsp;APRESENTAR <br> NASSIM&nbsp;NICHOLAS TALEB, <br> CHAMADO UM <br> DOS PENSADORES <br> MAIS INFLUENCIADORES DA&nbsp;MODERNIDADE.';
$_['tr']['about__taleb_title'] = '18 TEMMUZ DA SYNERGY <br> ONLİNE FORUM DA KONUŞACAK <br> OLAN NASSİM NİCHOLAS TALEB, <br> MODERN ZAMANLARIN EN ETKİLİ <br>DÜŞÜNÜRLERİNDEN BİRİ OLARAK ADLANDIRILIYOR.';

$_['ru']['about__taleb_text'] = 'Он&nbsp;проведет собственный мастер-класс, посвященный новым вызовам, с&nbsp;которыми нам предстоит столкнуться, расскажет о&nbsp;качествах, которые нужно приобрести уже сейчас, научит, как выстоять при любой конъюнктуре и&nbsp;расстаться со&nbsp;страхом за&nbsp;собственную шкуру&nbsp;&mdash; ведь с&nbsp;ней все в&nbsp;порядке только у&nbsp;тех, кто смело вступает в&nbsp;игру.';
$_['en']['about__taleb_text'] = 'He&nbsp;will explore some the challenges that we&nbsp;face today and will outline some of&nbsp;the qualities we&nbsp;need to&nbsp;think in&nbsp;a&nbsp;more &lsquo;antifragile&rsquo; way. If&nbsp;we&nbsp;can gain this perspective, the difficulties we&nbsp;face now will enable&nbsp;us how to&nbsp;become more resistant to&nbsp;similar setbacks in&nbsp;the future.';
$_['es']['about__taleb_text'] = '&Eacute;l&nbsp;llevar&aacute; a&nbsp;cabo su&nbsp;propia clase maestra dedicada a&nbsp;los nuevos desaf&iacute;os que enfrentaremos, hablar&aacute; sobre las cualidades que deben adquirirse ahora, ense&ntilde;ar&aacute; c&oacute;mo resistir cualquier situaci&oacute;n y&nbsp;romper con el&nbsp;miedo por su&nbsp;vida, porque solo a&nbsp;aquellos que entran audazmente en&nbsp;el&nbsp;juego les va&nbsp;realmente bien.';
$_['pt']['about__taleb_text'] = 'ELE VAI FAZER O&nbsp;PR&Oacute;PRIO MASTER CLASS DEDICADO A&nbsp;NOVOS DESAFIOS COM QUE TEREMOS DE&nbsp;ENFRENTAR, VAI FALAR SOBRE AS&nbsp;QUALIDADES QUE EST&Atilde;O NECESS&Aacute;RIAS NO&nbsp;MOMENTO, VAI ENSINAR COMO SOBREVIVER EM&nbsp;QUALQUER SITUA&Ccedil;&Atilde;O E&nbsp;ULTRAPASSAR O&nbsp;MEDO PELA PR&Oacute;PRIA PELE&nbsp;&mdash; PORQUE ELA EST&Aacute; BEM APENAS &Agrave;QUELES QUE CORAJOSAMENTE ENTRAM EM&nbsp;JOGO.';
$_['tr']['about__taleb_text'] = 'O, YÜZLEŞMEMİZ GEREKEN YENİ ZORLUKLARA ADANMIŞ KENDİ SINIFINI YÖNETECEK, ŞİMDİ SATIN ALMANIZ GEREKEN NİTELİKLER HAKKINDA KONUŞACAK, HERHANGİ BİR KONJONKTÜRDE NASIL DURULACAĞINI VE KENDİNİZİN KORKUYLA NASIL MÜCADELE EDECEĞİNİZİ ÖĞRETECEK, SONUÇTA, SADECE CESURCA OYUNA GİRENLER İÇİN İYİ OLACAK.';


$_['ru']['registration__taleb_title'] = 'СМОТРИТЕ ЗАПИСЬ МАСТЕР-КЛАССА БЕСПЛАТНО, ОТПРАВИВ ЗАЯВКУ';
$_['en']['registration__taleb_title'] = 'REGISTER';
$_['es']['registration__taleb_title'] = 'REG&Iacute;STRATE EN&nbsp;TALLER EN&nbsp;L&Iacute;NEA';
$_['pt']['registration__taleb_title'] = 'INSCREVER-SE NO <br> MASTER CLASS';
$_['tr']['registration__taleb_title'] = 'ONLINE MASTER SINIFI <br> İÇİN KAYIT';

$_['ru']['registration__taleb_button'] = 'ОТПРАВИТЬ ЗАЯВКУ';
$_['en']['registration__taleb_button'] = 'REGISTRATION';
$_['es']['registration__taleb_button'] = 'Regístrate';
$_['pt']['registration__taleb_button'] = 'Registro';
$_['tr']['registration__taleb_button'] = 'Kayıt';

$_['ru']['beginning__taleb__title'] = 'КАК ВСЕ НАЧАЛОСЬ';
$_['en']['beginning__taleb__title'] = 'HOW IT&nbsp;ALL&nbsp;STARTED?';
$_['es']['beginning__taleb__title'] = 'C&Oacute;MO COMENZ&Oacute; TODO';
$_['pt']['beginning__taleb__title'] = 'CCOMO TUDO COME&Ccedil;OU';
$_['tr']['beginning__taleb__title'] = 'NASIL BAŞLADI';

$_['ru']['beginning__taleb__text_1'] = 'Быть независимым и&nbsp;самодостаточным&nbsp;&mdash; это скорее навык, чем личное свойство ученого. Нассим Николас Талеб родился в&nbsp;Ливане в&nbsp;1960 году в&nbsp;уважаемой семье: его родители были крупными медиками и&nbsp;учеными, а&nbsp;предки в&nbsp;разные годы занимали важные посты в&nbsp;ливанском госаппарате, возглавляли министерства и&nbsp;даже правительство.';
$_['en']['beginning__taleb__text_1'] = 'Being independent and self-sufficient is&nbsp;rather a&nbsp;skill than a&nbsp;personal characteristic of&nbsp;a&nbsp;scientist. Nassim Nicholas Taleb was born in&nbsp;Lebanon in&nbsp;1960 in&nbsp;a&nbsp;respected family: his parents were prominent doctors and scientists, and his ancestors in&nbsp;different years held important positions in&nbsp;the Lebanese state apparatus, headed ministries and even the Government.';
$_['es']['beginning__taleb__text_1'] = 'Ser independiente y&nbsp;autosuficiente es&nbsp;m&aacute;s una habilidad que una caracter&iacute;stica personal de&nbsp;un&nbsp;cient&iacute;fico. Nassim Nicholas Taleb naci&oacute; en&nbsp;L&iacute;bano en&nbsp;1960&nbsp;en una familia respetada: sus padres eran grandes m&eacute;dicos y&nbsp;cient&iacute;ficos, y&nbsp;sus antepasados en&nbsp;diferentes a&ntilde;os ocuparon cargos importantes en&nbsp;el&nbsp;aparato estatal liban&eacute;s, dirigieron ministerios e&nbsp;incluso el&nbsp;Gobierno.';
$_['pt']['beginning__taleb__text_1'] = 'Ser independente e&nbsp;auto-suficiente &eacute;&nbsp;mais uma habilidade do&nbsp;que uma propriedade pessoal de&nbsp;um&nbsp;cientista. Taleb nasceu no&nbsp;L&iacute;bano em&nbsp;1960&nbsp;em uma fam&iacute;lia respeitada: seus pais eram grandes m&eacute;dicos e&nbsp;cientistas, e&nbsp;seus ancestrais em&nbsp;diferentes anos ocupavam cargos importantes no&nbsp;aparato estatal liban&ecirc;s, chefiavam minist&eacute;rios e&nbsp;at&eacute; o&nbsp;governo.';
$_['tr']['beginning__taleb__text_1'] = 'Bağımsız ve kendi kendine yeterli olmak, bir bilim insanının kişisel mülkünden daha fazla bir beceridir. Nassim Nicholas Taleb, 1960 yılında Lübnan da saygın bir ailede doğdu: ebeveynleri büyük doktorlar ve bilim adamlarıydı ve farklı yıllardaki ataları Lübnan devlet yönetiminde, bakanlıklarda ve hatta Hükümet te önemli görevlerde bulundu.';

$_['ru']['beginning__taleb__text_2'] = 'На&nbsp;воспитание, образование и&nbsp;личное развитие Нассима Николаса Талеба сильно повлиял его отец: по&nbsp;словам писателя, &laquo;видя, насколько системно он&nbsp;работал с&nbsp;любой поступающей информацией, я&nbsp;понял, чего это стоит и&nbsp;что школьная оценка&nbsp;&mdash; очень слабый индикатор знаний&raquo;.';
$_['en']['beginning__taleb__text_2'] = 'Taleb&rsquo;s upbringing, education and personal development were strongly influenced by&nbsp;his father: according to&nbsp;him, &laquo;seeing how systematically he&nbsp;worked with any incoming information, I&nbsp;realized what it&nbsp;costs, and that the school assessment is&nbsp;a&nbsp;very weak indicator of&nbsp;knowledge.&raquo;';
$_['es']['beginning__taleb__text_2'] = 'La&nbsp;crianza, la&nbsp;educaci&oacute;n y&nbsp;el&nbsp;desarrollo personal de&nbsp;Nassim Nicholas Taleb fueron fuertemente influenciados por su&nbsp;padre. Seg&uacute;n el&nbsp;escritor, &laquo;al&nbsp;ver cu&aacute;n sist&eacute;micamente trabajaba con cualquier informaci&oacute;n entrante, me&nbsp;di&nbsp;cuenta de&nbsp;lo&nbsp;que le&nbsp;val&iacute;a y&nbsp;de&nbsp;que la&nbsp;nota escolar es&nbsp;un&nbsp;indicador muy d&eacute;bil de&nbsp;los conocimientos&raquo;.';
$_['pt']['beginning__taleb__text_2'] = 'A&nbsp;cria&ccedil;&atilde;o, educa&ccedil;&atilde;o e&nbsp;desenvolvimento pessoal de&nbsp;Nassim Nicholas Taleb foram grandemente influenciados por seu pai: segundo o&nbsp;escritor, &laquo;vendo como sistematicamente ele trabalhava com qualquer informa&ccedil;&atilde;o recebida, percebi o&nbsp;que isso custa e&nbsp;que a&nbsp;avalia&ccedil;&atilde;o escolar &eacute;&nbsp;um&nbsp;indicador muito fraco de&nbsp;conhecimento&raquo;.';
$_['tr']['beginning__taleb__text_2'] = 'Nassim Nicholas Taleb in yetiştirilmesinde, eğitiminde ve kişisel gelişiminde, babası büyük ölçüde etkili oldu: "bunun ne kadar değerli olduğunu ve okul notunun çok zayıf bir bilgi göstergesi olduğunu anladım".';


$_['ru']['beginning__taleb__text_3'] = 'Он не&nbsp;раз рассказывал и&nbsp;о&nbsp;том, что его семья обладала обширной библиотекой&nbsp;&mdash; она была достоянием и&nbsp;гордостью семьи. Ребенком он&nbsp;проводил до&nbsp;60&nbsp;часов в&nbsp;неделю за&nbsp;чтением интересующей литературы&nbsp;&mdash; например, греческих и&nbsp;римских классиков, которых экономист до&nbsp;сих пор перечитывает и&nbsp;цитирует целыми страницами.';
$_['en']['beginning__taleb__text_3'] = 'Taleb also tells that his family had an&nbsp;extensive library&nbsp;&mdash; it&nbsp;was the property and pride of&nbsp;the family. As&nbsp;a&nbsp;child, he&nbsp;spent up&nbsp;to&nbsp;60&nbsp;hours a&nbsp;week reading literature, including the Greek and Roman classics, which he&nbsp;still reads and can quotes.';
$_['es']['beginning__taleb__text_3'] = 'Taleb relat&oacute; en&nbsp;m&aacute;s de&nbsp;una ocasi&oacute;n que su&nbsp;familia pose&iacute;a una extensa biblioteca: era el&nbsp;patrimonio y&nbsp;el&nbsp;orgullo de&nbsp;la&nbsp;familia. Cuando era ni&ntilde;o, pasaba hasta 60&nbsp;horas a&nbsp;la&nbsp;semana leyendo literatura de&nbsp;inter&eacute;s, como los cl&aacute;sicos griegos y&nbsp;romanos, que el&nbsp;economista todav&iacute;a vuelve a&nbsp;leer y&nbsp;cita en&nbsp;p&aacute;ginas enteras.';
$_['pt']['beginning__taleb__text_3'] = 'Taleb muitas vezes disse que sua fam&iacute;lia tinha uma extensa biblioteca que era propriedade e&nbsp;orgulho da&nbsp;fam&iacute;lia. Quando crian&ccedil;a, ele passava 60&nbsp;horas por semana lendo literatura de&nbsp;interesse, por exemplo, cl&aacute;ssicos gregos e&nbsp;romanos, que o&nbsp;economista ainda rel&ecirc; e&nbsp;cita em&nbsp;p&aacute;ginas inteiras.';
$_['tr']['beginning__taleb__text_3'] = 'Taleb, ailesinin geniş bir kütüphaneye sahip olduğunu defalarca söyledi, ailenin serveti ve gururu idi. Bir çocuk olarak, örneğin, ekonomistin hala tüm sayfaları yeniden okuduğu ve aktardığı Yunan ve Roma klasikleri gibi ilgi literatürünü okumak için haftada 60 saate kadar zaman harcadı.';


$_['ru']['beginning__taleb__blockquote_description'] = 'По&nbsp;словам писателя, сравнивая учебу в&nbsp;школе и&nbsp;тот поток новой информации, к&nbsp;которой он&nbsp;получал доступ дома, он&nbsp;понял, что';
$_['en']['beginning__taleb__blockquote_description'] = 'According to&nbsp;Taleb, comparing his studies at&nbsp;school and the flow of&nbsp;new information that he&nbsp;had access to&nbsp;at&nbsp;home, he&nbsp;realized that';
$_['es']['beginning__taleb__blockquote_description'] = 'Seg&uacute;n el&nbsp;escritor, al&nbsp;comparar los estudios en&nbsp;la&nbsp;escuela y&nbsp;el&nbsp;flujo de&nbsp;nueva informaci&oacute;n a&nbsp;la&nbsp;que ten&iacute;a acceso en&nbsp;casa, se&nbsp;dio cuenta de&nbsp;que';
$_['pt']['beginning__taleb__blockquote_description'] = 'DE&nbsp;ACORDO COM O&nbsp;ESCRITOR, COMPARANDO ESTUDOS NA&nbsp;ESCOLA E&nbsp;ESTE FLUXO DE&nbsp;NOVAS INFORMA&Ccedil;&Otilde;ES A&nbsp;QUE ELE TINHA ACESSO EM&nbsp;CASA, COMPREENDEU QUE';
$_['tr']['beginning__taleb__blockquote_description'] = 'YAZARA GÖRE, OKULDAKİ ÇALIŞMALARI VE EVDE ERİŞTİĞİ YENİ BİLGİ AKIŞINI KARŞILAŞTIRARAK,';


$_['ru']['beginning__taleb__blockquote_text'] = '&laquo;школа&nbsp;&mdash; место, созданное, чтобы ограничивать мышление и&nbsp;помещать его в&nbsp;тиски устоявшихся мнений и&nbsp;позиций&raquo;.';
$_['en']['beginning__taleb__blockquote_text'] = '&laquo;school is&nbsp;a&nbsp;place created to&nbsp;restrict thinking and put it&nbsp;in&nbsp;the grip of&nbsp;established opinions and positions.&raquo;';
$_['es']['beginning__taleb__blockquote_text'] = '&laquo;la&nbsp;escuelaes un&nbsp;lugar creado para limitar el&nbsp;pensamiento y&nbsp;ponerlo en&nbsp;las garras de&nbsp;opiniones y&nbsp;posiciones establecidas&raquo;.';
$_['pt']['beginning__taleb__blockquote_text'] = '&laquo;Uma escola &eacute;&nbsp;um&nbsp;lugar criado para limitar o&nbsp;pensamento e&nbsp;coloc&aacute;-lo nas garras das opini&otilde;es e&nbsp;posi&ccedil;&otilde;es estabelecidas&raquo;.';
$_['tr']['beginning__taleb__blockquote_text'] = '&laquo;okulun düşünmeyi sınırlamak ve onu yerleşik görüş ve pozisyonların pençesine yerleştirmek için yaratılmış bir yer olduğunu fark etti.&raquo;';


$_['ru']['tabs__taleb_descr_1'] = 'Жан-Поль Сартр&nbsp;&mdash; французский философ, представитель атеистического экзистенциализма, писатель, драматург и&nbsp;эссеист, педагог. Лауреат Нобелевской премии по&nbsp;литературе 1964&nbsp;года, от&nbsp;которой отказался.';
$_['en']['tabs__taleb_descr_1'] = 'JEAN-PAUL SARTRE&nbsp;&mdash; FRENCH PHILOSOPHER, REPRESENTATIVE OF&nbsp;ATHEISTIC&nbsp;EXISTENTIALISM, WRITER, PLAY WRITER AND ESSAYIST, TEACHER. THE LAUREATE OF&nbsp;NOBEL PRIZE IN&nbsp;LITERATURE OF&nbsp;1964, WHICH HE&nbsp;REFUSED.';
$_['es']['tabs__taleb_descr_1'] = 'JEAN-PAUL SARTRE&nbsp;&mdash; UN&nbsp;FIL&Oacute;SOFO FRANC&Eacute;S, REPRESENTANTE DEL EXISTENCIALISMO ATEO, ESCRITOR, DRAMATURGO Y&nbsp;ENSAYISTA, PROFESSOR. GANADOR DEL PREMIO NOBEL SOBRE LA&nbsp;LITERATURA DE&nbsp;1964, QUE NEG&Oacute;';
$_['pt']['tabs__taleb_descr_1'] = 'JEAN-PAUL SARTRE &Eacute;&nbsp;UM&nbsp;FIL&Oacute;SOFO FRANC&Ecirc;S, REPRESENTANTE DO&nbsp;EXISTENCIALISMO ATEU, ESCRITOR, DRAMATURGO E&nbsp;ENSA&Iacute;STA, EDUCADOR. ELE FOI PREMIADO DO&nbsp;PR&Ecirc;MIO DE&nbsp;NOBEL DE&nbsp;LITERATURA DE&nbsp;1964&nbsp;MAS O&nbsp;RECUSOU.';

$_['ru']['tabs__taleb_descr_2'] = 'гражданская война в&nbsp;ливане (1975&ndash;1990)&nbsp;&mdash; вооружённые столкновения между мусульманскими и&nbsp;христианскими общинами Ливана, а&nbsp;также внутри этих общин, осложнённые вмешательством Сирии и&nbsp;израильским вторжением 1982&nbsp;года.';
$_['pt']['tabs__taleb_descr_2'] = 'Guerra Civil do&nbsp;L&iacute;bano (1975-1990)&nbsp;&mdash; confrontos armados entre comunidades mu&ccedil;ulmanas e&nbsp;crist&atilde;s no&nbsp;L&iacute;bano, bem como dentro de&nbsp;comunidades, complicados pela interven&ccedil;&atilde;o s&iacute;ria e&nbsp;pela invas&atilde;o israelense de&nbsp;1982.';

$_['ru']['tabs__taleb_text'] = 'Отсюда открытое презрение Талеба к&nbsp;любым институциям и&nbsp;теме принадлежности: цитируя <span class="text-label tab-btn" data-author="jan-pol-sartr"><span class="d-sm-block d-none">Жана-Поля Сартра</span> <a href="#tabs-content1" class="d-block d-sm-none" data-fancybox>Жана-Поля Сартра</a></span>, автор &laquo;Черного лебедя&raquo; подтверждает свою точку зрения, что &laquo;никто не&nbsp;может быть свободным в&nbsp;рамках системы&raquo;. И&nbsp;кратко добавляет, что водителю автобуса живется в&nbsp;разы свободнее, чем научному сотруднику.<br><br> Его жизнь могла быть размеренной и&nbsp;предсказуемой, если&nbsp;бы не&nbsp;<span class="text-label tab-btn" data-author="civil-war"><span class="d-sm-block d-none">Гражданская война в&nbsp;Ливане</span><a href="#tabs-content2" class="d-block d-sm-none" data-fancybox>Гражданская война в&nbsp;Ливане</a></span> 1975-1990&nbsp;гг. Этот период жизни Талеб принципиально не&nbsp;обсуждает с&nbsp;прессой и&nbsp;не&nbsp;рассказывает о&nbsp;событиях того времени в&nbsp;личных медиа&nbsp;&mdash; но&nbsp;открыто заявляет, что во&nbsp;время конфликта покинул страну и&nbsp;вернулся несколько лет спустя, а&nbsp;также&nbsp;то, что тот период бесповоротно изменил его жизнь.';
$_['en']['tabs__taleb_text'] = 'Hence Taleb&rsquo;s ongoing disdain for any institutions and the subject of&nbsp;belonging: quoting <span class="text-label tab-btn" data-author="jan-pol-sartr"><span class="d-sm-block d-none">Jean-Paul Sartre</span><a href="#tabs-content1" class="d-block d-sm-none" data-fancybox>Jean-Paul Sartre</a></span>, he&nbsp;believes &laquo;no&nbsp;one can be&nbsp;free within the system&raquo;. And adds, characteristically, that a&nbsp;bus driver lives, at&nbsp;times, freer than a&nbsp;scientist.<br><br> His life could have been predictable, but the <span class="text-label tab-btn" data-author="civil-war"><span class="d-sm-block d-none">Civil War in&nbsp;Lebanon</span><a href="#tabs-content2" class="d-block d-sm-none" data-fancybox>Civil War in&nbsp;Lebanon</a></span> 1975-1990 changed everything. Taleb does not discuss this period of&nbsp;his life and does not talk about the events of&nbsp;that time, but openly states that he&nbsp;left the country during the conflict, his path in&nbsp;the World had been changed irrevocably.';
$_['es']['tabs__taleb_text'] = 'De&nbsp;ah&iacute; el&nbsp;desprecio abierto de&nbsp;Taleb por cualquier Instituci&oacute;n y&nbsp;tema de&nbsp;pertenencia: citando a&nbsp;Jean-Paul Sartre, el&nbsp;autor de&nbsp;&laquo;El&nbsp;Cisne Negro&raquo; reafirma su&nbsp;punto de&nbsp;vista de&nbsp;que &laquo;nadie puede ser libre dentro de&nbsp;un&nbsp;sistema&raquo;. Y&nbsp;agrega brevemente que el&nbsp;conductor del autob&uacute;s vive muchas veces m&aacute;s libre que el&nbsp;cient&iacute;fico. <br><br>Su&nbsp;vida podr&iacute;a haber sido medida y&nbsp;previsible si&nbsp;no&nbsp;hubiera ocurrido la&nbsp;guerra Civil Libanesa de&nbsp;1975-1990. Este per&iacute;odo de&nbsp;la&nbsp;vida Taleb no&nbsp;discute fundamentalmente con la&nbsp;prensa ni&nbsp;habla sobre los eventos de&nbsp;la&nbsp;&eacute;poca en&nbsp;los medios personales, pero declara abiertamente que abandon&oacute; el&nbsp;pa&iacute;s durante el&nbsp;conflicto y&nbsp;regres&oacute; unos a&ntilde;os m&aacute;s tarde, y&nbsp;que ese per&iacute;odo cambi&oacute; irrevocablemente su&nbsp;vida.';
$_['pt']['tabs__taleb_text'] = 'Da&iacute; o&nbsp;desprezo aberto de&nbsp;Taleb por quaisquer institui&ccedil;&otilde;es e&nbsp;t&oacute;picos de&nbsp;pertencimento: citando <span class="text-label tab-btn" data-author="jan-pol-sartr"><span class="d-sm-block d-none">Jean-Paul Sartre</span><a href="#tabs-content1" class="d-block d-sm-none" data-fancybox>Jean-Paul Sartre</a></span>, o&nbsp;autor do&nbsp;&laquo;Cisne Negro&raquo; confirma seu ponto de&nbsp;vista de&nbsp;que &laquo;ningu&eacute;m pode ser livre dentro do&nbsp;sistema&raquo;. E&nbsp;ele acrescenta brevemente que o&nbsp;motorista do&nbsp;&ocirc;nibus vive muitas vezes mais livremente do&nbsp;que o&nbsp;assistente de&nbsp;pesquisa.<br><br>Sua vida poderia ser medida e&nbsp;previs&iacute;vel, se&nbsp;n&atilde;o fosse pela&nbsp;<span class="text-label tab-btn" data-author="civil-war"><span class="d-sm-block d-none">Guerra Civil do&nbsp;L&iacute;bano durante</span><a href="#tabs-content2" class="d-block d-sm-none" data-fancybox>Guerra Civil do&nbsp;L&iacute;bano durante</a></span> 1975-1990. Taleb n&atilde;o discute esse per&iacute;odo de&nbsp;sua vida fundamentalmente com a&nbsp;imprensa e&nbsp;n&atilde;o fala sobre os&nbsp;eventos da&nbsp;&eacute;poca nas m&iacute;dias pessoais mas afirma abertamente que ele deixou o&nbsp;pa&iacute;s durante o&nbsp;conflito e&nbsp;voltou v&aacute;rios anos depois, bem como o&nbsp;fato de&nbsp;que esse per&iacute;odo mudou irreversivelmente sua vida.';
$_['tr']['tabs__taleb_text'] = 'Bu nedenle, Taleb in herhangi bir kurum ve aidiyet konusu için bir şeyi açık bir şekilde küçümsemesi: alıntı "Siyah Kuğu"nun yazarı <span class="text-label tab-btn" data-author="jan-pol-sartr"><span class="d-sm-block d-none">Jean-Paul Sartre</span><a href="#tabs-content1" class="d-block d-sm-none" data-fancybox>Jean-Paul Sartre</a></span>, "hiç kimse sistemin içinde özgür olamaz" görüşünü doğruladı. Kısaca, otobüs şoförünün araştırma görevlisinden çok daha özgürce yaşadığını da ekliyor.<br><br>1975-1990 Lübnan <span class="text-label tab-btn" data-author="civil-war"><span class="d-sm-block d-none">iç savaşı olmasaydı</span><a href="#tabs-content2" class="d-block d-sm-none" data-fancybox>iç savaşı olmasaydı</a></span>, iç savaşı olmasaydı, hayatı ölçülü ve öngörülebilir olabilirdi. Taleb, hayatının bu dönemini basında tartışmıyor ve o dönemin kişisel medyadaki olayları hakkında konuşmuyor, ancak çatışma sırasında ülkeyi terk ettiğini ve birkaç yıl sonra geri döndüğünü ve o dönemin geri dönülmez bir şekilde hayatını değiştirdiğini açıkça belirtiyor.';

$_['ru']['after__taleb__title'] = 'ЧТО БЫЛО ПОТОМ';
$_['en']['after__taleb__title'] = 'WHAT HAPPENED NEXT?';
$_['es']['after__taleb__title'] = 'LO&nbsp;QUE PAS&Oacute; DESPU&Eacute;S';
$_['pt']['after__taleb__title'] = 'O&nbsp;QUE FOI DEPOIS';
$_['tr']['after__taleb__title'] = 'SONRA NE OLDU';

$_['ru']['after__taleb__text'] = '<p>После обучения в&nbsp;Парижском университете Нассим Николас Талеб начал свою карьеру финансиста и&nbsp;брокера: 20&nbsp;лет эксперт торговал валютами, сырьем, деривативами, занимался арбитражными сделками, консультировал и&nbsp;курировал деятельность в&nbsp;UBS, First Boston, Banque Indosuez, Bankers Trust, BNP Paribas. В&nbsp;1999 году Нассим Николас Талеб с&nbsp;коллегой и&nbsp;партнером Марком Спитцнейгелом основал собственный хедж-фонд Empirica Capital&nbsp;&mdash; там партнеры впервые взяли в&nbsp;работу концепцию &laquo;черных лебедей&raquo;. Стратегия фонда была построена на&nbsp;теории о&nbsp;&laquo;черных лебедях&raquo;&nbsp;&mdash; явлениях, которые не&nbsp;допускались как возможные до&nbsp;тех пор, пока не&nbsp;случались в&nbsp;реальном мире. Свои прогнозы экономисты строили, исходя из&nbsp;прогнозирования невероятного,&nbsp;&mdash; и&nbsp;преуспевали, несмотря на&nbsp;то, что их (и&nbsp;в&nbsp;частности Талеба) считали чудаками.</p>
<p>В&nbsp;2000-х годах Нассим Николас Талеб по&nbsp;большей части уходит из&nbsp;финансового сектора и&nbsp;продолжает заниматься лишь инвестициями, параллельно выступая советником и&nbsp;консультантом хедж-фонда Universa, принадлежавшего его экс-партнеру Марку Спитцнейгелом. Коллеги успешно применяли свою теорию на&nbsp;практике: к&nbsp;2008 году фонду удалось разбогатеть более чем на&nbsp;100%, а&nbsp;сам Нассим Николас Талеб в&nbsp;период между 2007 и&nbsp;2008 годами заработал больше 500 миллионов долларов.</p>';
$_['en']['after__taleb__text'] = '<p>After gaining a&nbsp;PhD&nbsp;at the University of&nbsp;Paris, Nassim Taleb began his career as&nbsp;a&nbsp;trader and for the next 21years of&nbsp;his career, he&nbsp;traded in&nbsp;currencies, raw materials and derivatives. He&nbsp;was also engaged in&nbsp;arbitrage transactions, advised and supervised activities at&nbsp;UBS, First Boston, Banque Indosuez, Bankers Trust and BNP Paribas. In&nbsp;1999, Taleb with colleague, Mark Spitzneigel founded the hedge fund, Empirica Capital, where they first used the concept of&nbsp;&laquo;black swans&raquo;. The fund&rsquo;s strategy was largely based on&nbsp;this theory. They used this approach and succeeded, despite the fact that they were considered as &lsquo;cranks&rsquo; by&nbsp;many in&nbsp;the investment world.</p>
<p>In&nbsp;the 2000s, Nassim Nicholas Taleb moved away gradually from the financial sector and continued to&nbsp;engage only in&nbsp;certain investments, while acting as&nbsp;a&nbsp;scientific adviser to&nbsp;the hedge fund Universa, owned by&nbsp;his ex-partner Mark Spitzneigel. Applying their theory in&nbsp;practice, the fund was and continues to&nbsp;be&nbsp;very successful.</p>';
$_['es']['after__taleb__text'] = '<p>Despu&eacute;s de&nbsp;estudiar en&nbsp;la&nbsp;Universidad de&nbsp;Par&iacute;s, Nassim Taleb comenz&oacute; su&nbsp;carrera como financiero y&nbsp;corredor de&nbsp;bolsa: durante 20&nbsp;a&ntilde;os de&nbsp;carrera, el&nbsp;experto negoci&oacute; divisas, materias primas, derivados, arbitr&oacute; transacciones, asesor&oacute; y&nbsp;supervis&oacute; actividades en&nbsp;UBS, First Boston, Banque Indosuez, Bankers Trust, BNP Paribas.
En&nbsp;1999, Taleb y&nbsp;su&nbsp;colega y&nbsp;socio Mark Spitzneigel fundaron su&nbsp;propio fondo de&nbsp;cobertura Empirica Capital; all&iacute;, los socios adoptaron el&nbsp;concepto de&nbsp;&laquo;cisnes negros&raquo; por primera vez. La&nbsp;estrategia de&nbsp;la&nbsp;fundaci&oacute;n se&nbsp;bas&oacute; en&nbsp;la&nbsp;teor&iacute;a de&nbsp;los cisnes negros, fen&oacute;menos que no&nbsp;se&nbsp;admit&iacute;an como posibles hasta que suced&iacute;an en&nbsp;el&nbsp;mundo real. Los economistas construyeron sus predicciones sobre la&nbsp;base de&nbsp;predecir lo&nbsp;incre&iacute;ble, y&nbsp;tuvieron &eacute;xito, a&nbsp;pesar del hecho de&nbsp;que ellos y&nbsp;Taleb en&nbsp;particular fueron considerados bichos raros.</p>
<p>En&nbsp;la&nbsp;d&eacute;cada de&nbsp;2000, Nassim Nicholas Taleb se&nbsp;retira pr&aacute;cticamente del sector financiero y&nbsp;se&nbsp;dedica s&oacute;lo a&nbsp;inversiones, actuando paralelamente como asesor y&nbsp;asesor del fondo de&nbsp;cobertura Universa, propiedad de&nbsp;su&nbsp;ex&nbsp;socio Mark Spitzneigel. Los colegas con &eacute;xito pusieron su&nbsp;teor&iacute;a en&nbsp;pr&aacute;ctica: en&nbsp;el&nbsp;2008, el&nbsp;fondo logr&oacute; hacerse rico en&nbsp;m&aacute;s del 100%, y&nbsp;el&nbsp;propio Taleb gan&oacute; m&aacute;s de&nbsp;$&nbsp;500 millones entre los a&ntilde;os 2007&nbsp;y 2008.</p>';
$_['pt']['after__taleb__text'] = '<p>Depois de&nbsp;estudar na&nbsp;Universidade de&nbsp;Paris, Nassim Taleb iniciou sua carreira como financiador e&nbsp;corretor: ao&nbsp;longo de&nbsp;20&nbsp;anos de&nbsp;sua carreira, o&nbsp;especialista negociou em&nbsp;moedas, mat&eacute;rias-primas, derivativos, se&nbsp;envolveu em&nbsp;transa&ccedil;&otilde;es de&nbsp;arbitragem, assessorou e&nbsp;supervisionou atividades no&nbsp;UBS, First Boston, Banque Indosuez, Bankers Trust, BNP Paribas. Em&nbsp;1999, Taleb com seu colega e&nbsp;parceiro Mark Spitzneigel fundou seu pr&oacute;prio fundo de&nbsp;hedge Empirica Capital, onde os&nbsp;parceiros adotaram o&nbsp;conceito de&nbsp;&laquo;cisnes negros&raquo; pela primeira vez. A&nbsp;estrat&eacute;gia do&nbsp;fundo foi baseada na&nbsp;teoria dos cisnes negros&nbsp;&mdash; fen&ocirc;menos que n&atilde;o eram permitidos como poss&iacute;veis at&eacute; que acontecessem no&nbsp;mundo real. Os&nbsp;economistas constru&iacute;ram suas previs&otilde;es com base na&nbsp;previs&atilde;o do&nbsp;incr&iacute;vel&nbsp;&mdash; e&nbsp;conseguiram, apesar do&nbsp;fato de&nbsp;que eles, em&nbsp;particular, o&nbsp;Taleb, eram considerados exc&ecirc;ntricos. </p>
<p>Nos anos 2000, Nassim Nicholas Taleb deixou o&nbsp;setor financeiro e&nbsp;continuou a&nbsp;se&nbsp;dedicar apenas a&nbsp;investimentos, enquanto atuava como conselheiro e&nbsp;consultor do&nbsp;fundo de&nbsp;hedge Universa, de&nbsp;propriedade de&nbsp;seu ex-s&oacute;cio Mark Spitzneigel. Os&nbsp;colegas aplicaram com sucesso sua teoria na&nbsp;pr&aacute;tica: em&nbsp;2008, o&nbsp;fundo conseguiu ficar rico em&nbsp;mais de&nbsp;100%, e&nbsp;o&nbsp;Taleb faturou mais de&nbsp;$500 milh&otilde;es entre 2007&nbsp;e 2008.</p>';
$_['tr']['after__taleb__text'] = '<p>Nassim Taleb, Paris Üniversitesi nde okuduktan sonra kariyerine bir finansör ve broker olarak başladı: 20 yıllık kariyeri boyunca, para birimleri, hammaddeler, türevler ticareti yapan bir uzman olarak, tahkim işlemlerinde bulundu, UBS, First Boston, Banque Indosuez, Bankers Trust, BNP Paribas ta danışmanlık ve gözetim faaliyetlerinde bulundu. Taleb 1999 da, meslektaşı ve ortağı Mark Spitzneigel ile birlikte, ortaklarının "siyah kuğu" kavramını ilk kez benimsediği kendi hedge fonu Empirica Capitali kurdu. Fonun stratejisi, siyah kuğular teorisine, gerçek dünyada olana kadar mümkün olduğunca izin verilmeyen olgulara dayanıyordu. Ekonomistler, tahminlerini inanılmaz bir tahmin temelinde inşa ettiler ve özellikle de Taleb in tuhaf olarak kabul edilmesine rağmen başarılı oldular.</p>
<p>Nassim Nicholas Taleb 2000 li yıllarda, çoğunlukla finans sektöründen ayrılıyor ve sadece yatırım yapmaya devam ediyor, paralel olarak eski ortağı Mark Spitzneigele ait olan Universa hedge fonunun danışmanı ve müşaviri olarak hareket ediyor. Meslektaşları teorilerini başarılı bir şekilde uygulamaya koydular: 2008 yılına kadar fon %100 ün üzerinde zenginleşmeyi başardı ve Taleb in kendisi 2007 ve 2008 yılları arasında 500 milyon dolardan fazla para kazandı.</p>';


$_['ru']['after__taleb_blockquote_text'] = '&laquo;Есть три вида самых зловредных наркотиков: героин, карбогидраты и&nbsp;зарплата каждый месяц&raquo;.';
$_['en']['after__taleb_blockquote_text'] = '&laquo;There are three types of&nbsp;the most harmful drugs: heroin, carbohydrates, and paychecks every month&raquo;.';
$_['es']['after__taleb_blockquote_text'] = '&laquo;Hay tres tipos de&nbsp;drogas m&aacute;s maliciosas: la&nbsp;hero&iacute;na, los hidratos de&nbsp;carbono y&nbsp;el&nbsp;salario mensual&raquo;.';
$_['pt']['after__taleb_blockquote_text'] = '&laquo;Existem tr&ecirc;s tipos de&nbsp;drogas mais nocivas: hero&iacute;na, carboidratos e&nbsp;sal&aacute;rios todos os&nbsp;meses&raquo;.';
$_['tr']['after__taleb_blockquote_text'] = '&laquo;En zararlı ilaçların üç türü vardır: eroin, karbonhidratlar ve her ay ödenen maaş&raquo;.';

$_['ru']['whois__taleb_title'] = 'КТО ТАКОЙ НАССИМ НИКОЛАС ТАЛЕБ';
$_['en']['whois__taleb_title'] = 'WHO IS&nbsp;NASSIM&nbsp;NICHOLAS TALEB?';
$_['es']['whois__taleb_title'] = 'QUI&Eacute;N ES&nbsp;NASSIM&nbsp;NICHOLAS TALEB';
$_['pt']['whois__taleb_title'] = 'QUEM &Eacute;&nbsp;NASSIM&nbsp;NICHOLAS TALEB';
$_['tr']['whois__taleb_title'] = 'NASSİM NİCHOLAS TALEB KİMDİR';

$_['ru']['whois__taleb_text_1'] = 'Писатель не&nbsp;стремился к&nbsp;званию интеллектуального лидера XXI&nbsp;века, но&nbsp;оно прочно закрепилось за&nbsp;ним после того, как он&nbsp;предсказал финансовый кризис 2008 года в&nbsp;своей книге &laquo;Черный лебедь: Под знаком непредсказуемости&raquo;.';
$_['en']['whois__taleb_text_1'] = 'Nassim Nicholas Taleb spent 21&nbsp;years as&nbsp;a&nbsp;risk taker (a&nbsp;quantitative trader) before becoming a&nbsp;researcher in&nbsp;philosophical, mathematical and (mostly) practical problems with probability.';
$_['es']['whois__taleb_text_1'] = 'El&nbsp;escritor no&nbsp;aspiraba al&nbsp;t&iacute;tulo de&nbsp;l&iacute;der intelectual del siglo XXI, pero se&nbsp;afianz&oacute; firmemente detr&aacute;s de&nbsp;&eacute;l&nbsp;despu&eacute;s de&nbsp;que predijo la&nbsp;crisis financiera de&nbsp;2008&nbsp;en su&nbsp;libro &laquo;El&nbsp;Cisne Negro: El&nbsp;Impacto De&nbsp;Lo&nbsp;Altamente Improbable&raquo;.';
$_['pt']['whois__taleb_text_1'] = 'O&nbsp;escritor n&atilde;o quis tornar-se um&nbsp;l&iacute;der intelectual do&nbsp;s&eacute;culo XXI, mas esse t&iacute;tulo &eacute;&nbsp;firmemente associado com ele depois que ele previu a&nbsp;crise financeira de&nbsp;2008&nbsp;em seu livro &laquo;Cisne Negro: Sob o&nbsp;Signo de&nbsp;Imprevisibilidade&raquo;.';
$_['tr']['whois__taleb_text_1'] = 'Yazar, 21. yüzyılın entelektüel lideri unvanını istemiyordu, ancak "Siyah Kuğu: öngörülemezliğin işareti altında" adlı kitabında 2008 mali krizini öngördükten sonra, bu unvan sağlam bir şekilde onun isminin yanına yerleşti.';


$_['ru']['whois__taleb_text_2'] = 'Сочинение поступило в&nbsp;продажу весной 2007&nbsp;года, незадолго до&nbsp;начала ипотечного кризиса в&nbsp;США, последующего обвала котировок на&nbsp;фондовом рынке и&nbsp;эффекта домино, распространившегося на&nbsp;весь мир в&nbsp;2008&nbsp;году.';
$_['en']['whois__taleb_text_2'] = 'Taleb is&nbsp;Distinguished Professor of&nbsp;Risk Engineering at&nbsp;NYU&rsquo;s Tandon School of&nbsp;Engineering and Scientific Advisor for Universa Investments]. His current focus is&nbsp;on&nbsp;the properties of&nbsp;systems that can handle disorder.';
$_['es']['whois__taleb_text_2'] = 'El&nbsp;ensayo sali&oacute; a&nbsp;la&nbsp;venta en&nbsp;la&nbsp;primavera del 2007, poco antes del inicio de&nbsp;la&nbsp;crisis hipotecaria en&nbsp;los Estados Unidos, el&nbsp;posterior colapso de&nbsp;las cotizaciones burs&aacute;tiles y&nbsp;el&nbsp;efecto domin&oacute; que se&nbsp;extendi&oacute; al&nbsp;mundo en&nbsp;2008.';
$_['pt']['whois__taleb_text_2'] = 'Um&nbsp;ensaio foi colocado &agrave;&nbsp;venda na&nbsp;primavera de&nbsp;2007, pouco antes do&nbsp;in&iacute;cio da&nbsp;crise das hipotecas nos EUA, seguido por um&nbsp;colapso dos pre&ccedil;os do&nbsp;mercado de&nbsp;a&ccedil;&otilde;es e&nbsp;o&nbsp;efeito domin&oacute; que se&nbsp;espalhou para o&nbsp;mundo todo em&nbsp;2008.';
$_['tr']['whois__taleb_text_2'] = 'Kitap, ABD de ipotek krizinin başlamasından kısa bir süre önce, borsa hisselerinin çöküşünden ve 2008 de dünyaya yayılan domino etkisinden kısa bir süre önce 2007 baharında satışa sunuldu.';


$_['ru']['whois__taleb_text_3'] = 'В&nbsp;&laquo;Черном лебеде&raquo; точно описал динамику развития кризиса до&nbsp;его наступления&nbsp;&mdash; и&nbsp;еще за&nbsp;год до&nbsp;&laquo;черного понедельника&raquo; обвинил в&nbsp;нем &laquo;идиотов в&nbsp;галстуках&raquo;, чья работа, по&nbsp;убеждению Нассима Николаса Талеба, являлась &laquo;гнилой&raquo; по&nbsp;определению: эксперт утверждал, что любая деятельность, которую оценивают коллеги по&nbsp;цеху, а&nbsp;не&nbsp;клиенты, заставляет участников терять связь с&nbsp;реальностью. А&nbsp;это явление, убежден автор, стало &ldquo; патологией нашего времени&rdquo; &raquo;.';
$_['en']['whois__taleb_text_3'] = 'He&nbsp;is&nbsp;the author of&nbsp;Incerto&nbsp;&mdash; a&nbsp;multi volume collection of&nbsp;books including &laquo;The Black Swan: The Impact of&nbsp;the Highly Improbable&raquo;, &lsquo;Antifragile&nbsp;&mdash; Things that gain from Disorder&rsquo; and &lsquo;Skin in&nbsp;the Game&nbsp;&mdash; Hidden Asymmetries in&nbsp;Daily Life&rsquo;. In &rsquo;The Black Swan&rsquo;, published in&nbsp;2007, he&nbsp;foretold the economic crisis that hit later that year and, very topically,he forecasted the strong likelihood of&nbsp;a&nbsp;global health pandemic. We&nbsp;are living with this prediction today.';
$_['es']['whois__taleb_text_3'] = 'En&nbsp;&laquo;El&nbsp;Cisne Negro&raquo;, el&nbsp;economista describi&oacute; con precisi&oacute;n la&nbsp;din&aacute;mica de&nbsp;la&nbsp;crisis antes de&nbsp;su&nbsp;inicio , y&nbsp;un&nbsp;a&ntilde;o antes del lunes negro acus&oacute; a&nbsp;los &laquo;idiotas en&nbsp;corbatas&raquo; cuyo trabajo, seg&uacute;n Taleb, era &laquo;podrido&raquo; por definici&oacute;n: el&nbsp;financiero afirm&oacute; que cualquier actividad evaluada por colegas en&nbsp;el&nbsp;taller y&nbsp;no&nbsp;por clientes hace que los participantes pierdan el&nbsp;contacto con la&nbsp;realidad. El&nbsp;autor est&aacute; convencido de&nbsp;que este fen&oacute;meno se&nbsp;ha&nbsp;convertido en&nbsp;&laquo;la&nbsp;patolog&iacute;a de&nbsp;nuestro tiempo&raquo;:';
$_['pt']['whois__taleb_text_3'] = 'No&nbsp;&laquo;Cisne Negro&raquo;, o&nbsp;economista exatamente descreveu a&nbsp;din&acirc;mica de&nbsp;desenvolvimento da&nbsp;crise antes de&nbsp;seu in&iacute;cio, e&nbsp;ainda o&nbsp;ano antes da&nbsp;&laquo;Segunda-feira Negra&raquo; ele acusou dela &laquo;idiotas com gravatas&raquo;, cujo trabalho, segundo o&nbsp;Taleb, estava &laquo;podre&raquo; por defini&ccedil;&atilde;o: o&nbsp;financista afirmou que qualquer atividade avaliada pelos colegas, e&nbsp;n&atilde;o clientes, fa&ccedil;a com que os&nbsp;participantes percam o&nbsp;contato com a&nbsp;realidade. E&nbsp;o&nbsp;autor est&aacute; convencido que esse fen&ocirc;meno tornou-se uma &laquo;patologia do&nbsp;nosso tempo&raquo;:';
$_['tr']['whois__taleb_text_3'] = '"Siyah Kuğu"da, ekonomik krizin dinamiklerini, gerçekleşmeden önce doğru bir şekilde tanımladı ve "kara pazartesi"den bir yıl önce, Talebe göre "çürümüş" olan "kravatlı aptalları" suçladı: finansör, müşterilerin değil, atölye meslektaşları tarafından değerlendirilen herhangi bir faaliyetin katılımcılarının gerçeklikle temaslarını kaybetmesine neden olduğunu savundu. Ve bu olay, yazarın ikna olduğuna, bir "zamanımızın patolojisi" haline geldi:';


$_['ru']['whois__taleb_blockquote_text_1'] = '&laquo;Если ты&nbsp;ищешь, кого&nbsp;бы обмануть, лучшая кандидатура&nbsp;&mdash; это кто-то вроде читателя The New Yorker. <img data-src="img/@lp/@version-taleb/whois/img_1.png" class="whois__text-img lazy"> Он&nbsp;презирает реднеков, считая их&nbsp;неспособными к&nbsp;критическому мышлению. При этом он&nbsp;не&nbsp;осознает простой вещи: любой человек, который не&nbsp;кормит себя интеллектуальным трудом,&nbsp;&mdash; это уже по&nbsp;умолчанию эксперт, поскольку его профессия непосредственно связана с&nbsp;реальным миром.';
$_['en']['whois__taleb_blockquote_text_1'] = '&laquo;If&nbsp;you&rsquo;re looking for someone to&nbsp;fool, the best candidate is&nbsp;someone like a&nbsp;reader of&nbsp;The New Yorker. <img data-src="img/@lp/@version-taleb/whois/img_1.png" class="whois__text-img lazy"> He&nbsp;despises rednecks, considering them incapable of&nbsp;critical thinking. At&nbsp;the same time, he&nbsp;does not realize a&nbsp;simple thing: any person who does not feed himself with intellectual labor is&nbsp;already an&nbsp;expert by&nbsp;default, since his profession is&nbsp;directly connected with the real world.';
$_['es']['whois__taleb_blockquote_text_1'] = '&laquo;Si&nbsp;est&aacute;s buscando a&nbsp;qui&eacute;n enga&ntilde;ar, la&nbsp;mejor candidatura es&nbsp;alguien como un&nbsp;lector de&nbsp;The New Yorker. <img data-src="img/@lp/@version-taleb/whois/img_1.png" class="whois__text-img lazy"> Desprecia a&nbsp;los paletos, consider&aacute;ndolos incapaces de&nbsp;pensar cr&iacute;ticamente. Al mismo tiempo, no&nbsp;se&nbsp;da&nbsp;cuenta de&nbsp;una cosa simple: cualquier persona que no&nbsp;se&nbsp;alimente con trabajo intelectual ya&nbsp;es&nbsp;un&nbsp;experto predeterminado, ya&nbsp;que su&nbsp;profesi&oacute;n est&aacute; directamente relacionada con el&nbsp;mundo real.';
$_['pt']['whois__taleb_blockquote_text_1'] = '&quot;Se&nbsp;voc&ecirc; procura algu&eacute;m para enganar, o&nbsp;melhor candidato &eacute;&nbsp;algu&eacute;m como um&nbsp;leitor do&nbsp;The New Yorker. <img data-src="img/@lp/@version-taleb/whois/img_1.png" class="whois__text-img lazy"> Ele despreza os&nbsp;camp&oacute;nios, considerando-os incapazes de&nbsp;pensamento cr&iacute;tico. Ao&nbsp;mesmo tempo, ele n&atilde;o percebe uma coisa simples: qualquer pessoa que n&atilde;o se&nbsp;alimente com trabalho intelectual j&aacute;&nbsp;&eacute;&nbsp;um&nbsp;especialista por padr&atilde;o, porque sua profiss&atilde;o est&aacute; diretamente conectada ao&nbsp;mundo real.';
$_['tr']['whois__taleb_blockquote_text_1'] = '"Kandırmak için birini arıyorsanız, en iyi aday, New Yorker in okuyucusu gibi biri olabilir. <img data-src="img/@lp/@version-taleb/whois/img_1.png" class="whois__text-img lazy"> Redneck leri eleştirel düşünemediklerini düşünerek hor görüyor. Aynı zamanda, basit bir şeyi fark etmiyor: entelektüel emekle beslenmeyen herhangi biri, mesleği doğrudan gerçek dünyayla bağlantılı olduğu için zaten varsayılan bir uzmandır.';


$_['ru']['whois__taleb_blockquote_text_2'] = 'Образованные люди, напротив, чаще склонны исходить из&nbsp;безумных идей, не&nbsp;имеющих отношения к&nbsp;действительности. И&nbsp;чем больше времени и&nbsp;сил вы&nbsp;посвящаете изучению макровопросов, будь&nbsp;то макроэкономика или глобальная политика, тем выше шансы в&nbsp;конечном итоге оказаться в&nbsp;&laquo;макродерьме&raquo;.';
$_['en']['whois__taleb_blockquote_text_2'] = 'Educated people, on&nbsp;the contrary, are more likely to&nbsp;start from crazy ideas that have no&nbsp;relation to&nbsp;reality. And the more time and effort you devote to&nbsp;studying macro-questions, whether it&nbsp;is&nbsp;macroeconomics or&nbsp;global politics, the higher the chances of&nbsp;ending up&nbsp;in&nbsp;the &laquo;macro-mess&raquo;.';
$_['es']['whois__taleb_blockquote_text_2'] = 'Las personas educadas, por el&nbsp;contrario, son m&aacute;s propensas a&nbsp;bas&aacute;rse en&nbsp;ideas locas que no&nbsp;tienen nada que ver con la&nbsp;realidad. Y&nbsp;cuanto m&aacute;s tiempo y&nbsp;esfuerzo dedique al&nbsp;estudio de&nbsp;los problemas macro, ya&nbsp;sea macroeconom&iacute;a o&nbsp;pol&iacute;tica global, mayores ser&aacute;n las posibilidades de&nbsp;terminar en&nbsp;&bdquo;macromierda&ldquo;&raquo;.';
$_['pt']['whois__taleb_blockquote_text_2'] = 'As&nbsp;pessoas instru&iacute;das, pelo contr&aacute;rio, t&ecirc;m maior probabilidade de&nbsp;usar ideias malucas que n&atilde;o s&atilde;o relevantes para a&nbsp;realidade. E&nbsp;quanto mais tempo e&nbsp;esfor&ccedil;o voc&ecirc; dedicar ao&nbsp;estudo de&nbsp;quest&otilde;es macro, seja macroecon&ocirc;mica ou&nbsp;pol&iacute;tica global, maiores ser&atilde;o as&nbsp;chances de&nbsp;acabar na&nbsp;&laquo;macro merda&raquo;.';
$_['tr']['whois__taleb_blockquote_text_2'] = 'Buna karşılık eğitimli insanların, gerçeklikle ilgili olmayan çılgın fikirlerden gelmesi daha olasıdır. Makroekonomi veya küresel politika olsun, makro meseleleri araştırmaya ne kadar fazla zaman ve çaba harcarsanız, "makro dünya"ya girme şansınız o kadar yüksek olur.';


$_['ru']['reputation__taleb_title'] = 'МНЕНИЕ ТОЛПЫ: ЧТО С&nbsp;РЕПУТАЦИЕЙ Нассима Николаса ТАЛЕБА';
$_['en']['reputation__taleb_title'] = 'WHAT ABOUT TALEB&rsquo;S VIEWS?';
$_['es']['reputation__taleb_title'] = 'OPINI&Oacute;N DE&nbsp;LA&nbsp;MULTITUD: &iquest;QU&Eacute; PASA CON LA&nbsp;REPUTACI&Oacute;N DE&nbsp;TALEB?';
$_['pt']['reputation__taleb_title'] = 'OPINI&Atilde;O DA&nbsp;MULTID&Atilde;O: O&nbsp;QUE EST&Aacute; COM A&nbsp;REPUTA&Ccedil;&Atilde;O DO&nbsp;TALEB';
$_['tr']['reputation__taleb_title'] = 'KALABALIĞIN GÖRÜŞÜ: TALEB İN İTİBARI NEDİR';

$_['ru']['reputation__taleb_text_box-1'] = 'Несмотря на&nbsp;звание одного из&nbsp;самых выдающихся умов нашего времени, Нассим Николас Талеб обладает неоднозначной репутацией: многие презирают его за&nbsp;резкость суждений, уличают в&nbsp;неточности прогнозов и&nbsp;предвзятости, а&nbsp;после слов спикера о&nbsp;том, что он&nbsp;&laquo;рад банкротству Lehman Brothers&raquo; на&nbsp;Давосском экономическом форуме в&nbsp;2009&nbsp;году, Нассиму Николасу Талебу даже угрожали физической расправой. (Впрочем, он&nbsp;был этому даже рад: по&nbsp;словам финансиста, у&nbsp;него появились основания чаще посещать фитнес-зал.)';
$_['en']['reputation__taleb_text_box-1'] = 'Although he&nbsp;is&nbsp;known as&nbsp;one the most outstanding minds of&nbsp;our time, Taleb has a&nbsp;mixed reputation: many have borne the brunt of&nbsp;his sharp judgments, others accuse him of&nbsp;inaccurate forecasts and bias. Following his statement that he&nbsp;was &laquo;happy about the bankruptcy of&nbsp;Lehman Brothers&raquo; during the World Economic Forum in&nbsp;Davos in&nbsp;2009, Taleb was threatened with physical violence. However, he&nbsp;didn&rsquo;t mind this too much as&nbsp;it&nbsp;gave him more incentive to&nbsp;visit the gym more often.';
$_['es']['reputation__taleb_text_box-1'] = 'A&nbsp;pesar del t&iacute;tulo de&nbsp;una de&nbsp;las mentes m&aacute;s destacadas de&nbsp;nuestro tiempo, Taleb tiene una reputaci&oacute;n ambigua: muchos lo&nbsp;desprecian por la&nbsp;dureza de&nbsp;sus juicios, lo&nbsp;acusan de&nbsp;imprecisi&oacute;n de&nbsp;pron&oacute;sticos y&nbsp;parcialidad, y&nbsp;despu&eacute;s de&nbsp;sus palabras de&nbsp;que estaba &laquo;contento con la&nbsp;quiebra de&nbsp;Lehman Brothers&raquo; en&nbsp;el&nbsp;foro econ&oacute;mico de&nbsp;Davos en&nbsp;2009, Taleb incluso fue amenazado con represalias f&iacute;sicas. (Sin embargo, incluso estaba contento con esto: seg&uacute;n el&nbsp;financiero, desde aquel momento ten&iacute;a m&aacute;s motivos para visitar el&nbsp;gimnasio con m&aacute;s frecuencia).';
$_['pt']['reputation__taleb_text_box-1'] = 'Apesar do&nbsp;t&iacute;tulo de&nbsp;uma das mentes mais destacadas de&nbsp;nosso tempo, Taleb tem uma reputa&ccedil;&atilde;o amb&iacute;gua: muitos o&nbsp;desprezam por seus julgamentos severos, o&nbsp;acusam de&nbsp;previs&otilde;es e&nbsp;preconceitos imprecisos, e&nbsp;depois que o&nbsp;orador disse que &laquo;estava contente com a&nbsp;fal&ecirc;ncia do&nbsp;Lehman Brothers&raquo; no&nbsp;F&oacute;rum Econ&ocirc;mico de&nbsp;Davos em&nbsp;2009, Taleb foi at&eacute; amea&ccedil;ado por danos f&iacute;sicos. (No&nbsp;entanto, ele at&eacute; ficou feliz com isso: de&nbsp;acordo com o&nbsp;financista, ele tinha motivos para visitar a&nbsp;academia com mais frequ&ecirc;ncia).';
$_['tr']['reputation__taleb_text_box-1'] = '&Ccedil;ağımızın en&nbsp;se&ccedil;kin zihinlerinden birinin unvanına rağmen, Taleb in&nbsp;belirsiz bir &uuml;n&uuml; var: Bir&ccedil;oğu onu, sert yargıları i&ccedil;in hor g&ouml;r&uuml;yor, yanlış tahminler ve&nbsp;&ouml;nyargılarla su&ccedil;luyor ve&nbsp;konuşmacının Davos Ekonomik Forumunda &laquo;Lehman Brothers ın&nbsp;iflasından memnun olduğunu&raquo; s&ouml;yl&uuml;yor. Taleb, 2009&nbsp;da fiziksel zararla bile tehdit edildi. (Ancak, bundan bile memnun oldu: finans&ouml;rlere g&ouml;re, fitness salonunu daha sık ziyaret etmek i&ccedil;in bir nedeni vardı).';


$_['ru']['reputation__taleb_text_box-2'] = 'По&nbsp;словам экономиста и&nbsp;нобелевского лауреата Майрона Шоулза, с&nbsp;которым Нассим Николас Талеб всерьез ссорился в&nbsp;социальных сетях, эксперта не&nbsp;воспринимают всерьез в&nbsp;академических кругах из-за того, что тот отказывается употреблять научные термины и&nbsp;методологию в&nbsp;своих исследованиях,&nbsp;&mdash; на&nbsp;что создатель собственной макроэкономической концепции предсказуемо отвечает, что &laquo;ни&nbsp;за&nbsp;что не&nbsp;готов выносить выпендрежников&raquo;.';
$_['en']['reputation__taleb_text_box-2'] = 'According to&nbsp;Nobel Laureate, Myron Scholes, with whom Taleb has had quarrels on&nbsp;social media, he&nbsp;is&nbsp;not always taken seriously in&nbsp;academic circles because he&nbsp;refuses to&nbsp;use scientific terms and methodology in&nbsp;his research&nbsp;&mdash; to&nbsp;which Taleb, the creator of&nbsp;his own macroeconomic concept, predictably responds that &laquo;he&nbsp;is&nbsp;not ready to&nbsp;tolerate show-offs for anything&raquo;.';
$_['es']['reputation__taleb_text_box-2'] = 'Seg&uacute;n el&nbsp;economista y&nbsp;premio Nobel Myron Scholes, con quien Taleb se&nbsp;pele&oacute; seriamente en&nbsp;las redes sociales, el&nbsp;experto ya&nbsp;no&nbsp;lo&nbsp;toman en&nbsp;los c&iacute;rculos acad&eacute;micos, porque se&nbsp;niega a&nbsp;usar t&eacute;rminos cient&iacute;ficos y&nbsp;metodolog&iacute;a en&nbsp;sus estudios, a&nbsp;lo&nbsp;que Taleb, creador de&nbsp;su&nbsp;propio concepto macroecon&oacute;mico, responde previsiblemente que &laquo;no&nbsp;est&aacute; dispuesto a&nbsp;soportar bastardos&raquo;.';
$_['pt']['reputation__taleb_text_box-2'] = 'Segundo o&nbsp;economista e&nbsp;ganhador do&nbsp;Nobel Myron Scholes, com quem Taleb seriamente brigou nas redes sociais, o&nbsp;especialista se&nbsp;recusa a&nbsp;ser levado a&nbsp;s&eacute;rio nos c&iacute;rculos acad&ecirc;micos porque ele se&nbsp;recusa a&nbsp;usar termos e&nbsp;metodologia cient&iacute;ficos em&nbsp;sua pesquisa&nbsp;&mdash; j&aacute;&nbsp;Taleb, o&nbsp;criador de&nbsp;seu pr&oacute;prio conceito macroecon&ocirc;mico previsivelmente responde que &laquo;n&atilde;o est&aacute; pronto para suportar os&nbsp;bastardos por nada&raquo;.';
$_['tr']['reputation__taleb_text_box-2'] = 'Taleb in&nbsp;sosyal ağlarda ciddi bir şekilde tartıştığı ekonomist ve&nbsp;Nobel &ouml;d&uuml;ll&uuml; Myron Okullarına g&ouml;re, uzmanlar, akademik &ccedil;evrelerde ciddiye alınmayı reddediyorlar, &ccedil;&uuml;nk&uuml; araştırmalarında bilimsel terimleri ve&nbsp;metodolojileri kullanmayı reddediyor, ki&nbsp;bunun i&ccedil;in kendi makroekonomik konseptinin yaratıcısı tahmin edersiniz&nbsp;ki, &laquo;hi&ccedil;bir şey i&ccedil;in g&ouml;stericilere katlanmaya hazır değilim&raquo; diye cevap veriyor.';


$_['ru']['reputation__taleb_blockquote_text_1'] = '&laquo;Меня больше не&nbsp;беспокоит судьба мировой финансовой системы. Как-то я&nbsp;уже описал оптимальный план действий. Окей? Спасибо, до&nbsp;свидания. Понятия не&nbsp;имею, что там происходит. Я&nbsp;отключен от&nbsp;всего происходящего и&nbsp;больше в&nbsp;это не&nbsp;вовлечен. Около 3&nbsp;млн человек купили книгу &bdquo;Черный лебедь&ldquo;. <img data-src="img/@lp/@version-taleb/reputation/img_1.png" class="reputation__text-img lazy"> Большинство прочитало ее&nbsp;до&nbsp;наступления кризиса. Мои мысли понравились читателям, они полюбили книгу, а&nbsp;меня приглашали на&nbsp;светские ужины.';
$_['en']['reputation__taleb_blockquote_text_1'] = '&laquo;I&nbsp;am no&nbsp;longer concerned about the fate of&nbsp;the global financial system. I&nbsp;have already described the optimal plan of&nbsp;action. Ok? Thank you, goodbye. I&nbsp;have no&nbsp;idea what&rsquo;s going on&nbsp;there. I&nbsp;am disconnected from everything that is&nbsp;happening and no&nbsp;longer involved in&nbsp;it. About 3&nbsp;million people bought &laquo;The Black Swan&raquo;. <img data-src="img/@lp/@version-taleb/reputation/img_1.png" class="reputation__text-img lazy"> Most of&nbsp;them read it&nbsp;before the crisis hit. My&nbsp;thoughts appealed to&nbsp;readers, they loved the book, and&nbsp;I was invited to&nbsp;social dinners.';
$_['es']['reputation__taleb_blockquote_text_1'] = '&laquo;Ya&nbsp;no&nbsp;me&nbsp;preocupa el&nbsp;destino del sistema financiero mundial. Un&nbsp;d&iacute;a ya&nbsp;he&nbsp;descrito el&nbsp;mejor plan de&nbsp;acci&oacute;n. &iquest;Vale? Gracias, hasta luego. No&nbsp;tengo idea de&nbsp;lo&nbsp;que est&aacute; pasando all&iacute;. Estoy desconectado de&nbsp;todo lo&nbsp;que est&aacute; sucediendo y&nbsp;ya&nbsp;no&nbsp;estoy involucrado en&nbsp;eso. Alrededor de&nbsp;3&nbsp;millones de&nbsp;personas compraron el&nbsp;libro &bdquo;El&nbsp;Cisne Negro&ldquo;. <img data-src="img/@lp/@version-taleb/reputation/img_1.png" class="reputation__text-img lazy"> La&nbsp;mayor&iacute;a la&nbsp;ha&nbsp;le&iacute;do antes de&nbsp;la&nbsp;crisis. Mis pensamientos les gustaron a&nbsp;los lectores, les encant&oacute; el&nbsp;libro y&nbsp;me&nbsp;invitaron a&nbsp;cenas sociales.';
$_['pt']['reputation__taleb_blockquote_text_1'] = '&laquo;N&atilde;o estou mais preocupado com o&nbsp;destino do&nbsp;sistema financeiro global. Uma vez eu&nbsp;j&aacute;&nbsp;descrevi o&nbsp;plano de&nbsp;a&ccedil;&atilde;o ideal. Certo? Obrigado, adeus. Eu&nbsp;n&atilde;o tenho ideia do&nbsp;que est&aacute; acontecendo&nbsp;l&aacute;. Estou desconectado do&nbsp;que est&aacute; acontecendo e&nbsp;n&atilde;o estou mais envolvido nisso. Cerca de&nbsp;3&nbsp;milh&otilde;es de&nbsp;pessoas compraram o&nbsp;livro &laquo;Cisne Negro&raquo;. <img data-src="img/@lp/@version-taleb/reputation/img_1.png" class="reputation__text-img lazy">  A&nbsp;maioria leu antes da&nbsp;crise. Os&nbsp;leitores gostaram dos meus pensamentos, se&nbsp;apaixonaram pelo livro e&nbsp;me&nbsp;convidaram para jantares seculares.';
$_['tr']['reputation__taleb_blockquote_text_1'] = '&laquo;Artık, k&uuml;resel finansal sistemin kaderi hakkında endişelenmiyorum. Bir şekilde en&nbsp;uygun eylem planını zaten tarif ettim. Tamam mı? Teşekk&uuml;r ederim, g&uuml;le g&uuml;le. Orada neler olduğu hakkında hi&ccedil;bir fikrim yok. Olanlardan kopuk bir haldeyim ve&nbsp;artık buna karışmıyorum. Yaklaşık 3&nbsp;milyon kişi &laquo;Siyah Kuğu&raquo; <img data-src="img/@lp/@version-taleb/reputation/img_1.png" class="reputation__text-img lazy"> kitabını satın aldı. &Ccedil;oğu krizden &ouml;nce okudu. D&uuml;ş&uuml;ncelerim okuyucular tarafından beğenildi, kitabı sevdiler ve&nbsp;sosyal yemeklere davet edildim.';


$_['ru']['reputation__taleb_blockquote_text_2'] = 'Но&nbsp;правда в&nbsp;том, что никто из&nbsp;тех, кто был осведомлен и&nbsp;должен был что-то предпринять, ничего не&nbsp;сделал и&nbsp;не&nbsp;поменял. Так что надо дать системе самоликвидироваться, а&nbsp;когда все исчезнет, вернуться в&nbsp;чисто поле&nbsp;&mdash; так, во&nbsp;всяком случае, рекомендовал поступать Сенека. <img data-src="img/@lp/@version-taleb/reputation/img_2.png" class="reputation__text-img lazy"> Раньше меня бесила эта его мысль, а&nbsp;теперь нравится&raquo;.';
$_['en']['reputation__taleb_blockquote_text_2'] = 'But the truth is&nbsp;that no&nbsp;one who was aware, and should have done something, has done or&nbsp;changed anything. So&nbsp;we&nbsp;need to&nbsp;let the system self-destruct, and when everything disappears, return to&nbsp;the field&nbsp;&mdash; at&nbsp;least, that&rsquo;s what Seneca recommended. I&nbsp;used to&nbsp;hate this idea of&nbsp;his, but now&nbsp;I like&nbsp;it.&quot;';
$_['es']['reputation__taleb_blockquote_text_2'] = 'Pero la&nbsp;verdad es&nbsp;que ninguno de&nbsp;los que estaban al&nbsp;tanto y&nbsp;ten&iacute;an que hacer algo hizo o&nbsp;cambi&oacute; nada. Por lo&nbsp;tanto, es&nbsp;necesario que el&nbsp;sistema se&nbsp;autodestruya, y&nbsp;cuando todo desaparezca, volver a&nbsp;empezar de&nbsp;cero, eso es&nbsp;lo&nbsp;que, en&nbsp;todo caso, recomendaba hacer S&eacute;neca. <img data-src="img/@lp/@version-taleb/reputation/img_2.png" class="reputation__text-img lazy"> Antes me&nbsp;enojaba con su&nbsp;pensamiento, y&nbsp;ahora me&nbsp;gusta&raquo;.';
$_['pt']['reputation__taleb_blockquote_text_2'] = 'Mas a&nbsp;verdade &eacute;&nbsp;que nenhum daqueles que tinham conhecimento e&nbsp;precisavam fazer alguma coisa, n&atilde;o fizeram nada e&nbsp;n&atilde;o mudaram nada. Por isso, voc&ecirc; precisa deixar o&nbsp;sistema se&nbsp;autodestruir&nbsp;e, quando tudo desaparecer, retornar a&nbsp;um&nbsp;campo puro&nbsp;&mdash; assim, em&nbsp;qualquer caso, o&nbsp;Seneca recomendou que o&nbsp;fizesse. <img data-src="img/@lp/@version-taleb/reputation/img_2.png" class="reputation__text-img lazy"> Eu&nbsp;costumava ficar furioso com essa ideia dele, mas agora eu&nbsp;gosto dela&quot;.';
$_['tr']['reputation__taleb_blockquote_text_2'] = 'Ama gerçek şu ki, bilgili olan ve bir şey yapmak zorunda kalanların hiçbiri, hiçbir şey yapmadı ve değiştirmedi. Bu yüzden sistemin kendini yok etmesine izin vermeliyiz ve her şey ortadan kalktığında, saf alana geri dönmeliyiz, bu yüzden, her durumda, Seneca <img data-src="img/@lp/@version-taleb/reputation/img_2.png" class="reputation__text-img lazy"> nın hareket etmesini tavsiye ettim. Eskiden onun düşüncesi beni öfkelendirirdi, ama şimdi beğeniyorum".';


$_['ru']['reputation__taleb_content_text'] = 'Нассим Николас Талеб повторяет, что не&nbsp;позиционирует себя как профессиональный спикер&nbsp;&mdash; и&nbsp;все&nbsp;же каждый год проводит около 15&nbsp;публичных выступлений. Самый скандальный интеллектуал десятилетия участвует в&nbsp;мероприятиях различных форматов&nbsp;&mdash; от&nbsp;тренингов для топ-менеджмента транснациональных корпораций до&nbsp;выступлений на&nbsp;масштабных профессиональных мероприятиях. Впрочем, писатель, не&nbsp;скрываясь, иронизирует над этим положением дел и&nbsp;теми, кто обращается к&nbsp;нему за&nbsp;советом.';
$_['en']['reputation__taleb_content_text'] = 'Nassim Nicholas Taleb is&nbsp;not a&nbsp;professional speaker&nbsp;&mdash; he&nbsp;only addresses a&nbsp;few major events annually, despite many more invitations, so&nbsp;this is&nbsp;a&nbsp;rare occasion to&nbsp;see him live and to&nbsp;ask him questions.';
$_['es']['reputation__taleb_content_text'] = 'Nassim Nicholas Taleb reitera que no&nbsp;se&nbsp;posiciona como un&nbsp;orador profesional&nbsp;y, sin embargo, realiza alrededor de&nbsp;15&nbsp;apariciones p&uacute;blicas anualmente. El&nbsp;intelectual m&aacute;s escandaloso de&nbsp;la&nbsp;d&eacute;cada toma parte en&nbsp;eventos de&nbsp;una variedad de&nbsp;formatos,desde capacitaciones para la&nbsp;alta gerencia de&nbsp;multinacionales hasta discursos en&nbsp;eventos profesionales a&nbsp;gran escala. Sin embargo, el&nbsp;escritor, sin esconderse, ironiza sobre este estado de&nbsp;cosas y&nbsp;aquellos que acuden a&nbsp;&eacute;l&nbsp;pidiendo consejo:';
$_['pt']['reputation__taleb_content_text'] = 'Nassim Nicholas Taleb repete que ele n&atilde;o se&nbsp;posiciona como orador profissional&nbsp;&mdash; e&nbsp;ainda realiza cerca de&nbsp;15&nbsp;discursos p&uacute;blicos a&nbsp;cada ano. O&nbsp;intelectual mais escandaloso da&nbsp;d&eacute;cada tem participado de&nbsp;eventos de&nbsp;v&aacute;rios formatos&nbsp;&mdash; de&nbsp;treinamentos para gerentes gerais de&nbsp;empresas transnacionais at&eacute; discursos em&nbsp;grandes eventos profissionais. No&nbsp;entanto, o&nbsp;escritor n&atilde;o se&nbsp;esconde e&nbsp;ironiza sobre esse estado de&nbsp;coisas e&nbsp;sobre aqueles que recorrem a&nbsp;ele em&nbsp;busca de&nbsp;conselhos.';
$_['tr']['reputation__taleb_content_text'] = 'Nassim Nicholas Taleb, kendisini profesyonel bir konuşmacı olarak konumlandırmadığını yineler, ancak her yıl yaklaşık 15 konuşma yapar. On yılın en skandal entelektüeli, ulusötesi şirketlerin üst yönetimine yönelik eğitimlerden, büyük ölçekli profesyonel etkinliklerde konuşmalara kadar çeşitli formatlardaki etkinliklerde yer almıştır. Ancak yazar, ironik bir şekilde bu durum ve tavsiye için ona yönelenler üzerinde saklanmıyor.';


$_['ru']['what-now__taleb_title'] = 'ЧТО ПРОИСХОДИТ СЕЙЧАС';
$_['en']['what-now__taleb_title'] = 'WHAT IS&nbsp;HAPPENING NOW?';
$_['es']['what-now__taleb_title'] = 'LO&nbsp;QUE EST&Aacute; PASANDO AHORA';
$_['pt']['what-now__taleb_title'] = 'O&nbsp;QUE ACONTECE AGORA';
$_['tr']['what-now__taleb_title'] = 'ŞİMDİ NELER OLUYOR';

$_['ru']['what-now__taleb_subtitle'] = 'Интеллектуальный и&nbsp;творческий труд дается Нассиму Николасу Талебу, по&nbsp;его собственному признанию, проще и&nbsp;приятнее торговли на&nbsp;бирже, <span class="color-red">а&nbsp;период 2004-2008 годов&nbsp;он называет самыми ужасными в&nbsp;своей биографии:</span>';
$_['en']['what-now__taleb_subtitle'] = 'By&nbsp;his own admission, intellectual and creative work is&nbsp;easier and more enjoyable than trading <span class="color-red">and the period 2004-2008, he&nbsp;says was the most difficult, in&nbsp;his biography:</span>';
$_['es']['what-now__taleb_subtitle'] = 'El&nbsp;trabajo intelectual y&nbsp;creativo se&nbsp;le&nbsp;da&nbsp;a&nbsp;Taleb, por su&nbsp;propia admisi&oacute;n, m&aacute;s f&aacute;cil y&nbsp;m&aacute;s agradable que el&nbsp;comercio en&nbsp;la&nbsp;bolsa de&nbsp;valores, <span class="color-red">y&nbsp;el&nbsp;per&iacute;odo de&nbsp;los a&ntilde;os 2004-2008, &eacute;l&nbsp;llama el&nbsp;m&aacute;s terrible en&nbsp;su&nbsp;biograf&iacute;a:</span>';
$_['pt']['what-now__taleb_subtitle'] = 'TRABALHO INTELECTUAL E&nbsp;CRIATIVO FICA PARA TALEB, POR SEU PR&Oacute;PRIO RECONHECIMENTO, MAIS SIMPLES E&nbsp;AGRAD&Aacute;VEL DO&nbsp;QUE A&nbsp;COMERCIALIZAR NA&nbsp;BOLSA, <span class="color-red"> E&nbsp;ELE CHAMA O&nbsp;PER&Iacute;ODO DE&nbsp;2004-2008&nbsp;O MAIS TERR&Iacute;VEL EM&nbsp;SUA BIOGRAFIA:</span>';
$_['tr']['what-now__taleb_subtitle'] = 'ENTELEKTÜEL VE YARATICI ÇALIŞMASI, KENDİNİ TANINMASI, BORSADA DAHA BASİT VE POZİTİF İŞLEM YAPMASI <span class="color-red">İLE 2004-2008 YILLARI ARASINDAKİ EN KORKUNÇ DÖNEMLERİ BİYOGRAFİSİNDE VERİLMİŞTİR:</span>';


$_['ru']['what-now__taleb_blockquote_text1'] = '&laquo;Это было ужасное время, худшие годы моей жизни. Когда я&nbsp;предсказывал кризис, все считали меня идиотом. И&nbsp;я&nbsp;об&nbsp;этом знал. Увы, я&nbsp;не&nbsp;мог отказаться от&nbsp;своих слов и&nbsp;прогнозов, только чтобы меня приняли в&nbsp;свой круг. Вот вам дилемма про меня: мнения окружающих совершенно не&nbsp;влияют на&nbsp;то, какие решения я&nbsp;приму, но&nbsp;все равно они меня задевают&raquo;.';
$_['en']['what-now__taleb_blockquote_text1'] = '&laquo;It&nbsp;was a&nbsp;terrible time, the worst years of&nbsp;my&nbsp;life. When I&nbsp;predicted the crisis, everyone thought&nbsp;I was an&nbsp;idiot. And I&nbsp;knew&nbsp;it. Alas, I&nbsp;could not give up&nbsp;my&nbsp;words and predictions just to&nbsp;be&nbsp;accepted into my&nbsp;circle. Here&rsquo;s a&nbsp;dilemma about&nbsp;me: the opinions of&nbsp;others do&nbsp;not affect the decisions I&nbsp;make, but they still hurt&nbsp;me.&raquo;';
$_['es']['what-now__taleb_blockquote_text1'] = '&laquo;Fue un&nbsp;momento terrible, los peores a&ntilde;os de&nbsp;mi&nbsp;vida. Cuando predije la&nbsp;crisis, todos me&nbsp;consideraban idiota. Y&nbsp;lo&nbsp;sab&iacute;a. Por desgracia, no&nbsp;pod&iacute;a renunciar a&nbsp;mis palabras y&nbsp;predicciones solo para ser aceptado en&nbsp;mi&nbsp;c&iacute;rculo. Aqu&iacute; hay un&nbsp;dilema sobre&nbsp;m&iacute;: las opiniones de&nbsp;los dem&aacute;s no&nbsp;afectan en&nbsp;absoluto las decisiones que tomar&eacute;, pero a&uacute;n as&iacute; me&nbsp;lastiman&raquo;.';
$_['pt']['what-now__taleb_blockquote_text1'] = '&laquo;Foi uma &eacute;poca terr&iacute;vel, os&nbsp;piores anos da&nbsp;minha vida. Quando previ a&nbsp;crise, todos me&nbsp;consideraram um&nbsp;idiota. E&nbsp;eu&nbsp;sabia disso. Infelizmente, n&atilde;o pude desistir de&nbsp;minhas palavras e&nbsp;previs&otilde;es para ser aceito em&nbsp;meu c&iacute;rculo. Aqui est&aacute; um&nbsp;dilema para mim: as&nbsp;opini&otilde;es dos outros n&atilde;o afetam as&nbsp;decis&otilde;es que tomo, mas ainda me&nbsp;machucam&raquo;.';
$_['tr']['what-now__taleb_blockquote_text1'] = '&laquo;Korkunç bir zamandı, hayatımın en kötü yıllarıydı. Kriz tahminimi söylediğimde, herkes beni aptal olarak gördü. Ve ben bu konuları biliyordum. Ne yazık ki, sözlerimi ve tahminlerimi sadece çevremde kabul edilmek için bırakamadım. İşte benim için bir ikilem: başkalarının görüşleri hangi kararları alacağımı etkilemez, ama yine de bana zarar verirler&raquo;.';


$_['ru']['what-now__taleb_blockquote_text2'] = '&laquo;Мой идеал современного<br> стоического мудреца&nbsp;&mdash; это человек, преобразующий страх в&nbsp;благоразумие, боль в&nbsp;информацию, ошибки<br>в&nbsp;инициативу, желание в&nbsp;действие&raquo;.';
$_['en']['what-now__taleb_blockquote_text2'] = '&laquo;My&nbsp;ideal of&nbsp;the modern stoic sage is&nbsp;a&nbsp;man who transforms fear into prudence, pain into information, mistakes into an&nbsp;initiative, desire into action.&raquo;';
$_['es']['what-now__taleb_blockquote_text2'] = '&laquo;Mi&nbsp;ideal del sabio estoico moderno es&nbsp;el&nbsp;hombre que transforma el&nbsp;miedo en&nbsp;prudencia, el&nbsp;dolor en&nbsp;informaci&oacute;n, los errores en&nbsp;iniciativa, el&nbsp;deseo en&nbsp;acci&oacute;n&raquo;.';
$_['pt']['what-now__taleb_blockquote_text2'] = '&laquo;Meu ideal do&nbsp;s&aacute;bio <br> est&oacute;ico moderno &eacute;&nbsp;uma pessoa que transforma medo em&nbsp;prud&ecirc;ncia, dor em&nbsp;informa&ccedil;&atilde;o, erros <br> em&nbsp;iniciativa, desejo em&nbsp;a&ccedil;&atilde;o&raquo;.';
$_['tr']['what-now__taleb_blockquote_text2'] = '&laquo;İdealim, modern stoacı <br>bir bilge gibi, korkuyu ihtiyatlılığa, acıyı bilgiye, <br>hataları inisiyatife, arzuyu eyleme dönüştüren bir kişi olmaktır&raquo;.';


$_['ru']['what-now__taleb_text_1'] = 'Нассим Николас Талеб признает свою уязвимость и&nbsp;хрупкость, несмотря на&nbsp;все достижения: 5&nbsp;написанных им&nbsp;книг стали международными бестселлерами, в&nbsp;2015 году он&nbsp;основал собственный Институт рисков в&nbsp;реальном мире, сотрудничает в&nbsp;качестве вольного спикера с&nbsp;лучшими университетами США и&nbsp;Европы&nbsp;&mdash; Оксфордским университетом, Лондонской бизнес-школой, Институтом математических наук и&nbsp;политехническом институте при Нью-Йоркском университете. Еще Нассим Николас Талеб владеет более чем 6&nbsp;языками, включая ханаанейский&nbsp;&mdash; языковой предок иврита и&nbsp;нескольких других древних языков. Правда, ученый признается, что он&nbsp;стал меньше читать&nbsp;&mdash; теперь лишь 30&nbsp;часов в&nbsp;неделю.';
$_['en']['what-now__taleb_text_1'] = 'Taleb recognizes his vulnerability and fragility, despite all his achievements: his books have become international bestsellers. In&nbsp;2015, he&nbsp;founded his own Real World Risk Institute, and collaborates with the best universities around the World including Oxford University, London Business School, the Institute of&nbsp;Mathematical Sciences and the Polytechnic Institute at&nbsp;New York University. Taleb speaks more than 6&nbsp;languages, including Canaanite, the ancestor of&nbsp;Hebrew and several other ancient languages. However, the scientist admits that he&nbsp;began to&nbsp;read less&nbsp;&mdash; now only 30&nbsp;hours a&nbsp;week.';
$_['es']['what-now__taleb_text_1'] = 'Taleb reconoce su&nbsp;vulnerabilidad y&nbsp;fragilidad a&nbsp;pesar de&nbsp;sus logros: cinco libros que escribi&oacute; se&nbsp;convirtieron en&nbsp;bestsellers internacionales, en&nbsp;2015 fund&oacute; su&nbsp;Propio Instituto de&nbsp;riesgos en&nbsp;el&nbsp;mundo real, colabora como orador libre con las mejores universidades de&nbsp;los Estados Unidos y&nbsp;Europa: la&nbsp;Universidad de&nbsp;Oxford, la&nbsp;London Business School, el&nbsp;Instituto de&nbsp;Ciencias matem&aacute;ticas y&nbsp;el&nbsp;Instituto Polit&eacute;cnico de&nbsp;la&nbsp;Universidad de&nbsp;Nueva York. Adem&aacute;s, Taleb habla m&aacute;s de&nbsp;6&nbsp;idiomas, incluido el&nbsp;cananeo,un antepasado ling&uuml;&iacute;stico del hebreo y&nbsp;varias otras lenguas antiguas. Es&nbsp;cierto que el&nbsp;cient&iacute;fico admite que comenz&oacute; a&nbsp;leer menos, ahora solo 30&nbsp;horas a&nbsp;la&nbsp;semana.';
$_['pt']['what-now__taleb_text_1'] = 'Taleb reconhece sua vulnerabilidade e&nbsp;fragilidade, apesar de&nbsp;todas as&nbsp;conquistas: 5&nbsp;livros que ele escreveu se&nbsp;tornaram best-sellers internacionais, em&nbsp;2015 ele fundou seu pr&oacute;prio Instituto de&nbsp;Risco no&nbsp;Mundo Real, colaborando como orador gratuito com as&nbsp;melhores universidades dos EUA e&nbsp;da&nbsp;Europa&nbsp;&mdash; Oxford University, London Business School, Instituto de&nbsp;Ci&ecirc;ncias Matem&aacute;ticas e&nbsp;Instituto Polit&eacute;cnico da&nbsp;Universidade de&nbsp;Nova York. Taleb tamb&eacute;m fala mais de&nbsp;6&nbsp;idiomas, incluindo cananita, o&nbsp;ancestral lingu&iacute;stico do&nbsp;hebraico e&nbsp;v&aacute;rias outras l&iacute;nguas antigas. Mas o&nbsp;cientista admite que come&ccedil;ou a&nbsp;ler menos&nbsp;&mdash; agora apenas 30&nbsp;horas por semana.';
$_['tr']['what-now__taleb_text_1'] = 'Taleb, tüm başarılara rağmen kırılganlığını ve alınganlığını kabul ediyor: Yazdığı 5 kitap uluslararası alanda en çok satanlar haline geldi, 2015 yılında gerçek dünyada kendi Risk Enstitüsü nü kurdu ve ABD ve Avrupa nın en iyi üniversiteleri ile ücretsiz konuşmacı olarak çalıştı, Oxford Üniversitesi, Londra Business Okulu, Matematik Bilimleri Enstitüsü ve New York Üniversitesi Politeknik Enstitüsü. Ayrıca Taleb, İbranice ve diğer birçok antik dilin dilsel atası olan Kenan dilleri de dahil olmak üzere 6 dan fazla dil biliyor. Doğru, bilim adamı daha az okumaya başladığını itiraf ediyor - şimdi sadece haftada 30 saat.';


$_['ru']['pay__taleb_title'] = 'Они платят мне<br> десятки тысяч<br> долларов, чтобы<br> я&nbsp;рвал их&nbsp;в&nbsp;клочья';
$_['en']['pay__taleb_title'] = 'They pay me&nbsp;tens of&nbsp;thousands of&nbsp;dollars to&nbsp;rip them to&nbsp;shreds';
$_['es']['pay__taleb_title'] = 'Me&nbsp;pagan decenas de&nbsp;miles de&nbsp;d&oacute;lares para que los arruine.';
$_['pt']['pay__taleb_title'] = 'ELES ME&nbsp;PAGAM <br> DEZENAS DE&nbsp;MILHARES <br> DE&nbsp;D&Oacute;LARES PARA QUE <br> OS&nbsp;RASGUEI EM&nbsp;PEDA&Ccedil;OS';
$_['tr']['pay__taleb_title'] = 'BANA ON BİNLERCE <br>DOLAR ÖDÜYORLAR, <br>BÖYLECE ONLARI <br>PARÇALARA AYIRIYORUM';

$_['ru']['pay__taleb_subtitle'] = '<span class="color-red">Нассим Николас Талеб стал международной звездой научпопа, способной разрушить любой устойчивый стереотип и&nbsp;распространенное убеждение:</span> он&nbsp;тепло отзывается о&nbsp;президенте США Дональде Трампе, которого многие открыто ненавидят; уважительно высказывается о&nbsp;российском президенте Владимире Путине вопреки критике журналистов; отрицает, что пандемия коронавируса стала очередным &laquo;черным лебедем&raquo;.';
$_['en']['pay__taleb_subtitle'] = '<span class="color-red">Taleb is&nbsp;open and direct in&nbsp;his views and this sometimes creates both positive and negative responses in&nbsp;the mainstream and on&nbsp;social media outlets.</span> He&nbsp;has spoken about his regard for President Putin and for other world leaders. He&nbsp;has equally criticized the way that certain nations have responded to&nbsp;the pandemic. Furthermore, he&nbsp;maintains that the coronavirus is&nbsp;not a&nbsp;&laquo;Black Swan&raquo; as&nbsp;it&nbsp;was both predictable and preventable. He&nbsp;considers a&nbsp;working laborer wiser and more stable than any &laquo;intellectual idiots&raquo; from Wall Street and he&nbsp;has argued with many leading economists about all kinds of&nbsp;issues and stands his ground in&nbsp;the face of&nbsp;opposing views.';
$_['es']['pay__taleb_subtitle'] = '<span class="color-red">Nassim Nicholas Taleb se&nbsp;ha&nbsp;convertido en&nbsp;una estrella cient&iacute;fica internacional capaz de&nbsp;romper cualquier estereotipo estable y&nbsp;creencia popular:</span> habla calurosamente sobre el&nbsp;presidente de&nbsp;los Estados Unidos, Donald Trump, que muchos odian abiertamente, habla respetuosamente sobre el&nbsp;presidente ruso Vladimir Putin, en&nbsp;contra de&nbsp;las cr&iacute;ticas de&nbsp;los periodistas, niega que la&nbsp;pandemia del coronavirus se&nbsp;haya convertido en&nbsp;otro &laquo;cisne negro&raquo;,';
$_['pt']['pay__taleb_subtitle'] = '<span class="color-red">Nassim Nicholas Taleb SE&nbsp;TORNOU A&nbsp;ESTRELA INTERNACIONAL DA&nbsp;POPULARIZA&Ccedil;&Atilde;O CIENT&Iacute;FICA QUE &Eacute;&nbsp;CAPAZ DE&nbsp;DESTRUIR QUALQUER ESTERE&Oacute;TIPO EST&Aacute;VEL E&nbsp;CREN&Ccedil;A COMUM:</span> ELE FALA CALOROSAMENTE DO&nbsp;PRESIDENTE DOS EUA, DONALD&nbsp;TRUMP, QUEM MUITOS ODEIAM ABERTAMENTE, RESPEITOSAMENTE FALA DO&nbsp;PRESIDENTE DA&nbsp;RUSSIA VLADIMIR PUTIN APESAR DAS CR&Iacute;TICAS DOS JORNALISTAS, NEGA QUE A&nbsp;PANDEMIA DE&nbsp;CORONAV&Iacute;RUS TENHA SE&nbsp;TORNANDO OUTRO &laquo;CISNE NEGRO&raquo;,';
$_['tr']['pay__taleb_subtitle'] = '<span class="color-red">TALEB, HERHANGİ BİR KALICI KLİŞEYİ VE YAYGIN İNANCI YOK EDEBİLEN ULUSLARARASI BİR BİLİM YILDIZI OLDU:</span> PEK ÇOK KİŞİNİN AÇIKÇA NEFRET ETTİĞİ ABD BAŞKANI DONALD TRUMP HAKKINDA SICAK BİR ŞEKİLDE KONUŞUYOR, GAZETECİLERİN ELEŞTİRİLERİNE RAĞMEN RUS BAŞKANI VLADİMİR PUTİN HAKKINDA SAYGILI BİR ŞEKİLDE KONUŞUYOR, KORONA VİRÜS PANDEMİSİNİN BİR SONRAKİ "SİYAH KUĞU" HALİNE GELDİĞİNİ REDDEDİYOR';


$_['ru']['pay__taleb_blockquote_text1'] = '<p>&laquo;Одно из&nbsp;самых больших разочарований нашей эпохи&nbsp;&mdash; глобализация не&nbsp;привела к&nbsp;интеллектуальному разнообразию, не&nbsp;породила плюрализма мнений. Напротив, мы&nbsp;видим, что весь мир начинает вести себя как централизованная система: общество кластеризуется, возникает деление на&nbsp;&bdquo;наших&ldquo; и&nbsp;&bdquo;ваших&ldquo;.</p><p>Вместо провозглашенной свободы мнений создается ситуация, напоминающая жизнь в&nbsp;тоталитарном государстве: <img class="lazy-loaded" src="img/@lp/@version-taleb/pay/icon.png"> есть официальные мнения, которые ты&nbsp;должен разделять, иначе становишься изгоем&raquo;.</p>';
$_['en']['pay__taleb_blockquote_text1'] = '<p>&laquo;One of&nbsp;the greatest disappointments of&nbsp;our era is&nbsp;that globalization has not led to&nbsp;intellectual diversity, has not generated pluralism of&nbsp;opinions. On&nbsp;the contrary, we&nbsp;can see that the whole world is&nbsp;beginning to&nbsp;behave like a&nbsp;centralized system: society is&nbsp;clustering, there is&nbsp;a&nbsp;division into &bdquo;ours&ldquo; and &bdquo;yours&ldquo;.</p><p>Instead of&nbsp;the declared freedom of&nbsp;opinion, a&nbsp;situation is&nbsp;created that resembles life in&nbsp;a&nbsp;totalitarian state: <img class="lazy-loaded" src="img/@lp/@version-taleb/pay/icon.png"> there are official opinions that you must share, otherwise you become an&nbsp;outcast.&raquo;</p>';
$_['es']['pay__taleb_blockquote_text1'] = '<p>&laquo;Una de&nbsp;las mayores decepciones de&nbsp;nuestra era es&nbsp;que la&nbsp;globalizaci&oacute;n no&nbsp;ha&nbsp;llevado a&nbsp;la&nbsp;diversidad intelectual, no&nbsp;ha&nbsp;generado pluralidad de&nbsp;opiniones. Por el&nbsp;contrario, vemos que todo el&nbsp;mundo comienza a&nbsp;comportarse como un&nbsp;sistema centralizado: la&nbsp;sociedad se&nbsp;agrupa, surge una divisi&oacute;n en&nbsp;&bdquo;los nuestros&ldquo; y&nbsp;&bdquo;los vuestros&ldquo;.</p><p>En&nbsp;lugar de&nbsp;la&nbsp;libertad de&nbsp;opini&oacute;n proclamada, se&nbsp;crea una situaci&oacute;n que se&nbsp;asemeja a&nbsp;la&nbsp;vida en&nbsp;un&nbsp;estado totalitario: <img class="lazy-loaded" src="img/@lp/@version-taleb/pay/icon.png"> hay opiniones oficiales que debes compartir, de&nbsp;lo&nbsp;contrario te&nbsp;conviertes en&nbsp;un&nbsp;paria&raquo;.</p>';
$_['pt']['pay__taleb_blockquote_text1'] = '<p>&laquo;Uma das maiores decep&ccedil;&otilde;es da&nbsp;nossa &eacute;poca&nbsp;&mdash; a&nbsp;globaliza&ccedil;&atilde;o n&atilde;o levou &agrave;&nbsp;diversidade intelectual, n&atilde;o gerou pluralismo de&nbsp;opini&otilde;es. Pelo contr&aacute;rio, vemos que o&nbsp;mundo inteiro come&ccedil;a a&nbsp;se&nbsp;comportar como um&nbsp;sistema centralizado: a&nbsp;sociedade est&aacute; se&nbsp;aglomerando, h&aacute;&nbsp;uma divis&atilde;o entre &laquo;nosso&raquo; e&nbsp;&laquo;seu&raquo;.</p><p>Em&nbsp;vez da&nbsp;proclamada liberdade de&nbsp;opini&atilde;o, &eacute;&nbsp;criada uma situa&ccedil;&atilde;o que se&nbsp;assemelha &agrave;&nbsp;vida em&nbsp;um&nbsp;estado totalit&aacute;rio: <img class="lazy-loaded" src="img/@lp/@version-taleb/pay/icon.png"> h&aacute;&nbsp;opini&otilde;es oficiais que voc&ecirc; deve compartilhar, caso contr&aacute;rio voc&ecirc; se&nbsp;tornar&aacute; um&nbsp;p&aacute;ria&quot;.</p>';
$_['tr']['pay__taleb_blockquote_text1'] = '<p>"Çağımızın en büyük hayal kırıklıklarından biri küreselleşme, entelektüel çeşitliliğe yol açmadı, çoğulculuk yaratmadı. Aksine, tüm dünyanın merkezi bir sistem gibi davranmaya başladığını görüyoruz: toplum kümeleniyor, "bizim" ve "sizinki" olarak bir bölünme var.</p><p>İlan edilen fikir özgürlüğü yerine, totaliter bir devlette yaşamı andıran bir durum yaratılır: <img class="lazy-loaded" src="img/@lp/@version-taleb/pay/icon.png"> paylaşmanız gereken resmi görüşler vardır, aksi takdirde dışlanmış olursunuz".</p>';

$_['ru']['pay__taleb_text_1'] = '<p>Нассим Николас Талеб считает простого работягу разумнее и&nbsp;устойчивее, чем любой &laquo;интеллектуальный идиот&raquo; с&nbsp;Уолл-стрит, и&nbsp;спорит со&nbsp;сторонниками популяризации предпринимательства, настаивая, что для сохранения статуса-кво и&nbsp;уверенного экономического развития достаточно, чтобы лишь&nbsp;1% населения страны занимался бизнесом.</p><p>Порой свобода мышления писателя вызывает оторопь и&nbsp;непонимание даже у&nbsp;его поклонников и&nbsp;подписчиков в&nbsp;социальных сетях (610 тысяч в&nbsp;Твиттере!)&nbsp;&mdash; но&nbsp;сам Нассим Николас Талеб объясняет это верностью принципам и&nbsp;сетует на&nbsp;актуальные реалии:</p>';
$_['en']['pay__taleb_text_1'] = '<p>Sometimes Taleb&rsquo;s provocative thoughts cause confusion and incomprehension, even among his most ardent followers on&nbsp;social networks (with more than 610,000&nbsp;on Twitter!)&nbsp;&mdash; but Taleb himself explains this by&nbsp;loyalty to&nbsp;principles and highlights the shortcomings of&nbsp;many groups in&nbsp;society today.<p>';
$_['es']['pay__taleb_text_1'] = '<p>considera que un&nbsp;simple trabajador es&nbsp;m&aacute;s inteligente y&nbsp;estable que cualquier &laquo;idiota intelectual&raquo; de&nbsp;Wall Street, y&nbsp;discute con los partidarios de&nbsp;la&nbsp;popularizaci&oacute;n del esp&iacute;ritu empresarial, insistiendo en&nbsp;que para mantener el&nbsp;status quo y&nbsp;un&nbsp;desarrollo econ&oacute;mico seguro es&nbsp;suficiente para que solo el&nbsp;1% de&nbsp;la&nbsp;poblaci&oacute;n del pa&iacute;s se&nbsp;dedique a&nbsp;los negocios.</p><p>A&nbsp;veces, la&nbsp;libertad de&nbsp;pensamiento del escritor causa confusi&oacute;n e&nbsp;incomprensi&oacute;n incluso entre sus aficionados y&nbsp;seguidores en&nbsp;las redes sociales (&iexcl;610 mil en&nbsp;Twitter!)&nbsp;&mdash; pero el&nbsp;propio Taleb lo&nbsp;explica por la&nbsp;lealtad a&nbsp;los principios y&nbsp;se&nbsp;lamenta de&nbsp;las realidades actuales:</p>';
$_['pt']['pay__taleb_text_1'] = '<p>Ele considera um&nbsp;trabalhador simples e&nbsp;mais razo&aacute;vel e&nbsp;mais est&aacute;vel do&nbsp;que qualquer &laquo;idiota intelectual&raquo; de&nbsp;Wall Street, e&nbsp;argumenta com os&nbsp;defensores da&nbsp;populariza&ccedil;&atilde;o do&nbsp;empreendedorismo, insistindo que, para manter o&nbsp;status quo e&nbsp;o&nbsp;desenvolvimento econ&ocirc;mico confiante, basta que apenas&nbsp;1% da&nbsp;popula&ccedil;&atilde;o do&nbsp;pa&iacute;s fa&ccedil;a neg&oacute;cios.</p><p>&Agrave;s&nbsp;vezes, a&nbsp;liberdade de&nbsp;pensamento do&nbsp;escritor causa confus&atilde;o e&nbsp;mal-entendidos, mesmo entre seus f&atilde;s e&nbsp;assinantes nas redes sociais (610 mil no&nbsp;Twitter!)&nbsp;&mdash; mas o&nbsp;pr&oacute;prio Taleb explica isso pela fidelidade aos princ&iacute;pios e&nbsp;lamenta as&nbsp;realidades atuais:</p>';
$_['tr']['pay__taleb_text_1'] = '<p>Basit bir çalışanın Wall Street teki herhangi bir "entelektüel aptal"dan daha makul ve daha istikrarlı olduğunu düşünüyor ve statükoyu ve kendinden emin ekonomik kalkınmayı sürdürmek için, ülke nüfusunun sadece %1 inin iş yapmasının yeterli olduğu konusunda ısrar ederek, girişimciliğin popülerleşmesini destekleyenlerle tartışıyor.</p><p>Bazen yazarın düşünme özgürlüğü, hayranlarının ve sosyal ağlardaki abonelerinin arasında bile (Twitter da 610 bin!) karışıklığa ve yanlış anlamalara neden olur, ama Taleb in kendisi, bunu ilkelere bağlılıkla açıklıyor ve mevcut gerçeklerden şikayet ediyor:</p>';


$_['ru']['pay__taleb_text_2'] = 'Впрочем, быть изгоем вне системы и&nbsp;институтов более чем привычно для спикера. Самоучка, &laquo;частный интеллектуал&raquo;, мировая знаменитость, на&nbsp;сайте которой есть анонс для медиа: &laquo;Журналисты и&nbsp;представители любых изданий, я&nbsp;умоляю: оставьте меня в&nbsp;покое&raquo;&nbsp;&mdash; Нассим Николас Талеб не&nbsp;нуждается в&nbsp;признании публики, но&nbsp;все равно находится в&nbsp;эпицентре событий.';
$_['en']['pay__taleb_text_2'] = 'Bing something of&nbsp;an&nbsp;outcast, outside the system and institutions is&nbsp;normal for Taleb. On&nbsp;his website, there is&nbsp;a&nbsp;plea from him to&nbsp;all media and journalists and representatives of&nbsp;any publications&rsquo;, I&nbsp;beg you: leave me&nbsp;alone&quot;&nbsp;&mdash; Taleb does not seek recognition by&nbsp;the media and the public, yet his views and opinions are highly sought after, now more than ever.';
$_['es']['pay__taleb_text_2'] = 'Sin embargo, ser un&nbsp;paria, fuera del sistema y&nbsp;las instituciones es&nbsp;m&aacute;s que habitual para el&nbsp;orador. Autodidacta, &laquo;intelectual privado&raquo;, celebridad mundial en&nbsp;cuyo sitio web hay un&nbsp;anuncio para los medios de&nbsp;comunicaci&oacute;n &laquo;Periodistas y&nbsp;representantes de&nbsp;cualquier ediciones, les ruego: d&eacute;jenme en&nbsp;paz&raquo;: Nassim Nicholas Taleb no&nbsp;necesita el&nbsp;reconocimiento del p&uacute;blico, pero a&uacute;n se&nbsp;encuentra en&nbsp;el&nbsp;epicentro de&nbsp;los eventos.';
$_['pt']['pay__taleb_text_2'] = 'No&nbsp;entanto, &eacute;&nbsp;mais do&nbsp;que o&nbsp;habitual para o&nbsp;orador ser exclu&iacute;do fora do&nbsp;sistema e&nbsp;das institui&ccedil;&otilde;es. Autodidata, &laquo;um&nbsp;intelectual privado&raquo;, uma celebridade mundialmente famosa que tem um&nbsp;an&uacute;ncio na&nbsp;m&iacute;dia &laquo;Jornalistas e&nbsp;representantes de&nbsp;qualquer m&iacute;dia, eu&nbsp;imploro: me&nbsp;deixem em&nbsp;paz&raquo;&nbsp;&mdash; Nassim Nicholas Taleb n&atilde;o precisa de&nbsp;reconhecimento p&uacute;blico, mas ainda est&aacute; no&nbsp;epicentro dos eventos.';
$_['tr']['pay__taleb_text_2'] = 'Ancak, bir konuşmacının sistem ve kurumlar dışında dışlanmış olması, alışılmış olandan daha fazladır. Kendi kendini yetiştirmiş, "özel bir entelektüel", bir medya duyurusu olan dünyaca ünlü "Gazeteciler ve herhangi bir medyanın temsilcisi, yalvarıyorum: beni yalnız bırak", Nassim Nicholas Taleb in kamuoyu tarafından tanınmaya ihtiyacı yok, ancak hala olayların merkez üssünde.';

$_['ru']['comingsoon__taleb_title'] = 'ЧТО ВАС ЖДЕТ';
$_['en']['comingsoon__taleb_title'] = 'REASONS TO&nbsp;PARTICI&shy;PATE';
$_['es']['comingsoon__taleb_title'] = 'LO&nbsp;QUE LE&nbsp;ESPERA';
$_['pt']['comingsoon__taleb_title'] = 'O&nbsp;QUE VAI ACONTECER';
$_['tr']['comingsoon__taleb_title'] = 'SİZİ NE BEKLİYOR';

$_['ru']['comingsoon__taleb_subtitle'] = 'На&nbsp;платформе Synergy.Online Нассим Николас Талеб научит зрителей';
$_['en']['comingsoon__taleb_subtitle'] = 'On&nbsp;July&nbsp;18, at&nbsp;Synergy Online Forum, Nassim Nicholas Taleb will outline some of&nbsp;the skills and thinking that you will need to&nbsp;become more &lsquo;antifragile&rsquo; and how one needs to&nbsp;seek out ways to&nbsp;manage risk and to&nbsp;build businesses that will prosper and endure.';
$_['es']['comingsoon__taleb_subtitle'] = 'El&nbsp;18&nbsp;de julio en&nbsp;Synergy online Forum, Nassim Nicholas Taleb ense&ntilde;ar&aacute; a&nbsp;los espectadores';
$_['pt']['comingsoon__taleb_subtitle'] = '18&nbsp;DE JULHO NO&nbsp;FORUM ONLINE DA&nbsp;SYNERGY NASSIM&nbsp;NICHOLAS TALEB VAI ENSINAR A&nbsp;AUDI&Ecirc;NCIA';
$_['tr']['comingsoon__taleb_subtitle'] = 'NASSİM NİCHOLAS TALEB 18 TEMMUZ DA SYNERGY ONLİNE FORUM DA, İZLEYİCİLERE';

$_['ru']['comingsoon__taleb_text_1'] = 'Сохранять связь с&nbsp;реальностью, видеть дальше своего носа, избавиться от&nbsp;беспочвенных опасений, избежать принадлежности к&nbsp;классу &laquo;интеллектуальных идиотов&raquo; и&nbsp;убедиться, что даже его прогнозам не&nbsp;стоит безоговорочно верить.';
$_['en']['comingsoon__taleb_text_1'] = '';
$_['es']['comingsoon__taleb_text_1'] = 'a&nbsp;mantenerse conectados con la&nbsp;realidad, ver m&aacute;s all&aacute; de&nbsp;su&nbsp;nariz, deshacerse de&nbsp;los temores infundados, evitar pertenecer a&nbsp;la&nbsp;clase de&nbsp;&laquo;idiotas intelectuales&raquo; y&nbsp;asegurarse de&nbsp;que ni&nbsp;siquiera en&nbsp;sus predicciones uno debe creer incondicionalmente.';
$_['pt']['comingsoon__taleb_text_1'] = 'A&nbsp;MANTER O&nbsp;RELACIONAMENTO COM A&nbsp;REALIDADE, VER MAIS DO&nbsp;QUE O&nbsp;SEU NARIZ, LIBERTAR-SE DE&nbsp;MEDOS SEM FUNDAMENTO, EVITAR A&nbsp;CLASSE DE&nbsp;IDIOTAS INTELLECTUAIS, E&nbsp;TER CERTEZA QUE MESMO AS&nbsp;PREVIS&Otilde;ES DELE N&Atilde;O S&Atilde;O IMBAT&Iacute;VEIS PARA ACREDITAR.';
$_['tr']['comingsoon__taleb_text_1'] = 'GERÇEKLİKLE BAĞLANTI KURMAYI, BURNUNUN ÖTESİNİ GÖRMEYİ, ASILSIZ KORKULARDAN KURTULMAYI, "ENTELEKTÜEL APTALLAR" SINIFINA GİRMEKTEN KAÇINMAYI VE TAHMİNLERİNİN BİLE KOŞULSUZ OLARAK İNANMAMAYI SAĞLAMAYI ÖĞRETECEK.';


$_['ru']['comingsoon__taleb_text_2'] = 'Ждем вас&nbsp;&mdash; подключайтесь к&nbsp;трансляции!';
$_['en']['comingsoon__taleb_text_2'] = 'We&nbsp;are waiting for you at&nbsp;Synergy Online Forum&nbsp;&mdash; join the broadcast!';
$_['es']['comingsoon__taleb_text_2'] = 'Le&nbsp;esperamos en&nbsp;Synergy Online Forum&nbsp;&mdash; &iexcl;con&eacute;ctese a&nbsp;la&nbsp;transmisi&oacute;n en&nbsp;vivo!';
$_['pt']['comingsoon__taleb_text_2'] = 'ESTAMOS ESPERANDO VOC&Ecirc; NO&nbsp;SYNERGY ONLINE FORUM&nbsp;&mdash; CONECTE-SE &Agrave;&nbsp;TRANSMISS&Atilde;O!';
$_['tr']['comingsoon__taleb_text_2'] = 'SİNERJİ ONLINE FORUM DA SİZİ BEKLİYORUZ - YAYINA BAĞLANIN!';

$_['ru']['footer__link-privacy-taleb'] = 'Политика конфиденциальности';
$_['en']['footer__link-privacy-taleb'] = 'Privacy policy';
$_['es']['footer__link-privacy-taleb'] = 'Pol&iacute;tica de&nbsp;privacidad';
$_['pt']['footer__link-privacy-taleb'] = 'Pol&iacute;tica de&nbsp;privacidade';
$_['tr']['footer__link-privacy-taleb'] = 'Gizlilik Politikası';

$_['ru']['footer__meta-copyright-taleb'] = '&copy; 1988 — 2020 Университет &laquo;Синергия&raquo;. Все&nbsp;права&nbsp;защищены.';
$_['en']['footer__meta-copyright-taleb'] = '&copy;️ 1988&nbsp;&mdash; 2020. Synergy University. All rights reserved.';
$_['es']['footer__meta-copyright-taleb'] = '&copy;&nbsp;1988&nbsp;&mdash; 2020 Synergy University. Todos los derechos reservados.';
$_['pt']['footer__meta-copyright-taleb'] = '&copy;&nbsp;1988&nbsp;&mdash; 2020 Universidade &laquo;Sinergia&raquo;. Todos os&nbsp;direitos reservados.';
$_['tr']['footer__meta-copyright-taleb'] = '&copy; 1988 — 2020 "Sinerji" Üniversitesi. Tüm hakları saklıdır';

$_['ru']['taleb-main-headliner__text'] = '
<p>Нассим Талеб, автор бестселлеров &laquo;Черный лебедь&raquo; и&nbsp;&laquo;Антихрупкость&raquo;, эксперт в&nbsp;области исследования удачи, случайности и&nbsp;непредсказуемости.</p>
<p>Нассим Талеб, один из&nbsp;самых выдающихся умов современности и&nbsp;самый скандальный &laquo;частный интеллектуал&raquo;, смог взломать систему, предугадать алгоритм развития кризиса 2008, исследовать новое макроэкономическое явление и&nbsp;изменить мышление человечества навсегда.</p>
';
$_['en']['taleb-main-headliner__text'] = '
<p>Nassim Taleb, author of&nbsp;the best-selling books &ldquo;Black Swan&rdquo; and &ldquo;Antifragile&rdquo;, an&nbsp;expert in&nbsp;the study of&nbsp;luck, randomness, and unpredictability.</p>
<p>Nassim Taleb is&nbsp;one of&nbsp;the most prominent minds of&nbsp;our time and the most scandalous &ldquo;private intellectual&rdquo;, who was able to&nbsp;hack the system, predict the algorithm of&nbsp;the 2008&nbsp;crisis, investigate a&nbsp;new macroeconomic phenomenon and change the thinking of&nbsp;mankind forever.</p>
';
$_['ru']['taleb-main-headliner__description'] = 'Спикер проведет собственный мастер-класс, посвященный новым вызовам, с&nbsp;которыми нам предстоит столкнуться, расскажет о&nbsp;качествах, которые нужно приобрести уже сейчас, научит, как выстоять при любой конъюнктуре и&nbsp;расстаться со&nbsp;страхом за&nbsp;собственную шкуру&nbsp;&mdash; ведь с&nbsp;ней все в&nbsp;порядке только у&nbsp;тех, кто смело вступает в&nbsp;игру.';
$_['en']['taleb-main-headliner__description'] = 'The speaker will&nbsp;hold&nbsp;his own master class on&nbsp;the new challenges that we&nbsp;will&nbsp;face, tell&nbsp;us about the qualities that need to&nbsp;be&nbsp;acquired now, teach how to&nbsp;overcome any situation and stop being afraid&nbsp;for your own skin&nbsp;&mdash; after all, your skin is&nbsp;completely fine, when you just enter the game.';

$_['ru']['headliners__title'] = 'Хэдлайнеры';
$_['en']['headliners__title'] = '';
$_['ru']['headliners__text'] = '11&nbsp;июля на&nbsp;сценах Synergy Online Forum выступят сразу три спикера, которым удалось выйти за&nbsp;пределы возможностей обычных людей.';
$_['en']['headliners__text'] = '';


/* https://synergyglobal.ru/lp/version-brown/ */
$_['ru']['speakers-brown-main__day'] = '15&nbsp;августа';
$_['en']['speakers-brown-main__day'] = 'AUGUST&nbsp;15';
$_['ru']['speakers-brown-main__time'] = '';
$_['en']['speakers-brown-main__time'] = '';
$_['ru']['speakers-brown-main__title'] = '<img src="img/@lp/@version-brown/main/main_title_ru.png" alt="Лес Браун. Будь в игре пока не выиграл" class="main__title-img">';
$_['en']['speakers-brown-main__title'] = '<img src="img/@lp/@version-brown/main/main_title_en.png" alt="Les Brown. Stay in the Game Until You Win" class="main__title-img">';
$_['ru']['speakers-brown-main__subtitle'] = 'первый среди лучших мотивационных спикеров мира на&nbsp;Synergy Online Forum';
$_['en']['speakers-brown-main__subtitle'] = 'One of&nbsp;the world&rsquo;s most renowned motivational speakers to&nbsp;present at&nbsp;Synergy Online Forum';

$_['ru']['speakers-brown-platform__title'] = 'Платформа';
$_['en']['speakers-brown-platform__title'] = 'Platform';

$_['ru']['speakers-brown-platform__content'] = 'Мастер-класс будет проходить на&nbsp;платформе Synergy.Online, которая создана для того, чтобы аккумулировать самые актуальные знания и&nbsp;сервисы для предпринимателей.';
$_['en']['speakers-brown-platform__content'] = 'The master class will be&nbsp;held on&nbsp;the Synergy.Online platform, a&nbsp;platform developed to&nbsp;gather the most relevant knowledge and resources for entrepreneurs.';

$_['ru']['speakers-brown-platform__text'] = 'Получайте образование в&nbsp;онлайн-формате, используйте современные IT-решения, развивайтесь и&nbsp;развивайте свой бизнес.';
$_['en']['speakers-brown-platform__text'] = 'Get education in&nbsp;an&nbsp;online format, use modern&nbsp;IT solutions, develop yourself and your business.';

$_['ru']['speakers-brown-platform__description_1'] = 'ЕЖЕНЕДЕЛЬНЫЕ <br> ОНЛАЙН-ФОРУМЫ <br> С&nbsp;ВЕДУЩИМИ <br> МИРОВЫМИ СПИКЕРАМИ';
$_['en']['speakers-brown-platform__description_1'] = 'WEEKLY <br> ONLINE FORUMS <br> WITH LEADING <br> WORLD&nbsp;SPEAKERS';

$_['ru']['speakers-brown-platform__description_2'] = 'ОНЛАЙН-ПРАКТИКУМЫ <br> И&nbsp;ВЕБИНАРЫ';
$_['en']['speakers-brown-platform__description_2'] = 'ONLINE WORKSHOPS <br> AND WEBINARS';

$_['ru']['speakers-brown-platform__description_3'] = 'БАЗА ЗНАНИЙ <br> С&nbsp;ЛУЧШИМИ ВИДЕО <br> С&nbsp;СОБЫТИЙ &laquo;СИНЕРГИИ&raquo;';
$_['en']['speakers-brown-platform__description_3'] = 'KNOWLEDGE BASE <br> WITH BEST VIDEO <br> FROM SYNERGY EVENTS';

$_['ru']['speakers-brown-platform__description_4'] = 'ЦИФРОВЫЕ СЕРВИСЫ <br> ДЛЯ БИЗНЕСА';
$_['en']['speakers-brown-platform__description_4'] = 'DIGITAL SERVICES <br> FOR BUSINESS';

$_['ru']['speakers-brown-platform__description_5'] = 'АНТИКРИЗИСНЫЕ <br> IT-РЕШЕНИЯ';
$_['en']['speakers-brown-platform__description_5'] = 'ANTI-CRISIS <br> IT-SOLUTIONS';

$_['ru']['speakers-brown-platform__description_6'] = 'НОВОСТИ <br> И&nbsp;АНАЛИТИКА';
$_['en']['speakers-brown-platform__description_6'] = 'NEWS <br> AND ANALYTICS';

$_['ru']['speakers-brown-public-section__title'] = 'Паблик-ток';
$_['en']['speakers-brown-public-section__title'] = 'Public talk';

$_['ru']['speakers-brown-public-section__description'] = '15&nbsp;августа Лес Браун сделает исключение для зрителей Synergy Online Forum и&nbsp;проведет паблик-ток с&nbsp;аудиторией Форума.';
$_['en']['speakers-brown-public-section__description'] = 'On&nbsp;August&nbsp;15, Les Brown will make an&nbsp;exception for the Synergy Online Forum and hold his own public talk with the forum audience.';

$_['ru']['speakers-brown-public-section__text'] = 'Он&nbsp;в&nbsp;деталях расскажет, как преодолел смущение и&nbsp;комплексы, почему ему ни&nbsp;за&nbsp;что не&nbsp;стыдно, как заставить себя поверить в&nbsp;то, что тебя ничего не&nbsp;остановит, и&nbsp;что мешает каждому из&nbsp;нас стать богатым и&nbsp;успешным.';
$_['en']['speakers-brown-public-section__text'] = 'He&nbsp;will speak in&nbsp;detail how he&nbsp;overcame embarrassment and complications, why he&nbsp;is&nbsp;not ashamed of&nbsp;anything, how to&nbsp;make yourself believe that nothing will stop you, and what prevents each of&nbsp;us from becoming wealthy and successful.';

$_['ru']['speakers-brown-public-section__decoration_1'] = 'Самая простая вещь, которую я&nbsp;сделал,&nbsp;&mdash;';
$_['en']['speakers-brown-public-section__decoration_1'] = '&laquo;The easiest thing I&rsquo;ve ever done was';

$_['ru']['speakers-brown-public-section__decoration_2'] = 'заработал миллион долларов.';
$_['en']['speakers-brown-public-section__decoration_2'] = 'to&nbsp;earn a&nbsp;million dollars,';

$_['ru']['speakers-brown-public-section__decoration_3'] = 'Самая трудная вещь, которая мне удалась,&nbsp;&mdash;';
$_['en']['speakers-brown-public-section__decoration_3'] = 'the most difficult thing I&rsquo;ve ever done was';

$_['ru']['speakers-brown-public-section__decoration_4'] = 'я&nbsp;поверил, что я&nbsp;могу столько заработать';
$_['en']['speakers-brown-public-section__decoration_4'] = 'to&nbsp;believe it&nbsp;could happen to&nbsp;me';

$_['ru']['speakers-brown-public-section__decoration_5'] = 'и&nbsp;держать в&nbsp;руках.';
$_['en']['speakers-brown-public-section__decoration_5'] = '';

$_['ru']['speakers-brown-public-section__years'] = 'На&nbsp;это у&nbsp;меня ушли годы';
$_['en']['speakers-brown-public-section__years'] = 'It&nbsp;took me&nbsp;years&raquo;.';

$_['ru']['speakers-brown-bottom__title'] = 'Будь в&nbsp;игре, пока не&nbsp;выиграл';
$_['en']['speakers-brown-bottom__title'] = 'Stay in&nbsp;the Game Until You Win';

$_['ru']['speakers-brown-who__blockquote_info'] = 'Лесли Браун родился в&nbsp;1945 году в&nbsp;Либерти Сити, в&nbsp;одном из&nbsp;самых бедных районов Флориды. В&nbsp;возрасте шести недель Леса и&nbsp;его родного брата отдали в&nbsp;детский приют (биологическая мать не&nbsp;могла прокормить мальчиков), откуда их&nbsp;забрал самый важный человек в&nbsp;жизни Брауна&nbsp;&mdash; миссис Мэмми Браун.';
$_['en']['speakers-brown-who__blockquote_info'] = 'Leslie Brown was born in&nbsp;1945 in&nbsp;Liberty City, one of&nbsp;the poorest districts of&nbsp;Florida. At&nbsp;the age of&nbsp;six weeks, Les and his brother were sent to&nbsp;an&nbsp;orphanage (the biological mother could not feed the boys), where they were taken by&nbsp;the most important person in&nbsp;his life&nbsp;&mdash; Mrs. Mamie Brown.';

$_['ru']['speakers-brown-who__blockquote_left'] = 'Лес называл приемную мать своим вдохновителем и&nbsp;опорой с&nbsp;самого детства: она поддерживала сына в&nbsp;любых начинаниях и&nbsp;жизненных ситуациях. Например, когда Лес учился в&nbsp;5&nbsp;классе, преподавательский состав его школы принял решение перевести Лесли в&nbsp;класс для детей с&nbsp;особенностями развития из-за синдрома дефицита внимания и&nbsp;гиперактивности (СДВГ): Лес ни&nbsp;на&nbsp;чем не&nbsp;мог надолго сосредоточиться и&nbsp;без умолку говорил.';
$_['en']['speakers-brown-who__blockquote_left'] = 'Les called his foster mother his inspiration and support since childhood: she supported her son in&nbsp;any endeavor and life situation. For example, when Les was in&nbsp;5th grade, his teachers transferred him to&nbsp;a&nbsp;special needs class due to&nbsp;his Attention Deficit Hyperactivity Disorder (ADHD): Les could not focus on&nbsp;anything for long periods and always talked incessantly.';

$_['ru']['speakers-brown-who__blockquote_text_1'] = 'Если ты&nbsp;проводишь';
$_['en']['speakers-brown-who__blockquote_text_1'] = 'If&nbsp;you spend';

$_['ru']['speakers-brown-who__blockquote_text_2'] = 'слишком много';
$_['en']['speakers-brown-who__blockquote_text_2'] = 'too much';

$_['ru']['speakers-brown-who__blockquote_text_3'] = 'времени';
$_['en']['speakers-brown-who__blockquote_text_3'] = 'time';

$_['ru']['speakers-brown-who__blockquote_text_4'] = 'в&nbsp;окружении девяти';
$_['en']['speakers-brown-who__blockquote_text_4'] = 'surrounded by&nbsp;nine';

$_['ru']['speakers-brown-who__blockquote_text_5'] = 'идиотов, скоро';
$_['en']['speakers-brown-who__blockquote_text_5'] = 'idiots, you';

$_['ru']['speakers-brown-who__blockquote_text_6'] = 'ты&nbsp;гарантированно';
$_['en']['speakers-brown-who__blockquote_text_6'] = 'will soon';

$_['ru']['speakers-brown-who__blockquote_text_7'] = 'станешь десятым';
$_['en']['speakers-brown-who__blockquote_text_7'] = 'become the tenth';

$_['ru']['speakers-brown-who__title'] = 'Кто такой Лесли Браун';
$_['en']['speakers-brown-who__title'] = 'WHO IS&nbsp;LES BROWN';

$_['ru']['speakers-brown-who__right_1'] = 'Лучше жить';
$_['en']['speakers-brown-who__right_1'] = 'It&nbsp;is&nbsp;better';

$_['ru']['speakers-brown-who__right_2'] = 'в&nbsp;своей фантазии,';
$_['en']['speakers-brown-who__right_2'] = 'to&nbsp;live in&nbsp;your';

$_['ru']['speakers-brown-who__right_3'] = 'чем в&nbsp;дурных';
$_['en']['speakers-brown-who__right_3'] = 'imagination than';

$_['ru']['speakers-brown-who__right_4'] = 'воспоминаниях';
$_['en']['speakers-brown-who__right_4'] = 'in&nbsp;bad memories';

$_['ru']['speakers-brown-registration__title'] = 'Зарегистрироваться на&nbsp;онлайн мастер-класс';
$_['en']['speakers-brown-registration__title'] = 'REGISTER TO&nbsp;THE ONLINE MASTER CLASS';
$_['ru']['speakers-brown-registration__title_1'] = 'Зарегистрироваться';
$_['en']['speakers-brown-registration__title_1'] = 'SIGN&nbsp;UP';
$_['ru']['speakers-brown-registration__button'] = 'Зарегистрироваться';
$_['en']['speakers-brown-registration__button'] = 'SIGN&nbsp;UP';

$_['ru']['speakers-brown-footer__link-privacy'] = 'Политика конфиденциальности';
$_['en']['speakers-brown-footer__link-privacy'] = 'Privacy policy';

$_['ru']['speakers-brown-speech__subtitle'] = 'первый среди лучших<br> мотивационных спикеров <br class="d-block d-xl-none">мира на&nbsp;Synergy<br>Online Forum';
$_['en']['speakers-brown-speech__subtitle'] = 'first among the best<br> motivational speakers <br class="d-block d-xl-none">in&nbsp;the world at&nbsp;Synergy<br>Online Forum';
$_['ru']['speakers-brown-speech__title_1'] = 'Лучше жить<br>в&nbsp;своей фантазии,<br><span class="text-bg"> чем в&nbsp;дурных воспоминаниях</span>';
$_['en']['speakers-brown-speech__title_1'] = 'It&nbsp;is&nbsp;better to&nbsp;live<br>in&nbsp;your imagination<br><span class="text-bg">than in&nbsp;bad memories</span>';
$_['ru']['speakers-brown-speech__title_2'] = 'Совершенства <br>не&nbsp;существует: <br>вы&nbsp;всегда можете<br><span class="text-bg"> добиться лучшего <br>и&nbsp;продолжить расти</span>';
$_['en']['speakers-brown-speech__title_2'] = 'There is&nbsp;no&nbsp;such<br>thing as&nbsp;perfection:<br>you can always<br><span class="text-bg">do&nbsp;better <br>and continue to&nbsp;grow</span>';

$_['ru']['speakers-brown-about__blockquote__info'] = '15&nbsp;августа на&nbsp;Synergy Online Forum выступит один из&nbsp;наиболее известных в&nbsp;мире мотивационных ораторов и&nbsp;вдохновителей Америки, экс-ведущий теле- и&nbsp;радиопередач Лес Браун.';
$_['en']['speakers-brown-about__blockquote__info'] = 'The world&rsquo;s leading motivational speaker, American author, a&nbsp;former radio and T.V. host, Les Brown, will speak at&nbsp;Synergy Online Forum on&nbsp;August&nbsp;15.';
$_['ru']['speakers-brown-about__blockquote__left'] = 'В&nbsp;рамках Форума он&nbsp;проведет собственный мастер-класс для зрителей, расскажет о&nbsp;том, как вера в&nbsp;себя помогает победить цинизм, почему трудное детство&nbsp;&mdash; лучшая отправная точка для роста, как научиться себя прощать, чтобы двигаться вперед, и&nbsp;правда&nbsp;ли, что миллион долларов достаточно представить, чтобы скоро получить.';
$_['en']['speakers-brown-about__blockquote__left'] = 'As&nbsp;part of&nbsp;the Forum, he&nbsp;will hold his own master class for the audience, talk about how self-belief helps to&nbsp;overcome cynicism, why a&nbsp;difficult childhood is&nbsp;the best starting point for growth, how to&nbsp;learn to&nbsp;forgive yourself in&nbsp;order to&nbsp;move forward, and whether it&nbsp;is&nbsp;true that it&nbsp;is&nbsp;enough to&nbsp;imagine a&nbsp;million dollars to&nbsp;get it&nbsp;soon.';
$_['ru']['speakers-brown-about__blockquote__text_string_1'] = 'Совершенства';
$_['en']['speakers-brown-about__blockquote__text_string_1'] = 'There is&nbsp;no&nbsp;such';
$_['ru']['speakers-brown-about__blockquote__text_string_2'] = 'не&nbsp;существует:';
$_['en']['speakers-brown-about__blockquote__text_string_2'] = 'thing as&nbsp;perfection:';
$_['ru']['speakers-brown-about__blockquote__text_string_3'] = 'вы&nbsp;всегда можете';
$_['en']['speakers-brown-about__blockquote__text_string_3'] = 'you can always';
$_['ru']['speakers-brown-about__blockquote__text_string_4'] = 'добиться лучшего';
$_['en']['speakers-brown-about__blockquote__text_string_4'] = 'do&nbsp;better';
$_['ru']['speakers-brown-about__blockquote__text_string_5'] = 'и&nbsp;продолжить расти';
$_['en']['speakers-brown-about__blockquote__text_string_5'] = 'and continue to&nbsp;grow';

$_['ru']['speakers-brown-middle-form__subtitle'] = 'Лучше жить в&nbsp;своей фантазии,<br>чем в&nbsp;дурных воспоминаниях!';
$_['en']['speakers-brown-middle-form__subtitle'] = 'It&nbsp;is&nbsp;better to&nbsp;live in&nbsp;your imagination<br>than in&nbsp;bad memories.';

$_['ru']['speakers-brown-who-2_blockquote__info_big'] = 'Несмотря на&nbsp;удар, нанесенный по&nbsp;его самооценке, Лес не&nbsp;растерялся и&nbsp;получил комплимент от&nbsp;одного из&nbsp;школьных преподавателей: ему посоветовали попробовать себя в&nbsp;выступлениях на&nbsp;радио. С&nbsp;тех пор Лес Браун мечтал о&nbsp;том, чтобы попасть в&nbsp;эфир.';
$_['en']['speakers-brown-who-2_blockquote__info_big'] = 'Despite the blow to&nbsp;his self-esteem, Les was not lost and received a&nbsp;compliment from one of&nbsp;the school teachers: he&nbsp;was advised to&nbsp;try himself in&nbsp;radio performances. Since then, Les Brown has been dreaming of&nbsp;getting on&nbsp;the air.';

$_['ru']['speakers-brown-who-2_blockquote__info_small'] = 'По&nbsp;окончании школы у&nbsp;молодого человека не&nbsp;было ни&nbsp;идей, ни&nbsp;планов на&nbsp;будущее: он&nbsp;не&nbsp;окончил колледж, не&nbsp;поступил в&nbsp;университет, и&nbsp;единственная работа, которую он&nbsp;без труда мог&nbsp;бы получить, была в&nbsp;городском муниципалитете. <span class="blockquote__info_small_blue"> Лес Браун убирал улицы&nbsp;и, по&nbsp;его словам, никогда не&nbsp;сомневался, что это временное положение дел. </span>';
$_['en']['speakers-brown-who-2_blockquote__info_small'] = 'After leaving school, the young man had no&nbsp;ideas or&nbsp;plans for the future: he&nbsp;did not graduate from College, did not go&nbsp;to&nbsp;University, and the only job that he&nbsp;could easily get was in&nbsp;the city hall. <span class="blockquote__info_small_blue"> Les Brown cleaned the streets and, according to&nbsp;him, never doubted that this was a&nbsp;temporary living situation. </span>';

$_['ru']['speakers-brown-who-2_blockquote__left'] = 'Гиперактивность Брауна не&nbsp;дала ему окончить колледж, но&nbsp;позволила получить желаемую работу. Поработав некоторое время в&nbsp;муниципалитете, Лес вспомнил о&nbsp;совете, который дали ему в&nbsp;школе насчет радио,&nbsp;&mdash; и&nbsp;решил пойти ва-банк. Мишенью Брауна стала радиостанция Miami Beach: молодой человек звонил несколько раз в&nbsp;день на&nbsp;протяжении двух месяцев, чтобы получить работу. Ему отказывали из-за отсутствия профессионального опыта, но&nbsp;оказалось, что проще нанять Лесли, чем объяснить ему, почему &laquo;нет&raquo;. Лес работал курьером, помощником редактора и&nbsp;иногда помогал ведущим готовиться к&nbsp;эфиру.';
$_['en']['speakers-brown-who-2_blockquote__left'] = 'Brown&rsquo;s hyperactivity prevented him from graduating from College but allowed him to&nbsp;get a&nbsp;job. After working for a&nbsp;while in&nbsp;the municipality, Les remembered the advice he&nbsp;got in&nbsp;school and decided to&nbsp;look for a&nbsp;radio station job. Brown chose the Miami Beach radio station. He&nbsp;called the station several times a&nbsp;day for two months to&nbsp;get a&nbsp;job. They rejected him for lack of&nbsp;professional experience, but finally, they gave in&nbsp;and hired him. Les worked as&nbsp;a&nbsp;courier, assistant editor, and sometimes helped the hosts prepare for the broadcast.';

$_['ru']['speakers-brown-who-2_blockquote__text_1'] = 'Если ты&nbsp;проводишь';
$_['en']['speakers-brown-who-2_blockquote__text_1'] = 'If&nbsp;you spend';

$_['ru']['speakers-brown-who-2_blockquote__text_2'] = 'слишком много';
$_['en']['speakers-brown-who-2_blockquote__text_2'] = 'too much';

$_['ru']['speakers-brown-who-2_blockquote__text_3'] = 'времени';
$_['en']['speakers-brown-who-2_blockquote__text_3'] = 'time';

$_['ru']['speakers-brown-who-2_blockquote__text_4'] = 'в&nbsp;окружении девяти';
$_['en']['speakers-brown-who-2_blockquote__text_4'] = 'surrounded by&nbsp;nine';

$_['ru']['speakers-brown-who-2_blockquote__text_5'] = 'идиотов, скоро';
$_['en']['speakers-brown-who-2_blockquote__text_5'] = 'idiots, you';

$_['ru']['speakers-brown-who-2_blockquote__text_6'] = 'ты&nbsp;гарантированно';
$_['en']['speakers-brown-who-2_blockquote__text_6'] = 'will soon';

$_['ru']['speakers-brown-who-2_blockquote__text_7'] = 'станешь десятым';
$_['en']['speakers-brown-who-2_blockquote__text_7'] = 'become the tenth';

$_['ru']['speakers-brown-who-2_blockquote__text_8'] = 'Удача&nbsp;&mdash; это отлично,';
$_['en']['speakers-brown-who-2_blockquote__text_8'] = 'Luck is&nbsp;great,';

$_['ru']['speakers-brown-who-2_blockquote__text_9'] = 'но&nbsp;ее, в&nbsp;отличие';
$_['en']['speakers-brown-who-2_blockquote__text_9'] = 'but unlike';

$_['ru']['speakers-brown-who-2_blockquote__text_10'] = 'от&nbsp;своей карьеры,';
$_['en']['speakers-brown-who-2_blockquote__text_10'] = 'your career,';

$_['ru']['speakers-brown-who-2_blockquote__text_11'] = 'ты&nbsp;не&nbsp;можешь';
$_['en']['speakers-brown-who-2_blockquote__text_11'] = 'you can&rsquo;t';

$_['ru']['speakers-brown-who-2_blockquote__text_12'] = 'контролировать.';
$_['en']['speakers-brown-who-2_blockquote__text_12'] = 'control&nbsp;it.';

$_['ru']['speakers-brown-who-2_blockquote__text_13'] = 'Так что продолжай';
$_['en']['speakers-brown-who-2_blockquote__text_13'] = 'So&nbsp;keep';

$_['ru']['speakers-brown-who-2_blockquote__text_14'] = 'работать!';
$_['en']['speakers-brown-who-2_blockquote__text_14'] = 'working!';

$_['ru']['speakers-brown-who-2_blockquote__left_2'] = 'Впрочем, это тоже продлилось недолго: спустя время Лес использовал случай, чтобы сделать шаг вперед. Во&nbsp;время одного из&nbsp;прямых эфиров он&nbsp;подставил коллегу, чтобы получить место у&nbsp;микрофона (Браун в&nbsp;прямом эфире как&nbsp;бы невзначай произнес, что радиоведущий пил алкоголь во&nbsp;время ведения программы). Сотрудника уволили, а&nbsp;Лес использовал ситуацию, чтобы начать карьеру радиоведущего.';
$_['en']['speakers-brown-who-2_blockquote__left_2'] = 'His new position didn&rsquo;t last long. After a&nbsp;while, Les took the opportunity to&nbsp;take a&nbsp;step forward. During one of&nbsp;the live broadcasts, a&nbsp;radio jockey showed up&nbsp;drunk during a&nbsp;live broadcast. The employee was fired, and Les jumped on&nbsp;the opportunity to&nbsp;start his career as&nbsp;a&nbsp;radio host.';

$_['ru']['speakers-brown-what-now__title'] = 'Что происходит сейчас';
$_['en']['speakers-brown-what-now__title'] = 'WHAT IS&nbsp;HAPPENING NOW';

$_['ru']['speakers-brown-what-now_blockquote__info'] = 'В&nbsp;2000-х годах Лес Браун приостановил публичную деятельность, чтобы заняться написанием книг и&nbsp;собственными радиопередачами.';
$_['en']['speakers-brown-what-now_blockquote__info'] = 'In&nbsp;the 2000s, Les Brown suspended his public activities to&nbsp;pursue writing books and his own radio shows.';

$_['ru']['speakers-brown-what-now_blockquote__left'] = 'Лес&nbsp;&mdash; автор национальных бестселлеров &laquo;Живи своими мечтами&raquo;, &laquo;Будь в&nbsp;игре, пока не&nbsp;победил&raquo;, &laquo;Оставайся голодным&raquo;, &laquo;Успех&nbsp;&mdash; это состояние ума&raquo;, &laquo;Все возможно&raquo; и&nbsp;других произведений. Сегодня мотивационный оратор редко выступает и&nbsp;уделяет все свое время семье: Лес Браун&nbsp;&mdash; отец 9&nbsp;детей, дедушка 15&nbsp;внуков и&nbsp;2&nbsp;правнуков.';
$_['en']['speakers-brown-what-now_blockquote__left'] = 'Les is&nbsp;the author of&nbsp;national bestsellers, &laquo;Live Your Dreams,&raquo; &laquo;It&rsquo;s not over until You Win,&raquo; &laquo;You&rsquo;ve Got To&nbsp;Be&nbsp;HUNGRY,&raquo; &laquo;The Power of&nbsp;Purpose,&raquo; &laquo;Up&nbsp;Thoughts for Down Times.&raquo; Today he&nbsp;rarely speaks so&nbsp;he&nbsp;can devote all his time to&nbsp;the family: Les Brown is&nbsp;the father of&nbsp;9&nbsp;children, the grandfather of&nbsp;15&nbsp;grandchildren, and two great-grandchildren.';

$_['ru']['speakers-brown-what-now_blockquote__text_1'] = 'Кто-то может';
$_['en']['speakers-brown-what-now_blockquote__text_1'] = 'Someone can';

$_['ru']['speakers-brown-what-now_blockquote__text_2'] = 'отдышаться';
$_['en']['speakers-brown-what-now_blockquote__text_2'] = 'catch their breath';

$_['ru']['speakers-brown-what-now_blockquote__text_3'] = 'в&nbsp;тени потому,';
$_['en']['speakers-brown-what-now_blockquote__text_3'] = 'in&nbsp;the shade because';

$_['ru']['speakers-brown-what-now_blockquote__text_4'] = 'что когда-то';
$_['en']['speakers-brown-what-now_blockquote__text_4'] = 'someone smart';

$_['ru']['speakers-brown-what-now_blockquote__text_5'] = 'кто-то умный';
$_['en']['speakers-brown-what-now_blockquote__text_5'] = 'once planted';

$_['ru']['speakers-brown-what-now_blockquote__text_6'] = 'посадил дерево';
$_['en']['speakers-brown-what-now_blockquote__text_6'] = 'a&nbsp;tree';

$_['ru']['speakers-brown-after__title'] = 'Что было потом';
$_['en']['speakers-brown-after__title'] = 'WHAT HAPPENED NEXT';

$_['ru']['speakers-brown-after__right_1'] = 'Совершенства';
$_['en']['speakers-brown-after__right_1'] = 'There is&nbsp;no&nbsp;such';

$_['ru']['speakers-brown-after__right_2'] = 'не&nbsp;существует:';
$_['en']['speakers-brown-after__right_2'] = 'thing as&nbsp;perfection:';

$_['ru']['speakers-brown-after__right_3'] = 'вы&nbsp;всегда можете';
$_['en']['speakers-brown-after__right_3'] = 'you can always';

$_['ru']['speakers-brown-after__right_4'] = 'добиться лучшего';
$_['en']['speakers-brown-after__right_4'] = 'do&nbsp;better';

$_['ru']['speakers-brown-after__right_5'] = 'и&nbsp;продолжить расти';
$_['en']['speakers-brown-after__right_5'] = 'and continue to&nbsp;grow';

$_['ru']['speakers-brown-after_blockquote__info'] = 'Неудержимая энергия и&nbsp;емкость формулировок Леса Брауна быстро сделали ему имя на&nbsp;радио, где ему тем временем стало скучно. В&nbsp;начале 80-х спикер переехал из&nbsp;Флориды в&nbsp;штат Огайо, где приступил к&nbsp;работе на&nbsp;радиостанции WVKO Radio.';
$_['en']['speakers-brown-after_blockquote__info'] = 'Les Brown&rsquo;s unstoppable energy quickly made him a&nbsp;big name on&nbsp;the radio. But as&nbsp;usual, he&nbsp;quickly tired of&nbsp;the position and wanted to&nbsp;work somewhere new. In&nbsp;the early 80s, he&nbsp;moved from Florida to&nbsp;Ohio, where he&nbsp;started working at&nbsp;WVKO Radio.';

$_['ru']['speakers-brown-after_blockquote__left'] = 'Этот этап в&nbsp;карьере Брауна помог ему раскрыть свой потенциал оратора и&nbsp;завоевать доверие местных жителей, представителем которых он&nbsp;стал, заняв место в&nbsp;законодательном собрании штата Огайо XXIX&nbsp;созыва. <span class="blockquote__left_blue">За&nbsp;первый год работы в&nbsp;законодательном собрании Браун дал ход самому большому количеству проектов, чем кто-либо до&nbsp;него за&nbsp;всю историю права США.</span>';
$_['en']['speakers-brown-after_blockquote__left'] = 'Brown&rsquo;s new career helped him reach his potential as&nbsp;a&nbsp;speaker and gain the people&rsquo;s trust. He&nbsp;eventually took a&nbsp;seat in&nbsp;the Ohio State Legislature as&nbsp;their representative. <span class="blockquote__left_blue">In&nbsp;his first year, Brown launched more projects than anyone before him in&nbsp;U.S. law history.</span>';

$_['ru']['speakers-brown-after_blockquote__text_1'] = 'Когда мне говорят,';
$_['en']['speakers-brown-after_blockquote__text_1'] = 'When people tell';

$_['ru']['speakers-brown-after_blockquote__text_2'] = 'что у&nbsp;меня мания';
$_['en']['speakers-brown-after_blockquote__text_2'] = 'me&nbsp;that&nbsp;I have delusions';

$_['ru']['speakers-brown-after_blockquote__text_3'] = 'величия,';
$_['en']['speakers-brown-after_blockquote__text_3'] = 'of&nbsp;grandeur,';

$_['ru']['speakers-brown-after_blockquote__text_4'] = 'я&nbsp;всегда спрашиваю:';
$_['en']['speakers-brown-after_blockquote__text_4'] = 'I&nbsp;always ask,';

$_['ru']['speakers-brown-after_blockquote__text_5'] = 'А&nbsp;что в&nbsp;этом';
$_['en']['speakers-brown-after_blockquote__text_5'] = '&laquo;What&rsquo;s wrong';

$_['ru']['speakers-brown-after_blockquote__text_6'] = 'плохого?';
$_['en']['speakers-brown-after_blockquote__text_6'] = 'with that?&raquo;';

$_['ru']['speakers-brown-after_2_blockquote__text_7'] = 'Всегда цельтесь';
$_['en']['speakers-brown-after_2_blockquote__text_7'] = 'Always aim';

$_['ru']['speakers-brown-after_2_blockquote__text_8'] = 'в&nbsp;луну. Если';
$_['en']['speakers-brown-after_2_blockquote__text_8'] = 'for the moon. If&nbsp;you';

$_['ru']['speakers-brown-after_2_blockquote__text_9'] = 'промахнетесь,';
$_['en']['speakers-brown-after_2_blockquote__text_9'] = 'miss,';

$_['ru']['speakers-brown-after_2_blockquote__text_10'] = 'по&nbsp;крайней мере,';
$_['en']['speakers-brown-after_2_blockquote__text_10'] = 'at&nbsp;least';

$_['ru']['speakers-brown-after_2_blockquote__text_11'] = 'зацепите звезды';
$_['en']['speakers-brown-after_2_blockquote__text_11'] = 'you will hit the stars';

$_['ru']['speakers-brown-after_2_blockquote__left'] = 'Талант и&nbsp;способности Леса Брауна находить слова, ставить акценты, коротко и&nbsp;точно формулировать мысли восхищали слушателей и&nbsp;экспертов: в&nbsp;1986 году бывший радиоведущий и&nbsp;политик получил премию Национальной ассоциации спикеров США, в&nbsp;1990 году подтвердил свой статус &laquo;чикагской версией Emmy&raquo; за&nbsp;лучшую публичную мотивационную программу и&nbsp;запустил фандрайзинговую платформу для развития теле- и радиовещания по&nbsp;всей стране. В&nbsp;1992 году попал в&nbsp;список пяти лучших мировых спикеров по&nbsp;версии Toastmasters International.';
$_['en']['speakers-brown-after_2_blockquote__left'] = 'Les Brown&rsquo;s talent for articulating powerful thoughts, impressed listeners, and experts. In&nbsp;1986, the former radio host and politician received the National Association of&nbsp;Speakers USA award. In&nbsp;1990&nbsp;he confirmed his status as&nbsp;a&nbsp;&laquo;Chicago version of&nbsp;the Emmy&raquo; for the best public motivational program. He&nbsp;launched a&nbsp;fundraising platform for the development of&nbsp;television and radio broadcasting throughout the country. In&nbsp;1992, he&nbsp;became one of&nbsp;the Top-5 world speakers, according to&nbsp;Toastmasters International.';

$_['ru']['speakers-brown-after_2_blockquote__left_order'] = 'Успехи и&nbsp;достижения спикера привлекли внимание профессиональных тележурналистов&nbsp;&mdash; и&nbsp;уже осенью 1993 года национальная звезда Лес Браун запустил собственное шоу на&nbsp;телеканале CBS. На&nbsp;протяжении года Браун делился с&nbsp;аудиторией собственным опытом и&nbsp;вдохновлял зрителей сделать шаг к&nbsp;жизни, о&nbsp;которой они мечтают. Впрочем, спустя год шоу закрыли. Зато после завершения телевизионной карьеры Лес Браун основал собственную компанию Les Brown Enterprises Inc., которая объединила все его амбиции и&nbsp;активности.';
$_['en']['speakers-brown-after_2_blockquote__left_order'] = 'His success and achievements attracted attention from professional T.V. journalists. In&nbsp;1993, now a&nbsp;national star, Les Brown, launched his own show on&nbsp;CBS. Throughout the year, Brown shared his own experiences with the audience and inspired viewers to&nbsp;step towards the life they dreamed&nbsp;of. Unfortunately, the show was closed a&nbsp;year later. But after completing his television career, Les Brown founded his own company, Les Brown Enterprises Inc., which combined all his ambitions and experience.';

$_['ru']['speakers-brown-after_2_blockquote__text_12'] = 'Кто-то отдыхает';
$_['en']['speakers-brown-after_2_blockquote__text_12'] = 'Someone can';

$_['ru']['speakers-brown-after_2_blockquote__text_13'] = 'сегодня в&nbsp;тени,';
$_['en']['speakers-brown-after_2_blockquote__text_13'] = 'catch their breath<br>in&nbsp;the shade';

$_['ru']['speakers-brown-after_2_blockquote__text_14'] = 'потому что кто-то';
$_['en']['speakers-brown-after_2_blockquote__text_14'] = 'because someone';

$_['ru']['speakers-brown-after_2_blockquote__text_15'] = 'посадил дерево';
$_['en']['speakers-brown-after_2_blockquote__text_15'] = 'smart once';

$_['ru']['speakers-brown-after_2_blockquote__text_16'] = 'много лет назад';
$_['en']['speakers-brown-after_2_blockquote__text_16'] = 'planted a&nbsp;tree';

$_['ru']['main__brown_date'] = '15&nbsp;августа';
$_['en']['main__brown_date'] = 'August&nbsp;15';

$_['ru']['main__brown_name'] = 'Лесли <span>Браун</span>';
$_['en']['main__brown_name'] = 'Leslie <span>Brown</span>';

$_['ru']['brown-main-headliner__text'] = '
<p>Лесли Браун, первая суперзвезда среди мотивационных ораторов и&nbsp;вдохновителей Америки, бизнес-коуч, мотивационный тренер с&nbsp;30-летним опытом руководства подопечными, в&nbsp;числе которых были лучшие топ-менеджеры и&nbsp;руководители Америки, входившие в&nbsp;список Fortune 500&nbsp;CEOs.</p>
<p>Не&nbsp;имея образования или профессионального опыта, но&nbsp;обладая большими амбициями и&nbsp;верой в&nbsp;себя, Лесли Браун построил собственный личный бренд задолго до&nbsp;возникновения Инстаграма и&nbsp;исполнил американскую мечту, запустив собственное шоу Les Brown Show на&nbsp;телеканале CBS.</p>
';
$_['en']['brown-main-headliner__text'] = '
<p>Les Brown, the first superstar among motivational speakers and inspirers of&nbsp;America, business coach, the motivational coach with 30&nbsp;years of&nbsp;experience in&nbsp;managing wards, including the best top managers and executives of&nbsp;America, included in&nbsp;the Fortune 500&nbsp;CEOs list.</p>
<p>Without education or&nbsp;professional experience, but with great ambition and self-belief, Les Brown built his own personal brand long before Instagram and fulfilled the American dream by&nbsp;launching his own show, &ldquo;The Les Brown Show&rdquo;, on&nbsp;CBS.</p>
';
$_['ru']['brown-main-headliner__description'] = 'В&nbsp;рамках Форума он&nbsp;проведет собственный мастер-класс, расскажет как вера в&nbsp;себя помогает победить цинизм, почему трудное детство&nbsp;&mdash; лучшая отправная точка для роста, как научиться себя прощать, чтобы двигаться вперед.';
$_['en']['brown-main-headliner__description'] = 'As&nbsp;part of&nbsp;the forum, he&nbsp;will hold his own master class for the audience, talk about how self-belief helps to&nbsp;overcome cynicism, why a&nbsp;difficult childhood is&nbsp;the best starting point for growth, how to&nbsp;learn to&nbsp;forgive yourself in&nbsp;order to&nbsp;move forward.';


/* https://synergyglobal.ru/lp/version-norris/ */
$_['ru']['email__norris'] = '';

$_['ru']['logo__norris'] = '
<img src="img/@lp/@version-norris/header/synergy-online.svg" alt="Synergy online. Цифровая платформа">
<span class="header__logo-vtb"><a href="http://vtb.synergy.ru"><img src="https://vtb.synergy.ru/vtb/img/vtb_logo_white.svg" alt="ВТБ - генеральный партнёр"></a></span>
';
$_['en']['logo__norris'] = '
<img src="img/@lp/@version-norris/header/logo-en.svg" alt="icon">
';

$_['ru']['main__norris_name'] = 'ЧАК <br>НОррис';
$_['en']['main__norris_name'] = 'Chuck<br> Norris';

$_['ru']['main__norris_date'] = '12&nbsp;сентября 2020';
$_['en']['main__norris_date'] = 'September 12 2020';

$_['ru']['main__norris_subtitle'] = '<span class="color-red">Рейнджер навсегда: </span><br> Чак Норрис на&nbsp;Synergy <br>Online Forum.';
$_['en']['main__norris_subtitle'] = '<span class="color-red">Ranger Forever: </span><br> Chuck Norris at&nbsp;Synergy<br> Online Forum.';

$_['ru']['main__norris_button'] = 'Зарегистрироваться';
$_['en']['main__norris_button'] = 'Sign Up';

$_['ru']['main__norris_button_2'] = 'Оплатить участие';

$_['ru']['main__norris_banner'] = 'Онлайн мастер-класс';
$_['en']['main__norris_banner'] = 'Online master class';



$_['ru']['about__norris_title'] = '12 сентября на Synergy Online <br>Forum выступит Чак Норрис — <br>мастер восточных боевых <br>искусств, звезда вестернов <br>и боевиков, политический <br>активист, христианский проповедник, филантроп, <br>«Крутой Уокер», человек-мем <br>и тот, кто учил драться самого <br>Брюса Ли.';
$_['en']['about__norris_title'] = 'On September 12,  Synergy Online Forum will feature Chuck Norris - a master of Eastern martial arts, a star of westerns and action movies, a political activist, a Christian preacher, a philanthropist, "Cool Walker", the “meme man” and the one who taught Bruce Lee to fight.';

$_['ru']['about__norris_text'] = 'В&nbsp;рамках Synergy Online Forum спикер расскажет о&nbsp;своей карьере в&nbsp;киноиндустрии, чему его научила американская армия, почему мужчины должны иногда проигрывать, станет&nbsp;ли он&nbsp;президентом Техаса, зачем проводить удар мысленно, прежде чем бить, и&nbsp;правда&nbsp;ли, что Брюса Ли&nbsp;временами подводило чувство юмора.';
$_['en']['about__norris_text'] = 'At Synergy Online Forum, he will talk about his career in the film industry, what the American army taught him, why men should sometimes lose, whether he will become President of Texas, why to make a mental strike before hitting, and whether it is true that Bruce Lee didnt understand humor.';

$_['ru']['about__norris_blockquote_text_1'] = '&laquo;Мне кажется, Господь имеет ко&nbsp;мне некоторую симпатию&raquo;.';
$_['en']['about__norris_blockquote_text_1'] = '&laquo;I think the Lord has some<br> sympathy for me.&raquo;.';

$_['ru']['registration__norris_title'] = 'Зарегистрироваться <br>на&nbsp;онлайн мастер-класс';


$_['ru']['registration__norris_button'] = 'Регистрация';
$_['en']['registration__norris_button'] = 'REGISTER';

$_['ru']['beginning__norris__title'] = 'как всё <br>началось';
$_['en']['beginning__norris__title'] = 'HOW DID IT<br> GET STARTED?';

$_['ru']['beginning__norris__text_1'] = 'Карлос Рэй Норрис (он&nbsp;же Чак Норрис) родился в&nbsp;1940&nbsp;в штате Оклахома, в&nbsp;семье, предками которой были ирландские иммигранты и&nbsp;коренные индейцы племени чероки.';
$_['en']['beginning__norris__text_1'] = 'Carlos Ray Norris (aka Chuck Norris) was born in 1940 in Oklahoma, in a family whose ancestors were Irish immigrants and native Cherokee Indians. ';

$_['ru']['beginning__norris__text_2'] = 'В&nbsp;своей автобиографии &laquo;Всем бедам назло&raquo;, выпущенной в&nbsp;2004 году и&nbsp;ставшей бестселлером The New York Times, актер рассказывает, что родился слабым и&nbsp;&laquo;синюшным&raquo; ребенком. По&nbsp;словам Норриса, он&nbsp;сильно удивил медсестер, выжив при общей слабости, весе 2,5&nbsp;кг и&nbsp;&laquo;задышав как профессионал&raquo;.';
$_['en']['beginning__norris__text_2'] = 'In his autobiography "Against All Odds", released in 2004 and became a New York Times bestseller, the actor says that he was born a weak and "blue" child. According to Norris, he greatly surprised the nurses by surviving with general weakness, weighing 2.5 kg and "breathing like a professional."';

$_['ru']['beginning__norris__text_3'] = 'Норрис проявил характер с&nbsp;рождения&nbsp;&mdash; и&nbsp;ему приходилось повторять этот трюк многократно. Немало сил и&nbsp;терпения потребовало взросление: будущий герой кассовых боевиков вырос в&nbsp;бедной семье, где мать была главой семьи, а&nbsp;также опорой и&nbsp;вдохновением мальчика. По&nbsp;рассказу спикера, он&nbsp;с&nbsp;детства помогал ей&nbsp;обеспечивать базовое питание и&nbsp;аренду, собирая бутылки на&nbsp;улицах.';
$_['en']['beginning__norris__text_3'] = 'Norris showed his character from birth — and he had to repeat this trick many times. His growing up required a lot of effort and patience: the future hero of box office action movies grew up in a poor family, where the mother was the head of the family, as well as the support and inspiration of the boy. According to him, since childhood, he helped her provide basic food and rent, collecting bottles on the streets.';

$_['ru']['beginning__norris__blockquote_description'] = '&laquo;Начать можно откуда угодно и&nbsp;с&nbsp;чего угодно. Возьмите, к&nbsp;примеру, меня. Я&nbsp;рос в&nbsp;нищей семье, у&nbsp;меня не&nbsp;было отца, мы&nbsp;сидели на&nbsp;пособии. Но&nbsp;работа, работа, работа, жертва, жертва, жертва&nbsp;&mdash; и&nbsp;вот я&nbsp;перед вами: успешный человек, который жал руку Брюсу&nbsp;Ли&raquo;.';
$_['en']['beginning__norris__blockquote_description'] = '&laquo;You can start from anywhere and with anything. Look at me, for example. I grew up in a poor family, I didnt have a father, we were on the dole. But work, work, work, sacrifice, sacrifice, sacrifice — and here I am: a successful man who shook hands with Bruce Lee.&raquo;.';

$_['ru']['reputation__norris_title'] = 'МАСТЕР <br>ВОПРЕКИ';
$_['en']['reputation__norris_title'] = 'AGAINST<br> ALL ODDS';

$_['ru']['reputation__norris_text_box-1'] = 'Так продолжалось до&nbsp;тех пор, пока в&nbsp;1958 году Карлос Рэй Норрис не&nbsp;поступил на&nbsp;службу в&nbsp;ВВС США. Сначала юноша служил в&nbsp;Техасе, потом в&nbsp;Аризоне, а&nbsp;затем отправился в&nbsp;Осан, на&nbsp;американскую базу в&nbsp;Корее. (Там он&nbsp;и&nbsp;обрел свой позывной и&nbsp;заодно творческий псевдоним&nbsp;&mdash; Чак (короткая форма имени Чарльз, а&nbsp;Чарльз&nbsp;&mdash; английская версия испанского имени Карлос). Хотя Норрис неоднократно и&nbsp;публично благодарил армию США за&nbsp;приобретенные навыки и&nbsp;свойства характера, поначалу, как он&nbsp;сам признается, там было не&nbsp;очень интересно.';
$_['en']['reputation__norris_text_box-1'] = "This continued until Carlos Ray Norris joined the United States air force in 1958. First, the young man served in Texas, then in Arizona, and then went to Osan, to the American base in Korea. (That s where he got his call sign and creative alias - Chuck (short form of the name Charles, and Charles is the English version of the Spanish name Carlos). Although Norris has repeatedly and publicly thanked the US army for his skills and character, at first, as he admits, his military service was not very interesting:";

$_['ru']['reputation__norris_blockquote_text_1'] = '&laquo;На&nbsp;базе ВВС Осан солдаты могли использовать свое свободное время одним из&nbsp;трех способов: напиваться, заниматься образованием или изучать боевые искусства. Пить я&nbsp;никогда не&nbsp;любил, академические занятия не&nbsp;были моей сильной стороной, поэтому изучение боевых искусств показалось мне наилучшим времяпрепровождением&raquo;.';
$_['en']['reputation__norris_blockquote_text_1'] = "&laquo;At Osan air force base, soldiers could use their free time in one of three ways: get drunk, study education, or study martial arts. I never liked to drink, and academic studies were not my strong point, so studying martial arts seemed to me the best way to spend time.&raquo;.";

$_['ru']['reputation__norris_blockquote_text_2'] = '&laquo;Многие люди хнычут: &bdquo;Я&nbsp;не&nbsp;такой успешный, потому что мне никак не&nbsp;даются все эти броски&ldquo;. <img data-src="img/@lp/@version-norris/reputation/img_1.png" class="reputation__text-img lazy"> Блин, пацаны, просто отрабатывайте броски и&nbsp;все. Чего хныкать-то?&raquo;';
$_['en']['reputation__norris_blockquote_text_2'] = '&laquo;A lot of people cry, "I am not so successful because I cant get all these throws.&ldquo;. <img data-src="img/@lp/@version-norris/reputation/img_1.png" class="reputation__text-img lazy"> Damn, guys, just practice your throws and thats all. Stop crying, ok?&raquo;';

$_['ru']['reputation__norris_content_text_1'] = 'Норрис начал с&nbsp;дзюдо, потому что это было единственной восточной боевой практикой, о&nbsp;которой он&nbsp;слышал. Познакомиться с&nbsp;новыми пришлось из-за перелома ключицы: на&nbsp;одной из&nbsp;первых тренировок актер пропустил удар и&nbsp;отложил занятия до&nbsp;выздоровления. К&nbsp;дзюдо Чак Норрис вернулся несколько позже: как описывает актер в&nbsp;своей книге &laquo;Всем бедам назло&raquo;, во&nbsp;время прогулки по&nbsp;местной деревне он&nbsp;наткнулся на&nbsp;группу бойцов тансудо&nbsp;&mdash; исконно корейского боевого искусства. О&nbsp;нем американец на&nbsp;тот момент ничего не&nbsp;знал и&nbsp;попросил мастера допустить его к&nbsp;занятиям, пусть и&nbsp;с&nbsp;незажившей рукой.';
$_['en']['reputation__norris_content_text_1'] = 'Norris started with judo because it was the only Eastern martial practice he had heard of. I had to meet new people because of a broken collarbone: at one of the first training sessions, the actor missed a stroke and postponed his classes until recovery. Chuck Norris returned to judo a little later: as he described in the book "Against All Odds", while walking through a local village, he came across a group of fighters of tansudo — native Korean martial art. The American did not know anything about it at that time and asked the master to allow him to study, even with an unhealed hand.';

$_['ru']['reputation__norris_content_text_2'] = 'Норрис немедленно приступил к&nbsp;занятиям, усердно &laquo;ломал костяшки&raquo;, чем спустя месяцы завоевал уважение других членов группы, и&nbsp;вскоре был готов к&nbsp;сдаче экзаменов. Несмотря на&nbsp;неудачи и&nbsp;конфузы, упорство молодого человека принесло результаты: к&nbsp;окончанию службы в&nbsp;ВВС он&nbsp;заполучил черный пояс первой степени по&nbsp;тансудо, коричневый пояс третьей ступени по&nbsp;дзюдо и&nbsp;звание авиаспециалиста первого класса в&nbsp;придачу.';
$_['en']['reputation__norris_content_text_2'] = 'Norris immediately began to study "breaking knuckles" assiduously, won the respect of other members of the group months later, and prepared to pass the exams. Despite the setbacks and embarrassments, the young man s perseverance brought results: by the end of his service in the air force, he had obtained a first-degree black belt in tansudo, a third-degree brown belt in judo, and the title of first-class aviation specialist.';


$_['ru']['pay__norris_title'] = 'ЗВЁЗДНЫЙ ПУТЬ: <br>ПЕРВЫЕ ШАГИ';
$_['en']['pay__norris_title'] = 'PATH OF THE STAR: <br>FIRST STEPS';

$_['ru']['pay__norris_pretitle'] = 'Вернувшись домой, перед солдатом встал вопрос, чем заняться&nbsp;&mdash; перебирать бумаги в&nbsp;отделе документации <span class="text-label text-label_black"><a href="#popup-northrop" data-fancybox>&laquo;Нортроп&nbsp;Эйркрафт&raquo;</a></span> или использовать приобретенные навыки.';
$_['en']['pay__norris_pretitle'] = 'Upon his return to home, he faced with the question of what to do - sort through papers in the documentation department of <span class="text-label text-label_black"><a href="#popup-northrop" data-fancybox>&laquo;Northrop Aircraft&raquo;</a></span>, or use the acquired skills.';



$_['ru']['pay__norris_subtitle'] = 'Сделав выбор в&nbsp;пользу второго варианта, мастер открыл публичную школу восточных боевых искусств&nbsp;&mdash; первую в&nbsp;штате и&nbsp;в&nbsp;стране&nbsp;&mdash; чем немедленно создал проблемы на&nbsp;дорогах: <span class="color-red">водители создавали пробки из-за того, что с&nbsp;удивлением засматривались на&nbsp;вывеску.</span>';
$_['en']['pay__norris_subtitle'] = 'Having chosen the second option, the master opened a public school of eastern martial arts — the first in the state and in the country - which immediately created problems on the roads: <span class="color-red">drivers created traffic jams, because they stared at the sign in surprise.</span>';

$_['ru']['pay__norris_blockquote_text1'] = '&laquo;Я&nbsp;мало что помню из&nbsp;первого боя (да&nbsp;и&nbsp;из&nbsp;других тоже), за&nbsp;исключением того, что я&nbsp;победил&raquo;.';
$_['en']['pay__norris_blockquote_text1'] = '&laquo;I dont remember much of the first fight (or any of the others), except that I won.&raquo;.';

$_['ru']['pay__norris_text_1'] = 'Набрав первую группу из&nbsp;десятка человек, Чак Норрис решил, что пора монетизировать умения&nbsp;&mdash; и&nbsp;принял решение развивать бизнес, участвуя в&nbsp;профессиональных соревнованиях с&nbsp;лучшими мастерами боя. Тогда Норрис сосредоточился на&nbsp;каратэ.';
$_['en']['pay__norris_text_1'] = 'After recruiting the first group of ten people, Chuck Norris decided that it was time to monetize skills — and decided to develop the business by participating in professional competitions with the best masters. Then, Norris has focused on karate.';

$_['ru']['pay__norris_text_2'] = 'Подготовка, соревнования, уверенные победы, проигрыши между делом и&nbsp;новые бои принесли плоды: по&nbsp;словам Норриса, он&nbsp;дополнил свою практику сотнями элементов из&nbsp;смежных направлений&nbsp;&mdash; дзюдо, джиу-джитсу, ножевой бой, сито-рю, хапкидо и&nbsp;т.д., которым его научили лучшие в&nbsp;своем деле мастера, от&nbsp;чемпиона Японии по&nbsp;каратэ 1963 года Фумио Демуры до&nbsp;отца американского каратэ-кенпо Эда Паркера.';
$_['en']['pay__norris_text_2'] = 'Training, competitions, confident victories, sometimes losses and new fights made a result: according to Norris, he supplemented his practice with hundreds of elements from related areas — judo, jujitsu, knife fighting, sito-ryu, hapkido, etc., which he was taught by the best masters in their field, from Fumio Demura, the Japanese karate champion of 1963, to Ed Parker, the father of American karate-kenpo.';


$_['ru']['lee__norris_title'] = 'работа <br>с&nbsp;брюсом&nbsp;ли';
$_['en']['lee__norris_title'] = 'WORK<br> WITH BRUCE LEE';

$_['ru']['lee__norris_text_1'] = 'Вложения и&nbsp;труды не&nbsp;прошли даром: в&nbsp;1967 году Чак Норрис завоевал звание абсолютного чемпиона на&nbsp;Всеамериканском чемпионате по&nbsp;каратэ, одержав победу над чемпионом Японии в&nbsp;среднем весе Хироши Накамура. Тогда, после боя, и&nbsp;состоялось историческое знакомство Чака с&nbsp;состоявшейся звездой телеэкранов, реформатора боевых техник и&nbsp;основоположника стиля Джит Кун-До&nbsp;&mdash; <span class="text-label text-label_screen-sm"><a class="not-active" href="#popup-lee" data-fancybox>Брюсом&nbsp;Ли</a></span>.';
$_['en']['lee__norris_text_1'] = 'The investment and effort were not in vain: in 1967, Chuck Norris won the title of absolute champion at the all-American karate championship, defeating the Japanese Middleweight champion Hiroshi Nakamura. After the fight, Chuck met the famous TV star, the reformer of martial techniques and the founder of the Jeet Kune Do style &nbsp;&mdash; <span class="text-label text-label_screen-sm"><a class="not-active" href="#popup-lee" data-fancybox>Bruce Lee</a></span>.';

$_['ru']['lee__norris_text_2'] = 'Мужчины быстро нашли общий язык, и&nbsp;вскоре Норрис обучил нового друга высоким ударам из&nbsp;тэквондо, которые тому давались хуже. Впрочем, Чака расстраивало не&nbsp;это: по&nbsp;признанию бойца, Брюс Ли&nbsp;как будто никогда не&nbsp;покидал ринга, &laquo;не&nbsp;знал, что такое расслабляться&raquo;, да&nbsp;и&nbsp;с&nbsp;шутками не&nbsp;всегда было гладко. К&nbsp;примеру, Чак Норрис описывал эпизод 1972&nbsp;года, когда Брюс Ли&nbsp;предложил ему особый киносценарий:';
$_['en']['lee__norris_text_2'] = 'They quickly found a common language, and soon Norris taught his new friend high kicks from Taekwondo, which were worse for him. However, this was not what upset Chuck: according to the fighter, Bruce Lee never seemed to leave the ring, "he did not know what it was - to relax", and jokes were not always smooth. For example, Chuck Norris described an episode in 1972 when Bruce Lee offered him a special screenplay:';

$_['ru']['lee__norris_text_3'] = 'Впрочем, именно Брюс Ли&nbsp;помог американскому чемпиону сделать первые шаги в&nbsp;кино: в&nbsp;1968&nbsp;году, во&nbsp;время Международного чемпионата по&nbsp;каратэ, Ли&nbsp;позвонил Норрису и&nbsp;пригласил его поучаствовать в&nbsp;съемках фильма &laquo;Разрушители&raquo;. Чак согласился&nbsp;и, по&nbsp;собственному признанию, неудачно сыграл доверенную эпизодическую роль: &laquo;Свои слова &bdquo;Позвольте, мистер Хелм&ldquo; я&nbsp;произнес шепотом&raquo;,&nbsp;&mdash; однако вскоре Брюс Ли&nbsp;пригласил его к&nbsp;участию в&nbsp;его собственном фильме &laquo;Путь дракона&raquo;, в&nbsp;котором и&nbsp;состоялся исторический поединок между двумя крупнейшими фигурами в&nbsp;современной истории единоборств. ';
$_['en']['lee__norris_text_3'] = 'However, it was Bruce Lee who helped the American champion take his first steps in cinema: in 1968, during the International karate championship, Lee called Norris and invited him to participate in the shooting of the film "The Wrecking Crew". Chuck agreed and, by his own admission, unsuccessfully played a trusted cameo role: "I whispered my words "Can I, Mr. Helm?" - but soon Bruce Lee invited him to participate in his own film "Way of the Dragon", in which in a historical duel between two of the largest figures in the modern history of martial arts took place.';

$_['ru']['lee__norris_text_4'] = 'Так Чак Норрис вошел в&nbsp;амплуа &laquo;нехорошего человека&raquo;. Даже друзья актера и&nbsp;мастера утверждали, что &laquo;по&nbsp;его глазам видно, что он&nbsp;готов убить&raquo;,&nbsp;&mdash; но&nbsp;Норрис стремился к&nbsp;другому развитию событий:';
$_['en']['lee__norris_text_4'] = 'Thus, Chuck Norris entered the role of "Bad man". Even friends of the actor and the master claimed that "You can see in his eyes that he is ready to kill" - but Norris sought a different development:';

$_['ru']['lee__norris_blockquote_text_1'] = '&laquo;Чувак,&nbsp;&mdash; сказал Брюс. &mdash;&nbsp;Я&nbsp;только что сделал в&nbsp;Гонконге два фильма, я&nbsp;теперь чертова шишка. Знаешь, я&nbsp;хочу снять такое кино, о&nbsp;котором будут говорить все. И&nbsp;я&nbsp;хочу, чтобы в&nbsp;этом фильме мы&nbsp;были вместе. И&nbsp;чтобы мы&nbsp;дрались&raquo;. Я&nbsp;спросил: &laquo;А&nbsp;кто должен будет победить, чувак?&raquo; Он&nbsp;сказал: &laquo;Конечно, я. Потому что я&nbsp;&mdash; звезда&raquo;. Тогда я&nbsp;рассмеялся и&nbsp;сказал: &laquo;Ты&nbsp;что хочешь победить меня, чемпиона мира по&nbsp;каратэ?&raquo; Он&nbsp;сказал: &laquo;Да&raquo;. Чувство юмора все&nbsp;же иногда подводило его&quot;.';
$_['en']['lee__norris_blockquote_text_1'] = '&laquo;Dude,&nbsp;&mdash; Bruce said. — I ve just made two movies in Hong Kong, and I am a damn big shot now. You know, I want to make a movie that everyone will talk about. And I want us to be together in this movie. And fight." I said, "Who s going to win, man?" He said: "Of course I am. Because I am a star." Then I laughed and said: "Do you want to beat the world karate champion?" He said: "Yes". His sense of humor still sometimes failed him.&quot;.';

$_['ru']['lee__norris_blockquote_text_2'] = '&laquo;В&nbsp;детстве, каждый раз выходя из&nbsp;кино, я&nbsp;ободрялся верой в&nbsp;то, что положительные, хорошие люди действительно существуют. Я&nbsp;решил, что когда вырасту, то&nbsp;стану таким&nbsp;же, как они. Эти герои-ковбои в&nbsp;исполнении Джона Уэйна, Джина Отри и&nbsp;Роя Роджерса много значили для мальчика, который так нуждался в&nbsp;хорошем мужском примере для подражания. В&nbsp;своих поступках герои фильмов руководствовались &bdquo;законами Дикого Запада&ldquo;&nbsp;&mdash; преданностью,  дружбой и&nbsp;честностью&raquo;.';
$_['en']['lee__norris_blockquote_text_2'] = '&laquo;As a child, every time I left the cinema, I was encouraged by the belief that positive, good people really exist. I decided that when I grew up, I would be like them. These cowboys heroes played by John Wayne, Gene Autry, and Roy Rogers meant a lot to a boy who needed a good male role model. In their actions, they were guided by the "Laws of the Wild West" - loyalty, friendship and honesty.';

$_['ru']['lee__norris_signature'] = 'Брюс Ли&nbsp;&mdash; гонконгский и&nbsp;американский киноактёр, режиссёр, сценарист, продюсер, популяризатор и&nbsp;реформатор в&nbsp;области китайских боевых искусств, мастер боевых искусств, постановщик боевых сцен, основоположник стиля Джит Кун-До.';
$_['en']['lee__norris_signature'] = 'BRUCE LEE - HONG KONG AND AMERICAN FILM ACTOR, DIRECTOR, SCREENWRITER, PRODUCER, POPULARIZER AND REFORMER IN THE FIELD OF CHINESE MARTIAL ARTS, MASTER OF MARTIAL ARTS, DIRECTOR OF FIGHT SCENES, FOUNDER OF JEET KUN-DO.';


$_['ru']['start__norris_title'] = 'НОВЫЙ СТАРТ <br>В&nbsp;КИНО';
$_['en']['start__norris_title'] = 'NEW START<br> IN THE CINEMA';

$_['ru']['start__norris_text_1'] = 'Тем важнее, что сосредоточиться не&nbsp;на&nbsp;развитии школы боевых искусств и&nbsp;не&nbsp;на&nbsp;профессиональных соревнованиях Чака убедил культовый актер <span class="text-label text-label_screen-sm"><a class="not-active" href="#popup-mcqueen" data-fancybox="">Стив&nbsp;Маккуин</a></span>, исполнитель главной роли в&nbsp;вестерне &laquo;Разыскивается: живый или мертвый&raquo; и&nbsp;постоянный посетитель учебного заведения Норриса.';
$_['en']['start__norris_text_1'] = 'Iconic actor <span class="text-label text-label_screen-sm"><a class="not-active" href="#popup-mcqueen" data-fancybox="">Steve McQueen</a></span>, starring in "Wanted: Dead or Alive", and a regular at Norris s school, convinced Chuck to focus not on martial arts school development or professional competition.';

$_['ru']['start__norris_text_2'] = 'К&nbsp;тому моменту бизнес каратиста был в&nbsp;упадке, а&nbsp;Чак пережил несколько тяжелых личных событий (гибель брата Уиланда во&nbsp;Вьетнаме и&nbsp;смерть Брюса Ли). Поначалу боец отверг предложение Маккуина заняться кинокарьерой, но&nbsp;был побежден своим&nbsp;же оружием: Стив напомнил коллеге о&nbsp;том, как тот учил его &laquo;мысленно представлять желаемый результат и&nbsp;искать пути, как его достичь&raquo;. Это убедило Чака Норриса взяться за&nbsp;новое образование и&nbsp;попробовать что-то новое.';
$_['en']['start__norris_text_2'] = 'By that time, the karate business was in decline, and Chuck had endured several difficult personal events (the death of his brother Wheeland in Vietnam and the death of Bruce Lee). At first, the fighter rejected McQueen s offer to pursue a film career, but was defeated by his own weapon: Steve reminded his colleague of how he had been taught to "mentally imagine the desired result and look for ways to achieve it." This convinced Chuck Norris to take up a new education and try something new.';

$_['ru']['start__norris_text_3'] = 'Так Чак попал на&nbsp;курсы знаменитой американского преподавательнице актерского мастерства Эстель Хармон, которая научила его двигаться как актера, а&nbsp;не&nbsp;как спортсмена&nbsp;&mdash; по&nbsp;замечанию Хармон, Норрис был &laquo;исключительно негибким&raquo;. Несмотря на&nbsp;то, что курсы каратист вскоре забросил, он&nbsp;уже решил, что станет кинозвездой; к&nbsp;тому&nbsp;же, заслуженные звания и&nbsp;награды давали ход его собственным идеям.';
$_['en']['start__norris_text_3'] = 'So Chuck got into the courses of the famous American acting teacher Estelle Harmon, who taught him to move as an actor, not as an athlete - according to Harmon, Norris was "exceptionally inflexible". Despite the fact that the karate courses were soon abandoned, he had already decided that he would become a movie star; in addition, the well-deserved titles and awards gave rise to his own ideas.';

$_['ru']['start__norris_text_4'] = 'В&nbsp;середине 70-х Норрис совместно с&nbsp;коллегами по&nbsp;рингу набросал первый собственный сценарий фильма под рабочим названием &laquo;Хорошие парни носят черное&raquo;, затем принял предложение от&nbsp;китайского режиссера Ло&nbsp;Вэя сняться в&nbsp;малобюджетном фильме &laquo;Желтолицый тигр&raquo;, сотрудничал с&nbsp;небольшими независимыми студиями&nbsp;&mdash; правда, результаты его не&nbsp;радовали. Вот какие эмоции актер испытал при первом просмотре фильмы &laquo;Ученики&nbsp;&mdash; учителя&raquo;, в&nbsp;котором Чак Норрис отыграл небольшой эпизод:';
$_['en']['start__norris_text_4'] = 'In the mid-70s, Norris, along with colleagues in the ring, sketched the first own script for a film under the working title "Good Guys Wear Black", then accepted an offer from Chinese Director Lo Wei to star in a low-budget film "Yellow-Faced Tiger", collaborated with small independent studios - however, the results did not please him. Here is what emotions the actor experienced when first viewing the film "The Student Teachers", in which Chuck Norris played a small episode: ';

$_['ru']['start__norris_blockquote_text_1'] = '&laquo;Если ты&nbsp;хочешь добиться чего-то в&nbsp;этой жизни, нельзя просто сидеть и&nbsp;ждать, когда это случится. Нужно&nbsp;же что-то делать! Мой жизненный опыт говорит о&nbsp;том, что если просто сидеть, то&nbsp;ничего не&nbsp;произойдет&raquo;.';
$_['en']['start__norris_blockquote_text_1'] = '&laquo;If you want to achieve something in this life, you cant just sit and wait for it to happen. We must do something! My experience tells that if you just sit, nothing will happen&raquo;.';

$_['ru']['start__norris_blockquote_text_2'] = '&laquo;Наконец дошла очередь до&nbsp;нашей сцены, где меня показали крупным планом. &bdquo;Только не&nbsp;это! Лучше&nbsp;бы я&nbsp;вообще не&nbsp;снимался в&nbsp;этом фильме!&ldquo;&nbsp;&mdash; подумал&nbsp;я&raquo;.';
$_['en']['start__norris_blockquote_text_2'] = '&laquo;Finally it was the turn of my scene, where I was shown a close-up. "Anything but this! I wish I hadnt been in this movie at all!"  I thought&raquo;.';

$_['ru']['start__norris_signature'] = 'Терренс Стивен Маккуин&nbsp;&mdash; американский киноактёр, авто- и&nbsp;мотогонщик. В&nbsp;1995 году британский журнал Empire поместил Стива МакКуина в&nbsp;список 100 самых сексуальных актеров, а&nbsp;в&nbsp;1997-м&nbsp;&mdash; в&nbsp;список 100 самый великих звезд за&nbsp;всю историю кино.';
$_['en']['start__norris_signature'] = 'TERRENCE STEVEN MCQUEEN - AMERICAN FILM ACTOR, CAR AND MOTOR RUNNER. IN 1995, THE BRITISH MAGAZINE EMPIRE PLACED STEVE MACQUEIN IN THE LIST OF THE 100 MOST SEXUAL ACTORS, AND IN 1997 - IN THE LIST OF THE 100 GREATEST MOVIE STARS IN THE HISTORY OF CINEMA.';


$_['ru']['what-now__norris_title'] = 'ЧАК СТАНОВИТСЯ ЗВЕЗДОЙ';
$_['en']['what-now__norris_title'] = 'CHUCK BECAMES<br> A SUPER STAR';

$_['ru']['what-now__norris_pretitle'] = 'Впрочем, уже в&nbsp;1977 году Норрису удалось убедить продюсеров и&nbsp;инвесторов проспонсировать съемки его первого амбициозного кинопроекта &mdash;';
$_['en']['what-now__norris_pretitle'] = 'However, in 1977, Norris managed to convince producers and investors to sponsor the shooting of his first ambitious film project - &mdash;';

$_['ru']['what-now__norris_subtitle'] = 'и&nbsp;в&nbsp;1978 году на&nbsp;экраны вышел фильм &laquo;Хорошие парни ходят в&nbsp;черном&raquo;, режиссером которого выступил Тед Пост.<br><span class="color-red">Картина с&nbsp;успехом прошла в&nbsp;кинотеатрах США и&nbsp;вдохновила мастера на&nbsp;запуск новых проектов.</span>';
$_['en']['what-now__norris_subtitle'] = 'and in 1978, the film "Good Guys Wear Black", directed by Ted Post, was released. <br><span class="color-red">The film was successfully released in US cinemas and inspired the master to launch new projects.</span>';

$_['ru']['what-now__norris_text_1'] = 'Фильмография Чака Норриса включает 40&nbsp;проектов, в&nbsp;которых он&nbsp;принимал участие как сценарист, продюсер, режиссер, исполнитель ролей первого и&nbsp;второго плана. Однако ключевыми работами мастера стали известные, пожалуй, каждому сериал &laquo;Крутой Уокер: Правосудие по-техасски&raquo;, выпускаемый с&nbsp;1993 по&nbsp;2001&nbsp;год, и&nbsp;серия боевиков &laquo;Крутой Уокер&raquo;, которая сделала Чака Норриса международной кинозвездой. Так Чак Норрис стал, кем хотел,&nbsp;&mdash; &laquo;единственным положительным героем&nbsp;&mdash; киношным ковбоем&raquo; , за&nbsp;подвигами которых он&nbsp;наблюдал на&nbsp;экране в&nbsp;детстве.';
$_['en']['what-now__norris_text_1'] = 'The filmography of Chuck Norris includes 40 projects in which he participated as a writer, producer, Director, actor of first and second plan roles. However, the key works of the master became known, perhaps, to everyone, the TV series "Cool Walker: Justice in Texas", produced from 1993 to 2001, and the action series "Cool Walker", which made Chuck Norris an international movie star. So, Chuck Norris became what he wanted — "the only positive character - a movie cowboy", whose exploits he watched on the screen as a child.';

$_['ru']['what-now__norris_text_2'] = 'Эту роль актер исполняет не&nbsp;только на&nbsp;экране. Чак&nbsp;&mdash; убежденный христианин: в&nbsp;1999 году он&nbsp;выпустил серию книг &laquo;Всадники правосудия&raquo;, в&nbsp;которых автор оперирует отсылками к&nbsp;Библии и&nbsp;призывает молодых людей отказаться от&nbsp;употребления наркотиков.';
$_['en']['what-now__norris_text_2'] = 'He perform this role not only on the screen. Chuck is a committed Christian: in 1999, he published a series of books, "The Justice Riders", in which the author uses references to the Bible and encourages young people to stop using drugs. ';

$_['ru']['what-now__norris_text_3'] = 'Ту&nbsp;же цель он&nbsp;преследует и&nbsp;как филантроп: в&nbsp;1990 году актер совместно с&nbsp;женой Джиной О&rsquo;Келли основал фонд поддержки молодых людей Kickstart Kids, деятельность которого сосредоточена на&nbsp;популяризации боевых искусств среди молодежи, а&nbsp;также реабилитации подростков, оказавшихся в&nbsp;трудном жизненном положении.';
$_['en']['what-now__norris_text_3'] = 'He also has the same goal as a philanthropist: in 1990, the actor together with his wife Gina O`Kelly founded the Kickstart Kids Foundation, which focuses on promoting martial arts among young people, as well as rehabilitation for teenagers who find themselves in difficult situations.';

$_['ru']['what-now__norris_text_4'] = 'Как истинный техасец, Чак Норрис много лет активно поддерживает Республиканскую партию США и&nbsp;в&nbsp;частности &laquo;Техасское националистическое движение США&raquo;, которое выступает за&nbsp;самоопределение штата и&nbsp;собственную диктатуру. В&nbsp;2009 году актер поделился убеждением, что не&nbsp;против занять пост президента штата, добавив, что &laquo;потребность в&nbsp;этом может проявиться намного быстрее, чем мы&nbsp;сейчас считаем&raquo;. Кажется, все верно: если следовать интернет-мемам &laquo;Факты о&nbsp;Чаке Норрисе&raquo;, &laquo;вопреки общепринятому мнению, в&nbsp;Америке не&nbsp;демократия, а&nbsp;Чактатура&raquo;.';
$_['en']['what-now__norris_text_4'] = 'As a true Texan, Chuck Norris has been actively supporting the Republican party of the United States for many years, and in particular the "Texas Nationalist Movement of the United States", which stands for self-determination of the state and its own dictatorship. In 2009, the actor shared his belief that he would not mind taking the post of state President, adding that "the need for this may manifest itself much faster than we currently believe." It seems that everything is true: if you follow the Internet memes "Facts about Chuck Norris", "contrary to popular belief, America is not a democracy, but a Chactature."';

$_['ru']['what-now__norris_text_5'] = 'С&nbsp;2012 года Чак Норрис прекратил публичную деятельность в&nbsp;связи с&nbsp;тяжелым состоянием жены Джины О&rsquo;Келли, вызванном побочными эффектами от&nbsp;контрастного вещества, введенного для проведения МРТ-обследования.';
$_['en']['what-now__norris_text_5'] = 'Since 2012, Chuck Norris has stopped public activities due to the serious condition of his wife Gina O`Kelly, caused by side effects from a contrast agent administered for an MRI examination.';



$_['ru']['comingsoon__norris_title'] = 'ЧТО БУДЕТ <br>СОВСЕМ СКОРО';
$_['en']['comingsoon__norris_title'] = 'WHAT WILL <br>HAPPEN NEXT';

$_['ru']['comingsoon__norris_text_1'] = '12&nbsp;сентября Чак Норрис впервые за&nbsp;долгое время выйдет на&nbsp;связь с&nbsp;поклонниками и&nbsp;зрителями Synergy Online Forum, чтобы поделиться новостями, рассказать о&nbsp;том, скучает&nbsp;ли он&nbsp;по&nbsp;съемкам и&nbsp;большому кино, правда&nbsp;ли, что в&nbsp;детстве он&nbsp;был готов получать плохие оценки, только&nbsp;бы не&nbsp;выступать на&nbsp;публике, каким приемам научил его Брюс Ли&nbsp;при первом&nbsp;же знакомстве, какие техники он&nbsp;применяет, чтобы оставаться неудержимым, и&nbsp;правда&nbsp;ли, что он&nbsp;и&nbsp;Арнольд Шварценеггер&nbsp;&mdash; братья по&nbsp;духу. (Спойлер: правда!)';
$_['en']['comingsoon__norris_text_1'] = 'On September 12, for the first time in a long time, Chuck Norris will get in touch with fans and viewers of Synergy Online Forum to share news, tell them whether he misses shooting and big movies, whether it is true that as a child he was ready to get bad grades, just not to speak in public, what techniques Bruce Lee taught him when they first met, what techniques he uses to remain unstoppable, and whether it is true that he and Arnold Schwarzenegger are brothers in spirit. (Spoiler: the truth!)';

$_['ru']['comingsoon__norris_blockquote_text'] = '&laquo;Пару раз я&nbsp;разговаривал со&nbsp;Шварценеггером. Удивительно, но&nbsp;мы&nbsp;мыслим практически одинаково. Наш разговор, наверное, был самым скучным разговором на&nbsp;свете. &laquo;Вот именно, Чак&raquo;. &laquo;Совершенно верно, Арни&raquo;.';
$_['en']['comingsoon__norris_blockquote_text'] = '&laquo;I spoke with Schwarzenegger a couple of times. Surprisingly, we think almost the same way. Our conversation was probably the most boring conversation in the world. "That`s right, Chuck." "That`s right, Arnie&raquo;.';

$_['ru']['comingsoon__norris_subtitle'] = 'Присоединяйтесь <br>к&nbsp;Synergy Online Forum&nbsp;&mdash; <br>подключайтесь к&nbsp;трансляции!';
$_['en']['comingsoon__norris_subtitle'] = 'Join <br>Synergy Online Forum — <br>connect to the broadcast!';


$_['ru']['popup-pay__text'] = 'Нортроп Корпорейшн (Northrop Corporation)&nbsp;&mdash; американская авиастроительная компания, существовавшая с&nbsp;1939 по&nbsp;1994&nbsp;год. После службы в&nbsp;армии, чак устроился в&nbsp;эту компанию простым клерком.&nbsp;он&nbsp;проработал там шесть лет, всё это время параллельно участвуя в&nbsp;любительских турнирах по&nbsp;карате.';
$_['en']['popup-pay__text'] = 'Northrop Corporation was an American aircraft manufacturer that existed from 1939 to 1994. Chuck got a job at this company as a simple clerk after his service in the army. He worked there for six years, simultaneously participating in Amateur karate tournaments.';


/* https://synergyglobal.ru/lp/version-kotler/ */

$_['ru']['email__kotler'] = '';
$_['en']['email__kotler'] = 'onlineforum@synergyglobal.com';
$_['ru']['logo__kotler'] = '
<div class="header__logo-1"><a href="http://vtb.synergy.ru"><img src="https://vtb.synergy.ru/vtb/img/vtb_logo_white.svg" alt="icon"></a></div>
<div class="header__logo-line"></div>
<div class="header__logo-2"><img src="img/@lp/@version-kotler/header/synergy-online.svg" alt="icon"></div>
';
$_['en']['logo__kotler'] = '
<div class="header__logo-2"><img src="img/@lp/@version-kotler/header/logo-en.svg" alt="icon"></div>
';
$_['ru']['main__kotler_name'] = 'Филип <br>Котлер';
$_['en']['main__kotler_name'] = 'Philip <br>Kotler';
$_['ru']['main__kotler_date'] = '';
$_['ru']['main__kotler_banner'] = 'Онлайн мастер-класс<br>СМОТРИТЕ БЕСПЛАТНО&nbsp;НА<br>ПЛАТФОРМЕ SYNERGY.ONLINE';
$_['en']['main__kotler_banner'] = 'Online master class';
$_['en']['main__kotler_date'] = 'August&nbsp;29';
$_['ru']['main__kotler_subtitle'] = '<span class="color-red">&laquo;Отец маркетинга&raquo; Филип Котлер на&nbsp;Synergy Online Forum.</span><br> Мастер-класс маркетолога, научившего компании видеть в&nbsp;покупателе человека';
$_['en']['main__kotler_subtitle'] = '<span class="color-red">&laquo;Father of&nbsp;Marketing&raquo; Philip Kotler at&nbsp;Synergy Online Forum.</span><br> Master-Class of&nbsp;a&nbsp;Marketer Who Taught Companies to&nbsp;See a&nbsp;Person in&nbsp;a&nbsp;Customer';
$_['ru']['main__kotler_button'] = 'СМОТРЕТЬ БЕСПЛАТНО';
$_['en']['main__kotler_button'] = 'SIGN UP';

$_['ru']['about__kotler_title'] = 'ОНЛАЙН-МАСТЕР-КЛАСС ВСЕМИРНО ИЗВЕСТНОГО ЭКСПЕРТА В ОБЛАСТИ ЭКОНОМИКИ И МАРКЕТИНГА, ПОЧЕТНОГО  ПРОФЕССОРА УНИВЕРСИТЕТОВ ЕВРОПЫ И США, АВТОРА БОЛЕЕ 80 УЧЕБНИКОВ И КНИГ, ПОПУЛЯРИЗАТОРА ЗНАМЕНИТОЙ ТЕОРИИ 4P, БИЗНЕС-КОНСУЛЬТАНТА И ЛЕГЕНДЫ ПРОФЕССИИ ФИЛИПА КОТЛЕРА.';
$_['en']['about__kotler_title'] = 'On&nbsp;August&nbsp;29, Synergy Online Forum will be&nbsp;headlined by&nbsp;the world-renowned expert in&nbsp;economics and marketing, professor emeritus of&nbsp;universities in&nbsp;Europe and the USA, author of&nbsp;over 80&nbsp;textbooks and books, popularizer of&nbsp;the famous 4P&nbsp;theory, business consultant and legend of&nbsp;the profession&nbsp;&mdash; <span class="color-red">Philip Kotler.</span>';
$_['ru']['about__kotler_text'] = 'В&nbsp;рамках выступления эксперт расскажет о&nbsp;том, что происходит в&nbsp;пространстве &laquo;современного маркетинга&raquo;, уместно&nbsp;ли разделение менеджеров на&nbsp;&laquo;новую&raquo; и&nbsp;&laquo;старую&raquo; школы, действительно&nbsp;ли соцсети заставили управленцев компаний внимательнее относиться к&nbsp;своим методикам и&nbsp;правда&nbsp;ли, что по&nbsp;урокам кризиса 2008 года можно учиться до&nbsp;сих пор.';
$_['en']['about__kotler_text'] = 'During the speech, the expert will talk about what is&nbsp;happening in&nbsp;the space of&nbsp;&laquo;modern marketing&raquo;, whether it&nbsp;is&nbsp;appropriate to&nbsp;divide managers into &laquo;new&raquo; and &laquo;old&raquo; schools, whether social networks really forced managers of&nbsp;companies to&nbsp;pay more attention to&nbsp;their methods, and whether it&nbsp;is&nbsp;true that the lessons of&nbsp;the 2008 crisis can still be&nbsp;learned.';

$_['ru']['registration__kotler_title'] = 'Зарегистрироваться <br>на&nbsp;онлайн мастер-класс';
$_['en']['registration__kotler_title'] = 'REGISTER';

$_['ru']['whois__kotler_title'] = 'КТО ТАКОЙ <br>ФИЛИП КОТЛЕР';
$_['en']['whois__kotler_title'] = 'WHO IS&nbsp;PHILIP KOTLER';
$_['ru']['whois__kotler_text_1'] = 'По&nbsp;сочинениям Котлера уже несколько поколений студентов в&nbsp;России и&nbsp;за&nbsp;рубежом изучили основы маркетинга, менеджмента и&nbsp;управления продуктом. Как&nbsp;бы ни&nbsp;менялись условия и&nbsp;инфраструктура мирового рынка, исчерпывающие ответы на&nbsp;вопросы о&nbsp;развитии бренда и&nbsp;развитии компании всегда можно найти в&nbsp;книгах Котлера. ';
$_['en']['whois__kotler_text_1'] = 'Based on&nbsp;Kotler&rsquo;s writings, several generations of&nbsp;students in&nbsp;Russia and abroad have studied the basics of&nbsp;marketing, management, and product management. No&nbsp;matter how the conditions and infrastructure of&nbsp;the global market change, comprehensive answers to&nbsp;questions about brand development and company development can always be&nbsp;found in&nbsp;Kotler&rsquo;s books.';
$_['ru']['whois__kotler_text_2'] = 'За&nbsp;свою карьеру Филип Котлер выпустил более 150 статей и&nbsp;80&nbsp;книг, получил степень почетного профессора в&nbsp;23&nbsp;университетах мира, запустил серию мероприятий World Marketing Summit, посвященных обсуждению вопросов современного маркетинга и&nbsp;развития рынка, открыл Мировой музей маркетинга в&nbsp;Юго-Восточной Азии. С&nbsp;2001 года Котлер управляет собственной компанией Kotler Marketing Group, деятельность которой сосредоточена на&nbsp;консалтинге, тренингах и&nbsp;исследованиях рынка. Профессор продолжает преподавать в&nbsp;Школе Бизнеса Келлога при Северо-Западном Университете в&nbsp;США.';
$_['en']['whois__kotler_text_2'] = 'During his career, Philip Kotler has published more than 150 articles and 80&nbsp;books, received an&nbsp;honorary professorship at&nbsp;23&nbsp;universities around the world, launched a&nbsp;series of&nbsp;events World Marketing Summit, dedicated to&nbsp;discussing issues of&nbsp;modern marketing and market development, opened the World Museum of&nbsp;marketing in&nbsp;Southeast Asia. Since 2001, Kotler has been managing his own company, Kotler Marketing Group, which focuses on&nbsp;consulting, training, and market research. The Professor continues to&nbsp;teach at&nbsp;the Kellogg School of&nbsp;Management at&nbsp;Northwestern University in&nbsp;the United States.';
$_['ru']['whois__kotler_blockquote_text_1'] = '&laquo;Мне просто больше нравится создавать, чем потреблять&raquo;.';
$_['en']['whois__kotler_blockquote_text_1'] = '&laquo;I&nbsp;just like creating more than consuming.&raquo;';
$_['ru']['whois__kotler_text_3'] = 'Первая книга Котлера получила название &laquo;Маркетинг менеджмент&raquo;: структурный и&nbsp;массивный труд, негласно признанный &laquo;библией студентов MBA&raquo;, впервые систематизировал все правила создания и&nbsp;развития продукта, существовавшие на&nbsp;момент его публикации, и&nbsp;предназначался для практикующих менеджеров. Это стало прорывом и&nbsp;в&nbsp;академической среде: до&nbsp;Котлера ни&nbsp;один автор не&nbsp;объединял сведения для профильных специалистов&nbsp;&mdash; все они изучали основы экономики, а&nbsp;маркетинг считался скорее комплексом прикладных приемов.';
$_['en']['whois__kotler_text_3'] = 'Kotler&rsquo;s first book was called &laquo;Marketing Management&raquo;: a&nbsp;structural and massive work, tacitly recognized as&nbsp;the &laquo;Bible of&nbsp;MBA students&raquo;, for the first time systematized all the rules for creating and developing a&nbsp;product that existed at&nbsp;the time of&nbsp;its publication, and was intended for practicing managers. This was a&nbsp;breakthrough in&nbsp;the academic environment: before Kotler, no&nbsp;author combined information for specialized specialists&nbsp;&mdash; all of&nbsp;them studied the basics of&nbsp;Economics, and marketing was considered rather a&nbsp;complex of&nbsp;applied techniques.';
$_['ru']['whois__kotler_text_4'] = 'Книга &laquo;Маркетинг менеджмент&raquo; поступила в&nbsp;продажу в&nbsp;1967&nbsp;году. На&nbsp;тот момент Котлер получил степень бакалавра в&nbsp;Чикагском университете, окончил магистратуру в&nbsp;Массачусетском технологическом институте, а&nbsp;также поработал с&nbsp;крупнейшими учеными своего времени&nbsp;&mdash; обладателем Нобелевской премии по&nbsp;экономике 1976 года Милтоном Фридманом, нобелевскими лауреатами Полем Самуэльсоном и&nbsp;Робертом Солоу. По&nbsp;изданиям Котлера можно изучать историю мировой экономики: &laquo;Маркетинг менеджмент&raquo; пережил 15&nbsp;переизданий и&nbsp;каждые несколько лет пополняется сведениями об&nbsp;актуальных маркетинговых инструментах&nbsp;&mdash; от&nbsp;билбордов до&nbsp;таргетированной реклам.';
$_['en']['whois__kotler_text_4'] = 'The book &laquo;Marketing Management&raquo; went on&nbsp;sale in&nbsp;1967. At&nbsp;that time, Kotler received a&nbsp;bachelor&rsquo;s degree from the University of&nbsp;Chicago, completed a&nbsp;master&rsquo;s degree at&nbsp;the Massachusetts Institute of&nbsp;Technology, and also worked with the largest scientists of&nbsp;his time&nbsp;&mdash; the winner of&nbsp;the Nobel prize in&nbsp;Economics in&nbsp;1976, Milton Friedman, Nobel laureates Paul Samuelson and Robert Solow. You can study the history of&nbsp;the world economy in&nbsp;Kotler&rsquo;s publications: &laquo;Marketing Management&raquo; has gone through 15&nbsp;reissues and every few years is&nbsp;updated with information about current marketing tools&nbsp;&mdash; from billboards to&nbsp;targeted advertising.';

$_['ru']['opposition__kotler_title'] = 'КОТЛЕР ПРОТИВ <br>КРИТИКОВ';
$_['en']['opposition__kotler_title'] = 'KOTLER VS <br>CRITICS';
$_['ru']['opposition__kotler_text_1'] = 'Несмотря на&nbsp;активную академическую и&nbsp;деловую деятельность Филипа Котлера, в&nbsp;профессиональных кругах до&nbsp;сих пор ведутся споры о&nbsp;том, стоит&nbsp;ли новому поколению менеджеров изучать науку по&nbsp;его книгам. Традиционной мишенью для критиков Котлера становится популяризированная им&nbsp;теория&nbsp;4P.';
$_['en']['opposition__kotler_text_1'] = 'Despite Philip Kotler&rsquo;s active academic and business activities, there is&nbsp;still debate in&nbsp;professional circles about whether a&nbsp;new generation of&nbsp;managers should learn science from his books. Kotler&rsquo;s popularized 4P&nbsp;theory becomes a&nbsp;traditional target for critics.';
$_['ru']['opposition__kotler_blockquote_text'] = '&laquo;Конечно, любая теория может устареть. Идеи Коперника о&nbsp;строении Вселенной сменили идеи Птолемея, а&nbsp;затем теория Эйнштейна пришла на&nbsp;смену идеям Коперника. Как только я&nbsp;увижу признаки появления радикально новой маркетинговой концепции, я&nbsp;буду первым, кто ее&nbsp;примет&raquo;.';
$_['en']['opposition__kotler_blockquote_text'] = '&laquo;Of&nbsp;course, any theory can become outdated. The ideas of&nbsp;Copernicus about the structure of&nbsp;the Universe replaced those of&nbsp;Ptolemy, and then Einstein&rsquo;s theory replaced those of&nbsp;Copernicus. As&nbsp;soon as&nbsp;I see signs of&nbsp;a&nbsp;radical new marketing concept, I&nbsp;will be&nbsp;the first to&nbsp;adopt&nbsp;it.&raquo;';
$_['ru']['opposition__kotler_box_text1'] = 'Теория 4P&nbsp;&mdash; разработанная в&nbsp;1960 году профессором Эдмундом Маккарти классическая схема маркетингового планирования и&nbsp;продвижения продукта, включающая в&nbsp;себя четыре основных компонента:';
$_['en']['opposition__kotler_box_text1'] = '4P&nbsp;theory&nbsp;&mdash; developed in&nbsp;1960 by&nbsp;Professor Edmund McCarthy, a&nbsp;classic scheme of&nbsp;marketing planning and product promotion, which includes four main components:';
$_['ru']['opposition__kotler_box_text2'] = 'Теория стала популярной и&nbsp;активно применялась после выхода в&nbsp;1992 году учебника &laquo;Основы менеджмента&raquo; за&nbsp;авторством Филипа Котлера. По&nbsp;мнению ряда специалистов, с&nbsp;течением времени модель изжила себя, больше не&nbsp;актуальна в&nbsp;реалиях существующего рынка и&nbsp;значительно шире предложенного &laquo;маркетингового микса&raquo;.';
$_['en']['opposition__kotler_box_text2'] = 'The theory became popular and was actively applied after the publication of&nbsp;the textbook &laquo;Fundamentals of&nbsp;management&raquo; by&nbsp;Philip Kotler in&nbsp;1992. According to&nbsp;a&nbsp;number of&nbsp;experts, over time, the model has outlived its usefulness, is&nbsp;no&nbsp;longer relevant in&nbsp;the realities of&nbsp;the existing market, and is&nbsp;much broader than the proposed &laquo;marketing mix&raquo;.';
$_['ru']['opposition__kotler_box_item1'] = 'Продукт';
$_['en']['opposition__kotler_box_item1'] = 'Product';
$_['ru']['opposition__kotler_box_item2'] = 'Цена';
$_['en']['opposition__kotler_box_item2'] = 'Price';
$_['ru']['opposition__kotler_box_item3'] = 'Реклама';
$_['en']['opposition__kotler_box_item3'] = 'Promotion';
$_['ru']['opposition__kotler_box_item4'] = 'Дистрибуция';
$_['en']['opposition__kotler_box_item4'] = 'Place';
$_['ru']['opposition__kotler_subtitlte_text'] = 'Пока коллеги спорят и&nbsp;предлагают доработанные модели продвижения продукта (в&nbsp;научной практике появились теории 4C, 5+I, 12P и&nbsp;некоторые другие), Котлер относится к&nbsp;их&nbsp;мнениям с&nbsp;пониманием&nbsp;&mdash; и&nbsp;делится своим:';
$_['en']['opposition__kotler_subtitlte_text'] = 'While colleagues argue and offer modified models of&nbsp;product promotion (4C, 5+I, 12P, and some others theories have appeared in&nbsp;scientific practice), Kotler treats their opinions with understanding&nbsp;&mdash; and shares his own:';

$_['ru']['what-now__kotler_title'] = 'ЧТО СЕЙЧАС С&nbsp;МАРКЕТИНГОМ';
$_['en']['what-now__kotler_title'] = 'HOW IS&nbsp;MARKETING GOING NOW';
$_['ru']['what-now__kotler_subtitle'] = 'К&nbsp;слову о&nbsp;новом: <span class="color-red">социальные сети</span>&nbsp;&mdash; одна&nbsp;из&nbsp;любимых тем исследований маркетолога.';
$_['en']['what-now__kotler_subtitle'] = 'Speaking of&nbsp;new things: <span class="color-red">social networks</span> are one of&nbsp;the marketers&rsquo; favorite research topics.';
$_['ru']['what-now__kotler_text_1'] = 'Удерживая статус классика экономических наук, Котлер легко адаптируется к&nbsp;новым условиям, с&nbsp;интересом изучает их&nbsp;и&nbsp;преподает: в&nbsp;2017 году ученый совместно с&nbsp;Марком Оливером Опресником и&nbsp;Свендом Холленсеном опубликовал первую книгу из&nbsp;серии практических гидов по&nbsp;SMM.';
$_['en']['what-now__kotler_text_1'] = 'Holding the status of&nbsp;a&nbsp;classic of&nbsp;economic sciences, Kotler easily adapts to&nbsp;new conditions, studies them with interest, and teaches: in&nbsp;2017, the scientist together with Mark Oliver Opresnik and Svend Hollensen published the first book in&nbsp;a&nbsp;series of&nbsp;practical guides on&nbsp;SMM. ';
$_['ru']['what-now__kotler_text_2'] = 'По&nbsp;словам эксперта, социальные сети&nbsp;&mdash; это&nbsp;то, что позволяет как следует расшевелить рынок:';
$_['en']['what-now__kotler_text_2'] = 'According to&nbsp;the expert, social networks are what allows you to&nbsp;stir up&nbsp;the market properly:';
$_['ru']['what-now__kotler_blockquote_text1'] = '&laquo;Я&nbsp;спрашиваю менеджеров компаний, которые консультирую, об&nbsp;одном и&nbsp;том&nbsp;же: используете&nbsp;ли вы&nbsp;Интернет для тестирования реакции на&nbsp;продукт? Используете&nbsp;ли вы&nbsp;Интернет, чтобы дополнить свои знания и&nbsp;тактики? А&nbsp;чтобы коммуницировать и&nbsp;взаимодействовать с&nbsp;его потенциальной аудиторией? Для обучения сотрудников? Ваш сайт помогает вам найти новых членов команды? Анонсируете&nbsp;ли вы&nbsp;в&nbsp;сети скидки и&nbsp;специальные предложения? Читаете&nbsp;ли треды и&nbsp;форумы, чтобы узнать мнение потребителей о&nbsp;продукции и&nbsp;компании? Очень немногие готовы ответить &bdquo;да&ldquo; на&nbsp;большинство этих вопросов&raquo;.';
$_['en']['what-now__kotler_blockquote_text1'] = '&laquo;I&nbsp;ask the managers of&nbsp;companies that&nbsp;I consult about the same thing: do&nbsp;you use the Internet to&nbsp;test your reaction to&nbsp;a&nbsp;product? Do&nbsp;you use the Internet to&nbsp;supplement your knowledge and tactics? And to&nbsp;communicate and interact with its potential audience? For employee training? Does your website help you find new team members? Do&nbsp;you announce discounts and special offers online? Do&nbsp;you read threads and forums to&nbsp;find out what consumers think about your products and company? Very few people are willing to&nbsp;answer &bdquo;yes&ldquo; to&nbsp;most of&nbsp;these questions.&raquo;';
$_['ru']['what-now__kotler_text_3'] = 'По&nbsp;мнению эксперта, производители используют веб-пространство не&nbsp;более чем на&nbsp;10%. Он&nbsp;открыто говорит об&nbsp;этом на&nbsp;тренингах для компаний IBM, General Electric, AT&amp;T, Honeywell, Bank of&nbsp;America, Merck и&nbsp;других международных лидеров рынка, заставляя топ-менеджеров пересматривать выработанные стратегии, отказываться от&nbsp;неэффективных практик и&nbsp;работать с&nbsp;актуальным инструментарием.';
$_['en']['what-now__kotler_text_3'] = 'According to&nbsp;the expert, manufacturers use the web space by&nbsp;no&nbsp;more than 10%. He&nbsp;openly talks about this at&nbsp;training for IBM, General Electric, AT&amp;T, Honeywell, Bank of&nbsp;America, Merck, and other international market leaders, forcing top managers to&nbsp;review their strategies, abandon inefficient practices and work with up-to-date tools.';

$_['ru']['became-few__kotler_title'] = 'ROMI СТАЛО МАЛО';
$_['en']['became-few__kotler_title'] = 'ROMI BECAME FEW';
$_['ru']['became-few__kotler_blockquote_text1'] = '&laquo;В&nbsp;основном эффект моих консультаций заключался в&nbsp;том, что мне удалось помочь этим компаниям стать более ориентированными на&nbsp;потребителя, а&nbsp;не&nbsp;на&nbsp;производственный процесс. Я&nbsp;работал с&nbsp;IBM, чтобы заставить их&nbsp;увидеть, насколько важно отслеживать изменения в&nbsp;потребностях клиентов, а&nbsp;не&nbsp;просто продавать технику. При работе с&nbsp;Merck я&nbsp;попытался помочь им&nbsp;усилить инновационную составляющую бизнеса мощным маркетингом&nbsp;&mdash; то, что Pfizer сделал ранее&raquo;.';
$_['en']['became-few__kotler_blockquote_text1'] = '&laquo;Basically, the effect of&nbsp;my&nbsp;advice was that&nbsp;I was able to&nbsp;help these companies become more customer-centric rather than manufacturing-oriented. I&nbsp;worked with IBM to&nbsp;get them to&nbsp;see how important it&nbsp;is&nbsp;to&nbsp;track changes in&nbsp;customer needs, rather than just selling hardware. When working with Merck, I&nbsp;tried to&nbsp;help them strengthen the innovative component of&nbsp;the business with powerful marketing&nbsp;&mdash; something that Pfizer has done previously.&raquo;';
$_['ru']['became-few__kotler_blockquote_text2'] = 'В&nbsp;числе прочих важных проблем современного маркетинга Котлер видит недостаток метрик, позволяющих оценить результаты продвижения продукта, зацикленность менеджеров на&nbsp;своей специализации и&nbsp;отсутствие внимания к&nbsp;интересам целевой аудитории:';
$_['en']['became-few__kotler_blockquote_text2'] = 'Among other important problems of&nbsp;modern marketing, Kotler sees a&nbsp;lack of&nbsp;metrics that allow evaluating the results of&nbsp;product promotion, managers&rsquo; obsession with their specialization, and lack of&nbsp;attention to&nbsp;the interests of&nbsp;the target audience:';
$_['ru']['became-few__kotler_blockquote_text3'] = '&laquo;Скажем прямо: маркетинг не&nbsp;воскресить за&nbsp;ночь. Во-первых, слишком большое количество менеджеров фокусируются на&nbsp;своих наименованиях и&nbsp;профилях вместо того, чтобы увидеть картинку целиком и&nbsp;понять свой продукт во&nbsp;всех его ипостасях. Во-вторых, чтобы получить полное представление о&nbsp;движении продукта и&nbsp;компании, стоит уделять больше внимания навыкам в&nbsp;сфере финансов и&nbsp;стратегии. В-третьих, нельзя всерьез отнестись к&nbsp;маркетологу, который не&nbsp;может понятно объяснить показатели ROI (рентабельности маркетинговых инвестиций). Топ-менеджмент заслуживает более исчерпывающих аргументов, чем отчеты с&nbsp;цифрами&raquo;.';
$_['en']['became-few__kotler_blockquote_text3'] = '&laquo;Let&rsquo;s put it&nbsp;bluntly: you can&rsquo;t resurrect marketing overnight. First, too many managers focus on&nbsp;their names and profiles instead of&nbsp;seeing the whole picture and understanding their product in&nbsp;all its aspects. Second, to&nbsp;get a&nbsp;complete picture of&nbsp;the product and company movement, you should pay more attention to&nbsp;your financial and strategy skills. Third, you can&rsquo;t take a&nbsp;marketer seriously if&nbsp;he&nbsp;can&rsquo;t clearly explain the ROI (return on&nbsp;marketing investment) indicators. Top management deserves more comprehensive arguments than reports with numbers.&raquo;';

$_['ru']['charge__kotler_title'] = 'КТО ТУТ ГЛАВНЫЙ';
$_['en']['charge__kotler_title'] = 'WHO&rsquo;S IN&nbsp;CHARGE HERE';
$_['ru']['charge__kotler_text_1'] = 'Филип Котлер способен убедить аудиторию и&nbsp;предлагает слушателям новые точки зрения: спикер начал выступать перед профессиональной публикой еще в&nbsp;1962&nbsp;году, сразу после прохождения постдокторальных программ по&nbsp;математике и&nbsp;бихевиористике в&nbsp;Гарвардском и&nbsp;Чикагском университетах. Системные и&nbsp;многогранные познания помогли ему не&nbsp;только легко находить контакт с&nbsp;аудиторией и&nbsp;читателями, но&nbsp;и&nbsp;выработать золотое правило маркетинга&nbsp;&mdash; <span class="color-red">customer is&nbsp;king:</span>';
$_['en']['charge__kotler_text_1'] = 'Philip Kotler is&nbsp;able to&nbsp;convince an&nbsp;audience and offers listeners new points of&nbsp;view: he&nbsp;began speaking to&nbsp;a&nbsp;professional audience in&nbsp;1962, immediately after completing postdoctoral programs in&nbsp;mathematics and behavioral science at&nbsp;Harvard and the University of&nbsp;Chicago. His systematic and multi-faceted knowledge helped him not only easily find contact with the audience and readers, but also to&nbsp;develop the golden rule of&nbsp;marketing&nbsp;&mdash; <span class="color-red">a customer is&nbsp;king:</span>';
$_['ru']['charge__kotler_blockquote_text1'] = '&laquo;Маркетинг должен отталкиваться от&nbsp;потребителя и&nbsp;идти прямо к&nbsp;нему. При этом менеджерам продукта нужно определиться, какой будет его целевая аудитория и&nbsp;какие ее&nbsp;потребности он&nbsp;закроет лучше всех прочих&raquo;.';
$_['en']['charge__kotler_blockquote_text1'] = '&laquo;Marketing should focus on&nbsp;the consumer and go&nbsp;directly to&nbsp;him. At&nbsp;the same time, product managers need to&nbsp;determine what their target audience will be&nbsp;and what needs they will cover better than all others.&raquo;';
$_['ru']['charge__kotler_blockquote_text2'] = '&laquo;Я&nbsp;вижу, как они затухают, не&nbsp;успев разогнаться. Это не&nbsp;в&nbsp;последнюю очередь происходит потому, что все бренды похожи друг на&nbsp;друга. У&nbsp;них один и&nbsp;тот&nbsp;же ассортимент, те&nbsp;же цены&nbsp;&mdash; все одинаковое. Любой компании стоило&nbsp;бы отстраиваться от&nbsp;остальных и&nbsp;ставить на&nbsp;индивидуальность. Ее&nbsp;легко обнаружить, если присмотреться к&nbsp;потребителям и&nbsp;их&nbsp;нуждам. Когда удается понять, в&nbsp;чем &bdquo;боль&ldquo; вашего покупателя, и&nbsp;предложить решение, проблема с&nbsp;позиционированием исчезает&raquo;.';
$_['en']['charge__kotler_blockquote_text2'] = '&laquo;I&nbsp;see how they fade away before they can accelerate. This is&nbsp;not least because all brands are similar to&nbsp;each other. They have the same assortment, the same prices&nbsp;&mdash; everything is&nbsp;the same. Any company should be&nbsp;built up&nbsp;from the rest and bet on&nbsp;the individualism. It&nbsp;is&nbsp;easy to&nbsp;detect if&nbsp;you look closely at&nbsp;consumers and their needs. When you can understand what your customer&rsquo;s &bdquo;pain&ldquo; is&nbsp;and offer a&nbsp;solution, the problem with positioning disappears.&raquo;';
$_['ru']['charge__tabs_kotler_cont_text1'] = '<span class="color-red">&laquo;Просто сделай это&raquo; (для мужчин)</span><br><span class="color-red">&laquo;Я&nbsp;здесь&raquo; (для женщин)</span><br> Производитель спортивной одежды и&nbsp;обуви, один из&nbsp;лидеров индустрии. Во&nbsp;главе стратегии&nbsp;&mdash; спорт как сила, способная изменить общество. Nike реализует глобальные кампании в&nbsp;поддержку женских прав, популяризирует спорт как образ жизни среди детей и&nbsp;молодых людей, проводит общественные программы по&nbsp;повышению информированности в&nbsp;вопросах СПИДа, развивает приложения и&nbsp;digital-инструменты для комфортного тренинга.';
$_['en']['charge__tabs_kotler_cont_text1'] = '<span class="color-red">&laquo;JUST DO&nbsp;IT&raquo; (FOR MEN)</span><br>
<span class="color-red">&laquo;I&nbsp;AM HERE&raquo; (FOR WOMEN)</span><br>
MANUFACTURER OF&nbsp;SPORTS CLOTHES AND FOOTWEAR, ONE OF&nbsp;THE INDUSTRY LEADERS. THE MAIN POINT IF&nbsp;THE STRATEGY&nbsp;&mdash; SPORT IS&nbsp;A&nbsp;POWER CAPABLE TO&nbsp;CHANGE SOCIETY. NIKE IMPLEMENTS GLOBAL CAMPAIGNS IN&nbsp;SUPPORT OF&nbsp;WOMEN&rsquo;S RIGHTS, PROMOTES SPORT AS&nbsp;A&nbsp;WAY OF&nbsp;LIFE AMONG CHILDREN AND YOUNG PEOPLE, CARRIES OUT PUBLIC&nbsp;PROGRAMS TO&nbsp;RAISE AWARENESS ABOUT AIDS, DEVELOPS APPLICATIONS AND DIGITAL TOOLS FOR COMFORTABLE TRAINING.';
$_['ru']['charge__tabs_kotler_cont_text2'] = '<span class="color-red">&laquo;Все для свободы. Свобода для всех&raquo;</span><br> Производитель мотоциклов и&nbsp;предметов лайфстайла: одежды, мебели, предметов декора, аксессуаров. Главные ценности бренда&nbsp;&mdash; лояльность и&nbsp;вовлеченность целевой аудитории. Стратегия Harley-Davidson ориентирована на&nbsp;поддержку бунтарского духа в&nbsp;каждом, единства, индивидуальности и&nbsp;личной свободы. Полная линейка товаров бренда позволяет создать целостное пространство и&nbsp;настроение в&nbsp;духе Harley-Davidson.';
$_['en']['charge__tabs_kotler_cont_text2'] = '<span class="color-red">&laquo;ALL&nbsp;FOR FREEDOM. FREEDOM FOR ALL&raquo;</span><br> THE MANUFACTURER OF&nbsp;MOTORCYCLES AND LIFESTYLE STUFF: CLOTHES, FURNITURE, DECORATION ITEMS, ACCESSORIES. THE MAIN VALUES OF&nbsp;THE BRAND&nbsp;&mdash; LOYALTY AND INVOLVEMENT OF&nbsp;THE TARGET AUDIENCE. HARLEY-DAVIDSON&rsquo;S STRATEGY IS&nbsp;ORIENTED TO&nbsp;SUPPORT THE REBELLARY SPIRIT, UNITY, INDIVIDUALITY AND PERSONAL FREEDOM IN&nbsp;EVERYONE. A&nbsp;COMPLETE RANGE OF&nbsp;BRAND PRODUCTS ALLOWS TO&nbsp;CREATE A&nbsp;WHOLE SPACE AND MOOD IN&nbsp;THE SPIRIT OF&nbsp;HARLEY-DAVIDSON.';
$_['ru']['charge__tabs_kotler_cont_text3'] = '<span class="color-red">&laquo;Лучшее никогда не&nbsp;бывает слишком хорошим&raquo;</span><br> Производитель детского конструктора, лидер на&nbsp;рынке игрушек. Ориентирован на&nbsp;аутентичность опыта игры и&nbsp;творчества. С&nbsp;1960-х годов стратегия базируется на&nbsp;подходе &laquo;все, что вы&nbsp;строите из&nbsp;кирпичиков, так&nbsp;же реально, как сама жизнь&raquo;. Делает ставку на&nbsp;создание конструктора для ситуативной игры: потребители могут воплотить любую мечту, от&nbsp;строительства космического корабля до&nbsp;сборки портрета любимого персонажа комиксов.';
$_['en']['charge__tabs_kotler_cont_text3'] = '<span class="color-red">&laquo;THE BEST IS&nbsp;NEVER TOO GOOD&raquo;</span><br>
MANUFACTURER OF&nbsp;CHILDREN&rsquo;S CONNECTS, LEADER IN&nbsp;THE TOYS MARKET. ORIENTED ON&nbsp;THE AUTHENTICITY OF&nbsp;GAME AND CREATIVITY EXPERIENCE. SINCE THE 1960s, IT&rsquo;S STRATEGY HAS BEEN BASED ON&nbsp;THE APPROACH &laquo;EVERYTHING YOU BUILD&nbsp;OUT OF&nbsp;BRICKS IS&nbsp;AS&nbsp;REAL AS&nbsp;LIFE&raquo;. IT&nbsp;BETS ON&nbsp;CREATING A&nbsp;CONSTRUCTOR FOR SITUATIVE GAME: PEOPLE CAN BRING TO&nbsp;LIFE ANY DREAMS FROM CONSTRUCTION OF&nbsp;A&nbsp;SPACESHIP TO&nbsp;ASSEMBLING A&nbsp;PORTRAIT OF&nbsp;A&nbsp;FAVORITE COMIC&nbsp;CHARACTER.';
$_['ru']['charge__tabs_kotler_cont_text4'] = '<span class="color-red">&laquo;Ты&nbsp;и&nbsp;Starbucks. Больше чем кофе&raquo;</span><br> Компания по&nbsp;продаже кофе и&nbsp;одноименная сеть кофеен. Миссия бренда&nbsp;&mdash; &laquo;вдохновлять и&nbsp;питать дух&nbsp;&mdash; каждого человека, с&nbsp;каждой чашкой кофе, каждый день, в&nbsp;любом месте&raquo;. Стратегия Starbucks ориентирована на&nbsp;создание уникального опыта для потребителей. По&nbsp;словам основателей бренда, в&nbsp;кофейни Starbucks возвращаются за&nbsp;чувством общности, симпатии и&nbsp;социального заряда.';
$_['en']['charge__tabs_kotler_cont_text4'] = '<span class="color-red">&laquo;YOU AND STARBUCKS. MORE THAN COFFEE&raquo;</span><br>
A&nbsp;COMPANY DISTRIBUTOR OF&nbsp;COFFEE AND COFFEE SHOP CHAIN OF&nbsp;THE SAME NAME, THE BRAND&rsquo;S MISSION IS&nbsp;TO&nbsp;&laquo;INSPIRE AND NOURISH THE SPIRIT OF&nbsp;EVERY PERSON, WITH EVERY CUP OF&nbsp;COFFEE, EVERY DAY, ANYWHERE.&raquo; STARBUCKS&rsquo; STRATEGY IS&nbsp;FOCUSED ON&nbsp;CREATING A&nbsp;UNIQUE EXPERIENCE FOR CONSUMERS. ACCORDING TO&nbsp;THE FOUNDERS OF&nbsp;THE BRAND, CLIENTS RETURN TO&nbsp;STARBUCKS COFFEE SHOPS LOOKING FOR A&nbsp;SENSE OF&nbsp;COMMUNITY, SYMPATHY AND SOCIAL CHARGE.';
$_['ru']['charge__tabs_kotler_text'] = 'По&nbsp;признанию Котлера, его восхищает подход к&nbsp;работе с&nbsp;клиентами компаний 
<span class="text-label tab-btn d-none d-sm-inline-block" data-author="harley-davidson">Harley-Davidson</span>
<a class="d-sm-none" href="#tabs-content2" data-fancybox>Harley-Davidson</a>,
<span class="text-label tab-btn d-none d-sm-inline-block" data-author="lego">Lego</span>
<a class="d-sm-none" href="#tabs-content3" data-fancybox>Lego</a>, 
<span class="text-label tab-btn d-none d-sm-inline-block" data-author="nike">Nike</span>
<a class="d-sm-none" href="#tabs-content1" data-fancybox>Nike</a> 
и&nbsp;<span class="text-label tab-btn d-none d-sm-inline-block" data-author="starbucks">Starbucks</span><a class="d-sm-none" href="#tabs-content4" data-fancybox>Starbucks</a>: им&nbsp;удалось построить лояльное и&nbsp;преданное сообщество, которое не&nbsp;только потребляет, но&nbsp;и&nbsp;дает обратную связь и&nbsp;вдохновение производителям.';
$_['en']['charge__tabs_kotler_text'] = 'Kotler admires the way 
<span class="text-label tab-btn d-none d-sm-inline-block" data-author="harley-davidson">Harley-Davidson</span>
<a class="d-sm-none" href="#tabs-content2" data-fancybox>Harley-Davidson</a>, 
<span class="text-label tab-btn d-none d-sm-inline-block" data-author="lego">Lego</span>
<a class="d-sm-none" href="#tabs-content3" data-fancybox>Lego</a>, 
<span class="text-label tab-btn d-none d-sm-inline-block" data-author="nike">Nike</span>
<a class="d-sm-none" href="#tabs-content1" data-fancybox>Nike</a>, and 
<span class="text-label tab-btn d-none d-sm-inline-block" data-author="starbucks">Starbucks</span><a class="d-sm-none" href="#tabs-content4" data-fancybox>Starbucks</a>: treat their customers to&nbsp;build a&nbsp;loyal and committed community that not only consumes, but also provides feedback and inspiration to&nbsp;manufacturers.';

$_['ru']['soul__kotler_title'] = 'ДУША КАК СТРАТЕГИЯ';
$_['en']['soul__kotler_title'] = 'SOUL AS&nbsp;A&nbsp;STRATEGY';
$_['ru']['soul__kotler_subtitle'] = 'Котлер уверен: после кризиса 2008 началась новая веха в&nbsp;истории маркетинга&nbsp;&mdash; <span class="color-red">эпоха Маркетинга&nbsp;3.0.</span> Если раньше менеджеры были одержимы цифрами и&nbsp;измерениями, а&nbsp;экспансия отождествлялась с&nbsp;успехом, то&nbsp;теперь ядром маркетинговой стратегии должна стать человеческая душа, глубинные нужды потребителя.';
$_['en']['soul__kotler_subtitle'] = 'Kotler is&nbsp;sure that after the 2008&nbsp;crisis, a&nbsp;new milestone in&nbsp;the history of&nbsp;marketing began&nbsp;&mdash; <span class="color-red">the era of&nbsp;Marketing&nbsp;3.0</span>. If&nbsp;previously managers were obsessed with numbers and dimensions, and expansion was identified with success, now the core of&nbsp;marketing strategy should be&nbsp;the human soul, the deep needs of&nbsp;the consumer.';
$_['ru']['soul__kotler_text_1'] = 'По&nbsp;убеждению эксперта, покупателям больше не&nbsp;интересны продукты сами по&nbsp;себе&nbsp;&mdash; им&nbsp;важны сообщения и&nbsp;ценности, которые они несут: соучастие, креативность, общность и&nbsp;идеалы. В&nbsp;каждом интервью Котлер повторяет, что в&nbsp;будущее пойдут те&nbsp;бренды, которые смогут вовремя пересмотреть традиционные взгляды и&nbsp;изменить устоявшиеся алгоритмы, оставив в&nbsp;работе лучшие из&nbsp;уже проверенных методов. Вот почему сегодня в&nbsp;одной команде стоит объединить представителей &laquo;старой&raquo; и&nbsp;&laquo;новой&raquo; школ:';
$_['en']['soul__kotler_text_1'] = 'According to&nbsp;the expert, customers are no&nbsp;longer interested in&nbsp;the products themselves&nbsp;&mdash; they are interested in&nbsp;the messages and values they carry: participation, creativity, community and ideals. In&nbsp;each interview, Kotler repeats that in&nbsp;the future there will be&nbsp;those brands that will be&nbsp;able to&nbsp;revise traditional views and change established algorithms in&nbsp;time, remaining the best of&nbsp;the already proven methods in&nbsp;operation. That is&nbsp;why today it&nbsp;is&nbsp;worth combining representatives of&nbsp;the &laquo;old&raquo; and &laquo;new&raquo; schools in&nbsp;one team:';
$_['ru']['soul__kotler_blockquote_text1'] = '&laquo;Лучшей командой продукта станет&nbsp;та, в&nbsp;которой есть профессионалы с&nbsp;многолетним стажем и&nbsp;молодые специалисты, которые могут смотреть на&nbsp;вещи незашоренно. Любой бренд нуждается в&nbsp;рекламе на&nbsp;билбордах и&nbsp;телевидении, но&nbsp;и&nbsp;без SMM и&nbsp;онлайн-рекламы тоже не&nbsp;обойтись, так как последние позволяют короче, быстрее и&nbsp;точнее донести до&nbsp;аудитории нужные им&nbsp;сообщения. Все эти компоненты&nbsp;&mdash; части большой картины и&nbsp;общей стратегии&raquo;.';
$_['en']['soul__kotler_blockquote_text1'] = '&laquo;The best product team will be&nbsp;the one that has professionals with many years of&nbsp;experience and young professionals who can look at&nbsp;things openly. Any brand needs advertising on&nbsp;billboards and television, but you can&rsquo;t do&nbsp;without SMM and online advertising either, since the latter allows you to&nbsp;deliver the messages they need to&nbsp;the audience in&nbsp;a&nbsp;shorter, faster, and more accurate way. All these components are part of&nbsp;the big picture and the overall strategy.&raquo;';

$_['ru']['what-will__kotler_title'] = 'ЧТО ВАС ЖДЕТ НА МАСТЕР-КЛАССЕ';
$_['en']['what-will__kotler_title'] = 'WHAT WILL&nbsp;HAPPEN VERY SOON';
$_['ru']['what-will__kotler_subtitle'] = 'НА МАСТЕР-КЛАССЕ ФИЛИП КОТЛЕР В ПЕРВЫЙ РАЗ ЗА ДОЛГОЕ ВРЕМЯ ВЫСТУПИЛ ПЕРЕД РОССИЙСКОЙ АУДИТОРИЕЙ НА SYNERGY ONLINE FORUM.';
$_['en']['what-will__kotler_subtitle'] = '<span class="color-red">On&nbsp;August&nbsp;29</span>, Philip Kotler will perform for the first time in&nbsp;a&nbsp;long time in&nbsp;front of&nbsp;a&nbsp;Russian audience at&nbsp;Synergy Online Forum.';
$_['ru']['what-will__kotler_text_1'] = 'В&nbsp;рамках выступления Филип Котлер расскажет, чем полезны традиционные маркетинговые приемы и&nbsp;как они сочетаются с&nbsp;новыми, как объединить стратегию, цифры и&nbsp;психологию, чтобы не&nbsp;запутаться в&nbsp;выводах, о&nbsp;специфике русского менеджмента, о&nbsp;советах, которые он&nbsp;давал правительствам и&nbsp;корпорациям, а&nbsp;также о&nbsp;том, как разгадать человеческую душу.';
$_['en']['what-will__kotler_text_1'] = 'He&nbsp;will tell you how useful traditional marketing techniques are and how they are combined with new ones, how to&nbsp;combine strategy, numbers, and psychology so&nbsp;as&nbsp;not to&nbsp;get confused in&nbsp;the conclusions, discuss the specifics of&nbsp;Russian management, the advice he&nbsp;gave to&nbsp;governments and corporations, as&nbsp;well as&nbsp;how to&nbsp;unravel the human soul.';

$_['ru']['platform__kotler__title'] = 'Платформа';  
$_['en']['platform__kotler__title'] = 'PLATFORM';
$_['ru']['platform__kotler__text'] = 'Synergy.Online — это цифровое пространство для вашего обучения и развития. Еженедельные онлайн-события, крупнейшая библиотека выступлений от ведущих спикеров всего мира, общение с единомышленниками и многое другое доступно вам в любом месте и с любого устройства.';
$_['en']['platform__kotler__text'] = 'The live discussion will be&nbsp;held on&nbsp;the Synergy.Online platform, which is&nbsp;designed to&nbsp;accumulate the most up-to-date knowledge and services for entrepreneurs. Get an&nbsp;education in&nbsp;an&nbsp;online format, use modern&nbsp;IT solutions, develop yourself and your business.';
$_['ru']['platform__kotler__block_text_1'] = 'LIVE-ФОРУМ<br>КАЖДУЮ НЕДЕЛЮ';
$_['en']['platform__kotler__block_text_1'] = 'WEEKLY <br>ONLINE FORUMS WITH <br> THE WORLD\'S BEST SPEAKERS';
$_['ru']['platform__kotler__block_text_2'] = 'СООБЩЕСТВО';
$_['en']['platform__kotler__block_text_2'] = 'ONLINE WORKSHOPS <br>AND WEBINARS';
$_['ru']['platform__kotler__block_text_3'] = 'БАЗА ЗНАНИЙ <br>С ЛУЧШИМИ ВИДЕО';
$_['en']['platform__kotler__block_text_3'] = 'KNOWLEDGE BASE <br>WITH BEST VIDEOS <br>FROM SYNERGY EVENTS';
$_['ru']['platform__kotler__block_text_4'] = 'ЦИФРОВЫЕ СЕРВИСЫ <br>ДЛЯ БИЗНЕСА';
$_['en']['platform__kotler__block_text_4'] = 'DIGITAL SERVICES <br>FOR BUSINESS';
$_['ru']['platform__kotler__block_text_5'] = 'АНТИКРИЗИСНЫЕ <br>IT-РЕШЕНИЯ';
$_['en']['platform__kotler__block_text_5'] = 'ANTI-CRISIS <br>IT SOLUTIONS';
$_['ru']['platform__kotler__block_text_6'] = 'НОВОСТИ <br>И АНАЛИТИКА';
$_['en']['platform__kotler__block_text_6'] = 'NEWS <br>AND ANALYTICS';


/* https://synergy.online//lp/synergyonlineforum-ai */

$_['ru']['main__synergyonlineforum-ai_date'] = '24&nbsp;июля 2020';
$_['ru']['main__synergyonlineforum-ai_subtitle'] = 'Искусственный <span class="color-red">интеллект</span>';



/* https://synergyglobal.ru/lp/version-robert/ */

$_['ru']['email__robert'] = '';
$_['en']['email__robert'] = 'onlineforum@synergyglobal.com';
$_['ru']['logo__robert'] = '
<div class="header__logo-1"><img src="img/@lp/@version-robert/header/hr_forum.svg" alt="icon"></div>
<div class="header__logo-line"></div>
';
$_['en']['logo__robert'] = '
<div class="header__logo-2"><img src="img/@lp/@version-robert/header/logo-en.svg" alt="icon"></div>
';
$_['ru']['main__robert_name'] = 'роберт <br>киган';
$_['en']['main__robert_name'] = '';
$_['ru']['main__robert_date'] = '19&nbsp;сентября ';
$_['ru']['main__robert_banner'] = 'ЖИВОЕ И ОНЛАЙН УЧАСТИЕ  ';
$_['en']['main__robert_banner'] = '';
$_['en']['main__robert_date'] = '';
$_['ru']['main__robert_subtitle'] = '<span class="color-red">Трансформация разума и новое лидерство</span><br> Мастер-класс профессора <br>Гарвардского университета,<br> Роберта Кигана, на Synergy Online Forum ';
$_['en']['main__robert_subtitle'] = '';
$_['ru']['main__robert_button'] = 'Зарегистрироваться';
$_['en']['main__robert_button'] = 'SIGN UP';

$_['ru']['about__robert_title'] = '<span class="color-red">19 сентября</span> на Synergy HR Forum выступит Роберт Киган, признанный специалист в области профессионального роста, профессор Graduate School of Education при Гарвардском университете.';
$_['en']['about__robert_title'] = '';
$_['ru']['about__robert_text'] = 'Роберт Киган — эксперт в области личностного роста и корпоративных коммуникаций, лектор, автор книг. Более 40 лет преподавал в Гарвардском университете. Исследует возможности развития человеческого потенциала и мотивации сотрудников. Выпустил три профессиональных бестселлера о коммуникациях и менеджменте: «Семь преобразующих языков», «Неприятие перемен» и «Культура для каждого». Проводил тренинги и консультации для менеджмента крупнейшего глобального хедж-фонда Bridgewater Associates, калифорнийского гиганта индустрии развлечений Decurion, маркетплейса Next Jump и т.п. Колумнист изданий The Washington Post, Harvard Business Review и др.';
$_['en']['about__robert_text'] = '';

$_['ru']['registration__robert_title'] = 'Зарегистрироваться <br>на&nbsp;онлайн мастер-класс';
$_['en']['registration__robert_title'] = 'REGISTER';
$_['ru']['about__robert_text_back'] = '«Одна из главных причин, почему человеку надоедает его работа, — это не большая нагрузка, а осознание того, что, выполняя её в течение долгого времени, он не развивается как личность и профессионал».';
$_['en']['about__robert_text_back'] = '';
$_['ru']['whois__robert_title'] = 'КТО ТАКОЙ РОБЕРТ КИГАН';
$_['en']['whois__robert_title'] = '';
$_['ru']['whois__robert_text_1'] = 'Роберт Киган известен как исследователь одного из направлений психологии развития — так называемого «самоуправления разума».<br><br> Согласно теории Кигана, в среднем человек проходит пять стадий развития психики и социального поведения:';
$_['en']['whois__robert_text_1'] = '';
$_['ru']['whois__robert_list'] = '
    <li><span>Импульсивный разум (детство);</span></li>
    <li><span>Рациональный разум (рациональность);</span></li>
    <li><span>Социализирующийся разум (период поиска единства с большинством);</span></li>
    <li><span>Самоуправляющийся разум (период самоопределения: человек самостоятельно решает, каким он хочет быть);</span></li>
    <li><span>Самотрансформирующийся разум (консолидация и объединение пройденного опыта, гибкость и адаптация к переменам).</span></li>
';
$_['en']['whois__robert_list'] = '';
$_['ru']['whois__robert_text_2'] = 'Переход с каждого этапа на следующий обусловлен накоплением критического объёма социального, эмоционального, интеллектуального и практического опыта, который заставляет человека переосмысливать своё «Я», ставить себе новые цели и перевоплощаться в новом психологическом статусе. Все эти трансформации и смены положений формируют личность, которая, по словам Кигана, есть «нечто большее, чем просто индивид».';
$_['en']['whois__robert_text_2'] = '';

$_['ru']['opposition__robert_title'] = 'ГЛАВНАЯ ИДЕЯ :<br> РОСТ ЧЕРЕЗ ПЕРЕМЕНЫ';
$_['en']['opposition__robert_title'] = '';
$_['ru']['opposition__robert_text_box'] = 'В&nbsp;основе теории Роберта Кигана лежит идея его предшественника, педиатра и&nbsp;детского психоаналитика Дональда Винникота: исследователь предложил концепцию &laquo;внутренней реальности&raquo;, формирование которой напрямую зависит от&nbsp;участия матери в&nbsp;жизни ребёнка и&nbsp;её&nbsp;стиля воспитания. Киган&nbsp;же считает, что внутренняя реальность зависит от&nbsp;характера приобретаемого опыта и&nbsp;того, насколько человек стремится к&nbsp;переменам. Именно бесстрашие и&nbsp;готовность к&nbsp;новому и&nbsp;позволяет личности проявиться, как пишет автор к&nbsp;книге &laquo;Неприятие перемен&raquo;:';
$_['en']['opposition__robert_text_box'] = '';
$_['ru']['opposition__robert_blockquote_text_1'] = '&quot;Лидерство неразрывно сопряжено с&nbsp;усилиями по&nbsp;осуществлению значимых перемен. Осуществить значимые перемены в&nbsp;любой группе практически невозможно, если не&nbsp;изменить индивидуальное поведение каждого её&nbsp;члена.';
$_['en']['opposition__robert_blockquote_text_1'] = '';
$_['ru']['opposition__robert_blockquote_text_2'] = 'Очень трудно поддерживать существенные перемены в&nbsp;поведении без существенных перемен в&nbsp;тех глубинных смыслах, которые и&nbsp;побуждают человека вести себя так или иначе. Очень трудно помогать другому человеку изменить его фундаментальные способы мироосмысления, если не&nbsp;допускать при этом возможности самому изме&shy;ниться&quot;.';
$_['en']['opposition__robert_blockquote_text_2'] = '';

$_['ru']['soul__robert_title'] = 'В ЧЁМ ПОЛЬЗА ПОДХОДА';
$_['en']['soul__robert_title'] = '';
$_['ru']['soul__robert_subtitle'] = '<span class="color-red">Концепция Кигана о ступенчатом развитии психики стала популярной и прижилась в корпоративном мире:</span> в ряде компаний HR-специалисты просят кандидатов на управленческие позиции пройти тест для определения уровня развития психики. Должность получают те, кто уже преодолел порог 3–4 степени.';
$_['en']['soul__robert_subtitle'] = '';
$_['ru']['soul__robert_text_1'] = 'Это не единственный способ применить теоретические разработки Кигана. Автор уделяет большое внимание развитию лидеров не как руководителей, а именно как полноценных гармоничных личностей, которые психически и социально здоровы, а значит, смогут создать здоровую атмосферу в коллективе и достигать результатов даже лучше ожидаемых. <br><br>Спикер уверен, что потребность сотрудников во внимании к собственной личности назревала годами — и теперь внедрение личностного подхода в глобальные корпоративные структуры стало одной из главных задач нашего времени:';
$_['en']['soul__robert_text_1'] = '';
$_['ru']['soul__robert_blockquote_text1'] = '«Сегодня сотрудники хотят получать новые виды доходов: личное удовлетворение от работы, ощущение осмысленности и значения своего труда и просто счастья».';
$_['en']['soul__robert_blockquote_text1'] = '';


$_['ru']['what-will__robert_title'] = 'ЧТО БУДЕТ СОВСЕМ СКОРО';
$_['en']['what-will__robert_title'] = 'WHAT WILL&nbsp;HAPPEN VERY SOON';
$_['ru']['what-will__robert_subtitle'] = '<span class="color-red">19 сентября</span> Роберт Киган выступит на Synergy HR Forum, чтобы поделиться своими взглядами и наработками в сфере развития личности';
$_['en']['what-will__robert_subtitle'] = '';
$_['ru']['what-will__robert_text_1'] = 'рассказать подробнее о том, что же сегодня нужно лидерам и рядовым сотрудникам компаний, поговорить о последних трендах мирового рынка труда и научить относиться к переменам проще.';
$_['en']['what-will__robert_text_1'] = '';
