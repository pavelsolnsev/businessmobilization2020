{% from './data.njk' import data as points %}

<section class="offer" id="offer">

	<div class="offer__top">
		<div class="container">
			<h1 class="offer__title title">Уважаемый спикер!</h1>
			<div class="offer__subtitle condensed color-black fw-black">Мы&nbsp;благодарим Вас за&nbsp;то&nbsp;что вы&nbsp;приняли наше предложение
				выступить на&nbsp;Synergy Online Forum!</div>
		</div>
	</div><!-- offer__top -->
	<div class="container">
		<div class="offer__box">

			<div class="offer__box-title condensed color-red fw-black">Просим Вас ознакомиться с&nbsp;офертой и&nbsp;подтвердить&nbsp;ее</div>			
			<div class="offer__list-wrap">
				<div class="offer__list">
					<div class="offer__list-title fw-bold">Договор-оферта <span> г.&nbsp;Москва&nbsp;<?= $version_offer_date_1 ?>&nbsp;2020&nbsp;г.</span></div>
					<div class="offer__list-desc">Общество с&nbsp;ограниченной ответственностью &laquo;Организация времени&nbsp;&mdash; корпоративные семинары&raquo; в&nbsp;лице Генерального директора Сароян Дианы Арсеновны, действующего на&nbsp;основании Устава, именуемый в&nbsp;дальнейшем &laquo;Заказчик&raquo;, предлагает лицу, сформировавшему электронную заявку, именуемому в&nbsp;дальнейшем &laquo;Автор&raquo;, принять участие в&nbsp;онлайн-мероприятии Synergy Online Forum на&nbsp;условиях, изложенных ниже:</div>
					<ol>
						{% for item in points %}
							<li class="offer__item"><span class="offer__item-title fw-bold">{{ item.title | safe }}</span>
								<ol>
									{{ item.content | safe }}
								</ol>
							</li>
						{% endfor %}
					</ol>
				</div><!-- offer__list -->
			</div><!-- offer__list-wrap -->

			<div class="form-horizontal lazy">
				{{ form.form( 'offer', title='', button='подтвердить', footer_text = 'Ознакомлен с публичной офертой' ) }}
			</div><!-- form-horizontal -->	

		</div><!-- offer__box -->

	</div><!-- container -->
</section><!-- concept -->