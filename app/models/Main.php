<?php

namespace app\models;


use RedBeanPHP\R;
use wfm\Model;

class Main extends Model
{
    public function getNames() : array
    {
        return R::findAll('name');
    }

}