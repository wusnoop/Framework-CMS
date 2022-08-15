<?php

namespace wfm;

class App
{
    public static $app;

    public function __construct()
    {
        $query = trim(urldecode($_SERVER['QUERY_STRING']), '/');
        new ErrorHandler();
        self::$app = Registry::getInstance();
        $this->getParams();
        Router::dispatch($query);
    }
    protected function getParams(){
        $param = require_once CONFIG . '/params.php';
        if (!empty($param)){
            foreach ($param as $k=>$v){
                self::$app->setProperty($k,$v);
            }
        }
    }

}