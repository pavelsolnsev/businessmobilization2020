{% import './macro.php' as price %}

<section class="price" id="price">
	<div class="container">
		{{ price.header() }}
		{{ price.header_desc() }}
		{{ price.base() }}
		{{ price.extended() }}
		{{ price.description() }}
		{{ price.bottom() }}
	</div><!-- container -->
</section>