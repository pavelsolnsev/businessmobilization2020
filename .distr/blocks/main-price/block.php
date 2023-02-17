{% import 'main/macro.php' as main %}

<section class="main main-price">
	<div class="container main__container">
		<div class="row">
			<div class="col-12">

				{{ main.info() }}

				<div class="main__title">
					<img src="img/main-price/title.svg" alt="" class="main__title-image">
				</div><!-- main__title -->

				{{ main.slogan() }}

			</div><!-- col -->
		</div><!-- row -->
		{{ main.features() }}
	</div><!-- container -->
	{#{ main.marquee() }#}
</section><!-- main -->
