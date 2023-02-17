{% import 'form/macro.php' as common_form %}
{% import 'main/macro.php' as common_main %}


{% macro inner(form_id) %}
<div class="container main__container">
	<?php if ( $version_main_speaker['id'] ) { ?>

		<div class="row">
			<div class="col-md-4 col-6 main__col-1">
				{{ title() }}
			</div><!-- col -->
			<div class="col-lg-5 col-md-8 col-6 main__col-2">
				{{ common_main.speaker() }}
			</div><!-- col -->
			<div class="col-0 col-md-3 main__col-2">
				<div class="main__form d-none d-lg-block">
					{{ common_form.form( form_id, form_class='form_vertical' ) }}
				</div><!-- main__form -->
			</div><!-- col -->
		</div><!-- row -->
		<div class="main__button d-block d-md-none"><a href="#popup-registration" class="main__button-link button button_red" data-fancybox="">Регистрация</a></div>
		{{ books() }}
	<?php } ?>

</div><!-- container -->
{% endmacro %}


{% macro title() %}
<div class="main__title">
	<div class="main__title-speaker-date"><?= date_ru( $version_main_speaker['date'] . '.' . date('Y') ) ?> <?= $version_main_speaker['time'] ?></div>
	<div class="main__title-speaker-name xcondensed"><?= _("speakers-{$version_main_speaker['id']}-name") ?></div>
	<div class="main__title-speaker-note xcondensed"><span class="color-red">Кармический менеджмент:</span><br>мастер-класс от первого<br>американского ГЕше</div>
</div><!-- main__title -->
{% endmacro %}

{% macro books() %}
		<div class="main__books-wrap d-md-block d-none">
			<img class="main__books main__books_1" src="img/main/speaker/roach_book1.jpg" alt="">
			<img class="main__books main__books_2" src="img/main/speaker/roach_book2.jpg" alt="">
		</div>
{% endmacro %}