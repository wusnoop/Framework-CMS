<?php
if (PHP_MAJOR_VERSION <8 ){
    die('ERROR Need PHP ver.8 or higher');
}

require_once dirname(__DIR__). '/config/init.php';

new \wfm\App();

var_dump(\wfm\App::$app->getProperties());