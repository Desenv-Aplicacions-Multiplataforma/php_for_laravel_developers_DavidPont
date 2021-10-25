<?php
namespace Framework\Database;
use PDO;

class Conection
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    function conectDB() {  // Dependency Injection
        try {
            return new PDO(
                $this->config['database']['databasetype'] . ':host=' . $this->config['database']['host'] . ';dbname=' . $this->config['database']['name'],
                $this->config['database']['user'],
                $this->config['database']['password']);
        } catch (\Exception $e) {
            echo 'Error de connexió a la base de dades';
        }
    }
}