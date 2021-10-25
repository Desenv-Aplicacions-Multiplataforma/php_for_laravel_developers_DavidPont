<?php

use Framework\Database\Database;

require 'config.php';

require 'app/helpers.php';

require 'app/Models/Task.php';

require 'framework/Database/Database.php';

require 'framework/Database/Conection.php';


// POO -> OPP


//WISHFULL PROGRAMING

$database = new Database($config);
$tasks=$database->selectAll('tasks');

//$tasks = Database::selectAll('tasks');
//$tasks = Task::selectAll('tasks'); -> versio de laravel eloquent


$greeting= greet();

