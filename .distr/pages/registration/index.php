{% extends 'thanks.php' %}

{% block blocks %}
    {% include 'formtwo/block.php' %}
{% endblock %}

{% block js %}
    <script src="js/thanks.script.js" defer="defer"></script>
{% endblock %}

{% block thanks %}
  <script>
    function thanks_page() {
      setTimeout(function(){
        location.href = '<?= $BASE_HREF ?>/thanks';
      }, 100);
    }
  </script>
  {% endblock %}