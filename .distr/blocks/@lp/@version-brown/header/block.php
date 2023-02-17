<header class="header">
    <div class="container">
        <div class="header__row header__row_1 row no-gutters">
            <div class="header__logo-col col align-self-center">
                <div class="header__logo">
                <?php if ($lang == 'ru') { ?>
                    <img src="img/@lp/@version-brown/header/synergy-online.svg" alt="Synergy online. Цифровая платформа" class="header__logo-img">
                <?php } else {?>
                    <img src="img/@lp/@version-brown/header/logo-en.svg" alt="" class="header__logo-img">
                <?php } ?>
                </div>
            </div><!-- col -->
            <div class="header__phone-col col col-md-auto align-self-center">
                <div class="header__phone xcondensed">
                    <?= $email_link ?>
                </div>
            </div><!-- col -->
            <div class="header__button-col header__button-col_reg col-md-auto">
                <a href="#popup-reg" class="header__button button button_link d-none d-md-flex" data-fancybox><?= $version_form_button ?></a>
            </div>
        </div>
    </div>
</header>