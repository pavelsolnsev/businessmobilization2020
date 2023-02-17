<?php
{% set data = [

	{
		title: 'Эксклюзив PEOPLETALK: известный на&nbsp;весь мир путешественник дает советы для бюджетных и&nbsp;незабываемых поездок',
		text: 'Путешественник Михаил Зарубин посетил все 193 страны ООН! Михаил активно ведет Instagram (на&nbsp;него подписаны почти 620 тысяч человек), рассказывает невероятные истории из&nbsp;поездок и&nbsp;делится классными фотографиями. Недавно путешественник стал еще и&nbsp;спикером форума &laquo;Россия.Туризм&nbsp;&mdash; 2020&raquo;, проходящего на&nbsp;платформе Synergy.Online.',
		href: 'https://peopletalk.ru/article/eksklyuziv-peopletalk-izvestnyj-na-ves-mir-puteshestvennik-daet-sovety-dlya-byudzhetnyh-i-nezabyvaemyh-poezdok/',
		image: 'peopletalk.png'
	}
	,
	{
		title: 'Россияне стали меньше доверять искусственному интеллекту из-за пандемии',
		text: 'В&nbsp;преддверии форума &laquo;Искусственный интеллект&raquo;, который пройдет 24&nbsp;июля, аналитический центр Университета &laquo;Синергия&raquo; узнал отношение россиян к&nbsp;искусственному интеллекту (ИИ) и&nbsp;внедрению его в&nbsp;различные сферы жизни.&nbsp;20% респондентов объясняют свое негативное отношение к&nbsp;ИИ рядом опасений.',
		href: 'https://rg.ru/2020/07/23/rossiiane-stali-menshe-doveriat-iskusstvennomu-intellektu-iz-za-pandemii.html',
		image: 'rg.png'
	}
	,
	{
		title: 'Туроператоры назвали сроки восстановления отрасли',
		text: 'Без серьезной помощи со&nbsp;стороны государства туристическая отрасль в&nbsp;условиях строгих требований безопасности, связанных с&nbsp;угрозой распространения коронавируса, сможет вернуться на&nbsp;докризисный уровень не&nbsp;ранее конца 2021 года&nbsp;&mdash; середины 2022&nbsp;года, заявила исполнительный директор Ассоциации туроператоров России (АТОР) Майя Ломидзе на&nbsp;онлайн-форуме &laquo;Россия: Туризм&nbsp;&mdash; 2020&raquo;.',
		href: 'https://ria-ru.turbopages.org/s/ria.ru/20200718/1574523090.html',
		image: 'ria.png'
	}
	,
	{
		title: 'В туриндустрии прогнозируют возврат к&nbsp;докризисному уровню не&nbsp;раньше конца 2021 года',
		text: 'Российская туристическая отрасль может вернуться на&nbsp;докризисный уровень в&nbsp;конце 2021 года&nbsp;&mdash; середине 2022&nbsp;года. Такой прогноз озвучила исполнительный директор Ассоциации туроператоров России (АТОР) Майя Ломидзе на&nbsp;онлайн-форуме &laquo;Россия: Туризм&nbsp;&mdash; 2020&raquo;.',
		href: 'https://tass.ru/ekonomika/8996109',
		image: 'tass.png'
	}
	,
	{
		title: 'Алексей Минин: &laquo;Внедрение искусственного интеллекта могло&nbsp;бы не&nbsp;то&nbsp;что удвоить&nbsp;&mdash; утроить экономику&raquo;',
		text: 'Ведущие специалисты сферы искусственного интеллекта (ИИ) в&nbsp;ходе Synergy Online Forum, состоявшегося в&nbsp;режиме онлайн-трансляции, обсудили перспективы развития инновационных технологий.',
		href: 'https://fingazeta.ru/business/technologies/464744',
		image: 'fingazeta.png'
	}
	,
	{
		title: 'Клаудиа Агирре: прислушайтесь к&nbsp;своей коже',
		text: 'Известный ученый, нейробиолог, которая специализируется на&nbsp;изучении взаимосвязи мозга и&nbsp;тела, Клаудиа Агирре в&nbsp;рамках Synergy Online Forum поделилась секретами сохранения здоровой кожи и&nbsp;красоты.',
		href: 'https://woman.rambler.ru/beauty/44553418-klaudia-agirre-prislushaytes-k-svoey-kozhe/',
		image: 'rambler-women.png'
	}
	,
	{
		title: 'Как мобилизовать ресурсы тела и&nbsp;разума, если кажется, что сил нет',
		text: 'На&nbsp;выходных на&nbsp;цифровой платформе Синергия прошло выступление Клаудии Агирре&nbsp;&mdash; калифорнийского нейробиолога, которая специализируется на&nbsp;изучении связи тела и&nbsp;разума. В&nbsp;прямом эфире Клаудия рассказала о&nbsp;базовых правилах, которые помогут улучшить физическое и&nbsp;ментальное самочувствие. Beautyhack.ru публикует выдержки из&nbsp;выступления с&nbsp;простейшими, но&nbsp;очень важными советами, которым можно начать следовать прямо сейчас.',
		href: 'https://beautyhack.ru/telo/zhenskoe-zdorove/kak-mobilizovat-resursy-tela-i-razuma-esli-kazhetsya-chto-sil-net',
		image: 'beautyhack.png'
	}
	,
	{
		title: 'Где искать вдохновение: 3&nbsp;совета от&nbsp;культового режиссера',
		text: 'Вдохновение&nbsp;&mdash; главный элемент любого творческого процесса. Но&nbsp;как и&nbsp;где его найти? На&nbsp;этот вопрос ответил известный французский режиссер Люк Бессон на&nbsp;форуме Art Russia Online.',
		href: 'https://www.marieclaire.ru/stil-zjizny/gde-iskat-vdokhnovenie-3-soveta-ot-kultovogo-rezhissera/',
		image: 'marieclaire.png'
	}
	,
	{
		title: 'Туроператоры оценили рост спроса на&nbsp;отдых внутри России',
		text: 'Даже взрывной спрос на&nbsp;летний отдых в&nbsp;России в&nbsp;конечном итоге приведет к&nbsp;увеличению внутренних турпотоков только на&nbsp;10-15&nbsp;процентов, заявила РИА Новости в&nbsp;преддверии онлайн-форума &laquo;Россия: Туризм 2020&raquo; исполнительный директор Ассоциации туроператоров России (АТОР) Майя Ломидзе.',
		href: 'https://ria.ru/20200716/1574445375.html',
		image: 'ria.png'
	}
	,
	{
		title: 'Связанные с&nbsp;коронавирусом ограничения препятствуют быстрому восстановлению туротрасли',
		text: 'Строгие требования безопасности, связанные с&nbsp;угрозой распространения коронавируса, препятствуют полноценному восстановлению внутреннего туризма, несмотря на&nbsp;закрытые границы, заявила в&nbsp;пятницу исполнительный директор Ассоциации туроператоров России (АТОР) Майя Ломидзе.',
		href: 'https://tourism.interfax.ru/ru/news/articles/72062',
		image: 'interfax-tourizm.png'
	}
	,
	{
		title: 'Опрос: решение большинства туристов провести отпуск в&nbsp;РФ не&nbsp;связано с&nbsp;закрытием границ',
		text: 'Две трети российских туристов не&nbsp;связывают свое желание провести отпуск в&nbsp;России с&nbsp;закрытием границ. Об&nbsp;этом говорится в&nbsp;исследовании аналитического центра университета &laquo;Синергия&raquo; и&nbsp;Ассоциации туроператоров России (АТОР), с&nbsp;результатами которого ознакомился ТАСС.',
		href: 'https://tass.ru/ekonomika/9047221',
		image: 'tass.png'
	}
	,
	{
		title: '&quot;Жизнь&nbsp;&mdash; искусство и&nbsp;джаз&laquo;: Элизабет Гилберт о&nbsp;формуле счастья',
		text: 'На&nbsp;Земле живёт более 7&nbsp;млрд человек и&nbsp;каждый из&nbsp;них&nbsp;&mdash; в&nbsp;своём индивидуальном мире. Можно&nbsp;ли в&nbsp;этом случае вывести единую формулу счастья? На&nbsp;этот вопрос ответила американская писательница, автор бестселлера &laquo;Есть, молиться, любить&raquo; Элизабет Гилберт в&nbsp;интервью с&nbsp;писателем Александром Цыпкиным на&nbsp;Synergy Woman Forum.',
		href: 'https://www.cosmo.ru/stars/interview/zhizn-iskusstvo-i-dzhaz-elizabet-gilbert-o-formule-schastya/',
		image: 'cosmopolitan.png'
	}
	,
	{
		title: 'Екатерина Андреева: &laquo;Люблю своих врагов&nbsp;&mdash; они стимулируют двигаться вперёд&raquo;',
		text: 'Телеведущая, лауреат премии ТЭФИ, спикер Synergy Woman Forum Екатерина Андреева рассказала, как достичь успеха в&nbsp;карьере и&nbsp;гармонии с&nbsp;самой собой.',
		href: 'https://www.wday.ru/stil-zhizny/novosty/ekaterina-andreeva-lyublyu-svoikh-vragov-oni-stimuliruyut-dvigatsya-vpered/',
		image: 'wday.png'
	}
	,
	{
		title: '8 неудобных вопросов о&nbsp;фейсфитнесе и&nbsp;здоровье, которые мы&nbsp;задали создательнице марафона MelAnnett',
		text: 'В&nbsp;Instagram-аккаунте создательницы популярных healthy-марафонов MelAnnett, участницы бизнес-форума Synergy Woman Forum Анны Мельниковой&nbsp;&mdash; больше 3&nbsp;млн подписчиков. Такая аудитория собралась у&nbsp;профессиональной теннисистки и&nbsp;мамы троих детей за&nbsp;семь лет. Разглаживание носогубных складок и&nbsp;морщин, выравнивание осанки, избавление от&nbsp;отёков и&nbsp;остеохондроза&nbsp;&mdash; лишь малая часть проблем, которые обещают решить во&nbsp;время трёхнедельного марафона MelAnnett.',
		href: 'https://beautyhack.ru/telo/zhenskoe-zdorove/8-neudobnyh-voprosov-o-feys-fitnese-i-zdorove-kotorye-my-zadali-sozdatelnice-marafona-melannett',
		image: 'beautyhack.png'
	}
	,
	{
		title: 'Бизнес рассказал о&nbsp;перестройке работы в&nbsp;оnline торговле',
		text: 'Пандемия коронавируса и&nbsp;режим самоизоляции, введенный в&nbsp;России, привела к&nbsp;изменению объемов покупок, совершенных в&nbsp;онлайн-магазинах.',
		href: 'https://rg.ru/2020/04/17/biznes-rasskazal-o-perestrojke-raboty-v-online-torgovle.html',
		author: 'Алексей Дуэль',
		speaker: '',
		image: 'rg.png'
	}
	,
	{
		title: 'Автор теории &laquo;черного лебедя&raquo; спрогнозировал последствия COVID-19',
		text: 'Чтобы извлечь уроки из&nbsp;пандемии коронавируса, мир должен стать менее проницаемым, то&nbsp;есть государства должны иметь право вводить дополнительные меры контроля в&nbsp;&laquo;суперраспространителях&raquo; болезней&nbsp;&mdash; в&nbsp;аэропортах и&nbsp;на&nbsp;границах...',
		href: 'https://ria.ru/20200418/1570226025.html',
		author: '',
		speaker: 'Нассим Талеб',
		image: 'ria.png'
	}
	,
	{
		title: 'Нассим Талеб&nbsp;&mdash; РБК: &quot;Я&nbsp;вижу угрозу серьезнее пандемии',
		text: 'Один из&nbsp;известнейших философов современности рассказал, чем вызвана высокая смертность от&nbsp;коронавируса в&nbsp;западных странах, и&nbsp;объяснил, почему отмена карантина не&nbsp;будет означать конца эпидемии.',
		href: 'https://pro.rbc.ru/demo/5e998c119a7947697d5cb9d9?from=column_1',
		author: '',
		speaker: 'Нассим Талеб',
		image: 'pro_rbc.png'
	}
	,
	{
		title: 'В&nbsp;AZIMUT Hotels считают, что восстановление внутреннего туризма начнется с&nbsp;деловых поездок',
		text: 'Восстановление внутреннего туризма в&nbsp;России начнется уже летом с&nbsp;деловых поездок, туристические поездки возобновятся не&nbsp;раньше осени, считает генеральный директор сети отелей AZIMUT <span>Максим Бродовский</span>.',
		href: 'https://tourism.interfax.ru/ru/news/articles/69209',
		author: '',
		speaker: 'Максим Бродовский',
		image: 'interfax-tourizm.png'
	}
	,
	{
		title: 'Американский спикер Synergy Online Forum перечислил секреты качественного клиентского сервиса',
		text: 'Американский бизнесмен <span>Джон Шоул</span> рассказал, как создать клиентский сервис &laquo;WOW-эффекта&raquo;. Полезные советы прозвучали на&nbsp;Synergy Online Forum.',
		href: 'https://fedpress.ru/news/77/economy/2483208',
		author: 'Александра Сергеева',
		speaker: 'Джон Шоул',
		image: 'fedpress.png'
	}
	,
	{
		title: 'Synergy Online Forum: Талеб, Кучмент и&nbsp;Перекальски рассказали о&nbsp;&laquo;новом мире&raquo;',
		text: 'Генеральный директор интернет-ритейлера &laquo;Утконос&raquo; <span>Дэнни Перекальски</span>, выступая на&nbsp;форуме, выразил уверенность в&nbsp;том, что выжить бизнесу в&nbsp;этот &laquo;турбулентный&raquo; период поможет вовремя сделанный &laquo;шаг назад&raquo;.',
		href: 'https://www.kommersant.ru/doc/4327545',
		author: '',
		speaker: 'Дэнни Перекальски',
		image: 'kommersant.png'
	}
	,
	{
		title: 'На&nbsp;Synergy Online Forum китайские врачи поделятся опытом борьбы с&nbsp;коронавирусом',
		text: '30&nbsp;апреля состоится второй антикризисный Synergy Online Forum, на&nbsp;котором китайские врачи расскажут об&nbsp;опыте борьбы с&nbsp;коронавирусом.',
		href: 'https://iz.ru/1004034/2020-04-24/na-synergy-online-forum-kitaiskie-vrachi-podeliatsia-opytom-borby-s-koronavirusom',
		author: '',
		speaker: '',
		image: 'izvestiya.jpg'
	}
	,
	{
		title: 'Эксперты рассказали, что ждет книжную индустрию после пандемии',
		text: 'Пандемия коронавируса и&nbsp;финансовый кризис коснулись всех сфер жизни, включая книжную индустрию, которая несет огромные потери.',
		href: 'https://profile.ru/news/economy/eksperty-rasskazali-chto-zhdet-knizhnuyu-industriyu-posle-pandemii-296630/',
		author: 'Алиса Лукьянова',
		speaker: '',
		image: 'profil.png'
	}
	,
	{
		title: 'Ицхак Адизес&nbsp;&mdash; РБК: &laquo;У&nbsp;россиян имидж очень хитрых людей&raquo;',
		text: 'Консультант по&nbsp;менеджменту с&nbsp;мировым именем рассказал РБК, почему российские компании не&nbsp;могут тягаться с&nbsp;зарубежными гигантами, отчего деньги не&nbsp;могут быть единственной мотивацией и&nbsp;зачем в&nbsp;советы директоров надо включать людей искусства.',
		href: 'https://pro.rbc.ru/demo/5ea191a99a794722ee7851c5',
		author: '',
		speaker: 'Ицхак Адизес',
		image: 'rbc.png'
	}
	,
	{
		title: 'Эксперт: сотрудник на&nbsp;удаленке сегодня&nbsp;&mdash; это полноценный боец',
		text: 'Офисные сотрудники показали высокий уровень работы в&nbsp;домашних условиях. По&nbsp;мнению директора &laquo;Нетология-групп&raquo; <span>Максима Спиридонова</span>, данная тенденция способна изменить отношение работодателей к&nbsp;дистанционному труду с&nbsp;недоброжелательного на&nbsp;позитивное.',
		href: 'https://fedpress.ru/news/77/economy/2466829',
		author: 'Алина Балчугова',
		speaker: 'Максим Спиридонов',
		image: 'fedpress.png'
	}
	,
	{
		title: 'Боксер Григорий Дрозд оценил влияние пандемии коронавируса на&nbsp;индустрию спорта',
		text: 'Бывший чемпион мира по&nbsp;версии WBC в&nbsp;первом тяжелом весе, автор книги &laquo;Бей первым&raquo; в&nbsp;преддверии Synergy Online Forum рассказал о&nbsp;том, как сохранить тонус во&nbsp;время самоизоляции, а&nbsp;также оценил последствия, с&nbsp;которыми столкнется спортивная индустрия в&nbsp;результате пандемии.',
		href: 'https://www.sport-interfax.ru/702885',
		author: '',
		speaker: 'Григорий Дрозд',
		image: 'interfax.svg'
	}
	,
	{
		title: 'Как организовать свой home-офис и&nbsp;управлять командой онлайн',
		text: 'Один из&nbsp;спикеров форума Synergy Online Forum, генеральный менеджер инвестиционного холдинга Х10&nbsp;GROUP <span>Николай Берез</span> о&nbsp;том, как оптимизировать расходы за&nbsp;счет построения удаленного управления.',
		href: 'https://www.finam.ru/analysis/newsitem/kak-organizovat-svoiy-home-ofis-i-upravlyat-komandoiy-onlaiyn-20200410-125357/',
		author: '',
		speaker: 'Николай Берез',
		image: 'finam.jpg'
	}
	,
	{
		title: 'Теория черных лебедей: как жить в&nbsp;мире, где невозможно ничего предсказать',
		text: 'Выдающийся финансист и&nbsp;философ <span>Нассим Талеб</span> убежден, что события, меняющие ход мировой истории, практически никогда нельзя предвидеть. Он&nbsp;называет их&nbsp;&laquo;черными лебедями&raquo;.',
		href: 'https://www.marieclaire.ru/stil-zjizny/teoriya-chernyih-lebedey-kak-jit-v-mire-gde-nevozmojno-nichego-predskazat/',
		author: 'Мария Тюмерина',
		speaker: 'Нассим Талеб',
		image: 'marieclaire.png'
	}
	,
	{
		title: 'Как бизнесу выжить в&nbsp;условиях пандемии: 10&nbsp;бюджетных способов',
		text: 'Как выжить бизнесу и&nbsp;о&nbsp;чем стоит знать в&nbsp;нынешних реалиях, рассказала <span>Юлия Ракова</span>, директор по&nbsp;маркетингу GetResponse Россия, автор новой книги &laquo;Погнали! Руководство по&nbsp;выживанию бизнеса в&nbsp;кризис.&nbsp;155&nbsp;гроусхаков&raquo;.',
		href: 'https://profile.ru/economy/kak-biznesu-vyzhit-v-usloviyax-pandemii-10-byudzhetnyx-sposobov-283548/',
		author: 'Юлия Ракова',
		speaker: '',
		image: 'profil.png'
	}
	,
	{
		title: '&laquo;Время вызова&raquo;: как онлайн-кинотеатры справляются с&nbsp;небывалым ростом трафика',
		text: 'Пандемия коронавируса нанесла сокрушительный удар по&nbsp;бизнесу во&nbsp;всем мире. Однако в&nbsp;то&nbsp;время, когда одни компании терпят колоссальные убытки, другие пользуются ситуацией и&nbsp;остаются в&nbsp;выигрыше.',
		href: 'https://kino.rambler.ru/movies/44023522-vremya-vyzova-kak-onlayn-kinoteatry-spravlyayutsya-s-nebyvalym-rostom-trafika/',
		author: '',
		speaker: '',
		image: 'rambler-kino.png'
	}
	,
	{
		title: 'Григорий Аветов: &laquo;Для бизнеса сейчас существует две возможности&raquo;',
		text: 'Об&nbsp;экологии бизнеса и&nbsp;о&nbsp;том, что нас ждет, говорит <span>Григорий Аветов</span>&nbsp;&mdash; бессменный лидер Synergy Forum и&nbsp;школы &laquo;Синергия&raquo;, который впервые проведет Synergy Online Forum 2020.',
		href: 'https://www.marieclaire.ru/karera/grigoriy-avetov-dlya-biznesa-seychas-suschestvuet-dve-vozmojnosti-/',
		author: 'Marie Claire Editorial',
		speaker: 'Григорий Аветов',
		image: 'marieclaire.png'
	}
	,
	{
		title: 'Символом Synergy Online Forum станет скульптура итальянского художника Куинна &laquo;Вместе&raquo;',
		text: 'Символом цифрового аналога крупнейшего образовательного события мира Synergy Global Forum станет скульптура спикера мероприятия и&nbsp;выдающегося итальянского художника Лоренцо Куинна &laquo;Вместе&raquo;.',
		href: 'https://mir24.tv/press_release/16406268/simvolom-synergy-online-forum-stanet-skulptura-italyanskogo-hudozhnika-kuinna-vmeste',
		author: '',
		speaker: '',
		image: 'mir24.png'
	}
	,
	{
		title: 'Как успешно продавать в&nbsp;кризис и&nbsp;после',
		text: 'Используйте самоизоляцию как время для создания уникального торгового предложения, советует эксперт по&nbsp;маркетинговой упаковке бизнеса <span>Владимир Турман</span> накануне Synergy Online Forum.',
		href: 'https://www.finam.ru/analysis/newsitem/kak-uspeshno-prodavat-v-krizis-i-posle-20200402-164012/',
		author: '',
		speaker: 'Владимир Турман',
		image: 'finam.jpg'
	}
	,
	{
		title: 'Елинсон: Правоприменение в&nbsp;России будет включать фактор справедливости',
		text: 'Система права в&nbsp;России сбалансирована и&nbsp;вполне эффективна, проблемы лежат в&nbsp;области правоприменения. Об&nbsp;этом заявил <span>Андрей Елинсон</span>, управляющий партнёр инвестиционной компании&nbsp;А1, входящей в&nbsp;состав консорциума &laquo;Альфа-Групп&raquo;.',
		href: 'https://www.rosbalt.ru/russia/2020/04/30/1841296.html',
		author: '',
		speaker: 'Андрей Елинсон',
		image: 'rosbalt.png'
	}
	,
	{
		title: 'Доктор Мясников назвал главное положительное свойство коронавируса',
		text: 'Главный врач московской городской клинической больницы &#8470;&nbsp;71&nbsp;<span>Александр Мясников</span> назвал положительное свойство коронавирусной инфекции.',
		href: 'https://riafan.ru/1272786-doktor-myasnikov-nazval-glavnoe-polozhitelnoe-svoistvo-koronavirusa',
		author: 'Артем Никулин',
		speaker: 'Александр Мясников',
		image: 'riafan.jpg'
	}
	,
	{
		title: 'Доктор Мясников призвал не&nbsp;ждать вакцину от&nbsp;коронавируса',
		text: 'В&nbsp;ближайшие годы людям не&nbsp;стоит ждать вакцину от&nbsp;коронавируса. Об&nbsp;этом в&nbsp;ходе Synergy Online Forum заявил главврач ГКБ &#8470;&nbsp;71&nbsp;<span>Александр Мясников</span>.',
		href: 'https://regnum.ru/news/2935695.html',
		author: '',
		speaker: 'Александр Мясников',
		image: 'regnum.jpg'
	}
	,
	{
		title: 'Доктор Мясников заявил о&nbsp;возможности второй волны коронавируса осенью',
		text: 'На&nbsp;плато по&nbsp;коронавирусу Россия может выйти к&nbsp;середине мая. В&nbsp;таком случае уже к&nbsp;июню заболеваемость пойдет на&nbsp;спад. Об&nbsp;этом заявил главный врач городской клинической больницы &#8470;&nbsp;71&nbsp;имени Жадкевича, ведущий телепрограммы &laquo;О&nbsp;самом главном&raquo; <span>Александр Мясников</span> в&nbsp;ходе выступления на&nbsp;Synergy Online Forum.',
		href: 'https://rg.ru/2020/04/30/doktor-miasnikov-zaiavil-o-vozmozhnosti-vtoroj-volny-koronavirusa-oseniu.html',
		author: 'Екатерина Петрова',
		speaker: 'Александр Мясников',
		image: 'rg.png'
	}
	,
	{
		title: 'Эксперт полагает, что через 15&nbsp;лет зритель будет управлять телеэфиром',
		text: 'Телеэфир в&nbsp;течение 15&nbsp;лет претерпит колоссальные изменения, классическое программирование уйдет, а&nbsp;эфиром будут управлять зрители.',
		href: 'https://tass.ru/obschestvo/8381225',
		author: '',
		speaker: '',
		image: 'tass.png'
	}
	,
	{
		title: 'Ирина Хакамада и&nbsp;Максим Батырев&nbsp;&mdash; о&nbsp;самоизоляции, карьере и&nbsp;планировании',
		text: 'Конец апреля ознаменовался ещё одним важным мероприятием&nbsp;&mdash; Synergy Online Forum, объединившим на&nbsp;одной площадке лучших бизнес- и&nbsp;мотивационных спикеров, которые рассуждали о&nbsp;перспективах развития личных брендов и&nbsp;бизнеса, а&nbsp;также прогнозирований и&nbsp;планировании в&nbsp;сложное для всех время.',
		href: 'https://www.elle.ru/stil-zhizni/events/irina-hakamada-i-maksim-batyrev-o-samoizolyacii-karere-i-planirovanii-id6867826/?from=yandex_widget',
		author: '',
		speaker: 'Ирина Хакамада, Максим Батырев',
		image: 'elle.png'
	}
	,
	{
		title: 'Эксперты раскрыли секреты управления бизнесом в&nbsp;кризис',
		text: 'Ситуация с&nbsp;пандемией коронавируса смешала привычные бизнес-расклады: компании, забывая о&nbsp;конкуренции, начали объединяться, запускать совместные проекты, рассказал президент Фонда развития фундаментальных исследований, доктор филологических наук <span>Кирилл Бабаев</span> на&nbsp;Synergy Online Forum.',
		href: 'https://rg.ru/2020/05/01/eksperty-raskryli-sekrety-upravleniia-biznesom-v-krizis.html',
		author: 'Екатерина Петрова',
		speaker: 'Кирилл Бабаев',
		image: 'rg.png'
	}
	,
	{
		title: 'Как стать звездой онлайна: 5&nbsp;правил создания успешного личного бренда',
		text: 'Как правильно выглядеть и&nbsp;вести себя в&nbsp;кадре, рассказывает <span>Марии Буше</span>&nbsp;&mdash; основатель Австрийской Высшей Школы Этикета, специалист международного класса по&nbsp;всем видам этикета, создатель самой успешной в&nbsp;рунете онлайн-школы современного и&nbsp;делового этикета, спикер Synergy Online Forum.',
		href: 'https://woman.rambler.ru/other/44126625-kak-stat-zvezdoy-onlayna-5-pravil-sozdaniya-uspeshnogo-lichnogo-brenda/?utm_content=woman_media&utm_medium=read_more&utm_source=copylink',
		author: 'Eva.ru',
		speaker: 'Марии Буше',
		image: 'rambler-women.png'
	}
	,
	{
		title: 'Мир после пандемии: что ждет книжную индустрию',
		text: 'Как правильно выглядеть и&nbsp;вести себя в&nbsp;кадре, рассказывает <span>Марии Буше</span>&nbsp;&mdash; основатель Австрийской Высшей Школы Этикета, специалист международного класса по&nbsp;всем видам этикета, создатель самой успешной в&nbsp;рунете онлайн-школы современного и&nbsp;делового этикета, спикер Synergy Online Forum.',
		href: 'https://snob.ru/entry/192338/',
		author: 'Анастасия Тискова',
		speaker: 'Марии Буше',
		image: 'snob.png'
	}
	,
	{
		title: 'Ирина Хакамада, Ицхак Адизес и&nbsp;другие эксперты раскрыли секреты управления бизнесом в&nbsp;кризис',
		text: 'Умение договариваться, запускать совместные проекты и&nbsp;растить лидера &laquo;внутри себя&raquo;&nbsp;&mdash; эти и&nbsp;другие способы выживания в&nbsp;кризис топ-менеджеры крупных компаний озвучили на&nbsp;SynergyOnlineForum.',
		href: 'https://mir24.tv/press_release/16408860',
		author: '',
		speaker: 'Ирина Хакамада, Ицхак Адизес',
		image: 'mir24.png'
	}
	,
	{
		title: 'Большинство предпринимателей не&nbsp;собираются уходить из&nbsp;бизнеса из-за пандемии',
		text: 'Больше всего предпринимателей беспокоит неопределенность будущего&nbsp;&mdash; об&nbsp;этом заявили&nbsp;63% участников исследования, проведенного аналитическими центрами Университета &laquo;Синергия&raquo; и&nbsp;НАФИ.',
		href: 'https://tass.ru/ekonomika/8414189',
		author: '',
		speaker: '',
		image: 'tass.png'
	}
	,
	{
		title: 'Юваль Харари&nbsp;&mdash; РБК: &laquo;У&nbsp;политиков должен быть барьер между умом и&nbsp;ртом&raquo;',
		text: 'Знаменитый историк прогнозирует, что алгоритмам будут присущи расизм и&nbsp;сексизм, а&nbsp;переобучение специалистов не&nbsp;спасет от&nbsp;безработицы. Но&nbsp;есть и&nbsp;хорошие новости: войн будет все меньше, а&nbsp;пандемия поможет справиться с&nbsp;невежеством',
		href: 'https://www.rbc.ru/society/27/05/2020/5ecd05659a79472c86a33115',
		author: 'Илья Носырев',
		speaker: 'Юваль Харари',
		image: 'rbc.png'
	}
	,
	{
		title: 'Международный арт-форум Art Russia Online Forum объединит более 80&nbsp;экспертов',
		text: 'Международный арт-форум Art Russia Online Forum, который объединит более 80&nbsp;представителей сферы культуры и&nbsp;спорта, среди которых художник <span>Филип Колберт</span> и&nbsp;член международного комитета галереи Tate Modern Сильван Леви, пройдет в&nbsp;субботу. Часть дискуссий посвятят организации мероприятий в&nbsp;период пандемии, сообщили ТАСС в&nbsp;пресс-службе форума.',
		href: 'https://tass.ru/kultura/8545873',
		author: '',
		speaker: 'Филип Колберт',
		image: 'tass.png'
	}
	,
	{
		title: 'Спикеры Art Russia Online Forum обсудили digital-трансформацию искусства в&nbsp;период пандемии',
		text: 'В&nbsp;будущем цифровое и&nbsp;традиционное искусство будут идти рука об&nbsp;руку, но&nbsp;преимущество останется за&nbsp;творчеством, которое можно увидеть вживую. К&nbsp;такому выводу пришли эксперты и&nbsp;представители искусства на&nbsp;Art Russia Online Forum.',
		href: 'https://fedpress.ru/news/77/society/2504136',
		author: 'Александра Сергеева',
		speaker: '',
		image: 'fedpress.png'
	}
	,
	{
		title: 'Кьелл Нордстрем: коронавирус принесет шесть ключевых изменений',
		text: 'Мир ждет шесть серьезных изменений. Они&nbsp;бы настали в&nbsp;любом случае, но&nbsp;пандемия коронавируса их&nbsp;ускорила. Такое заявление в&nbsp;рамках Synergy Online Forum высказал шведский экономист <span>Кьелл Нордстрем</span>.',
		href: 'https://www.pravda.ru/news/economics/1498641-nordstrem_mir_izmenitsa/',
		author: '',
		speaker: 'Кьелл Нордстрем',
		image: 'pravda.png'
	}
	,
	{
		title: 'Шведский экономист Кьелл Нордстрем на&nbsp;онлайн-форуме &laquo;Синергии&raquo; описал мир после пандемии коронавируса',
		text: 'Шведский экономист <span>Кьелл Нордстрем</span> уверен, что пандемия коронавируса запустила процесс деглобализации. Об&nbsp;этом он&nbsp;рассказал во&nbsp;время выступления на&nbsp;Synergy Online Forum.',
		href: 'https://fedpress.ru/news/77/society/2498868',
		author: 'Александра Сергеева',
		speaker: 'Кьелл Нордстрем',
		image: 'fedpress.png'
	}
	,
	{
		title: 'Экономист рассказал, почему принятые в&nbsp;связи с&nbsp;COVID-19 меры усложняют ситуацию',
		text: 'Шведский экономист <span>Кьелл Нордстрем</span>, автор бестселлеров &laquo;Караоке капитализм&raquo; и&nbsp;&laquo;Бизнес в&nbsp;стиле фанк&raquo; на&nbsp;Synergy Online Forum рассказал, чем отличается нынешний кризис, а&nbsp;также почему предпринятые меры лишь усложняют ситуацию.',
		href: 'https://profile.ru/news/economy/ekonomist-rasskazal-pochemu-prinyatye-vsvyazi-s-covid-19-mery-uslozhnyayut-situaciyu-316892/',
		author: 'Анастасия Мамина',
		speaker: 'Кьелл Нордстрем',
		image: 'profil.png'
	}
	,
	{
		title: 'Кьелл Нордстрем&nbsp;&mdash; РБК: &laquo;Роботы не&nbsp;опаснее, чем вставные зубы&raquo;',
		text: 'Известный шведский экономист прогнозирует, что мир станет прежним в&nbsp;течение пяти-шести лет после кризиса. Пандемия&nbsp;&mdash; это не&nbsp;конец истории: она даже поможет развитию цивилизации',
		href: 'https://pro.rbc.ru/demo/5ec795e59a79472ea214b513?from=newsfeed',
		author: '',
		speaker: 'Кьелл Нордстрем',
		image: 'pro_rbc.png'
	}
	,
	{
		title: '&laquo;В&nbsp;ХХI веке нас ждут вещи похуже коронавируса&raquo;: автор Sapiens предупредил о&nbsp;новых угрозах',
		text: 'Мир спасет не&nbsp;изоляция, а&nbsp;сотрудничество, и&nbsp;государства должны объединиться, чтобы подготовиться к&nbsp;новым сложностям &laquo;похуже коронавируса&raquo;. Об&nbsp;этом израильский историк и&nbsp;автор бестселлера &laquo;21&nbsp;урок для ХХI&nbsp;века&raquo; <span>Юваль Харари</span> заявил на&nbsp;мероприятии Synergy Online. Forbes приводит его основные тезисы.',
		href: 'https://www.forbes.ru/obshchestvo/401807-v-hhi-veke-nas-zhdut-veshchi-pohuzhe-koronavirusa-avtor-sapiens-predupredil-o',
		author: 'Наталья Пешкова',
		speaker: 'Юваль Харари',
		image: 'forbes.jpg'
	}
	,
	{
		title: 'Дополненная реальность, пластиковые болельщики, трансляции будущего: эксперт&nbsp;&mdash; о&nbsp;новых трендах индустрии спорта',
		text: 'По&nbsp;предварительным подсчетам, общие потери спортивной индустрии могут составить $12&nbsp;млрд. Спортивной индустрии предстоит по-новому общаться с&nbsp;болельщиками и&nbsp;адаптировать привычные инструменты взаимодействия под кризис, считает гендиректор Sports.ru <span>Марк Тен</span>. Своими размышлениями на&nbsp;этот счет он&nbsp;поделился в&nbsp;ходе на&nbsp;Synergy Online Forum.',
		href: 'https://www.interfax-russia.ru/moscow/sport/dopolnennaya-realnost-plastikovye-bolelshchiki-translyacii-budushchego-ekspert-o-novyh-trendah-industrii-sporta',
		author: '',
		speaker: 'Марк Тен',
		image: 'interfax-russia.jpg'
	}

]%}

{# Резерв #}
{#

	{
		title: 'Юлия Митрович: &laquo;Спрос на&nbsp;онлайн вырос, но&nbsp;это никак не&nbsp;заменяет текущий бизнес&raquo;',
		text: 'Совладелица Novikov School в&nbsp;преддверии Synergy Online Forum поделилась своим видением текущей ситуации и&nbsp;прогнозами о&nbsp;будущем ресторанной сферы.',
		href: 'http://restoranoved.ru/articles/yuliya-mitrovich-spros-na-onlayn-vyros-no-eto-nikak-ne-zamenyaet-tekuschiy-biznes/',
		author: '',
		speaker: '',
		image: 'restoranoved.jpg'
	}
	,
	{
		title: 'Что будет со&nbsp;сферой&nbsp;PR в&nbsp;кризис: тенденции, прогнозы',
		text: 'Роман Масленников, директор агентства &laquo;Взрывной&nbsp;PR&raquo;, автор книги “Затоптан и&nbsp;забыт. Вашему бизнесу не&nbsp;выжить без PR” в&nbsp;преддверии антикризисного Synergy Online Forum поделился своим видением ситуации.',
		href: 'https://events.actualmarketing.ru/blog/chto-budet-so-sferoj-pr-v-krizis-tendenczii-prognozy/',
		author: '',
		speaker: '',
		image: 'actualmarketing.png'
	}
	,
	{
		title: 'Маркетплейсы в&nbsp;кризис и&nbsp;после него',
		text: 'Выход в&nbsp;онлайн для МСП сейчас единственный способ выжить. Причем, начать работать на&nbsp;маркетплейсе быстрее и&nbsp;легче, чем форсировать создание собственного сайта.',
		href: 'https://www.retail.ru/articles/marketpleysy-v-krizis-i-posle-nego/',
		author: '',
		speaker: '',
		image: 'retail.png'
	}
	,

#}
