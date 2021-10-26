<?php

use Framework\App;
use Framework\Database\Conection;
use Framework\Database\Database;

$app = new App();

$app->bind('config', require 'config.php');

App::bind('database', new Database(
    Conection::make(App::get('config')['database'])
));