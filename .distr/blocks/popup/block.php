{% import './macro.php' as popup %}

{{ popup.registration('popup-registration') }}
{{ popup.partners() }}
{{ popup.accreditation() }}
{{ popup.franchise() }}

<?php if ( $external_url == 'synergyonline' ) { ?>
	{{ popup.synergyonline() }}
<?php } ?>

{% if popup_message %} {{ popup.message() }} {% endif %}
