{% import '../../../popup/macro.php' as popup %}
{% import './macro.php' as popup_online %}

{{ popup.registration('popup-registration') }}
{{ popup.partners() }}
{{ popup.accreditation() }}
{{ popup.franchise() }}
{{ popup.synergyonline() }}
{{ popup_online.demo() }}


{% if popup_message %} {{ popup.message() }} {% endif %}


