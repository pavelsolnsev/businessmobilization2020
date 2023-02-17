{% extends 'header/block.php' %}


{% block header_links %}
<?php if ( $is_block_about ) { ?>
	<div class="header__links-item"><a href="#about" class="header__links-link scroll"><?= _('header__links-digital-plf') ?></a></div>
<?php } ?>
<div class="header__links-item"><a href="#speakers" class="header__links-link scroll"><?= _('header__links-speakers') ?></a></div>
<div class="header__links-item"><a href="#online-plf" class="header__links-link scroll"><?= _('header__links-online-plf') ?></a></div>
<div class="header__links-item header__links-item_press"><a href="#press" class="header__links-link scroll"><?= _('header__links-press') ?></a></div>
<div class="header__links-item"><a href="#base" class="header__links-link scroll"><?= _('header__links-base') ?></a></div>
<div class="header__links-item"><a href="#services" class="header__links-link scroll"><?= _('header__links-services') ?></a></div>
<div class="header__links-item header__links-item_franch"><a href="#franchise" class="header__links-link scroll"><?= _('header__links-franchise') ?></a></div>
{% endblock %}
