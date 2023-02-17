<footer class="footer">
    <div class="container">
        <div class="footer__box">
            <div class="footer__logo">
                <?php if ($lang == 'ru') { ?>
                    <img src="img/@lp/@version-brown/footer/logo.png" alt="Synergy online. Цифровая платформа" class="footer__logo-img lazy">
                <?php } else {?>
                    <img src="img/@lp/@version-brown/footer/logo-en.svg" alt="" class="footer__logo-img lazy">
                <?php } ?>
            </div>
            <div class="footer__right">
                <div class="footer__privacy">
                    <?php if($lang == 'en'): ?>
					<a href="files/privacy_en.pdf" target="_blank" data-fancybox class="footer__link-privacy"><?= _('speakers-brown-footer__link-privacy') ?></a>
					<?php else: ?>
					<a href="#privacy" data-fancybox class="footer__link-privacy"><?= _('speakers-brown-footer__link-privacy') ?></a>
					<?php endif; ?>
                </div>
                <div class="footer__meta footer__meta_2"><?= _('footer__meta_2') ?> <a href="http://sydi.ru/?utm_source=synergyglobal" target="_blank" rel="_nofollow">Synergy Digital</a></div>
            </div>
        </div>
    </div>
</footer>