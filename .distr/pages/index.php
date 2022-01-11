{% extends 'index.php' %}

{% block blocks %}

    {% include 'header/block.php' %}
    {% include 'main/block.php' %}
    {% include 'about/block.php' %}
    {% include 'for-who/block.php' %}
    {% include 'speakers/block.php' %}
    <?php $regFormID = 'registration__form_1';?>
    {% include 'registration/block.php' %}

    {% include 'location/block.php' %}
    {% include 'price-block/block.php' %}
    {% include 'organizer/block.php' %}
    {% include 'video/block.php' %}
    {% include 'corporation/block.php' %}
    {% include 'bottom/block.php' %}
    <a href="<?= _('registration__link')?>" data-fancybox class="bottom__btn">Участвовать</a>

{% endblock %}

{% block popups %}

{% include 'popup-privacy/block.php' %}
{% include 'popups/block.php' %}

{% endblock %}