<header class="header" id="header">
  <div class="container">
    <div class="row justify-content-between align-items-center">
    <div class="col-lg-3 d-none d-lg-flex header-min">
      <div class="header__logo">
        <img src="img/thanks/logo1.png" alt="logo" class="lazy img-fluid">
      </div>
      </div>
      <div class="header__navs col-lg-7 d-none d-lg-flex align-items-lg-center">
        {% include 'nav/block.php' %}
        <div class="header__date"><?=$date?>&nbsp;&nbsp;|&nbsp;&nbsp;<?=$address?></div>
      </div>
        <div class="header__box">
          <?php if ($lang == 'en') {?>
          <a href="https://esgglobal.ru" class="header__language "><img src="img/header/lang_ru.png" alt="" class="header__language-img"></a>
          <a href="https://esgglobal.ru/en" class="header__language header__language-active"><img src="img/header/lang_en.png" alt="" class="header__language-img"></a>
          <?php } else {?>
          <a href="https://esgglobal.ru" class="header__language header__language-active"><img src="img/header/lang_ru.png" alt="" class="header__language-img"></a>
          <a href="https://esgglobal.ru/en" class="header__language "><img src="img/header/lang_en.png" alt="" class="header__language-img"></a>
          <?php }?>
        </div>
      <div class="col-md-1 col-lg-2 d-md-flex d-none order-lg-3 order-3">
        <a href="<?= _('registration__link')?>" data-fancybox class="header__reg-btn button-link button-link_blue"><?= _('fixMobileButton') ?></a>
      </div>
      <div class="header__logo-box col-md-8 col-lg-3 d-flex  align-items-center justify-content-lg-center order-lg-4 order-1">
        <div class="header__logo mr-3 d-lg-none">
        <img src="img/thanks/logo1.png" alt="logo" class="lazy">
        </div>
      </div>
      <div class="col-2 d-lg-none d-block order-lg-5 order-4">
        <div class="header__menu"><img data-src="/img/header/burger_icon.png" alt="burger_icon" class="lazy"></div>
      </div>
    </div>
  </div>

  {% include 'burger-menu/block.php' %}
</header>