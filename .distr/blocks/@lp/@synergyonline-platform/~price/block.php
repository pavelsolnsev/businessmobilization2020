{% import './macro.php' as price %}

<section class="price" id="price">
	<div class="container">
		{{ price.payment() }}
	</div><!-- container -->
</section>