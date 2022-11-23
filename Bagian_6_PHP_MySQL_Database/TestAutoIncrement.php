<?php 
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('muslim@gmail.com', 'hello world')");
$id = $connection->lastInsertId();

var_dump($id);

$connection = null;

?>