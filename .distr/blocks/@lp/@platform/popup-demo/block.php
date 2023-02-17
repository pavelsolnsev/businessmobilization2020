<div class="popup-demo" id="popup-demo-form">
    <div class="popup-demo__wrap">
        <div class="popup-demo__left">
            <div class="popup-demo__content">
                <div class="popup-demo__packet">Пакет</div>
                <div class="popup-demo__name">DEMO</div>
                <div class="popup-demo__list">
                    <p class="popup-demo__description">Доступ к&nbsp;еженедельным онлайн-форумам &laquo;Синергии&raquo;</p>
                    <p class="popup-demo__description">Доступ к&nbsp;записи Synergy Online Forum</p>
                    <p class="popup-demo__description">Доступ к&nbsp;Базе знаний с&nbsp;видеозаписями всех событий &laquo;Синергии&raquo;</p>
                </div>
                <div class="popup-demo__free">БЕСПЛАТНО*</div>
            </div>
        </div>
    
        <div class="popup-demo__right">

            <form action="<?= $action ?>&form=demo-form" class="form form_vertical">
                <div class="form__title condensed">Получите бесплатный <br> демо-доступ на 7 дней</div>
                <div class="form__items">
                    <div class="form__item form__item_text" data-name="name">
                        <input name="name" type="text" placeholder="Ваше имя" value required aria-required="true" class="form__input">
                    </div>
                    <div class="form__item form__item_text" data-name="phone">
                        <input name="phone" type="text" placeholder="Ваш телефон" value required aria-required="true" class="form__input">
                    </div>
                    <div class="form__item form__item_email" data-name="email">
                        <input name="email" type="email" placeholder="Ваш e-mail" value required aria-required="true" class="form__input">
                    </div>
                    <div class="form__item form__item_button">
                        <button type="submit" class="form__button button button_red condensed">Отправить</button>
                    </div>
                    <div class="form__footer">
                        <label>
                            <div class="form__footer-checkbox">
                                <input type="checkbox" name="personalDataAgree" checked>
                                <div class="form__footer-checkbox-icon lazy-loaded"></div>
                            </div>
                            <div class="form__footer-text">
                                Согласен с&nbsp;<a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" class="privacy fancybox-privacy-link">политикой конфиденциальности</a> и&nbsp;на&nbsp;обработку персональных данных
                            </div>
                        </label>
                    </div>
                    <div class="form__pay"><?= _('price-demo-cancel-free') ?></div>
                </div>
            </form>
        </div>
    </div>
</div>
