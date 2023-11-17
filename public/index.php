<?php

//loads all the classes that are required by the application. 
//this ensures that all classes can be easily located and used throughout the application.
require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

//the application class is created by this line
$app = new Application(dirname(__DIR__));


$app->router->get('/home', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
//finally, the application is run by calling the run() method on the application instance $app->run();
//this starts the application and ensures that incoming requests are correctly routed to the appropriate controller.
$app->run();
