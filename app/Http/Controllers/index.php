<?php

use Framework\App;

// POO -> OPP

//WISHFULL PROGRAMING
$tasks = App::get('database')->selectAll('tasks');

//$database = new Database(App::get('config')['database']);
//$tasks = Database::selectAll('tasks');
//$tasks = Task::selectAll('tasks'); -> versio de laravel eloquent


//$greeting= greet();
require '../resources/views/index.blade.php';
