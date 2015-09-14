<?php

use Phalcon\Mvc\Controller;
use Phalcon\Translate\Adapter\NativeArray;
//require_once '../var/languages/pt_BR.php';

class ControllerBase extends Controller
{

    protected function getLang()
    {
      if (!empty($this->session->get('lang')))
      {
          $language = $this->session->get('lang');
      }
      else
      {
          $language = $this->request->getBestLanguage();
          $this->session->set('lang', $language);
      }
      return $language;
    }

    protected function getTranslation()
    {
      $language = $this->getLang();

      $path = __DIR__ . '/../messages/' .$language. '.php';
      //require_once __DIR__ . '/../messages/pt-BR.php';

      if (file_exists($path))
      {
          require_once $path;
      }
      else
      {
          //require_once __DIR__ . '/../messages/pt-BR.php';
      }

      return new NativeArray(
        array(
            'content' =>  $messages,
      ));
    }

    public function initialize()
    {
      $this->view->lang     = $this->getLang();
      $this->view->session  = $this->session->get('lang');
      //$this->getTranslation();
      //require_once __DIR__ . '/../var/languages/pt_BR.php';



      // $lang = $this->dispatcher->getParam('language');
      // //$q  = $this->dispatcher->getParam('slug');
      //
      // if (!empty($lang)) {
      //   $this->session->set('lang', $lang);
      // }


      //require ('var/languages/pt_BR.php');
      //require_once '../var/languages/pt_BR.php';
      //define('welcome', 'Bem Vindo');
      //require ROOT_PATH . '/app/var/languages/pt_BR.php';

      // $messages = array(
      //     'text_1'  =>  'Oi Bem Vindo ao nosso site',
      //     'text_2'  =>  'Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.',
      //     'text_3'  =>  '',
      //     'text_4'  =>  '',
      // );
    }



}
