{% import 'price-new/macro.php' as price %}
{% import './macro.php' as price_development %}

<section class="price" id="price">
	<div class="container">
		{{ price_development.header() }}
		{{ price.offline() }}
		{{ price_development.header_desc() }}
		{{ price.base() }}
		{{ price.extended() }}
		{{ price.description() }}
		{{ price.bottom() }}
	</div><!-- container -->
</section>