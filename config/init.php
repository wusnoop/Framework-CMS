<?php

const DEBUG = 0; //1 режим разработки , 0 режим продакшн
define("ROOT", dirname(__DIR__));
const WWW = ROOT . '/public';
const APP = ROOT . '/app';
const CORE = ROOT . '/vendor/wfm';
const HELPERS = ROOT . '/vendor/wfm/helpers';
const CACHE = ROOT . '/temp/cache';
const LOGS = ROOT . '/temp/logs';
const CONFIG = ROOT . '/config';
const LAYOUT = ROOT . 'shop';
const PATH = ROOT . 'https://shop';
const ADMIN = ROOT . 'https://shop/admin';
const NO_IMAGE = ROOT . 'uploads/no_image.jpg';


require_once ROOT . '/vendor/autoload.php';
