<?php

require 'app/helpers.php';
require 'app/Task.php';



//$task = new Task( 1,'comprar pa','a la panaderia',0);
//var_dump($task);
$user='debian-sys-maint';
$pass='J2jp8UGSJRciPaXI';

try{
$dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
} catch (\Exception $e){
    echo 'Error de conexió a la base de dades';
}

$statement=$dbh->prepare('SELECT * FROM task;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

//var_dump($tasks);

$greeting= greet();

//QUERY STRING
//var_dump ($_GET['name']);
//$name='David';

//$greeting = "Hola $name!";

//$greeting = 'Hola '.$_GET['name'].' '.$_GET['surname'].'!';
