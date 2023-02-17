<section class="footer" id="footer">
  <div class="container">
    <div class="row footer__row">
      <div class="footer__col footer__col--1"><?= _('footer__meta-copyright-taleb') ?></div>
      <div class="footer__col footer__col--2"><?= _('footer__meta_2') ?> <a href="http://sydi.ru/?utm_source=synergyglobal" target="_blank" rel="_nofollow">Synergy Digital</a></div>
      <?php if ($lang == 'pt') : ?>
        <div class="footer__col footer__col--3"><a href="files/privacy_pt.pdf" class="footer__link-privacy" data-fancybox><?= _('footer__link-privacy-taleb') ?></a></div>
      <?php elseif ($lang == 'es') : ?>
        <div class="footer__col footer__col--3"><a href="files/privacy_es.pdf" class="footer__link-privacy" data-fancybox><?= _('footer__link-privacy-taleb') ?></a></div>
      <?php else: ?>
        <div class="footer__col footer__col--3"><a href="#privacy" class="footer__link-privacy" data-fancybox data-type="ajax"><?= _('footer__link-privacy-taleb') ?></a></div>
      <?php endif; ?>
    </div>
  </div>
</section>