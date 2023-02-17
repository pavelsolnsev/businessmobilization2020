{% import './macro.php' as price %}

<section class="price" id="price">
	{{ price.header() }}

	<div class="container">
		{{ price.payment() }}
{#	{{ price.program() }}
		{{ price.language() }}  #}
		{{ price.faq() }}
		{{ price.base() }}
		{{ price.sbs() }}
		{{ price.crm() }}
		{{ price.lang() }}
		<?php if ( $lang != 'en' && $lang != 'tr' && $lang != 'es' && $lang != 'pt' && $lang != 'tr') { ?>
		{{ price.university() }}			
		<?php } ?>
	</div><!-- container -->
		{{ price.header() }}	
	<div class="container">		
		{{ price.payment('bottom') }}
		<?php if ( $lang != 'en' && $lang != 'tr' && $lang != 'es' && $lang != 'pt' && $lang != 'tr') { ?>
		{{ price.footer() }}
		<?php } ?>
	</div><!-- container -->

	{#% include 'main-price/block.php' %#}
</section>