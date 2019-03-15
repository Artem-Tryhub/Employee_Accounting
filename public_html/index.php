<?php
/*
 * Front controller
 */

// Errors views
ini_set('display_errors', 'on');
error_reporting(E_ALL);

// Definition of common constants
define('ROOT' , dirname(__FILE__));

// Require Autoload file
require_once(ROOT . '/components/Autoload.php');

// Call router
$router = new Router();
$router->run();

