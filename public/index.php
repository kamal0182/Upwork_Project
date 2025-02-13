<?php
require_once __DIR__ . "/../vendor/autoload.php";
// use app\Controller\SiteController;
// include_once "../Conroller/SiteController.php";

use app\Controller\Aadoui;
use app\Controller\AuthController;
<<<<<<< HEAD
use app\Controller\ClientController;
=======
>>>>>>> ff45fba1327a113e160bb708362fdadc15780a3a
use app\Controller\OffreController;
use app\Controller\SiteController;
use app\Core\application;   
session_start();
$app = new Application(dirname(__DIR__));
$app->router->get('/',[SiteController::class,"AdminDashboard"]);
$app->router->get('/contact',[SiteController::class,"ClientDashboard"]);
$app->router->post('/contact',[OffreController::class,"create"]);
$app->router->get('/contact/delete',[OffreController::class,"DeleteOffre"]);
$app->router->get('/register',[AuthController::class,"register"]);
$app->router->post('/register',[AuthController::class,"register"]);
$app->router->get('/test',[SiteController::class,"test"]);
$app->router->get('/Login',[AuthController::class,"login"]);
$app->router->post('/Login',[AuthController::class,"login"]);
<<<<<<< HEAD

=======
$app->router->get('/offres',[OffreController::class,"viewsOffres"]);
>>>>>>> ff45fba1327a113e160bb708362fdadc15780a3a

$app->run();
?>
