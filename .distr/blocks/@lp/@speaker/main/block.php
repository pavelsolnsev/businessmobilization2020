{% import './macro.php' as main %}

<div class="main__bg">
	<section class="main-1 main <?= !$version_main_speaker['id'] ? 'main_no-speaker' : '' ?>" id="main-1">

		{{ main.inner('intro') }}

	</section><!-- main -->
</div><!-- main__bg -->
