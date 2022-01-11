  <section class="main" id="main">
    <video width="100%" height="auto" preload="auto" autoplay loop muted poster="img/main/main_bg.jpg">
      <source src="files/main_video.mp4" type="video/mp4">
    </video>
    <div class="main__content">
      <div class="container">
        <h1 class="main__title">
          <span class="main__title_alt">Общее Будущее 2022</span>
          <span class="main__date"><?= _('main__date')?></span>
          <img src="img/main/main_title.png" alt="Общее Будущее 2022" class="d-sm-inline-block d-none">
          <img src="img/main/main_title_mob.png" alt="Общее Будущее 2022" class="d-sm-none d-inline-block">
          <span class="main__subtitle"><?= _('main__title')?></span>
          <span class="main__description"><?= _('main__subtitle')?></span>
        </h1>
        <a href="<?= _('registration__link')?>" data-fancybox class="main__button button-link button-link_blue"><?= _('main__button')?></a>
      </div>
    </div>

    <div class="main__lines d-sm-block d-none">
      <div class="marquee main__line">
        <ul class="main__line-list">
          <li><?= _('main__merque-01')?></li>
          <li><?= _('main__merque-02')?></li>
          <li><?= _('main__merque-03')?></li>
          <li><?= _('main__merque-04')?></li>
          <li><?= _('main__merque-05')?></li>
          <li><?= _('main__merque-06')?></li>
          <li><?= _('main__merque-07')?></li>
        </ul>
      </div>
    </div>

    <a href="<?= _('registration__link')?>" data-fancybox class="main__reg-btn button-link button-link_red d-none d-lg-none">Участвовать</a>
  </section>