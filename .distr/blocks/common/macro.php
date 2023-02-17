{% macro picture(url, class, alt) %}
{% set pathname = (url | safe).slice( 0, url.length - 3 ) %}
{% set extension = url.slice( url.length - 3, url.length ) %}
<picture>
	{% if extension != 'svg' %}
	<source srcset="{{ pathname }}webp" type="image/webp"/>
	<source srcset="{{ url }}" type="image/{{ 'jpeg' if extension == 'jpg' else 'png' }}"/>
	{% endif %}

	<img src="{{ url }}" alt="{{ alt }}" {% if class %}class="{{ class }}"{% endif %}>
</picture>
{% endmacro %}
