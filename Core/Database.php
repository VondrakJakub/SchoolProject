<?php

namespace Core;

use mysqli;


class Database
{
    protected $connection;

    public function __construct()
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "project";


        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        
        $this->connection = $connection;
    }

    public function sql(string $sql)
    {
        $result  = $this->connection->query($sql);

        if(strpos($sql, "SELECT") !== false){
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
}