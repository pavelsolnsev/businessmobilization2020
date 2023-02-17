{% import 'price/macro.php' as price %}
{% import './macro.php' as price_digital %}

<section class="price" id="price">

	{{ price.header() }}

	<div class="container">
		{{ price_digital.payment() }}
		{{ price_digital.faq() }}
	</div>
	
	{{ price_digital.base() }}
	{{ price_digital.sbs() }}
	{{ price_digital.crm() }}
	{{ price_digital.lang() }}

	<?php if ( $lang != 'en' ) { ?>
		{{ price_digital.university() }}
		
	<?php } ?>

	{{ price.header() }}
	<div class="container">
		{{ price_digital.payment() }}
		<?php if ( $lang != 'en' && $lang != 'tr' && $lang != 'es' && $lang != 'pt' && $lang != 'tr') { ?>
		{{ price_digital.footer() }}
		<?php } ?>
	</div>
</section><!-- price -->
