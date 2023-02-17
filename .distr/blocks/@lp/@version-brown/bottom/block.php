<section class="bottom">
    <div class="container">
        <div class="bottom__box">
            <div class="bottom__left">
                <div class="bottom__left-top">
                    <div class="bottom__person">
                        <img src="img/@lp/@version-brown/common/brown.png" alt="<?= _('speakers-brown-main__name') ?>" class="header__person-img lazy">
                    </div>
                    <div class="bottom__info">
                        <div class="bottom__date xcondensed color-blue">
                            <?= _('speakers-brown-main__day') ?>,
                            <?= _('speakers-brown-main__time') ?>
                        </div>
                        <div class="bottom__name xcondensed"><?= _('speakers-brown-name') ?></div>
                    </div>
                </div>
                <div class="bottom__head">
                    <div class="bottom__title xcondensed"><?= _('speakers-brown-bottom__title') ?></div>
                    <div class="bottom__subtitle xcondensed"><?= _('speakers-brown-main__subtitle') ?></div>
                </div>
            </div>
            <div class="bottom__right">
                <div class="bottom__bormbox">
                    {{ form.form('reg', form_class='form_vertical', title='<?= _("speakers-brown-registration__title") ?>', title_class='xcondensed', button='<?= _("speakers-brown-registration__button") ?>')}}
                </div>
                <div class="bottom__phone xcondensed">
                    <?= $email_link ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__call">
        <div class="footer__call-container">
            <a href="#popup-reg" class="speech__button button button_link" data-fancybox><?= $version_form_button ?></a>
        </div>
    </div>
</section>