{% from './data.php' import data as list %}
<div class="faq" id="faq">

	<div class="container">
		<div class="faq__title condensed">FAQ</div>
		<div class="faq__box">

			{% for item in list %}
			<div class="faq__item">
				<div class="faq__item-top">{{item.question | safe }}</div>
				<div class="faq__item-bottom">{{item.answer | safe }}</div>
			</div>
			{% endfor %}

		</div><!-- faq__box -->
	</div><!-- container -->

</div><!-- faq -->
