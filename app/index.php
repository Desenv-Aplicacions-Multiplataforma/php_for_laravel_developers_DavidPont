<?php

require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';


$tasks = fetchAllTasks(conectDB($config));


$greeting= greet();

