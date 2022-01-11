<section class="bottom lazy" id="bottom">
  <div class="bottom__left">
    <div class="container">
      <div class="bottom__date"><?= _('bottom__date')?></div>
      <div class="bottom__title">
        <?php if ($lang == 'en') { ?>
          <img data-src="/img/bottom/bottom_title-en.png" class="lazy bottom__title-desctop" alt="Форум устойчивого развития Общее Будущее 2021">
          <?php } else { ?>
        <img data-src="/img/bottom/bottom_title.png" class="lazy bottom__title-desctop" alt="Форум устойчивого развития Общее Будущее 2022">
        <?php } ?>
      </div>
      <ul class="bottom__triggers">
      <?= _('bottom__trigers')?>
      </ul>
    </div>
    {% include 'footer/block.php' %}
  </div>

  <div class="bottom__right">
    
    <div class="bottom__form" id="bottom__form">
      <?php if ($lang == 'en') { ?>
        {{ form.form_en( 'reg', form_class='form_vertical form_reg', title='REGISTRATION <br>FOR THE FORUM') }}
      <?php } else { ?> 
      {{ form.form( 'reg', form_class='form_vertical form_reg', title='Зарегистрируйтесь <br>для участия в&nbsp;форуме') }}
      <?php } ?>
    </div>
    {% include 'footer/block.php' %}
  </div>
</section>