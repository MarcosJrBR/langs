
  <h1>Change Lang</h1>
    <?php echo $this->tag->linkTo(array('index/changeLang?lang=en', 'Inglês')); ?> / <?php echo $this->tag->linkTo(array('index/changeLang?lang=pt-BR', 'Português Brasil')); ?>
    <hr>
    Olá <?php echo constant('welcome'); ?> <?php echo $name; ?>
    <hr>
    Linguagem escolhida é: <?php echo $lang; ?>
    <hr>
    Vinda do Translate: <?php echo $t->_('hi'); ?><br/>
    Já vou (<?php echo $t->_('bye'); ?>)
    <hr>
    <h3>Session</h3>
    <strong><?php echo $session; ?></strong>

