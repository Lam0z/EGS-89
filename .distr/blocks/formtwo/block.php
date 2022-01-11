<section class="thanks form__main" id="thanks">    
    <div class="thanks__header">
        <div class="container thanks__header-container">
            <div class="thanks__header-logo">
                <img src="img/thanks/logo1.png" alt="logo" class="lazy">
            </div>
            <div class="thanks__header-content">
                <?php if ($lang == 'en') {?>
                    <a href="https://esgglobal.ru/en" class="thanks__header-link"><?= _('form-two__button')?></a>
             <?php } else {?>
            <a href="https://esgglobal.ru" class="thanks__header-link"><?= _('form-two__button')?></a>
            <?php }?>
              </div>
        </div>
    </div>

    <div class="form__content">
        <div class="container">
        <form action="<?=$action?>&form=form_two&quote_id=4010" class="form form_gorizontal form_reg" novalidate="novalidate">
            <div class="form__wrapper">
                <div class="form__title "><?= _('form-two__title')?></div>
                <div class="form__items">

                    <h4 class="form__subtitle"><?= _('form-two__surname')?></h4>
                    <div class="form__item form__item_text ">
                        <input name="comments[Фамилия]" type="text" placeholder="<?= _('form-two__surname')?>" class="form__input GoodLocal" required="" value="">
                    </div><!-- form__item -->
                    <h4 class="form__subtitle"><?= _('form-two__patronymic')?></h4>
                    <div class="form__item form__item_text ">
                        <input name="comments[Отчество]" type="text" placeholder="<?= _('form-two__patronymic')?>" class="form__input GoodLocal" required="" value="">
                    </div><!-- form__item -->
                    <h4 class="form__subtitle"><?= _('form-two__country')?></h4>
                    <div class="form__item form__item_text ">
                        <input name="comments[Страна]" type="text" placeholder="" class="form__input GoodLocal" required="" value="">
                    </div>
                    <h4 class="form__subtitle"><?= _('form-two__gender')?></h4>
                    <select class="form__item form__item_text form__input"  tabindex="-1" data-placeholder="Выбрать" name="comments[Пол]" id="">
						<option value="Мужчина"><?= _('form-two__man')?></option>
						<option value="Женщина"><?= _('form-two__women')?></option>
                    </select>
                    <h4 class="form__subtitle"><?= _('form-two__sfear')?></h4>
                    <div class="form__item form__item_text ">
                        <input name="comments[Сфера деятельности]" type="text" placeholder="" class="form__input GoodLocal" required="" value="">
                    </div>
                    <h4 class="form__subtitle"><?= _('form-two__organizaton')?></h4>
                    <div class="form__item form__item_text ">
                        <input name="comments[Название организации]" type="text" placeholder="" class="form__input GoodLocal" required="" value="">
                    </div>
                    <h4 class="form__subtitle"><?= _('form-two__organizaton-full')?></h4>
                    <div class="form__item form__item_text ">
                        <input name="comments[Полное наименование организации]" type="text" placeholder="" class="form__input GoodLocal" required="" value="">
                    </div>

                    {#<!-- поля скрыты (d-none) -->#}
                    <div class="form__flex d-none">
                        <div class="form__item form__item_name">
                            <h4 class="form__subtitle"><?= _('form-two__number')?></h4>
                            <input name="name" type="text" placeholder="<?= _('form-two__number')?>" class="form__input"  value="">
                        </div><!-- form__item -->
                        <div class="form__item form__item_phone ">
                            <h4 class="form__subtitle"><?= _('form-two__mail')?></h4>
                            <input name="phone" type="text" placeholder="Phone" class="form__input"  value="">
                        </div><!-- form__item -->
                        <div class="form__item form__item_email ">
                            <h4 class="form__subtitle"><?= _('form-two__mail')?></h4>
                            <input name="email" type="email" placeholder="Email" class="form__input"  value="">
                        </div><!-- form__item -->
                    </div>

                </div><!-- form__items -->
                <div class="form__more">
                    <label class="form__footer">
                        <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked="">
                        <div class="form__footer-checkbox-icon lazy-loaded"></div>
                        </div>
                        <div class="form__footer-text"><?= _('form-two__more')?></div>
                    </label>
                    <label class="form__footer">
                        <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked="">
                        <div class="form__footer-checkbox-icon lazy-loaded"></div>
                        </div>
                        <div class="form__footer-text"><?= _('form-two__agrie')?></div>
                    </label>
                </div>
                <div class="form__item form__item_button">
                    <button class="form__button button button-link button-link_green" type="submit"><?= _('form-two__submit-button')?></button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <div class="thanks__footer">
        <div class="container thanks__footer-container">
            <div class="thanks__footer-info">
                <p class="thanks__footer-text"><?= _('thanks__footer-text')?></p>
                <a href="#privacy" data-fancybox class="thanks__footer-link"><?= _('thanks__footer-polycy')?></p>
                <a href="http://sydi.ru" class="thanks__footer-link"><?= _('thanks__footer-digital')?></a>
            </div>
            <div class="thanks__footer-content">
                <a href="tel:<?=$phone_link?>" class="thanks__footer-phone"><?=$phone?></a>
            </div>
        </div>
    </div>
</section>