{% extends 'thanks.php' %}

{% block blocks %}
    {% include 'thanks/block.php' %}
{% endblock %}

{% block popups %}
    {% include 'popups/block.php' %}
{% endblock %}

{% block js %}
    <script src="js/thanks.script.js" defer="defer"></script>
{% endblock %}