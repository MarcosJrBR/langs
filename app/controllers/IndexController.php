<?php
use Phalcon\Translate\Adapter\NativeArray;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->name = 'MarcosJr';
        $this->view->t    = $this->getTranslation();
        // $this->view->lang = $this->request->getBestLanguage();
        //$this->view->lang = $language;
    }

    public function changeLangAction()
    {
        $new_lang = $this->request->get('lang');

        $this->session->remove('lang');
        $this->session->set('lang', $new_lang);

        $this->response->redirect('');
    }
}
