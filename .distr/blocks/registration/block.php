<?php	if ($version == 'en' || $lang == 'en') : ?>

<section class="registration">
  <div class="container">
    <div class="registration__form" id="<?=$regFormID?>">
      {{ form.form_en( 'reg', form_class='form_gorizontal form_reg') }}
    </div>
  </div>
</section>

<?php	else : ?>

<section class="registration">
  <div class="container">
    <div class="registration__form" id="<?=$regFormID?>">
      {{ form.form( 'reg', form_class='form_gorizontal form_reg') }}
    </div>
  </div>
</section>

<?php	endif; ?>