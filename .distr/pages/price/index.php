{% extends 'thanks.php' %}

{% block meta %}
  <?php
    $title = 'ESG Russia 2022 | Пакеты участия';
  ?>
  <title title><?= $title ?></title>
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:description" content="<?= $description ?>">
  <meta name="description" content="<?= $description ?>">
{% endblock %}

{% block blocks %}
{% include 'price/block.php' %}
{% endblock %}

{% block popups %}
{% include 'popups/block.php' %}
{% endblock %}

{% block js %}
<script src="js/thanks.script.js" defer="defer"></script>
{% endblock %}

{% block thanks %}
<script>
  function thanks_page() {
    setTimeout(function() {
      location.href = '<?= $BASE_HREF ?>/thanks';
    }, 100);
  }
</script>
{% endblock %}