<section class="price" id="price">
  <div class="thanks__header">
    <div class="container thanks__header-container">
      <div class="thanks__header-logo">
        <img src="img/thanks/logo1.png" alt="logo" class="lazy">
      </div>
      <div class="thanks__header-content">
        <a href="<?= $BASE_HREF ?>" class="thanks__header-link"><?= _('thanks__button') ?></a>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="price__wrapper">
      <div class="price__description">Чтобы завершить <span>регистрацию</span>, выберите <span>пакет участия</span></div>
      <h2 class="price__title">пакеты участия</h2>
      <div class="price__pockets">

        <div class="price__item price__item--cyan">
          <h3 class="price__item-title">единый</h3>
          <ul class="price__item-list price__item-list--cyan">
            <li class="price__item-point">Презентации спикеров</li>
            <li class="price__item-point">Доступ к записи выступлений на 3 месяца</li>
            <li class="price__item-point">Зона нетворкинга</li>
            <li class="price__item-point">2 кофе-брейка, обед, ужин</li>
            <li class="price__item-point">Пакет участника</li>
            <li class="price__item-point">Зритель церемонии награждения ESG AWARDS RUSSIA 2021</li>
          </ul>
          <div class="price__item-cost">
            <div class="price__item-price"><?=$standart_price?><span>₽</span></div>
            <span class="price__item-sale">C&nbsp;17&nbsp;января <br>повышение цен!</span>
          </div>
          <div class="price__hidden">
          <a href="#popup-ticket1" class="form__button btn-script button price__item-button btn-pay" data-fancybox data-id="97410798">купить</a>
          </div>

        </div>

        <div class="price__item price__item--yellow">
          <h3 class="price__item-title">премиум</h3>
          <ul class="price__item-list price__item-list--yellow">
            <li class="price__item-point">Посадка в зоне ПРЕМИУМ</li>
            <li class="price__item-point">Презентации спикеров</li>
            <li class="price__item-point">Доступ к записи выступлений на 3 месяца</li>
            <li class="price__item-point">Зона нетворкинга</li>
            <li class="price__item-point">Кофе-брейки, обед, ужин со спикерами</li>
            <li class="price__item-point">Пакет участника</li>
            <li class="price__item-point">Персональный ассистент</li>
            <li class="price__item-point">Зритель в зоне ПРЕМИУМ церемонии награждения ESG AWARDS RUSSIA 2021</li>
          </ul>
          <div class="price__item-cost">
            <div class="price__item-price"><?=$premium_price?><span>₽</span></div>
            <span class="price__item-sale">C&nbsp;17&nbsp;января <br>повышение цен!</span>
          </div>
          <div class="price__hidden">
            <a href="#popup-ticket2" class="form__button btn-script button price__item-button btn-pay" data-fancybox data-id="97410908">купить</a>
          </div>
        </div>

        <div class="price__item price__item--blue">
          <h3 class="price__item-title">online</h3>
          <ul class="price__item-list price__item-list--blue">
            <li class="price__item-point">Доступ к трансляциив <br> режиме онлайн</li>
            <li class="price__item-point">Презентации спикеров</li>
            <li class="price__item-point">Доступ к записи выступленийна 3 месяца</li>
            <li class="price__item-point">Доступ к трансляции Церемонии награждения ESG AWARDS RUSSIA 2021 в режиме онлайн</li>
          </ul>
          <div class="price__item-cost">
            <div class="price__item-price"><?=$online_price?><span>₽</span></div>
            <span class="price__item-sale">C&nbsp;17&nbsp;января <br>повышение цен!</span>
          </div>
          <div class="price__hidden">
            <a href="#popup-ticketles" class="form__button button price__item-button btn-pay" data-fancybox data-id="97410992">купить</a>
          </div>

        </div>

      </div>
    </div>
  </div>


  <div class="thanks__footer">
    <div class="container thanks__footer-container">
      <div class="thanks__footer-info">
        <p class="thanks__footer-text"><?= _('thanks__footer-text') ?></p>
        <a href="#privacy" data-fancybox class="thanks__footer-link"><?= _('thanks__footer-polycy') ?></p>
          <a href="http://sydi.ru" class="thanks__footer-link"><?= _('thanks__footer-digital') ?></a>
      </div>
      <div class="thanks__footer-content">
        <a href="tel:<?= $phone_link ?>" class="thanks__footer-phone"><?= $phone ?></a>
      </div>
    </div>
  </div>
</section>