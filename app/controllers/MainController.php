<?php

namespace app\controllers;


use wfm\Controller;

class MainController extends Controller
{



    public function indexAction()
    {

        $name = \R::findAll('name');
        debug($name);
       $this->setMeta('Главная страница', 'Desc', 'keywords');
    }

}