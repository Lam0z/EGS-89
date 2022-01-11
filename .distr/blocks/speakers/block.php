{% from './data.php' import data1 as speakers %}

<section class="speakers" id="speakers">
  <div class="container">
    <h2 class="core__title speakers__title"><?= _('speakers__title')?></h2>

    {% if speakers.length %}
    <div class="row speakers__row" data-more-options='{ "target": ".speakers__col", "init":8, "init_lg":6, "desktop":4, "mobile":4}'>
      {% for item in speakers %}
      <div class="col-6 col-xl-3 col-lg-4 speakers__col" data-more-hidden>
        <div class="speakers-card speakers-card_sm">
          <div class="speakers-card__img lazy" data-image>
            <span class="lazy"></span>
            <img data-src="{{ item.img }}" alt="" class="lazy">
          </div>
          <div class="speakers-card__text">
            <div class="speakers-card__name" data-name><?= $version == 'en' || $version == 'price_en' || $lang == 'en' ? '{{ item.name_en | safe }}' : '{{ item.name | safe}}' ?></div>
            <div class="speakers-card__descr" data-descr><?= $version == 'en' || $version == 'price_en' || $lang == 'en' ? '{{ item.descr_en | safe }}' : '{{ item.descr | safe}}' ?></div>
          </div><!-- speakers-card__text -->
          {% if item.presentation %}
          <a href="{{ item.presentation }}" target="_blank" class="speakers-card__button"><span class="speakers-card__button-text"><?= $version == 'en' || $version == 'price_en' ? 'Download presentation' : 'Скачать презентацию' ?></span><span class="speakers-card__button-icon"></span></a>
          {% endif %}
          <div class="speakers-card__more" data-more>
            <?= $version == 'en' || $version == 'price_en' ? '{{ item.more_en | safe }}' : '{{ item.more | safe }}' ?>
          </div><!-- speakers-card__more -->
        </div><!-- speakers-card -->
      </div><!-- col -->
      {% endfor %}
      <div class="col-6 col-xl-3 col-lg-4 speakers__col" data-more-hidden>
        <div class="speakers-card speakers-card_sm speakers-card_ghost">
          <div class="speakers-card__img lazy" data-image>
            <span class="lazy"></span>
            <img data-src="/img/speakers/people/ghost.jpg" alt="" class="lazy">
          </div>
          <div class="speakers-card__text">
            <div class="speakers-card__name" data-name><?= $version == 'en' || $version == 'price_en' || $lang == 'en' ? 'Section forum speakers continues to&nbsp;change' : 'Панель спикеров продолжает формироваться' ?></div>
          </div><!-- speakers-card__text -->
        </div><!-- speakers-card -->
      </div><!-- col -->
    </div><!-- row -->
    {% endif %}

    <div class="speakers__more-btn" data-more-btn>
      <span class="speakers__more-text"><?= $version == 'en' || $version == 'price_en' || $lang == 'en' ? 'Show<br> more speakers' : 'Показать<br> еще спикеров' ?></span>
      <img data-src="/img/common/more_button_circle.png" alt="" class="lazy">
    </div><!-- speakers__more-btn -->

  </div><!-- container -->
</section>