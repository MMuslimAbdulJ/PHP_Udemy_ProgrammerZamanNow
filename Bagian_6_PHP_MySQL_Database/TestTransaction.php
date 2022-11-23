<?php 
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();
$connection->beginTransaction();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('muslim@gmail.com', 'hello world')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('muslim@gmail.com', 'hello world')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('muslim@gmail.com', 'hello world')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('muslim@gmail.com', 'hello world')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('muslim@gmail.com', 'hello world')");

$connection->commit();

$connection = null;

?>