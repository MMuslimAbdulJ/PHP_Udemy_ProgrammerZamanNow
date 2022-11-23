<?php

namespace Config {
use PDO;
    class Database
    {
        public static function getConnection(): PDO
        {
            $host = "localhost";
            $port = 3306;
            $database = "belajar_php_todolist";
            $username = "mmuslimabdulj";
            $password = "Babang_030";

            return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        }
    }
}
