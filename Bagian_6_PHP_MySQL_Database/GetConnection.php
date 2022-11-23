<?php 

function getConnection() : PDO {
    $host = "localhost";
    $port = 3306;
    $database = "belajar_php_database";
    $username = "mmuslimabdulj";
    $password = "Babang_030";
    
    return new PDO("mysql:hostname=$host:$port;dbname=$database", $username, $password);
}
