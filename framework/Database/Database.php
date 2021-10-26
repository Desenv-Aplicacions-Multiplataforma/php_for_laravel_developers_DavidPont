<?php

namespace Framework\Database;

use App\Models\Task;
use PDO;




class Database
{
    public $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->conection = new Conection($config);
    }


    function selectAll($table) {
        $dbh = $this->conection->conectDB($this->config);
        $statement = $dbh->prepare("SELECT * FROM $table;");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, Task::class);
    }



    function insert() {
        // TODO
    }
}