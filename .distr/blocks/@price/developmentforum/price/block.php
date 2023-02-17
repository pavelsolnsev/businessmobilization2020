{% import '../../../price/macro.php' as price %}
{% import './macro.php' as hrforum %}

<section class="price" id="price">
			
	<div class="price__ticket-wrap">
		{{ price.header() }}
		<div class="container">
				{{ price.payment() }}
		{#  {{ price.program() }}
				{{ price.language() }} #}
		</div><!-- container -->
	</div>
	<div class="price__bottom">
		<div class="container">
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
		</div><!-- container -->
	</div><!-- price__bottom -->
	
</section>