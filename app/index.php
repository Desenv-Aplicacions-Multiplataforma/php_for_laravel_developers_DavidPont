<?php

require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';


$dbh = conectDB($config);

$statement= $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');

$greeting= greet();

