<? php
{% set infopartners = [

	{ image: 'rbc.jpg', href: 'https://rbc.ru', ru: true}
	,{ image: 'rambler2.png', href: 'https://www.rambler.ru/', ru: true}
	,{ image: 'finam.jpg', href: 'https://www.finam.ru/', ru: true}
	,{ image: 'fedpress.jpg', href: 'https://fedpress.ru/', ru: true}
	,{ image: 'profil.jpg', href: 'https://profile.ru/', ru: true}
	,{ image: 'mir24.png', href: 'https://mir24.tv', ru: true}
	,{ image: 'rbc-krasnodar.jpg', href: 'https://kuban.rbc.ru/', ru: true}
	,{ image: 'expert.jpg', href: 'https://expert.ru/', ru: true}
	,{ image: 'kommersant-yug.png', href: 'https://www.kommersant.ru/regions/61', ru: true}
	,{ image: 'finansovaya-gazeta.jpg', href: 'https://fingazeta.ru/', ru: true}
	,{ image: 'rgru.png', href: 'https://rg.ru/', ru: true}
	,{ image: 'exo.jpg', href: 'http://echomskufa.ru', ru: true}
	,{ image: 'rbc-chernozem.png', href: 'https://chr.rbc.ru', ru: true}

	,{ image: 'be.jpg', href: 'https://ria-stk.ru/ds/about.php?utm_source=infopartner&utm_medium=logo&utm_campaign=synergy_online_forum', en: true, ru: true}
	,{ image: 'logirus.jpg', href: 'http://logirus.ru/', ru: true}
	,{ image: 'boss.png', href: 'http://www.bossmag.ru/', ru: true}
	,{ image: 'takemytime.jpg', href: 'http://takemytime.ru/?utm_source=synergy&utm_medium=logo', ru: true}
	,{ image: 'bo.jpg', href: 'https://bosfera.ru/', ru: true}
	,{ image: 'NBJ.jpg', href: 'http://nbj.ru/', en: true, ru: true}
	,{ image: 'sport.png', href: 'https://www.sportsdaily.ru', ru: true}
	,{ image: 'tv-brics.png', href: 'https://tvbrics.com/', ru: true}
	,{ image: 'nr.jpg', href: 'https://new-retail.ru/', en: true, ru: true}
	,{ image: 'business_journal.png', href: 'https://business-magazine.online', ru: true}
	,{ image: 'PRObusiness.jpg', href: 'https://www.probusinesstv.ru/', ru: true}
	,{ image: 'financial-one.png', href: 'https://fomag.ru/', ru: true}

	,{ image: 'sustainable_business.jpg', href: 'http://csrjournal.com/', en: true, ru: true}
	,{ image: 'daylymoscow.png', href: 'https://dailymoscow.ru/', ru: true}
	,{ image: 'cetre.png', href: 'https://cetre.ru/', en: true, ru: true}
	,{ image: 'naom.png', href: 'http://eventros.ru', ru: true}
	,{ image: 'eventmarket.png', href: 'https://eventmarket.ru/', ru: true}
	,{ image: 'retail.png', href: 'https://www.retail.ru', ru: true}
	,{ image: 'shopandmall.png', href: 'https://shopandmall.ru', en: true, ru: true}
	,{ image: 'rl.png', href: 'https://www.retail-loyalty.org', en: true, ru: true}
	,{ image: 'plusworld.png', href: 'https://www.plusworld.ru', ru: true}
	,{ image: 'hr-270.png', href: 'http://hr-elearning.ru/', ru: true}
	,{ image: 'working-mama.png', href: 'http://workingmama.ru', ru: true}
	,{ image: 'welcometimes.jpg', href: 'https://welcometimes.ru', en: true, ru: true}

	,{ image: 'smallbusiness.jpg', href: 'https://smallbusiness.ru/', ru: true}
	,{ image: 'uralpress.jpg', href: 'https://uralpress.ru/', ru: true}
	,{ image: 'granadapress.jpg', href: 'https://granadapress.ru', ru: true}
	,{ image: 'bm24.png', href: 'https://bm24.ru', ru: true}
	,{ image: 'nskdnk.jpg', href: 'https://nsk.dk.ru', ru: true}
	,{ image: 'bkn.jpeg', href: 'https://nsk.dk.ru', ru: true}
	,{ image: 'nn_color.png', href: 'https://www.nn.ru/?utm_source=synergy&utm_medium=cpc&utm_campaign=%7Bonline_conference_synergy%7D&utm_content=%7Bad_id%7D_%7Bsitesynergy%7D&utm_term=%7Bsynergy%7D', ru: true}
	,{ image: 'DFM.png', href: 'https://dfmnn.ru', en: true, ru: true}
	,{ image: 'LogoRandevunew.png', href: 'https://randevuradio.ru', ru: true}
	,{ image: 'sputnikfm.jpg', href: 'https://radio.pp.ru/sputnik-107-fm-ufa/', ru: true}
	,{ image: 'tatcenter.png', href: 'http://tatcenter.ru', en: true, ru: true}
	,{ image: 'ugra-news.png', href: 'https://ugra-news.ru', ru: true}
	,{ image: '7info.png', href: 'https://7info.ru/', ru: true}
	,{ image: 'bmc.png', href: 'https://www.baikal-media.ru', ru: true}
	,{ image: 'radio-1.png', href: 'https://radio1.news', ru: true}
	,{ image: 'infopro.png', href: 'https://infopro54.ru/', ru: true}
	,{ image: 'volga-news.png', href: 'https://volga.news/', ru: true}
	,{ image: 'marie-claire.png', href: 'https://www.marieclaire.ru', en: true, ru: true}
	,{ image: 'radiokp.png', href: 'https://www.kp.ru/radio/', ru: true}
	,{ image: 'eva.jpg', href: 'https://eva.ru/', ru: true}
	,{ image: 'starhit.png', href: 'https://www.starhit.ru/', ru: true}
	,{ image: 'orenburg.png', href: 'https://prooren.ru/', ru: true}
	,{ image: 'crn.png', href: 'https://www.crn.ru/', ru: true}
	,{ image: 'comode.png', href: '', ru: true}
	,{ image: 'jobsora1.png', href: 'https://ru.jobsora.com/', ru: true}
	,{ image: 'pogodaev.png', href: 'https://pgdv.ru/', ru: true}
	,{ image: 'regru.png', href: 'https://www.reg.ru/?utm_source=site&utm_medium=event&utm_campaign=synergy', ru: true}
	,{ image: 'skyeng.png', href: 'http://skyeng.ru/go/synergyglobal', en: true, ru: true}
	,{ image: 'moda-news.jpg', href: 'https://modanews.ru/', ru: true}
	,{ image: 'uz-avtoradio.jpeg', href: 'http://avtoradio.uz/', ru: true}
	,{ image: 'trc-moscow.png', href: 'https://trcmoscow.ru/', ru: true}
	,{ image: 'e_pepper.png', href: 'https://e-pepper.ru/ ', ru: true}
	,{ image: 'allcafe.png', href: 'https://allcafe.ru/', ru: true}
	,{ image: 'banki-kredity.png', href: 'https://banki-kredity.ru/', ru: true}
	,{ image: 'piterzavtra.jpg', href: 'https://piterzavtra.ru/', ru: true}
	,{ image: 'strategy.png', href: 'https://strategyjournal.ru/', ru: true}
	,{ image: 'cqc.png', href: 'https://c-qc.com/', ru: true}
	,{ image: 'jooble.jpg', href: 'https://ru.jooble.org', ru: true}
	,{ image: 'shkulev.jpg', href: '', ru: true}
	,{ image: 'domagazine.png', href: 'http://www.domagazine.ru', ru: true}

]
%}

{% set partners = [

	 { image: 'hue.png', en: true}
	,{ image: 'megogo.png', href: 'https://megogo.ru/ru', en: true}
	,{ image: 'gallery.png', href: 'www.gallerymedia.com', en: true, ru: true}
	,{ image: 'vostok-media.png', href: 'https://vmoutdoor.ru', ru: true}
	,{ image: 'arb.svg', href: '', ru: true}
	,{ image: 'fourbubbles.jpg', href: 'https://fourbubbles.ru/', ru: true}
	,{ image: 'president.jpg', href: 'https://www.prezi-dent.ru', ru: true}
	,{ image: 'emg.png', href: 'https://emg.fm/', ru: true}
	,{ image: 'tvzavr.png', href: 'https://www.tvzavr.ru/', ru: true}
	,{ image: 'efremov.png', href: 'https://efremov.gold/catalog/zoloto', ru: true}
	,{ image: 'pandora.png', href: 'https://pandorarussia.ru/', ru: true}
	
	,{ image: 'seranking.png', href: 'https://seranking.ru/', en: true, ru: true}
	,{ image: 'sendsay.png', href: 'https://sendsay.ru', en: true, ru: true}
	,{ image: '23etazh.png', href: 'https://2big.ru/', ru: true}
	,{ image: 'worldclass.png', href: 'https://www.worldclass.ru/', en: true, ru: true}
	,{ image: 'deonica.png', href: 'https://pro-deonica.ru/series/antibacterial', en: true}

	,{ image: 'synclear.jpg', href: 'https://synclear.ru/?utm_source=synergy.online&utm_medium=logo&utm_campaign=synergy.online.logo', ru: true}
	,{ image: 'litres.png', href: 'https://www.litres.ru/', ru: true}
	,{ image: 'bwell.png', href: 'https://bwell-swiss.ru/', ru: true}
	,{ image: 'glambox.png', href: 'https://www.samplesociety.ru/', ru: true}
	,{ image: 'yablokov.jpg', href: 'http://yablokov-snack.ru/', ru: true}
	,{ image: 'hval-waters.png', href: 'https://msc.hvalwaters.ru/', ru: true}
	,{ image: 'waterpik.png', href: 'https://waterpikrussia.ru/', ru: true}
	,{ image: 'saco.jpg', href: 'https://sacohair.ru/', ru: true}

	,{ image: 'bio-cera.png', href: 'https://bio-cera.ru/', ru: true}
	,{ image: 'pro-acryl.jpg', href: 'http://www.proacryl.com/', ru: true}
	,{ image: 'shilova.png', href: 'https://doctor-shilova.ru/', ru: true}

	,{ image: 'foreo.png', href: 'https://www.foreo.com/ru', ru: true}
	,{ image: 'lumene.png', href: 'https://lumene.ru/?utm_source=Synergy&utm_medium=banner&utm_campaign=Lumene%20e-com ', ru: true}
	,{ image: 'erborian.png', href: 'https://www.erborian.ru/', ru: true}
	,{ image: 'sarto-reale.png', href: 'https://sartoreale.ru/', en: true, ru: true}
	,{ image: 'ortho-sleep.png', href: 'https://orthosleep.ru/', en: true, ru: true}
	,{ image: 'kitay.jpg', href: 'https://ttclub.ru/', ru: true}
	,{ image: 'just.jpg', href: 'https://jit.site/', ru: true}
	,{ image: 'mentos.jpg', href: '', ru: true}

	,{ image: 'wellness.png', href: 'http://www.rwclub.ru/', ru: true}
	,{ image: 'kitami.jpg', href: 'https://bit.ly/3haDzp8', en: true, ru: true}
	
	,{ image: 'level.jpg', href: 'https://levelvan.ru/', ru: true}

	,{ image: 'grand-clinic.png', href: 'https://www.grand-clinic.ru/', ru: true}
	,{ image: 'madelene.jpg', href: 'https://www.madeleine.ru/', ru: true}
	,{ image: 'dr-shipkov.png', href: 'http://shipkovclinic.ru/', en: true, ru: true}
	,{ image: 'esalen.png', href: '', en: true}
	,{ image: 'septima.png', href: '', ru: true}
	,{ image: 'sendpulse.png', href: 'https://sendpulse.com/ru', en: true}
	,{ image: 'ActualMarketing.png', href: 'https://actualmarketing.ru/', en: true}
	,{ image: 'garti.jpg', href: 'https://www.garti.me ', ru: true}
	,{ image: 'kinoafisha.png', href: 'https://www.kinoafisha.info/', ru: true}
	,{ image: 'calltouch.png', href: 'https://www.calltouch.ru/', en: true }
	,{ image: 'tealine.jpg', href: 'https://chaline.ru/', ru: true}
	,{ image: 'nuetrale.png', href: 'https://swisspharmcosmetics.com/', ru: true}
	,{ image: 'third-thing.jpg', href: 'https://3sense.ru/', ru: true}

	,{ image: 'bquadro.png', href: 'https://clck.ru/Mm9z6', ru: true}

	,{ image: 'justforyou.png', href: 'https://justforyou.ru/programs/', ru: true}
	,{ image: 'delalma.jpeg', href: 'http://delalma.tilda.ws/', en: true}
	,{ image: 'unisender.png', href: 'https://www.unisender.com', en: true}
	,{ image: 'hydrafacial.png', href: 'https://hydrafacial.ru/', ru: true}
	,{ image: 'sova.jpg', href: 'https://cobascent.com/', ru: true}

	,{ image: 'oimon.jpg', href: 'https://xn--i1acfebbc6b.xn--p1ai/', ru: true}
	
	,{ image: 'agima.png', href: 'https://www.agima.ru/', en: true, ru: true}
	,{ image: 'trendfox.jpeg', href: 'https://trendfox.ru/?utm_source=synergy&utm_term=synergy', en: true, ru: true}
	,{ image: 'collagen.png', href: 'https://www.collagen-live.ru/store', ru: true}
	,{ image: 'kidsdev.jpg', href: 'http://kidsd.ru/', en: true}
	,{ image: 'alpina.png', href: 'https://www.alpinabook.ru/blog/alpina-doma-pryamye-efiry-s-avtorami-kazhdyy-den-/', ru: true}
	,{ image: 'prparthner.png', href: 'https://www.prpartner.ru/', en: true, ru: true}
	,{ image: 'mcn-telecom.png', href: 'https://www.mcn.ru/', en: true}
	,{ image: '3z.png', href: 'https://moscow.3z.ru/', ru: true}
	,{ image: 'fppyu.png', href: 'https://бизнесюгры.рф/', ru: true}
	,{ image: 'redmond.png', href: 'https://multivarka.pro/?utm_source=bloger&utm_medium=sinergia_logo&utm_campaign=sinergia_logo_multivarka', en: true}
	,{ image: 'ichien.png', href: 'https://www.ichien.ru/', en: true}
	,{ image: 'hh.png', href: 'https://my.hh.ru/lnb', ru: true}
	,{ image: 'skazka.png', href: 'https://parkskazka.com/', ru: true}
	,{ image: 'expoclub.png', href: 'https://expoclub.ru', ru: true}
	,{ image: 'asiatique.png', href: 'https://asiatique.rest/', ru: true}
	,{ image: 'ramayoga.png', href: 'https://ramayoga.ru/', ru: true}
	,{ image: 'th.png', href: '', en: true}
	,{ image: 'ig.jpg', href: 'https://www.intelligent.gifts/', ru: true}

	,{ image: 'logo-gor.png', href: 'http://4hub.com.ua/', en: true, ru: true}
	,{ image: 'river-screen.png', href: '', ru: true}
	,{ image: 'deonica.png', href: 'https://pro-deonica.ru/series/antibacterial', ru: true}
	,{ image: 'barberia.png', href: 'https://barberia.ru/', ru: true}
	,{ image: 'palais.jpg', href: 'https://palaisdesthes.ru/?utm_campaign=synergy&utm_source=partners&utm_medium=&utm_term=&utm_content=synergy', ru: true}
	,{ image: 'elemis.jpg', href: 'https://elemis.ru/', ru: true}
	,{ image: 'casablanca.jpg', href: 'https://casa.dance/', ru: true}
	,{ image: 'topfranchise.png', href: 'https://topfranchise.ru/', ru: true}
	,{ image: 'jooble.jpg', href: 'https://ru.jooble.org', en: true}
	,{ image: 'gess.png', href: 'https://gessmarket.ru/?utm_source=synergy&utm_medium=video&utm_campaign=synergy', ru: true}
	,{ image: 'reboot.png', href: 'https://reboot.ru/', ru: true}
	,{ image: 'souzconsalt.png', href: 'http://souzconsalt.com/', ru: true}
	,{ image: 'ingria.png', href: 'https://ingria-park.ru/', ru: true}
	,{ image: 'jobeka.png', href: 'https://jobeka.com/', ru: true}
	,{ image: 'si-energy.jpg', href: 'https://sienergywater.com', ru: true}
	,{ image: 'myprotein.png', href: 'https://www.myprotein.ru/', ru: true}
	,{ image: 'domos.jpg', href: 'http://domosdesign.ru/', ru: true}
	,{ image: 'ecodemica.jpg', href: 'https://ecodemica.ru', ru: true}
	,{ image: 'silk-plaster.png', href: 'https://www.plasters.ru/', ru: true}
	,{ image: 'melsytech.png', href: 'http://melsytech.com', ru: true}
	,{ image: 'berejki.jpg', href: 'https://berejki-hall.ru/', ru: true}
	,{ image: 'penta.png', href: 'https://www.pentahotels.com/ru/hotels-destinations/russia/moscow-arbat', ru: true}
	,{ image: 'guinot.jpeg', href: 'https://guinot-spa.ru/', ru: true}
	,{ image: 'emprana.jpg', href: 'https://emprana.ru/', ru: true}
	,{ image: 'psbox.png', href: 'https://www.ps-box.ru/', ru: true}
	,{ image: 'insmile.jpg', href: 'https://insmile.ru/', ru: true}
	,{ image: 'doona.png', href: 'https://www.instagram.com/doona_cis/', ru: true}
	,{ image: 'bonny.jpg', href: '', ru: true}
	,{ image: 'papacare.jpg', href: '', ru: true}
	,{ image: 'cdek.png', href: 'http://cdek.ru/?utm_source=sinergy&utm_medium=cpc&utm_campaign=promo', ru: true}
	,{ image: 'poni.jpg', href: 'https://pony.market/?utm_source=banner&utm_medium=paid&utm_campaign=bannerj3', ru: true}
	,{ image: 'sslova.jpg', href: 'https://www.lingvo-svoboda.ru', ru: true}
	,{ image: 'spabar.jpg', href: 'https://spa-bar.ru/', ru: true}
	,{ image: 'fresh-dress.jpg', href: 'https://freshdress-shop.ru/', ru: true}
	,{ image: 'expressnails.jpg', href: 'https://www.expressnails.ru/', ru: true}
	,{ image: 'esalen.png', href: 'https://www.esalen.ru/', ru: true}
	,{ image: 'chaika.png', href: 'http://restoran-chaika.ru/', ru: true}
	,{ image: 'lastochka.jpg', href: 'http://restoran-lastochka.ru/', ru: true}
	,{ image: 'healthwaters.png', href: 'https://www.healthwaters.ru/', ru: true}
	,{ image: 'freshcoffee.jpg', href: 'https://freshcoffee.ru/', ru: true}
	,{ image: 'roxberry.png', href: 'https://roxberrystore.ru/', ru: true}
	,{ image: 'arena-space.jpg', href: 'https://arenaspace.ru/', ru: true}
	,{ image: 'tassay.jpg', href: 'https://www.tassay.ru/', ru: true}
	,{ image: 'stolitsa.jpg', href: 'https://100-face.ru/', ru: true}
	,{ image: 'baikal.png', href: 'https://shop.tkbaikalaqua.com/', ru: true}
	,{ image: 'firstonly.png', href: 'https://www.firstandonly.ru/', ru: true}
	,{ image: 'beauty_bash.jpg', href: 'https://beautybash.ru/', ru: true}
	,{ image: 'delfy.jpg', href: 'http://delfycosmetics.ru/', ru: true}
	,{ image: 'lab-space.jpg', href: 'https://labspacefit.ru ', ru: true}
	,{ image: 'openbusiness.png', href: 'https://www.openbusiness.ru/', ru: true}
	,{ image: 'novaskin.png', href: 'https://ceroxin.com/', ru: true}
	,{ image: 'svoboda.jpg', href: 'http://www.svobodako.ru/start2.aspx?s=0&p=312', ru: true}
	,{ image: 'mashakhova.png', href: 'http://mashakhova.ru/', ru: true}
	,{ image: 'wall-street.png', href: 'https://www.wallstreetenglish.ru/?utm_campaign=synergy_onlineforum_main', ru: true}
	,{ image: 'dom-ru.png', href: 'https://perm.b2b.domru.ru/', ru: true}
	,{ image: 'prnews.jpg', href: 'https://www.prnews.ru/', en: true, ru: true}
	,{ image: 'gorodrabot.png', href: 'https://gorodrabot.ru/', ru: true}
	,{ image: 'insight.jpg', href: 'https://bi-school.ru', ru: true}
	,{ image: 'moi_buisness.png', href: '', ru: true}
	,{ image: 'BIGBOOKEDU.jpg', href: 'https://moscow.big-book-edu.ru/', ru: true}
	,{ image: 'ingate.jpg', href: 'https://www.ingate.ru/', en: true, ru: true}
	,{ image: 'emqarta.jpg', href: 'https://eqpa.ru/', ru: true}
	,{ image: 'rutube.png', href: 'https://clck.ru/PiQnb', ru: true}
	,{ image: 'portobello.jpg', href: 'https://portobello.ru/', ru: true}
	,{ image: 'rubin.jpg', href: 'http://rubin-gift.ru', ru: true}
	,{ image: 'naturalium.jpg', href: 'https://shop.rivegauche.ru/search?text=naturalium', ru: true}
	,{ image: 'charles.jpg', href: 'https://shop.rivegauche.ru/search?text=charles%20worthington', ru: true}
	,{ image: 'stmoriz.jpg', href: 'https://shop.rivegauche.ru/search?text=st%20moriz', ru: true}
	,{ image: 'noyeti.jpg', href: 'http://noyeti.ru/', ru: true}

]
%}


{# Резерв #}

{#

	,{ image: 'green.jpg', href: 'https://instagram.com/simplygreen.msk?igshid=1k8chuiw4x2td', ru: true}
	,{ image: 'osteo.jpg', href: 'https://www.osteopolyclinic.ru/discount/89/?utm_source=synergy_woman_forum_mobile&utm_medium=email_mobile&utm_campaign=swf_mobile&utm_content=banner_mobile&utm_term=podrobnee_mobile', ru: true}
	,{ image: 'hotel-yes.png', href: 'https://yesapart.com/', ru: true}
	,{ image: 'kaplan.jpg', href: 'https://kaplan-smilespa.ru/', ru: true}
	,{ image: 'tantum.png', href: 'https://apteka.ru/product/tantum-verde-rastvor-5ec50eaa73967d00011db3f8/', ru: true}
	,{ image: 'isclinical.png', href: 'https://is-clinical.com.ua/', ru: true}
	,{ image: 'atol.png', href: 'https://online.atol.ru/', ru: true}
	,{ image: 'resnitci.jpg', href: 'https://lashstudia.ru/', ru: true}
	,{ image: 'beauty.png', href: 'http://bebeauty.moscow/', ru: true}
	,{ image: 'strategy.jpg', href: 'http://strategyjournal.ru/', ru: true}
	,{ image: 'demi.jpg', href: 'https://demi-brarus.ru/', ru: true}
	,{ image: 'gc.png', href: 'https://ylink.me/genius_cosmetology_clinica', ru: true}
	,{ image: 'beautybar.jpg', href: 'http://beautybar-lounge.com/', ru: true}
	,{ image: 'espresso.jpg', href: 'https://espressoperfetto.ru/', ru: true}
	,{ image: 'vysotskaya.png', href: 'https://studio.jvcompany.ru/', ru: true}
	,{ image: 'piroginomerodin.png', href: 'https://piroginomerodin.ru/', ru: true}
	,{ image: 'otido.png', href: 'https://instagram.com/ot_i_do_rest?igshid=1qwsxegmlevyf', ru: true}
	,{ image: 'langvei.jpg', href: 'https://www.langvey.ru/produktsiya.html', ru: true}
	,{ image: 'l-wine.JPG', href: 'https://l-wine.ru/news/spetsialnaya-skidka-40-po-promokodu-sf2020/', ru: true}
	,{ image: 'komus.png', href: 'https://www.komus.ru/', ru: true}
	,{ image: 'goryacheva.jpeg', href: 'https://mashagoryacheva.ru', ru: true}
	,{ image: 'yutskovskaya.png', href: 'https://yutskovskaya.ru/', ru: true}
	,{ image: 'welna.jpg', href: 'https://welna.ru/', ru: true}
	,{ image: 'evald.png', href: 'https://evald.ru/', ru: true}
	,{ image: 'chisto-v-dome.png', href: 'https://www.chistovdome24.ru/', ru: true}
	,{ image: 'garlyn.jpg', href: 'https://garlyn.ru/', ru: true}
	,{ image: 'mealjoy.jpg', href: 'https://mealjoy.ru/', ru: true}
	,{ image: 'tongpoo.png', href: 'http://www.tongpoo.ru/', en: true, ru: true}
	,{ image: 'sarto-reale.png', href: 'https://sartoreale.ru/', ru: true}
	,{ image: 'kompravda.jpg', href: 'https://www.rostov.kp.ru', ru: true}
	,{ image: 'frame-moscow.png', href: 'https://www.frameguide.ru/catalog', ru: true}
	,{ image: 'reboot.png', href: 'https://reboot.ru/', ru: true}
	,{ image: 'gorodovoy.png', href: 'https://www.gorodovoy.spb.ru/', ru: true}
	,{ image: 'rosfirm.JPG', href: 'https://www.rosfirm.ru/', ru: true}
	,{ image: 'bestinvest.jpg', href: 'https://www.bestinvestblog.com/', ru: true}
	,{ image: 'v-banket.png', href: 'http://xn----8sbccs3au6b.xn--p1ai/', ru: true}
	,{ image: 'balet.png', href: 'https://ballet-imperial.ru/', ru: true}
	,{ image: 'mbm.jpg', href: 'https://mbm.mos.ru/?utm_source=partners&utm_campaign=mobiliz2020&utm_medium=ssilka_na_saite', ru: true}
	,{ image: 'praim.jpg', href: 'https://1prime.ru/', ru: true}
	,{ image: 'restoranoved.png', href: 'http://restoranoved.ru', ru: true}
	,{ image: 'izvestiya.jpg', href: 'https://iz.ru', ru: true}
	,{ image: 'metro.png', href: 'https://www.metro-cc.ru/', en: true, ru: true}
	,{ image: 'molecule.png', href: 'https://molecule.ru/', ru: true}
	,{ image: 'select-radio.jpg', href: 'https://gkvr.ru/', ru: true}
	,{ image: 'om.png', href: 'https://olga-moroz.ru'}
	,{ image: '3sense.png', href: 'https://3sense.ru/'}
	,{ image: 'kivach.png', href: 'https://www.kivach.ru/'}
	,{ image: 'gfitness.png', href: 'https://gfitness.ru/'}
	,{ image: 'nika.png', href: 'https://nikawatches.ru/'}
	,{ image: 'bella.png', href: 'https://bellapotemkina.com/' }
	,{ image: 'ramu.png', href: 'https://www.ramu.ru/' }
	,{ image: 'garant.png', href: 'http://www.garant.ru/' }
	,{ image: 'urban-awards.png', href: 'https://www.urbanawards.ru'}
	,{ image: 'etazhi.jpg', href: 'https://www.etagi.com' }
	,{ image: 'sravni.png', href: 'https://www.sravni.ru'}
	,{ image: 'yord.png', href: 'http://yord.ru'}
	,{ image: 'russoft.jpg', href: 'https://russoft.org'}
	,{ image: 'webmart.png', href: 'https://webmart.by'}
	,{ image: 'sok.png', href: 'https://sok.works/ru'}
	,{ image: 'rts-tender.png', href: 'https://www.rts-tender.ru'}
	,{ image: 'tutoronline.png', href: 'https://www.tutoronline.ru'}
	,{ image: 'netpeak.png', href: 'https://netpeak.ru'}
	,{ image: 'netkam.png', href: 'https://www.netkam.ru'}
	,{ image: 'aport.png', href: 'https://www.aport.ru'}
	,{ image: 'faberlic.png', href: 'https://new.faberlic.com/ru', ru: true}
	,{ image: 'tai-spa.png', href: 'https://tairai.ru/', ru: true}
	,{ image: 'th.png', href: 'https://t.me/talent_hunters', ru: true}
	,{ image: 'zeitun.jpg', href: 'https://www.arabsoap.ru/', ru: true}
	,{ image: 'beautific.jpg', href: 'http://thebeautific.ru/', ru: true}
	,{ image: 'bambini.jpg', href: 'https://www.instagram.com/bambini_furniture/', ru: true}

#}
