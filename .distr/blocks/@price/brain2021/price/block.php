{% import '../../../price/macro.php' as price %}
{% import './macro.php' as price_brain %}

<section class="price" id="price">
	{{ price.header() }}

	<div class="container">

		{{ price.payment() }}

		{#
		{{ price_brain.fulltime() }}
		{{ price.program() }}
		{{ price.language() }}
		<?php if ( $lang != 'en' ) { ?>
		{{ price.faq() }}
		<?php } ?>
		{{ price.base() }}
		{{ price.sbs() }}
		{{ price.crm() }}
		{{ price.lang() }}
		<?php if ( $lang != 'en' ) { ?>
		{{ price.university() }}
		{{ price.footer() }}
		<?php } ?>
		#}

	</div><!-- container -->
	
</section>