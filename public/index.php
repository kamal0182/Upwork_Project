<?php

require_once __DIR__ . "/../vendor/autoload.php";
// use app\Controller\SiteController;
// include_once "../Conroller/SiteController.php";

use app\Controller\Aadoui;
use app\Controller\AuthController;
use app\Controller\SiteController;
use app\Core\application;   
$app = new Application(dirname(__DIR__));
$app->router->get('/',[SiteController::class,"home"]);
$app->router->get('/contact',[SiteController::class,"contact"]);
$app->router->post('/contact',[SiteController::class,"handleContact"]);
$app->router->get('/register',[AuthController::class,"register"]);
$app->router->post('/register',[AuthController::class,"register"]);

// $app->router->post('/register',[AuthController::class,"register"]);
$app->router->get('/Login',[AuthController::class,"login"]);

$app->run();
?>
