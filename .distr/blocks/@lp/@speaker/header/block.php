{% extends 'header/block.php' %}


{% block header_logo %}
<img src="<?= _('vujicic-img') ?>" alt="">
{% endblock %}


{% block header_links %}
<div class="header__links-item"><a href="#themes" class="header__links-link scroll"><?= _('header_1-vujicic') ?></a></div>
<div class="header__links-item"><a href="#about" class="header__links-link scroll"><?= _('header_2-vujicic') ?></a></div>
<div class="header__links-item"><a href="#platform" class="header__links-link scroll"><?= _('header_3-vujicic') ?></a></div>
<div class="header__links-item"><a href="#organizer" class="header__links-link scroll"><?= _('header_4-vujicic') ?></a></div>
<div class="header__links-item"><a href="#faq" class="header__links-link scroll"><?= _('header_5-vujicic') ?></a></div>
{% endblock %}
