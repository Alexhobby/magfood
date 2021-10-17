<?php

// Front controller

// 1. Options(hi level)

ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Link system files

define('ROOT', dirname(__FILE__));
require_once(ROOT . ('/components/Router.php'));
// 3. DB connecting

// 4. Call Router

$router = new Router();
$router->run();
