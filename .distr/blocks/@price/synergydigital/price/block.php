{% import 'price/macro.php' as price %}
{% import './macro.php' as price_digital %}

<section class="price" id="price">
	{{ price.header() }}

	<div class="container">
		{{ price.payment() }}
{#	{{ price.program() }}
		{{ price.language() }}  #}
	</div><!-- container -->
	{{ price_digital.base() }}
	{{ price_digital.sbs() }}
	{{ price_digital.crm() }}
	{{ price_digital.lang() }}
	<?php if ( $lang != 'en' ) { ?>
		{{ price_digital.university() }}
		{#{{ price.faq() }}#}
		{{ price_digital.footer() }}
	<?php } ?>
</section><!-- price -->
