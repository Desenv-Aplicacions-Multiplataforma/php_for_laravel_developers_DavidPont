<?php

use Framework\Database\Database;

require 'app/helpers.php';

// POO -> OPP

//WISHFULL PROGRAMING

$database = new Database($app->get('config'));
$tasks=$database->selectAll('tasks');

//$tasks = Database::selectAll('tasks');
//$tasks = Task::selectAll('tasks'); -> versio de laravel eloquent


$greeting= greet();

