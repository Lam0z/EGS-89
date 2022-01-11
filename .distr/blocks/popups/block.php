<div class="popup popup-reg" id="popup-reg">
  <div class="popup__close" data-fancybox-close><img src="/img/common/close_blue.png" alt="close"></div>
  {{ form.form( 'reg', form_class='form_vertical', button_class='button-link button-link_blue' ) }}
</div>


<div class="popup popup-media" id="popup-media">
  <div class="popup__close" data-fancybox-close><img src="/img/common/close_blue.png" alt="close"></div>
  <div class="popup-media__block">
    <h3><?= _('popup-media__title')?></h3>
    <?= _('popup-media__text')?>
  </div>
</div>

<div class="popup popup-thanks" id="popup-thanks">
  <div class="popup__close" data-fancybox-close><img src="/img/common/close_blue.png" alt="close"></div>
  <div class="popup-thanks__wrap">
    <div class="popup-thanks__title">Спасибо!</div>
    <div class="popup-thanks__subtitle">Ваша заявка отправлена</div>
    <div class="popup-thanks__text">В&nbsp;ближайшее время с&nbsp;вами свяжется наш менеджер</div>
  </div>
</div>

<div class="popup popup-thanks" id="popup-thanks-media">
  <div class="popup__close" data-fancybox-close><img src="/img/common/close_blue.png" alt="close"></div>
  <div class="popup-thanks__wrap">
    <div class="popup-thanks__title">Спасибо!</div>
    <div class="popup-thanks__subtitle">Ваша заявка отправлена</div>
    <div class="popup-thanks__text">Подробная информация в&nbsp;письме на&nbsp;вашей электронной почте</div>
  </div>
</div>

<div class="popup popup-thanks" id="popup-ticket1">
<div class="popup__close" data-fancybox-close><img src="/img/common/close_blue.png" alt="close"></div>
  
    {%
			set add_fields=[
			{
			name: 'product_id',
			type: 'hidden',
			value: '97410798'
			},
			{
			name: 'event_id',
			type: 'hidden',
			value: '181'
            },
            {
			name: 'callbackSuccess',
			type: 'hidden',
			value: 'https://esgglobal.ru/thanks/'
            },
            {
			name: 'new_tab',
			type: 'hidden',
			value: '1'
			}
			]
		%}

    {{ form.form_ticket( 'form-payment', form_class='form_vertical', button_class='button-link button-link_blue', title='Заполни форму, и оплатите билет', button='Купить',	add_fields=add_fields) }}
</div>

<div class="popup popup-thanks" id="popup-ticket2">
<div class="popup__close" data-fancybox-close><img src="/img/common/close_blue.png" alt="close"></div>
  
    {%
			set add_fields=[
			{
			name: 'product_id',
			type: 'hidden',
			value: '97410908'
			},
			{
			name: 'event_id',
			type: 'hidden',
			value: '181'
            },
            {
			name: 'callbackSuccess',
			type: 'hidden',
			value: 'https://esgglobal.ru/thanks/'
            },
            {
			name: 'new_tab',
			type: 'hidden',
			value: '1'
			}
			]
		%}

    {{ form.form_ticket( 'form-payment', form_class='form_vertical', button_class='button-link button-link_blue', title='Заполни форму, и оплатите билет', button='Купить',	add_fields=add_fields) }}
</div>

<div class="popup popup-thanks" id="popup-ticketles">
    <div class="popup__close" data-fancybox-close><img src="/img/common/close_blue.png" alt="close"></div>
  
    {%
			set add_fields=[
			{
			name: 'product_id',
			type: 'hidden',
			value: '97410992'
			},
			{
			name: 'unit',
			type: 'hidden',
			value: 'payments'
			},
			{
			name: 'type',
			type: 'hidden',
			value: 'ticketless'
			},
            {
			name: 'callbackSuccess',
			type: 'hidden',
			value: 'https://esgglobal.ru/thanks/'
            },
            {
			name: 'new_tab',
			type: 'hidden',
			value: '1'
			}
			]
		%}

    {{ form.form( 'form-payment', form_class='form_vertical', button_class='button-link button-link_blue', title='Заполни форму, и оплатите билет', button='Купить',add_fields=add_fields) }}
</div>