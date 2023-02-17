<section class="speech">
  <div class="container">
    <div class="speech__box">
      <div class="speech__left">
        <div class="speech__photo">
          <picture>
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/tablet/bg.jpg" media="(max-width: 1199px)">
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/bg.jpg">
							<img alt="" class="lazy-loaded" src="img/@lp/@version-brown/speech/bg.jpg">
          </picture>
        </div>
        <div class="speech__subtitle xcondensed"><span><?= _('speakers-brown-speech__subtitle') ?></span></div>
        <a href="#popup-reg" class="speech__button button button_link" data-fancybox><?= $version_form_button ?></a>
      </div>
      <div class="speech__right">
        {% if section1 %}
        <div class="speech__title xcondensed"><p class="quotes"><?= _('speakers-brown-speech__title_1') ?></p></div>
        {% else %}
        <div class="speech__title speech__title_big xcondensed"><p class="quotes"><?= _('speakers-brown-speech__title_2') ?></p></div>
        {% endif %}
        <div class="speech__books">
          <picture>
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/mobile/books.png" media="(max-width: 575px)">
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/speech/books.png">
							<img alt="" class="lazy-loaded" src="img/@lp/@version-brown/speech/books.png">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>