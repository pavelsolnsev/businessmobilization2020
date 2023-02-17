{% import 'price-new/macro.php' as price %}
{% import './macro.php' as price_legalforum %}

<section class="price" id="price">
	<div class="container">
		{{ price_legalforum.header() }}
		<?php if ($version == 'legalforum__offline') { ?>
			{{ price.offline('wrap_class') }} 
		<?php } elseif ($version == 'legalforum__online') { ?>
			{{ price.offline() }} 
			{{ price_legalforum.header_desc() }}
		<?php } else { ?>
			{{ price.offline('legalforum_online') }} 
			{{ price_legalforum.header_desc() }}
			{{ price_legalforum.header_2() }}
			{{ price.offline('wrap_class legalforum_offline') }}
		<?php } ?>
	</div><!-- container -->
</section>