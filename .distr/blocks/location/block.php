<section class="location" id="location">
  <div class="container">
    <h2 class="core__title location__title"><?= _('location__title')?></h2>

    <div class="location__flex">
      <div class="location__flex-text">
        <h3><?= _('location__subtitle-01')?></h3>
        <p><?= _('location__text-01')?></p>
        <img data-src="/img/location/logo.svg" alt="img" class="lazy">
      </div>
      <div class="location__flex-img">
        <img data-src="/img/location/img-1.jpg" alt="img" class="lazy">
      </div>
    </div>

    <div class="location__flex">
      <div class="location__flex-text">
          <h3><?= _('location__subtitle-02')?></h3>
          <p><?= _('location__text-02')?></p>
          <div class="location__flex-place location__flex-place-1">
            <svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="22.323" cy="22.7149" r="22.323" fill="#0D53D8"/>
            <path d="M22.323 9.40649C16.2981 9.40649 11.3936 14.304 11.3936 20.3202C11.3936 27.7005 19.7272 34.4534 22.323 36.3769C24.9187 34.4534 33.2524 27.7005 33.2524 20.3202C33.2524 14.304 28.3478 9.40649 22.323 9.40649ZM22.323 25.777C19.3037 25.777 16.8583 23.3351 16.8583 20.3202C16.8583 17.3053 19.3037 14.8633 22.323 14.8633C25.3422 14.8633 27.7877 17.3053 27.7877 20.3202C27.7877 23.3351 25.3422 25.777 22.323 25.777Z" fill="white"/>
            </svg>
            <span><?= _('location__address')?></span>
          </div>
      </div>
      <div class="location__flex-img">
        <img data-src="/img/location/img-2.jpg" alt="img" class="lazy">
        <div class="location__flex-place location__flex-place-2">
            <svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="22.323" cy="22.7149" r="22.323" fill="#0D53D8"/>
            <path d="M22.323 9.40649C16.2981 9.40649 11.3936 14.304 11.3936 20.3202C11.3936 27.7005 19.7272 34.4534 22.323 36.3769C24.9187 34.4534 33.2524 27.7005 33.2524 20.3202C33.2524 14.304 28.3478 9.40649 22.323 9.40649ZM22.323 25.777C19.3037 25.777 16.8583 23.3351 16.8583 20.3202C16.8583 17.3053 19.3037 14.8633 22.323 14.8633C25.3422 14.8633 27.7877 17.3053 27.7877 20.3202C27.7877 23.3351 25.3422 25.777 22.323 25.777Z" fill="white"/>
            </svg>
            <span><?= _('location__address')?></span>
          </div>
      </div>
    </div>

    <a href="<?= _('registration__link')?>" data-fancybox class="location-btn button-link button-link_blue">
    <?= _('location__button')?>
		</a>

  </div>
</section>