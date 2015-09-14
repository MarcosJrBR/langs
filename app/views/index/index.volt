{% block content %}
  <h1>Change Lang</h1>
    {{ link_to('index/changeLang?lang=en', 'Inglês') }} / {{ link_to('index/changeLang?lang=pt-BR', 'Português Brasil') }}
    <hr>
    Olá {{ constant('welcome') }} {{ name }}
    <hr>
    Linguagem escolhida é: {{ lang }}
    <hr>
    Vinda do Translate: {{ t._('hi') }}<br/>
    Já vou ({{ t._('bye') }})
    <hr>
    <h3>Session Var 2</h3>
    <strong>{{ session }}</strong>
    <hr>
    Alterei para testes no GIT mas deve voltar(editado)
{% endblock %}
