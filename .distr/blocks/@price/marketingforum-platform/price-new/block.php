{% import 'price-new/macro-short.php' as price %}

<section class="price" id="price">
	<div class="container">
		{{ price.header() }}
		{{ price.demo() }}
		{{ price.header_desc() }}
		{{ price.faq() }}
		{{ price.description() }}
		{{ price.header('bottom') }}
		{{ price.demo() }}
		{{ price.header_desc() }}
		<a class="payment-button button" onclick="$('#price-demo').trigger('click')">DEMO-подписка</a>
	</div><!-- container -->
</section>