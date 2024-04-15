<?php 

use Core\Router;
use App\Controllers\MapsController;
use App\Controllers\LoginController;
use App\Controllers\NewTrackController;
use App\Controllers\RegisterController;
use App\Controllers\DashboardController;

$router = new Router();

$router->addRoute('/Project/Kalimdor', DashboardController::class, 'showKalimdor', 'GET');
$router->addRoute('/Project/Outland', DashboardController::class, 'showOutland', 'GET');
$router->addRoute('/Project/EasternKingdoms', DashboardController::class, 'showEasterK', 'GET');
$router->addRoute('/Project/Northrend', DashboardController::class, 'showNorthrend', 'GET');
$router->addRoute('/Project/delete', DashboardController::class, 'delete', 'POST');



$router->addRoute('/Project/login', LoginController::class, 'show', 'GET');
$router->addRoute('/Project/login', LoginController::class, 'show', 'POST');
$router->addRoute('/Project/login', LoginController::class, 'create', 'POST');
$router->addRoute('/Project/logout', LoginController::class, 'logout', 'GET');


$router->addRoute('/Project/register', RegisterController::class, 'show', 'GET');
$router->addRoute('/Project/register', RegisterController::class, 'show', 'POST');
$router->addRoute('/Project/register', RegisterController::class, 'create', 'POST');

$router->addRoute('/Project/maps', MapsController::class, 'show', 'GET');
$router->addRoute('/Project/maps', MapsController::class, 'show', 'POST');

$router->addRoute('/Project/new-track', NewTrackController::class, 'show', 'GET');
$router->addRoute('/Project/new-track', NewTrackController::class, 'create', 'POST');





$router->run();