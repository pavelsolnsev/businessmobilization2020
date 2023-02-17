{% macro cards_base(card_count=1,card_class, item1, item2, item3, item1_val, item2_val, item3_val) %}

  {% for i in range(0, card_count) -%}
  

  <div class="price-card" js-payment href="#popup-price" data-fancybox data-productid="65111799" data-is-recurrent="1" data-quote_id data-partner data-package="">
    <div class="price-card__header">
        <div class="price-card__header-name">месяц</div>
        <span class="price-card__discount"></span>
    </div>
    
    <div class="price-card__body">
      <div class="price-card__cost" data-price="">1 500 <span class="rouble">₽</span></div>
      <div class="price-card__cost-desc"><span class="rouble"></span></div>
      <a class="price-card__button button button_red">Оформить</a>
    </div>
  </div>

  <div class="price-card price-card_sale" js-payment href="#popup-price" data-fancybox data-productid="65617664" data-is-recurrent="1" data-quote_id data-partner data-package="">
    <div class="price-card__header">
      <div class="price-card__header-name">6 месяцев</div>
      <span class="price-card__discount">-30%</span>
    </div>
    
    <div class="price-card__body">
      <div class="price-card__cost" data-price="">6 000 <span class="rouble">₽</span></div>
      <div class="price-card__cost-desc" >1 000 <span class="rouble">₽</span> в месяц</div>
      <a class="price-card__button button button_red">Оформить</a>
    </div>
  </div>

  <div class="price-card price-card_sale" js-payment href="#popup-price" data-fancybox data-productid="65617668" data-is-recurrent="1" data-quote_id data-partner data-package="">
    <div class="price-card__header">
      <div class="price-card__header-name">12 месяцев</div>
      <span class="price-card__discount">-50%</span>
    </div>
    
    <div class="price-card__body">
      <div class="price-card__cost" data-price="">9 000 <span class="rouble">₽</span></div>
      <div class="price-card__cost-desc" >750 <span class="rouble">₽</span> в месяц</div>
      <a class="price-card__button button button_red">Оформить</a>
    </div>
  </div>
  {% endfor -%}
{% endmacro %}

{% macro cards_vip() %}

  <div class="price-card price-card_silver" js-payment href="#popup-price" data-fancybox data-productid="65617672" data-is-recurrent="1" data-quote_id data-partner data-package="">
    <div class="price-card__header">
      <div class="price-card__header-name">Silver</div>
      <span class="price-card__discount">-50%</span>
    </div>

    <div class="price-card__body">
      <div class="price-card__box">
        <div class="price-card__item">
          <div class="price-card__item-title">Базовая подписка</div>
          <div class="price-card__item-subtitle price-ca" data-popup-text>3 месяца</div>
        </div>
        <div class="price-card__item">
          <div class="price-card__item-title">Школа бизнеса</div>
          <div class="price-card__item-subtitle">24 программы обучения</div>
        </div>
      </div>
      <div class="price-card__cost" data-price="">15 000 <span class="rouble">₽</span></div>
      <div class="price-card__cost-desc" >5 000 <span class="rouble">₽</span> в месяц</div>
      <a class="price-card__button button button_red">Оформить</a>
    </div>
  </div>

  <div class="price-card price-card_gold price-card_longer" js-payment href="#popup-price" data-fancybox data-productid="65617674" data-is-recurrent="1" data-quote_id data-partner data-package="">
    <div class="price-card__header">
      <div class="price-card__header-name">Gold</div>
      <span class="price-card__discount">-50%</span>
    </div>

    <div class="price-card__body">
      <div class="price-card__box">
        <div class="price-card__item">
          <div class="price-card__item-title">Базовая подписка</div>
          <div class="price-card__item-subtitle" data-popup-text>6 месяцев</div>
        </div>
        <div class="price-card__item">
          <div class="price-card__item-title">MBA Mini</div>
          <div class="price-card__item-subtitle">Диплом о&nbsp;переподготовке</div>
        </div>
      </div>
      <div class="price-card__cost" data-price="">25 000 <span class="rouble">₽</span></div>
      <div class="price-card__cost-desc" >4 150 <span class="rouble">₽</span> в месяц</div>
      <a class="price-card__button button button_red">Оформить</a>
    </div>
  </div>

  <div class="price-card price-card_platinum" js-payment href="#popup-price" data-fancybox data-productid="65617676" data-is-recurrent="1" data-quote_id data-partner data-package="">
    <div class="price-card__header">
      <div class="price-card__header-name">Platinum</div>
      <span class="price-card__discount">-50%</span>
    </div>

    <div class="price-card__body">
      <div class="price-card__box">
        <div class="price-card__item">
          <div class="price-card__item-title">Базовая подписка</div>
          <div class="price-card__item-subtitle" data-popup-text>12 месяцев</div>
        </div>
        <div class="price-card__item">
          <div class="price-card__item-title">MBA Online</div>
          <div class="price-card__item-subtitle">Диплом и&nbsp;сертификат AMBA</div>
        </div>
      </div>
      <div class="price-card__cost" data-price="">90 000 <span class="rouble">₽</span></div>
      <div class="price-card__cost-desc" >7 500 <span class="rouble">₽</span> в месяц</div>
      <a class="price-card__button button button_red">Оформить</a>
    </div>
  </div>

{% endmacro %}