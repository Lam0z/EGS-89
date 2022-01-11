{# English version macro #}

{% macro form_en(form, form_class, title_class='', button_class='button-link button-link_green', title='Registration for the Forum', button='APPLY', form_text='', quote_id='4010', lastname=false, add_fields, exclude_fields) %}
<form action="<?= $action ?>&form={{ form }}&quote_id={{ quote_id }}" class="form {{form_class}}">


  <div class="form__wrapper">
    {% if title.length %}
    <div class="form__title {{ title_class }}">{{ title | safe }}</div>
    {% endif %}

    <div class="form__items">
      {% if lastname %}
      {{ form_item( 'name', 'text', 'Name Lastname', true ) }}
      {% endif %}

      {% if not exclude_fields.name %}
      {{ form_item( 'name', 'text', 'Name', true ) }}
      {% endif %}

      {% if not exclude_fields.phone %}
      {{ form_item( 'phone', 'text', 'Phone', true ) }}
      {% endif %}

      {% if not exclude_fields.email %}
      {{ form_item( 'email', 'email', 'Email', true ) }}
      {% endif %}

      {% if add_fields.length %}
      {% for item in add_fields %}
      {{ form_item( item.name, item.type, item.placeholder, item.required, item.value ) }}
      {% endfor %}
      {% endif %}

      {% if form_text.length %}
      <div class="form__text">{{ form_text | safe }}</div>
      {% endif %}

      <div class="form__item form__item_button"><button class="form__button button {{ button_class }}" type="submit">{{ button }}</button></div>

    </div><!-- form__items -->

    <div class="form__more">
      <label class="form__footer">
        <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-checkbox-icon lazy"></div>
        </div>
        <div class="form__footer-text">I&nbsp;AGREE TO&nbsp;THE PROCESSING OF&nbsp;MY&nbsp;PERSONAL DATA, RECEIVING NEWSLETTERS, AS&nbsp;WELL&nbsp;AS <a href="#popup-privacy" data-fancybox>THE PRIVACY POLICY</a>.</div>
      </label>
    </div>
  </div>
</form>
{% endmacro %}

{# Russian version macro #}
{% macro form(form, form_class, title_class='', button_class='button-link button-link_green', title='Зарегистрироваться на&nbsp;форум', button='подать заявку', form_text='', quote_id='4010', lastname=false, add_fields, exclude_fields) %}
<form action="<?= $action ?>&form={{ form }}&quote_id={{ quote_id }}" class="form {{form_class}}">


  <div class="form__wrapper">
    {% if title.length %}
    <div class="form__title {{ title_class }}">{{ title | safe }}</div>
    {% endif %}

    <div class="form__items">
      {% if lastname %}
      {{ form_item( 'name', 'text', 'Имя Фамилия', true ) }}
      {% endif %}

      {% if not exclude_fields.name %}
      {{ form_item( 'name', 'text', 'Ваше имя', true ) }}
      {% endif %}

      {% if not exclude_fields.phone %}
      {{ form_item( 'phone', 'text', 'Ваш телефон', true ) }}
      {% endif %}

      {% if not exclude_fields.email %}
      {{ form_item( 'email', 'email', 'Email', true ) }}
      {% endif %}

      {% if add_fields.length %}
      {% for item in add_fields %}
      {{ form_item( item.name, item.type, item.placeholder, item.required, item.value ) }}
      {% endfor %}
      {% endif %}

      {% if form_text.length %}
      <div class="form__text">{{ form_text | safe }}</div>
      {% endif %}

      <div class="form__item form__item_button"><button class="form__button btn-script button {{ button_class }}" type="submit">{{ button }}</button></div>

    </div><!-- form__items -->

    <div class="form__more">
      <label class="form__footer">
        <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-checkbox-icon lazy"></div>
        </div>
        <div class="form__footer-text">Согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также c&nbsp;<a href="#popup-privacy" data-fancybox>политикой конфиденциальности</a>.</div>
      </label>
    </div>
  </div>
</form>
{% endmacro %}



{# ticket #}

{% macro form_ticket_en(form, form_class, title_class='', button_class='button-link button-link_green', title='Registration for the Forum', button='APPLY', form_text='', quote_id='4010', lastname=false, add_fields, exclude_fields) %}
<form action="<?= $action_payment ?>&form={{ form }}&quote_id={{ quote_id }}" class="form {{form_class}}">


  <div class="form__wrapper">
    {% if title.length %}
    <div class="form__title {{ title_class }}">{{ title | safe }}</div>
    {% endif %}

    <div class="form__items">
      {% if lastname %}
      {{ form_item( 'name', 'text', 'Name Lastname', true ) }}
      {% endif %}

      {% if not exclude_fields.name %}
      {{ form_item( 'name', 'text', 'Name', true ) }}
      {% endif %}

      {% if not exclude_fields.phone %}
      {{ form_item( 'phone', 'text', 'Phone', true ) }}
      {% endif %}

      {% if not exclude_fields.email %}
      {{ form_item( 'email', 'email', 'Email', true ) }}
      {% endif %}

      {% if add_fields.length %}
      {% for item in add_fields %}
      {{ form_item( item.name, item.type, item.placeholder, item.required, item.value ) }}
      {% endfor %}
      {% endif %}

      {% if form_text.length %}
      <div class="form__text">{{ form_text | safe }}</div>
      {% endif %}

      <div class="form__item form__item_button"><button class="form__button button {{ button_class }}" type="submit">{{ button }}</button></div>

    </div><!-- form__items -->

    <div class="form__more">
      <label class="form__footer">
        <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-checkbox-icon lazy"></div>
        </div>
        <div class="form__footer-text">I&nbsp;AGREE TO&nbsp;THE PROCESSING OF&nbsp;MY&nbsp;PERSONAL DATA, RECEIVING NEWSLETTERS, AS&nbsp;WELL&nbsp;AS <a href="#popup-privacy" data-fancybox>THE PRIVACY POLICY</a>.</div>
      </label>
    </div>
  </div>
</form>
{% endmacro %}

{# Russian version macro #}
{% macro form_ticket(form, form_class, title_class='', button_class='button-link button-link_green', title='Зарегистрироваться на&nbsp;форум', button='подать заявку', form_text='', quote_id='4010', lastname=false, add_fields, exclude_fields) %}
<form action="<?= $action_payment ?>&form={{ form }}&quote_id={{ quote_id }}" class="form {{form_class}}">


  <div class="form__wrapper">
    {% if title.length %}
    <div class="form__title {{ title_class }}">{{ title | safe }}</div>
    {% endif %}

    <div class="form__items">
      {% if lastname %}
      {{ form_item( 'name', 'text', 'Имя Фамилия', true ) }}
      {% endif %}

      {% if not exclude_fields.name %}
      {{ form_item( 'name', 'text', 'Ваше имя', true ) }}
      {% endif %}

      {% if not exclude_fields.phone %}
      {{ form_item( 'phone', 'text', 'Ваш телефон', true ) }}
      {% endif %}

      {% if not exclude_fields.email %}
      {{ form_item( 'email', 'email', 'Email', true ) }}
      {% endif %}

      {% if add_fields.length %}
      {% for item in add_fields %}
      {{ form_item( item.name, item.type, item.placeholder, item.required, item.value ) }}
      {% endfor %}
      {% endif %}

      {% if form_text.length %}
      <div class="form__text">{{ form_text | safe }}</div>
      {% endif %}

      <div class="form__item form__item_button"><button class="form__button btn-script button {{ button_class }}" type="submit">{{ button }}</button></div>

    </div><!-- form__items -->

    <div class="form__more">
      <label class="form__footer">
        <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
          <div class="form__footer-checkbox-icon lazy"></div>
        </div>
        <div class="form__footer-text">Согласен на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также c&nbsp;<a href="#popup-privacy" data-fancybox>политикой конфиденциальности</a>.</div>
      </label>
    </div>
  </div>
</form>
{% endmacro %}

{% macro form_item(name, type, placeholder, required, value) %}
<div class="form__item form__item_{{ type }} {{ 'd-none' if type == 'hidden' }}">
  {% if type == 'textarea' %}
  <textarea name="{{ name }}" placeholder="{{ placeholder }}" class="form__input form__input_textarea" {{ 'required' if required }}></textarea>
  {% else %}
  <input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder }}" class="form__input" {{ 'min=1' if type == 'number' }} {{ 'required' if required }} value="{{ value }}">
  {% endif %}
</div><!-- form__item -->
{% endmacro %}