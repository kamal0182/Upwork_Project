<?php
require_once __DIR__ . "/../vendor/autoload.php";
// use app\Controller\SiteController;
// include_once "../Conroller/SiteController.php";

use app\Controller\Aadoui;
use app\Controller\AdminController;
use app\Controller\AuthController;
use app\Controller\CategorieController;
use app\Controller\ClientController;
use app\Controller\OffreController;
use app\Controller\SiteController;
use app\Controller\TagController;
use app\Core\application;
use app\Models\OffreModel;

session_start();
$app = new Application(dirname(__DIR__));
// $app->router->get('',[SiteController::class,"AdminDashboard"]);
$app->router->get('/contact',[SiteController::class,"ClientDashboard"]);
$app->router->post('/contact',[OffreController::class,"create"]);
$app->router->get('/contact/delete',[OffreController::class,"DeleteOffre"]);
$app->router->get('/register',[AuthController::class,"register"]);
$app->router->post('/register',[AuthController::class,"register"]);
$app->router->get('/test',[SiteController::class,"test"]);
$app->router->get('/',[AuthController::class,"login"]);
$app->router->post('/',[AuthController::class,"login"]);
$app->router->get('/offres',[OffreController::class,"viewsOffres"]);
$app->router->get('/categories',[CategorieController::class,"renderCategories"]);
$app->router->post('/categories',[CategorieController::class,"create"]);

$app->router->get('/Tags',[TagController::class,"showTags"]);
$app->router->get('/offres',[OffreController::class,"showNonValideOffres"]);
$app->router->post('/offres',[AdminController::class,"setStatusValue"]);
// $app->router->get('/Tags',[TagController::class,"create"]);
$app->router->post('/Tags',[TagController::class,"create"]);
$app->run();
?>
