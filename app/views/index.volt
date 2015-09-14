<!DOCTYPE html>
<html lang="{{ lang }}">
    <head>
        {% block top %}
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
          <!-- <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script> -->
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <title>Langs</title>

          <!-- {% if session.get('lang') == null %}
            <script type="text/javascript">
              if(geoplugin_countryCode() == 'BR')
              {
                window.location="language=pt";
              }
              else
                window.location="/en/";
            </script>
          {% else %}

          {% endif %} -->

        {% endblock %}
    </head>
    <body>
      {% block content %}
        {{ content() }}
      {% endblock %}
    </body>
</html>
