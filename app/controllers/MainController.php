<?php

namespace app\controllers;


use app\models\Main;
use RedBeanPHP\R;
use wfm\Controller;
/** @property Main $model*/
class MainController extends Controller
{



    public function indexAction()
    {

        $names = $this->model->getNames();

       $this->setMeta('Главная страница', 'Desc', 'keywords');
       $this->set(compact('names'));
    }

}