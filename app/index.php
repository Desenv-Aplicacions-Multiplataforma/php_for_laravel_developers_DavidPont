<?php

use Framework\App;
use Framework\Database\Database;

// POO -> OPP

//WISHFULL PROGRAMING

$tasks = App::get('database')->selectAll('tasks');

//$database = new Database(App::get('config')['database']);
//$tasks = Database::selectAll('tasks');
//$tasks = Task::selectAll('tasks'); -> versio de laravel eloquent


$greeting= greet();

