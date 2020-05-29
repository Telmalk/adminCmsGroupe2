<?php


namespace Controller;


use Model\CoucouModel;
use View\CoucouView;
use View\PageView;

class CoucouController
{
    public function getHelloWord() {
        $model = new CoucouModel();
        $view = new CoucouView();
        $word = $model->getWord();
        $view->index($word);
    }

    public function getCoucou() {
        $model = new CoucouModel();
        $view = new PageView();
        $word = $model->getWord2();
        $view->form();
    }

}