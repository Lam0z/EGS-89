<section class="thanks" id="thanks">    
    <div class="thanks__header">
        <div class="container thanks__header-container">
            <div class="thanks__header-logo">
                <img src="img/thanks/logo1.png" alt="logo" class="lazy">
            </div>
            <div class="thanks__header-content">
                <a href="<?=$BASE_HREF?>" class="thanks__header-link"><?= _('thanks__button')?></a>
            </div>
        </div>
    </div>
    <div class="thanks__content">
        <div class="container">
            <div class="thanks__block">
                <div class="thanks__block-wrapper">
                    <h1 class="thanks__block-title"><?= _('thanks__title')?></h1>
                    <p class="thanks__block-subtitle"><?= _('thanks__subtitle')?></p>
                    <p class="thanks__block-text"><?= _('thanks__text')?></p>
                    <?php if ($lang == 'en'){?>
                        <a href="https://esgglobal.ru/en" class="thanks__block-link"><?= _('thanks__button')?></a>
                        <?php } else {?>
                    <a href="https://esgglobal.ru" class="thanks__block-link"><?= _('thanks__button')?></a>
                    <?php }?>
                </div>
            </div>
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