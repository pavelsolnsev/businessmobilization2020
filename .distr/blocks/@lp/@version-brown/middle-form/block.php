<section class="middle-form">
  <div class="middle-form__top">  
    <div class="container">
      <div class="middle-form__row">
        <div class="middle-form__photo"><img src="img/@lp/@version-brown/middle-form/speaker.png" alt=""></div>
        <div class="middle-form__title-wrap">
          <picture>
            <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/middle-form/mobile/name.png" media="(max-width: 575px)">
              <source type="image/png" class="lazy-loaded" srcset="img/@lp/@version-brown/middle-form/tablet/name.png" media="(max-width: 1199px)">
							<img class="d-xl-none" src="img/@lp/@version-brown/middle-form/tablet/name.png" alt="">
          </picture>
          <div class="middle-form__title xcondensed color-white">
            <div class="middle-form__subtitle-text quotes"><?= _('speakers-brown-middle-form__subtitle') ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div class="middle-form__bottom">
    <div class="container">
      {{ form.form('reg', form_class='form_horizontal form_inline middle-form__form', title='<?= _("speakers-brown-registration__title_1") ?>', title_class='xcondensed', button='<?= _("speakers-brown-registration__button") ?>')}}
    </div>
  </div>
</section>