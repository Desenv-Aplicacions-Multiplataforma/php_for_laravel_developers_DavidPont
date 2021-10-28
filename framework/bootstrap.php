<?php


use Dotenv\Dotenv;
use Framework\App;
use Framework\Database\Conection;
use Framework\Database\Database;
use Framework\Route;


$routes=require 'routes.php';

$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

$app = new App();

$app->bind('config', require 'config.php');

App::bind('database', new Database(
    Conection::make(App::get('config')['database'])
));

App::bind('router', (new Route())->define($routes));
